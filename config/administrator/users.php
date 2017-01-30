<?php
/**
 * User model config
 */
return array(
    'title' => 'Хэрэглэгч',
    'single' => 'Хэрэглэгч',
    'model' => 'App\User',
    /**
     * The display columns
     */
    'columns' => array(
        'id',
        'phone',
        'email'
    ),
    /**
     * The filter set
     */
    'filters' => array(

    ),
    /**
     * The editable fields
     */
    'edit_fields' => array(
        'phone' => array(
            'title' => 'Phone:',
            'type' => 'text',
        ),
        'email' => array(
            'title' => 'Email:',
            'type' => 'text',
        ),
        'password' => array(
            'title' => 'Password',
            'type' => 'text',
        ),
        'role' => array(
            'type' => 'relationship',
            'title' => 'Хэрэглэгчийн эрх',
            'name_field' => 'name', //what column or accessor on the other table you want to use to represent this object
        ),
    ),
   
);