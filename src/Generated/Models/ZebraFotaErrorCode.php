<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ZebraFotaErrorCode extends Enum {
    public const SUCCESS = "success";
    public const NO_DEVICES_FOUND_IN_SELECTED_AAD_GROUPS = "noDevicesFoundInSelectedAadGroups";
    public const NO_INTUNE_DEVICES_FOUND_IN_SELECTED_AAD_GROUPS = "noIntuneDevicesFoundInSelectedAadGroups";
    public const NO_ZEBRA_FOTA_ENROLLED_DEVICES_FOUND_FOR_CURRENT_TENANT = "noZebraFotaEnrolledDevicesFoundForCurrentTenant";
    public const NO_ZEBRA_FOTA_ENROLLED_DEVICES_FOUND_IN_SELECTED_AAD_GROUPS = "noZebraFotaEnrolledDevicesFoundInSelectedAadGroups";
    public const NO_ZEBRA_FOTA_DEVICES_FOUND_FOR_SELECTED_DEVICE_MODEL = "noZebraFotaDevicesFoundForSelectedDeviceModel";
    public const ZEBRA_FOTA_CREATE_DEPLOYMENT_REQUEST_FAILURE = "zebraFotaCreateDeploymentRequestFailure";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
