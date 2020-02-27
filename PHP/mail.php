<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $name = $_POST["name"];
  $kana = $_POST["kana"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];

  $name = htmlspecialchars($name,ENT_QUOTES);
  $kana = htmlspecialchars($kana,ENT_QUOTES);
  $email = htmlspecialchars($email,ENT_QUOTES);
  $comment = htmlspecialchars($comment,ENT_QUOTES);

  $body = "メールフォームよりお問い合わせがありました。\n\n";
  $body .= "【お名前】\n";
  $body .= $name."\n\n";
  $body .= "【ふりがな】\n";
  $body .= $kana."\n\n";
  $body .= "【メールアドレス】\n";
  $body .= $email."\n\n";
  $body .= "【問い合わせ内容】\n";
  $body .= $comment."\n\n";

  $body2 = $name."様\n\n";
  $body2 .= "お問い合わせありがとうございます。\n";
  $body2 .= "以下のお問い合わせ内容を、メールにて確認させていただきます。\n\n";
  $body2 .="=================================================\n";
  $body2 .= "【お名前】\n";
  $body2 .= $name."\n\n";
  $body2 .= "【ふりがな】\n";
  $body2 .= $kana."\n\n";
  $body2 .= "【メールアドレス】\n";
  $body2 .= $email."\n\n";
  $body2 .= "【問い合わせ内容】\n";
  $body2 .= $comment."\n";
  $body2 .="=================================================\n\n";
  $body2 .= "内容を確認のうえ、回答させて頂きます。\n";
  $body2 .= "しばらくお待ちください。\n";


  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $mail_to = "sarugan21@gmail.com";
  $mail_subject = "メールフォームよりお問い合わせ";
  $mail_subject2 = "お問い合わせ内容確認";
  $mail_body = $body;
  $mail_body2 = $body2;

  mb_send_mail($mail_to,$mail_subject,$mail_body);
  mb_send_mail($email,$mail_subject2,$mail_body2);

  header("Location:../thanks.html");
  exit();

  ?>
</body>
</html>