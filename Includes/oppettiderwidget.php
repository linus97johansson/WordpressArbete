
<?php
  function add_widgets() {
   $args = array(
     'id'            => 'tider_widget',
     /** Visible name in the Admin Dashboard Widget page */
     'name'          => __( 'Öppettider'),
     /** Visible description in the Admin Dashboard Widget page */
     'description'   => __( 'Öppettider för restaurangen'),

     /** HTML to wrap widget title in  */
     'before_title'  => '<p class="widget-title">',
     'after_title'   => '</p>',
     /** HTML to wrap each widget  */
     'before_widget' => '<section>',
     'after_widget'  => '</section>',
   );
   register_sidebar( $args );
 }

 add_action( 'widgets_init', 'add_widgets' );
 ?>
