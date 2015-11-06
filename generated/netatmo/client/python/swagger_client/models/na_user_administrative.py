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


class NAUserAdministrative(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self):
        """
        NAUserAdministrative - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'country': 'str',
            'lang': 'str',
            'reg_locale': 'str',
            'unit': 'str',
            'windunit': 'str',
            'pressureunit': 'str',
            'feel_like_algo': 'str'
        }

        self.attribute_map = {
            'country': 'country',
            'lang': 'lang',
            'reg_locale': 'reg_locale',
            'unit': 'unit',
            'windunit': 'windunit',
            'pressureunit': 'pressureunit',
            'feel_like_algo': 'feel_like_algo'
        }

        self._country = None
        self._lang = None
        self._reg_locale = None
        self._unit = None
        self._windunit = None
        self._pressureunit = None
        self._feel_like_algo = None

    @property
    def country(self):
        """
        Gets the country of this NAUserAdministrative.
        user country

        :return: The country of this NAUserAdministrative.
        :rtype: str
        """
        return self._country

    @country.setter
    def country(self, country):
        """
        Sets the country of this NAUserAdministrative.
        user country

        :param country: The country of this NAUserAdministrative.
        :type: str
        """
        self._country = country

    @property
    def lang(self):
        """
        Gets the lang of this NAUserAdministrative.
        user locale

        :return: The lang of this NAUserAdministrative.
        :rtype: str
        """
        return self._lang

    @lang.setter
    def lang(self, lang):
        """
        Sets the lang of this NAUserAdministrative.
        user locale

        :param lang: The lang of this NAUserAdministrative.
        :type: str
        """
        self._lang = lang

    @property
    def reg_locale(self):
        """
        Gets the reg_locale of this NAUserAdministrative.
        user regional preferences (used for displaying date)

        :return: The reg_locale of this NAUserAdministrative.
        :rtype: str
        """
        return self._reg_locale

    @reg_locale.setter
    def reg_locale(self, reg_locale):
        """
        Sets the reg_locale of this NAUserAdministrative.
        user regional preferences (used for displaying date)

        :param reg_locale: The reg_locale of this NAUserAdministrative.
        :type: str
        """
        self._reg_locale = reg_locale

    @property
    def unit(self):
        """
        Gets the unit of this NAUserAdministrative.
        0 -> metric system, 1 -> imperial system

        :return: The unit of this NAUserAdministrative.
        :rtype: str
        """
        return self._unit

    @unit.setter
    def unit(self, unit):
        """
        Sets the unit of this NAUserAdministrative.
        0 -> metric system, 1 -> imperial system

        :param unit: The unit of this NAUserAdministrative.
        :type: str
        """
        self._unit = unit

    @property
    def windunit(self):
        """
        Gets the windunit of this NAUserAdministrative.
        0 -> kph, 1 -> mph, 2 -> ms, 3 -> beaufort, 4 -> knot

        :return: The windunit of this NAUserAdministrative.
        :rtype: str
        """
        return self._windunit

    @windunit.setter
    def windunit(self, windunit):
        """
        Sets the windunit of this NAUserAdministrative.
        0 -> kph, 1 -> mph, 2 -> ms, 3 -> beaufort, 4 -> knot

        :param windunit: The windunit of this NAUserAdministrative.
        :type: str
        """
        self._windunit = windunit

    @property
    def pressureunit(self):
        """
        Gets the pressureunit of this NAUserAdministrative.
        0 -> mbar, 1 -> inHg, 2 -> mmHg

        :return: The pressureunit of this NAUserAdministrative.
        :rtype: str
        """
        return self._pressureunit

    @pressureunit.setter
    def pressureunit(self, pressureunit):
        """
        Sets the pressureunit of this NAUserAdministrative.
        0 -> mbar, 1 -> inHg, 2 -> mmHg

        :param pressureunit: The pressureunit of this NAUserAdministrative.
        :type: str
        """
        self._pressureunit = pressureunit

    @property
    def feel_like_algo(self):
        """
        Gets the feel_like_algo of this NAUserAdministrative.
        algorithm used to compute feel like temperature, 0 -> humidex, 1 -> heat-index

        :return: The feel_like_algo of this NAUserAdministrative.
        :rtype: str
        """
        return self._feel_like_algo

    @feel_like_algo.setter
    def feel_like_algo(self, feel_like_algo):
        """
        Sets the feel_like_algo of this NAUserAdministrative.
        algorithm used to compute feel like temperature, 0 -> humidex, 1 -> heat-index

        :param feel_like_algo: The feel_like_algo of this NAUserAdministrative.
        :type: str
        """
        self._feel_like_algo = feel_like_algo

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
