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
    
    
}
