<?php

use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Lesson::class, 10)->create()->each(function ($ns) {
            $ns->save();
        });
        return $this->command->info('Lesson Table Seeded!');
    }
}
