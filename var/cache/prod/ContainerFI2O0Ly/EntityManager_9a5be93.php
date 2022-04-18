<?php

namespace ContainerFI2O0Ly;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder207cd = null;
    private $initializer1af3c = null;
    private static $publicProperties93628 = [
        
    ];
    public function getConnection()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getConnection', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getMetadataFactory', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getExpressionBuilder', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'beginTransaction', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getCache', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getCache();
    }
    public function transactional($func)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'transactional', array('func' => $func), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'commit', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->commit();
    }
    public function rollback()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'rollback', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getClassMetadata', array('className' => $className), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'createQuery', array('dql' => $dql), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'createNamedQuery', array('name' => $name), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'createQueryBuilder', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'flush', array('entity' => $entity), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'clear', array('entityName' => $entityName), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->clear($entityName);
    }
    public function close()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'close', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->close();
    }
    public function persist($entity)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'persist', array('entity' => $entity), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'remove', array('entity' => $entity), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'refresh', array('entity' => $entity), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'detach', array('entity' => $entity), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'merge', array('entity' => $entity), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'contains', array('entity' => $entity), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getEventManager', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getConfiguration', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'isOpen', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getUnitOfWork', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getProxyFactory', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'initializeObject', array('obj' => $obj), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'getFilters', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'isFiltersStateClean', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, 'hasFilters', array(), $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        return $this->valueHolder207cd->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer1af3c = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder207cd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder207cd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder207cd->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer1af3c && ($this->initializer1af3c->__invoke($valueHolder207cd, $this, '__get', ['name' => $name], $this->initializer1af3c) || 1) && $this->valueHolder207cd = $valueHolder207cd;
        if (isset(self::$publicProperties93628[$name])) {
            return $this->valueHolder207cd->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
