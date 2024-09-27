<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>FORCE</title>
        <?php include 'mypage_include.php' ?> 
        <script src="https://kit.fontawesome.com/7381fd275e.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header" id="wrapper">
            <?php include 'standard_header.php'; ?>
        </div>
        <div class="mypage-cover">
            <div class="mypage-area">
                <div class="mypage-top-cover">
                    <div class="mypage-top-area">
                        <div class="mypage-blue-background"></div>
                        <div class="mypage-element-cover">
                            <div class="mypage-element-area">
                                <div class="mypage-element">
                                    <!-- 以下jsで記述 -->
                                    <div class="mypage-right-cover">
                                        <div class="mypage-right-area">
                                            <div class="mypage-img-cover">
                                                <div class="mypage-img-area">
                                                    <img class="mypage-img" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1646270768463x686078306163661000%2F0_9_1_0_577_1_1_1_1_1_0_0_p0.png?w=384&h=307&auto=compress&dpr=2&fit=max">
                                                </div>
                                            </div>
                                            <div class="mypage-sns-cover">
                                                <div class="mypage-sns-area">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mypage-left-cover">
                                        <div class="mypage-left-area">
                                            <div class="mypage-name-cover">
                                                <div class="mypage-name-area">
                                                    <div class="mypage-name"><?php echo $_SESSION['username'] ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mypage-under-cover">
                    <div class="mypage-button-cover">
                        <div class="mypage-button-area">
                            <div class="portfolio-button-cover">
                                <div class="portfolio-button">
                                    <div class="portfolio-button-font-cover">
                                        <div class="portfolio-button-font-area">
                                            <div class="portfolio-button-font">ポートフォリオ追加</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="editprofile-button-cover">
                                <div class="editprofile-button-area">
                                    <div id="editprofile-button" class="editprofile-button">
                                        <div class="editprofile-button-font-cover">
                                            <div class="editprofile-button-font-area">
                                                <div class="editprofile-font">プロフィール編集</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-element-cover">
                        <div class="right-element-area">
                            <div class="mypage-choice-cover">
                                <div class="mypage-choice-area">
                                    <div class="mypage-font-cover">
                                        <div id="choice-cover" class="mypage-font-area">
                                            <div id="force-button" class="force-choice-font-cover">
                                                <div class="force-choice-font-area">
                                                    <div id="force-font" class="choice-font">FORCE</div>
                                                </div>
                                            </div>
                                            <div id="portfolio-button" class="portfolio-choice-font-cover">
                                                <div class="portfolio-choice-font-area">
                                                    <div id="portfolio-font" class="choice-font">ポートフォリオ</div>
                                                </div>
                                            </div>
                                            <div id="coment-button" class="coment-choice-font-cover">
                                                <div class="coment-choice-font-area">
                                                    <div id="coment-font" class="choice-font">コメント</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="glay-line-cover">
                                        <div class="glay-line-area">
                                            <div class="glay-line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script defer src="./mypage.js"></script>
    </body>
</html>