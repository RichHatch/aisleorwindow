<?php

lass UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('user')->delete();

        User::create(array(
            'first_name' => 'Lloyd',
            'last_name' => 'Christmas',
            'email' => 'test@example.com',
            'confirmation_code' => 'ME44QC',
            'flight_number' => '4738'
        ));
    }
}
