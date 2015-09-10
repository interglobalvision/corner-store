<?php
get_header();
$logo = IGV_get_option('_igv_logo');
$address = IGV_get_option('_igv_address');
$email = IGV_get_option('_igv_email');
$instagram = IGV_get_option('_igv_instagram');
$bg_images = IGV_get_option('_igv_background_images');

if (! empty($bg_images)) {
  echo '<div id="background-slider">';
  foreach ($bg_images as $image) {
    echo '<div style="background-image: url(' . $image['image'] . ')"></div>';
  }
  echo '</div>';
}
?>
<!-- main content -->

<main id="main-content" class="u-align-center">

<?php 
if (! empty($logo)) {
  echo '<img id="logo" src=' . $logo . '>';
}
if (! empty($address) || ! empty($logo) || ! empty($instagram)) {
  echo '<div id="contact">';
  if (! empty($address)) {
    echo wpautop( $address );
  }
  if (! empty($email)) {
    echo '<a href="mailto:' . $email . '">' . $email . '</a><br>';
  }
  if (! empty($instagram)) {
    echo '<a href="http://instagram.com/' . $instagram . '">@' . $instagram . '</a>';
  } 
  echo '</div>';
}
?>

<!-- end main-content -->

</main>

<?php
get_footer();
?>