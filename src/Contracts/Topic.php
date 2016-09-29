<?php

namespace Vinkas\Discourse\Contracts;

interface Topic
{
  /**
   * Get the unique identifier for the topic.
   *
   * @return string
   */
  public function getId();
}
