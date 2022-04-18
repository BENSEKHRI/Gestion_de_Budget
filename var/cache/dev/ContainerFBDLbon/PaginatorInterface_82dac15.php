<?php

namespace ContainerFBDLbon;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder207cd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1af3c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties93628 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;

        if ($this->valueHolder207cd === $returnValue = $this->valueHolder207cd->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer1af3c = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder207cd) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder207cd = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, '__get', ['name' => $name], $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;

        if (isset(self::$publicProperties93628[$name])) {
            return $this->valueHolder207cd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder207cd;

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

        $targetObject = $this->valueHolder207cd;
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
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder207cd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder207cd;
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
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, '__isset', array('name' => $name), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder207cd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder207cd;
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
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, '__unset', array('name' => $name), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder207cd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder207cd;
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
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, '__clone', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;

        $this->valueHolder207cd = clone $this->valueHolder207cd;
    }

    public function __sleep()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, '__sleep', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;

        return array('valueHolder207cd');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1af3c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1af3c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'initializeProxy', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder207cd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder207cd;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
