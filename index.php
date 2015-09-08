<?php
get_header();
$logo = IGV_get_option('_igv_logo');
$address = IGV_get_option('_igv_address');
$email = IGV_get_option('_igv_email');
$instagram = IGV_get_option('_igv_instagram');
?>

<!-- main content -->

<main id="main-content">

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