part of api;


@Entity()
class NAModule {
  
  String id = null;
  
  
  NADate dateSetup = null;
  
  
  int firmware = null;
  
  /* Included in every device or module. It defines the type of the device/module. Its values are among :\nNAMain : for the base station\nNAModule1 : for the outdoor module\nNAModule4 : for the additionnal indoor module\nNAModule3 : for the rain gauge module\nNAPlug : for the thermostat relay/plug\nNATherm1 : for the thermostat module */
  String type = null;
  
  
  String moduleName = null;
  
  
  String mainDevice = null;
  
  
  int lastMessage = null;
  
  
  int lastSeen = null;
  
  
  bool publicExtData = null;
  
  /* \"It contains the current radio status. The different thresholds to take into account are :\" |\nRADIO_THRESHOLD_SIGNAL_LOW = 90 \nRADIO_THRESHOLD_SIGNAL_MEDIUM = 80\nRADIO_THRESHOLD_SIGNAL_HIGH = 70\nRADIO_THRESHOLD_SIGNAL_FULL = 60 */
  int rfStatus = null;
  
  /* It contains the current battery status. The threshold depends on the kind of module, below is the list of the different threshold to take into account according the module type.\n\"Indoor module Battery range: 6000 ... 4200\" |\nINDOOR_BATTERY_LEVEL_FULL = 5640\nINDOOR_BATTERY_LEVEL_HIGH = 5280\nINDOOR_BATTERY_LEVEL_MEDIUM = 4920\nINDOOR_BATTERY_LEVEL_LOW = 4560\n\"Below 4560: very low\" |\n  \n\"Raingauge and outdoor module Battery range: 6000 ... 3600\" |\nBATTERY_LEVEL_FULL = 5500\nBATTERY_LEVEL_HIGH = 5000\nBATTERY_LEVEL_MEDIUM = 4500\nBATTERY_LEVEL_LOW = 4000\n\"Below 4000: very low\" |\n  \n\"Thermostat Battery range: 4500 ... 3000\" |\nTHERMOSTAT_BATTERY_LEVEL_FULL = 4100\nTHERMOSTAT_BATTERY_LEVEL_HIGH = 3600\nTHERMOSTAT_BATTERY_LEVEL_MEDIUM = 3300\nTHERMOSTAT_BATTERY_LEVEL_LOW = 3000\n\"Below 3000: very low\" */
  int batteryVp = null;
  
  
  int thermOrientation = null;
  
  
  int thermRelayCmd = null;
  
  /* It contains all the measurements that can be displayed on the dashboard */
  NADashboardData dashboardData = null;
  
  
  List<String> dataType = [];
  
  
  NAModule();

  @override
  String toString()  {
    return 'NAModule[id=$id, dateSetup=$dateSetup, firmware=$firmware, type=$type, moduleName=$moduleName, mainDevice=$mainDevice, lastMessage=$lastMessage, lastSeen=$lastSeen, publicExtData=$publicExtData, rfStatus=$rfStatus, batteryVp=$batteryVp, thermOrientation=$thermOrientation, thermRelayCmd=$thermRelayCmd, dashboardData=$dashboardData, dataType=$dataType, ]';
  }

}

