<?php

/**
 * Created by PhpStorm.
 * User: estebanbautista
 * Date: 9/01/16
 * Time: 11:38 PM
 */
use TeachMe\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends BaseSeeder{

    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'first_name' => $faker->name,
            'email' => $faker->email,
            'password' => bcrypt('secret')
        ];
    }

    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }

    private function createAdmin()
    {
        User::create([
            'first_name' =>'Esteban',
            'email' =>'estebanbacl@gmail.com',
            'password' => bcrypt('admin')
        ]);
    }


}