<?php
$menu=$_GET['menu']??'login';

if ($menu=="login"){
    include 'views/LoginView.php';
}
else if ($menu=='registro'){
    include 'views/RegisterView.php';
}
else if ($menu=='panel'){
    include 'views/plantilla.php';
}else{
    include 'views/Error404View.php';
}

?>
