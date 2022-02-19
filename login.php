<html>
    
    <head>
        <title>My first PHP Website</title>
    </head>
    
    <body>
    
        <h2>Login Page</h2>
        <input type="button" value="Go Back From Whence You Came!" onclick="history.back(-1)" />


        <form action="checklogin.php" method="POST">

           <div>
                <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
            </div>
            <div>
                <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
            </div>
            <div>
                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </div>
        </form>
    </body>
    
</html>