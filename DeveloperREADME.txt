X. A readme with:   Your thoughts about the code. What makes it amazing code. Or what makes it ok code. Or what makes it terrible code.
How would you have done it. Thoughts on formatting, structure, logic.. The more details that you can provide about the code 
(what's terrible about it or/and what is good about it) the easier for us to assess your coding style, mentality etc


What makes it amzing code ?

As Repository Pattern is used in this code it makes it amzing code because whenever we need or want to change the data source (database)
it will makes easy for us to make new class with new data source logic and add it with Repository class. for this we not have to make
changes in our business logic.


What makes it terrible code ?

BaseRepository
As In this Code BaseRepository we have directly implemented the methods but the good thing is first we have to define the BaseRepositoryInterface
in this we have to define the methods signature with return types. so in this case we can extend BaseRepositoryInterface with other Interface classes 
and we can restrict other Repository classes and Controllers to use these methods names for dealing with data.

In BaseRepository we have have define the data validation methods which is not the part of BaseRepository it must be defined in Controllers using
Validation Request classes in the way we can manage, update and understand the code better way.

BookingRepository

In BookingRepository class we have mixed up lots of things in a single class which breaks the rule of Single Responsibility Principle of class.
In this we have defined lots if things which not directly belongs to booking features and we have defined lengthy methods with in the BookingRepository class
so it makes difficult for developer to manage, update, and understand the code and it makes difficult for the developer to makes future changes or add new features in code.
and it also makes things difficult for the new developer to work with.


we must have to define sepeate Repositoris and Controll for each type of action like Jobs BookingRepository we must have to define JobsRepositoryInterface
and extends it with BaseRepositoryInterface and in Repository section we have to do this

EloquentJobsRepository extends BaseRepository implements JobsRepositoryInterface

in this way we can manage the code in a more efficient way. we have to do this same for all other actions like jobs.

For general things we can't define classes but we can define helper function to do that task like convertJobIdsInObjs but have to define 
easy to understandable helper names so any other developer can understand and work with code easily. like TeHelper this heper name doesn't suggest 
new developer that what type of function will be inside it.

laravel provides Notification classes for sending emails and notificatoin on the client side. so it better to use the Notification classes.
because this will sepeate the business logic from notificatoin related things and will makes our code cleaner and easy to manage and debug the code.





I have defined the notification classes to show that notification classes should be seperate from the business logic and leave the logic 
of the notification which is defined in classes.


