<html>
  <head>
    <!-- 	Meta Data	 -->
		<meta charset="UTF-8">
		<meta name="author" content="Van N">
		<meta name="keywords" content="immaculata, ics2o">
		<meta name="DESCRIPTION" content="KERNELS Popcorn Website, with PHP">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-purple.min.css" />
    <!-- Website title -->
    <title>KERNELS Popcorn Website, with PHP</title>
    <!-- Links to style.css file -->
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
     <!-- MDL Heading -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout-title">
          <span class="mdl-layout-title">KERNELS Popcorn Website, with PHP</span>
        </div>
      </header>
      <center>
        <?php
          echo '<img src="./images/kernels-popcorn.jpg" class="popcorn" alt="KERNELS Popcorn">';
        ?>
        <!-- Paragraph stating how ordering works -->
        <?php
          echo "<p>Welcome to the Unofficial website for KERNELS Popcorn!</p>";
          echo "<p>To make an order, please select what size of popcorn you would like! Then pick a flavour of popcorn. Lastly, if you think your popcorn isn't interesting enough, you may add even more flavour by adding toppings!</p>";
          echo "<p>If you want, you may also order a side drink! (May we suggest Van's Magic Milk)</p>";
        ?>
        <br><br>
        <!-- Table which displays the menu and cost of items -->
        <table class="table">
          <tr class="menu">
            <th class="menu">Menu</th>
            <th class="menu">Price</th>
          </tr>
          <tr class="menu">
            <td class="menu">Small Bag</td>
            <td class="menu">$5.79</td>
          </tr>
          <tr class="menu">
            <td class="menu">Medium Bag</td>
            <td class="menu">$7.99</td>
          </tr>
          <tr class="menu">
            <td class="menu">Large Bag</td>
            <td class="menu">$10.59</td>
          </tr>
          <tr class="menu">
            <td class="menu">Extra-Large Bag</td>
            <td class="menu">$14.59</td>
          </tr>
          <tr>
            <td class="menu">Plain Popcorn</td>
            <td class="menu">$1.00</td>
          </tr>
          <tr>
            <td class="menu">Flavoured Popcorn</td>
            <td class="menu">$2.00</td>
          </tr>
          <tr>
            <td class="menu">Dill Pickle</td>
            <td class="menu">$3.99</td>
          </tr>
          <tr>
            <td class="menu">Ketchup</td>
            <td class="menu">$3.99</td>
          </tr>
          <tr>
            <td class="menu">All Dressed</td>
            <td class="menu">$3.99</td>
          </tr>
          <tr>
            <td class="menu">Sweet & Salty</td>
            <td class="menu">$3.99</td>
          </tr>
          <tr>
            <td class="menu">Pepsi</td>
            <td class="menu">$2.17</td>
          </tr>
          <tr>
            <td class="menu">Ginger Ale</td>
            <td class="menu">$2.17</td>
          </tr>
          <tr>
            <td class="menu">Nestea</td>
            <td class="menu">$2.17</td>
          </tr>
          <tr>
            <td class="menu">Van's Magic Milk</td>
            <td class="menu">$15.99</td>
          </tr>
        </table>
        <?php
          echo "<h3>Please Enter the Popcorn bag Size:</h3>";
        ?>
          
        <form method="post">
          <!-- Drop Down Menu (For Popcorn Bag Size) -->
          <label for="size">Size:</label>
          <select name="size" id="size">
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>
            <option value="Extra Large">Extra Large</option>
          </select>

          <br><br>
        <!-- Drop Down Menu (for Popcorn Flavour) -->
          <?php 
            echo "<h3>Pick the flavour for your popcorn!</h3>";
          ?>
    

          <label for="flavour">Flavour:</label>
          <select name="flavour" id="flavour">
            <option value="Plain">Plain</option>
            <option value="Cheesy Dill">Cheesy Dill</option>
            <option value="Jalapeno Jack">Jalapeno Jack</option>
            <option value="Salt and Vinegar">Salt & Vinegar</option>
            <option value="Buttersalt">Buttersalt</option>
            <option value="White Cheese">Whalin' White Cheese</option>
          </select>

          <br><br>

        <!-- Checkboxes for toppings -->
        <h3>Enter what toppings you'd like!</h3>

          <table class="center">
            <tr>
              <td>
                  <!-- Topping Checkbox - DILL PICKLE -->
                  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                    <span class="mdl-checkbox__label">Dill Pickle</span>
                    <input type="checkbox" id="dill-pickle" name="topping" class="mdl-checkbox__input"><br><br>
                  </label>&emsp;
                  <!-- Topping Checkbox - KETCHUP -->
                  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                    <span class="mdl-checkbox__label">Ketchup</span>
                    <input type="checkbox" id="ketchup" name="topping" class="mdl-checkbox__input"><br><br>
                  </label>&emsp;
                  <!-- Topping Checkbox - ALL DRESSED -->
                  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                    <span class="mdl-checkbox__label">All Dressed</span>
                    <input type="checkbox" id="all-dressed" name="topping" class="mdl-checkbox__input"><br><br>
                  </label>&emsp;
                  <!-- Topping Checkbox - SWEET & SALTY -->
                  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
                    <span class="mdl-checkbox__label">Sweet & Salty</span>
                    <input type="checkbox" id="sweet-and-salty" name="topping" class="mdl-checkbox__input"><br><br>
                  </label>&emsp;
              </td>
            </tr>
          </table>


        <!-- Radio buttons to select side drink -->
          <?php
            echo "<h3>Enter what kind of drink you'd like!</h3>";
          ?>
          <!-- Radio button -->
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="none">
            <!-- Option 0 -->
            <input type="radio" id="none" class="mdl-radio__button" name="drink" value="none" checked>
            <span class="mdl-radio__label">None</span>
          </label>&emsp;
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="pepsi">
            <!-- Option 1 -->
            <input type="radio" id="pepsi" class="mdl-radio__button" name="drink" value="pepsi">
            <span class="mdl-radio__label">Pepsi</span>
          </label>&emsp;
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="ginger-ale">
            <!-- Option 2 -->
            <input type="radio" id="ginger-ale" class="mdl-radio__button" name="drink" value="ginger-ale">
            <span class="mdl-radio__label">Ginger Ale</span>
          </label>&emsp;
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="nestea">
            <!-- Option 3 -->
            <input type="radio" id="nestea" class="mdl-radio__button" name="drink" value="nestea">
            <span class="mdl-radio__label">Nestea (Iced Tea)</span>
          </label>&emsp;
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="magic-milk">
            <!-- Option 4 -->
            <input type="radio" id="magic-milk" class="mdl-radio__button" name="drink" value="magic-milk">
            <span class="mdl-radio__label">Van's Magic Milk</span>
          </label>&emsp;
          <br><br>
          <input type="submit" name="submit" value="Submit">
        </form>
        <br>
      
		<!-- Takes in user's age and day of week and outputs back cost -->
		<?php
      // If Button clicked
			if(isset($_POST['submit'])) {
          // Constants
          define("HST", 0.13);
          define("TOPPING_COST", 3.99);
          define("SMALL_COST", 5.79);
          define("MEDIUM_COST", 7.99);
          define("LARGE_COST", 10.59);
          define("EXTRA_LARGE_COST", 14.59);
          define("SODA_COST", 2.17);
          define("MAGIC_MILK_COST", 15.99);
          define("FLAVOURED_POPCORN_COST", 2.00);
          define("PLAIN_POPCORN_COST", 1.00);
          define("DELIVERY_COST", 4.50);

          $sizeCost = 0;
          $flavourCost = 0;
          $numToppings = 0;
          $drinkCost = 0;
          
          
          // Variables
          $size = $_POST['size'];
          $flavour = $_POST['flavour'];

          if(isset($_POST["dill-pickle"])) {
            //++ adds one to the total
            $numToppings++;
          }
          //if hummus is checked
          if(isset($_POST["ketchup"])) {
            $numToppings++;
          }
          //if garlic sauce is checked
          if(isset($_POST["all-dressed"])) {
            $numToppings++;
          }
          //if pickled turnips are checked
          if(isset($_POST["sweet-and-salty"])) {
            $numToppings++;
          }

          $costToppings = $numToppings * TOPPING_COST;
    
          $drink = $_POST['drink'];

          // IF user selected the Small Size
          if ($size == "Small") {
            $sizeCost = SMALL_COST;
            // IF user selected the Medium Size
          } elseif ($size == "Medium") {
            $sizeCost = MEDIUM_COST;
            // IF user selected the Large Size
          } elseif ($size == "Large") {
            $sizeCost = LARGE_COST;
            // IF user selected the Extra Large Size
          } else {
            $sizeCost = EXTRA_LARGE_COST;
          }

          if ($flavour == "Cheesy Dill" or $flavour == "Jalapeno Jack" or $flavour == "Salt and Vinegar"
              or $flavour == "Buttersalt" or $flavour == "Whalin' White Cheese") {
            $flavourCost = FLAVOURED_POPCORN_COST;
            // If the user chose the plain popcorn flavour
          } else {
            $flavourCost = PLAIN_POPCORN_COST;
          }

          // Assigns cost of drink IF user selected pepsi, ginger ale or nestea
          if ($drink == "pepsi" or $drink == "ginger-ale" or $drink == "nestea") {
            $drinkCost = SODA_COST;
            // Assigns cost of drink IF user selected Van's Magic Milk
          } elseif ($drink == "magic-milk") {
            $drinkCost = MAGIC_MILK_COST;
            // If the user chose no side drink
          } else {
            $drinkCost = 0;
          }

          $subtotal = $sizeCost + $costToppings + $drinkCost + $flavourCost;
          $tax = $subtotal * HST;
          $total = $subtotal + $tax;

          echo "<h4>Your subtotal is $" . number_format($subtotal, 2) . "!</h4>";
          echo "<h4>The tax is $" . number_format($tax, 2) . "!</h4>";
          echo "<h4>Your total is $" . number_format($total, 2) . "!</h4>";
        
      }
		?>
      </center>
    </div>
  </body>
</html>