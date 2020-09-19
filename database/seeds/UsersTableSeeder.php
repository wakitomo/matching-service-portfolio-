<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            //ユーザー1
            [
                'name'              => 'チカ',
                'email'             => 'user1@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => '出逢うきっかけがなかなか無いので登録しました。
                                        お休みは土日祝で、たまにライブや野球観ることが私の一番のリフレッュ方です。
                                        性格は、優しくて落ち着いてるとよく言われます。
                                        今は東京に住んでいて、関東以外の地域の方に会いに行くのは難しいですが、
                                        結婚が決まったら東京を離れても良いと思っています。
                                        初婚・再婚問わないですが、子育て経験ゼロのため子供がいる方はお断りします。',
                'sex'               => '1',
                'age'               => '27',
                'height'            => '147',
                'blood'             => 'B型',
                'adress'            => '北海道',
                'job'               => '公務員',
                'img_name'          => 'register.jpg',
                'updated_at'        => '2020-08-22 19:00:00',
                'hobbies'           => '読書 | 食べ歩き',
            ],
            //ユーザー2
            [
                'name'              => 'ボブ',
                'email'             => 'user2@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'はじめましてプロフィール見てくれて、ありがとうございます！',
                'sex'               => '0',
                'age'               => '45',
                'height'            => '170',
                'blood'             => 'O型',
                'adress'            => '栃木道',
                'job'               => '自営業',
                'img_name'          => 'man1.jpg',
                'updated_at'        => '2020-08-22 19:00:01',
                'hobbies'           => '音楽鑑賞 | お酒 ',
            ],
            //ユーザー3
            [
                'name'              => 'ジェシカ',
                'email'             => 'user3@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' =>
                'はじめまして😊
                プロフィール見てくれて、ありがとうございます！
                医療事務をしています。
                職業柄なかなか出会いがなく
                友達に教えてもらい登録してみました！
                趣味はカフェ巡りや旅行です！
                遊びの人、チャラい人、常識がない人はごめんなさい。真剣な出会いを探しています。',
                'sex'               => '1',
                'age'               => '25',
                'height'            => '162',
                'blood'             => 'A型',
                'adress'            => '埼玉県',
                'job'               => '会社員',
                'img_name'          => 'woman1.jpg',
                'updated_at'        => '2020-08-22 19:00:02',
                'hobbies'           => 'スポーツ | 食べ歩き | 買い物 | アウトドア',
            ],
            //ユーザー4
            [
                'name'              => 'ジェフペゾフ',
                'email'             => 'user4@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' =>
                'はじめまして^_^
                英語を話せる方と知り合いになれたら勉強の励みになるなと思い、登録してみました。
                顔の見えない方はなんだか怖いので、写真のある方に限らせていただきます。',
                'sex'               => '0',
                'age'               => '55',
                'height'            => '165',
                'blood'             => 'AB型',
                'adress'            => '東京都',
                'job'               => '自営業',
                'img_name'          => 'man2.jpg',
                'updated_at'        => '2020-08-22 19:00:03',
                'hobbies'           => '読書 | 旅行',
            ],
            //ユーザー5
            [
                'name'              => 'クリスティーナ',
                'email'             => 'user5@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' =>
                'はじめまして！
                4年生の女子大生です！最近は学生の肩書がなくなるのが寂しくてしょうがないです泣
                来年4月からは東京に就職することになりました🌷
                高校も(ほぼ)女子校、女子大を経て
                男性と関わる機会がなく過ごしてしまい登録してみました。
                ',
                'sex'               => '1',
                'age'               => '21',
                'height'            => '172',
                'blood'             => 'A型',
                'adress'            => '岐阜県',
                'job'               => '学生',
                'img_name'          => 'woman2.jpg',
                'updated_at'        => '2020-08-22 19:00:04',
                'hobbies'           => '寝る事 | 旅行',
            ],
            //ユーザー6
            [
                'name'              => 'ジャセフ',
                'email'             => 'user6@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' =>
                '人を楽しませるのが好きで、少し人見知りではありますが、おしゃべりが大好きです。
                普段は漫画やアニメばかり楽しんでいますが、旅行や町の散策等も好きです。
                一人の時間も友人と過ごす時間も好きで、何事も幅広く楽しんでいます。
                紅茶と珈琲が好きです｡
                趣味は広く浅くなところがあるので、こだわりのある方からは苦手意識を持たれるかもしれません。',
                'sex'               => '0',
                'age'               => '27',
                'height'            => '165',
                'blood'             => 'B型',
                'adress'            => '鹿児島県',
                'job'               => '会社員',
                'img_name'          => 'man3.jpg',
                'updated_at'        => '2020-08-22 19:00:05',
                'hobbies'           => '音楽鑑賞 | スポーツ | 買い物',
            ],
            //ユーザー7
            [
                'name'              => 'アン',
                'email'             => 'user7@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' =>
                'はじめまして☆
                プロフィール見てくれて、ありがとうございます！
                趣味は映画鑑賞とスイーツ、パン巡りです♪
                結構人見知りしない性格なので、いっぱい話してもらえるとうれしいです！（笑）
                普段出会えない方とめぐり逢えたらと思っています。
                よろしくお願いします！',
                'sex'               => '1',
                'age'               => '29',
                'height'            => '145',
                'blood'             => 'AB型',
                'adress'            => '大阪府',
                'job'               => '専業主婦',
                'img_name'          => 'woman3.jpg',
                'updated_at'        => '2020-08-22 19:00:06',
                'hobbies'           => 'スポーツ | お酒',
            ],
            //ユーザー8
            [
                'name'              => 'ミシェル',
                'email'             => 'user8@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'ミシェルです',
                'sex'               => '1',
                'age'               => '35',
                'height'            => '152',
                'blood'             => 'A型',
                'adress'            => '新潟県',
                'job'               => 'パート・アルバイト',
                'img_name'          => 'woman4.jpg',
                'updated_at'        => '2020-08-22 19:00:07',
                'hobbies'           => '読書 | 音楽鑑賞 | 旅行',
            ],
            //ユーザー9
            [
                'name'              => 'デイビッド',
                'email'             => 'user9@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'デイビッドです',
                'sex'               => '0',
                'age'               => '19',
                'height'            => '159',
                'blood'             => 'O型',
                'adress'            => '宮崎県',
                'job'               => '学生',
                'img_name'          => 'man4.jpg',
                'updated_at'        => '2020-08-22 19:00:08',
                'hobbies'           => '温泉 | インドア',
            ],
            //ユーザー10
            [
                'name'              => 'ジョシュ',
                'email'             => 'user10@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'ジョシュです',
                'sex'               => '0',
                'age'               => '18',
                'height'            => '177',
                'blood'             => 'A型',
                'adress'            => '埼玉県',
                'job'               => '学生',
                'img_name'          => 'man5.jpg',
                'updated_at'        => '2020-08-22 19:00:09',
                'hobbies'           => 'アウトドア',
            ],
            //ユーザー11
            [
                'name'              => 'キャティ',
                'email'             => 'user11@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'キャティです',
                'sex'               => '1',
                'age'               => '23',
                'height'            => '170',
                'blood'             => 'A型',
                'adress'            => '宮城県',
                'job'               => '自由業',
                'img_name'          => 'woman5.jpg',
                'updated_at'        => '2020-08-22 19:00:10',
                'hobbies'           => '音楽鑑賞 | 食べ歩き | お酒',
            ],
            //ユーザー12
            [
                'name'              => 'リリー',
                'email'             => 'user12@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'リリーです',
                'sex'               => '1',
                'age'               => '35',
                'height'            => '160',
                'blood'             => 'B型',
                'adress'            => '兵庫県',
                'job'               => '経営者・役員',
                'img_name'          => 'woman6.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => '旅行',
            ],
            //ユーザー13
            [
                'name'              => 'ウィズ',
                'email'             => 'user13@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'ウィズです',
                'sex'               => '0',
                'age'               => '19',
                'height'            => '166',
                'blood'             => 'A型',
                'adress'            => '埼玉県',
                'job'               => '学生',
                'img_name'          => 'man6.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => '音楽鑑賞 | お酒',
            ],
            //ユーザー14
            [
                'name'              => 'ジャン',
                'email'             => 'user14@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'ジャンです',
                'sex'               => '0',
                'age'               => '33',
                'height'            => '172',
                'blood'             => 'AB型',
                'adress'            => '沖縄県',
                'job'               => '会社員',
                'img_name'          => 'man7.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => '読書 | インドア',
            ],
            //ユーザー15
            [
                'name'              => 'シルビア',
                'email'             => 'user15@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'シルビアです',
                'sex'               => '1',
                'age'               => '27',
                'height'            => '160',
                'blood'             => 'O型',
                'adress'            => '山梨県',
                'job'               => '会社員',
                'img_name'          => 'woman7.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => 'アウトドア',
            ],
            //ユーザー16
            [
                'name'              => 'ジル',
                'email'             => 'user16@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'ジルです',
                'sex'               => '1',
                'age'               => '38',
                'height'            => '169',
                'blood'             => 'B型',
                'adress'            => '高知県',
                'job'               => '経営者・役員',
                'img_name'          => 'woman8.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => '食べ歩き | お酒',
            ],
            //ユーザー17
            [
                'name'              => 'リッキー',
                'email'             => 'user17@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'リッキーです',
                'sex'               => '0',
                'age'               => '36',
                'height'            => '175',
                'blood'             => 'A型',
                'adress'            => '山梨県',
                'job'               => '自営業',
                'img_name'          => 'man8.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => '寝る事',
            ],
            //ユーザー18
            [
                'name'              => 'ディジー',
                'email'             => 'user18@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'ディジーです',
                'sex'               => '1',
                'age'               => '29',
                'height'            => '163',
                'blood'             => 'A型',
                'adress'            => '岩手県',
                'job'               => '会社員',
                'img_name'          => 'woman9.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => 'スポーツ | アウトドア',
            ],
            //ユーザー19
            [
                'name'              => 'ロス',
                'email'             => 'user19@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'ロスです',
                'sex'               => '0',
                'age'               => '30',
                'height'            => '175',
                'blood'             => 'B型',
                'adress'            => '石川県',
                'job'               => '会社員',
                'img_name'          => 'man9.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => '音楽鑑賞',
            ],
            //ユーザー20
            [
                'name'              => 'バズ',
                'email'             => 'user20@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'バズです',
                'sex'               => '0',
                'age'               => '40',
                'height'            => '167',
                'blood'             => 'B型',
                'adress'            => '北海道',
                'job'               => '自営業',
                'img_name'          => 'man10.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => '食べ歩き | お酒 | 旅行 | 温泉 |アウトドア',
            ],
            //ユーザー21
            [
                'name'              => 'ジャシー',
                'email'             => 'user21@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'ジャシーです',
                'sex'               => '0',
                'age'               => '36',
                'height'            => '178',
                'blood'             => 'AB型',
                'adress'            => '兵庫県',
                'job'               => '会社員',
                'img_name'          => 'man11.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => 'インドア',
            ],
            //ユーザー22
            [
                'name'              => 'シンディー',
                'email'             => 'user22@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'シンディーです',
                'sex'               => '1',
                'age'               => '22',
                'height'            => '159',
                'blood'             => 'O型',
                'adress'            => '鹿児島県',
                'job'               => '学生',
                'img_name'          => 'woman10.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => '読書 | 音楽鑑賞',
            ],
            //ユーザー23
            [
                'name'              => 'キャシー',
                'email'             => 'user23@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'キャシーです',
                'sex'               => '1',
                'age'               => '20',
                'height'            => '173',
                'blood'             => 'B型',
                'adress'            => '山口県',
                'job'               => 'その他',
                'img_name'          => 'woman11.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => 'お酒',
            ],
            //ユーザー24
            [
                'name'              => 'ゲイス',
                'email'             => 'user24@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'ゲイスです',
                'sex'               => '0',
                'age'               => '27',
                'height'            => '171',
                'blood'             => 'AB型',
                'adress'            => '愛媛県',
                'job'               => '経営者・役員',
                'img_name'          => 'man12.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => '読書 | 音楽鑑賞',
            ],
            //ユーザー25
            [
                'name'              => 'スージー',
                'email'             => 'user25@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'スージーです',
                'sex'               => '1',
                'age'               => '23',
                'height'            => '173',
                'blood'             => 'O型',
                'adress'            => '香川県',
                'job'               => 'その他',
                'img_name'          => 'woman12.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => '旅行 | アウトドア',
            ],
            //ユーザー26
            [
                'name'              => 'ジャスミン',
                'email'             => 'user26@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'ジャスミンです',
                'sex'               => '1',
                'age'               => '21',
                'height'            => '166',
                'blood'             => 'O型',
                'adress'            => '茨城県',
                'job'               => '自由業',
                'img_name'          => 'woman13.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => 'スポーツ | お酒',
            ],
            //ユーザー27
            [
                'name'              => 'ウィリス',
                'email'             => 'user27@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'ウィリスです',
                'sex'               => '0',
                'age'               => '19',
                'height'            => '177',
                'blood'             => 'A型',
                'adress'            => '福島県',
                'job'               => '学生',
                'img_name'          => 'man13.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => 'お酒 | 寝る事',
            ],
            //ユーザー28
            [
                'name'              => 'ジェス',
                'email'             => 'user28@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'ジェスです',
                'sex'               => '0',
                'age'               => '20',
                'height'            => '180',
                'blood'             => 'AB型',
                'adress'            => '長崎県',
                'job'               => '学生',
                'img_name'          => 'man14.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => 'お酒 | 旅行',
            ],
            //ユーザー29
            [
                'name'              => 'リン',
                'email'             => 'user29@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'リンです',
                'sex'               => '1',
                'age'               => '24',
                'height'            => '158',
                'blood'             => 'O型',
                'adress'            => '長野県',
                'job'               => '会社員',
                'img_name'          => 'woman14.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => '温泉',
            ],
            //ユーザー30
            [
                'name'              => 'ロビン',
                'email'             => 'user30@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'ロビンです',
                'sex'               => '0',
                'age'               => '21',
                'height'            => '173',
                'blood'             => 'AB型',
                'adress'            => '栃木県',
                'job'               => '学生',
                'img_name'          => 'man15.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => 'スポーツ',
            ],
            //ユーザー31
            [
                'name'              => 'シェリー',
                'email'             => 'user31@example.com',
                'password'          => Hash::make('password123'),
                'self_introduction' => 'シェリーです',
                'sex'               => '1',
                'age'               => '20',
                'height'            => '170',
                'blood'             => 'A型',
                'adress'            => '岩手県',
                'job'               => '会社員',
                'img_name'          => 'woman15.jpg',
                'updated_at'        => '2020-08-22 19:00:11',
                'hobbies'           => '読書 | 旅行',
            ],
        ]);
    }
}
