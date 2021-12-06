<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Admin Admin',
            'email' => 'admin@mail.ru'
        ]);

        Question::factory()->create([
            'user_id' => $user->id
        ])->each(function (Question $question) {
            Answer::factory(3)->create([
                'question_id' => $question->id
            ]);
        });
    }
}
