<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ResultantAppStateDetail extends Enum {
    public const PROCESSOR_ARCHITECTURE_NOT_APPLICABLE = "processorArchitectureNotApplicable";
    public const MINIMUM_DISK_SPACE_NOT_MET = "minimumDiskSpaceNotMet";
    public const MINIMUM_OS_VERSION_NOT_MET = "minimumOsVersionNotMet";
    public const MINIMUM_PHYSICAL_MEMORY_NOT_MET = "minimumPhysicalMemoryNotMet";
    public const MINIMUM_LOGICAL_PROCESSOR_COUNT_NOT_MET = "minimumLogicalProcessorCountNotMet";
    public const MINIMUM_CPU_SPEED_NOT_MET = "minimumCpuSpeedNotMet";
    public const PLATFORM_NOT_APPLICABLE = "platformNotApplicable";
    public const FILE_SYSTEM_REQUIREMENT_NOT_MET = "fileSystemRequirementNotMet";
    public const REGISTRY_REQUIREMENT_NOT_MET = "registryRequirementNotMet";
    public const POWER_SHELL_SCRIPT_REQUIREMENT_NOT_MET = "powerShellScriptRequirementNotMet";
    public const SUPERSEDING_APPS_NOT_APPLICABLE = "supersedingAppsNotApplicable";
    public const NO_ADDITIONAL_DETAILS = "noAdditionalDetails";
    public const DEPENDENCY_FAILED_TO_INSTALL = "dependencyFailedToInstall";
    public const DEPENDENCY_WITH_REQUIREMENTS_NOT_MET = "dependencyWithRequirementsNotMet";
    public const DEPENDENCY_PENDING_REBOOT = "dependencyPendingReboot";
    public const DEPENDENCY_WITH_AUTO_INSTALL_DISABLED = "dependencyWithAutoInstallDisabled";
    public const SUPERSEDED_APP_UNINSTALL_FAILED = "supersededAppUninstallFailed";
    public const SUPERSEDED_APP_UNINSTALL_PENDING_REBOOT = "supersededAppUninstallPendingReboot";
    public const REMOVING_SUPERSEDED_APPS = "removingSupersededApps";
    public const IOS_APP_STORE_UPDATE_FAILED_TO_INSTALL = "iosAppStoreUpdateFailedToInstall";
    public const VPP_APP_HAS_UPDATE_AVAILABLE = "vppAppHasUpdateAvailable";
    public const USER_REJECTED_UPDATE = "userRejectedUpdate";
    public const UNINSTALL_PENDING_REBOOT = "uninstallPendingReboot";
    public const SUPERSEDING_APPS_DETECTED = "supersedingAppsDetected";
    public const SUPERSEDED_APPS_DETECTED = "supersededAppsDetected";
    public const SEE_INSTALL_ERROR_CODE = "seeInstallErrorCode";
    public const AUTO_INSTALL_DISABLED = "autoInstallDisabled";
    public const MANAGED_APP_NO_LONGER_PRESENT = "managedAppNoLongerPresent";
    public const USER_REJECTED_INSTALL = "userRejectedInstall";
    public const USER_IS_NOT_LOGGED_INTO_APP_STORE = "userIsNotLoggedIntoAppStore";
    public const UNTARGETED_SUPERSEDING_APPS_DETECTED = "untargetedSupersedingAppsDetected";
    public const APP_REMOVED_BY_SUPERSEDENCE = "appRemovedBySupersedence";
    public const SEE_UNINSTALL_ERROR_CODE = "seeUninstallErrorCode";
    public const PENDING_REBOOT = "pendingReboot";
    public const INSTALLING_DEPENDENCIES = "installingDependencies";
    public const CONTENT_DOWNLOADED = "contentDownloaded";
}
