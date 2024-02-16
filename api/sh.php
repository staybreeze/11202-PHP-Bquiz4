<?php
include_once "db.php";

$Goods->save($_POST);

// sql=update `goods` set sh=$_POST['sh'] where id=$_POST['id']