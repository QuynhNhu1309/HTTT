<?php

use Illuminate\Database\Seeder;

class TheLoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loremString='phasellus et sem eget erat auctor viverra eget eu diam';
        for($i=0;$i<7;$i++)
        {
            $loremString=str_shuffle($loremString);
            DB::table('the_loai')->insert([
                'ten' => substr($loremString,0,rand(10,15))
            ]);
        }  
    }
}
