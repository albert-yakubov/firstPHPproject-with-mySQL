<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body>
        <h2>Registration Page</h2>

        <input type="button" value="Go Back!" onclick="history.back(-1)" />

        <form action="register.php" method="post">
            Enter username: <input type="text" name="username" required="required" /> <br/>
            Enter password: <input type="password" name="password" required="required" /> <br/>
            <input type="submit" value="register"/>
        </form>
    </body>
</html>

<?php
//mysqli_query
//(mysqli $mysql, string $query, int $result_mode = MYSQLI_STORE_RESULT): mysqli_result|bool
        $link = mysqli_connect("localhost", "user1", "password", "first_db");
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = strval($_POST['username']);
        $password = strval($_POST['password']);
        $bool = true;
        mysqli_connect("localhost", "root","") or die(mysqli_error($first_db));      //Connect to server
        mysqli_select_db($link, "first_db"); //Connect to database
        $query = mysqli_query($link, "Select * from users"); //Query the users table
        
        while($row = mysqli_fetch_array($query)) // display all rows
        {
            $table_users == $row['username'];
            if($username == $table_users){
                $bool = false;
                Print '<script>alert("Username has been taken!");</script>';     //Prompts the user
                Print '<script>window.location.assign("register.php");</script>' ;  //redirects to register PHP
                  }
        }
        if($bool)
        mysqli_query($link, "INSERT INTO users (username, password) VALUES ('$username', 'password')"); // inserts value into table users
        echo "Username entered: " . $username . "<br />";
        echo "Password entered: " . $password;
        Print '<script>alert("Successfully Registered!");</script>';      // Prompts the user
        Print '<script>window.location.assign("register.php");</script>'; // redirects to 
                                                                          // register.php

    }
    ?>