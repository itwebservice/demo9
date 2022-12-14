<?php
include 'config.php';
//Include header
include 'layouts/header.php';
$gallary_array = ($cached_array[0]->cms_data[0]->gallery!='') ? json_decode($cached_array[0]->cms_data[0]->gallery) : [];
$dest_array = array();
foreach($gallary_array as $val){
  array_push($dest_array,$val->dest_id);
}
$result = array_unique($dest_array);
?>



<!-- ********** Component :: Page Title ********** -->

<div class="c-pageTitleSect ts-pageTitleSect">

<div class="container">

  <div class="row">

    <div class="col-md-7 col-12">



      <!-- *** Search Head **** -->

      <div class="searchHeading">

        <span class="pageTitle mb-0">Gallery</span>

      </div>

      <!-- *** Search Head End **** -->

    </div>



    <div class="col-md-5 col-12 c-breadcrumbs">

      <ul>

        <li>

          <a href="<?= BASE_URL_B2C ?>">Home</a>

        </li>

        <li class="st-active">

          <a href="javascript:void(0)">Gallery</a>

        </li>

      </ul>

    </div>

  </div>

</div>

</div>

<!-- ********** Component :: Page Title End ********** -->

<section class="ts-destinations-section">

    <div class="container">

        <div id="lightGalleryImage" class="light-gallery-list">

          <?php
          foreach($result as $i){
            
            $sq_dest = mysqli_fetch_assoc(mysqlQuery("select dest_name from destination_master where dest_id='$i'"));
            $dest_name = $sq_dest['dest_name'];
            ?>
            <legend><?= $dest_name ?></legend>
            <?php
            foreach($gallary_array as $j){
              $dest_id = $j->dest_id;
              if($i == $dest_id){


                $url = $j->image_url;
                $pos = strstr($url,'uploads');

                if ($pos != false){
                  $newUrl1 = preg_replace('/(\/+)/','/',$url); 
                  $newUrl = BASE_URL.str_replace('../', '', $newUrl1);
                }
                else{
                  $newUrl =  $url; 
                }
                ?>
                <a href="<?= $newUrl ?>" class="light-gallery-item">
                  <img title="<?= $dest_name ?>" alt="" src="<?= $newUrl ?>" class="img-fluid" />
                </a>
                <?php
              }
            }
          } ?>

        </div>

    </div>

</section>

<script>

// Example starter JavaScript for disabling form submissions if there are invalid fields

(function() {

  'use strict';

  window.addEventListener('load', function() {

    // Fetch all the forms we want to apply custom Bootstrap validation styles to

    var forms = document.getElementsByClassName('needs-validation');

    // Loop over them and prevent submission

    var validation = Array.prototype.filter.call(forms, function(form) {

      form.addEventListener('submit', function(event) {

        if (form.checkValidity() === false) {

          event.preventDefault();

          event.stopPropagation();

        }

        form.classList.add('was-validated');

      }, false);

    });

  }, false);

})();

</script>



<?php include 'layouts/footer.php';?>



<script type="text/javascript" src="js/scripts.js"></script>

<script>

    $( document ).ready(function() {    

    

      lightGallery(document.getElementById('lightGalleryImage'), {

              plugins: [lgZoom, lgThumbnail],

              speed: 500,

              download: true,

          });

          setTimeout(function() {

            var width = $(".light-gallery-item img").width();

            console.log(width);

            $(".light-gallery-item img").height(width);

          }, 1000);

      

      

      var service = '<?php echo $service; ?>';

      if(service && (service !== '' || service !== undefined)){

        var checkLink = $('.c-searchContainer .c-search-tabs li');

        var checkTab = $('.c-searchContainer .search-tab-content .tab-pane');

        checkLink.each(function(){

          var child = $(this).children('.nav-link');

          if(child.data('service') === service){

            $(this).siblings().children('.nav-link').removeClass('active');

            child.addClass('active');

          }

        });

        checkTab.each(function(){

          if($(this).data('service') === service){

            $(this).addClass('active show').siblings().removeClass('active show');

          }

        })

      }

    

    });

</script>