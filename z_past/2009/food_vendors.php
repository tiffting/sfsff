<?php
  $page = 'food_vendors';
  include('inc/top.inc.php') 
?>

<style type="text/css" media="screen">
  ul#food_vendors{list-style-type:none; margin: 0;}
  ul#food_vendors li.vendor{border-bottom:1px dotted #0C4F50; margin-bottom:30px; padding-bottom:0;}
  ul#food_vendors li.vendor h2{ margin-left: 110px; }
  ul#food_vendors li.vendor ul.food_items{list-style-type:none; margin-top:10px; margin-left: 120px;}
  ul#food_vendors li.vendor ul.food_items li{float:left; width:165px; margin-right:15px;}
  ul#food_vendors li.vendor ul.food_items li.last{float:left; width:150px; margin-right:20px; margin-right:0; clear: left;}
  ul#food_vendors li.vendor ul.food_items li h3{margin-bottom:5px; text-transform:uppercase; font-size:14px; color: #000;}
  ul#food_vendors li.vendor ul.food_items li p{font-size:12px;}
  img.vendor_logo {float:left; height:100px; margin-right:15px; width:100px; border: #0C4F50 1px solid;}
  h3 { margin-top: 0;} 
  
</style>

<ul id="food_vendors">
  <li class="vendor">
    <img class="vendor_logo" src="img/logo_absinthe.gif"  />
    <h2><a href="http://www.absinthe.com/">Absinthe</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Cheddar-cheese corn nut brittle', 'Queso cheddar con elote tostado'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Jamie\'s famous hot dog', 'El hot dog famoso de Jamie'); ?></p>
      </li>
      <li class="last">
        <h3><?= l('Beverage', 'Bebida') ?></h3>
        <p><?= l('Peach and sage shrub', 'Shrub de Durazno con Salvia'); ?></p>
      </li>
    </ul>
  </li>
  
  <li class="vendor">
        <img class="vendor_logo" src="img/logo_aziza.gif"  />
		<h2><a href="http://www.aziza-sf.com/">Aziza</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Squid salad with maras pepper, preserved lemon, cabbage, mint and cilantro', 'Ensalada de calamar con chile maras, lim&oacute;n, col, menta, y cilantro'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Moroccan "taco": flatbread with harissa and braised beef cheeks (as well as a vegetarian version)', '"Taco" Maroqui: pan &aacute;rabe con harissa y cachete de res (y una versi&oacute;n vegetariana)'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Coming Soon', 'Sabremos Pronto'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
            <img class="vendor_logo" src="img/logo_birite.gif"  />
			<h2><a href="http://biritecreamery.com/">Bi-Rite Creamery</a></h2>

    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Strawberry Popsicle', 'Paleta de Fresa'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Ice Cream Sundae', 'Sundae de Helado'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Coming Soon', 'Sabremos Pronto'); ?></p>
      </li>
    </ul>
  </li>
  
  <li class="vendor">
      <img class="vendor_logo" src="img/logo_born_lc.gif"  />
    <h2><a href="http://www.lacocinasf.org/directory.html">Chaac Mool</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Handmade organic corn tortillas with slow-roasted and achiote rubbed pork shoulder', 'Tacos de Cochinita Pibil'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Yucatecan sandwiches with milk and cinnamon braised pork', 'Tortas de Carnitas Serranos'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Agua de Jamaica', 'Agua de Jamaica'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
        <img class="vendor_logo" src="img/logo_delfina.gif"  />

    <h2><a href="http://www.delfinasf.com/">Delfina/Pizzeria Delfina</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Zeppole: fried pizza dough with mascarpone pastry cream', 'Zeppole: Masa de Pizza rellena de creama y frita'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Pizza Fritta: fried calzone filled with escarole, pine nuts and olives', 'Pizza Fritta: Dobladita de pizza llena de escarole, pi&ntilde;ones, y aceitunas'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Limonciata', 'Limonciata'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
    <img class="vendor_logo" src="img/logo_buen_comer.gif"  />
    <h2><a href="http://www.lacocinasf.org/directory.html">El Buen Comer</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Tacos de Guisados; Rajas con Crema', 'Tacos de Guisados; Rajas con Crema'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Torta con Mole Verde', 'Torta con Mole Verde'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Agua de Horchata', 'Agua de Horchata'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">    
  <img class="vendor_logo" src="img/logo_huarache.gif"  />
    <h2><a href="http://www.lacocinasf.org/directory.html">El Huarache Loco</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Tacos Alhambre: Mexico-City style tacos with carne asada, longaniza, bacon, grilled onions and peppers', 'Tacos de Alhambre'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Huarache con Nopales; Corn masa cake with cactus salad or steak', 'Huarache con Nopales'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Watermelon Agua Fresca', 'Agua de Sand&iacute;a'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
    <img class="vendor_logo" src="img/logo_ritual.gif"  />

    <h2><a href="http://www.lacocinasf.org/directory.html">Endless Summer Sweets and Ritual Roasters Coffee</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Clairesquares: Deep Fried Clairesquares', '"Clairesquares" Fritos'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Funnel cake with strawberries and cream', 'Funnel Cake (pan frito) con Fresas y Crema'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Ritual Roasters Coffee', 'Cafe de Ritual Roasters'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
      <img class="vendor_logo" src="img/logo_estrellita.gif"  />

    <h2><a href="http://www.lacocinasf.org/directory.html">Estrellita&rsquo;s Snacks</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Salvadoran Plantain Cake', 'Tamal Salvadore&ntilde;o de Pollo o Verdura'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Pupusa Loca (or mixed vegetarian pupusa)', 'Pupusa Revuelta o de Espinaca'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Ensalada Salvadorena (Mixed Tropical Drink)', 'Ensalada Salvadore&ntilde;a'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
          <img class="vendor_logo" src="img/logo_heaven.gif"  />

    <h2><a href="http://www.heavensdog.com/">Heaven's Dog/Slanted Door</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Vegetarian Steamed Bun', 'Mollete al Vapor vegetariano'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Lemongrass pork vermicelli bowl', 'Fideo con puerco y limoncillo'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Lychee-infused iced tea and las palmalitas ranch organic lemonade', 'Te helado con Lychee y Limonada Organica'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
          <img class="vendor_logo" src="img/logo_kasa.gif"  />

    <h2><a href="http://www.kasaindian.com/">Kasa Indian Eatery</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Pav Bhaji; Spicy potato on grilled white buns with crunchy red onions', 'Pav Bhaji: papa picante en un pan blanco con cebolla roja'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Kati Roll; Flaky buttery roti wrapped around charbroiled chicken or spicy cauliflower', 'Kati Roll: Pan roti envolviendo pollo asado y coliflor picante'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Mango Lassi', 'Licuado de Mango'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
          <img class="vendor_logo" src="img/logo_laiola.gif"  />

    <h2><a href="http://www.laiola.com/">Laiola</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Gypsy pepper gazpacho with almonds, grapes & tarragon', 'Gazpacho con almendras, uvas, y estrag&oacute;n'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Heirloom tomato "tom&agrave;quet" with grilled bread', '"Tom&agrave;quet" de jitomate con pan asado'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Summer melon agua fresca', 'Agua fresca de mel&oacuten'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
          <img class="vendor_logo" src="img/logo_lamar.gif"  />

    <h2><a href="http://www.lamarcebicheria.com/web/index.php">La Mar Cebicheria</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Sanguche de Jamon Norteno: Slow-roasted pork leg served on an acme roll with salsa criolla', 'Sanguche de Jamon Norteno'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Ceviche Clasico; Mahi-Mahi served in a lime juice marinade with habanero, nectarines and sweet potato', 'Cebiche Clasico'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Chicha Morada', 'Chicha Morada') ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
          <img class="vendor_logo" src="img/logo_onigilly.gif"  />

    <h2><a href="http://www.onigilly.com/">Onigilly</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Onigilly; Savory Japanese Rice Balls with Either Teriyaki Chicken or Marinated Eggplant', 'Bolita de Arroz Japon&eacute;s con Pollo Teriyaki o Berenjena'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('A Sweet! Handmade Kika\'s Treats S\'mores', 'Un Postre! Una galleta de Kika con malvavisco y chocolate'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Green Tea', 'Te verde'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
          <img class="vendor_logo" src="img/logo_poleng.gif"  />

    <h2><a href="http://www.polenglounge.com/">Poleng Lounge</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Balinese lamb and pork satay sampi on lemongrass skewer', 'Brochetas Satay de Cordero y Puerco'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Vietnamese style BBQ oysters with rendered bacon-scallion oil and lemon pepper sauce', 'Ostiones asados vietnamitas con salsa de tocino, lim&oacuten, pimienta y cebolla'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Calamantea (Mactan Island iced tea with pineapple and calamansi)', 'Calamantea (Te con pi&ntilde;a y calamansi)'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
          <img class="vendor_logo" src="img/logo_sabores.gif"  />

    <h2><a href="http://www.saborsur.com/">Sabores del Sur</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Chilean Beef or Vegetarian Empanadas', 'Empanadas'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Anticuchos Chilenos; Marinated New York Strip and Beef Heart with Potatoes (or no heart if you please)', 'Anticuchos'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Chicha'); ?></p>
      </li>
    </ul>
  </li>
  <li class="vendor">
          <img class="vendor_logo" src="img/logo_zella.gif"  />

    <h2><a href="http://www.zellassoulfulkitchen.com/">Zella&rsquo;s Soulful Kitchen</a></h2>
    <ul class="food_items clearfix">
      <li>
        <h3><?= l('Bite', 'Probadita') ?></h3>
        <p><?= l('Local Corn with Homemade Honey Butter', 'Elote con mantequilla y miel'); ?></p>
      </li>
      <li>
        <h3><?= l('Forks and Fingers', 'Racion') ?></h3>
        <p><?= l('Pulled BBQ Chicken Sammie with Spicy Slaw','Torta de Pollo BBQ con ensalada de col'); ?></p>
      </li>
      <li class="last">        <h3><?= l('Beverage', 'Bebida') ?></h3>
<p><?= l('Southern Sweet Tea', 'Te helado dulce'); ?></p>
      </li>
    </ul>
  </li>
  
  
</ul>
<p><img align="left" src="img/logo_cantina.gif" alt="Cantina" /></p>
<p>&nbsp;</p>
<p>All cocktails will be handcrafted by Duggan McDonnell and his team of merry bartenders. Rum, tequila, cachaca and more--these spirits are designed to pair with the foods you see above. Come thirsty.</p>
<p style="clear: left;"><strong>The creme brulee cart, wholesome bakery, urban nectar, mission fruit vendor, and bacon wrapped hot dog vendors will be in the house!</strong></p><?php include('inc/bottom.inc.php') ?>