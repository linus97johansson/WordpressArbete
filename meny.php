<?php
    /*  Template Name: Meny
   * Desription: Det här är menyn
   */
/*
 * $args = array(
    "post_type" => "dishes",
    "posts_per_page" => -1,
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'Price',
            'field' => 'name',
            'terms'    => '85',
        ),
            array(
                'taxonomy' => 'Category',
                'field' => 'name',
                'terms'    => 'Pizza',
            ),
    ),



);
$my_query = new WP_Query( $args);
 */
get_header();

$terms_categories = get_terms( array(
        'taxonomy' => 'Category',
        'hide_empty' => true,
    )
);
$terms_prices = get_terms( array(
        'taxonomy' => 'Price',
        'hide_empty' => true,
    )
);
$categories= array();
foreach ($terms_categories as $category){
    //var_dump($category->name);
        if($category->name != "Uncategorized") {
            array_push($categories, $category->name);
        }
    };

$prices = array();
foreach ($terms_prices as $price){
    //var_dump($price->name);
    array_push($prices, $price->name);
};

/*
foreach ($categories as $dishType){

    print "<h2 id='dish'>".$dishType."</h2>";

    foreach ($prices as $dishPrice){

        $args = array(
            "post_type" => "dish",
            "posts_per_page" => -1,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'Price',
                    'field' => 'name',
                    'terms'    => $dishPrice,
                ),
                array(
                    'taxonomy' => 'Category',
                    'field' => 'name',
                    'terms'    => $dishType,
                ),
            ),



        );
        $my_query = new WP_Query( $args);

        if ($my_query != null) {
            print"<ol style='margin-left:50px;'>";
            while ($my_query->have_posts()) {

                $my_query->the_post();
                print"<li>";
                the_title();
                print"</li><p>";
                the_content();
                print"</p>";
            }

            print"</ol>";
        }else {
            echo"no found- meny";

        }

        unset($args);
        wp_reset_postdata();


    }

}
*/




?>
<main style="background-color:green;">
    <h1>The page title</h1>
    <p>

        <?

        foreach ($categories as $dishType){

            print "<h2 id='dish'>".$dishType."</h2>";

            foreach ($prices as $dishPrice){

                $args = array(
                    "post_type" => "dish",
                    "posts_per_page" => -1,
                    'tax_query' => array(
                        'relation' => 'AND',
                        array(
                            'taxonomy' => 'Price',
                            'field' => 'name',
                            'terms'    => $dishPrice,
                        ),
                        array(
                            'taxonomy' => 'Category',
                            'field' => 'name',
                            'terms'    => $dishType,
                        ),
                    ),


                );

                $my_query = new WP_Query( $args);

                if ($my_query->have_post()) {
                    print"<ol style='margin-left:50px;'>";
                    while ($my_query->have_posts()) {

                        $my_query->the_post();
                        print"<li>";
                        the_title();
                        print"</li><p>";
                        the_content();
                        print"</p>";
                    }

                    print"</ol>";
                }
                unset($args);
                wp_reset_postdata();


            }

        }

        ?>
    </p>
</main>
<?php
get_footer();
?>
