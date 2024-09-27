const URL = 'http://localhost/code/force/controller.php';

window.addEventListener('load', () => {
    viewProjects();
});

async function viewProjects() {
    const viewProjects = document.getElementById('view-projects');
    const postData = {
        model: 'force',
        action: 'view_projects',
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
    // const username = JSON.parse('<?php echo json_encode($username)?>');
    let elements = '';
    viewProjects.innerHTML = '';
    response.forEach(project => {
        elements += `
        <div class="project-cover">
            <div class="project-area">
                <div class="project-default-img-cover">
                    <div class="project-default-img-area">
                    <img class="project-default-img" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1645076855759x512639778157916600%2FFORCE-logo.gif?w=64&amp;h=64&amp;auto=compress&amp;fit=crop&amp;dpr=2">
                    </div>
                </div>
                <div class="project-name-cover">
                    <div class="project-name">${project.name}</div>
                </div>
                <div class="project-user-info-cover">
                    <div class="project-user-info-area">
                        <div class="project-leader-img-cover">
                            <div class="project-leader-img-area">
                                <img class="project-leader-img" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1646270768463x686078306163661000%2F0_9_1_0_577_1_1_1_1_1_0_0_p0.png?w=384&h=307&auto=compress&dpr=2&fit=max">
                            </div>
                        </div>
                        <div class="project-leader-name-cover">
                            <div class="project-leader-name">${project.leader_name}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        `;
    });
    viewProjects.insertAdjacentHTML('afterbegin', elements);
}

{/* <img class="project-default-img" src="${project.img}"></img> */}