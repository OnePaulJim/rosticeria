<?php
function random_str_generador ($len_of_gen_str){
    $chars="ABCDEFGHIJKLMNOPRSTWXYZ";
    $var_size=strlen($chars);

    $random_str;
//    echo "Random = ";

    for($x=0; $x<$len_of_gen_str; $x++){
        $random_str=$chars[rand(0, $var_size-1)];
         $random_str=$random_str+$random_str;
    }
//    echo "\n";
return $random_str;
}

$fo=random_str_generador(2);

echo $fo;
?>