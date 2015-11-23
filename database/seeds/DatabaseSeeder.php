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
		// Drop Tables (to start fresh)
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		DB::statement('TRUNCATE `address`');
		DB::statement('TRUNCATE `content_cat`');
		DB::statement('TRUNCATE `content`');
		DB::statement('TRUNCATE `employee`');
		DB::statement('TRUNCATE `employee_address`');
		DB::statement('TRUNCATE `employee_content`');
		DB::statement('TRUNCATE `employee_incident`');
		DB::statement('TRUNCATE `employee_job`');
		DB::statement('TRUNCATE `employee_phone`');
		DB::statement('TRUNCATE `incident`');
		DB::statement('TRUNCATE `incident_cat`');
		DB::statement('TRUNCATE `incident_category`');
		DB::statement('TRUNCATE `job`');
		DB::statement('TRUNCATE `location`');
		DB::statement('TRUNCATE `location`');
		DB::statement('TRUNCATE `meeting`');
		DB::statement('TRUNCATE `meeting_attendee`');
		DB::statement('TRUNCATE `meeting_cat`');
		DB::statement('TRUNCATE `meeting_category`');
		DB::statement('TRUNCATE `meeting_content`');
		DB::statement('TRUNCATE `meeting_objective`');
		DB::statement('TRUNCATE `migrations`');
		DB::statement('TRUNCATE `objective`');
		DB::statement('TRUNCATE `password_resets`');
		DB::statement('TRUNCATE `report`');
		DB::statement('TRUNCATE `report_cat`');
		DB::statement('TRUNCATE `report_category`');
		DB::statement('TRUNCATE `users`');
		DB::statement('TRUNCATE `user_password`');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');


		$faker = Faker\Factory::create();
		
		// Add records
		for ($x = 0; $x <25; $x++) {
			
			// Set some variables for this entry
			$email = $faker->unique()->email;
			$userId	= $faker->unique()->randomNumber;
			$empId = $faker->unique()->randomNumber;
			$superId = $faker->unique()->randomNumber;
			$ssn = str_random(11);
			$jobId = $faker->unique()->randomNumber;
			$addressId = $faker->unique()->randomNumber;
			$catId = $faker->unique()->randomNumber;
			$contentId = $faker->unique()->randomNumber;
			$locationId = $faker->unique()->randomNumber;
			$meetingId = $faker->unique()->randomNumber;
			$objectiveId = $faker->unique()->randomNumber;
			$incidentId = $faker->unique()->randomNumber;
			$reportId = $faker->unique()->randomNumber;
			
			DB::table('users')->insert([
			'id' => $userId,
            'name' => $faker->unique()->name,
			'email' => $email,
            'password' => 'password',
			'remember_token' => str_random(10),
			'created_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			'updated_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			
			DB::table('password_resets')->insert([
			'email' => $email,
            'token' => str_random(10),
			'created_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			DB::table('user_password')->insert([
			'user_id' => $userId,
            'password' => 'password',
			'created_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			DB::table('employee')->insert([
			'employee_id' => $empId,
			'supervisor_id' => $empId,
			'user_id' => $userId,
			'ssn' => $ssn,
			'firstname' => $faker->unique()->firstName,
			'lastname' => $faker->unique()->lastName,
			]);
			
			DB::table('job')->insert([
			'job_id' => $jobId,
            'job_description' => str_random(10),
            'job_title' => str_random(10),
			]);
			
			DB::table('employee_job')->insert([
			'job_id' => $jobId,
			'employee_id' => $empId,
            'start_date' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			'end_date' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			DB::table('employee_phone')->insert([
			'employee_id' => $empId,
			'phone_number' => $faker->phoneNumber,
            'phone_type' => 'Mobile',
            'phone_category' => 'Work',
			]);
			
			DB::table('address')->insert([
			'address_id' => $addressId,
            'address' => $faker->streetAddress,
            'city' => $faker->city,
			'state' => $faker->state,
            'state_code' => $faker->stateAbbr,
			'zipcode' =>  $faker->postcode,
			]);
			
			DB::table('employee_address')->insert([
			'address_id' => $addressId,
			'employee_id' => $empId,
            'type' => 'Home',
			]);
			
			DB::table('content_cat')->insert([
			'cat_id' => $catId, 
            'description' => str_random(10),
			]);
			
			DB::table('content')->insert([
			'content_id' => $contentId,
            'cat_id' => $catId,
            'language' => str_random(2),
			'media_url' => str_random(20),
			'estimated_duration' => mt_rand(1,100),
			'media_type' => str_random(10),
			'created_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			'updated_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			DB::table('employee_content')->insert([
			'content_id' => $contentId,
			'employee_id' => $empId,
            'due_date' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			'completion_date' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			DB::table('location')->insert([
			'location_id' => $locationId,
            'text' => str_random(10),
            'address_id' => $addressId,
			]);
			
			DB::table('meeting')->insert([
			'meeting_id' => $meetingId,
            'start' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			'end' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			'duration_estimate' => mt_rand(1,100),
            'location_id' => $locationId,
			'created_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			'updated_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			DB::table('meeting_attendee')->insert([
            'meeting_id' => $meetingId,
			'employee_id' => $empId,
			'attended' => $faker->randomNumber,
			]);
			
			DB::table('objective')->insert([
            'objective_id' => $objectiveId,
			'description' => str_random(10),
			]);
			
			DB::table('meeting_objective')->insert([
            'objective_id' => $objectiveId,
			'meeting_id' => $meetingId,
			'completed_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			DB::table('meeting_cat')->insert([
            'cat_id' => $catId,
			'description' => str_random(10),
			]);
			
			DB::table('meeting_category')->insert([
            'cat_id' => $catId,
			'meeting_id' => $meetingId,
			]);
			
			DB::table('meeting_content')->insert([
            'meeting_id' => $meetingId,
			'content_id' => $contentId,
			'completed_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			DB::table('report_cat')->insert([
            'cat_id' => $catId,
            'description' => str_random(10),
			]);
			
			DB::table('incident')->insert([
			'incident_id' => $incidentId,
            'created_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			'updated_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			DB::table('report')->insert([
			'report_id' => $reportId,
			'incident_id' => $incidentId,
            'author' => $empId,
            'text' => str_random(10),
			'created_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			'updated_at' => mt_rand(0,23).":".str_pad(mt_rand(0,59), 2, "0", STR_PAD_LEFT),
			]);
			
			DB::table('report_category')->insert([
            'report_id' => $reportId,
            'cat_id' => $catId,
			]);			
			
			DB::table('employee_incident')->insert([
            'employee_id' => $empId,
			'incident_id' => $incidentId,
			]);
			
			DB::table('incident_cat')->insert([
            'cat_id' => $catId,
			'description' => str_random(10),
			]);
			
			DB::table('incident_category')->insert([
			 'cat_id' => $catId,
			 'incident_id' => $incidentId,
			]);
		}
    }
}
