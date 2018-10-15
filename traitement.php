<?php
$email = $_POST['mail'];
$point = strpos($email,".");
$aroba = strpos($email,"@");

if($point=='' && $aroba=='')
{
echo "Veuillez entrer un mail valide";
}
else
{
echo "Votre email est: '<a href=\"mailto:"."$email"."\"><b>$email</b></a>'";
}
?>
<br/>
<?php
$cp = $_POST['cp'];
if (strlen($cp) != 5) {

    echo "Veuillez entrer un cp de 5 chiffres";

}
else{ echo "ok";}


?>
