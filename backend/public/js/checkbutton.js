var remove = 0;

function radioDeselection(already, numeric) {
    console.log(numeric);
  if(remove == numeric) {
    already.checked = false;
    remove = 0;
  } else {
    remove = numeric;
  }
}
