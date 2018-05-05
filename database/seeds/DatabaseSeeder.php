<?php

use Illuminate\Database\Seeder;
use App\Task;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('TaskSeeder');
        // $this->call(UsersTableSeeder::class);
    }
}

class TaskSeeder extends Seeder {

    public function run()
    {
        DB::table('tasks')->delete();

        Task::create([
            'title' => 'title 1',
            'body' => 'body 1',

        ]);

        Task::create([
            'title' => 'title 2',
            'body' => 'body 2',

        ]);

        Task::create([
            'title' => 'title 3',
            'body' => 'body 3',

        ]);
    }
}