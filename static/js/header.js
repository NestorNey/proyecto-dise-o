function openPorfileMenu() {
  let porfileMenu = document.getElementById("porfileMenu");
  porfileMenu.classList.toggle("opened");
}

const redirectSearch = (event) => {
  if (event.key === "Enter") {
    let input = event.target.value;
    document.location = `./?screen=results&input=${input}`;
  }
};

const redirectLogin = () => {
  document.location = `./?screen=login/login`;
};

const redirectSignin = () => {
  document.location = `./?screen=login/signin`;
};

const redirectCloseSession = () => {
  document.location = `./?screen=login/close`;
};

const redirectProfile = () => {
  document.location = `./?screen=profile`;
};

const redirectPlanes = () => {
  document.location = `./?screen=planes`;
};
