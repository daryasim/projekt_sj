<?php

function inputFields($placeholder,$name,$value,$type){
    $new = "
    <div class=\"form-group\">
    <input type='$type' class=\"form-control\"name='$name' placeholder='$placeholder' value='$value'>
</div>";
echo $new;
}

?>

