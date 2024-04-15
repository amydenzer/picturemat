<?php
function array_nav_categories($catalog) {

    $output = array();
    $current_cat='';

    foreach ($catalog as $id => $item) {

        if($current_cat != $item["category"]) {
            $current_cat = $item["category"];
            $output[$id] = $current_cat;
        }

    }

    return $output;
}

function get_nav_html($category) {
    //  <a class="dropdown-item" href="#">Dark Green</a>-->
    $query_string = strtolower($category);
    $output = "<a class='dropdown-item' href='catalog.php?cat=$query_string'>$category</a>";
    return $output;

}

function array_category($catalog,$category) {

    $output = array();

    foreach ($catalog as $id => $item) {

        if ($category == null or strtolower($category) == strtolower($item["category"])) {

            $output[$id] = $item["title"];

        }

    }

    asort($output);

    return array_keys($output);

}

function get_item_html($id,$item) {

    $output = "<div class='mats'>"
                . "<a href='details.php?id=$id'><img src='sm_images/" . $item["img"] . "' width='125' height='125' class='img-fluid float-right ml-2 mt-1\'></a>"
                . "<strong>Product: </strong>" . $item["title"] . "<br>"
                . "<strong>Product Number: </strong>" . $item["product_no"] . "<br>"
                . "<strong>Price: </strong>" . $item["price"] . "<br>"
                . "<strong>Description: </strong>" . $item["description"] . "<br>"
                . "<a href='details.php?id=$id' class='btn btn-light my-2 my-sm-0'>more info</a>"
                . "</div>"
                . "<div><hr></div>";

    return $output;

}

?>