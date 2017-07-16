<?php
namespace Library;

use App\Provider\ConfigServiceProvider;
use Pimple\Container;

/**
 * Class Application
 * Date: 17/5/9
 * @package Library
 */
class Application extends Container {

    /**
     * @var Application
     */
    private static $instance = null;

    /**
     * Application constructor.
     * @param array $values
     */
    public function __construct(array $values = array())
    {
        parent::__construct($values);
    }
    
    /**
     * init providers
     * @return Application
     */
    public static function init()
    {
        if (empty(self::$instance))
        {
            $instance = new static();
            $instance->register(new ConfigServiceProvider());
            $providers = $instance['config']->get('bootstrip.providers');
            if (!empty($providers))
            {
                foreach ($providers as $provider)
                {
                    $instance->register(new $provider());
                }
            }
            self::$instance = $instance;
        }
        return self::$instance;
    }

}
