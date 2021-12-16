<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@letsid.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('Rahasia1!21'),
            'is_admin' => true
        ]);
    }
}
