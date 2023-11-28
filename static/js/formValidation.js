function validateFile(event, fileAccepted){
    const file = event.target.files[0];

    if (file) {
      const fileType = file.type;

      if (!fileType.includes(fileAccepted)){ 
        showFileError(fileAccepted)
        event.target.value = null
      }
    }
}

function showFileError(fileAccepted){
  const queryString = window.location.search;

  const message = `Error: Solo se permite subir archivos de tipo ${fileAccepted}`;

  document.getElementById('messageP').innerText = message
  document.getElementById('message').classList.remove('show')
  document.getElementById('message').classList.add('show')
}