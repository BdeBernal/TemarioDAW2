<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5f3bc = null;
    private $initializer7396d = null;
    private static $publicProperties53bcd = [
        
    ];
    public function getConnection()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getConnection', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getMetadataFactory', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getExpressionBuilder', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'beginTransaction', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getCache', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getCache();
    }
    public function transactional($func)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'transactional', array('func' => $func), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'commit', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->commit();
    }
    public function rollback()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'rollback', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getClassMetadata', array('className' => $className), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'createQuery', array('dql' => $dql), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'createNamedQuery', array('name' => $name), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'createQueryBuilder', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'flush', array('entity' => $entity), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'clear', array('entityName' => $entityName), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->clear($entityName);
    }
    public function close()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'close', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->close();
    }
    public function persist($entity)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'persist', array('entity' => $entity), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'remove', array('entity' => $entity), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'refresh', array('entity' => $entity), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'detach', array('entity' => $entity), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'merge', array('entity' => $entity), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'contains', array('entity' => $entity), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getEventManager', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getConfiguration', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'isOpen', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getUnitOfWork', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getProxyFactory', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'initializeObject', array('obj' => $obj), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getFilters', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'isFiltersStateClean', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'hasFilters', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer7396d = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5f3bc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5f3bc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5f3bc->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, '__get', ['name' => $name], $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        if (isset(self::$publicProperties53bcd[$name])) {
            return $this->valueHolder5f3bc->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f3bc;
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
        $targetObject = $this->valueHolder5f3bc;
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
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f3bc;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5f3bc;
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
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, '__isset', array('name' => $name), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f3bc;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder5f3bc;
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
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, '__unset', array('name' => $name), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f3bc;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5f3bc;
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
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, '__clone', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        $this->valueHolder5f3bc = clone $this->valueHolder5f3bc;
    }
    public function __sleep()
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, '__sleep', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return array('valueHolder5f3bc');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7396d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7396d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'initializeProxy', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5f3bc;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5f3bc;
    }
}
