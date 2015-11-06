# coding: utf-8

"""
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

    Ref: https://github.com/swagger-api/swagger-codegen
"""

from pprint import pformat
from six import iteritems


class NAMeasureResponse(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self):
        """
        NAMeasureResponse - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'time_server': 'int',
            'time_exec': 'float',
            'body': 'list[NAMeasureBodyElem]',
            'status': 'str'
        }

        self.attribute_map = {
            'time_server': 'time_server',
            'time_exec': 'time_exec',
            'body': 'body',
            'status': 'status'
        }

        self._time_server = None
        self._time_exec = None
        self._body = None
        self._status = None

    @property
    def time_server(self):
        """
        Gets the time_server of this NAMeasureResponse.


        :return: The time_server of this NAMeasureResponse.
        :rtype: int
        """
        return self._time_server

    @time_server.setter
    def time_server(self, time_server):
        """
        Sets the time_server of this NAMeasureResponse.


        :param time_server: The time_server of this NAMeasureResponse.
        :type: int
        """
        self._time_server = time_server

    @property
    def time_exec(self):
        """
        Gets the time_exec of this NAMeasureResponse.


        :return: The time_exec of this NAMeasureResponse.
        :rtype: float
        """
        return self._time_exec

    @time_exec.setter
    def time_exec(self, time_exec):
        """
        Sets the time_exec of this NAMeasureResponse.


        :param time_exec: The time_exec of this NAMeasureResponse.
        :type: float
        """
        self._time_exec = time_exec

    @property
    def body(self):
        """
        Gets the body of this NAMeasureResponse.


        :return: The body of this NAMeasureResponse.
        :rtype: list[NAMeasureBodyElem]
        """
        return self._body

    @body.setter
    def body(self, body):
        """
        Sets the body of this NAMeasureResponse.


        :param body: The body of this NAMeasureResponse.
        :type: list[NAMeasureBodyElem]
        """
        self._body = body

    @property
    def status(self):
        """
        Gets the status of this NAMeasureResponse.


        :return: The status of this NAMeasureResponse.
        :rtype: str
        """
        return self._status

    @status.setter
    def status(self, status):
        """
        Sets the status of this NAMeasureResponse.


        :param status: The status of this NAMeasureResponse.
        :type: str
        """
        self._status = status

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()
