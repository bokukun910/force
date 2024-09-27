const URL = 'http://localhost/code/force/controller.php';
const loginButton = document.getElementById('login-button');


loginButton.addEventListener('click', () => {
    const userData = document.getElementsByName('user-data');
    // console.log(userData[0].value);

    const postData = {
        model: 'force',
        action: 'login',
        requestdata: {
            email: userData[0].value,
            password: userData[1].value,
        }
    }
    console.log(postData);
    // const res =　await fetch (URL, {
    //     method: 'POST',
    //     headers: {
    //         'Content-Type': 'application/json'
    //     },
    //     body: JSON.stringify(postdata)
    // })
    // const response = await res.json();
    // console.log(response);
    // window.location.href = 'http://localhost/code/force/search_mentor.php';
})