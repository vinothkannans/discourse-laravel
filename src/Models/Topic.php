<?php

namespace Vinkas\Discourse\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{

  protected $table = 'discourse_topics';

  /**
   * Get the Discourse that owns the topic.
   */
  public function forum()
  {
    return $this->belongsTo('Vinkas\Discourse\Models\Forum');
  }

}
