<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\JurusanMatpel;
use App\Models\Kelas;
use App\Models\Level;
use App\Models\Matpel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create(
            [
                'name' => 'Aji Permana',
                'email' => 'ajisajalah1407@gmail.com',
                'password' => bcrypt('ajipermana'),
                'id_kelas' => mt_rand(1,3),
                'id_level' => 2
            ]
            );
            User::create(
                [
                    'name' => 'Bayu Pamungkas',
                    'email' => 'bbyyu21@gmail.com',
                    'password' => bcrypt('bayupamungkas'),
                    'id_kelas' => mt_rand(1,3),
                    'id_level' => 2
                ]
                );
                User::create(
                    [
                        'name' => 'Ikhwan Hanif Mulyana',
                        'email' => 'haniftampans22@gmail.com',
                        'password' => bcrypt('ikhwanhanif'),
                        'id_kelas' => mt_rand(1,3),
                        'id_level' => 2
                    ]
                    );

    Guru::create(
        [
            'name' => 'Ibu Siska'

        ]
        );
        Guru::create(
            [
                'name' => 'Bapak Nanang Suwandi'

            ]
            );
            Guru::create(
                [
                    'name' => 'Bapak Heri Siswanto'

                ]
                );

        Level::create([
            'name' => 'admin'

        ]
    );
    Level::create([
        'name' => 'user'
    ]);
    Level::create([
        'name' => 'guru'
    ]);


    Jurusan::create([
        'name' => 'Rekayasa Perangkat Lunak',
        'aka' => 'RPL'
    ]);
    Jurusan::create([
        'name' => 'Teknik Kendaraan Ringan Otomotif',
        'aka' => 'TKRO'
    ]);
    Jurusan::create([
        'name' => 'Akomodasi Perhotelan',
        'aka' => 'APH'
    ]);
    Matpel::create(
        [
            'name' => 'Matematika',
            'aka' => 'MTK',
            'id_guru' => 1

        ]
    );


    Matpel::create(
        [
            'name' => 'Bahasa Inggris',
            'aka' => 'B.Inggris',
            'id_guru' => 2

        ]
    );
    Matpel::create(
        [
            'name' => 'Bahasa Indonesia',
            'aka' => 'B.Indo',
            'id_guru' => 3

        ]
    );
    Matpel::create(
        [
            'name' => 'Produktif Teknik Kendaraan Ringan Otomotif',
            'aka' => 'Produktid TKRO',
            'id_guru' => mt_rand(1,3)

        ]
    );
    Matpel::create(
        [
            'name' => 'Produktif Rekayasa Perangkat Lunak',
            'aka' => 'Produktif RPL',
            'id_guru' => mt_rand(1,3)

        ]
    );
    Matpel::create(
        [
            'name' => 'Produktif Akomodasi Perhotelan',
            'aka' => 'Produktif APH',
            'id_guru' => mt_rand(1,3)

        ]
    );

    Kelas::create([
        'name' => '10 TKRO 1',
        'id_jurusan' => 2
    ]);
    Kelas::create([
        'name' => '11 RPL 2',
        'id_jurusan' => 1
    ]);
    Kelas::create([
        'name' => '12 APH 1',
        'id_jurusan' => 3
    ]);



    }
}
