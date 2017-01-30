<?php
/**
 * User model config
 */
return array(
    'title' => 'Ном',
    'single' => 'Ном',
    'model' => 'App\Book',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'url',
        'title',
        'photo' => array(
            'title' => 'Зураг',
            'output' => '<img src="/assets/books/thumbs/(:value)" height="100" />',
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
        'file' => array(
            'title' => 'File',
            'type' => 'file',
            'location' => public_path() . '/assets/books/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 10,
            'display_raw_value' => false,
            'mimes' => 'pdf,doc',
        ),            
        'body' => array(
            'title' => 'Text:',
            'type' => 'wysiwyg',
        ),      
        'photo' => array(
            'title' => 'Image width 600x250',
            'type' => 'image',
            'location' => public_path() . '/assets/books/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(250, 100, 'portrait', public_path() . '/assets/books/thumbs/', 100),
                array(600, 250, 'landscape', public_path() . '/assets/books/', 100),

            )
        ),  
              
    ),

);