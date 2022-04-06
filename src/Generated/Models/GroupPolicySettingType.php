<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class GroupPolicySettingType extends Enum {
    public const UNKNOWN = 'unknown';
    public const POLICY = 'policy';
    public const ACCOUNT = 'account';
    public const SECURITY_OPTIONS = 'securityOptions';
    public const USER_RIGHTS_ASSIGNMENT = 'userRightsAssignment';
    public const AUDIT_SETTING = 'auditSetting';
    public const WINDOWS_FIREWALL_SETTINGS = 'windowsFirewallSettings';
    public const APP_LOCKER_RULE_COLLECTION = 'appLockerRuleCollection';
    public const DATA_SOURCES_SETTINGS = 'dataSourcesSettings';
    public const DEVICES_SETTINGS = 'devicesSettings';
    public const DRIVE_MAP_SETTINGS = 'driveMapSettings';
    public const ENVIRONMENT_VARIABLES = 'environmentVariables';
    public const FILES_SETTINGS = 'filesSettings';
    public const FOLDER_OPTIONS = 'folderOptions';
    public const FOLDERS = 'folders';
    public const INI_FILES = 'iniFiles';
    public const INTERNET_OPTIONS = 'internetOptions';
    public const LOCAL_USERS_AND_GROUPS = 'localUsersAndGroups';
    public const NETWORK_OPTIONS = 'networkOptions';
    public const NETWORK_SHARES = 'networkShares';
    public const NT_SERVICES = 'ntServices';
    public const POWER_OPTIONS = 'powerOptions';
    public const PRINTERS = 'printers';
    public const REGIONAL_OPTIONS_SETTINGS = 'regionalOptionsSettings';
    public const REGISTRY_SETTINGS = 'registrySettings';
    public const SCHEDULED_TASKS = 'scheduledTasks';
    public const SHORTCUT_SETTINGS = 'shortcutSettings';
    public const START_MENU_SETTINGS = 'startMenuSettings';
}
