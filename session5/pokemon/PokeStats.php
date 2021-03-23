<html>
<head>
<title></title>
<?php require 'css.php'?>
</head>
<body>
    

<?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        $id = "1";
    }



    //set url
    $url = "https://pokeapi.co/api/v2/pokemon/".$id;
    curl_setopt($curl, CURLOPT_URL, $url);
    //converts the JSON string into a PHP object
    $result = json_decode(curl_exec($curl));

    //check 
    //echo json_encode($results);
     
     

?>

<div class='container main'>
<div class='row center'>
<div class='col-md-6 col-sm-12 imgpart'>
    <?php 
    echo "<img class='display' src='".$result->sprites->front_default."'>";
    echo "<img class='display' src='".$result->sprites->back_default."'>";
    ?>
</div>
<div class='col-md-6 col-sm-12'>
    <?php 
    print "<h2>ID: ".$result->id."</h2>";
    print "<h2>Name: ".$result->name."</h2>";
    print "<h3>Weight: ".$result->weight."</h3>";
    print "<h3>Height: ".$result->height."</h3>";
    print "<h2>Attack: ".$result->stats->name."</h2>";
    //print "<h2>Attack: ".$result->stats->attack."</h2>";
    //print "<h2>Defense: ".$result->stats->defense."</h2>";
    ?>
</div>
</div>
</div>
</body>
</html>