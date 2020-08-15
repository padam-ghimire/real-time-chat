<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        factory(User::class)->create(
            [
            'email'=>'padamghimire75@gmail.com',
            'name'=>'Padam Ghimire'
             ]
        );

        factory(User::class)->create(
            [
            'email'=>'padamghimire2020@gmail.com',
            'name'=>'Niraj Ghimire'
             ]
        );

        factory(User::class)->create(
            [
            'email'=>'ramana@gmail.com',
            'name'=>'Raman Lamichanne'
             ]
        );
    }
}
