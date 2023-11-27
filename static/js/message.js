const queryString = window.location.search;

const urlParams = new URLSearchParams(queryString);

const message = urlParams.get('message');

console.log(message)

if(message != null){
    document.getElementById('messageP').innerText = message
    document.getElementById('message').classList.add('show')
    setTimeout(() => {
        document.getElementById('message').classList.remove('show')
    }, 3000);
}