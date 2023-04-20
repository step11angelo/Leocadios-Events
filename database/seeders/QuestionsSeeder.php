<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            [
                'question' => "What event planning services do you offer?",
                'answer' => "Our team and I offer: 1. Full Wedding Planning 2. Partial Wedding Planning 3. Wedding Coordination/Wedding Day Management",
            ],
            [
                'question' => "Do you offer day-of wedding coordination?",
                'answer' =>  "Day-of coordination is a bit of a misnomer! Our coordination/management package starts at the 8-week mark, ensuring ample time to gather all pertinent information, prepare your full wedding day itinerary and task list, and learn the ins and outs of your entire day!",
            ],
            [
                'question' => "Do I pay vendors directly, or will you handle payment coordination?",
                'answer' =>  "You will pay vendors directly, but I will plug in all payment reminders into a shared calendar so you can follow along and prepare for all payments.",
            ],
            [
                'question' => "Will you arrange and manage meetings with my other vendors?",
                'answer' => "Yes, absolutely! We'll make sure that as many people as possible can attend all meetings so all vendors are on the same page",
            ],
            [
                'question' => "How many people from your team will be on-site during my event?",
                'answer' => "We will have between 2 and 4 people on-site for each event, depending on the size and scope of the event!",
            ],
            [
                'question' => "How would past clients describe working with you?",
                'answer' => "Our planning style is efficient and quick! Once decisions are made, I waste no time in implementing their decisions. I love to make the process as fun, loving, and seamless as possible. I love managing all aspects of your wedding day alongside you!",
            ]
        ]);
    }
}
