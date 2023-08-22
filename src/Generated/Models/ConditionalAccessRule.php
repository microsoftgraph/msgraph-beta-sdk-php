<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ConditionalAccessRule extends Enum {
    public const ALL_APPS = 'allApps';
    public const FIRST_PARTY_APPS = 'firstPartyApps';
    public const OFFICE365 = 'office365';
    public const APP_ID = 'appId';
    public const ACR = 'acr';
    public const APP_FILTER = 'appFilter';
    public const ALL_USERS = 'allUsers';
    public const GUEST = 'guest';
    public const GROUP_ID = 'groupId';
    public const ROLE_ID = 'roleId';
    public const USER_ID = 'userId';
    public const ALL_DEVICE_PLATFORMS = 'allDevicePlatforms';
    public const DEVICE_PLATFORM = 'devicePlatform';
    public const ALL_LOCATIONS = 'allLocations';
    public const INSIDE_CORPNET = 'insideCorpnet';
    public const ALL_TRUSTED_LOCATIONS = 'allTrustedLocations';
    public const LOCATION_ID = 'locationId';
    public const ALL_DEVICES = 'allDevices';
    public const DEVICE_FILTER = 'deviceFilter';
    public const DEVICE_STATE = 'deviceState';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const DEVICE_FILTER_INCLUDE_RULE_NOT_MATCHED = 'deviceFilterIncludeRuleNotMatched';
    public const ALL_DEVICE_STATES = 'allDeviceStates';
    public const ANONYMIZED_I_P_ADDRESS = 'anonymizedIPAddress';
    public const UNFAMILIAR_FEATURES = 'unfamiliarFeatures';
    public const NATION_STATE_I_P_ADDRESS = 'nationStateIPAddress';
    public const REAL_TIME_THREAT_INTELLIGENCE = 'realTimeThreatIntelligence';
    public const INTERNAL_GUEST = 'internalGuest';
    public const B2B_COLLABORATION_GUEST = 'b2bCollaborationGuest';
    public const B2B_COLLABORATION_MEMBER = 'b2bCollaborationMember';
    public const B2B_DIRECT_CONNECT_USER = 'b2bDirectConnectUser';
    public const OTHER_EXTERNAL_USER = 'otherExternalUser';
    public const SERVICE_PROVIDER = 'serviceProvider';
    public const MICROSOFT_ADMIN_PORTALS = 'microsoftAdminPortals';
    public const DEVICE_CODE_FLOW = 'deviceCodeFlow';
    public const AUTHENTICATION_TRANSFER = 'authenticationTransfer';
    public const INSIDER_RISK = 'insiderRisk';
}
