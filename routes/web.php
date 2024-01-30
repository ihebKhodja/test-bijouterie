<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProduitsController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\MatieresController;
use App\Http\Controllers\Admin\CommandesController;
use App\Http\Controllers\Ecommerce\EcommerceController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
    Route::get('/',[EcommerceController::class, 'index'])->name('ecommerce.index');
    Route::post('/commandes', [CommandesController::class, 'store'])->name('admin.commandes.store');


    Route::group(['middleware' => 'auth'], function () {

    // Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        // Route::group(['middleware'=>'is_admin', 'prefix'=>'admin'], function (){
        //     )};
        Route::group(['prefix'=>'admin'], function (){
            
            Route::get('/api/produits', [ProduitsController::class, 'getProduits'])->name('admin.produits.getproduits');
            Route::get('/api/commandes', [CommandesController::class, 'getCommandes'])->name('admin.commandes.getcommandes');


            Route::prefix('produits')->group(function () { 
                Route::post('/import', [ProduitsController::class, 'importexcel'])->name('admin.produits.importexcel');

                Route::get('/', [ProduitsController::class, 'index'])->name('admin.produits');
                Route::post('/', [ProduitsController::class, 'store'])->name('admin.produits.store');
                Route::get('/add', [ProduitsController::class, 'create'])->name('admin.produits.create');
                Route::post('/update/{id}', [ProduitsController::class, 'update'])->name('admin.produits.update');
                Route::post('/archive/{id}', [ProduitsController::class, 'archive'])->name('admin.produits.archive');
                Route::get('/archive', [ProduitsController::class, 'archiveall'])->name('admin.produits.archiveall');
            });

            Route::prefix('commandes')->group(function () { 
                Route::get('/', [CommandesController::class, 'index'])->name('admin.commandes.index');
                // Route::post('/', [CommandesController::class, 'store'])->name('admin.commandes.store');
                Route::post('/update/{id}', [CommandesController::class, 'update'])->name('admin.commandes.update');
            });

            Route::prefix('categories')->group(function () { 
                Route::get('/', [CategoriesController::class, 'create'])->name('admin.categories.create');
                Route::post('/', [CategoriesController::class, 'store'])->name('admin.categories.store');
            });

            Route::prefix('matieres')->group(function () { 
                Route::get('/', [MatieresController::class, 'create'])->name('admin.matieres.create');
                Route::post('/materes', [MatieresController::class, 'store'])->name('admin.matieres.store');
            });
            
       
        
        
    });
    

    Route::group(['prefix'=>'user'],function(){


    });
   
});





