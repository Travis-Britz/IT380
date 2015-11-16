<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		for ($x = 0; $x <50; $x++) {
			
			DB::table('address')->insert([
            'address' => str_random(10),
            'city' => str_random(10),
			'state' => str_random(10),
            'state_code' => str_random(2),
			'zipcode' =>  str_random(5),
			]);
			
			
			DB::table('content')->insert([
            'cat_id' => mt_rand(1,100),
            'language' => str_random(2),
			'media_url' => str_random(20),
			'estimated_duration' => mt_rand(1,100),
			'media_type' => str_random(10),
			'created_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			'updated_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			DB::table('content_cat')->insert([
            //'description' => str_random(10),
			]);
			
			DB::table('employee')->insert([
			//'user_id' => mt_rand(1,100),
			//'ssn' => str_random(11),
			'firstname' => str_random(10),
			'lastname' => str_random(10),
			]);
			
			DB::table('employee_address')->insert([
            //'type' => "home",
			]);

			
			DB::table('employee_content')->insert([
            //'due_date' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			//'completion_date' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			DB::table('employee_incident')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('employee_job')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('employee_phone')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('incident')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('incident_cat')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('incident_category')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('job')->insert([
            'job_description' => str_random(10),
            'job_title' => str_random(1),
			]);
			
			DB::table('location')->insert([
            'text' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('meeting')->insert([
            //'start' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			//'end' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			//'duration_estimate' => mt_rand(1,100),
            //'length' => str_random(1),
			]);
			
			DB::table('meeting_attendee')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('meeting_cat')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('meeting_category')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('meeting_content')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('meeting_objective')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('migrations')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('objective')->insert([
            'description' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('password_resets')->insert([
            //'token' => str_random(10),
			]);
			
			DB::table('report')->insert([
            //'author' => mt_rand(1,100),
            //'text' => str_random(10),
			]);
			
			DB::table('report_cat')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('report_category')->insert([
            //'name' => str_random(10),
            //'length' => str_random(1),
			]);
			
			DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
			'remember_token' => str_random(10),
			'created_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			'updated_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			
			DB::table('user_password')->insert([
            //'password' => bcrypt('secret'),
			//'created_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
		}
    }
}
