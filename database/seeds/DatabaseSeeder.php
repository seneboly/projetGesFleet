<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Package;
use App\Models\Entreprise;
use App\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	factory(Package::class, 5)->create();
        factory(Entreprise::class, 100)->create();
        factory(User::class, 500)->create();
        factory(Role::class, 3)->create();

    }
}
