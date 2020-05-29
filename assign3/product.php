<!-- filename: product.php
 author: Quang Thinh Ngo
 created: Tuesday 18/03/2020
 last modified: Tuesday 07/04/2020-->

<!DOCTYPE html>
<html lang="en"> 
    <head> 
        <meta charset="utf-8" /> 
        <meta name="description" content="Product Page" /> 
        <meta name="keywords" content="Product" /> 
        <meta name="author"   content="Quang Thinh Ngo" />
        <link href="styles/style.css" rel="stylesheet"/> 
         <!-- Viewport set to sclae 1.0 -->
        <meta name="viewport" content="width = device-width, initial-scale=1.0"/> 
        <!-- Reference to external responsive CSS file -->
        <link href="styles/responsive.css" rel="stylesheet" media="screen and (max-width: 1024px)"/>
        <title> All Products Description Page</title>
     </head> 
         <body> 
         <!--Header and Logo-->
    <?php
         $page = "product";
         include 'header.inc';
    ?>
        <!--Navigation Bar-->
    <?php
        $page = "product";
        include 'menu.inc';
    ?>
         <hr/>
            <!--All the page content is in article. It include main section and aside.-->
            <article>
             <section id="main">
            <h1 id="Introduction" class="h1">
            Introduction
            </h1>
            <p class="p1">
                Welcome to our products description page. In QT Group, we have a wide range of mobile phone product, from Android platform phones to IOS platform phone.
                Please select the product you like on the left and have a look in detail.  
            </p>
             <!--IOS Phones Section-->
            <section>
            <h1 id="IOS" class="h1">
                IOS Platform - Iphone
            </h1>
            <p class="p1">The following products are the popular IOS phones which are on the list of hot sale so far:</p>
              <!--All the content such as passage, list, table, images will be format in the ListingContent class. It makes the content consistent.-->
            <div class="ListingContent">
            <ol>
                <li>
                    <h2 id="Iphone11">
                        Iphone 11. Reference to <a href="https://www.jbhifi.com.au/products/apple-iphone-11-128gb-green">JB Hi-Fi Website</a>
                     </h2>
                    <img src="images/Iphone11.jpg" alt ="Iphone 11">
                    <h3>Overview:</h3>
                    <p>Shoot 4K video, beautiful portraits and sweeping landscapes with the all-new dual-camera system. Capture your best low-light photos with Night 
                        mode. See true-to-life colour in your photos, videos and games on the 6.1-inch Liquid Retina display.3 Experience unprecedented performance with A13 Bionic 
                        for gaming, augmented reality and photography. Do more and charge less with all-day battery life.2 And worry less with water resistance up to 2 metres for 30 minutes.</p>
                    <h3>Key features:</h3>
                    <ul>
                        <li>6.1-inch Liquid Retina HD LCD display</li>
                        <li>Water and dust resistance (2 metres for up to 30 minutes, IP68)</li>
                        <li>Dual-camera system with 12-megapixel Ultra Wide and Wide cameras; Night mode, Portrait mode, and 4K video at up to 60 fps</li>
                        <li>12-megapixel TrueDepth front camera with Portrait mode, 4K video and slow motion</li>
                        <li>Face ID for secure authentication and Apple Pay</li>
                        <li>A13 Bionic chip with third-generation Neural Engine</li>
                        <li>Fast-charge–capable</li>
                        <li>Wireless charging</li>
                        <li>iOS 13 with Dark Mode, new tools for editing photos and video, and brand-new privacy features</li>
                    </ul>
                    <h3>Specifications</h3>
                    <table class="Table">
                        <tr>
                          <th>Details</th>
                          <th></th> 
                        </tr>
                        <tr>
                          <td>Phone Operating System</td>
                          <td>iOS</td>
                        </tr>
                        <tr>
                          <td>Phone Type</td>
                          <td>iPhone 11</td>
                        </tr>
                        <tr>
                          <td>Network compatibility</td>
                          <td>4G</td>
                        </tr>
                        <tr>
                            <td>Dual SIM (nano-SIM/eSIM)</td>
                            <td>Yes</td>
                          </tr>
                          <tr>
                            <td>Colour Available</td>
                            <td>Black, Red, Gray</td>
                          </tr>
                          <tr>
                            <td>Device screen size (inches)</td>
                            <td>6.1</td>
                          </tr>
                          <tr>
                            <td>Resolution (Pixels)</td>
                            <td>1792 x 828</td>
                          </tr>
                          <tr>
                            <td>Touchscreen</td>
                            <td>Yes</td> 
                          </tr>
                          <tr>
                            <td>Internal memory</td>
                            <td>128GB</td> 
                          </tr>
                          <tr>
                            <td>Touchscreen</td>
                            <td>Yes</td> 
                          </tr>
                          <tr>
                            <td>RAM (GB)</td>
                            <td>4</td> 
                          </tr>
                          <tr>
                            <td>Rear Cameras (MP)</td>
                            <td>Dual 12-megapixel Ultra Wide and Wide cameras</td> 
                          </tr>
                          <tr>
                            <td>Front camera (MP)</td>
                            <td>12-megapixel camera</td> 
                          </tr>
                          <tr>
                            <td>NFC, Wifi</td>
                            <td>Yes</td> 
                          </tr>
                          <tr>
                            <td>Manufacturer's warranty</td>
                            <td>1 Year</td> 
                          </tr>
                          <tr>
                            <td>Price</td>
                            <td>1279&#36;</td> 
                          </tr>
                      </table>
                </li>
                <li>
                    <h2 id="IphoneX">
                        Apple iPhone XS Max 64GB. Reference to <a href="https://www.jbhifi.com.au/products/apple-iphone-xs-max-64gb-gold">JB Hi-Fi Website</a>
                     </h2>
                     <img src="images/IphoneX.jpg" alt ="Iphone X">
                    <h3>Overview:</h3>
                    <p>iPhone XS Max features a 6.5-inch Super Retina display with custom-engineered OLED panels for an HDR display that provides the industry’s best colour accuracy, as well as true blacks and remarkable brightness.1 Advanced Face ID lets you securely unlock your iPhone, log in to apps and pay with just a glance. The A12 Bionic chip with next-generation Neural Engine uses real-time machine learning to transform the way you experience photos, gaming, augmented reality and more. A breakthrough 12-megapixel dual-camera system takes your portraits to the next level with Portrait mode, Portrait Lighting, enhanced bokeh and all-new Depth Control. Water resistance.2 And iOS 12 — the most advanced mobile operating system — with powerful new tools that make iPhone more personal than ever.</p>
                    <h3>Key features:</h3>
                    <ul>
                        <li>6.5-inch Super Retina OLED display with HDR</li>
                        <li>IP68 dust and water resistance (maximum depth of 2 metres for up to 30 minutes)</li>
                        <li>12-megapixel dual cameras with dual optical image stabilisation and 7-megapixel TrueDepth front camera — Portrait mode, Portrait Lighting, Depth Control and Smart HDR</li>
                        <li>Face ID for secure authentication and Apple Pay</li>
                        <li>Face ID for secure authentication and Apple Pay</li>
                        <li>A12 Bionic with next-generation Neural Engine</li>
                        <li>Fast-charge–capable</li>
                        <li>Wireless charging — works with Qi chargers</li>
                        <li>iOS 12 with Memoji, Screen Time, Siri Shortcuts and Group FaceTime</li>
                    </ul>
                    <h3>Specifications</h3>
                    <table class="Table">
                        <tr>
                          <th>Details</th>
                          <th></th> 
                        </tr>
                        <tr>
                          <td>Phone Operating System</td>
                          <td>iOS</td>
                        </tr>
                        <tr>
                          <td>Phone Type</td>
                          <td>iPhone XS Max</td>
                        </tr>
                        <tr>
                          <td>Network compatibility</td>
                          <td>4G</td>
                        </tr>
                        <tr>
                            <td>Dual SIM (nano-SIM/eSIM)</td>
                            <td>Yes</td>
                          </tr>
                          <tr>
                            <td>Colour Available</td>
                            <td>Black, White, Gold</td>
                          </tr>
                          <tr>
                            <td>Device screen size (inches)</td>
                            <td>6.5</td>
                          </tr>
                          <tr>
                            <td>Resolution (Pixels)</td>
                            <td>2688 x 1242</td>
                          </tr>
                          <tr>
                            <td>Touchscreen</td>
                            <td>Yes</td> 
                          </tr>
                          <tr>
                            <td>Internal memory</td>
                            <td>64GB</td> 
                          </tr>
                          <tr>
                            <td>Touchscreen</td>
                            <td>Yes</td> 
                          </tr>
                          <tr>
                            <td>RAM (GB)</td>
                            <td>4</td> 
                          </tr>
                          <tr>
                            <td>Rear Cameras (MP)</td>
                            <td>12</td> 
                          </tr>
                          <tr>
                            <td>Front camera (MP)</td>
                            <td>7</td> 
                          </tr>
                          <tr>
                            <td>NFC, Wifi</td>
                            <td>Yes</td> 
                          </tr>
                          <tr>
                            <td>Manufacturer's warranty</td>
                            <td>1 Year</td> 
                          </tr>
                          <tr>
                            <td>Price</td>
                            <td>1749&#36;</td> 
                          </tr>
                      </table>
                      
                </li>
            </ol>
        </div>
        </section>
         <!--Android Phones Section-->
         <section>
            <h1 id="Android" class="h1">
                Android Platform - Samsung
            </h1>
            
            <p class="p1">The following products are the popular Android phones which are on the list of hot sale so far:</p>
            <div class="ListingContent">
            <ol>
                 <li>
                    <h2 id="SamsungGalaxyS20">
                        Samsung Galaxy S20+ 5G 512GB. Reference to <a href="https://www.jbhifi.com.au/products/samsung-galaxy-s20-5g-512gb-cosmic-grey">JB Hi-Fi Website</a>
                     </h2>
                     <img src="images/SamsungGalaxyS20.jpg" alt ="Samsung Galaxy S20">
                     <h3>Overview:</h3>
                     <p>Galaxy S20+ features a sleek modern design, next level capture and share and premium performance.</p>
                     <h3>Key features:</h3>
                     <ul>
                         <li>Seriously fast 5G
                            Stream, download, and post at seriously fast speeds with incredible 5G technology.</li>
                         <li>Pro-grade Camera
                            Capture details in stunning clarity with up to 64MP ultra resolution telephoto camera, 10MP front selfie camera and ultra-wide capabilities.</li>
                         <li>Space Zoom
                            Go from back row to on stage with 30x Space Zoom including 10x hybrid optic zoom.</li>
                         <li>Bright Night
                            Shoot like a pro, even in low light. Capture images with twice the brightness of previous Galaxy devices. Increased image sensor size lets you define richer photos even in the dark.</li>
                         <li>Super Smooth Infinity-O Display
                            Experience super smooth scrolling, gaming and cinematic viewing with an ultra-responsive 6.7" Infinity-O Display.</li>
                         <li>Single Take
                            Shoot once, capture up to 14 ways. AI technology automatically snaps videos, gifs and stills simultaneously so you can choose the best shot, every time.</li>
                         <li>Long-lasting Intelligent Battery
                            With 4,500Ah (typical) long-lasting battery, Galaxy S20+ has the power to last as long as you do.</li>
                         <li>Massive Storage
                            512GB built-in memory plus the option to add up to 1TB additional storage with microSD card slot.</li>
                         <li>Super-Fast Charging
                            Get back to full power even faster with 25W Super-Fast Charging capability (sold separately).</li>
                     </ul>
                     <h3>Specifications</h3>
                     <table class="Table" id="tableForS20">
                         <tr>
                           <th>Details</th>
                           <th></th> 
                         </tr>
                         <tr>
                           <td>Phone Operating System</td>
                           <td>Android</td>
                         </tr>
                         <tr>
                           <td>Phone Type</td>
                           <td>Galaxy S20+</td>
                         </tr>
                         <tr>
                           <td>Network compatibility</td>
                           <td>5G</td>
                         </tr>
                         <tr>
                             <td>Dual SIM (nano-SIM/eSIM)</td>
                             <td>Yes</td>
                           </tr>
                           <tr>
                             <td>Colour Available</td>
                             <td>Black, White, Grey</td>
                           </tr>
                           <tr>
                             <td>Device screen size (inches)</td>
                             <td>6.7</td>
                           </tr>
                           <tr>
                             <td>Resolution (Pixels)</td>
                             <td>3200 x 1440</td>
                           </tr>
                           <tr>
                             <td>Touchscreen</td>
                             <td>Yes</td> 
                           </tr>
                           <tr>
                             <td>Internal memory</td>
                             <td>512GB</td> 
                           </tr>
                           <tr>
                             <td>Expandable memory format</td>
                             <td>Micro SD card</td> 
                           </tr>
                           <tr>
                             <td>RAM (GB)</td>
                             <td>12</td> 
                           </tr>
                           <tr>
                             <td>Rear Cameras (MP)</td>
                             <td>12MP + 64MP + 12MP + VGA Depthvision</td> 
                           </tr>
                           <tr>
                             <td>Front camera (MP)</td>
                             <td>10</td> 
                           </tr>
                           <tr>
                             <td>NFC, Wifi</td>
                             <td>Yes</td> 
                           </tr>
                           <tr>
                             <td>Manufacturer's warranty</td>
                             <td>2 Year</td> 
                           </tr>
                           <tr>
                            <td>Price</td>
                            <td>1899&#36;</td> 
                          </tr>
                       </table>
                </li>
                <li>
                    <h2 id="SamsungGalaxyNote10">
                        Samsung Galaxy Note10 256GB. Reference to <a href="https://www.jbhifi.com.au/products/samsung-galaxy-note10-256gb-aura-black-3">JB Hi-Fi Website</a>
                     </h2>
                     <img src="images/SamsungGalaxyNote10.jpg" alt ="Samsung Galaxy Note 10">
                     <h3>Overview:</h3>
                     <p>Meet the Powerphone that’s like having a computer, gaming console, and pro-grade camera in one compact device, with the added intelligence of S Pen.</p>
                     <h3>Key features:</h3>
                     <ul>
                         <li>Intelligent Battery
                            Powerful 3,500mAh (typical) battery so you can do more throughout the day - and night.</li>
                         <li>Intelligent S Pen
                            With its sleek unibody design, the all-new intelligent S Pen now responds to your gestures with Air Actions. It can also transform handwriting into text.</li>
                         <li>Pro-grade Camera
                            A full kit of lenses - zoom, wide, ultra-wide- at your fingertips, so you can shoot like a pro without being a pro.</li>
                         <li>Integrated with Microsoft apps
                            Boost productivity with seamlessly integrated Microsoft apps - Word, Excel, PowerPoint and more.</li>
                         <li>New Super-Fast Processor
                            With the power of a computer in your pocket, Galaxy Note10 performs at the speed of now.</li>
                         <li>Cinematic Infinity Display
                            More screen, less interruptions with the 6.3" Cinematic Infinity-O Display.</li>
                         <li>Super-Fast Charging
                            Power up fast with 25W Super-Fast Charging, so you can spend less time charging, and more time living.</li>
                         <li>DeX Live
                            Opens a new desktop world from your smartphone when you connect it to a monitor or  computer.</li>
                     </ul>
                     <h3>Specifications</h3>
                     <table class="Table">
                         <tr>
                           <th>Details</th>
                           <th></th> 
                         </tr>
                         <tr>
                           <td>Phone Operating System</td>
                           <td>Android</td>
                         </tr>
                         <tr>
                           <td>Phone Type</td>
                           <td>Galaxy Note10</td>
                         </tr>
                         <tr>
                           <td>Network compatibility</td>
                           <td>4G</td>
                         </tr>
                         <tr>
                             <td>Dual SIM (nano-SIM/eSIM)</td>
                             <td>No</td>
                           </tr>
                           <tr>
                             <td>Colour Available</td>
                             <td>Black, White, Grey</td>
                           </tr>
                           <tr>
                             <td>Device screen size (inches)</td>
                             <td>6.3</td>
                           </tr>
                           <tr>
                             <td>Resolution (Pixels)</td>
                             <td>2280 x 1080</td>
                           </tr>
                           <tr>
                             <td>Touchscreen</td>
                             <td>Yes</td> 
                           </tr>
                           <tr>
                             <td>Internal memory</td>
                             <td>256GB</td> 
                           </tr>
                           <tr>
                             <td>Expandable memory format</td>
                             <td>Micro SD card</td> 
                           </tr>
                           <tr>
                             <td>RAM (GB)</td>
                             <td>8</td> 
                           </tr>
                           <tr>
                             <td>Rear Cameras (MP)</td>
                             <td>12MP (Wide, F1.5/F2.4) | 12MP (Telephoto, F2.1) | 16MP (Ultra Wide, F2.2)</td> 
                           </tr>
                           <tr>
                             <td>Front camera (MP)</td>
                             <td>10MP AF (Wide, F2.2)</td> 
                           </tr>
                           <tr>
                             <td>NFC, Wifi</td>
                             <td>Yes</td> 
                           </tr>
                           <tr>
                             <td>Manufacturer's warranty</td>
                             <td>2 Year</td> 
                           </tr>
                           <tr>
                            <td>Price</td>
                            <td>999&#36;</td> 
                          </tr>
                       </table>
                </li>
             </ol>
            </div>
            </section>
             <!--Best seller product section-->
             <section>
            <h1 id="BestSeller" class="h1">
            Best seller product 
            </h1>
            <p>
                It is our pleasure to introduce to you the best seller product of this year 2020 - Samsung Galaxy A20. With a cheap price but extradinary hardward; this model of Samsung has become our best product in the last 4 months. More than 2000 customers have chosen this and hundred of
                positive feeback from customer that they will recommend this product to their friend.
            </p>
            <br/>
            <h2 id="SamsungGalaxyA20">
                Samsung Galaxy A20. Reference to <a href="https://www.jbhifi.com.au/products/samsung-galaxy-a20-32gb-blue">JB Hi-Fi Website</a>
             </h2>
             <div class="ListingContent">
            <img src="images/SamsungWithBackground.jpg" alt="Samsung A20 in 2 sides" >
             <h3>Key Features:</h3>
             <p>Galaxy A20 features a modern design with affordable price, next level capture and share and premium performance.</p>
             <h3>Key features:</h3>
             <ul>
                 <li>Infinity-V Display
                    See more on the large 6.4" Infinity-V Display.</li>
                 <li>Dual Camera
                    Capture your wider world with the 13MP and 5MP Dual Camera.</li>
                 <li>Every picture's postworthy
                    Say goodbye to bad selfies with Smart Selfie.</li>
                 <li>BLong lasting battery
                    Powerful battery so you’re never out of touch.</li>
                 <li>So fast, so powerful
                    Incredible Octa-Core processor capable of superfast downloads and efficient yet powerful performance.</li>
                 <li>Space for everything
                    Store all of the things you love with 32GB of built-in storage and expandable memory up to 512GB.</li>
                 <li>Advanced security
                    Securely access your phone with facial recognition technology or the Fingerprint Scanner.</li>
                 <li>Decorate your selfies
                    Add fun and flare to your selfies with AR Stickers, Stamps, Filters, Frames, and Characters.</li>
             </ul>
             <h3>Specifications</h3>
             <table class="Table">
                 <tr>
                   <th>Details</th>
                   <th></th> 
                 </tr>
                 <tr>
                   <td>Phone Operating System</td>
                   <td>Android</td>
                 </tr>
                 <tr>
                   <td>Phone Type</td>
                   <td>Galaxy A20</td>
                 </tr>
                 <tr>
                   <td>Network compatibility</td>
                   <td>4G</td>
                 </tr>
                 <tr>
                     <td>Dual SIM (nano-SIM/eSIM)</td>
                     <td>Yes</td>
                   </tr>
                   <tr>
                     <td>Colour Available</td>
                     <td>Black, White, Grey</td>
                   </tr>
                   <tr>
                     <td>Device screen size (inches)</td>
                     <td>6.4</td>
                   </tr>
                   <tr>
                     <td>Resolution (Pixels)</td>
                     <td>3200 x 1440</td>
                   </tr>
                   <tr>
                     <td>Touchscreen</td>
                     <td>Yes</td> 
                   </tr>
                   <tr>
                     <td>Internal memory</td>
                     <td>32GB</td> 
                   </tr>
                   <tr>
                     <td>Expandable memory format</td>
                     <td>Micro SD card</td> 
                   </tr>
                   <tr>
                     <td>RAM (GB)</td>
                     <td>3</td> 
                   </tr>
                   <tr>
                     <td>Rear Cameras (MP)</td>
                     <td>13MP+5MP</td> 
                   </tr>
                   <tr>
                     <td>Front camera (MP)</td>
                     <td>8</td> 
                   </tr>
                   <tr>
                     <td>NFC, Wifi</td>
                     <td>Yes</td> 
                   </tr>
                   <tr>
                     <td>Manufacturer's warranty</td>
                     <td>2 Year</td> 
                   </tr>
                   <tr>
                    <td>Price</td>
                    <td>279&#36;</td> 
                  </tr>
               </table>
            </div>
            </section> <!-- End of Best Seller Section-->
            <section>
              <h1 id="References" class="h1">
              Reference of Images
              </h1>
              <div class="ListingContent">
                <ul>
                  <li><a href="https://www.apple.com/" >Apple Website</a></li>
                  <li><a href="https://cellmate.com.au/product/samsung-galaxy-j7-pro-pre-owned/" >Cell Mate Website</a></li>
                  <li><a href="https://www.mydeal.com.au/apple-iphone-x-1752270?gclid=CjwKCAjwpqv0BRABEiwA-TySwYCuKmxZLuO8vifKTQhyjR-tqev6RVS6qdxtRmmcQbhCjQkvb8gzkxoCPFsQAvD_BwE" >My Deal Website</a></li>
                  <li><a href="https://www.microsoft.com/en-au/p/samsung-galaxy-s20-s20-5g-s20-s20-5g-s20-ultra-5g-unlocked/91dwf91dkhqx?SilentAuth=1&activetab=pivot%3aoverviewtab" >Microsoft Website</a></li>
                  <li><a href="https://www.jbhifi.com.au/" >JB HiFi Website</a></li>

                </ul>
              </div>

              </section>
            </section>  <!-- End of Main Content Section-->

            <!--Aside section which contains the link to multiple sections in the main content.-->
            <aside id="aside">
                <nav>
                <a href="product.php#Introduction">Introduction</a>
                <a href="product.php#IOS">Ios Phones</a>
                <a href="product.php#Iphone11">Iphone11</a>
                <a href="product.php#IphoneX">IphoneX</a>
                <a href="product.php#Android">Android Phones</a>
                <a href="product.php#SamsungGalaxyS20">Samsung Galaxy S20</a>
                <a href="product.php#SamsungGalaxyNote10">Samsung GalaxyNote 10</a>
                <a href="product.php#BestSeller">Best Seller Product 2020</a>    
            </nav>
             </aside>
        </article>
        <?php
        include 'footer.inc';
        ?>
    </body>