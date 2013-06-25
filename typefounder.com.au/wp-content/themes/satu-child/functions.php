<?php

// A function which registers a navigation menu with WordPress
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

// Tell WordPress when to call this function
add_action( 'init', 'register_my_menu' );