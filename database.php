<?php

function MySQLSESSION_ExecuteSQL($Query)
{
   $mysqlSESSION_database = mysqli_connect ("localhost", "root", "","phpcrud23086") ;

	//echo $Query;

   $Recorset='';
   if ($mysqlSESSION_database) {
      mysqli_set_charset( $mysqlSESSION_database, 'utf8');
      mysqli_query($mysqlSESSION_database, "SET SESSION sql_mode = ' ' ");
      
      $Recordset = mysqli_query($mysqlSESSION_database, $Query);
   }
   return $Recordset;
}

?>