<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    private array $users = array(
        array(
            'name' => 'tania',
            'email' => 'tania@user.com',
            'password' => '123',
            'admin' => true),
        array(
            'name' => 'edu',
            'email' => 'edu@user.com',
            'password' => '8522',
            'admin' => false),
        array(
            'name' => 'zaira',
            'email' => 'zaira@user.com',
            'password' => '159',
            'admin' => false),
    );

    public function run()
    {
        self::seedUsers();
        $this->command->info('Tabla de usuarios iniciada correctamente!');
    }

    private function seedUsers()
    {
        DB::table('users')->delete();

        foreach ($this->users as $user) {
            $u = new User;
            $u->name = $user['name'];
            $u->email = $user['email'];
            $u->password = bcrypt($user['password']);
            $u->save();
        }
    }
}
