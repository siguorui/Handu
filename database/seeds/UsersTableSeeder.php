<?php

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
<<<<<<< HEAD
        //
        $data = [];
        for($i = 0;$i<1000;$i++)
        {
        	$tmp['name'] = str_random(6);
        	$tmp['password'] = Crypt::encrypt('123');
        	$tmp['email'] = str_random(6).'@163.com';
        	$tmp['pic'] = '/uploads/imgs/20161211/default.jpg';
=======
<<<<<<< HEAD
        //
        $data = [];
        for($i = 0;$i <100;$i++)
        {
        	$tmp['name'] = str_random(5);
        	$tmp['password'] = Crypt::encrypt('123123');
        	$tmp['email'] = str_random(5).'@163.com';
        	$tmp['pic'] = '/default.jpg';
=======
        $data = [];
        for($i=0;$i<1000;$i++)
        {
        	$tmp['name'] = str_random(5);
        	$tmp['password'] = Crypt::encrypt('123');
        	$tmp['email'] = str_random(5).'@163.com';
        	$tmp['pic'] = '/uploads/imgs/20161211/default.jpg';
>>>>>>> origin/master
>>>>>>> origin/master
        	$time = time();
        	$tmp['remember_token'] = str_random(50);
        	$tmp['add_time'] = $time;
        	$tmp['update_time'] = $time;
        	$data[] = $tmp;
        }
<<<<<<< HEAD
        DB::table('users') -> insert($data);
=======
<<<<<<< HEAD
        DB::table('users') -> insert($data);
=======
        DB::table('users')->insert($data);
>>>>>>> origin/master
>>>>>>> origin/master
    }
}
