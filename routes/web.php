<?php
//Rutas

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//El '/'
//Llama a la funcion index de la clase HomeController
Route::get('/', [HomeController::class, 'index']); //Si no pones nada, asume que tienes metodo invoke


//Esto es un conjunto de rutas usando el mismo controlador, diferentes
Route::get('/posts', [PostController::class, 'index']);
//El orden importa, recordar
Route::get('/posts/create', [PostController::class, 'create']); 
//Rutas variables, entre llaves lo que se va a capturar
Route::get('/posts/{post}', [PostController::class, 'show']); 





// Route::get('/posts/{post}/{category?}', function ($post, $category = null) { //Valor por defecto
//     if ($category){
//         return "Aqui se mpostrara el post {$post} de la categoria {$category}";
//     }else{
//         return "Aqui se mpostrara el post {$post}";
//     }
    
// });