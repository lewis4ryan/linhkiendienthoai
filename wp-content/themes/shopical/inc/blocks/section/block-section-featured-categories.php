<?php
/**
 * Block Section Latest Product.
 *
 * @package Shopical
 */
?>

<?php

$title = shopical_get_option('featured_categories_section_title');
$title_note = shopical_get_option('featured_categories_section_title_note');
$product_count = shopical_get_option('show_featured_categories_product_count');
$onsale_product_count = shopical_get_option('show_featured_categories_product_onsale_count');

$categories = array();

for ($i = 1; $i <= 3; $i++) {
    $category_id = shopical_get_option('featured_categories_' . $i);
    if (!empty($category_id)) {
        $categories[] = $category_id;
    }
}

$category_section_class = '';
$number_of_grid = '0';
if (isset($categories)) {
    $number_of_grid = count($categories);
    $category_section_class = 'aft-grid-group-' . $number_of_grid;
}

?>
