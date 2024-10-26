<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Event::insert([
            [
                'title' => 'Music Festival',
                'description' => 'An exciting music festival with various bands performing.',
                'date' => Carbon::create('2024', '10', '15'),
                'location' => 'City Park',
                'category_id' => 1, // Assuming category_id 1 exists
            ],
            [
                'title' => 'Art Exhibition',
                'description' => 'A collection of modern art by various artists.',
                'date' => Carbon::create('2024', '11', '20'),
                'location' => 'Art Gallery',
                'category_id' => 2, // Assuming category_id 2 exists
            ],
            [
                'title' => 'Tech Conference',
                'description' => 'A tech conference focusing on the latest trends in software development.',
                'date' => Carbon::create('2025', '01', '12'),
                'location' => 'Convention Center',
                'category_id' => 3, // Assuming category_id 3 exists
            ],
            [
                'title' => 'Tech Conference',
                'description' => 'A tech conference focusing on the latest trends in software development.',
                'date' => Carbon::create('2025', '01', '12'),
                'location' => 'Convention Center',
                'category_id' => 2, // Assuming category_id 2 exists
            ],
            [
                'title' => 'Tech Conference',
                'description' => 'A tech conference focusing on the latest trends in software development.',
                'date' => Carbon::create('2025', '01', '12'),
                'location' => 'Convention Center',
                'category_id' => 3, // Assuming category_id 3 exists
            ],

        ]);

    }
}
