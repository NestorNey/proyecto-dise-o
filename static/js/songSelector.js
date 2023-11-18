const songClick = (rootDir, songName) => {
  location.replace(`${rootDir}/?screen=reproductor&songName=${songName}`);
};
