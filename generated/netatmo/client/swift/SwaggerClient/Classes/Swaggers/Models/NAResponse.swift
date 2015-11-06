//
// NAResponse.swift
//
// Generated by swagger-codegen
// https://github.com/swagger-api/swagger-codegen
//

import Foundation


public class NAResponse: JSONEncodable {

    public var status: String?
    public var time_exec: Double?
    public var time_server: Int?
    

    // MARK: JSONEncodable
    func encodeToJSON() -> AnyObject {
        var nillableDictionary = [String:AnyObject?]()
        nillableDictionary["status"] = self.status
        nillableDictionary["time_exec"] = self.time_exec
        nillableDictionary["time_server"] = self.time_server
        let dictionary: [String:AnyObject] = APIHelper.rejectNil(nillableDictionary) ?? [:]
        return dictionary
    }
}
