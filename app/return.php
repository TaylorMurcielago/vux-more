<?php    
require_once(dirname(__file__) . "/Http.php");
header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');  //此声明非常重要
header('Access-Control-Allow-Headers:x-requested-with,content-type，requesttype');
header("Access-Control-Allow-Origin", "*");//支持全域名访问，不安全，部署后需要固定限制为客户端网址
// response.addHeader("Access-Control-Allow-Headers", "x-requested-with,content-type,token,auth");//响应头 请按照自己需求添加。
// response.addHeader("Access-Control-Allow-Methods", "POST, GET, OPTIONS, DELETE, PUT");


    try {        

    $conn = new PDO("mysql:host=localhost;dbname=orig", 'admin', 'admin');        

    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        

    $conn->exec("SET NAMES utf8");   //设置编码

    } catch(PDOException $e) {

        echo "conn_error:<br/>" . $e -> getMessage();

    }    $sql = "select id,address from ip_segments limit 2;";    

    $result = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

 

    echo json_encode($result,JSON_UNESCAPED_UNICODE);  //JSON_UNESCAPED_UNICODE防止中文乱码

    ?>