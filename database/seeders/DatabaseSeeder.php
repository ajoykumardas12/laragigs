<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@email.com',
            'password' => '123456'
        ]);

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'user_id' => $user->id,
            'tags' => 'Laravel, JavaScript',
            'company' => 'ACME Corp',
            'location' => 'London',
            'email' => 'contact@acme.com',
            'website' => 'https//:www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet. 
            Id sequi expedita hic explicabo quidem At quos 
            quisquam ut dolore itaque 33 ipsum maxime sit 
            minus placeat.'
        ]);

        Listing::create([
            'title' => 'Full Stack Developer',
            'user_id' => $user->id,
            'tags' => 'Laravel, React, API',
            'company' => 'Stark Industries',
            'location' => 'New York',
            'email' => 'contact@astarkindustries.com',
            'website' => 'https//:www.starkindustries.com',
            'description' => 'Lorem ipsum dolor sit amet. 
            Qui dignissimos perspiciatis qui dignissimos 
            repellendus qui iste explicabo. Sit magnam nobis 
            sed cupiditate saepe non adipisci nemo qui cupiditate'
        ]);
    }
}
