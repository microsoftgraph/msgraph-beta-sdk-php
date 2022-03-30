<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Enum;

class AdvancedBitLockerState extends Enum {
    public const SUCCESS = 'success';
    public const NO_USER_CONSENT = 'noUserConsent';
    public const OS_VOLUME_UNPROTECTED = 'osVolumeUnprotected';
    public const OS_VOLUME_TPM_REQUIRED = 'osVolumeTpmRequired';
    public const OS_VOLUME_TPM_ONLY_REQUIRED = 'osVolumeTpmOnlyRequired';
    public const OS_VOLUME_TPM_PIN_REQUIRED = 'osVolumeTpmPinRequired';
    public const OS_VOLUME_TPM_STARTUP_KEY_REQUIRED = 'osVolumeTpmStartupKeyRequired';
    public const OS_VOLUME_TPM_PIN_STARTUP_KEY_REQUIRED = 'osVolumeTpmPinStartupKeyRequired';
    public const OS_VOLUME_ENCRYPTION_METHOD_MISMATCH = 'osVolumeEncryptionMethodMismatch';
    public const RECOVERY_KEY_BACKUP_FAILED = 'recoveryKeyBackupFailed';
    public const FIXED_DRIVE_NOT_ENCRYPTED = 'fixedDriveNotEncrypted';
    public const FIXED_DRIVE_ENCRYPTION_METHOD_MISMATCH = 'fixedDriveEncryptionMethodMismatch';
    public const LOGGED_ON_USER_NON_ADMIN = 'loggedOnUserNonAdmin';
    public const WINDOWS_RECOVERY_ENVIRONMENT_NOT_CONFIGURED = 'windowsRecoveryEnvironmentNotConfigured';
    public const TPM_NOT_AVAILABLE = 'tpmNotAvailable';
    public const TPM_NOT_READY = 'tpmNotReady';
    public const NETWORK_ERROR = 'networkError';
}
