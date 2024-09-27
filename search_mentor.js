const URL = 'http://localhost/code/force/controller.php';

window.addEventListener('load', () => {
    showUser();
});

// async const showUser = () => {
async function showUser() {
    const viewMentor = document.getElementById('view_mentor');
    const postData = {
        model: 'force',
        action: 'view_mentor',
    }
    const res =　await fetch (URL, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body:JSON.stringify(postData)
    })
    const response = await res.json();
    console.log(response);
    let elements = '';
    viewMentor.innerHTML = '';
    response.forEach(user => {
        elements += `
        <div class="user-cover">
            <div class="user-area">
                <div class="user-default-img-cover">
                    <div class="user-default-img-area">
                        <img class="user-default-img" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1646270768463x686078306163661000%2F0_9_1_0_577_1_1_1_1_1_0_0_p0.png?w=384&h=307&auto=compress&dpr=2&fit=max">
                    </div>
                </div>
                <div class="mentor-name-cover">
                    <div class="mentor-name-area">
                        <div class="mentor-name">${user.username}</div>
                    </div>
                </div>
            </div>
        </div>
        `;
    });
    view_mentor.insertAdjacentHTML('afterbegin', elements);
}
// async function showUser() {
    // const view_mentor = document.getElementById('view_mentor');
    // const postdata = {
    //     model: 'force',
    //     action: 'view_mentor',
    // }
    // const res =　await fetch (URL, {
    //     method: 'POST',
    //     headers: {
    //         'Content-Type': 'application/json'
    //     },
    //     body:JSON.stringify(postdata)
    // })
    // const response = await res.json();
    // console.log(response);
    // let elements = '';
    // view_mentor.innerHTML = '';
    // response.forEach(user => {
    //     elements += `
    //     <div class="user-cover">
    //         <div class="user-area">
    //             <div class="user-default-img-cover">
    //                 <div class="user-default-img-area">
    //                     <img class="user-default-img" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1646270768463x686078306163661000%2F0_9_1_0_577_1_1_1_1_1_0_0_p0.png?w=384&h=307&auto=compress&dpr=2&fit=max">
    //                 </div>
    //             </div>
    //             <div class="mentor-name-cover">
    //                 <div class="mentor-name-area">
    //                     <div class="mentor-name">${user.username}</div>
    //                 </div>
    //             </div>
    //         </div>
    //     </div>
    //     `;
    // });
    // view_mentor.insertAdjacentHTML('afterbegin', elements);
// }
