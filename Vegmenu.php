
<!DOCTYPE html>
<html>
  <head>

    <meta charset="UTF-8">
    <title>VEG MENU</title>
    <link rel="stylesheet" href="style1.css">
    <style>
      h1{
        text-align: center;
      }
     


      
    </style>
  </head>
  <body>
    <marquee direction="right" 
  behavior="alternate" 
  style="border:rgba(0, 0, 0, 0.308) 2px SOLID">
  ONE STEP TO GO
</marquee>
    <header>
      <h1>VEGETARIAN MENU</h1>
      
     
      </header>
      
      
    </header>
    <main>
      <section class="menu">
       
        <div class="menu-item">
          <h3>Panner butter masala</h3>
          
          <span class="price">Rs.160</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Kaju Paneer</h3>
         
          <span class="price">Rs.140</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Palak Paneer</h3>
         
          <span class="price">Rs.80</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Masala Rice</h3>
         
          <span class="price">Rs.60</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Lemon Rice</h3>
          
          <span class="price">Rs.60</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <div class="menu-item">
          <h3>Butter Naan</h3>
         
          <span class="price">Rs.25</span>
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </section>
      <section class="cart">
        <h2>Cart</h2>
        <ul class="cart-items"></ul>
        <p>Total: <span class="total">Rs.0</span></p>
      </section>
      <section class="payment">
        <h2>Payment</h2>
        <button id="pay-button">Pay</button>
        <div id="qrcode"></div>
      </section>
      
      
        
    </main>
    <form method="POST" action="submit_order.php">
      <label for="items">Selected Items:</label>
      <textarea id="items" name="items" rows="5" cols="50" readonly></textarea>
      <br>
      <label for="amount">Total Amount:</label>
      <input type="text" id="amount" name="amount" readonly>
      <button type='submit' class='submit-btn'>PLACE ORDER</button>
    </form>
    
    
    
    
    
    
    
      
  
   
  
    
    <script src="app.js"></script>
    
      
         <script src="https://cdn.jsdelivr.net/npm/qrcode-generator/qrcode.js"></script> 


  </body>
</html>

    
