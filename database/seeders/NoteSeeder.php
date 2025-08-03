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
                'is_sent' => false,
                'send_date' => now()->addWeek(),
            ],
            ['user_id' => 1,
                'title' => 'Chores',
                'body' => 'I am about to do a lot of chores',
                'parent_id' => null,
                'is_sent' => false,
                'send_date' => now()->addWeek(),

            ],

            ['user_id' => 2,
                'title' => null,
                'body' => 'ok will buy them',
                'parent_id' => 1,
                'is_sent' => true,
                'send_date' => now(),

            ],
            ['user_id' => 3,
                'title' => null,
                'body' => 'You always forget these',
                'parent_id' => 2,
                'is_sent' => true,
                'send_date' => now(),


            ],
            ['user_id' => 3,
                'title' => null,
                'body' => "Don't you want milk",
                'parent_id' => 1,
                'is_sent' => true,
                'send_date' => now(),


            ]
        ];
        Note::insert($notes);
    }
}
