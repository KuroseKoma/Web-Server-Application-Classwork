<html>
<head>
<title></title>

</head>
<body>
<?php 
    //CPonfigure
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    if(isset($_GET['item'])){
        $item = $_GET['item'];
    }else{
        $item = "btc";
    }

    $query = array(
        "x-api-key"=>"QJEZxalMqapyjmvZ",
        "q"=>$item
    );
    
    //set url
    $url = "https://tarkov-market.com/api/v1/item"."?".http_build_query($query);
    curl_setopt($curl, CURLOPT_URL, $url);

    //converts the JSON string into a PHP object
    $results = json_decode(curl_exec($curl));

    //echo json_encode($result);
    foreach ($results as $result){
    echo "<img src='".$result->icon."'>";
    print "<h1>".$result->name."</h1>";
    }

?>
</body>
</html>
