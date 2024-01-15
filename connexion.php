
<?php
class connexion
{
    function getConnexion()
    {
        $dsn = "mysql:host=localhost;dbname=reclamation";
        $username = "root";
        $password = "";

        $connexion = new PDO($dsn, $username, $password);

        return $connexion;
    }
}
?>