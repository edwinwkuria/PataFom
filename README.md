# PataFom
An event listing website.

Frameworks and languages used: 1. HTML/Blade  2. CSS/Sass  3. Laravel  4. PHP 5. JQuery  6. SQLite  7. Bootstrap

Database Tables: Users, Events, Categories, Event_Organizer, Event_User, Category_Events, Category_User, (cool thing to do add profile picture)

User Table Fields: Email, Password, Attendee/OrganizerID, Phone Number

Attendee: FirstName, LastName, Email, Phone, AltPhone, Occupation(Student, Employed, Self Employed), School( for students), Location (Town)(Prefill from google location), Gender, Date of Birth.

Events Table Fields: EventName, EventLocation, Eventtime, EventDate, Eventcost, EventDescription, EventPoster, EventOrganizer, EventContactEmail, EventContactPhone, EventAvailableSeats, Eventcategories

Categories: Currently being added using tinker

Comments: They work only need UI formatting and add comment to a comment.


#Intrests(Curated from Eventbrite): Music, Business, Food and Drink, Community, Arts, Film and media, Sports and fitness, Health, Science and Tech, Travel and outdoor, Charity and Causes, Spirituality, Family and Education, Holiday, Goverment, Fashion, Home and Lifestyle, Auto boat and air, Hobbies, School activities.

Bugs:
Event organizer session management
Event Date management
Event payment page(Create a invoice tab with all the attendee categories which calculate and create an mpesa push)
Collection methods: Patafom and nonpatafom paybill. 

