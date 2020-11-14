<?php
$url =$_GET['q'];
if($url !=""){
$id = end(explode('/', $url));
$flink ="https://gwapi.zee5.com/content/details/$id?translation=en&country=IN&version=2";
$token =file_get_contents("https://useraction.zee5.com/token/platform_tokens.php?platform_name=web_app");
$tokn =json_decode($token);
$tok =$tokn->token;
$vtoken =file_get_contents("http://useraction.zee5.com/tokennd/");
$vtokn =json_decode($vtoken);
$vtok =$vtokn->video_token;

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $flink,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "x-access-token: $tok",
    "Content-Type: application/json"
  ),
));
$response = curl_exec($curl);
curl_close($curl);

$hls =json_decode($response);
$image =$hls->image_url;
$title =$hls->title;
$des =$hls->description;
$hlss =$hls->hls[0];
$sub =$hls->vtt_thumbnail_url[0];
$error =$hls->error_code;
$resStr = str_replace('drm', 'hls', $hlss); 

 $url = "https://zee5vodnd.akamaized.net".$resStr.$vtok;
header("Content-Type: application/json");
$errr= array("error" => "error provide proper input!" );
$err =json_encode($errr);
$apii = array("title" => $title, "description" => $des, "thumbnail" => $image, "video_url" => $url);
$api =json_encode($apii);
if($error ==101){
echo $err;
}
else{
echo $api;
}
}
else{
  echo "error provide proper link";
}
