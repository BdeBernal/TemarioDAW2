<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5f3bc = null;
    private $initializer7396d = null;
    private static $publicProperties53bcd = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getList', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getInstalledModules', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getMustBeConfiguredModules', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getUpgradableModules', array(), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'setActionUrls', array('collection' => $collection), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        return $this->valueHolder5f3bc->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer7396d = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder5f3bc) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder5f3bc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder5f3bc->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer7396d && ($this->initializer7396d->__invoke($valueHolder5f3bc, $this, '__get', ['name' => $name], $this->initializer7396d) || 1) && $this->valueHolder5f3bc = $valueHolder5f3bc;
        if (isset(self::$publicProperties53bcd[$name])) {
            return $this->valueHolder5f3bc->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
