/* Simple VanillaJS to toggle class */

document.getElementById('toggleProfile').addEventListener('click', function () {
  [].map.call(document.querySelectorAll('.profile'), function(el) {
    el.classList.toggle('profile--open');
  });
});

function abrir() { 
window.open("index.php","","location=no,directories=no,status=no,scrollbars=no,toolbar=no,menubar=no,width=590,top=130,left=150,resizable=no");
} 
