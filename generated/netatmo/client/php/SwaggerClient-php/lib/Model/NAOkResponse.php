<?php
/**
 * NAOkResponse
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
 * NAOkResponse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NAOkResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'time_server' => 'int',
        'time_exec' => 'double',
        'body' => 'string',
        'status' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'time_server' => 'time_server',
        'time_exec' => 'time_exec',
        'body' => 'body',
        'status' => 'status'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'time_server' => 'setTimeServer',
        'time_exec' => 'setTimeExec',
        'body' => 'setBody',
        'status' => 'setStatus'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'time_server' => 'getTimeServer',
        'time_exec' => 'getTimeExec',
        'body' => 'getBody',
        'status' => 'getStatus'
    );
  
    
    /**
      * $time_server 
      * @var int
      */
    protected $time_server;
    
    /**
      * $time_exec 
      * @var double
      */
    protected $time_exec;
    
    /**
      * $body 
      * @var string
      */
    protected $body;
    
    /**
      * $status 
      * @var string
      */
    protected $status;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->time_server = $data["time_server"];
            $this->time_exec = $data["time_exec"];
            $this->body = $data["body"];
            $this->status = $data["status"];
        }
    }
    
    /**
     * Gets time_server
     * @return int
     */
    public function getTimeServer()
    {
        return $this->time_server;
    }
  
    /**
     * Sets time_server
     * @param int $time_server 
     * @return $this
     */
    public function setTimeServer($time_server)
    {
        
        $this->time_server = $time_server;
        return $this;
    }
    
    /**
     * Gets time_exec
     * @return double
     */
    public function getTimeExec()
    {
        return $this->time_exec;
    }
  
    /**
     * Sets time_exec
     * @param double $time_exec 
     * @return $this
     */
    public function setTimeExec($time_exec)
    {
        
        $this->time_exec = $time_exec;
        return $this;
    }
    
    /**
     * Gets body
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }
  
    /**
     * Sets body
     * @param string $body 
     * @return $this
     */
    public function setBody($body)
    {
        
        $this->body = $body;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status 
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
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
