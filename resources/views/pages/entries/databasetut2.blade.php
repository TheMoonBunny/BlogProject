@extends('layouts/layout')
@section('content')
    <div class="wrapper-text">
        <p>
            In this tutorial I will be explaining How to display data from a database using XAMPP Stack (& PHP).
            <br>
            To follow this guide you will need the following software/programms.
            <ol>
                <li>XAMPP</li>
                <li>A Database with a single/multiple tables</li>
                <li>An IDE</li>
            </ol>
            <br>
            If you don't know how to add value/data into your database, please check this previous guide on how to do it.
            <br>
            <a href="/databasetut1">How to insert data from your website into your database</a>

            <br>
            <br>
            To start off you will need to make variables to hold the connection info to the database and a SQL statement to select the data your looking for inside your database/table.
            <br>
            <pre>
                <code>
                    $mysqli = new mysqli("localhost", "root", "", "testdb");
                    $sql2 = "SELECT * FROM value;";
                    $result = mysqli_query($mysqli, $sql2);
                    $resultCheck = mysqli_num_rows($result);
                </code>
             </pre> 
             <br>
             The first line of code is used to setup a database connection and requires you to add all your localhost info for your database.
             <br>
             the parameters for the mysqli works as follow (localhost, username, password, database name).
             <br>
             sql2 is a query where you put in SQL statements to run your sql code onto the database, In this situation we are selecting everything from the table value inside of our database to see whats in it.
             <br>
             <br>
             <pre>
                 <code>
                    /* check connection and if connection fail it will print out it failed*/
                    if ($mysqli->connect_errno) {
                        printf("Connect failed: %s\n", mysqli_connect_error());
                        exit();
                    }
                    /*To check if we are connected and give us a confirmation */
                    echo "connected";
                 </code>
             </pre>
             <br>
             In this section we will be making an If statement to verify if you are connected to your database,
             <br>
             So it will print out wether you are connected or not.

            
              
             <br>     
             <br>            
            <pre>
                <code>                    
                        if ($resultCheck > 0){
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row['name'] . "br";
                            }
                        }
        
                </code>
            </pre>
        <br>
        <br>
        With this last If statement with a while loop inside, we will be able to run thru our table in our database and display each value inside of it.
        <br>
        <br>
        <div class= "share-buttons"> 
            <!-- AddToAny BEGIN -->
            <a class="a2a_dd" href="https://www.addtoany.com/share"><img src="https://static.addtoany.com/buttons/share_save_171_16.png" width="171" height="16" border="0" alt="Share"></a>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
            <!-- AddToAny END -->
            </div>
    </div>
@endsection

