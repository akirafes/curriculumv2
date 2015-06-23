<?php

function getJsonVilladetail($docDom){
    $units = $docDom->getElementsByTagName('UnitInfo');
    $xml = $docDom->saveXML($units->item(0));
//$xml = utf8_decode($xml);
    /*$xml = "<?xml version='1.0' encoding='UTF-8'?>".$xml;*///$xml = trim(str_replace('?', '"', $xml));
    $xml = str_replace(array("\n", "\r", "\t"), '', $xml);
    $xml = trim(str_replace('"', "'", $xml));
    $xmli = simplexml_load_string($xml);
    $json =  json_encode($xmli,JSON_PRETTY_PRINT);
    $json = trim(str_replace('@', "", $json));
//UnitReviews
//$units = $docDom->getElementsByTagName('UnitReview');
    $units = $docDom->getElementsByTagName('UnitReview');
    $units = $units->item(0)->parentNode;
    $xml = $docDom->saveXML($units);
    $xml = "<?xml version='1.0' encoding='UTF-8'?>".$xml;
    $xmli = simplexml_load_string($xml);
    $json1 =  json_encode($xmli,JSON_PRETTY_PRINT);
    $json1 = trim(str_replace('@', "", $json));
    $json = json_decode($json);
    $json1 = json_decode($json1);
    $jsonFinal['UnitInfo'] = $json;
    $jsonFinal['UnitReview'] = $json1;
    $json = json_encode($jsonFinal);
    return $json;
}
function getMultiSelect($var){
	$values = "";
	//echo $var;
	foreach($var as $i)
	{     
		$values .= $i.",";
	}
	if(strlen($values) > 0){
		$values = substr($values,0,strlen($values)-1);
		return $values;
	} else {
		return false;
	}
}

/**
     * upload_image()
     * 
     * Sube una imagen al servidor  al directorio especificado teniendo el Atributo 'Name' del campo archivo.
     * 
     * @param string $destination_dir Directorio de destino dónde queremos dejar el archivo
     * @param string $name_media_field Atributo 'Name' del campo archivo
     * @return arreglo asociativo con la ruta a donde se guado la imagen junto consu nombre y el status de la transaccion
     */
    function upload_image($destination_dir,$name_media_field){
        $tmp_name = $_FILES[$name_media_field]['tmp_name'];
        //si hemos enviado un directorio que existe realmente y hemos subido el archivo    
        if ( is_dir($destination_dir) and is_uploaded_file($tmp_name)) 
        {        
            $img_file  = $_FILES[$name_media_field]['name'] ;                      
            $img_type  = $_FILES[$name_media_field]['type'];   
            //echo 1; 
            //¿es una imágen realmente?           
            if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type,"jpg")) || strpos($img_type,"png") )){
                //¿Tenemos permisos para subir la imágen?
             //   echo 2;
                if(move_uploaded_file($tmp_name, $destination_dir.'/'.$img_file)){                
                    return array('rutaArchivo'=>$img_file,'resultado'=>true);
                }
            }
        }
        //si llegamos hasta aquí es que algo ha fallado
        return array('rutaArchivo'=>false,'resultado'=>false);
    }//end function


class fecha extends DateTime {
	
	public function getTimestamp(){
		$temp = explode("-", $this->format("Y-m-d"));
		return mktime(0, 0, 0, intval($temp[1]), intval($temp[2]), intval($temp[0]));  
	}
	
	public function dateDiff($date){ 
		$d2 = $date->getTimestamp();
		$d1 = $this->getTimestamp();
	   $dateDiff = $d2 - $d1;  
	   return round($dateDiff/(60*60*24));  
	}
	
	public function formatDate($formato = "sql", $l = "en") {
		switch ($formato) {
			case "sql":
				$regreso = $this->format('Y-m-d');
				break;

			case "letra":
				$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
				$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	 			if($l == "en") {
					$regreso = $this->format('l jS \of F Y');
				} else {
					$regreso = $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;			
				}
				
				break;
				
			default:
				$regreso = $this->format($formato);
				break;								
		}
		return $regreso;
	}	
}

function getUserLanguage() {
           $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
       return $idioma;
  }


function getPost($variable,$tipo = "get",$accionFalso = "null", $Numbd = 0,$sanitize = false){
    $mysqli = new mysqli($_SESSION['bd'][$Numbd]['ip'], $_SESSION['bd'][$Numbd]['usuario'], $_SESSION['bd'][$Numbd]['password'], $_SESSION['bd'][$Numbd]['bd']);
    $resultado = NULL;
    switch($tipo) {
        case "get":
            if(isset($_GET[$variable])) {
                $resultado = $_GET[$variable];
            }
            break;
        case "post":
            if(isset($_POST[$variable])) {
                $resultado = $_POST[$variable];
            }
            break;
        case "request":
            if(isset($_REQUEST[$variable])) {
                $resultado = $_REQUEST[$variable];
            }
            break;
    }
    if($accionFalso != "null" and $resultado == NULL) {
        $resultado = $accionFalso;
    }
    if($sanitize){$resultado = $mysqli->real_escape_string($resultado);}

    return $resultado;

}



function bdQuery($sql,$Numbd = 0,$muestraErrores = true,$regresaArreglo = false,$encodeUTF8 = false){
//	echo $_SESSION['bd'][$Numbd]['ip']. " - ".$_SESSION['bd'][$Numbd]['usuario']." - ". $_SESSION['bd'][$Numbd]['password']." - ".$_SESSION['bd'][$Numbd]['bd'];
    $resultado = false;
    $mysqli = new mysqli($_SESSION['bd'][$Numbd]['ip'], $_SESSION['bd'][$Numbd]['usuario'], $_SESSION['bd'][$Numbd]['password'], $_SESSION['bd'][$Numbd]['bd']);
    if($encodeUTF8) {$mysqli->set_charset('utf8');}

    if (mysqli_connect_errno() and $muestraErrores) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    $res = $mysqli->query($sql) or die($mysqli->error.__LINE__);
    if($regresaArreglo) {
        if($res->num_rows > 0){
            while($renglon = $res->fetch_assoc()){
                $resultado[] = $renglon;
            }
        } else {
            $resultado = false;
        }
    } else {
        $resultado = $res;
    }
    mysqli_close($mysqli);
    return $resultado;
}

function getUrl() {
    $s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
    $protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/") . $s;
    $port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
    return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
}

function strleft($s1, $s2) {
    return substr($s1, 0, strpos($s1, $s2));
}



function dinero ($num, $dec = 2) {
// esta funcion formatea una cadena numerica dinero(2234.44) = $2,234.44 
		$format="%.$dec" . "f";  
        $number=sprintf($format,$num);
        $str=strtok($number,".");
        $dc=strtok(".");      
        $str=commify($str);
        $return="\$$str";

        if ($dec!=0) { 
                $return = "$return" . ".$dc";
        } 
        return($return); 
}

function decimales ($num, $dec = 2) {
// esta funcion trunca decimales decimales(23.667899) = 23.66
		$format="%.$dec" . "f";  
        $number=sprintf($format,$num);
        $str=strtok($number,".");
        $dc=strtok(".");      
        $str=commify($str);
        $return=$str;

        if ($dec!=0) { 
                $return = "$return" . ".$dc";
        } 
        return($return); 
}

function commify ($str) { 
// esta funcion es hija de dinero
        $n = strlen($str); 
        if ($n <= 3) { 
                $return=$str;
        } 
        else { 
                $pre=substr($str,0,$n-3); 
                $post=substr($str,$n-3,3); 
                $pre=commify($pre); 
                $return="$pre,$post"; 
        }
        return($return); 
}

function DOMinnerHTML($element)
{
    $innerHTML = "";
    $children = $element->childNodes;
    foreach ($children as $child)
    {
        $tmp_dom = new DOMDocument();
        $tmp_dom->appendChild($tmp_dom->importNode($child, true));
        $innerHTML.=trim($tmp_dom->saveHTML());
    }
    return $innerHTML;
} 

class cURL {
var $headers;
var $user_agent;
var $compression;
var $cookie_file;
var $proxy;
function cURL($cookies=TRUE,$cookie='cookies.txt',$compression='gzip',$proxy='') {
$this->headers[] = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg';
$this->headers[] = 'Connection: Keep-Alive';
$this->headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
$this->user_agent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)';
$this->compression=$compression;
$this->proxy=$proxy;
$this->cookies=$cookies;
if ($this->cookies == TRUE) $this->cookie($cookie);
}
function cookie($cookie_file) {
if (file_exists($cookie_file)) {
$this->cookie_file=$cookie_file;
} else {
fopen($cookie_file,'w') or $this->error('The cookie file could not be opened. Make sure this directory has the correct permissions');
$this->cookie_file=$cookie_file;
fclose($this->cookie_file);
}
}
function get($url) {
$process = curl_init($url);
curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
curl_setopt($process, CURLOPT_HEADER, 0);
curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEFILE, $this->cookie_file);
if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEJAR, $this->cookie_file);
curl_setopt($process,CURLOPT_ENCODING , $this->compression);
curl_setopt($process, CURLOPT_TIMEOUT, 30);
if ($this->proxy) curl_setopt($process, CURLOPT_PROXY, $this->proxy);
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);
$return = curl_exec($process);
curl_close($process);
return $return;
}
function post($url,$data) {
$process = curl_init($url);
curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
curl_setopt($process, CURLOPT_HEADER, 1);
curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEFILE, $this->cookie_file);
if ($this->cookies == TRUE) curl_setopt($process, CURLOPT_COOKIEJAR, $this->cookie_file);
curl_setopt($process, CURLOPT_ENCODING , $this->compression);
curl_setopt($process, CURLOPT_TIMEOUT, 30);
if ($this->proxy) curl_setopt($process, CURLOPT_PROXY, $this->proxy);
curl_setopt($process, CURLOPT_POSTFIELDS, $data);
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($process, CURLOPT_POST, 1);
$return = curl_exec($process);
curl_close($process);
return $return;
}
function error($error) {
echo "<center><div style='width:500px;border: 3px solid #FFEEFF; padding: 3px; background-color: #FFDDFF;font-family: verdana; font-size: 10px'><b>cURL Error</b><br>$error</div></center>";
die;
}
} 



// Url de ejemplo:http://localhost/My%20Dropbox/www/socios/Sisinf/test%20conexion.php?contrato=C40178&salida=xml&buscar=Preguntar+SISINF  
function curl_data_post($post, $page, $n, $session, $referer)
    {
        $DATA_POST = curl_init();
        curl_setopt($DATA_POST, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($DATA_POST, CURLOPT_URL, $page);
        curl_setopt($DATA_POST, CURLOPT_POST, false);
		curl_setopt($DATA_POST, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:2.0.1) Gecko/20100101 Firefox/4.0.1');
		curl_setopt($DATA_POST, CURLOPT_ENCODING , 'gzip, deflate'); 
        if($n)
        {
         curl_setopt($DATA_POST, CURLOPT_FOLLOWLOCATION, true);
        }
        if($session)
        {
         curl_setopt($DATA_POST, CURLOPT_COOKIEFILE, 'cookiefile.txt');
         curl_setopt($DATA_POST, CURLOPT_COOKIEJAR, 'cookiefile.txt');
        }
       
        if($referer)
        {
         curl_setopt($DATA_POST, CURLOPT_REFERER, $referer);
        }
       
        //curl_setopt($DATA_POST, CURLOPT_POSTFIELDS, $post);
        $data = curl_exec($DATA_POST);
        if($data == false)
        {
         echo'Warning : ' . curl_error($DATA_POST);
         curl_close($DATA_POST);
         return false;
        }
        else
        {
         curl_close($DATA_POST);
         return $data;
        }
    }

?>
