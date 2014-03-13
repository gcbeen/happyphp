<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach(range(11, 15) as $index)
        {
			$user = User::create([
				'email' => "johngcb+{$index}@163.com",
				'password' => Hash::make('happyphp123456')
				]);
        }
    }

}
