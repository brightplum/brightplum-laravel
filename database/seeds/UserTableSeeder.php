<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Gustavo Ramirez';
        $user->email = 'gustavo@brightplum.com';
        $user->password = bcrypt('gustavo123');
        $user->save();
        $user->roles()->attach(Role::where('name', 'admin')->first());

        $admin = new User;
        $admin->name = 'Fredric Mitchell';
        $admin->email = 'fredric@brightplum.com';
        $admin->password = bcrypt('12345678');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'user')->first());
    }
}
