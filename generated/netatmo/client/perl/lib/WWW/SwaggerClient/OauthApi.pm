#
# Copyright 2015 SmartBear Software
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#
#
# NOTE: This class is auto generated by the swagger code generator program. 
# Do not edit the class manually.
#
package WWW::SwaggerClient::OauthApi;

require 5.6.0;
use strict;
use warnings;
use utf8; 
use Exporter;
use Carp qw( croak );
use Log::Any qw($log);

use WWW::SwaggerClient::ApiClient;
use WWW::SwaggerClient::Configuration;

sub new {
    my $class   = shift;
    my $default_api_client = $WWW::SwaggerClient::Configuration::api_client ? $WWW::SwaggerClient::Configuration::api_client  : WWW::SwaggerClient::ApiClient->new;
    my (%self) = (
        'api_client' => $default_api_client,
        @_
    );

    #my $self = {
    #    #api_client => $options->{api_client}
    #    api_client => $default_api_client
    #}; 

    bless \%self, $class;

}

#
# get_token
#
# 
# 
# @param string $grant_type Oauth2 grant type (required)
# @param string $client_id Application client ID (required)
# @param string $client_secret Application client secret (required)
# @param string $scope Scopes to use, separated by a space (optional)
# @param string $username User name if grant_type is password (optional)
# @param string $password User password if grant_type is password (optional)
# @param string $code Authorization code if grant_type is authorization_code (optional)
# @param string $redirect_uri Redirect URI if grant_type is authorization_code (optional)
# @param string $refresh_token Refresh token if grant_type is refresh_token (optional)
# @return AccessToken
#
sub get_token {
    my ($self, %args) = @_;

    
    # verify the required parameter 'grant_type' is set
    unless (exists $args{'grant_type'}) {
      croak("Missing the required parameter 'grant_type' when calling get_token");
    }
    
    # verify the required parameter 'client_id' is set
    unless (exists $args{'client_id'}) {
      croak("Missing the required parameter 'client_id' when calling get_token");
    }
    
    # verify the required parameter 'client_secret' is set
    unless (exists $args{'client_secret'}) {
      croak("Missing the required parameter 'client_secret' when calling get_token");
    }
    

    # parse inputs
    my $_resource_path = '/oauth2/token';
    $_resource_path =~ s/{format}/json/; # default format to json

    my $_method = 'POST';
    my $query_params = {};
    my $header_params = {};
    my $form_params = {};

    # 'Accept' and 'Content-Type' header
    my $_header_accept = $self->{api_client}->select_header_accept('application/json');
    if ($_header_accept) {
        $header_params->{'Accept'} = $_header_accept;
    }
    $header_params->{'Content-Type'} = $self->{api_client}->select_header_content_type('application/x-www-form-urlencoded');

    
    
    
    # form params
    if ( exists $args{'grant_type'} ) {
        
        $form_params->{'grant_type'} = $self->{api_client}->to_form_value($args{'grant_type'});
        
    }# form params
    if ( exists $args{'client_id'} ) {
        
        $form_params->{'client_id'} = $self->{api_client}->to_form_value($args{'client_id'});
        
    }# form params
    if ( exists $args{'client_secret'} ) {
        
        $form_params->{'client_secret'} = $self->{api_client}->to_form_value($args{'client_secret'});
        
    }# form params
    if ( exists $args{'scope'} ) {
        
        $form_params->{'scope'} = $self->{api_client}->to_form_value($args{'scope'});
        
    }# form params
    if ( exists $args{'username'} ) {
        
        $form_params->{'username'} = $self->{api_client}->to_form_value($args{'username'});
        
    }# form params
    if ( exists $args{'password'} ) {
        
        $form_params->{'password'} = $self->{api_client}->to_form_value($args{'password'});
        
    }# form params
    if ( exists $args{'code'} ) {
        
        $form_params->{'code'} = $self->{api_client}->to_form_value($args{'code'});
        
    }# form params
    if ( exists $args{'redirect_uri'} ) {
        
        $form_params->{'redirect_uri'} = $self->{api_client}->to_form_value($args{'redirect_uri'});
        
    }# form params
    if ( exists $args{'refresh_token'} ) {
        
        $form_params->{'refresh_token'} = $self->{api_client}->to_form_value($args{'refresh_token'});
        
    }
    my $_body_data;
    

    # authentication setting, if any
    my $auth_settings = [];

    # make the API Call
    my $response = $self->{api_client}->call_api($_resource_path, $_method,
                                           $query_params, $form_params,
                                           $header_params, $_body_data, $auth_settings);
    if (!$response) {
        return;
    }
    my $_response_object = $self->{api_client}->deserialize('AccessToken', $response);
    return $_response_object;
    
}


1;
