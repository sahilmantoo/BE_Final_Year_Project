<?php

$servername = "localhost";
$username = "root";
$password ="";
$dbname = "stock_market";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// else{
//     echo "connection successfull";
// }

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>


<html>
<head>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" 

href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" 

src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" 

src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$com_arr = ['ACC','3MINDIA','ABB','AKZOINDIA','ABAN','ADORWELD','AJANTPHARM','AGCNET'
,'ALBK','ADANIENT','ALEMBICLTD','AKSHOPTFBR','AARTIDRUGS','AEGISCHEM','AIAENG'
,'ALLSEC','3IINFOTECH','ALLCARGO','AJMERA','ADHUNIK','ACE','ABGSHIP','ALICON','AARVEEDEN'
,'ADSL','ALCHEM','ADVANIHOTR','ALKYLAMINE','20MICRONS','ALKALI','ALMONDZ','ADANIPOWER'
,'AHLUCONT','AHLEAST'];
foreach($com_arr as $com){

    $img = "graph_".$com.".png";

?>
<div class="col-md-12">
<div class="col-md-12">
<h3 class="text-left" style="color:#cc0000; padding-left:60px"><?php echo "Company Name: ".$com; ?></h3>
</div>
<div class="col-md-5">
<img src="<?php echo $img; ?>" 
             class="img-responsive" alt="Responsive image" 
              /> </div>

<div class="col-md-7">

        <div class="table-responsive">
        <table id="<?php echo $com; ?>" class="display table" width="100%" >
                <thead>  
                <tr>  
                    <th>S.No</th>  
                    <th>Predicted</th>  
                    <th>Expected</th>  
                </tr>  
                </thead>  
                <tbody>  
                <?php

        $count = 0;
        $sql  = "SELECT * FROM company_data WHERE `company`='$com' " ;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $count = $count + 1;
        ?>
        <tr>
            <td class="step"><?php echo $count;  ?></td>
            <td class="step"><?php echo $row["predicted"];  ?></td>
            <td class="step"><?php echo $row["expected"];  ?></td>
        <?php  
        }?>

        </tr>
        <?php   }

        //  $conn->close();

        ?>
        
                </tbody>  
            </table>  
        </div>     
 </div>
 <div class="col-md-12">
 <p  style="color:#cc0000">
 <br><br><b><hr></b><br><br>
</p>
 </div>
</div>
<script>
$(document).ready(function(){
    $('#3MINDIA').dataTable();
    $('#ACC').dataTable();
    $('#ABB').dataTable();
    $('#AKZOINDIA').dataTable();
    $('#ABAN').dataTable();
    $('#ADORWELD').dataTable();
    $('#AJANTPHARM').dataTable();
    $('#AGCNET').dataTable();
    $('#ALBK').dataTable();
    $('#ADANIENT').dataTable();
    $('#ALEMBICLTD').dataTable();
    $('#AKSHOPTFBR').dataTable();
    $('#AARTIDRUGS').dataTable();
    $('#AEGISCHEM').dataTable();
    $('#AIAENG').dataTable();
    $('#ALLSEC').dataTable();
    $('#3IINFOTECH').dataTable();
    $('#ALLCARGO').dataTable();
    $('#AJMERA').dataTable();
    $('#ADHUNIK').dataTable();
    $('#ACE').dataTable();
    $('#ABGSHIP').dataTable();
    $('#ALICON').dataTable();
    $('#AARVEEDEN').dataTable();
    $('#ADSL').dataTable();
    $('#ALCHEM').dataTable();
    $('#ADVANIHOTR').dataTable();
    $('#ALKYLAMINE').dataTable();
    $('#20MICRONS').dataTable();
    $('#ALKALI').dataTable();
    $('#ALMONDZ').dataTable();
    $('#ADANIPOWER').dataTable();
    $('#AHLUCONT').dataTable();
    $('#AHLEAST').dataTable();


    
});
</script>
<?php
}
?>
</body>
</html>
