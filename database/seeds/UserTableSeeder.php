<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::where('email', 'admin@admin.com')->first();

        if (!$user) {
            User::create([
                'name' => 'أدمين',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password')
            ]);
        }
    }
}
