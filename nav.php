<?php
$nav = array(
           array(
              'home', 'Home'
          ),
          array(
              'ramen',  'Ramen'
          ),
          array(
              'about',  'About'
          ),
        );

echo    '<ul class="topnav">';
foreach ($nav as $navitem) {
    echo    '<li><a href="index.php?id='.$navitem[0].'">'.$navitem[1].'</a></li>';
}
echo    '</ul>';
?>

