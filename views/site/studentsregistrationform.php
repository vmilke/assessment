<?php
// helpers нужен чтоб вывести кнопку submit
use yii\helpers\Html;
// подключаем встроенный в Yii виджет, отвечающий за все эти формы
use yii\widgets\ActiveForm;

?>
<h2>Student's registration form</h2>
<?php // если какое-то значение ввели в поле name, то печатаем что именно было введено
	if ($name) { ?>
<p> <b>Hello  <?= $name ?> </b> <b> <?= $surname ?></b> ! </p>
<p>You have entered email: <b> <?= $email ?></b> </p>
<?php } ?>
<?php										// здесь выводится тег form; name, action, get, post
	$f = ActiveForm::begin([				// создаем нашу форму из этого виджета форм
		// весь текст ниже - это форматирование полей для ввода информации - просто скопировал с встроенной модели Login
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ] );	
?>
	
	<?= $f->field($studentsregistrationform, 'name')	// здесь выводим поле 'name', метод field встроен в Yii
	?>
	<?= $f->field($studentsregistrationform, 'surname') ?>
	<?= $f->field($studentsregistrationform, 'email') ?>
	<?= $f->field($studentsregistrationform, 'password')->passwordInput() ?>
	<?=	Html::submitButton('Registration');	// вызываем кнопку submit статическим методом. Параметр 'Registration'-это надпись на кнопке
	?>

<?php	// далее ОБЯЗАТЕЛЬНО закрываем этот тег формы
		ActiveForm::end();	
?>