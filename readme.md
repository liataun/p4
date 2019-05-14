# Project 4
+ By: Brian Twitchell
+ Production URL: <http://p4.twitchell.me>

## Feature summary
* Visitors can register/log in
* Users can view/insert/update/delete posts, all posts are visible to all other logged in users
* Users can select the image from those in the database to associate with each post
* Image with each post includes a link to the image created based on a database field for the available images
* Users can view a list of available "Artwork" images (not available when selecting in the insert or update Post forms)
* Seeded posts and images have randomized User Emotion reactions and Tags, which can be seen in the Posts and Artwork pages
* Each user has their own account page where they can logout
* The home page features
  * a reminder of the date
  * a list of planned site improvements
  * or a link to login for Guests
  
## Database summary
My application has 5 tables in total (`users`, `posts`, `artworks`, `tags`, `emotions`), plus required pivot tables.
* There's a one-to-many relationship between `artwork` and `posts`
* There's a many-to-many relationship between `artworks` and `tags`
* There's a many-to-many relationship between `emotions` and `posts`
* There's a one-to-many relationship between `user` and `emotions`
  * Only the `artworks` and `posts` relationship have dedicated pages
  * Only the `posts` can be edited, including associated `artwork`

## Outside resources
* _Appologies for always having so many links._ I always forget syntax.
* [Responsive meta tag](https://getbootstrap.com/docs/4.3/getting-started/introduction/)
* [Bootstrap navigation](https://getbootstrap.com/docs/4.3/components/navbar/)
* [Bootstrap alerts](https://getbootstrap.com/docs/4.3/components/alerts/)
* [Bootstrap textarea](https://getbootstrap.com/docs/4.0/components/forms/)
* [Bootstrap list groups](https://getbootstrap.com/docs/4.3/components/list-group/)
* [Bootstrap grid layout](https://getbootstrap.com/docs/4.0/layout/grid/)
* [Fontawesome](https://fontawesome.com/start)
* [Googled for HTML encoded newline](http://code.cside.com/3rdpage/us/newLine.html) Didn't work
* [Stack Overflow - blade and newlines](https://stackoverflow.com/questions/26667116/how-to-keep-the-line-breaks-from-user-input-but-also-sanitize-in-blade) Seems like it should work, but didn't
* Or more advanced version, [Stack Overflow - nl2br Laravel 5](https://stackoverflow.com/questions/28569955/how-do-i-use-nl2br-in-laravel-5-blade)
* So instead went with using [Explode](https://www.php.net/manual/en/function.explode.php)
* [Unicode characters for Emoji](https://www.unicode.org/emoji/charts/full-emoji-list.html#2764)
* [w3Schools - Placeholder text](https://www.w3schools.com/tags/att_input_placeholder.asp), was suggested by my p3 reviewer.
* [Stack Overflow - Eloquent Model Class](https://stackoverflow.com/questions/28350232/laravel-model-class-not-found)
* [Stack Overflow - Error Field w/o Default Value](https://stackoverflow.com/questions/41750167/error-field-doesnt-have-a-default-value-in-laravel-5-3/41750212)
* [Stack Overflow - Seeding Many-to-Many](https://stackoverflow.com/questions/45269146/laravel-seeding-many-to-many-relationship)
* [Stack Overflow - User info on home page](https://stackoverflow.com/questions/28650067/laravel-5-display-username-on-homepage)

## Code style divergences
* Some variation in alignment of elements from page to page. I was preparing for doing some positional selection based on user input, but spent the time troubleshooting string manipulation/display issues. Goal would have been to have text and images position based on a settings for user and each post.

## Notes for instructor
* Using your Nav item listing-from-config-array logic.
* Struggled a lot with the table relationship design and had to switch to working on paper for a bit to help break it into pieces. Result has a few relationships that do not do much, but demonstrate potential future iterations.
* I made my own images. (In illustrator, exported to png.)
* Newline characters drove me to some extreme choices with seeding and parsing posts' content field. I tried to clean up as much of it as I can, but I've lost track of all the things I changed to consistently parse captured newlines.
* I find that sometimes the alert variable is being interpreted as _set_, per the master view section, but no content is showing except a small strip of background color. Tried to troubleshoot. No longer happening, but hard to know if it will show up again.
* I am leaving in a few lines commented out to help me remember key things that I had to work through via trial and error or that I often uncomment in local deployment.
* User who tested noted the following, "revealing what emails are assigned to users could be considered a security issue", based on the Laravel message that provided email was not found. I could not find how to customize that behavior.