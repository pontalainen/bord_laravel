# Instructions for installation

### This is basically just instructions for how to set up this project on a new device

#### Have the right dependencies:

-   PHP and Laravel
-   npm
-   composer

#### In the php.ini make sure to:

To enable an extension you remove the semi colon (;) right before it.

-   Enable the fileinfo extension
-   Enable the pdo_sqlite extension
-   Enable the sqlite3 extension
-   Set post_max_size to 100M
-   Set upload_max_filesize to 100M

#### Run the following commands:

-   composer install
-   npm install

#### Do the following file changes:

-   Copy the ".env.example" file
-   Give the new file a name of just ".env"
-   Make sure the DB_CONNECTION variable in the above mentioned file is set equal to "sqlite"
-   Create the file "database.sqlite" inside the database directory

#### Run more commans

Firstly, make sure to restart your CLI for the composer and php paths to load correctly. Then run:

-   php artisan migrate
-   php artisan serve (this is the command used to spin up the project on localhost:8000)
-   npm run dev (this is the command used to run vite in development)

#### Register a user

-   Visit http://localhost:8000/register and sign up
-   Visit http://localhost:8000/bord and click the button to generate a key

#### ANOTHER command (jesus christ)

-   php artisan db:seed

#### Done!

Now you should be able to use the project. If not, try to just wait a minute or so and then try again.
If the CSS won't load, try stopping the vite instance, reboot it and run the npm run dev command once more.
