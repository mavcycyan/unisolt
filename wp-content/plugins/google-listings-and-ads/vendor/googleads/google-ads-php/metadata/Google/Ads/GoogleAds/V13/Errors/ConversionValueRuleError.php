<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/conversion_value_rule_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Errors;

class ConversionValueRuleError
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
Agoogle/ads/googleads/v13/errors/conversion_value_rule_error.protogoogle.ads.googleads.v13.errors"�
ConversionValueRuleErrorEnum"�
ConversionValueRuleError
UNSPECIFIED 
UNKNOWN
INVALID_GEO_TARGET_CONSTANT0
,CONFLICTING_INCLUDED_AND_EXCLUDED_GEO_TARGET
CONFLICTING_CONDITIONS/
+CANNOT_REMOVE_IF_INCLUDED_IN_VALUE_RULE_SET
CONDITION_NOT_ALLOWED
FIELD_MUST_BE_UNSET0
,CANNOT_PAUSE_UNLESS_VALUE_RULE_SET_IS_PAUSED
UNTARGETABLE_GEO_TARGET	
INVALID_AUDIENCE_USER_LIST

INACCESSIBLE_USER_LIST"
INVALID_AUDIENCE_USER_INTEREST\'
#CANNOT_ADD_RULE_WITH_STATUS_REMOVEDB�
#com.google.ads.googleads.v13.errorsBConversionValueRuleErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/errors;errors�GAA�Google.Ads.GoogleAds.V13.Errors�Google\\Ads\\GoogleAds\\V13\\Errors�#Google::Ads::GoogleAds::V13::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

