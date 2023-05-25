<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cpu')->insert([
            'name' => "cpu1",
            'spec_detail' => 'cpu1 details',
        ]);
        DB::table('cpu')->insert([
            'name' => "cpu2",
            'spec_detail' => 'cpu2 details',
        ]);
        DB::table('cpu')->insert([
            'name' => "cpu3",
            'spec_detail' => 'cpu3 details',
        ]);
        DB::table('cpu')->insert([
            'name' => "cpu4",
            'spec_detail' => 'cpu4 details',
        ]);
        DB::table('cpu')->insert([
            'name' => "cpu5",
            'spec_detail' => 'cpu5 details',
        ]);
        DB::table('motherboard')->insert([
            'name' => "motherboard1",
            'spec_detail' => 'motherboard1 details',
        ]);
        DB::table('motherboard')->insert([
            'name' => "motherboard2",
            'spec_detail' => 'motherboard2 details',
        ]);
        DB::table('motherboard')->insert([
            'name' => "motherboard3",
            'spec_detail' => 'motherboard3 details',
        ]);
        DB::table('motherboard')->insert([
            'name' => "motherboard4",
            'spec_detail' => 'motherboard4 details',
        ]);
        DB::table('motherboard')->insert([
            'name' => "motherboard5",
            'spec_detail' => 'motherboard5 details',
        ]);
        DB::table('motherboard')->insert([
            'name' => "motherboard6",
            'spec_detail' => 'motherboard6 details',
        ]);
        DB::table('compatibility')->insert([
            'cpu_id' => '1',
            'motherboard_id' =>'1',
        ]);
        DB::table('compatibility')->insert([
            'cpu_id' => '2',
            'motherboard_id' =>'2',
        ]);
        DB::table('compatibility')->insert([
            'cpu_id' => '3',
            'motherboard_id' =>'3',
        ]);
        DB::table('compatibility')->insert([
            'cpu_id' => '4',
            'motherboard_id' =>'4',
        ]);
        DB::table('compatibility')->insert([
            'cpu_id' => '5',
            'motherboard_id' =>'5',
        ]);
        DB::table('compatibility')->insert([
            'cpu_id' => '5',
            'motherboard_id' =>'6',
        ]);
    }
}
