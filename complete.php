<?php
// セッションを開始
session_start();

// セッションに保存された「お名前」を取得
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '名無し';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>

<body>
    <h2><?php echo $name; ?>様、お問い合わせを承りました。</h2>
    <p>ありがとうございました。今後の参考にさせていただきます。</p>
    <button class="btn" id="back-btn" onclick="location.href='form.php';">戻る</button>

    <?php
    // セッション変数を初期化
    $_SESSION = array();

    // セッションを終了
    session_destroy();
    ?>
</body>

</html>