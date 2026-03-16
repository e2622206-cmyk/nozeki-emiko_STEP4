<?php

$name = $_POST["name"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$address = $_POST["address"];
$gender = $_POST["gender"];

$errors = [];

if (!preg_match("/^[ぁ-んァ-ン一-龥a-zA-Z]+$/u", $name)) {
    $errors[] = "名前はひらがな、カタカナ、漢字、英字のみ使用できます。";
}

if ($age < 0 || $age > 150) {
    $errors[] = "年齢は0から150の間で入力してください。";
}

if (!preg_match("/^[0-9-]+$/", $phone)) {
    $errors[] = "電話番号は半角数字とハイフンのみ使用できます。";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors [] = "メールアドレスの形式が正しくありません。";
}

if (!preg_match("/^[ぁ-んァ-ン一-龥a-zA-Z]+$/u", $address)) {
    $errors[] = "住所はひらがな、カタカナ、漢字、英字のみ使用できます。";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>
    <h1>入力内容確認</h1>

<?php
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
} else {
    echo "<p>名前 : $name</p>";
    echo "<p>年齢 : $age</p>";
    echo "<p>電話番号 : $phone</p>";
    echo "<p>メール : $email</p>";
    echo "<p>住所 : $address</p>";
    echo "<p>性別 : $gender</p>";
}
?>

</body>
</html>