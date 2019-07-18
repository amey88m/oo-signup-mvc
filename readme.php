# Redirect every single request to 'index.php' by setting rules on '.htaccess' file.

# required directory neccessary for mvc
# create model folder
# create view folder
# carete controller folder



# ROUTES
# set routes by calling Route class's method route
# routes are use to controll over url  
# routes are defined to know on which url path request should display which view
# routes control's over url



# CONTROLLER
# I created base controller called 'controller/Controller'
# controller is the thread between view and model who controlles it.




# CONTROLLER USES
# It loads to the 'views' and 'models'




#######################
Hello,

This is simple signup page with upload - resume & profile pic. (no security part is included)

What is in project?

# DEFAULT ROUTE

# set the rule for index file by creating '.htaccess' so that each client request will first redirect to 'x.php' file
# It's a default route setting. This default route maps each url & all other routes request.
# set routes by calling Route class's method route.



# CONTROLLER

# controller are controll's the flow of application. It controll's the view's and model's. In simple, controller decide on route which view / model 
to be load.




Database: `mvc`



Table structure for table `signup`


CREATE TABLE `signup` (
  `cid` smallint(5) UNSIGNED NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `gender` enum('M','F') DEFAULT NULL,
  `resume` longtext NOT NULL,
  `profile_pic` varbinary(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Note : Don't use "httpd.conf" file if your rewrite module is on.


