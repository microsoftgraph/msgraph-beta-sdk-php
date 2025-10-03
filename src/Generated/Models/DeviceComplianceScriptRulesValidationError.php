<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DeviceComplianceScriptRulesValidationError extends Enum {
    public const NONE = "none";
    public const JSON_FILE_INVALID = "jsonFileInvalid";
    public const JSON_FILE_MISSING = "jsonFileMissing";
    public const JSON_FILE_TOO_LARGE = "jsonFileTooLarge";
    public const RULES_MISSING = "rulesMissing";
    public const DUPLICATE_RULES = "duplicateRules";
    public const TOO_MANY_RULES_SPECIFIED = "tooManyRulesSpecified";
    public const OPERATOR_MISSING = "operatorMissing";
    public const OPERATOR_NOT_SUPPORTED = "operatorNotSupported";
    public const DATATYPE_MISSING = "datatypeMissing";
    public const DATATYPE_NOT_SUPPORTED = "datatypeNotSupported";
    public const OPERATOR_DATA_TYPE_COMBINATION_NOT_SUPPORTED = "operatorDataTypeCombinationNotSupported";
    public const MORE_INFO_URI_MISSING = "moreInfoUriMissing";
    public const MORE_INFO_URI_INVALID = "moreInfoUriInvalid";
    public const MORE_INFO_URI_TOO_LARGE = "moreInfoUriTooLarge";
    public const DESCRIPTION_MISSING = "descriptionMissing";
    public const DESCRIPTION_INVALID = "descriptionInvalid";
    public const DESCRIPTION_TOO_LARGE = "descriptionTooLarge";
    public const TITLE_MISSING = "titleMissing";
    public const TITLE_INVALID = "titleInvalid";
    public const TITLE_TOO_LARGE = "titleTooLarge";
    public const OPERAND_MISSING = "operandMissing";
    public const OPERAND_INVALID = "operandInvalid";
    public const OPERAND_TOO_LARGE = "operandTooLarge";
    public const SETTING_NAME_MISSING = "settingNameMissing";
    public const SETTING_NAME_INVALID = "settingNameInvalid";
    public const SETTING_NAME_TOO_LARGE = "settingNameTooLarge";
    public const ENGLISH_LOCALE_MISSING = "englishLocaleMissing";
    public const DUPLICATE_LOCALES = "duplicateLocales";
    public const UNRECOGNIZED_LOCALE = "unrecognizedLocale";
    public const UNKNOWN = "unknown";
    public const REMEDIATION_STRINGS_MISSING = "remediationStringsMissing";
}
