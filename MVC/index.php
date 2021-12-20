<?php
if ((isset($_POST['nombre']))  &&  ($_POST['nombre']  !=  '')  &&  (isset($_POST['apellidos']))  &&
    ($_POST['apellidos'] != '') && (isset($_POST['telefono'])) && ($_POST['telefono'] != '') &&
    (isset($_POST['departamento'])) && ($_POST['departamento'] != '')
) {

    include "modelo/modelo.php";
    $nuevo = new Empleado();
    $asd = $nuevo->setEmpleado(
        $_POST['nombre'],
        $_POST['apellidos'],
        $_POST['telefono'],
        $_POST['departamento']
    );
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ejemplo MVC con PHP</title>
</head>

<body>
    <header>
        <h1>Ejemplo MVC con PHP</h1>
        <hr />
        <p>Creamos una base de datos de los empleados de una empresa y operamos con ella
            mediante el paradigna MVC</p>
    </header>
    <div>
        <form action="#" method="post">

            <table>
                <tr>
                    <th>Nuevo empleado
                <tr>
                    <td>Nombre:
                    <td><input type="text" name="nombre" />
                <tr>
                    <td>Apellidos:
                    <td><input type="text" name="apellidos" />
                <tr>
                    <td>Teléfono:
                    <td><input type="tel" name="telefono" />
                <tr>
                    <td>Departamento:
                    <td> <input type="text" name="departamento" />
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Crear" />
            </table>
        </form>

        <hr />
        <h3>Listado de empleados</h3>
        <a href="controlador/controlador.php"> Acceder al listado de empleados</a>
        <hr />
    </div>
</body>

</html>
