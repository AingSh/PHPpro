<?php

interface PizzaInterface
{
    /**
     * @return float
     */
    public function getCost(): float;

    /**
     * @return array
     */
    public function getIngredients(): array;

    /**
     * @return string
     */
    public function getTitle(): string;
}


class ChickenGrill implements PizzaInterface
{

    public function getCost(): float
    {
        return $this->cost = 194;
    }

    public function getIngredients(): array
    {
        return array($this->ingredients = [
            'Сирний соус',
            'куряче стегно',
            'смажені печериці',
            'черрі',
            'цибуля фрі',
            'сир Моцарелла',
            'Пармезан'
        ]);
    }

    public function getTitle(): string
    {
        return $this->title = 'Chicken Grill';
    }

}


class Mexican implements PizzaInterface
{
    public function getCost(): float
    {
        return $this->cost = 175;
    }

    public function getIngredients(): array
    {
        return array($this->ingredients = [
            'Вершково-сирний соус',
            'куряче стегно',
            'сир Моцарелла',
            'сальса з ананасу та кукурудзи',
            'Гуакамолє',
            'чіпси Начос',
            'зелений перець чілі',
            'кінза'
        ]);
    }

    public function getTitle(): string
    {
        return $this->title = 'Мексиканская';;
    }


}


class Munich implements PizzaInterface
{

    public function getCost(): float
    {
        return $this->cost = 285;
    }

    public function getIngredients(): array
    {
        return array($this->ingredients = [
            'мюнхенськими і баварськими ковбасками',
            'пепероні',
            'черрі',
            'солоними огірками',
            'цибулею',
            'гострим перцем чилі',
            'сир Моцарелла',
            'емменталь',
            'соус пілатті'
        ]);
    }

    public function getTitle(): string
    {
        return $this->title = 'Мюнхенская';
    }
}

class PizzaCalculator
{
    public $pizza;

    public function __construct(PizzaInterface $pizza)
    {
        $this->pizza = $pizza;

    }

    public function add(PizzaInterface $pizza2, PizzaInterface $pizza3)
    {
        return 'Ваш заказ пицца - ' . $this->pizza->getTitle()
            . ', Ваш заказ пицца - ' . $pizza2->getTitle()
            . ', Ваш заказ пицца - ' . $pizza3->getTitle();
    }

    public function price(PizzaInterface $pizza2, PizzaInterface $pizza3)
    {
        return ($this->pizza->getCost() + $pizza2->getCost() + $pizza3->getCost());
    }

    public function ingredients(PizzaInterface $pizza2, PizzaInterface $pizza3)
    {
        $all_ingredients = array_unique(array_merge($this->pizza->getIngredients(), $pizza2->getIngredients(), $pizza3->getIngredients()), SORT_REGULAR);
        return ($all_ingredients);
    }
}


$chicken_grill = new ChickenGrill();
$mexican = new Mexican();
$munich = new Munich();

$chek = new PizzaCalculator($chicken_grill);

echo $chek->price($mexican,$munich);
echo $chek->add($mexican,$munich);
var_dump($chek->ingredients($mexican,$munich));






