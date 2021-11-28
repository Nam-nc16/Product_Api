<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->where('email', '=', 'cahhnam@gmail.com');
        if ($user)
        {
            $user->delete();
        }

        User::create([
            'name' => 'admin',
            'email' =>'cahhnam@gmail.com',
            'image' =>'favicon.png',
            'password' => bcrypt('123123')
        ]);
    }
}
