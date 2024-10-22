<?php
//Rutas

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

use App\Models\Post;

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

//ASi agregamos registro a bd
Route::get('prueba', function(){
    
    // //Crear registro
    // $post = new Post;

    // $post->title = "TíTuLo DE prueba 4";
    // $post->content = "Contenido de prueba 4";
    // $post->categoria = "Categoria de prueba 4";

    // $post->save();


    //Actualizar un registro
// $post = Post::where("title", "Titulo de prueba 1")
//         ->first();

//         $post->categoria = "Desarrollo web";
//         $post->save();

//     return $post;


            //Listar registros

//Pillas posts en los cuales el id sea >=2
$posts = Post::where("id", ">=", "4")
                ->get();
                return $posts;


//Descendente
// $posts = Post::orderBy("id", "desc")
// ->get();

//Pedir solo x tablas
// $posts = Post::where("id", ">=", "2")
//                 ->select('id', 'title')
//                 ->get();


            //Eliminar
            
// $post = Post::find(1);

// $post->delete();

// return "eliminado";


});