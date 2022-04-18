<?php

namespace ContainerRLx1TZR;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolder3c254 = null;
    private $initializer9f15c = null;
    private static $publicProperties0cefa = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        if ($this->valueHolder3c254 === $returnValue = $this->valueHolder3c254->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer9f15c = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder3c254) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder3c254 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, '__get', ['name' => $name], $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        if (isset(self::$publicProperties0cefa[$name])) {
            return $this->valueHolder3c254->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c254;
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
        $targetObject = $this->valueHolder3c254;
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
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c254;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder3c254;
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
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, '__isset', array('name' => $name), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c254;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder3c254;
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
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, '__unset', array('name' => $name), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3c254;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder3c254;
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
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, '__clone', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        $this->valueHolder3c254 = clone $this->valueHolder3c254;
    }
    public function __sleep()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, '__sleep', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return array('valueHolder3c254');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9f15c = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9f15c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'initializeProxy', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3c254;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3c254;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
