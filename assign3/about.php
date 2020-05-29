<!-- filename: about.php
 author: Quang Thinh Ngo
 created: Tuesday 18/03/2020
 last modified: Tuesday 07/04/2020-->
 
<!DOCTYPE html>
<html lang="en"> 
    <head> 
        <meta charset="utf-8" /> 
        <meta name="description" content=" About Us Page" /> 
        <meta name="keywords" content=" AboutUs" /> 
        <meta name="author"   content="Quang Thinh Ngo" />
        <link href="styles/style.css" rel="stylesheet"/> 
        <!-- Viewport set to sclae 1.0 -->
        <meta name="viewport" content="width = device-width, initial-scale=1.0"/> 
        <!-- Reference to external responsive CSS file -->
        <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
        <title> About Our Profile </title>
     </head> 
     <body> 
        <!--Header and Logo-->
   <?php
        $page = "about";
        include 'header.inc';
   ?>
       <!--Navigation Bar-->
   <?php
       $page = "about";
       include 'menu.inc';
   ?>
        <hr/>
        <!--All the page content is in article. It include main section and aside.-->
        <article>
            <!--Main section which contains the main content.-->
        <section id="main">
            <h1 id="Introduction">
            Introduction
            </h1>
            <p> QT Goup was establish this year by Quang Thinh Ngo. He is a software engineering student at Swinburne 
                University of Technology. The following is some details of our founder. </p>
            <h1 id="DetailInformation">
            Detail Information:
            </h1>
              <!--All the content such as passage, list, table, images will be format in the ListingContent class. It makes the content consistent.-->
            <div class="ListingContent">
            <h2>
               Personal Information
            </h2>
	        <dl>
            <dt>Name:</dt>
                <dd>Quang Thinh Ngo</dd>
            <dt>Student ID:</dt>
                <dd>101766060</dd>
            <dt>Course:</dt>
                <dd>Bachelor of Engineering (Honour)</dd>
            <dt>Email:</dt>
                <dd><a href="mailto:101766060@student.swin.edu.au">101766060@student.swin.edu.au</a></dd>
            </dl> 
            <h2>
                Profile Picture
            </h2>
            <figure >
            <img src="images/ProfilePicture.jpg" alt="Profile Picture" id="profilePicture">
            </figure>
            <br/>

            <section id="timetable">
                <h2>
                    University Timetable
                </h2>
            <table> 
            <caption>Table of Timetable</caption> 
            <thead> 
                <tr> 
                    <th rowspan="2">Time</th>
                     <th colspan="5">Date of The Week</th>
                 </tr> 
                 <tr> 
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th> 
                    <th>Thursday</th> 
                    <th>Friday</th> 
                </tr>
                </thead> 
                <tbody> 
                    <tr> 
                        <th >8.30 - 9.30</th>
                         <td></td>
                          <td></td>
                          <td rowspan="2">
                              COS10001 
                              <br/>
                              Lab 1 (8)
                              <br/>
                              BA 607
                            </td> 
                          <td rowspan="3"> 
                               EEE40002 
                            <br/>
                            Lab 1 (5)
                            <br/>
                            AD 208</td> 
                          <td rowspan="2">
                            EEE40002 
                            <br/>
                            Lecture 1 (1)
                            <br/>
                            AGSE 202
                          </td>
                    </tr>
                    <tr> 
                        <th >9.30 - 10.30</th>
                         <td></td>
                          <td></td>       
                    </tr>
                    <tr> 
                        <th >10.30 - 11.30</th>
                         <td></td>
                          <td></td>
                          <td></td> 
                          
                          <td></td> 
                    </tr>
                    <tr> 
                        <th >11.30 - 12.30</th>
                        <td></td>
                          <td></td>
                          <td></td> 
                          <td></td> 
                          <td></td> 
                    </tr>
                    <tr> 
                        <th >12.30 - 13.30</th>
                        <td rowspan="2">
                            COS30008 
                            <br/>
                            Lecture 1 (1)
                            <br/>
                            AMDC 301
                        </td>
                          <td></td>
                          <td></td> 
                          <td></td> 
                          <td rowspan="2">
                            SWE30003 
                            <br/>
                            Lecture 1 (1)
                            <br/>
                            EN 203
                          </td>
                    </tr>
                    <tr> 
                        <th >13.30 - 14.30</th>
                         
                          <td></td>
                          <td></td> 
                          <td></td> 
                          
                    </tr>
                    <tr> 
                        <th >14.30 - 15.30</th>
                        <td rowspan="2">
                            COS10001 
                            <br/>
                            Lecture 1 (1)
                            <br/>
                            ATC 101
                        </td>
                          <td></td>
                          <td rowspan="2">
                            COS30008 
                            <br/>
                            Lab 1 (9)
                            <br/>
                            BA 603
                          </td>
                          <td></td> 
                          <td></td> 
                    </tr>
                    <tr> 
                        <th >15.30 - 16.30</th>
                         
                          <td></td>
                          
                          <td></td> 
                          <td>  SWE30003 
                            <br/>
                            Tutorial 1 (2)
                            <br/>
                            BA 306</td> 
               </tbody> 

                </table>
            </section>
            </div>
            <h1 id="AboutMyself">
            A little bit about myself 
            </h1>
            <p>
                I’m currently in my third year of Software Engineering degree 💻at Swinburne. As a Logistic Manager of Swinburne Engineering Student Society (SESS),
                 I love working with people and engaging everyone to join in our exciting activities of the community.
                  I believe that volunteering is one of the best ways to extend our comfort zone, making valuable connections and enhance our interpersonal skills.
                   I am passionate about programming, solving computer problems and creating embedded systems for different devices.
                    Besides programming, I also enjoy running, reading books and writing.📓
            </p>
            </section>

            <!--Aside section which contains the link to multiple sections in the main content.-->
            <aside id="aside">
                <nav>
                <a href="about.php#Introduction">Introduction</a>
                <a href="about.php#DetailInformation">Deatil Information</a>
                <a href="about.php#AboutMyself">A little bit about myself</a>
                </nav>
             </aside>
        </article>
        <?php
        include 'footer.inc';
        ?>
    </body>