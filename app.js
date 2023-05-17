// get all the add-to-cart buttons
const addToCartButtons = document.querySelectorAll('.add-to-cart');
// get the form elements
const itemsTextArea = document.getElementById('items');
const amountInput = document.getElementById('amount');
// initialize cart items array
const cartItems = [];

// add event listener to each button
addToCartButtons.forEach(function(button) {
  button.addEventListener('click', addToCart);
});

// function to add an item to the cart
function addToCart(event) {
  // get the menu item information
  var menuItem = event.target.closest('.menu-item');
  var itemName = menuItem.querySelector('h3').innerText;
  var itemPrice = menuItem.querySelector('.price').innerText;

  // create a new cart item object
  var cartItem = {
    name: itemName,
    price: parseFloat(itemPrice.replace('Rs.', ''))
  };

  // add the cart item to the cart
  cartItems.push(cartItem);

  // update the form fields
  itemsTextArea.value = cartItems.map(item => item.name).join('\n');
  amountInput.value = 'Rs.' + cartItems.reduce((total, item) => total + item.price, 0).toFixed(2);

  // generate the QR code for the total amount to be paid
  var qrCodeContainer = document.getElementById('qrcode');
  var qrCode = qrcode(0, 'L');
  qrCode.addData('Total: ' + amountInput.value);
  qrCode.make();
  qrCodeContainer.innerHTML = qrCode.createImgTag();
  
  // display the cart items in the cart
  displayCartItems();
}


// display cart items function
function displayCartItems() {
  // clear cart items list
  const cartItemsList = document.querySelector('.cart-items');
  cartItemsList.innerHTML = '';

  // loop through cart items array and create list items
  cartItems.forEach(item => {
    const listItem = document.createElement('li');
    listItem.classList.add('cart-item');
    listItem.innerHTML = `${item.name} <span>Rs. ${item.price.toFixed(2)}</span>`;
    cartItemsList.appendChild(listItem);
  });
}

// display total price function
function displayTotalPrice() {
  // calculate total price
  const totalPrice = cartItems.reduce((total, item) => total + item.price, 0);

  // update total price span
  const totalPriceSpan = document.querySelector('.total');
  totalPriceSpan.textContent = `Rs. ${totalPrice.toFixed(2)}`;

  // generate QR code for total amount to pay
  const qrCodeContainer = document.querySelector('#qrcode');
  qrCodeContainer.innerHTML = '';
  new QRCode(qrCodeContainer, {
    text: `upi://pay?pa=your-upi-id@upi&pn=Vegetarian%20Menu&tr=transaction-reference-id&tn=Vegetarian%20Menu%20Payment&am=${totalPrice.toFixed(2)}&cu=INR`,
    width: 512, // set the width to 512 pixels
    height: 300, // set the height to 512 pixels
  });
  
}


// add event listener to pay button
const payButton = document.querySelector('#pay-button');
payButton.addEventListener('click', function() {
  alert('Please scan the QR code to complete the payment');
});
