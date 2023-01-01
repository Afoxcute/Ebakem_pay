<form method="post">
  <label for="item_name">Item name:</label><br>
  <input type="text" id="item_name" name="item_name"><br>
  <label for="item_price">Item price (dollars):</label><br>
  <input type="text" id="item_price" name="item_price"><br>
  <label for="name">Your name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="phone">Your phone number:</label><br>
  <input type="text" id="phone" name="phone"><br>
  <label for="email">Your email address:</label><br>
  <input type="text" id="email" name="email"><br>
  <input type="submit" value="Generate invoice">
</form> 

<div class="invoice">
  <h1>Invoice</h1>
  <p>Item: <?php echo $_POST["item_name"]; ?></p>
  <p>Price: <?php echo $_POST["item_price"]; ?> dollars</p>
  <p>Exchange rate: 477 naira per dollar</p>
  <p>Total: <?php echo $_POST["item_price"] * 477; ?> naira</p>
  <p>Name: <?php echo $_POST["name"]; ?></p>
  <p>Phone number: <?php echo $_POST["phone"]; ?></p>
  <p>Email address: <?php echo $_POST["email"]; ?></p>
</div>
