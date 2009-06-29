<?php
/*=====================================================================
  (C)2007 BeaBo Japan by Hiroki Seike
  http://beabo.net/
=====================================================================*/
define('_MI_FILEMANAGER_NAME', "ファイルマネージャー");
define('_MI_FILEMANAGER_DESC', "uploadsフォルダのファイル管理とファイルのアップロードを簡単に");
define('_MI_FILEMANAGER_UPDATE', 'アップデート');

// --------------------------------------------------------
// Names of admin menu items
// --------------------------------------------------------
define('_MI_FILEMANAGER_MAIN', "リスト");
define('_MI_FILEMANAGER_MAIN_DSC', "アップロードフォルダのファイルリスト表示");
define('_MI_FILEMANAGER_UPLOAD', "アップロード");
define('_MI_FILEMANAGER_UPLOAD_DSC', "ファイルのアップロードを行います");
define('_MI_FILEMANAGER_FOLDER', "フォルダの操作");
define('_MI_FILEMANAGER_FOLDER_DSC', "フォルダの追加・削除を行います。");
//define('_MI_FILEMANAGER_OPTION', "オプション");
//define('_MI_FILEMANAGER_OPTION_DSC', "オプションの設定を行います");

// --------------------------------------------------------
// Preference Edit
// --------------------------------------------------------
define('_MI_FILEMANAGER_PATH',"アップロードするデフォルトのパス");
define('_MI_FILEMANAGER_PATH_DSC',"アップロードのパスを指定しない場合にアップロードするパス名を指定します。設置URL/uploads/ が標準になります。<br />例：temp と指定した場合、設置URL/uploads/temp/ が標準のアップロード先になります。 ");
define('_MI_FILEMANAGER_DIRHANDLE',"フォルダの操作をサポート");
define('_MI_FILEMANAGER_DIRHANDLE_DSC',"「はい」を選ぶとフォルダの操作を可能にします。フォルダの操作が出来るのは、アクセス権が777の場合のみになります。");
define('_MI_FILEMANAGER_THUMBSIZE',"サムネイルサイズ");
define('_MI_FILEMANAGER_THUMBSIZE_DSC',"ファイルリスト表示時のサムネイルサイズを指定します。単位はピクセルです。");
define('_MI_FILEMANAGER_DEBUGON',"アップローダーのデバックをオン");
define('_MI_FILEMANAGER_DEBUGON_DSC',"SWFアップロードのデバックを可能にします。");
define('_MI_FILEMANAGER_XOOPSLOCK',"システム画像の非表示");
define('_MI_FILEMANAGER_XOOPSLOCK_DSC',"システムで使っている画像を表示しない。イメージマネージャー・アバター・顔アイコンを表示しません。");
define('_MI_FILEMANAGER_EXTENSIONS',"アップロード可能なファイルの拡張子");
define('_MI_FILEMANAGER_EXTENSIONS_DSC',"アップロードを許可するファイルの拡張子を '|' 区切りで指定します。拡張子は、全て小文字で入力して下さい。");

// ffmpeg Preference
define('_MI_FILEMANAGER_FUSE',"【ffmpeg】ffmpegを利用する");
define('_MI_FILEMANAGER_FUSE_DSC',"ffmpegを利用する場合は、はいを選択して下さい。ffmpegは、サーバー側が対応している必要があります。<br />お使いのサーバーに対応したバイナリを設置するか、ビルドして下さい。");
define('_MI_FILEMANAGER_FPATH',"【ffmpeg】コマンド検索パス");
define('_MI_FILEMANAGER_FPATH_DSC',"ffmpegの実行ファイルへパスが通っていない場合は、設置パスを指定します。<br />(例: <tt>/usr/local/bin</tt><tt>:/usr/bin</tt>)");
define('_MI_FILEMANAGER_FCAPTURE',"【ffmpeg】スクリーンショットの時間");
define('_MI_FILEMANAGER_FCAPTURE_DSC',"動画ファイルからスクリーンショットを撮る時間を動画の先頭からの時間（秒）を指定します。");
define('_MI_FILEMANAGER_FCONVERT',"【ffmpeg】FLV変換の最大サイズ");
define('_MI_FILEMANAGER_FCONVERT_DSC',"動画ファイルからFLV形式の動画へ変換する最大のサイズを指定します。単位はMBです。");

// reserved  options setting
// define('_MI_FILEMANAGER_FOPT',"【ffmpeg】オプション設定");
// define('_MI_FILEMANAGER_FOPT_DSC',"ffmpegの設定をより細かく指定が可能になります。（現バージョンでは使えません）");


?>