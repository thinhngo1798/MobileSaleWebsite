<!-- filename: enhancements.php
 author: Quang Thinh Ngo
 created: Sunday 17/05/2020
 last modified: Monday 01/06/2020  -->

<!DOCTYPE html>
<html lang="en"> 
    <head> 
        <meta charset="utf-8" /> 
        <meta name="description" content=" Enhancements Page" /> 
        <meta name="keywords" content="Enhancements" /> 
        <meta name="author"   content="Quang Thinh Ngo" />
        <link href="styles/style.css" rel="stylesheet"/> 
        <!-- Viewport set to sclae 1.0 -->
        <meta name="viewport" content="width = device-width, initial-scale=1.0"/> 
        <!-- Reference to external responsive CSS file -->
        <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
        <title> Enhancements Page </title>
     </head> 
    <body> 
    <!--Header and Logo-->
    <?php
    $page = "enhancements";
    include 'header.inc';
    ?>
   <!--Navigation Bar-->
    <?php
    $page = "enhancements";
    include 'menu.inc';
    ?>
        <hr/>
        <!--All the page content is in article. It include main section and aside.-->
        <article>
            <!--Main section which contains the main content.-->
            <section id="main">
            <h1 id="Flexbox">
            Enhancements Feature 1: Flexbox (Flexible Box)
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
                As the fact that technologies in Web applications Field have changing quickly, applying new and effective techniques in improving user's interaction and satisfaction is necessary. One of a very useful and popular technique in CSS is using FlexBox to design the layout of the website's content. As this skill is not covered in the main content of COS10001, it is a good chance for students to apply in the assignment and demonstrate their skills in learning a new technique. In addition, it can be considered to be more convenient for developers to have a good layout by using FleBox beside using other common layout technique.
                </li>
                <li>
                    <h3>
                        Link to the feature: 
                    </h3>
                    Because it is an CSS technique, the following links will lead to the example where FlexBox is apply. I have used FlexBox for the all pages in this assignment, inclduing index.php, enquiry.php, product.htlm, about.php and enhancement.php. 
                    For example:
                <br/>
                <a href="product.php">Product Page with the header and main content using FlexBox</a>
                </li>
                <li>
                <h3>
                    Description: 
                </h3>
                    <p>Header section includes logo and a welcome text. These 2 features are displayed as 2 flex items. Using justify-content to align item in the center of the box.</p>
                    <p> The main content of the page is divided into 2 part, main part and aside part. Using flex: 25% to manage the space for aside is maximum of 25%.
                        flex-wrap, justify-content: flex-start are also used.  
                    </p>
                </li>
                <li>
                    <h3>
                        Reference: 
                    </h3>
                    Third party source: <a href="https://www.w3schools.com/css/css3_flexbox.asp" >W3School</a>
                </li>
            </ul>
            </div>
            <h1 id="ResponsiveDesign">
                Enhancements Feature 2: Responsive Web Design
            </h1>
            <div class="ListingContent">
                <h2>
                    Enhancements In Details:
                </h2>
                <ul>
                    <li>      
                    <h3>
                        Overview: 
                    </h3>
                    Nowadays, mobile devices are more and more popular; therefore, website should be acessable and displayed properly in mobile devices which have smaller screen compared to desktop screen. Using Responsive Web Design is a great technique to adjust the web design and layout corresponding to the current screens, from small-screen to medium-screen mobiles, to Ipad or other devices.
                    </li>
                    <li>
                        <h3>
                            Link to the feature: 
                        </h3>
                        Because it is an CSS technique, the following links will lead to one of the page where Responsive design is applied. I have used Responsive Design for all pages in this assignment, inclduing index.php, enquiry.php, product.htlm, about.php and enhancement.php. 
                        <br/>
                        For example:
                    <br/>
                    <a href="product.php">Product Page </a>
                    </li>
                    <li>
                    <h3>
                        Description: 
                    </h3>
                        <p>When the screen is shrank, the layout will be changed. The new one is that the logo one on top, the welcome text in the next line, the aside and main sections are shrank to make sure all the content are shown.</p>
                        <p> This will fixed the problem that the aside bar will disappeared when the browser is shrank to a certain point.
                        </p>
                        <br/>
                    <a href="enquire.php">Enquiry Form Page </a>
                    </li>
                    <li>
                    <h3>
                        Description: 
                    </h3>
                        <p>When the screen is shrank, the layout will be changed. It is the same to other page, like the Product page above.</p>
                        <p> <em>Additional feature for this page:</em>
                        <br/>
                        The form will changed the layout when the screen size is changed.
                        </p>
                    </li>
                    <li>
                        <h3>
                            Reference: 
                        </h3>
                        Third party source: <a href="https://www.w3schools.com/html/html_responsive.asp" >W3School</a>
                    </li>
                </ul>
                </div>
            </section>

            <!--Aside section which contains the link to multiple sections in the main content.-->
            <aside id="aside">
                <nav>
                <a href="enhancements.php#Flexbox">Flexbox (Flexible Box)</a>
                <a href="enhancements.php#ResponsiveDesign">Responsive Web Design</a>
                </nav>
             </aside>
        </article>
        <?php
        include 'footer.inc';
        ?>
    </body>