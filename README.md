��#   l a r a v e l b o o k e r 
 
 11/12/2018
2 Week Sprints
Scope of Work
6 Unprotetected packages

protected Admin Dashboard
Business Goal Market and Book Appointments online

4/12
Day One Docker Containers initialized Laravel installed

Day 1
Make Authorization RouteS -- login --register  --user dashboard


=====================
created 6 web pages in web.php
 --tours
 --about  
 --lengths
 --guestbook
 --details  
 --contact  

 created the basic controller for each page

 docker-compose exec app php artisan make:controller TourController
 Route::resource('activities','TourController');


 php artisan make:migration create_tours_table
 php artisan migrate


 docker-compose exec app php artisan make:model Tour

Added  The functionality to
Create A Route
Show All Routes with pagination
and view the created route
Added pagination



Created A RElationship One to Many
One Route has Many Attractions
Attractions Create form on the bottom of each Route Page