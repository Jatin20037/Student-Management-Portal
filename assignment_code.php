<?php
if(isset($_POST["submit"]))
{
$content = $_FILES['choose'];
echo $content;
}
else{
    echo "not done";
}
?>