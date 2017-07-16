<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(seed_datatrining::class);
        DB::table('datatrinings')->insert([
            'cuaca' => '1',
            'temperatur' => '1',
            'kelembapan' => '1',
            'angin' => '1',
            'bermain' => '1',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'cuaca' => '1',
            'temperatur' => '1',
            'kelembapan' => '1',
            'angin' => '2',
            'bermain' => '1',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'cuaca' => '2',
            'temperatur' => '1',
            'kelembapan' => '1',
            'angin' => '1',
            'bermain' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'cuaca' => '3',
            'temperatur' => '2',
            'kelembapan' => '1',
            'angin' => '1',
            'bermain' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'cuaca' => '3',
            'temperatur' => '3',
            'kelembapan' => '2',
            'angin' => '1',
            'bermain' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'cuaca' => '3',
            'temperatur' => '3',
            'kelembapan' => '2',
            'angin' => '2',
            'bermain' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'cuaca' => '2',
            'temperatur' => '3',
            'kelembapan' => '2',
            'angin' => '2',
            'bermain' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'cuaca' => '1',
            'temperatur' => '2',
            'kelembapan' => '1',
            'angin' => '1',
            'bermain' => '1',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'cuaca' => '1',
            'temperatur' => '3',
            'kelembapan' => '2',
            'angin' => '1',
            'bermain' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'cuaca' => '3',
            'temperatur' => '2',
            'kelembapan' => '2',
            'angin' => '1',
            'bermain' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'cuaca' => '1',
            'temperatur' => '2',
            'kelembapan' => '2',
            'angin' => '2',
            'bermain' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'cuaca' => '2',
            'temperatur' => '2',
            'kelembapan' => '1',
            'angin' => '2',
            'bermain' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'cuaca' => '2',
            'temperatur' => '1',
            'kelembapan' => '2',
            'angin' => '1',
            'bermain' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'cuaca' => '3',
            'temperatur' => '2',
            'kelembapan' => '1',
            'angin' => '2',
            'bermain' => '1',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

    }
}
