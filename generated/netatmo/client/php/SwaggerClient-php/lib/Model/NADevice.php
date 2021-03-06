<?php
/**
 * NADevice
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * NADevice Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NADevice implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        '_id' => 'string',
        'behavior' => 'int',
        'cipher_id' => 'string',
        'date_setup' => '\Swagger\Client\Model\NADate',
        'firmware' => 'int',
        'hw_version' => 'int',
        'heating_system' => '\Swagger\Client\Model\NAHeatingSystem',
        'house_model' => '\Swagger\Client\Model\NAHouseModel',
        'ip' => 'string',
        'last_fw_update' => 'int',
        'last_radio_store' => 'int',
        'last_status_store' => 'int',
        'last_upgrade' => 'int',
        'module_name' => 'string',
        'modules' => 'string[]',
        'place' => '\Swagger\Client\Model\NAPlace',
        'setpoint' => 'object',
        'setpoint_default_duration' => 'int',
        'setpoint_order' => 'map[string,\Swagger\Client\Model\NAObject[]]',
        'public_ext_data' => 'bool',
        'station_name' => 'string',
        'therm_program' => 'map[string,\Swagger\Client\Model\NAThermProgram]',
        'therm_program_backup' => 'map[string,\Swagger\Client\Model\NAThermProgram[]]',
        'therm_program_order' => 'map[string,\Swagger\Client\Model\NAObject[]]',
        'type' => 'string',
        'user_owner' => 'string[]',
        'udp_conn' => 'bool',
        'wifi_status' => 'int',
        'new_feature_avail' => 'bool',
        'first_pid_avail' => 'bool',
        'data_type' => 'string[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        '_id' => '_id',
        'behavior' => 'behavior',
        'cipher_id' => 'cipher_id',
        'date_setup' => 'date_setup',
        'firmware' => 'firmware',
        'hw_version' => 'hw_version',
        'heating_system' => 'heating_system',
        'house_model' => 'house_model',
        'ip' => 'ip',
        'last_fw_update' => 'last_fw_update',
        'last_radio_store' => 'last_radio_store',
        'last_status_store' => 'last_status_store',
        'last_upgrade' => 'last_upgrade',
        'module_name' => 'module_name',
        'modules' => 'modules',
        'place' => 'place',
        'setpoint' => 'setpoint',
        'setpoint_default_duration' => 'setpoint_default_duration',
        'setpoint_order' => 'setpoint_order',
        'public_ext_data' => 'public_ext_data',
        'station_name' => 'station_name',
        'therm_program' => 'therm_program',
        'therm_program_backup' => 'therm_program_backup',
        'therm_program_order' => 'therm_program_order',
        'type' => 'type',
        'user_owner' => 'user_owner',
        'udp_conn' => 'udp_conn',
        'wifi_status' => 'wifi_status',
        'new_feature_avail' => 'new_feature_avail',
        'first_pid_avail' => 'first_pid_avail',
        'data_type' => 'data_type'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        '_id' => 'setId',
        'behavior' => 'setBehavior',
        'cipher_id' => 'setCipherId',
        'date_setup' => 'setDateSetup',
        'firmware' => 'setFirmware',
        'hw_version' => 'setHwVersion',
        'heating_system' => 'setHeatingSystem',
        'house_model' => 'setHouseModel',
        'ip' => 'setIp',
        'last_fw_update' => 'setLastFwUpdate',
        'last_radio_store' => 'setLastRadioStore',
        'last_status_store' => 'setLastStatusStore',
        'last_upgrade' => 'setLastUpgrade',
        'module_name' => 'setModuleName',
        'modules' => 'setModules',
        'place' => 'setPlace',
        'setpoint' => 'setSetpoint',
        'setpoint_default_duration' => 'setSetpointDefaultDuration',
        'setpoint_order' => 'setSetpointOrder',
        'public_ext_data' => 'setPublicExtData',
        'station_name' => 'setStationName',
        'therm_program' => 'setThermProgram',
        'therm_program_backup' => 'setThermProgramBackup',
        'therm_program_order' => 'setThermProgramOrder',
        'type' => 'setType',
        'user_owner' => 'setUserOwner',
        'udp_conn' => 'setUdpConn',
        'wifi_status' => 'setWifiStatus',
        'new_feature_avail' => 'setNewFeatureAvail',
        'first_pid_avail' => 'setFirstPidAvail',
        'data_type' => 'setDataType'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        '_id' => 'getId',
        'behavior' => 'getBehavior',
        'cipher_id' => 'getCipherId',
        'date_setup' => 'getDateSetup',
        'firmware' => 'getFirmware',
        'hw_version' => 'getHwVersion',
        'heating_system' => 'getHeatingSystem',
        'house_model' => 'getHouseModel',
        'ip' => 'getIp',
        'last_fw_update' => 'getLastFwUpdate',
        'last_radio_store' => 'getLastRadioStore',
        'last_status_store' => 'getLastStatusStore',
        'last_upgrade' => 'getLastUpgrade',
        'module_name' => 'getModuleName',
        'modules' => 'getModules',
        'place' => 'getPlace',
        'setpoint' => 'getSetpoint',
        'setpoint_default_duration' => 'getSetpointDefaultDuration',
        'setpoint_order' => 'getSetpointOrder',
        'public_ext_data' => 'getPublicExtData',
        'station_name' => 'getStationName',
        'therm_program' => 'getThermProgram',
        'therm_program_backup' => 'getThermProgramBackup',
        'therm_program_order' => 'getThermProgramOrder',
        'type' => 'getType',
        'user_owner' => 'getUserOwner',
        'udp_conn' => 'getUdpConn',
        'wifi_status' => 'getWifiStatus',
        'new_feature_avail' => 'getNewFeatureAvail',
        'first_pid_avail' => 'getFirstPidAvail',
        'data_type' => 'getDataType'
    );
  
    
    /**
      * $_id 
      * @var string
      */
    protected $_id;
    
    /**
      * $behavior 
      * @var int
      */
    protected $behavior;
    
    /**
      * $cipher_id 
      * @var string
      */
    protected $cipher_id;
    
    /**
      * $date_setup 
      * @var \Swagger\Client\Model\NADate
      */
    protected $date_setup;
    
    /**
      * $firmware 
      * @var int
      */
    protected $firmware;
    
    /**
      * $hw_version 
      * @var int
      */
    protected $hw_version;
    
    /**
      * $heating_system 
      * @var \Swagger\Client\Model\NAHeatingSystem
      */
    protected $heating_system;
    
    /**
      * $house_model 
      * @var \Swagger\Client\Model\NAHouseModel
      */
    protected $house_model;
    
    /**
      * $ip 
      * @var string
      */
    protected $ip;
    
    /**
      * $last_fw_update 
      * @var int
      */
    protected $last_fw_update;
    
    /**
      * $last_radio_store 
      * @var int
      */
    protected $last_radio_store;
    
    /**
      * $last_status_store 
      * @var int
      */
    protected $last_status_store;
    
    /**
      * $last_upgrade 
      * @var int
      */
    protected $last_upgrade;
    
    /**
      * $module_name 
      * @var string
      */
    protected $module_name;
    
    /**
      * $modules It lists which modules are linked with this device
      * @var string[]
      */
    protected $modules;
    
    /**
      * $place 
      * @var \Swagger\Client\Model\NAPlace
      */
    protected $place;
    
    /**
      * $setpoint 
      * @var object
      */
    protected $setpoint;
    
    /**
      * $setpoint_default_duration 
      * @var int
      */
    protected $setpoint_default_duration;
    
    /**
      * $setpoint_order 
      * @var map[string,\Swagger\Client\Model\NAObject[]]
      */
    protected $setpoint_order;
    
    /**
      * $public_ext_data 
      * @var bool
      */
    protected $public_ext_data;
    
    /**
      * $station_name 
      * @var string
      */
    protected $station_name;
    
    /**
      * $therm_program 
      * @var map[string,\Swagger\Client\Model\NAThermProgram]
      */
    protected $therm_program;
    
    /**
      * $therm_program_backup 
      * @var map[string,\Swagger\Client\Model\NAThermProgram[]]
      */
    protected $therm_program_backup;
    
    /**
      * $therm_program_order 
      * @var map[string,\Swagger\Client\Model\NAObject[]]
      */
    protected $therm_program_order;
    
    /**
      * $type Included in every device or module. It defines the type of the device/module. Its values are among :\nNAMain : for the base station\nNAModule1 : for the outdoor module\nNAModule4 : for the additionnal indoor module\nNAModule3 : for the rain gauge module\nNAPlug : for the thermostat relay/plug\nNATherm1 : for the thermostat module
      * @var string
      */
    protected $type;
    
    /**
      * $user_owner 
      * @var string[]
      */
    protected $user_owner;
    
    /**
      * $udp_conn 
      * @var bool
      */
    protected $udp_conn;
    
    /**
      * $wifi_status It contains the current wifi status. The different thresholds to take into account are\nRSSI_THRESHOLD_0 = 86 bad signal\nRSSI_THRESHOLD_1 = 71 middle quality signal\nRSSI_THRESHOLD_2 = 56 good signal
      * @var int
      */
    protected $wifi_status;
    
    /**
      * $new_feature_avail 
      * @var bool
      */
    protected $new_feature_avail;
    
    /**
      * $first_pid_avail 
      * @var bool
      */
    protected $first_pid_avail;
    
    /**
      * $data_type 
      * @var string[]
      */
    protected $data_type;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->_id = $data["_id"];
            $this->behavior = $data["behavior"];
            $this->cipher_id = $data["cipher_id"];
            $this->date_setup = $data["date_setup"];
            $this->firmware = $data["firmware"];
            $this->hw_version = $data["hw_version"];
            $this->heating_system = $data["heating_system"];
            $this->house_model = $data["house_model"];
            $this->ip = $data["ip"];
            $this->last_fw_update = $data["last_fw_update"];
            $this->last_radio_store = $data["last_radio_store"];
            $this->last_status_store = $data["last_status_store"];
            $this->last_upgrade = $data["last_upgrade"];
            $this->module_name = $data["module_name"];
            $this->modules = $data["modules"];
            $this->place = $data["place"];
            $this->setpoint = $data["setpoint"];
            $this->setpoint_default_duration = $data["setpoint_default_duration"];
            $this->setpoint_order = $data["setpoint_order"];
            $this->public_ext_data = $data["public_ext_data"];
            $this->station_name = $data["station_name"];
            $this->therm_program = $data["therm_program"];
            $this->therm_program_backup = $data["therm_program_backup"];
            $this->therm_program_order = $data["therm_program_order"];
            $this->type = $data["type"];
            $this->user_owner = $data["user_owner"];
            $this->udp_conn = $data["udp_conn"];
            $this->wifi_status = $data["wifi_status"];
            $this->new_feature_avail = $data["new_feature_avail"];
            $this->first_pid_avail = $data["first_pid_avail"];
            $this->data_type = $data["data_type"];
        }
    }
    
    /**
     * Gets _id
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }
  
    /**
     * Sets _id
     * @param string $_id 
     * @return $this
     */
    public function setId($_id)
    {
        
        $this->_id = $_id;
        return $this;
    }
    
    /**
     * Gets behavior
     * @return int
     */
    public function getBehavior()
    {
        return $this->behavior;
    }
  
    /**
     * Sets behavior
     * @param int $behavior 
     * @return $this
     */
    public function setBehavior($behavior)
    {
        
        $this->behavior = $behavior;
        return $this;
    }
    
    /**
     * Gets cipher_id
     * @return string
     */
    public function getCipherId()
    {
        return $this->cipher_id;
    }
  
    /**
     * Sets cipher_id
     * @param string $cipher_id 
     * @return $this
     */
    public function setCipherId($cipher_id)
    {
        
        $this->cipher_id = $cipher_id;
        return $this;
    }
    
    /**
     * Gets date_setup
     * @return \Swagger\Client\Model\NADate
     */
    public function getDateSetup()
    {
        return $this->date_setup;
    }
  
    /**
     * Sets date_setup
     * @param \Swagger\Client\Model\NADate $date_setup 
     * @return $this
     */
    public function setDateSetup($date_setup)
    {
        
        $this->date_setup = $date_setup;
        return $this;
    }
    
    /**
     * Gets firmware
     * @return int
     */
    public function getFirmware()
    {
        return $this->firmware;
    }
  
    /**
     * Sets firmware
     * @param int $firmware 
     * @return $this
     */
    public function setFirmware($firmware)
    {
        
        $this->firmware = $firmware;
        return $this;
    }
    
    /**
     * Gets hw_version
     * @return int
     */
    public function getHwVersion()
    {
        return $this->hw_version;
    }
  
    /**
     * Sets hw_version
     * @param int $hw_version 
     * @return $this
     */
    public function setHwVersion($hw_version)
    {
        
        $this->hw_version = $hw_version;
        return $this;
    }
    
    /**
     * Gets heating_system
     * @return \Swagger\Client\Model\NAHeatingSystem
     */
    public function getHeatingSystem()
    {
        return $this->heating_system;
    }
  
    /**
     * Sets heating_system
     * @param \Swagger\Client\Model\NAHeatingSystem $heating_system 
     * @return $this
     */
    public function setHeatingSystem($heating_system)
    {
        
        $this->heating_system = $heating_system;
        return $this;
    }
    
    /**
     * Gets house_model
     * @return \Swagger\Client\Model\NAHouseModel
     */
    public function getHouseModel()
    {
        return $this->house_model;
    }
  
    /**
     * Sets house_model
     * @param \Swagger\Client\Model\NAHouseModel $house_model 
     * @return $this
     */
    public function setHouseModel($house_model)
    {
        
        $this->house_model = $house_model;
        return $this;
    }
    
    /**
     * Gets ip
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
  
    /**
     * Sets ip
     * @param string $ip 
     * @return $this
     */
    public function setIp($ip)
    {
        
        $this->ip = $ip;
        return $this;
    }
    
    /**
     * Gets last_fw_update
     * @return int
     */
    public function getLastFwUpdate()
    {
        return $this->last_fw_update;
    }
  
    /**
     * Sets last_fw_update
     * @param int $last_fw_update 
     * @return $this
     */
    public function setLastFwUpdate($last_fw_update)
    {
        
        $this->last_fw_update = $last_fw_update;
        return $this;
    }
    
    /**
     * Gets last_radio_store
     * @return int
     */
    public function getLastRadioStore()
    {
        return $this->last_radio_store;
    }
  
    /**
     * Sets last_radio_store
     * @param int $last_radio_store 
     * @return $this
     */
    public function setLastRadioStore($last_radio_store)
    {
        
        $this->last_radio_store = $last_radio_store;
        return $this;
    }
    
    /**
     * Gets last_status_store
     * @return int
     */
    public function getLastStatusStore()
    {
        return $this->last_status_store;
    }
  
    /**
     * Sets last_status_store
     * @param int $last_status_store 
     * @return $this
     */
    public function setLastStatusStore($last_status_store)
    {
        
        $this->last_status_store = $last_status_store;
        return $this;
    }
    
    /**
     * Gets last_upgrade
     * @return int
     */
    public function getLastUpgrade()
    {
        return $this->last_upgrade;
    }
  
    /**
     * Sets last_upgrade
     * @param int $last_upgrade 
     * @return $this
     */
    public function setLastUpgrade($last_upgrade)
    {
        
        $this->last_upgrade = $last_upgrade;
        return $this;
    }
    
    /**
     * Gets module_name
     * @return string
     */
    public function getModuleName()
    {
        return $this->module_name;
    }
  
    /**
     * Sets module_name
     * @param string $module_name 
     * @return $this
     */
    public function setModuleName($module_name)
    {
        
        $this->module_name = $module_name;
        return $this;
    }
    
    /**
     * Gets modules
     * @return string[]
     */
    public function getModules()
    {
        return $this->modules;
    }
  
    /**
     * Sets modules
     * @param string[] $modules It lists which modules are linked with this device
     * @return $this
     */
    public function setModules($modules)
    {
        
        $this->modules = $modules;
        return $this;
    }
    
    /**
     * Gets place
     * @return \Swagger\Client\Model\NAPlace
     */
    public function getPlace()
    {
        return $this->place;
    }
  
    /**
     * Sets place
     * @param \Swagger\Client\Model\NAPlace $place 
     * @return $this
     */
    public function setPlace($place)
    {
        
        $this->place = $place;
        return $this;
    }
    
    /**
     * Gets setpoint
     * @return object
     */
    public function getSetpoint()
    {
        return $this->setpoint;
    }
  
    /**
     * Sets setpoint
     * @param object $setpoint 
     * @return $this
     */
    public function setSetpoint($setpoint)
    {
        
        $this->setpoint = $setpoint;
        return $this;
    }
    
    /**
     * Gets setpoint_default_duration
     * @return int
     */
    public function getSetpointDefaultDuration()
    {
        return $this->setpoint_default_duration;
    }
  
    /**
     * Sets setpoint_default_duration
     * @param int $setpoint_default_duration 
     * @return $this
     */
    public function setSetpointDefaultDuration($setpoint_default_duration)
    {
        
        $this->setpoint_default_duration = $setpoint_default_duration;
        return $this;
    }
    
    /**
     * Gets setpoint_order
     * @return map[string,\Swagger\Client\Model\NAObject[]]
     */
    public function getSetpointOrder()
    {
        return $this->setpoint_order;
    }
  
    /**
     * Sets setpoint_order
     * @param map[string,\Swagger\Client\Model\NAObject[]] $setpoint_order 
     * @return $this
     */
    public function setSetpointOrder($setpoint_order)
    {
        
        $this->setpoint_order = $setpoint_order;
        return $this;
    }
    
    /**
     * Gets public_ext_data
     * @return bool
     */
    public function getPublicExtData()
    {
        return $this->public_ext_data;
    }
  
    /**
     * Sets public_ext_data
     * @param bool $public_ext_data 
     * @return $this
     */
    public function setPublicExtData($public_ext_data)
    {
        
        $this->public_ext_data = $public_ext_data;
        return $this;
    }
    
    /**
     * Gets station_name
     * @return string
     */
    public function getStationName()
    {
        return $this->station_name;
    }
  
    /**
     * Sets station_name
     * @param string $station_name 
     * @return $this
     */
    public function setStationName($station_name)
    {
        
        $this->station_name = $station_name;
        return $this;
    }
    
    /**
     * Gets therm_program
     * @return map[string,\Swagger\Client\Model\NAThermProgram]
     */
    public function getThermProgram()
    {
        return $this->therm_program;
    }
  
    /**
     * Sets therm_program
     * @param map[string,\Swagger\Client\Model\NAThermProgram] $therm_program 
     * @return $this
     */
    public function setThermProgram($therm_program)
    {
        
        $this->therm_program = $therm_program;
        return $this;
    }
    
    /**
     * Gets therm_program_backup
     * @return map[string,\Swagger\Client\Model\NAThermProgram[]]
     */
    public function getThermProgramBackup()
    {
        return $this->therm_program_backup;
    }
  
    /**
     * Sets therm_program_backup
     * @param map[string,\Swagger\Client\Model\NAThermProgram[]] $therm_program_backup 
     * @return $this
     */
    public function setThermProgramBackup($therm_program_backup)
    {
        
        $this->therm_program_backup = $therm_program_backup;
        return $this;
    }
    
    /**
     * Gets therm_program_order
     * @return map[string,\Swagger\Client\Model\NAObject[]]
     */
    public function getThermProgramOrder()
    {
        return $this->therm_program_order;
    }
  
    /**
     * Sets therm_program_order
     * @param map[string,\Swagger\Client\Model\NAObject[]] $therm_program_order 
     * @return $this
     */
    public function setThermProgramOrder($therm_program_order)
    {
        
        $this->therm_program_order = $therm_program_order;
        return $this;
    }
    
    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
  
    /**
     * Sets type
     * @param string $type Included in every device or module. It defines the type of the device/module. Its values are among :\nNAMain : for the base station\nNAModule1 : for the outdoor module\nNAModule4 : for the additionnal indoor module\nNAModule3 : for the rain gauge module\nNAPlug : for the thermostat relay/plug\nNATherm1 : for the thermostat module
     * @return $this
     */
    public function setType($type)
    {
        
        $this->type = $type;
        return $this;
    }
    
    /**
     * Gets user_owner
     * @return string[]
     */
    public function getUserOwner()
    {
        return $this->user_owner;
    }
  
    /**
     * Sets user_owner
     * @param string[] $user_owner 
     * @return $this
     */
    public function setUserOwner($user_owner)
    {
        
        $this->user_owner = $user_owner;
        return $this;
    }
    
    /**
     * Gets udp_conn
     * @return bool
     */
    public function getUdpConn()
    {
        return $this->udp_conn;
    }
  
    /**
     * Sets udp_conn
     * @param bool $udp_conn 
     * @return $this
     */
    public function setUdpConn($udp_conn)
    {
        
        $this->udp_conn = $udp_conn;
        return $this;
    }
    
    /**
     * Gets wifi_status
     * @return int
     */
    public function getWifiStatus()
    {
        return $this->wifi_status;
    }
  
    /**
     * Sets wifi_status
     * @param int $wifi_status It contains the current wifi status. The different thresholds to take into account are\nRSSI_THRESHOLD_0 = 86 bad signal\nRSSI_THRESHOLD_1 = 71 middle quality signal\nRSSI_THRESHOLD_2 = 56 good signal
     * @return $this
     */
    public function setWifiStatus($wifi_status)
    {
        
        $this->wifi_status = $wifi_status;
        return $this;
    }
    
    /**
     * Gets new_feature_avail
     * @return bool
     */
    public function getNewFeatureAvail()
    {
        return $this->new_feature_avail;
    }
  
    /**
     * Sets new_feature_avail
     * @param bool $new_feature_avail 
     * @return $this
     */
    public function setNewFeatureAvail($new_feature_avail)
    {
        
        $this->new_feature_avail = $new_feature_avail;
        return $this;
    }
    
    /**
     * Gets first_pid_avail
     * @return bool
     */
    public function getFirstPidAvail()
    {
        return $this->first_pid_avail;
    }
  
    /**
     * Sets first_pid_avail
     * @param bool $first_pid_avail 
     * @return $this
     */
    public function setFirstPidAvail($first_pid_avail)
    {
        
        $this->first_pid_avail = $first_pid_avail;
        return $this;
    }
    
    /**
     * Gets data_type
     * @return string[]
     */
    public function getDataType()
    {
        return $this->data_type;
    }
  
    /**
     * Sets data_type
     * @param string[] $data_type 
     * @return $this
     */
    public function setDataType($data_type)
    {
        
        $this->data_type = $data_type;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}
