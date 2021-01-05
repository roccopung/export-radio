async function fetchJSON(url) {
  const response = await fetch(url, {
    method: "GET",
    redirect: "follow"
  });
  return response.json();
}

function initPlaylist(tracks) {
  let playlist = {
    container: document.querySelector(".playlist"),
    player: document.querySelector(".playlist--player"),
    counter: document.querySelector(".playlist--counter"),
    artwork: document.querySelector(".playlist--artwork"),
    nextButton: document.querySelector(".playlist--next"),
    prevButton: document.querySelector(".playlist--prev"),
    currentTrack: 0,
    tracks: tracks
  };
  playlist.container.setAttribute("data-track-count", playlist.tracks.length);

  function loadTrack(n) {
    if (!playlist.tracks[n]) {
      console.log(`No track with index ${n}`);
      return;
    }
    playlist.currentTrack = n;

    playlist.counter.innerText = `Playing ${playlist.currentTrack + 1} / ${playlist.tracks.length
      }`;

    // Generate Mixcloud iframe
    const iframe = document.createElement("iframe");
    const url = playlist.tracks[playlist.currentTrack].key;
    iframe.setAttribute(
      "src",
      `https://www.mixcloud.com/widget/iframe/?hide_cover=1&&light=1&hide_artwork=1&feed=${encodeURI(
        url
      )}`
    );
    iframe.setAttribute("frameborder", "0");
    //playlist.player.innerHTML = "<span>Mixcloud iframe goes here</span>";
    playlist.player.innerHTML = "";
    playlist.player.insertAdjacentElement("beforeend", iframe);
    playlist.container.setAttribute("data-current-track", playlist.currentTrack);

    // Generate artwork image
    const img = playlist.artwork.querySelector("img");
    img.setAttribute("width", "640");
    img.setAttribute("height", "640");
    img.setAttribute(
      "src",
      playlist.tracks[playlist.currentTrack].pictures["640wx640h"]
    );

    playlist.artwork.innerHTML = "";
    playlist.artwork.insertAdjacentElement("beforeend", img);

    if (playlist.currentTrack === playlist.tracks.length - 1) {
      playlist.container.classList.add("last-track");
    } else {
      playlist.container.classList.remove("last-track");
    }
  }
  playlist.nextButton.addEventListener("click", (e) => {
    loadTrack(playlist.currentTrack + 1);
  });
  playlist.prevButton.addEventListener("click", (e) => {
    loadTrack(playlist.currentTrack - 1);
  });
  loadTrack(0);
}

window.addEventListener("DOMContentLoaded", () => {
  fetchJSON("https://api.mixcloud.com/ExPort_RADIO/cloudcasts/").then((data) => {
    initPlaylist(data.data); // contains all tracks
  });
});