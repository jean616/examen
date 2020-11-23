
<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="number" name="idlecc" placeholder="Ingrese idlecc"><br>
    <input type="number" name="numero" placeholder="Ingrese numero"><br>
    <input type="password" name="Comentario_profesor" placeholder="Ingrese Comentario_profesor"><br>
    <input type="password" name="Comentario_estudiante" placeholder="Ingrese Comentario_estudiante"><br>
    <select name="estatus">
        <option value="programado">programado</option>
        <option value="terminado">terminado</option>
        <option value="cancelado">cancelado</option>
    </select><br>
    <input type="submit" name="submit" value="Guardar">
</form>
<?php
if(isset($_POST["submit"])){
    $idlecc = (int)$_POST["idlecc"];
    $numero = (int)$_POST["numero"];
    $Comentario_estudiante = $_POST["Comentario_estudiante"];
    $Comentario_profesor = $_POST["Comentario_profesor"];
    $tipo = $_POST["tipo"];