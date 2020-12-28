(function(){
  var mousedownFirst;
  var mousedownSecond;

  var $first = document.getElementsByClassName('first')[0];
  var $second = document.getElementsByClassName('second')[0];
  var $cols = [
    document.getElementById('col1'),
    document.getElementById('col2'),
    document.getElementById('col3')
  ];

  $first.addEventListener('mousedown', e => {
    mousedownFirst = true;
  });
  $second.addEventListener('mousedown', e => {
    mousedownSecond = true;
  });

  document.onmouseup = e => {
    mousedownFirst = false;
    mousedownSecond = false;
  };

  document.onmousemove = e => {
    if (mousedownFirst){
      setStyle($first, 'left', e.pageX);
      setStyle($cols[0], 'width', e.pageX);
      setStyle($cols[1], 'left', e.pageX );
    }
    
    if (mousedownSecond){
      setStyle($second, 'left', e.pageX-30);
      setStyle($cols[1], 'right', window.innerWidth - e.pageX);
      setStyle($cols[2], 'left', e.pageX);
    }
  };

  function setStyle(elem, property, value){
    elem.style[property] = value + 'px';
  }

})

  ();
