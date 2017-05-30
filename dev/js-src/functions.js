/**
 *
 * Self executing anonymous function that indicates execution of javascript;
 * writes '.js' css class to html element
 *
 **/
(function() {
  document.querySelector('html').classList.add('js');
})();

/**
 *
 * Executes a function on dom ready event
 *
 **/
function ondomready(fn) {
  if (document.readyState != 'loading'){
    fn();
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}

/**
 *
 * Holds a timeout for scroll
 *
 **/
var throttlescroll;

/**
 *
 * Executes a function on window scroll
 * @TODO Seems a bit buggy/laggy
 *
 **/
function onscroll(fn) {
  window.addEventListener('scroll', function() {
    clearTimeout(throttlescroll);
    throttlescroll = setTimeout(fn, 50)
  });
}

/**
 *
 * Holds a timeout for resize
 *
 **/
var throttleresize;

/**
 *
 * Executes a function on window resize
 *
 **/
function onresize(fn) {
  window.addEventListener('resize', function() {
    clearTimeout(throttleresize);
    throttleresize = setTimeout(fn, 50);
  });
}

/**
 *
 *
 *
 **/
HTMLElement.prototype.getRealOuterWidth = function () {
  var element = this,
      width = Math.ceil(element.getBoundingClientRect().width),
      style = getComputedStyle(element);

  width += parseInt(style.marginLeft) + parseInt(style.marginRight);

  return width;
}

// https://css-tricks.com/need-dependency-free-ajax/