<?php
error_reporting(0);

ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);

include ('settings.php');
include('data6rst.php');

session_start();
$userid_sess =  htmlentities(htmlentities($_SESSION['uid'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['fullname'], ENT_QUOTES, "UTF-8"));
$token_sess =   htmlentities(htmlentities($_SESSION['token'], ENT_QUOTES, "UTF-8"));




if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

$documents_text = strip_tags($_POST['documents_text']);
$title = strip_tags($_POST['title']);
$category = strip_tags($_POST['category']);


$mt_id=rand(0000,9999);
$dt2=date("Y-m-d H:i:s");
$ipaddress = strip_tags($_SERVER['REMOTE_ADDR']);
$timer = time();





if ($documents_text == ''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Text Documents is empty</div>";
exit();
}


if ($title == ''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>File Title is empty</div>";
exit();
}





$statement = $db->prepare('INSERT INTO documents

(document_name,category, document_title,document_extraction,document_type,timing)
 
                          values
(:document_name,:category, :document_title,:document_extraction,:document_type,:timing)');

$statement->execute(array( 
':document_name' => 'sample.pdf',
':category' => $category,
':document_title' => $title,		
':document_extraction' =>$documents_text,
':document_type' =>'Openshift',
':timing' => $timer
));

$document_id = $db->lastInsertId();
                                   

if($statement){
echo  "<script>alert('File Uploads Successful...');</script>";
echo "<br><div style='background:green;padding:8px;color:white;border:none;'> File Uploads Successful...</div><br>";
echo "<script>location.reload();</script>";



}else{
echo "<div style='background:red;padding:8px;color:white;border:none;'>File Uploads Failed...</div>";

}


}
else{
echo "<div id='' style='background:red;color:white;padding:10px;border:none;'>
Direct Page Access not Allowed<br></div>";
}


?>



