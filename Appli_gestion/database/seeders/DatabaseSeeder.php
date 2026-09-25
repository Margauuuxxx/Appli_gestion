<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'alice@budget.fr'],
            [
                'name' => 'Martin',
                'firstname' => 'Alice',
                'age' => 28,
                'address' => '12 rue des Lilas, 75011 Paris',
                'phone' => '+33 6 12 34 56 78',
                'password' => Hash::make('Budget2026!'),
            ]
        );
    }
}
