<?php
// SELECT "欄位名" FROM "表格名";
"SELECT * FROM ex2 WHERE t_name = '{$_GET["t_name"]}'";
"SELECT t_name FROM ex4_subject WHERE t_index = '{$_GET["s_index"]}'";
"SELECT t_index FROM ex1 WHERE t_name = '李大雲'";
//"SELECT t_name FROM ex1 t_index  = 1"
"SELECT t_name FROM ex1 LIMIT 0,25";
?>