<?php
namespace app\models;

use Yii;
use yii\base\Model;

class Students_Registration_Form extends Model 
{
	public $name;
	public $surname;
	public $email;
	public $password;

	public function rules()		// данное правило описывает тип ожидаемых данных, а
								// также необходимо их заполнять или нет
    {
        return [				// возвращаем массив с правилами проверки(валидации) формы
            [['name', 'surname', 'email', 'password'], 'required'	// все эти поля должны быть ОБЯЗАТЕЛЬНО
			// это сообщение под полем в случае неккоректного ввода поля name
			//'message' => 'The name you have entered has not been recognised, please try again.' 
			],	
            ['email', 'email']					// поле 'email' должно быть типа email
        ];
    }

}

?>