<?if(isset($_POST["submit_tel"])) 
{
$email = 'cepperaa@gmail.com';
/* Отправляем email */
mail($email, "Заказ обратного звонка на сайте ...", "\n
Посетитель заказал обратный звонок! \n
Телефон : ".$_POST['tel']."
");
echo 'Заявка принята!';
}
?>