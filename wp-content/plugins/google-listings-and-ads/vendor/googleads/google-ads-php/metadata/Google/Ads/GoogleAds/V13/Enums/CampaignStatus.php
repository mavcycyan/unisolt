<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/campaign_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Enums;

class CampaignStatus
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
4google/ads/googleads/v13/enums/campaign_status.protogoogle.ads.googleads.v13.enums"j
CampaignStatusEnum"T
CampaignStatus
UNSPECIFIED 
UNKNOWN
ENABLED

PAUSED
REMOVEDB�
"com.google.ads.googleads.v13.enumsBCampaignStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

