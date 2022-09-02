<?php

$routes = [
    // Exemple : "/users" => "UserController@displayUsers",
    "/boutique" => "ShopController@display",
    "/categorie/{id}" => "ShopController@displayCategory",
    "/inscription" => "UserController@signUp",
    "/inscription/post" => "UserController@signUpPost",
    "/connexion" => "UserController@login",
    "/connexion/post" => "UserController@loginPost",
    "/deconnexion"  => "UserController@logout",
];