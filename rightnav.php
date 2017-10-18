<div class="col-3 rightnav">
      <?php 
      
      
      $price = 0;
      foreach ($cart as $key => $value) {
          $price += $value[2]*$value[3];
          print '
                <div style="border:2px solid black;" class="itembox">
                    '.$value[2].' X '.$value[1].' = '.$value[2]*$value[3].' CHF
                </div>';
      }
      print '
                <div style="border:2px solid black;" class="itembox">
                    Total '.$price.' CHF
                </div>';
      if (isset($_SESSION['lang'])) {
              $lang = $_SESSION['lang'];
          }
          else{
              $lang = 'de'; 
          }
                
      if (isset($_GET['id'])) {
          
          if ($lang == 'en') {
             print '<a style="border:1px solid black;" href="index.php?id='.$_GET['id'].'&lang=en">english</a><br />'; 
          }
          else{
              print '<a href="index.php?id='.$_GET['id'].'&lang=en">english</a><br />'; 
          }
          if ($lang == 'de') {
             print '<a style="border:1px solid black;" href="index.php?id='.$_GET['id'].'&lang=de">deutsch</a><br />'; 
          }
          else{
              print '<a href="index.php?id='.$_GET['id'].'&lang=de">deutsch</a><br />'; 
          }if ($lang == 'fr') {
             print '<a style="border:1px solid black;" href="index.php?id='.$_GET['id'].'&lang=fr">französisch</a><br />'; 
          }
          else{
              print '<a href="index.php?id='.$_GET['id'].'&lang=fr">französisch</a><br />'; 
          }
      }
      else{
          print '<a href="index.php?id=ramen&lang=en>english</a><br />';
          print '<a href="index.php?id=ramen&lang=de>deutsch</a><br />';
          print '<a href="index.php?id=ramen&lang=fr>französisch</a>';
      }
      
      ?>
    
    
  </div>