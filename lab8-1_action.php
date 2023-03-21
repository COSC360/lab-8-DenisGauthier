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
            if(empty($ukey))
            {
                echo nl2br("\nUnique Key field missing");
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
           
        if(empty($ukey))
        {
            echo nl2br("Unique Key field missing");
        }

    }
    else
    {
        echo "Form fully empty";
    }
}

$file = file('data.txt') or die("Cannot find file");
$seperate = ',';
if(isset($firstName) && isset($ukey) && $firstName != '' && $ukey != '')
{
    foreach ($file as $read){
        $array = explode($seperate, $read);
        $key = $array[0];
        $name = $array[1];
        $text = $array[2];
        $img = $array[3];

        if(strcasecmp($firstName, $name) == 0 && strcasecmp($ukey, $key) == 0){
            echo "<h1>".$text.'</h1>
                <figure>
                    <img src="'.$img.'">
                    <figcaption>'.$text.'</figcapture>
                    </figure>';
        }
    }
}
else{
    echo "Error loading file";
}
?>