<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>フォーム入力</h1>
        <form action="confirm.php" method="POST">
            <div class="form-item">
                <label>名前</label>
                <input type="text" name="name" id="name">
            </div>

            <div class="form-item">
                <label>年齢</label>
                <input type="number" name="age" id="age">
            </div>

            <div class="form-item">
                <label>電話番号</label>
                <input type="text" name="phone" id="phone">
            </div>

            <div class="form-item">
                <label>メールアドレス</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="form-item">
                <label>住所</label>
                <input type="text" name="address" id="address">
            </div>

            <div class="form-item">
                <label>質問:</label>
                <input type="text" name="question" id="question">
            </div>

            <div class="form-item">
                <label>性別</label>
                <select name="gender" id="gender">
                    <option value="男">男</option>
                    <option value="女">女</option>
                </select>
            </div>

            <button type="submit">送信</button>

        </form>
    </div>
</body>
</html>
