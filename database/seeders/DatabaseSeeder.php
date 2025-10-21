<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;
class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(NguoiDung::class);
        $data = [
            [
                'username' => 'kapapa',
                'password' => Hash::make(2005),
                'nd_hoten' => 'Vu Hai Khoa',
                'nd_email' => 'haikhoa352005@gmail.com',
                'nd_sdt' => '0123456789',
                'nd_namsinh' => '02/01/2005',
                'nd_diachi' => 'TP. HN',
                'nd_trangthai' => 1
            ]
        ];

        DB::table('nguoidung')->insert($data);

        DB::table('quantrivien')->insert([
            'username'=>'admin',
            'password'=>Hash::make('admin123'),
            'qt_hoten'=>'admin',
        ]);
    }
}
