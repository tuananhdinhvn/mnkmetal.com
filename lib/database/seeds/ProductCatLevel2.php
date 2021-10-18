<?php

use Illuminate\Database\Seeder;

class ProductCatLevel2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'procat2_ten'           => 'Danh mục 1',
                'procat2_slug'          => 'danh-muc-1',
                'procat2_title'         => 'Danh mục 1 title',
                'procat2_description'   => 'description 1',
                'procat2_procat_id'     => 1,
    
            ],
            [
                'procat2_ten'           => 'Danh mục 2',
                'procat2_slug'          => 'danh-muc-2',
                'procat2_title'         => 'Danh mục 2 title',
                'procat2_description'   => 'description 2',
                'procat2_procat_id'     => 2,
            ]
        ];
        DB::table('tb_productcat_lv2')->insert($data);
    }
}
