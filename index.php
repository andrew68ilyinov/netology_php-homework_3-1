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

class Cars // Описание класса машин
{
    public $brand;    // Марка, напр. 'Toyota'
    public $model;    // Модель (Rav4)
    public $color;    // Цвет
    public $complect; // Комплектация
    public $price;    // Цена
    public $discount; // Скидка
    
    public function getPrice($price, $discount) {
        $finalPrice = $price * $discount / 100;
        return $finalPrice;
    }
}
