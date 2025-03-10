<?php

namespace Database\Seeders;

use App\Http\Services\LetterCounterService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LetterLostSeeder extends Seeder
{
    public function __construct(protected LetterCounterService $letterCounterService) {}
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('letter_losts')->insert([
            // Year 2021
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2021),
                "name" => "Mermaid Man",
                "tempat_lahir" => "Bikini Bottom",
                "tgl_lahir" => '1930-01-01',
                "gender" => 'Laki-laki',
                "nationality" => 'WNI',
                "religion" => 'Islam',
                "marriage" => 'Duda',
                "job" => 'Pensiunan Superhero',
                "Education" => 'Diploma',
                "nik" => '2317391729321901',
                "no_kk" => '2317391729321801',
                "address" => 'Shady Shoals Rest Home, Bikini Bottom',
                "Information" => 'Utility Belt dengan Remote Control Mematikan/Menghidupkan',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2021,
                "created_at" => "2021-03-15 09:30:00",
                "updated_at" => "2021-03-15 09:30:00"
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2021),
                "name" => "Barnacle Boy",
                "tempat_lahir" => "Bikini Bottom",
                "tgl_lahir" => '1935-03-15',
                "gender" => 'Laki-laki',
                "nationality" => 'WNI',
                "religion" => 'Kristen',
                "marriage" => 'Belum Kawin',
                "job" => 'Pensiunan Superhero',
                "Education" => 'SMA',
                "nik" => '2317391729321902',
                "no_kk" => '2317391729321802',
                "address" => 'Shady Shoals Rest Home, Bikini Bottom',
                "Information" => 'Kacamata Superhero Anti Air',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2021,
                "created_at" => "2021-07-22 14:15:30",
                "updated_at" => "2021-07-22 14:15:30"
            ],

            // Year 2022
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2022),
                "name" => "Flying Dutchman",
                "tempat_lahir" => "Flying Dutchman Ship",
                "tgl_lahir" => '1650-07-13',
                "gender" => 'Laki-laki',
                "nationality" => 'WNA',
                "religion" => 'Hindu',
                "marriage" => 'Belum Kawin',
                "job" => 'Kapten Kapal',
                "Education" => 'SMA',
                "nik" => '2317391729321903',
                "no_kk" => '2317391729321803',
                "address" => 'Flying Dutchman Ship, Bikini Bottom Waters',
                "Information" => 'Treasure Map Kuno',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2022,
                "created_at" => "2022-04-13 23:45:00",
                "updated_at" => "2022-04-13 23:45:00"
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2022),
                "name" => "Bubble Bass",
                "tempat_lahir" => "Bikini Bottom",
                "tgl_lahir" => '1975-09-25',
                "gender" => 'Laki-laki',
                "nationality" => 'WNI',
                "religion" => 'Buddha',
                "marriage" => 'Belum Kawin',
                "job" => 'Food Critic',
                "Education" => 'Sarjana',
                "nik" => '2317391729321904',
                "no_kk" => '2317391729321804',
                "address" => 'Downtown Bikini Bottom',
                "Information" => 'Buku Catatan Review Restoran',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2022,
                "created_at" => "2022-11-30 12:20:15",
                "updated_at" => "2022-11-30 12:20:15"
            ],

            // Year 2023
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2023),
                "name" => "Fred Rechid",
                "tempat_lahir" => "Bikini Bottom",
                "tgl_lahir" => '1982-04-05',
                "gender" => 'Laki-laki',
                "nationality" => 'WNI',
                "religion" => 'Islam',
                "marriage" => 'Kawin',
                "job" => 'Pegawai Swasta',
                "Education" => 'Diploma',
                "nik" => '2317391729321905',
                "no_kk" => '2317391729321805',
                "address" => 'Coral Avenue, Bikini Bottom',
                "Information" => 'Dompet berisi SIM dan KTP',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2023,
                "created_at" => "2023-06-18 08:45:30",
                "updated_at" => "2023-06-18 08:45:30"
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2023),
                "name" => "Tom Smith",
                "tempat_lahir" => "Bikini Bottom",
                "tgl_lahir" => '1979-10-20',
                "gender" => 'Laki-laki',
                "nationality" => 'WNI',
                "religion" => 'Katholik',
                "marriage" => 'Kawin',
                "job" => 'Nelayan',
                "Education" => 'SMA',
                "nik" => '2317391729321906',
                "no_kk" => '2317391729321806',
                "address" => 'Fish Hook Street, Bikini Bottom',
                "Information" => 'Peralatan Pancing Premium Set',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2023,
                "created_at" => "2023-12-05 16:30:00",
                "updated_at" => "2023-12-05 16:30:00"
            ],

            // Year 2024
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Patrick Star",
                "tempat_lahir" => "Bikini Bottom",
                "tgl_lahir" => '1988-08-28',
                "gender" => 'Laki-laki',
                "nationality" => 'WNA',
                "religion" => 'Islam',
                "marriage" => 'Duda',
                "job" => 'Manager',
                "Education" => 'Sarjana',
                "nik" => '2317391729321931',
                "no_kk" => '2317391729321921',
                "address" => 'Bikini Bottom',
                "Information" => 'Iphone 15 Pro Max',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => "2024-09-26 01:21:32",
                "updated_at" => "2024-09-26 01:21:32"
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Spongebob",
                "tempat_lahir" => "Bikini Bottom",
                "tgl_lahir" => '1988-08-28',
                "gender" => 'Laki-laki',
                "nationality" => 'WNA',
                "religion" => 'Islam',
                "marriage" => 'Duda',
                "job" => 'Manager',
                "Education" => 'Sarjana',
                "nik" => '2317391729321931',
                "no_kk" => '2317391729321921',
                "address" => 'Bikini Bottom',
                "Information" => 'Sandal Melly',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => "2024-09-26 01:21:32",
                "updated_at" => "2024-09-26 01:21:32"
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Sandy Cheeks",
                "tempat_lahir" => "Texas",
                "tgl_lahir" => '1992-11-15',
                "gender" => 'Perempuan',
                "nationality" => 'WNI',
                "religion" => 'Kristen',
                "marriage" => 'Belum Kawin',
                "job" => 'Scientist',
                "Education" => 'Doktor',
                "nik" => '2317391729321933',
                "no_kk" => '2317391729321923',
                "address" => 'Treedome, Bikini Bottom',
                "Information" => 'Laptop MacBook Pro',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => "2024-09-27 14:30:15",
                "updated_at" => "2024-09-27 14:30:15"
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Squidward Tentacles",
                "tempat_lahir" => "Bikini Bottom",
                "tgl_lahir" => '1985-10-09',
                "gender" => 'Laki-laki',
                "nationality" => 'WNI',
                "religion" => 'Buddha',
                "marriage" => 'Belum Kawin',
                "job" => 'Kasir',
                "Education" => 'Diploma',
                "nik" => '2317391729321934',
                "no_kk" => '2317391729321924',
                "address" => 'Easter Island Head, Bikini Bottom',
                "Information" => 'Clarinet Yamaha Professional',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => "2024-09-28 09:15:45",
                "updated_at" => "2024-09-28 09:15:45"
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2024),
                "name" => "Eugene Krabs",
                "tempat_lahir" => "Bikini Bottom",
                "tgl_lahir" => '1942-11-30',
                "gender" => 'Laki-laki',
                "nationality" => 'WNI',
                "religion" => 'Katholik',
                "marriage" => 'Duda',
                "job" => 'Pengusaha',
                "Education" => 'SMA',
                "nik" => '2317391729321935',
                "no_kk" => '2317391729321925',
                "address" => 'Anchor House, Bikini Bottom',
                "Information" => 'Dompet berisi uang Rp 5.000.000',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2024,
                "created_at" => "2024-09-29 16:45:22",
                "updated_at" => "2024-09-29 16:45:22"
            ],

            // Year 2025
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Pearl Krabs",
                "tempat_lahir" => "Bikini Bottom",
                "tgl_lahir" => '2000-05-05',
                "gender" => 'Perempuan',
                "nationality" => 'WNI',
                "religion" => 'Katholik',
                "marriage" => 'Belum Kawin',
                "job" => 'Mahasiswa',
                "Education" => 'SMA',
                "nik" => '2317391729321936',
                "no_kk" => '2317391729321925',
                "address" => 'Anchor House, Bikini Bottom',
                "Information" => 'Apple Watch Series 9',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => "2025-01-15 10:23:45",
                "updated_at" => "2025-01-15 10:23:45"
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Sheldon Plankton",
                "tempat_lahir" => "Bikini Bottom",
                "tgl_lahir" => '1980-02-14',
                "gender" => 'Laki-laki',
                "nationality" => 'WNI',
                "religion" => 'Hindu',
                "marriage" => 'Kawin',
                "job" => 'Pengusaha',
                "Education" => 'Sarjana',
                "nik" => '2317391729321937',
                "no_kk" => '2317391729321927',
                "address" => 'Chum Bucket, Bikini Bottom',
                "Information" => 'Tablet Samsung Galaxy Tab S9 Ultra',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => "2025-01-18 14:55:30",
                "updated_at" => "2025-01-18 14:55:30"
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Larry Lobster",
                "tempat_lahir" => "Bikini Bottom",
                "tgl_lahir" => '1990-07-23',
                "gender" => 'Laki-laki',
                "nationality" => 'WNI',
                "religion" => 'Islam',
                "marriage" => 'Belum Kawin',
                "job" => 'Personal Trainer',
                "Education" => 'Diploma',
                "nik" => '2317391729321938',
                "no_kk" => '2317391729321928',
                "address" => 'Goo Lagoon, Bikini Bottom',
                "Information" => 'Fitbit Sense 2 & Gym Membership Card',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => "2025-01-20 08:15:00",
                "updated_at" => "2025-01-20 08:15:00"
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Karen Plankton",
                "tempat_lahir" => "Silicon Valley",
                "tgl_lahir" => '1985-01-01',
                "gender" => 'Perempuan',
                "nationality" => 'WNA',
                "religion" => 'Hindu',
                "marriage" => 'Kawin',
                "job" => 'System Engineer',
                "Education" => 'Doktor',
                "nik" => '2317391729321939',
                "no_kk" => '2317391729321927',
                "address" => 'Chum Bucket, Bikini Bottom',
                "Information" => 'External Hard Drive 2TB dengan Data Penting',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => "2025-01-25 16:40:20",
                "updated_at" => "2025-01-25 16:40:20"
            ],
            [
                "no_letter" => $this->letterCounterService->getNextLetterNumber(2025),
                "name" => "Mrs. Puff",
                "tempat_lahir" => 'Bikini Bottom',
                "tgl_lahir" => '1970-08-09',
                "gender" => 'Perempuan',
                "nationality" => 'WNI',
                "religion" => 'Kristen',
                "marriage" => 'Janda',
                "job" => 'Guru',
                "Education" => 'Sarjana',
                "nik" => '2317391729321940',
                "no_kk" => '2317391729321930',
                "address" => 'Boating School, Bikini Bottom',
                "Information" => 'Tas berisi dokumen lisensi mengajar dan kunci mobil',
                "no_wa" => '081234567900', // Add no_wa column
                "year" => 2025,
                "created_at" => "2025-01-30 11:25:15",
                "updated_at" => "2025-01-30 11:25:15"
            ]
        ]);
    }
}
