<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/campaign_draft_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Errors;

class CampaignDraftError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v13/errors/campaign_draft_error.protogoogle.ads.googleads.v13.errors"�
CampaignDraftErrorEnum"�
CampaignDraftError
UNSPECIFIED 
UNKNOWN
DUPLICATE_DRAFT_NAME*
&INVALID_STATUS_TRANSITION_FROM_REMOVED+
\'INVALID_STATUS_TRANSITION_FROM_PROMOTED1
-INVALID_STATUS_TRANSITION_FROM_PROMOTE_FAILED 
CUSTOMER_CANNOT_CREATE_DRAFT 
CAMPAIGN_CANNOT_CREATE_DRAFT
INVALID_DRAFT_CHANGE
INVALID_STATUS_TRANSITION	-
)MAX_NUMBER_OF_DRAFTS_PER_CAMPAIGN_REACHED
\'
#LIST_ERRORS_FOR_PROMOTED_DRAFT_ONLYB�
#com.google.ads.googleads.v13.errorsBCampaignDraftErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/errors;errors�GAA�Google.Ads.GoogleAds.V13.Errors�Google\\Ads\\GoogleAds\\V13\\Errors�#Google::Ads::GoogleAds::V13::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

