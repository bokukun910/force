<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>FORCE</title>
        <?php include 'project_output_include.php' ?> 
        <script src="https://kit.fontawesome.com/7381fd275e.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header" id="wrapper">
            <?php include 'standard_header.php'; ?>
        </div>
        <div class="project-output-cover">
            <div class="project-output-area">
                <div class="project-output-top-cover">
                    <div class="project-output-top-area">
                        <div class="project-output-font-cover">
                            <div class="project-output-font-area">
                                <div class="project-output-font">プロジェクトをアウトプット</div>
                            </div>
                        </div>
                        <div class="project-output-line-cover">
                            <div class="project-output-line-area">
                                <div class="project-output-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-input-cover">
                    <div class="project-input-area">
                        <div class="project-img-cover">
                            <div class="project-img-area">
                                <form action="#">
                                    <button class="project-img-button">プロジェクトのイメージをアップロードしてください。</button>
                                    <input type="file" class="project-img-input" accept="image/*" name="project-data">
                                </form>
                            </div>
                        </div>
                        <div class="project-name-area">
                            <div class="project-name-font-area">
                                <span class="project-name-font">プロジェクトの名前（30文字まで）</span>
                            </div>
                            <div class="project-name-input-cover">
                                <input id="project-name-input" class="project-name-input" name="project-data" placeholder="プロジェクト名">
                            </div>
                            <div id="project-name-er-msg"></div>
                        </div>
                        <div class="project-description-area">  
                            <div class="project-description-font-area">
                                <span class="project-description-font">プロジェクト概要（1000文字まで）</span>
                            </div>
                            <div class="project-description-input-area">
                                <textarea id="pass-input" class="project-description-input" name="project-data" placeholder="プロジェクトの概要を入力してください"></textarea>
                            </div>
                            <div id="project-description-er-msg"></div>
                        </div>
                        <div class="project-goal-area">
                            <div class="project-goal-font-area">
                                <span class="project-goal-font">プロジェクトのゴール（500文字まで）</span>
                            </div>
                            <div class="project-goal-input-area">
                                <textarea id="name-input" class="project-goal-input" name="project-data" placeholder="プロジェクトのゴールを入力してください"></textarea>
                            </div>
                            <div id="name-er-msg"></div>
                        </div>
                        <div class="project-member-area">
                            <div class="project-member-font-area">
                                <span class="project-member-font">メンバーに欲しい人物像（500文字まで）</span>
                            </div>
                            <div class="project-member-input-area">
                                <textarea id="name-input" class="project-member-input" name="project-data" placeholder="メンバーに欲しいスキルや心構えを入力してください"></textarea>
                            </div>
                            <div id="name-er-msg"></div>
                        </div>
                        <div class="project-rule-area">
                            <div class="project-rule-font-area">
                                <span class="project-rule-font">プロジェクトのルール（500文字まで）</span>
                            </div>
                            <div class="project-rule-input-area">
                                <textarea id="name-input" class="project-rule-input" name="project-data" placeholder="プロジェクトのルールを入力してください"></textarea>
                            </div>
                            <div id="name-er-msg"></div>
                        </div>
                        <div class="project-reward-area">
                            <div class="project-reward-font-area">
                                <span class="project-reward-font">報酬（500文字まで）</span>
                            </div>
                            <div class="project-reward-input-area">
                                <textarea id="name-input" class="project-reward-input" name="project-data" placeholder="報酬があれば入力してください"></textarea>
                            </div>
                            <div id="name-er-msg"></div>
                        </div>
                        <div class="project-contact-area">
                            <div class="project-contact-font-area">
                                <div class="project-contact-top-font-area">
                                    <span class="project-contact-top-font">グループチャットなどの連絡先の招待URL</span>
                                </div>
                                <div class="project-contact-under-font-area">
                                    <span class="project-contact-under-font">※招待URLを登録している場合、ユーザーがメンバーになるとチームスラックIDを確認できるようになります。</span>
                                </div>
                            </div>
                            <div class="project-contact-input-area">
                                <input  class="project-contact-input" name="project-data" placeholder="招待URL">
                            </div>
                        </div>
                        <div class="post-button-cover">
                            <div id="post-button" class="post-button-area">
                                <button class="post-button">投稿する</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <script defer src="./project_output.js"></script>
    </body>
</html>