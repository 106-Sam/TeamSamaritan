<?php
        if(isset($_POST["submit"])){
            $user=$_POST["user"];
            $pass=$_POST["pass"];
            $xml=simplexml_load_file("user.xml")or die("Error: Cannot create object");
            foreach($xml->children() as $user){
                if($users->userid==$user){
                    echo "<center> <b>Welcome".$user .",";
                    echo "Login Successful</b></center>";
                    return;
                }
                else{
                    echo "<center><b>Invalid Password...</b></center>";
                    return;
                }

            }

            echo "<center><b>Invalid Login..</b></center>";

        }
?>