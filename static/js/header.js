function openPorfileMenu(){
    let porfileMenu = document.getElementById("porfileMenu")
    porfileMenu.classList.toggle("opened")
}

function redirectSearch(){
    if (event.key === "Enter") {
        let input = event.target.value
        document.location = `./?screen=results&input=${input}`
    }
}