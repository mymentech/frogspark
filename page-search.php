<?php
/**
 * Template Name: Search Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php

/*
$term_id = get_queried_object_id();
$term = get_term($term_id);
$term_slug = $term->slug;
$term_name = $term->name;
*/

?>

<?php get_header(); ?>

<?php

/*
$image = get_field("image");
$short_description = get_field("short_description");
$research_percentage = get_field("research_percentage");
$benefits = get_field("benefits");
$content = get_field("content");
$photo_image = get_field("photo_image");

if(empty($short_description))
{
  $short_description = "Dummy text lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. At tempor commodo ullamcorper.";
}

if(empty($research_percentage))
{
  $research_percentage = "37";
}
*/

?>

  <style>
    
    .team-carousel__wrapper .circle__item .image__background {
      background-size: cover !important;
    }
    
    .under-nav__item {
      margin-top: 80px;
    }
    
    .content__section p {
      margin-bottom: 15px;
      line-height: 1.8em;
    }
    
    .vitateam__bio p.sm-small {
      font-size: 12px;
    }
    
    .content__section p {
      font-size: 16px;
    }
    
    .awards {
      text-align: center;
    }
    
    .awards img {
      max-width: 270px;
      display: inline-block;
      margin-right: 20px;
    }
    
  </style>
  <style>
    
    .vit-sidebar h2 {
      color: #1c4a6e !important;
      font-weight: 300 !important;
    }
    
    .vit-sidebar {
      text-align: center;
    }
    
    .bar-img {
      max-width: 60%;
      margin: auto;
    }
    
    .bar-txt span {
      font-size: 22px;
      position: relative;
      top: 2px;
    }
    
    .benefits p {
      display: inline-block !important;
      padding: 5px 20px;
      background: #1b4c6d;
      color: #fff !important;
      border-radius: 10px;
      margin-right: 10px;
      margin-bottom: 20px;
    }
    
    .benefits p.color-1 {
      background: #6b2559 !important;
    }
    
    .benefits p.color-2 {
      background: #1b4c6d !important;
    }
    
    .benefits p.color-3 {
      background: #223c21 !important;
    }
    
    .benefits p.color-4 {
      background: #b7a130 !important;
    }
    
    .btn-ready {
      background: #1c4a6e !important;
      color: #fff !important;
      border-color: #1c4a6e !important;
    }
    
    .nut-value p {
      margin-bottom: 25px !important;
    }
    
  </style>
  
  <style>
    
    .vit-icon {
      text-align: center;
      display: block;
      color: #1c4a6e;
      margin: 15px 0px;
      transition: .3s;
    }
    
    .vit-icon:hover {
      transform: scale(1.1);
    }
    
    .vit-icon img {
      width: 32px;
      margin-bottom: 10px;
    }
    
    .vit-icon h3 {
      font-size: 18px;
      margin-bottom: 10px !important;
      line-height: 1.5em !important;
    }
    
     .expand__item.btn-1 {
      border-color: #1c4a6e !important;
      color: #1c4a6e !important;
    }
    
     .expand__item.btn-1:hover {
      border-color: #1c4a6e !important;
      color: #fff !important;
      background: #1c4a6e !important;
    }
    
     .expand__item.btn-2 {
      border-color: #b7a127 !important;
      color: #b7a127 !important;
    }
    
     .expand__item.btn-2:hover {
      border-color: #b7a127 !important;
      color: #fff !important;
      background: #b7a127 !important;
    }
    
     .expand__item.btn-3 {
      border-color: #6b2659 !important;
      color: #6b2659 !important;
    }
    
     .expand__item.btn-3:hover {
      border-color: #6b2659 !important;
      color: #fff !important;
      background: #6b2659 !important;
    }
    
     .expand__item.btn-4 {
      border-color: #223c20 !important;
      color: #223c20 !important;
    }
    
     .expand__item.btn-4:hover {
      border-color: #223c20 !important;
      color: #fff !important;
      background: #223c20 !important;
    }
    
    .expand__item {
      padding: 10px 15px !important;
      height: auto !important;
      font-size: 14px !important;
      border-width: 2px !important;
      margin-bottom: 20px;
    }
    
    @media (max-width: 767px) {
      .under-nav__item {
        margin-top: 40px !important;
      }
    }
    
  </style>

  <?php get_template_part('navigation-default'); ?>

  <section id="about-content__section" class="under-nav__item content__section relative__item">
    <div class="container above__background">
      <div class="row">
        
        <div class="col-md-2">
          <div class="sidebar">
            <h3>Categories</h3>
            <a href="/all/" class="btn expand__item black__border btn-1" style="background: #1c4a6e !important; color: #fff !important;">All Nourishments</a>
            <a href="/search/" class="btn expand__item black__border btn-1" style="">Search <i class="fa fa-search" aria-hidden="true" style="padding-left: 2px;"></i></a>
            <a href="/#btn-separator__section" class="btn expand__item black__border btn-2"  style="background: #b7a127 !important; color: #fff !important;">Get Started</a>
          </div>
        </div>
        
        <div class="col-md-10">
          
          <div class="row">
            <div class="col-md-12">
              <input id="myInput" type="text" class="form-control" onkeyup="myFunction()" placeholder="Search NOURISHM3NTS and Benefits..." />
            </div>
          </div>
             
          <div class="items">
            <ul id="myUL">
              <div class="row"> 
                <div class="col-md-12">
                  <h3>Benefits</h3>
                
                
                  <style>
                  
                  .term-btn {
                    display: inline-block !important;
                    padding: 5px 5px;
                    background: #1b4c6d;
                    color: #fff !important;
                    border-radius: 10px;
                    margin-right: 10px;
                    margin-bottom: 10px;
                    font-size: 11px !important;
                    letter-spacing: 1px;
                    margin-top: 0px !important;
                  }
                  
                  .term-btn h3 {
                    font-size: 11px !important;
                    letter-spacing: 1px;
                    margin: 0px !important;
                    padding: 0px !important;
                  }
                  
                  .p15 {
                    padding: 0px 15px;
                    width: 100%;
                    margin-bottom: 25px;
                  }
                  
                  .p15 li {
                    display: inline-block !important;
                  }
                  
                  
                  
                </style>
                
                  <div class="row">
                  <?php
  
                    foreach(get_tags() as $tag)
                    {
                      $teamID = get_the_ID(); //id of team member
                      $term_slug = $tag->slug;
                      $term_name = $tag->name;
                        
                      echo "<li data-filter-item data-filter-name='".$term_name."' class='col-md-3'>
                              <a href='/tag/$term_slug' class='vit-icon term-btn'>
                                <h3>".$term_name."</h3>
                              </a>
                            </li>";
                    }  
            
                  ?>
                  </div>

                </div>
                <div class="col-md-12" style="margin-top: 25px;">
                  <h3>NOURISHM3NTS</h3>
                </div>
                
                <?php

                  $args = array( 'post_type' => 'nourishments', 'posts_per_page' => 600, 'orderby' => 'title', 'order' => 'asc');
                  $loop = new WP_Query( $args );
                  $count = 1;
                
                  while ( $loop->have_posts() ) : $loop->the_post();
                  
                      $teamID = get_the_ID(); //id of team member
                      $fields = get_fields($teamID); //gets all advanced custom fields for the team member
                      $url = get_permalink();
                      
                      
                      
                      echo "<li data-filter-item data-filter-name='".get_the_title()."' class='col-md-2'>
                              <a href='$url' class='vit-icon'>
                                <img src='".$fields['image']['url']."'>
                                <h3>".get_the_title()."</h3>
                              </a>
                            </li>";
                      
                  endwhile;
                
                ?>
              </div>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  
  <style>
    .hidden {
    	display: none;
    }
    
    ul {
      margin: 0px;
      padding: 0px;
    }
    
    .form-control {
      background: #f5f5f5 !important;
      margin-bottom: 25px;
      border: none !important;
    }
    
    ul li {
      list-style-type: none !important;
    }
</style>
  
<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h3")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>


<?php get_footer(); ?>
