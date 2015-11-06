<?php
/**
 * PrivateApi
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

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * PrivateApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrivateApi
{

    /**
     * API Client
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.netatmo.net/api');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     * @return PrivateApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }
  
    
    /**
     * createnewschedule
     *
     * 
     *
     * @param string $device_id The relay id (required)
     * @param string $module_id The thermostat id (required)
     * @param \Swagger\Client\Model\NAThermProgram $therm_program The thermostat program (zones and timetable) (required)
     * @return \Swagger\Client\Model\NANewScheduleResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createnewschedule($device_id, $module_id, $therm_program)
    {
        
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling createnewschedule');
        }
        // verify the required parameter 'module_id' is set
        if ($module_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $module_id when calling createnewschedule');
        }
        // verify the required parameter 'therm_program' is set
        if ($therm_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $therm_program when calling createnewschedule');
        }
  
        // parse inputs
        $resourcePath = "/createnewschedule";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($device_id !== null) {
            $queryParams['device_id'] = $this->apiClient->getSerializer()->toQueryValue($device_id);
        }// query params
        if ($module_id !== null) {
            $queryParams['module_id'] = $this->apiClient->getSerializer()->toQueryValue($module_id);
        }
        
        
        
        // body params
        $_tempBody = null;
        if (isset($therm_program)) {
            $_tempBody = $therm_program;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        
        //TODO support oauth
        
        
        //TODO support oauth
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\NANewScheduleResponse'
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\NANewScheduleResponse', $httpHeader);
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        if (!$response) {
            return null;
        }
  
        return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\NANewScheduleResponse');
        
    }
    
    /**
     * devicelist
     *
     * 
     *
     * @param string $app_type Defines which device type will be returned by devicelist. It could be app_thermostat or app_station (by default if not provided) (optional)
     * @param string $device_id Specify a device_id if you want to retrieve only this device informations. (optional)
     * @param bool $get_favorites When set to \&quot;true\&quot;, the favorite devices of the user are returned. This flag is available only if the devices requested are Weather Stations. (optional)
     * @return \Swagger\Client\Model\NADeviceListResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function devicelist($app_type=null, $device_id=null, $get_favorites=null)
    {
        
  
        // parse inputs
        $resourcePath = "/devicelist";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($app_type !== null) {
            $queryParams['app_type'] = $this->apiClient->getSerializer()->toQueryValue($app_type);
        }// query params
        if ($device_id !== null) {
            $queryParams['device_id'] = $this->apiClient->getSerializer()->toQueryValue($device_id);
        }// query params
        if ($get_favorites !== null) {
            $queryParams['get_favorites'] = $this->apiClient->getSerializer()->toQueryValue($get_favorites);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        
        //TODO support oauth
        
        
        //TODO support oauth
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\NADeviceListResponse'
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\NADeviceListResponse', $httpHeader);
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        if (!$response) {
            return null;
        }
  
        return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\NADeviceListResponse');
        
    }
    
    /**
     * getmeasure
     *
     * 
     *
     * @param string $device_id Id of the device whose module&#39;s measurements you want to retrieve. This _id can be found in the user&#39;s devices field. (required)
     * @param string $scale Defines the time interval between two measurements.\nPossible values :\nmax -&gt; every value stored will be returned\n30min -&gt; 1 value every 30 minutes\n1hour -&gt; 1 value every hour\n3hours -&gt; 1 value every 3 hours\n1day -&gt; 1 value per day\n1week -&gt; 1 value per week\n1month -&gt; 1 value per month (required)
     * @param string $type Sets the type of measurement you want to retrieve.\nThe different types of measurements must be given in a comma separated list of strings.\nExample: type=\&quot;Temperature,Humidity\&quot;\nDepending on the device&#39;s type and the scale, different measurements are available:\nFor Weather Station :\n  max -&gt; Temperature, CO2, Humidity, Pressure, Noise, Rain (if module_id is a rain sensor)\n  30min, 1hour, 3hours -&gt; Temperature, CO2, Humidity, Pressure, Noise, min_temp, max_temp, min_hum, max_hum, min_pressure, max_pressure, min_noise, max_noise, sum_rain (if module_id is a rain sensor)\n  1day, 1week, 1month -&gt; Temperature, Co2, Humidity, Pressure, Noise, min_temp, date_min_temp, max_temp, date_max_temp, min_hum, date_min_hum, max_hum, date_max_hum, min_pressure, date_min_pressure, max_pressure, date_max_pressure, min_noise, date_min_noise, max_noise, date_max_noise, date_min_co2, date_max_co2, sum_rain (if module_id is a rain sensor)\nPlease note, the measurements sent in the response will be in the same order as in this list.\nAll measurements are expressed in metric units:\n  Temperature: Celsius\n  Humidity: %\n  Co2: ppm\n  Pressure: mbar\n  Noise: db\n  Rain: mm\nFor Thermostat:\n  max -&gt; Temperature, Sp_Temperature, BoilerOn, BoilerOff\n  30min, 1hour, 3hours -&gt; Temperature, Sp_Temperature, min_temp, max_temp, sum_boiler_on, sum_boiler_off\n  1day, 1week, 1month -&gt; Temperature, min_temp, date_min_temp, max_temp, sum_boiler_on, sum_boiler_off\n  where\nTemperature: Celsius\n  Sp_Temperature (temperature setpoint): Celsius\n  BoilerOn: Duration, since the previous data point, during which the boiler has been on (in seconds)\n  BoilerOff : Duration, since the previous data point, during which the boiler has been off (in seconds).\n  sum_boiler_on: Total duration during which the boiler has been on, at a specific scale (in seconds).\n  sum_boiler_off: Total duration during which the boiler has been off, at a specific scale (in seconds). (required)
     * @param string $module_id If you don&#39;t specify any module_id you will retrieve the device&#39;s measurements. If you specify a module_id you will retrieve the module&#39;s measurements. (optional)
     * @param int $date_begin Starting timestamp (utc) of the requested measurements.\nPlease note measurement retrieving is limited to 1024 measurements. (optional)
     * @param int $date_end Ending timestamp (utc) of the request measurements.\nIf you want only the last measurement, do not provide date_begin, and set date_end to \&quot;last\&quot;. (optional)
     * @param int $limit Limits the number of measurements returned (default &amp; max is 1024) (optional)
     * @param bool $optimize Allows you to choose the format of the answer.\nIf you build a mobile app and bandwith usage is an issue, use optimize = true.\nUse optimize = false, for an easier parse. In this case, values are indexed by sorted timestamp.\nExample of un-optimized response :\n{\&quot;status\&quot;: \&quot;ok\&quot;, \n  \&quot;body\&quot;: {\n    \&quot;1347575400\&quot;: [18.3,39],\n    \&quot;1347586200\&quot;: [20.6,48]\n  },\n\&quot;time_exec\&quot;: 0.012136936187744}\nIf optimize is set true, measurements are returned as an array of series of regularly spaced measurements. Each series is defined by a beginning time beg_time and a step between measurements, step_time:\n{\&quot;status\&quot;: \&quot;ok\&quot;,\n  \&quot;body\&quot;: [\n    {\&quot;beg_time\&quot;: 1347575400,\n     \&quot;step_time\&quot;: 10800,\n     \&quot;value\&quot;: \n        [[18.3,39],\n        [ 20.6,48]]\n    }],\n\&quot;time_exec\&quot;: 0.014238119125366}\nDefault value is true. (optional)
     * @param bool $real_time In scales higher than max, since the data is aggregated, the timestamps returned are by default offset by +(scale/2).\nFor instance, if you ask for measurements at a daily scale, you will receive data timestamped at 12:00 if real_time is set to false (default case), and timestamped at 00:00 if real_time is set to true.\nNB : The servers always store data with real_time set to true and data are offset by this parameter AFTER having being time-filtered, thus you could have data after date_end if real_time is set to false. (optional)
     * @return \Swagger\Client\Model\NAMeasureResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getmeasure($device_id, $scale, $type, $module_id=null, $date_begin=null, $date_end=null, $limit=null, $optimize=null, $real_time=null)
    {
        
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling getmeasure');
        }
        // verify the required parameter 'scale' is set
        if ($scale === null) {
            throw new \InvalidArgumentException('Missing the required parameter $scale when calling getmeasure');
        }
        // verify the required parameter 'type' is set
        if ($type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling getmeasure');
        }
  
        // parse inputs
        $resourcePath = "/getmeasure";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($device_id !== null) {
            $queryParams['device_id'] = $this->apiClient->getSerializer()->toQueryValue($device_id);
        }// query params
        if ($module_id !== null) {
            $queryParams['module_id'] = $this->apiClient->getSerializer()->toQueryValue($module_id);
        }// query params
        if ($scale !== null) {
            $queryParams['scale'] = $this->apiClient->getSerializer()->toQueryValue($scale);
        }// query params
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }// query params
        if ($date_begin !== null) {
            $queryParams['date_begin'] = $this->apiClient->getSerializer()->toQueryValue($date_begin);
        }// query params
        if ($date_end !== null) {
            $queryParams['date_end'] = $this->apiClient->getSerializer()->toQueryValue($date_end);
        }// query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }// query params
        if ($optimize !== null) {
            $queryParams['optimize'] = $this->apiClient->getSerializer()->toQueryValue($optimize);
        }// query params
        if ($real_time !== null) {
            $queryParams['real_time'] = $this->apiClient->getSerializer()->toQueryValue($real_time);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        
        //TODO support oauth
        
        
        //TODO support oauth
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\NAMeasureResponse'
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\NAMeasureResponse', $httpHeader);
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        if (!$response) {
            return null;
        }
  
        return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\NAMeasureResponse');
        
    }
    
    /**
     * getthermstate
     *
     * 
     *
     * @param string $device_id The relay id (required)
     * @param string $module_id The thermostat id (required)
     * @return \Swagger\Client\Model\NAThermStateResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getthermstate($device_id, $module_id)
    {
        
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling getthermstate');
        }
        // verify the required parameter 'module_id' is set
        if ($module_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $module_id when calling getthermstate');
        }
  
        // parse inputs
        $resourcePath = "/getthermstate";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($device_id !== null) {
            $queryParams['device_id'] = $this->apiClient->getSerializer()->toQueryValue($device_id);
        }// query params
        if ($module_id !== null) {
            $queryParams['module_id'] = $this->apiClient->getSerializer()->toQueryValue($module_id);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        
        //TODO support oauth
        
        
        //TODO support oauth
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\NAThermStateResponse'
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\NAThermStateResponse', $httpHeader);
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        if (!$response) {
            return null;
        }
  
        return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\NAThermStateResponse');
        
    }
    
    /**
     * getuser
     *
     * 
     *
     * @return \Swagger\Client\Model\NAUserResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getuser()
    {
        
  
        // parse inputs
        $resourcePath = "/getuser";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "GET";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        
        //TODO support oauth
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\NAUserResponse'
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\NAUserResponse', $httpHeader);
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        if (!$response) {
            return null;
        }
  
        return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\NAUserResponse');
        
    }
    
    /**
     * setthermpoint
     *
     * 
     *
     * @param string $device_id The relay id (required)
     * @param string $module_id The thermostat id (required)
     * @param string $setpoint_mode Chosen setpoint_mode (required)
     * @param int $setpoint_endtime When using the manual or max setpoint_mode, this parameter defines when the setpoint expires. (optional)
     * @param float $setpoint_temp When using the manual setpoint_mode, this parameter defines the temperature setpoint (in Celcius) to use. (optional)
     * @return \Swagger\Client\Model\NAOkResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function setthermpoint($device_id, $module_id, $setpoint_mode, $setpoint_endtime=null, $setpoint_temp=null)
    {
        
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling setthermpoint');
        }
        // verify the required parameter 'module_id' is set
        if ($module_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $module_id when calling setthermpoint');
        }
        // verify the required parameter 'setpoint_mode' is set
        if ($setpoint_mode === null) {
            throw new \InvalidArgumentException('Missing the required parameter $setpoint_mode when calling setthermpoint');
        }
  
        // parse inputs
        $resourcePath = "/setthermpoint";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($device_id !== null) {
            $queryParams['device_id'] = $this->apiClient->getSerializer()->toQueryValue($device_id);
        }// query params
        if ($module_id !== null) {
            $queryParams['module_id'] = $this->apiClient->getSerializer()->toQueryValue($module_id);
        }// query params
        if ($setpoint_mode !== null) {
            $queryParams['setpoint_mode'] = $this->apiClient->getSerializer()->toQueryValue($setpoint_mode);
        }// query params
        if ($setpoint_endtime !== null) {
            $queryParams['setpoint_endtime'] = $this->apiClient->getSerializer()->toQueryValue($setpoint_endtime);
        }// query params
        if ($setpoint_temp !== null) {
            $queryParams['setpoint_temp'] = $this->apiClient->getSerializer()->toQueryValue($setpoint_temp);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        
        //TODO support oauth
        
        
        //TODO support oauth
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\NAOkResponse'
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\NAOkResponse', $httpHeader);
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        if (!$response) {
            return null;
        }
  
        return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\NAOkResponse');
        
    }
    
    /**
     * switchschedule
     *
     * 
     *
     * @param string $device_id The relay id (required)
     * @param string $module_id The thermostat id (required)
     * @param string $schedule_id The schedule id. It can be found in the getthermstate response, under the keys \&quot;therm_program_backup\&quot; and \&quot;therm_program\&quot;. (required)
     * @return \Swagger\Client\Model\NAOkResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function switchschedule($device_id, $module_id, $schedule_id)
    {
        
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling switchschedule');
        }
        // verify the required parameter 'module_id' is set
        if ($module_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $module_id when calling switchschedule');
        }
        // verify the required parameter 'schedule_id' is set
        if ($schedule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $schedule_id when calling switchschedule');
        }
  
        // parse inputs
        $resourcePath = "/switchschedule";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($device_id !== null) {
            $queryParams['device_id'] = $this->apiClient->getSerializer()->toQueryValue($device_id);
        }// query params
        if ($module_id !== null) {
            $queryParams['module_id'] = $this->apiClient->getSerializer()->toQueryValue($module_id);
        }// query params
        if ($schedule_id !== null) {
            $queryParams['schedule_id'] = $this->apiClient->getSerializer()->toQueryValue($schedule_id);
        }
        
        
        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        
        //TODO support oauth
        
        
        //TODO support oauth
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\NAOkResponse'
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\NAOkResponse', $httpHeader);
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        if (!$response) {
            return null;
        }
  
        return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\NAOkResponse');
        
    }
    
    /**
     * syncschedule
     *
     * 
     *
     * @param string $device_id The relay id (required)
     * @param string $module_id The thermostat id (required)
     * @param \Swagger\Client\Model\NAThermProgram $therm_program The thermostat program (zones, timetable and name) (required)
     * @return \Swagger\Client\Model\NAOkResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function syncschedule($device_id, $module_id, $therm_program)
    {
        
        // verify the required parameter 'device_id' is set
        if ($device_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $device_id when calling syncschedule');
        }
        // verify the required parameter 'module_id' is set
        if ($module_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $module_id when calling syncschedule');
        }
        // verify the required parameter 'therm_program' is set
        if ($therm_program === null) {
            throw new \InvalidArgumentException('Missing the required parameter $therm_program when calling syncschedule');
        }
  
        // parse inputs
        $resourcePath = "/syncschedule";
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        $method = "POST";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array());
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        // query params
        if ($device_id !== null) {
            $queryParams['device_id'] = $this->apiClient->getSerializer()->toQueryValue($device_id);
        }// query params
        if ($module_id !== null) {
            $queryParams['module_id'] = $this->apiClient->getSerializer()->toQueryValue($module_id);
        }
        
        
        
        // body params
        $_tempBody = null;
        if (isset($therm_program)) {
            $_tempBody = $therm_program;
        }
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } else if (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        
        //TODO support oauth
        
        
        //TODO support oauth
        
        // make the API Call
        try
        {
            list($response, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, $method,
                $queryParams, $httpBody,
                $headerParams, '\Swagger\Client\Model\NAOkResponse'
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\NAOkResponse', $httpHeader);
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
        
        if (!$response) {
            return null;
        }
  
        return $this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\NAOkResponse');
        
    }
    
}
