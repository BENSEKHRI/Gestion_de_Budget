<?php

namespace ContainerRLx1TZR;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder3c254 = null;
    private $initializer9f15c = null;
    private static $publicProperties0cefa = [
        
    ];
    public function getConnection()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getConnection', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getMetadataFactory', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getExpressionBuilder', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'beginTransaction', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getCache', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getCache();
    }
    public function transactional($func)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'transactional', array('func' => $func), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'commit', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->commit();
    }
    public function rollback()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'rollback', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getClassMetadata', array('className' => $className), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'createQuery', array('dql' => $dql), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'createNamedQuery', array('name' => $name), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'createQueryBuilder', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'flush', array('entity' => $entity), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'clear', array('entityName' => $entityName), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->clear($entityName);
    }
    public function close()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'close', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->close();
    }
    public function persist($entity)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'persist', array('entity' => $entity), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'remove', array('entity' => $entity), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'refresh', array('entity' => $entity), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'detach', array('entity' => $entity), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'merge', array('entity' => $entity), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'contains', array('entity' => $entity), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getEventManager', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getConfiguration', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'isOpen', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getUnitOfWork', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getProxyFactory', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'initializeObject', array('obj' => $obj), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'getFilters', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'isFiltersStateClean', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, 'hasFilters', array(), $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        return $this->valueHolder3c254->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer9f15c = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder3c254) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3c254 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder3c254->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer9f15c && ($this->initializer9f15c->__invoke($valueHolder3c254, $this, '__get', ['name' => $name], $this->initializer9f15c) || 1) && $this->valueHolder3c254 = $valueHolder3c254;
        if (isset(self::$publicProperties0cefa[$name])) {
            return $this->valueHolder3c254->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
