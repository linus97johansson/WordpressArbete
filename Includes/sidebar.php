
<?php
if ( function_exists('register_sidebar') ) {

   register_sidebar(array(
   'id'            => 'tider_widget',
   /** Visible name in the Admin Dashboard Widget page */
   'name'          => __( 'Öppettider'),
   /** Visible description in the Admin Dashboard Widget page */
   'description'   => __( 'Öppettider för restaurangen'),

   /** HTML to wrap widget title in  */
   'before_title'  => '<p class="widget-title">',
   'after_title'   => '</p>',
   /** HTML to wrap each widget  */
   'before_widget' => '<section class="widget-container">',
   'after_widget'  => '</section>',
    ));

   register_sidebar(array(
   'id'            => 'lunch_widget',
   /** Visible name in the Admin Dashboard Widget page */
   'name'          => __( 'Lunch'),
   /** Visible description in the Admin Dashboard Widget page */
   'description'   => __( 'Information om lunch'),

   /** HTML to wrap widget title in  */
   'before_title'  => '<p class="widget-title">',
   'after_title'   => '</p>',
   /** HTML to wrap each widget  */
   'before_widget' => '<section class="widget-container red">',
   'after_widget'  => '</section>',
   ));

}
 ?>
