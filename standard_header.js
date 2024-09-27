const forceIcon = document.getElementById('force-icon');
const mentorSearch = document.getElementById('mentor-search');
const viewMember = document.getElementById('view-member');
const projectsSearch = document.getElementById('projects-search');
const modalOpen = document.getElementById('modal-open');
const modal = document.getElementById('modal-cover');
const openModal = document.getElementById('open-modal');
const userModal = document.getElementById('user-modal');
const mypageButton = document.getElementById('mypage-button')
const projectOutput = document.getElementById('project-button-cover');
const mailButton = document.getElementById('mail-button');
const noticeButton = document.getElementById('notice-button');
const projectManagementButton = document.getElementById('projectmanagement-button');
const viewContact = document.getElementById('view-contact-button');
const logoutButton = document.getElementById('logout-button');
// ヘッダーFORCEアイコンボタン
forceIcon.addEventListener('click', () => {
    window.location.href = 'http://localhost/code/force/force_index.php';
})
// 学内メンターを探すボタン
mentorSearch.addEventListener('click', () => {
    window.location.href = 'http://localhost/code/force/search_mentor.php';
})
// 学校のメンバーを探すボタン
viewMember.addEventListener('click', () => {
    window.location.href = 'http://localhost/code/force/view_member.php';
})
// プロジェクトを探すボタン
projectsSearch.addEventListener('click', () => {
    window.location.href = 'http://localhost/code/force/search_projects.php';
})
// ヘッダーベルボタン
noticeButton.addEventListener('click', () => {
    window.location.href = 'http://localhost/code/force/notice.php'
})
// ヘッダーメールボタン
mailButton.addEventListener('click', () => {
    window.location.href = 'http://localhost/code/force/mail.php';
})
// ヘッダープラスボタン
projectOutput.addEventListener('click', () => {
    window.location.href = 'http://localhost/code/force/project_output.php';
})

// ヘッダーユーザーボタンクリック時のモーダルのコンテンツ
// マイページボタン
mypageButton.addEventListener('click', () => {
    window.location.href = 'http://localhost/code/force/mypage.php';
})
// プロジェクト管理ボタン
projectManagementButton.addEventListener('click', () => {
    window.location.href = 'http://localhost/code/force/projectmanagement.php';
})
// 連絡先一覧ボタン
viewContact.addEventListener('click', () => {
    window.location.href = 'http://localhost/code/force/view_contact.php';
})
// ログアウトボタン
logoutButton.addEventListener('click', () => {
    window.location.href = 'http://localhost/code/force/login.php';
})

// ヘッダープラスボタンクリック時のモーダル
modalOpen.addEventListener('click', () => {
    modal.style.display = 'block';
})
// モーダル以外をクリックした時に閉じる処理
addEventListener('click',(e) => {
    if (e.target == modal) {
        modal.style.display = 'none';
    }
})

// ヘッダーユーザーアイコンボタンのモーダル
openModal.addEventListener('click', () => {
    userModal.style.display = 'block';
})
// モーダル以外をクリックした時に閉じる処理
addEventListener('click',(e) => {
    if (e.target == userModal) {
        userModal.style.display = 'none';
    }
})