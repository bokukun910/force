<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>FORCE</title>
        <?php include 'login_include.php' ?>
    </head>
    <body>
        <div class="header">
            <?php include 'header.php' ?>
        </div>
        <div class="login-cover">
            <div class="login-area">
                <div class="login-font-cover">
                    <div class="login-font-area">
                        <div class="login-font">ログイン~Login~</div>
                    </div>
                </div>
                <div class="login-line-cover">
                    <div class="login-line-area">
                        <div class="login-line"></div>
                    </div>
                </div>
                <div class="login-input-cover">
                    <div class="login-input-area">
                        <div class="email-login-font-cover">
                            <div class="email-login-font-area">
                                <div class="email-login-font">メールアドレスでログインする</div>
                            </div>
                        </div>
                        <div class="email-input-cover">
                            <div class="email-input-area">
                                <div class="login-input-font">メールアドレス</div>
                                <input class="login-input" name="user-data">
                            </div>
                        </div>
                        <div class="pass-input-cover">
                            <div class="pass-input-area">
                                <div class="login-input-font">パスワード</div>
                                <input class="login-input" name="user-data" placeholder="7文字以上の半角英数字">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="login-button-cover">
                    <div class="login-button-area">
                        <button class="login-button" id="login-button">ログインする</button>
                    </div>
                </div>
            </div>
        </div>
        <script defer src="./login.js"></script>
    </body>
</html>