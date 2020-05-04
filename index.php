<?php
session_start();
if(isset($_COOKIE['theme'])){
    $theme = $_COOKIE['theme'];
}
if(isset($_POST['dark'])){
    setcookie('theme','dark',time()-3600);
    setcookie('theme','dark',time()+3600);
    header("refresh:0.1;url=index.php");
}
if(isset($_POST['lite'])){
    setcookie('theme','dark',time()-3600);
    setcookie('theme','lite',time()+3600);
    header("refresh:0.1;url=index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    
    <style>
        body{
            background-color: <?php if($theme=='dark'){echo ("black");} else{ echo ("white");} ?>;
        }
        button{
            background-color: <?php if($theme=='dark'){echo ("#212121");} else{ echo ("#ff7474");} ?>;
            color:<?php if($theme=='dark'){echo ("white");} else{ echo ("black");} ?>;
                
        }
    
    </style>
   
    
    <title></title>
</head>
<body>
    <form action="" method="post">
    <button type="submit" name="lite">Lite</button>
    <button type="submit" name="dark">Dark</button>
    </form><br><br>
<a href="page.php"><button type="submit">Next page</button></a>
</body>
</html>
