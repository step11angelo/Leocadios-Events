<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            [
                'image' => "https://randomuser.me/api/portraits/women/55.jpg",
                'name' => "Samira Liese",
                'title' => "Bride",
                'quote' => "Ani is super organized and energetic! She is there with you the entire day, from the start of the first girl's hair/makeup until the after party ends."
            ],
            [
                'image' => "https://randomuser.me/api/portraits/women/6.jpg",
                'name' => "Liboria Luna",
                'title' => "Bride",
                'quote' => "On May 13, 2022 we had the wedding of our dreams. If we rewind 9 months earlier, we were recently engaged and just booked our date with the wedding venue."
            ],
            [
                'image' => "https://randomuser.me/api/portraits/women/28.jpg",
                'name' => "Rébecca Teodora",
                'title' => "Bride",
                'quote' => "Ani was an absolute pleasure to work with. She was incredibly kind, warm, organized, on top of absolutely everything and just overall amazing."
            ],
            [
                'image' => "https://randomuser.me/api/portraits/women/66.jpg",
                'name' => "Anne Shoshannah",
                'title' => "Mother of the Bride",
                'quote' => "We could not have pulled off our daughter's wedding without Ani! From day one and for over a year, Ani provided us with unlimited ideas, guidance, support, and patience as we planned."
            ],
            [
                'image' => "https://randomuser.me/api/portraits/women/89.jpg",
                'name' => "Ezhil Valentina",
                'title' => "Bride",
                'quote' => "Ani served as our wedding coordinator for our August 2022 wedding at The Green Building and we could not be more grateful! She was absolutely amazing to work with!"
            ],
            [
                'image' => "https://randomuser.me/api/portraits/women/0.jpg",
                'name' => "Berith Diāna",
                'title' => "Bride",
                'quote' => "I do not know what I would have done without Ani. When I was planning my wedding, I truly did not think I needed a day of coordinator, but everyone I spoke to told me it was worth it."
            ],
            [
                'image' => "https://randomuser.me/api/portraits/women/48.jpg",
                'name' => "Namrata Tawnee",
                'title' => "Bride",
                'quote' => "Ani was a lifesaver! From our first conversation, we could tell she was efficient, detail-oriented, and incredibly invested in her clients."
            ],
            [
                'image' => "https://randomuser.me/api/portraits/women/19.jpg",
                'name' => "Palina Aysha",
                'title' => "Bride",
                'quote' => "I cannot put into words that gratitude I have for Clover Event Co! Kellie is a guardian angel sent from the wedding heavens."
            ],
            [
                'image' => "https://randomuser.me/api/portraits/women/77.jpg",
                'name' => "Betony Eudocia",
                'title' => "Bride",
                'quote' => "Clover was the glue that made this special day happen. I didn't have to worry about a thing on the wedding day and even leading up to the event."
            ],
            [
                'image' => "https://randomuser.me/api/portraits/women/11.jpg",
                'name' => "Micaela Breda",
                'title' => "Bride",
                'quote' => "Many couples might not think they need a wedding planner, however hiring Clover was perhaps some of the best money spent."
            ],
        ]);
    }
}
