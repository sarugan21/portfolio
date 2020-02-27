<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $kana = $_POST["kana"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
  }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="問い合わせフォームです。">
  <title>Contact</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/smartphone.css">
  <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <div class="logo">
      <h1>KEI SAITOU</h1>
    </div>
  </header>

  <main>
    <div id="comment">
      <div id="form">
        <h2>CONTACT</h2>
        <form action="mail.php" method="post">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="kana" value="<?php echo $kana; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="comment" value="<?php echo $comment; ?>">
          <dl>
            <label for="name">
              <dt>お名前</dt>
            </label>
            <dd>
              <?php echo $name; ?>
            </dd>
            <label for="kana">
              <dt>ふりがな</dt>
            </label>
            <dd>
              <?php echo $kana; ?>
            </dd>
            <label for="email">
              <dt>メールアドレス</dt>
            </label>
            <dd>
              <?php echo $email; ?>
            </dd>
            <label for="inquiry">
              <dt>お問い合わせ内容</dt>
            </label>
            <dd>
              <?php echo $comment; ?>
            </dd>
          </dl>
          <div id="submit">
            <input id="send" type="submit" name="submit" value="送信">
            <p><input id="correction" type="button" value="内容を修正する" onclick="history.back(-1)"></p>
          </div>
        </form>
      </div>
    </div>
  </main>

  <script src="JS/particles.js"></script>
  <script src="JS/app.js"></script>
  <script src="JS/click.js"></script>
</body>

</html>