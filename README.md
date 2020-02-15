Before test all these run - php artisan migrate (For database).

A. Ploymorphism Relationship has 3 types:

	1. one-to-one : Build between User to image and Post to image (In User,Posts and Images model).
	2. one-to-many : Build between Post to comments and Video to comments (In Posts,videos and comments model).
	3. many-to-many : Build between Post to tag and video to tag (In Posts,videos and tags model ).



B. View Composer has power to call any data to any view  ( Check AppServiceProvider.php ).

C. Explation about Facades ( AppServiceProvider.php , Postcard.php, PostCardSendingService.php, web.php)
	
	1. Call PostCardSendingService class through singleton() method in AppServiceProvider.php.
	2. Singleton() method has an alias "Postcard" which calls through resolveFacade() method in Postcard.php with the use of app().
	3. In web.php call the Postcard class with hello function having paramenter (Message and Email) which returns the value of PostCardSendingService.php hello() function.
	