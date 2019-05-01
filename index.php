<html>
<head>
</head>
<body>
<h1>Hello AZure</h1>
  <?php
$serverName = "dicodingazureapp.database.windows.net"; //serverName\instanceName
$connectionInfo = array( "Database"=>"dicodingazureDB", "UID"=>"asev", "PWD"=>"One2345678");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
</body>
</html>
