---
layout: index
title: "Week 7: Child Themes"
---

**Goal:** to modify the [Satu](http://wordpress.org/themes/satu) theme by creating a [child WordPress theme](http://codex.wordpress.org/Child_Themes).

## Tips

## Stay organised
Try to keep your CSS organised and tidy. Use the `style.css` file in the Satu theme as an example. It's very well organised with a [comment] at the top of the file with a table of contents and a comment at the beginning of each section.

## Refer to documentation
Some key resources which will help with today's exercises include:
- [CSS Basics](http://www.cssbasics.com/)
- [The WordPress Codex](http://codex.wordpress.org/)

# Exercise one
Modify the maximum width of the site content to be 1200 pixels wide. 

## Method
To achieve this you will need to override the CSS in the parent theme which sets the width of the content. 

First find out what CSS selector is used to control width (hint: it's a [class selector](http://www.cssbasics.com/css-classes/)). You can do this by examining the site's HTML (often referred to as the DOM) and CSS using the [Google Chrome Developer Tools](https://developers.google.com/chrome-developer-tools/docs/elements). 

Once you've found the CSS selector and property which sets the maximum-width of the page, you can add CSS to your child theme's   `style.css` to override the parent theme style.

Finally, save and upload (or PUT) your CSS using FTP to check it's working as expected in the browser.

# Exercise two
Change the highlight colour used on the site from red to a more appropriate colour of your choice. 

## Method
Like exercise one, this will involve overriding the parent theme's CSS with new CSS in your child theme's `style.css` file, however this time, there will be a few different style declarations required.

First, find the hexadecimal 

# Exercise three
Replace the 'Recent Comments' section in the site footer with a pages menu.

## Method
You shouldn't need to edit any code for this exercise—it can be completed just using standard WordPress functionality.

First you will need to create a menu by going to *Appearance->Menus* in the admin area. Enter a name for your new menu and click the 'Create Menu' button. 

The areas down the left of the screen which were previously disabled should now be available. From here you can add custom links, pages and blog category listings to the menu. Add the About Us page you created last week into the menu by selecting the checkbox nest to the page title and clicking 'Add to Menu' and then 'Save Menu'(if you didn't get to that last week, you'll need to create a new About Us page first by going to *Pages->Add New* in the main menu). Note that the 'Theme Locations' box says:

>The current theme does not natively support menus, but you can use the “Custom Menu” widget to add any menus you create here to the theme’s sidebar.

In exercise five we will add a menu support to our child theme, but for now we will need to use the 'Custom Menu' widget as suggested (the only problem is, it's called the 'Navigation Menu' widget). In the main admin menu choose *Appearance->Widgets*.

The Satu theme has just one [widget area](http://codex.wordpress.org/WordPress_Widgets) in the footer of the site. Somewhat confusingly it's been called 'Subsidiary'. You can drag and drop widgets between each of the areas in the widget managment screen. This will add or remove them from the site. 

# Exercise four
Install the [Contact Form 7 plugin](http://contactform7.com/) and create a 'Contact Us' page.

There are many contact form plugins available for WordPress. Contact Form 7 is one of the most well established options. Feel free to try out other options to get a feel for installing and using plugins.

## Method
The [procedure for installing plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins) is much the same as for themes. 'Conatct Form 7' is available in the [WordPress Plugins Directory](http://wordpress.org/plugins/), so we can search for, and install it from within the admin area. Go to the *Plugins -> Add New* option from the main menu to get started.

Once you have found and installed 'Contact Form 7', you should see an option to activate it. Doing so will give you an additional item 'Contact' in the main menu of the admin area. Click this item and you will see that an example contact form has already been setup called 'Contact form 1'. 

'Contact Form 7' uses the [WordPress Shortcode API](http://codex.wordpress.org/Shortcode_API) to add forms into pages and posts on the site. Many plugins use the this shortcode system to allow embedding of additional functionality or content within the text of a post or page. 

To add a contact form to a page, you will need to copy the appropriate shortcode and paste it into your page content. The shortcode will look something like `[contact-form-7 id="53" title="Contact form 1"]`. Once you've pasted the code into a new 'Contact Us' page you can save and publish the page, then test the contact form. Now that you've created a contact page, you can go back to the menu created in exercise three and add your new page so users can find it easily.

# Exercise five
Override the parent theme's `header.php` template and add a [navigation menu](http://codex.wordpress.org/Navigation_Menus) to the theme, above the breadcrumb menu.

## Method
Remember from last week, that any [template files](http://codex.wordpress.org/Templates) we add to our child theme will override templates of the same name in the parent theme. In order to add new HTML (a menu) to the header of our site, we will need to override the template file which is used to generate the header which is `header.php`. To get started, copy the `header.php` file from the `satu` theme directory into your `satu-child` theme.

## Part one
To test that our new template file is successfully overriding the parent theme, we will make a change to the HTML, upload (PUT) the file to the server then reload our page and check the HTML to verify that the change is there. Find line 36, which should be:

	<body class="<?php hybrid_body_class(); ?>">

Change it to:

	<body class="<?php hybrid_body_class(); ?> custom">

This will add an additional class to the `body` tag. Save the file and upload it to your server. Open the homepage of your site in the browser. Now when you inspect the site's HTML using Google Chrome's Developer Tools, you should see that the `class` attribute on the `body` tag now contains the `custom` class which you've just added. For example:

	<!-- before -->
	<body class="wordpress ltr en_US child-theme y2013 m06 d18 h04 tuesday logged-in admin-bar home blog">

	<!-- after -->
	<body class="wordpress ltr en_US child-theme y2013 m06 d18 h04 tuesday logged-in admin-bar home blog custom">

If you like, have a play around inserting and removing other bits of content into the `header.php` template to get a feel for how this works before moving on to the next part.

## Part two
Now that we have verified that our new `header.php` template file is being used, we need to find where in the file to add our new menu. Remember we want to add the menu just above the current breadcrumbs (the bit that says *You are here: Home*). By examining the HTML in Developer Tools and comparing it to the HTML we can see in the `header.php` file we can discover where the new HTML needs to be inserted.

Examining the `header.php` file in Dreamweaver, we can see that there is a `<header>` tag which is opened on line 36:

	<header id="masthead" class="site-header" role="banner">
	
And closes on line 74:

	</header><!-- #masthead .site-header -->
	
Looking in Developer Tools we can see the closing `</header>` tag is followed by a `<div>` tag with the class attribute `class="after-header"` and then another `<div>` tag with the ID attribute `id="main"`. (There are also some HTML comments used by the author to identify the closing tags in the source code with thier ID and class attributes.)

	<header id="masthead" class="site-header" role="banner">...</header>
	<!-- #masthead .site-header -->
	<div class="after-header">...</div>
	<!-- .after-header -->
	<div id="main" class="site-main">...</div>
	<!-- #main -->

Moving your mouse over the `<div class="after-header">` tag in Developer tools reveals that this element is the breadcrumbs that we want to insert our menu before. Moving back to Dreamweaver we can see from line 74:

	</header><!-- #masthead .site-header -->

	<?php 
		// Action hook for placing content below the theme header
		do_action( 'satu_header_after' ); 
	?>
	
	<div id="main" class="site-main">

From this we can deduce that even though the HTML which creates the breadcrumb element isn't in the `header.php` file, it must be added by the PHP code which is between the closing `</header>` tag and the opening `<div id="main" class="site-main">` tag, so we want to insert our new menu above that code.

	<!-- Insert new menu here -->
	
	<?php 
		// Action hook for placing content below the theme header
		do_action( 'satu_header_after' ); 
	?>
	
To test this and make sure we have the right place, add some HTML where we think the menu should to, upload `header.php` and refresh the site to see where the added HTML appears.

	<p>This will be a new menu!</p>
	<?php 
		// Action hook for placing content below the theme header
		do_action( 'satu_header_after' ); 
	?>
	
## Part three
Now we have located where in the `header.php` file we need to add our new menu, we need to read the WordPress documentation on [Navigation Menus](http://codex.wordpress.org/Navigation_Menus) to find out how to add a menu area to a template file.

The first step is to create a `functions.php` file for our child theme. This is a PHP file which will contain one function which will register our new menu with WordPress and a call to the `add_action` WordPress function (see the [WordPress function reference](http://codex.wordpress.org/Function_Reference/add_action)). The complete file should look like this:

	<?php

	// A function which registers a navigation menu with WordPress
	function register_my_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu' ));
	}

	// Tell WordPress when to call this function
	add_action( 'init', 'register_my_menu' );

Second we need to add the menu we created to our `header.php` template. To do this, replace the test content we added previously (`<p>This will be a new menu!</p>`) with a call to the WordPress `wp_nav_menu` function as described in [the documentation](http://codex.wordpress.org/Navigation_Menus#Display_Menus_on_Theme).

	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
	
Upload the new `functions.php` file and our modified `header.php` template and we're ready to use the new menu area in our theme.

## Part four

We can go back to the WordPress admin area and add the menu we created in step exercise three into our brand new navigation area. Once you've done this and re-loaded the page in a browser, you should see the new menu in the header of the site. Unfortunately, it needs a little styling, so you will need to use your HTML and CSS skills to add some appropriate styles to make it look a bit nicer.

