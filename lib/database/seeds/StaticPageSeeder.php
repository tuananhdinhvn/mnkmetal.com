<?php

use Illuminate\Database\Seeder;

class StaticPageSeeder extends Seeder
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
                'static_ten'        => 'Trang giới thiệu',
                'static_slug'       => 'trang-gioi-thieu',
                'static_noidung'    => 'Nội dung trang giới thiệu',
                'static_type'       => 'gioi-thieu',
                'static_title'      => 'Trang giới thiệu',
                'static_description'    => 'Trang giới thiệu',
    
            ],
            [
                'static_ten'        => 'Trang tuyển dụng',
                'static_slug'       => 'trang-tuyen-dung',
                'static_noidung'    => 'Nội dung Trang tuyển dụng',
                'static_type'       => 'tuyen-dung',
                'static_title'      => 'Trang tuyển dụng',
                'static_description'    => 'Trang tuyển dụng',
    
            ],
            [
                'static_ten'        => 'Chính sách bảo mật',
                'static_slug'       => 'chinh-sach-bao-mat',
                'static_noidung'    => 'Nội dung Chính sách bảo mật',
                'static_type'       => 'chinh-sach-bao-mat',
                'static_title'      => 'Chính sách bảo mật',
                'static_description'    => 'Chính sách bảo mật',
    
            ],
            [
                'static_ten'        => 'Hướng dẫn mua hàng',
                'static_slug'       => 'huong-dan-mua-hang',
                'static_noidung'    => 'Nội dung Hướng dẫn mua hàng',
                'static_type'       => 'huong-dan-mua-hang',
                'static_title'      => 'Hướng dẫn mua hàng',
                'static_description'    => 'Hướng dẫn mua hàng',
    
            ],
            [
                'static_ten'        => 'Chính sách vận chuyển',
                'static_slug'       => 'chinh-sach-van-chuyen',
                'static_noidung'    => 'Nội dung Chính sách vận chuyển',
                'static_type'       => 'chinh-sach-van-chuyen',
                'static_title'      => 'Chính sách vận chuyển',
                'static_description'    => 'Chính sách vận chuyển',
    
            ],
            [
                'static_ten'        => 'Chính sách bảo hành',
                'static_slug'       => 'chinh-sach-bao-hanh',
                'static_noidung'    => 'Nội dung Chính sách bảo hành',
                'static_type'       => 'chinh-sach-bao-hanh',
                'static_title'      => 'Chính sách bảo hành',
                'static_description'    => 'Chính sách bảo hành',
    
            ],
            [
                'static_ten'        => 'Hướng dẫn thanh toán',
                'static_slug'       => 'huong-dan-thanh-toan',
                'static_noidung'    => 'Nội dung Hướng dẫn thanh toán',
                'static_type'       => 'huong-dan-thanh-toan',
                'static_title'      => 'Hướng dẫn thanh toán',
                'static_description'    => 'Hướng dẫn thanh toán',
    
            ],
            [
                'static_ten'        => 'Câu hỏi thường gặp',
                'static_slug'       => 'cau-hoi-thuong-gap',
                'static_noidung'    => 'Nội dung Câu hỏi thường gặp',
                'static_type'       => 'cau-hoi-thuong-gap',
                'static_title'      => 'Câu hỏi thường gặp',
                'static_description'    => 'Câu hỏi thường gặp',
    
            ]
        ];
        DB::table('tb_static_page')->insert($data);
    }
}
