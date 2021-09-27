<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySQL</title>
</head>
<body>
    <?php
    //CONECTAR A BBDD
       /* $mysqli = new mysqli("localhost", "root", "", "daw" );
        if ($mysqli->connect_errno){
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")";
        }

    //hacemos una consulta
        if ($result = $mysqli->query("SELECT * FROM users WHERE username= 'admin'"))´{
            $row = $result -> fetch_row();
            echo "el usuario encontrado es " . $row[1];
            $result->close();
        }
    
    //Sacar todos los usuarios
        if ($result = $mysqli->query("SELECT * FROM users")){
            while ($row = $result -> fetch_assoc()){
                echo "el usuario encontrado es " . $row['username'] . "<br>";
            }
            $result->close();
        }
   


        $mysqli = new mysqli ("localhost", "root", "", "enlaces");
        if ($mysqli->connect_errno){
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")";
        }

        if ($result = $mysqli->query("SELECT * FROM enlaces")){
            while ($row = $result -> fetch_assoc()){
                echo '<a href="' . $row['enlace'] . '"><img src="' .$row['imagen']. '"  width="150">  </img></a>';                
            }
            $result->close();
        }

 */

        $identificador = 0;


        $mysqli = new mysqli ("localhost", "root", "", "daw");
        if ($mysqli->connect_errno){
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ")";
        }

        if (isset($_POST['user']) && isset($_POST['password'])){
            if ($result = $mysqli->query( "SELECT * FROM users WHERE user = ' ".$_POST['user']."'")){

                if($row=$result-> fetch_assoc()){
                    if($row['password'] == $_POST['password']){
                        echo "Sesión iniciada";
                    }
                }            
            }
        }

        

    ?>

    <form method= "POST" action="index.php">
        <input type="text" name="user" placeholder= "usuario" required/>
        <input type="password" name="password" placeholder= "contraseña" required/>
        <input type="submit"/>
    </form>
</body>
</html>