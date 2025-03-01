<?php

namespace Database\Seeders;

use App\Http\Services\LetterCounterService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LetterDeathSeeder extends Seeder
{
    public function __construct(protected LetterCounterService $letterCounterService) {}
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('letter_deaths')->insert([
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Konan",
                "nik" => "9837463567894873",
                "date_death" => "2010-12-03",
                "hour_death" => "09:30",
                "cause_death" => "Dibunuh Obito",
                "mom_name" => "Tidak tau",
                "dad_name" => "Tidak tau",
                "year" => 2025,
                "no_wa" => '081234567900', // Add no_wa column
                "created_at" => "2024-09-26 01:21:32",
                "updated_at" => "2024-09-26 01:21:32",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Jiraiya",
                "nik" => "9837463567894873",
                "date_death" => "2010-12-03",
                "hour_death" => "09:30",
                "cause_death" => "Dibunuh Pain",
                "mom_name" => "Tidak tau",
                "dad_name" => "Tidak tau",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => "2024-09-26 01:21:32",
                "updated_at" => "2024-09-26 01:21:32",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Minato Namikaze",
                "nik" => "9837463567894874",
                "date_death" => "1999-10-10",
                "hour_death" => "23:00",
                "cause_death" => "Melindungi Konoha dari Kurama",
                "mom_name" => "Tidak tau",
                "dad_name" => "Tidak tau",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => "2025-01-29 12:00:00",
                "updated_at" => "2025-01-29 12:00:00",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Itachi Uchiha",
                "nik" => "9837463567894875",
                "date_death" => "2014-06-15",
                "hour_death" => "17:30",
                "cause_death" => "Pertarungan melawan Sasuke",
                "mom_name" => "Mikoto Uchiha",
                "dad_name" => "Fugaku Uchiha",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => "2025-01-29 12:00:00",
                "updated_at" => "2025-01-29 12:00:00",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Neji Hyuga",
                "nik" => "9837463567894876",
                "date_death" => "2016-12-14",
                "hour_death" => "12:00",
                "cause_death" => "Melindungi Hinata dan Naruto",
                "mom_name" => "Tidak diketahui",
                "dad_name" => "Hizashi Hyuga",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => "2025-01-29 12:00:00",
                "updated_at" => "2025-01-29 12:00:00",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Madara Uchiha",
                "nik" => "9837463567894877",
                "date_death" => "2018-02-29",
                "hour_death" => "20:00",
                "cause_death" => "Dikhianati Zetsu Hitam",
                "mom_name" => "Tidak diketahui",
                "dad_name" => "Tidak diketahui",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => "2025-01-29 12:00:00",
                "updated_at" => "2025-01-29 12:00:00",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Obito Uchiha",
                "nik" => "9837463567894878",
                "date_death" => "2019-07-30",
                "hour_death" => "15:00",
                "cause_death" => "Berkorban untuk Naruto dan Sasuke",
                "mom_name" => "Tidak diketahui",
                "dad_name" => "Tidak diketahui",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => "2025-01-29 12:00:00",
                "updated_at" => "2025-01-29 12:00:00",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Hiruzen Sarutobi",
                "nik" => "9837463567894879",
                "date_death" => "2002-09-27",
                "hour_death" => "18:00",
                "cause_death" => "Melawan Orochimaru",
                "mom_name" => "Tidak diketahui",
                "dad_name" => "Tidak diketahui",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => "2024-09-26 01:21:32",
                "updated_at" => "2024-09-26 01:21:32",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Danzo Shimura",
                "nik" => "9837463567894880",
                "date_death" => "2011-01-12",
                "hour_death" => "14:00",
                "cause_death" => "Dibunuh Sasuke",
                "mom_name" => "Tidak diketahui",
                "dad_name" => "Tidak diketahui",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => "2024-09-26 01:21:32",
                "updated_at" => "2024-09-26 01:21:32",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Asuma Sarutobi",
                "nik" => "9837463567894881",
                "date_death" => "2013-11-03",
                "hour_death" => "11:00",
                "cause_death" => "Dibunuh Hidan",
                "mom_name" => "Tidak diketahui",
                "dad_name" => "Hiruzen Sarutobi",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => "2024-09-26 01:21:32",
                "updated_at" => "2024-09-26 01:21:32",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Kushina Uzumaki",
                "nik" => "9837463567894882",
                "date_death" => "1999-10-10",
                "hour_death" => "23:05",
                "cause_death" => "Melindungi Naruto",
                "mom_name" => "Tidak diketahui",
                "dad_name" => "Tidak diketahui",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => "2024-09-26 01:21:32",
                "updated_at" => "2024-09-26 01:21:32",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Zabuza Momochi",
                "nik" => "9837463567894883",
                "date_death" => "2010-08-15",
                "hour_death" => "16:00",
                "cause_death" => "Dibunuh oleh pasukan Gato",
                "mom_name" => "Tidak diketahui",
                "dad_name" => "Tidak diketahui",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => "2024-09-26 01:21:32",
                "updated_at" => "2024-09-26 01:21:32",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2023),
                "name" => "Madara Uchiha",
                "nik" => "9837463567894890",
                "date_death" => "2018-12-24",
                "hour_death" => "21:30",
                "cause_death" => "Dibunuh oleh Zetsu",
                "mom_name" => "Tidak diketahui",
                "dad_name" => "Tidak diketahui",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2023,
                "created_at" => "2023-09-26 01:21:32",
                "updated_at" => "2023-09-26 01:21:32",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2023),
                "name" => "Obito Uchiha",
                "nik" => "9837463567894891",
                "date_death" => "2019-05-10",
                "hour_death" => "15:45",
                "cause_death" => "Dibunuh oleh Kaguya",
                "mom_name" => "Tidak diketahui",
                "dad_name" => "Tidak diketahui",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2023,
                "created_at" => "2023-09-26 01:21:32",
                "updated_at" => "2023-09-26 01:21:32",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2022),
                "name" => "Itachi Uchiha",
                "nik" => "9837463567894892",
                "date_death" => "2017-06-12",
                "hour_death" => "17:00",
                "cause_death" => "Bertarung dengan Sasuke",
                "mom_name" => "Mikoto Uchiha",
                "dad_name" => "Fugaku Uchiha",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2022,
                "created_at" => "2022-09-26 01:21:32",
                "updated_at" => "2022-09-26 01:21:32",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2022),
                "name" => "Neji Hyuga",
                "nik" => "9837463567894893",
                "date_death" => "2016-08-23",
                "hour_death" => "14:30",
                "cause_death" => "Melindungi Hinata dan Naruto",
                "mom_name" => "Tidak diketahui",
                "dad_name" => "Hizashi Hyuga",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2022,
                "created_at" => "2022-09-26 01:21:32",
                "updated_at" => "2022-09-26 01:21:32",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2021),
                "name" => "Haku",
                "nik" => "9837463567894894",
                "date_death" => "2015-03-30",
                "hour_death" => "08:15",
                "cause_death" => "Dibunuh oleh Kakashi",
                "mom_name" => "Tidak diketahui",
                "dad_name" => "Tidak diketahui",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2021,
                "created_at" => "2021-09-26 01:21:32",
                "updated_at" => "2021-09-26 01:21:32",
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2021),
                "name" => "Sakumo Hatake",
                "nik" => "9837463567894895",
                "date_death" => "2014-02-11",
                "hour_death" => "22:00",
                "cause_death" => "Bunuh diri karena kehilangan kehormatan",
                "mom_name" => "Tidak diketahui",
                "dad_name" => "Tidak diketahui",
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2021,
                "created_at" => "2021-09-26 01:21:32",
                "updated_at" => "2021-09-26 01:21:32",
            ]
        ]);
    }
}
