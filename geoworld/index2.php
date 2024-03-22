<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

?>
<?php  require_once 'header.php'; ?>
<?php
require_once 'inc/manager-db.php';
if(isset($_GET['continent'])){
  $continent = $_GET['continent'];}
else{ 
    $continent = 'Asia';
  }
$desPays = getCountriesByContinent($continent);
?>

<main role="main" class="flex-shrink-0">
  <div class="container">
    <style>
      body{
        background-image : url("https://i.gifer.com/PX5H.gif");
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
        background-attachment: fixed;
        background-color:black;
        color:white;
      }

      .table{
        width: 100%;
        margin-bottom:1rem;
        color:white;
      }
      .bg-dark {
        background-color: #00BFFF !important;
      }
      </style>
    <h1>Country in <?php echo $continent; ?></h1>
    <div>
     <table class="table">
         <tr>
            <th>Drapeau</th>
           <th>Name</th>
           <th>Population</th>
           <th>Region</th>
           <th>Capital</th>
           <th>Government</th>
           <th>Life Expectancy</th>
         </tr>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country) 
        foreach($desPays as $pays) : ?>
          <tr>
            <td> <img src= "./images/drapeau/<?php if (!empty ($pays->Code2)){echo strtolower($pays->Code2);} else{echo "pas de drapeau";}?>.png">
            <td> <?php echo $pays->Name ?></td>
            <td> <?php echo $pays->Population ?></td> 
            <td> <?php echo $pays->Region ?></td>
            <td> <?php if(!empty($pays->Capital)){echo getCapitale($pays->Capital);} else{echo"VOID";}?></td>
            <td> <?php echo $pays->GovernmentForm ?></td>
            <td> <?php if(!empty($pays->LifeExpectancy)){echo($pays->LifeExpectancy);} else{echo"NULL";} ?></td>
          </tr>
          <?php endforeach ; ?> 
     </table>
    </div>
    <p>
        <code>
      <?php
        //var_dump($desPays[0]);
        ?>
        </code>
    </p>
  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>