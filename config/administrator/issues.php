<?php
/**
 * User model config
 */
return array(
    'title' => 'Зорьж буй ажлууд',
    'single' => 'Зорьж буй ажлууд',
    'model' => 'App\Issue',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'url',
        'title',    
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
              
    ),

);