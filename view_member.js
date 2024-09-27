const URL = 'http://localhost/code/force/controller.php';
const yearButton = document.getElementById('year-button')
let click = 1;


yearButton.addEventListener('click', (e) => {
    const yearValue = document.getElementsByClassName('view-member-choice-font')
    for (let i = 0; i < yearValue.length; i++) {
        // console.log(i)
        yearValue[i].style.color = '#505050';//文字を全て黒に
    }
    e.target.style.color = '#3787ff';//クリックしたボタンを青に
    console.log(e.target)
    if (e.target.id == '1year') {
        click = 1
    } else if (e.target.id == '2year') {
        click = 2
    } else if (e.target.id == '3year') {
        click = 3
    } else if (e.target.id == 'ob') {
        click = 4
    } else {
        click = 5
    }
    console.log("cliakchange")

    member_load()
})

window.addEventListener('load', () => {
    const oneyearButton = document.getElementById('1year')
    oneyearButton.style.color = '#3787ff';
    console.log("読み込み中")
    member_load();
})

async function member_load() {
    const memberDisplay = document.getElementById('member-display')
    const postdata = {
        model: 'force',
        action: 'view_member',
        requestdata: {
            year: click,
        }
    }
    // const query = new URLSearchParams(postdata);
    // const res =　await fetch ('http://localhost/code/force/controller.php${query}')
    const res =　await fetch (URL, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body:JSON.stringify(postdata)
    })
    const response = await res.json();
    console.log(response);
    let elements = '';
    memberDisplay.innerHTML = '';
    response.forEach(user => {
        elements += `
        <div class="member-cover">
            <div class="member-area">
                <div class="member-default-img-cover">
                    <div class="member-default-img-area">
                        <img class="member-default-img" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1646270768463x686078306163661000%2F0_9_1_0_577_1_1_1_1_1_0_0_p0.png?w=384&h=307&auto=compress&dpr=2&fit=max">
                    </div>
                </div>
            </div>
            <div class="member-name-cover">
                <div class="member-name">${user.username}</div>
            </div>
        </div>
        `;
    });
    memberDisplay.insertAdjacentHTML('afterbegin', elements);
}