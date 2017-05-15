<?php

use Illuminate\Database\Seeder;
Use App\Movie;
class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Movie::class)->create(

            [
                'name' => 'Dragon Ball Z',


            ]);

        factory(Movie::class)->create(

            [
                'name' => 'Locos de ira',


            ]);

        factory(Movie::class)->create(

            [
                'name' => 'Rapido y furioso',


            ]);

        factory(Movie::class)->create(

            [
                'name' => 'El aro',

            ]);

        factory(Movie::class)->create(

            [
                'name' => 'Vengadores',


            ]);
    }
}
