<?php 
setlocale(LC_ALL, 'ru_RU.utf8');
header('Content-type: text/html; charset=utf-8');

function pa($a,$br=0,$t='pre'){echo'<'.$t.'>'; print_r($a=(!empty($a)?$a:[])); echo'</'.$t.'>';while($br){echo'<br>';$br--;}}
function is_date($value){if (!$value) {return false;} try {$d = (new \DateTime($value)); return $d;} catch (\Exception $e){ return false;}}
function po($t){echo mb_ord($t,"UTF-8")."<br>";}

class Resume {
    public function __construct(
        array $name = [],
        string $birth = '',
        string $age = '',
        array $skills = [],
        array $educs = [],
        array $lates = [],
        array $jobs = [],
        array $hobby = []
    ){
    $lates[0] = $this->the([1053,1077,32,1087,1086,1074,1090,1086,1088,1103,1102,32,1082,1086,1076,44,32,1072,32,1087,1077,1088,1077,1080,1089,1087,1086,1083,1100,1079,1091,1102,32,1087,1086,32,1084,1077,1088,1077,32,1085,1077,1086,1073,1093,1086,1076,1080,1084,1086,1089,1090,1080,46,32,1040,1082,1090,1080,1074,1085,1086,32,1080,1089,1087,1086,1083,1100,1079,1091,1102,32,1073,1080,1073,1083,1080,1086,1090,1077,1082,1080,32,113,116,44,32,99,111,109,112,111,115,101,114,44,32,110,112,109,46]);
    $lates[1] = $this->the([1055,1086,1089,1083,1077,1076,1086,1074,1072,1090,1077,1083,1100,1085,1086,1089,1090,1100,32,1074,32,1088,1072,1079,1088,1072,1073,1086,1090,1082,1077,32,45,32,1082,1088,1077,1076,1086,44,32,1082,1086,1090,1086,1088,1086,1077,32,1076,1072,1105,1090,32,1087,1088,1086,1095,1085,1099,1077,32,1089,1074,1103,1079,1080,32,1074,32,1082,1086,1084,1072,1085,1076,1077,46,32,1058,1077,1093,1085,1080,1095,1077,1089,1082,1086,1077,32,1079,1072,1076,1072,1085,1080,1077,32,45,32,1072,1083,1075,1086,1088,1080,1090,1084,32,1088,1072,1079,1088,1072,1073,1086,1090,1082,1080,46]);  
    $lates[2] = $this->the([1041,1099,1090,1100,32,1091,1084,1085,1099,1084,32,45,32,1085,1077,32,1079,1085,1072,1095,1080,1090,32,1079,1072,1087,1091,1089,1090,1080,1090,1100,32,1084,1072,1096,1080,1085,1091,32,1074,32,1082,1086,1089,1084,1086,1089,32,1085,1072,32,1088,1077,1072,1082,1090,1080,1074,1085,1086,1084,32,1090,1086,1087,1083,1080,1074,1077,44,32,1085,1077,32,1087,1077,1088,1077,1080,1079,1086,1073,1088,1077,1090,1072,1102,32,1074,1077,1083,1086,1089,1080,1087,1077,1076,32,45,32,1091,1087,1088,1086,1097,1072,1102,32,1082,1086,1076,32,40,1080,1089,1087,1086,1083,1100,1079,1091,1102,32,1090,1088,1080,1090,1080,1081,41,46]);  
    $lates[3] = $this->the([1042,32,1076,1077,1090,1089,1090,1074,1077,32,1084,1077,1085,1103,32,1087,1091,1075,1072,1083,1080,32,1085,1077,32,34,1073,1072,1073,1072,1081,1082,1086,1081,34,44,32,1072,32,34,1082,1086,1076,1077,1088,1086,1084,34,46]);  
    $lates[4] = $this->the([1056,1072,1079,1076,1077,1083,1103,1102,32,1080,32,1085,1072,1089,1083,1077,1076,1091,1102,32,1082,1086,1076,46,32,1051,1086,1075,1080,1095,1077,1089,1082,1080,32,1087,1086,1085,1103,1090,1085,1099,1081,32,1073,1083,1086,1082,32,45,32,1092,1091,1085,1076,1072,1084,1077,1085,1090,32,1080,1085,1090,1091,1080,1090,1080,1074,1085,1086,1089,1090,1080,32,1087,1088,1086,1075,1088,1072,1084,1084,1099,46]);  
    $lates[5] = $this->the([1055,1088,1086,1075,1088,1072,1084,1084,1085,1099,1077,32,1086,1073,1098,1077,1082,1090,1099,32,1076,1086,1083,1078,1085,1099,32,1073,1099,1090,1100,32,1086,1090,1082,1088,1099,1090,1099,32,1076,1083,1103,32,1088,1072,1089,1096,1080,1088,1077,1085,1080,1103,44,32,1085,1086,32,1079,1072,1082,1088,1099,1090,1099,32,1076,1083,1103,32,1084,1086,1076,1080,1092,1080,1082,1072,1094,1080,1080,46]);  
    $lates[6] = $this->the([1042,32,1087,1088,1086,1094,1077,1076,1091,1088,1085,1086,1084,32,1089,1090,1080,1083,1077,32,1080,1089,1087,1086,1083,1100,1079,1091,1102,32,1083,1103,1084,1073,1076,1072,32,1092,1091,1085,1082,1094,1080,1080,32,1080,32,1079,1072,1084,1099,1082,1072,1085,1080,1103,46,32,1042,32,1086,1073,1098,1077,1082,1090,1085,1086,1084,32,1089,1090,1080,1083,1077,32,1080,1089,1087,1086,1083,1100,1079,1091,1102,32,1080,1085,1090,1077,1088,1092,1077,1081,1089,1099,32,1080,32,1072,1073,1089,1090,1088,1072,1082,1090,1085,1099,1077,32,1082,1083,1072,1089,108,1099,46]);  
    $lates[7] = $this->the([1050,1086,1084,1087,1086,1085,1077,1085,1090,1099,32,1055,1054,32,1076,1086,1083,1078,1085,1099,32,1080,1084,1077,1090,1100,32,1085,1080,1079,1082,1091,1102,32,1089,1074,1103,1079,1085,1086,1089,1090,1100,32,1080,32,1074,1099,1089,1086,1082,1091,1102,32,1089,1086,1075,1083,1072,1089,1086,1074,1072,1085,1085,1086,1089,1090,1100,46]);
    $lates[8] = $this->the([1052,1085,1086,1075,1080,1077,32,1089,1095,1080,1090,1072,1102,1090,32,1087,1088,1077,1078,1076,1077,1074,1088,1077,1084,1077,1085,1085,1091,1102,32,1086,1087,1090,1080,1084,1080,1079,1072,1094,1080,1102,32,1082,1086,1088,1085,1077,1084,32,1079,1086,1083,46,32,1056,1080,1090,1086,1088,1080,1082,1072,63,32,1042,1086,1079,1084,1086,1078,1085,1086,46,32,67,111,100,101,32,114,101,118,105,101,119,32,1087,1086,1082,1072,1078,1077,1090,46]);
    $lates[9] = $this->the([1055,1088,1086,1075,1084,1072,1090,1080,1095,1077,1085,32,1074,32,1082,1086,1076,1077,44,32,1087,1088,1080,1084,1077,1085,1103,1102,32,110,97,109,101,115,112,97,99,101,32,1082,1072,1082,32,1084,1077,1093,1072,1085,1080,1079,1084,46]);
    $lates[10] = $this->the([1050,1086,1075,1076,1072,32,1082,1086,1076,1072,32,1085,1077,1090,44,32,1072,32,1077,1075,1086,32,1092,1091,1085,1082,1094,1080,1103,32,1074,1099,1087,1086,1083,1085,1103,101,1090,1089,1103,44,32,1083,1091,1095,1096,1077,32,1095,1077,1084,32,1080,1085,1086,1077,46]);
    
        $this->name = $name = !empty($this->name) ? $this->name  : [
                    'n'=>$this->the([1040,1083,1077,1082,1089,1077,1081]),
                    'p'=>$this->the([1052,1080,1093,1072,1081,1083,1086,1074,1080,1095]),
                    's'=>$this->the([1052,1086,1088,1075,1091,1085])];
        $this->name['f'] = implode('&nbsp;',$this->name);
        $this->birth = (!empty($this->birth) && $birth  = is_date($this->birth)) ? $birth : (new \DateTime())->setTimestamp(672063300);
        $this->age = floor(((new \DateTime('now'))->getTimestamp() - $this->birth->getTimestamp()) / 31536000);
        $this->skills = !empty($this->skills) ? $this->skills : [
        'C#' => 3,'JavaScript' => 8,'WBAScript' => 5,'Java' => 4,'PHP' => 10,'Kotlin' => 3,'Phyton' => 5,        
        'HTML' => 10,'CSS' => 10,'Json' => 10,'NoSQL' => 10,'GraphQL' => 10,'SQL' => 10,       
        'BATH' => 3,'SHELL' => 3,       
        'npm' => 10,'git' => 10,'composer' => 10,'docker' => 8,'figma' => 7,
        ];
        $this->educs = !empty($this->educs) ? $this->educs : ['hightech' => ['TRIZ' => 2, 'INTUIT' => 1],'university' => ['SFEDU' => 5, 'DSTU' => 3]];
        $this->lates = !empty($this->lates) ? $this->lates : [
        'DRY' => ['Don’t Repeat Yourself' => $lates[0]],
        'BDUF' => ['Big Design Up Front' => $lates[1]],
        'KISS' => ['Keep It Simple, Stupid' => $lates[2]],
        'YAGNI' => ['You Aren’t Gonna Need It' => $lates[3]],
        'SOLID' => ['Single-responsibility principle' => $lates[4]],
        'OCP' => ['Open–closed principle' => $lates[5]],
        'ISP' => ['Interface segregation principle' => $lates[6]],
        'DIP' => ['Dependency inversion principle' => $lates[7]],        
        'APO' => ['Avoid Premature Optimization' => $lates[8]],       
        'Ockham`s Razor' => ['Entities should not be multiplied beyond necessity' => $lates[9]],
        'TRIZ' => ['The methodology of the ideal solution' => $lates[10]],
        ];
        $this->jobs = !empty($this->jobs) ? $this->jobs : [
            'https://striga.me' => ['WordPress' => 3],
            'https://skidkimira.ru' => ['CodeIgniter' => 0],
            'https://triz-ri.com' => ['SiteOS' => 12],
            'https://apply-marine.ru/' => ['ModX' => 1],
            'https://linguachain.ru/' => ['WordPress' => 1],
            'https://wozy.ru/' => ['WordPress' => 4],
            'https://art-green.ru/' => ['Bitrix' => 12],
            'http://194.67.90.250/' => ['PHP 8.1' => 4],
            'https://striga.me' => ['WordPress' => 1],
            'https://striga.me' => ['WordPress' => 1],
            'https://striga.me' => ['WordPress' => 1],
            'https://striga.me' => ['WordPress' => 1], '...'=>'...'];
    }
    
public function the(array $in=[]):?string{if(empty($in) or !is_array($in)){return null;}$ret='';for($i=0,$c=count($in);$i<$c;$i++){$ret .= mb_chr($in[$i], "UTF-8");}return $ret;}   
    
}

pa(new Resume);
