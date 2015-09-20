<?php

use Carbon\Carbon;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker            = Faker::create();
        $mike_wbid       = str_random(16);
        $duncan_wbid      = str_random(16);
        $mike_updated_at  = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
        $mike_created_at  = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $mike_updated_at);
        $duncan_updated_at = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
        $duncan_created_at = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $duncan_updated_at);

        // Mike's account
        User::create([
            'name'                  => 'Michael Norris',
            'dob'                   => '1988-08-17',
            'email'                 => 'mstnorris@gmail.com',
            'username'              => 'mstnorris',
            'password'              => 'password',
            'created_at'            => Carbon::now(),
            'updated_at'            => Carbon::now()
        ]);

        // Duncan's account
        User::create([
            'wbid'                 => $duncan_wbid,
            'name'                  => 'Duncan',
            'dob'                   => '1990-04-18',
            'email'                 => 'duncan.ogle@gmail.com',
            'username'              => 'dao12',
            'password'              => 'password',
            'key'                   => str_random(11),
            'confirmed'             => 1,
            'created_at'            => $duncan_created_at,
            'updated_at'            => $duncan_updated_at
        ]);

        // Demo account (public)
        $demo_wbid      = str_random(16);
        $demo_updated_at  = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
        $demo_created_at  = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $demo_updated_at);
        User::create([
            'wbid'                 => $demo_wbid,
            'name'                  => 'Demo',
            'dob'                   => '1990-01-01',
            'email'                 => 'demo@example.com',
            'username'              => 'demo',
            'password'              => 'password',
            'key'                   => str_random(11),
            'confirmed'             => 1,
            'created_at'            => $demo_created_at,
            'updated_at'            => $demo_updated_at
        ]);

         //create 20 users
        foreach (range(1, 20) as $index) {
            $user_wbid  = str_random(16);
            $user_updated_at = $faker->dateTimeBetween($startDate = '-6 months', $endDate = 'now');
            $user_created_at = $faker->dateTimeBetween($startDate = '-2 years', $endDate = $user_updated_at);
            $user_name = $faker->firstName;
            $user_username = strtolower($user_name . $faker->lastName);
            $user_email = $user_username . $faker->companyEmail;
            $user_dob = $faker->dateTimeBetween($startDate = '-25 years', $endDate = '-18 years');
            User::create([
                'wbid'      => $user_wbid,
                'name'       => $user_name,
                'dob'        => $user_dob,
                'email'      => $user_email,
                'username'   => $user_username,
                'password'   => 'password',
                'key'        => str_random(11),
                'confirmed'  => $faker->boolean(),
                'created_at' => $user_created_at,
                'updated_at' => $user_updated_at
            ]);
        }
    }
}