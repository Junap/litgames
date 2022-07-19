<?php
require_once "..//model/Games.php";

$games = new games();

$idgame=isset($_POST["idgame"])? limpiarCadena($_POST["idgame"]):"";
$name=isset($_POST["name"])? limpiarCadena($_POST["name"]):"";
$duration=isset($_POST["duration"])? limpiarCadena($_POST["duration"]):"";
$description=isset($_POST["description"])? limpiarCadena($_POST["description"]):"";

switch ($_GET["op"]){
    case 'saveandedit':
        if (empty($idgame)){
        $rsponse=$games->insert($idgame,$name,$duration,$description);
        echo $rsponse ? "Game was registered!" : "Could not complete the operation";
        }
        else{
        $rsponse=$games->edit($idgame,$name,$duration,$description);
        echo $rsponse ? "Game was updated!" : "Could not complete the operation";    
        } 
       
    break;
    case 'show':
        $rsponse=$games->show($idgame);
        echo json_encode($rsponse);

    break;
    case 'listing':
        $rsponse=$games->listing();
        //Lets declare an array
        $data[]=Array();

        while ($reg=$rsponse->fetch_object()){
            $data[]=array(
                "0"=>$reg->idgame,
                "1"=>$reg->name,
                "2"=>$reg->duration,
                "3"=>$reg->description
                );
            }
        $results = array(
            "sEcho" =>1, //information for datatables
            "iTotalRecords" =>count($data), //we send the sum of registers to our datatable
            "iTotalDisplayRecords" =>count($data), //send the sum of register to display
            "aaData"=>$data);
            echo json_encode($results);
        
    break;
    }

?>
