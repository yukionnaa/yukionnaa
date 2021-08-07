<?php
/*  設定  */

//パスワードの設定
$password = "1234";

//スクリプト名を指定
$script = "./pup.php";

//ログファイルを指定
$log = "./puplog.php";

//カウンタ
$cntfile = "./count.log"; //ファイルを指定
$cntcol = "707070";       //カウンタの色
$cntsize = "8pt";         //カウンタのサイズ
$cntfont = "Osaka,Verdana,Tahoma"; //カウンタのフォント

//ホームページ設定
$homepage = "http://女装倶楽部.jp/"; //topを押したときに戻る場所
$target   = "_top";                      //戻り方

//タイトル
//(タイトルに画像を使う場合は幅、高さの設定を忘れないでください）
$title = "女装倶楽部";              //タイトル名
$ttsize = "20pt";                  //タイトルの文字の大きさ
$ttcolor = "#ffd2e9";              //タイトルの色
$ttfont = "Osaka,verdana,Tahoma";  //タイトルフォント
$tgif = "";                        //タイトルに画像を使う
$tgifw = "100";                    //画像の幅
$tgifh = "30";                     //画像の高さ

//メイン設定
$color   = "#797979";      //全体的な文字色
$link    = "#91a8ed";      //リンクの色
$al      = "#91a8ed";      //カーソルが乗ったときの色
$vl      = "#91a8ed";      //既に訪れた際の色
$hover   = "#f4a460";
$dcolor  = "#000000";      //タイトルの色
$sub_len = 25;             //タイトルの表示最大文字数
$ccolor  = "#ffd2e9";      //タイトルの横の1個目■の色
$ccolor2 = "#dcdcdc";      //タイトルの横の2個目■の色
$rccolor = "#ffd2e9";      //レス記事タイトルの横の1個目■の色
$rccolor2= "#3399ff";      //レス記事タイトルの横の2個目■の色
$mcolor  = "#8caacf";      //本文の色
$msize   = "9pt";          //本文の文字サイズ
$rmcolor = "#a8c5a6";      //レス記事本文の色
$ncolor  = "#797979";      //名前の色
$nsize   = "9pt";          //名前の文字サイズ
$tcolor  = "#797979";      //投稿時間の文字色
$tsize   = "8pt";          //投稿時間の文字大きさ
$bg      = "#ffffff";      //背景色
$bg2     = "";             //背景画像
$fsize   = "9pt";          //文字の大きさ
$ffont   = "Osaka,verdana,Tahoma"; //フォント名

// 返信がつくと親記事をトップへ移動 (0=no 1=yes)
$topsort = 1;

//区切り線の色
$hrcolor = "#c1c1c1";

//next backの色
$nbcolor  = "#c1c1c1";

//スレッドの幅
$tblsize = "400";

//最大保存件数
$maxdata = "30";

//1ページの表示件数
$maxview = "20";

//過去ログ設定
$pastkey  = 1;              //過去ログ生成 (0=no 1=yes)
$pcntfile = './pcnt.log';   //過去ログ用NOファイル
$pastdir  = './past/';      //過去ログのディレクトリ(サーバからのフルパス指定)
$plogmax  = '100';          //過去ログ１ファイルの最大行数

//GDのバージョン(わからない場合は、付属のphpinfo.phpを使い確認)
$GD_ver = 2;                //(0 : GD無し),(1 : バージョン1),(2 : バージョン2)

//画像アップディレクトリ
$UpDir = "./img/";          ///から始まるフルパス

//サムネイルアップディレクトリ
$SamDir = "./sam/";         ///から始まるフルパス

//画像アップURL
$UpUrl = "./img/";          //http://からはじまるパス

//サムネイルアップURL
$SamUrl = "./sam/";         //http://からはじまるパス

//サムネイル作成用最大幅・高さ
$MaxW = 100;
$MaxH = 100;

//画像アップロード許可容量(単位byte)
//例 102400→ 102400 / 1024 = 100kb
$maxsize = "202400";

//画像表示位置
$ImgAlign = 0;              //(0:左),(1:上),(2:右),(3:下)

//過去ログ入稿時に画像を破棄
$PastImage = 1;             //(0:破棄しない),(1:破棄する)

//返信にも画像添付を許可
$ResImage = 1;              //(0:許可しない),(1:許可する)

//ver 1.27 追加
//書込制限をかけるIPまたはホスト
//ワイルドカード[*]が使えます。
//'',の形でいくらでも増やせます。
$deny = array(
    '*.localhost.com',
    '',
    '',
    '',
    '',
    '');

//ver 1.29 追加
//英字のみのコメントをスパムとする。(0:no,1:yes)
$spam = 1;

//コメントにこの文字が入っていたらスパムとする。
//'',の形でいくらでも増やせます。
$ng_word = array(
    'カジノ',
    'アダルト',
    '',
    '',
    '');

//ver 1.31追加
//コメントに許可するURL数
$urlcount = 3;

//書込みがあったらメールを送信する(0:no,1:yes)
$sendmail = 0;

//管理者の書込みもメールを送信する。(0:no,1:yes)
$adminsendmail = 0;

//管理者情報
$AdminName = "P up board Mail Sender"; //この名前がメールのfromへ表示
$AdminMail = "torance_jpp@hotmail.co.jp";    //管理者メールアドレス

//ファイル添付があった場合にメールへファイル自体を添付(0:no,1:yes)
//0を選んだ際は、メールへは添付ファイルまでのURLを表示させます。
//0の場合は、$UpUrlをhttp://からのフルパスで記述してください。
$mailfile = 1;

//ver1.33追加
//文字数制限
$MaxName = 30;       //名前
$MaxComment = 3000;  //コメント
$MaxSubject = 30;    //題名
$MaxMail = 100;      //メールアドレス
$MaxUrl = 100;       //URL
$MaxPass = 12;       //パスワード
$MaxFile = 255;      //画像アップロードのパス

//ver1.36追加
//セキュリティ対策。下記URL以外からの投稿を弾く。当スクリプトのURLをhttp://から
$scripturl = "http://localhost/php/sample/pup/pup.php";

/* 設定終了 */
?>