<?php
require 'db.php';
session_start();

include "classes/dish.php";

try {
    // Haal alle gerechten op
    $sql = "SELECT * FROM Dishes";
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

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

include "view/menu_view.php";
