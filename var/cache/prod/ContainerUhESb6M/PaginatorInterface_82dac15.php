<?php

namespace ContainerUhESb6M;

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    private $valueHolderf37e6 = null;
    private $initializer18e67 = null;
    private static $publicPropertiesdf6e6 = [
        
    ];
    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer18e67 && ($this->initializer18e67->__invoke($valueHolderf37e6, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer18e67) || 1) && $this->valueHolderf37e6 = $valueHolderf37e6;
        if ($this->valueHolderf37e6 === $returnValue = $this->valueHolderf37e6->paginate($target, $page, $limit, $options)) {
            return $this;
        }
        return $returnValue;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        $instance->initializer18e67 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolderf37e6) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderf37e6 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer18e67 && ($this->initializer18e67->__invoke($valueHolderf37e6, $this, '__get', ['name' => $name], $this->initializer18e67) || 1) && $this->valueHolderf37e6 = $valueHolderf37e6;
        if (isset(self::$publicPropertiesdf6e6[$name])) {
            return $this->valueHolderf37e6->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf37e6;
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
        $targetObject = $this->valueHolderf37e6;
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
        $this->initializer18e67 && ($this->initializer18e67->__invoke($valueHolderf37e6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer18e67) || 1) && $this->valueHolderf37e6 = $valueHolderf37e6;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf37e6;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderf37e6;
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
        $this->initializer18e67 && ($this->initializer18e67->__invoke($valueHolderf37e6, $this, '__isset', array('name' => $name), $this->initializer18e67) || 1) && $this->valueHolderf37e6 = $valueHolderf37e6;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf37e6;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderf37e6;
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
        $this->initializer18e67 && ($this->initializer18e67->__invoke($valueHolderf37e6, $this, '__unset', array('name' => $name), $this->initializer18e67) || 1) && $this->valueHolderf37e6 = $valueHolderf37e6;
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf37e6;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderf37e6;
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
        $this->initializer18e67 && ($this->initializer18e67->__invoke($valueHolderf37e6, $this, '__clone', array(), $this->initializer18e67) || 1) && $this->valueHolderf37e6 = $valueHolderf37e6;
        $this->valueHolderf37e6 = clone $this->valueHolderf37e6;
    }
    public function __sleep()
    {
        $this->initializer18e67 && ($this->initializer18e67->__invoke($valueHolderf37e6, $this, '__sleep', array(), $this->initializer18e67) || 1) && $this->valueHolderf37e6 = $valueHolderf37e6;
        return array('valueHolderf37e6');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer18e67 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer18e67;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer18e67 && ($this->initializer18e67->__invoke($valueHolderf37e6, $this, 'initializeProxy', array(), $this->initializer18e67) || 1) && $this->valueHolderf37e6 = $valueHolderf37e6;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf37e6;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf37e6;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
