<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'id' => 1,
            'judul' => "PKKMB Unimma",
            'deskripsi' => "Tahun Ajaran Baru 2023/2024",
            'created_at' => now(),
            'updated_at' => now(),

            'id' => 2,
            'judul' => "Fakultair Unimma",
            'deskripsi' => "Fakultas Teknik Unimma th 2023/2024",
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
