<?php

namespace ContainerC7XoeYR;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder01560 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb4a90 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties25847 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getConnection', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getMetadataFactory', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getExpressionBuilder', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'beginTransaction', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getCache', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'transactional', array('func' => $func), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->transactional($func);
    }

    public function commit()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'commit', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->commit();
    }

    public function rollback()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'rollback', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getClassMetadata', array('className' => $className), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'createQuery', array('dql' => $dql), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'createNamedQuery', array('name' => $name), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'createQueryBuilder', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'flush', array('entity' => $entity), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'clear', array('entityName' => $entityName), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->clear($entityName);
    }

    public function close()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'close', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->close();
    }

    public function persist($entity)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'persist', array('entity' => $entity), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'remove', array('entity' => $entity), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'refresh', array('entity' => $entity), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'detach', array('entity' => $entity), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'merge', array('entity' => $entity), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'contains', array('entity' => $entity), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getEventManager', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getConfiguration', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'isOpen', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getUnitOfWork', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getProxyFactory', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'initializeObject', array('obj' => $obj), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'getFilters', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'isFiltersStateClean', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'hasFilters', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return $this->valueHolder01560->hasFilters();
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

        $instance->initializerb4a90 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder01560) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder01560 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder01560->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, '__get', ['name' => $name], $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        if (isset(self::$publicProperties25847[$name])) {
            return $this->valueHolder01560->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01560;

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

        $targetObject = $this->valueHolder01560;
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
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01560;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder01560;
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
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, '__isset', array('name' => $name), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01560;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder01560;
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
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, '__unset', array('name' => $name), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder01560;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder01560;
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
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, '__clone', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        $this->valueHolder01560 = clone $this->valueHolder01560;
    }

    public function __sleep()
    {
        $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, '__sleep', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;

        return array('valueHolder01560');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb4a90 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb4a90;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb4a90 && ($this->initializerb4a90->__invoke($valueHolder01560, $this, 'initializeProxy', array(), $this->initializerb4a90) || 1) && $this->valueHolder01560 = $valueHolder01560;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder01560;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder01560;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
