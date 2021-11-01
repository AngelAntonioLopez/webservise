<?php

    include_once 'Conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->Conectar();

    $Email=$_REQUEST['Email'];
    $Password=$_REQUEST['Password'];

    $res= $conexion->query("select * from  alumnos where Email='$Email' and Pass='$Password'");
    $datos= array();

    foreach ($res as $row) {
        //$datos[] = $row;
       $datos=array(
            "id" => $row['id'],
            "Usuario" => $row['Usuario'],
            "Institucion" => $row['Institucion'],
            "Email" => $row['Email'],
            "Pass" => $row['Pass']
        );

    }

     echo json_encode($datos);

     /*
         CONSULTA MEDIANTE URL 
         http://localhost/webservice/ServiciosWeb-master/Login.php?Email=1213285@senati.pe&Password=j@R8uyXLknfh

     */
?>
