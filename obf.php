<?php
set_time_limit(0);
error_reporting(0);
ini_set("memory_limit", -1);
class PHPEncryptor {
        var $__IDENT_0__;
        var $__IDENT_1__;
        var $__IDENT_2__;
        var $__IDENT_3__;

        public function __construct() {
                $this->__IDENT_0__ = "da7Q9RnPjm";
                $this->__IDENT_1__ = $this->Random().$this->Random2();
                $this->__IDENT_2__ = $this->Random().$this->Random2().$this->Random();
                $this->__IDENT_3__ = $this->Random().$this->Random2().$this->Random().$this->Random2();
                return $this;
        }

        public function Help(){
                $file = $argv[0];
                $logo = "\nSimple PHP File Encrypter\n";
                $logo .= "Coded by Kakatoji \n";
                $logo .= "Thank You Chan Su \n";
                $logo .= "Usage: php obf.php yourfile.php\n\n";
                $logo .= "NOTICE:\n";
                $logo .= "- Output file will be saved.\n\n";
                echo $logo;
        }

        private function Random(){
                $char = "本程dlxF序是sS小弟处S于DkL兴趣所vCf写b";
                $lenChar = strlen($char);
                $temp = "";
                for ($i = 0; $i < $lenChar; $i++) {
                        $ox32 = mt_rand(0, $lenChar - 1);
                        $temp .= $char[$ox32];
                }
                return $temp;
        }

        private function Random2(){
                $char = "如kI有疑GJ问请联bBnH系";
                $lenChar = strlen($char);
                $temp = "";
                for ($i = 0; $i < $lenChar; $i++) {
                        $ox32 = mt_rand(0, $lenChar - 1);
                        $temp .= $char[$ox32];
                }
                return $temp;
        }

        public function Encrypt($code){
                for($i=0;$i<=$length;$i++) {
                        $fct = $this->Random();$ox31 = $this->Random2();$ox35 = $this->Random();$ox38 = $this->Random2();
                        $var = $this->Random2();$ox32 = $this->Random();$ox37 = $this->Random2();$ox39 = $this->Random();
                        $rmf = $this->Random();

                        $str_rot = str_rot13($code);
                        $gz_text = gzdeflate($str_rot, 9);
                        $str_rot2 = str_rot13($gz_text);
                        $gz_text2 = gzdeflate($str_rot2, 9);
                        $encoded = base64_encode($gz_text2);
                        $encid = md5(rand(1111111111,9999999999));
                        $output_encode = "<?php

// Script By bulletproftlink.shop

$".$this->__IDENT_1__." = '".$encoded."'; ".$this->__IDENT_3__."($".$this->__IDENT_1__."); function ".$this->__IDENT_3__."($".$fct."){ $".$this->__IDENT_2__." = 'bas'.'e64'.'_de'.'cod'.'e'; $".$var." = array('C','P','Q','T','U','M','V','h','E','L','l','0','K','8','C','l','a','U','D','e','4','I','m','1','5','s','b','R','Y','O','u','W','X','Z','+','c','@','d','3','r','F',')','B','y','C','J','q','G','#',$".$this->__IDENT_2__."('Uw=='),$".$this->__IDENT_2__."('bw=='),$".$this->__IDENT_2__."('SA=='),'4','A','i','j','t','v','w','x','z','g','%','(','$','_','+','2','x','(','f','6','j','k','n','p','*','9','N','1','3','3','7',';'); $".$ox31." = $".$var."[29].$".$var."[56].$".$var."[23].$".$var."[80].$".$var."[63].$".$var."[61].$".$var."[33].$".$var."[21].$".$var."[74].$".$var."[40]; $".$ox32." = $".$var."[8].$".$var."[57].$".$var."[53].$".$var."[15].$".$var."[63].$".$var."[49].$".$var."[56].$".$var."[27].$".$var."[65].$".$var."[39]; $".$ox35." = $".$var."[9].$".$var."[53].$".$var."[56].$".$var."[19].$".$var."[69].$".$var."[42].$".$var."[16].$".$var."[25].$".$var."[19].$".$var."[71]; $".$ox37." = $".$var."[15].$".$var."[53].$".$var."[56].$".$var."[8].$".$var."[69].$".$var."[25].$".$var."[3].$".$var."[39].$".$var."[65].$".$var."[39]; $".$ox38." = $".$var."[20].$".$var."[65].$".$var."[18].$".$var."[8].$".$var."[0].$".$var."[29].$".$var."[37].$".$var."[19].$".$var."[63]; $".$ox39." = $".$var."[29].$".$var."[56].$".$var."[23].$".$var."[80].$".$var."[63].$".$var."[47].$".$var."[60].$".$var."[54].$".$var."[74].$".$var."[40]; $".$rmf." = $".$ox32.".$".$ox31.".$".$ox37.".$".$ox39.".$".$ox35.".$".$ox38.".'$$fct'.$".$var."[41].$".$var."[41].$".$var."[41].$".$var."[41].$".$var."[41].$".$var."[41].$".$var."[83];return EvAl($".$rmf."); } ?>";
                }

                return $output_encode;
        }
}
$Crypt = new PHPEncryptor();
if(!$argv[1]){
        $Crypt->Help();
        exit;
}
$input = $argv[1];
$output ="xcode-".date('H-i-s').".php";
if(!file_exists($input)){
        $Crypt->Help();
        echo "\nError: Input file doesn't exist\n";
        exit;
}
$file = fread(fopen($input,'r'),filesize($input));
$file2 = $file;
$sizeFile = round(filesize($input)/1024,2);
$length = strlen($file2);
echo "[+] Input File Length : ".$length."\n";
echo "[+] Input File Size : ".$sizeFile." KB\n";
$hasil = $Crypt->Encrypt("?>".$file2);
if($hasil) {
        echo "[+] File Encrypted Successfully\n";
} else {
        echo "[-] File Failed to Encrypt\n";
}
$tulis = fopen($output,'w+');
$save = fwrite($tulis,$hasil);
if($save) {
        echo "[+] Encrypted File Successfully Saved : ".$output."\n";
} else {
        echo "[-] Encrypted File Failed to Save\n";
}
fclose($tulis);
$sizeFile2 = round(filesize($output)/1024,2);
echo "[+] Encrypted File Size : ".$sizeFile2." KB\n";

?>
