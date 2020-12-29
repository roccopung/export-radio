function injectChat(container) {
  container.innerHTML = `<div id="tlkio" data-channel="export-live" data-theme="theme--night" style="width:100%;height:400px;"></div>`;
  script = document.createElement("script");
  script.type = "text/javascript";
  script.async = true;
  script.src = "https://tlk.io/embed.js";
  document.getElementsByTagName("head")[0].appendChild(script);
}

window.addEventListener("DOMContentLoaded", () => {
  // We're going to inject the chat widget into one of
  //three containers based on the current breakpoint.
  let container = null;
  if (window.matchMedia("(max-width: 1023px)").matches) {
    // Medium screen
    container = document.querySelector("#col1 .chat-widget");
  } else {
    // Large screen
    container = document.querySelector("#col3 .chat-widget");
  }
  injectChat(container);
});
