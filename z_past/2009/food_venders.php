<?php
  $page = 'food_venders';
  include('inc/top.inc.php') 
?>

<style type="text/css" media="screen">
  ul#food_venders{list-style-type:none; margin: 0;}
  ul#food_venders li.vender{border-bottom:1px dotted #0C4F50; margin-bottom:30px; padding-bottom:0;}
  ul#food_venders li.vender h2{ margin-left: 110px; }
  ul#food_venders li.vender ul.food_items{list-style-type:none; margin-top:10px; margin-left: 110px;}
  ul#food_venders li.vender ul.food_items li{float:left; width:165px; margin-right:15px;}
  ul#food_venders li.vender ul.food_items li.last{float:left; width:150px; margin-right:20px; margin-right:0;}
  ul#food_venders li.vender ul.food_items li h3{margin-bottom:5px; text-transform:uppercase; font-size:14px; color: #000;}
  ul#food_venders li.vender ul.food_items li p{font-size:12px;}
  img.vender_logo {float:left; height:100px; margin-right:15px; width:100px; border: #0C4F50 1px solid;}
  h3 { margin-top: 0;} 
  
</style>

<ul id="food_venders">
  <li class="vender">
    <img class="vender_logo" src="img/logo_absinthe.gif"  />
    <h2><a href="http://www.absinthe.com/">Absinthe</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Cheddar-cheese corn nut brittle'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l("Jamie's famous hot dog"); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Peach and sage shrub'); ?></p>
      </li>
    </ul>
  </li>
  
  <li class="vender">
        <img class="vender_logo" src="img/logo_aziza.gif"  />
		<h2><a href="http://www.aziza-sf.com/">Aziza</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Squid salad with maras pepper, preserved lemon, cabbage, mint and cilantro'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Moroccan "taco": flatbread with harissa and braised beef cheeks (as well as a vegetarian version)'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">
            <img class="vender_logo" src="img/logo_birite.gif"  />
			<h2><a href="http://biritecreamery.com/">Bi-Rite Creamery</a></h2>

    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Strawberry Popsicle', ''); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Ice Cream Sundae', ''); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
    </ul>
  </li>
  
  <li class="vender">
      <img class="vender_logo" src="img/logo_born_lc.gif"  />
    <h2><a href="http://www.lacocinasf.org/directory.html">Chaac Mool</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Tacos de Cochinita Pibil; Handmade organic corn tortillas with slow-roasted and achiote rubbed pork shoulder'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Tortas de Carnitas Serranos; Yucatecan sandwiches with milk and cinnamon braised pork'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Agua de Jamaica'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">
        <img class="vender_logo" src="img/logo_delfina.gif"  />

    <h2><a href="http://www.delfinasf.com/">Delfina/Pizzeria Delfina</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Zeppole: fried pizza dough with mascarpone pastry cream'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Pizza Fritta: fried calzone filled with escarole, pine nuts and olives'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Limonciata'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">
    <img class="vender_logo" src="img/logo_buen_comer.gif"  />
    <h2><a href="http://www.lacocinasf.org/directory.html">El Buen Comer</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Tacos de Guisados; Rajas con Crema'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Torta con Mole Verde'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Agua de Horchata'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">    
  <img class="vender_logo" src="img/logo_huarache.gif"  />
    <h2><a href="http://www.lacocinasf.org/directory.html">El Huarache Loco</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Tacos Alhambre: Mexico-City style tacos with carne asada, longaniza, bacon, grilled onions and peppers'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Huarache con Nopales; Corn masa cake with cactus salad or steak'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Watermelon Agua Fresca'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">
    <img class="vender_logo" src="img/logo_born_lc.gif"  />

    <h2><a href="http://www.lacocinasf.org/directory.html">Endless Summer Sweets</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Clairesquares: Deep Fried Clairesquares'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Funnel cake with strawberries and cream'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">
      <img class="vender_logo" src="img/logo_estrellita.gif"  />

    <h2><a href="http://www.lacocinasf.org/directory.html">Estrellita&rsquo;s Snacks</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Salvadoran Plantain Cake'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Pupusa Loca (or mixed vegetarian pupusa)'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Ensalada Salvadorena (Mixed Tropical Drink)'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">
          <img class="vender_logo" src="img/logo_heaven.gif"  />

    <h2><a href="http://www.heavensdog.com/">Heaven's Dog/Out the Door</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Vegetarian Steamed Bun'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Lemongrass pork vermicelli bowl'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Lychee-infused iced tea and las palmalitas ranch organic lemonade'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">
          <img class="vender_logo" src="img/logo_kasa.gif"  />

    <h2><a href="http://www.kasaindian.com/">Kasa Indian Eatery</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Pav Bhaji; Spicy potato on grilled white buns with crunchy red onions'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Kati Roll; Flaky buttery roti wrapped around charbroiled chicken or spicy cauliflower'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Mango Lassi'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">
          <img class="vender_logo" src="img/logo_laiola.gif"  />

    <h2><a href="http://www.laiola.com/">Laiola</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Gypsy pepper gazpacho with almonds, grapes & tarragon'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Heirloom tomato &quot;tom&agrave;quet&quot; with grilled bread'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Summer melon agua fresca'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">
          <img class="vender_logo" src="img/logo_lamar.gif"  />

    <h2><a href="http://www.lamarcebicheria.com/web/index.php">La Mar Cebicheria</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Sanguche de Jamon Norteno: Slow-roasted pork leg served on an acme roll with salsa criolla'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Cebiche Clasico; Maih-Mahi served in a lime juice marinade with habanero, nectarines and sweet potato'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Chicha morada') ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">
          <img class="vender_logo" src="img/logo_onigilly.gif"  />

    <h2><a href="http://www.onigilly.com/">Onigilly</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Onigilly; Savory Japanese Rice Balls with Either Teriyaki Chicken or Marinated Eggplant'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('A Sweet! Handmade Kika\'s Treats S\'mores'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">
          <img class="vender_logo" src="img/logo_poleng.gif"  />

    <h2><a href="http://www.polenglounge.com/">Poleng Lounge</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Balinese lamb and pork satay sampi on lemongrass skewer'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Vietnamese style BBQ oysters with rendered bacon-scallion oil and lemon pepper sauce'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Calamantea (Mactan Island iced tea with pineapple and calamansi)'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">
          <img class="vender_logo" src="img/logo_sabores.gif"  />

    <h2><a href="http://www.saborsur.com/">Sabores del Sur</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Chilean Beef or Vegetarian Empanadas'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Anticuchos Chilenos; Marinated New York Strip and Beef Heart with Potatoes (or no heart if you please)'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vender">
          <img class="vender_logo" src="img/logo_zella.gif"  />

    <h2><a href="http://www.zellassoulfulkitchen.com/">Zella&rsquo;s Soulful Kitchen</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Local Corn with Homemade Honey Butter'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Pulled BBQ Chicken Sammie with Spicy Slaw'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Southern Sweet Tea'); ?></p>
      </li>
    </ul>
  </li>
  
  
</ul>


<?php include('inc/bottom.inc.php') ?>