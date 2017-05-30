# Materialpress

## Clone

`git clone https://github.com/pennywise81/materialpress.git materialpress`

## Download

### On Windows

`git clone https://github.com/pennywise81/materialpress.git materialpress & RD /S /Q materialpress\.git`

### On bash

`git clone https://github.com/pennywise81/materialpress.git materialpress  && rm -rf materialpress/.git`

## JavaScript Documentation
* `ondomready(`**_`fn`_**`)`
  Executes function **_`fn`_** when the document tree is ready
* `onscroll(`**_`fn`_**`)`
  Executes function **_`fn`_** *after* the user finished scrolling
* `onresize(`**_`fn`_**`)`
  Executes function **_`fn`_** *after* the browser stopped resizing
* **_`el`_**`.getRealOuterWidth()`
  Returns the width of **_`el`_**, taking its margin and padding in account