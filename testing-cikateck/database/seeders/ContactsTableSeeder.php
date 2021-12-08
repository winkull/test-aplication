<?php

namespace Database\Seeders;

use App\Models\Contact;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::factory(10)->create();
    }
}
