<?php 

    require_once("../config/conexion.php"); 
    require_once("../models/Producto.php");  

    $producto = new Producto();

    switch("listar") {

        case "listar":
           /*  $datos = ; */
            echo "<pre>";
            var_dump($producto->get_producto());
            echo "</pre>";
            /* $data = array(); */
            /* foreach($datos as $row) {
                $sub_array = array();
                $sub_array[] = $row["prod_nom"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["prod_id"].');" id="'.$row["prod_id"].'" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></buttom>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["prod_id"].');" id="'.$row["prod_id"].'" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></buttom>';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data
            ); */

            /* echo json_encode($results); */

        break;
    }

   

?>