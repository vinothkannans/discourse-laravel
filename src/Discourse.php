<?php

namespace Vinkas\Discourse;

use Vinkas\Discourse\Traits\API;

/**
 *
 */
class Discourse
{

  use API;

  array $config;

  public function __construct(array $config)
  {
    $this->config = $config;
  }

}
