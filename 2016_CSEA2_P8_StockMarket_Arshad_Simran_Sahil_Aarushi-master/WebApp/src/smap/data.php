<!--?php $con = mysql_connect("localhost","root",""); if (!$con) { die('Could not connect: ' . mysql_error()); } mysql_select_db("highcharts", $con); $sth = mysql_query("SELECT revenue FROM projections_sample"); $rows = array(); $rows['name'] = 'Revenue'; while($r = mysql_fetch_array($sth)) { $rows['data'][] = $r['revenue']; } $sth = mysql_query("SELECT overhead FROM projections_sample"); $rows1 = array(); $rows1['name'] = 'Overhead'; while($rr = mysql_fetch_assoc($sth)) { $rows1['data'][] = $rr['overhead']; } $result = array(); array_push($result,$rows); array_push($result,$rows1); print json_encode($result, JSON_NUMERIC_CHECK); mysql_close($con); ?--><?php
$con = <a href="http://www.php.net/mysql_connect">mysql_connect</a>("localhost","root","");
 
if (!$con) {
<a href="http://www.php.net/die">die</a>('Could not connect: ' . <a href="http://www.php.net/mysql_error">mysql_error</a>());
}
 
<a href="http://www.php.net/mysql_select_db">mysql_select_db</a>("highcharts", $con);
 
$sth = <a href="http://www.php.net/mysql_query">mysql_query</a>("SELECT revenue FROM projections_sample");
$rows = <a href="http://www.php.net/array">array</a>();
$rows['name'] = 'Revenue';
while($r = <a href="http://www.php.net/mysql_fetch_array">mysql_fetch_array</a>($sth)) {
$rows['data'][] = $r['revenue'];
}
 
$sth = <a href="http://www.php.net/mysql_query">mysql_query</a>("SELECT overhead FROM projections_sample");
$rows1 = <a href="http://www.php.net/array">array</a>();
$rows1['name'] = 'Overhead';
while($rr = <a href="http://www.php.net/mysql_fetch_assoc">mysql_fetch_assoc</a>($sth)) {
$rows1['data'][] = $rr['overhead'];
}
 
$result = <a href="http://www.php.net/array">array</a>();
<a href="http://www.php.net/array_push">array_push</a>($result,$rows);
<a href="http://www.php.net/array_push">array_push</a>($result,$rows1);
 
print <a href="http://www.php.net/json_encode">json_encode</a>($result, JSON_NUMERIC_CHECK);
 
<a href="http://www.php.net/mysql_close">mysql_close</a>($con);
?>