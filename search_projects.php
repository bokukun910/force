<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>FORCE</title>
        <?php include 'search_projects_include.php' ?>
        <script src="https://kit.fontawesome.com/7381fd275e.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header" id="wrapper">
            <?php include 'standard_header.php'; ?>
        </div>
        <div class="search-projects-cover">
            <div class="search-projects-area">
                <div class="search-projects-left-cover">
                    <div class="search-projects-left-area">
                        <div class="search-projects-left-top-element">
                            <div class="search-projects-left-top-font-cover">
                                <div class="search-projects-left-top-font-area">
                                    <div class="search-projects-left-top-font">条件で絞り込み</div>
                                </div>
                            </div>
                            <div class="search-projects-left-textbox-cover">
                                <div class="search-projects-left-textbox-area">
                                    <input class="search-projects-textbox" placeholder="検索ワードを入力してください" >
                                </div>
                            </div>
                        </div>
                        <div class="search-projects-tag-cover">
                            <div class="search-projects-tag-area">
                                <div class="search-projects-tag-font-cover">
                                    <div class="search-projects-tag-font-area">
                                        <div classs="search-projects-tag-font">タグ</div>
                                    </div>
                                </div>
                                <div class="search-projects-tag-choice-cover">
                                    <div class="search-projects-tag-choice-area"></div>
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
                <div class="search-projects-right-cover">
                    <div class="search-projects-right-area">
                        <div class="search-projects-font-cover">
                            <div class="search-projects-font-area">
                                <div class="search-projects-font">プロジェクトを探す</div>
                            </div>
                        </div>
                        <div class="search-projects-right-element-cover">
                            <div class="search-projects-right-element-area">
                                <div class="search-projects-right-element-top">
                                    <div class="serch-projects-right-top-font-cover">
                                        <div class="serch-projects-right-top-font-area">
                                            <div class="search-projects-right-top-font">新着</div>
                                        </div>
                                    </div>
                                    <div class="search-projects-right-top-lien-cover">
                                        <div class="search-projects-right-top-line-area">
                                            <div class="search-projects-right-top-line">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view-projects" id="view-projects"></div>
                    </div>
                </div>
            </div>
        </div>
        <script defer src="search_projects.js"></script>
    </body>
</html>
