<?php

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\QueryException;
use App\User;

class ConstantsTableSeeder extends Seeder
{
    /**
     *
     */
    public function run()
    {
        $faker = Faker::create('en_US');

        /*
         * Base User Accounts
         */

        // Mike's account
        $michael = User::create([
            'name'       => 'Michael Norris',
            'email'      => 'mstnorris@gmail.com',
            'password'   => bcrypt('1'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        factory(\App\Ingredient::class, 50)->create();

    }

}