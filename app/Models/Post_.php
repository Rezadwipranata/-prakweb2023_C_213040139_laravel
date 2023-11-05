<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Operasi Barbarossa",
            "slug" => "operasi-barbarossa",
            "author" => "Reza",
            "body" => "Operasi Barbarossa (bahasa Jerman: Unternehmen Barbarossa) adalah sebutan invasi tentara Nazi Jerman di Uni Soviet pada Perang Dunia II. Invasi ini dimulai pada tanggal 22 Juni 1941. Lebih dari 4,5 juta tentara dari kekuatan Poros menyerbu Uni Soviet sepanjang 2.900 km. Perencanaan untuk Operasi Barbarossa dimulai pada tanggal 18 Desember 1940. Rahasia persiapan dan operasi militer itu sendiri berlangsung hampir satu tahun, dari musim semi tahun 1940 sampai musim dingin 1941."
        ],
        [
            "title" => "Operasi Bagration",
            "slug" => "operasi-bagration",
            "author" => "Reza",
            "body" => "Operasi Bagration adalah serangan umum oleh tentara Soviet untuk mengusir tentara Nazi dari Belarusia yang menyebabkan hancurnya Satuan Darat Grup Tengah Jerman dan mungkin merupakan kekalahan Wehrmacht yang terbesar selama Perang Dunia II. Satuan Tentara Tengah terbukti sulit untuk dihancurkan sebagaimana ditunjukkan oleh kekalahan Zhukov dalam operasi Mars. Tetapi pada bulan Juni 1944, situasinya berbeda karena meskipun garis depannya telah diperpendek, Satuan ini jadi terbuka setelah hancurnya Satuan Tentara Selatan pada pertempuran-pertempuran yang terjadi sesudah Pertempuran Kursk, Pembebasan Kiev dan Pembebasan Krimea pada akhir musim panas dan berlanjut sampai musim gugur dan musim dingin 1943-1944 yang kemudian dinamakan periode ketiga Perang Patriotik Besar."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
