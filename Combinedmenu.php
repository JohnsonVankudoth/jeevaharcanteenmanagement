
<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
    <title> MENU</title>
    <link rel="stylesheet" href="style1.css">
    <style>
      .cart {
        background:#00BCD4;
        border: 1px solid #ccc;
        padding: 20px;
  
      border: 3px solid #ccc; /* adds a 1px solid border with color #ccc */
      background-color: #f2f2f2;


}
body {
  background: linear-gradient(to right, blue, green, yellow, orange);
}


.cart h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.cart-items {
  list-style: none;
  margin: 0;
  padding: 0;
}

.total {
  font-weight: bold;
}

  form {
  padding: 20px;
  margin-top: 20px;
  width: 50%;
  margin-left: auto;
  border-radius: 50%; /* increased value */
  margin-right: auto;
  animation-name: animated-border;
  animation-duration: 2s;
  animation-iteration-count: infinite;
  border: 2px solid;
  border-image-slice: 1;
  border-image-source: linear-gradient(to right, #4CAF50, #3e8e41, #f44336, #9c27b0, #673ab7, #3f51b5, #2196F3, #03A9F4, #00BCD4, #009688, #4CAF50);
}


@keyframes animated-border {
  0% {
    border-color: #4CAF50;
  }
  10% {
    border-color: #3e8e41;
  }
  20% {
    border-color: #f44336;
  }
  30% {
    border-color: #9c27b0;
  }
  40% {
    border-color: #673ab7;
  }
  50% {
    border-color: #3f51b5;
  }
  60% {
    border-color: #2196F3;
  }
  70% {
    border-color: #03A9F4;
  }
  80% {
    border-color: #00BCD4;
  }
  90% {
    border-color: #009688;
  }
  100% {
    border-color: #4CAF50;
  }
}




      h1{
        text-align: center;
      }
      form {
      max-width: 500px;
      margin: auto;
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type=text], input[type=tel] {
      padding: 5px;
      border: none;
      border-bottom: 1px solid #ccc;
      width: 100%;
      margin-bottom: 10px;
    }
    textarea {
      padding: 5px;
      border: none;
      border-bottom: 1px solid #ccc;
      width: 100%;
      resize: none;
      margin-bottom: 10px;
    }
    button[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button[type=submit]:hover {
      background-color: #3e8e41;
    }
    .highlighted {
        color: #4CAF50;
        font-size: 30px;
        font-weight: bold;
      }
      
      /* Style for the word "STEP" */
      .italic {
        font-style: italic;
      }
      .add-to-cart {
  background-color: #4CAF50; /* Green */
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.add-to-cart:hover {
  background-color: #3e8e41; /* Darker Green */
}
img{
  border-radius: 25%;
}
h1{
  font-size: 1em;
   
    text-align: center;
}
.menu-item {
    background-color: #f2f2f2;
    border-radius: 50px;
    padding: 5px;
    text-align: center;
  }
  body {
    font-family: Arial, sans-serif;
  }
  
  header {
    background-color: #333;
    color: #fff;
    padding: 4px;
  }
  
  h1 {
    margin: 0;
  }
  
  .menu {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    padding: 20px;
  }
 
  
  
  .menu-item h3 {
    margin-top: 0;
  }
  
  .price {
    font-size: 1.2em;
    font-weight: bold;
  }
  
  .add-to-cart {
    background-color: green;
    color: #fff;
    border: none;
    border-radius: 15px;
    padding: 10px;
    margin-top: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  .add-to-cart:hover {
    background-color: #444;
  }
  
  .cart {
    margin-top: 50px;
    padding: 20px;
  }
  
  .cart h2 {
    margin-top: 0;
  }
  
  .cart-items {
    list-style: none;
    padding: 0;
  }
  
  .cart-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
  }
  
  .cart-item span {
    font-weight: bold;
  }
  
  .total {
    font-weight: bold;
    font-size: 1.2em;
  }
  .payment{
    padding-left: 30%;
  }
  

      
    </style>
  </head>
  <body>
  <marquee direction="right" behavior="alternate" style="border: rgba(0, 0, 0, 0.308) 2px solid; background: linear-gradient(to bottom, #FDB813, #E76229, #C0272D);">
  ONE <span class="italic">STEP</span> TO <span class="highlighted">GO</span>
</marquee>

    <header>
      <h1>MENU</h1>
      
     
      </header>
    
      
    <h1>VEG-MENU</h1>
    
    <main>
    
      <section class="menu">
      
     
      <div class="menu-item">
          <h3>Panner butter masala</h3>
         
          
          <span class="price">Rs.160</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Dal Fry</h3>
         
          <span class="price">Rs.140</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Kadai Paneer</h3>
         
          <span class="price">Rs.200</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Paneer Masala</h3>
         
          <span class="price">Rs.190</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Mushroom Curry</h3>
          
          <span class="price">Rs.190</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Mushroom Masala</h3>
         
          <span class="price">Rs.190</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Paneer Masala</h3>
         
          <span class="price">Rs.190</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Veg Manchuria</h3>
         
          <span class="price">Rs.200</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Chilli sticks</h3>
         
          <span class="price">Rs.190</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Chilli panner</h3>
         
          <span class="price">Rs.170</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Paneer 65</h3>
         
          <span class="price">Rs.65</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Paneer Pakoda</h3>
         
          <span class="price">Rs.200</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Singapore Paneer</h3>
         
          <span class="price">Rs.200</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Chilli Mushroom</h3>
         
          <span class="price">Rs.190</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Chilli Baby corn</h3>
         
          <span class="price">Rs.190</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
      
       
        
        
      </section>
      <header>
      <h1>NON-VEG MENU</h1>
      </header>
    <main>
    
      <section class="menu">
      
     
     
      <div class="menu-item">
          <h3>Chicken Dum Biryani</h3>
        
          
          <span class="price">Rs.160</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Mutton Biryani</h3>
         
          <span class="price">Rs.140</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Fish Birayani</h3>
         
          <span class="price">Rs.80</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Egg Biryani</h3>
         
          <span class="price">Rs.60</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Lollypop Biryani</h3>
          
          <span class="price">Rs.60</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Egg curry</h3>
         
          <span class="price">Rs.120</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Butter Naan</h3>
         
          <span class="price">Rs.25</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Nizami Chicken Handi</h3>
         
          <span class="price">Rs.220</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Mutton Masala</h3>
         
          <span class="price">Rs.300</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Butter Chicken</h3>
         
          <span class="price">Rs.240</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Guntur Chicken Curry</h3>
         
          <span class="price">Rs.220</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Fish Masala</h3>
         
          <span class="price">Rs.240</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Chilli Egg</h3>
         
          <span class="price">Rs.180</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Mutton Fry</h3>
         
          <span class="price">Rs.340</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Stick Chicken</h3>
         
          <span class="price">Rs.220</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        
       
       
        
      </section>
      <header>
      <h1>BREAKFAST MENU</h1>
      </header>
    
    <main>
    
      <section class="menu">
      
     
     
      
       
      <div class="menu-item">
          <h3>Idli-sambar</h3>
          
          <span class="price">Rs.49</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Punugulu</h3>
         
          <span class="price">Rs.55</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Sambar Buttonidly</h3>
         
          <span class="price">Rs.69</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Puri</h3>
         
          <span class="price">Rs.40</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Onion Dosa</h3>
          
          <span class="price">Rs.50</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Upma</h3>
         
          <span class="price">Rs.40</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Vada with Sambar</h3>
         
          <span class="price">Rs.69</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Bonda</h3>
         
          <span class="price">Rs.35</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Cabbage Parathas</h3>
         
          <span class="price">Rs.55</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        
        
        
      </section>
      <header>
      <h1>SOFTDRINKS</h1>
      </header>
    
    <main>
    
      <section class="menu">
      
     
     
      
       
      <div class="menu-item">
          <h3>Sprite</h3>
         
          
          <span class="price">Rs.40</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Coca-cola</h3>
         
          <span class="price">Rs.20</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Pepsi</h3>
         
          <span class="price">Rs.40</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Fanta</h3>
         
          <span class="price">Rs.20</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>7 Up</h3>
          
          <span class="price">Rs.35</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Pulpy Orange</h3>
         
          <span class="price">Rs.20</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Maaza</h3>
         
          <span class="price">Rs.40</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>String</h3>
         
          <span class="price">Rs.20</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Limca</h3>
         
          <span class="price">Rs.30</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Mountain Dew</h3>
         
          <span class="price">Rs.30</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Ginger ale</h3>
         
          <span class="price">Rs.20</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Minute Maid</h3>
         
          <span class="price">Rs.30</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        
        
      </section>
      <div class="john">
      <marquee direction="right" behavior="alternate" style="border: rgba(0, 0, 0, 0.308) 2px solid ;background-color:#ccc;">
      
          
            <h3>20% OFFER</h3>
          <h3>Butter Naan</h3>
          <img src="hu.jpg" width="7%" height="7%">
          <br>
         
          <span class="price">Rs.25</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        </marquee>
</div> 
      <section class="cart">
        <h2>Cart</h2>
        <ul class="cart-items"></ul>
        <p>Total: <span class="total">Rs.0</span></p>
      </section>
      <section class="payment">
        <h2>Payment</h2>
        
        <div id="qrcode"></div>
      </section>
      
        
    </main>
    <br>
    <br>
    <form method="POST" action="dummysubmit.php">
      <label for="items">Selected Items:</label>
      <textarea id="items" name="items" rows="5" cols="50" readonly></textarea>
      <br>
      <label for="amount">Total Amount:</label>
      <input type="text" id="amount" name="amount" readonly>
      <br>
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
      <br>
      <label for="mobile">mobile</label>
      <input type="tel" id="mobile" name="mobile" required>
      <br>
      <label for="utr">UTR.NO:</label>
      <input type="text" id="utr" name="utr" required>
      <br>
      <label for="time">time</label>
      <input type="text" id="time" name="time" required>
       <br>
      <label for="birthday">Date</label>
      <input type="date" id="date" name="date">
      <br>
       <br>
      
      <button type='submit' class='submit-btn'>PLACE ORDER</button>
    </form>
    
    
    
    
    
    
    
      
  
   
  
    
    <script src="dummyapp.js"></script>
    
      
         <script src="https://cdn.jsdelivr.net/npm/qrcode-generator/qrcode.js"></script> 


  </body>
</html>

    
