<?php
require 'db.php';
include "classes/dish.php";

try {
    // Your database query and object creation code
    $sql = "SELECT * FROM Dishes WHERE Category = 'Ramen'";
    $stmt = $pdo->query($sql);

    $dishes = [];
    foreach ($stmt as $row) {
        $dish = new Dish(
            (int)$row['DishID'],
            $row['DishName'],
            $row['Price'],
            $row['ImageURL'],
            $row['Category'],
            $row['Ingredients'] ?? ''
        );
        $dishes[] = $dish;
    }

    // Ensure that there are no extra closing braces here
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}


include "view/index_view.php";