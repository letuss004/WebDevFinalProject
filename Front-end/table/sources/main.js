function toggleMenu() {
  let toggle = document.querySelector('.toggle');
  let navigation = document.querySelector('.navigation');
  let main = document.querySelector('.main');
  toggle.classList.toggle('active');
  navigation.classList.toggle('active');
  main.classList.toggle('active');
}

//MenuToggle
let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');

toggle.onclick = function() {
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}

//Hovered class to selected items
let list = document.querySelectorAll('.navigation li');
function activeLink() {
    list.forEach((item) =>
    item.classList.remove('hovered'));
    this.classList.add('hovered');
}

list.forEach((item) =>
item.addEventListener('mouseover',activeLink));

//Scroll
window.addEventListener('scroll', function(){
  const header = document.querySelector('header');
  header.classList.toggle("sticky", window.scrollY > 0);
});