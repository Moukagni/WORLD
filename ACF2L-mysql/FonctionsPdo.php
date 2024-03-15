<?php
    require_once('ConnexionPdo.php') ;
    function getNbSalaries(){
    global $pdo;
    $query = "SELECT count(*) as nb FROM salaries ;";
    try {
    $result = $pdo->query($query)->fetch();
    return $result->nb ;
    }
    catch ( Exception $e ) {
    die ("erreur dans la requete ".$e->getMessage());
    }
    }
    function getAllSalaries(){
    global $pdo;
    $query = 'SELECT * FROM salaries ';
    try {
    $result = $pdo->query($query)->fetchAll();
    return $result;
    }
    catch ( Exception $e ) {
    die ("erreur dans la requete ".$e->getMessage());
    }
    }
    function getSalaireAvg(){
        global $pdo;
        $query = "SELECT avg(salaire) as moyenne FROM salaries ";
        try {
        $result = $pdo->query($query)->fetch();
        return $result->moyenne;
        }
        catch ( Exception $e ) {
        die ("erreur dans la requete ".$e->getMessage());
        }
        }
    function getSalaireMin(){
            global $pdo;
            $query = 'SELECT min(salaire) as minimum FROM salaries ';
            try {
            $result = $pdo->query($query)->fetch();
            return $result->minimum;
            }
            catch ( Exception $e ) {
            die ("erreur dans la requete ".$e->getMessage());
            }
            }
    function getSalaireMax(){
                global $pdo;
                $query = 'SELECT max(salaire) as maximum FROM salaries';
                try {
                $result = $pdo->query($query)->fetch();
                return $result->maximum;
                }
                catch ( Exception $e ) {
                die ("erreur dans la requete ".$e->getMessage());
                }
                }
    function getNbSalariesService(){
                    global $pdo;
                    $query = 'SELECT count(*) as nb FROM salaries';
                    try {
                    $result = $pdo->query($query)->fetch();
                    return $result->nb;
                    }
                    catch ( Exception $e ) {
                    die ("erreur dans la requete ".$e->getMessage());
                    }
                    }

?>
    

