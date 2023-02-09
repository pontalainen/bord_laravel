# Project Bord / LearnOL

### Introduction

This project was built by the fourth years of the IT program at Nösnäsgymnasiet, between 2022 and 2023.
The Project first started out as a node.js build, but late on in the process we decided to quickly switch to Laravel.
This was mainly because one, hosting a node.js project with a database caused some problems, and two, authentication came basically for free with Laravel.
The switch basicaly happened mostly because Pontus, the main backend developer of the project, had started to learn Laravel on the side, and when the time came to
start wrapping the project up and we still had a number of issues, the decision was made to migrate.

IT´s a very basic Laravel build with Vite and Tailwind. This Laravel version of the project was blog inspired, since it had a lot of similar features,
mainly with authentication, with posts beloning to users etc. It´s been made with Project Air in mind more than Fruit, but Fruit was added as well, just not
with the customization built into Air.

The project is created for two different types of users who will be connected to each other. The first user will be the admin,
who registers on the main registration page. The admin has access to all the customization, can visit all the pages, view their own air-pages as well as
create, edit and delete them, edit which NFC cards belong to what page.

The second user is the regular one, who can be made by the admin once they have registered and logged in. This user will be able to see and access all of your air-pages as
well as visit and use Project Fruit, but will not be able to visit any other pages or do any sort of customization.

### How to use the project

To get started, visit https://learnol.se. Once there, click on _Not Registred Yet?_ and enter your details. Once you´re done, click on register.
You will be taken to the home page where you later on will be able to see and interact with your own air-pages, once you´ve made some.

#### Creating a new page

To create a new page click on the dropdown menu _Actions_ in the top left corner, and then choose _New Page_. In here you can enter the desired page name and
content as well as upload an image. You have the option to write the content in markdown, which will then be converted into HTML and displayed on the page when visited.
To toggle markdown content on or off, just hit the switch in the top left conrner above the content called _Markdown content_. If you don´t have previous experience
with markdown but would like to implement it on your pages, I recommend visiting https://www.markdowntutorial.com/ to get started.

Once you feel happy with your page, click on _SUBMIT PAGE_ to save it. You will be redirected back to the home page, where you now should be able to see your new page.
To edit the page, click on the small blue _Edit_-button under the content preview. To delete the page, click _Delete_ right next to the _Edit_-button.
To visit your newly created page, click on the title or the content.

We recommend that the first page you make is the start page for the later on regular user. The only thing needed for the page to be recognized as the start page is
that you make the page name **Start**. You can have whatever content and image you want, as long as the name is right.

#### Editing cards

To choose which cards to connect to what page, from the home page click on _Cards Air_ or _Cards Fruit_ in the _Actions_-dropdown,
depending on if it´s the cards for your air-pages or fruit-pages you want to edit. The interface is exactly the same for both options.
To connect a card to a page, just click on one of the two _Card ID_-fields for that page and scan the card you want to connect it to.
As you can see two different cards can be connected to the same page, just for redundancy in case one of them would be lost etc.
When the card has been scanned successfully you can click on the _SAVE CARDS_ button for that page, and you should be presented with a message
saying that the cards for that page has been updated.

#### Visiting Fruit

To visit and use Project Fruit, again from the home page click on _Fruit_ in the _Actions_-dropdown. To see specific products
(given that you have selected cards for those products) you just click on the side you want it to appear on and scan the card. If you would like to make the pages you
scan alternate between left and right each time you scan, you can click on the _Touch: On_-button in the top right corner, which should then say _Touch: Off_.
To turn touch back on just click the button again.

#### Creating regular user

Since you don´t want the regular user to be able to edit or delete your pages, they will have another account connected to your pages but restricted,
so only your air-pages and Fruit is available. To create this account, go to the home page and click on the drop menu with your name in the top right corner.
Here you have the option to _Log Out_ and to _Create User_. Click on the second one. Here you´ll be presented with a form very similar to the one used to register the
admin account, but without the need of an email address. Once you have filled it out, click on register. This will automatically log your new user in, and you should be
presented with the start page you´ve made.

To visit other pages, just scan the designated NFC card. To go to Fruit, click the _Go to Fruit_-button in the top right corner. To from Fruit go back to Air,
click the _Go to Air_-button in the top right corner.

#### That´s it

That´s pretty much it! If you have any other questions, feel free to hit me up at pontusolsson03@gmail.com. Other than that, have fun using the project!

---

### How to set up developmennt of the project on a new device

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

#### Commands

Firstly, make sure to restart your CLI for the composer and php paths to load correctly. Then run:

-   composer install
-   npm install

#### Do the following file changes:

-   Copy the ".env.example" file
-   Give the new file a name of just ".env"
-   Make sure the DB_CONNECTION variable in the above mentioned file is set equal to "sqlite"
-   Create the file "database.sqlite" inside the database directory

#### Run more commands

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
