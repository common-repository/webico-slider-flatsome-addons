<?php

if ( ! isset( $repeater_posts ) ) $repeater_posts = 'posts';
if ( ! isset( $repeater_post_type ) ) $repeater_post_type = 'post';
if ( ! isset( $repeater_post_cat ) ) $repeater_post_cat = 'category';

return array(
    'type' => 'group',
    'heading' => __( 'Posts' ),
    'options' => array(

     'ids' => array(
        'type' => 'select',
        'heading' => 'Custom Posts',
        'param_name' => 'ids',
        'config' => array(
            'multiple' => true,
            'placeholder' => 'Select..',
            'postSelect' => array(
                'post_type' => array($repeater_post_type)
            ),
        )
    ),

    'cat' => array(
        'type' => 'select',
        'heading' => 'Category',
        'param_name' => 'cat',
        'conditions' => 'ids == ""',
        'default' => '',
        'config' => array(
            'multiple' => true,
            'placeholder' => 'Select...',
            'termSelect' => array(
                'post_type' => $repeater_post_cat,
                'taxonomies' => $repeater_post_cat
            ),
        )
    ),

    $repeater_posts => array(
        'type' => 'textfield',
        'heading' => 'Total Posts',
        'conditions' => 'ids == ""',
        'default' => '8',
    ),

    'offset' => array(
        'type' => 'textfield',
        'heading' => 'Offset',
        'conditions' => 'ids == ""',
        'default' => '',
    ),

     'orderby'       => array(
	     'type'       => 'select',
	     'heading'    => 'Order by',
	     'conditions' => 'ids == ""',
	     'default'    => 'date',
	     'options'    => array(
		     'ID'            => 'ID',
		     'title'         => 'Title',
		     'name'          => 'Name',
		     'date'          => 'Published Date',
		     'modified'      => 'Modified Date',
		     'rand'          => 'Random',
		     'comment_count' => 'Comment Count',
		     'menu_order'    => 'Menu Order',
	     ),
     ),

     'order'         => array(
	     'type'       => 'select',
	     'heading'    => 'Order',
	     'conditions' => 'ids == ""',
	     'default'    => 'DESC',
	     'options'    => array(
		     'ASC'  => 'ASC',
		     'DESC' => 'DESC',
	     ),
     ),
  )
);
