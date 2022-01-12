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

     


        // JurusanMatpel::create(
        //   [
        //         'jurusan_id' => 2,
        //     'matpel_id' => 1
        //     ]

        // );
        // JurusanMatpel::create(
        //     [
        //           'jurusan_id' => 2,
        //       'matpel_id' => 2
        //       ]

        //   );
        //   JurusanMatpel::create(
        //     [
        //           'jurusan_id' => 2,
        //       'matpel_id' => 3
        //       ]

        //   );
        //   JurusanMatpel::create(
        //     [
        //           'jurusan_id' => 2,
        //       'matpel_id' => 4
        //       ]

        //   );



        User::create(
            [
                'name' => 'Aji Permana',
                'email' => 'ajisajalah1407@gmail.com',
                'password' => bcrypt('ajipermana'),
                'id_kelas' => 1,
                'id_level' => 1
            ]
            );
            User::create(
                [
                    'name' => 'Bayu Pamungkas',
                    'email' => 'bbyyu21@gmail.com',
                    'password' => bcrypt('bayupamungkas'),
                    'id_kelas' => 1,
                    'id_level' => 2
                ]
                );
                User::create(
                    [
                        'name' => 'Ikhwan Hanif Mulyana',
                        'email' => 'haniftampans22@gmail.com',
                        'password' => bcrypt('ikhwanhanif'),
                        'id_kelas' => 1,
                        'id_level' => 2
                    ]
                    );


                $gurus = [
                    'Ibu Siska S. Kom ',
                    'Bapak Nanang Suwandi, S.T',
                    'Bapak Heri Sri Purnomo, S.Kom',
                    'Enok Mutiari Arofah, S.Pd., M.M.',
                    'Hermini Susetyawati, S.Pd., M.M.
                    ',
                    'Riris Lintang Ria B.B., S.Pd.
                    '
                ];

                foreach ($gurus as $value) {
                    Guru::create([
                        'name' => $value,
                    ]);
                }

        Level::create([
            'name' => 'Admin'

        ]
    );
    Level::create([
        'name' => 'Siswa'
    ]);
    Level::create([
        'name' => 'Guru'
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
            'guru_id' => 1

        ]
    );


    Matpel::create(
        [
            'name' => 'Bahasa Inggris',
            'aka' => 'B.Inggris',
            'guru_id' => 2

        ]
    );
    Matpel::create(
        [
            'name' => 'Bahasa Indonesia',
            'aka' => 'B.Indo',
            'guru_id' => 3

        ]
    );
    Matpel::create(
        [
            'name' => 'Produktif Teknik Kendaraan Ringan Otomotif',
            'aka' => 'Produktid TKRO',
            'guru_id' => 4

        ]
    );
    Matpel::create(
        [
            'name' => 'Produktif Rekayasa Perangkat Lunak',
            'aka' => 'Produktif RPL',
            'guru_id' => 5

        ]
    );
    Matpel::create(
        [
            'name' => 'Produktif Akomodasi Perhotelan',
            'aka' => 'Produktif APH',
            'guru_id' => 6

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
