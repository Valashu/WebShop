<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8"/>
<link rel="stylesheet" media="all" type="text/css" href="cssreset.css"/>
<link rel="stylesheet" media="all" type="text/css" href="style.css"/>
<title>&#10643;Webshop&rpargt;</title>
</head>
<?php
session_start();
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$items = array(
           array(
              1, 'noodles',0.5, 'These are noodles'
          ),
          array(
              2, 'soup',5, 'Some soup'
          ),
          array(
              3, 'egg',10, 'A single egg'
          ),
          array(
              4, 'bread',3, 'test'
            )
      );

if (!isset($_SESSION['cart'])) {
     $_SESSION['cart'] = array(
          array(
              1,'noodles',2,0.5
          ),
          array(
              2,'soup',5,5
          ),
          array(
              3,'egg',1,10
          )
      );
}

if (isset($_GET['buy'])) {
    foreach ($items as $el) {
        if ($el[0]==$_GET['buy']){
            $found = false;
            foreach ($_SESSION['cart'] as $cel) {
                if ($el[0]==$cel[0]) {
                    $found = true;
                    $cel++;
                }
            }
            if (!$found) {
                array_push($_SESSION['cart'], array($el[0],$el[1],1,$el[2]));
            }
        }
    }
}

function translate($key) {
    
    $translation = array(
    'about'   =>  array(
        'de'    =>'Infos zum Shop...',
        'fr'    =>'Informations sur la boutique ...',
        'en'    =>'Information about the shop'
    ),
    'home' => array(
        'de'    =>'Willkommen zu unserem Ramenshop',
        'fr'    =>'Bienvenue dans notre Ramenshop',
        'en'    =>'Welcome to our ramen shop'
            
    )  
        );
    
    if (isset($_SESSION['lang'])) {
        return $translation[$key][$_SESSION['lang']];
    }
    else{
        return $translation[$key]['de']; 
    }
    
}


 

$cart = $_SESSION['cart'];






?>
<body>

<?php include("nav.php"); ?>

</div>

<div class="main">
    <?php    
    if ($_GET['id'] == 'ramen') {
        include 'leftnav.php'; 
    }
        
    
    ?>

  <div class="col-6">
      
      <?php 
      if (isset($_GET['id'])) {
            if (file_exists($_GET['id'].'.php')) {
                include $_GET['id'].'.php';
            }
            else {
                include 'error.php';
            }
      }
      
      
      ?>
      
  </div>

  <?php      
        if (isset($_SESSION['cart'])) {
            include 'rightnav.php';
        }
      ?>


</div>


</body>
</html>
