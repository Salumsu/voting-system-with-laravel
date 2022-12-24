<center>
    <h1>Student Voting System</h1>
</center>

<h2>Prerequisites</h2>
<p>To use this app, you must have some software installed on your computer. They are as follows:</p>

<ol>
    <li>Xampp</li>
    <li>Php 8 or above</li>
    <li>Composer</li>
    <li>Node JS</li>
</ol>

<h2>Installation Guide</h2>
<h3>Step 1: Get the project on your computer</h3>
    <p>This can be done by cloning the project using git or by simply clicking <br/>
    the clicking "<> Code" -> "Download Zip".</p>
        
<h3>Step 2: Set up the database </h3>
    <p>There's some step that you need to follow to set up the database in your computer. These steps are: </p>
    <ol>
    <li>Open xampp</li>
    <li>Start MySQL</li>
    <li>Start Apache</li>
    <li>Go to phpmyadmin by: open a browser -> search "localhost/phpmyadmin"</li>
    <li>Create a new database named "vote"</li>
    <li>Click the new database and go to the import tab</li>
    <li>Click choose file then navigate the file inside this project directory named "vote.sql"</li>
    </ol>
    
<h3>Step 3: Installing the project dependencies</h3>
    <p>Some dependencies for the project need to be installed using composer. <br/>There's also some more things to do to finish this up. These are:  </p>
    <ol>
    <li>Open the terminal then cd to the project folder and then run "composer install"</li>
    <li>Copy the .env.example found in the root directory of this project and name it ".env"</li>
    <li>Open .env file and change the database name (DB_DATABASE) to vote, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.</li>
    <li>In the same terminal, run php artisan key:generate</li>
    </ol>

<h2>Use Guide</h2>
<h3>Run the App!</h3>
<p>Assuming that you followed the installation guide correctly. <br/> You now just need to follow these simple steps:</p>
<ol>
    <li>Go to terminal</li>
    <li>CD to current directory</li>
    <li>Run "php artisan serve"</li>
    <li>Open your browser and type whatever link is given to you in the terminal, which is most likely be "127.0.0.1:8000"</li>
    <li>Have fun!</li>
</ol>
