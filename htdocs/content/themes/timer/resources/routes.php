<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::get('home', 'PageController@homepage');

Route::get('singular', ['post', 'uses' => 'PageController@singleBlog']);

Route::get('singular', ['services', 'uses' => 'PageController@singleService']);
Route::get('postTypeArchive', ['services', 'uses' => 'PageController@archiveService']);

Route::get('template', ['contact-template', 'uses' => 'PageController@contact']);

Route::get('page', 'PageController@page');