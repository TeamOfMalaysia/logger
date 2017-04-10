<?php namespace TeamOfMalaysia\Logger;

/**
 * Class ServiceProvider - Description
 *
 * @package TeamOfMalaysia\Logger
 * @author TeamOfMalaysia <lwl@outlook.com>
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared('logger', function($app)
        {
            return new LoggerFactory($app['config']['log']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('logger');
    }
}
