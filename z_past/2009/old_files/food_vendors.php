<?php
  $page = 'food_vendors';
  include('inc/top.inc.php') 
?>

<style type="text/css" media="screen">
  ul#food_vendors{list-style-type:none;}
  ul#food_vendors li.vendor{margin-bottom:30px;}
  ul#food_vendors li.vendor h2{}
  ul#food_vendors li.vendor ul.food_items{list-style-type:none; margin-top:10px;}
  ul#food_vendors li.vendor ul.food_items li{float:left; width:155px; margin-right:10px;}
  ul#food_vendors li.vendor ul.food_items li.last{float:left; width:150px; margin-right:20px; margin-right:0;}
  ul#food_vendors li.vendor ul.food_items li h3{margin-bottom:5px; text-transform:uppercase; font-size:14px;}
  ul#food_vendors li.vendor ul.food_items li p{font-size:12px;}
</style>

<ul id="food_vendors">
  <li class="vendor">
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
        <p><?= l('Coming Soon'); ?></p>
      </li>
    </ul>
  </li>
  
  <li class="vendor">
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
  <li class="vendor">
    <h2><a href="http://www.lacocinasf.org/directory.html">Chaac Mool</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
    <h2><a href="http://www.delfinasf.com/">Delfina/Pizzeria Delfina</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
    <h2><a href="http://www.lacocinasf.org/directory.html">El Buen Comer</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Tacos de Guisado'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
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
        <p><?= l('Coming Soon'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
    <h2><a href="http://www.lacocinasf.org/directory.html">Endless Summer Sweets</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Mini Funnel cake with powdered sugar'); ?></p>
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
  <li class="vendor">
    <h2><a href="http://www.lacocinasf.org/directory.html">Estrellita&rsquo;s Snacks</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
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
  <li class="vendor">
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
  <li class="vendor">
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
  <li class="vendor">
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
  <li class="vendor">
    <h2><a href="http://www.onigilly.com/">Onigilly</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Rice Balls'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
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
  <li class="vendor">
    <h2><a href="http://www.saborsur.com/">Sabores del Sur</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Anticuchos'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Empanadas'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Bebida') ?></h3>
        <p><?= l('Coming Soon'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
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