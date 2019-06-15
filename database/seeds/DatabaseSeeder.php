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
        DB::table('datatrinings')->insert([
            'pelayanan_pegawai' => '1',
            'ketanggapan_pegawai' => '1',
            'kesopanan_pegawai' => '2',
            'ketepatan_pelayanan' => '1',
            'fasilitas' => '1',
            'keamanan_kantor' => '1',
            'tingkat_kepuasan' => '1',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'pelayanan_pegawai' => '2',
            'ketanggapan_pegawai' => '2',
            'kesopanan_pegawai' => '1',
            'ketepatan_pelayanan' => '1',
            'fasilitas' => '2',
            'keamanan_kantor' => '2',
            'tingkat_kepuasan' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'pelayanan_pegawai' => '2',
            'ketanggapan_pegawai' => '1',
            'kesopanan_pegawai' => '1',
            'ketepatan_pelayanan' => '1',
            'fasilitas' => '1',
            'keamanan_kantor' => '1',
            'tingkat_kepuasan' => '1',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'pelayanan_pegawai' => '2',
            'ketanggapan_pegawai' => '1',
            'kesopanan_pegawai' => '1',
            'ketepatan_pelayanan' => '1',
            'fasilitas' => '1',
            'keamanan_kantor' => '1',
            'tingkat_kepuasan' => '1',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'pelayanan_pegawai' => '2',
            'ketanggapan_pegawai' => '2',
            'kesopanan_pegawai' => '2',
            'ketepatan_pelayanan' => '2',
            'fasilitas' => '2',
            'keamanan_kantor' => '2',
            'tingkat_kepuasan' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'pelayanan_pegawai' => '2',
            'ketanggapan_pegawai' => '1',
            'kesopanan_pegawai' => '1',
            'ketepatan_pelayanan' => '1',
            'fasilitas' => '1',
            'keamanan_kantor' => '1',
            'tingkat_kepuasan' => '1',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'pelayanan_pegawai' => '1',
            'ketanggapan_pegawai' => '1',
            'kesopanan_pegawai' => '1',
            'ketepatan_pelayanan' => '2',
            'fasilitas' => '1',
            'keamanan_kantor' => '1',
            'tingkat_kepuasan' => '1',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'pelayanan_pegawai' => '2',
            'ketanggapan_pegawai' => '1',
            'kesopanan_pegawai' => '1',
            'ketepatan_pelayanan' => '1',
            'fasilitas' => '1',
            'keamanan_kantor' => '1',
            'tingkat_kepuasan' => '1',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'pelayanan_pegawai' => '2',
            'ketanggapan_pegawai' => '2',
            'kesopanan_pegawai' => '1',
            'ketepatan_pelayanan' => '1',
            'fasilitas' => '2',
            'keamanan_kantor' => '2',
            'tingkat_kepuasan' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('datatrinings')->insert([
            'pelayanan_pegawai' => '2',
            'ketanggapan_pegawai' => '1',
            'kesopanan_pegawai' => '1',
            'ketepatan_pelayanan' => '2',
            'fasilitas' => '2',
            'keamanan_kantor' => '2',
            'tingkat_kepuasan' => '2',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
    }
}
