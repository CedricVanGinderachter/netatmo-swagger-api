# coding: utf-8

"""
PublicApi.py
Copyright 2015 SmartBear Software

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
"""

from __future__ import absolute_import

import sys
import os

# python 2 and python 3 compatibility library
from six import iteritems

from ..configuration import Configuration
from ..api_client import ApiClient


class PublicApi(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    Ref: https://github.com/swagger-api/swagger-codegen
    """

    def __init__(self, api_client=None):
        config = Configuration()
        if api_client:
            self.api_client = api_client
        else:
            if not config.api_client:
                config.api_client = ApiClient()
            self.api_client = config.api_client

    def getmeasure(self, access_token, device_id, scale, type, **kwargs):
        """
        
        The method getmeasure returns the measurements of a device or a module.

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.getmeasure(access_token, device_id, scale, type, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str access_token: Your access token (required)
        :param str device_id: Id of the device whose module's measurements you want to retrieve. This _id can be found in the user's devices field. (required)
        :param str scale: Defines the time interval between two measurements.\nPossible values :\nmax -> every value stored will be returned\n30min -> 1 value every 30 minutes\n1hour -> 1 value every hour\n3hours -> 1 value every 3 hours\n1day -> 1 value per day\n1week -> 1 value per week\n1month -> 1 value per month (required)
        :param list[str] type: Sets the type of measurement you want to retrieve.\nThe different types of measurements must be given in a comma separated list of strings.\nExample: type=\"Temperature,Humidity\"\nDepending on the device's type and the scale, different measurements are available:\nFor Weather Station :\n\n  max -> Temperature, CO2, Humidity, Pressure, Noise, Rain (if\nmodule_id is a rain sensor)\n\n  30min, 1hour, 3hours -> Temperature, CO2, Humidity, Pressure,\nNoise, min_temp, max_temp, min_hum, max_hum, min_pressure, max_pressure, min_noise, max_noise, sum_rain (if module_id is a rain sensor)\n\n  1day, 1week, 1month -> Temperature, Co2, Humidity, Pressure, Noise,\nmin_temp, date_min_temp, max_temp, date_max_temp, min_hum, date_min_hum, max_hum, date_max_hum, min_pressure, date_min_pressure, max_pressure, date_max_pressure, min_noise, date_min_noise, max_noise, date_max_noise, date_min_co2, date_max_co2, sum_rain (if module_id is a rain sensor)\nPlease note, the measurements sent in the response will be in the same order as in this list.\nAll measurements are expressed in metric units:\n\n  Temperature: Celsius\n\n  Humidity: %\n\n  Co2: ppm\n\n  Pressure: mbar\n\n  Noise: db\n\n  Rain: mm\n\nFor Thermostat:\n\n  max -> Temperature, Sp_Temperature, BoilerOn, BoilerOff\n\n  30min, 1hour, 3hours -> Temperature, Sp_Temperature, min_temp,\nmax_temp, sum_boiler_on, sum_boiler_off\n\n  1day, 1week, 1month -> Temperature, min_temp, date_min_temp,\nmax_temp, sum_boiler_on, sum_boiler_off\n\n  where\n\nTemperature: Celsius\n\n  Sp_Temperature (temperature setpoint): Celsius\n\n  BoilerOn: Duration, since the previous data point, during which the\nboiler has been on (in seconds)\n\n  BoilerOff : Duration, since the previous data point, during which\nthe boiler has been off (in seconds).\n\n  sum_boiler_on: Total duration during which the boiler has been on,\nat a specific scale (in seconds).\n\n  sum_boiler_off: Total duration during which the boiler has been\noff, at a specific scale (in seconds). (required)
        :param str module_id: If you don't specify any module_id you will retrieve the device's measurements. If you specify a module_id you will retrieve the module's measurements.
        :param int date_begin: Starting timestamp (utc) of the requested measurements.\nPlease note measurement retrieving is limited to 1024 measurements.
        :param int date_end: Ending timestamp (utc) of the request measurements.\nIf you want only the last measurement, do not provide date_begin, and set date_end to \"last\".
        :param int limit: Limits the number of measurements returned (default & max is 1024)
        :param bool optimize: Allows you to choose the format of the answer.\nIf you build a mobile app and bandwith usage is an issue, use optimize = true.\nUse optimize = false, for an easier parse. In this case, values are indexed by sorted timestamp.\nExample of un-optimized response :\n{\"status\": \"ok\", \n  \"body\": {\n    \"1347575400\": [18.3,39],\n    \"1347586200\": [20.6,48]\n  },\n\"time_exec\": 0.012136936187744}\nIf optimize is set true, measurements are returned as an array of series of regularly spaced measurements. Each series is defined by a beginning time beg_time and a step between measurements, step_time:\n{\"status\": \"ok\",\n  \"body\": [\n    {\"beg_time\": 1347575400,\n     \"step_time\": 10800,\n     \"value\": \n        [[18.3,39],\n        [ 20.6,48]]\n    }],\n\"time_exec\": 0.014238119125366}\nDefault value is true.
        :param bool real_time: In scales higher than max, since the data is aggregated, the timestamps returned are by default offset by +(scale/2).\nFor instance, if you ask for measurements at a daily scale, you will receive data timestamped at 12:00 if real_time is set to false (default case), and timestamped at 00:00 if real_time is set to true.\nNB : The servers always store data with real_time set to true and data are offset by this parameter AFTER having being time-filtered, thus you could have data after date_end if real_time is set to false.
        :return: NAMeasureResponse
                 If the method is called asynchronously,
                 returns the request thread.
        """
        # verify the required parameter 'access_token' is set
        if access_token is None:
            raise ValueError("Missing the required parameter `access_token` when calling `getmeasure`")
        # verify the required parameter 'device_id' is set
        if device_id is None:
            raise ValueError("Missing the required parameter `device_id` when calling `getmeasure`")
        # verify the required parameter 'scale' is set
        if scale is None:
            raise ValueError("Missing the required parameter `scale` when calling `getmeasure`")
        # verify the required parameter 'type' is set
        if type is None:
            raise ValueError("Missing the required parameter `type` when calling `getmeasure`")

        all_params = ['access_token', 'device_id', 'scale', 'type', 'module_id', 'date_begin', 'date_end', 'limit', 'optimize', 'real_time']
        all_params.append('callback')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method getmeasure" % key
                )
            params[key] = val
        del params['kwargs']

        resource_path = '/api/getmeasure'.replace('{format}', 'json')
        method = 'GET'

        path_params = {}

        query_params = {}
        if 'access_token' in params:
            query_params['access_token'] = params['access_token']
        if 'device_id' in params:
            query_params['device_id'] = params['device_id']
        if 'module_id' in params:
            query_params['module_id'] = params['module_id']
        if 'scale' in params:
            query_params['scale'] = params['scale']
        if 'type' in params:
            query_params['type'] = params['type']
        if 'date_begin' in params:
            query_params['date_begin'] = params['date_begin']
        if 'date_end' in params:
            query_params['date_end'] = params['date_end']
        if 'limit' in params:
            query_params['limit'] = params['limit']
        if 'optimize' in params:
            query_params['optimize'] = params['optimize']
        if 'real_time' in params:
            query_params['real_time'] = params['real_time']

        header_params = {}

        form_params = {}
        files = {}

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept([])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type([])

        # Authentication setting
        auth_settings = []

        response = self.api_client.call_api(resource_path, method,
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=files,
                                            response_type='NAMeasureResponse',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'))
        return response
