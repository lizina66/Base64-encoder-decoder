<!DOCTYPE html>
<html>
<head>
    <title>Base64 编码/解码器</title>
    <style>
    body {
        background-image: url('https://api.mwm.moe/ycy');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        margin: 0;
        font-family: Arial, sans-serif;
        color: #fff;
        min-height: 100vh;
    }

    .container {
        text-align: center;
        margin-top: 50px;
    }

    form {
        background-color: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    textarea {
        width: 300px;
        height: 100px;
        margin: 10px;
    }

    .footer {
        background-color: rgba(255, 255, 255, 0.5);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        text-align: center;
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
    }

    .footer a {
        color: #000;
        margin: 0 10px;
        text-decoration: none;
    }

    .footer a:hover {
        text-decoration: underline;
    }
    </style>
</head>
<body>
    <div class="container">
        <form method="post">
            <div>
                <textarea name="input1"><?php echo htmlspecialchars($decoded ?? ''); ?></textarea>
                <textarea name="input2"><?php echo htmlspecialchars($encoded ?? ''); ?></textarea>
            </div>
            <div>
                <input type="submit" name="encode" value="编码 →">
                <input type="submit" name="decode" value="← 解码">
            </div>
        </form>
    </div>

    <div class="footer">
        &nbsp;|
        <a href="https://example.com">⭐GitHub⭐</a>点个小星星吧
        |&nbsp;
    </div>

    <?php
    $encoded = '';
    $decoded = '';

    if (isset($_POST['encode'])) {
        $decoded = $_POST['input1'];
        $encoded = base64_encode($decoded);
    }

    if (isset($_POST['decode'])) {
        $encoded = $_POST['input2'];
        $decoded = base64_decode($encoded);
    }
    ?>
</body>
</html>
