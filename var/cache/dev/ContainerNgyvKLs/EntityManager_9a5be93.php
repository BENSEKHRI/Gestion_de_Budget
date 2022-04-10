<?php

namespace ContainerNgyvKLs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getConnection', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getMetadataFactory', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getExpressionBuilder', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'beginTransaction', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getCache', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getCache();
    }

    public function transactional($func)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'transactional', array('func' => $func), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'wrapInTransaction', array('func' => $func), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'commit', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->commit();
    }

    public function rollback()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'rollback', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getClassMetadata', array('className' => $className), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'createQuery', array('dql' => $dql), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'createNamedQuery', array('name' => $name), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'createQueryBuilder', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'flush', array('entity' => $entity), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'clear', array('entityName' => $entityName), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->clear($entityName);
    }

    public function close()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'close', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->close();
    }

    public function persist($entity)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'persist', array('entity' => $entity), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'remove', array('entity' => $entity), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'refresh', array('entity' => $entity), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'detach', array('entity' => $entity), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'merge', array('entity' => $entity), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getRepository', array('entityName' => $entityName), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'contains', array('entity' => $entity), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getEventManager', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getConfiguration', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'isOpen', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getUnitOfWork', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getProxyFactory', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'initializeObject', array('obj' => $obj), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'getFilters', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'isFiltersStateClean', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, 'hasFilters', array(), $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        return $this->valueHoldere1aca->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera88d3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere1aca) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere1aca = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere1aca->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera88d3 && ($this->initializera88d3->__invoke($valueHoldere1aca, $this, '__get', ['name' => $name], $this->initializera88d3) || 1) && $this->valueHoldere1aca = $valueHoldere1aca;

        if (isset(self::$publicProperties00a4d[$name])) {
            return $this->valueHoldere1aca->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
