<!-- filename: index.htm
 author: Quang Thinh Ngo
 created: Tuesday 18/03/2020
 last modified: Tuesday 07/04/2020  -->

<!DOCTYPE html>
<html lang="en"> 
    <head> 
        <meta charset="utf-8" /> 
        <meta name="description" content=" Introductory Home Page" /> 
        <meta name="keywords" content=" Introduction" /> 
        <meta name="author"   content="Quang Thinh Ngo" />
        <link href="styles/style.css" rel="stylesheet"/> 
        <!-- Viewport set to sclae 1.0 -->
        <meta name="viewport" content="width = device-width, initial-scale=1.0"/> 
        <!-- Reference to external responsive CSS file -->
        <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
        <title> Home Page </title>
     </head> 
         <body> 
         <!--Header and Logo-->
    <?php
         $page = "index";
         include 'header.inc';
    ?>
        <!--Navigation Bar-->
    <?php
        $page = "index";
        include 'menu.inc';
    ?>
         <hr/>
        <!--All the page content is in article. It include main section and aside.-->
        <article>   
             <section id="main">
            <h1 id="AboutUs">
            A Quick Overview of QT Group
            </h1>
            <p> Welcome to QT company which is one of the leading firm in mobile phone industry in Melbourne. For us, providing modern mobile phones with 
            excellent quality and the cheapest price is the mission IC always want to accomplish. We have a wide range of cellphones with different prices which are affordable to all kind of customer need.
            In addition, we guarantee the wanrranty polocy for all customers.  </p>
            <h1 id="OurProduct">
            Our Range of Products:
            </h1>
            <p>In QT Group Store, we have a wide range of mobile products, from Android platform to IOS platform. There are also many different options for customer from cheap to middle and high price product.</p>
            <P>The following list includes some typical common products which are loved by our regular customer</P>
            <!--All the content such as passage, list, table, images will be format in the ListingContent class. It makes the content consistent.-->
            <div class="ListingContent">
            <h2>
               IOS Platform - Iphone
            </h2>
            <ol>
                <li>
                    <h2>
                        Apple Iphone 11
                    </h2>
                    <img src="images/Iphone11.jpg" alt="Iphone11">
                </li>
                <li>
                    <h2>
                        Apple iPhone XS Max 64GB
                     </h2>
                    <img src="images/IphoneX.jpg" alt ="Iphone XS Max">
                </li>
                <li>
                    <h2>
                        Apple iPhone 8
                     </h2>
                    <img src="images/Iphone8.jpg" alt =" Iphone8">
                </li>
            </ol>
            <h2>
                Android Platform - Samsung
            </h2>
             <ol>
                <li>
                    <h2>
                        Samsung Galaxy S20
                     </h2>
                     <img src="images/SamsungGalaxyS20.jpg" alt ="Samsung Galaxy S20">
                </li>
                <li>
                    <h2>
                        Samsung Galaxy Note 10
                     </h2>
                     <img src="images/SamsungGalaxyNote10.jpg" alt ="Samsung Galaxy Note 10">
                </li>
                <li>
                    <h2>
                        Samsung J7 
                     </h2>
                     <img src="images/SamsungJ7.jpg" alt ="Samsung J7 Pro">
                </li>
             </ol>
            </div>
            <h1 id="BestSeller">
            About our best seller product 
            </h1>
            <p>
                It is our pleasure to introduce to you the best seller product of this year 2020 - Samsung Galaxy A20. With a cheap price but extradinary hardward, This model of Samsung has become our best product in the last 4 months. More than 2000 customers have chosen this and hundred of
                positive feeback from customer that they will recommend this product to their friend.
            </p>
            <br/>
            <img src="images/SamsungWithBackground.jpg" alt="Samsung A20 in 2 sides" id="SamSungA20Image">

          
            </section>
            <aside id="aside">
                <nav>
                <a href="index.htm#AboutUs">About Us</a>
                <a href="index.htm#OurProduct">Our Products</a>
                <a href="index.htm#BestSeller">Best Seller Prduct 2020</a>
                </nav>
             </aside>
        </article>
        <?php
        include 'footer.inc';
        ?>
    </body>