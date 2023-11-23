<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/asset_set_types.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Common;

class AssetSetTypes
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
@google/ads/googleads/v13/enums/location_string_filter_type.protogoogle.ads.googleads.v13.enums"c
LocationStringFilterTypeEnum"C
LocationStringFilterType
UNSPECIFIED 
UNKNOWN	
EXACTB�
"com.google.ads.googleads.v13.enumsBLocationStringFilterTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
<google/ads/googleads/v13/enums/location_ownership_type.protogoogle.ads.googleads.v13.enums"u
LocationOwnershipTypeEnum"X
LocationOwnershipType
UNSPECIFIED 
UNKNOWN
BUSINESS_OWNER
	AFFILIATEB�
"com.google.ads.googleads.v13.enumsBLocationOwnershipTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
<google/ads/googleads/v13/enums/chain_relationship_type.protogoogle.ads.googleads.v13.enums"{
ChainRelationshipTypeEnum"^
ChainRelationshipType
UNSPECIFIED 
UNKNOWN
AUTO_DEALERS
GENERAL_RETAILERSB�
"com.google.ads.googleads.v13.enumsBChainRelationshipTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
5google/ads/googleads/v13/common/asset_set_types.protogoogle.ads.googleads.v13.common<google/ads/googleads/v13/enums/location_ownership_type.proto@google/ads/googleads/v13/enums/location_string_filter_type.protogoogle/api/field_behavior.proto"�
LocationSetx
location_ownership_type (2O.google.ads.googleads.v13.enums.LocationOwnershipTypeEnum.LocationOwnershipTypeB�A�Ad
business_profile_location_set (2;.google.ads.googleads.v13.common.BusinessProfileLocationSetH G
chain_location_set (2).google.ads.googleads.v13.common.ChainSetH M
maps_location_set (20.google.ads.googleads.v13.common.MapsLocationSetH B
source"�
BusinessProfileLocationSet(
http_authorization_token (	B�A�A
email_address (	B�A�A
business_name_filter (	
label_filters (	
listing_id_filters ( 
business_account_id (	B�A"�
ChainSetr
relationship_type (2O.google.ads.googleads.v13.enums.ChainRelationshipTypeEnum.ChainRelationshipTypeB�A�AA
chains (2,.google.ads.googleads.v13.common.ChainFilterB�A"A
ChainFilter
chain_id (B�A
location_attributes (	"a
MapsLocationSetN
maps_locations (21.google.ads.googleads.v13.common.MapsLocationInfoB�A"$
MapsLocationInfo
place_id (	"�
BusinessProfileLocationGroup�
.dynamic_business_profile_location_group_filter (2J.google.ads.googleads.v13.common.DynamicBusinessProfileLocationGroupFilter"�
)DynamicBusinessProfileLocationGroupFilter
label_filters (	e
business_name_filter (2B.google.ads.googleads.v13.common.BusinessProfileBusinessNameFilterH �
listing_id_filters (B
_business_name_filter"�
!BusinessProfileBusinessNameFilter
business_name (	j
filter_type (2U.google.ads.googleads.v13.enums.LocationStringFilterTypeEnum.LocationStringFilterType"p
ChainLocationGroupZ
$dynamic_chain_location_group_filters (2,.google.ads.googleads.v13.common.ChainFilterB�
#com.google.ads.googleads.v13.commonBAssetSetTypesProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/common;common�GAA�Google.Ads.GoogleAds.V13.Common�Google\\Ads\\GoogleAds\\V13\\Common�#Google::Ads::GoogleAds::V13::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

