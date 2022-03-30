<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class WindowsAutopilotEnrollmentType extends Enum {
    public const UNKNOWN = 'unknown';
    public const AZURE_A_D_JOINED_WITH_AUTOPILOT_PROFILE = 'azureADJoinedWithAutopilotProfile';
    public const OFFLINE_DOMAIN_JOINED = 'offlineDomainJoined';
    public const AZURE_A_D_JOINED_USING_DEVICE_AUTH_WITH_AUTOPILOT_PROFILE = 'azureADJoinedUsingDeviceAuthWithAutopilotProfile';
    public const AZURE_A_D_JOINED_USING_DEVICE_AUTH_WITHOUT_AUTOPILOT_PROFILE = 'azureADJoinedUsingDeviceAuthWithoutAutopilotProfile';
    public const AZURE_A_D_JOINED_WITH_OFFLINE_AUTOPILOT_PROFILE = 'azureADJoinedWithOfflineAutopilotProfile';
    public const AZURE_A_D_JOINED_WITH_WHITE_GLOVE = 'azureADJoinedWithWhiteGlove';
    public const OFFLINE_DOMAIN_JOINED_WITH_WHITE_GLOVE = 'offlineDomainJoinedWithWhiteGlove';
    public const OFFLINE_DOMAIN_JOINED_WITH_OFFLINE_AUTOPILOT_PROFILE = 'offlineDomainJoinedWithOfflineAutopilotProfile';
}
