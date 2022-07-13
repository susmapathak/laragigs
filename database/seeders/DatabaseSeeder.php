<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Listing::factory(5)->create();

        // Listing::create([
        //     'title' => 'Junior developer',
        //     'tags' => 'lavavel, javacsript',
        //     'company' => 'ABC',
        //     'location' => 'Sydney',
        //     'email' => 'susma@gmail.com',
        //     'website' => 'https://www.linkedin.com/feed/',
        //     'description' => 'Trying to access array offset on value of type null'

        // ]);

        // Listing::create([
        //     'title' => 'Laravel Developer',
        //     'tags' => 'laravel, vue, javascript',
        //     'company' => 'Wayne Enterprises',
        //     'location' => 'Gotham, NY',
        //     'email' => 'email3@email.com',
        //     'website' => 'https://www.wayneenterprises.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
        // ]);

    }
}
