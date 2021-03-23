<html>
<head>
<title></title>

</head>
<body>
<?php 
    //CPonfigure
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    
    //set url
    $url = "https://pokeapi.co/api/v2/pokemon/charmander";
    curl_setopt($curl, CURLOPT_URL, $url);
    //converts the JSON string into a PHP object
    $result = json_decode(curl_exec($curl));

    //check 
    //echo json_encode($result);
    
    //print
    print "<img src='".$result->sprites->front_default."'>";
    print "<h1>".$result->name."</h1>";
    print "<h1>".$result->weight."</h1>";
?>
</body>
</html>
