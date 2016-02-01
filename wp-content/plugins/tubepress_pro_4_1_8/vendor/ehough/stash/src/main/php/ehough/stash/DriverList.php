<?php

/*
 * This file is part of the Stash package.
 *
 * (c) Robert Hafner <tedivm@tedivm.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * DriverList contains various functions used to organize Driver classes that are available in the system.
 *
 * @package Stash
 * @author  Robert Hafner <tedivm@tedivm.com>
 */
class ehough_stash_DriverList
{
    /**
     * An array of possible cache storage data methods, with the driver class as the array value.
     *
     * @var array
     */
    protected static $drivers = array('Apc' => 'ehough_stash_driver_Apc',
                                       'BlackHole' => 'ehough_stash_driver_BlackHole',
                                       'Composite' => 'ehough_stash_driver_Composite',
                                       'Ephemeral' => 'ehough_stash_driver_Ephemeral',
                                       'FileSystem' => 'ehough_stash_driver_FileSystem',
                                       'Memcache' => 'ehough_stash_driver_Memcache',
                                       'Redis' => 'ehough_stash_driver_Redis',
                                       'SQLite' => 'ehough_stash_driver_Sqlite',
    );

    /**
     * Returns a list of cache drivers that are also supported by this system.
     *
     * @return array Driver Name => Class Name
     */
    public static function getAvailableDrivers()
    {
        $availableDrivers = array();
        $allDrivers = self::getAllDrivers();
        foreach ($allDrivers as $name => $class) {
            if ($name == 'Composite') {
                $availableDrivers[$name] = $class;
            } else {
                if (call_user_func(array($class, 'isAvailable'))) {
                    $availableDrivers[$name] = $class;
                }
            }
        }

        return $availableDrivers;
    }

    /**
     * Returns a list of all registered cache drivers, regardless of system support.
     *
     * @return array Driver Name => Class Name
     */
    public static function getAllDrivers()
    {
        $driverList = array();
        foreach (self::$drivers as $name => $class) {
            if (!class_exists($class) || !in_array('ehough_stash_interfaces_DriverInterface', class_implements($class))) {
                continue;
            }
            $driverList[$name] = $class;
        }

        return $driverList;
    }

    /**
     * Registers a new driver.
     *
     * @param string $name
     * @param string $class
     */
    public static function registerDriver($name, $class)
    {
        self::$drivers[$name] = $class;
    }

    /**
     * Returns the driver class for a specific driver name.
     *
     * @param  string $name
     * @return bool
     */
    public static function getDriverClass($name)
    {
        if (!isset(self::$drivers[$name])) {
            return false;
        }

        return self::$drivers[$name];
    }

    /**
     * Returns a list of cache drivers that are also supported by this system.
     *
     * @deprecated Deprecated in favor of getAvailableDrivers.
     * @return array
     */
    public static function getDrivers()
    {
        return self::getAvailableDrivers();
    }

}
