<?php

$name = filter_input(INPUT_POST, 'name');

// Validate inputs
if ($name == null) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    $query = 'INSERT INTO categories (categoryName)
                VALUES (:category_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_name', $name);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>