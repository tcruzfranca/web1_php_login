
<html>
<head>

</head>

<body>

<?php
    session_start();
    
    if (isset($_SESSION["loggedin"])){
        header("Location: http://localhost/login/logado.php");
        die();
    }
?>

<div id="login">

    <form action="login.php" method="POST">
        <input type="text" name="user"/> <br/>
        <input type="password" name="pass" /> <br/>
        <input type="submit" value="Enviar" />
    </form>

</div>


</body>

</html>
