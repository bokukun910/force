<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>FORCE</title>
        <?php include 'view_member_include.php' ?>
        <script src="https://kit.fontawesome.com/7381fd275e.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header" id="wrapper">
            <?php include 'standard_header.php'; ?>
        </div>
        <div class="view-member-cover">
            <div class="view-member-area">
                <div class="view-member-top-cover">
                    <div class="view-member-top-area">
                        <div class="view-member-top-font-cover">
                            <div class="view-member-top-font-area">
                                <div class="view-member-top-font">学校のメンバーを確認する</div>
                            </div>
                        </div>
                        <div class="view-member-choice-cover">
                            <div class="view-member-choice-area">
                                <div class="view-member-choice-font-cover">
                                    <div id="year-button" class="view-member-choice-font-area">
                                        <div id="1year" class="view-member-choice-font" name="year-value" value=1>1年生</div>
                                        <div id="2year"class="view-member-choice-font"　name="year-value" value=2>2年生</div>
                                        <div id="3year" class="view-member-choice-font"　name="year-value" value=3>3年生</div>
                                        <div id="ob" class="view-member-choice-font"　name="year-value" value=4>OB</div>
                                        <div id="teacher" class="view-member-choice-font"　name="year-value" value=5>先生</div>
                                    </div>
                                </div>
                                <div class="view-member-choice-line-cover">
                                    <div class="view-member-choice-line-area">
                                        <div class="view-member-choice-line"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="member-display" class="member-display"></div>
            </div>
        </div>
        <script defer src="./view_member.js"></script>
    </body>
</html>

