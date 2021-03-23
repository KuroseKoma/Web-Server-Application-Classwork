<html>
    <head>
        <title>Add A New Record</title>
        <style media="screen">
            label{
                display: inline-block;
                text-align: right;
                width: 105px;
                height: 40px;
            }

    </style>
    </head>
    <body>
        <?php
        require "config.php";
        ?>
        <h2>Please fill in your information</h2>
        <form action="insert.php" method="post">
            
            <label>Name: </label><input type="text" name="name" required/><br>
            <label>Address: </label><input type="text" name="addrress" maxlength="50" required/><br>
            <label>Town: </label><input type="date" name="town" maxlength="50" required/><br>
            <label>Country: </label><input type="text" name="country" maxlength="50" required/><br>
            <label>Tel: </label><input type="number" name="tel" maxlength="15" required /><br>
        
            <input type="submit"/>
        </form>
        <?php
        $conn->close();
        ?>
    </body>
</html>