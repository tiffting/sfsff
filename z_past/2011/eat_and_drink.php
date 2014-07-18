<?php
  $page_id = 'eat_and_drink';
  $page_title = 'Eat/Drink';
  require 'inc/top.inc.php';
?>

<script type="text/javascript" charset="utf-8">
  $(function(){
    vendorPopups();
    var $container = $('#vendor_posters');
    $container.imagesLoaded().done(function(instance) {
      $container.masonry({
        columnWidth: '.grid-sizer',
        gutter: '.gutter-sizer',
        itemSelector: '.vendor'
      });      
    });
  });
</script>

<section id="vendors">

  <ul id="vendor_posters" class="filter_container">
    <li class="grid-sizer"></li>
    <li class="gutter-sizer"></li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/4505_meats.png" alt="4505 Meats">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.4505meats.com/">4505 Meats</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Best damn cheeseburger</dt>
            <dd>Grass fed, dry aged beef goodness with Gruy&egrave;re cheese, fresh crispy lettuce, sliced red onion, and a secret sauce on a buttery sesame scallion bun</dd>
            <dt>Small bite: Frankaroni</dt>
            <dd>Deep fried mac &amp; cheese with 4505 bacon studded hot dogs inside&hellip; on a stick!</dd>
            <dt>Drink: Lime mint iced tea</dt>
          </dl>
          <p>Chef Ryan Farr and his wife, Cesalee, founded 4505 Meats in January of 2009. While working as a classically trained chef and heading a Michelin Star restaurant, Ryan developed his artisan butchery techniques and created unique ways of expressing his love for all things meaty. Ryan&rsquo;s experience and voracious appetite are an ideal complement to Cesalee&rsquo;s creativity, style, and overall vision for the company. Ryan and Cesalee are dedicated to flavor and quality, adding their own unique touches to create exceptional meaty products. Based out of San Francisco, they strongly believe in keeping it local and supporting the growing Bay Area community and food movement.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/a16.gif" alt="A16">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.a16sf.com/">A16</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Porchetta sandwich</dt>
            <dd>Crispy porchetta sandwich with garlic, myrtle and rosemary on pan pugliese</dd>
            <dt>Small bite: Pirichittus</dt>
            <dd>Cream puff with Meyer lemon cream filling</dd>
            <dt>Drink: Grape acqua fresca</dt>
            <dd>Concord grape acqua fresca, fresh mint</dd>
          </dl>
          <p>A16 shares a name with the highway that runs from Naples to Canosa, Puglia. True to its namesake, it gathers inspiration from southern Italy, particulary Campania, the region surrounding Naples. Chef Chris Thompson oversees the menu, which features fresh pasta, house-butchered and house-cured meats and authentic Neopolitan pizza. Complementing the rustic menu, wine director/owner Shelley Lindgren selects wines that highlight the indigenous grapes from Campania and nearby regions. Since A16 opened in February 2004, it&rsquo; had the honor of welcoming several renowned, Italian winemakers for wine dinners and special events. It also celebrates local farmers and purveyors by partnering with organizations such as Outstanding in the Field, Roots of Change, and Slow Food.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/aedan.png" alt="Aedan Fermented Foods">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://aedansf.com/">Aedan Fermented Foods</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Umami plate</dt>
            <dd>Shio-koji yakitori chicken, Japanese potato salad with pickled vegetables, and shio-koji edamame, all marinated in Aedan&rsquo;s own shio-koji and pickling sauce</dd>
            <dt>Small bite: Shio-koji yakitori</dt>
            <dd>Two savory chicken skewers marinated in Aedan&rsquo;s very own shio koji&mdash;the ultimate Japanese umami</dd>
            <dt>Drink: Fresh fruit amazake shake</dt>
            <dd>Fresh fruit shake blended with Aedan&rsquo;s own amazake, the all natural Japanese sweetener</dd>
          </dl>
          <div class="chef">Chef: Mariko Grady</div>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/alicias_tamales_los_mayas.png" alt="Alicia&rsquo;s Tamales los Mayas">
      <div class="payload">
        <div class="inner">
          <h1><a href="www.aliciatamaleslosmayas.com">Alicia&rsquo;s Tamales los Mayas</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite item: 3 tamales</dt>
            <dd>Chicken, pork, or cheese, and love filled tamale</dd>
            <dt>Small bite: 1 tamale</dt>
            <dd>Chicken, pork, or cheese, and love filled tamale</dd>
            <dt>Drink: Agua fresca</dt>
            <dd>Pineapple and strawberry aguas frescas</dd>
          </dl>
          <p>In August of 2010, Alicia Villanueva came to La Cocina with a dream: to start her own tamale cart as a means to spread her own Mexican traditions and customs. For Alicia, the best tamales are stuffed with love, and the best people are stuffed with her tamales. She&rsquo;s been making delicious tamales for her family and friends for years, and finally decided that it was time to let the rest of the world in on her amazing food. Find Alicia's Tamales los Mayas five days a week at Justin Hermann Plaza. If that's not enough, Alicia's Tamales los Mayas is available for catering.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/azalinas.png" alt="Azalina&rsquo;s">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.azalinas.com/">Azalina&rsquo;s</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Penang peanut taco</dt>
            <dd>Scallion flatbread and chicken curry lardon topped with Azalina's coconut jam</dd>
            <dt>Small bite: Sweet potato dumpling</dt>
            <dd>Sweet potato with coconut confit</dd>
            <dt>Drink: Rose basil coconut</dt>
            <dd>Azalina's favorite drink: rose, basil seed, young coconut juice with fresh herbs</dd>
          </dl>
          <p>Azalina is a fifth generation street vendor from Malaysia. She grew up in a spice-rooted family immersed in street food culture. After moving to the United States and starting a family, she began cooking for friends who encouraged her to sell her food formally. Azalina joined La Cocina in 2010, and has been selling her food at Fort Mason's Off the Grid every Friday. AZALINA'S line of traditional Malaysian simmer sauces are sold at various Bay Area Whole Foods locations. AZALINA'S also caters private and corporate events.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/basa_seafood.png" alt="Basa Seafood Express">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://basaseafood.com/">Basa Seafood Express</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Spicy salmon poke</dt>
            <dd>A creamy, spicy salmon dish topped with tobiko, green and red onions, black sesame seeds, and a spicy mayonnaise</dd>
            <dt>Small bite: Marin Miyagi oyster</dt>
            <dd>Two live, farm-raised Marin Miyagi oysters (hot sauce and lemon available on the side)</dd>
            <dt>Drink: Mint lemonade</dt>
            <dd>A homemade-style lemonade made with fresh lemons and mint, sweetened with creme de menthe</dd>
          </dl>
          <p>We are a retail seafood store that also serves prepared meals. We have been in business for four years at our 24th Street location and are part of the lower 24th Street Merchants and Neighborhood Association.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/beijing_restaurant.png" alt="Beijing Restaurant">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.beijingresaturant.us/">Beijing Restaurant</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Rou jia mo (Chinese hamburger)</dt>
            <dd>Pork, cilantro &amp; jalape&ntilde;os in handmade sesame bun</dd>
            <dt>Small bite: 2 Beijing skewers</dt>
            <dd>Skewered leg of lamb or chicken with cumin &amp; chili pepper</dd>
            <dt>Drink: Housemade plum juice</dt>
          </dl>
          <p>Owner Jin brings the authentic flavors of Beijing and a couple of pictures of Yao Ming to this family owned restaurant, with two locations in San Francisco.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/bicycle_banh_mi.png" alt="Bicycle B&aacute;nh M&igrave;">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://eatbanhmi.com/">Bicycle B&aacute;nh M&igrave;</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Slow-cooked pork b&aacute;nh m&igrave;</dt>
            <dd>Slow-cooked pulled pork shoulder with caramelized onions and a green onion-soy sauce saut&eacute;, served with homemade pickled carrots, daikon and jalape&ntilde;os, topped with fresh cucumber and cilantro on a toasted baguette</dd>
            <dt>Small bite: B&aacute; cam</dt>
            <dd>A golden brown shell of sesame studded rice flour with a sweet mung bean and coconut filling (vegan, gluten-free)</dd>
            <dt>Drink: Thai iced tea</dt>
            <dd>Homemade Thai iced tea (vegetarian)</dd>
          </dl>
          <p>Bicycle B&aacute;nh Mi is a mother and daughter team, passionate about cooking authentic, simple, and delicious Vietnamese food. It specializes in Vietnamese b&aacute;nh m&igrave; sandwiches and offers a collection of Vietnamese dishes based on family recipes. Bicycle B&aacute;nh M&igrave; currently operates out of a shared kitchen space in the Mission district, providing bicycle delivery and catering to San Francisco and the Bay Area.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/binis.gif" alt="Bini&rsquo;s Kitchen">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://biniskitchen.com/">Bini&rsquo;s Kitchen</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Turkey or vegetarian momos</dt>
            <dd>Classic Nepalese meat and vegetable dumplings with tomato and cilantro sauce</dd>
            <dt>Small bite: Sikarni</dt>
            <dd>Nepalese-spiced yogurt, sweetened with brown sugar and topped with pistachios</dd>
            <dt>Drink: Nepalese chai tea</dt>
            <dd>Bini&rsquo;s signature blend of hand-ground Nepalese spices, black tea, and milk</dd>
          </dl>
          <p>Plucked from the foothills of the Himalayas, Binita Pradhan welcomes you to her kitchen to experience home cooked Nepalese cuisine. Bini&rsquo;s Kitchen combines home-ground spices with local ingredients and delivers recipes passed down through generations. Chef Bini&rsquo;s passion emerged in her mother&rsquo;s kitchen in Kathmandu. Now you can savor the vibrant soul food of Nepal right here in San Francisco with dishes like the famous Nepalese dumplings (momo) with spicy tomato cilantro sauce. She debuted at the Night Market and Conference, serving her delicious food. However, if you missed these two events, you can subscribe to her weekly newsletter to order her food.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/blue_bottle_coffee.png" alt="Blue Bottle Coffee">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.bluebottlecoffee.net/">Blue Bottle Coffee</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: New Orleans style iced coffee</dt>
            <dd>Our cold brewed iced coffee with chicory, slightly sweetened and served with milk</dd>
            <dt>Small bite: Saffon snickerdoodle cookie</dt>
            <dd>Our housemade saffron infused snickerdoodle cookie</dd>
            <dt>Drink: Drip coffee</dt>
            <dd>Fresh roasted and fresh ground coffee brewed individually in ceramic drippers</dd>
          </dl>
          <p>In 2002, in Oakland, California, a slightly disaffected freelance musician and coffee lunatic, weary of the grande eggnog latte and the double skim pumpkin-pie macchiato decides to open a roaster for people who are clamoring for the actual taste of freshly roasted coffee. Using a miniscule six-pound batch roaster, he makes an historic vow: I will only sell coffee less than 48 hours out of the roaster to my customers, so they may enjoy coffee at its peak of flavor. I will only use the finest organic, and pesticide-free, shade-grown beans. In honor of Kolschitskys heroics, he names his business The Blue Bottle Coffee Company, and begins another chapter in the history of superlative coffee.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <a href="http://sfstreetfoodfestival2013.eventbrite.com/">
        <img src="images/get_your_passports.png" alt="Get your passports"/>
      </a>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/boxing_room.png" alt="Boxing Room">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://boxingroomsf.com/">Boxing Room</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Natchitoches meat pie</dt>
            <dd>Deep-fried pastry filled with spiced ground beef</dd>
            <dt>Small bite: Corn maque choux</dt>
            <dd>Stewed corn, tomatoes and peppers</dd>
            <dt>Drink: Strawberry lemonade</dt>
            <dd>Fresh squeezed lemon juice, strawberries and mint served over ice</dd>
          </dl>
          <p>Justin Simoneaux&rsquo;s cooking is influenced by the Cajun and Creole dishes of New Orleans and coastal Louisiana. He couples traditional techniques and recipes with seasonal Northern California ingredients, for the fare he offers at Boxing Room as Executive Chef.</p>
        </div>
      </div>
    </li>
    
  
    <li class="vendor">
      <img class="logo" src="images/vendor_logos/brass_knuckle.png" alt="Brass Knuckle">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.brassknucklesf.com/home.html">Brass Knuckle</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Fryin' maiden</dt>
            <dd>Buttermilk fried chicken sandwich with apple jalape&ntilde;o slaw</dd>
            <dt>Small bite: Prawns and roses</dt>
            <dd>Katafi wrapped prawn taco with crispy cabbage and crema</dd>
            <dt>Drink: Whiplash</dt>
            <dd>Strawberry watermelon mint aqua fresca with jalape&ntilde;o swizzle</dd>
          </dl>
          <p>Heavy riff on innovation, Brass Knuckle brings simple flavors to the front stage. Each item is carefully crafted to rattle and grip your tastebuds. Brass Knuckle bursts on the culinary stage with a true vengeance for the "perfect bite".</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/central_kitchen.png" alt="central kitchen">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.centralkitchensf.com/">central kitchen</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Pig &amp; bunny b&aacute;nh m&igrave;</dt>
            <dd>Pat&eacute;, fermented chili and turnip relish with aioli</dd>
            <dt>Small bite: Fermented pickles</dt>
            <dd>Fermented and vinegar-pickled summer vegetables (vegan, vegetarian, gluten free)</dd>
            <dt>Drink: Lemongrass carrot juice</dt>
            <dd>(vegetarian)</dd>
          </dl>
          <p>The central kitchen proprietors are David Steele, David White, and Thomas McNaughton. central kitchen is a Northern California inspired restaurant with technique-driven dishes.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/chaac_mool.png" alt="Chaac Mool">
      <div class="payload">
        <div class="inner">
          <h1><a href="www.chaacmool.com">Chaac Mool</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Polcanes</dt>
            <dd>Cochinita (pork) or nopal placero (cactus salad) polcanes with salsa roja, topped with red onion and queso fresco</dd>
            <dt>Small bite: Tacos</dt>
            <dd>Cochinita (pork) or vegetarian (cactus salad) with salsa and red onion</dd>
            <dt>Drink: Agua fresca</dt>
          </dl>
          <p>Chaac Mool Yucatecan Food would love the opportunity to introduce you to traditional Mayan Cuisine. Chef/Owner Luis Vazquez drew inspiration from the ancient god of rain to start the namesake company, Chaac Mool. Vazquez, a fifth generation Yucatecan breadmaker, and his wife Maria formed the company six years ago in their small Tenderloin apartment. Chaac Mool is a family-run business that serves regional Mexican, indigenous and Pre-Hispanic cuisine. The Vazquez family believes that there is more to Mexican food than burritos and uses their food to bring the legends, flavors and feelings of Mexico straight to you. </p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/cholo_soy.png" alt="Cholo Soy">
      <div class="payload">
        <div class="inner">
          <h1>Cholo Soy</h1>
          <dl class="menu_item">
            <dt>Bigger bite: Peruvian ceviche</dt>
            <dd>A Peruvian-style ceviche made with Basa fish, marinated in a lime, ginger, celery, garlic, onion sauce and topped with fried corn</dd>
            <dt>Small bite: Papa a la Huanca&iacute;na</dt>
            <dd>Boiled Russet potatoes, topped with a Peruvian cream</dd>
            <dt>Drink: Chicha morada</dt>
            <dd>A purple corn drink made with cinnamon, cloves, anise, and pineapple</dd>
          </dl>
          <p>Yeral Caldas is the owner of Cholo Soy. Yeral makes the folkloric and typical food of Northern Peru. This is his third year at the festival.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/clairesquares.png" alt="Clairesquares">
      <div class="payload">
        <div class="inner">
          <h1><a href="www.clairesquares.com">Clairesquares</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Clairesquares 3-pack milk or dark chocolate</dt>
            <dd>Shortbread, caramel and chocolate squares in milk or dark chocolate</dd>
            <dt>Drink: Bay Chai iced chai tea</dt>
            <dd>100% organic chai tea served with soy or whole milk</dd>
          </dl>
          <p>Clairesquares handcrafts unique caramel and chocolate based products derived from traditional Irish recipes.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/clearly_kombucha.png" alt="Clearly Kombucha">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://clearlykombucha.com/">Clearly Kombucha</a></h1>
          <div class="menu_item">Drink: Kombucha</div>
          <p>Clearly Kombucha is a handcrafted beverage made from whole leaf, fair trade certified green tea and organic cane sugar. It uses a 30-day fermentation with its SCOBY and then bottles up the freshest and smoothest kombucha.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/creme_brulee_cart.png" alt="Cr&egrave;me Br&ucirc;l&eacute;e Cart">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://thecremebruleecart.com/">Cr&egrave;me Br&ucirc;l&eacute;e Cart</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Kentucky</dt>
            <dd>Vanilla cr&egrave;me br&ucirc;l&eacute;e topped with housemade candied pecans and bourbon butterscotch sauce</dd>
            <dt>Small bite: Vanilla bean cr&egrave;me br&ucirc;l&eacute;e</dt>
            <dd>Rich vanilla bean custard with a delicate caramelized sugar crackle</dd>
            <dt>Drink: Strawberry lemon refresher</dt>
            <dd>Summer strawberries and hand-squeezed lemonade</dd>
          </dl>
          <p>Started in 2009 The Cr&egrave;me Br&ucirc;l&eacute;e Cart was an original pioneer of San Francisco's burgeoning street food scene. Serving gourmet desserts on the streets of San Francisco The Cr&egrave;me Br&ucirc;l&eacute;e Cart has brought it's own brand of whimsy laced with class and a dash of rock and roll to neighborhoods all over San Francisco.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/curry_up_now.png" alt="Curry Up Now">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.curryupnow.com/">Curry Up Now</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Tikka masala burritos</dt>
            <dd>Fresh La Palma flour tortilla, methi pulao, chana masala, and pickled onions rolled up with your choice of CTM (Fulton Valley organic chicken breast tikka masala) or PTM (paneer tikka masala)</dd>
            <dt>Small bite: Samosas (vegan/veggie)</dt>
            <dd>Some say it&rsquo;s a giant crispy wonton with potatoes &amp; peas</dd>
            <dt>Drink: Rose mango lassi</dt>
            <dd>Rose-flavored mango smoothie</dd>
          </dl>
          <p>Curry Up Now serves Indian Street inspired from street foods in India and Indian foods popular in other parts of the world on 4 food trucks &amp; a brick &amp; mortar location in San Mateo. Our food is crafted from local, sustainable and organic products whenever possible. The food we serve is the food that we have grown up eating. We hope you like the food as much as we do.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/d_maize.png" alt="D&rsquo;maize">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.dmaize.com/">D&rsquo;maize</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Chicken skewers</dt>
            <dd>Grilled chicken skewers marinated in abuelita&rsquo;s blend of Salvadoran spices</dd>
            <dt>Small bite: Pupusa</dt>
            <dd>Corn masa filled with either chicharron (pork), frijole con queso (bean and cheese), or espinaca con queso (spinach and cheese)</dd>
            <dt>Drink: Agua fresca</dt>
            <dd>Tamarind or chia seed</dd>
          </dl>
          <p>D&rsquo;maize Catering is a family business that was created to bring Salvadorian food and culture to the Bay Area. Because of D&rsquo;maize, people can eat, try, and enjoy the Salvadorian food with modern twist, keeping its traditional flavor and qualified service at your private and family events, meetings and corporate events. D&rsquo;maize cooks with healthier ingredients as much as possible and accommodates vegans and vegetarians. </p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/delicioso_creperie.png" alt="Delicioso Cr&ecirc;perie">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.deliciosocreperie.com/">Delicioso Cr&ecirc;perie</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Nutella &amp; strawberry cr&ecirc;pe</dt>
            <dd>Orange blossom cr&ecirc;pe filled with nutella and fresh strawberry sauce</dd>
            <dt>Small bite: Dulce de leche cr&ecirc;pe</dt>
            <dd>Orange blossom cr&ecirc;pe filled with dulce de leche</dd>
          </dl>
          <p>Gabriela grew up in a family that loved food from all over the world&mdash;a passion, and flavor, she brings to Delicioso Cr&ecirc;perie. Hailing from Mexico, Gabriela moved to San Francisco, to pursue her interest in the culinary world. After working jobs in various restaurants in the city, Gabriela found her way to La Cocina. She is now turning her talents towards cr&ecirc;pes, a simple food she&rsquo;s loved all her life. Delicioso Cr&ecirc;perie focuses on making gourmet, one-of-a-kind cr&ecirc;pes that reflect the global food influences of Gabriela&rsquo;s childhood.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/don_bugito.png" alt="Don Bugito">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.donbugito.com/">Don Bugito</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite Item: Don Bugito tacos</dt>
            <dd>Two organic blue corn tortillas, filled with wax moth larvae and sauteed pasilla peppers, queso fresco and herb salsa; served with a side of jicama salad and pickled onions</dd>
            <dt>Small bite: Three Twins vanilla ice cream</dt>
            <dd>Three Twins vanilla ice cream topped with toffee mealworms &amp; prickly pear syrup</dd>
            <dt>Drink: Agua de limon con chia</dt>
          </dl>
          <p>Don Bugito, based in San Francisco and born at La Cocina, is a food company that offers tasty edible insects prepared as gourmet foods and treats. Monica Martinez was inspired by pre-hispanic and contemporary Mexican cuisine, specifically by the "bugs" she snacked on as a child. This cuisine has been consumed by people in Mexico and within cultures throughout the world for thousands of years. Don Bugito is thrilled to be able to share new versions of these classic foods with an American audience as well as support a healthier world by providing a sustainable, ecological food.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/el_buen_comer.png" alt="El Buen Comer">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.elbuencomersf.com/">El Buen Comer</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Huarache</dt>
            <dd>Huarache de pollo (grilled chicken, queso fresco &amp; cream), or huarache de carne asada (grilled steak, queso fresco and cream)</dd>
            <dt>Small bite: Tamal</dt>
            <dd>Salsa verde con puerco (tomatillo with pork), rajas con queso (chile and cheese), or mole rojo con pollo (chicken and red mole)</dd>
            <dt>Drink: Agua de horchata y fresa</dt>
            <dd>Rice milk drink and fresh strawberry</dd>
          </dl>
          <p>Homestyle Mexico City cooking is at the heart of chef-owner Isabello Caudillo&rsquo;s family-owned business. Since moving from Mexico City to San Francisco, Isabel&rsquo;s passion for preparing the food of her childhood has blossomed from cooking for family and friends out of her kitchen, to landing externships with San Francisco restaurants like Delfina and Mijita, to her current post at the Noe Valley Farmers Market. El Buen Comer will transport you to her family&rsquo;s kitchen table in Mexico City.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/el_huarache_loco.png" alt="El Huarache Loco">
      <div class="payload">
        <div class="inner">
          <h1><a href="www.huaracheloco.com">El Huarache Loco</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Huarache de nopal</dt>
            <dd>Handmade organic oval corn tortilla filled with beans and topped with cilantro, onions, salsa, cream, and queso fresco; served with cactus salad (cactus, onions, tomato, cilantro)</dd>
            <dt>Small bite: Taco de Alambre</dt>
            <dd>Taco with bacon, beef, chorizo, mozzarella cheese, bell peppers, and onions</dd>
            <dd>Drink: Agua fresca</dd>
          </dl>
          <p>Veronica Salazar was born in the neighborhood of Ramon Millan in Mexico City, Mexico, where she grew up around food, both in her home and in the restaurant that her family owned. When Veron­ica moved to San Fran­cisco, she saw that there were many taquerias, but she felt they lacked the sazon (magic touch) of kitchens from back home. She took this as an opportunity to bring the authentic flavors of the D.F. to S.F. You can now find Veronica and her entire family doling out her beloved huaraches, mixiotes and cactus salad every Saturday at the Alemany and Marin Farmer&rsquo;s Market, and at their brick-and-mortar restaurant at the Marin Country Mart in Larkspur Landing.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/el_nuevo_frutilandia.jpg" alt="El Nuevo Frutilandia">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://elnuevofrutilandia.net/">El Nuevo Frutilandia</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Cubano sandwich</dt>
            <dd>Traditional Cuban Sandwich with sliced ham, slow-roasted pulled pork, Swiss cheese, mustard, and pickles</dd>
            <dt>Small bite: Mini pastel Puertorrique&ntilde;os</dt>
            <dd>Puerto Rican pastel made of taro root and plantains with ground pork, garbanzo beans, roasted red peppers, and olives</dd>
            <dt>Drink: Puerto Rican punch</dt>
            <dd>Tropical fruit juice</dd>
          </dl>
          <p>El Nuevo Frutilandia has been a landmark in the Mission since 1978. Long ago, El Nuevo Frutilandia was just an ice cream and shake parlor, but now it serves home-style Cuban and Puerto Rican cuisine. New proprietors have taken ownership and are keeping the traditional recipes authentic to Cuba and Puerto Rico. Chef Gary Millar, who has family in Puerto Rico, has years of catering experience along with cooking by his mother&rsquo; side and learning how to use authentic Puerto Rican spices and techniques.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/el_pipila.png" alt="El P&iacute;pila">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://elpipila.com/">El P&iacute;pila</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Two sopes</dt>
            <dd>Handmade corn sopes topped with picadillo (ground beef, onion, tomato, and potato) and El P&iacute;pila&rsquo;s signature nopales Guanajuatos (cactus, chile negro, onion, cilantro, and tomatillo), garnished with queso fresco and salsa</dd>
            <dt>Small bite: Taco de papa</dt>
            <dd>Corn tortilla filled with mashed potatoes, deep-fried and topped with sour cream, lettuce, and signature salsa</dd>
            <dt>Drink: Agua fresca</dt>
          </dl>
          <p>Lupe has always been fascinated by the flavors of her hometown. Her culinary knowledge and skills are a family tradition&mdash;she learned her passion for cooking from her mother and grandmother, who were well known for their traditional dishes. For real Guanajuato flavor (or to find out what that even means), try Lupe&rsquo;s jicama salad with cilantro and lime vinaigrette. Or her pozole verde, a chicken stew with homini and tomatillo served with lime, cilantro, radish, and crisp tortillas.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/el_sur_empanadas.gif" alt="El Sur Empanadas">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.elsursf.com/">El Sur Empanadas</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Two empanadas</dt>
            <dd>Two Empanadas with chimichurri, featuring a choice of:
              <ul class="text">
                <li>Traditional: hand-cut Five Dot Ranch beef, onions, oregano, piment&oacute;, olive, and egg</li>
                <li>Pollo Saltado: organic chicken, onions, tomatoes, serranos, olive, and egg</li>
                <li>Parisien: Country ham, prosciutto, green onion, five cheeses, and chives</li>
                <li>Verde: Swiss chard, spinach, green onion, five cheeses, olive, and egg</li>
                <li>Champi&ntilde;ones: sliced mushroom, shallots, cr&eacute;me fra&icirc;che, provolone, and chives</li>
              </ul>
            </dd>
            <dt>Small bite: Dulce de leche churro</dt>
            <dd>Churro filled with dulce de leche</dd>
            <dt>Drink: Terer&eacute;</dt>
            <dd>Cold yerba mate with lemonade</dd>
          </dl>
          <p>El Sur serves up handmade Argentine style empanadas directly from the oven of a restored Citroen H-Van. El Sur was started by Marianne Despres, a classically trained chef and mother of two. After graduating from the Cordon Bleu in Paris, she continued her culinary training in some of the world&rsquo;s best kitchens including Potel et Chabot and the French Laundry. Marianne and her team use traditional techniques for the fillings and dough, and source the ingredients from some of the Bay Area&rsquo;s best purveyors. The herbs and olives are grown on the Despres&rsquo; family farm in Sonoma.</p>
        </div>
      </div>
    </li>
      
    <li class="vendor">
      <img class="logo" src="images/vendor_logos/el_tonayense.jpg" alt="El Tonayense">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.tonayense.com">El Tonayense</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Burritos, tortas, or quesadillas</dt>
            <dt>Small bite: Tacos</dt>
            <dt>Drink: Horchata and pi&ntilde;a</dt>
          </dl>
          <p>Benjamin Santana, the godfather of taco trucks in the Mission District, has been serving his authentic and delicious recipes to the people of San Francisco since 1994. He uses only the freshest ingredients to give each bite true authentic flavor. He prides himself on the homemade salsas that accompany each dish as it comes from his secret family recipe. One of the best compliments he often hears is, &ldquo;Wow, the tacos are so good, I feel like I am in Mexico.&rdquo; El Tonayense strives to make each offering absolutely delicious and authentic and has received many honors and praises. They include Zagat winner &ldquo;Best Cheap Eats&rdquo;, Sunset Magazine recommended, Michelin Man recommended, 7x7 Magazine rated, Rolling Stones Magazine rated, and Check Please, just to name a few.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/eleganza.png" alt="Eleganza Catering">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.eleganzacatering.com/">Eleganza Catering</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Eleganza&rsquo;s ceviche</dt>
            <dd>Two baby shrimp ceviche tostadas, marinated in lemon juice and topped with bell peppers, onions, tomato, cilantro, and jalape&ntilde;os</dd>
            <dt>Small bite: Chicken salad sandwich</dt>
            <dd>A mini croissant filled with a shredded chicken breast salad mixed with corn, peas, carrots, and mayonnaise</dd>
            <dt>Drink: Horchata</dt>
            <dd>A homemade rice milk drink infused with cinnamon and sugar</dd>
          </dl>
          <p>Eleganza Catering has a vision of accommodating parties both big and small. Off-site parties can be accomplished anywhere, whether it is a wedding, corporate gathering, or a special event. Impeccable service is its commitment. Eleganza Catering is devoted to providing the highest quality of food, customer service, and spectacular work as a team.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/ejis.png" alt="Eji&rsquo;s Ethiopian">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.ejisethiopian.com/">Eji&rsquo;s Ethiopian</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Spicy green kitfo injera rolls</dt>
            <dd>Gluten-free, 100% teff injera rolls with spicy collard and other greens filling</dd>
            <dt>Small bite: Garlicky fava bean dip with injera chips</dt>
            <dd>Garlicky fava bean dip with 100% teff injera chips</dd>
            <dt>Drink: Thyme tea (hot or iced)</dt>
            <dd>Black tea leaves steeped with fresh thyme leaves, served hot or over ice</dd>
          </dl>
          <p>Addis Ababa, Eji Atlaw spent much of her childhood in the kitchen with her four sisters and mother, learning to make homemade Ethiopian dishes. Food has always been a passion for Eji, and one that stuck with her as she built a new life in the United States. Eji decided to pursue what she loves, and join La Cocina to begin working on plans to start her own vegan Ethiopian business. Eji&rsquo;s launched at last year&rsquo;s San Francisco Street Food Festival, and since then Eji has been working as a caterer and developing a line of sauces that showcase Ethiopian flavors, spices and local ingredients.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/endless_summer_sweets.png" alt="Endless Summer Sweets">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.endlesssummersweets.com/">Endless Summer Sweets</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Funnel cake</dt>
            <dd>Funnel cake with powdered sugar, topped with fresh strawberries and a dollop of homemade whipped cream</dd>
            <dt>Small bite: Kettle corn</dt>
            <dd>Sweet and salty kettle corn (vegan &amp; gluten free)</dd>
            <dt>Drink: Fresh lemonade</dt>
            <dd>Fresh-squeezed lemonade</dd>
          </dl>
          <p>Endless Summer Sweets is a catering company that exists to revive the kid in you, bringing back memories of the neighborhood fairs with family and friends. We make gourmet funnel cakes with unique fun toppings including: fresh strawberries, Ghirardelli sauces, homemade whipped cream, pecans, and crispy bacon topped in agave syrup, sweet and salty kettle corn, hand-dipped corn dogs, caramel apples, and fresh spun cotton candy are fun treats made on our nostalgia driven menu.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/estrellitas_snacks.png" alt="Estrellita&rsquo;s Snacks">
      <div class="payload">
        <div class="inner">
          <h1><a href="www.estrellitassnacks.com">Estrellita&rsquo;s Snacks</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Pupusa con casamiento</dt>
            <dd>Traditional Salvadoran meal of pupusas revueltas (pork, beans, and cheese) or frijol con queso (bean and cheese) served with casamiento (rice and beans), and pickled vegetables</dd>
            <dt>Small bite: Tamal</dt>
            <dd>Salvadoran tamales (chicken or vegetarian)</dd>
            <dt>Drink: Aguas frescas</dt>
            <dd>Fresh fruit juice made with a variety of seasonal fruits</dd>
          </dl>
          <p>Maria del Carmen Flores started getting her knack for entrepreneurship at her corner bus stop stand in El Salvador, selling fruit and homemade chips with her mother. Now she has arrived to the culinary capital of San Francisco, evoking pride in her culture through her very own Estrellita&rsquo;s Snacks, an offering of tasty pupusas and tamales. You can watch Maria make the doughy corn based treats at Alemany&rsquo;s Farmers market or have Estrellita&rsquo;s Snacks cater for an event to add Salvadoran flair.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/fritas_shack.png" alt="Fritas Shack">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.fritasshack.com/">Fritas Shack</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Chile verde French fries</dt>
            <dd>Tender pork shoulder braised in tomatillos, green chiles, onions, and herbs and spices served on crispy French fries, topped with cheddar cheese, handmade guacamole, pico de gallo, creme fraiche, and queso cotija</dd>
            <dt>Small bite: Mini duck confit taquitos</dt>
            <dd>Classic duck confit rolled into mini yellow corn tortillas and pan-fried until crispy, topped with queso fresco, handmade guacamole, pico de gallo, and queso cotija</dd>
          </dl>
          <p>Fritas Shack started as a way to recreate the foods from San Diego and Southern California.  It began with trying to emulate favorite greasy taco shops and stands. It then evolved to its present form when it took the food further by making its own versions, apply better cooking techniques, use different ingredients, and introduce new flavors to create food that was reminiscent of the original items but also reflection of its own personality.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/good_foods_catering.png" alt="Good Foods Catering">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.gfcateringsf.com/">Good Foods Catering</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Fried smoked chicken with bacon BBQ sauce</dt>
            <dd>Applewood smoked chicken + deep fried + bacon BBQ sauce + pickled veggies</dd>
            <dt>Small bite: Southern gourmet jambalaya</dt>
            <dd>Smoked chicken, rice, tomatoes, smoked local Bassin sausage, sherry, herbs and spices</dd>
            <dt>Drink: Strawberry basil lemonade</dt>
            <dd>Awesome local strawberries, basil mixed with our lemonade</dd>
          </dl>
          <p>The idea behind Good Foods Catering was sparked by the owner Dontaye Ball, who was born and raised in San Francisco. Dontaye Ball grew up in a family where all of his relatives loved to cook. He was inspired by his grandmother, who always cooked from her soul. She only used the best ingredients even if that meant going to her backyard to use food that she grew with her own hands. When Dontaye set out to pursue a culinary lifestyle, he would only work for places that exhibited the values that were instilled from his grandmother. His culinary career started at the City College of San Francisco Culinary Arts Program, and since then he has worked at some of the best restaurants, such as Delfina, Delfina Pizzeria, Google, and Contigo. Dontaye took this foundation with him when he created Good Food Catering.  Good Foods only uses the best ingredients. All of the products are made using natural ingredients from local farmers. Good Foods uses meat that has no antibiotics or hormones from birth to box. The idea is to take BBQ to the next level using interesting ingredients like hog jowls, pork belly and beef cheeks. Chef Dontaye has so much passion for making Good Food even if that means he has to make own bacon for his famous bacon BBQ sauce. He likes to make food that bring people together and want people to be able to enjoy something different. He wants to make sure everyone the he comes in contact with has a chance to enjoy Good Food.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/gyro_cheesesteak_trolley.png" alt="Gyro &amp; Cheesesteak Trolley">
      <div class="payload">
        <div class="inner">
          <h1><a href="https://www.facebook.com/gyroandcheesesteaktrolley">Gyro &amp; Cheesesteak Trolley</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Cheesesteak</dt>
            <dd>Grilled, marinated tri-tip or chicken kabob on a sweet roll with grilled onions, American cheese, lettuce, tomatoes, and mayonnaise</dd>
            <dt>Small bite: Gyro</dt>
            <dd>Beef/lamb or chicken gyro or falafel on soft pita bread, tomatoes, and cucumbers, topped with homemade tzatziki or spicy tzatziki</dd>
            <dt>Drink: Doogh</dt>
            <dd>Persian yogurt drink with mint and cucumbers</dd>
          </dl>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/hapa_ramen.png" alt="Hapa Ramen">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://haparamensf.com/">Hapa Ramen</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Chicken teriyaki sandwich</dt>
            <dd>Grilled teriyaki chicken thigh, spicy slaw with homemade Kewpie mayo, Acme roll</dd>
            <dt>Small bite: Pickled Cucumber Salad, Lardo</dt>
            <dd>Sweet corn pudding, pickled watermelon, and tenkasu</dd>
            <dt>Drink: Kimchi juice shot</dt>
            <dd>Spicy kimchi juice</dd>
          </dl>
          <p>Hapa Ramen is a roaming noodle stand and Fillmore district restaurant that makes organic, seasonal ramen.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/hapa_sf.png" alt="Hapa S.F.">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://hapasf.com/">Hapa S.F.</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Lechon burrito</dt>
            <dd>Choose from banh mi style (24-hour roasted pork, cabbage, pickled carrots, daikon, cucumber, jalape&ntilde;o, cilantro, and salsa verde) or Silog style (24-hour roasted pork, garlic fried rice, sarsa sauce, slow cooked egg, cilantro, and jalape&ntilde;o)</dd>
            <dt>Small bite: Lumpia Shanghai</dt>
            <dd>Deep-fried spring rolls filled with ground pork, onions, carrots, and water chestnuts; served with sweet chile sauce</dd>
            <dt>Drink: Seasonal farmers&rsquo; market soda by SodaCraft</dt>
            <dd>Seasonal farmers&rsquo; market fruit</dd>
          </dl>
          <p>Hapa San Francisco serves local, natural, and sustainable Filipino cuisine. It sources the finest ingredients, organic whenever possible, to create dishes inspired by California but firmly grounded in their Filipino roots. Hapa S.F.&rsquo;s mission is to eradicate the perception that Filipino cuisine is unhealthy and establish its reputation as one of the finest Southeast Asian cuisines. Chef William Pilz knew he would one day help garner Filipino cuisine the attention it deserved. He spent several years working in restaurants with some of the best chefs in San Francisco&mdash;Ron Siegel, Laurent Gras, David Kinch, and Josef Centeno&mdash;honing his craft while perfecting the dishes of his youth paired with the bounty of San Francisco&rsquo;s farmers&rsquo; markets. He opened Hapa S.F. in its present form on April 28, 2010, in probably one of the cheapest ever restaurant openings. Hapa S.F. ended up getting reviewed to no knowledge of their own on their third day of service, the title of the article being, &ldquo;Filipino taco truck lives up to the hype.&rdquo; The rest is very quickly becoming history thanks to all of Hapa S.F.&rsquo;s fans.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/hard_water.png" alt="Hard Water">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://hardwaterbar.com/">Hard Water</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Fried chicken with sriracha sauce</dt>
            <dt>Small bite: Parker house rolls with honey butter</dt>
            <dt>Drink: Watermelon ice tea</dt>
          </dl>
          <p>Charles Phan is the visionary and executive chef of the restaurant, but he has not done it alone. There are upwards of 18 Phan siblings, cousins, aunts and nephews working with Charles, plus some 70 employees, 75% of whom have been with the restaurant from the start 18 years ago. There are numerous bright stars in the Slanted Door family constellation. The Phans are ethnically Chinese but were born and raised in Vietnam. Their father fled China during that country&rsquo;s tumultuous times and they were not inclined to stick around after the North Vietnamese took control. On April 30, 1975 they found themselves floating at sea, part of the Boat People exodus. Essentially lost and living on rations, they floated for 10 days, rescued by a Malaysian ship which brought them to Singapore. From Singapore harbor (they were never let ashore) they ended up in a refugee camp in Guam. A year and a half later they immigrated to San Francisco, where they took up residence in SF&rsquo;s Tenderloin district, a classic first stop for Asian immigrants. From there it was Chinatown. While in Chinatown, Charles began going to school at Mission High School in San Francisco&rsquo;s Mission district, where The Slanted Door would eventually open its doors.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/heirloom_cafe.png" alt="Heirloom Caf&eacute;">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://heirloom-sf.com/">Heirloom Caf&eacute;</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Pulled pork sandwich</dt>
            <dd>Italian-style pulled pork sandwich</dd>
            <dt>Small bite: Chocolate chip oatmeal cookie</dt>
            <dd>Fresh-baked giant chocolate chip oatmeal cookies</dd>
            <dt>Drink: Mint lemonade</dt>
          </dl>
          <p>Heirloom Caf&eacute; was founded with two concurrent ambitions: to offer a wide variety of aged wines from a carefully managed cellar, and to serve simple, well-prepared food at reasonable prices. Their wine cellar and their love of mature wines are the foundation of the restaurant. Heirloom has been actively identifying and sourcing wines from their favorite producers in California and regions all over Europe for many years, and they are thrilled, every night at the restaurant, to be able to offer dozens of different wines, which have had years in the bottle to improve. The kitchen at Heirloom is dedicated to offering a menu that is concise, seasonal, highly selective, and exceedingly tasteful. They are not any more interested to work with harder-to-find, esoteric ingredients than they are to work with very good carrots and onions. Whatever time of year, Heirloom prides on developing plates and presentations that maximize flavor, aesthetic beauty, integrity, and value.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/hella_vegan_eats.png" alt="Hella Vegan Eats">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.hellaveganeats.com/">Hella Vegan Eats</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Doughnut burger</dt>
            <dd>Beet patty, tomato, kale, pickled red onions, and secret sauce served in between two sugar doughnuts</dd>
            <dt>Small bite: Lusty lovers taco</dt>
            <dd>Mac &rsquo;n&rsquo; cheeze, BBQ "chicken," cayenne cornflakes, cilantro, and pickled red onions served in a corn tortilla</dd>
            <dt>Drink: Cherry + bell pepper paleta</dt>
            <dd>Candied bell peppers, cherries, and coconut milk</dd>
          </dl>
          <p>Hella Vegan Eats is celebration of vegan cuisine and creative movement dedicated to discovering, developing, and sharing more sustainable ways to enjoy food. The creation of Hella Vegan Eats was inspired by the travels and adventures of the owners/chefs, Sylvee and Tiffany Esquivel, who have combined culinary prowess, vegan ethics, and an unrelenting sense of humor to create a whimsical cuisine everyone can appreciate. Their unique and innovative cuisine is available for catering, pop-ups, and events!</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/il_cane_rosso.png" alt="Il Cane Rosso">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://canerossosf.com/">Il Cane Rosso</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Tommyfield Market fish &amp; chips</dt>
            <dt>Small bite: Spicy pickled quail egg</dt>
            <dt>Drink: Ginger-cucumber soda</dt>
          </dl>
          <p>Il Cane Rosso&rsquo;s cuisine focuses on local organic produce &amp; sustainable pasteurized meats. Chef Lauren Kiino and her team employ Northern California&rsquo;s bountiful produce to craft menus that change daily &amp; showcase the seasonal market offerings. Fostering age-old Italian techniques and values, Il Cane Rosso uses high-quality, hometown ingredients for all aspects of service.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/jarred.png" alt="Jarred">
      <div class="payload">
        <div class="inner">
          <h1><a href="www.jarredsf.com">Jarred</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Jarred&rsquo;s crispy chicken sandwich</dt>
            <dd>Buttermilk marinated boneless skinless chicken thighs battered and fried, served on a bun with dill pickle aioli and pickled red onions</dd>
            <dt>Small bite: Fried pickled green beans</dt>
            <dd>Crispy fried pickled green beans</dd>
            <dt>Drink: Jarred's pickled cherry Mexican Coke</dt>
            <dd>Spiced pickled bing cherries, topped with Seltzer Sisters club soda</dd>
          </dl>
          <p>Emiliana Puyana grew up in Venezuela surrounded by great food. These early experiences threw her into a life and career in the food service industry. She decided to attend culinary school and worked as a line cook in many of the cities best restaurants, experience which has helped Emiliana gained a true admiration and respect for seasonality and high-quality ingredients. It was out of this admiration for great food and passion for cooking that the idea for Jarred was born. Jarred is a pickle business that uses a large variety of fruits and vegetables when they are at the peak of their seasons with only the best local, organic, and sustainable ingredients around. Look for Jarred to pop-up at farmers&rsquo; markets around the Bay.</p>
        </div>
      </div>
    </li>
    
    <li class="vendor">
      <img class="logo" src="images/vendor_logos/kama_food_lab.png" alt="kama food lab">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.kamafoodlab.com/">kama food lab</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Indian pita sandwich</dt>
            <dd>Juicy and spicy frittkis (fritters cooked in Indian tikki style), triple layered with crunchy carrots, red onions, and red cabbage, tossed with a variety of chutneys and masala sauces, wrapped in a griddled pita bread; or you can order it naked (without pita)</dd>
            <dt>Small bite: Potato &amp; peas medley</dt>
            <dd>Authentic combination of white peas and potato frittki, topped with a tangy tamarind sauce and flavorful cilantro sauce, sprinkled with kama&rsquo; special indian sev</dd>
            <dt>Drink: Indian lassi</dt>
            <dd>Local seasonal twist: sweet and aromatic lassi is churned with kama&rsquo; homemade yogurt from Straus Farm milk, local strawberries, rose syrup, agave nectar, and a hint of cardamom</dd>
          </dl>
          <p>kama food lab provides a unique and memorable culinary experience that is easily accessible. It creates its niche in the mobile food industry by serving innovative yet original food concepts that are healthy, locally sourced, and reasonably priced.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/kasa_indian_eatery.jpg" alt="Kasa Indian Eatery">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.kasaindian.com/">Kasa Indian Eatery</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Kati roll</dt>
            <dd>Handmade roti (flatbread) wrapped around classic Indian dishes&mdash;like a mini Indian burrito</dd>
            <dt>Small bite: Bhel puri</dt>
            <dd>Puffed rice with crunchy chips, herbs, chutneys, and vegetables; a sweet, spicy, zesty roadside snack from Mumbai</dd>
            <dt>Drink: Mango lassi</dt>
            <dd>Housemade mango yogurt drink spiked with fresh-ground cardamom</dd>
          </dl>
          <p>Anamika Khanna, co-owner and executive chef at Kasa, was born and raised in Hounslow, an infamous Indian enclave in West London, and spent much of her childhood in boarding school outside Mumbai. Her love for street food started in Mumbai, one of the world&rsquo;s great street food cities. She has great memories of eating along Chowpatty Beach as a little girl&mdash;pani puri, bheja masala fry, pav bhaji, and, of course, Kwality vanilla ice cream were her favorites! She&rsquo; inspired by street vendors because of the passion they put into making one dish and only one dish extremely well. She opened Kasa in the Castro over three years ago and now have full-fledged food truck so she can serve street food on actual streets! Kasa&rsquo;s kati rolls are traditional street food from Calcutta.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/kikas_treats.png" alt="Kika&rsquo;s Treats">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.kikastreats.com/">Kika&rsquo;s Treats</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Brazilian cheese bread sliders</dt>
            <dd>Naturally gluten-free cheese puffs (a.k.a., p&atilde;o de queijo)</dd>
            <dt>Small bite: Chocolate-dipped frozen banana</dt>
            <dd>Kika&rsquo;s gourmet s&rsquo;mores, made with award-winning caramelized graham crackers and handmade vanilla bean marshmallows</dd>
            <dt>Drink: Brazilian hot chocolate</dt>
            <dd>Vegan hot chocolate with spices (iced chocolate in case it&rsquo;s hot!)</dd>
          </dl>
          <p>Growing up, Cristina Arantes spent her days in Brazil baking and eating all things chocolate. Cristina worked at many bakeries upon moving to San Francisco. After perfecting her craft, she was ready to share her favorite treats with the world through Kika&rsquo;s Treats. Kika&rsquo;s Treats is an artisanal chocolate company, which manufactures premium pure chocolate-covered confections. Kika&rsquo; Treats is not only committed to using the finest quality ingredients, but also supporting the local economy and enforcing green practices in the workplace. On top of that, Kika&rsquo;s Treats gives back to the community, through in-kind donations to non-profits and by donating 5% of its net profits to La Cocina, where it all started. Treat yourself, and feel good about it!</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/koja_kitchen.gif" alt="KoJa Kitchen">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://kojakitchen.com/">KoJa Kitchen</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Korean BBQ beef KoJa or teriyaki zen KoJa</dt>
            <dd>Beef: Korean BBQ beef, saut&eacute;ed onions, sesame vinaigrette lettuce, red sauce, served on garlic rice buns; Zen (vegetarian): portabello mushroom and soy vegetarian patty, caramelized pineapple, sesame vinaigrette lettuce, teriyaki sauce, served on garlic rice buns</dd>
            <dt>Small bite: Kamikaze fries</dt>
            <dd>Crosscut fries topped with minced Korean BBQ beef, saut&eacute;ed onions, kimchi, green onions, and drizzled with KoJa&rsquo;s red sauce and Japanese mayo</dd>
            <dt>Drink: Strawberry kiwi mint lemonade</dt>
            <dd>Freshly-squeezed lemon juice, sweetened with agave sugar and paired with fresh strawberry, kiwi, and mint</dd>
          </dl>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/kung_fu_tacos.png" alt="Kung Fu Tacos">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://kungfutacos.com/">Kung Fu Tacos</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Chicken or veggie burritos</dt>
            <dd>Fresh flour tortilla filled with either nun chuk chicken or mushroom veggie, fried rice, black beans, Asian pico de gallo, and sweet hoisin sauce</dd>
            <dt>Small bite: Chicken or veggie tacos</dt>
            <dd>Served on fresh corn tortillas filled with either nun chuk chicken or mushroom veggie and topped with chopped red onion, cilantro, homemade Asian salsa, and sweet hoisin sauce</dd>
            <dt>Drink: Mint lychee lemonade</dt>
            <dd>Homemade lemonade made with fresh mint and lychee</dd>
          </dl>
          <p>Tan Truong and Jonathan Ward started Kung Fu Tacos in the summer of 2009. They serve flavorful street tacos filled with delicious Chinese-inspired fillings like Asian asada steak, nun chuk chicken, and their signature roast duck. They make all of their own marinades, salsas, and sauces in house and from scratch, and they source only the best quality ingredients so that each bite is bursting with flavor and freshness.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/la_luna_cupcakes.png" alt="La Luna Cupcakes">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.lalunacupcakes.com/">La Luna Cupcakes</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Cake pops</dt>
            <dd>Vanilla, chocolate, red velvet and mocha</dd>
            <dt>Small bite: Mini cupcakes</dt>
            <dd>Cake base choices: tres leches with heavy whipped cream, red velvet with cream cheese frosting, Aztec chocolate with a hint of chile with cream cheese frosting, or cheesecake topped with heavy whipped cream</dd>
            <dt>Drink: Iced green tea</dt>
          </dl>
          <p>Ever since Elvia was a young girl, she became excited when she ate and savored different cakes at parties. Her love of sweets and pastries motivated her to take pastry and decorating classes, so she could learn to mix different ingredients and create new flavors with innovative decorations. Elvia makes cupcakes to order for all kinds of occasions in delicious and unique flavors, including tres leches cakes and tiramisu. If you want to live life to the fullest, one cupcake at a time, La Luna is a great place to start.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/la_torta_gorda.png" alt="La Torta Gorda">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://latortagorda.net/">La Torta Gorda</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Tamal con mole</dt>
            <dd>Black bean tamales, served with chicken mole poblano</dd>
            <dt>Small bite: Quezadilla</dt>
            <dd>Hand made corn tortilla, stuffed with Oaxaca cheese and huitlacohe</dd>
            <dt>Drink: Agua fresca</dt>
          </dl>
          <p>One of San Francisco&rsquo;s most unique restaurants, La Torta Gorda opened its doors on July 2, 2002. This traditional Mexican restaurant was inspired by the flavorful foods found in the Mexican state of Puebla. Founder Armando Macuil, also a native of the state, wanted to share the foods of his homeland with the Bay Area and the rest of the world.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/la_victoria_bakery_company.png" alt="La Victoria Bakery Company">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.lavictoriabakery.com/">La Victoria Bakery Company</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Value bag</dt>
            <dd>2 mini conchas, 2 mini macaroons, 2 linzer jam prickly pear cookies</dd>
            <dt>Small bite: Tres leches goat milk blueberry parfait</dt>
            <dd>Traditional pastry made with condensed goat milk and lightened with whipped cream</dd>
            <dt>Small bite: Goat&rsquo;s milk custard cornet</dt>
            <dt>Small bite: Mexican macaroon with chocolate</dt>
            <dt>Small bite: Vanilla or chocolate Mexican concaha with strawberry crumble</dt>
            <dt>Drink: Prickly pear plum agua fresca</dt>
          </dl>
          <p>On a warm summer Mexican day in 1940, after having sold his fair share of shoes, medicines, kitchen utensils, and pan dulce, Gabriel Maldonado (age 20) had a brief thought. The United States doesn&rsquo;t sound so bad, and the Bracero Program was still being offered. It was a hard choice to leave behind a tradition of over 100 years of baking for the hopeful fruits of the United States. Fortunately for him, San Francisco was his final destination, and in 1951, Don Gabriel Maldonado opened a little bakery at 2951 24th Street named La Victoria Bakery. At the time it was mostly an Italian and Irish working-class neighborhood in the Inner Mission near St. Peter&rsquo;s Church. He eyed the location across the street, home of Murphy&rsquo;s Drug Store, as a better location as it was directly next to the church and on the sunnier side  of the street. In 1955, he moved across the street and never looked back. Now, in the capable hands of Jaime Maldonado and pastry chef Luis Villavelazques, La Victoria continues to thrive.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/lers_ros.png" alt="Lers Ros">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.lersros.com/">Lers Ros</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: BBQ chicken</dt>
            <dd>Grilled marinated chicken thigh served with sticky rice</dd>
            <dt>Small bite: Larb pork</dt>
            <dd>Ground pork salad with vegetables, chili, and rice powder</dd>
            <dt>Drink: Thai iced tea</dt>
          </dl>
          <p>Lers Ros was named by Tom Narupon Silargorn, owner and chef, and is derived from Sanskrit&mdash;the former form of the Thai language. These two words are ancient and formal. &ldquo;Lers&rdquo; equates to excellent, and &ldquo;ros&rdquo; to the taste of the food. Hence, &ldquo;Lers Ros&rdquo; means excellent taste of the food. It&rsquo;s a Thai restaurant dedicated to serving authentic, unique, and fresh Thai dishes, premium beverages and wines. Their food fits nicely with the demand for international, exotic, and healthy cuisine.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/lets_be_frank.png" alt="Let&rsquo;s Be Frank">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.letsbefrankdogs.com/">Let&rsquo;s Be Frank</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Hot dog</dt>
            <dd>Grass-fed beef dogs, family-farmed pork brats and sausages, turkey dogs all served on an Acme roll with freshly griddled onions</dd>
          </dl>
          <p>Let&rsquo;s Be Frank was founded by Sue Moore and Larry Bain, fast-food visionaries who started the company in 2005 with the simple goal of changing the world one hot dog at a time. Sue, formerly the &ldquo;meat forager&rdquo; for Berkeley, CA&rsquo;s famed Chez Panisse, and Larry, long-time restaurant professional, member of the San Francisco Sustainable Food Systems team, and advocate of the benefits of local, healthy foods, joined forces to return the much-demeaned hot dog to its rightful position: an icon for a healthy food system. Their goal was that their frank would become a way to nourish both eaters and growers. Let&rsquo;s Be Frank supports the ever-shrinking group of family farmers and ranchers committed to raising their animals in a humane, conscientious, and healthy manner and in so creates dogs gone good.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/liba_falafel.png" alt="LIBA Falafel">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://libafalafel.com/">LIBA Falafel</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Falafel sandwich</dt>
            <dd>Falafel patties (made from organic chickpeas) in pita bread with unconventional salads and sauces at our falafel bar</dd>
            <dt>Small bite: Sweet potato fries</dt>
            <dd>Crispy, California beauregard yam fries, tossed with cilantro, garlic, and lime</dd>
            <dt>Drink: Watermelon-mint agua fresca</dt>
            <dd>A refreshing cooler made from seasonal fruit</dd>
          </dl>
          <p>LIBA Falafel is an unconventional falafel bar, offering condiments for customers to top their own sandwiches. Their falafel is made from organic chickpeas, ground with spices and herbs, and is gluten-free. LIBA&rsquo;s regular locations feature a 15-item bar with salads, sauces, and pickles that change with California&rsquo;s seasonal produce.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/los_cilantros.png" alt="Los Cilantros">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.buylocalcampaign.com/losCilantros/">Los Cilantros</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Ceviche</dt>
            <dd>Seabass ceviche clasico, marinated in lime juice, tomatoes, onions, cilantro, Serranos, and avocado; served with chips</dd>
            <dt>Small bite: Elotes</dt>
            <dd>Roasted corn topped with mayonnaise and cotija cheese</dd>
            <dt>Drink: Strawberry lemonade</dt>
            <dd>Fresh, organic strawberries with lemonade</dd>
          </dl>
          <p>Dilsa comes from Cuernavaca, Morelos, and has been deeply involved with food since she was a girl. Growing up, Dilsa&rsquo;s family cultivated their own food for two reasons: the love of seeing their food develop from seed to table and because it was economical.</p>

          <p>When Dilsa came to the Bay Area, it was very exciting for her to discover the organic food movement. She realized that there weren&rsquo;t many Mexican restaurants that that offered healthy alternatives for people and the environment. This is what inspired her to start a Mexican food business using local, organic, and seasonal ingredients whenever possible.</p>

          <p>Los Cilantros is a catering and events company whose mission is never to lose authenticity, and to carefully prepare food with simple flavors using the best ingredients available. You can also feast on Dilsa&rsquo;s food at <a href="http://www.copitarestaurant.com/">Copita</a> in Sausalito where she is the sous chef.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/maite_catering.png" alt="Maite Catering">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.maitecatering.com/">Maite Catering</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Arepa rellena</dt>
            <dd>Grilled corn cake filled with chicken, mushrooms, and smoked aioli</dd>
            <dt>Small bite: Arepa de choclo</dt>
            <dd>Grilled fresh ground corn topped with cotija cheese</dd>
            <dt>Drink: Salpicon</dt>
            <dd>Fruit punch with diced fresh fruit</dd>
          </dl>
          <p>During culinary school, Columbian-born Constanza Ortiz found that, of everything she learned, what she loved best was making small things. She built Maite Catering with a focus on making the perfect, bite-sized treat for any occasion. From mini empanadas to tiny cups of ceviche, Constanza specializes in tapas, especially dishes from her native Columbia. Learn more about the inspired culinary and event experiences she offers <a href="http://www.maitecatering.com/">on her website</a>.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/marla_bakery.png" alt="Marla Bakery">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.marlabakery.com/">Marla Bakery</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Strawberry, almond, and lemon verbena parfait</dt>
            <dd>Layers of strawberry preserves, lemon verbena cream, and almond cake served in a take-home glass jar</dd>
            <dt>Small bite: Three cookies</dt>
            <dd>Chocolate chip, dark chocolate chunk, and Mexican wedding</dd>
            <dt>Drink: Peach &amp; thyme soda</dt>
          </dl>
          <p>First off, there is no Marla, or rather, there is no one Marla. Marla is a composition of the first letters of those in our families (including us, the J is silent) from whom we&rsquo;ve learned to cook and bake&mdash;mothers, fathers, grandmothers, bubbies, great grandmothers, and step-mothers. When we were thinking of a name for our new endeavor, we knew that we wanted it to reflect both past and present, where we are today and where we came from.</p>

          <p>In our lives food is a lodestone and after years of bread baking, pastry chefing, pickling, brining, and various and sundry other culinary obsessions, we decided it was time to take the leap together and realize this first fig newton of our imagination.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/maya_luna.png" alt="Maya Luna">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.podersf.org/">Maya Luna</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Bistec ranchero</dt>
            <dd>Thin-cut beef steak cooked with tomatoes, onions, green chiles, and potato; served with rice, black beans, and handmade corn tortillas</dd>
            <dt>Small bite: Fish taco</dt>
            <dd>Seasoned tilapia fish fried in a beer batter, served on a fresh-made corn tortilla, topped with shredded cabbage, tomatoes, cream, salsa roja, and a lime wedge</dd>
            <dt>Drink: Agua de fresa y menta</dt>
            <dd>Fresh made strawberry juice with mint and lime</dd>
          </dl>
          <p>Maya Luna is a worker-owned restaurant cooperative in San Francisco&rsquo;s Mission District. The worker-owners focus on a mix of authentic Central American and Mexican food using the freshest ingredients from the Bay Area and Mexico.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/meda.jpg" alt="MEDA">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://medasf.org/">Mission Economic Development Agency (MEDA)</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Tortas Mexicana</dt>
            <dd>A Mexican sandwich consisting of a split telera roll that is packed with any of various fillings ranging from meaty chorizo and pulled pork to vegetarian-friendly eggs and beans</dd>
            <dt>Small bite: Churros Mexicanos</dt>
            <dd>A Mexican doughnut, fried dough pastry, predominantly choux-based snack</dd>
            <dt>Drink: Horchata</dt>
            <dd>Beverage made with rice and milk</dd>
          </dl>
          <p>MEDA is a non-profit organization in the Mission District with a goal to contribute to the economical prosperity of Latino families in San Francisco. They are sponsoring two businesses this year. Leticia Montes is the owner of Churros Mexicanos and sells in a push cart in San Francisco. Other products she sells include Salvadoran and Mexican tamales and fresh fruit. Luis Bola&ntilde;os is the owner of Tortas Ciudad de Mexico, authentic food from the city of Mexico. Luis has small restaurant on 200 6th Ave, San Francisco.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/minnie_bells.gif" alt="Minnie Bell&rsquo;s Soul Movement">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.minniebells.com/">Minnie Bell&rsquo;s Soul Movement</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Gumbo with steamed rice</dt>
            <dd>Chicken, turkey sausage, shrimp, bell pepper, celery, and onion simmered in a rich chicken stock; served over steamed basmati rice</dd>
            <dt>Small bite: Sweet cornbread bites</dt>
            <dd>Baked sweet cornbread</dd>
            <dt>Drink: Watermelon sweet tea</dt>
            <dd>Fresh brewed tea with watermelon pur&eacute;e</dd>
          </dl>
          <p>A San Francisco native, Fernay McPherson has been cooking for years. After owning her own catering business for the past few years, she is now apart of the forever growing world of mobile food vending. Using traditional family recipes, Minnie Bell&rsquo;s menu offers up delicious authentic, homestyle soul food, combining soulful flavors and southern comfort foods that African-Americans have been cooking for generations.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/mozzeria.gif" alt="Mozzeria">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://mozzeria.com/">Mozzeria</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Burrata</dt>
            <dd>Burrata, candied garlic, gnoccho fritto, and basil</dd>
            <dt>Small bite: Margherita pizza</dt>
            <dd>fresh mozzarella, pomodoro sauce, and basil</dd>
            <dt>Drink: Ginger iced tea with lemon</dt>
          </dl>
          <p>Located in the Mission, Mozzeria offers an unique dining experience. Experience sumptuous pizzas cooked in our beautiful, 5,000-pound Stefano Ferrara oven. Choose from a menu of either traditional or imaginative pizzas. Open since December 2011, the d&eacute;cor of this lively hangout is decidedly modern, with the wood-burning oven in the center, commanding attention. You get to watch as your pizza is prepared and cooked. Mozzeria&rsquo;s menu also includes pastas and small dishes with fresh ingredients usually sourced from community farmers markets. A wine bar, local beers on tap, vintage sodas and desserts assure an enjoyable dining experience.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/namu_street_food.png" alt="Namu Street Food">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://streetfood.namusf.com/">Namu Street Food</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Okonomiyaki</dt>
            <dd>Crispy and gooey savory pancake with cabbage, kimchi, and scallion; topped with Kewpie mayo and tonkatsu sauce</dd>
            <dt>Small bite: The real Korean taco</dt>
            <dd>Kalbi marinated short rib or chicken thigh, seasoned rice, kimchi remoulade, kimchi salsa, and housemade teriyaki on toasted seaweed (gluten free)</dd>
            <dt>Drink: Green tea lemonade</dt>
          </dl>
          <p>A family run place where passion and purity make up a unique neighborhood restaurant. The cuisine is humble, innovative and personal while keeping Korean tradition close to heart. Our menu is inspired by the best local bounty.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/neo_cocoa.png" alt="Neo Cocoa">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.neococoa.com/">Neo Cocoa</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: 5-piece tasters&rsquo; box</dt>
            <dd>5-piece box of chocolate truffles: almond butter topped with applewood smoked sea salt, zested lime, toasted coconut, crushed cacao nib and mocha cinnamon</dd>
            <dt>Small bite: 2-piece popular box</dt>
            <dd>2-piece box of chocolate truffles: almond butter topped with applewood smoked sea salt, zested lime</dd>
          </dl>
          <p>While wondering what she&rsquo;d be when she grew up, Christine Doerr found herself watching a lot of Julia Child. So following her idol&rsquo;s footsteps, she attended the California Culinary Academy, where she perfected her craft during her more than 10 years of working in multiple establishments in the Bay Area. When Christine&rsquo;s long-held dream of creating her own business to sell chocolate truffles using fresh, local, organic ingredients came knocking at the door, Christine answered, and Neo Cocoa was born.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/nojo.png" alt="Nojo">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.nojosf.com/">Nojo</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Japanese fried chicken</dt>
            <dd>Kara-age of wings &amp; drummies, tossed in escabeche sauce with veggies</dd>
            <dt>Small bite: Nojo fries</dt>
            <dd>Japanese poutine</dd>
            <dt>Drink: Nojo iced tea</dt>
          </dl>
          <p>Nojo specializes in izakaya-style food through a California lens.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/nombe_izakaya.png" alt="Nombe Izakaya">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.nombesf.com/">Nombe Izakaya</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Ramen burger</dt>
            <dd>A patty made of 50% Nombe&rsquo;s pork belly and 50% ground beef, served with mizuna, tomato, shio-koji pickled cucumbers, sushi vinegar caramelized onions, your choice of sauce and cheese between a &ldquo;bun&rdquo; made from ramen noodles</dd>
            <dt>Small bite: Takoyaki</dt>
            <dd>Japanese octopus balls: savory dashi-based pancake dough balls with octopus, ginger, and scallions, topped with tonkatsu sauce, wasabi aioli, and ao-nori seaweed</dd>
            <dt>Drink: Virgin hibiscus sangria</dt>
            <dd>A refreshing blend of hibiscus, citrus, and fruit, lightly sweetened</dd>
          </dl>
          <p>Nombe (pronounced &ldquo;nom &ndash; bay&rdquo;) refers to someone who likes to drink heartily. We are bringing Japan&rsquo;s most popular eating and drinking establishments, izakaya, to the heart of Mission. Come taste the real Japanese izakaya fare made by a chef who grew up in Japan eating them. We offer Japanese tapas made with Northern California&rsquo;s seasonal, sustainable, and locally-sourced produce along with over 90 brands of premium sake, organic shochu cocktails, as well as eight Japanese and local beers on tap.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/nopalito.gif" alt="Nopalito">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.nopalitosf.com/">Nopalito</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Totopos con chile y picadillo</dt>
            <dd>Housemade corn tortilla chips tossed in chile de arbol salsa, then topped with ground pork and potato, cotija cheese, cilantro, and onion; served with crema (gluten free, vegetarian, and vegan available upon request)</dd>
            <dt>Small bite: Esquites</dt>
            <dd>Sweet summer corn with crema, queso fresco, lime and chile (gluten free, vegetarian, and vegan available upon request)</dd>
            <dt>Drink: Mexican hot chocolate</dt>
            <dd>TCHO chocolate, guajillo, arbol and ancho chilies, vanilla, orange and cinnamon</dd>
            <dt>Dessert: Paletas</dt>
            <dd>Mexican popsicles: dark chocolate-cinnamon or seasonal fruit (gluten free and vegetarian; some flavors vegan)</dd>
          </dl>
          <p>Nopalito is a vibrant neighborhood Mexican kitchen celebrating the traditional cookery of Mexico and utilizing its philosophy of purchasing local, organic, and sustainable ingredients.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/onigilly.png" alt="Onigilly">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://onigilly.com/">Onigilly</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Onigilly combo</dt>
            <dd>3 rice balls with a side of edamame</dd>
            <dt>Small bite: Onigilly rice balls</dt>
            <dd>3 rice balls with toppings of chicken teriyaki, spicy shrimp, and eggplant (marinated in ginger soy)</dd>
            <dt>Drink: Ginger green tea lemonade</dt>
            <dd>Housemade Japanese-style lemonade flavored with green tea and ginger</dd>
          </dl>
          <p>Onigilly [Oh-Knee-Ghee-Lee] serves onigiri, a traditional Japanese food made with brown rice and gourmet filling wrapped with seaweed. When owner Koji Kanematsu came to the US, he noticed that there were sushi restaurants everywhere but couldn&rsquo;t understand why his favorite Japanese snack was nowhere to be found. So he thought, &ldquo;Why don&rsquo;t I open an onigiri business and spread this delicious, healthy and handy snack in the United States?&rdquo; And in 2009, that&rsquo;s exactly what he did! You can try onigilly from their trailer at Justin Hermann Plaza and various other locations, as well as at your next office party.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/osha_thai.png" alt="Osha Thai">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://oshathai.com/">Osha Thai</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Pumpkin curry</dt>
            <dd>Kabocha squash, bell pepper, bamboo shoots, sweet basil, and garlic in Thai red chili curry</dd>
            <dt>Small bite: Thai samosa or veggie crispy roll</dt>
            <dd>Thai samosa: savory Thai pastry stuffed with potato, curry powder, onion; veggie crispy roll: silver noodle, cabbage, mushroom, and carrot wrapped in an egg wrapper, lightly fried and served with sweet &amp; sour, mouth-watering plum dipping sauce</dd>
            <dt>Drink: Thai iced tea or Thai iced coffee</dt>
            <dd>Traditional Thai street drinks, your choice of iced tea or iced coffee topped with splash of half &amp; half</dd>
          </dl>
          <p>When sisters Wassana Korkhieola and Lalita Souksamlane needed a name for their Thai restaurant in the Tenderloin, they went to the royal Thai word for &ldquo;delicious.&rdquo; But there was another, much more pedestrian reason that made the name OSHA Thai so appealing: it&rsquo;s easy to say. From a simple restaurant in the Tenderloin, the family of OSHA Thai restaurants have grown in popularity and sophistication. The first OSHA Thai debuted in 1996, and since then, six more have opened across the city. The original location keeps true to its origins, as any great restaurant should. OSHA Thai welcomes you to the front door of its restaurants. They offer a casual experience that leads one on a hip, exciting journey in Thai cuisine.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/pig_pie.gif" alt="Pig &amp; Pie">
      <div class="payload">
        <div class="inner">
          <h1><a href=""></a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Bratwurst with sauerkraut</dt>
            <dd>Handmade bratwurst and house sauerkraut with spicy beer mustard</dd>
            <dt>Small bite: German potato salad</dt>
            <dd>Cr&egrave;me fra&icirc;che, red onion, garlic, capers, and beer mustard</dd>
            <dt>Drink: Mint-rosewater lemonade</dt>
          </dl>
          <p>Pig &amp; Pie is new to 24th St, but our recipes are time-tested and true. We make everything by hand. We pickle, smoke, cure, bake, grind, stuff, and twist. From our five-hour slow roasted pork ribs to our seven-day brined beef tongue or handmade sausages, you&rsquo;ll taste the difference.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/pinx.png" alt="Pinx">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.pinxcatering.com/">Pinx</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Bananas Foster waffle</dt>
            <dt>Small bite: Maple glazed bacon</dt>
            <dd>Applewood smoked bacon, brown sugar, cracked blacked pepper in maple glaze</dd>
            <dt>Drink: Watermelon hibiscus iced tea</dt>
            <dd>Sweet tea with watermelon, hibiscus, and mint</dd>
          </dl>
          <p>The Food Channel, local restaurants, and bookstores have all collaborated to inspire and create the vision of Pinx: Southern gourmet. There is nothing more gratifying to Pinky than to see the happy faces of people enjoying her tasty creations. A friend pressured her to participate in the 2011 San Francisco Street Food Festival, and the rest is history. Her dream was to open a breakfast spot with many items, such as sweet potato pie waffles, peach cobbler waffles, red velvet pancakes, maple glazed bacon, and strawberry shortcake French toast. Life is short&hellip;eat something memorable.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/radio_africa_kitchen.jpg" alt="Radio Africa &amp; Kitchen">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.radioafricakitchen.com/">Radio Africa &amp; Kitchen</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Grilled flank steak</dt>
            <dd>With chermoula and quinoa salad</dd>
            <dt>Small bite: Seven vegetable tangine</dt>
            <dd>With garbanzo beans and quinoa salad</dd>
            <dt>Drink: Hibiscus lemonade</dt>
            <dd>Refeshing, tangy, and slightly sweet</dd>
          </dl>
          <p>Radio Africa &amp; Kitchen was created by Chef Eskender Aseged. Originally from Ethiopia, Eskender arrived in San Francisco in the late 80s where he spent the next 20 years working in the Bay Area with such luminaire chefs as Jeremiah Tower, Joyce Goldstein, Nancy Oaks, Daniel Peterson, and Daniel Humm. During this time, inspired by these great chefs, he began experimenting with different food preparations of his own.</p>

          <p>When you dine with Radio Africa &amp; Kitchen, you will enjoy a seasonal, nutritionally well-balanced meal that always includes organic vegetables, greens, grains, nuts, wild fish, shellfish and fruit, accompanied by fine herbs and spices.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/rice_paper_scissors.gif" alt="Rice Paper Scissors">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.ricepaperscissors.com/">Rice Paper Scissors</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Beef or mushroom pho rolls</dt>
            <dd>Beef: fresh rice noodle rolls filled with ground beef and Thai basil, served with nuoc cham; Mushroom: fresh rice noodle rolls filled with beech mushrooms, fried tofu, and Thai basil, served with nuoc cham chay</dd>
            <dt>Small bite: Grilled baby octopus</dt>
            <dd>Fish sauce marinated octopus served with rau ram (Vietnamese coriander) and lime</dd>
            <dt>Drink: Vietnamese iced coffee</dt>
            <dd>Slow-dripped Vietnamese coffee with condensed milk</dd>
          </dl>
          <p>Rice Paper Scissors was created by Valerie Luu and Katie Kwan, two Vietnamese street food vendors in San Francisco who love sitting on small stools. Inspired by the sidewalk dining and street food they experienced in Vietnam, they wanted to recreate the experience in the Mission&mdash;complete with small tables, even smaller stools, fresh Vietnamese condiments, Cambodian pop music, and a rotating menu of Vietnamese comfort foods.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/ritual_coffee_roasters.gif" alt="Ritual Coffee Roasters">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.ritualroasters.com/">Ritual Coffee Roasters</a></h1>
          <dl class="menu_item">
            <dt>Small bite: Black Jet assorted pastries</dt>
            <dd>fresh, local pastries from <a href="http://blackjetbakingco.com/">Black Jet Baking Co.</a></dd>
            <dt>Drink: Hot &amp; iced coffee</dt>
            <dd>Made-to-order hot coffee &amp; cold-brewed iced coffee</dd>
          </dl>
          <p>Ritual Coffee Roasters opened in May 2005 with the intention to share amazing coffee with San Francisco, and it was only a matter of weeks, or maybe just one, before Ritual had a line out the door. Many of its customers asked what it was doing to its coffee to make it taste so good, while the connoisseurs simply wanted to know what took it so long to get here. With a strict focus on direct sourcing and strengthening relationships with those producers, Ritual has continued to offer delicious coffees and a great experience to its customers, year after year.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="/z_logos/vendors/sal_de_vida_gourmet.png" alt="Sal de Vida Gourmet">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.saldevidagourmet.com/">Sal de Vida Gourmet</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Culinary finishing salt</dt>
            <dt>Small bite: Rice mixes, soups</dt>
            <dt>Drink: Rim salt</dt>
          </dl>
          <p>Sal de Vida Gourmet was created from Adriana&rsquo;s passion for cooking and creating innovative seasonings to help improve flavors with natural and healthy ingredients. She considers her company a purveyor of flavor&mdash;Sal de Vida Gourmet infuses the purity and simplicity of salt with a multitude of natural seasonings and flavors to create infusions and mixes that transform any meal into a unique epicurean experience. Their gourmet products are used in the cooking and seasoning process to transform the ordinary meal into a gourmet experience, just by adding a pinch of salt. Sal de Vida Gourmet also features a specialty line of delicious and easy to prepare instant soups and side dishes.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/senor_sisig.png" alt="Se&ntilde;or Sisig">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.senorsisig.com/">Se&ntilde;or Sisig</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Sisig with steamed rice</dt>
            <dd>Choice of pork, chicken, or tofu topped with onions and jalape&ntilde;os, served with a scoop of steamed jasmine rice and a side of achara (Filipino pickles)</dd>
            <dt>Small bite: Sisig taco</dt>
            <dd>Choice of pork, chicken, or tofu on a 6" corn tortilla, topped with onions, lettuce and cilantro cream sauce; topped off with fresh diced jalape&ntilde;os if you want it spicy</dd>
            <dt>Drink: Calamansi juice</dt>
            <dd>Filipino tropical lime juice</dd>
          </dl>
          <p>We are a Filipino fusion food truck. Our specialty is our family&rsquo;s Sisig, which is traditional Filipino dish. We combine Filipino flavors with Latin American food concepts. We are most known for our Sisig tacos and Sisig burritos.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/state_bird_provisions.gif" alt="State Bird Provisions">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://statebirdsf.com/">State Bird Provisions</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Hand pulled burrata with garlic bread</dt>
            <dd>Crispy garlic bread, topped with burrata cheese</dd>
            <dt>Small bite: Spicy summer tomato giardinier</dt>
            <dd>Pickled vegetables</dd>
            <dt>Drink: Berry limeade</dt>
          </dl>
          <p>State Bird Provisions started as a recipe for serving quail. It has slowly evolved into a restaurant without any programmed elements.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/sweets_collection.png" alt="Sweets Collection">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.sweetscollections.com/">Sweets Collection</a></h1>
          <dl class="menu_item">
            <dt>Small bite: Tequila jelly shots</dt>
            <dd>Fancy and artistic shots, more sophisticated than regular jello shots, these Mexican tequila jelly cocktails combine edible gelatin flowers or other motif designs set inside transparent water gelatin that mixed with juices and liquors.</dd>
          </dl>
          <p>Inspired by the idea of an art collection, Rosa Rodriguez&rsquo;s Sweets Collection is based on gelatin that is not only artistic but also edible and sweet. Rosa, hailing from Mexico, once had paintings exhibited in galleries before she learned the art of creating paintings in this palatable medium. Gelatin art can be traced to France, before being imported to Mexico where it was developed and perfected, but Rosa is proud to now bring these sweet creations to San Francisco. Her work is available by special order on her website.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/tacolicious.gif" alt="Tacolicious">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://tacolicioussf.com/">Tacolicious</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Costillas</dt>
            <dd>Tamarind-haba&ntilde;ero glazed pork ribs</dd>
            <dt>Small bite: Calabasitas</dt>
            <dd>Corn, summer squash, and peppers</dd>
            <dt>Drink: Watermelon agua fresca</dt>
          </dl>
          <p>Tacolicious is a modern, casual Mexican restaurant in San Francisco. It sources its ingredients responsibly, take its tacos as seriously as its cocktails, and offer a fun sit-down, full-service experience.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/tainos.png" alt="Taino&rsquo;s Puerto Rican Food">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.tainosprfood.com/">Taino&rsquo;s Puerto Rican Food</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: 3 lechon sliders</dt>
            <dd>Slow-cooked marinated pork on sweet Hawaiian rolls toasted with homemade aioli, cilantro, and avocado with a drizzle of aioli on top</dd>
            <dt>Small bite: Black bean &amp; banana empanadas</dt>
            <dd>Black Bean: black beans with corn, caramelized onion, fire-roasted orange bell peppers, cilantro, cumin, spices, and a Puerto Rican herb called culantro; banana: bananas cooked in butter, sweet plantains, spices, brown sugar, spiced rum, and chocolate (vegetarian)</dd>
            <dt>Drink: Pi&ntilde;a colada</dt>
          </dl>
          <p>Taino&rsquo;s Puerto Rican Food was a 40th birthday present from owner Lisa Callaghan to herself. Armed with a passion to cook and desire to share the hidden treasure of Puerto Rican food with Northern California, Lisa first brought Taino&rsquo;s to the masses with help from the Women&rsquo;s Initiative at La Cocina&rsquo;s 2011 Street Food Festival. Building upon her Puerto Rican grandma&rsquo;s traditional recipes, she served up almost 1,000 pastelillos (empanadas) to a hungry crowd.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/the_whole_beast.png" alt="The Whole Beast">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://thewholebeast.com/">The Whole Beast</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Lamb shwarma</dt>
            <dd>Whole roasted lamb, marinated in chermoula yogurt sauce with a cucumber and red onion salad, chermoula and harrissa on a whole wheat lavash</dd>
            <dt>Small bite: Saffron potato salad</dt>
            <dd>Smoked yukon potatoes with saffron, peas, green onion, parsley, and mayo</dd>
            <dt>Drink: Moroccan mint tea</dt>
            <dd>Gunpowder green tea with spearmint</dd>
          </dl>
          <p>The Whole Beast provides the centerpiece to any occasion&mdash;an entire animal raised and prepared in a holistic manner, paying special attention to animal husbandry. No waste is produced&mdash;we use and cook the whole beast. From pig, lamb and cow, to fish and fowl, we will personally choose and cook the whole animal as part of your event.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/three_twins.png" alt="Three Twins Ice Cream">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://threetwinsicecream.com/">Three Twins Ice Cream</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Ice cream sandwich</dt>
            <dd>A variety of inconceivably delicious organic ice cream sandwiched between two cookies</dd>
            <dt>Small bite: Ice cream cup</dt>
            <dd>Choose from six of Three Twins&rsquo; 17 organic main flavors served in a five-ounce cup</dd>
          </dl>
          <p>Three Twins is a true farm-to-cone producer, making all of its ice cream from scratch with milk and cream sourced from organic family farms that are all within 17 miles of the company&rsquo;s Petaluma ice cream factory. While being organic is dandy, Three Twins Ice Cream focuses on creating inconceivably delicious ice cream with flawless texture. Since being founded by Neal Gottlieb in 2005, Three Twins has grown from one tiny ice cream shop in a tucked away San Rafael location without a single employee to an organic ice cream empire that includes 45 employees, four scoop shops, and packaged ice cream being sold in close to 1,000 stores in 35 states.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/tio_chilos.jpg" alt="Tio Chilo&rsquo;s">
      <div class="payload">
        <div class="inner">
          <h1><a href="https://www.facebook.com/tio.chilos">Tio Chilo&rsquo;s</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Grilled quail</dt>
            <dd>Grilled quail with a mango and jicama slaw</dd>
            <dt>Small bite: Tostadita de tinga</dt>
            <dd>Shredded chicken smothered in an authentic chipotle sauce topped with a purple cabbage and cotija cheese</dd>
            <dt>Drink: Yerba Buena agua fresca</dt>
            <dd>All-natural fresh mint water</dd>
          </dl>
          <p></p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/to_hyang.gif" alt="To Hyang">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://tohyang.org/">To Hyang</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Dagi kalibi chim</dt>
            <dd>Korean pork ribs braised in a spicy sauce</dd>
            <dt>Small bite: Bibim guksoo</dt>
            <dd>Cold noodles in a spicy sauce with kimchi, topped with cucumber</dd>
            <dt>Drink: Su gung ka</dt>
            <dd>Cinnamon, persimmon, and ginger served cold</dd>
          </dl>
          <p>Hwa Soon Im was born in Buyo, Korea, and has been cooking ever since. Her restaurant, located here in San Francisco and run with the help of her family, serves authentic Korean home-cooking featuring all pastes, sauces and pickles made in-house. To Hyang has been featured on Anthony Bourdain&rsquo;s <em>The Layover</em>.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/wise_sons_deli.png" alt="Wise Sons Deli">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.wisesonsdeli.com/">Wise Sons Deli</a></h1>
          <dl class="menu_item">
            <dt>Small bite: Chocolate babka</dt>
            <dd>A sweet brioche cake rolled with chocolate and cinnamon</dd>
          </dl>
          <p>The Wise Sons are Evan Bloom and Leo Beckerman, two long-time friends who had a yearning for a food they couldn&rsquo;t find in San Francisco. Together, they are bringing the food and the experience of their memories to San Francisco. Each dish comes from the heart; Jewish deli made from scratch with quality, seasonal ingredients served with a sense of old-school hospitality. Pastrami is house-smoked and served on their own rye. Bialies are baked fresh, and pickles rotate with the seasons. Looking to grow the Bay Area Jewish food scene, collaboration with local food artisans have brought everything from authentic bagels to naturally fermented sodas to their menu.</p>
        </div>
      </div>
    </li>

    <li class="vendor">
      <img class="logo" src="images/vendor_logos/yvonnes_southern_sweets.png" alt="Yvonne&rsquo;s Southern Sweets">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.yvonnessouthernsweets.com">Yvonne&rsquo;s Southern Sweets</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Southern pies</dt>
            <dd>Pecan or sweet potato pie</dd>
            <dt>Small bite: Pecan praline</dt>
            <dd>Southern candy confection made with butter, sugar, milk, and pecans</dd>
          </dl>
          <p>Inspired by her late grandmother, Yvonne has been living out a family legacy of serving mouth-watering homemade southern sweets since 2003. A San Francisco native, Yvonne began at home sharing her special recipe of pralines, a confection pecan candy originating from the Old South. Perfecting a recipe given by a close family friend, Yvonne began sharing her creations with family, friends and co-workers. Everyone who sampled her pralines would rant and rave of the delicious authentic flavor and encouraged Yvonne to share her tasty treats with others. Using her enterprising talents, Yvonne began making her pralines and expanded her offerings to include other specialty desserts such as ol school butter cookies, sweet potato pies, peach cobblers, and cakes for small parties and social gatherings at the request of family, friends and local community organizations. The small order requests quickly grew into large orders of 100-200 guests at local civic and social events. Yvonne opened her store in the Bayview Hunters Point community in 2006, and the rest is history.</p>
        </div>
      </div>
    </li>

    <li class="vendor la-cocina-biz">
      <img class="logo" src="images/vendor_logos/zellas_soulful_kitchen.png" alt="Zella&rsquo;s Soulful Kitchen">
      <div class="payload">
        <div class="inner">
          <h1><a href="http://www.zellassoulfulkitchen.com/">Zella&rsquo;s Soulful Kitchen</a></h1>
          <dl class="menu_item">
            <dt>Bigger bite: Buffalo blue chicken sandwich</dt>
            <dd>Crispy fried chicken breast dipped in housemade buffalo sauce and topped with a crunchy blue cheese slaw, served on French hero roll</dd>
            <dt>Small bite: Jilled-up hush puppies</dt>
            <dd>Corn fritter comprised of smoked cheddar cheese, onions, jalapenos, fresh corn, and spices and drizzled with a remoulade sauce</dd>
            <dt>Drink: Southern sweet tea</dt>
            <dd>A select combination of black teas brewed, sweetened and topped with a sprig of fresh mint</dd>
          </dl>
          <p>It&rsquo;s said that when you&rsquo;re born, you come into the world knowing exactly what you&rsquo;re supposed to do with your life. Due to numerous distractions, most of us take detours on our journeys, spending quite a lot of time trying to discover our way back to that knowingness. At the young age of eight years old, Chef Dionne Knox remembers spending most of her time in the kitchen with her grandmother, Zella, cooking meals and baking delicious desserts. Zella was a dynamic chef known for cooking everything from scratch. To ensure the best flavors in her cooking, Zella grew fresh vegetables in her garden, raised chickens for fresh eggs, made her own jam, baked bread every day, and churned her own butter. At Zella&rsquo;s Soulful Kitchen, she continues this tradition by providing farm-fresh, handcrafted soul food.</p>
        </div>
      </div>
    </li>

  </ul>
</section>



<?php require 'inc/bottom.inc.php'; ?>