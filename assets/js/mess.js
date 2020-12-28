$(document).ready(function () {
  $(".randomnumber").each(function () {
    var randomtop = Math.floor(Math.random() * ($(this).height() - 50)),
        randomleft = Math.floor(Math.random() * 50)-30,
        randomright = Math.floor(Math.random() * 25)-40,
        randomzindex = Math.floor(Math.random() * 4);
    $(this).css({
        "top": randomtop,
        "margin-left": randomleft,
        "margin-right": randomright,
        "z-index": randomzindex
      })
  })
});
