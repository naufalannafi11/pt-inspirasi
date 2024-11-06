<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingScheduleController extends Controller
{
    public function index()
    {
        // Contoh data jadwal pelatihan
        $trainings = [
            [
                'name' => 'Diklat dan Sertifikasi Pengawas Operasional Pertama',
                'date' => '23 January - 28 January 2024',
                'location' => 'Bandung',
                'certification' => 'BNSP',
                'sector' => ''
            ],
            [
                'name' => 'Diklat dan Sertifikasi Pengawas Operasional Madya',
                'date' => '23 January - 28 January 2024',
                'location' => 'Bandung',
                'certification' => 'BNSP',
                'sector' => ''
            ],
            [
                'name' => 'Diklat dan Sertifikasi Pengawas Operasional Utama',
                'date' => '23 January - 28 January 2024',
                'location' => 'Bandung',
                'certification' => 'BNSP',
                'sector' => ''
            ],
            [
                'name' => 'Diklat dan Sertifikasi Pengawas Operasional Pertama',
                'date' => '07 February - 11 February 2024',
                'location' => 'Samarinda',
                'certification' => 'BNSP',
                'sector' => ''
            ],
            [
                'name' => 'Diklat dan Sertifikasi Pengawas Operasional Madya',
                'date' => '07 February - 11 February 2024',
                'location' => 'Samarinda',
                'certification' => 'BNSP',
                'sector' => ''
            ],
            [
                'name' => 'Diklat dan Sertifikasi Pengawas Operasional Utama',
                'date' => '07 February - 11 February 2024',
                'location' => 'Samarinda',
                'certification' => 'BNSP',
                'sector' => ''
            ],
            [
                'name' => 'Diklat dan Sertifikasi Pengawas Operasional Pertama',
                'date' => '16 January - 20 January 2024',
                'location' => 'Kendari',
                'certification' => 'BNSP',
                'sector' => ''
            ],
            [
                'name' => 'Diklat dan Sertifikasi Pengawas Operasional Madya',
                'date' => '16 January - 20 January 2024',
                'location' => 'Kendari',
                'certification' => 'BNSP',
                'sector' => ''
            ],
            [
                'name' => 'Diklat dan Sertifikasi Pengawas Operasional Utama',
                'date' => '16 January - 20 January 2024',
                'location' => 'Kendari',
                'certification' => 'BNSP',
                'sector' => ''
            ],
            [
                'name' => 'Diklat dan Sertifikasi Pengawas Operasional Pertama',
                'date' => '15 January - 20 January 2024',
                'location' => 'Jambi',
                'certification' => 'BNSP',
                'sector' => ''
            ],
            [
                'name' => 'Diklat dan Sertifikasi Pengawas Operasional Madya',
                'date' => '15 January - 20 January 2024',
                'location' => 'Jambi',
                'certification' => 'BNSP',
                'sector' => ''
            ],
            [
                'name' => 'Diklat dan Sertifikasi Pengawas Operasional Utama',
                'date' => '15 January - 20 January 2024',
                'location' => 'Jambi',
                'certification' => 'BNSP',
                'sector' => ''
            ],
            // Tambahkan lebih banyak data jika diperlukan
        ];

        return view('kegiatan', compact('trainings'));
    }
}

