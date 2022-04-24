<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            [
                'books_id'=> 1,
                'author'=>'Rick Riordan',
                'publisher'=>'Listening Library',
                'year'=>2005,
                'description'=>'The Lightning Thief adalah novel petualangan fantasi Amerika 2005
                berdasarkan mitologi Yunani, novel dewasa muda pertama yang ditulis oleh Rick Riordan
                dalam seri Percy Jackson & the Olympians. Itu memenangkan Buku Terbaik Asosiasi Layanan
                Perpustakaan Dewasa untuk Dewasa Muda, di antara penghargaan lainnya.'
            ],

            [
                'books_id'=> 2,
                'author'=>'Rick Riordan',
                'publisher'=>'Listening Library',
                'year'=>2006,
                'description'=>'The Sea of Monsters adalah novel petualangan fantasi Amerika
                berdasarkan mitologi Yunani yang ditulis oleh Rick Riordan dan diterbitkan pada tahun 2006.
                Ini adalah novel kedua dalam seri Percy Jackson & the Olympians dan sekuel The Lightning Thief'
            ],

            [
                'books_id'=> 3,
                'author'=>'J.K. Rowling',
                'publisher'=>'Pottermore',
                'year'=>1997,
                'description'=>'Harry Potter and the Sorcerers Stone adalah sebuah film yang sangat sukses
                pada tahun 2001 yang diangkat dari novel fantasi J. K. Rowling dengan judul yang sama.'
            ],

            [
                'books_id'=> 4,
                'author'=>'Stephen H',
                'publisher'=>'New Millenium Press',
                'year'=>2002,
                'description'=>'A Brief History of Time, dia memberi kita pandangan baru yang berani tentang
                alam semesta kita, bagaimana itu dimulai, dan bagaimana pandangan lama kita tentang fisika
                dan teori-teori lama tentang penciptaan alam semesta tidak lagi relevan. Dengan kata lain,
                Hawking memberi kita pandangan baru tentang dunia kita, alam semesta kita, dan diri kita sendiri.'
            ],

            [
                'books_id'=> 5,
                'author'=>'Jack Joe',
                'publisher'=>'Running Press',
                'year'=>2002,
                'description'=>'On the Shoulders of Giants: The Great Works of Physics and Astronomy adalah
                kompilasi teks ilmiah yang diedit dan dikomentari oleh fisikawan teoretis Inggris Stephen Hawking.'
            ],

            [
                'books_id'=> 6,
                'author'=>'Richard Dawkins',
                'publisher'=>'Oxford University Press',
                'year'=>1976,
                'description'=>'The Selfish Gene adalah buku mengenai evolusi karya Richard Dawkins.
                Buku ini dibuat berdasarkan teori George C. Williams dalam bukunya Adaptation and Natural Selection.'
            ],

            [
                'books_id'=> 7,
                'author'=>'Donald Knuth',
                'publisher'=>'Addison-Wesley',
                'year'=>1968,
                'description'=>'The Art of Computer Programming adalah buku yang ditulis oleh Donald Knuth mengenai
                berbagai algoritme dan analisis pemrograman komputer. '
            ],

            [
                'books_id'=> 8,
                'author'=>'Al Sweigart',
                'publisher'=>'No Starch Press',
                'year'=>2015,
                'description'=>'Buku Automate the Boring Stuff with Python: Practical merupakan buku yang dikarang oleh
                Al Sweigart yang membahas tentang sistem automata dengan menggunakan bahasa python.'
            ],

            [
                'books_id'=> 9,
                'author'=>'Jay Wengrow',
                'publisher'=>'Pragmatic Bookshelf',
                'year'=>2020,
                'description'=>'Buku ini mengambil pendekatan praktis untuk struktur data dan algoritme, dengan teknik
                dan skenario dunia nyata yang dapat Anda gunakan dalam kode produksi harian Anda.'
            ],

            [
                'books_id'=> 10,
                'author'=>'Charles Petzold',
                'publisher'=>'Microsoft Press',
                'year'=>1999,
                'description'=>'Code: The Hidden Language of Computer Hardware and Software adalah buku karya Charles
                Petzold yang berupaya mengajarkan cara kerja komputer pribadi pada tingkat perangkat keras dan perangkat lunak.'
            ]
        ]);
    }
}
