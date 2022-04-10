<?php

namespace ContainerZx4Xwox;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere1aca = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera88d3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties00a4d = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        if ($this->valueHoldere1aca === $returnValue = $this->valueHoldere1aca->paginate($target, $page, $limit, $options)) {
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

        $instance->initializera88d3 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHoldere1aca) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHoldere1aca = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, '__get', ['name' => $name], $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        if (isset(self::$publicProperties00a4d[$name])) {
            return $this->valueHoldere1aca->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1aca;

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

        $targetObject = $this->valueHoldere1aca;
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
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1aca;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere1aca;
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
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, '__isset', array('name' => $name), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1aca;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere1aca;
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
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, '__unset', array('name' => $name), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere1aca;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere1aca;
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
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, '__clone', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        $this->valueHoldere1aca = clone $this->valueHoldere1aca;
    }

    public function __sleep()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, '__sleep', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return array('valueHoldere1aca');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera88d3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera88d3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'initializeProxy', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere1aca;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere1aca;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
