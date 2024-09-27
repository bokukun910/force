<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>FORCE</title>
    <?php include 'signup_include.php' ?>
  </head>
  <body>
    <div class="header" id="wrapper">
      <?php include 'header.php'; ?>
    </div>
    <div class="signup-area-cover">
      <div class="signup-area">
        <div class="signup-font-cover">
          <div class="signup-font-area">
            <div class="signup-font">
              <span>新規登録~signup~</span>
            </div>
          </div>
        </div>
        <div class="input-area-cover">
          <div class="input-area">
            <div class="glay-line"></div>
            <div class="userdata-input-area">
              <div class="email-font-area">
                <span class="email-font">メールアドレス</span>
              </div>
              <div class="email-input">
                <input id="email-input" class="user-input" name="user-data">
              </div>
              <div id="email-er-msg"></div>
            </div>
            <div class="userdata-input-area">
              <div class="passward-font-area">
                <span class="passward-font">パスワード</span>
              </div>
              <div class="passward-input">
                <input id="pass-input" class="user-input" name="user-data" placeholder="7文字以上の半角英数字">
              </div>
              <div id="pass-er-msg"></div>
            </div>
            <div class="userdata-input-area">
              <div class="username-font-area">
                <span class="username-font">ニックネーム(15文字まで)</span>
              </div>
              <div class="username-input">
                <input id="name-input" class="user-input" name="user-data" placeholder="このアプリ内のユーザー名">
              </div>
              <div id="name-er-msg"></div>
            </div>

            <div class="userdata-input-area">
              <div class="school_year-check-area">
                <div class="school_year-font-area">
                  <span class="shool_year-font">学年</span>
                </div>
                <div class="school_year-choice-area">
                  <select class="school_year-choice" name="user-data">
                    <option value=1>1年生</option>
                    <option value=2>2年生</option>
                    <option value=3>3年生</option>
                    <option value=4>OB</option>
                  </select>
                </div>
              </div>
            </div>


            <div class="signup-button-cover">
              <div class="signup-button-area">
                <button id="create-user" class="signup-button">新規登録する</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script defer src="./signup.js"></script>
    <!-- <script src="./validation.js"></script> -->
  </body>
</html>