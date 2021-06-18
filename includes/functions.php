<?php
function navMenu() {
    global $connection;
    $query = "SELECT * FROM categories LIMIT 3";
    $select_all_categories_query = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_all_categories_query)) {
       $cat_title = $row['cat_title'];
       $cat_id = $row['cat_id'];
        
        echo "<li><a href='/cms/category/{$cat_id}'>{$cat_title}</a></li>";
    }
}