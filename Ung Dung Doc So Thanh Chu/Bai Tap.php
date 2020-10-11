<form method="post">
    <input type="number" name="number" placeholder="Nhập Số"/>
    <input type="submit" id="submit" value="Tìm"/>
</form>

<?php
$numbers = array("mot","hai","ba","bon","nam","sau","bay","tam","chin","muoi");
if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $value_input = $_POST['number'];
    foreach ($numbers as $key=> $number){
        if ($key == $value_input){
            echo ($numbers[$key]);
        }
    }
}
