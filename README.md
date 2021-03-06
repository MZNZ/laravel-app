# laravel-app
Laravel application

The application is build with Laravel 5.8 while I am learning it.

What I have done:
- Build master layout for the application
- Build Home, Contact Us, Customers Page
- Set up SQLite database in .env
- Learn to use 'php artisan tinker' while building features
- In 'Customers' page, implement the 'customer' CRUD features(index, create, store, show, edit, update, destroy actions)
- In 'Contact Us' Page, allows user to submit their contact information (create, store action)
- Set up 'Mail Service' configs in .evn for testing purpose
- Use 'mailabl'. Send user an email after submiting contact information.
- Use 'session flash' to show confirmation message to user
- Use make:auth to build authorization logic
- Use 'auth' middleware to restrict access to customers' create/edit/delete functionality
- Create and use custom middleware
- Use 'named route' for all routes instead of using explicit route name
- Add event and listener to send email when new customer is added
- Set up queues for sending welcome emails after customer is added
