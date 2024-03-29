<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $locations = [
            ['name' => 'Nairobi', 'county' => 'Nairobi'],
            ['name' => 'Mombasa', 'county' => 'Mombasa'],
            ['name' => 'Kisumu', 'county' => 'Kisumu'],
            ['name' => 'Nakuru', 'county' => 'Nakuru'],
            ['name' => 'Eldoret', 'county' => 'Uasin Gishu'],
            ['name' => 'Kehancha', 'county' => 'Migori'],
            ['name' => 'Ruiru', 'county' => 'Kiambu'],
            ['name' => 'Kikuyu', 'county' => 'Kiambu'],
            ['name' => 'Kangundo-Tala', 'county' => 'Machakos'],
            ['name' => 'Malindi', 'county' => 'Kilifi'],
            ['name' => 'Naivasha', 'county' => 'Nakuru'],
            ['name' => 'Kitui', 'county' => 'Kitui'],
            ['name' => 'Machakos', 'county' => 'Machakos'],
            ['name' => 'Thika', 'county' => 'Kiambu'],
            ['name' => 'Athi River(Mavoko)', 'county' => 'Machakos'],
            ['name' => 'Karuri', 'county' => 'Kiambu'],
            ['name' => 'Nyeri', 'county' => 'Nyeri'],
            ['name' => 'Kilifi', 'county' => 'Kilifi'],
            ['name' => 'Garissa', 'county' => 'Garissa'],
            ['name' => 'Vihiga', 'county' => 'Vihiga'],
            ['name' => 'Mumias', 'county' => 'Kakamega'],
            ['name' => 'Bomet', 'county' => 'Bomet'],
            ['name' => 'Molo', 'county' => 'Nakuru'],
            ['name' => 'Ngong', 'county' => 'Kajiado'],
            ['name' => 'Kitale', 'county' => 'Trans-Nzoia'],
            ['name' => 'Litein', 'county' => 'Kericho'],
            ['name' => 'Limuru', 'county' => 'Kiambu'],
            ['name' => 'Kericho', 'county' => 'Kericho'],
            ['name' => 'Kimilili', 'county' => 'Bungoma'],
            ['name' => 'Awasi', 'county' => 'Kisumu'],
            ['name' => 'Kakamega', 'county' => 'Kakamega'],
            ['name' => 'Kapsabet', 'county' => 'Nandi'],
            ['name' => 'Mariakani', 'county' => 'Kilifi'],
            ['name' => 'Kiambu', 'county' => 'Kiambu'],
            ['name' => 'Mandera', 'county' => 'Mandera'],
            ['name' => 'Nyamira', 'county' => 'Nyamira'],
            ['name' => 'Mwingi', 'county' => 'Kitui'],
            ['name' => 'Kisii', 'county' => 'Kisii'],
            ['name' => 'Wajir', 'county' => 'Wajir'],
            ['name' => 'Rongo', 'county' => 'Migori'],
            ['name' => 'Bungoma', 'county' => 'Bungoma'],
            ['name' => 'Ahero', 'county' => 'Kisumu'],
            ['name' => 'Nandi Hills', 'county' => 'Trans-Nzoia'],
            ['name' => 'Makuyu', 'county' => 'Murang�a'],
            ['name' => 'Kapenguria', 'county' => 'West Pokot'],
            ['name' => 'Taveta', 'county' => 'Taita-Taveta'],
            ['name' => 'Narok', 'county' => 'Narok'],
            ['name' => 'Ol Kalou', 'county' => 'Nyandarua'],
            ['name' => 'Kakuma', 'county' => 'Turkana'],
            ['name' => 'Webuye', 'county' => 'Bungoma'],
            ['name' => 'Malaba', 'county' => 'Busia'],
            ['name' => 'Mbita Point', 'county' => 'Homa Bay'],
            ['name' => 'Ukunda', 'county' => 'Kwale'],
            ['name' => 'Wundanyi', 'county' => 'Taita-Taveta'],
            ['name' => 'Busia', 'county' => 'Busia'],
            ['name' => 'Runyenjes', 'county' => 'Embu'],
            ['name' => 'Migori', 'county' => 'Migori'],
            ['name' => 'Malava', 'county' => 'Kakamega'],
            ['name' => 'Suneka', 'county' => 'Kisii'],
            ['name' => 'Embu', 'county' => 'Embu'],
            ['name' => 'Ogembo', 'county' => 'Kisii'],
            ['name' => 'Homa Bay', 'county' => 'Homa Bay'],
            ['name' => 'Lodwar', 'county' => 'Turkana'],
            ['name' => 'Kitengela', 'county' => 'Kajiado'],
            ['name' => 'Ukwala', 'county' => 'Siaya'],
            ['name' => 'Keroka', 'county' => 'Kisii'],
            ['name' => 'Meru', 'county' => 'Meru'],
            ['name' => 'Matuu', 'county' => 'Machakos'],
            ['name' => 'Oyugis', 'county' => 'Kisumu'],
            ['name' => 'Nyahururu', 'county' => 'Laikipia'],
            ['name' => 'Kipkelion', 'county' => 'Kericho'],
            ['name' => 'Luanda', 'county' => 'Vihiga'],
            ['name' => 'Nanyuki', 'county' => 'Laikipia'],
            ['name' => 'Maua', 'county' => 'Meru'],
            ['name' => 'Mtwapa', 'county' => 'Kilifi'],
            ['name' => 'Isiolo', 'county' => 'Isiolo'],
            ['name' => 'Eldama Ravine', 'county' => 'Baringo'],
            ['name' => 'Voi', 'county' => 'Taita-Taveta'],
            ['name' => 'Siaya', 'county' => 'Siaya'],
            ['name' => 'Nyansiongo', 'county' => 'Nyamira'],
            ['name' => 'Londiani', 'county' => 'Kericho'],
            ['name' => 'Iten/Tambach', 'county' => 'Elgeyo-Marakwet'],
            ['name' => 'Chuka', 'county' => 'Tharaka-Nithi'],
            ['name' => 'Malakisi', 'county' => 'Bungoma'],
            ['name' => 'Juja', 'county' => 'Kiambu'],
            ['name' => 'Ongata Rongai', 'county' => 'Kajiado'],
            ['name' => 'Bondo', 'county' => 'Siaya'],
            ['name' => 'Moyale', 'county' => 'Marsabit'],
            ['name' => 'Maralal', 'county' => 'Samburu'],
            ['name' => 'Gilgil', 'county' => 'Nakuru'],
            ['name' => 'Nambale', 'county' => 'Busia'],
            ['name' => 'Tabaka', 'county' => 'Kisii'],
            ['name' => 'Muhoroni', 'county' => 'Kisumu'],
            ['name' => 'Kerugoya/Kutus', 'county' => 'Kirinyaga'],
            ['name' => 'Ugunja', 'county' => 'Siaya'],
            ['name' => 'Yala', 'county' => 'Siaya'],
            ['name' => 'Rumuruti', 'county' => 'Laikipia'],
            ['name' => 'Burnt Forest', 'county' => 'Uasin Gishu'],
            ['name' => 'Maragua', 'county' => 'Murang\'a'],
            ['name' => 'Kendu Bay', 'county' => 'Homa Bay'],
        ];

        \App\Models\Location::insert($locations);
    }
}
