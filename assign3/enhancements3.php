<!-- filename: enhancements3.php
 author: Quang Thinh Ngo
 created: Tuesday 18/03/2020
 last modified: Tuesday 07/04/2020-->

 <!DOCTYPE html>
 <html lang="en"> 
     <head> 
         <meta charset="utf-8" /> 
         <meta name="description" content=" Third Enhancements Page" /> 
         <meta name="keywords" content="Enhancements" /> 
         <meta name="author"   content="Quang Thinh Ngo" />
         <link href="styles/style.css" rel="stylesheet"/> 
         <!-- Viewport set to sclae 1.0 -->
         <meta name="viewport" content="width = device-width, initial-scale=1.0"/> 
         <!-- Reference to external responsive CSS file -->
         <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
         <title> Third Enhancements Page </title>
      </head> 
     <body> 
    <!--Header and Logo-->
    <?php
         $page = "enhancements3";
         include 'header.inc';
    ?>
        <!--Navigation Bar-->
    <?php
        $page = "enhancements3";
        include 'menu.inc';
    ?>
         <hr/>
         <!--All the page content is in article. It include main section and aside.-->
         <article>
             <!--Main section which contains the main content.-->
             <section id="main">
             <h1 id="managerReport">
             Enhancements Feature 1: Advance Feature In Manager Report Page
             </h1>
               <!--All the content such as passage, list, table, images will be format in the ListingContent class. It makes the content consistent.-->
             <div class="ListingContent">
             <h2>
                 Enhancements In Details:
             </h2>
             <ul>
                 <li>      
                 <h3>
                     Overview: 
                 </h3>
                 In order to to provide convenient tool for users, in the manager page, the users can ask for different report at the same time. Sometimes, the users want to compare between different reports. For example, providing the report for all the order and providing the report for pending orders. It will help the users/manager to estimate the percentage of pending orders in the system.
                 </li>
                 <li>
                     <h3>
                         Link to the feature: 
                     </h3>
                     The feature is implemented in enquire page in the following link. 
                 <br/>
                 <a href="manager.php">Linking to manager page</a>
                 </li>
                 <li>
                 <h3>
                     Description: 
                 </h3>
                     <p>By choosing different options in the manager page, then press the buttons, the new page will show multiple reports which users have been requested.</p>
                     <p> Before each table, there is a description for the content of each table.</p>
                 </li>
                 <li>
                     <h3>
                         Reference: 
                     </h3>
                     Third party source: Creating Web Application Lecture- Swinburne University of Technology 2020
                     <br/>

                 </li>
             </ul>
             </div>
             
             </section>
 
             <!--Aside section which contains the link to multiple sections in the main content.-->
             <aside id="aside">
                 <nav>
                 <a href="enhancements3.php#managerReport">Advance Feature In Manager Report Page</a>
                 </nav>
              </aside>
         </article>
         <?php
         include 'footer.inc';
         ?>
     </body>