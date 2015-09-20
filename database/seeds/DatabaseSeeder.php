<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {

    /**
     * @var array
     */
    private $tables = array(
        'ingredients',
        'password_resets',
        'users'
    );

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $this->cleanDatabase();

        //$this->call('EventsTableSeeder');
        $this->call('ConstantsTableSeeder');

//        $this->call('UsersTableSeeder');
//        $this->call('UniversitiesTableSeeder');
//        $this->call('SchoolsTableSeeder');
//        $this->call('CoursesTableSeeder');
//        $this->call('ModulesTableSeeder');
//        $this->call('GroupsTableSeeder');
//        $this->call('MaterialsTableSeeder');
    }

    public function cleanDatabase()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}
