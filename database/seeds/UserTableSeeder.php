<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\User;
use TCG\Voyager\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();


        if (User::count() == 2) {
            // for($i = 0; $i < 100; $i++) {
            $role = Role::where('name', 'user')->firstOrFail();

            User::create([
                'name'           => $faker->name,
                'email'          => $faker->email,
                'password'       => bcrypt('secret'),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
        }
    }
}
