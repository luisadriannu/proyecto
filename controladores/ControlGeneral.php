<?php

include '../modelos/ModeloCliente.php';
include '../modelos/ModeloTrabajador.php';
include '../modelos/Alquiler.php';

$pagina = $_POST["dato"];

/* FUNCIONES LOGIN USUARIO */

if($pagina == 'MostrarLoginUsuario'){
    require_once '../vistas/Logins/LoginUsuario.php';
}

if($pagina == 'VerificarUsuario'){

    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];

    $mCliente = new Cliente();
    $mCliente->setCorreo($correo);
    $mCliente->setContraseña($contraseña);

    if($mCliente->VerificarUsuario() == 'SI EXISTE'){

        require_once '../vistas/Portales/PortalCliente/VistaCliente.php';
    }
    if($mCliente->VerificarUsuario() == 'NO EXISTE'){
        echo '<h2 class="msgError">Usuario o Contraseña Incorrectas</h2>';
    }
}

/* FUNCIONES REGISTRAR USUARIO*/

if($pagina == 'MostrarFormRegistrarUsuario'){
    require_once '../vistas/Registrar/RegistrarUsuario.php';
}

if($pagina == 'RegistrarUsuario'){

    $correo = $_POST["correo"];
    $contra = $_POST["contraseña"];

    $mCliente = new Cliente();
    $mCliente->setCorreo($correo);
    $mCliente->setContraseña($contra);
    $rst = $mCliente->RegistrarUsuario();

    echo '<h2>'.$rst.'</h2>';
}

/* FUNCIONES LOGIN TRABAJADOR */

if($pagina == 'MostrarLoginTrab'){
    require_once '../vistas/Logins/LoginTrabajador.php';
}

if($pagina == 'IniciarSesionTrab'){
    
    $correo = $_POST["correo"];
    $contra= $_POST["contraseña"];

    $mTrabajador = new Trabajador();

    $mTrabajador->setCorreo($correo);
    $mTrabajador->setContraseña($contra);

    if($mTrabajador->VerificarTrabajador() == 'SI EXISTE'){

        require_once '../vistas/Portales/PortalTrabajador/VistaTrabajador.php';
    }
    if($mTrabajador->VerificarTrabajador() == 'NO EXISTE'){
        echo '<h2 class="msgError">Usuario o Contraseña Incorrectas</h2>';
    }

}

if($pagina == 'MostrarSucursales'){

    require_once '../vistas/Sucursales/VistaSucursales.php';
}

if($pagina == 'VerAlmacenes1'){

    require_once '../vistas/Sucursales/Almacenes/AlmacenesSuc1.php';
}

if($pagina == 'VerAlmacenes2'){
    require_once '../vistas/Sucursales/Almacenes/AlmacenesSuc2.php';
}

if($pagina == 'VerAlmacenes3'){
    require_once '../vistas/Sucursales/Almacenes/AlmacenesSuc3.php';
}

if($pagina == 'RegistrarAlquiler'){

    $almacen = $_POST["almacen"];
    require_once '../vistas/Registrar/RegistrarCliente.php';
}

if($pagina == 'RegistrarCliente'){

    $nom = $_POST["nombres"];
    $ape = $_POST["apellidos"];
    $dni =  $_POST["dni"];
    $tipo =  $_POST["tipo"];
    $ruc =  $_POST["ruc"];
    $telefono =  $_POST["telefono"];
    $correo = $_POST["correo"];
    $contra = $_POST["contra"];
    $mes = $_POST["mes"];
    $año = $_POST["año"];
    $tiempo = $_POST["tiempo"];
    $idalmacen = $_POST["almacen"];

    $mCliente = new Cliente();
    $mCliente->setApellidos($ape);
    $mCliente->setNombres($nom);
    $mCliente->setDNI($dni);
    $mCliente->setTipo($tipo);
    $mCliente->setRUC($ruc);
    $mCliente->setTelefono($telefono);
    $mCliente->setCorreo($correo);
    $mCliente->setContraseña($contra);
    $rst = $mCliente->RegistrarCliente();

    $mAlquiler = new Alquiler();
    $mAlquiler->setAño($año);
    $mAlquiler->setMes($mes);
    $rst2 = $mAlquiler->RegistrarAlquiler($idalmacen,$tiempo,$ape);
    echo '<h2>'.$rst.'</h2>';
    echo '<h2>'.$rst2.'</h2>';
}
?>