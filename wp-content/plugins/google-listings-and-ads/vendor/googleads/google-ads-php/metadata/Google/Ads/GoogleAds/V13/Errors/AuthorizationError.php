<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/errors/authorization_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Errors;

class AuthorizationError
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
9google/ads/googleads/v13/errors/authorization_error.protogoogle.ads.googleads.v13.errors"�
AuthorizationErrorEnum"�
AuthorizationError
UNSPECIFIED 
UNKNOWN
USER_PERMISSION_DENIED$
 DEVELOPER_TOKEN_NOT_ON_ALLOWLIST
DEVELOPER_TOKEN_PROHIBITED
PROJECT_DISABLED
AUTHORIZATION_ERROR
ACTION_NOT_PERMITTED
INCOMPLETE_SIGNUP
CUSTOMER_NOT_ENABLED
MISSING_TOS	 
DEVELOPER_TOKEN_NOT_APPROVED
=
9INVALID_LOGIN_CUSTOMER_ID_SERVING_CUSTOMER_ID_COMBINATION
SERVICE_ACCESS_DENIED"
ACCESS_DENIED_FOR_ACCOUNT_TYPE
METRIC_ACCESS_DENIEDB�
#com.google.ads.googleads.v13.errorsBAuthorizationErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/errors;errors�GAA�Google.Ads.GoogleAds.V13.Errors�Google\\Ads\\GoogleAds\\V13\\Errors�#Google::Ads::GoogleAds::V13::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

