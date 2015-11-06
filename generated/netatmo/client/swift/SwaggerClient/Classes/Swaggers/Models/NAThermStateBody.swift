//
// NAThermStateBody.swift
//
// Generated by swagger-codegen
// https://github.com/swagger-api/swagger-codegen
//

import Foundation


public class NAThermStateBody: JSONEncodable {

    public var setpoint: NASetpoint?
    public var setpoint_order: NASetpoint?
    public var therm_program: NAThermProgram?
    public var therm_program_backup: [NAThermProgram]?
    public var therm_program_order: NAThermProgram?
    public var therm_orientation: Int?
    public var therm_relay_cmd: Int?
    public var battery_vp: Int?
    public var rf_status: Int?
    public var plug_connected_boiler: Bool?
    public var udp_conn: Bool?
    public var last_therm_seen: Int?
    public var last_plug_seen: Int?
    public var wifi_status: Int?
    public var measured: NAThermMeasure?
    

    // MARK: JSONEncodable
    func encodeToJSON() -> AnyObject {
        var nillableDictionary = [String:AnyObject?]()
        nillableDictionary["setpoint"] = self.setpoint?.encodeToJSON()
        nillableDictionary["setpoint_order"] = self.setpoint_order?.encodeToJSON()
        nillableDictionary["therm_program"] = self.therm_program?.encodeToJSON()
        nillableDictionary["therm_program_backup"] = self.therm_program_backup?.encodeToJSON()
        nillableDictionary["therm_program_order"] = self.therm_program_order?.encodeToJSON()
        nillableDictionary["therm_orientation"] = self.therm_orientation
        nillableDictionary["therm_relay_cmd"] = self.therm_relay_cmd
        nillableDictionary["battery_vp"] = self.battery_vp
        nillableDictionary["rf_status"] = self.rf_status
        nillableDictionary["plug_connected_boiler"] = self.plug_connected_boiler
        nillableDictionary["udp_conn"] = self.udp_conn
        nillableDictionary["last_therm_seen"] = self.last_therm_seen
        nillableDictionary["last_plug_seen"] = self.last_plug_seen
        nillableDictionary["wifi_status"] = self.wifi_status
        nillableDictionary["measured"] = self.measured?.encodeToJSON()
        let dictionary: [String:AnyObject] = APIHelper.rejectNil(nillableDictionary) ?? [:]
        return dictionary
    }
}