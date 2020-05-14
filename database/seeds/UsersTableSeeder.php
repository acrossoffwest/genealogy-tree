<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\User::query()->create([
            'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'gender_id' => 1,
            'nickname' => 'genealogy',
            'name' => 'Admin',
            'email' => 'admin@genealogy.localhost',
            'password' => Hash::make('password1234'),
        ]);
        $user->manager_id = $user->id;
        $user->save();
    }
}
