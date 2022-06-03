<?php
// 日本語対応
mb_language("Japanese");
mb_internal_encoding("UTF-8");


// 送信フォーマット等の設定
$to      = "takaki@1st-re.jp";
$subject = "お問い合わせ自動送信";
$message = "お問合わせメッセージが送信されました。;
$headers = "From: timejudaedall.ooo@gmail.com"

// メール送信実行
mb_send_mail($to, $subject, $message);
?>
