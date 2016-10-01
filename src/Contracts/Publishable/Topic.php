<?php

namespace Vinkas\Discourse\Contracts\Publishable;

interface Topic
{

  public function getPublishableTitle();

  public function getPublishableRaw();

  public function getDiscourseCategory();

}
