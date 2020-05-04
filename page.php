<?php
session_start();
if(isset($_COOKIE['theme'])){
    $theme = $_COOKIE['theme'];
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
    <form action="index.php">
    <button type="submit">Back</button>
    </form>

</body>
</html>
