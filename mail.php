<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>FORCE</title>
        <?php include 'mail_include.php' ?> 
        <script src="https://kit.fontawesome.com/7381fd275e.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header" id="wrapper">
            <?php include 'standard_header.php'; ?>
        </div>
        <div class="mail-cover">
            <div class="mail-area">
                <div class="mail-font-cover">
                    <div class="mail-font-area">
                        <div class="mail-font">応募メール一覧</div>
                    </div>
                </div>
                <div class="mail-content-cover">
                    <div class="mail-content-area">
                        <div class="choice-font-cover">
                            <div id="choice-cover" class="choice-font-area">
                                <div id="mentee-button" class="mentee-mail-font-cover">
                                    <div class="mentee-mail-font-area">
                                        <div id="mentee-font" class="choice-font">メンティー</div>
                                        <!-- <i class="fa-solid fa-envelope"></i> -->
                                    </div>
                                </div>
                                <div id="project-member-button" class="project-member-font-cover">
                                    <div class="project-member-font-area">
                                        <div id="project-member-font" class="choice-font">プロジェクトメンバー</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="glay-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <script defer src="./mail.js"></script>
    </body>
</html>