<form action="" method="post">
    <input type="text" name="link" placeholder="https://www.instagram.com/p/BieiKs3j6yj/">
    <input type="submit" name="submit" value="DOWNLOAD">
</form>
<?php
 
/*

********************************************************
****|         SIMPLE Downloader Foto by Zharr         |****
********************************************************

*/
 


 if(isset($_POST['submit'])){
function curl($url, $post = null) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    if ($post != null) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $exec = curl_exec($ch);
    curl_close($ch);
    return $exec;
}
$url  = $_POST['link'];
$curl   = curl("https://api.instagram.com/oembed/?url=" . $url);
$decode = json_decode($curl);
//echo $decode->thumbnail_url;
var_dump($curl);
echo "<img src=".$decode->thumbnail_url." width='600px' height='400px'>";
}

?>
