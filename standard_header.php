<?php session_start(); ?>
<?php include 'standard_header_include.php' ?>
<body>
    <div class="header-cover">
        <div class="header-area">
            <!-- FORCEアイコン -->
            <div class="icon-cover">
                <div id="force-icon" class="icon-area">
                    <div class="icon-img">
                        <img class="force-icon" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1645076855759x512639778157916600%2FFORCE-logo.gif?w=64&amp;h=64&amp;auto=compress&amp;fit=crop&amp;dpr=2">
                    </div>
                    <div class="force-icon-font-area">
                        <div class="force-icon-font">FORCE</div>
                    </div>
                </div>
            </div>
            <!-- メニューボタンエリア -->
            <div class="left-button-group-cover">
                <div class="left-button-group-area">
                    <div class="left-element-button-cover">
                        <div class="left-element-button-area">
                            <div class="mentor-search-button">
                                <div id="mentor-search"class="left-element-font">学内メンターを探す</div>
                            </div>
                        </div>
                    </div>
                    <div class="gray-line-cover">
                        <div class="gray-line"></div>
                    </div>
                    <div class="left-element-button-cover">
                        <div class="left-element-button-area">
                            <div class="project-search-button">
                                <div id="projects-search" class="left-element-font">プロジェクトを探す</div>
                            </div>
                        </div>
                    </div>
                    <div class="gray-line-cover">
                        <div class="gray-line"></div>
                    </div>
                    <div class="left-element-button-cover">
                        <div class="left-element-button-area">
                            <div class="look-members-button">
                                <div id="view-member" class="left-element-font">学校のメンバーを確認する</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 右の円ボタン -->
            <div class="right-button-group-cover">
                <div class="right-button-group-area">
                    <div class="circle-button-cover">
                        <div id="modal-open" class="output-button-area">
                            <div class="circle-button-element">
                                <div class="circle-button">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="circle-button-cover">
                        <div id="notice-button" class="circle-button-area">
                            <div class="circle-button-element">
                                <div class="circle-button">
                                    <i class="fa-solid fa-bell"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="circle-button-cover">
                        <div id="mail-button" class="circle-button-area">
                            <div class="circle-button-element">
                                <div class="circle-button">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 後でjsで記述 -->
                    <div class="user-circle-button-cover">
                        <div id="open-modal" class="user-circle-button-area">
                            <img class="user-img" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1646270768463x686078306163661000%2F0_9_1_0_577_1_1_1_1_1_0_0_p0.png?w=384&h=307&auto=compress&dpr=2&fit=max">
                        </div>
                    </div>
                </div>
            </div>
            <!-- メンティープロジェクトモーダル -->
            <div id="modal-cover" class="modal-cover">
                <div class="modal-area">
                    <div class="modal-content">
                        <div class="modal-font-cover">
                            <div class="modal-font-area">
                                <div class="modal-font">アウトプットする</div>
                            </div>
                        </div>
                        <div class="modal-select-menu-cover">
                            <div class="modal-select-menu-area">
                                <div class="modal-select-menu">
                                    <div class="mentee-button-cover">
                                        <div class="select-menu-button-area">
                                            <div class="mentee-icon-cover">
                                                <div class="mentee-icon-area">
                                                    <div class="mentee-icon">
                                                        <i class="fa-solid fa-user-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mentee-font-cover">
                                                <div class="mentee-font-area">
                                                    <div class="mentee-font">メンティーを募集する</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="project-button-cover" class="project-button-cover">
                                        <div class="select-menu-button-area">
                                            <div class="project-icon-cover">
                                                <div class="project-icon-area">
                                                    <div class="project-icon">
                                                        <i class="fa-solid fa-copy"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-font-cover">
                                                <div class="project-font-area">
                                                    <div class="project-font">プロジェクトをアウトプット</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ユーザーボタンモーダル -->
            <div id="user-modal" class="user-modal-cover">
                <div class="user-modal-area">
                    <div class="user-modal-content">
                        <div id="mypage-button" class="user-page-button-cover">
                            <div class="user-page-button-area">
                                <!-- 後でjsで記述 -->
                                <div class="user-img-cover">
                                    <div class="user-img-area">
                                        <img class="user-img" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1646270768463x686078306163661000%2F0_9_1_0_577_1_1_1_1_1_0_0_p0.png?w=384&h=307&auto=compress&dpr=2&fit=max">
                                    </div>
                                </div>
                                <div class="user-page-font-cover">
                                    <div class="user-name-cover">
                                        <div class="user-name"><?php echo $_SESSION['username'] ?></div>
                                    </div>
                                    <div class="user-page-bluefont-cover">
                                        <div class="user-page-blufont">マイページへ</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="projectmanagement-button" class="project-control-cover">
                            <div class="project-control-area">
                                <div class="project-control-font-cover">
                                    <div class="project-control-font-area">
                                        <div class="project-control-font">プロジェクト管理</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="view-contact-button" class="view-contact-button-cover">
                            <div class="view-contact-button-area">
                                <div class="view-contact-font-cover">
                                    <div class="view-contact-font-area">
                                        <div class="view-contact-font">連絡先一覧</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="logout-button" class="logout-cover">
                            <div class="logout-area">
                                <div class="logout-font-cover">
                                    <div class="logout-font-area">
                                        <div class="logout-font">ログアウト</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script defer src="./standard_header.js"></script>
</body>