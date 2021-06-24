<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //2回目実行の際にシーダー情報をクリア
       DB::table('items')->truncate();
       DB::table('items')->insert([
           'item_name' => 'レスポール レッド',
           'item_description' => 'プレイヤーの表現力に答える厳選された素材とこだわりとテクノロジー',
           'item_price' => 198000,
           'imgpath' => 'guitar_history_red.jpg',
       ]);

       DB::table('items')->insert([
           'item_name' => 'レスポール ブルー',
           'item_description' => 'プレイヤーの表現力に答える厳選された素材とこだわりとテクノロジー',
           'item_price' => 188000,
           'imgpath' => 'guitar_history_blue.jpg',
       ]);

       DB::table('items')->insert([
           'item_name' => 'ストラトキャスター ホワイト',
           'item_description' => '王道ともいえるクラシカルなストラトスペック、数量限定生産の2019年モデル',
           'item_price' => 87000,
           'imgpath' => 'acoustic_guitar_white.jpg',
       ]);


       DB::table('items')->insert([
           'item_name' => 'テレキャスター イエロー',
           'item_description' => 'プレイヤーの表現力に答える厳選された素材とこだわりとテクノロジー',
           'item_price' => 75200,
           'imgpath' => 'acoustic_guitar_yellow.jpg',
       ]);

       DB::table('items')->insert([
           'item_name' => 'ドラムセット グレー',
           'item_description' => '小さな会場、スタジオ、リハーサル室など小スペースでもマッチする多彩なドラムセット',
           'item_price' => 299200,
           'imgpath' => 'drum_set_gray.jpg',
       ]);

       DB::table('items')->insert([
           'item_name' => 'ドラムセット ブラック',
           'item_description' => '設置スペースの確保』と『機材の運搬にかかる労力』の２つの課題を解決',
           'item_price' => 68310,
           'imgpath' => 'drum_set_black.jpg',
       ]);

       DB::table('items')->insert([
           'item_name' => 'ドラムセット ホワイト',
           'item_description' => 'これ1つで全てが揃うスタンダードなドラムフルセット',
           'item_price' => 107525,
           'imgpath' => 'drum_set_white.jpg',
       ]);

       DB::table('items')->insert([
           'item_name' => 'シンセサイザー ローランド',
           'item_description' => 'ボーカリスト、トラック・メイカーに必要なサウンド、楽曲制作ツールをこの 1 台に集約',
           'item_price' => 77000,
           'imgpath' => 'synthesizer_roland.jpg',
       ]);

       DB::table('items')->insert([
           'item_name' => 'シンセサイザー モジュラー',
           'item_description' => 'パッチング自在の小さなグルーブボックスでリズムを発見',
           'item_price' => 15950,
           'imgpath' => 'synthesizer_modular.jpg',
       ]);

       DB::table('items')->insert([
           'item_name' => 'シンセサイザー レッド',
           'item_description' => '演奏者がステージ上で最高のパフォーマンスを発揮できる楽器を作り上げる',
           'item_price' => 539000,
           'imgpath' => 'synthesizer_red.jpg',
       ]);

       DB::table('items')->insert([
           'item_name' => 'エレキベース',
           'item_description' => 'これからベースを始めようとお考えの方にオススメしたい1本',
           'item_price' => 30000,
           'imgpath' => 'electric_bass.jpg',
       ]);

       DB::table('items')->insert([
           'item_name' => '安室奈美恵 BEST FICTION',
           'item_description' => 'ミリオンセールスを記録した最新ベスト・アルバム!',
           'item_price' => 1720,
           'imgpath' => 'amuro_namie_best_fiction.jpg',
       ]);

       DB::table('items')->insert([
           'item_name' => 'BUMP OF CHICKEN I [1999-2004]',
           'item_description' => 'バンド史上初のベストアルバム',
           'item_price' => 2166,
           'imgpath' => 'bump_of_chiken.jpg',
       ]);

       DB::table('items')->insert([
           'item_name' => 'EVANGELION',
           'item_description' => '「残酷な天使のテーゼ」「魂のルフラン」がダブルA面マキシシングルとして発売!',
           'item_price' => 1000,
           'imgpath' => 'evangerion.jpg',
       ]);

   }
}
