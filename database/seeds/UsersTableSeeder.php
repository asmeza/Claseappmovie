<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create(

            [
                'first_name' => 'Adanud',
                'last_name' => 'meza',
                'date_birthay' => '1979-09-05',
                'gender' => 'M',
                'biography' => 'estudiante',

            ]);


        factory(User::class)->create(

            [
                'first_name' => 'david',
                'last_name' => 'valle',
                'date_birthay' => '1989-09-05',
                'gender' => 'M',
                'biography' => 'estudiante',

            ]);

        factory(User::class)->create(

            [
                'first_name' => 'jose',
                'last_name' => 'martinez',
                'date_birthay' => '1999-09-05',
                'gender' => 'M',
                'biography' => 'estudiante',

            ]);


        factory(User::class)->create(

            [
                'first_name' => 'andres',
                'last_name' => 'meza',
                'date_birthay' => '1999-09-05',
                'gender' => 'M',
                'biography' => 'estudiante',

            ]);



    }
}
