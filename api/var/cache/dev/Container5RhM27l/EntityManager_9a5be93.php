<?php

namespace Container5RhM27l;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera3c18 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer73bf2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb8a02 = [
        
    ];

    public function getConnection()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getConnection', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getMetadataFactory', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getExpressionBuilder', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'beginTransaction', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getCache', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getCache();
    }

    public function transactional($func)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'transactional', array('func' => $func), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->transactional($func);
    }

    public function commit()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'commit', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->commit();
    }

    public function rollback()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'rollback', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getClassMetadata', array('className' => $className), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'createQuery', array('dql' => $dql), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'createNamedQuery', array('name' => $name), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'createQueryBuilder', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'flush', array('entity' => $entity), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'clear', array('entityName' => $entityName), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->clear($entityName);
    }

    public function close()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'close', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->close();
    }

    public function persist($entity)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'persist', array('entity' => $entity), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'remove', array('entity' => $entity), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'refresh', array('entity' => $entity), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'detach', array('entity' => $entity), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'merge', array('entity' => $entity), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getRepository', array('entityName' => $entityName), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'contains', array('entity' => $entity), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getEventManager', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getConfiguration', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'isOpen', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getUnitOfWork', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getProxyFactory', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'initializeObject', array('obj' => $obj), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'getFilters', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'isFiltersStateClean', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'hasFilters', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return $this->valueHoldera3c18->hasFilters();
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

        $instance->initializer73bf2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera3c18) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera3c18 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera3c18->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, '__get', ['name' => $name], $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        if (isset(self::$publicPropertiesb8a02[$name])) {
            return $this->valueHoldera3c18->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3c18;

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

        $targetObject = $this->valueHoldera3c18;
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
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3c18;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera3c18;
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
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, '__isset', array('name' => $name), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3c18;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera3c18;
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
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, '__unset', array('name' => $name), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3c18;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera3c18;
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
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, '__clone', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        $this->valueHoldera3c18 = clone $this->valueHoldera3c18;
    }

    public function __sleep()
    {
        $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, '__sleep', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;

        return array('valueHoldera3c18');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer73bf2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer73bf2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer73bf2 && ($this->initializer73bf2->__invoke($valueHoldera3c18, $this, 'initializeProxy', array(), $this->initializer73bf2) || 1) && $this->valueHoldera3c18 = $valueHoldera3c18;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera3c18;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera3c18;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
