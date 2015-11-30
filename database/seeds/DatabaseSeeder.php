<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
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
        DB::statement('TRUNCATE `objective`');
        DB::statement('TRUNCATE `password_resets`');
        DB::statement('TRUNCATE `report`');
        DB::statement('TRUNCATE `report_cat`');
        DB::statement('TRUNCATE `report_category`');
        DB::statement('TRUNCATE `users`');
        DB::statement('TRUNCATE `user_password`');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');


        $faker = Faker\Factory::create();


        //max value for iterating. used when picking a random user id or something
        $maxid = 25;


        $us_state_abbrevs_names = array(
            'AL' => 'ALABAMA',
            'AK' => 'ALASKA',
            'AS' => 'AMERICAN SAMOA',
            'AZ' => 'ARIZONA',
            'AR' => 'ARKANSAS',
            'CA' => 'CALIFORNIA',
            'CO' => 'COLORADO',
            'CT' => 'CONNECTICUT',
            'DE' => 'DELAWARE',
            'DC' => 'DISTRICT OF COLUMBIA',
            'FM' => 'FEDERATED STATES OF MICRONESIA',
            'FL' => 'FLORIDA',
            'GA' => 'GEORGIA',
            'GU' => 'GUAM GU',
            'HI' => 'HAWAII',
            'ID' => 'IDAHO',
            'IL' => 'ILLINOIS',
            'IN' => 'INDIANA',
            'IA' => 'IOWA',
            'KS' => 'KANSAS',
            'KY' => 'KENTUCKY',
            'LA' => 'LOUISIANA',
            'ME' => 'MAINE',
            'MH' => 'MARSHALL ISLANDS',
            'MD' => 'MARYLAND',
            'MA' => 'MASSACHUSETTS',
            'MI' => 'MICHIGAN',
            'MN' => 'MINNESOTA',
            'MS' => 'MISSISSIPPI',
            'MO' => 'MISSOURI',
            'MT' => 'MONTANA',
            'NE' => 'NEBRASKA',
            'NV' => 'NEVADA',
            'NH' => 'NEW HAMPSHIRE',
            'NJ' => 'NEW JERSEY',
            'NM' => 'NEW MEXICO',
            'NY' => 'NEW YORK',
            'NC' => 'NORTH CAROLINA',
            'ND' => 'NORTH DAKOTA',
            'MP' => 'NORTHERN MARIANA ISLANDS',
            'OH' => 'OHIO',
            'OK' => 'OKLAHOMA',
            'OR' => 'OREGON',
            'PW' => 'PALAU',
            'PA' => 'PENNSYLVANIA',
            'PR' => 'PUERTO RICO',
            'RI' => 'RHODE ISLAND',
            'SC' => 'SOUTH CAROLINA',
            'SD' => 'SOUTH DAKOTA',
            'TN' => 'TENNESSEE',
            'TX' => 'TEXAS',
            'UT' => 'UTAH',
            'VT' => 'VERMONT',
            'VI' => 'VIRGIN ISLANDS',
            'VA' => 'VIRGINIA',
            'WA' => 'WASHINGTON',
            'WV' => 'WEST VIRGINIA',
            'WI' => 'WISCONSIN',
            'WY' => 'WYOMING',
            'AE' => 'ARMED FORCES AFRICA \ CANADA \ EUROPE \ MIDDLE EAST',
            'AA' => 'ARMED FORCES AMERICA (EXCEPT CANADA)',
            'AP' => 'ARMED FORCES PACIFIC'
        );

        DB::table('users')->insert([
            'id' => 69,
            'name' => 'travis',
            'email' => 'travis@britz.es',
            'password' => '$2y$10$Gq0cHJhMpMzoxA1ywb/.m.gryS1.1F4ACpipaSS8cSYE4V80GCrXG',
            'remember_token' => str_random(10),
            'created_at' => $faker->dateTime->format('Y-m-d H:i:s'),
            'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        // Add records
        for ($i = 1; $i < $maxid; $i++) {

            // Set some variables for this entry
            $email = $faker->unique()->email;
            $userId = $i + 100;
            $empId = $i;
            $superId = rand(1, $i);
            $jobId = $i + 200;
            $addressId = $i + 300;
            $catId = $i + 400;
            $contentId = $i + 500;
            $locationId = $i + 600;
            $meetingId = $i + 700;
            $objectiveId = $i + 800;
            $incidentId = $i + 900;
            $reportId = $i + 1000;

            DB::table('users')->insert([
                'id' => $userId,
                'name' => $faker->unique()->userName,
                'email' => $email,
                'password' => password_hash(str_random(10), PASSWORD_DEFAULT),
                'remember_token' => str_random(10),
                'created_at' => $faker->dateTime->format('Y-m-d H:i:s'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            ]);


            DB::table('password_resets')->insert([
                'email' => $email,
                'token' => str_random(10),
                'created_at' => $faker->dateTime->format('Y-m-d H:i:s'),
            ]);

            DB::table('user_password')->insert([
                'user_id' => $userId,
                'password' => password_hash(str_random(10), PASSWORD_DEFAULT),
                'created_at' => $faker->dateTime->format('Y-m-d H:i:s'),
            ]);

            DB::table('employee')->insert([
                'employee_id' => $empId,
                'supervisor_id' => $superId,
                'user_id' => $userId,
                'ssn' => rand(100000000, 999999999),
                'firstname' => $faker->unique()->firstName,
                'lastname' => $faker->unique()->lastName,
            ]);

            DB::table('job')->insert([
                'job_id' => $jobId,
                'job_description' => $faker->sentence,
                'job_title' => $faker->unique()->word,
            ]);

            DB::table('employee_job')->insert([
                'job_id' => $jobId,
                'employee_id' => $empId,
                'start_date' => $faker->dateTime->format('Y-m-d H:i:s'),
                    //'end_date' => mt_rand(0, 23) . ":" . str_pad(mt_rand(0, 59), 2, "0", STR_PAD_LEFT),
            ]);

            DB::table('employee_phone')->insert([
                'employee_id' => $empId,
                'phone_number' => $faker->phoneNumber,
                'phone_type' => $faker->randomElement(['Mobile', 'Landline']),
                'phone_category' => $faker->randomElement(['personal', 'work', 'business', 'fax']),
            ]);

            DB::table('address')->insert([
                'address_id' => $addressId,
                'address' => $faker->streetAddress,
                'city' => $faker->city,
                'state_code' => $state_code = $faker->stateAbbr,
                'state' => ucwords(strtolower($us_state_abbrevs_names[$state_code])),
                'zipcode' => $faker->postcode,
            ]);

            DB::table('employee_address')->insert([
                'address_id' => $addressId,
                'employee_id' => $empId,
                'type' => $faker->randomElement(['Home', 'Work']),
            ]);

            DB::table('content_cat')->insert([
                'cat_id' => $catId,
                'description' => $faker->sentence,
            ]);

            DB::table('content')->insert([
                'content_id' => $contentId,
                'cat_id' => $catId,
                'language' => $faker->languageCode,
                'title' => substr($foo = $faker->sentence(rand(3, 6)), 0, strlen($foo) - 1),
                'body' => $faker->realText(1000),
                'estimated_duration' => mt_rand(1, 100),
                'media_type' => $faker->randomElement(['video'/* ,'text','quiz','image','audio' */]),
                'created_at' => $faker->dateTime->format('Y-m-d H:i:s'),
                    //'updated_at' => mt_rand(0, 23) . ":" . str_pad(mt_rand(0, 59), 2, "0", STR_PAD_LEFT),
            ]);

            DB::table('employee_content')->insert([
                'content_id' => $contentId,
                'employee_id' => $empId,
                'due_date' => $faker->dateTime->format('Y-m-d H:i:s'),
                    //'completion_date' => mt_rand(0, 23) . ":" . str_pad(mt_rand(0, 59), 2, "0", STR_PAD_LEFT),
            ]);

            DB::table('location')->insert([
                //'location_id' => $locationId,
                'text' => $faker->sentence,
                'address_id' => $addressId,
            ]);

            DB::table('meeting')->insert([
                'meeting_id' => $meetingId,
                'start' => ($foo = rand(0, 1)) ? $faker->dateTime->format('Y-m-d H:i:s') : date('Y-m-d H:i:s', strtotime('+' . rand(1, 30) . ' days')),
                'end' => ($foo) ? $faker->dateTime->format('Y-m-d H:i:s') : null,
                'duration_estimate' => mt_rand(1, 100),
                //'location_id' => $locationId,
                'location' => $faker->address,
                'created_at' => $faker->dateTime->format('Y-m-d H:i:s'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            ]);

            DB::table('meeting_attendee')->insert([
                'meeting_id' => $meetingId,
                'employee_id' => $empId,
                'attended' => rand(0, 1),
            ]);

            DB::table('objective')->insert([
                'objective_id' => $objectiveId,
                'description' => $faker->sentence,
            ]);

            DB::table('meeting_objective')->insert([
                'objective_id' => $objectiveId,
                'meeting_id' => $meetingId,
                    //'completed_at' => mt_rand(0, 23) . ":" . str_pad(mt_rand(0, 59), 2, "0", STR_PAD_LEFT),
            ]);

            DB::table('meeting_cat')->insert([
                'cat_id' => $catId,
                'description' => $faker->sentence,
            ]);

            DB::table('meeting_category')->insert([
                'cat_id' => $catId,
                'meeting_id' => $meetingId,
            ]);

            DB::table('meeting_content')->insert([
                'meeting_id' => $meetingId,
                'content_id' => $contentId,
                    //'completed_at' => mt_rand(0, 23) . ":" . str_pad(mt_rand(0, 59), 2, "0", STR_PAD_LEFT),
            ]);

            DB::table('report_cat')->insert([
                'cat_id' => $catId,
                'description' => $faker->sentence,
            ]);

            DB::table('incident')->insert([
                'incident_id' => $incidentId,
                'created_at' => $faker->dateTime->format('Y-m-d H:i:s'),
                    //'updated_at' => mt_rand(0, 23) . ":" . str_pad(mt_rand(0, 59), 2, "0", STR_PAD_LEFT),
            ]);

            DB::table('report')->insert([
                'report_id' => $reportId,
                'incident_id' => $incidentId,
                'employee_id' => $empId,
                'author' => $empId,
                'text' => $faker->paragraph,
                'created_at' => $faker->dateTime->format('Y-m-d H:i:s'),
                    //'updated_at' => mt_rand(0, 23) . ":" . str_pad(mt_rand(0, 59), 2, "0", STR_PAD_LEFT),
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
                'description' => $faker->sentence,
            ]);

            DB::table('incident_category')->insert([
                'cat_id' => $catId,
                'incident_id' => $incidentId,
            ]);
        }
    }

}
