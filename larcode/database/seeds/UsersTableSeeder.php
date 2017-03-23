<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create admin
        $admin = new User();
        $admin->first_name = 'John';
        $admin->last_name = 'Doe';
        $admin->user_type = 'ADMIN';
        $admin->email = 'admin1@example.com';
        $admin->password = bcrypt('admin1');
        $admin->save();

        
        //create manager
        $manager = new User();
        $manager->first_name = 'Mary';
        $manager->last_name = 'Doe';
        $manager->user_type = 'MANAGER';
        $manager->email = 'manager@example.com';
        $manager->password = bcrypt('manager');
        $manager->save();


        //create advertiser
        $advertiser = new User();
        $advertiser->first_name = 'Paul';
        $advertiser->last_name = 'Doe';
        $advertiser->user_type = 'ADVERTISER';
        $advertiser->email = 'advertiser@example.com';
        $advertiser->password = bcrypt('advertiser');
        $advertiser->save();
        $advertiser->advertiser()->create([]);


        //create publisher
        $publisher = new User();
        $publisher->first_name = 'Jane';
        $publisher->last_name = 'Doe';
        $publisher->user_type = 'PUBLISHER';
        $publisher->email = 'publisher@example.com';
        $publisher->password = bcrypt('publisher');
        $publisher->save();
        $publisher->publisher()->create([]);


    }
}
