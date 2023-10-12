let jin = document.getElementById("nameinput");
let jout = document.getElementById("out");
let btn = document.getElementById("btn");

jin.addEventListener('keydown', function(e){
  if( e.key.match(/[0-9]/) ) return e.preventDefault();
}); // Будет перехватывать все числа при ручном вводе. 
// Тажке нужна, чтобы replace не сбрасывал каретку, срабатывая каждый раз.

jin.addEventListener('input', function(e){
  // На случай, если умудрились ввести через копипаст или авто-дополнение.
  jin.value = jin.value.replace(/[0-9]/g, "");
});

btn.addEventListener('click', function(){
  let val = jin.value;
  if ( val ) {
    jout.textContent = `Привет ${val}, хорошего дня!`;
  } else {
    alert("введите имя");
  }
});