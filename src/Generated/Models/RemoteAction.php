<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class RemoteAction extends Enum {
    public const UNKNOWN = "unknown";
    public const FACTORY_RESET = "factoryReset";
    public const REMOVE_COMPANY_DATA = "removeCompanyData";
    public const RESET_PASSCODE = "resetPasscode";
    public const REMOTE_LOCK = "remoteLock";
    public const ENABLE_LOST_MODE = "enableLostMode";
    public const DISABLE_LOST_MODE = "disableLostMode";
    public const LOCATE_DEVICE = "locateDevice";
    public const REBOOT_NOW = "rebootNow";
    public const RECOVER_PASSCODE = "recoverPasscode";
    public const CLEAN_WINDOWS_DEVICE = "cleanWindowsDevice";
    public const LOGOUT_SHARED_APPLE_DEVICE_ACTIVE_USER = "logoutSharedAppleDeviceActiveUser";
    public const QUICK_SCAN = "quickScan";
    public const FULL_SCAN = "fullScan";
    public const WINDOWS_DEFENDER_UPDATE_SIGNATURES = "windowsDefenderUpdateSignatures";
    public const FACTORY_RESET_KEEP_ENROLLMENT_DATA = "factoryResetKeepEnrollmentData";
    public const UPDATE_DEVICE_ACCOUNT = "updateDeviceAccount";
    public const AUTOMATIC_REDEPLOYMENT = "automaticRedeployment";
    public const SHUT_DOWN = "shutDown";
    public const ROTATE_BIT_LOCKER_KEYS = "rotateBitLockerKeys";
    public const ROTATE_FILE_VAULT_KEY = "rotateFileVaultKey";
    public const GET_FILE_VAULT_KEY = "getFileVaultKey";
    public const SET_DEVICE_NAME = "setDeviceName";
    public const ACTIVATE_DEVICE_ESIM = "activateDeviceEsim";
    public const DEPROVISION = "deprovision";
    public const DISABLE = "disable";
    public const REENABLE = "reenable";
    public const MOVE_DEVICE_TO_ORGANIZATIONAL_UNIT = "moveDeviceToOrganizationalUnit";
    public const INITIATE_MOBILE_DEVICE_MANAGEMENT_KEY_RECOVERY = "initiateMobileDeviceManagementKeyRecovery";
    public const INITIATE_ON_DEMAND_PROACTIVE_REMEDIATION = "initiateOnDemandProactiveRemediation";
    public const ROTATE_LOCAL_ADMIN_PASSWORD = "rotateLocalAdminPassword";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const LAUNCH_REMOTE_HELP = "launchRemoteHelp";
    public const REVOKE_APPLE_VPP_LICENSES = "revokeAppleVppLicenses";
    public const REMOVE_DEVICE_FIRMWARE_CONFIGURATION_INTERFACE_MANAGEMENT = "removeDeviceFirmwareConfigurationInterfaceManagement";
    public const PAUSE_CONFIGURATION_REFRESH = "pauseConfigurationRefresh";
    public const INITIATE_DEVICE_ATTESTATION = "initiateDeviceAttestation";
    public const CHANGE_ASSIGNMENTS = "changeAssignments";
    public const DELETE = "delete";
}
