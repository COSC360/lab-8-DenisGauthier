<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
    {
    if(isset($_GET['firstName']) && isset($_GET["ukey"]))
    {
            $firstName= $_GET["firstName"];
            $ukey = $_GET["ukey"];
            
            if(empty($firstName))
            {
                echo "First name field missing";
            }
            else
            {
                echo "First Name: ".$firstName;
            }
            if(empty($ukey))
            {
                echo nl2br("\nUnique Key field missing");
            }
            else
            {
                echo nl2br("\nUnique Key: ".$ukey);
            }
    }
    else
    {
        echo "Form fully empty";
    }
}
else if($_SERVER["REQUEST_METHOD"] == 'POST')
{
    if(isset($_POST['firstName']) && isset($_POST["ukey"]))
    {
        $firstName= $_POST["firstName"];
        $ukey = $_POST["ukey"];
        if(empty($firstName))
        {
            echo "First name field missing";
        }
        else
        {
            echo "First Name: ".$firstName;
        }
        if(empty($ukey))
        {
            echo nl2br("Unique Key field missing");
        }
        else
        {
            echo nl2br("\nUnique Key: ".$ukey);
        }
    }
    else
    {
        echo "Form fully empty";
    }
}
?>