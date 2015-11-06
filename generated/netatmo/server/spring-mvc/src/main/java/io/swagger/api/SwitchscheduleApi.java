package io.swagger.api;

import io.swagger.model.*;

import io.swagger.model.NAOkResponse;

import io.swagger.annotations.Api;
import io.swagger.annotations.ApiOperation;
import io.swagger.annotations.ApiParam;
import io.swagger.annotations.ApiResponse;
import io.swagger.annotations.ApiResponses;

import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestHeader;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RequestPart;
import org.springframework.web.multipart.MultipartFile;

import java.util.List;

import static org.springframework.http.MediaType.*;

@Controller
@RequestMapping(value = "/switchschedule", produces = {APPLICATION_JSON_VALUE})
@Api(value = "/switchschedule", description = "the switchschedule API")
@javax.annotation.Generated(value = "class io.swagger.codegen.languages.SpringMVCServerCodegen", date = "2015-10-07T17:11:46.681+02:00")
public class SwitchscheduleApi {
  

  @ApiOperation(value = "", notes = "The method switchschedule switches the Thermostat's schedule to another existing schedule.", response = NAOkResponse.class)
  @ApiResponses(value = { 
    @ApiResponse(code = 200, message = "Successful response") })
  @RequestMapping(value = "", 
    
    
    method = RequestMethod.POST)
  public ResponseEntity<NAOkResponse> switchschedule(@ApiParam(value = "The relay id", required = true) @RequestParam(value = "deviceId", required = true) String deviceId


,
    @ApiParam(value = "The thermostat id", required = true) @RequestParam(value = "moduleId", required = true) String moduleId


,
    @ApiParam(value = "The schedule id. It can be found in the getthermstate response, under the keys \"therm_program_backup\" and \"therm_program\".", required = true) @RequestParam(value = "scheduleId", required = true) String scheduleId


)
      throws NotFoundException {
      // do some magic!
      return new ResponseEntity<NAOkResponse>(HttpStatus.OK);
  }

  
}
