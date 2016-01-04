<?php
use App\Apparatus;
use Illuminate\Database\Seeder;

class ApparatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // drop table data first
        Apparatus::truncate();
        // create 10 Apparatus objects
        $apparatus1 = new Apparatus();
        $apparatus1->apparatusname = 'Trampoline';
        $apparatus1->save();

        $apparatus2 = new Apparatus();
        $apparatus2->apparatusname = 'Vault';
        $apparatus2->save();

        $apparatus3 = new Apparatus();
        $apparatus3->apparatusname = 'Mats';
        $apparatus3->save();

        $apparatus4 = new Apparatus();
        $apparatus4->apparatusname = 'Bar';
        $apparatus4->save();

        $apparatus5 = new Apparatus();
        $apparatus5->apparatusname = 'Parallel Bar';
        $apparatus5->save();

        $apparatus6 = new Apparatus();
        $apparatus6->apparatusname = 'Pommel Horse';
        $apparatus6->save();
         
        $apparatus7 = new Apparatus();
        $apparatus7->apparatusname = 'Uneven Bars';
        $apparatus7->save();

        $apparatus8 = new Apparatus();
        $apparatus8->apparatusname = 'Beam';
        $apparatus8->save();

        $apparatus9 = new Apparatus();
        $apparatus9->apparatusname = 'Rings';
        $apparatus9->save();

        $apparatus10 = new Apparatus();
        $apparatus10->apparatusname = 'Rythmic';
        $apparatus10->save();


    }
}
