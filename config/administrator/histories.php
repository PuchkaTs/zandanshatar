<?php
/**
 * User model config
 */
return array(
    'title' => 'Түүх',
    'single' => 'Түүх',
    'model' => 'App\History',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'position',
        'title',
        'body' 
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
        'position' => array(
            'title' => 'Байрлал',
            'type'  => 'number',
        ),                                 
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'title' => array(
            'title' => 'Гарчиг',
            'type' => 'text',
        ),  
        'position' => array(
            'title' => 'Байрлал',
            'type' => 'number',
        ),              
        'body' => array(
            'title' => 'Text:',
            'type' => 'wysiwyg',
        ),   
              
    ),

);