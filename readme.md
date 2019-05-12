# Project 4
+ By: Brian Twitchell
+ Production URL: <http://p4.twitchell.me>

## Feature summary
*Outline a summary of features that your application has. The following details are from a hypothetical project called "Movie Tracker". Note that it is similar to Foobooks, yet it has its own unique features. Delete this example and replace with your own feature summary*

+ Visitors can register/log in
+ Users can add/update/delete movies in their collection (title, release date, director, writer, summary, category)
+ There's a file uploader that's used to upload post images for each movie
+ User's can toggle whether movies in their collection are public or private
+ Each user has a public profile page which presents a short bio about their movie tastes, as well as a list of public movies in their collection. 
+ Each user has their own account page where they can edit their bio, email, password
+ Users can clone movies from another user's public collection into their collection
+ The home page features
  + a stream of recently added public movies
  + a list of categories, with a link to each category that shows a page of movies (with links) within that category

  
## Database summary
+ My application has 5 tables in total (`users`, `posts`, `artworks`, `tags`, `emotions`), plus required pivot tables.
+ There's a one-to-many relationship between `artworks` and `posts`
+ There's a many-to-many relationship between `artworks` and `tags`
+ There's a many-to-many relationship between `emotions` and `posts`
+ There's a one-to-many relationship between `users` and `emotions`


## Outside resources
* [Responsive meta tag](https://getbootstrap.com/docs/4.3/getting-started/introduction/)
* [Bootstrap navigation](https://getbootstrap.com/docs/4.3/components/navbar/)
* [Bootstrap alerts](https://getbootstrap.com/docs/4.3/components/alerts/)
* [Fontawesome](https://fontawesome.com/start)
* [Googled for HTML encoded newline](http://code.cside.com/3rdpage/us/newLine.html) Didn't work
* [Stack Overflow - blade and newlines](https://stackoverflow.com/questions/26667116/how-to-keep-the-line-breaks-from-user-input-but-also-sanitize-in-blade) Seems like it should work, but didn't
* Or more advanced version, [Stack Overflow - nl2br Laravel 5](https://stackoverflow.com/questions/28569955/how-do-i-use-nl2br-in-laravel-5-blade)
* So instead went with using [Explode](https://www.php.net/manual/en/function.explode.php)
* [Stack Overflow - Eloquent Model Class](https://stackoverflow.com/questions/28350232/laravel-model-class-not-found)
* [Stack Overflow - Error Field w/o Default Value](https://stackoverflow.com/questions/41750167/error-field-doesnt-have-a-default-value-in-laravel-5-3/41750212)

## Code style divergences


## Notes for instructor
* Using your Nav item listing-from-config-array logic.
* Struggled a lot with the table relationship design and had to switch to working on paper for a bit to help break it into pieces.
