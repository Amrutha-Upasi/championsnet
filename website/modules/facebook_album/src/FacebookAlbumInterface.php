<?php
/**
 * @file
 * Contains \Drupal\facebook_album\FacebookAlbumInterface.
 */

namespace Drupal\facebook_album;

/**
 * FacebookAlbumInterface.
 */
interface FacebookAlbumInterface {

  /**
   * Get response data.
   */
  public function get($call_path = '', $parameters = array());

}
