

#The Student Rooms Mr Men Book shop test

@author John Jeeves
@email john@kjwebsites.co.uk
@date 24/09/2018

#Outline

##Backend

This project is heavily based on the Laravel Skeleton, and just includes a couple of additions to make the product listings as light as possible and also therefore as extendable in future as possible. to reach this aim I started by creating a very simple database storage outline which is based on there being a base "Item" collection that gets extended by "types", "content" and "tags" to describe each different type of object.

Therefore a short outline is:

Item
    - id
    - slug
    - title

To create a page object the system simply requires that the Item is joined to the type table to relate the "page" type, therefore:

Page =
    Item -> item_type -> type

Books are exactly the same but joined to the book type

Content objects are also joined to the type table to outline which type of content each object each and then these are joined also to the item table to link these in.

I have created the migrations to create these database tables and included the models with the App, I believe that Controllers should be light and rely on services for most functionality therefore there are some basic services included that return collections and single Items, Pages and Books to easily use.

Laravels built in user functionality is tested and works, so I've simply used that.

##Front end

Laravel ships with bootstrap so i decided to use this for speed of development whereas normally I would not use a framework, with modern CSS grid and flexbox available there is little reason to do so. But I have applied these techniques to the document list to give it a bit of better layout spacing.

###Omissions

I ran out of time, so the test suites have been started but not worked on, and the layout needs more work. The buy now button on each book page is a form with csrf but not built using laravel collective form builder, that would be preferable. Also the session for showing which books have been viewed if you press the back browser button needs work to ensure fresh pages are presented.

###Running

Simply run >php artisan serve from the master directory to use.


