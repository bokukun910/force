const URL = 'http://localhost/code/force/controller.php';
const createUser = document.getElementById('create-user')

// window.addEventListener('load',showUser);

// async function showUser() {
//     const tagAria = document.getElementById('choice-tag-cover');
//     const postData = {
//         model: 'force',
//         action: 'view_tag',
//     }
//     const res =　await fetch (URL, {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body:JSON.stringify(postData)
//     })
//     const response = await res.json();
//     console.log(response);
//     let elements = '';
//     viewMentor.innerHTML = '';
//     response.forEach(tag => {
//         elements =+ `
//         <div class="tag-choice-cover">
//             <div class="tag-choice-area">
//                 <div class="tag-name-cover">
//                     <div class="tag-name-area">
//                         <div class="tag-name">${tag.name}</div>
//                     </div>
//                 </div>
//             </div>
//         </div>
//         `
//     })
// }


createUser.addEventListener('click', create);
async function create() {
    const userData = document.getElementsByName('user-data')
    // console.log(userData)
    const postData = {
        model: "Force",
        action: "signup",
        requestdata: {
            email: userData[0].value,
            password: userData[1].value,
            username: userData[2].value,
            year: userData[3].value,
        }
    }
    console.log(postData)
    const res =　await fetch ("http://localhost/code/force/controller.php", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(postData)
    })
    const response = await res.json();
    // if(response == 'er1') {
    //     alert ('正しいメールアドレスを入力してください。')
    // } else if(response == 'er2') {
    //     alert ('パスワードは7文字以上です。')
    // } else if (response == 'er3') {
    //     alert ('ユーザーネームは必須項目です。')
    // } else if (response === '登録失敗') {
    //     console.log(response)
    // } else {
    //     console.log(response);
        // window.location.href = 'http://localhost/code/force/search_mentor.php';
    // }
    console.log(response)
    window.location.href = 'http://localhost/code/force/search_mentor.php';
    
}
