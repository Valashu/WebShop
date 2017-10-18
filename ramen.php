<?php
foreach ($items as $item) {
echo    '<div style="border:2px solid black;" class="itembox">
                    '.$item[1].'<br>
                    '.$item[3].'<br>Price: '.$item[2].'<br />
                        <a href="index.php?id=ramen&buy='.$item[0].'">buy</a>
                </div>';

}
