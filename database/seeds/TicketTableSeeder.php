<?php

use TeachMe\Entities\Tickets;

class TicketTableSeeder extends BaseSeeder{


    public function getModel()
    {
        return new Tickets();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'title' => $faker->sentence(),
            'status'=> $faker->randomElement(['open'],['open'],['closed']),
            'user_id'=> $this->getRandom('User')->id
            //'user_id'=> $this->createFrom('UserTableSeeder')->id
        ];
    }

}