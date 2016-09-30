<?php

namespace Vinkas\Discourse;

use Vinkas\Discourse\Traits\API;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class Discourse extends Model
{
  use API;

  private $url;

  protected function getUrl() {
    if($this->url)
      return $this->url;

    $protocol = $this->ssl ? 'https' : 'http';
    $this->url = sprintf(
      '%s://%s',
      $protocol,
      $this->domain,
    );
    return $this->url;
  }

}
