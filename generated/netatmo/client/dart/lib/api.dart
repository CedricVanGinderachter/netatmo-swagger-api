library api;

import 'dart:async';
import 'dart:convert';
import 'dart:html';
import 'package:http/browser_client.dart';
import 'package:http/http.dart';
import 'package:dartson/dartson.dart';
import 'package:crypto/crypto.dart';
import 'package:intl/intl.dart';

part 'api_client.dart';
part 'api_exception.dart';
part 'auth/authentication.dart';
part 'auth/api_key_auth.dart';
part 'auth/oauth.dart';
part 'auth/http_basic_auth.dart';

part 'api/station_api.dart';
part 'api/oauth_api.dart';
part 'api/thermostat_api.dart';
part 'api/welcome_api.dart';
part 'api/public_api.dart';
part 'api/partner_api.dart';

part 'model/accessToken.dart';
part 'model/nAResponse.dart';
part 'model/nAOkResponse.dart';
part 'model/nAUserResponse.dart';
part 'model/nADeviceListResponse.dart';
part 'model/nAMeasureResponse.dart';
part 'model/nAThermStateResponse.dart';
part 'model/nANewScheduleResponse.dart';
part 'model/nAPartnerDevicesResponse.dart';
part 'model/nAUserBody.dart';
part 'model/nADeviceListBody.dart';
part 'model/nAMeasureBodyElem.dart';
part 'model/nAThermStateBody.dart';
part 'model/nANewScheduleBody.dart';
part 'model/nAUserAdministrative.dart';
part 'model/nADate.dart';
part 'model/nADevice.dart';
part 'model/nAModule.dart';
part 'model/nAHouseModel.dart';
part 'model/nAHouseModelCa.dart';
part 'model/nAStation.dart';
part 'model/nALinkStation.dart';
part 'model/nAPidAlgo.dart';
part 'model/nAPlace.dart';
part 'model/nASetpoint.dart';
part 'model/nAThermProgram.dart';
part 'model/nAZone.dart';
part 'model/nATimeTableItem.dart';
part 'model/nAHeatingSystem.dart';
part 'model/nASimpleAlgo.dart';
part 'model/nADashboardData.dart';
part 'model/nAThermMeasure.dart';
part 'model/nAObject.dart';
