<?php


use Core\Router;
 
Router::setDefaultNamespace('App\Controller');

//------ HOME -----//

Router::get('/', 'HomeController@home')->setName('home');

//------ ADMIN ------//

//home - all posts
Router::get('/admin/articles', 'AdminController@index')->setName('adminAllPosts');
//add post view
Router::get('/admin/articles-add', 'AdminController@addPost')->setName('adminAddPost');
//save post view
Router::post('/admin/articles-save', 'AdminController@savePost')->setName('adminSavePost');
//update post
Router::all('/admin/articles/edit/{id}', 'AdminController@editPost');
//delete post
Router::get('/admin/articles/delete/{id}', 'AdminController@deletePost')->setName('adminDeletePost');

//all comments page
Router::get('/admin/commentaires/validate', 'AdminController@allComments');
//desaprove comment
Router::get('/admin/commentaires/unvalidate/{id}', 'AdminController@desaproveComment');

//comments waiting list page
Router::get('/admin/commentaires/waiting', 'AdminController@allCommentsWaiting');
//validate comment 
Router::get('/admin/commentaires/validate/{id}', 'AdminController@validateComment');
//desapprove comment
Router::get('/admin/commentaires/desapprove/{id}', 'AdminController@disapproveComment');
//delete comment
// /admin/commentaires/delete/
Router::get('/admin/commentaires/delete/{id}', 'AdminController@deleteComment');

//comments validate list page
Router::get('/admin/commentaires/validated', 'AdminController@allCommentsValidated');
//comments desapprove list page
Router::get('/admin/commentaires/disapproved', 'AdminController@allCommentsDisapproved');

//------ ACTUALITIES ------//
Router::get('/news', 'PostController@index')->setName('news');

//------ POST ------//
Router::get('/news/post/{id}', 'PostController@showPost')->setName('post');
Router::all('/news/post/{id}/ajout-commentaire', 'CommentController@addComment');


