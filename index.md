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

First find out what CSS selector is used to control width (hint: it's a [class selector](http://www.cssbasics.com/css-classes/)). You can do this by examining the site's HTML (often referred to as  the DOM) and CSS using the [Google Chrome Developer Tools](https://developers.google.com/chrome-developer-tools/docs/elements). 

Once you've found the CSS selector and property which sets the maximum-width of the page, you can add CSS to your child theme's   `style.css` to override the parent theme style.

Finally, save and upload (or PUT) your CSS using FTP to check it's working as expected in the browser.

## Exercise two

Change the highlight colour used on the site from red to a more appropriate colour of your choice. 

### Method

Like exercise one, this will involve overriding the parent theme's CSS with new CSS in your child theme's `style.css` file, however this time, there will be a few different style declarations required.

First, find the hexadecimal 