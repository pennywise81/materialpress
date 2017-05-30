document.querySelectorAll('nav.menu').forEach(function(menu) {
  // get menu elements (toggle, list)
  var btn = menu.querySelector('.menu__btn-toggle'),
    list = menu.querySelector('.menu__items'),
    lis = menu.querySelectorAll('.menu__items .menu__items__wrapper > ul > li');

  // click on the trigger button opens the menu
  btn.addEventListener('click', function(e) {
    this.classList.toggle('is-active');
    menu.classList.toggle('menu--open');
  });

  lis.forEach(function(li) {
    var submenu = li.querySelector('ul');

    if (submenu) {
      // progressive enhancement: maybe we have to reposition the
      // submenu, in case it is not completely visible
      var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0),
        position = Math.ceil(submenu.getBoundingClientRect().right),
        margin = parseInt(getComputedStyle(submenu).marginLeft),
        diff = position - w;

      if (diff > 0) {
        submenu.style.marginLeft = margin - diff + 'px';
      }

      // with this we'll make submenus accessible on touch devices
      li.addEventListener('touchstart', function(e) {
        if (
          // checks if menu was already triggered
          !this.classList.contains('hover') &&
          // checks if menu is hidden (which means we're on desktop size)
          getComputedStyle(submenu).visibility == 'hidden'
        ) {
          // prevent the event from bubbling, add 'hover' css class which
          // opens the submenu
          e.preventDefault();
          e.stopPropagation();
          this.classList.add('hover');
        }
      });
    }
  });

  // 'outer touch' observation for closing any submenus
  document.addEventListener('touchstart', function(e) {
    lis.forEach(function(li) {
      li.classList.remove('hover');
    });
  });

});

ondomready(function() {
  document.querySelectorAll('nav.menu').forEach(function(menu) {
    var btn = menu.querySelector('.menu__btn-toggle'),
      list = menu.querySelector('.menu__items');

    // close the menu initially
    menu.classList.remove('menu--open');
    btn.classList.remove('is-active');
  });
});

/*
 *
 * resets the margin on submenus
 *
 */
onresize(function() {
  document.querySelectorAll('ul.sub-menu').forEach(function(submenu) {
    submenu.removeAttribute('style');
  });
})