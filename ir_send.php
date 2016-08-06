<?php

switch (&_GET['name']) {
  case 'all_light':
  //passthru('arduino_ir_remote -write all_light');
  echo '<p>Room Lights: All light</p>';
    break;

  default:
    break;
}
?>
