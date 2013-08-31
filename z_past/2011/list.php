<?php
  $page_id = 'list';
  require 'inc/top.inc.php';
?>
  
  <script src="js/map.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" charset="utf-8">
    $(function(){
      new Map({
        mapElement : $('#vendor_map'),
    		favsContainer : $('#fav_list'),
    		favsListPrefix : 'fav',
    		favClass : '.fav',
    		vendorSelector : '.vendor',
    		vendorActiveClassName : 'active',
      });
    

      var viewportWidth;
      if (typeof screen.width != 'undefined'){
        viewportWidth = screen.width;
      }

      if(viewportWidth <= 320){
        var favs = $('.favs').remove();
        $('body *').remove();
        $('body').append(favs).addClass('iphone');
        $('#fav_list .fav .close').click(function(){
          if(!confirm("Are you sure you want to remove this item?")){
            return false;
          }
        });
      };
    
    });
    
    
  </script>
  
  <section class="kraft">
      
    <div class="map_header">
      <h1><img src="images/get_your_list_ready.png" alt="Get Your List Ready!" /></h1>
      <h2>All the best food in the Bay and only 8 hours? Plan well so you don&rsquo;t  miss out.</h2>
      <a class="sfsff_map" href="sfsff_map.pdf">Downloadable Festival Map (PDF)</a>
      <hr />
    </div>
    
    <div class="map cf" id="vendor_map">
      <h1>View and Add Vendors By Blocks</h1>
      <div class="info_col">
        <div id="map_nav" class="map_nav">
          <a id="nav_folsom_22_23" href="#folsom_22_23"><div class="big">Folsom</div> <div class="small">(22nd-23rd)</div></a>
          <a id="nav_folsom_23_24" href="#folsom_23_24"><div class="big">Folsom</div> <div class="small">(23rd-24th)</div></a>
          <a id="nav_folsom_24_25" href="#folsom_24_25"><div class="big">Folsom</div> <div class="small">(24th-25th)</div></a>
          <a id="nav_folsom_25_26" href="#folsom_25_26"><div class="big">Folsom</div> <div class="small">(25th-26th)</div></a>
          <a id="nav_street_23" href="#street_23"><div class="big">23rd</div></a>
          <a id="nav_street_25" href="#street_25"><div class="big">25th</div></a>
        </div>
        <div class="favs"><div class="inner">
          <h2>Your Favorites List</h2>
          <div class="share_list">
            <label for="share_url">Share Your List / Send to iPhone</label>
            <input type="text" class="share_field" id="share_url"></input>
          </div>
          <div id="fav_list" class="empty">
            <div class="empty_message">
              <h3>Your List is Empty!</h3>
              <p>Add your favorite vendors, then share the URL with your friends or open it on your iPhone at the festival.</p>
            </div>
          </div>
        </div></div>
      </div>
      <div class="vendor_col">
        
        <div id="folsom_22_23" class="street">
          <h2>FOLSOM (22ND-23RD)</h2>
          <div id="red_poppy" class="vendor fav">
            Red Poppy Art House
            <!-- <ul class="menu">
              <li>Delicious poppys</li>
            </ul> -->
          </div>
          <div id="ehl" class="vendor fav">EHL</div>
          <div id="flour_water" class="vendor fav">Flour + Water <div class="menu">Fried Mixed Peppers and Corn ($3), Porchetta Sandwich ($8), Watermelon &amp; mint limeade ($3)</div></div>
          <div id="el_huarache_loco" class="vendor fav">El Huarache Loco<div class="menu">Taco de Alambre ($3), Huarache con Nopales ($8), Horchata ($3)</div></div>
          <div id="netties" class="vendor fav">Nettie&rsquo;s <div class="menu">Dungeness Crab Deviled Eggs ($3), Fried Oysters and Tartar ($8)</div></div>
          <div id="endless_summer" class="vendor fav">Endless Summer Sweets <div class="menu">Kettle Corn ($3), Funnel Cake ($8), Lemonade ($3)</div></div>
          <div id="beijing" class="vendor fav">Beijing <div class="menu"> Yang Rou Chuay/Grilled Lamb Skewers ($3),  Rou Jia Mo/"Chinese Hamburger" ($5), House made Plum Juice ($2)</div></div>
          <div id="commonwealth" class="vendor fav">Commonwealth <div class="menu">Watermelon Gazpacho ($2), Grilled lamb cheek ($8), Strawberry, Lime and Longpepper Agua Fresca ($3)</div></div>
          <div id="off_the_grid" class="vendor fav">Off the Grid</div>
          <div id="square" class="vendor fav">Square</div>
          <div id="rye_on_the_road" class="vendor fav">[Bar] Rye on the Road</div>

          <h2>CEASAR CHAVEZ SCHOOL</h2>
          <div id="ingrids" class="vendor fav">Ingrid&rsquo;s Lunchbox <div class="menu">Apple Crisp Crepe ($6)</div></div>
          <div id="kung_fu_tacos" class="vendor fav">Kung Fu Tacos <div class="menu">Nun Chuck Chicken Taco ($3), Nun Chuck Chicken Burritto ($8), Ginger Lychee Limeaid ($3)</div></div>
          <div id="hapa_ramen" class="vendor fav">Hapa Ramen <div class="menu">Cherry Tomatoes, Roasted Corn, Soy and Basil Salad ($3), Pork Ramen with seasonal vegetables ($8), Ginger Ale/Smoked Strawberry &amp; Vanilla Soda ($3)</div></div>
          <div id="zare" class="vendor fav">Zar&eacute; Fly Trap <div class="menu">  Mediterranean Chickpea Salad  ($3), 2 Persian Lamb Tacos  ($8), Minted Memory  ($3)</div></div>
          <div id="namu" class="vendor fav">Namu <div class="menu">&quot;The Real Korean Tacos&quot; (1 for $3 or 2 for $5), &quot;Okonomiyaki&quot; ($8), Green Tea Lemonade  ($3)</div></div>
          <div id="a16" class="vendor fav">A16 <div class="menu">Duroc Pork Meatball  ($3), Cannoli with Chocolate and Pistachio ($3)</div></div>
          <div id="lers_ros" class="vendor fav">Lers Ros <div class="menu">Chicken Larb ($3), Thai BBQ Chicken with Sticky Rice ($8), Thai Ice Tea ($2)</div></div>
          <div id="wise_sons" class="vendor fav">Wise Sons Deli <div class="menu">Chocolate Babka ($3), 2 Pastrami Sliders ($8), Egg Cream ($3)</div></div>
          <div id="delicioso_creperie" class="vendor fav">Delicioso Creperie <div class="menu">Crepe con cajeta ($5)</div></div>
          <div id="il_cane_rosso" class="vendor fav">Il Cane Rosso <div class="menu">Summer farmer&#x27;s market pickles ($3), Tuscan-style grilled spareribs &amp; garlic bruschetta ($8), Peach &amp; ginger porch tea ($3)</div></div>
          <div id="onigilly" class="vendor fav">Onigilly <div class="menu">Ongilly; Spicy Shrimp, Eggplant (V) or Ume ($3), Geisha Box; 3 Onigilly+Edamme ($8), Barley Tea ($2)</div></div>
          <div id="anda_piroshki" class="vendor fav">Anda Piroshki <div class="menu">Piroshki ($3), Blinis &amp; Red Caviar  ($8), Kompot ($2)</div></div>
          
          <!-- <a class="next_button" id="nav_folsom_23_24" href="#folsom_23_24">More Vendors: Folsom (23rd-24th) &raquo;</a> -->
        </div>

        <div id="folsom_23_24" class="street">
          <h2>FOLSOM (23RD-24TH)</h2>

          <div id="chaac_mool" class="vendor fav">Chaac Mool <div class="menu">Taco de Cochinita Pibil ($3), Nachos de Barbacoa ($8), Agua Fresca ($2)</div></div>
          <div id="liba_falafel" class="vendor fav">LIBA Falafel <div class="menu">Sweet Potato Fries ($3), Falafel Sandwich ($8)</div></div>
          <div id="los_cilantros" class="vendor fav">Los Cilantros <div class="menu">Elote / Roasted Corn ($3), Ceviche a la Mexicana ($8), Agua Fresca ($3)</div></div>
          <div id="good_foods_catering" class="vendor fav">Good Foods Catering <div class="menu">pulled pork sandwiches ($3), Pork Belly BLT ($7), Strawberry Basil Lemonade  ($2)</div></div>
          <div id="ejis" class="vendor fav">Eji&rsquo;s Ethiopian<div class="menu">Shinbra Butacha Cake ($3), Spicy Lentil Wrap ($8), Thyme Iced Tea ($3)</div></div>
          <div id="nombe" class="vendor fav">Nombe <div class="menu">Takoyaki ($3), Honey Togarashi Chicken Wings  ($8), Virgin Hibiscus Sangria ($3)</div></div>
          <div id="tamales_los_mayas" class="vendor fav">Tamales los Mayas (Alicia&#x27;s) <div class="menu">Mexican Tamales; Chicken, Pork or Vegetarian ($3), 3 Tamales (Chicken, Beef, or Cheese ($8), Agua Fresca ($3)</div></div>
          <div id="creme_brulee_cart" class="vendor fav">Cr&egrave;me Brulee Cart <div class="menu">Honey Vanilla Bean Cr&egrave;me Brulee  ($4), The Yes Please! Cr&egrave;me Brulee ($4)</div></div>
          <div id="pinx" class="vendor fav">Pinx <div class="menu">Sweet Potato Pie Waffle with Bourbon Caramel Sauce ($5)</div></div>
          <div id="mad" class="vendor fav">M.A.D Abroad <div class="menu">M.A.D. Tuna Tartare ($4)</div></div>
          
          <div id="seoul_sausage" class="vendor fav">Seoul Sausage <div class="menu">Kalbi Sausage or Spicy Pork Sausage ($6)</div></div>
          <div id="rau_om" class="vendor fav">Rau Om <div class="menu">Nem Chua (Vietnamese Cured Beef) ($6)</div></div>
          <div id="la_mar" class="vendor fav">La Mar Cebicheria <div class="menu">Yuca Frita ($3), Cebiche Clasico ($8), Chicha Morada ($3)</div></div>
          <div id="la_victoria" class="vendor fav">La Victoria <div class="menu">Assorted Sweets / Pan Dulce ($3), Macadamia nut milk chocolate cookies (2) ($4), Hibicus Salted Plum Agua Fresca  ($3)</div></div>
          <div id="el_toyanense" class="vendor fav">El Tonayense <div class="menu">El Tonayense Taco&#x27;s  ($2), El Tonayense Burrito ($7), Horchata + Melon ($2)</div></div>
          <div id="blue_bottle" class="vendor fav">Blue Bottle Coffee <div class="menu">New Orleans Style Iced Coffee ($4), Americano ($2), Cappucino ($3)</div></div>
          <div id="ls_cafe" class="vendor fav">L&#x27;s Caf&eacute; <div class="menu">Chicken Mole Croissant ($3), Veggie and Cream Cheese Bagel ($5), Very Berry Iced Tea</div></div>
          <div id="zipcar" class="vendor fav">ZipCar</div>
          <div id="kasa" class="vendor fav">Kasa <div class="menu">Amritsari Fish Fritter ($3), Kati Roll; Chicken Tikka or Spicy Cauliflower ($5), Mango Lassi ($3)</div></div>
          <div id="big_ass_sandwiches" class="vendor fav">Big Ass Sandwiches <div class="menu">1/2 Big-Ass Roast Beef Sandwich  ($4), Full Big-Ass Roast Beef Sandwich ($8)</div></div>
          
          <!-- <a class="next_button" id="nav_folsom_24_25" href="#folsom_24_25">More Vendors: Folsom (23rd-24th) &raquo;</a> -->
        </div>

        <div id="folsom_24_25" class="street">
          <h2>FOLSOM (24TH-25TH)</h2>

          <div id="peached_tortillas" class="vendor fav">Peached Tortilla <div class="menu">Banh Mi Taco ($3), Pad Thai Taco ($3)</div></div>
          <div id="hapa_sf" class="vendor fav">Hapa SF <div class="menu">Hapa S.F. Lumpia Shanghai ($3), Field to Family Chicken Adobo ($8), Stonefruit Calamansi Soda ($3)</div></div>
          <div id="southern_sandwich_co" class="vendor fav">Southern Sandwich Co. <div class="menu">Hush Puppies  ($3), Texas Chopped Beef Brisket Sandwich ($8), North Carolina Sweet Tea ($2)</div></div>
          <div id="arepa_lady" class="vendor fav">Arepa Lady <div class="menu">Arepa de Queso  ($4), Arepa de Chocolo ($4)</div></div>
          <div id="romolo" class="vendor fav">15 Romolo <div class="menu">Biscuit &amp; Gravy ($3), Jambalini ($5), Shrub &#x27;n Soda ($5)</div></div>
          <div id="mission_tortilla" class="vendor fav">Mission Tortilla</div>
          <div id="el_buen_comer" class="vendor fav">El Buen Comer <div class="menu">Tostadas de Picadillo ($3), Tortas con pollo y mole verde ($8), Agua fresca ($2)</div></div>
          <div id="meats" class="vendor fav">4505 Meats <div class="menu">Chicharrones Party Bag ($4), Cheeseburger ($8), Lime and Mint Ice Tea ($3)</div></div>
          <div id="osha_thai" class="vendor fav">OSHA Thai <div class="menu">Veggie Crispy Roll &amp; Veggie Samosa  ($3), Pumpkin Curry w/ Chicken or Tofu over rice ($8), Thai Iced Tea or Cofffee ($3)</div></div>
          <div id="estrellitas_snacks" class="vendor fav">Estrellita&rsquo;s Snacks <div class="menu">Tamales de vegetable y Pollo ($3), Pupusas; 1 revuelta, 1 frijol con queso ($8), Agua fresca ($3)</div></div>
          <div id="chiefos_kitchen" class="vendor fav">Chiefo&rsquo;s Kitchen <div class="menu">Scotch Eggs ($3), Suya Chicken ($8), Beesap ($3)</div></div>
          <div id="beretta" class="vendor fav">Beretta <div class="menu">Beretta:Marinara Meatball Sliders ($3), Beretta: Vegetable Fritto Misto w/ Caper Aioli ($7), Mint Ginger Lemonade. ($3)</div></div>
          <div id="don_bugito" class="vendor fav">Don Bugito <div class="menu">&quot;Sweet&quot; Toffee Crisped mealworms Ice-Cream ($3), &quot;Savory&quot; Two Crispy Wax Moth Larvae Tacos ($8), Chia and Lime Agua Fresca  ($2)</div></div>
          <div id="slanted_door" class="vendor fav">Slanted Door <div class="menu">Steamed pork belly or vegetarian bun ($3), Fried Chicken ($8), Iced Vietnamese Coffee ($3)</div></div>
          <div id="maite_catering" class="vendor fav">Maite Catering <div class="menu">Aborrajado ($3), Patacon pisao ($8), Salpicon ($3)</div></div>
          <div id="wise" class="vendor fav">Taino&#x27;s Puerto Rican Food <div class="menu">Pastalillos Empanada Platter (2 for $5)</div></div>
          <div id="embrace_sweets" class="vendor fav">Embrace Sweets <div class="menu">assorted cookies ($2), Assorted pre-packaged Brownies and Blondies ($3)</div></div>
          
          <!-- <a class="next_button" id="nav_folsom_25_26" href="#folsom_25_26">More Vendors: Folsom (25th-26th) &raquo;</a> -->

        </div>

        <div id="folsom_25_26" class="street">
          <h2>FOLSOM (25TH-26TH)</h2>
  
          <div id="curry_up_now" class="vendor fav">Curry Up Now <div class="menu">Samosa ( Vegan / Vegetarian) ($3), Tikka Masala Burritos  ($8), Rose Lassi ($3)</div></div>
          <div id="nom_nom" class="vendor fav">Nom Nom Truck <div class="menu">Chicken Taco ($3), Honey Grilled Pork Sandwich ($7), Basil Mint Lemonade ($3)</div></div>
          <div id="skillet_street_food" class="vendor fav">Skillet Street Food <div class="menu">Theo&#x27;s Chocolate Cream &quot;Pie in a bowl&quot; ($3), Fennel and Spice Crusted Fried Chicken Sandwhich ($8)</div></div>
          <div id="azalinas_malaysian" class="vendor fav">Azalina&rsquo;s Malaysian <div class="menu">Malaysian Fried Peanut Taco-Vegan/Vegetarian ($3), Penang Curry Bomb Bun ($8), Sharbat ($3)</div></div>
          <div id="la_luna_cupcakes" class="vendor fav">La Luna Cupcakes <div class="menu">Cupcakes Reg Size/Mini Size (2) ($3R $3M), Cake Pops ($2), Green Ice Tea ($3)</div></div>
          <div id="zellas_soulful_kitchen" class="vendor fav">Zella&rsquo;s Soulful Kitchen <div class="menu">Jacked-up Hush Puppies ($3), Shrimp Po-Boys ($8), Southern Sweet Tea w/ Fresh Mint ($3)</div></div>
          <div id="three_twins" class="vendor fav">Three Twins Ice Cream <div class="menu">Three Twins Organic Ice Cream. Scoop of Strawberry Je Ne Sais Quoi, Lemon Cookie, Bittersweet Chocolate ($3), Three Twins Organic Ice Cream: Inconceivably Delicious Assorted Pints ($5)</div></div>
          <div id="inticing_creations" class="vendor fav">Inticing Creations</div>
          <div id="peas_of_mind" class="vendor fav">Peas of Mind</div>
          <div id="kikas_treats" class="vendor fav">Kika&rsquo;s Treats <div class="menu">Gourmet S&#x27;mores ($3), Brazilian Cheese Bread &ndash; Gluten &ndash;Free (3 for $5)  ($5), Vegan Spiced Hot Chocolate ($3)</div></div>
          <div id="sabores_del_sur" class="vendor fav">Sabores del Sur <div class="menu">Chilean Empanadas (Chicken, Beef or Veggie) ($3), Antichuchos de Res y Corazon ($8), Chicha Morada ($3)</div></div>
          <div id="love_and_hummus" class="vendor fav">Love &amp; Hummus Co. <div class="menu">Organic Roasted Lemon &amp; Thyme Hummus with pita chips ($3), Organic Falafel Wrap ($8), Organic lemonande ($3)</div></div>
          <div id="clairsquares" class="vendor fav">Clairesquares <div class="menu">Clairesquares Ice-Cream Sundae ($3), Clairesquares 3-packs milk / dark chocolate for $8 ($8)</div></div>
          <div id="bay_bread" class="vendor fav">Bay Bread</div>
          <div id="whole_foods" class="vendor fav">Whole Foods Market</div>
          <div id="neo_coco" class="vendor fav">Neo Cocoa <div class="menu">Chocolate Mustache ($3), Taster&#x27;s 5 Piece Truffle Box ($8)</div></div>
          <div id="honest_tea" class="vendor fav">Honest Tea</div>
          <div id="rye_on_the_road" class="vendor fav">[Bar] Rye on the Road</div>
          
          <!-- <a class="next_button" id="nav_street_23" href="#street_23">More Vendors 23rd Street &raquo;</a> -->
        </div>


        <div id="street_23" class="street">
          <h2>23RD STREET</h2>

          <div id="familia_del_sol" class="vendor fav">Familia del Sol <div class="menu">4 oz of Mild salsa with chips ($2), 4 oz of each Mild, Hot and Verde salsas with chips ($5)</div></div>
          <div id="sal_de_vida" class="vendor fav">Sal de Vida <div class="menu"></div></div>
          <div id="sweets_collection" class="vendor fav">Sweets Collection <div class="menu">Gelatin Artistic ($2), Gelishots ($4)</div></div>
          <div id="ica_juices" class="vendor fav">Ica Juices</div>
          <div id="mission_pies" class="vendor fav">Mission Pies</div>
          <div id="mrs_meyers" class="vendor fav">Mrs. Meyers</div>
          
          <!-- <a class="next_button" id="nav_street_25" href="#street_25">More Vendors: 25th Street &raquo;</a> -->
        </div>

        <div id="street_25" class="street">
          <h2>25TH STREET</h2>

          <div id="lets_be_frank" class="vendor fav">Let&rsquo;s Be Frank <div class="menu">Pup Dog ($3), Dogs Gone Good ($6)</div></div>
          <div id="bi_rite" class="vendor fav">Bi-Rite <div class="menu">Strawberry Mint Popsicle  ($2), Cup of Salted Caramel Ice Cream ($4)</div></div>
          <div id="ritual_coffee" class="vendor fav">Ritual Coffee <div class="menu">Espresso &quot;Oreos&quot;  ($2), Frozen Coffee Pops ($3), Drip Coffee, hot  Cold-brewed iced coffee  ($4/$3)</div></div>
          <div id="back_to_the_roots" class="vendor fav">Back to the Roots</div>
        </div>
        
        
      </div>
    </div>
          
  </section>

<?php require 'inc/bottom.inc.php'; ?>
