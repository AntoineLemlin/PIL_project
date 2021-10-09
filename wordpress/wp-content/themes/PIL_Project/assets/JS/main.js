let acc = document.getElementsByClassName("title");
let arrows = document.querySelectorAll(".arrow-panel");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    let panel = this.nextElementSibling;
    if (panel.style.display === "flex") {
      panel.style.display = "none";
    } else {
      panel.style.display = "flex";
    }
  });
}

function changeColor(str){
  let title = document.getElementById(str).innerHTML;
  
  let array = title.split(' ');
  array[1] = `<span class="yellow-words">${array[0]}</span>`;
  array[2] = `<span class="yellow-words">${array[1]}</span>`;
  let string = array.join(" ");
  document.getElementById(`${str}`).innerHTML = string;
}


changeColor('title-pole');

document.getElementById('site-search').addEventListener('keyup', () => {
  var input, filter, li, a, i, txtValue;
  filter = this.value.toUpperCase();
  li = document.getElementsByClassName("company");
  console.log(filter);  
  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = document.getElementsByClassName('title-filter')[i];
    txtValue = a.textContent;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }

})
