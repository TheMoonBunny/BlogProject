@extends('layouts/layout')
@section('content')
    <div class="wrapper-text">
        <h1>How to use PHP to connect and send data to your database.</h1>
        <br>
        <p>In this tutorial I will be explaining how to connect to your localhost and setup a database so you can connect to it with your project and store value in it.
        <br>
        <br>
        <p>You will need to have the following to follow along with this guide.</p>
            <ol> 
                <li>XAMPP</li>
                <li>PHP</li>
                <li>An IDE(I will be using Visual Studio Code).</li>
            </ol>    
            <br>
            We will start by making a simple form in HTML.
            <br>
            <img src="img/articleimage/article2/tutorial2_2.jpg">
            <br>
            <br>   
            By using the following HTML lines, you will be able to make a form with a button that can submit on click and stay on the current page.
            <br>
            Next we will have to make a localhost database thru XAMPP make sure the following is on.
            <br>
            <br>
            <img src="img/articleimage/article2/tutorial2_3.jpg">
            <br>
            <br>
            We also have to make a simple database in our localhost/phpmyadmin *in your browser while XAMPP is on*.
            It is a simple table with 1 column with a text    
            <br>
            <img src="img/articleimage/article2/tutorial2_4.jpg">
            <br>
            <img src="img/articleimage/article2/tutorial2_5.jpg">
            
            <br>
            <br>
            <img src="img/articleimage/article2/tutorial2_6.jpg">
            <br><br>            
            The following PHP codes will setup a database connection and check if it works and then submit it on click.
            <br>
            There are comments with the codes so you can understand what each line does.

</p>    


        <pre>
            <code>
                /*We have to make a variable and put the name of the form in it and how it will post it in the database*/
                $input_name= $_POST["input_test"];
                //This is our connection to the database our localhost,username,password, name of DB
                $mysqli = new mysqli("localhost", "root", "", "testdb");
                
                /* check connection and if connection fail it will print out it failed*/
                if ($mysqli->connect_errno) {
                    printf("Connect failed: %s\n", mysqli_connect_error());
                    exit();
                }
                /*To check if we are connected and give us a confirmation */
                echo "connected";
                // a variable to hold our sql commands to put in our Database name and table and the value will be form input name
                $sql = "INSERT INTO testdb.value (name) VALUE ('$input_name')";
                
                // Running the insert to database
                $mysqli->query($sql);
            </code>
        </pre>
        <br><br>
        <img src="img/articleimage/article2/tutorial2_7.jpg">
        <p>Your databse table should be filled with what you typed inside the form.
            <br>
            <br> 
            Hopefully this guide was useful enough for anyone to understand and use.
            <br>
            If you want to find out how to display those same data you inserted on your website read the following article for more information.
            <br>
            <a href="/databasetut2">How to display data from database on your website</a>
        </p>
        <br>
        <div class= "share-buttons"> 
            <!-- AddToAny BEGIN -->
            <a class="a2a_dd" href="https://www.addtoany.com/share"><img src="https://static.addtoany.com/buttons/share_save_171_16.png" width="171" height="16" border="0" alt="Share"></a>
            <script async src="https://static.addtoany.com/menu/page.js"></script>
            <!-- AddToAny END -->
            </div>
    </div>
@endsection

