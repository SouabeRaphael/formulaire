
<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . "\TP-formulaire\composer\index_controler.pgp");

function verify_isset(string $string, string $btn){
    return isset($string) && isset($btn);
}

function verify_empty(string $string){
    return !empty($string);
}

function test(){
    if(verify_isset($_POST['lastName'], $_POST['submit'])){
        if(verify_empty($_POST['lastName'])){
            $prenom = htmlspecialchars($_POST['lastName']);
            if(preg_match('/[A-Z]{1}|[a-z\é\è\ë\ê\-]+/', $prenom)){
                $result = "c'est ok";
            }
            else{
                $result = "Ton nom est chelou, il marche pas";
            }
        }
        else{
            $result = "frerot il faut le rempli le formualire";
        }
    }
    else{
        $result = "valeur pas initialiser";
    }
    return $result;
}
echo test();

?>