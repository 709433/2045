<?php
file_put_contents('data/'.$_POST['title'],$_POST['description']);
header('Location: http://localhost/2045/index.php?id='.$_POST['title']);
 ?>
