<?php 

$mesas = array();
class Mesa{
    public $idNumber;
    public $status;
    public $nombre;

}

$mesas = array(); 

$mesas[0] = new Mesa();
$mesas[0]->idNumber = 'A1';
$mesas[0]->status = true;


$mesas[1] = new Mesa();
$mesas[1]->idNumber = 'A2';
$mesas[1]->status = true;
$mesas[1]->nombre ='Mauricio'; 

$mesas[2] = new Mesa();
$mesas[2]->idNumber = 'A3';
$mesas[2]->status = true;
$mesas[2]->nombre ='Fiora';

$mesas[3] = new Mesa();
$mesas[3]->idNumber = 'B1';
$mesas[3]->status = true;
$mesas[3]->nombre ='Felix';

$mesas[4] = new Mesa();
$mesas[4]->idNumber = 'B2';
$mesas[4]->status = true;
$mesas[4]->nombre ='Tulio';

$mesas[5] = new Mesa();
$mesas[5]->idNumber = 'B3';
$mesas[5]->status = true;
$mesas[5]->nombre ='Lulu';

$mesas[6] = new Mesa();
$mesas[6]->idNumber = 'C1';
$mesas[6]->status = true;
$mesas[6]->nombre ='Ahri';

$mesas[7] = new Mesa();
$mesas[7]->idNumber = 'C2';
$mesas[7]->status = true;
$mesas[7]->nombre ='Teemo';



//echo $mesas[14]->idNumber."\n"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Republik </title>

    <link rel="stylesheet" href="frontend.css">
  <link rel="stylesheet" href="index.php">
</head>
<body>
    
   
        <?php 

            $mesa_reservada = 'A7';
            $nombreCliente = 'Rosa';

            foreach ($mesas as $mesa) {

                if ($mesa_reservada == $mesa->idNumber){
                    $mesa->status = false;
                    $mesa->nombre = $nombreCliente;
                }


                if ($mesa->status == false) {
                    echo "$mesa->idNumber $mesa->nombre <br>";
                }
            }

        ?>
    
</body>
</html>
