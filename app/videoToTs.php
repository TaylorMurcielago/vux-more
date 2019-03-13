<?php
 date_default_timezone_set("Asia/Shanghai"); //设置时区
$code = $_FILES['file'];/ 
//  print_r($code);
$name=$_FILES['name'];

$arrName=explode('.', $code['name']);
// print_r($arrName[0]);
$newName=$arrName[0];
// print_r($name);
// echo $code
if(is_uploaded_file($_FILES['file']['tmp_name'])) {  
    //把文件转存到你希望的目录（不要使用copy函数）  
    $uploaded_file=$_FILES['file']['tmp_name'];  
    // $username = "min_img";
    //我们给每个用户动态的创建一个文件夹  
    $user_path="/usr/share/nginx/html/silk-v3-decoder/";  
    //判断该用户文件夹是否已经有这个文件夹  
    if(!file_exists($user_path)) {  
        mkdir($user_path);  
    }  
 
    //$move_to_file=$user_path."/".$_FILES['file']['name'];  
    $file_true_name=$_FILES['file']['name'];  
    $move_to_file=$user_path.$newName.substr($file_true_name,strrpos($file_true_name,"."));//strrops($file_true,".")查找“.”在字符串中最后一次出现的位置  
    print_r($uploaded_file);
     print_r("9999999");
    print_r($move_to_file);  
    // echo "$uploaded_file   $move_to_file";  
    if(move_uploaded_file($uploaded_file,iconv("utf-8","gb2312",$move_to_file))) {  
//          $command1 = "rm /usr/share/nginx/html/silk-v3-decoder/".$newName.".wav"; //ls是linux下的查目录，文件的命令
// exec($command1,$array1);
// print_r($array1);
print_r("hhhh");
        $command = "sh /usr/share/nginx/html/silk-v3-decoder/converter.sh  /usr/share/nginx/html/silk-v3-decoder/".$newName.".silk wav"; //ls是linux下的查目录，文件的命令
exec($command,$array); //执行命令
print_r($array);
//         echo $_FILES['file']['name']."--上传成功".date("Y-m-d H:i:sa"); 
//         sleep(1);
//         $inputfile1="/usr/share/nginx/html/silk-v3-decoder/ok.silk";
//         sleep(1);
//         $inputfile = str_replace('data:audio/webm;base64,', '', file_get_contents($inputfile1)); 
//         $content = base64_decode($inputfile); 
//         file_put_contents($inputfile1, $content);
            // $file="/usr/share/nginx/html/silk-v3-decoder/ok.silk";
            // // $file 是 silk文件路径 删掉前面的加密说明
            // $base64 = str_replace('data:audio/webm;base64,', '', file_get_contents($file));
            // // 转码
            // $content = base64_decode($base64);
            // // 把转码后的内容存入文件
            // file_put_contents($file, $content); 

        
            // sleep(1);
            // $a = exec('sh /usr/share/nginx/html/silk-v3-decoder/converter.sh /usr/share/nginx/html/silk-v3-decoder/ok.silk wav',$out,$status); 
            // // print_r($a); 
            // print_r($out); 
            // print_r($status); 
            // echo "99999";



            
            
            // echo $move_to_file;
            // $base64_string= explode(',', file_get_contents(iconv("utf-8","gb2312",$move_to_file))); 
            // // //截取data:image/png;base64, 这个逗号后的字符
            // $data= base64_decode($base64_string[1]);　　//对截取后的字符使用base64_decode进行解码
            // echo $move_to_file;
            // file_put_contents("/usr/share/nginx/html/upload/min_img2/", $data); 

            //       // $file 是 silk文件路径 删掉前面的加密说明
            // $base64 = str_replace('data:audio/webm;base64,', '', file_get_contents($move_to_file));
            // // 转码
            // $content = base64_decode($base64);
            // // 把转码后的内容存入文件
            // file_put_contents($file, $content);

            //            $outputfile='';
            //             // echo $move_to_file; 
            //             $uploaded_file = $move_to_file;
            //             echo  "$uploaded_file $outputfile";
            //  decode_base64_file($uploaded_file,$outputfile);
 
    } else {  
        echo $uploaded_file; 
 
    }  
  
} else {  
    echo "上传失败".date("Y-m-d H:i:sa");  
}  

 function decode_base64_file( $inputfile, $outputfile ) {
    
   /* read data (binary) */$ifp = fopen( $inputfile, "rb" );
   $rawData = fread( $ifp, filesize( $inputfile ) );
   fclose( $ifp );$data = explode(',', $rawData);
   /* encode & write data (binary) */$ifp = fopen( $outputfile, "wb" );
   fwrite( $ifp, base64_decode($data[1]) );
   fclose( $ifp );
 /* return output filename */
//  return( $outputfile );
   echo $outputfile ; 
 }
 
?>
