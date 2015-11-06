<?php
/**
 * AccessToken
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
 * AccessToken Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccessToken implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'access_token' => 'string',
        'refresh_token' => 'string',
        'expire_in' => 'int',
        'expires_in' => 'int',
        'scope' => 'string[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'access_token' => 'access_token',
        'refresh_token' => 'refresh_token',
        'expire_in' => 'expire_in',
        'expires_in' => 'expires_in',
        'scope' => 'scope'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'access_token' => 'setAccessToken',
        'refresh_token' => 'setRefreshToken',
        'expire_in' => 'setExpireIn',
        'expires_in' => 'setExpiresIn',
        'scope' => 'setScope'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'access_token' => 'getAccessToken',
        'refresh_token' => 'getRefreshToken',
        'expire_in' => 'getExpireIn',
        'expires_in' => 'getExpiresIn',
        'scope' => 'getScope'
    );
  
    
    /**
      * $access_token 
      * @var string
      */
    protected $access_token;
    
    /**
      * $refresh_token 
      * @var string
      */
    protected $refresh_token;
    
    /**
      * $expire_in 
      * @var int
      */
    protected $expire_in;
    
    /**
      * $expires_in 
      * @var int
      */
    protected $expires_in;
    
    /**
      * $scope 
      * @var string[]
      */
    protected $scope;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->access_token = $data["access_token"];
            $this->refresh_token = $data["refresh_token"];
            $this->expire_in = $data["expire_in"];
            $this->expires_in = $data["expires_in"];
            $this->scope = $data["scope"];
        }
    }
    
    /**
     * Gets access_token
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }
  
    /**
     * Sets access_token
     * @param string $access_token 
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        
        $this->access_token = $access_token;
        return $this;
    }
    
    /**
     * Gets refresh_token
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refresh_token;
    }
  
    /**
     * Sets refresh_token
     * @param string $refresh_token 
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {
        
        $this->refresh_token = $refresh_token;
        return $this;
    }
    
    /**
     * Gets expire_in
     * @return int
     */
    public function getExpireIn()
    {
        return $this->expire_in;
    }
  
    /**
     * Sets expire_in
     * @param int $expire_in 
     * @return $this
     */
    public function setExpireIn($expire_in)
    {
        
        $this->expire_in = $expire_in;
        return $this;
    }
    
    /**
     * Gets expires_in
     * @return int
     */
    public function getExpiresIn()
    {
        return $this->expires_in;
    }
  
    /**
     * Sets expires_in
     * @param int $expires_in 
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        
        $this->expires_in = $expires_in;
        return $this;
    }
    
    /**
     * Gets scope
     * @return string[]
     */
    public function getScope()
    {
        return $this->scope;
    }
  
    /**
     * Sets scope
     * @param string[] $scope 
     * @return $this
     */
    public function setScope($scope)
    {
        
        $this->scope = $scope;
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
