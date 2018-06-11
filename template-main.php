<?php
    /*  Template Name: main-template
   * Desription: Det här är menyn
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
<main>
    <h1>The page title</h1>
    <p>

        <?

        foreach ($categories as $dishType){


            print "<div class='".$dishType."'><h2 id='dish'>".$dishType."</h2>";

            if($dishType == "Pizza"){
                print"<ol class='meny-container'>";
            }else{
                print"<ul class='meny-container-ul'>";
            }

            foreach ($prices as $dishPrice){

                $args = array(
                    "post_type" => "dishes",
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

                if ($my_query->have_posts()) {
                    while ($my_query->have_posts()) {

                        $my_query->the_post();
                        print"<li><h3>";
                        the_title();
                        print " ".$dishPrice . "kr";
                        print"</h3><p>";
                        the_content();
                        print"</p>
                        </li>";

                    }

                }
                unset($args);
                wp_reset_query();



            }
            if($dishType == "Pizza"){
                print"</ol>";
            }else{
                print"</ul>";
            }
            print"</div>";

        }
        print "</ol>";

        ?>
    </p>
</main>
<?php
get_footer();
?>
