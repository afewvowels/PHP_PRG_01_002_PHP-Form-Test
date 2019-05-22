<?php

function post_successful() {
  echo 'success!';
}

if(isset($_POST['hidden-value2'])) {
  post_successful();
}

?>
