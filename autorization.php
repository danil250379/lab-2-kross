<?php
session_start();
include_once "usersArr.php";
include_once "classes.php";


$login = $_POST['login'];
$password = $_POST['password'];

for($i = 0; $i < count($users); $i++){
    if(($users[$i]["login"] ==  $login) && ($users[$i]["password"] == $password)){
        $counter++;
        switch ($users[$i]['role']) {
            case "manager":
                $mane = new ManagerClass($users[$i]);
                $_SESSION['User'] = $mane;
                header('Location: users/manager.php');
                break;
            case "client":
                $cli = new ClientClass($users[$i]);
                $_SESSION['User'] = $cli;
                header('Location: users/client.php');
                break;
            case "admin":
                $adm = new AdminClass($users[$i]);
                $_SESSION['User'] = $adm;
                header('Location: users/admin.php');
                break;
        };
    };
};
    if($counter++ != 0){
     echo 'Вы ввели неверные данные';
    };
?>