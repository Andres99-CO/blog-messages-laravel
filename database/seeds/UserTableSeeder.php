<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juanito',
            'email' => 'juan@email.com',
            'password' => bcrypt('12345678')
        ]);

        factory(User::class, 10)->create();
    }
}
