const choiceCover = document.getElementById('choice-cover')
const noticeFont = document.getElementById('notice-font')

window.addEventListener('load', () => {
    noticeFont.style.color = '#3787ff';
})

choiceCover.addEventListener('click', (e) => {
    // console.log(e.target)
    const choiceFont = document.getElementsByClassName('choice-font');
    for (const i = 0; i < choiceFont.length; i++) {
        choiceFont[i].style.color = '#505050';
    }
    e.target.style.color = '#3787ff';

    // if (e.target.id == 'notice-font') {

    // } else if (e.target.id == 'news-font') {

    // }

})