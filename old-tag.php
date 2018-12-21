<?php
/**
 * Template Name: Nourishment Cat Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<?php

$term_id = get_queried_object_id();
$term = get_term($term_id);
$term_slug = $term->slug;
$term_name = $term->name;

?>

<?php get_header(); ?>

<?php

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
      margin: 25px 0px;
      transition: .3s;
    }
    
    .vit-icon:hover {
      transform: scale(1.1);
    }
    
    .vit-icon img {
      width: 68px;
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
    
    h1 {
      font-size: 28px !important;
      line-height: 1.6em;
      text-align: center;
      margin-top: -5px;
    }
    
    @media (max-width: 767px) {
      .under-nav__item {
        margin-top: 20px !important;
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
            <a href="/all/" class="btn expand__item black__border btn-1" style="">All Nourishments</a>
            <?php
            
              $count = 1;
  
              foreach(get_tags() as $tag)
              {
                $teamID = get_the_ID(); //id of team member
                $term_slug1 = $tag->slug;
                $term_name1 = $tag->name;
  
                echo '<a href="/tag/'.$term_slug1.'" class="btn expand__item black__border btn-'.$count.'" style="">'.$term_name1.'</a>';
                
                if($count == 4)
                {
                  $count = 1;
                }
                else
                {
                  $count++;
                }
              }
              
              wp_reset_postdata();
            
            ?>
            
          </div>
        </div>
        
        <div class="col-md-10">
          
          
          <h1>Showing all Nourishments for '<?php echo $term_name ?>'</h1>
          
          <div class="row">        
            <?php
              
              wp_reset_postdata();  
              
              $tax = array($term_id);
              $args = array ('post_type' => 'nourishments', 'tag' => $term_slug);

              $loop = new WP_Query( $args );
              
              $count = 1;
            
              while ( $loop->have_posts() ) : $loop->the_post();
              
                  $teamID = get_the_ID(); //id of team member
                  $fields = get_fields($teamID); //gets all advanced custom fields for the team member
                  $url = get_permalink();
                  
                  echo "<div class='col-md-3'>
                          <a href='$url' class='vit-icon'>
                            <img src='".$fields['image']['url']."'>
                            <h3>".get_the_title()."</h3>
                          </a>
                        </div>";
                  
              endwhile;
            
            ?>
          </div>
        </div>
        
      </div>
    </div>
  </section>


<?php get_footer(); ?>
