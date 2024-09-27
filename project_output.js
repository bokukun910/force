const URL = 'http://localhost/code/force/controller.php';
const postButton = document.getElementById('post-button');

postButton.addEventListener('click', project_post);
async function project_post() {
    const projectData = document.getElementsByName('project-data');
    const postData = {
        model: 'force',
        action: 'project_post',
        requestdata:  {
            img: projectData[0].value,
            name: projectData[1].value,
            description: projectData[2].value,
            goal: projectData[3].value,
            member: projectData[4].value,
            rule: projectData[5].value,
            reward: projectData[6].value,
            contact: projectData[7].value,

        }
    }
    console.log(postData);
    const res =　await fetch (URL, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(postData)
    })
    const response = await res.json();
    console.log(response);
    window.location.href = 'http://localhost/code/force/search_projects.php';
}