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


class NADevice(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self):
        """
        NADevice - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'id': 'str',
            'behavior': 'int',
            'cipher_id': 'str',
            'date_setup': 'NADate',
            'firmware': 'int',
            'hw_version': 'int',
            'heating_system': 'NAHeatingSystem',
            'house_model': 'NAHouseModel',
            'ip': 'str',
            'last_fw_update': 'int',
            'last_radio_store': 'int',
            'last_status_store': 'int',
            'last_upgrade': 'int',
            'module_name': 'str',
            'modules': 'list[str]',
            'place': 'NAPlace',
            'setpoint': 'object',
            'setpoint_default_duration': 'int',
            'setpoint_order': 'dict(str, list[NAObject])',
            'public_ext_data': 'bool',
            'station_name': 'str',
            'therm_program': 'dict(str, NAThermProgram)',
            'therm_program_backup': 'dict(str, list[NAThermProgram])',
            'therm_program_order': 'dict(str, list[NAObject])',
            'type': 'str',
            'user_owner': 'list[str]',
            'udp_conn': 'bool',
            'wifi_status': 'int',
            'new_feature_avail': 'bool',
            'first_pid_avail': 'bool',
            'data_type': 'list[str]'
        }

        self.attribute_map = {
            'id': '_id',
            'behavior': 'behavior',
            'cipher_id': 'cipher_id',
            'date_setup': 'date_setup',
            'firmware': 'firmware',
            'hw_version': 'hw_version',
            'heating_system': 'heating_system',
            'house_model': 'house_model',
            'ip': 'ip',
            'last_fw_update': 'last_fw_update',
            'last_radio_store': 'last_radio_store',
            'last_status_store': 'last_status_store',
            'last_upgrade': 'last_upgrade',
            'module_name': 'module_name',
            'modules': 'modules',
            'place': 'place',
            'setpoint': 'setpoint',
            'setpoint_default_duration': 'setpoint_default_duration',
            'setpoint_order': 'setpoint_order',
            'public_ext_data': 'public_ext_data',
            'station_name': 'station_name',
            'therm_program': 'therm_program',
            'therm_program_backup': 'therm_program_backup',
            'therm_program_order': 'therm_program_order',
            'type': 'type',
            'user_owner': 'user_owner',
            'udp_conn': 'udp_conn',
            'wifi_status': 'wifi_status',
            'new_feature_avail': 'new_feature_avail',
            'first_pid_avail': 'first_pid_avail',
            'data_type': 'data_type'
        }

        self._id = None
        self._behavior = None
        self._cipher_id = None
        self._date_setup = None
        self._firmware = None
        self._hw_version = None
        self._heating_system = None
        self._house_model = None
        self._ip = None
        self._last_fw_update = None
        self._last_radio_store = None
        self._last_status_store = None
        self._last_upgrade = None
        self._module_name = None
        self._modules = None
        self._place = None
        self._setpoint = None
        self._setpoint_default_duration = None
        self._setpoint_order = None
        self._public_ext_data = None
        self._station_name = None
        self._therm_program = None
        self._therm_program_backup = None
        self._therm_program_order = None
        self._type = None
        self._user_owner = None
        self._udp_conn = None
        self._wifi_status = None
        self._new_feature_avail = None
        self._first_pid_avail = None
        self._data_type = None

    @property
    def id(self):
        """
        Gets the id of this NADevice.


        :return: The id of this NADevice.
        :rtype: str
        """
        return self._id

    @id.setter
    def id(self, id):
        """
        Sets the id of this NADevice.


        :param id: The id of this NADevice.
        :type: str
        """
        self._id = id

    @property
    def behavior(self):
        """
        Gets the behavior of this NADevice.


        :return: The behavior of this NADevice.
        :rtype: int
        """
        return self._behavior

    @behavior.setter
    def behavior(self, behavior):
        """
        Sets the behavior of this NADevice.


        :param behavior: The behavior of this NADevice.
        :type: int
        """
        self._behavior = behavior

    @property
    def cipher_id(self):
        """
        Gets the cipher_id of this NADevice.


        :return: The cipher_id of this NADevice.
        :rtype: str
        """
        return self._cipher_id

    @cipher_id.setter
    def cipher_id(self, cipher_id):
        """
        Sets the cipher_id of this NADevice.


        :param cipher_id: The cipher_id of this NADevice.
        :type: str
        """
        self._cipher_id = cipher_id

    @property
    def date_setup(self):
        """
        Gets the date_setup of this NADevice.


        :return: The date_setup of this NADevice.
        :rtype: NADate
        """
        return self._date_setup

    @date_setup.setter
    def date_setup(self, date_setup):
        """
        Sets the date_setup of this NADevice.


        :param date_setup: The date_setup of this NADevice.
        :type: NADate
        """
        self._date_setup = date_setup

    @property
    def firmware(self):
        """
        Gets the firmware of this NADevice.


        :return: The firmware of this NADevice.
        :rtype: int
        """
        return self._firmware

    @firmware.setter
    def firmware(self, firmware):
        """
        Sets the firmware of this NADevice.


        :param firmware: The firmware of this NADevice.
        :type: int
        """
        self._firmware = firmware

    @property
    def hw_version(self):
        """
        Gets the hw_version of this NADevice.


        :return: The hw_version of this NADevice.
        :rtype: int
        """
        return self._hw_version

    @hw_version.setter
    def hw_version(self, hw_version):
        """
        Sets the hw_version of this NADevice.


        :param hw_version: The hw_version of this NADevice.
        :type: int
        """
        self._hw_version = hw_version

    @property
    def heating_system(self):
        """
        Gets the heating_system of this NADevice.


        :return: The heating_system of this NADevice.
        :rtype: NAHeatingSystem
        """
        return self._heating_system

    @heating_system.setter
    def heating_system(self, heating_system):
        """
        Sets the heating_system of this NADevice.


        :param heating_system: The heating_system of this NADevice.
        :type: NAHeatingSystem
        """
        self._heating_system = heating_system

    @property
    def house_model(self):
        """
        Gets the house_model of this NADevice.


        :return: The house_model of this NADevice.
        :rtype: NAHouseModel
        """
        return self._house_model

    @house_model.setter
    def house_model(self, house_model):
        """
        Sets the house_model of this NADevice.


        :param house_model: The house_model of this NADevice.
        :type: NAHouseModel
        """
        self._house_model = house_model

    @property
    def ip(self):
        """
        Gets the ip of this NADevice.


        :return: The ip of this NADevice.
        :rtype: str
        """
        return self._ip

    @ip.setter
    def ip(self, ip):
        """
        Sets the ip of this NADevice.


        :param ip: The ip of this NADevice.
        :type: str
        """
        self._ip = ip

    @property
    def last_fw_update(self):
        """
        Gets the last_fw_update of this NADevice.


        :return: The last_fw_update of this NADevice.
        :rtype: int
        """
        return self._last_fw_update

    @last_fw_update.setter
    def last_fw_update(self, last_fw_update):
        """
        Sets the last_fw_update of this NADevice.


        :param last_fw_update: The last_fw_update of this NADevice.
        :type: int
        """
        self._last_fw_update = last_fw_update

    @property
    def last_radio_store(self):
        """
        Gets the last_radio_store of this NADevice.


        :return: The last_radio_store of this NADevice.
        :rtype: int
        """
        return self._last_radio_store

    @last_radio_store.setter
    def last_radio_store(self, last_radio_store):
        """
        Sets the last_radio_store of this NADevice.


        :param last_radio_store: The last_radio_store of this NADevice.
        :type: int
        """
        self._last_radio_store = last_radio_store

    @property
    def last_status_store(self):
        """
        Gets the last_status_store of this NADevice.


        :return: The last_status_store of this NADevice.
        :rtype: int
        """
        return self._last_status_store

    @last_status_store.setter
    def last_status_store(self, last_status_store):
        """
        Sets the last_status_store of this NADevice.


        :param last_status_store: The last_status_store of this NADevice.
        :type: int
        """
        self._last_status_store = last_status_store

    @property
    def last_upgrade(self):
        """
        Gets the last_upgrade of this NADevice.


        :return: The last_upgrade of this NADevice.
        :rtype: int
        """
        return self._last_upgrade

    @last_upgrade.setter
    def last_upgrade(self, last_upgrade):
        """
        Sets the last_upgrade of this NADevice.


        :param last_upgrade: The last_upgrade of this NADevice.
        :type: int
        """
        self._last_upgrade = last_upgrade

    @property
    def module_name(self):
        """
        Gets the module_name of this NADevice.


        :return: The module_name of this NADevice.
        :rtype: str
        """
        return self._module_name

    @module_name.setter
    def module_name(self, module_name):
        """
        Sets the module_name of this NADevice.


        :param module_name: The module_name of this NADevice.
        :type: str
        """
        self._module_name = module_name

    @property
    def modules(self):
        """
        Gets the modules of this NADevice.
        It lists which modules are linked with this device

        :return: The modules of this NADevice.
        :rtype: list[str]
        """
        return self._modules

    @modules.setter
    def modules(self, modules):
        """
        Sets the modules of this NADevice.
        It lists which modules are linked with this device

        :param modules: The modules of this NADevice.
        :type: list[str]
        """
        self._modules = modules

    @property
    def place(self):
        """
        Gets the place of this NADevice.


        :return: The place of this NADevice.
        :rtype: NAPlace
        """
        return self._place

    @place.setter
    def place(self, place):
        """
        Sets the place of this NADevice.


        :param place: The place of this NADevice.
        :type: NAPlace
        """
        self._place = place

    @property
    def setpoint(self):
        """
        Gets the setpoint of this NADevice.


        :return: The setpoint of this NADevice.
        :rtype: object
        """
        return self._setpoint

    @setpoint.setter
    def setpoint(self, setpoint):
        """
        Sets the setpoint of this NADevice.


        :param setpoint: The setpoint of this NADevice.
        :type: object
        """
        self._setpoint = setpoint

    @property
    def setpoint_default_duration(self):
        """
        Gets the setpoint_default_duration of this NADevice.


        :return: The setpoint_default_duration of this NADevice.
        :rtype: int
        """
        return self._setpoint_default_duration

    @setpoint_default_duration.setter
    def setpoint_default_duration(self, setpoint_default_duration):
        """
        Sets the setpoint_default_duration of this NADevice.


        :param setpoint_default_duration: The setpoint_default_duration of this NADevice.
        :type: int
        """
        self._setpoint_default_duration = setpoint_default_duration

    @property
    def setpoint_order(self):
        """
        Gets the setpoint_order of this NADevice.


        :return: The setpoint_order of this NADevice.
        :rtype: dict(str, list[NAObject])
        """
        return self._setpoint_order

    @setpoint_order.setter
    def setpoint_order(self, setpoint_order):
        """
        Sets the setpoint_order of this NADevice.


        :param setpoint_order: The setpoint_order of this NADevice.
        :type: dict(str, list[NAObject])
        """
        self._setpoint_order = setpoint_order

    @property
    def public_ext_data(self):
        """
        Gets the public_ext_data of this NADevice.


        :return: The public_ext_data of this NADevice.
        :rtype: bool
        """
        return self._public_ext_data

    @public_ext_data.setter
    def public_ext_data(self, public_ext_data):
        """
        Sets the public_ext_data of this NADevice.


        :param public_ext_data: The public_ext_data of this NADevice.
        :type: bool
        """
        self._public_ext_data = public_ext_data

    @property
    def station_name(self):
        """
        Gets the station_name of this NADevice.


        :return: The station_name of this NADevice.
        :rtype: str
        """
        return self._station_name

    @station_name.setter
    def station_name(self, station_name):
        """
        Sets the station_name of this NADevice.


        :param station_name: The station_name of this NADevice.
        :type: str
        """
        self._station_name = station_name

    @property
    def therm_program(self):
        """
        Gets the therm_program of this NADevice.


        :return: The therm_program of this NADevice.
        :rtype: dict(str, NAThermProgram)
        """
        return self._therm_program

    @therm_program.setter
    def therm_program(self, therm_program):
        """
        Sets the therm_program of this NADevice.


        :param therm_program: The therm_program of this NADevice.
        :type: dict(str, NAThermProgram)
        """
        self._therm_program = therm_program

    @property
    def therm_program_backup(self):
        """
        Gets the therm_program_backup of this NADevice.


        :return: The therm_program_backup of this NADevice.
        :rtype: dict(str, list[NAThermProgram])
        """
        return self._therm_program_backup

    @therm_program_backup.setter
    def therm_program_backup(self, therm_program_backup):
        """
        Sets the therm_program_backup of this NADevice.


        :param therm_program_backup: The therm_program_backup of this NADevice.
        :type: dict(str, list[NAThermProgram])
        """
        self._therm_program_backup = therm_program_backup

    @property
    def therm_program_order(self):
        """
        Gets the therm_program_order of this NADevice.


        :return: The therm_program_order of this NADevice.
        :rtype: dict(str, list[NAObject])
        """
        return self._therm_program_order

    @therm_program_order.setter
    def therm_program_order(self, therm_program_order):
        """
        Sets the therm_program_order of this NADevice.


        :param therm_program_order: The therm_program_order of this NADevice.
        :type: dict(str, list[NAObject])
        """
        self._therm_program_order = therm_program_order

    @property
    def type(self):
        """
        Gets the type of this NADevice.
        Included in every device or module. It defines the type of the device/module. Its values are among :\nNAMain : for the base station\nNAModule1 : for the outdoor module\nNAModule4 : for the additionnal indoor module\nNAModule3 : for the rain gauge module\nNAPlug : for the thermostat relay/plug\nNATherm1 : for the thermostat module

        :return: The type of this NADevice.
        :rtype: str
        """
        return self._type

    @type.setter
    def type(self, type):
        """
        Sets the type of this NADevice.
        Included in every device or module. It defines the type of the device/module. Its values are among :\nNAMain : for the base station\nNAModule1 : for the outdoor module\nNAModule4 : for the additionnal indoor module\nNAModule3 : for the rain gauge module\nNAPlug : for the thermostat relay/plug\nNATherm1 : for the thermostat module

        :param type: The type of this NADevice.
        :type: str
        """
        self._type = type

    @property
    def user_owner(self):
        """
        Gets the user_owner of this NADevice.


        :return: The user_owner of this NADevice.
        :rtype: list[str]
        """
        return self._user_owner

    @user_owner.setter
    def user_owner(self, user_owner):
        """
        Sets the user_owner of this NADevice.


        :param user_owner: The user_owner of this NADevice.
        :type: list[str]
        """
        self._user_owner = user_owner

    @property
    def udp_conn(self):
        """
        Gets the udp_conn of this NADevice.


        :return: The udp_conn of this NADevice.
        :rtype: bool
        """
        return self._udp_conn

    @udp_conn.setter
    def udp_conn(self, udp_conn):
        """
        Sets the udp_conn of this NADevice.


        :param udp_conn: The udp_conn of this NADevice.
        :type: bool
        """
        self._udp_conn = udp_conn

    @property
    def wifi_status(self):
        """
        Gets the wifi_status of this NADevice.
        It contains the current wifi status. The different thresholds to take into account are\nRSSI_THRESHOLD_0 = 86 bad signal\nRSSI_THRESHOLD_1 = 71 middle quality signal\nRSSI_THRESHOLD_2 = 56 good signal

        :return: The wifi_status of this NADevice.
        :rtype: int
        """
        return self._wifi_status

    @wifi_status.setter
    def wifi_status(self, wifi_status):
        """
        Sets the wifi_status of this NADevice.
        It contains the current wifi status. The different thresholds to take into account are\nRSSI_THRESHOLD_0 = 86 bad signal\nRSSI_THRESHOLD_1 = 71 middle quality signal\nRSSI_THRESHOLD_2 = 56 good signal

        :param wifi_status: The wifi_status of this NADevice.
        :type: int
        """
        self._wifi_status = wifi_status

    @property
    def new_feature_avail(self):
        """
        Gets the new_feature_avail of this NADevice.


        :return: The new_feature_avail of this NADevice.
        :rtype: bool
        """
        return self._new_feature_avail

    @new_feature_avail.setter
    def new_feature_avail(self, new_feature_avail):
        """
        Sets the new_feature_avail of this NADevice.


        :param new_feature_avail: The new_feature_avail of this NADevice.
        :type: bool
        """
        self._new_feature_avail = new_feature_avail

    @property
    def first_pid_avail(self):
        """
        Gets the first_pid_avail of this NADevice.


        :return: The first_pid_avail of this NADevice.
        :rtype: bool
        """
        return self._first_pid_avail

    @first_pid_avail.setter
    def first_pid_avail(self, first_pid_avail):
        """
        Sets the first_pid_avail of this NADevice.


        :param first_pid_avail: The first_pid_avail of this NADevice.
        :type: bool
        """
        self._first_pid_avail = first_pid_avail

    @property
    def data_type(self):
        """
        Gets the data_type of this NADevice.


        :return: The data_type of this NADevice.
        :rtype: list[str]
        """
        return self._data_type

    @data_type.setter
    def data_type(self, data_type):
        """
        Sets the data_type of this NADevice.


        :param data_type: The data_type of this NADevice.
        :type: list[str]
        """
        self._data_type = data_type

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
