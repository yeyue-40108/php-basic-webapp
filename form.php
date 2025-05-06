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
    <h2>お問い合わせ</h2>
    <form id="form" action="confirm.php" method="post">
        <table>
            <tr>
                <td>お名前</td>
                <td>
                    <input class="textbox" type="text" name="user_name" placeholder="入力してください" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : ''; ?>">
                </td>
            </tr>
            <tr> 
                <td>メールアドレス</td>
                <td>
                    <input class="textbox" type="text" name="user_email" placeholder="入力してください" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''; ?>">
                </td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <input type="radio" name="user_gender" value="男性" checked>男性
                    <input type="radio" name="user_gender" value="女性">女性
                    <input type="radio" name="user_gender" value="その他">その他
                </td>
            </tr>
            <tr>
                <td>お問い合わせ種別</td>
                <td>
                    <select name="category">
                        <option value="ご意見やご感想">ご意見やご感想</option>
                        <option value="不具合について">不具合について</option>
                        <option value="その他">その他</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>お問い合わせ内容</td>
                <td>
                    <!-- cols属性＝入力欄の幅（文字数）、rows属性＝入力欄の高さ（行数） -->
                    <textarea name="message" placeholder="入力してください" cols="30" rows="10"></textarea>
                </td>
            </tr>
        </table>
        <input class="btn" type="submit" value="送信">
    </form>
</body>

</html>