<?php
  $page_id = 'eat_and_drink';
  $page_title = 'Eat/Drink';
  require 'inc/top.inc.php';
?>

<script type="text/javascript" charset="utf-8">
  $(function(){
    vendorPopups();
    new ElementPositioner({ elements : $('#vendor_posters li'), cssPrefix : '#vendor_posters ' });
  })
</script>

<section id="vendors">

  <ul id="vendor_posters" class="filter_container">
    <!-- <li id="selector" class="filters nofilter">
      <span class="filter" data-filter-to="eat">Eat</span>
      <span class="filter" data-filter-to="drink">Drink</span>
    </li> -->
    <li class="no_effects nofilter" id="scavenger_hunt"><a href="http://www.thegogame.com/streetfood/home.asp"></a></li>
    <li class="no_effects nofilter" id="get_your_passports"><a href="http://sfstreetfoodfestivalpassport.eventbrite.com/"><img src="images/get_your_passports.png" alt="Get Your Passports" /></a></li>
    
    
    <li class="" id="namu" height="125" width="125">
		  <img class="logo" src="images/vendor_logos/namu.png" width="125" height="125" alt="Namu">
      <div class="payload"><div class="inner"><h1>Namu</h1><p>Namu is an intimate neighborhood restaurant brought to you by three Korean American brothers and their close knit Namu family.</p></div></div>
		</li>
    <li class="" id="kikas_treats">
			<img class="logo" src="images/vendor_logos/kikas_treats.png" width="125" height="125" alt="Blue Bottle Coffee">
      <div class="payload"><div class="inner"><h1>Kika&#x27;s Treats</h1><p>Cristina Besher&#x27;s love for pastry led her to Kika&#x27;s Treats. Now the proud owner of factory space, she&#x27;s made room for other new businesses, like Sweet Revolution. And all of us thank god. </p></div></div>
		</li>
		<li class="teal" id="blue_bottle">
			<img class="logo" src="images/vendor_logos/blue_bottle.png" width="125" height="158" alt="Blue Bottle Coffee">
			<div class="payload"><div class="inner"><h1>Blue Bottle Coffee</h1><p>In 2002, in Oakland, California, a slightly disaffected freelance musician and coffee lunatic, weary of the grande eggnog latte and the double skim pumpkin-pie macchiato decides to open a roaster for people who are clamoring for the actual taste of freshly roasted coffee. Using a miniscule six-pound batch roaster, he makes an historic vow: &ldquo;I will only sell coffee less than 48 hours out of the roaster to my customers, so they may enjoy coffee at its peak of flavor. I will only use the finest organic, and pesticide-free, shade-grown beans.&rdquo; In honor of Kolshitsky&rsquo;s heroics, he names his business The Blue Bottle Coffee Company, and begins another chapter in the history of superlative coffee.</p></div></div>
		</li>
		<li class="red" id="meats_4505">
			<img class="logo" src="images/vendor_logos/4505_meats.png" height="123" width="125" alt="4505 Meats">
    </li>
		<li class="yellow" id="curry_up_now">
			<img class="logo" src="images/vendor_logos/curry_up_now.png" height="123" width="125" alt="Curry Up Now">
      <div class="payload"><div class="inner"><h1>Curry up now</h1><p>CurryUpNow-The Bay Area&rsquo;s first Indian Street Food on a Mobile Truck is inspired from street foods in India and Indian foods popular in other parts of the world.  We aim to bring the street foods of Chandni Chowk, Old Delhi, Chowpatty, Mumbai, New Market, Kolkatta, elite boarding school (Sem, Sherwood, Sonn &amp; All Saints) town of Nainital, Uttarkhand to you, on our truck.  The food we are serving are foods that we have grown up eating and; we hope you like the food as much as we do.</p></div></div>
    </li>
		<li class="" id="el_huarache_loco">
			<img class="logo" src="images/vendor_logos/el_huarache_loco.png" height="89" width="125" alt="El Huarache Loco">
      <div class="payload"><div class="inner"><h1>El Huarache Loco</h1><p>Growing up in the kitchen of her family&rsquo;s Mexico City restaurant, Veronica Salazar knew from an early age that food was her passion.  After moving to the U.S. to pursue her dream Veronica found work in restaurants during the week, and spent her weekends doing what she loved most: cooking the food she grew up with in Mexico City. Before long, Veronica found herself cooking for friends and family all weekend, sometimes serving as many as 40 people in her home. With her sights set on transforming her hobby into a self-sustaining career, Veronica enrolled in La Cocina&rsquo;s incubator program and, in 2005, launched El Huarache Loco.  Today El Huarache thrives as one of La Cocina&rsquo;s most successful businesses.  You can find Veronica doling out her beloved huaraches, mixiotes and cactus salad every Saturday at the Alemany and Marin Farmer&rsquo;s Market and Off the Grid Fort Mason. During fall, she will open a brick-and-mortar version of her Alemany outpost at the Marin Country Mart in Larkspur Landing.</p></div></div>
    </li>
		<li class="" id="kasa">
			<img class="logo" src="images/vendor_logos/kasa.png" height="126" width="125" alt="Kasa">
      <div class="payload"><div class="inner"><h1>Kasa</h1><p>My name is Anamika Khanna, co-owner and executive chef at Kasa.  I was born and raised in Hounslow, an infamous Indian enclave in West London, and spent much of my childhood in boarding school outside Mumbai.</p></div></div>
    </li>
		<li class="peach" id="azalinas">
			<img class="logo" src="images/vendor_logos/azalinas.png" height="125" width="125" alt="Azalinas">
      <div class="payload"><div class="inner"><h1>Azalina&#x27;s Malaysian</h1><p>Azalina was born in a tribal village in Malaysia, where her parents grew spices like cinnamon, star anise, and cardamom in their backyard. Pursuing her longtime love for cooking, Azalina eventually decided to train as a chef. When she moved to San Francisco, Azalina began to reinvent some of her favorite dishes. So many of her friends loved her food that she began selling it at the Alemany Farmers Market. A year later, she began the program at La Cocina.  She recently launched her own line of three traditional Malaysian simmer sauces and has plans to expand her line in the future. Her current line of sauces can be found at various Whole Foods locations in the Bay Area. All curry simmer sauces are vegetarian allowing people to add the meat of choice, if desired.</p></div></div>
    </li>
		<li class="green" id="bi_rite_creamery">
			<img class="logo" src="images/vendor_logos/bi_rite_creamery.png" height="86" width="199" alt="Bi Rite Creamery">
    </li>
		<li class="" id="delicias_salvadorenas">
			<img class="logo" src="images/vendor_logos/delicias_salvadorenas.png" height="167" width="125" alt="Delicias Salvadorenas">
      <div class="payload"><div class="inner"><h1>Delicias Salvadorenas</h1><p>As a child, Patricia Rodriguez was always covered in flour as part of a proud lineage of bakers in El Salvador.  She knew she wanted to share the love and history of these traditional breads and pastries.  Patricia&rsquo;s company,  Delicias Salvadorenas is her commitment to this hand-made history.   You can sample some of her specialties like Semita de Pina, a whole wheat pastry seasoned with cinnamon wraps and freshly made pineapple jam at the San Ramon Farmers Market.  Her pastries are also available for purchase bulk for resale at bakeries and grocery stores as well as directly for events.</p></div></div>
    </li>
		<li class="" id="love_and_hummus">
			<img class="logo" src="images/vendor_logos/love_and_hummus.png" height="155" width="125" alt="Love And Hummus">
      <div class="payload"><div class="inner"><h1>Love &amp; Hummus Co.</h1><p>When Donna Sky, a busy working mother, couldn&rsquo;t find store bought hummus that met her high expectations, an idea was born: The Love and Hummus Company. Donna started her San Francisco-based, artisan food company to bring you delicious hummus that is organic, lovingly handmade, and scooped into earth-friendly packaging. Find Love and Hummus&#x27; tasty varieties in Whole Foods across the Bay Area, Rainbow store at select local retailers, and online.</p></div></div>
    </li>
		<li class="yellow" id="neococoa">
			<img class="logo" src="images/vendor_logos/neococoa.png" height="86" width="199" alt="Neococoa">
      <div class="payload"><div class="inner"><h1>Neo Cocoa</h1><p>While wondering what she&rsquo;d be when she grew up, Christine Doerr found herself watching a lot of Julia Child.  So following her idol&rsquo;s footsteps, she attended the California Culinary Academy, where she perfected her craft during her more than 10 years of working in multiple establishments in the Bay Area. When Christine&rsquo;s long-held dream of creating her own business to sell chocolate truffles using fresh, local, organic ingredients came knocking at the door, Christine answered, and Neo Cocoa was born.  You can try her new addition, Cool Peppermint Chocolate Truffles by ordering online through her website or purchasing her delicious truffles at Wholes Food, Bi-rite and other stores in the Bay area.</p></div></div>
    </li>
		<li class="teal" id="kung_fu_tacos">
			<img class="logo" src="images/vendor_logos/kung_fu_tacos.png" height="81" width="220" alt="Kun Fu Tacos">
      <div class="payload"><div class="inner"><h1>Kung Fu Tacos</h1><p>Kung Fu Tacos was started in August of 2009 by Jonathan Ward and Tan Truong. Jonathan has been recently laid off from the tech industry and Tan was running a dessert and wine bar at the time. They both were interested in the food truck movement heating up in LA and thought that they could help bring the same level of excitement to the Bay Area. I have always loved the traditional taco trucks that have been servicing the Mission District for years. To me they are still one of the best deals and best food you can find in the city. Street Food Fest marks our one year anniversary of providing our brand of street food to the Bay Area.</p></div></div>
    </li>
		<li class="yellow" id="pizzeria_delfina">
			<img class="logo" src="images/vendor_logos/pizzeria_delfina.png" height="88" width="168" alt="Pizzeria Delfina">
      <div class="payload"><div class="inner"><h1>Delfina</h1><p>Even though we make Italian food, most of us are straightup Midwest kids from Minneapolis, where every year close to 2million people attend the State Fair and consume Corndogs, Cheese Curds, Turkey Legs, and Anything-Else-On-A-Stick in epic quantities. Being American cooks, our diets tend to rely heavily on Tacos, Banh Mi, Hot Dogs, and drinking &quot;&quot;Street Beers&quot;&quot;. &amp; being serious about cooking Italian food, we&#x27;re naturally infatuated with the Naples street food culture of Tripe Carts, Fried Calzone, Sfogliatelle, and Gelato. We&#x27;ve been making pizza and deep-frying as much as possible here in SF for 6 years now.</p></div></div>
    </li>
		<li class="" id="hapa_sf">
			<img class="logo" src="images/vendor_logos/hapa_sf.png" height="126" width="125" alt="Hapa Sf">
    </li>
		<li class="teal" id="southern_sandwich_co">
			<img class="logo" src="images/vendor_logos/southern_sandwich_co.png" height="125" width="125" alt="Souther Sandwich Co">
    </li>
		<li class="peach" id="creme_brulee_cart">
			<img class="logo" src="images/vendor_logos/creme_brulee_cart.png" height="125" width="125" alt="Creme Brulee Cart">
      <div class="payload"><div class="inner"><h1>Cr&egrave;me Brulee Cart</h1><p>Curtis is the man and the legend. The veritable great-uncle of the SF Cart Movement and as much an enigma as an icon. You can find him here, on the streets of SF and, now, in Whole Foods Markets. </p></div></div>
    </li>
		<li class="yellow" id="zepeda">
			<img class="logo" src="images/vendor_logos/zepeda.png" height="125" width="186" alt="Zepeda">
    </li>
		<li class="green" id="an_da_piroshki">
			<img class="logo" src="images/vendor_logos/an_da_piroshki.png" height="125" width="125" alt="An Da Piroshki">
      <div class="payload"><div class="inner"><h1>Anda Piroshki</h1><p>Anna is from Russia and It was her Russian mom who taught her how to cook piroshki and she learnt it from her mom!  In Anda Piroshki each matryoshka also represents one of the main food groups: grains, Fruit, Vegetables and Protein! According to Anna, &quot;&quot;I cook traditional russian piroshki using healthy ingredients and healthy cooking techniques because I want myself and people I love (my family, my customers, my friends) to be healthy and happy enjoying delicious festivity of life.&quot;&quot; A_DA PiROSHKi recently start serving up her delicious, piping hot piroshki daily as the newest vendor at 331 Courtland.</p></div></div>
    </li>
		<li class="" id="alicias">
			<img class="logo" src="images/vendor_logos/alicias.png" height="125" width="125" alt="Alicias">
    </li>
		<li class="red" id="endless_summer_sweets">
			<img class="logo" src="images/vendor_logos/endless_summer_sweets.png" height="125" width="125" alt="Endless Summer Sweets">
      <div class="payload"><div class="inner"><h1>Endless Summer Sweets</h1><p>Antoinette Sanchez wanted to give her customers a way to revive their youth and remember the nostalgic treats of years past.  Since becoming a member of the La Cocina team, Antoinette has had her hands full providing hungry customers at the Richmond and Berkeley flea markets with classic sweets like funnel cakes, kettle corn and other freshly made goodies.  Together with her husband Carlos and daughter Mariah, Antoinette uses local, seasonal ingredients to serve delicious childhood treats year-round.</p></div></div>
    </li>
		<li class="" id="clair_squares">
			<img class="logo" src="images/vendor_logos/clair_squares.png" height="125" width="125" alt="Clair Squares">
      <div class="payload"><div class="inner"><h1>Clairesquares</h1><p>Claire started baking at the age of six as a way to satisfy her sweet tooth. After trying out different recipes of fudge, butterscotch and caramels, the combination of shortbread, caramel and chocolate was the one that stuck. A young entrepreneur in Ireland, Claire sold her treats at school and it wasn&rsquo;t long before her classmates were addicted and she was selling out every week. Years later, here in SF, she baked a batch for her friends and Claire Squares was born. Her certified Green Business is committed to making these sinful treats responsibly. You can now purchase her delectable treats at Rainbow Foodstores, WholeFoods, Bi-Rite and other differente store in the bay area.</p></div></div>
    </li>
		<li class="teal" id="big_ass_sandwiches">
			<img class="logo" src="images/vendor_logos/big_ass_sandwiches.png" height="125" width="125" alt="Big Ass Sandwiches">
    </li>
		<li class="yellow" id="los_cilantros">
			<img class="logo" src="images/vendor_logos/los_cilantros.png" height="67" width="204" alt="Los Cilantros">
    </li>
		<li class="" id="beretta">
			<img class="logo" src="images/vendor_logos/beretta.png" height="67" width="205" alt="Beretta">
    </li>
		<li class="peach" id="nombe">
			<img class="logo" src="images/vendor_logos/nombe.png" height="155" width="125" alt="Nombe">
      <div class="payload"><div class="inner"><h1>Nombe</h1><p>Nombe Izakaya has been doing Japanese street food every weekend late night, from  10PM to 1 AM, since its opening in November 2009.  However, prior to Nombe, partners  Mari Takahashi, Executive Chef, and husband Gil Payne, GM  and Sake Sommelier, participated in Mission Street Food, and have offered okonomiyaki, takoyaki, udon, oden, and other popular Japanese street food items at Nombe and their previous Izakaya, Sozai Restaurant and Sake Lounge.</p></div></div>
    </li>
		<li class="teal" id="sabores_del_sur">
			<img class="logo" src="images/vendor_logos/sabores_del_sur.png" height="125" width="125" alt="Sabores Del Sur">
      <div class="payload"><div class="inner"><h1>Sabores del Sur</h1><p>Sabores del Sur was founded in 2002, after owner Guisell Osorio decided that the only way to satisfy her craving for the South American dishes of her childhood was to prepare them herself.  Born and raised in Santiago, Chile, Osorio began collecting recipes from her grandmother and quickly discovered her hidden love and talent for cooking.  Using the diverse flavors from her childhood, Osorio has helped grow Sabores del Sur into the Bay Area&rsquo;s premier South American catering company, specializing in dishes like empanadas and alfajores.  Guisell is fluent in Spanish.</p></div></div>
    </li>
		<li class="red" id="sweets_collection">
			<img class="logo" src="images/vendor_logos/sweets_collection.png" height="125" width="125" alt="Sweets Collection">
    </li>
		<li class="" id="chaac_mool">
			<img class="logo" src="images/vendor_logos/chaac_mool.png" height="85" width="192" alt="Chaac Mool">
      <div class="payload"><div class="inner"><h1>Chaac Mool</h1><p>Chaac-Mool Yucatecan Food would love the opportunity to introduce you to traditional Mayan Cuisine. Luis Vazquez drew inspiration from the ancient god of rain to start the namesake company Chaac Mool. Vazquez, a fifth generation Yucatecan breadmaker, and his wife Maria formed the company six years ago in their small Tenderloin apartment. Chac Mool is a family run business that serves regional Mexican, indigenous and Pre-Hispanic cuisine. The Vazqueses believe that there is more to Mexican food than burritos and uses their food to bring the legends, flavors and feelings of Mexico straight to you. Currently, Chaac Mool can be found at: Dolores Park &ndash; Every day, 11-6PM , Fort Mason Center &ndash; Friday, 11-3PM, Off the Grid at Fort Mason &ndash; every Friday, 5-10PM, Mission Community Market &ndash; Thursday, 4-8PM</p></div></div>
    </li>
		<li class="" id="don_bugito">
			<img class="logo" src="images/vendor_logos/don_bugito.png" height="124" width="125" alt="Don Bugito">
      <div class="payload"><div class="inner"><h1>Don Bugito</h1><p>Don Bugito is a unique California-inspired cuisine influenced by pre-hispanic and contemporary Mexican flavors. Don Bugito is a cuisine that in based on edible insects highlighting their unique gourmet appeal. What makes Don Bugito a unique taste is the creative use of edible insects in all the menu items. All Don Bugito ingredients are raised naturally in California. </p></div></div>
    </li>
		<li class="" id="la_luna">
			<img class="logo" src="images/vendor_logos/la_luna.png" height="125" width="125" alt="La Luna">
      <div class="payload"><div class="inner"><h1>La Luna Cupcakes</h1><p>Ever since Elvia was a young girl, she became excited when she ate and savored different cakes at parties.  Her love of sweets and pastries motivated her to take pastry and decoration classes, so she could learn to mix different ingredients and create new flavors with innovative decorations.  Elvia makes cupcakes to order for all kinds of occasions in delicious and unique flavors including Tres Leches Cakes and Tiramisu.  If you want to live life to the fullest, one cupcake at a time, La Luna is a great place to start.</p></div></div>
    </li>
		<li class="peach" id="three_twins">
			<img class="logo" src="images/vendor_logos/three_twins.png" height="125" width="125" alt="Three Twins">
			<div class="payload"><div class="inner"><h1>Three Twins</h1><p>Neal Gottlieb, Three Twins Ice Cream&#x27;s founder, served as a Peace Corps Volunteer in the old city of Taroudant Morocco from 2002 &ndash; 2003. His tenure in Morocco was cut short when the war in Iraq led to the evacuation of the program.</p></div></div>
    </li>
		<li class="green" id="osha">
			<img class="logo" src="images/vendor_logos/osha.png" height="125" width="125" alt="Osha" />
    </li>
		<li class="yellow" id="maite">
			<img class="logo" src="images/vendor_logos/maite.png" height="125" width="125" alt="Maite" />
    </li>
		<li class="" id="along_came_a_spider">
			<img class="logo" src="images/vendor_logos/along_came_a_spider.png" height="125" width="125" alt="Along Came A Slider" />
    </li>
		<li class="green" id="zellas">
			<img class="logo" src="images/vendor_logos/zellas.png" height="155" width="125" alt="Zellas">
			<div class="payload"><div class="inner"><h1>Zella&#x27;s Soulful Kitchen</h1><p>It&rsquo;s said that when you&rsquo;re born you come into the world knowing exactly what you&rsquo;re supposed to do with your life. Due to numerous distractions, most of us take detours on our journeys spending quite a lot of time trying to discover our way back to that knowingness. At the young age of 8 years old, Chef Dionne Knox remembers spending most of her time in the kitchen with her grandmother, Zella, cooking meals and baking delicious desserts. Zella was a dynamic chef known for cooking everything from scratch. To ensure the best flavors in her cooking, Zella grew fresh vegetables in her garden, raised chickens for fresh eggs, made her own jam, baked bread every day and churned her own butter.</p></div></div>
    </li>
		<li class="yellow" id="liba">
			<img class="logo" src="images/vendor_logos/liba.png" height="125" width="125" alt="Liba" />
    </li>
		<li class="green" id="roli_roti">
			<img class="logo" src="images/vendor_logos/roli_roti.png" height="125" width="125" alt="Roli Roti" />
      <div class="payload"><div class="inner"><h1>Roli Roti</h1><p>The son of a Swiss &ldquo;Metzgermeister,&rdquo; or Master Butcher, Thomas literally grew up in the family&rsquo;s butcher shop in the Swiss Alps. From his father, Otto, he learned the importance of using the right cuts for the right purpose, and of choosing only meats that came from livestock pastured on open land. From his mother, Maria, he learned how to take these meats and prepare them in the perfect way for grilling on the shop&rsquo;s rotisserie, a specialty offered to customers only on Saturdays. Even though all the other butcher shops in the village also offered rotisserie, only at Metzgerei Odermatt was there a line out the door and around the corner. This is because the perfect cut with the right preparation made for an irresistable combination that others could not match. To this day, Thomas still uses his mother&rsquo;s spice rub as the basis for the seasoning of RoliRoti&rsquo;s famous grilled chicken, and in the tradition of his father, insists on the finest, sustainably-grown meats.</p></div></div>
    </li>
		<li class="" id="slanted_door">
			<img class="logo" src="images/vendor_logos/slanted_door.png" height="49" width="282" alt="Slanted Door" />
      <div class="payload"><div class="inner"><h1>Slanted Door</h1><p>Charles Phan is the visionary and executive chef of the restaurant, but he has not done it alone. There are upwards of 18 Phan siblings, cousins, aunts, nephews working with Charles, plus some 70 employees, 75% of whom have been with the restaurant from the start 7 years ago. There are numerous bright stars in the Slanted Door family constellation. </p></div></div>
    </li>
		<li class="peach" id="el_buen_comer">
			<img class="logo" src="images/vendor_logos/el_buen_comer.png" height="125" width="125" alt="El Buen Comer" />
      <div class="payload"><div class="inner"><h1>El Buen Comer</h1><p>Homestyle Mexico City cooking is at the heart of chef-owner Isabello Caudillo&rsquo;s family-owned business.  Her tacos, enchiladas, albondigas (savory meatballs), coditos con crema (a creamy pasta dish) and signature guisados (slow-cooked stew served with rice and beans) are all made from scratch using only authentic, organic ingredients.  Since moving from Mexico City to San Francisco, Isabel&rsquo;s passion for preparing the food of her childhood has blossomed from cooking for family and friends out of her kitchen, to landing externships with San Francisco restaurants like Delfina and Mijita, to her current post at the Noe Valley Farmers Market, where she has accumulated a loyal following every Saturday and on Sunday at Heart Bar, El Buen Comer transport us to her family&rsquo;s kitchen table in Mexico City.</p></div></div>
    </li>
		<li class="" id="la_mar">
			<img class="logo" src="images/vendor_logos/la_mar.png" height="125" width="125" alt="La Mar" />
    </li>
    <li id="global_soul">
			<img class="logo" src="images/vendor_logos/global_soul.png" height="49" width="282" alt="Global Soul" />
    </li>
		<li id="skillet">
			<img class="logo" src="images/vendor_logos/skillet.png" height="125" width="125" alt="Skillet" />
    </li>
		<li class="green" id="delicioso">
			<img class="logo" src="images/vendor_logos/delicioso_creperie.png" height="125" width="125" alt="Delicioso Creperie" />
    </li>
		<li id="estrellitas">
			<img class="logo" src="images/vendor_logos/estrellitas_snacks.png" height="125" width="125" alt="Estrellitas Snacks" />
    </li>
    <li class="teal" id="ingrids_lunchbox">
			<img class="logo" src="images/vendor_logos/ingrids_lunchbox.png" height="49" width="282" alt="Ingrids Lunchbox" />
    </li>
    <li class="" id="chiefos_kitchen">
			<img class="logo" src="images/vendor_logos/chiefos_kitchen.png" height="125" width="125" alt="Chiefos Kitchen" />
    </li>
    <li id="rye_on_the_road">
			<img class="logo" src="images/vendor_logos/rye_on_the_road.png" height="136" width="136" alt="Rye On The Road" />
			<div class="payload">
			  <div class="inner">
			   <h1>Rye On The Road</h1>
         <p>Jon Gasparini, Founding Partner of 15 Romolo, Rye, Rye On The Road, and Rosewood.</p>
         <p>Jon has 13 years of experience owning and operating bars with business partner, Greg Lindgren. With a degree in design, Jon had a successful early career as both a graphic designer and art director, and he produces or oversees all design materials for the bars.</p>
         <p>His talent behind the bar lends to consulting work with Grupo Campari, Jim Beam Global, and the entire SKYY Spirits Portfolio to name a few. His original cocktails have been featured in numerous publications such as 7x7, Men's Journal, San Francisco Chronicle, Sunset Magazine, Where Magazine, and Southwest Airlines Spirit Magazine.</p>
         <p>Jon works in his bars as a managing partner, placing special attention on cultivating a great customer experience as only an owner can. In addition, Jon teaches bartending classes, and represents his establishments at outreach events. Jon is responsible for curating bars for the annual San Francisco Street Food Festival, which draws an estimated attendance of 40,000 people.</p>
         <p>After being approached to cater several high-profile parties in 2007, Jon and Greg identified a remarkable opportunity to take Rye, their now famous bar on Geary St., "on the road" and wow party planners with a truly extraordinary cocktail experience. Rye On The Road's remarkable trajectory in the world of bespoke cocktail catering has landed them on the A-list of the bay area's most discerning and quality focused clients.</p>
         <p>In early 2012, Jon and Greg will unveil their yet to be named fourth bar and dining concept in downtown San Francisco.</p>
			 </div>
			</div>
    </li>
    <li id="peached_tortilla">
			<img class="logo" src="images/vendor_logos/peached_tortilla.png" height="124" width="289" alt="The Peached Tortilla" />
    </li>
    <li id="la_victoria">
			<img class="logo" src="images/vendor_logos/la_victoria.png" height="166" width="125" alt="La Victoria" />
    </li>
    <li id="nom_nom" class="red">
			<img class="logo" src="images/vendor_logos/nom_nom.png" height="124" width="125" alt="Nom Nom" />
    </li>
    <li id="commonwealth"  class="teal">
			<img class="logo" src="images/vendor_logos/commonwealth.png" height="124" width="125" alt="Commonwealth" />
    </li>
    <li id="embrace_sweets"  class="teal">
			<img class="logo" src="images/vendor_logos/embrace_sweets.png" height="125" width="277" alt="Embrace Sweets" />
    </li>
    <li id="ica_juices"  class="yellow">
			<img class="logo" src="images/vendor_logos/ica_juices.png" height="125" width="124" alt="Ica Juices" />
    </li>
    <li id="crab_shack">
			<img class="logo" src="images/vendor_logos/crab_shack.png" height="125" width="125" alt="Ica Juices" />
			<div class="payload">
			 <div class="inner">
         <p>Think there&#x27;s no good food in the Marina?  Think it&#x27;s all green salads with the dressing on the side?  Well sure, there&#x27;s some of that, but there&#x27;s also clean, simple seafood we&#x27;ve been serving since 2008.  Ingredient-focused, delcious fish and shellfish from real people with a lot of style and no attitude.  And since you won&#x27;t cross that imaginary barrier onto Union St., we&#x27;re going to bring it to you.  Can&#x27;t wait to feed you.</p>
			 </div>
			</div>
    </li>
    <li id="yect">
			<img class="logo" src="images/vendor_logos/yect.png" alt="YECT" />
			<div class="payload">
			 <div class="inner">
         <p>I respect Peruvian customs and honor them in my food. We use original ingredients for authentic flavors. Yeral was born in Chimbote, Peru in the north of the country. <a href="www.YECTPeruvianCuisine.com">www.YECTPeruvianCuisine.com</a></p>
			 </div>
			</div>
    </li>
    
    
		
		<li class="no_effects" id="wise_sons">
			<img class="logo" src="images/vendor_logos/wise_sons.png" height="58" width="289" alt="Wise Sons">
      <div class="payload"><div class="inner"><h1>Wise Sons</h1><p>The Wise Sons are Evan Bloom and Leo Beckerman, two longtime friends who had a yearning for a food they couldn&#x27;t find in San Francisco. Together, they are bringing the food and the experience of their memories to San Francisco. Each dish comes from the heart; Jewish Deli made from scratch with quality, seasonal ingredients served with a sense of old school hospitality. Pastrami is house smoked and served on their own rye. Bialies are baked fresh and pickles rotate with the seasons. Looking to grow the Bay Area Jewish food scene, collaboration with local food artisans have brought everything from authentic bagels to naturally fermented sodas to their menu. Currently searching for a permanent home, they serve a weekly pop-up brunch and cater events throughout the Bay Area.</p></div></div>
    </li>
  </ul>

</section>



<?php require 'inc/bottom.inc.php'; ?>