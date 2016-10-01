<?php

namespace Vinkas\Discourse;

use Vinkas\Discourse\Models\Forum;
use Vinkas\Discourse\Traits\API as TraitAPI;

class API
{

  use TraitAPI;

  function __construct(Forum $forum) {
    $this->setUrl($forum->domain, $forum->ssl);
    $this->setQueryParams($forum->api_key, $forum->api_username);
  }

  function __construct($domain, $ssl, $api_key, $api_username) {
    $this->setUrl($domain, $ssl);
    $this->setQueryParams($api_key, $api_username);
  }

}
