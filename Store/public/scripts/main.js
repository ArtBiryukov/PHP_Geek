/**
 * Объявление переменных
 */

const headerCityButton = document.querySelector('.header__city-button');
const cartListGoods = document.querySelector('.cart__list-goods');
const cartTotalCost = document.querySelector('.cart__total-cost');
//MODAL WINDOW
const subheaderCart = document.querySelector('.subheader__cart');
const cartOverlay = document.querySelector('.cart-overlay');

let hash = location.hash.substring(1);

//Если есть данные то при перезагрузки страницы они останутся.
// if (localStorage.getItem('lomoda-location')) {
//   headerCityButton.textContent = localStorage.getItem('lomoda-location');
// }

//Тоже самое что с если только с применением тернарного оператора или ||

headerCityButton.textContent = localStorage.getItem('lomoda-location') || 'Ваш город?';

headerCityButton.addEventListener('click', () => {
  const city = prompt('Укажите ваш город');
  headerCityButton.textContent = city;
  //Локальное хранилище в браузере
  localStorage.setItem('lomoda-location', city)
});

const getLocalStorage = () => JSON?.parse(localStorage.getItem('cart-lomoda')) || [];
const setLocalStorage = data => localStorage.setItem('cart-lomoda', JSON.stringify(data));

//Отрисовка корзины
// const renderCart = () => {
//   cartListGoods.textContent = '';

//   const cartItems = getLocalStorage();


//   let totalPrice = 0;


//   cartItems.forEach((item, ind ) => {

//     const tr = document.createElement('tr');

//     tr.innerHTML = `
//       <td>${ind+1}</td>
//       <td>${item.brand} ${item.name}</td>
//       ${item.color ? `<td>${item.color}</td>` : '<td>-</td>'}
//       ${item.size ? `<td>${item.size}</td>` : '<td>-</td>'}
//       <td>${item.cost} &#8381;</td>
//       <td><button class="btn-delete" data-id="${item.id}">&times;</button></td>`;
//       totalPrice += item.cost;
//     cartListGoods.append(tr);
//   });
  
//   cartTotalCost.textContent = totalPrice + ' ₽';
// };

//Удаление товара из корзины
const deleteItemCard = id => {
  const cartItem = getLocalStorage();
  const newCartItmes = cartItem.filter(item => item.id !== id);
  setLocalStorage(newCartItmes);
};

//Удаление товара из корзины
cartListGoods.addEventListener('click', (event) => {
  if(event.target.matches('.btn-delete')) {
    deleteItemCard(event.target.dataset.id);
    renderCart();
  }
})

//Block scroll
const disableScroll = () => {
  const widthScroll = window.innerWidth - document.body.offsetWidth;
  document.body.dbScrollY = window.scrollY;
  document.body.style.cssText = `
  position: fixed;
  top:${-window.scrollY}px;
  left: 0;
  width: 100%;
  height: 100vh;
  overflow: hidden;
  padding-right: ${widthScroll}px;
  `;
};

const enableScroll = () => {
  document.body.style.cssText = '';
  window.scroll({
    top: document.body.dbScrollY,
  })
};

//Функции открытия и закрытия модального окна

const cartModalOpen = () => {
  cartOverlay.classList.add('cart-overlay-open');
  disableScroll();
  // renderCart();
};

const cartModalClose = () => {
  cartOverlay.classList.remove('cart-overlay-open');
  enableScroll();
};

subheaderCart.addEventListener('click', cartModalOpen);

cartOverlay.addEventListener('click', event => {
  const target = event.target;

  if (target.matches('.cart__btn-close') || target.matches('.cart-overlay')) {
    cartModalClose();
  }
});
