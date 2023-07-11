<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This topic provides descriptions of the declared methods, properties and relationships exposed by the macOSGeneralDeviceConfiguration resource.
*/
class MacOSGeneralDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new macOSGeneralDeviceConfiguration and sets the default values.
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
     * Gets the activationLockWhenSupervisedAllowed property value. When TRUE, activation lock is allowed when the devices is in the supervised mode. When FALSE, activation lock is not allowed. Default is false.
     * @return bool|null
    */
    public function getActivationLockWhenSupervisedAllowed(): ?bool {
        $val = $this->getBackingStore()->get('activationLockWhenSupervisedAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activationLockWhenSupervisedAllowed'");
    }

    /**
     * Gets the addingGameCenterFriendsBlocked property value. Yes prevents users from adding friends to Game Center. Available for devices running macOS versions 10.13 and later.
     * @return bool|null
    */
    public function getAddingGameCenterFriendsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('addingGameCenterFriendsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addingGameCenterFriendsBlocked'");
    }

    /**
     * Gets the airDropBlocked property value. Indicates whether or not to allow AirDrop.
     * @return bool|null
    */
    public function getAirDropBlocked(): ?bool {
        $val = $this->getBackingStore()->get('airDropBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'airDropBlocked'");
    }

    /**
     * Gets the appleWatchBlockAutoUnlock property value. Indicates whether or to block users from unlocking their Mac with Apple Watch.
     * @return bool|null
    */
    public function getAppleWatchBlockAutoUnlock(): ?bool {
        $val = $this->getBackingStore()->get('appleWatchBlockAutoUnlock');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appleWatchBlockAutoUnlock'");
    }

    /**
     * Gets the cameraBlocked property value. Indicates whether or not to block the user from accessing the camera of the device.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        $val = $this->getBackingStore()->get('cameraBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cameraBlocked'");
    }

    /**
     * Gets the classroomAppBlockRemoteScreenObservation property value. Indicates whether or not to allow remote screen observation by Classroom app. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @return bool|null
    */
    public function getClassroomAppBlockRemoteScreenObservation(): ?bool {
        $val = $this->getBackingStore()->get('classroomAppBlockRemoteScreenObservation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classroomAppBlockRemoteScreenObservation'");
    }

    /**
     * Gets the classroomAppForceUnpromptedScreenObservation property value. Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @return bool|null
    */
    public function getClassroomAppForceUnpromptedScreenObservation(): ?bool {
        $val = $this->getBackingStore()->get('classroomAppForceUnpromptedScreenObservation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classroomAppForceUnpromptedScreenObservation'");
    }

    /**
     * Gets the classroomForceAutomaticallyJoinClasses property value. Indicates whether or not to automatically give permission to the teacher's requests, without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @return bool|null
    */
    public function getClassroomForceAutomaticallyJoinClasses(): ?bool {
        $val = $this->getBackingStore()->get('classroomForceAutomaticallyJoinClasses');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classroomForceAutomaticallyJoinClasses'");
    }

    /**
     * Gets the classroomForceRequestPermissionToLeaveClasses property value. Indicates whether a student enrolled in an unmanaged course via Classroom will be required to request permission from the teacher when attempting to leave the course. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @return bool|null
    */
    public function getClassroomForceRequestPermissionToLeaveClasses(): ?bool {
        $val = $this->getBackingStore()->get('classroomForceRequestPermissionToLeaveClasses');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classroomForceRequestPermissionToLeaveClasses'");
    }

    /**
     * Gets the classroomForceUnpromptedAppAndDeviceLock property value. Indicates whether or not to allow the teacher to lock apps or the device without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @return bool|null
    */
    public function getClassroomForceUnpromptedAppAndDeviceLock(): ?bool {
        $val = $this->getBackingStore()->get('classroomForceUnpromptedAppAndDeviceLock');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classroomForceUnpromptedAppAndDeviceLock'");
    }

    /**
     * Gets the compliantAppListType property value. Possible values of the compliance app list.
     * @return AppListType|null
    */
    public function getCompliantAppListType(): ?AppListType {
        $val = $this->getBackingStore()->get('compliantAppListType');
        if (is_null($val) || $val instanceof AppListType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantAppListType'");
    }

    /**
     * Gets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @return array<AppListItem>|null
    */
    public function getCompliantAppsList(): ?array {
        $val = $this->getBackingStore()->get('compliantAppsList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppListItem::class);
            /** @var array<AppListItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantAppsList'");
    }

    /**
     * Gets the contentCachingBlocked property value. Indicates whether or not to allow content caching.
     * @return bool|null
    */
    public function getContentCachingBlocked(): ?bool {
        $val = $this->getBackingStore()->get('contentCachingBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentCachingBlocked'");
    }

    /**
     * Gets the definitionLookupBlocked property value. Indicates whether or not to block definition lookup.
     * @return bool|null
    */
    public function getDefinitionLookupBlocked(): ?bool {
        $val = $this->getBackingStore()->get('definitionLookupBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'definitionLookupBlocked'");
    }

    /**
     * Gets the emailInDomainSuffixes property value. An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     * @return array<string>|null
    */
    public function getEmailInDomainSuffixes(): ?array {
        $val = $this->getBackingStore()->get('emailInDomainSuffixes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailInDomainSuffixes'");
    }

    /**
     * Gets the eraseContentAndSettingsBlocked property value. TRUE disables the reset option on supervised devices. FALSE enables the reset option on supervised devices. Available for devices running macOS versions 12.0 and later.
     * @return bool|null
    */
    public function getEraseContentAndSettingsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('eraseContentAndSettingsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eraseContentAndSettingsBlocked'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activationLockWhenSupervisedAllowed' => fn(ParseNode $n) => $o->setActivationLockWhenSupervisedAllowed($n->getBooleanValue()),
            'addingGameCenterFriendsBlocked' => fn(ParseNode $n) => $o->setAddingGameCenterFriendsBlocked($n->getBooleanValue()),
            'airDropBlocked' => fn(ParseNode $n) => $o->setAirDropBlocked($n->getBooleanValue()),
            'appleWatchBlockAutoUnlock' => fn(ParseNode $n) => $o->setAppleWatchBlockAutoUnlock($n->getBooleanValue()),
            'cameraBlocked' => fn(ParseNode $n) => $o->setCameraBlocked($n->getBooleanValue()),
            'classroomAppBlockRemoteScreenObservation' => fn(ParseNode $n) => $o->setClassroomAppBlockRemoteScreenObservation($n->getBooleanValue()),
            'classroomAppForceUnpromptedScreenObservation' => fn(ParseNode $n) => $o->setClassroomAppForceUnpromptedScreenObservation($n->getBooleanValue()),
            'classroomForceAutomaticallyJoinClasses' => fn(ParseNode $n) => $o->setClassroomForceAutomaticallyJoinClasses($n->getBooleanValue()),
            'classroomForceRequestPermissionToLeaveClasses' => fn(ParseNode $n) => $o->setClassroomForceRequestPermissionToLeaveClasses($n->getBooleanValue()),
            'classroomForceUnpromptedAppAndDeviceLock' => fn(ParseNode $n) => $o->setClassroomForceUnpromptedAppAndDeviceLock($n->getBooleanValue()),
            'compliantAppListType' => fn(ParseNode $n) => $o->setCompliantAppListType($n->getEnumValue(AppListType::class)),
            'compliantAppsList' => fn(ParseNode $n) => $o->setCompliantAppsList($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'contentCachingBlocked' => fn(ParseNode $n) => $o->setContentCachingBlocked($n->getBooleanValue()),
            'definitionLookupBlocked' => fn(ParseNode $n) => $o->setDefinitionLookupBlocked($n->getBooleanValue()),
            'emailInDomainSuffixes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setEmailInDomainSuffixes($val);
            },
            'eraseContentAndSettingsBlocked' => fn(ParseNode $n) => $o->setEraseContentAndSettingsBlocked($n->getBooleanValue()),
            'gameCenterBlocked' => fn(ParseNode $n) => $o->setGameCenterBlocked($n->getBooleanValue()),
            'iCloudBlockActivityContinuation' => fn(ParseNode $n) => $o->setICloudBlockActivityContinuation($n->getBooleanValue()),
            'iCloudBlockAddressBook' => fn(ParseNode $n) => $o->setICloudBlockAddressBook($n->getBooleanValue()),
            'iCloudBlockBookmarks' => fn(ParseNode $n) => $o->setICloudBlockBookmarks($n->getBooleanValue()),
            'iCloudBlockCalendar' => fn(ParseNode $n) => $o->setICloudBlockCalendar($n->getBooleanValue()),
            'iCloudBlockDocumentSync' => fn(ParseNode $n) => $o->setICloudBlockDocumentSync($n->getBooleanValue()),
            'iCloudBlockMail' => fn(ParseNode $n) => $o->setICloudBlockMail($n->getBooleanValue()),
            'iCloudBlockNotes' => fn(ParseNode $n) => $o->setICloudBlockNotes($n->getBooleanValue()),
            'iCloudBlockPhotoLibrary' => fn(ParseNode $n) => $o->setICloudBlockPhotoLibrary($n->getBooleanValue()),
            'iCloudBlockReminders' => fn(ParseNode $n) => $o->setICloudBlockReminders($n->getBooleanValue()),
            'iCloudDesktopAndDocumentsBlocked' => fn(ParseNode $n) => $o->setICloudDesktopAndDocumentsBlocked($n->getBooleanValue()),
            'iCloudPrivateRelayBlocked' => fn(ParseNode $n) => $o->setICloudPrivateRelayBlocked($n->getBooleanValue()),
            'iTunesBlockFileSharing' => fn(ParseNode $n) => $o->setITunesBlockFileSharing($n->getBooleanValue()),
            'iTunesBlockMusicService' => fn(ParseNode $n) => $o->setITunesBlockMusicService($n->getBooleanValue()),
            'keyboardBlockDictation' => fn(ParseNode $n) => $o->setKeyboardBlockDictation($n->getBooleanValue()),
            'keychainBlockCloudSync' => fn(ParseNode $n) => $o->setKeychainBlockCloudSync($n->getBooleanValue()),
            'multiplayerGamingBlocked' => fn(ParseNode $n) => $o->setMultiplayerGamingBlocked($n->getBooleanValue()),
            'passwordBlockAirDropSharing' => fn(ParseNode $n) => $o->setPasswordBlockAirDropSharing($n->getBooleanValue()),
            'passwordBlockAutoFill' => fn(ParseNode $n) => $o->setPasswordBlockAutoFill($n->getBooleanValue()),
            'passwordBlockFingerprintUnlock' => fn(ParseNode $n) => $o->setPasswordBlockFingerprintUnlock($n->getBooleanValue()),
            'passwordBlockModification' => fn(ParseNode $n) => $o->setPasswordBlockModification($n->getBooleanValue()),
            'passwordBlockProximityRequests' => fn(ParseNode $n) => $o->setPasswordBlockProximityRequests($n->getBooleanValue()),
            'passwordBlockSimple' => fn(ParseNode $n) => $o->setPasswordBlockSimple($n->getBooleanValue()),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordMaximumAttemptCount' => fn(ParseNode $n) => $o->setPasswordMaximumAttemptCount($n->getIntegerValue()),
            'passwordMinimumCharacterSetCount' => fn(ParseNode $n) => $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeLock' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeLock($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeScreenTimeout' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()),
            'passwordMinutesUntilFailedLoginReset' => fn(ParseNode $n) => $o->setPasswordMinutesUntilFailedLoginReset($n->getIntegerValue()),
            'passwordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'passwordRequired' => fn(ParseNode $n) => $o->setPasswordRequired($n->getBooleanValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)),
            'privacyAccessControls' => fn(ParseNode $n) => $o->setPrivacyAccessControls($n->getCollectionOfObjectValues([MacOSPrivacyAccessControlItem::class, 'createFromDiscriminatorValue'])),
            'safariBlockAutofill' => fn(ParseNode $n) => $o->setSafariBlockAutofill($n->getBooleanValue()),
            'screenCaptureBlocked' => fn(ParseNode $n) => $o->setScreenCaptureBlocked($n->getBooleanValue()),
            'softwareUpdateMajorOSDeferredInstallDelayInDays' => fn(ParseNode $n) => $o->setSoftwareUpdateMajorOSDeferredInstallDelayInDays($n->getIntegerValue()),
            'softwareUpdateMinorOSDeferredInstallDelayInDays' => fn(ParseNode $n) => $o->setSoftwareUpdateMinorOSDeferredInstallDelayInDays($n->getIntegerValue()),
            'softwareUpdateNonOSDeferredInstallDelayInDays' => fn(ParseNode $n) => $o->setSoftwareUpdateNonOSDeferredInstallDelayInDays($n->getIntegerValue()),
            'softwareUpdatesEnforcedDelayInDays' => fn(ParseNode $n) => $o->setSoftwareUpdatesEnforcedDelayInDays($n->getIntegerValue()),
            'spotlightBlockInternetResults' => fn(ParseNode $n) => $o->setSpotlightBlockInternetResults($n->getBooleanValue()),
            'touchIdTimeoutInHours' => fn(ParseNode $n) => $o->setTouchIdTimeoutInHours($n->getIntegerValue()),
            'updateDelayPolicy' => fn(ParseNode $n) => $o->setUpdateDelayPolicy($n->getEnumValue(MacOSSoftwareUpdateDelayPolicy::class)),
            'wallpaperModificationBlocked' => fn(ParseNode $n) => $o->setWallpaperModificationBlocked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the gameCenterBlocked property value. Yes disables Game Center, and the Game Center icon is removed from the Home screen. Available for devices running macOS versions 10.13 and later.
     * @return bool|null
    */
    public function getGameCenterBlocked(): ?bool {
        $val = $this->getBackingStore()->get('gameCenterBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gameCenterBlocked'");
    }

    /**
     * Gets the iCloudBlockActivityContinuation property value. Indicates whether or not to block the user from continuing work that they started on a MacOS device on another iOS or MacOS device (MacOS 10.15 or later).
     * @return bool|null
    */
    public function getICloudBlockActivityContinuation(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockActivityContinuation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockActivityContinuation'");
    }

    /**
     * Gets the iCloudBlockAddressBook property value. Indicates whether or not to block iCloud from syncing contacts.
     * @return bool|null
    */
    public function getICloudBlockAddressBook(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockAddressBook');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockAddressBook'");
    }

    /**
     * Gets the iCloudBlockBookmarks property value. Indicates whether or not to block iCloud from syncing bookmarks.
     * @return bool|null
    */
    public function getICloudBlockBookmarks(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockBookmarks');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockBookmarks'");
    }

    /**
     * Gets the iCloudBlockCalendar property value. Indicates whether or not to block iCloud from syncing calendars.
     * @return bool|null
    */
    public function getICloudBlockCalendar(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockCalendar');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockCalendar'");
    }

    /**
     * Gets the iCloudBlockDocumentSync property value. Indicates whether or not to block iCloud document sync.
     * @return bool|null
    */
    public function getICloudBlockDocumentSync(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockDocumentSync');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockDocumentSync'");
    }

    /**
     * Gets the iCloudBlockMail property value. Indicates whether or not to block iCloud from syncing mail.
     * @return bool|null
    */
    public function getICloudBlockMail(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockMail');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockMail'");
    }

    /**
     * Gets the iCloudBlockNotes property value. Indicates whether or not to block iCloud from syncing notes.
     * @return bool|null
    */
    public function getICloudBlockNotes(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockNotes');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockNotes'");
    }

    /**
     * Gets the iCloudBlockPhotoLibrary property value. Indicates whether or not to block iCloud Photo Library.
     * @return bool|null
    */
    public function getICloudBlockPhotoLibrary(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockPhotoLibrary');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockPhotoLibrary'");
    }

    /**
     * Gets the iCloudBlockReminders property value. Indicates whether or not to block iCloud from syncing reminders.
     * @return bool|null
    */
    public function getICloudBlockReminders(): ?bool {
        $val = $this->getBackingStore()->get('iCloudBlockReminders');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudBlockReminders'");
    }

    /**
     * Gets the iCloudDesktopAndDocumentsBlocked property value. When TRUE the synchronization of cloud desktop and documents is blocked. When FALSE, synchronization of the cloud desktop and documents are allowed. Available for devices running macOS 10.12.4 and later.
     * @return bool|null
    */
    public function getICloudDesktopAndDocumentsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('iCloudDesktopAndDocumentsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudDesktopAndDocumentsBlocked'");
    }

    /**
     * Gets the iCloudPrivateRelayBlocked property value. iCloud private relay is an iCloud+ service that prevents networks and servers from monitoring a person's activity across the internet. By blocking iCloud private relay, Apple will not encrypt the traffic leaving the device. Available for devices running macOS 12 and later.
     * @return bool|null
    */
    public function getICloudPrivateRelayBlocked(): ?bool {
        $val = $this->getBackingStore()->get('iCloudPrivateRelayBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudPrivateRelayBlocked'");
    }

    /**
     * Gets the iTunesBlockFileSharing property value. Indicates whether or not to block files from being transferred using iTunes.
     * @return bool|null
    */
    public function getITunesBlockFileSharing(): ?bool {
        $val = $this->getBackingStore()->get('iTunesBlockFileSharing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iTunesBlockFileSharing'");
    }

    /**
     * Gets the iTunesBlockMusicService property value. Indicates whether or not to block Music service and revert Music app to classic mode.
     * @return bool|null
    */
    public function getITunesBlockMusicService(): ?bool {
        $val = $this->getBackingStore()->get('iTunesBlockMusicService');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iTunesBlockMusicService'");
    }

    /**
     * Gets the keyboardBlockDictation property value. Indicates whether or not to block the user from using dictation input.
     * @return bool|null
    */
    public function getKeyboardBlockDictation(): ?bool {
        $val = $this->getBackingStore()->get('keyboardBlockDictation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyboardBlockDictation'");
    }

    /**
     * Gets the keychainBlockCloudSync property value. Indicates whether or not iCloud keychain synchronization is blocked (macOS 10.12 and later).
     * @return bool|null
    */
    public function getKeychainBlockCloudSync(): ?bool {
        $val = $this->getBackingStore()->get('keychainBlockCloudSync');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keychainBlockCloudSync'");
    }

    /**
     * Gets the multiplayerGamingBlocked property value. TRUE prevents multiplayer gaming when using Game Center. FALSE allows multiplayer gaming when using Game Center. Available for devices running macOS versions 10.13 and later.
     * @return bool|null
    */
    public function getMultiplayerGamingBlocked(): ?bool {
        $val = $this->getBackingStore()->get('multiplayerGamingBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiplayerGamingBlocked'");
    }

    /**
     * Gets the passwordBlockAirDropSharing property value. Indicates whether or not to block sharing passwords with the AirDrop passwords feature.
     * @return bool|null
    */
    public function getPasswordBlockAirDropSharing(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockAirDropSharing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockAirDropSharing'");
    }

    /**
     * Gets the passwordBlockAutoFill property value. Indicates whether or not to block the AutoFill Passwords feature.
     * @return bool|null
    */
    public function getPasswordBlockAutoFill(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockAutoFill');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockAutoFill'");
    }

    /**
     * Gets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     * @return bool|null
    */
    public function getPasswordBlockFingerprintUnlock(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockFingerprintUnlock');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockFingerprintUnlock'");
    }

    /**
     * Gets the passwordBlockModification property value. Indicates whether or not to allow passcode modification.
     * @return bool|null
    */
    public function getPasswordBlockModification(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockModification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockModification'");
    }

    /**
     * Gets the passwordBlockProximityRequests property value. Indicates whether or not to block requesting passwords from nearby devices.
     * @return bool|null
    */
    public function getPasswordBlockProximityRequests(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockProximityRequests');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockProximityRequests'");
    }

    /**
     * Gets the passwordBlockSimple property value. Block simple passwords.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockSimple');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockSimple'");
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires.
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        $val = $this->getBackingStore()->get('passwordExpirationDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordExpirationDays'");
    }

    /**
     * Gets the passwordMaximumAttemptCount property value. The number of allowed failed attempts to enter the passcode at the device's lock screen. Valid values 2 to 11
     * @return int|null
    */
    public function getPasswordMaximumAttemptCount(): ?int {
        $val = $this->getBackingStore()->get('passwordMaximumAttemptCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMaximumAttemptCount'");
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. Number of character sets a password must contain. Valid values 0 to 4
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumCharacterSetCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumCharacterSetCount'");
    }

    /**
     * Gets the passwordMinimumLength property value. Minimum length of passwords.
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumLength'");
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity required before a password is required.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeLock(): ?int {
        $val = $this->getBackingStore()->get('passwordMinutesOfInactivityBeforeLock');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinutesOfInactivityBeforeLock'");
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity required before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        $val = $this->getBackingStore()->get('passwordMinutesOfInactivityBeforeScreenTimeout');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinutesOfInactivityBeforeScreenTimeout'");
    }

    /**
     * Gets the passwordMinutesUntilFailedLoginReset property value. The number of minutes before the login is reset after the maximum number of unsuccessful login attempts is reached.
     * @return int|null
    */
    public function getPasswordMinutesUntilFailedLoginReset(): ?int {
        $val = $this->getBackingStore()->get('passwordMinutesUntilFailedLoginReset');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinutesUntilFailedLoginReset'");
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block.
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        $val = $this->getBackingStore()->get('passwordPreviousPasswordBlockCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordPreviousPasswordBlockCount'");
    }

    /**
     * Gets the passwordRequired property value. Whether or not to require a password.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        $val = $this->getBackingStore()->get('passwordRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequired'");
    }

    /**
     * Gets the passwordRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        $val = $this->getBackingStore()->get('passwordRequiredType');
        if (is_null($val) || $val instanceof RequiredPasswordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequiredType'");
    }

    /**
     * Gets the privacyAccessControls property value. List of privacy preference policy controls. This collection can contain a maximum of 10000 elements.
     * @return array<MacOSPrivacyAccessControlItem>|null
    */
    public function getPrivacyAccessControls(): ?array {
        $val = $this->getBackingStore()->get('privacyAccessControls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MacOSPrivacyAccessControlItem::class);
            /** @var array<MacOSPrivacyAccessControlItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privacyAccessControls'");
    }

    /**
     * Gets the safariBlockAutofill property value. Indicates whether or not to block the user from using Auto fill in Safari.
     * @return bool|null
    */
    public function getSafariBlockAutofill(): ?bool {
        $val = $this->getBackingStore()->get('safariBlockAutofill');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'safariBlockAutofill'");
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to block the user from taking Screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        $val = $this->getBackingStore()->get('screenCaptureBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'screenCaptureBlocked'");
    }

    /**
     * Gets the softwareUpdateMajorOSDeferredInstallDelayInDays property value. Specify the number of days (1-90) to delay visibility of major OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
     * @return int|null
    */
    public function getSoftwareUpdateMajorOSDeferredInstallDelayInDays(): ?int {
        $val = $this->getBackingStore()->get('softwareUpdateMajorOSDeferredInstallDelayInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'softwareUpdateMajorOSDeferredInstallDelayInDays'");
    }

    /**
     * Gets the softwareUpdateMinorOSDeferredInstallDelayInDays property value. Specify the number of days (1-90) to delay visibility of minor OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
     * @return int|null
    */
    public function getSoftwareUpdateMinorOSDeferredInstallDelayInDays(): ?int {
        $val = $this->getBackingStore()->get('softwareUpdateMinorOSDeferredInstallDelayInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'softwareUpdateMinorOSDeferredInstallDelayInDays'");
    }

    /**
     * Gets the softwareUpdateNonOSDeferredInstallDelayInDays property value. Specify the number of days (1-90) to delay visibility of non-OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
     * @return int|null
    */
    public function getSoftwareUpdateNonOSDeferredInstallDelayInDays(): ?int {
        $val = $this->getBackingStore()->get('softwareUpdateNonOSDeferredInstallDelayInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'softwareUpdateNonOSDeferredInstallDelayInDays'");
    }

    /**
     * Gets the softwareUpdatesEnforcedDelayInDays property value. Sets how many days a software update will be delyed for a supervised device. Valid values 0 to 90
     * @return int|null
    */
    public function getSoftwareUpdatesEnforcedDelayInDays(): ?int {
        $val = $this->getBackingStore()->get('softwareUpdatesEnforcedDelayInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'softwareUpdatesEnforcedDelayInDays'");
    }

    /**
     * Gets the spotlightBlockInternetResults property value. Indicates whether or not to block Spotlight from returning any results from an Internet search.
     * @return bool|null
    */
    public function getSpotlightBlockInternetResults(): ?bool {
        $val = $this->getBackingStore()->get('spotlightBlockInternetResults');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'spotlightBlockInternetResults'");
    }

    /**
     * Gets the touchIdTimeoutInHours property value. Maximum hours after which the user must enter their password to unlock the device instead of using Touch ID. Available for devices running macOS 12 and later. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getTouchIdTimeoutInHours(): ?int {
        $val = $this->getBackingStore()->get('touchIdTimeoutInHours');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'touchIdTimeoutInHours'");
    }

    /**
     * Gets the updateDelayPolicy property value. Determines whether to delay OS and/or app updates for macOS. Possible values are: none, delayOSUpdateVisibility, delayAppUpdateVisibility, unknownFutureValue, delayMajorOsUpdateVisibility.
     * @return MacOSSoftwareUpdateDelayPolicy|null
    */
    public function getUpdateDelayPolicy(): ?MacOSSoftwareUpdateDelayPolicy {
        $val = $this->getBackingStore()->get('updateDelayPolicy');
        if (is_null($val) || $val instanceof MacOSSoftwareUpdateDelayPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updateDelayPolicy'");
    }

    /**
     * Gets the wallpaperModificationBlocked property value. TRUE prevents the wallpaper from being changed. FALSE allows the wallpaper to be changed. Available for devices running macOS versions 10.13 and later.
     * @return bool|null
    */
    public function getWallpaperModificationBlocked(): ?bool {
        $val = $this->getBackingStore()->get('wallpaperModificationBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wallpaperModificationBlocked'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('activationLockWhenSupervisedAllowed', $this->getActivationLockWhenSupervisedAllowed());
        $writer->writeBooleanValue('addingGameCenterFriendsBlocked', $this->getAddingGameCenterFriendsBlocked());
        $writer->writeBooleanValue('airDropBlocked', $this->getAirDropBlocked());
        $writer->writeBooleanValue('appleWatchBlockAutoUnlock', $this->getAppleWatchBlockAutoUnlock());
        $writer->writeBooleanValue('cameraBlocked', $this->getCameraBlocked());
        $writer->writeBooleanValue('classroomAppBlockRemoteScreenObservation', $this->getClassroomAppBlockRemoteScreenObservation());
        $writer->writeBooleanValue('classroomAppForceUnpromptedScreenObservation', $this->getClassroomAppForceUnpromptedScreenObservation());
        $writer->writeBooleanValue('classroomForceAutomaticallyJoinClasses', $this->getClassroomForceAutomaticallyJoinClasses());
        $writer->writeBooleanValue('classroomForceRequestPermissionToLeaveClasses', $this->getClassroomForceRequestPermissionToLeaveClasses());
        $writer->writeBooleanValue('classroomForceUnpromptedAppAndDeviceLock', $this->getClassroomForceUnpromptedAppAndDeviceLock());
        $writer->writeEnumValue('compliantAppListType', $this->getCompliantAppListType());
        $writer->writeCollectionOfObjectValues('compliantAppsList', $this->getCompliantAppsList());
        $writer->writeBooleanValue('contentCachingBlocked', $this->getContentCachingBlocked());
        $writer->writeBooleanValue('definitionLookupBlocked', $this->getDefinitionLookupBlocked());
        $writer->writeCollectionOfPrimitiveValues('emailInDomainSuffixes', $this->getEmailInDomainSuffixes());
        $writer->writeBooleanValue('eraseContentAndSettingsBlocked', $this->getEraseContentAndSettingsBlocked());
        $writer->writeBooleanValue('gameCenterBlocked', $this->getGameCenterBlocked());
        $writer->writeBooleanValue('iCloudBlockActivityContinuation', $this->getICloudBlockActivityContinuation());
        $writer->writeBooleanValue('iCloudBlockAddressBook', $this->getICloudBlockAddressBook());
        $writer->writeBooleanValue('iCloudBlockBookmarks', $this->getICloudBlockBookmarks());
        $writer->writeBooleanValue('iCloudBlockCalendar', $this->getICloudBlockCalendar());
        $writer->writeBooleanValue('iCloudBlockDocumentSync', $this->getICloudBlockDocumentSync());
        $writer->writeBooleanValue('iCloudBlockMail', $this->getICloudBlockMail());
        $writer->writeBooleanValue('iCloudBlockNotes', $this->getICloudBlockNotes());
        $writer->writeBooleanValue('iCloudBlockPhotoLibrary', $this->getICloudBlockPhotoLibrary());
        $writer->writeBooleanValue('iCloudBlockReminders', $this->getICloudBlockReminders());
        $writer->writeBooleanValue('iCloudDesktopAndDocumentsBlocked', $this->getICloudDesktopAndDocumentsBlocked());
        $writer->writeBooleanValue('iCloudPrivateRelayBlocked', $this->getICloudPrivateRelayBlocked());
        $writer->writeBooleanValue('iTunesBlockFileSharing', $this->getITunesBlockFileSharing());
        $writer->writeBooleanValue('iTunesBlockMusicService', $this->getITunesBlockMusicService());
        $writer->writeBooleanValue('keyboardBlockDictation', $this->getKeyboardBlockDictation());
        $writer->writeBooleanValue('keychainBlockCloudSync', $this->getKeychainBlockCloudSync());
        $writer->writeBooleanValue('multiplayerGamingBlocked', $this->getMultiplayerGamingBlocked());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('passwordBlockAirDropSharing', $this->getPasswordBlockAirDropSharing());
        $writer->writeBooleanValue('passwordBlockAutoFill', $this->getPasswordBlockAutoFill());
        $writer->writeBooleanValue('passwordBlockFingerprintUnlock', $this->getPasswordBlockFingerprintUnlock());
        $writer->writeBooleanValue('passwordBlockModification', $this->getPasswordBlockModification());
        $writer->writeBooleanValue('passwordBlockProximityRequests', $this->getPasswordBlockProximityRequests());
        $writer->writeBooleanValue('passwordBlockSimple', $this->getPasswordBlockSimple());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordMaximumAttemptCount', $this->getPasswordMaximumAttemptCount());
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->getPasswordMinimumCharacterSetCount());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeLock', $this->getPasswordMinutesOfInactivityBeforeLock());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->getPasswordMinutesOfInactivityBeforeScreenTimeout());
        $writer->writeIntegerValue('passwordMinutesUntilFailedLoginReset', $this->getPasswordMinutesUntilFailedLoginReset());
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->getPasswordPreviousPasswordBlockCount());
        $writer->writeBooleanValue('passwordRequired', $this->getPasswordRequired());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeCollectionOfObjectValues('privacyAccessControls', $this->getPrivacyAccessControls());
        $writer->writeBooleanValue('safariBlockAutofill', $this->getSafariBlockAutofill());
        $writer->writeBooleanValue('screenCaptureBlocked', $this->getScreenCaptureBlocked());
        $writer->writeIntegerValue('softwareUpdateMajorOSDeferredInstallDelayInDays', $this->getSoftwareUpdateMajorOSDeferredInstallDelayInDays());
        $writer->writeIntegerValue('softwareUpdateMinorOSDeferredInstallDelayInDays', $this->getSoftwareUpdateMinorOSDeferredInstallDelayInDays());
        $writer->writeIntegerValue('softwareUpdateNonOSDeferredInstallDelayInDays', $this->getSoftwareUpdateNonOSDeferredInstallDelayInDays());
        $writer->writeIntegerValue('softwareUpdatesEnforcedDelayInDays', $this->getSoftwareUpdatesEnforcedDelayInDays());
        $writer->writeBooleanValue('spotlightBlockInternetResults', $this->getSpotlightBlockInternetResults());
        $writer->writeIntegerValue('touchIdTimeoutInHours', $this->getTouchIdTimeoutInHours());
        $writer->writeEnumValue('updateDelayPolicy', $this->getUpdateDelayPolicy());
        $writer->writeBooleanValue('wallpaperModificationBlocked', $this->getWallpaperModificationBlocked());
    }

    /**
     * Sets the activationLockWhenSupervisedAllowed property value. When TRUE, activation lock is allowed when the devices is in the supervised mode. When FALSE, activation lock is not allowed. Default is false.
     * @param bool|null $value Value to set for the activationLockWhenSupervisedAllowed property.
    */
    public function setActivationLockWhenSupervisedAllowed(?bool $value): void {
        $this->getBackingStore()->set('activationLockWhenSupervisedAllowed', $value);
    }

    /**
     * Sets the addingGameCenterFriendsBlocked property value. Yes prevents users from adding friends to Game Center. Available for devices running macOS versions 10.13 and later.
     * @param bool|null $value Value to set for the addingGameCenterFriendsBlocked property.
    */
    public function setAddingGameCenterFriendsBlocked(?bool $value): void {
        $this->getBackingStore()->set('addingGameCenterFriendsBlocked', $value);
    }

    /**
     * Sets the airDropBlocked property value. Indicates whether or not to allow AirDrop.
     * @param bool|null $value Value to set for the airDropBlocked property.
    */
    public function setAirDropBlocked(?bool $value): void {
        $this->getBackingStore()->set('airDropBlocked', $value);
    }

    /**
     * Sets the appleWatchBlockAutoUnlock property value. Indicates whether or to block users from unlocking their Mac with Apple Watch.
     * @param bool|null $value Value to set for the appleWatchBlockAutoUnlock property.
    */
    public function setAppleWatchBlockAutoUnlock(?bool $value): void {
        $this->getBackingStore()->set('appleWatchBlockAutoUnlock', $value);
    }

    /**
     * Sets the cameraBlocked property value. Indicates whether or not to block the user from accessing the camera of the device.
     * @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value): void {
        $this->getBackingStore()->set('cameraBlocked', $value);
    }

    /**
     * Sets the classroomAppBlockRemoteScreenObservation property value. Indicates whether or not to allow remote screen observation by Classroom app. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @param bool|null $value Value to set for the classroomAppBlockRemoteScreenObservation property.
    */
    public function setClassroomAppBlockRemoteScreenObservation(?bool $value): void {
        $this->getBackingStore()->set('classroomAppBlockRemoteScreenObservation', $value);
    }

    /**
     * Sets the classroomAppForceUnpromptedScreenObservation property value. Indicates whether or not to automatically give permission to the teacher of a managed course on the Classroom app to view a student's screen without prompting. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @param bool|null $value Value to set for the classroomAppForceUnpromptedScreenObservation property.
    */
    public function setClassroomAppForceUnpromptedScreenObservation(?bool $value): void {
        $this->getBackingStore()->set('classroomAppForceUnpromptedScreenObservation', $value);
    }

    /**
     * Sets the classroomForceAutomaticallyJoinClasses property value. Indicates whether or not to automatically give permission to the teacher's requests, without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @param bool|null $value Value to set for the classroomForceAutomaticallyJoinClasses property.
    */
    public function setClassroomForceAutomaticallyJoinClasses(?bool $value): void {
        $this->getBackingStore()->set('classroomForceAutomaticallyJoinClasses', $value);
    }

    /**
     * Sets the classroomForceRequestPermissionToLeaveClasses property value. Indicates whether a student enrolled in an unmanaged course via Classroom will be required to request permission from the teacher when attempting to leave the course. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @param bool|null $value Value to set for the classroomForceRequestPermissionToLeaveClasses property.
    */
    public function setClassroomForceRequestPermissionToLeaveClasses(?bool $value): void {
        $this->getBackingStore()->set('classroomForceRequestPermissionToLeaveClasses', $value);
    }

    /**
     * Sets the classroomForceUnpromptedAppAndDeviceLock property value. Indicates whether or not to allow the teacher to lock apps or the device without prompting the student. Requires MDM enrollment via Apple School Manager or Apple Business Manager.
     * @param bool|null $value Value to set for the classroomForceUnpromptedAppAndDeviceLock property.
    */
    public function setClassroomForceUnpromptedAppAndDeviceLock(?bool $value): void {
        $this->getBackingStore()->set('classroomForceUnpromptedAppAndDeviceLock', $value);
    }

    /**
     * Sets the compliantAppListType property value. Possible values of the compliance app list.
     * @param AppListType|null $value Value to set for the compliantAppListType property.
    */
    public function setCompliantAppListType(?AppListType $value): void {
        $this->getBackingStore()->set('compliantAppListType', $value);
    }

    /**
     * Sets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @param array<AppListItem>|null $value Value to set for the compliantAppsList property.
    */
    public function setCompliantAppsList(?array $value): void {
        $this->getBackingStore()->set('compliantAppsList', $value);
    }

    /**
     * Sets the contentCachingBlocked property value. Indicates whether or not to allow content caching.
     * @param bool|null $value Value to set for the contentCachingBlocked property.
    */
    public function setContentCachingBlocked(?bool $value): void {
        $this->getBackingStore()->set('contentCachingBlocked', $value);
    }

    /**
     * Sets the definitionLookupBlocked property value. Indicates whether or not to block definition lookup.
     * @param bool|null $value Value to set for the definitionLookupBlocked property.
    */
    public function setDefinitionLookupBlocked(?bool $value): void {
        $this->getBackingStore()->set('definitionLookupBlocked', $value);
    }

    /**
     * Sets the emailInDomainSuffixes property value. An email address lacking a suffix that matches any of these strings will be considered out-of-domain.
     * @param array<string>|null $value Value to set for the emailInDomainSuffixes property.
    */
    public function setEmailInDomainSuffixes(?array $value): void {
        $this->getBackingStore()->set('emailInDomainSuffixes', $value);
    }

    /**
     * Sets the eraseContentAndSettingsBlocked property value. TRUE disables the reset option on supervised devices. FALSE enables the reset option on supervised devices. Available for devices running macOS versions 12.0 and later.
     * @param bool|null $value Value to set for the eraseContentAndSettingsBlocked property.
    */
    public function setEraseContentAndSettingsBlocked(?bool $value): void {
        $this->getBackingStore()->set('eraseContentAndSettingsBlocked', $value);
    }

    /**
     * Sets the gameCenterBlocked property value. Yes disables Game Center, and the Game Center icon is removed from the Home screen. Available for devices running macOS versions 10.13 and later.
     * @param bool|null $value Value to set for the gameCenterBlocked property.
    */
    public function setGameCenterBlocked(?bool $value): void {
        $this->getBackingStore()->set('gameCenterBlocked', $value);
    }

    /**
     * Sets the iCloudBlockActivityContinuation property value. Indicates whether or not to block the user from continuing work that they started on a MacOS device on another iOS or MacOS device (MacOS 10.15 or later).
     * @param bool|null $value Value to set for the iCloudBlockActivityContinuation property.
    */
    public function setICloudBlockActivityContinuation(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockActivityContinuation', $value);
    }

    /**
     * Sets the iCloudBlockAddressBook property value. Indicates whether or not to block iCloud from syncing contacts.
     * @param bool|null $value Value to set for the iCloudBlockAddressBook property.
    */
    public function setICloudBlockAddressBook(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockAddressBook', $value);
    }

    /**
     * Sets the iCloudBlockBookmarks property value. Indicates whether or not to block iCloud from syncing bookmarks.
     * @param bool|null $value Value to set for the iCloudBlockBookmarks property.
    */
    public function setICloudBlockBookmarks(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockBookmarks', $value);
    }

    /**
     * Sets the iCloudBlockCalendar property value. Indicates whether or not to block iCloud from syncing calendars.
     * @param bool|null $value Value to set for the iCloudBlockCalendar property.
    */
    public function setICloudBlockCalendar(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockCalendar', $value);
    }

    /**
     * Sets the iCloudBlockDocumentSync property value. Indicates whether or not to block iCloud document sync.
     * @param bool|null $value Value to set for the iCloudBlockDocumentSync property.
    */
    public function setICloudBlockDocumentSync(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockDocumentSync', $value);
    }

    /**
     * Sets the iCloudBlockMail property value. Indicates whether or not to block iCloud from syncing mail.
     * @param bool|null $value Value to set for the iCloudBlockMail property.
    */
    public function setICloudBlockMail(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockMail', $value);
    }

    /**
     * Sets the iCloudBlockNotes property value. Indicates whether or not to block iCloud from syncing notes.
     * @param bool|null $value Value to set for the iCloudBlockNotes property.
    */
    public function setICloudBlockNotes(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockNotes', $value);
    }

    /**
     * Sets the iCloudBlockPhotoLibrary property value. Indicates whether or not to block iCloud Photo Library.
     * @param bool|null $value Value to set for the iCloudBlockPhotoLibrary property.
    */
    public function setICloudBlockPhotoLibrary(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockPhotoLibrary', $value);
    }

    /**
     * Sets the iCloudBlockReminders property value. Indicates whether or not to block iCloud from syncing reminders.
     * @param bool|null $value Value to set for the iCloudBlockReminders property.
    */
    public function setICloudBlockReminders(?bool $value): void {
        $this->getBackingStore()->set('iCloudBlockReminders', $value);
    }

    /**
     * Sets the iCloudDesktopAndDocumentsBlocked property value. When TRUE the synchronization of cloud desktop and documents is blocked. When FALSE, synchronization of the cloud desktop and documents are allowed. Available for devices running macOS 10.12.4 and later.
     * @param bool|null $value Value to set for the iCloudDesktopAndDocumentsBlocked property.
    */
    public function setICloudDesktopAndDocumentsBlocked(?bool $value): void {
        $this->getBackingStore()->set('iCloudDesktopAndDocumentsBlocked', $value);
    }

    /**
     * Sets the iCloudPrivateRelayBlocked property value. iCloud private relay is an iCloud+ service that prevents networks and servers from monitoring a person's activity across the internet. By blocking iCloud private relay, Apple will not encrypt the traffic leaving the device. Available for devices running macOS 12 and later.
     * @param bool|null $value Value to set for the iCloudPrivateRelayBlocked property.
    */
    public function setICloudPrivateRelayBlocked(?bool $value): void {
        $this->getBackingStore()->set('iCloudPrivateRelayBlocked', $value);
    }

    /**
     * Sets the iTunesBlockFileSharing property value. Indicates whether or not to block files from being transferred using iTunes.
     * @param bool|null $value Value to set for the iTunesBlockFileSharing property.
    */
    public function setITunesBlockFileSharing(?bool $value): void {
        $this->getBackingStore()->set('iTunesBlockFileSharing', $value);
    }

    /**
     * Sets the iTunesBlockMusicService property value. Indicates whether or not to block Music service and revert Music app to classic mode.
     * @param bool|null $value Value to set for the iTunesBlockMusicService property.
    */
    public function setITunesBlockMusicService(?bool $value): void {
        $this->getBackingStore()->set('iTunesBlockMusicService', $value);
    }

    /**
     * Sets the keyboardBlockDictation property value. Indicates whether or not to block the user from using dictation input.
     * @param bool|null $value Value to set for the keyboardBlockDictation property.
    */
    public function setKeyboardBlockDictation(?bool $value): void {
        $this->getBackingStore()->set('keyboardBlockDictation', $value);
    }

    /**
     * Sets the keychainBlockCloudSync property value. Indicates whether or not iCloud keychain synchronization is blocked (macOS 10.12 and later).
     * @param bool|null $value Value to set for the keychainBlockCloudSync property.
    */
    public function setKeychainBlockCloudSync(?bool $value): void {
        $this->getBackingStore()->set('keychainBlockCloudSync', $value);
    }

    /**
     * Sets the multiplayerGamingBlocked property value. TRUE prevents multiplayer gaming when using Game Center. FALSE allows multiplayer gaming when using Game Center. Available for devices running macOS versions 10.13 and later.
     * @param bool|null $value Value to set for the multiplayerGamingBlocked property.
    */
    public function setMultiplayerGamingBlocked(?bool $value): void {
        $this->getBackingStore()->set('multiplayerGamingBlocked', $value);
    }

    /**
     * Sets the passwordBlockAirDropSharing property value. Indicates whether or not to block sharing passwords with the AirDrop passwords feature.
     * @param bool|null $value Value to set for the passwordBlockAirDropSharing property.
    */
    public function setPasswordBlockAirDropSharing(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockAirDropSharing', $value);
    }

    /**
     * Sets the passwordBlockAutoFill property value. Indicates whether or not to block the AutoFill Passwords feature.
     * @param bool|null $value Value to set for the passwordBlockAutoFill property.
    */
    public function setPasswordBlockAutoFill(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockAutoFill', $value);
    }

    /**
     * Sets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     * @param bool|null $value Value to set for the passwordBlockFingerprintUnlock property.
    */
    public function setPasswordBlockFingerprintUnlock(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockFingerprintUnlock', $value);
    }

    /**
     * Sets the passwordBlockModification property value. Indicates whether or not to allow passcode modification.
     * @param bool|null $value Value to set for the passwordBlockModification property.
    */
    public function setPasswordBlockModification(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockModification', $value);
    }

    /**
     * Sets the passwordBlockProximityRequests property value. Indicates whether or not to block requesting passwords from nearby devices.
     * @param bool|null $value Value to set for the passwordBlockProximityRequests property.
    */
    public function setPasswordBlockProximityRequests(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockProximityRequests', $value);
    }

    /**
     * Sets the passwordBlockSimple property value. Block simple passwords.
     * @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockSimple', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires.
     * @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMaximumAttemptCount property value. The number of allowed failed attempts to enter the passcode at the device's lock screen. Valid values 2 to 11
     * @param int|null $value Value to set for the passwordMaximumAttemptCount property.
    */
    public function setPasswordMaximumAttemptCount(?int $value): void {
        $this->getBackingStore()->set('passwordMaximumAttemptCount', $value);
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. Number of character sets a password must contain. Valid values 0 to 4
     * @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumCharacterSetCount', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum length of passwords.
     * @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity required before a password is required.
     * @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeLock property.
    */
    public function setPasswordMinutesOfInactivityBeforeLock(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeLock', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity required before the screen times out.
     * @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeScreenTimeout', $value);
    }

    /**
     * Sets the passwordMinutesUntilFailedLoginReset property value. The number of minutes before the login is reset after the maximum number of unsuccessful login attempts is reached.
     * @param int|null $value Value to set for the passwordMinutesUntilFailedLoginReset property.
    */
    public function setPasswordMinutesUntilFailedLoginReset(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesUntilFailedLoginReset', $value);
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block.
     * @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the passwordRequired property value. Whether or not to require a password.
     * @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value): void {
        $this->getBackingStore()->set('passwordRequired', $value);
    }

    /**
     * Sets the passwordRequiredType property value. Possible values of required passwords.
     * @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

    /**
     * Sets the privacyAccessControls property value. List of privacy preference policy controls. This collection can contain a maximum of 10000 elements.
     * @param array<MacOSPrivacyAccessControlItem>|null $value Value to set for the privacyAccessControls property.
    */
    public function setPrivacyAccessControls(?array $value): void {
        $this->getBackingStore()->set('privacyAccessControls', $value);
    }

    /**
     * Sets the safariBlockAutofill property value. Indicates whether or not to block the user from using Auto fill in Safari.
     * @param bool|null $value Value to set for the safariBlockAutofill property.
    */
    public function setSafariBlockAutofill(?bool $value): void {
        $this->getBackingStore()->set('safariBlockAutofill', $value);
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to block the user from taking Screenshots.
     * @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value): void {
        $this->getBackingStore()->set('screenCaptureBlocked', $value);
    }

    /**
     * Sets the softwareUpdateMajorOSDeferredInstallDelayInDays property value. Specify the number of days (1-90) to delay visibility of major OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
     * @param int|null $value Value to set for the softwareUpdateMajorOSDeferredInstallDelayInDays property.
    */
    public function setSoftwareUpdateMajorOSDeferredInstallDelayInDays(?int $value): void {
        $this->getBackingStore()->set('softwareUpdateMajorOSDeferredInstallDelayInDays', $value);
    }

    /**
     * Sets the softwareUpdateMinorOSDeferredInstallDelayInDays property value. Specify the number of days (1-90) to delay visibility of minor OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
     * @param int|null $value Value to set for the softwareUpdateMinorOSDeferredInstallDelayInDays property.
    */
    public function setSoftwareUpdateMinorOSDeferredInstallDelayInDays(?int $value): void {
        $this->getBackingStore()->set('softwareUpdateMinorOSDeferredInstallDelayInDays', $value);
    }

    /**
     * Sets the softwareUpdateNonOSDeferredInstallDelayInDays property value. Specify the number of days (1-90) to delay visibility of non-OS software updates. Available for devices running macOS versions 11.3 and later. Valid values 0 to 90
     * @param int|null $value Value to set for the softwareUpdateNonOSDeferredInstallDelayInDays property.
    */
    public function setSoftwareUpdateNonOSDeferredInstallDelayInDays(?int $value): void {
        $this->getBackingStore()->set('softwareUpdateNonOSDeferredInstallDelayInDays', $value);
    }

    /**
     * Sets the softwareUpdatesEnforcedDelayInDays property value. Sets how many days a software update will be delyed for a supervised device. Valid values 0 to 90
     * @param int|null $value Value to set for the softwareUpdatesEnforcedDelayInDays property.
    */
    public function setSoftwareUpdatesEnforcedDelayInDays(?int $value): void {
        $this->getBackingStore()->set('softwareUpdatesEnforcedDelayInDays', $value);
    }

    /**
     * Sets the spotlightBlockInternetResults property value. Indicates whether or not to block Spotlight from returning any results from an Internet search.
     * @param bool|null $value Value to set for the spotlightBlockInternetResults property.
    */
    public function setSpotlightBlockInternetResults(?bool $value): void {
        $this->getBackingStore()->set('spotlightBlockInternetResults', $value);
    }

    /**
     * Sets the touchIdTimeoutInHours property value. Maximum hours after which the user must enter their password to unlock the device instead of using Touch ID. Available for devices running macOS 12 and later. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the touchIdTimeoutInHours property.
    */
    public function setTouchIdTimeoutInHours(?int $value): void {
        $this->getBackingStore()->set('touchIdTimeoutInHours', $value);
    }

    /**
     * Sets the updateDelayPolicy property value. Determines whether to delay OS and/or app updates for macOS. Possible values are: none, delayOSUpdateVisibility, delayAppUpdateVisibility, unknownFutureValue, delayMajorOsUpdateVisibility.
     * @param MacOSSoftwareUpdateDelayPolicy|null $value Value to set for the updateDelayPolicy property.
    */
    public function setUpdateDelayPolicy(?MacOSSoftwareUpdateDelayPolicy $value): void {
        $this->getBackingStore()->set('updateDelayPolicy', $value);
    }

    /**
     * Sets the wallpaperModificationBlocked property value. TRUE prevents the wallpaper from being changed. FALSE allows the wallpaper to be changed. Available for devices running macOS versions 10.13 and later.
     * @param bool|null $value Value to set for the wallpaperModificationBlocked property.
    */
    public function setWallpaperModificationBlocked(?bool $value): void {
        $this->getBackingStore()->set('wallpaperModificationBlocked', $value);
    }

}
