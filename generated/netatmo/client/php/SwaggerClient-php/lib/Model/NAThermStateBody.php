<?php
/**
 * NAThermStateBody
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
 * NAThermStateBody Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NAThermStateBody implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'setpoint' => '\Swagger\Client\Model\NASetpoint',
        'setpoint_order' => '\Swagger\Client\Model\NASetpoint',
        'therm_program' => '\Swagger\Client\Model\NAThermProgram',
        'therm_program_backup' => '\Swagger\Client\Model\NAThermProgram[]',
        'therm_program_order' => '\Swagger\Client\Model\NAThermProgram',
        'therm_orientation' => 'int',
        'therm_relay_cmd' => 'int',
        'battery_vp' => 'int',
        'rf_status' => 'int',
        'plug_connected_boiler' => 'bool',
        'udp_conn' => 'bool',
        'last_therm_seen' => 'int',
        'last_plug_seen' => 'int',
        'wifi_status' => 'int',
        'measured' => '\Swagger\Client\Model\NAThermMeasure'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'setpoint' => 'setpoint',
        'setpoint_order' => 'setpoint_order',
        'therm_program' => 'therm_program',
        'therm_program_backup' => 'therm_program_backup',
        'therm_program_order' => 'therm_program_order',
        'therm_orientation' => 'therm_orientation',
        'therm_relay_cmd' => 'therm_relay_cmd',
        'battery_vp' => 'battery_vp',
        'rf_status' => 'rf_status',
        'plug_connected_boiler' => 'plug_connected_boiler',
        'udp_conn' => 'udp_conn',
        'last_therm_seen' => 'last_therm_seen',
        'last_plug_seen' => 'last_plug_seen',
        'wifi_status' => 'wifi_status',
        'measured' => 'measured'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'setpoint' => 'setSetpoint',
        'setpoint_order' => 'setSetpointOrder',
        'therm_program' => 'setThermProgram',
        'therm_program_backup' => 'setThermProgramBackup',
        'therm_program_order' => 'setThermProgramOrder',
        'therm_orientation' => 'setThermOrientation',
        'therm_relay_cmd' => 'setThermRelayCmd',
        'battery_vp' => 'setBatteryVp',
        'rf_status' => 'setRfStatus',
        'plug_connected_boiler' => 'setPlugConnectedBoiler',
        'udp_conn' => 'setUdpConn',
        'last_therm_seen' => 'setLastThermSeen',
        'last_plug_seen' => 'setLastPlugSeen',
        'wifi_status' => 'setWifiStatus',
        'measured' => 'setMeasured'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'setpoint' => 'getSetpoint',
        'setpoint_order' => 'getSetpointOrder',
        'therm_program' => 'getThermProgram',
        'therm_program_backup' => 'getThermProgramBackup',
        'therm_program_order' => 'getThermProgramOrder',
        'therm_orientation' => 'getThermOrientation',
        'therm_relay_cmd' => 'getThermRelayCmd',
        'battery_vp' => 'getBatteryVp',
        'rf_status' => 'getRfStatus',
        'plug_connected_boiler' => 'getPlugConnectedBoiler',
        'udp_conn' => 'getUdpConn',
        'last_therm_seen' => 'getLastThermSeen',
        'last_plug_seen' => 'getLastPlugSeen',
        'wifi_status' => 'getWifiStatus',
        'measured' => 'getMeasured'
    );
  
    
    /**
      * $setpoint 
      * @var \Swagger\Client\Model\NASetpoint
      */
    protected $setpoint;
    
    /**
      * $setpoint_order 
      * @var \Swagger\Client\Model\NASetpoint
      */
    protected $setpoint_order;
    
    /**
      * $therm_program 
      * @var \Swagger\Client\Model\NAThermProgram
      */
    protected $therm_program;
    
    /**
      * $therm_program_backup 
      * @var \Swagger\Client\Model\NAThermProgram[]
      */
    protected $therm_program_backup;
    
    /**
      * $therm_program_order 
      * @var \Swagger\Client\Model\NAThermProgram
      */
    protected $therm_program_order;
    
    /**
      * $therm_orientation 
      * @var int
      */
    protected $therm_orientation;
    
    /**
      * $therm_relay_cmd 
      * @var int
      */
    protected $therm_relay_cmd;
    
    /**
      * $battery_vp 
      * @var int
      */
    protected $battery_vp;
    
    /**
      * $rf_status 
      * @var int
      */
    protected $rf_status;
    
    /**
      * $plug_connected_boiler 
      * @var bool
      */
    protected $plug_connected_boiler;
    
    /**
      * $udp_conn 
      * @var bool
      */
    protected $udp_conn;
    
    /**
      * $last_therm_seen 
      * @var int
      */
    protected $last_therm_seen;
    
    /**
      * $last_plug_seen 
      * @var int
      */
    protected $last_plug_seen;
    
    /**
      * $wifi_status 
      * @var int
      */
    protected $wifi_status;
    
    /**
      * $measured 
      * @var \Swagger\Client\Model\NAThermMeasure
      */
    protected $measured;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->setpoint = $data["setpoint"];
            $this->setpoint_order = $data["setpoint_order"];
            $this->therm_program = $data["therm_program"];
            $this->therm_program_backup = $data["therm_program_backup"];
            $this->therm_program_order = $data["therm_program_order"];
            $this->therm_orientation = $data["therm_orientation"];
            $this->therm_relay_cmd = $data["therm_relay_cmd"];
            $this->battery_vp = $data["battery_vp"];
            $this->rf_status = $data["rf_status"];
            $this->plug_connected_boiler = $data["plug_connected_boiler"];
            $this->udp_conn = $data["udp_conn"];
            $this->last_therm_seen = $data["last_therm_seen"];
            $this->last_plug_seen = $data["last_plug_seen"];
            $this->wifi_status = $data["wifi_status"];
            $this->measured = $data["measured"];
        }
    }
    
    /**
     * Gets setpoint
     * @return \Swagger\Client\Model\NASetpoint
     */
    public function getSetpoint()
    {
        return $this->setpoint;
    }
  
    /**
     * Sets setpoint
     * @param \Swagger\Client\Model\NASetpoint $setpoint 
     * @return $this
     */
    public function setSetpoint($setpoint)
    {
        
        $this->setpoint = $setpoint;
        return $this;
    }
    
    /**
     * Gets setpoint_order
     * @return \Swagger\Client\Model\NASetpoint
     */
    public function getSetpointOrder()
    {
        return $this->setpoint_order;
    }
  
    /**
     * Sets setpoint_order
     * @param \Swagger\Client\Model\NASetpoint $setpoint_order 
     * @return $this
     */
    public function setSetpointOrder($setpoint_order)
    {
        
        $this->setpoint_order = $setpoint_order;
        return $this;
    }
    
    /**
     * Gets therm_program
     * @return \Swagger\Client\Model\NAThermProgram
     */
    public function getThermProgram()
    {
        return $this->therm_program;
    }
  
    /**
     * Sets therm_program
     * @param \Swagger\Client\Model\NAThermProgram $therm_program 
     * @return $this
     */
    public function setThermProgram($therm_program)
    {
        
        $this->therm_program = $therm_program;
        return $this;
    }
    
    /**
     * Gets therm_program_backup
     * @return \Swagger\Client\Model\NAThermProgram[]
     */
    public function getThermProgramBackup()
    {
        return $this->therm_program_backup;
    }
  
    /**
     * Sets therm_program_backup
     * @param \Swagger\Client\Model\NAThermProgram[] $therm_program_backup 
     * @return $this
     */
    public function setThermProgramBackup($therm_program_backup)
    {
        
        $this->therm_program_backup = $therm_program_backup;
        return $this;
    }
    
    /**
     * Gets therm_program_order
     * @return \Swagger\Client\Model\NAThermProgram
     */
    public function getThermProgramOrder()
    {
        return $this->therm_program_order;
    }
  
    /**
     * Sets therm_program_order
     * @param \Swagger\Client\Model\NAThermProgram $therm_program_order 
     * @return $this
     */
    public function setThermProgramOrder($therm_program_order)
    {
        
        $this->therm_program_order = $therm_program_order;
        return $this;
    }
    
    /**
     * Gets therm_orientation
     * @return int
     */
    public function getThermOrientation()
    {
        return $this->therm_orientation;
    }
  
    /**
     * Sets therm_orientation
     * @param int $therm_orientation 
     * @return $this
     */
    public function setThermOrientation($therm_orientation)
    {
        
        $this->therm_orientation = $therm_orientation;
        return $this;
    }
    
    /**
     * Gets therm_relay_cmd
     * @return int
     */
    public function getThermRelayCmd()
    {
        return $this->therm_relay_cmd;
    }
  
    /**
     * Sets therm_relay_cmd
     * @param int $therm_relay_cmd 
     * @return $this
     */
    public function setThermRelayCmd($therm_relay_cmd)
    {
        
        $this->therm_relay_cmd = $therm_relay_cmd;
        return $this;
    }
    
    /**
     * Gets battery_vp
     * @return int
     */
    public function getBatteryVp()
    {
        return $this->battery_vp;
    }
  
    /**
     * Sets battery_vp
     * @param int $battery_vp 
     * @return $this
     */
    public function setBatteryVp($battery_vp)
    {
        
        $this->battery_vp = $battery_vp;
        return $this;
    }
    
    /**
     * Gets rf_status
     * @return int
     */
    public function getRfStatus()
    {
        return $this->rf_status;
    }
  
    /**
     * Sets rf_status
     * @param int $rf_status 
     * @return $this
     */
    public function setRfStatus($rf_status)
    {
        
        $this->rf_status = $rf_status;
        return $this;
    }
    
    /**
     * Gets plug_connected_boiler
     * @return bool
     */
    public function getPlugConnectedBoiler()
    {
        return $this->plug_connected_boiler;
    }
  
    /**
     * Sets plug_connected_boiler
     * @param bool $plug_connected_boiler 
     * @return $this
     */
    public function setPlugConnectedBoiler($plug_connected_boiler)
    {
        
        $this->plug_connected_boiler = $plug_connected_boiler;
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
     * Gets last_therm_seen
     * @return int
     */
    public function getLastThermSeen()
    {
        return $this->last_therm_seen;
    }
  
    /**
     * Sets last_therm_seen
     * @param int $last_therm_seen 
     * @return $this
     */
    public function setLastThermSeen($last_therm_seen)
    {
        
        $this->last_therm_seen = $last_therm_seen;
        return $this;
    }
    
    /**
     * Gets last_plug_seen
     * @return int
     */
    public function getLastPlugSeen()
    {
        return $this->last_plug_seen;
    }
  
    /**
     * Sets last_plug_seen
     * @param int $last_plug_seen 
     * @return $this
     */
    public function setLastPlugSeen($last_plug_seen)
    {
        
        $this->last_plug_seen = $last_plug_seen;
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
     * @param int $wifi_status 
     * @return $this
     */
    public function setWifiStatus($wifi_status)
    {
        
        $this->wifi_status = $wifi_status;
        return $this;
    }
    
    /**
     * Gets measured
     * @return \Swagger\Client\Model\NAThermMeasure
     */
    public function getMeasured()
    {
        return $this->measured;
    }
  
    /**
     * Sets measured
     * @param \Swagger\Client\Model\NAThermMeasure $measured 
     * @return $this
     */
    public function setMeasured($measured)
    {
        
        $this->measured = $measured;
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
