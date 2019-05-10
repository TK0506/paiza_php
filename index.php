<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>paiza掲示板</title>
</head>
<body>
    <h1>paiza掲示板</h1>

    <h2>投稿フォーム</h2>
    <p>ここに投稿フォームを追加</p>

    <h2>発言リスト</h2>
    <?php
    // データベースに接続する
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=lesson;charset=utf8", "root", "");

    // データベースからデータの取得
    $sql = "SELECT * FROM bbs ORDER BY updated_at;";
    $stmt = $pdo->prepare($sql);
    $stmt -> execute();

    // 取得したデータを表示
    while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
        print_r($row);
        echo("<br>");
    }
    

    ?>

    <table>
        <tr>
            <th>id</th>
            <th>日時</th>
            <th>投稿内容</th>
        </tr>
        <tr>
            <td>1</td>
            <td>2019-5-7</td>
            <td>こんにちは</td>
        </tr>
    </table>
</body>
</html>