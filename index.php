<?php
  $page_id = 'index';
  $full_nav = true;
  require 'inc/top.inc.php';
?>
<script type="text/javascript" charset="utf-8">
  $(function(){
    new ElementPositioner({ elements : $('.navigation > ul li a') });
  });
</script>


<!-- <div id="modal_2013" class="close">
  <div class="content kraft">
    <div class="close kraft blue">&times;</div>
    <h1>The 5th Annual San Francisco Street Food Festival – 2013</h1>
    <p>More info coming soon. Stay tuned on <a href="http://facebook.com/sanfranciscostreetfoodfestival">Facebook</a> or <a href="http://twitter.com/streetfoodsf">Twitter</a> for more information!</p>
    <h2>Get Involved!</h2>
    <p>If you&rsquo;d like to get involved in the 2013 Festival, please fill out the <a href="https://docs.google.com/spreadsheet/viewform?fromEmail=true&formkey=dG56Uy0tYXo5MDF4V21BUFpVMmFoV1E6MA">Volunteer Application</a>.</p>
    <h2>Sponsors</h2>
    <ul class="text">
      <li><a href="downloads/sponsor_packet.pdf">Sponsor Information Packet (PDF, 4mb)</a></li>
      <li>Contact <a href="mailto:carola@lacocinasf.org">carola@lacocinasf.org</a> for more information.</li>
    </ul>
    <h2>Neighbor Parking Information</h2>
    <a href="https://docs.google.com/a/lacocinasf.org/spreadsheet/viewform?formkey=dHQ5eWZ2RUxKVkdFMXZoYWlRZGoyY3c6MA">Neighboor Parking Form</a>

  </div>
</div> -->

<script type="text/javascript">
//   $(function(){
//     $('#modal_2013').click(function(event){
//       target = $(event.target);
//       if( target.hasClass('close') ){
//         $(this).fadeOut();
//       }
//     });
//   })
</script>

<!-- nav is the only thing on this page, it's being restyled to fill up the whole page -->
<?php require 'inc/bottom.inc.php'; ?>