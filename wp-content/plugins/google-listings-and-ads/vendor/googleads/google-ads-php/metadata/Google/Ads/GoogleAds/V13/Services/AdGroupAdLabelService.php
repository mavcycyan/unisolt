<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/ad_group_ad_label_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Services;

class AdGroupAdLabelService
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
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v13/resources/ad_group_ad_label.proto"google.ads.googleads.v13.resourcesgoogle/api/resource.proto"�
AdGroupAdLabelF
resource_name (	B/�A�A)
\'googleads.googleapis.com/AdGroupAdLabelD
ad_group_ad (	B*�A�A$
"googleads.googleapis.com/AdGroupAdH �:
label (	B&�A�A 
googleads.googleapis.com/LabelH�:v�As
\'googleads.googleapis.com/AdGroupAdLabelHcustomers/{customer_id}/adGroupAdLabels/{ad_group_id}~{ad_id}~{label_id}B
_ad_group_adB
_labelB�
&com.google.ads.googleads.v13.resourcesBAdGroupAdLabelProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v13/resources;resources�GAA�"Google.Ads.GoogleAds.V13.Resources�"Google\\Ads\\GoogleAds\\V13\\Resources�&Google::Ads::GoogleAds::V13::Resourcesbproto3
�
Agoogle/ads/googleads/v13/services/ad_group_ad_label_service.proto!google.ads.googleads.v13.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/rpc/status.proto"�
MutateAdGroupAdLabelsRequest
customer_id (	B�AS

operations (2:.google.ads.googleads.v13.services.AdGroupAdLabelOperationB�A
partial_failure (
validate_only ("�
AdGroupAdLabelOperationD
create (22.google.ads.googleads.v13.resources.AdGroupAdLabelH >
remove (	B,�A)
\'googleads.googleapis.com/AdGroupAdLabelH B
	operation"�
MutateAdGroupAdLabelsResponse1
partial_failure_error (2.google.rpc.StatusN
results (2=.google.ads.googleads.v13.services.MutateAdGroupAdLabelResult"a
MutateAdGroupAdLabelResultC
resource_name (	B,�A)
\'googleads.googleapis.com/AdGroupAdLabel2�
AdGroupAdLabelService�
MutateAdGroupAdLabels?.google.ads.googleads.v13.services.MutateAdGroupAdLabelsRequest@.google.ads.googleads.v13.services.MutateAdGroupAdLabelsResponse"Y���:"5/v13/customers/{customer_id=*}/adGroupAdLabels:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v13.servicesBAdGroupAdLabelServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v13/services;services�GAA�!Google.Ads.GoogleAds.V13.Services�!Google\\Ads\\GoogleAds\\V13\\Services�%Google::Ads::GoogleAds::V13::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

