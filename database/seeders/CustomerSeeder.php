<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'name' => "Olivia + John",
                'location' => "Enchanted Kingdom",
                'planner' => "Dia Leocadio",
                'thumbnail' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1595521830354-JY09UM15LD7ROXCZCD7F/610_0067.jpg?format=500w"
            ],
            [
                'name' => "Liz + Thomas",
                'location' => "Manila Cathedral",
                'planner' => "Stephen Pagorogon",
                'thumbnail' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1579114748137-QU6U7GJJSSMCFQOAP7S8/TerrainweddingbyPeachPlumPearPhoto_075.jpg"
            ],
            [
                'name' => "Becca + Andrew",
                'location' => "Intramuros",
                'planner' => "Angelica Arcena",
                'thumbnail' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556746684806-5DACSW12PMVQD3X556TG/SneakPeek-071.jpg"
            ],
            [
                'name' => "Theresa + Jamil",
                'location' => "Quiapo Church",
                'planner' => "Daniel Guevara",
                'thumbnail' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1587663636312-U5SNA4F385ZWLWLR2GCA/2019-12-28+Glenn-Zipf+Wedding-0477.JPG"
            ],
            [
                'name' => "Megan + Jake",
                'location' => "Our Lady of Remedies Parish",
                'planner' => "Elnie Ebasan",
                'thumbnail' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562773710566-VMOLY4NSBXLFPDN155M2/chelsea-monte-330.jpg"
            ],
            [
                'name' => "Hannah + Carson",
                'location' => "San Agustin Church",
                'planner' => "Angelica Arcena",
                'thumbnail' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1562768259934-51VOTWM1UWJ1Y77TJI64/sarah-sean-190.jpg"
            ],
            [
                'name' => "Kayleen + Tristan",
                'location' => "San Vicente de Paul Parish Church",
                'planner' => "Stephen Pagorogon",
                'thumbnail' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556553431130-ZRS3F3CLWWBQUZTQZNON/Murray_Wedding_488.jpg"
            ],
            [
                'name' => "Nina + Zach",
                'location' => "Minor Basilica of San Sebastian",
                'planner' => "Mika Ela",
                'thumbnail' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1555089981028-LXFVFOZBP9WSYJWU6I53/chloe-jimmy--142.jpg"
            ],
            [
                'name' => "Jess + Jordan",
                'location' => "Binondo Church",
                'planner' => "Gene Pala",
                'thumbnail' => "https://images.squarespace-cdn.com/content/v1/54b5d529e4b0a17414a81219/1556556489912-9U3RGTFTOVPMQFWPBU35/SneakPeek-174.jpg"
            ],

            ]);
    }
}
