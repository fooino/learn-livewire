<?php

namespace Database\Seeders;

use App\Models\Greeting;
use Illuminate\Database\Seeder;

class GreetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Greeting::insert([
            [
                'name'  => 'hi'
            ],
            [
                'name'  => 'hello'
            ],
            [
                'name'  => 'hey'
            ],
            [
                'name'  => 'howdy'
            ],
        ]);
    }
}
