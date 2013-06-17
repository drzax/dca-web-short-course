---
layout: index
title: Home
---

# Week 7 - Child Themes

A series of exercises to create a [child WordPress theme](http://codex.wordpress.org/Child_Themes) of [Satu](http://wordpress.org/themes/satu).

### Tips

#### Stay organised
Try to keep your CSS organised and tidy. Use the `style.css` file in the Satu theme as an example. It's very well organised with a [comment] at the top of the file with a table of contents and a comment at the beginning of each section.

#### Refer to documentation
Some key resources which will help with today's exercises include:
* [CSS Basics](http://www.cssbasics.com/)
* [The WordPress Codex](http://codex.wordpress.org/)

## Exercise one

Modify the maximum width of the site content to be 1200 pixels wide. 

### Method

To achieve this you will need to override the CSS in the parent theme which sets the width of the content. 

First find out what CSS selector is used to control width (hint: it's a [class selector](http://www.cssbasics.com/css-classes/)). You can do this by examining the site's HTML (often referred to as the DOM) and CSS using the [Google Chrome Developer Tools](https://developers.google.com/chrome-developer-tools/docs/elements). 

Once you've found the CSS selector and property which sets the maximum-width of the page, you can add CSS to your child theme's   `style.css` to override the parent theme style.

Finally, save and upload (or PUT) your CSS using FTP to check it's working as expected in the browser.

## Exercise two

Change the highlight colour used on the site from red to a more appropriate colour of your choice. 

### Method

Like exercise one, this will involve overriding the parent theme's CSS with new CSS in your child theme's `style.css` file, however this time, there will be a few different style declarations required.

First, find the hexadecimal 

## Exercise three
Replace the 'Recent Comments' section in the site footer with a pages menu.

### Method
You shouldn't need to edit any code for this exercise—it can be completed just using standard WordPress functionality.

1. Create a Menu
2. Add a Navigation Menu widget to the 'Subsidiary' widget area

## Exercise four
Install the [Contact Form 7 plugin](http://contactform7.com/) and create a 'Contact Us' page.

There are many contact form plugins available for WordPress. Contact Form 7 is one of the oldest and most feature rich options.

### Method
The [procedure for installing plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins) is much the same as for themes. Conatct Form 7 is available in the [WordPress Plugins Directory](http://wordpress.org/plugins/), so we can search for, and install it from within the admin area. Go to the *Plugins -> Add New* option from the main menu to get started.

Once you have found and installed Contact Form 7, you should see an option to activate it. Doing so will give you an additional item 'Contact' in the main menu of the admin area. Click this item and you will see that an example contact form has already been setup called 'Contact form 1'. 

Contact Form 7 uses the [WordPress Shortcode API](http://codex.wordpress.org/Shortcode_API) to add forms into pages and posts on the site. To add a contact form to a page, you will need to copy the appropriate shortcode and paste it into your page content. The shortcode will look something like `[contact-form-7 id="53" title="Contact form 1"]`.

Once you've pasted the code into a new 'Contact Us' page you can save and publish the page, then test the contact form.

## Exercise five
Override the parent theme's `header.php` template and 
add a [navigation menu](http://codex.wordpress.org/Navigation_Menus) to the theme, above the breadcrumb menu.

