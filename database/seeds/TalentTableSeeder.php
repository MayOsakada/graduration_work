<?php
//use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Database\Seeder;

class TalentTableSeeder extends Seeder
{

    // public function __construct()
    // {
    //     $this->filename = base_path().'/database/seeds/csvs/talents.txt';
    //     $this->table = 'talents';
    // }
    
    
    public function run()
    {
        \DB::table('talents')->insert([
            [
                'talent_name' => '新垣結衣',
                'talent_name_s' => 'あらがきゆい',
                'group_name' => '',
                'group_name_s' => ''
             ],
            [
                'talent_name' => '浅田真央',
                'talent_name_s' => 'あさだまお',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => '天海祐希',
                'talent_name_s' => 'あまみゆうき',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => '吉田羊',
                'talent_name_s' => 'よしだよう',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => '浜辺美波',
                'talent_name_s' => 'はまべみなみ',
                'group_name' => '',
                'group_name_s' => ''
             ],            [
                'talent_name' => '森七菜',
                'talent_name_s' => 'もりなな',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => '今田美桜',
                'talent_name_s' => 'いまだみお',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => '西野七瀬',
                'talent_name_s' => 'にしのななせ',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => '上白石萌歌',
                'talent_name_s' => 'かみしらいしもか',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => '玉城ティナ',
                'talent_name_s' => 'たましろてぃな',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => 'フワちゃん',
                'talent_name_s' => 'ふわちゃん',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => 'あさぎーにょ',
                'talent_name_s' => 'あさぎーにょ',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => 'エミリン',
                'talent_name_s' => 'えみりん',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => '伊藤健太郎',
                'talent_name_s' => 'いとうけんたろう',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => '新田真剣佑',
                'talent_name_s' => 'あらたまっけんゆう',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => '若林正恭',
                'talent_name_s' => 'わかばやしまさやす',
                'group_name' => 'オードリー',
                'group_name_s' => 'おーどりー'
             ],
                         [
                'talent_name' => '春日俊彰',
                'talent_name_s' => 'かすがとしあき',
                'group_name' => 'オードリー',
                'group_name_s' => 'おーどりー'
             ],
                         [
                'talent_name' => '粗品',
                'talent_name_s' => 'そしな',
                'group_name' => '霜降り明星',
                'group_name_s' => 'しもふりみょうじょう'
             ],
                         [
                'talent_name' => 'せいや',
                'talent_name_s' => 'せいや',
                'group_name' => '霜降り明星',
                'group_name_s' => 'しもふりみょうじょう'
             ],
                         [
                'talent_name' => '城田優',
                'talent_name_s' => 'しろたゆう',
                'group_name' => '',
                'group_name_s' => ''
             ],
                         [
                'talent_name' => '渡辺直美',
                'talent_name_s' => 'わたなべなおみ',
                'group_name' => '',
                'group_name_s' => ''
             ]
             

        ]);


    }
}
