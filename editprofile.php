<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>FORCE</title>
        <?php include 'editprofile_include.php' ?> 
        <script src="https://kit.fontawesome.com/7381fd275e.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header" id="wrapper">
            <?php include 'standard_header.php'; ?>
        </div>
        <div class="editprofile-cover">
            <div class="editprofile-area">
                <div class="editprofile-title-cover">
                    <div class="editprofile-title-area">
                        <div class="editprofile-font">プロフィールの編集</div>
                    </div>
                </div>
                <div class="img-edit-cover">
                    <div class="simg-edit-area">
                        <div class="img-edit"></div>
                    </div>
                </div>
                <div class="profile-edit-input-cover">
                    <div class="profile-edit-input-area">
                        <div class="name-edit-cover">
                            <div class="name-edit-area">
                                <div class="name-edit-font-cover">
                                    <div class="name-edit-font-area">
                                        <div class="name-edit-font">ユーザー名</div>
                                    </div>
                                </div>
                            </div>
                            <div class="name-edit-input-cover">
                                <div class="name-edit-input-area">
                                    <input class="name-edit-input">
                                </div>
                            </div>
                        </div>
                        <div class="self-introduction-edit-cover">
                            <div class="self-introduction-edit-area">
                                <div class="self-introduction-edit-font-cover">
                                    <div class="self-introduction-edit-font-area">
                                        <div class="self-introduction-edit-font">自己紹介(250字まで)</div>
                                    </div>
                                </div>
                                <div class="self-introduction-edit-input-cover">
                                    <div class="self-introduction-edit-input-area">
                                        <textarea class="self-introduction-edit-input"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="storage-button-cover">
                            <div class="storage-button-area">
                                <button class="storage-button">保存する</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>