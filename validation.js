window.addEventListener('DOMContentLoaded', () => {

    const create_user = document.getElementById('create-user');

    create_user.addEventListener('click', (e) => {
        e.preventDefault();
        //メールアドレスバリデーション
        const email = document.getElementById('email-input');
        const email_er_msg = document.getElementById('email-er-msg');
        const pattern = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]+.[A-Za-z0-9]+$/;
        if(pattern.test(email.value)) {
            email_er_msg.textContent = '';
            email.classList.remove('input-invalid')
            return;
        } else {
            email_er_msg.classList.add('form-invalid');
            email_er_msg.textContent = 'メールアドレスが条件を満たしていません';
            email.classList.add('input-invalid');
        }
        //パスワードバリデーション
        const pass_input = document.getElementById('pass-input');
        const pass_er_msg = document.getElementById('pass-er-msg');
        if(!pass_input.value.match(/^([a-zA-Z0-9]{7,})$/)) {
            pass_er_msg.classList.add('form-invalid');
            pass_er_msg.textContent = 'パスワードが条件を満たしていません'
            pass_input.classList.add('input-invalid');
            return;
        } else {
            pass_er_msg.textContent = '';
            pass_input.classList.remove('input-invalid');
        }
        //名前バリデーション
        const name = document.getElementById('name-input');
        const name_er_msg =document.getElementById('name-er-msg');
        if(!name.value) {
            name_er_msg.classList.add('form-invalid');
            name_er_msg.textContent = 'ユーザーネームが入力されていません';
            name.classList.add('input-invalid');
            return;
        } else {
            name_er_msg.textContent = '';
            name_er_msg.classList.remove('input-invalid')
        }
        // appendScript("signup.js");
    }, false);
}, false);