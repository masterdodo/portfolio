<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wordpress Plugin - Job Applications</title>
</head>
<body>
    <div id="wrapper">
        <div id="title">WordPress Plugin: Job Applications</div>
        <div id="author-and-date">
            <span id="author">Author: David Aristovnik</span><br />
            <span id="date">23. 10. 2018</span>
        </div>
        <div id="content">
            <div class="sub-title">Overview</div>
            <div class="paragraph">
                This piece of software is a wordpress plugin, that is managing applications for any job position you want. 
                With it you get, a back-end, which consists of a custom admin menu with eight submenus that are allowing you 
                to view all job applications, adding and deleting job positions, adding and deleting job agents, adding and deleting 
                vehicles, in case you are looking for someone that needs a driving licence,then you have archive where the plugin 
                puts job applications when you “delete” them and are saved there, but it deletes all attachments, if there are any, 
                so it strips it down as much as possible without completely destroying the application. Then there are features that 
                are coming soon, which includes exporting and importing job applications from and into wordpress database, getting 
                reports from selected/wanted applications and being able to print them directly from wordpress, as well as ability 
                to get custom email alerts when a new job application was submitted or when a new job position was added and more or 
                less any modification was made to the plugin configuration. The other side is front-end, where you get a job application 
                form in a form of a WP shortcode, that is implemented on its own when pages are created, you also get a table for people 
                to see who applied for a certain job, with limited information, that is also implemented automatically when a page is 
                created.
            </div>
            <div class="sub-title">Coding of the Plugin</div>
            <div class="paragraph">
                My plugin code consists of main file where all the functions are located and executed/called, 
                uninstall php file that uninstalls a plugin and deletes all data associated with it, folder named 
                “assets”, where I save all style and script related files and also attachments that you send through 
                an application form. 
            </div>
            <div class="sub-title">Upload Files</div>
            <div class="paragraph">
                Files that are uploaded to the server through the form, are written in the database, so the plugin can have 
                control over where they are. They are saved in a folder named attachments, after which follows the name of a 
                position and then name_surname of a form submitter. And the name of a file is type of attachment (e.g. cv/resume) 
                dot extension. 
            </div>
            <div class="sub-title">Application Form and Form Submission</div>
            <div class="paragraph">
                Application form is made from 34 different inputs, 24 of them are mandatory (this may change in the future). 
                They are split into 5 main categories, for better visibility and better organization. They are: Identification, 
                Personal information, Work, Driving licences and Attachments. But Attachments are also split into 5 subcategories, 
                which are called: Identification, Driving, Education certificates, Work certificates and Criminal record. 
                Fields that are mandatory are bold and marked with a star(*). <br /><br />
                When you click on a button “SUBMIT”/”Submit”, data that was inputted in a form is sent to a function 
                and a deep analysis to check if everything is the way is supposed to be. Every variable is sent through 
                a sanitize function, is validated and then inputted into the database. If there is anything wrong with 
                any of the data the application is not going to be submitted and inputted to a database. 
            </div>
            <div class="sub-title">Custom Admin Plugin Functions</div>
            <div class="paragraph">
                There are 8 main admin functions, that are located inside of this plugin folder. First one is add_position, 
                and is in a way the most important one. In this function is code that is executed when new job position is 
                added or deleted. If a new one is added and if it is the first one, this function is going to create two 
                top-domain pages/menus, called “Find a Job” and “Find Talent”. And after that this one and all other positions 
                are going to be added under this two pages/menus. And it is one page after each menu. <br /><br />
                On Find a Job -> Position page just a title is set to a position’s name and a custom form is inserted 
                through a shortcode. It also puts a placeholder of “Put your content here...” in front of the form, 
                so you can put anything you want before or after the form. <br /><br />
                On Find Talent -> Position page you first get a title of a position’s name and then after that it prints a table, 
                where it lists all of the submitted applications from that position. <br /><br />
                There are also two pages, that are just “Find a Job” and “Find Talent”. Main “Find a Job” page is just a page 
                with a title ‘Find a Job’ and a form inserted after it. And a main “Find Talent” page is a page with a title 
                ‘Find Talent’ and a table, which lists all submitted applications, no matter a position. 
            </div>
            <div class="sub-title">Plugin assets</div>
            <div class="paragraph">
                Code:<br />
                <img src="assets/imgs/code_plugin.png" alt="code_plugin"><br />
                DB Model:<br />
                <img src="assets/imgs/database_model.png" alt="db_model" width="950"><br />
            </div>
        </div>
    </div>
</body>
</html>
