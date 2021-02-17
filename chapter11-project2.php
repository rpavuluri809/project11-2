<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chapter 7</title>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-orange.min.css">
    
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
</head>

<body>
    
<!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
    
    <?php 
      include "header.inc.php";
  
      include "left.inc.php";

      include "data.inc.php";
    ?>
            
  
  
  
  
  <main class="mdl-layout__content mdl-color--grey-50">
    <header class="mdl-color--blue-grey-200">
      <h4>Order Summaries</h4>
      <p>Examine your customer orders</p>
    </header>   
    <section class="page-content">
    
        <div class="mdl-grid">

          <!-- mdl-cell + mdl-card -->
          <div class="mdl-cell mdl-cell--3-col card-lesson mdl-card  mdl-shadow--2dp">
            <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
              <h2 class="mdl-card__title-text">My Orders</h2>
            </div>
            <div class="mdl-card__supporting-text">            
                <ul class="mdl-list">

                  <?php 
                    for($i = 500; $i <= 540; $i = $i + 10){
                      echo '<li><a href="#">Order #'.$i. '</a></li>';
                    }
                  ?>
                    <!-- <li ><a href="#">Order #500</a></li>
                    <li><a href="#">Order #510</a></li>
                    <li><a href="#">Order #520</a></li>
                    <li><a href="#">Order #530</a></li>
                    <li><a href="#">Order #540</a></li>                  -->
                </ul>   
            </div>    
          </div>  <!-- / mdl-cell + mdl-card -->

          <?php

                    $amount1 = $quantity1 * $price1;
                    $amount2 = $quantity2 * $price2;
                    $amount3 = $quantity3 * $price3;
                    $amount4 = $quantity4 * $price4;
                
                    //$subtotal = number_format(($amount1 + $amount2 + $amount3 + $amount4),2);
                    $subtotal = $amount1 + $amount2 + $amount3 + $amount4;
                    //echo "$subtotal";
                    $shipping = 200;

                    if($subtotal > 10000){
                      $shipping = 100;
                    }

                    $grandTotal = $subtotal + $shipping;
                    //echo "$subtotal + $shipping = $grandTotal";
                    

                    echo '<div class="mdl-cell mdl-cell--9-col card-lesson mdl-card  mdl-shadow--2dp">';
                    echo '<div class="mdl-card__title mdl-color--orange">';
                    echo '<h2 class="mdl-card__title-text">Selected Order: #520</h2>';
                    echo '</div>';
                    echo '<div class="mdl-card__supporting-text">';
                        echo '<table class="mdl-data-table  mdl-shadow--2dp">';
                         echo '<caption>Customer: <strong>Mount Royal University</strong></caption>';
                          echo '<thead>';
                            echo '<tr>';
                              echo '<th>Cover</th>';
                              echo '<th class="mdl-data-table__cell--non-numeric">Title</th>';
                              echo '<th>Quantity</th>';
                              echo '<th>Price</th>';
                              echo '<th>Amount</th>';
                            echo '</tr>';
                          echo '</thead>';
                          echo '<tfoot>';
                              echo '<tr class="totals">';
                                  echo '<td colspan="4">Subtotal</td>';
                                  echo '<td>'.number_format(($subtotal),2).'</td>';
                              echo '</tr>';
                              echo '<tr class="totals">';
                                  echo '<td colspan="4">Shipping</td>';
                                  echo '<td>'.number_format(($shipping),2).'</td>';
                              echo '</tr>';
                              echo '<tr class="grandtotals">';
                                  echo '<td colspan="4">Grand Total</td>';
                                  echo '<td>'.number_format(($grandTotal),2).'</td>';
                              echo '</tr>';
                          echo '</tfoot>';
                          echo '<tbody>';

                          outputOrderRow($file1, $title1, $quantity1, $price1);
                          outputOrderRow($file2, $title2, $quantity2, $price2);
                          outputOrderRow($file3, $title3, $quantity3, $price3);
                          outputOrderRow($file4, $title4, $quantity4, $price4);
                           
                          echo '</tbody>';
        
                        echo '</table>';
                    echo '</div>';
        
                  echo '</div>';
                    ?> 

          <!-- mdl-cell + mdl-card -->
            <!-- / mdl-cell + mdl-card -->
          <?php
          //$subtotal = 0;
          function outputOrderRow($file, $title, $quantity, $price){
            $amount = number_format(($quantity * $price),2);
            echo '<tr><td><img src="images/books/tinysquare/'.$file.'"></td><td>'.$title.'</td><td>'.$quantity.'</td><td>'.$price.'</td><td>'.$amount.'</td>';

            //$subtotal = number_format(($subtotal + $amount),2);
          }
          ?>



        </div>  <!-- / mdl-grid -->
    

    </section>
  </main>
  
  
</div>
          
</body>
</html>