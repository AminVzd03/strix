<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notes = [
            ['user_id' => 1,
                'title' => 'Shopping list',
                'body' => 'This is a shopping list',
                'parent_id' => null,

            ],
            ['user_id' => 2,
                'title' => null,
                'body' => 'ok will buy them',
                'parent_id' => 1,

            ],
            ['user_id' => 3,
                'title' => null,
                'body' => 'You always forget these',
                'parent_id' => 2,

            ],
            ['user_id' => 3,
                'title' => null,
                'body' => "Don't you want milk",
                'parent_id' => 1,

            ]
        ];
        Note::insert($notes);
    }
}
