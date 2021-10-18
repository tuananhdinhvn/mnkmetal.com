<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
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
                'cust_ten'      => 'Đinh Tuấn Anh',
                'cust_email'    => 'tuananhdinh.vn@gmail.com',
                'cust_phone'    => '0964973492',
                'cust_diachi'   => '112 Nguyễn An Ninh, Vũng Tàu',
                'cust_noidung'  => 'Nội dung liên hệ',
                'cust_ghichu'   => 'Nội dung ghi chú',
                'cust_phanloai' => 1,
    
            ],
            [
                'cust_ten'      => 'Nguyễn Văn A',
                'cust_email'    => 'tuananh.a.bk@gmail.com',
                'cust_phone'    => '0933953192',
                'cust_diachi'   => '112 Nguyễn Thái Bình, TpHCM',
                'cust_noidung'  => 'Nội dung liên hệ',
                'cust_ghichu'   => 'Nội dung ghi chú',
                'cust_phanloai' => 2,
    
            ]
        ];
        DB::table('tb_customer')->insert($data);
    }
}
