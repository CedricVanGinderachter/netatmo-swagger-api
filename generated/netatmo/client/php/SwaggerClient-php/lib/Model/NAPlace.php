<?php
/**
 * NAPlace
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
 * NAPlace Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NAPlace implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'city' => 'string',
        'altitude' => 'float',
        'country' => 'string',
        'from_ip' => 'bool',
        'improve_loc_proposed' => 'bool',
        'location' => 'double[]',
        'timezone' => 'string',
        'trust_location' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'city' => 'city',
        'altitude' => 'altitude',
        'country' => 'country',
        'from_ip' => 'from_ip',
        'improve_loc_proposed' => 'improveLocProposed',
        'location' => 'location',
        'timezone' => 'timezone',
        'trust_location' => 'trust_location'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'city' => 'setCity',
        'altitude' => 'setAltitude',
        'country' => 'setCountry',
        'from_ip' => 'setFromIp',
        'improve_loc_proposed' => 'setImproveLocProposed',
        'location' => 'setLocation',
        'timezone' => 'setTimezone',
        'trust_location' => 'setTrustLocation'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'city' => 'getCity',
        'altitude' => 'getAltitude',
        'country' => 'getCountry',
        'from_ip' => 'getFromIp',
        'improve_loc_proposed' => 'getImproveLocProposed',
        'location' => 'getLocation',
        'timezone' => 'getTimezone',
        'trust_location' => 'getTrustLocation'
    );
  
    
    /**
      * $city 
      * @var string
      */
    protected $city;
    
    /**
      * $altitude 
      * @var float
      */
    protected $altitude;
    
    /**
      * $country 
      * @var string
      */
    protected $country;
    
    /**
      * $from_ip 
      * @var bool
      */
    protected $from_ip;
    
    /**
      * $improve_loc_proposed 
      * @var bool
      */
    protected $improve_loc_proposed;
    
    /**
      * $location 
      * @var double[]
      */
    protected $location;
    
    /**
      * $timezone 
      * @var string
      */
    protected $timezone;
    
    /**
      * $trust_location 
      * @var bool
      */
    protected $trust_location;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->city = $data["city"];
            $this->altitude = $data["altitude"];
            $this->country = $data["country"];
            $this->from_ip = $data["from_ip"];
            $this->improve_loc_proposed = $data["improve_loc_proposed"];
            $this->location = $data["location"];
            $this->timezone = $data["timezone"];
            $this->trust_location = $data["trust_location"];
        }
    }
    
    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
  
    /**
     * Sets city
     * @param string $city 
     * @return $this
     */
    public function setCity($city)
    {
        
        $this->city = $city;
        return $this;
    }
    
    /**
     * Gets altitude
     * @return float
     */
    public function getAltitude()
    {
        return $this->altitude;
    }
  
    /**
     * Sets altitude
     * @param float $altitude 
     * @return $this
     */
    public function setAltitude($altitude)
    {
        
        $this->altitude = $altitude;
        return $this;
    }
    
    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
  
    /**
     * Sets country
     * @param string $country 
     * @return $this
     */
    public function setCountry($country)
    {
        
        $this->country = $country;
        return $this;
    }
    
    /**
     * Gets from_ip
     * @return bool
     */
    public function getFromIp()
    {
        return $this->from_ip;
    }
  
    /**
     * Sets from_ip
     * @param bool $from_ip 
     * @return $this
     */
    public function setFromIp($from_ip)
    {
        
        $this->from_ip = $from_ip;
        return $this;
    }
    
    /**
     * Gets improve_loc_proposed
     * @return bool
     */
    public function getImproveLocProposed()
    {
        return $this->improve_loc_proposed;
    }
  
    /**
     * Sets improve_loc_proposed
     * @param bool $improve_loc_proposed 
     * @return $this
     */
    public function setImproveLocProposed($improve_loc_proposed)
    {
        
        $this->improve_loc_proposed = $improve_loc_proposed;
        return $this;
    }
    
    /**
     * Gets location
     * @return double[]
     */
    public function getLocation()
    {
        return $this->location;
    }
  
    /**
     * Sets location
     * @param double[] $location 
     * @return $this
     */
    public function setLocation($location)
    {
        
        $this->location = $location;
        return $this;
    }
    
    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }
  
    /**
     * Sets timezone
     * @param string $timezone 
     * @return $this
     */
    public function setTimezone($timezone)
    {
        
        $this->timezone = $timezone;
        return $this;
    }
    
    /**
     * Gets trust_location
     * @return bool
     */
    public function getTrustLocation()
    {
        return $this->trust_location;
    }
  
    /**
     * Sets trust_location
     * @param bool $trust_location 
     * @return $this
     */
    public function setTrustLocation($trust_location)
    {
        
        $this->trust_location = $trust_location;
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
