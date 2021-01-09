$(document).ready(function () {
  $(".randomnumber").each(function () {
    var randomtop = Math.floor(Math.random() * ($(this).height() - 200)),
        randomleft = Math.floor(Math.random() * 35)-60,
        randomright = Math.floor(Math.random() * 40)-50,
        randomzindex = Math.floor(Math.random() * 4);
    $(this).css({
        "top": randomtop,
        "margin-left": randomleft,
        "margin-right": randomright,
        "z-index": randomzindex
      })
  })
});
