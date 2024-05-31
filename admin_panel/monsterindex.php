<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Fueling our athletes, musicians, and fans, Monster Energy produces a variety of energy drinks, brewed coffee, hydrating sports drinks, juices, and teas.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monster Energy | Energy Drinks, Coffee, Tea, and Juice</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style1.css">
	<style><?php include 'style1.css';?></style>
	


</head>
<body>

    <header>


        <a href="#" class="logo"><i class="fas-fa-untensils">monster</i></a>
        <nav class="navbar">
		
           <a class="active" href="#home">home</a>
            <a href="#BestSell">Best Sellers</a>
            <a href="#about">about</a>
            <a href="#products">products</a>
            <a href="#reviews">reviews</a>
            <a href="#order">Order</a>
			
			<a href="index.php">
    <button type="button" class="btn white-btn" id="loginBtn" onclick="login()" > Sign In</button>
</a>
            <a href="signup.php">
    <button type="button" class="btn white-btn" id="loginBtn" onclick="login()" > Sign Up</button>
</a>        
            <a href="./Login-registration-System-PHP-and-MYSQL-master/index.php">
    <button type="button" class="btn white-btn" id="loginBtn" onclick="login()" > Sign In Admin</button>
</a>

			
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
        </nav>

        <div class="icons">
           <i class="fas fa-bars" id="menu-bars"></i>
           <i class="fas fa-search" id="search-icon"></i>
          
        </div>
    <!--symbol icon header-->
    </header>


<form action="" id="search-form" >
   <input type="search" placeholder="search flavor Monster" name="" id="search-box">
   <label for="search-box" class="fas fa-search"></label>
   <i class="fas fa-times" id="close"></i>
</form>

<section class="home" id="home">
    <div class=" swiper-container home-slider">
        <div class="swiper-wrapper wrapper">

           <div class="swiper-slide slide">
            <div class="content">
                <span>Our Fresh Energy Drink</span>
                <h3>Our Flavors</h3>
                <p>The best Monster flavor is fruity, refreshing, and packs a major punch of caffeine. We cracked open 35 cans and bottles in two separate taste tests to find the best Monster flavors, from the best Java Monster to the best Juice Monster and every Monster in between. </p>
                <a href="#" class="btn">ORDER NOW!</a>
            </div>
            <div class="image">
                <img src="images/hero-image.png" alt="">
            </div>
           </div> 

           <div class="swiper-slide slide">
            <div class="content">
                <span>Our Fresh Energy Drink</span>
                <h3>Basic Original Flavor</h3>
                <p>Tear into a can of one of the meanest energy drinks on the planet, Monster OG. Monster Energy OG is a smooth, refreshing blend of sweet and salty exotic citrus flavors with a hint of pure adrenaline packing 160mg of caffeine. Unleash the beast with Monster OG!!</p>
                <a href="#" class="btn">ORDER NOW!</a>
            </div>
            <div class="image">
                <img src="images/wouh.png" alt="">
            </div>
           </div> 

           <div class="swiper-slide slide">
            <div class="content">
                <span>EVENTS</span>
                <h3>OUR EVENT</h3>
                <p>Take a look to our event of Motors in ANGEL STADIUM,CA 2024!</p>
                
            </div>
            <div class="image">
                <img src="images/eventmonster.png" alt="">
            </div>
           </div> 


        </div>
      
        <div class="swiper-pagination"></div>

    </div>
 



</section>

<section class="BestSell" id="BestSell">
        
    <h3 class="sub-heading">Choose Yours</h3>
    <h1 class="heading">Our Best Sellers</h1>
    <div class="box-container">
    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="images/white.png" alt="">
        <h3>The White Monster</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <span>12.00DT</span>
        <a href="#order" class="btn">Add to cart</a>
    </div>

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="images/38df0f7d-c4bf-4d19-ae38-73dbd1f07b6f.png " alt="">
        <h3>The Strawberry Dreams </h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <span>14.50DT</span>
        <a href="#order" class="btn">Add to cart</a>
    </div>

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="images/d9229f7a-7d32-4ad9-8ee8-df40b58cde7b.png " alt="">
        <h3>The Mango Loco</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <span>16.00DT</span>
        <a href="#order" class="btn">Add to cart</a>
    </div>
    
    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="images/f6dadd8b-12d1-4318-9167-1b83e9caa9c9.png " alt="">
        <h3>The ORIGINAL Monster</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <span>10.99DT</span>
        <a href="#order" class="btn">Add to cart</a>
    </div>

    

</div>

</section>

<section class="about" id="about">

    <h3 class="sub-heading">ABOUT US</h3>
    <h1 class="heading">Why Choose Us?</h1>
    <div class="row">
       <div class="image">
        <img src="images/aboutusmonster.png" alt="">
       </div>
       <div class="content">
        <h3>Best Energy Drink in the World</h3>
        <p>Monster Energy is an energy drink that was created by Hansen Natural Company in April 2002. As of 2022, Monster Energy had a 30.1% share of the American energy drink market.</p>
        <p>Our company was originally founded as Hansen's in 1935 in Southern California, originally selling juice products. The company renamed itself as Monster Beverage in 2012, and then sold their Hansen's juices and sodas and their other non-energy drink brands to the Coca-Cola Company in 2015.</p>
        <div class="icons-container">
            <div class="icons">
               <i class="fas fa-shipping-fast"></i>
               <span>Free delivery</span>
            </div>
            <div class="icons">
                <i class="fas fa-headset"></i>
                <span>24/7 service</span>
             </div>
        </div>
        
       </div>
    </div>

</section>

<section class="products" id="products">
    <h3 class="sub-heading">OUR PRODUCTS</h3>
    <h1 class="heading">MONSTER FLAVORS</h1>
     <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/f6dadd8b-12d1-4318-9167-1b83e9caa9c9.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Original Monster</h3>
                <p>Tear into a can of one of the meanest energy drinks on the planet, Monster OG. Monster Energy OG is a smooth, refreshing blend of sweet and salty exotic citrus flavors with a hint of pure adrenaline packing 160mg of caffeine. 
                Unleash the beast with Monster OG!</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">10.99DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/monsteroriginalzar9a.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The original LO-CARB Monster</h3>
                <p>Monster Energy Lo-Carb packs a powerful punch and has a smooth, easy drinking flavor, but without glucose. Get the big bad Monster buzz you know and love, but with a sweet & salty citrus twist with a fraction of the carbohydrates and only 
                30 calories per can and with 140mg of Caffeine.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">13.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/monsteroriginalhamra.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Reserve Kiwi Strawberry Monster</h3>
                <p>Monster Reserve Kiwi-Strawberry is our take on a classic fruity mixture that everyone has come to know and love. When sweet meets citrus this delicious fruity blend comes to life. Energy drinkers who are looking for flavor but still want that Monster Energy punch; 
                look no further.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.99DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/monsteroriginalsafra.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The White Pineapple Monster</h3>
                <p>Monster Reserve White Pineapple is the ideal combo of the right ingredients to deliver the Big Bad Buzz that only Monster can. Monster Reserve White Pineapple gives you an authentic pineapple taste combined
                 with the same powerful Monster Energy blend.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.99DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/monsteroriginalhamra2.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Watermelon Monster</h3>
                <p>Monster Reserve Watermelon is the ideal combo of the right ingredients in the right proportion to deliver the Big Bad Buzz that only Monster can. Monster Reserve Watermelon gives you an authentic watermelon taste combined
                 with the same powerful Monster Energy blend.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.99DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/monsteroriginalorange.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Nitro Cosmic Peach Monster</h3>
                <p>Monster Nitro Cosmic Peach is infused with nitrous oxide creating a smooth, creamy texture with a bold delicious taste of peach balanced with undertones of sweet and crisp pear. The universe is saying it’s unlike any energy drink you have ever 
                had before and guaranteed to blow your mind on cosmic level.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">10.99DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/monsteroriginaldragon.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>The Super-Premium Monster</h3>
                <p>Monster Energy Import is our Super-premium resealable Monster originally imported from Amsterdam. Now made in the USA , Import has the same can, same great taste, same winning formula and packs 
                a punch with 180mg of caffeine to deliver the big, bad buzz.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">16.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/monstermillitaire.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Monster Assault</h3>
                <p>Monster Assault is a revolution in a can. Refreshing; like a soft drink but loaded with the same energy blend that makes Monster the meanest energy drink on the planet. Assault packs 
                a punch with 160mg of caffeine and has a smooth, easy Bourbon-Cola flavor.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.75DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/white.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The White Ultra Monster</h3>
                <p>The light, refreshing citrus flavor of Zero Ultra has broken the rules of flavor. 10 calories, zero sugar, 
                and a full load of our Monster Energy blend to keep the good times rolling.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">12.00DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/peachmonster.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Peach Monster</h3>
                <p>Zro Sugar Ultra Peachy Keen has just 10 calories and a full load of our Monster Energy blend. 
                The juicy peach flavor will send you back to the summer of love.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">16.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/38df0f7d-c4bf-4d19-ae38-73dbd1f07b6f.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Strawberry Dreams</h3>
                <p>Take just one sip and you'll be crazy for Ultra Strawberry Dreams. Wonderfully sweet, while slightly tart, this easy-drinking Ultra tastes like a dream. Packed with the Monster Energy blend you love, 
                with just 10 calories and zero sugar.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.50DT</span>
            </div>
        </div>



        <div class="box">
            <div class="image">
                <img src="images/ultamango.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Ultra Mango Monster</h3>
                <p>Ultra Fiesta has a juicy mango flavor, zero sugar, 
                and is finished-off with a full load of our Monster Energy blend. </p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/ultraparadise.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Ultra Paradise Monster</h3>
                <p>Ultra Paradise is wherever you can find it. Delivering island flavors with kiwi, lime, and a hint of cucumber, 
                with just 10 calories and zero suga.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/ultrabunribe.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Ultra Sunrise Monster</h3>
                <p>Ultra Sunrise's zero sugar orange blend is great morning or night. Zero sugar, 10 calories, and with a light, crisp, 
                and refreshing flavor all its own.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/ultragold.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Ultra Gold Monster</h3>
                <p>Ultra Gold has the heavenly fresh flavor of a perfectly ripened golden pineapple. Zero Sugar, 10 calories, lighter tasting,
                and with our Monster Energy blend.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/ultrawatermelon.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Ultra Watermelon Monster</h3>
                <p>Ultra Watermelon brings you summer all year long. Zero sugar, bold watermelon flavor, 
                10 calories and the Monster Energy blend.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/javamonsterlowla.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Mean Bean Java Monster</h3>
                <p>It's time to break your coffee routine with Java Monster. Mean Bean is coffee + cream in an indulgent vanilla flavor. Java Monster… premium coffee and cream 
                brewed up with killer flavor, supercharged with Monster energy blend.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">15.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/cafelattemonster.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Coffe Latte Monster</h3>
                <p>Java Monster Café Latte is coffee forward with the right amount of cream and sugar,
                 supercharged with the Monster Energy blend.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">15.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/irishmonster.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Irish Blend Monster</h3>
                <p>There's nothing better than starting your day with an Irish Coffee. Java Monster Irish blend is 
                premium coffee + cream supercharged with the Monster Energy blend.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">15.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/locamoca.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Java LOCA MOCA Monster</h3>
                <p>It's time to break your coffee routine with Java Monster. Loca Moca is coffee + cream in an indulgent mocha chocolate flavor. Java Monster… premium coffee and 
                cream brewed up with killer flavor, supercharged with Monster energy blend.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">15.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/d9229f7a-7d32-4ad9-8ee8-df40b58cde7b.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Mango Loco Juice Monster</h3>
                <p>A heavenly blend of carbonated exotic juices, Mango Loco has that crazy 
                good taste with that Monster magic to keep the party going for days.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.99DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/tropicalmonster.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Tropical Juice Monster</h3>
                <p>Born in '05, this carbonated orange-citrus juice changed the game. Reborn in 2021 to lighten the flavor and adjust the blend, Khaos became Khaotic with an 
                upgraded paint job by legendary street artist and longtime Monster Energy.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.99DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/lemonadejuice.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Lemonade Juice Monster</h3>
                <p>Inspired by the land down under and powered by our world-famous Monster Energy blend, Aussie Style Lemonade is a carbonated exotic twist on lemonade. 
                Tart yet sweet, with a burst of fresh citrus flavor.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.99DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/pipelinejuice.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Pipeline Juice Monster</h3>
                <p>Like the Banzai Pipeline of Oahu, Pipeline Punch was destined to become a legend. The perfect 
                carbonated blend of passion fruit, orange, guava, and our Monster Energy blend.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.99DT</span>
            </div>
        </div>



        <div class="box">
            <div class="image">
                <img src="images/papilonjuice.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Papillon Juice Monster</h3>
                <p>Inspired by the theory of the butterfly effect, Juice Monster Papillon was named for the humble butterfly. Refreshingly carbonated with a light, subtle flavor of peach and nectarine, 
                and a full load of our Monster Energy blend.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">14.99DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rehab1rose.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h3>The Rehab Wild Berry Monster</h3>
                <p>Wild Berry Tea packed with electrolytes, vitamins, and botanicals that deliver on advanced hydration helping you reduce fatigue and increase concentration. 
                Rehab Monster Wild Berry Tea is non-carbonated, with only 25 calories per can.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">16.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rehabsafra.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Rehab Monster Tea & Lemonade</h3>
                <p>Brewed Tea and Lemonade packed with electrolytes, vitamins, and botanicals that deliver on advanced hydration helping you reduce fatigue and increase 
                concentration. Rehab Monster Tea + Lemonade is non-carbonated, with only 25 calories per can.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">16.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rehabwatermelon.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Rehab Watermelon Monster</h3>
                <p>Brewed Tea and Lemonade packed with electrolytes, vitamins, and botanicals that deliver on advanced hydration helping you reduce fatigue and increase 
                concentration. Rehab Monster Tea + Lemonade is non-carbonated, with only</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">16.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rehabhamra.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Rehab Strawberry Monster</h3>
                <p>Strawberry Lemonade packed with electrolytes, vitamins, and botanicals that deliver on advanced hydration helping you reduce fatigue and increase concentration. Rehab Monster 
                Strawberry Lemonade is non-carbonated, with only 25 calories per can.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">16.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rehaborange.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The Rehab Orange Monster</h3>
                <p>Orange Rehab packed with electrolytes, vitamins, and botanicals that deliver on advanced hydration helping you reduce fatigue and increase concentration. Rehab Monster 
                Orange is non-carbonated, with only 25 calories per can.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">16.50DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/bluegym.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The HYDRO Blue Ice Monster</h3>
                <p>Energy Water Blue Ice is a foundational, refreshing and revitalizing non-carbonated, easy drinking beverage. It provides 110 calories and the crisp, blue raspberry flavor makes the 150mg caffeine and electrolytes go down smooth. Also features B-Vitamins and comes in a handy, 20oz, sport-grip, resealable bottle. Advanced 
                    Hydration // Electrolytes // 150mg Caffeine // Natural Flavors // B Vitamins</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">24.00DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/rosegym.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The HYDRO Pink Ice Monster</h3>
                <p>Energy Water Pink Ice is a foundational, refreshing and revitalizing non-carbonated, easy drinking beverage. It provides 110 calories and the crisp, blue raspberry flavor makes the 150mg caffeine and electrolytes go down smooth. Also features B-Vitamins and comes in a handy, 20oz, sport-grip, resealable bottle. Advanced 
                Hydration // Electrolytes // 150mg Caffeine // Natural Flavors // B Vitamins</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">24.00DT</span>
            </div>
        </div>




        <div class="box">
            <div class="image">
                <img src="images/redgym .png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>The HYDRO Red Ice</h3>
                <p>Energy Water Red Ice is a foundational, refreshing and revitalizing non-carbonated, easy drinking beverage. It provides 110 calories and the crisp, blue raspberry flavor makes the 150mg caffeine and electrolytes go down smooth. Also features B-Vitamins and comes in a handy, 20oz, sport-grip, resealable bottle. Advanced 
                Hydration // Electrolytes // 150mg Caffeine // Natural Flavors // B Vitamins</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">24.00DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/cans1.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>PACK ORIGINAL MONSTER</h3>
                <p>BIG BAD BUZZ | With 160mg of Caffeine in a “Monster” 16 ounce can, Monster Energy offers more for less when compared with other 8.3 ounce energy drink<br>
                STOCK UP WITH A 15 PACK | For those looking for a powerful and edgy energy drink to stay in action, Monster Energy is Available in a convenient pack of 15.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">29.99DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/cans2.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>PACK JUICE MONSTER</h3>
                <p>BIG BAD BUZZ | With 160mg of Caffeine in a “Monster” 16 ounce can, Monster Energy offers more for less when compared with other 8.3 ounce energy drink<br>
                    STOCK UP WITH A 15 PACK | For those looking for a powerful and edgy energy drink to stay in action, Monster Energy is Available in a convenient pack of 15.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">35.00DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/cans3.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>PACK WHITE MONSTER</h3>
                <p>BIG BAD BUZZ | With 160mg of Caffeine in a “Monster” 16 ounce can, Monster Energy offers more for less when compared with other 8.3 ounce energy drink<br>
                    STOCK UP WITH A 15 PACK | For those looking for a powerful and edgy energy drink to stay in action, Monster Energy is Available in a convenient pack of 15.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">35.00DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/cans4.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>PACK PARADISE MONSTER</h3>
                <p>BIG BAD BUZZ | With 160mg of Caffeine in a “Monster” 16 ounce can, Monster Energy offers more for less when compared with other 8.3 ounce energy drink<br>
                    STOCK UP WITH A 15 PACK | For those looking for a powerful and edgy energy drink to stay in action, Monster Energy is Available in a convenient pack of 15.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">35.00DT</span>
            </div>
        </div>




        
        <div class="box">
            <div class="image">
                <img src="images/cans6.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>PACK ORANGE MONSTER</h3>
                <p>BIG BAD BUZZ | With 160mg of Caffeine in a “Monster” 16 ounce can, Monster Energy offers more for less when compared with other 8.3 ounce energy drink<br>
                    STOCK UP WITH A 15 PACK | For those looking for a powerful and edgy energy drink to stay in action, Monster Energy is Available in a convenient pack of 15.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">35.00DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/cans7.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>PACK ULTRA BLACK MONSTER</h3>
                <p>BIG BAD BUZZ | With 160mg of Caffeine in a “Monster” 16 ounce can, Monster Energy offers more for less when compared with other 8.3 ounce energy drink<br>
                    STOCK UP WITH A 15 PACK | For those looking for a powerful and edgy energy drink to stay in action, Monster Energy is Available in a convenient pack of 15.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">35.00DT</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/cans8.png" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>PACK ULTA VIOLET MONSTER</h3>
                <p>BIG BAD BUZZ | With 160mg of Caffeine in a “Monster” 16 ounce can, Monster Energy offers more for less when compared with other 8.3 ounce energy drink<br>
                    STOCK UP WITH A 15 PACK | For those looking for a powerful and edgy energy drink to stay in action, Monster Energy is Available in a convenient pack of 15.</p>
                <a href="#order" class="btn">Add to cart</a>
                <span class="pice">35.00DT</span>
            </div>
        </div>

        


       

       

        
     </div>

</section>



<section class="reviews" id="reviews">
    <h3 class="sub-heading">Customer's reviews</h3> 
<h1 class="heading">The comments</h1>
<div class=" swiper-contriner reviews-slider"><!--Cela indique qu'il sera utilisé comme conteneur pour le carrousel Swiper-->
    <div class="swiper-wrapper">
        <div class="swiper-slide slide">
            <i class="fas fa-quote-rigth"></i>
            <div class="user">
                <img src="images/mra.png" alt="">
                <div class="user-info">
                    <h3> nadia ben salah </h3>
                    <div class="stars">
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star"></i>
											<i class="fas fa-star-half-alt"></i>
										</div>
                </div>
            </div>
            <p>I love Monster drinks! They give me the energy I need to stay productive throughout the day. </p>
        </div>
				<div class="swiper-slide slide">
					<i class="fas fa-quote-rigth"></i><!--Elle indique le début d'un commentaire-->
					<div class="user"><!--contient les informations de l'utilisateur-->
						<img src="images/homme.jpg.png.png" alt=""><!--src = le chemin de l'image, alt=contenir une description alternative pour l'image.-->
						<div class="user-info"><!--les informations détaillées de l'utilisateur-->
								<h3> salah manai</h3>
								<div class="stars">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star-half-alt"></i>
								</div>
						</div>
					</div>
					<p>Monster Energy is my ideal workout companion.It gives me that extra boost I need during training sessions.</p>
				</div>
				<div class="swiper-slide slide">
					<i class="fas fa-quote-rigth"></i>
					<div class="user">
							<img src="images/mra2.png" alt="">
							<div class="user-info">
									<h3> mariem hammemi</h3>
									<div class="stars">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half-alt"></i>
								</div>
							</div>
					</div>
					<p> The diversity of Monster products allowed me to find my favorite flavor. 
			It's great to see a company that offers so many choices.</p>
			</div>
    </div>
</div>
</section>
<!--order-->
<section class="order" id="order">
    <h3 class="sub-heding"> order now</h3>
    <h1 class="heading">  free and fast</h1>
    <form action="">
        <div class="inputBox">
            <div class="input">
                <span> your full name</span>
                <input type="text" placeholder="enter your name">

            </div>
			<div class="input">
                <span> your adress email</span>
                <input type="email" placeholder="enter your email">

            </div>
            
                <div class="input">
                    <span> your number</span>
                    <input type="number" placeholder="enter your number">
                    
                </div>
				<div class="input">
                <span> do you want full pack</span>
                <input type="radio" id="yes" name="yes" value="yes">
				<label for="yes"><span>Yes</span></label><br>
                <input type="radio" id="no" name="yes" value="no">
				<label for="no"><span>No</span></label><br>

                </div>
				
				<div class="input">
				<span> in case yes</span>
				<label for="packs"><span>Choose a pack:</span></label>
				<select id="packs">
                <option value="PACK ORIGINAL MONSTER">PACK ORIGINAL MONSTER</option>
                <option value="PACK JUICE MONSTER">PACK JUICE MONSTER</option>
                <option value="PACK PARADISE MONSTER">PACK PARADISE MONSTER</option>
                <option value="PACK WHITE MONSTER">PACK WHITE MONSTER</option>
				 <option value="PACK ORANGE MONSTER">PACK ORANGE MONSTER</option>
				  <option value="PACK ULTRA VIOLET MONSTER">PACK ULTRA VIOLET MONSTER</option>
				   <option value="PACK ULTRA BLACK MONSTER">PACK ULTRA BLACK MONSTER</option>
                </select>
                 
				</div>
			
			  
                <div class="inputBox">
                    <div class="input">
                        
						<label for="orders"><span>Your order</span></label><br />
                                <select name="listeflavour" id="listeflavour">
                                <optgroup label="Classic Monster">
                                <option value="The Original Monster">The Original Monster</option>
                                <option value="The original LO-CARB Monster">The original LO-CARB Monster</option>
                                <option value="The Reserve Kiwi Strawberry Monster">The Reserve Kiwi Strawberry Monster</option>
								<option value="The White Pineapple Monster">The White Pineapple Monster</option>
                                </optgroup>
                                <optgroup label="Extra Monster">
                                <option value="The Watermelon Monster">The Watermelon Monster</option>
                                <option value="The Nitro Cosmic Peach Monster">The Nitro Cosmic Peach Monster</option>
                                <option value="The Super-Premium Monster">The Super-Premium Monster</option>
								<option value="The Monster Assault">The Monster Assault</option>
								<option value="The Peach Monster">The Peach Monster</option>
								<option value="The Strawberry Dreams">The Strawberry Dreams</option>
                                </optgroup>
                                <optgroup label="Ultra Monster">
                                <option value="The White Ultra Monster">The White Ultra Monster</option>
                                <option value="The Ultra Mango Monster">The Ultra Mango Monster</option>
                                <option value="The Ultra Paradise Monster">The Ultra Paradise Monster</option>
								<option value="The Ultra Sunrise Monster">The Ultra Sunrise Monster</option>
								<option value="The Ultra Gold Monster">The Ultra Gold Monster</option>
								<option value="The Ultra Watermelon Monster">The Ultra Watermelon Monster</option>
                                </optgroup>
								<optgroup label="Juice Monster">
                                <option value="The Mango Loco Juice Monster">The Mango Loco Juice Monster</option>
                                <option value="The Tropical Juice Monster">The Tropical Juice Monster</option>
                                <option value="The Lemonade Juice Monster">The Lemonade Juice Monster</option>
								<option value="The Pipeline Juice Monster">The Pipeline Juice Monster</option>
								<option value="The Papillon Juice Monster">The Papillon Juice Monster</option>
                                </optgroup>
								<optgroup label="Java Monster">
								<option value="The Mean Bean Java Monster">The Mean Bean Java Monster</option>
                                <option value="The Coffee Latte Monster">The Coffe Latte Monster</option>
                                <option value="The Irish Blend Monster">The Irish Blend Monster</option>
								<option value="The Java LOCA MOCA Monster">The Java LOCA MOCA Monster</option>
                                </optgroup>
								<optgroup label="Rehab Monster">
								<option value="The Rehab Wild Berry Monster">The Rehab Wild Berry Monster</option>
                                <option value="The Rehab Monster Tea & Lemonade">The Rehab Monster Tea & Lemonade</option>
                                <option value="The Rehab Watermelon Monster">The Rehab Watermelon Monster</option>
								<option value="The Rehab Strawberry Monster">The Rehab Strawberry Monster</option>
								<option value="The Rehab Orange Monster">The Rehab Orange Monster</option>
                                </optgroup>
								<optgroup label="HYDRO Monster">
								<option value="The HYDRO Blue Ice Monster">The HYDRO Blue Ice Monster</option>
                                <option value="The HYDRO Pink Ice Monster">The HYDRO Pink Ice MonsterThe HYDRO Red Ice</option>
                                <option value="The HYDRO Red Ice">The HYDRO Red Ice</option>
                                </optgroup>
                                </select>
        
                    </div>
                        <div class="input">
                            <span> additionnel enery drink</span>
                            <input type="test" placeholder="extra with energy drink">
                            
                        </div>
                        </div>
                            <div class="inputBox">
                                <div class="input">
                                <span> how much</span>
                                <input type="number" placeholder="how many orders " id="quantity" min="0" max="11">
                
                            </div>
                                <div class="input">
                                    <span> date and time</span>
                                    <input type="datetime-local">
                                    
                                </div>
                                <div class="inputBox">
                                    <div class="input">
                                        <span> your address</span>
                                        <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
                        
                                    </div>
                                        <div class="input">
                                            <span> your message</span>
                                            <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                                            
                                        </div>
        
        <input type="submit" value="order now" class="btn">

         <div><span>Your total : 14DT</span><div>

    </form>
</section>
<!--cart-->

<script src="js\monster.js"></script>



<section class="footer">

   <div class="box-container">
    <div class="box">
        <h3>Locations</h3>
        <a href="https://aecor.tn/en/shop/monster-energy-zero-ultra-sugar-free-energy-drink-500ml-9672#attr=">Tunisia</a>
        <a href="#">France</a>
        <a href="#">Japan</a>
        <a href="#">Russia</a>
        <a href="#">Korea</a>

    </div>

    <div class="box">
        <h3>Quick Links</h3>
        <a href="#">home</a>
        <a href="#BestSell">BestSell</a>
        <a href="#about">about</a>
        <a href="#products">products</a>
        <a href="#reviews">reviews</a>
        <a href="#order">Order</a>

    </div>

    <div class="box">
        <h3>Contact Info</h3>
        <a href="#">+216-274-043-48</a>
        <a href="#">+216-274-043-49</a>
        <a href="mailto:nouraneaaab@gmail.com">nouraneaaab@gmail.com</a>
        <a href="mailto:farah.khalledi@esen.tn">iheb.becha@esen.tn</a>
        <a href="https://www.google.com/maps/place/Manouba/@36.8099171,10.0570605,14z/data=!3m1!4b1!4m6!3m5!1s0x12fd326a6997b651:0xae1949b938bf5487!8m2!3d36.8093284!4d10.0863269!16zL20vMGI0ZmI3?entry=ttu">Tunis,Tunisia - Manouba 2011</a>
        

    </div>

    <div class="box">
        <h3>Follow Us</h3>
        <a href="https://www.facebook.com/MonsterEnergy">Facebook</a>
        <a href="https://twitter.com/MonsterEnergy">Twitter</a>
        <a href="https://www.instagram.com/monsterenergy/">Instagram</a>
        <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2Fmonsterenergy%2F%3Ffbclid%3DIwAR0tu0kw5-ScOOfDrVN70cv6jfRqrfG4HG_tOvYgnEpjizpnrRtVysoRzmQ&h=AT0l966MrEVWL_M6sawI-HAa5H1vE5_mvnywzyUIn2eKMRzSuE849nzbArbXE7RvfQqI41hFJyOMIe3zLbH37Gg-tKwiCAmbMlnVXUfs70z2rXctdV-6kcuETKaczvDuvLBsxg">LinkedIn</a>

    </div>
    
    <div class="credit"> Site realise par<br><span>Nourane Abda Groupe 1 L2 E-BUS & Iheb Becha Groupe 1 L2 E-BUS</span></div>


   </div>







</section>







<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/script2.js"></script>
</body>


</html>