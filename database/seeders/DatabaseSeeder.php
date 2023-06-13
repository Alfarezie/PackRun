<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Paket;
use App\Models\Ongkir;
use App\Models\Lacak;
use App\Models\Riwayat;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Paket::create([
            'no_resi' => 123,
            'receiver_name' => 'Budi',
            'receiver_PhoneNum' => 81200000000,
            'receiver_Address' => 'Jakarta',
            'receiver_zip_code' => 30123,
            'sender_name' => 'Yanto',
            'sender_PhoneNum' => 81200000001,
            'fragile' => true
        ]);
        Paket::create([
            'no_resi' => 456,
            'receiver_name' => 'Wisnu',
            'receiver_PhoneNum' => 81212345678,
            'receiver_Address' => 'Bandung',
            'receiver_zip_code' => 40789,
            'sender_name' => 'Revo',
            'sender_PhoneNum' => 81212345555,
            'fragile' => false
        ]);
        Paket::create([
            'no_resi' => 789,
            'receiver_name' => 'Bambang',
            'receiver_PhoneNum' => 81287654321,
            'receiver_Address' => 'Kalimantan',
            'receiver_zip_code' => 56123,
            'sender_name' => 'Hilman',
            'sender_PhoneNum' => 81287659999,
            'fragile' => true
        ]);
        Ongkir::create([
            'id_paket' => 1,
            'ongkir' => 15000,
            'estimated_time' => '2 days'
        ]);
        Ongkir::create([
            'id_paket' => 2,
            'ongkir' => 50000,
            'estimated_time' => '7 days'
        ]);
        Ongkir::create([
            'id_paket' => 3,
            'ongkir' => 35000,
            'estimated_time' => '4 days'
        ]);
        Lacak::create([
            'id_paket' => 1,
            'status' => 'belum dikirim'
        ]);
        Lacak::create([
            'id_paket' => 2,
            'status' => 'sedang dikirim'
        ]);
        Lacak::create([
            'id_paket' => 3,
            'status' => 'sudah dikirim'
        ]);
        Riwayat::create([
            'id_paket' => 1,
            'received_time' => '2023-09-27',
            'evidence' => 'gambar.png'
        ]);
        Riwayat::create([
            'id_paket' => 2,
            'received_time' => '2023-06-15',
            'evidence' => 'gambar.png'
        ]);
        Riwayat::create([
            'id_paket' => 3,
            'received_time' => '2023-01-01',
            'evidence' => 'gambar.png'
        ]);
    }
}
