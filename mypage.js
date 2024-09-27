const choiceCover = document.getElementById('choice-cover')
const forceFont = document.getElementById('force-font')
const editprofileButton = document.getElementById('editprofile-button');

editprofileButton.addEventListener('click', () => {
    window.location.href = 'http://localhost/code/force/editprofile.php';
})

window.addEventListener('load', () => {
    forceFont.style.color = '#3787ff';
})

choiceCover.addEventListener('click', (e) => {
    // console.log(e.target)
    const choice_font = document.getElementsByClassName('choice-font');
    for (const i = 0; i < choice_font.length; i++) {
        choice_font[i].style.color = '#505050';
    }
    e.target.style.color = '#3787ff';
})