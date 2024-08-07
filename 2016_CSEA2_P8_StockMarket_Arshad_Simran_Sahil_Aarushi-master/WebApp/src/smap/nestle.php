<?php

include_once 'config.php';
   

 $query = "SELECT * FROM nestleind ";

 $response["mydata"] = array();
 $response["success"] = 0;
 $response["error"] = 'error';
 $response["message"] = 'failure';

$data1=array();
$data2=array();
$data3=array();
$data4=array();
$data5=array();

 if ($result=mysqli_query($conn,$query))
  {

   if(mysqli_num_rows($result) > 0)
    {

    while ($row = mysqli_fetch_array($result)){

            $product = array();
            

//            $product["imageOne"] = base64_encode($row["front"]);
//            $product["imageTwo"] = base64_encode($row["front"]);

        // $product["Date"] = $row["Date"];
        // $product["comnay"] = $row["comnay"];
        // $product["high"] = $row["high"];
        // $product["low"] = $row["low"];
        // $product["close"] = $row["close"];
        $data1[]=date("d-m-Y",strtotime($row["Date"]));
        $data2[]=number_format($row["Open"]);
        $data3[]=number_format($row["High"]);
        $data4[]=number_format($row["Low"]);
        $data5[]=number_format($row["Close"]);

       

        array_push($response["mydata"], $product);
             
        }

    //   $response["success"] = 1;
    //   $response["error"] = 'exist';
    //   $response["message"] = 'Done';
    //   echo json_encode($response);  
  }
  else{
    // $response["success"] = 0;
    // $response["error"] = 'no details';
    // $response["message"] = 'failure';
    //echo json_encode($response); 

    //$datax=json_encode($data2);
 
      }
   //   return json_encode($data2)
    }

    else{
      //  echo json_encode($response);
    }

//$click = json_encode($data2);

   // $datax= json_encode($data2);
    //echo $data2[3];
    // $integerIDs = array_map('intval', explode(',', $data2));
    // $numArray = array_map('intval', $data2);
    // array_walk($numArray, function(&$v){ $v = intval($v); });

    //echo "-------------------------";
    $var=number_format($data2[2]);
    //echo json_encode($data2);

  //  $datax= json_encode($data2, JSON_NUMERIC_CHECK);
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>HighChart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
</head>
<body>

<script type="text/javascript">


$(document).ready(function() {
    
    var chart = new Highcharts.Chart('container',{
          chart: {
            // renderTo: 'container',
             type: 'line'
          },

        title:  {
                    text: 'graph'
                },

        xAxis:  {
                    categories: ['<?php echo join($data1, "','") ?>'],
                },

        yAxis:  {
                   
                    min:0,

                },

        legend: {
                    layout: 'horizontal',
                    backgroundColor: '#ffffff',
                    align: 'top',
                    verticalAlign: 'top',
                    x: 50,
                    y: 0,
                    floating: true,
                    shadow: true
                },
	
        plotOptions: {
                        line :
                        {
                                color: '#ff0000'
                        }

        
                    },

        series: [   {
                        name: 'Open',
                        data: [<?php echo join($data2, ',') ?>],
                        type: 'line',
                        color: '#0000FF'
                     
                        // pointStart: 0,
                        //  pointInterval
                    },
                    {
                        name: 'High',
                        data: [<?php echo join($data3, ',') ?>],
                        type: 'line',
                        color: '#FF0000'
                        // type: 'line'
                     
                        // pointStart: 0,
                        //  pointInterval
                    },
                    {
                        name: 'Low',
                        data:  [<?php echo join($data4, ',') ?>],
                        type: 'line',
                        color: '#ffaa00'
                        // type: 'line'
                     
                        // pointStart: 0,
                        //  pointInterval
                    },
                    {
                        name: 'Close',
                        data:  [<?php echo join($data5, ',') ?>],
                        type: 'line',
                        color: '#000000'
                        // type: 'line'
                     
                        // pointStart: 0,
                        //  pointInterval
                    },





                ]
    });
});
</script>



<div class="container">
	<br/>
	<h2 class="text-center">NESTLEIND</h2>
    <div class="row">
        
            <div class="panel panel-default">
                <div class="panel-heading">Stock Graph</div>
                <div class="panel-body">
                    <div id="container"></div>
                </div>
            
        </div>
    </div>
</div>


</body>
</html>
