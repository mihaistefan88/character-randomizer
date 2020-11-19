<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharRandomizerController extends Controller
{
    const CHARACTERISTICS = [
        'Race' => [
            'Human',
            'Elf',
            'Greenskin',
            'Dwarf',
            'Monster',
            'celestial',
        ],
        'Height' => [
            'Midget',
            'Short',
            'Normal',
            'Tall',
            'giant',
        ],
        'Build' => [
            'Skinny',
            'Athletic',
            'Normal',
            'Thick',
            'Fat',
            'bodybuilder',
        ],
        'Skin color' => [
            'Dark',
            'Coloured',
            'Tan',
            'White',
            'caucasian',
        ],
        'Hair type' => [
            'Straight',
            'Curly',
            'Ondulat',
            'braids',
        ],
        'Hair length' => [
            'shaved',
            'short',
            'shoulder',
            'medium',
            'long',
            'Extra long',
        ],
        'Hair color' => [
            'Black',
            'Brown',
            'Orange',
            'Blonde',
            'White',
            'Red',
            'Blue',
            'Green',
            'other',
        ],
        'Eye shape' => [
            'Weird',
            'Dull',
            'Round',
            'Smiley',
            'slanted',
        ],
        'Eye color' => [
            'White',
            'Blue',
            'Green',
            'Brown',
            'Black',
            'Red',
            'Gold',
            'other',
        ],
        'Clothing' => [
            'None',
            'Swimsuit',
            'Comfly',
            'Armor',
            'Uniform',
            'Casual',
            'Party',
            'official',
        ],
        'Mood' => [
            'Happy',
            'Sad',
            'Flirty',
            'Angry',
            'Raged',
            'Pouty',
            'Neutral',
            'Dazed',
        ]


    ];

    public function index(Request $request) {
        $result = false;
        if ($request->input('rand')) {
            foreach (self::CHARACTERISTICS as $type => $characteristics) {
                $rand = rand(0, count($characteristics) - 1);

                $result[$type] = $characteristics[$rand];
            }
        }

        return view('welcome')->with(['result' => $result]);
    }
}
