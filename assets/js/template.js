function reposGithub(){
    fetch('https://gh-pinned-repos.egoist.dev/?username=jonasborges93')
        .then( response => response.json())
        .then(data => console.log(data));
}

reposGithub()