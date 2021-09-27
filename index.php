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

        if (isset($_POST['user'])){
        if ($result = $mysqli->query("SELECT * FROM users WHERE user = $_POST['user']")){

                if ($result == $_POST['user']){
                    $identificador = 1;
                    if(isset($_POST['password'])){
                        if ($usuario['password'] == $_POST['password']){
                            echo "<p>Se ha iniciado sesión correctamente</p>";
                    
                        } else {
                            echo "<p>Contraseña incorrecta</p>";
                        }
                    }                
                }
            }
        }

        if ($identificador == 0){
            echo "<p>No existe el usuario</p>";
        }

    ?>

    <form method= "POST" action="index.php">
        <input type="text" name="user" placeholder= "usuario"/>
        <input type="password" name="password" placeholder= "contraseña"/>
        <input type="submit"/>
    </form>
</body>
</html>