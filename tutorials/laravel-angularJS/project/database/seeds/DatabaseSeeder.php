<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JokesTableSeeder::class);
        $this->command->info('Jokes table seeded.');
        $this->call(UsersTableSeeder::class);
        $this->command->info('Comments table seeded.');
    }
}
