<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SeedCharacterTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
           'name' => 'Lelouch Lamperouge',
           'character_id' => 1,
           'anime' => 'Code Geass',
           'genre' => 'Alternate history and Mecha',
           'creator' => 'Ichiro Okouchi',
           'body' => 'Lelouch vi Britannia, whose alias is Lelouch Lamperouge, is the title character and leading antihero of the Sunrise anime series Code Geass: Lelouch of the Rebellion. In the series, Lelouch is a former prince from the superpower Britannia who is given the power of the "Geass" by a witch known as C.C.',
           'image' => 'lelouch2.png',
           'created_at' => now(),
           'updated_at' => now()

        ]);

        DB::table('characters')->insert([
            'name' => 'Levi Ackerman',
            'character_id' => 2,
            'anime' => 'Attack on Titan',
            'genre' => 'Mystery and Action Fiction',
            'creator' => 'Hajime Isayama',
            'body' => 'Levi Ackerman often formally referred to as Captain Levi  is the squad captain  lit.leader of the soldiers of the Special Operations Squad within the Survey Corps and is widely known as humanitys strongest soldier',
            'image' => 'levi2.png',
            'created_at' => now(),
            'updated_at' => now()

         ]);

         DB::table('characters')->insert([
            'name' => 'Monkey D.Luffy',
            'character_id' => 3,
            'anime' => 'One Piece',
            'genre' => 'Adventure Fiction and Fantasy',
            'creator' => 'Eiichiro Oda',
            'body' => 'Monkey D. Luffy, also known as "Straw Hat" Luffy, is a fictional character and the main protagonist of the One Piece manga series, created by Eiichiro Oda.',
            'image' => 'luffy2.png',
            'created_at' => now(),
            'updated_at' => now()

         ]);

         DB::table('characters')->insert([
            'name' => 'Tanjiro Kamado',
            'character_id' => 4,
            'anime' => 'Demon Slayer:Kimetsu no Yaiba',
            'genre' => 'Dark Fantasy and Martial Arts',
            'creator' => 'Koyoharu Gotouge',
            'body' => 'Tanjiro Kamado is a fictional character and the main protagonist in Koyoharu Gotouges manga Demon Slayer: Kimetsu no Yaiba.',
            'image' => 'tanjiro2.png',
            'created_at' => now(),
            'updated_at' => now()

         ]);

         DB::table('characters')->insert([
            'name' => 'One Punch Man',
            'character_id' => 5,
            'anime' => 'Saitama',
            'genre' => 'Action and Comedy',
            'creator' => 'ONE',
            'body' => ' Saitama is the main protagonist of the series and the titular One-Punch Man. He is the most powerful being to exist in the series. Saitama faces a self-imposed existential crisis, as he is now too powerful to gain any thrill from battle.[4]',
            'image' => 'punch2.png',
            'created_at' => now(),
            'updated_at' => now()

         ]);

         DB::table('characters')->insert([
            'name' => 'Kenshin Himura',
            'character_id' => 6,
            'anime' => 'Rurouni Kenshin',
            'genre' => 'Historical and Samurai',
            'creator' => 'Nobuhiro Watsuki',
            'body' => 'Himura Kenshin, known as Kenshin Himura in the English-language anime dubs, is a fictional character and protagonist of the manga Rurouni Kenshin created by Nobuhiro Watsuki. Kenshins story is set in a fictional version of Japan during the Meiji period.',
            'image' => 'kenshin2.png',
            'created_at' => now(),
            'updated_at' => now()

         ]);
    }
}
