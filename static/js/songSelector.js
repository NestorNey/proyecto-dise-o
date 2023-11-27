const songClick = (rootDir, songName) => {
  location.replace(`${rootDir}/?screen=reproductor&songId=${songName}`);
};
