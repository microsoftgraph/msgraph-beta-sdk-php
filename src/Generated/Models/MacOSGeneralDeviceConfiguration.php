<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSGeneralDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $addingGameCenterFriendsBlocked Yes prevents users from adding friends to Game Center. Available for devices running macOS versions 10.13 and later.
    */
    private ?bool $addingGameCenterFriendsBlocked = null;
    
    /**
     * @var bool|null $airDropBlocked Indicates whether or not to allow AirDrop.
    */
    private ?bool $airDropBlocked = null;
    
    /**
     * @var bool|null $appleWatchBlockAutoUnlock Indicates whether or to block users from unlocking their Mac with Apple Watch.
    */
    private ?bool $appleWatchBlockAutoUnlock = null;
    
    /**
     * @var bool|null $cameraBlocked Indicates whether or not to block the user from accessing the camera of the device.
    */
    private ?bool $cameraBlocked = null;
    
    /**
     * @var bool|null $classroomAppBlockRemoteScreenObservation Indicates whether or not to allow remote screen observation by Classroom app. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    */
    private ?bool $classroomAppBlockRemoteScreenObservation = null;
    
    /**
     * @var bool|null $classroomAppForceUnpromptedScreenObservation Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    */
    private ?bool $classroomAppForceUnpromptedScreenObservation = null;
    
    /**
     * @var bool|null $classroomForceAutomaticallyJoinClasses Indicates whether or not to automatically give permission to the teacher's requests, without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    */
    private ?bool $classroomForceAutomaticallyJoinClasses = null;
    
    /**
     * @var bool|null $classroomForceRequestPermissionToLeaveClasses Indicates whether a student enrolled in an unmanaged course via Classroom will be required to request permission from the teacher when attempting to leave the course. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    */
    private ?bool $classroomForceRequestPermissionToLeaveClasses = null;
    
    /**
     * @var bool|null $classroomForceUnpromptedAppAndDeviceLock Indicates whether or not to allow the teacher to lock apps or the device without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
    */
    private ?bool $classroomForceUnpromptedAppAndDeviceLock = null;
    
    /**
     * @var AppListType|null $compliantAppListType Possible values of the compliance app list.
    */
    private ?AppListType $compliantAppListType = null;
    
    /**
     * @var array<AppListItem>|null $compliantAppsList List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
    */
    private ?array $compliantAppsList = null;
    
    /**
     * @var bool|null $contentCachingBlocked Indicates whether or not to allow content caching.
    */
    private ?bool $contentCachingBlocked = null;
    
    /**
     * @var bool|null $definitionLookupBlocked Indicates whether or not to block definition lookup.
    */
    private ?bool $definitionLookupBlocked = null;
    
    /**
     * @var array<string>|null $emailInDomainSuffixes An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
    */
    private ?array $emailInDomainSuffixes = null;
    
    /**
     * @var bool|null $eraseContentAndSettingsBlocked TRUE disables the reset option on supervised devices. FALSE enables the reset option on supervised devices. Available for devices running macOS versions 12.0 and later.
    */
    private ?bool $eraseContentAndSettingsBlocked = null;
    
    /**
     * @var bool|null $gameCenterBlocked Yes disables Game Center, and the Game Center icon is removed from the Home screen. Available for devices running macOS versions 10.13 and later.
    */
    private ?bool $gameCenterBlocked = null;
    
    /**
     * @var bool|null $iCloudBlockActivityContinuation Indicates whether or not to block the user from continuing work that they started on a MacOS device on another iOS or MacOS device (MacOS 10.15 or later).
    */
    private ?bool $iCloudBlockActivityContinuation = null;
    
    /**
     * @var bool|null $iCloudBlockAddressBook Indicates whether or not to block iCloud from syncing contacts.
    */
    private ?bool $iCloudBlockAddressBook = null;
    
    /**
     * @var bool|null $iCloudBlockBookmarks Indicates whether or not to block iCloud from syncing bookmarks.
    */
    private ?bool $iCloudBlockBookmarks = null;
    
    /**
     * @var bool|null $iCloudBlockCalendar Indicates whether or not to block iCloud from syncing calendars.
    */
    private ?bool $iCloudBlockCalendar = null;
    
    /**
     * @var bool|null $iCloudBlockDocumentSync Indicates whether or not to block iCloud document sync.
    */
    private ?bool $iCloudBlockDocumentSync = null;
    
    /**
     * @var bool|null $iCloudBlockMail Indicates whether or not to block iCloud from syncing mail.
    */
    private ?bool $iCloudBlockMail = null;
    
    /**
     * @var bool|null $iCloudBlockNotes Indicates whether or not to block iCloud from syncing notes.
    */
    private ?bool $iCloudBlockNotes = null;
    
    /**
     * @var bool|null $iCloudBlockPhotoLibrary Indicates whether or not to block iCloud Photo Library.
    */
    private ?bool $iCloudBlockPhotoLibrary = null;
    
    /**
     * @var bool|null $iCloudBlockReminders Indicates whether or not to block iCloud from syncing reminders.
    */
    private ?bool $iCloudBlockReminders = null;
    
    /**
     * @var bool|null $iCloudDesktopAndDocumentsBlocked When TRUE the synchronization of cloud desktop and documents is blocked. When FALSE, synchronization of the cloud desktop and documents are allowed. Available for devices running macOS 10.12.4 and later.
    */
    private ?bool $iCloudDesktopAndDocumentsBlocked = null;
    
    /**
     * @var bool|null $iCloudPrivateRelayBlocked iCloud private relay is an iCloud+ service that prevents networks and servers from monitoring a person's activity across the internet. By blocking iCloud private relay, Apple will not encrypt the traffic leaving the device. Available for devices running macOS 12 and later.
    */
    private ?bool $iCloudPrivateRelayBlocked = null;
    
    /**
     * @var bool|null $iTunesBlockFileSharing Indicates whether or not to block files from being transferred using iTunes.
    */
    private ?bool $iTunesBlockFileSharing = null;
    
    /**
     * @var bool|null $iTunesBlockMusicService Indicates whether or not to block Music service and revert Music app to classic mode.
    */
    private ?bool $iTunesBlockMusicService = null;
    
    /**
     * @var bool|null $keyboardBlockDictation Indicates whether or not to block the user from using dictation input.
    */
    private ?bool $keyboardBlockDictation = null;
    
    /**
     * @var bool|null $keychainBlockCloudSync Indicates whether or not iCloud keychain synchronization is blocked (macOS 10.12 and later).
    */
    private ?bool $keychainBlockCloudSync = null;
    
    /**
     * @var bool|null $multiplayerGamingBlocked TRUE prevents multiplayer gaming when using Game Center. FALSE allows multiplayer gaming when using Game Center. Available for devices running macOS versions 10.13 and later.
    */
    private ?bool $multiplayerGamingBlocked = null;
    
    /**
     * @var bool|null $passwordBlockAirDropSharing Indicates whether or not to block sharing passwords with the AirDrop passwords feature.
    */
    private ?bool $passwordBlockAirDropSharing = null;
    
    /**
     * @var bool|null $passwordBlockAutoFill Indicates whether or not to block the AutoFill Passwords feature.
    */
    private ?bool $passwordBlockAutoFill = null;
    
    /**
     * @var bool|null $passwordBlockFingerprintUnlock Indicates whether or not to block fingerprint unlock.
    */
    private ?bool $passwordBlockFingerprintUnlock = null;
    
    /**
     * @var bool|null $passwordBlockModification Indicates whether or not to allow passcode modification.
    */
    private ?bool $passwordBlockModification = null;
    
    /**
     * @var bool|null $passwordBlockProximityRequests Indicates whether or not to block requesting passwords from nearby devices.
    */
    private ?bool $passwordBlockProximityRequests = null;
    
    /**
     * @var bool|null $passwordBlockSimple Block simple passwords.
    */
    private ?bool $passwordBlockSimple = null;
    
    /**
     * @var int|null $passwordExpirationDays Number of days before the password expires.
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMaximumAttemptCount The number of allowed failed attempts to enter the passcode at the device's lock screen. Valid values 2 to 11
    */
    private ?int $passwordMaximumAttemptCount = null;
    
    /**
     * @var int|null $passwordMinimumCharacterSetCount Number of character sets a password must contain. Valid values 0 to 4
    */
    private ?int $passwordMinimumCharacterSetCount = null;
    
    /**
     * @var int|null $passwordMinimumLength Minimum length of passwords.
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeLock Minutes of inactivity required before a password is required.
    */
    private ?int $passwordMinutesOfInactivityBeforeLock = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeScreenTimeout Minutes of inactivity required before the screen times out.
    */
    private ?int $passwordMinutesOfInactivityBeforeScreenTimeout = null;
    
    /**
     * @var int|null $passwordMinutesUntilFailedLoginReset The number of minutes before the login is reset after the maximum number of unsuccessful login attempts is reached.
    */
    private ?int $passwordMinutesUntilFailedLoginReset = null;
    
    /**
     * @var int|null $passwordPreviousPasswordBlockCount Number of previous passwords to block.
    */
    private ?int $passwordPreviousPasswordBlockCount = null;
    
    /**
     * @var bool|null $passwordRequired Whether or not to require a password.
    */
    private ?bool $passwordRequired = null;
    
    /**
     * @var RequiredPasswordType|null $passwordRequiredType Possible values of required passwords.
    */
    private ?RequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var array<MacOSPrivacyAccessControlItem>|null $privacyAccessControls List of privacy preference policy controls. This collection can contain a maximum of 10000 elements.
    */
    private ?array $privacyAccessControls = null;
    
    /**
     * @var bool|null $safariBlockAutofill Indicates whether or not to block the user from using Auto fill in Safari.
    */
    private ?bool $safariBlockAutofill = null;
    
    /**
     * @var bool|null $screenCaptureBlocked Indicates whether or not to block the user from taking Screenshots.
    */
    private ?bool $screenCaptureBlocked = null;
    
    /**
     * @var int|null $softwareUpdateMajorOSDeferredInstallDelayInDays Specify the number of days (1-90) to delay visibility of major OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
    */
    private ?int $softwareUpdateMajorOSDeferredInstallDelayInDays = null;
    
    /**
     * @var int|null $softwareUpdateMinorOSDeferredInstallDelayInDays Specify the number of days (1-90) to delay visibility of minor OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
    */
    private ?int $softwareUpdateMinorOSDeferredInstallDelayInDays = null;
    
    /**
     * @var int|null $softwareUpdateNonOSDeferredInstallDelayInDays Specify the number of days (1-90) to delay visibility of non-OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
    */
    private ?int $softwareUpdateNonOSDeferredInstallDelayInDays = null;
    
    /**
     * @var int|null $softwareUpdatesEnforcedDelayInDays Sets how many days a software update will be delyed for a supervised device. Valid values 0 to 90
    */
    private ?int $softwareUpdatesEnforcedDelayInDays = null;
    
    /**
     * @var bool|null $spotlightBlockInternetResults Indicates whether or not to block Spotlight from returning any results from an Internet search.
    */
    private ?bool $spotlightBlockInternetResults = null;
    
    /**
     * @var int|null $touchIdTimeoutInHours Maximum hours after which the user must enter their password to unlock the device instead of using Touch ID. Available for devices running macOS 12 and later. Valid values 0 to 2147483647
    */
    private ?int $touchIdTimeoutInHours = null;
    
    /**
     * @var MacOSSoftwareUpdateDelayPolicy|null $updateDelayPolicy Determines whether to delay OS and/or app updates for macOS. Possible values are: none, delayOSUpdateVisibility, delayAppUpdateVisibility, unknownFutureValue, delayMajorOsUpdateVisibility.
    */
    private ?MacOSSoftwareUpdateDelayPolicy $updateDelayPolicy = null;
    
    /**
     * @var bool|null $wallpaperModificationBlocked TRUE prevents the wallpaper from being changed. FALSE allows the wallpaper to be changed. Available for devices running macOS versions 10.13 and later.
    */
    private ?bool $wallpaperModificationBlocked = null;
    
    /**
     * Instantiates a new MacOSGeneralDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSGeneralDeviceConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSGeneralDeviceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSGeneralDeviceConfiguration {
        return new MacOSGeneralDeviceConfiguration();
    }

    /**
     * Gets the addingGameCenterFriendsBlocked property value. Yes prevents users from adding friends to Game Center. Available for devices running macOS versions 10.13 and later.
     * @return bool|null
    */
    public function getAddingGameCenterFriendsBlocked(): ?bool {
        return $this->addingGameCenterFriendsBlocked;
    }

    /**
     * Gets the airDropBlocked property value. Indicates whether or not to allow AirDrop.
     * @return bool|null
    */
    public function getAirDropBlocked(): ?bool {
        return $this->airDropBlocked;
    }

    /**
     * Gets the appleWatchBlockAutoUnlock property value. Indicates whether or to block users from unlocking their Mac with Apple Watch.
     * @return bool|null
    */
    public function getAppleWatchBlockAutoUnlock(): ?bool {
        return $this->appleWatchBlockAutoUnlock;
    }

    /**
     * Gets the cameraBlocked property value. Indicates whether or not to block the user from accessing the camera of the device.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        return $this->cameraBlocked;
    }

    /**
     * Gets the classroomAppBlockRemoteScreenObservation property value. Indicates whether or not to allow remote screen observation by Classroom app. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @return bool|null
    */
    public function getClassroomAppBlockRemoteScreenObservation(): ?bool {
        return $this->classroomAppBlockRemoteScreenObservation;
    }

    /**
     * Gets the classroomAppForceUnpromptedScreenObservation property value. Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @return bool|null
    */
    public function getClassroomAppForceUnpromptedScreenObservation(): ?bool {
        return $this->classroomAppForceUnpromptedScreenObservation;
    }

    /**
     * Gets the classroomForceAutomaticallyJoinClasses property value. Indicates whether or not to automatically give permission to the teacher's requests, without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @return bool|null
    */
    public function getClassroomForceAutomaticallyJoinClasses(): ?bool {
        return $this->classroomForceAutomaticallyJoinClasses;
    }

    /**
     * Gets the classroomForceRequestPermissionToLeaveClasses property value. Indicates whether a student enrolled in an unmanaged course via Classroom will be required to request permission from the teacher when attempting to leave the course. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @return bool|null
    */
    public function getClassroomForceRequestPermissionToLeaveClasses(): ?bool {
        return $this->classroomForceRequestPermissionToLeaveClasses;
    }

    /**
     * Gets the classroomForceUnpromptedAppAndDeviceLock property value. Indicates whether or not to allow the teacher to lock apps or the device without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @return bool|null
    */
    public function getClassroomForceUnpromptedAppAndDeviceLock(): ?bool {
        return $this->classroomForceUnpromptedAppAndDeviceLock;
    }

    /**
     * Gets the compliantAppListType property value. Possible values of the compliance app list.
     * @return AppListType|null
    */
    public function getCompliantAppListType(): ?AppListType {
        return $this->compliantAppListType;
    }

    /**
     * Gets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @return array<AppListItem>|null
    */
    public function getCompliantAppsList(): ?array {
        return $this->compliantAppsList;
    }

    /**
     * Gets the contentCachingBlocked property value. Indicates whether or not to allow content caching.
     * @return bool|null
    */
    public function getContentCachingBlocked(): ?bool {
        return $this->contentCachingBlocked;
    }

    /**
     * Gets the definitionLookupBlocked property value. Indicates whether or not to block definition lookup.
     * @return bool|null
    */
    public function getDefinitionLookupBlocked(): ?bool {
        return $this->definitionLookupBlocked;
    }

    /**
     * Gets the emailInDomainSuffixes property value. An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     * @return array<string>|null
    */
    public function getEmailInDomainSuffixes(): ?array {
        return $this->emailInDomainSuffixes;
    }

    /**
     * Gets the eraseContentAndSettingsBlocked property value. TRUE disables the reset option on supervised devices. FALSE enables the reset option on supervised devices. Available for devices running macOS versions 12.0 and later.
     * @return bool|null
    */
    public function getEraseContentAndSettingsBlocked(): ?bool {
        return $this->eraseContentAndSettingsBlocked;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addingGameCenterFriendsBlocked' => function (ParseNode $n) use ($o) { $o->setAddingGameCenterFriendsBlocked($n->getBooleanValue()); },
            'airDropBlocked' => function (ParseNode $n) use ($o) { $o->setAirDropBlocked($n->getBooleanValue()); },
            'appleWatchBlockAutoUnlock' => function (ParseNode $n) use ($o) { $o->setAppleWatchBlockAutoUnlock($n->getBooleanValue()); },
            'cameraBlocked' => function (ParseNode $n) use ($o) { $o->setCameraBlocked($n->getBooleanValue()); },
            'classroomAppBlockRemoteScreenObservation' => function (ParseNode $n) use ($o) { $o->setClassroomAppBlockRemoteScreenObservation($n->getBooleanValue()); },
            'classroomAppForceUnpromptedScreenObservation' => function (ParseNode $n) use ($o) { $o->setClassroomAppForceUnpromptedScreenObservation($n->getBooleanValue()); },
            'classroomForceAutomaticallyJoinClasses' => function (ParseNode $n) use ($o) { $o->setClassroomForceAutomaticallyJoinClasses($n->getBooleanValue()); },
            'classroomForceRequestPermissionToLeaveClasses' => function (ParseNode $n) use ($o) { $o->setClassroomForceRequestPermissionToLeaveClasses($n->getBooleanValue()); },
            'classroomForceUnpromptedAppAndDeviceLock' => function (ParseNode $n) use ($o) { $o->setClassroomForceUnpromptedAppAndDeviceLock($n->getBooleanValue()); },
            'compliantAppListType' => function (ParseNode $n) use ($o) { $o->setCompliantAppListType($n->getEnumValue(AppListType::class)); },
            'compliantAppsList' => function (ParseNode $n) use ($o) { $o->setCompliantAppsList($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'contentCachingBlocked' => function (ParseNode $n) use ($o) { $o->setContentCachingBlocked($n->getBooleanValue()); },
            'definitionLookupBlocked' => function (ParseNode $n) use ($o) { $o->setDefinitionLookupBlocked($n->getBooleanValue()); },
            'emailInDomainSuffixes' => function (ParseNode $n) use ($o) { $o->setEmailInDomainSuffixes($n->getCollectionOfPrimitiveValues()); },
            'eraseContentAndSettingsBlocked' => function (ParseNode $n) use ($o) { $o->setEraseContentAndSettingsBlocked($n->getBooleanValue()); },
            'gameCenterBlocked' => function (ParseNode $n) use ($o) { $o->setGameCenterBlocked($n->getBooleanValue()); },
            'iCloudBlockActivityContinuation' => function (ParseNode $n) use ($o) { $o->setICloudBlockActivityContinuation($n->getBooleanValue()); },
            'iCloudBlockAddressBook' => function (ParseNode $n) use ($o) { $o->setICloudBlockAddressBook($n->getBooleanValue()); },
            'iCloudBlockBookmarks' => function (ParseNode $n) use ($o) { $o->setICloudBlockBookmarks($n->getBooleanValue()); },
            'iCloudBlockCalendar' => function (ParseNode $n) use ($o) { $o->setICloudBlockCalendar($n->getBooleanValue()); },
            'iCloudBlockDocumentSync' => function (ParseNode $n) use ($o) { $o->setICloudBlockDocumentSync($n->getBooleanValue()); },
            'iCloudBlockMail' => function (ParseNode $n) use ($o) { $o->setICloudBlockMail($n->getBooleanValue()); },
            'iCloudBlockNotes' => function (ParseNode $n) use ($o) { $o->setICloudBlockNotes($n->getBooleanValue()); },
            'iCloudBlockPhotoLibrary' => function (ParseNode $n) use ($o) { $o->setICloudBlockPhotoLibrary($n->getBooleanValue()); },
            'iCloudBlockReminders' => function (ParseNode $n) use ($o) { $o->setICloudBlockReminders($n->getBooleanValue()); },
            'iCloudDesktopAndDocumentsBlocked' => function (ParseNode $n) use ($o) { $o->setICloudDesktopAndDocumentsBlocked($n->getBooleanValue()); },
            'iCloudPrivateRelayBlocked' => function (ParseNode $n) use ($o) { $o->setICloudPrivateRelayBlocked($n->getBooleanValue()); },
            'iTunesBlockFileSharing' => function (ParseNode $n) use ($o) { $o->setITunesBlockFileSharing($n->getBooleanValue()); },
            'iTunesBlockMusicService' => function (ParseNode $n) use ($o) { $o->setITunesBlockMusicService($n->getBooleanValue()); },
            'keyboardBlockDictation' => function (ParseNode $n) use ($o) { $o->setKeyboardBlockDictation($n->getBooleanValue()); },
            'keychainBlockCloudSync' => function (ParseNode $n) use ($o) { $o->setKeychainBlockCloudSync($n->getBooleanValue()); },
            'multiplayerGamingBlocked' => function (ParseNode $n) use ($o) { $o->setMultiplayerGamingBlocked($n->getBooleanValue()); },
            'passwordBlockAirDropSharing' => function (ParseNode $n) use ($o) { $o->setPasswordBlockAirDropSharing($n->getBooleanValue()); },
            'passwordBlockAutoFill' => function (ParseNode $n) use ($o) { $o->setPasswordBlockAutoFill($n->getBooleanValue()); },
            'passwordBlockFingerprintUnlock' => function (ParseNode $n) use ($o) { $o->setPasswordBlockFingerprintUnlock($n->getBooleanValue()); },
            'passwordBlockModification' => function (ParseNode $n) use ($o) { $o->setPasswordBlockModification($n->getBooleanValue()); },
            'passwordBlockProximityRequests' => function (ParseNode $n) use ($o) { $o->setPasswordBlockProximityRequests($n->getBooleanValue()); },
            'passwordBlockSimple' => function (ParseNode $n) use ($o) { $o->setPasswordBlockSimple($n->getBooleanValue()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordMaximumAttemptCount' => function (ParseNode $n) use ($o) { $o->setPasswordMaximumAttemptCount($n->getIntegerValue()); },
            'passwordMinimumCharacterSetCount' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeLock' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeLock($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeScreenTimeout' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()); },
            'passwordMinutesUntilFailedLoginReset' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesUntilFailedLoginReset($n->getIntegerValue()); },
            'passwordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'passwordRequired' => function (ParseNode $n) use ($o) { $o->setPasswordRequired($n->getBooleanValue()); },
            'passwordRequiredType' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)); },
            'privacyAccessControls' => function (ParseNode $n) use ($o) { $o->setPrivacyAccessControls($n->getCollectionOfObjectValues(array(MacOSPrivacyAccessControlItem::class, 'createFromDiscriminatorValue'))); },
            'safariBlockAutofill' => function (ParseNode $n) use ($o) { $o->setSafariBlockAutofill($n->getBooleanValue()); },
            'screenCaptureBlocked' => function (ParseNode $n) use ($o) { $o->setScreenCaptureBlocked($n->getBooleanValue()); },
            'softwareUpdateMajorOSDeferredInstallDelayInDays' => function (ParseNode $n) use ($o) { $o->setSoftwareUpdateMajorOSDeferredInstallDelayInDays($n->getIntegerValue()); },
            'softwareUpdateMinorOSDeferredInstallDelayInDays' => function (ParseNode $n) use ($o) { $o->setSoftwareUpdateMinorOSDeferredInstallDelayInDays($n->getIntegerValue()); },
            'softwareUpdateNonOSDeferredInstallDelayInDays' => function (ParseNode $n) use ($o) { $o->setSoftwareUpdateNonOSDeferredInstallDelayInDays($n->getIntegerValue()); },
            'softwareUpdatesEnforcedDelayInDays' => function (ParseNode $n) use ($o) { $o->setSoftwareUpdatesEnforcedDelayInDays($n->getIntegerValue()); },
            'spotlightBlockInternetResults' => function (ParseNode $n) use ($o) { $o->setSpotlightBlockInternetResults($n->getBooleanValue()); },
            'touchIdTimeoutInHours' => function (ParseNode $n) use ($o) { $o->setTouchIdTimeoutInHours($n->getIntegerValue()); },
            'updateDelayPolicy' => function (ParseNode $n) use ($o) { $o->setUpdateDelayPolicy($n->getEnumValue(MacOSSoftwareUpdateDelayPolicy::class)); },
            'wallpaperModificationBlocked' => function (ParseNode $n) use ($o) { $o->setWallpaperModificationBlocked($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the gameCenterBlocked property value. Yes disables Game Center, and the Game Center icon is removed from the Home screen. Available for devices running macOS versions 10.13 and later.
     * @return bool|null
    */
    public function getGameCenterBlocked(): ?bool {
        return $this->gameCenterBlocked;
    }

    /**
     * Gets the iCloudBlockActivityContinuation property value. Indicates whether or not to block the user from continuing work that they started on a MacOS device on another iOS or MacOS device (MacOS 10.15 or later).
     * @return bool|null
    */
    public function getICloudBlockActivityContinuation(): ?bool {
        return $this->iCloudBlockActivityContinuation;
    }

    /**
     * Gets the iCloudBlockAddressBook property value. Indicates whether or not to block iCloud from syncing contacts.
     * @return bool|null
    */
    public function getICloudBlockAddressBook(): ?bool {
        return $this->iCloudBlockAddressBook;
    }

    /**
     * Gets the iCloudBlockBookmarks property value. Indicates whether or not to block iCloud from syncing bookmarks.
     * @return bool|null
    */
    public function getICloudBlockBookmarks(): ?bool {
        return $this->iCloudBlockBookmarks;
    }

    /**
     * Gets the iCloudBlockCalendar property value. Indicates whether or not to block iCloud from syncing calendars.
     * @return bool|null
    */
    public function getICloudBlockCalendar(): ?bool {
        return $this->iCloudBlockCalendar;
    }

    /**
     * Gets the iCloudBlockDocumentSync property value. Indicates whether or not to block iCloud document sync.
     * @return bool|null
    */
    public function getICloudBlockDocumentSync(): ?bool {
        return $this->iCloudBlockDocumentSync;
    }

    /**
     * Gets the iCloudBlockMail property value. Indicates whether or not to block iCloud from syncing mail.
     * @return bool|null
    */
    public function getICloudBlockMail(): ?bool {
        return $this->iCloudBlockMail;
    }

    /**
     * Gets the iCloudBlockNotes property value. Indicates whether or not to block iCloud from syncing notes.
     * @return bool|null
    */
    public function getICloudBlockNotes(): ?bool {
        return $this->iCloudBlockNotes;
    }

    /**
     * Gets the iCloudBlockPhotoLibrary property value. Indicates whether or not to block iCloud Photo Library.
     * @return bool|null
    */
    public function getICloudBlockPhotoLibrary(): ?bool {
        return $this->iCloudBlockPhotoLibrary;
    }

    /**
     * Gets the iCloudBlockReminders property value. Indicates whether or not to block iCloud from syncing reminders.
     * @return bool|null
    */
    public function getICloudBlockReminders(): ?bool {
        return $this->iCloudBlockReminders;
    }

    /**
     * Gets the iCloudDesktopAndDocumentsBlocked property value. When TRUE the synchronization of cloud desktop and documents is blocked. When FALSE, synchronization of the cloud desktop and documents are allowed. Available for devices running macOS 10.12.4 and later.
     * @return bool|null
    */
    public function getICloudDesktopAndDocumentsBlocked(): ?bool {
        return $this->iCloudDesktopAndDocumentsBlocked;
    }

    /**
     * Gets the iCloudPrivateRelayBlocked property value. iCloud private relay is an iCloud+ service that prevents networks and servers from monitoring a person's activity across the internet. By blocking iCloud private relay, Apple will not encrypt the traffic leaving the device. Available for devices running macOS 12 and later.
     * @return bool|null
    */
    public function getICloudPrivateRelayBlocked(): ?bool {
        return $this->iCloudPrivateRelayBlocked;
    }

    /**
     * Gets the iTunesBlockFileSharing property value. Indicates whether or not to block files from being transferred using iTunes.
     * @return bool|null
    */
    public function getITunesBlockFileSharing(): ?bool {
        return $this->iTunesBlockFileSharing;
    }

    /**
     * Gets the iTunesBlockMusicService property value. Indicates whether or not to block Music service and revert Music app to classic mode.
     * @return bool|null
    */
    public function getITunesBlockMusicService(): ?bool {
        return $this->iTunesBlockMusicService;
    }

    /**
     * Gets the keyboardBlockDictation property value. Indicates whether or not to block the user from using dictation input.
     * @return bool|null
    */
    public function getKeyboardBlockDictation(): ?bool {
        return $this->keyboardBlockDictation;
    }

    /**
     * Gets the keychainBlockCloudSync property value. Indicates whether or not iCloud keychain synchronization is blocked (macOS 10.12 and later).
     * @return bool|null
    */
    public function getKeychainBlockCloudSync(): ?bool {
        return $this->keychainBlockCloudSync;
    }

    /**
     * Gets the multiplayerGamingBlocked property value. TRUE prevents multiplayer gaming when using Game Center. FALSE allows multiplayer gaming when using Game Center. Available for devices running macOS versions 10.13 and later.
     * @return bool|null
    */
    public function getMultiplayerGamingBlocked(): ?bool {
        return $this->multiplayerGamingBlocked;
    }

    /**
     * Gets the passwordBlockAirDropSharing property value. Indicates whether or not to block sharing passwords with the AirDrop passwords feature.
     * @return bool|null
    */
    public function getPasswordBlockAirDropSharing(): ?bool {
        return $this->passwordBlockAirDropSharing;
    }

    /**
     * Gets the passwordBlockAutoFill property value. Indicates whether or not to block the AutoFill Passwords feature.
     * @return bool|null
    */
    public function getPasswordBlockAutoFill(): ?bool {
        return $this->passwordBlockAutoFill;
    }

    /**
     * Gets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     * @return bool|null
    */
    public function getPasswordBlockFingerprintUnlock(): ?bool {
        return $this->passwordBlockFingerprintUnlock;
    }

    /**
     * Gets the passwordBlockModification property value. Indicates whether or not to allow passcode modification.
     * @return bool|null
    */
    public function getPasswordBlockModification(): ?bool {
        return $this->passwordBlockModification;
    }

    /**
     * Gets the passwordBlockProximityRequests property value. Indicates whether or not to block requesting passwords from nearby devices.
     * @return bool|null
    */
    public function getPasswordBlockProximityRequests(): ?bool {
        return $this->passwordBlockProximityRequests;
    }

    /**
     * Gets the passwordBlockSimple property value. Block simple passwords.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        return $this->passwordBlockSimple;
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires.
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordMaximumAttemptCount property value. The number of allowed failed attempts to enter the passcode at the device's lock screen. Valid values 2 to 11
     * @return int|null
    */
    public function getPasswordMaximumAttemptCount(): ?int {
        return $this->passwordMaximumAttemptCount;
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. Number of character sets a password must contain. Valid values 0 to 4
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        return $this->passwordMinimumCharacterSetCount;
    }

    /**
     * Gets the passwordMinimumLength property value. Minimum length of passwords.
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->passwordMinimumLength;
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity required before a password is required.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeLock(): ?int {
        return $this->passwordMinutesOfInactivityBeforeLock;
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity required before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->passwordMinutesOfInactivityBeforeScreenTimeout;
    }

    /**
     * Gets the passwordMinutesUntilFailedLoginReset property value. The number of minutes before the login is reset after the maximum number of unsuccessful login attempts is reached.
     * @return int|null
    */
    public function getPasswordMinutesUntilFailedLoginReset(): ?int {
        return $this->passwordMinutesUntilFailedLoginReset;
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block.
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->passwordPreviousPasswordBlockCount;
    }

    /**
     * Gets the passwordRequired property value. Whether or not to require a password.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        return $this->passwordRequired;
    }

    /**
     * Gets the passwordRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the privacyAccessControls property value. List of privacy preference policy controls. This collection can contain a maximum of 10000 elements.
     * @return array<MacOSPrivacyAccessControlItem>|null
    */
    public function getPrivacyAccessControls(): ?array {
        return $this->privacyAccessControls;
    }

    /**
     * Gets the safariBlockAutofill property value. Indicates whether or not to block the user from using Auto fill in Safari.
     * @return bool|null
    */
    public function getSafariBlockAutofill(): ?bool {
        return $this->safariBlockAutofill;
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to block the user from taking Screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        return $this->screenCaptureBlocked;
    }

    /**
     * Gets the softwareUpdateMajorOSDeferredInstallDelayInDays property value. Specify the number of days (1-90) to delay visibility of major OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
     * @return int|null
    */
    public function getSoftwareUpdateMajorOSDeferredInstallDelayInDays(): ?int {
        return $this->softwareUpdateMajorOSDeferredInstallDelayInDays;
    }

    /**
     * Gets the softwareUpdateMinorOSDeferredInstallDelayInDays property value. Specify the number of days (1-90) to delay visibility of minor OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
     * @return int|null
    */
    public function getSoftwareUpdateMinorOSDeferredInstallDelayInDays(): ?int {
        return $this->softwareUpdateMinorOSDeferredInstallDelayInDays;
    }

    /**
     * Gets the softwareUpdateNonOSDeferredInstallDelayInDays property value. Specify the number of days (1-90) to delay visibility of non-OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
     * @return int|null
    */
    public function getSoftwareUpdateNonOSDeferredInstallDelayInDays(): ?int {
        return $this->softwareUpdateNonOSDeferredInstallDelayInDays;
    }

    /**
     * Gets the softwareUpdatesEnforcedDelayInDays property value. Sets how many days a software update will be delyed for a supervised device. Valid values 0 to 90
     * @return int|null
    */
    public function getSoftwareUpdatesEnforcedDelayInDays(): ?int {
        return $this->softwareUpdatesEnforcedDelayInDays;
    }

    /**
     * Gets the spotlightBlockInternetResults property value. Indicates whether or not to block Spotlight from returning any results from an Internet search.
     * @return bool|null
    */
    public function getSpotlightBlockInternetResults(): ?bool {
        return $this->spotlightBlockInternetResults;
    }

    /**
     * Gets the touchIdTimeoutInHours property value. Maximum hours after which the user must enter their password to unlock the device instead of using Touch ID. Available for devices running macOS 12 and later. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getTouchIdTimeoutInHours(): ?int {
        return $this->touchIdTimeoutInHours;
    }

    /**
     * Gets the updateDelayPolicy property value. Determines whether to delay OS and/or app updates for macOS. Possible values are: none, delayOSUpdateVisibility, delayAppUpdateVisibility, unknownFutureValue, delayMajorOsUpdateVisibility.
     * @return MacOSSoftwareUpdateDelayPolicy|null
    */
    public function getUpdateDelayPolicy(): ?MacOSSoftwareUpdateDelayPolicy {
        return $this->updateDelayPolicy;
    }

    /**
     * Gets the wallpaperModificationBlocked property value. TRUE prevents the wallpaper from being changed. FALSE allows the wallpaper to be changed. Available for devices running macOS versions 10.13 and later.
     * @return bool|null
    */
    public function getWallpaperModificationBlocked(): ?bool {
        return $this->wallpaperModificationBlocked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('addingGameCenterFriendsBlocked', $this->addingGameCenterFriendsBlocked);
        $writer->writeBooleanValue('airDropBlocked', $this->airDropBlocked);
        $writer->writeBooleanValue('appleWatchBlockAutoUnlock', $this->appleWatchBlockAutoUnlock);
        $writer->writeBooleanValue('cameraBlocked', $this->cameraBlocked);
        $writer->writeBooleanValue('classroomAppBlockRemoteScreenObservation', $this->classroomAppBlockRemoteScreenObservation);
        $writer->writeBooleanValue('classroomAppForceUnpromptedScreenObservation', $this->classroomAppForceUnpromptedScreenObservation);
        $writer->writeBooleanValue('classroomForceAutomaticallyJoinClasses', $this->classroomForceAutomaticallyJoinClasses);
        $writer->writeBooleanValue('classroomForceRequestPermissionToLeaveClasses', $this->classroomForceRequestPermissionToLeaveClasses);
        $writer->writeBooleanValue('classroomForceUnpromptedAppAndDeviceLock', $this->classroomForceUnpromptedAppAndDeviceLock);
        $writer->writeEnumValue('compliantAppListType', $this->compliantAppListType);
        $writer->writeCollectionOfObjectValues('compliantAppsList', $this->compliantAppsList);
        $writer->writeBooleanValue('contentCachingBlocked', $this->contentCachingBlocked);
        $writer->writeBooleanValue('definitionLookupBlocked', $this->definitionLookupBlocked);
        $writer->writeCollectionOfPrimitiveValues('emailInDomainSuffixes', $this->emailInDomainSuffixes);
        $writer->writeBooleanValue('eraseContentAndSettingsBlocked', $this->eraseContentAndSettingsBlocked);
        $writer->writeBooleanValue('gameCenterBlocked', $this->gameCenterBlocked);
        $writer->writeBooleanValue('iCloudBlockActivityContinuation', $this->iCloudBlockActivityContinuation);
        $writer->writeBooleanValue('iCloudBlockAddressBook', $this->iCloudBlockAddressBook);
        $writer->writeBooleanValue('iCloudBlockBookmarks', $this->iCloudBlockBookmarks);
        $writer->writeBooleanValue('iCloudBlockCalendar', $this->iCloudBlockCalendar);
        $writer->writeBooleanValue('iCloudBlockDocumentSync', $this->iCloudBlockDocumentSync);
        $writer->writeBooleanValue('iCloudBlockMail', $this->iCloudBlockMail);
        $writer->writeBooleanValue('iCloudBlockNotes', $this->iCloudBlockNotes);
        $writer->writeBooleanValue('iCloudBlockPhotoLibrary', $this->iCloudBlockPhotoLibrary);
        $writer->writeBooleanValue('iCloudBlockReminders', $this->iCloudBlockReminders);
        $writer->writeBooleanValue('iCloudDesktopAndDocumentsBlocked', $this->iCloudDesktopAndDocumentsBlocked);
        $writer->writeBooleanValue('iCloudPrivateRelayBlocked', $this->iCloudPrivateRelayBlocked);
        $writer->writeBooleanValue('iTunesBlockFileSharing', $this->iTunesBlockFileSharing);
        $writer->writeBooleanValue('iTunesBlockMusicService', $this->iTunesBlockMusicService);
        $writer->writeBooleanValue('keyboardBlockDictation', $this->keyboardBlockDictation);
        $writer->writeBooleanValue('keychainBlockCloudSync', $this->keychainBlockCloudSync);
        $writer->writeBooleanValue('multiplayerGamingBlocked', $this->multiplayerGamingBlocked);
        $writer->writeBooleanValue('passwordBlockAirDropSharing', $this->passwordBlockAirDropSharing);
        $writer->writeBooleanValue('passwordBlockAutoFill', $this->passwordBlockAutoFill);
        $writer->writeBooleanValue('passwordBlockFingerprintUnlock', $this->passwordBlockFingerprintUnlock);
        $writer->writeBooleanValue('passwordBlockModification', $this->passwordBlockModification);
        $writer->writeBooleanValue('passwordBlockProximityRequests', $this->passwordBlockProximityRequests);
        $writer->writeBooleanValue('passwordBlockSimple', $this->passwordBlockSimple);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMaximumAttemptCount', $this->passwordMaximumAttemptCount);
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->passwordMinimumCharacterSetCount);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeLock', $this->passwordMinutesOfInactivityBeforeLock);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->passwordMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeIntegerValue('passwordMinutesUntilFailedLoginReset', $this->passwordMinutesUntilFailedLoginReset);
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->passwordPreviousPasswordBlockCount);
        $writer->writeBooleanValue('passwordRequired', $this->passwordRequired);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeCollectionOfObjectValues('privacyAccessControls', $this->privacyAccessControls);
        $writer->writeBooleanValue('safariBlockAutofill', $this->safariBlockAutofill);
        $writer->writeBooleanValue('screenCaptureBlocked', $this->screenCaptureBlocked);
        $writer->writeIntegerValue('softwareUpdateMajorOSDeferredInstallDelayInDays', $this->softwareUpdateMajorOSDeferredInstallDelayInDays);
        $writer->writeIntegerValue('softwareUpdateMinorOSDeferredInstallDelayInDays', $this->softwareUpdateMinorOSDeferredInstallDelayInDays);
        $writer->writeIntegerValue('softwareUpdateNonOSDeferredInstallDelayInDays', $this->softwareUpdateNonOSDeferredInstallDelayInDays);
        $writer->writeIntegerValue('softwareUpdatesEnforcedDelayInDays', $this->softwareUpdatesEnforcedDelayInDays);
        $writer->writeBooleanValue('spotlightBlockInternetResults', $this->spotlightBlockInternetResults);
        $writer->writeIntegerValue('touchIdTimeoutInHours', $this->touchIdTimeoutInHours);
        $writer->writeEnumValue('updateDelayPolicy', $this->updateDelayPolicy);
        $writer->writeBooleanValue('wallpaperModificationBlocked', $this->wallpaperModificationBlocked);
    }

    /**
     * Sets the addingGameCenterFriendsBlocked property value. Yes prevents users from adding friends to Game Center. Available for devices running macOS versions 10.13 and later.
     *  @param bool|null $value Value to set for the addingGameCenterFriendsBlocked property.
    */
    public function setAddingGameCenterFriendsBlocked(?bool $value ): void {
        $this->addingGameCenterFriendsBlocked = $value;
    }

    /**
     * Sets the airDropBlocked property value. Indicates whether or not to allow AirDrop.
     *  @param bool|null $value Value to set for the airDropBlocked property.
    */
    public function setAirDropBlocked(?bool $value ): void {
        $this->airDropBlocked = $value;
    }

    /**
     * Sets the appleWatchBlockAutoUnlock property value. Indicates whether or to block users from unlocking their Mac with Apple Watch.
     *  @param bool|null $value Value to set for the appleWatchBlockAutoUnlock property.
    */
    public function setAppleWatchBlockAutoUnlock(?bool $value ): void {
        $this->appleWatchBlockAutoUnlock = $value;
    }

    /**
     * Sets the cameraBlocked property value. Indicates whether or not to block the user from accessing the camera of the device.
     *  @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value ): void {
        $this->cameraBlocked = $value;
    }

    /**
     * Sets the classroomAppBlockRemoteScreenObservation property value. Indicates whether or not to allow remote screen observation by Classroom app. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     *  @param bool|null $value Value to set for the classroomAppBlockRemoteScreenObservation property.
    */
    public function setClassroomAppBlockRemoteScreenObservation(?bool $value ): void {
        $this->classroomAppBlockRemoteScreenObservation = $value;
    }

    /**
     * Sets the classroomAppForceUnpromptedScreenObservation property value. Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     *  @param bool|null $value Value to set for the classroomAppForceUnpromptedScreenObservation property.
    */
    public function setClassroomAppForceUnpromptedScreenObservation(?bool $value ): void {
        $this->classroomAppForceUnpromptedScreenObservation = $value;
    }

    /**
     * Sets the classroomForceAutomaticallyJoinClasses property value. Indicates whether or not to automatically give permission to the teacher's requests, without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     *  @param bool|null $value Value to set for the classroomForceAutomaticallyJoinClasses property.
    */
    public function setClassroomForceAutomaticallyJoinClasses(?bool $value ): void {
        $this->classroomForceAutomaticallyJoinClasses = $value;
    }

    /**
     * Sets the classroomForceRequestPermissionToLeaveClasses property value. Indicates whether a student enrolled in an unmanaged course via Classroom will be required to request permission from the teacher when attempting to leave the course. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     *  @param bool|null $value Value to set for the classroomForceRequestPermissionToLeaveClasses property.
    */
    public function setClassroomForceRequestPermissionToLeaveClasses(?bool $value ): void {
        $this->classroomForceRequestPermissionToLeaveClasses = $value;
    }

    /**
     * Sets the classroomForceUnpromptedAppAndDeviceLock property value. Indicates whether or not to allow the teacher to lock apps or the device without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     *  @param bool|null $value Value to set for the classroomForceUnpromptedAppAndDeviceLock property.
    */
    public function setClassroomForceUnpromptedAppAndDeviceLock(?bool $value ): void {
        $this->classroomForceUnpromptedAppAndDeviceLock = $value;
    }

    /**
     * Sets the compliantAppListType property value. Possible values of the compliance app list.
     *  @param AppListType|null $value Value to set for the compliantAppListType property.
    */
    public function setCompliantAppListType(?AppListType $value ): void {
        $this->compliantAppListType = $value;
    }

    /**
     * Sets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     *  @param array<AppListItem>|null $value Value to set for the compliantAppsList property.
    */
    public function setCompliantAppsList(?array $value ): void {
        $this->compliantAppsList = $value;
    }

    /**
     * Sets the contentCachingBlocked property value. Indicates whether or not to allow content caching.
     *  @param bool|null $value Value to set for the contentCachingBlocked property.
    */
    public function setContentCachingBlocked(?bool $value ): void {
        $this->contentCachingBlocked = $value;
    }

    /**
     * Sets the definitionLookupBlocked property value. Indicates whether or not to block definition lookup.
     *  @param bool|null $value Value to set for the definitionLookupBlocked property.
    */
    public function setDefinitionLookupBlocked(?bool $value ): void {
        $this->definitionLookupBlocked = $value;
    }

    /**
     * Sets the emailInDomainSuffixes property value. An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     *  @param array<string>|null $value Value to set for the emailInDomainSuffixes property.
    */
    public function setEmailInDomainSuffixes(?array $value ): void {
        $this->emailInDomainSuffixes = $value;
    }

    /**
     * Sets the eraseContentAndSettingsBlocked property value. TRUE disables the reset option on supervised devices. FALSE enables the reset option on supervised devices. Available for devices running macOS versions 12.0 and later.
     *  @param bool|null $value Value to set for the eraseContentAndSettingsBlocked property.
    */
    public function setEraseContentAndSettingsBlocked(?bool $value ): void {
        $this->eraseContentAndSettingsBlocked = $value;
    }

    /**
     * Sets the gameCenterBlocked property value. Yes disables Game Center, and the Game Center icon is removed from the Home screen. Available for devices running macOS versions 10.13 and later.
     *  @param bool|null $value Value to set for the gameCenterBlocked property.
    */
    public function setGameCenterBlocked(?bool $value ): void {
        $this->gameCenterBlocked = $value;
    }

    /**
     * Sets the iCloudBlockActivityContinuation property value. Indicates whether or not to block the user from continuing work that they started on a MacOS device on another iOS or MacOS device (MacOS 10.15 or later).
     *  @param bool|null $value Value to set for the iCloudBlockActivityContinuation property.
    */
    public function setICloudBlockActivityContinuation(?bool $value ): void {
        $this->iCloudBlockActivityContinuation = $value;
    }

    /**
     * Sets the iCloudBlockAddressBook property value. Indicates whether or not to block iCloud from syncing contacts.
     *  @param bool|null $value Value to set for the iCloudBlockAddressBook property.
    */
    public function setICloudBlockAddressBook(?bool $value ): void {
        $this->iCloudBlockAddressBook = $value;
    }

    /**
     * Sets the iCloudBlockBookmarks property value. Indicates whether or not to block iCloud from syncing bookmarks.
     *  @param bool|null $value Value to set for the iCloudBlockBookmarks property.
    */
    public function setICloudBlockBookmarks(?bool $value ): void {
        $this->iCloudBlockBookmarks = $value;
    }

    /**
     * Sets the iCloudBlockCalendar property value. Indicates whether or not to block iCloud from syncing calendars.
     *  @param bool|null $value Value to set for the iCloudBlockCalendar property.
    */
    public function setICloudBlockCalendar(?bool $value ): void {
        $this->iCloudBlockCalendar = $value;
    }

    /**
     * Sets the iCloudBlockDocumentSync property value. Indicates whether or not to block iCloud document sync.
     *  @param bool|null $value Value to set for the iCloudBlockDocumentSync property.
    */
    public function setICloudBlockDocumentSync(?bool $value ): void {
        $this->iCloudBlockDocumentSync = $value;
    }

    /**
     * Sets the iCloudBlockMail property value. Indicates whether or not to block iCloud from syncing mail.
     *  @param bool|null $value Value to set for the iCloudBlockMail property.
    */
    public function setICloudBlockMail(?bool $value ): void {
        $this->iCloudBlockMail = $value;
    }

    /**
     * Sets the iCloudBlockNotes property value. Indicates whether or not to block iCloud from syncing notes.
     *  @param bool|null $value Value to set for the iCloudBlockNotes property.
    */
    public function setICloudBlockNotes(?bool $value ): void {
        $this->iCloudBlockNotes = $value;
    }

    /**
     * Sets the iCloudBlockPhotoLibrary property value. Indicates whether or not to block iCloud Photo Library.
     *  @param bool|null $value Value to set for the iCloudBlockPhotoLibrary property.
    */
    public function setICloudBlockPhotoLibrary(?bool $value ): void {
        $this->iCloudBlockPhotoLibrary = $value;
    }

    /**
     * Sets the iCloudBlockReminders property value. Indicates whether or not to block iCloud from syncing reminders.
     *  @param bool|null $value Value to set for the iCloudBlockReminders property.
    */
    public function setICloudBlockReminders(?bool $value ): void {
        $this->iCloudBlockReminders = $value;
    }

    /**
     * Sets the iCloudDesktopAndDocumentsBlocked property value. When TRUE the synchronization of cloud desktop and documents is blocked. When FALSE, synchronization of the cloud desktop and documents are allowed. Available for devices running macOS 10.12.4 and later.
     *  @param bool|null $value Value to set for the iCloudDesktopAndDocumentsBlocked property.
    */
    public function setICloudDesktopAndDocumentsBlocked(?bool $value ): void {
        $this->iCloudDesktopAndDocumentsBlocked = $value;
    }

    /**
     * Sets the iCloudPrivateRelayBlocked property value. iCloud private relay is an iCloud+ service that prevents networks and servers from monitoring a person's activity across the internet. By blocking iCloud private relay, Apple will not encrypt the traffic leaving the device. Available for devices running macOS 12 and later.
     *  @param bool|null $value Value to set for the iCloudPrivateRelayBlocked property.
    */
    public function setICloudPrivateRelayBlocked(?bool $value ): void {
        $this->iCloudPrivateRelayBlocked = $value;
    }

    /**
     * Sets the iTunesBlockFileSharing property value. Indicates whether or not to block files from being transferred using iTunes.
     *  @param bool|null $value Value to set for the iTunesBlockFileSharing property.
    */
    public function setITunesBlockFileSharing(?bool $value ): void {
        $this->iTunesBlockFileSharing = $value;
    }

    /**
     * Sets the iTunesBlockMusicService property value. Indicates whether or not to block Music service and revert Music app to classic mode.
     *  @param bool|null $value Value to set for the iTunesBlockMusicService property.
    */
    public function setITunesBlockMusicService(?bool $value ): void {
        $this->iTunesBlockMusicService = $value;
    }

    /**
     * Sets the keyboardBlockDictation property value. Indicates whether or not to block the user from using dictation input.
     *  @param bool|null $value Value to set for the keyboardBlockDictation property.
    */
    public function setKeyboardBlockDictation(?bool $value ): void {
        $this->keyboardBlockDictation = $value;
    }

    /**
     * Sets the keychainBlockCloudSync property value. Indicates whether or not iCloud keychain synchronization is blocked (macOS 10.12 and later).
     *  @param bool|null $value Value to set for the keychainBlockCloudSync property.
    */
    public function setKeychainBlockCloudSync(?bool $value ): void {
        $this->keychainBlockCloudSync = $value;
    }

    /**
     * Sets the multiplayerGamingBlocked property value. TRUE prevents multiplayer gaming when using Game Center. FALSE allows multiplayer gaming when using Game Center. Available for devices running macOS versions 10.13 and later.
     *  @param bool|null $value Value to set for the multiplayerGamingBlocked property.
    */
    public function setMultiplayerGamingBlocked(?bool $value ): void {
        $this->multiplayerGamingBlocked = $value;
    }

    /**
     * Sets the passwordBlockAirDropSharing property value. Indicates whether or not to block sharing passwords with the AirDrop passwords feature.
     *  @param bool|null $value Value to set for the passwordBlockAirDropSharing property.
    */
    public function setPasswordBlockAirDropSharing(?bool $value ): void {
        $this->passwordBlockAirDropSharing = $value;
    }

    /**
     * Sets the passwordBlockAutoFill property value. Indicates whether or not to block the AutoFill Passwords feature.
     *  @param bool|null $value Value to set for the passwordBlockAutoFill property.
    */
    public function setPasswordBlockAutoFill(?bool $value ): void {
        $this->passwordBlockAutoFill = $value;
    }

    /**
     * Sets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     *  @param bool|null $value Value to set for the passwordBlockFingerprintUnlock property.
    */
    public function setPasswordBlockFingerprintUnlock(?bool $value ): void {
        $this->passwordBlockFingerprintUnlock = $value;
    }

    /**
     * Sets the passwordBlockModification property value. Indicates whether or not to allow passcode modification.
     *  @param bool|null $value Value to set for the passwordBlockModification property.
    */
    public function setPasswordBlockModification(?bool $value ): void {
        $this->passwordBlockModification = $value;
    }

    /**
     * Sets the passwordBlockProximityRequests property value. Indicates whether or not to block requesting passwords from nearby devices.
     *  @param bool|null $value Value to set for the passwordBlockProximityRequests property.
    */
    public function setPasswordBlockProximityRequests(?bool $value ): void {
        $this->passwordBlockProximityRequests = $value;
    }

    /**
     * Sets the passwordBlockSimple property value. Block simple passwords.
     *  @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value ): void {
        $this->passwordBlockSimple = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires.
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordMaximumAttemptCount property value. The number of allowed failed attempts to enter the passcode at the device's lock screen. Valid values 2 to 11
     *  @param int|null $value Value to set for the passwordMaximumAttemptCount property.
    */
    public function setPasswordMaximumAttemptCount(?int $value ): void {
        $this->passwordMaximumAttemptCount = $value;
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. Number of character sets a password must contain. Valid values 0 to 4
     *  @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value ): void {
        $this->passwordMinimumCharacterSetCount = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum length of passwords.
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value ): void {
        $this->passwordMinimumLength = $value;
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity required before a password is required.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeLock property.
    */
    public function setPasswordMinutesOfInactivityBeforeLock(?int $value ): void {
        $this->passwordMinutesOfInactivityBeforeLock = $value;
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity required before the screen times out.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value ): void {
        $this->passwordMinutesOfInactivityBeforeScreenTimeout = $value;
    }

    /**
     * Sets the passwordMinutesUntilFailedLoginReset property value. The number of minutes before the login is reset after the maximum number of unsuccessful login attempts is reached.
     *  @param int|null $value Value to set for the passwordMinutesUntilFailedLoginReset property.
    */
    public function setPasswordMinutesUntilFailedLoginReset(?int $value ): void {
        $this->passwordMinutesUntilFailedLoginReset = $value;
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block.
     *  @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value ): void {
        $this->passwordPreviousPasswordBlockCount = $value;
    }

    /**
     * Sets the passwordRequired property value. Whether or not to require a password.
     *  @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value ): void {
        $this->passwordRequired = $value;
    }

    /**
     * Sets the passwordRequiredType property value. Possible values of required passwords.
     *  @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the privacyAccessControls property value. List of privacy preference policy controls. This collection can contain a maximum of 10000 elements.
     *  @param array<MacOSPrivacyAccessControlItem>|null $value Value to set for the privacyAccessControls property.
    */
    public function setPrivacyAccessControls(?array $value ): void {
        $this->privacyAccessControls = $value;
    }

    /**
     * Sets the safariBlockAutofill property value. Indicates whether or not to block the user from using Auto fill in Safari.
     *  @param bool|null $value Value to set for the safariBlockAutofill property.
    */
    public function setSafariBlockAutofill(?bool $value ): void {
        $this->safariBlockAutofill = $value;
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to block the user from taking Screenshots.
     *  @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value ): void {
        $this->screenCaptureBlocked = $value;
    }

    /**
     * Sets the softwareUpdateMajorOSDeferredInstallDelayInDays property value. Specify the number of days (1-90) to delay visibility of major OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
     *  @param int|null $value Value to set for the softwareUpdateMajorOSDeferredInstallDelayInDays property.
    */
    public function setSoftwareUpdateMajorOSDeferredInstallDelayInDays(?int $value ): void {
        $this->softwareUpdateMajorOSDeferredInstallDelayInDays = $value;
    }

    /**
     * Sets the softwareUpdateMinorOSDeferredInstallDelayInDays property value. Specify the number of days (1-90) to delay visibility of minor OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
     *  @param int|null $value Value to set for the softwareUpdateMinorOSDeferredInstallDelayInDays property.
    */
    public function setSoftwareUpdateMinorOSDeferredInstallDelayInDays(?int $value ): void {
        $this->softwareUpdateMinorOSDeferredInstallDelayInDays = $value;
    }

    /**
     * Sets the softwareUpdateNonOSDeferredInstallDelayInDays property value. Specify the number of days (1-90) to delay visibility of non-OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
     *  @param int|null $value Value to set for the softwareUpdateNonOSDeferredInstallDelayInDays property.
    */
    public function setSoftwareUpdateNonOSDeferredInstallDelayInDays(?int $value ): void {
        $this->softwareUpdateNonOSDeferredInstallDelayInDays = $value;
    }

    /**
     * Sets the softwareUpdatesEnforcedDelayInDays property value. Sets how many days a software update will be delyed for a supervised device. Valid values 0 to 90
     *  @param int|null $value Value to set for the softwareUpdatesEnforcedDelayInDays property.
    */
    public function setSoftwareUpdatesEnforcedDelayInDays(?int $value ): void {
        $this->softwareUpdatesEnforcedDelayInDays = $value;
    }

    /**
     * Sets the spotlightBlockInternetResults property value. Indicates whether or not to block Spotlight from returning any results from an Internet search.
     *  @param bool|null $value Value to set for the spotlightBlockInternetResults property.
    */
    public function setSpotlightBlockInternetResults(?bool $value ): void {
        $this->spotlightBlockInternetResults = $value;
    }

    /**
     * Sets the touchIdTimeoutInHours property value. Maximum hours after which the user must enter their password to unlock the device instead of using Touch ID. Available for devices running macOS 12 and later. Valid values 0 to 2147483647
     *  @param int|null $value Value to set for the touchIdTimeoutInHours property.
    */
    public function setTouchIdTimeoutInHours(?int $value ): void {
        $this->touchIdTimeoutInHours = $value;
    }

    /**
     * Sets the updateDelayPolicy property value. Determines whether to delay OS and/or app updates for macOS. Possible values are: none, delayOSUpdateVisibility, delayAppUpdateVisibility, unknownFutureValue, delayMajorOsUpdateVisibility.
     *  @param MacOSSoftwareUpdateDelayPolicy|null $value Value to set for the updateDelayPolicy property.
    */
    public function setUpdateDelayPolicy(?MacOSSoftwareUpdateDelayPolicy $value ): void {
        $this->updateDelayPolicy = $value;
    }

    /**
     * Sets the wallpaperModificationBlocked property value. TRUE prevents the wallpaper from being changed. FALSE allows the wallpaper to be changed. Available for devices running macOS versions 10.13 and later.
     *  @param bool|null $value Value to set for the wallpaperModificationBlocked property.
    */
    public function setWallpaperModificationBlocked(?bool $value ): void {
        $this->wallpaperModificationBlocked = $value;
    }

}
