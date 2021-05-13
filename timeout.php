<?php
$n = 0;
$lasttime = 0;
while( $n < 15 ) {
  if ($lasttime < date('h:i:s')) {
    $lasttime = date('h:i:s');
    $n++;
    echo "Time: " . $lasttime . "<br>";
    }
  }
echo "No timeout."
?>
