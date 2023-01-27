<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\trip;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        user::create([
            'name' => 'Ferdy Santoni',
            'username' => 'fdy29s',
            'password' => bcrypt('123')
        ]);

        user::create([
            'name' => 'Esther Kristin Sihura',
            'username' => 'Etrks',
            'password' => bcrypt('123')
        ]);

        user::create([
            'name' => 'Ernestina Tinya Koten',
            'username' => 'Ernstk',
            'password' => bcrypt('123')
        ]);

        user::create([
            'name' => 'Gayuh Puji Rahayu',
            'username' => 'Gyhpr',
            'password' => bcrypt('123')
        ]);

        user::create([
            'name' => 'Erick',
            'username' => 'Eck11',
            'password' => bcrypt('123')
        ]);
        
        Trip::create([
            'title' => 'Paket Wisata A One day Trip',
            'slug' => 'paket-wisata-a-one-day-trip',
            'image' => 'trip-images/g774WZdk4kNMVRAB0lrNUuoJOJjL9xwW1mU2bfCE.jpg',
            'Destination' => '<div>Mengunjungi destininasi:&nbsp;<br><br></div><ol><li>Ex kampoeng Vietnam</li><li>Pantai Glory Melur</li><li>Jembatan Barelang</li></ol>',
            'price' => '<div>Harga :&nbsp;<br><br></div><ol><li>&nbsp;2-3 Orang&nbsp;<ul><li>285.000 /Orang</li></ul></li><li>&nbsp;4-5 Orang&nbsp;<ul><li>275.000 /Orang</li></ul></li><li>&nbsp;6-10 Orang<ul><li>260.000 /Orang</li></ul></li><li>&nbsp;11-30 Orang<ul><li>250.000 /Orang</li></ul></li></ol>',
            'facility' => '<div>Mendapatkan:&nbsp;<br><br></div><ol><li>Transportasi</li><li>Snack</li><li>Makan Siang</li><li>Air mineral</li></ol>',
            'user_id' => 2
        ]);

        Post::create([
            'title' => 'Jembatan barelang',
            'slug' => 'jembatan-barelang',
            'image' => 'post-images/5vNGGjmmfo7ZtLIrrslwTi8SAvTG8svfjRJq3oSD.jpg',
            'excerpt' => 'Jembatan Barelang (singkatan dari Batam, Rempang, dan Galang) adalah sekumpulan jembatan yang menghubungkan pulau-pulau yaitu Pulau Batam, Pulau Tonton, Pulau Nipah, Pulau Rempang, Pulau Galang dan Pu...',
            'body' => '<div><strong>Jembatan Barelang</strong> (singkatan dari <strong>Ba</strong>tam, <strong>Re</strong>mpang, dan Ga<strong>lang</strong>) adalah sekumpulan jembatan yang menghubungkan pulau-pulau yaitu Pulau Batam, Pulau Tonton, Pulau Nipah, Pulau Rempang, Pulau Galang dan Pulau Galang Baru di daerah Batam, provinsi Kepulauan Riau, Indonesia. Masyarakat setempat menyebutnya "Jembatan Barelang". Ada juga yang menyebutnya "Jembatan Habibie" sebagai bentuk penghargaan atas jasa beliau dalam mengembangkan pulau Batam sebagai pulau industri serta mempelopori pembangunan jembatan ini.&nbsp;</div>',
            'user_id' => 1
        ]);

    }
}
