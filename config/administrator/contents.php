<?php
/**
 * User model config
 */
return array(
    'title' => 'Банер',
    'single' => 'Банер',
    'model' => 'App\Content',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'url',
        'title',
        'photo' => array(
            'title' => 'Зураг',
            'output' => '<img src="/assets/banners/thumbs/(:value)" height="100" />',
        ),      
    ),
    /**
     * The filter set
     */
    'form_width' => 500,
    'filters' => array(
        'title' => array(
            'title' => 'Гачиг',
            'type'  => 'text',
        ),   
        'url' => array(
            'title' => 'Цэсний хаяг',
            'type'  => 'text',
        ),                       
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'url' => array(
            'title' => 'Цэсний хаяг',
            'type' => 'text',
        ),  
        'title' => array(
            'title' => 'Гарчиг',
            'type' => 'text',
        ),          
        'body' => array(
            'title' => 'Text:',
            'type' => 'wysiwyg',
        ),      
        'photo' => array(
            'title' => 'Image width 1200x365',
            'type' => 'image',
            'location' => public_path() . '/assets/banners/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(250, 100, 'portrait', public_path() . '/assets/banners/thumbs/', 100),
                array(1200, 365, 'landscape', public_path() . '/assets/banners/', 100),

            )
        ),  
              
    ),

);