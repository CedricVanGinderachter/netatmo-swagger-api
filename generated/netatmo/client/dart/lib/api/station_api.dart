part of api;


class StationApi {
  String basePath = "https://api.netatmo.net/";
  ApiClient apiClient = ApiClient.defaultApiClient;

  StationApi([ApiClient apiClient]) {
    if (apiClient != null) {
      this.apiClient = apiClient;
    }
  }

  
  /// 
  ///
  /// The method devicelist returns the list of devices owned by the user, and their modules.\nA device is identified by its _id (which is its mac address) and each device may have one, several or no modules, also identified by an _id.
  Future<NADeviceListResponse> devicelist(String accessToken, String appType, String deviceId, bool getFavorites) {
    Object postBody = null;
    

    // create path and map variables
    String path = "/api/devicelist".replaceAll("{format}","json");

    // query params
    Map<String, String> queryParams = {};
    Map<String, String> headerParams = {};
    Map<String, String> formParams = {};
    if("null" != accessToken)
      queryParams["access_token"] = accessToken is List ? accessToken.join(',') : accessToken;
    if("null" != appType)
      queryParams["app_type"] = appType is List ? appType.join(',') : appType;
    if("null" != deviceId)
      queryParams["device_id"] = deviceId is List ? deviceId.join(',') : deviceId;
    if("null" != getFavorites)
      queryParams["get_favorites"] = getFavorites is List ? getFavorites.join(',') : getFavorites;
    
    

    List<String> contentTypes = [];

    String contentType = contentTypes.length > 0 ? contentTypes[0] : "application/json";
    List<String> authNames = [];

    if(contentType.startsWith("multipart/form-data")) {
      bool hasFields = false;
      MultipartRequest mp = new MultipartRequest(null, null);
      
      if(hasFields)
        postBody = mp;
    }
    else {
      
    }

    return apiClient.invokeAPI(basePath, path, 'GET', queryParams, postBody, headerParams, formParams, contentType, authNames).then((response) {
      if(response.statusCode >= 400) {
        throw new ApiException(response.statusCode, response.body);
      }
      else if(response.body != null){
        return ApiClient.deserialize(response.body, NADeviceListResponse);
      }
      else {
        return null;
      }
    });
  }
  
  /// 
  ///
  /// The method getmeasure returns the measurements of a device or a module.
  Future<NAMeasureResponse> getmeasure(String accessToken, String deviceId, String scale, List<String> type, String moduleId, int dateBegin, int dateEnd, int limit, bool optimize, bool realTime) {
    Object postBody = null;
    

    // create path and map variables
    String path = "/api/getmeasure".replaceAll("{format}","json");

    // query params
    Map<String, String> queryParams = {};
    Map<String, String> headerParams = {};
    Map<String, String> formParams = {};
    if("null" != accessToken)
      queryParams["access_token"] = accessToken is List ? accessToken.join(',') : accessToken;
    if("null" != deviceId)
      queryParams["device_id"] = deviceId is List ? deviceId.join(',') : deviceId;
    if("null" != moduleId)
      queryParams["module_id"] = moduleId is List ? moduleId.join(',') : moduleId;
    if("null" != scale)
      queryParams["scale"] = scale is List ? scale.join(',') : scale;
    if("null" != type)
      queryParams["type"] = type is List ? type.join(',') : type;
    if("null" != dateBegin)
      queryParams["date_begin"] = dateBegin is List ? dateBegin.join(',') : dateBegin;
    if("null" != dateEnd)
      queryParams["date_end"] = dateEnd is List ? dateEnd.join(',') : dateEnd;
    if("null" != limit)
      queryParams["limit"] = limit is List ? limit.join(',') : limit;
    if("null" != optimize)
      queryParams["optimize"] = optimize is List ? optimize.join(',') : optimize;
    if("null" != realTime)
      queryParams["real_time"] = realTime is List ? realTime.join(',') : realTime;
    
    

    List<String> contentTypes = [];

    String contentType = contentTypes.length > 0 ? contentTypes[0] : "application/json";
    List<String> authNames = [];

    if(contentType.startsWith("multipart/form-data")) {
      bool hasFields = false;
      MultipartRequest mp = new MultipartRequest(null, null);
      
      if(hasFields)
        postBody = mp;
    }
    else {
      
    }

    return apiClient.invokeAPI(basePath, path, 'GET', queryParams, postBody, headerParams, formParams, contentType, authNames).then((response) {
      if(response.statusCode >= 400) {
        throw new ApiException(response.statusCode, response.body);
      }
      else if(response.body != null){
        return ApiClient.deserialize(response.body, NAMeasureResponse);
      }
      else {
        return null;
      }
    });
  }
  
  /// 
  ///
  /// The method getuser returns information about a user such as prefered language, prefered units, and list of devices.
  Future<NAUserResponse> getuser(String accessToken) {
    Object postBody = null;
    

    // create path and map variables
    String path = "/api/getuser".replaceAll("{format}","json");

    // query params
    Map<String, String> queryParams = {};
    Map<String, String> headerParams = {};
    Map<String, String> formParams = {};
    if("null" != accessToken)
      queryParams["access_token"] = accessToken is List ? accessToken.join(',') : accessToken;
    
    

    List<String> contentTypes = [];

    String contentType = contentTypes.length > 0 ? contentTypes[0] : "application/json";
    List<String> authNames = [];

    if(contentType.startsWith("multipart/form-data")) {
      bool hasFields = false;
      MultipartRequest mp = new MultipartRequest(null, null);
      
      if(hasFields)
        postBody = mp;
    }
    else {
      
    }

    return apiClient.invokeAPI(basePath, path, 'GET', queryParams, postBody, headerParams, formParams, contentType, authNames).then((response) {
      if(response.statusCode >= 400) {
        throw new ApiException(response.statusCode, response.body);
      }
      else if(response.body != null){
        return ApiClient.deserialize(response.body, NAUserResponse);
      }
      else {
        return null;
      }
    });
  }
  
}
