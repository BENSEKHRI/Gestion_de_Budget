<?php

namespace ContainerFnKGSAC;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder596ef = null;
    private $initializerc829e = null;
    private static $publicPropertiesbf01e = [
        
    ];
    public function getConnection()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getConnection', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getMetadataFactory', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getExpressionBuilder', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'beginTransaction', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getCache', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'transactional', array('func' => $func), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'commit', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->commit();
    }
    public function rollback()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'rollback', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getClassMetadata', array('className' => $className), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'createQuery', array('dql' => $dql), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'createNamedQuery', array('name' => $name), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'createQueryBuilder', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'flush', array('entity' => $entity), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'clear', array('entityName' => $entityName), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->clear($entityName);
    }
    public function close()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'close', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->close();
    }
    public function persist($entity)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'persist', array('entity' => $entity), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'remove', array('entity' => $entity), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'refresh', array('entity' => $entity), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'detach', array('entity' => $entity), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'merge', array('entity' => $entity), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'contains', array('entity' => $entity), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getEventManager', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getConfiguration', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'isOpen', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getUnitOfWork', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getProxyFactory', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'initializeObject', array('obj' => $obj), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'getFilters', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'isFiltersStateClean', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, 'hasFilters', array(), $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        return $this->valueHolder596ef->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc829e = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder596ef) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder596ef = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder596ef->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc829e && ($this->initializerc829e->__invoke($valueHolder596ef, $this, '__get', ['name' => $name], $this->initializerc829e) || 1) && $this->valueHolder596ef = $valueHolder596ef;
        if (isset(self::$publicPropertiesbf01e[$name])) {
            return $this->valueHolder596ef->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
