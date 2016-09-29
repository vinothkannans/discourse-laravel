<?php

namespace Vinkas\Discourse;

use Illuminate\Support\ServiceProvider;
use Vinkas\Discourse\Facades\Discourse;

class DiscourseServiceProvider extends ServiceProvider
{
  /**
  * Indicates if loading of the provider is deferred.
  *
  * @var bool
  */
  protected $defer = true;

  /**
  * Register the service provider.
  *
  * @return void
  */
  public function register()
  {
    $this->app->singleton(Discourse::class, function ($app) {
      return new Discourse($app['config']['discourse']);
    });
  }

  /**
  * Get the services provided by the provider.
  *
  * @return array
  */
  public function provides()
  {
    return [Discourse::class];
  }
}
