function toggleIframes(status) {
  const iframes = document.querySelectorAll("iframe");
  iframes.forEach((iframe) => {
    if (status === false) {
      iframe.style.pointerEvents = "none";
    } else {
      iframe.style.pointerEvents = "all";
    }
  });
}
function initResize() {
  let firstHandleActive = false;
  let secondHandleActive = false;
  let offset = 0;

  const first = document.querySelector(".resizer.first");
  const second = document.querySelector(".resizer.second");
  const columns = [
    document.getElementById("col1"),
    document.getElementById("col2"),
    document.getElementById("col3"),
  ];

  window.addEventListener("mouseup", (e) => {
    firstHandleActive = false;
    secondHandleActive = false;
    toggleIframes(true);
  });
  document.addEventListener("mousemove", (e) => {
    e.preventDefault();
    if (firstHandleActive) {
      columns[0].style.flexBasis = `${e.clientX - offset}px`;
    }
    if (secondHandleActive) {
      columns[2].style.flexBasis = `${window.innerWidth - (e.clientX + offset)}px`;
    }
  });
  first.addEventListener("mousedown", (e) => {
    e.preventDefault();
    firstHandleActive = true;
    let handleX = first.getBoundingClientRect().x;
    offset = e.clientX - handleX;
    toggleIframes(false);
  });
  second.addEventListener("mousedown", (e) => {
    e.preventDefault();
    secondHandleActive = true;
    let handleX = second.getBoundingClientRect().x;
    offset = e.clientX - handleX;
    toggleIframes(false);
  });
}

initResize();
