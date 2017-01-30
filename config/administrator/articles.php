<?php
/**
 * User model config
 */
return array(
    'title' => 'Мэдээ',
    'single' => 'Мэдээ',
    'model' => 'App\Article',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'url',
        'title',
        'photo' => array(
            'title' => 'Зураг',
            'output' => '<img src="/assets/articles/thumbs/(:value)" height="100" />',
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
        'ontslog' => array(
            'title' => 'Нүүр хуудсанд гарсан',
            'type'  => 'bool',
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
        'video' => array(
            'title' => 'Видео',
            'type' => 'text',
        ),  
        'ontslog' => array(
            'title' => 'Нүүр хуудсанд гаргах',
            'type' => 'bool',
        ),          
        'body' => array(
            'title' => 'Text:',
            'type' => 'wysiwyg',
        ),      
        'photo' => array(
            'title' => 'Image width 2100x700',
            'type' => 'image',
            'location' => public_path() . '/assets/articles/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 2,
            'sizes' => array(
                array(300, 100, 'portrait', public_path() . '/assets/articles/thumbs/', 100),
                array(2100, 700, 'landscape', public_path() . '/assets/articles/', 100),

            )
        ),  
              
    ),

);