<html>
<head>


</head>

<body>

    <?php
     
        session_start();
        
        if(!isset($_SESSION["loggedin"])){
            session_destroy();
            header("Location: http://localhost/login/index.php");
            die();
        }
    
    ?>

    <form action="logout.php" method="POST">
    
        <input type="submit" value="sair" />
    
    </form>


    <h1> LOGADO!!! </h1>

</body>

</html>
