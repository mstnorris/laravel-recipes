<?php

get('/', ['as' => 'all_recipes_path', 'uses' => 'RecipesController@index']);
get('add', ['as' => 'add_recipe_path', 'uses' => 'RecipesController@create']);

get('ingredients', ['as' => 'all_ingredients_path', 'uses' => 'IngredientsController@index']);

get('categories', ['as' => 'all_categories_path', 'uses' => 'RecipeCategoriesController@index']);

get('ingredients', ['as' => 'all_ingredients_path', 'uses' => 'IngredientsController@index']);
resource('recipes', 'RecipesController', ['names' => ['index' => 'all_recipes_path', 'create' => 'new_recipe_path']]);
resource('categories', 'CategoriesController');
resource('steps', 'StepsController');

get('about', ['as' => 'about_path', 'uses' => 'PagesController@about']);