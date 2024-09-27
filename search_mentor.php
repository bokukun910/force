<?php session_start(); ?>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>FORCE</title>
        <?php include 'search_mentor_include.php' ?> 
        <?php include 'footer_include.php' ?>
        <script src="https://kit.fontawesome.com/7381fd275e.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header" id="wrapper">
            <?php include 'standard_header.php'; ?>
        </div>
        <div class="search-mentor-area-cover">
            <div class="search-mentor-area">
                <div class="search-mentor-left-area">
                    <div class="search-mentor-left-area">
                        <div class="search-mentor-left-top-element">
                            <div class="search-mentor-left-top-font-cover">
                                <div class="search-mentor-left-top-font-area">
                                    <div class="search-mentor-left-top-font">ユーザー名で検索</div>
                                </div>
                            </div>
                            <div class="search-mentor-left-textbox-cover">
                                <div class="search-mentor-left-textbox-area">
                                    <input class="search-mentor-textbox" placeholder="ユーザー名で検索をしてください" >
                                </div>
                            </div>
                        </div>
                        <div class="search-mentor-tag-cover">
                            <div class="search-mentor-tag-area">
                                <div class="search-mentor-tag-font-cover">
                                    <div class="search-mentor-tag-font-area">
                                        <div classs="search-mentor-tag-font">タグ</div>
                                    </div>
                                </div>
                                <div class="search-mentor-tag-choice-cover">
                                    <div class="search-mentor-tag-choice-area"></div>
                                </div>
                            </div>
                        </div>
                        <div class="terms-clear-button-cover">
                            <div class="terms-clear-button-area">
                                <button class="terms-clear-button">検索条件をクリアにする</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-mentor-right-cover">
                    <div class="search-mentor-right-area">
                        <div class="search-mentor-font-cover">
                            <div class="search-mentor-font-area">
                                <div class="search-mentor-font">学内メンターを探す</div>
                            </div>
                        </div>
                        <div class="search-mentor-right-element-cover">
                            <div class="search-mentor-right-element-area">
                                <div class="search-mentor-right-element-top">
                                    <div class="serch-mentor-right-top-font-cover">
                                        <div class="serch-mentor-right-top-font-area">
                                            <div class="search-mentor-right-top-font">新着</div>
                                        </div>
                                    </div>
                                    <div class="search-mentor-right-top-lien-cover">
                                        <div class="search-mentor-right-top-line-area">
                                            <div class="search-mentor-right-top-line">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view-user" id="view_mentor">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="footer">
            <?php include 'footer.php'; ?>
        </div> -->
        <script defer src="./search_mentor.js"></script>
    </body>
</html>