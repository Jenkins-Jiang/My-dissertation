<?php
error_reporting(E_ALL || ~E_NOTICE); //不显示提示信息
        //1.1连接数据库
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=bylw;", "root", "123");
        } catch (PDOException $e) {
            die("数据库连接失败" . $e->getMessage());
        }
        //1.2连接mysql数据库
        $conn=mysql_connect("localhost","root","123");
        mysql_select_db("bylw");
        mysql_query("set names utf8");
        $pdo->query("SET NAMES 'UTF8'");
        //limit要求参数
        $length=8;
        $pagenum=@$_GET['page']?$_GET['page']:1;
        //数据总行数
        $sqltot="select count(*) from xinwen_in";
        $arrtot=mysql_fetch_row(mysql_query($sqltot));
        $pagetot=ceil($arrtot[0]/$length);//计算总页数，ceil（x)向上去最接近的整数
        //限制页数
        if($pagenum>=$pagetot){
        $pagenum=$pagetot;
        }
        $offset=($pagenum-1)*$length;
?>