<?php

namespace ContainerBsCC6CO;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercdf3a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3c9d8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesda073 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;

        if ($this->valueHoldercdf3a === $returnValue = $this->valueHoldercdf3a->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializer3c9d8 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldercdf3a) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldercdf3a = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, '__get', ['name' => $name], $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;

        if (isset(self::$publicPropertiesda073[$name])) {
            return $this->valueHoldercdf3a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercdf3a;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercdf3a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercdf3a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercdf3a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, '__isset', array('name' => $name), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercdf3a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercdf3a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, '__unset', array('name' => $name), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercdf3a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercdf3a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, '__clone', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;

        $this->valueHoldercdf3a = clone $this->valueHoldercdf3a;
    }

    public function __sleep()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, '__sleep', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;

        return array('valueHoldercdf3a');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3c9d8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3c9d8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'initializeProxy', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercdf3a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercdf3a;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
