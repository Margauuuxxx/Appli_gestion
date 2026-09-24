<?php

namespace App\Http\Controllers;

use App\Models\Depense;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GroupeController extends Controller
{
	public function home()
	{
		Carbon::setLocale('fr');
		$month = Carbon::now()->startOfMonth();

		return view('welcome', [
			'recentExpenses' => Depense::orderByDesc('spent_at')->orderByDesc('id')->limit(6)->get(),
			'categoryTotals' => $this->categoryTotals($month),
			'monthTotal' => Depense::whereBetween('spent_at', [$month, $month->copy()->endOfMonth()])->sum('amount'),
			'monthLabel' => $month->translatedFormat('F Y'),
		]);
	}

	public function bilan()
	{
		Carbon::setLocale('fr');
		$month = Carbon::now()->startOfMonth();
		$previousMonth = $month->copy()->subMonth();
		$monthTotal = Depense::whereBetween('spent_at', [$month, $month->copy()->endOfMonth()])->sum('amount');
		$previousTotal = Depense::whereBetween('spent_at', [$previousMonth, $previousMonth->copy()->endOfMonth()])->sum('amount');

		return view('bilan', [
			'categoryTotals' => $this->categoryTotals($month),
			'monthTotal' => $monthTotal,
			'previousTotal' => $previousTotal,
			'monthLabel' => $month->translatedFormat('F Y'),
			'previousMonthLabel' => $previousMonth->translatedFormat('F Y'),
			'difference' => $monthTotal - $previousTotal,
			'percentageChange' => $previousTotal > 0 ? (($monthTotal - $previousTotal) / $previousTotal) * 100 : null,
		]);
	}

	public function profile()
	{
		$user = [
			'name' => 'Alice',
			'firstname' => 'Alice',
			'email' => 'alice@budget.fr',
			'city' => 'Paris',
			'phone' => '+33 6 12 34 56 78',
			'status' => 'Compte principal',
			'member_since' => 'Janvier 2025',
		];

		return view('profil', ['user' => $user]);
	}

	public function create()
	{
		return view('depenses.create');
	}

	public function store(Request $request)
	{
		$validated = $request->validate([
			'category' => ['required', 'string', 'max:100'],
			'amount' => ['required', 'numeric', 'min:0.01'],
			'spent_at' => ['required', 'date'],
		]);

		$validated['label'] = $validated['category'];

		Depense::create($validated);

		return redirect()->route('home')->with('success', 'La dépense a bien été ajoutée.');
	}

	private function categoryTotals(Carbon $month)
	{
		return Depense::whereBetween('spent_at', [$month, $month->copy()->endOfMonth()])
			->selectRaw('category, SUM(amount) as total')
			->groupBy('category')
			->orderByDesc('total')
			->get();
	}
}
