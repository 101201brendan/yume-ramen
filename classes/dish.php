<?php

class Dish  {

    public int $dishId;
    public string $dishName;
    public float $price;
    public string $imageUrl;
    public string $category;
    public string $ingredients;

    /**
     * @param int $dishId
     * @param string $dishName
     * @param string $price
     * @param string $imageUrl
     * @param string $category
     * @param string $ingredients
     */
    public function __construct(int $dishId, string $dishName, float $price, string $imageUrl, string $category, string $ingredients)
    {
        $this->dishId = $dishId;
        $this->dishName = $dishName;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->category = $category;
        $this->ingredients = $ingredients;
    }

}

