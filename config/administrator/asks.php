<?php
/**
 * User model config
 */
return array(
    'title' => 'Асуулт',
    'single' => 'Асуулт',
    'model' => 'App\Ask',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'phone',
        'email',    
        'body',    
    ),
    /**
     * The filter set
     */
    'form_width' => 500,
    'filters' => array(
        'phone' => array(
            'title' => 'Утас',
            'type'  => 'text',
        ),   
        'email' => array(
            'title' => 'И-мэйл',
            'type'  => 'text',
        ),
        'responded' => array(
            'title' => 'Хариу өгсөн эсэх',
            'type'  => 'bool',
        ),                                  
    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'responded' => array(
            'title' => 'Хариу өгсөн эсэх',
            'type'  => 'bool',
        ),          
        'phone' => array(
            'title' => 'утас',
            'type' => 'text',
        ),  
        'email' => array(
            'title' => 'И-мэйл',
            'type' => 'text',
        ),          
        'body' => array(
            'title' => 'Text:',
            'type' => 'wysiwyg',
        ),  
              
    ),

);