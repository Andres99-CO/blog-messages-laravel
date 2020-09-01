<?php

use App\Models\Entry;
use App\User;
use Illuminate\Database\Seeder;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        
        $users->each(function($user) {
            factory(Entry::class, 2)->create([
                'user_id' => $user->id
            ]);
        });

    }
}
