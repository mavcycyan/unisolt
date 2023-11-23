<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/location/locations.proto

namespace GPBMetadata\Google\Cloud\Location;

class Locations
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%google/cloud/location/locations.protogoogle.cloud.locationgoogle/protobuf/any.protogoogle/api/client.proto"[
ListLocationsRequest
name (	
filter (	
	page_size (

page_token (	"d
ListLocationsResponse2
	locations (2.google.cloud.location.Location
next_page_token (	""
GetLocationRequest
name (	"�
Location
name (	
location_id (	
display_name (	;
labels (2+.google.cloud.location.Location.LabelsEntry&
metadata (2.google.protobuf.Any-
LabelsEntry
key (	
value (	:82�
	Locations�
ListLocations+.google.cloud.location.ListLocationsRequest,.google.cloud.location.ListLocationsResponse"?���9/v1/{name=locations}Z!/v1/{name=projects/*}/locations�
GetLocation).google.cloud.location.GetLocationRequest.google.cloud.location.Location"C���=/v1/{name=locations/*}Z#!/v1/{name=projects/*/locations/*}H�Acloud.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformBo
com.google.cloud.locationBLocationsProtoPZ=google.golang.org/genproto/googleapis/cloud/location;location�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

