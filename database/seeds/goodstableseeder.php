<?php

use Illuminate\Database\Seeder;

class goodstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $color = ['红','橙','黄','绿','青','蓝','紫','黑','白','灰','褐'];
        $size = ['S','M','L','XL','XXL','XXXL'];

        for($i=0;$i<100;$i++){
            DB::table('goods')->insert([
                'gname'=>str_random(10),
                'gimg'=>rand(1,100).'.jpg',
                'gstock'=>rand(0,1000),
                'issale'=>rand(0,1),
                'iskill'=>rand(0,1),
                'isbest'=>rand(0,1),
                'ishot'=>rand(0,1),
                'isnew'=>rand(0,1),
                'cateid'=>rand(1,9),
                'brandid'=>rand(1,8),
                'gdesc'=>str_random(50),
                'visitnum'=>rand(0,1000),
                'salenum'=>rand(0,1000),
                'appraisenum'=>rand(0,1000),
                'gcolor'=>$color[rand(0,7)],
                'gsize'=>$size[rand(0,5)],
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ]);
        }
    }
}
