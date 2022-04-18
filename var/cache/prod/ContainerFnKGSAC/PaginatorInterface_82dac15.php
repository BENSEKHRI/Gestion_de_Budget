<?php

namespace ContainerFnKGSAC;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder596ef = null;
    private $initializerc829e = null;
    private static $publicPropertiesbf01e = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        if ($this->valueHolder596ef === $returnValue = $this->valueHolder596ef->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializerc829e = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder596ef) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder596ef = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, '__get', ['name' => $name], $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        if (isset(self::$publicPropertiesbf01e[$name])) {
            return $this->valueHolder596ef->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder596ef;
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
        $targetObject = $this->valueHolder596ef;
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
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder596ef;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder596ef;
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
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, '__isset', array('name' => $name), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder596ef;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder596ef;
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
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, '__unset', array('name' => $name), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder596ef;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder596ef;
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
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, '__clone', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        $this->valueHolder596ef = clone $this->valueHolder596ef;
    }
    public function __sleep()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, '__sleep', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return array('valueHolder596ef');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc829e = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc829e;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'initializeProxy', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder596ef;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder596ef;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
