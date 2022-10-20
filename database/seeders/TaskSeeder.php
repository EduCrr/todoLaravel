<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'title' => 'teste22',
            'descripiton' => "ff0000",
            'due_data' => '2022-12-12 00:00:00',
            'user_id' => 1,
            'category_id' => 1
        ]);
    }
}
