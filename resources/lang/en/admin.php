<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'aula' => [
        'title' => 'Aulas',

        'actions' => [
            'index' => 'Aulas',
            'create' => 'New Aula',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'edificio' => 'Edificio',
            'direccion' => 'Direccion',
            'observaciones' => 'Observaciones',
            
        ],
    ],

    'horario' => [
        'title' => 'Horarios',

        'actions' => [
            'index' => 'Horarios',
            'create' => 'New Horario',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'hora_inicio' => 'Hora inicio',
            'hora_fin' => 'Hora fin',
            'fecha' => 'Fecha',
            'observaciones' => 'Observaciones',
            
        ],
    ],

    'videojuego' => [
        'title' => 'Videojuegos',

        'actions' => [
            'index' => 'Videojuegos',
            'create' => 'New Videojuego',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'compania' => 'Compania',
            'precio' => 'Precio',
            'descripcion' => 'Descripcion',
            
        ],
    ],

    'categorium' => [
        'title' => 'Categoria',

        'actions' => [
            'index' => 'Categoria',
            'create' => 'New Categorium',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'tipo' => 'Tipo',
            'numero_jugadores' => 'Numero jugadores',
            'competencia' => 'Competencia',
            'descripcion' => 'Descripcion',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];