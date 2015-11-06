//
// NADeviceListResponse.swift
//
// Generated by swagger-codegen
// https://github.com/swagger-api/swagger-codegen
//

import Foundation


public class NADeviceListResponse: JSONEncodable {

    public var time_server: Int?
    public var time_exec: Double?
    public var body: NADeviceListBody?
    public var status: String?
    

    // MARK: JSONEncodable
    func encodeToJSON() -> AnyObject {
        var nillableDictionary = [String:AnyObject?]()
        nillableDictionary["time_server"] = self.time_server
        nillableDictionary["time_exec"] = self.time_exec
        nillableDictionary["body"] = self.body?.encodeToJSON()
        nillableDictionary["status"] = self.status
        let dictionary: [String:AnyObject] = APIHelper.rejectNil(nillableDictionary) ?? [:]
        return dictionary
    }
}
