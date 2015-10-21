<?php

/**
 * Return HTML for member images.
 */
function nebda_get_member_logos() {

  include_once('members.php');

  $images = '';
  foreach ($members as $member) {
    $images .= '<div class="large-4 columns">' . nebda_member_logo($member) . '</div>';
  }

  return $images;

}

/**
 * Return a member logo.
 */
function nebda_member_logo($member) {
  $image = '<a href="'. $member['url'] .'"><img src="/img/'. $member['image'] .'" alt="'. $member['name'] .' logo" title="'. $member['name'] .'"></a>';
  return $image;
}
