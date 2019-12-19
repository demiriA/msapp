<?php
    include_once 'database.php';

    function getUsers($pdo){
        $sql = 'SELECT * FROM `table_employee`';
        $statement = $pdo->prepare($sql);
        if ($statement->execute()){
            return $statement->fetchAll(PDO::FETCH_OBJ);
        }
        return null;
    }

    function login($embg,$pdo){
        $embg = md5($embg);
        $exists = 0;
        foreach (getUsers($pdo) as $user){
            if ($embg == $user->embg){
                $exists = 1;
                setcookie("logged",$user->embg);
                header("Location: /service");
            }
        }
        if($exists == 0){
            header("Location: /login.php?auth=false");
        }
    }

//    login("1103996425042",$pdo);

    function getUserDetails($embg, $pdo){
        $sql = 'SELECT * FROM `table_employee` WHERE `embg` = :embg';
        $statement = $pdo->prepare($sql);
        if ($statement->execute([':embg'=>$embg])){
            return $statement->fetch(PDO::FETCH_OBJ);
        }
        return null;
    }

    function getUserRole($embg ,$pdo){
        $user = getUserDetails($embg,$pdo);
        $sql = 'SELECT `name` FROM `table_position` WHERE `position_id`= :position_id';
        $statement = $pdo->prepare($sql);
        if($user != null){
            if($statement->execute([':position_id'=>$user->position_id])){
                return $statement->fetchColumn();
            }
        }
        return null;
    }

//    echo getUserRole("6aa7b5b3203d89f4324859ac87229c06",$pdo);