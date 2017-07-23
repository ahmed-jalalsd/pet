<?php

Route::group(array('prefix' => Config::get('app.locale_prefix')), function()
{
  /*Front end*/
  Route::get('/', 'HomeController@index')->name('home');
  Route::get('/products', 'ProductsPageController@index')->name('products');
  Route::get('/products/{slug}', 'ProductsPageController@show')->name('products.single');
  Route::get(Lang::get('routes.our-story'), array('as' => 'our-story', function()
     {
         return View::make('frontend.our-story');
     }));
  Route::get(Lang::get('routes.how-it'), array('as' => 'how-it', function()
     {
         return View::make('frontend.how-it');
     }));
  /*front end search*/
  /*serach by foderata model*/
  Route::get('/products/fantasias/{foderata}', 'AttributesController@ftShowFoderata')->name('products-foderata');
  /*serach by foderata model*/
  Route::get('/products/model/{sfoderata}', 'AttributesController@ftShowSfoderata')->name('products-sfoderata');
  /*serach by pieghe3 model*/
  Route::get('/products/pieghe/{pieghe3}', 'AttributesController@ftShowPieghe3')->name('products-pieghe3');
  /*serach by pieghe5 model*/
  Route::get('/products/pieghe5/{pieghe5}', 'AttributesController@ftShowPieghe5')->name('products-pieghe5');
  /*serach by pieghe7 model*/
  Route::get('/products/pieghe7/{pieghe7}', 'AttributesController@ftShowPieghe7')->name('products-pieghe7');
  /*search by categories*/
  Route::get('/products/categories/{caravetta}', 'FiltersController@ftShowCaravetta')->name('caravetta');
  Route::get('/products/categories-papillon/{papillon}', 'FiltersController@ftShowPapillon')->name('papillon');
  Route::get('/products/categories-customi/{customi}', 'FiltersController@ftShowCustomi')->name('customi');
  Route::get('/products/categories-sciarpe/{sciarpe}', 'FiltersController@ftShowSciarpe')->name('sciarpe');
  Route::get('/products/categories-foulard/{foulard}', 'FiltersController@ftShowFoulard')->name('foulard');
  /*search by material*/
  Route::get('/products/materials-seta/{seta}', 'FiltersController@ftShowSeta')->name('seta');
  Route::get('/products/materials-stampata/{stampata}', 'FiltersController@ftShowStampate')->name('setaStampate');
  Route::get('/products/materials-jacquard/{jacquard}', 'FiltersController@ftShowJacquard')->name('setaJacquard');
  Route::get('/products/materials-cotton/{cotton}', 'FiltersController@ftShowCotton')->name('cotton');
  Route::get('/products/materials-lino/{lino}', 'FiltersController@ftShowLino')->name('lino');
  Route::get('/products/materials-lana/{lana}', 'FiltersController@ftShowLana')->name('lana');
  /*search by size*/
  Route::get('/products/size-5-5/{five}', 'FiltersController@ftShowFive')->name('five');
  Route::get('/products/size-6/{six}', 'FiltersController@ftShowSix')->name('six');
  Route::get('/products/size-6.5/{sixandhalf}', 'FiltersController@ftShowSixand')->name('sixand');
  Route::get('/products/size-7/{seven}', 'FiltersController@ftShowSeven')->name('seven');
  Route::get('/products/size-8/{eight}', 'FiltersController@ftShowEight')->name('eight');
  Route::get('/products/size-8.5/{eightandhalf}', 'FiltersController@ftShowEightand')->name('eightand');
  Route::get('/products/size-9/{nine}', 'FiltersController@ftShowNine')->name('nine');

});
/*-------------------------------------*/
/*backend access*/
Route::group(['prefix' => '/backend'], function() {
  /*The route Dashboard main page */
  Route::get('/' , 'AdminController@index')->name('dashboard');
  /**/

  /*The route for the gallery that generate images to the home page slider*/
  Route::resource('galleries' , 'GalleriesController');
  /**/

  /*The route for the gallery that generate images to the home page slider*/
  Route::resource('products' , 'ProductsController');


  /*The route for categories */
  Route::resource('categories' , 'CategoriesController');

  /*The route for new products */
  Route::resource('newProducts' , 'NewProductsController');

  /*displaying attributes*/
  Route::get('/attributes'       , 'AttributesController@index')->name('attributes.index');
  Route::get('/attributes/create', 'AttributesController@create')->name('attributes.create');
  Route::get('/attributes/color/{color}/edit', 'AttributesController@editColor')->name('attributes.editColor');
  Route::get('/attributes/size/{size}/edit', 'AttributesController@editSize')->name('attributes.editSize');
  Route::get('/attributes/material/{material}/edit', 'AttributesController@editMaterial')->name('attributes.editMaterial');
  Route::get('/attributes/fantasia/{fantasia}/edit', 'AttributesController@editFantasia')->name('attributes.editFantasia');

  /*storing attributes*/
  Route::post('/attributes/color', 'AttributesController@storeColor')->name('attributes.storeColor');
  Route::post('/attributes/size', 'AttributesController@storeSize')->name('attributes.storeSize');
  Route::post('/attributes/material', 'AttributesController@storeMaterial')->name('attributes.storeMaterial');
  Route::post('/attributes/fantasia', 'AttributesController@storeFantasia')->name('attributes.storeFantasia');

  /*updating attribute*/
  Route::PUT('/attributes/color/{color}', 'AttributesController@updateColor')->name('attributes.updateColor');
  Route::PUT('/attributes/size/{size}', 'AttributesController@updateSize')->name('attributes.updateSize');
  Route::PUT('/attributes/material/{material}', 'AttributesController@updateMaterial')->name('attributes.updateMaterial');
  Route::PUT('/attributes/fantasia/{fantasia}', 'AttributesController@updateFantasia')->name('attributes.updateFantasia');

  /*deleting attribute*/
  Route::delete('/attributes/color/{id}', 'AttributesController@destroyColor')->name('attributes.destroyColor');
  Route::delete('/attributes/size/{id}', 'AttributesController@destroySize')->name('attributes.destroySize');
  Route::delete('/attributes/material/{id}', 'AttributesController@destroyMaterial')->name('attributes.destroyMaterial');
  Route::delete('/attributes/fantasia/{id}', 'AttributesController@destroyFantasia')->name('attributes.destroyFantasia');
});
