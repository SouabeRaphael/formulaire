
let img = document.querySelector('.img-illust')

window.addEventListener('scroll', appearsOnScroll);

function appearsOnScroll(){
  if(window.scrollY > 4000){
    img.classList.add('stop');
  }
  else{
    img.classList.remove('stop');
  }
}

let header = document.querySelector('.content-header');

window.addEventListener('scroll', headerScrollChange);

function headerScrollChange(){
  if(window.scrollY > 80){
    header.classList.add('scrool-opcity');
  }
  else{
    header.classList.remove('scrool-opcity');
  }
}

// Ajouter de personne à contacter

let btnPlus = document.querySelector('.border-cross');

console.log(btnPlus);

btnPlus.addEventListener('click', addForm);

let count = 1;

function addForm(){
  count++;
  let formProche = document.querySelector('.form-proche');
  console.log(formProche);
  formProche.innerHTML += `
  <div class="wrapper-form-proche">
  <div class="numberPerson">${count}</div>
  <form action="" method="post" class="form">
      <input type="text" name="lastName" class="item-form" placeholder="Nom">
      <input type="text" name="firstName" class="item-form" placeholder="Prénom">
      <input type="text" name="phoneFixed" class="item-form" placeholder="Téléphone fixe">
      <input type="text" name="phoneMobile" class="item-form" placeholder="Téléphone portable">
      <input type="text" name="email" class="item-form" placeholder="Adresse mail">
  </form>
</div>
  `;
}