const choiceCover = document.getElementById('choice-cover')
const menteeFont = document.getElementById('mentee-font')

window.addEventListener('load', () => {
    menteeFont.style.color = '#3787ff';
})

choicecover.addEventListener('click', (e) => {
    // console.log(e.target)
    const choiceFont = document.getElementsByClassName('choice-font');
    for (let i = 0; i < choiceFont.length; i++) {
        choiceFont[i].style.color = '#505050';
    }
    e.target.style.color = '#3787ff';

    // if (e.target.id == 'notice-font') {

    // } else if (e.target.id == 'news-font') {

    // }

})