<?php

namespace ContainerVxnssmY;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldercdf3a = null;
    private $initializer3c9d8 = null;
    private static $publicPropertiesda073 = [
        
    ];
    public function getConnection()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getConnection', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getMetadataFactory', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getExpressionBuilder', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'beginTransaction', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getCache', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getCache();
    }
    public function transactional($func)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'transactional', array('func' => $func), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'commit', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->commit();
    }
    public function rollback()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'rollback', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getClassMetadata', array('className' => $className), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'createQuery', array('dql' => $dql), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'createNamedQuery', array('name' => $name), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'createQueryBuilder', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'flush', array('entity' => $entity), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'clear', array('entityName' => $entityName), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->clear($entityName);
    }
    public function close()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'close', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->close();
    }
    public function persist($entity)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'persist', array('entity' => $entity), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'remove', array('entity' => $entity), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'refresh', array('entity' => $entity), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'detach', array('entity' => $entity), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'merge', array('entity' => $entity), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'contains', array('entity' => $entity), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getEventManager', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getConfiguration', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'isOpen', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getUnitOfWork', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getProxyFactory', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'initializeObject', array('obj' => $obj), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'getFilters', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'isFiltersStateClean', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, 'hasFilters', array(), $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        return $this->valueHoldercdf3a->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer3c9d8 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldercdf3a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercdf3a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldercdf3a->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer3c9d8 && ($this->initializer3c9d8->__invoke($valueHoldercdf3a, $this, '__get', ['name' => $name], $this->initializer3c9d8) || 1) && $this->valueHoldercdf3a = $valueHoldercdf3a;
        if (isset(self::$publicPropertiesda073[$name])) {
            return $this->valueHoldercdf3a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
