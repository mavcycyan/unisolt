<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/final_app_url.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Common;

class FinalAppUrl
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/ads/googleads/v13/enums/app_url_operating_system_type.protogoogle.ads.googleads.v13.enums"p
AppUrlOperatingSystemTypeEnum"O
AppUrlOperatingSystemType
UNSPECIFIED 
UNKNOWN
IOS
ANDROIDB�
"com.google.ads.googleads.v13.enumsBAppUrlOperatingSystemTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
3google/ads/googleads/v13/common/final_app_url.protogoogle.ads.googleads.v13.common"�
FinalAppUrlh
os_type (2W.google.ads.googleads.v13.enums.AppUrlOperatingSystemTypeEnum.AppUrlOperatingSystemType
url (	H �B
_urlB�
#com.google.ads.googleads.v13.commonBFinalAppUrlProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v13/common;common�GAA�Google.Ads.GoogleAds.V13.Common�Google\\Ads\\GoogleAds\\V13\\Common�#Google::Ads::GoogleAds::V13::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

