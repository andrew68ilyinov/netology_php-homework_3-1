<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 23.07.2018
 * Time: 23:25
 */

# Задание 1.

$otv_1 = <<<DOC
1. Инкапсуляция — это один из принципов ООП, она заключается в способе упорядочить и хорошо структурировать программный код,
записывая логику, относящуюся к одному контексту (сущности), в одном месте, не распределяя её по всему тексту программы.
Что непременно случилось бы при традиционном, процедурном программировании в результате выполнения
многочисленных замечаний по постановке задач. Это позволяет привнести модульность, облегчить и ускорить работу над большими проектами,
уменьшить вероятность ошибок, а также упростить последующее сопровождение и внесение изменений в код.
DOC;


# Задание 2.

$otv_2 = <<<DOC
2. Плюсы объектов:
  а) модульность;
  б) наглядность;
  в) удобство сопровождения;
  г) расширяемость, то есть добавление новых компонентов в существующий код.
  
Недостатки объектов:
  а) более сложная документация из-за того, что любой метод может быть переопределен;
  б) иногда небольшой код может быть распределен по многим маленьким методам, что затрудняет читаемость;
  в) может быть неэффективность из-за излишней универсальности описания классов, что приводит
  к избыточности кода, когда многие введенные методы не задействованы в дальнейшем.
DOC;


# Задание 3.

/*
 *  1) Автомобили
 */

class Cars
{
    const WHEELS = 4;  // 4 колеса
    
    public $brand;    // Марка, напр. 'Toyota'
    public $model;    // Модель (Rav4)
    public $color;    // Цвет
    public $complect; // Комплектация
    public $price;    // Цена
    
    public function __construct($brand = 1, $model = 1, $color = 'Yellow', $complect = 25, $price = 100) // Инициализируем любыми знач. по умолч.
    {
        $this->brand    = $brand;
        $this->model    = $model;
        $this->color    = $color;
        $this->complect = $complect;
        $this->price    = $price;
    }
    
    public function getPrice($discount)
    {
        if ($discount === 0) {
            $finalPrice = $this->price;
        } else {
            $finalPrice = $this->price * $discount / 100;
        }
        echo $finalPrice;
        return $finalPrice;
    }
}

$car1 = new Cars(); // Создаю 2 объекта двумя способами
$car1->brand    = 'Toyota';
$car1->model    = 'Rav4';
$car1->color    = 'White';
$car1->complect = 'U287';
$car1->price    = 1100000;

$car2 = new Cars('BMW', 'X5', 'Black', 'Y8651', 3500000);

echo '<br>' . 'Итоговая цена машины марки Toyota: ' . $car1->getPrice(0);
echo '<br>' . 'Итоговая цена машины марки BMW: ' . $car2->getPrice(5); // Дадим скидку 5 процентов


/*
 *  2) Телевизоры
 */

class TV
{
    public $brand;
    public $model;
    public $diagonal;
    public $resolution;
    public $price;
    
    public function __construct($brand = 1, $model = 1, $diagonal = 40, $resolution = 'HD', $price = 1000)
    {
        $this->brand       = $brand;
        $this->model       = $model;
        $this->diagonal    = $diagonal;
        $this->resolution  = $resolution;
        $this->price       = $price;
    }
    
    public function getTV()
    {
        echo 'Вы получили: ' . $this->brand . ' ' . $this->model . ' ' . $this->diagonal . ' ' . $this->resolution . ' ' . $this->price;
    }
}

$tv1 = new TV('Sony', 'KD-55XF8577', '55', 'Ultra HD', 110000);
$tv2 = new TV('Samsung', 'UE40MU6470U', '40', 'Ultra HD', 40000);


/*
 *  3) Шариковая ручка
 */

class Pens
{
    public $brand;
    public $color;
    public $widthWright; // Толщина линии письма
    public $price;
    
    public function __construct($brand = 1, $color = 'Blue', $widthWright = 0.8, $price = 1)
    {
        $this->brand       = $brand;
        $this->color       = $color;
        $this->widthWright = $widthWright;
        $this->price       = $price;
    }
    
    public function getPen()
    {
        echo 'Вы купили: ' . $this->brand . ' ' . $this->color . ' ' . $this->widthWright . ' ' . $this->price;
    }
}

$pen1 = new Pens('Schneider', $color = 'Black', $widthWright = 0.8, $price = 89);
$pen2 = new Pens('Berlingo', 'Black', 0.7, 32);


/*
 *  4) Утки
 */

class Ducks
{
    const WINGS = 2;  // 2 крыла
    
    public $sex;    // Пол утки
    public $weight; // Вес
    public $age;    // Возраст
    
    public function __construct($sex = 'male', $weight = 1, $age = 1)
    {
        $this->sex    = $sex;
        $this->weight = $weight;
        $this->age    = $age;
    }
    
    public function qryak($num)  // Утка крякает определенное кол-во раз
    {
        for ($i = 1; $i < $num; $i++) {
            echo 'Qryuak!';
        }
    }
}

$duck1 = new Ducks('male', 2, 2);
$duck2 = new Ducks('female', 1, 1);

$duck1->qryak(3); // 1-я утка крякнула 3 раза


/*
 *  5) Товар абстрактный
 */

class Goods
{
    public $aggregateState; // Жидкое или твердое (2 состояния)
    public $weight;
    public $amount;
    public $price;
    
    public function __construct($aggregateState = 'liquid', $weight = 1, $amount = 100, $price = 1000)
    {
        $this->aggregateState = $aggregateState;
        $this->weight         = $weight;
        $this->amount         = $amount;
        $this->price          = $price;
    }
    
    public function changeAggregate($type) // Метод перевода агрегатного состояния в другое
    {
        if ($type === 'liquid') {
            $newAggregateState = 'solid';
        } else {
            $newAggregateState = 'liquid';
        }
        return $newAggregateState;
    }
}

$good1 = new Goods('liquid', 1000, 250, 54000);
$good2 = new Goods('solid', 50000, 340, 641);

$good2->changeAggregate($this->aggregateState); // Меняем агрегатное состояние
