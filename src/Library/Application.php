<?php
namespace Library;

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
    
    public function assemble()
    {
        
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
            self::$instance = $instance;
        }
        return self::$instance;
    }

}
