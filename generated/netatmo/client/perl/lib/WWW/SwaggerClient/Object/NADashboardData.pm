package WWW::SwaggerClient::Object::NADashboardData;

require 5.6.0;
use strict;
use warnings;
use utf8;
use JSON qw(decode_json);
use Data::Dumper;
use Module::Runtime qw(use_module);
use Log::Any qw($log);
use Date::Parse;
use DateTime;

use base "WWW::SwaggerClient::Object::BaseObject";

#
#
#
#NOTE: This class is auto generated by the swagger code generator program. Do not edit the class manually.
#

my $swagger_types = {
    'time_utc' => 'int',
    'device_id' => 'double',
    'boiler_on' => 'int',
    'boiler_off' => 'int',
    'temperature' => 'double',
    'date_max_temp' => 'int',
    'date_min_temp' => 'int',
    'min_temp' => 'double',
    'max_temp' => 'double',
    'absolute_pressure' => 'double',
    'co2' => 'double',
    'humidity' => 'double',
    'noise' => 'double',
    'pressure' => 'double',
    'rain' => 'int',
    'sum_rain_1' => 'int',
    'sum_rain_24' => 'int'
};

my $attribute_map = {
    'time_utc' => 'time_utc',
    'device_id' => 'device_id',
    'boiler_on' => 'BoilerOn',
    'boiler_off' => 'BoilerOff',
    'temperature' => 'Temperature',
    'date_max_temp' => 'date_max_temp',
    'date_min_temp' => 'date_min_temp',
    'min_temp' => 'min_temp',
    'max_temp' => 'max_temp',
    'absolute_pressure' => 'AbsolutePressure',
    'co2' => 'CO2',
    'humidity' => 'Humidity',
    'noise' => 'Noise',
    'pressure' => 'Pressure',
    'rain' => 'Rain',
    'sum_rain_1' => 'sum_rain_1',
    'sum_rain_24' => 'sum_rain_24'
};

# new object
sub new { 
    my ($class, %args) = @_; 
    my $self = { 
        #
        'time_utc' => $args{'time_utc'}, 
        #
        'device_id' => $args{'device_id'}, 
        #
        'boiler_on' => $args{'BoilerOn'}, 
        #
        'boiler_off' => $args{'BoilerOff'}, 
        #Last temperature measure @ time_utc (in °C)
        'temperature' => $args{'Temperature'}, 
        #Timestamp when max temperature was measured
        'date_max_temp' => $args{'date_max_temp'}, 
        #Timestamp when min temperature was measured
        'date_min_temp' => $args{'date_min_temp'}, 
        #Max temperature of the day (measured @ date_max_temp)
        'min_temp' => $args{'min_temp'}, 
        #Min temperature of the day (measured @ date_min_temp)
        'max_temp' => $args{'max_temp'}, 
        #Real measured pressure @ time_utc (in mb)
        'absolute_pressure' => $args{'AbsolutePressure'}, 
        #Last Co2 measured @ time_utc (in ppm)
        'co2' => $args{'CO2'}, 
        #Last humidity measured @ time_utc (in %)
        'humidity' => $args{'Humidity'}, 
        #Last noise measured @ time_utc (in db)
        'noise' => $args{'Noise'}, 
        #Last Sea level pressure measured @ time_utc (in mb)
        'pressure' => $args{'Pressure'}, 
        #Last rain measured (in mm)
        'rain' => $args{'Rain'}, 
        #Amount of rain in last hour
        'sum_rain_1' => $args{'sum_rain_1'}, 
        #Amount of rain today
        'sum_rain_24' => $args{'sum_rain_24'}
    }; 

    return bless $self, $class; 
}  

# get swagger type of the attribute
sub get_swagger_types {
    return $swagger_types;
}

# get attribute mappping
sub get_attribute_map {
    return $attribute_map;
}

1;
