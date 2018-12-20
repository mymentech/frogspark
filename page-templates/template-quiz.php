<?php
/**
 * Template Name: Quiz Page
 *
 *  @package frogspark
 */

get_header();
//Loading Menu
get_template_part('navigation-default');


?>


<section id="quiz_main_section" class="relative__item content__section">
    <div class="container">
      <div class="row">
          <div class="col-md-6 offset-md-3">
              <h2 class="text-center text-white">HELLO!</h2>
              <p class="text-center text-white">Before we get started, please tell us your name and email.</p>
              <div class="multi-step-form">
                  <!-- multistep form -->
                  <form id="msform">
                      <!-- progressbar -->
                      <ul id="progressbar">
                          <li class="active">Account Setup</li>
                          <li>Social Profiles</li>
                          <li>Personal Details</li>
                      </ul>
                      <!-- fieldsets -->
                      <fieldset>
                          <input type="text" name="email" placeholder="Email" />
                          <input type="password" name="pass" placeholder="Password" />
                          <input type="password" name="cpass" placeholder="Confirm Password" />
                          <input type="button" name="next" class="next action-button" value="Next" />
                      </fieldset>
                      <fieldset>
                          <h2 class="fs-title">Social Profiles</h2>
                          <h3 class="fs-subtitle">Your presence on the social network</h3>
                          <input type="text" name="twitter" placeholder="Twitter" />
                          <input type="text" name="facebook" placeholder="Facebook" />
                          <input type="text" name="gplus" placeholder="Google Plus" />
                          <input type="button" name="previous" class="previous action-button" value="Previous" />
                          <input type="button" name="next" class="next action-button" value="Next" />
                      </fieldset>
                      <fieldset>
                          <h2 class="fs-title">Personal Details</h2>
                          <h3 class="fs-subtitle">We will never sell it</h3>
                          <input type="text" name="fname" placeholder="First Name" />
                          <input type="text" name="lname" placeholder="Last Name" />
                          <input type="text" name="phone" placeholder="Phone" />
                          <textarea name="address" placeholder="Address"></textarea>
                          <input type="button" name="previous" class="previous action-button" value="Previous" />
                          <input type="submit" name="submit" class="submit action-button" value="Submit" />
                      </fieldset>
                  </form>
              </div>
          </div>
      </div>
    </div>
  </section>

<div class="mt-cb"></div>
<?php get_footer(); ?>