<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Aula::class, static function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->sentence,
        'edificio' => $faker->sentence,
        'direccion' => $faker->sentence,
        'observaciones' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Horario::class, static function (Faker\Generator $faker) {
    return [
        'hora_inicio' => $faker->sentence,
        'hora_fin' => $faker->sentence,
        'fecha' => $faker->date(),
        'observaciones' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Videojuego::class, static function (Faker\Generator $faker) {
    return [
        'nombre' => $faker->sentence,
        'compania' => $faker->sentence,
        'precio' => $faker->randomFloat,
        'descripcion' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Categorium::class, static function (Faker\Generator $faker) {
    return [
        'tipo' => $faker->sentence,
        'numero_jugadores' => $faker->randomNumber(5),
        'competencia' => $faker->sentence,
        'descripcion' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
