<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/merchant_center_link_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Services;

class MerchantCenterLinkService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
@google/ads/googleads/v13/enums/merchant_center_link_status.protogoogle.ads.googleads.v13.enums"r
MerchantCenterLinkStatusEnum"R
MerchantCenterLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
PENDINGB�
"com.google.ads.googleads.v13.enumsBMerchantCenterLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
=google/ads/googleads/v13/resources/merchant_center_link.proto"google.ads.googleads.v13.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
MerchantCenterLinkJ
resource_name (	B3�A�A-
+googleads.googleapis.com/MerchantCenterLink
id (B�AH �.
merchant_center_account_name (	B�AH�e
status (2U.google.ads.googleads.v13.enums.MerchantCenterLinkStatusEnum.MerchantCenterLinkStatus:r�Ao
+googleads.googleapis.com/MerchantCenterLink@customers/{customer_id}/merchantCenterLinks/{merchant_center_id}B
_idB
_merchant_center_account_nameB�
&com.google.ads.googleads.v13.resourcesBMerchantCenterLinkProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v13/resources;resources�GAA�"Google.Ads.GoogleAds.V13.Resources�"Google\\Ads\\GoogleAds\\V13\\Resources�&Google::Ads::GoogleAds::V13::Resourcesbproto3
�
Dgoogle/ads/googleads/v13/services/merchant_center_link_service.proto!google.ads.googleads.v13.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.proto":
ListMerchantCenterLinksRequest
customer_id (	B�A"x
ListMerchantCenterLinksResponseU
merchant_center_links (26.google.ads.googleads.v13.resources.MerchantCenterLink"j
GetMerchantCenterLinkRequestJ
resource_name (	B3�A�A-
+googleads.googleapis.com/MerchantCenterLink"�
MutateMerchantCenterLinkRequest
customer_id (	B�AV
	operation (2>.google.ads.googleads.v13.services.MerchantCenterLinkOperationB�A
validate_only ("�
MerchantCenterLinkOperation/
update_mask (2.google.protobuf.FieldMaskH
update (26.google.ads.googleads.v13.resources.MerchantCenterLinkH B
remove (	B0�A-
+googleads.googleapis.com/MerchantCenterLinkH B
	operation"u
 MutateMerchantCenterLinkResponseQ
result (2A.google.ads.googleads.v13.services.MutateMerchantCenterLinkResult"i
MutateMerchantCenterLinkResultG
resource_name (	B0�A-
+googleads.googleapis.com/MerchantCenterLink2�
MerchantCenterLinkService�
ListMerchantCenterLinksA.google.ads.googleads.v13.services.ListMerchantCenterLinksRequestB.google.ads.googleads.v13.services.ListMerchantCenterLinksResponse"H���42/v13/customers/{customer_id=*}/merchantCenterLinks�Acustomer_id�
GetMerchantCenterLink?.google.ads.googleads.v13.services.GetMerchantCenterLinkRequest6.google.ads.googleads.v13.resources.MerchantCenterLink"N���86/v13/{resource_name=customers/*/merchantCenterLinks/*}�Aresource_name�
MutateMerchantCenterLinkB.google.ads.googleads.v13.services.MutateMerchantCenterLinkRequestC.google.ads.googleads.v13.services.MutateMerchantCenterLinkResponse"\\���>"9/v13/customers/{customer_id=*}/merchantCenterLinks:mutate:*�Acustomer_id,operationE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v13.servicesBMerchantCenterLinkServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v13/services;services�GAA�!Google.Ads.GoogleAds.V13.Services�!Google\\Ads\\GoogleAds\\V13\\Services�%Google::Ads::GoogleAds::V13::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

