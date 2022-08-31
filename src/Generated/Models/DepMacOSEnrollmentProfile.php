<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DepMacOSEnrollmentProfile extends DepEnrollmentBaseProfile implements Parsable 
{
    /**
     * @var bool|null $accessibilityScreenDisabled Indicates if Accessibility screen is disabled
    */
    private ?bool $accessibilityScreenDisabled = null;
    
    /**
     * @var bool|null $autoUnlockWithWatchDisabled Indicates if UnlockWithWatch screen is disabled
    */
    private ?bool $autoUnlockWithWatchDisabled = null;
    
    /**
     * @var bool|null $chooseYourLockScreenDisabled Indicates if iCloud Documents and Desktop screen is disabled
    */
    private ?bool $chooseYourLockScreenDisabled = null;
    
    /**
     * @var bool|null $dontAutoPopulatePrimaryAccountInfo Indicates whether Setup Assistant will auto populate the primary account information
    */
    private ?bool $dontAutoPopulatePrimaryAccountInfo = null;
    
    /**
     * @var bool|null $enableRestrictEditing Indicates whether the user will enable blockediting
    */
    private ?bool $enableRestrictEditing = null;
    
    /**
     * @var bool|null $fileVaultDisabled Indicates if file vault is disabled
    */
    private ?bool $fileVaultDisabled = null;
    
    /**
     * @var bool|null $iCloudDiagnosticsDisabled Indicates if iCloud Analytics screen is disabled
    */
    private ?bool $iCloudDiagnosticsDisabled = null;
    
    /**
     * @var bool|null $iCloudStorageDisabled Indicates if iCloud Documents and Desktop screen is disabled
    */
    private ?bool $iCloudStorageDisabled = null;
    
    /**
     * @var bool|null $isLocalPrimaryAccount Indicates whether the profile is a local account
    */
    private ?bool $isLocalPrimaryAccount = null;
    
    /**
     * @var bool|null $isPrimaryUser Indicates whether the profile is a primary user
    */
    private ?bool $isPrimaryUser = null;
    
    /**
     * @var bool|null $lockPrimaryAccountInfo Indicates whether the primary account information will be locked
    */
    private ?bool $lockPrimaryAccountInfo = null;
    
    /**
     * @var bool|null $managedLocalUserShortName Indicates whether or not this is the short name of the local account to manage
    */
    private ?bool $managedLocalUserShortName = null;
    
    /**
     * @var bool|null $passCodeDisabled Indicates if Passcode setup pane is disabled
    */
    private ?bool $passCodeDisabled = null;
    
    /**
     * @var bool|null $prefillAccountInfo Indicates whether the user will prefill their account info
    */
    private ?bool $prefillAccountInfo = null;
    
    /**
     * @var string|null $primaryAccountFullName Indicates what the full name for the primary account is
    */
    private ?string $primaryAccountFullName = null;
    
    /**
     * @var string|null $primaryAccountUserName Indicates what the account name for the primary account is
    */
    private ?string $primaryAccountUserName = null;
    
    /**
     * @var string|null $primaryUser Indicates who the primary user of the profile is
    */
    private ?string $primaryUser = null;
    
    /**
     * @var string|null $primaryUserFullName Indicates who the primary user of the profile is
    */
    private ?string $primaryUserFullName = null;
    
    /**
     * @var bool|null $registrationDisabled Indicates if registration is disabled
    */
    private ?bool $registrationDisabled = null;
    
    /**
     * @var bool|null $requestRequiresNetworkTether Indicates if the device is network-tethered to run the command
    */
    private ?bool $requestRequiresNetworkTether = null;
    
    /**
     * @var bool|null $setPrimarySetupAccountAsRegularUser Indicates whether Setup Assistant will set the account as a regular user
    */
    private ?bool $setPrimarySetupAccountAsRegularUser = null;
    
    /**
     * @var bool|null $skipPrimarySetupAccountCreation Indicates whether Setup Assistant will skip the user interface for primary account setup
    */
    private ?bool $skipPrimarySetupAccountCreation = null;
    
    /**
     * @var bool|null $zoomDisabled Indicates if zoom setup pane is disabled
    */
    private ?bool $zoomDisabled = null;
    
    /**
     * Instantiates a new DepMacOSEnrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.depMacOSEnrollmentProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DepMacOSEnrollmentProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DepMacOSEnrollmentProfile {
        return new DepMacOSEnrollmentProfile();
    }

    /**
     * Gets the accessibilityScreenDisabled property value. Indicates if Accessibility screen is disabled
     * @return bool|null
    */
    public function getAccessibilityScreenDisabled(): ?bool {
        return $this->accessibilityScreenDisabled;
    }

    /**
     * Gets the autoUnlockWithWatchDisabled property value. Indicates if UnlockWithWatch screen is disabled
     * @return bool|null
    */
    public function getAutoUnlockWithWatchDisabled(): ?bool {
        return $this->autoUnlockWithWatchDisabled;
    }

    /**
     * Gets the chooseYourLockScreenDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     * @return bool|null
    */
    public function getChooseYourLockScreenDisabled(): ?bool {
        return $this->chooseYourLockScreenDisabled;
    }

    /**
     * Gets the dontAutoPopulatePrimaryAccountInfo property value. Indicates whether Setup Assistant will auto populate the primary account information
     * @return bool|null
    */
    public function getDontAutoPopulatePrimaryAccountInfo(): ?bool {
        return $this->dontAutoPopulatePrimaryAccountInfo;
    }

    /**
     * Gets the enableRestrictEditing property value. Indicates whether the user will enable blockediting
     * @return bool|null
    */
    public function getEnableRestrictEditing(): ?bool {
        return $this->enableRestrictEditing;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessibilityScreenDisabled' => function (ParseNode $n) use ($o) { $o->setAccessibilityScreenDisabled($n->getBooleanValue()); },
            'autoUnlockWithWatchDisabled' => function (ParseNode $n) use ($o) { $o->setAutoUnlockWithWatchDisabled($n->getBooleanValue()); },
            'chooseYourLockScreenDisabled' => function (ParseNode $n) use ($o) { $o->setChooseYourLockScreenDisabled($n->getBooleanValue()); },
            'dontAutoPopulatePrimaryAccountInfo' => function (ParseNode $n) use ($o) { $o->setDontAutoPopulatePrimaryAccountInfo($n->getBooleanValue()); },
            'enableRestrictEditing' => function (ParseNode $n) use ($o) { $o->setEnableRestrictEditing($n->getBooleanValue()); },
            'fileVaultDisabled' => function (ParseNode $n) use ($o) { $o->setFileVaultDisabled($n->getBooleanValue()); },
            'iCloudDiagnosticsDisabled' => function (ParseNode $n) use ($o) { $o->setICloudDiagnosticsDisabled($n->getBooleanValue()); },
            'iCloudStorageDisabled' => function (ParseNode $n) use ($o) { $o->setICloudStorageDisabled($n->getBooleanValue()); },
            'isLocalPrimaryAccount' => function (ParseNode $n) use ($o) { $o->setIsLocalPrimaryAccount($n->getBooleanValue()); },
            'isPrimaryUser' => function (ParseNode $n) use ($o) { $o->setIsPrimaryUser($n->getBooleanValue()); },
            'lockPrimaryAccountInfo' => function (ParseNode $n) use ($o) { $o->setLockPrimaryAccountInfo($n->getBooleanValue()); },
            'managedLocalUserShortName' => function (ParseNode $n) use ($o) { $o->setManagedLocalUserShortName($n->getBooleanValue()); },
            'passCodeDisabled' => function (ParseNode $n) use ($o) { $o->setPassCodeDisabled($n->getBooleanValue()); },
            'prefillAccountInfo' => function (ParseNode $n) use ($o) { $o->setPrefillAccountInfo($n->getBooleanValue()); },
            'primaryAccountFullName' => function (ParseNode $n) use ($o) { $o->setPrimaryAccountFullName($n->getStringValue()); },
            'primaryAccountUserName' => function (ParseNode $n) use ($o) { $o->setPrimaryAccountUserName($n->getStringValue()); },
            'primaryUser' => function (ParseNode $n) use ($o) { $o->setPrimaryUser($n->getStringValue()); },
            'primaryUserFullName' => function (ParseNode $n) use ($o) { $o->setPrimaryUserFullName($n->getStringValue()); },
            'registrationDisabled' => function (ParseNode $n) use ($o) { $o->setRegistrationDisabled($n->getBooleanValue()); },
            'requestRequiresNetworkTether' => function (ParseNode $n) use ($o) { $o->setRequestRequiresNetworkTether($n->getBooleanValue()); },
            'setPrimarySetupAccountAsRegularUser' => function (ParseNode $n) use ($o) { $o->setSetPrimarySetupAccountAsRegularUser($n->getBooleanValue()); },
            'skipPrimarySetupAccountCreation' => function (ParseNode $n) use ($o) { $o->setSkipPrimarySetupAccountCreation($n->getBooleanValue()); },
            'zoomDisabled' => function (ParseNode $n) use ($o) { $o->setZoomDisabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the fileVaultDisabled property value. Indicates if file vault is disabled
     * @return bool|null
    */
    public function getFileVaultDisabled(): ?bool {
        return $this->fileVaultDisabled;
    }

    /**
     * Gets the iCloudDiagnosticsDisabled property value. Indicates if iCloud Analytics screen is disabled
     * @return bool|null
    */
    public function getICloudDiagnosticsDisabled(): ?bool {
        return $this->iCloudDiagnosticsDisabled;
    }

    /**
     * Gets the iCloudStorageDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     * @return bool|null
    */
    public function getICloudStorageDisabled(): ?bool {
        return $this->iCloudStorageDisabled;
    }

    /**
     * Gets the isLocalPrimaryAccount property value. Indicates whether the profile is a local account
     * @return bool|null
    */
    public function getIsLocalPrimaryAccount(): ?bool {
        return $this->isLocalPrimaryAccount;
    }

    /**
     * Gets the isPrimaryUser property value. Indicates whether the profile is a primary user
     * @return bool|null
    */
    public function getIsPrimaryUser(): ?bool {
        return $this->isPrimaryUser;
    }

    /**
     * Gets the lockPrimaryAccountInfo property value. Indicates whether the primary account information will be locked
     * @return bool|null
    */
    public function getLockPrimaryAccountInfo(): ?bool {
        return $this->lockPrimaryAccountInfo;
    }

    /**
     * Gets the managedLocalUserShortName property value. Indicates whether or not this is the short name of the local account to manage
     * @return bool|null
    */
    public function getManagedLocalUserShortName(): ?bool {
        return $this->managedLocalUserShortName;
    }

    /**
     * Gets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     * @return bool|null
    */
    public function getPassCodeDisabled(): ?bool {
        return $this->passCodeDisabled;
    }

    /**
     * Gets the prefillAccountInfo property value. Indicates whether the user will prefill their account info
     * @return bool|null
    */
    public function getPrefillAccountInfo(): ?bool {
        return $this->prefillAccountInfo;
    }

    /**
     * Gets the primaryAccountFullName property value. Indicates what the full name for the primary account is
     * @return string|null
    */
    public function getPrimaryAccountFullName(): ?string {
        return $this->primaryAccountFullName;
    }

    /**
     * Gets the primaryAccountUserName property value. Indicates what the account name for the primary account is
     * @return string|null
    */
    public function getPrimaryAccountUserName(): ?string {
        return $this->primaryAccountUserName;
    }

    /**
     * Gets the primaryUser property value. Indicates who the primary user of the profile is
     * @return string|null
    */
    public function getPrimaryUser(): ?string {
        return $this->primaryUser;
    }

    /**
     * Gets the primaryUserFullName property value. Indicates who the primary user of the profile is
     * @return string|null
    */
    public function getPrimaryUserFullName(): ?string {
        return $this->primaryUserFullName;
    }

    /**
     * Gets the registrationDisabled property value. Indicates if registration is disabled
     * @return bool|null
    */
    public function getRegistrationDisabled(): ?bool {
        return $this->registrationDisabled;
    }

    /**
     * Gets the requestRequiresNetworkTether property value. Indicates if the device is network-tethered to run the command
     * @return bool|null
    */
    public function getRequestRequiresNetworkTether(): ?bool {
        return $this->requestRequiresNetworkTether;
    }

    /**
     * Gets the setPrimarySetupAccountAsRegularUser property value. Indicates whether Setup Assistant will set the account as a regular user
     * @return bool|null
    */
    public function getSetPrimarySetupAccountAsRegularUser(): ?bool {
        return $this->setPrimarySetupAccountAsRegularUser;
    }

    /**
     * Gets the skipPrimarySetupAccountCreation property value. Indicates whether Setup Assistant will skip the user interface for primary account setup
     * @return bool|null
    */
    public function getSkipPrimarySetupAccountCreation(): ?bool {
        return $this->skipPrimarySetupAccountCreation;
    }

    /**
     * Gets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     * @return bool|null
    */
    public function getZoomDisabled(): ?bool {
        return $this->zoomDisabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accessibilityScreenDisabled', $this->accessibilityScreenDisabled);
        $writer->writeBooleanValue('autoUnlockWithWatchDisabled', $this->autoUnlockWithWatchDisabled);
        $writer->writeBooleanValue('chooseYourLockScreenDisabled', $this->chooseYourLockScreenDisabled);
        $writer->writeBooleanValue('dontAutoPopulatePrimaryAccountInfo', $this->dontAutoPopulatePrimaryAccountInfo);
        $writer->writeBooleanValue('enableRestrictEditing', $this->enableRestrictEditing);
        $writer->writeBooleanValue('fileVaultDisabled', $this->fileVaultDisabled);
        $writer->writeBooleanValue('iCloudDiagnosticsDisabled', $this->iCloudDiagnosticsDisabled);
        $writer->writeBooleanValue('iCloudStorageDisabled', $this->iCloudStorageDisabled);
        $writer->writeBooleanValue('isLocalPrimaryAccount', $this->isLocalPrimaryAccount);
        $writer->writeBooleanValue('isPrimaryUser', $this->isPrimaryUser);
        $writer->writeBooleanValue('lockPrimaryAccountInfo', $this->lockPrimaryAccountInfo);
        $writer->writeBooleanValue('managedLocalUserShortName', $this->managedLocalUserShortName);
        $writer->writeBooleanValue('passCodeDisabled', $this->passCodeDisabled);
        $writer->writeBooleanValue('prefillAccountInfo', $this->prefillAccountInfo);
        $writer->writeStringValue('primaryAccountFullName', $this->primaryAccountFullName);
        $writer->writeStringValue('primaryAccountUserName', $this->primaryAccountUserName);
        $writer->writeStringValue('primaryUser', $this->primaryUser);
        $writer->writeStringValue('primaryUserFullName', $this->primaryUserFullName);
        $writer->writeBooleanValue('registrationDisabled', $this->registrationDisabled);
        $writer->writeBooleanValue('requestRequiresNetworkTether', $this->requestRequiresNetworkTether);
        $writer->writeBooleanValue('setPrimarySetupAccountAsRegularUser', $this->setPrimarySetupAccountAsRegularUser);
        $writer->writeBooleanValue('skipPrimarySetupAccountCreation', $this->skipPrimarySetupAccountCreation);
        $writer->writeBooleanValue('zoomDisabled', $this->zoomDisabled);
    }

    /**
     * Sets the accessibilityScreenDisabled property value. Indicates if Accessibility screen is disabled
     *  @param bool|null $value Value to set for the accessibilityScreenDisabled property.
    */
    public function setAccessibilityScreenDisabled(?bool $value ): void {
        $this->accessibilityScreenDisabled = $value;
    }

    /**
     * Sets the autoUnlockWithWatchDisabled property value. Indicates if UnlockWithWatch screen is disabled
     *  @param bool|null $value Value to set for the autoUnlockWithWatchDisabled property.
    */
    public function setAutoUnlockWithWatchDisabled(?bool $value ): void {
        $this->autoUnlockWithWatchDisabled = $value;
    }

    /**
     * Sets the chooseYourLockScreenDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     *  @param bool|null $value Value to set for the chooseYourLockScreenDisabled property.
    */
    public function setChooseYourLockScreenDisabled(?bool $value ): void {
        $this->chooseYourLockScreenDisabled = $value;
    }

    /**
     * Sets the dontAutoPopulatePrimaryAccountInfo property value. Indicates whether Setup Assistant will auto populate the primary account information
     *  @param bool|null $value Value to set for the dontAutoPopulatePrimaryAccountInfo property.
    */
    public function setDontAutoPopulatePrimaryAccountInfo(?bool $value ): void {
        $this->dontAutoPopulatePrimaryAccountInfo = $value;
    }

    /**
     * Sets the enableRestrictEditing property value. Indicates whether the user will enable blockediting
     *  @param bool|null $value Value to set for the enableRestrictEditing property.
    */
    public function setEnableRestrictEditing(?bool $value ): void {
        $this->enableRestrictEditing = $value;
    }

    /**
     * Sets the fileVaultDisabled property value. Indicates if file vault is disabled
     *  @param bool|null $value Value to set for the fileVaultDisabled property.
    */
    public function setFileVaultDisabled(?bool $value ): void {
        $this->fileVaultDisabled = $value;
    }

    /**
     * Sets the iCloudDiagnosticsDisabled property value. Indicates if iCloud Analytics screen is disabled
     *  @param bool|null $value Value to set for the iCloudDiagnosticsDisabled property.
    */
    public function setICloudDiagnosticsDisabled(?bool $value ): void {
        $this->iCloudDiagnosticsDisabled = $value;
    }

    /**
     * Sets the iCloudStorageDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     *  @param bool|null $value Value to set for the iCloudStorageDisabled property.
    */
    public function setICloudStorageDisabled(?bool $value ): void {
        $this->iCloudStorageDisabled = $value;
    }

    /**
     * Sets the isLocalPrimaryAccount property value. Indicates whether the profile is a local account
     *  @param bool|null $value Value to set for the isLocalPrimaryAccount property.
    */
    public function setIsLocalPrimaryAccount(?bool $value ): void {
        $this->isLocalPrimaryAccount = $value;
    }

    /**
     * Sets the isPrimaryUser property value. Indicates whether the profile is a primary user
     *  @param bool|null $value Value to set for the isPrimaryUser property.
    */
    public function setIsPrimaryUser(?bool $value ): void {
        $this->isPrimaryUser = $value;
    }

    /**
     * Sets the lockPrimaryAccountInfo property value. Indicates whether the primary account information will be locked
     *  @param bool|null $value Value to set for the lockPrimaryAccountInfo property.
    */
    public function setLockPrimaryAccountInfo(?bool $value ): void {
        $this->lockPrimaryAccountInfo = $value;
    }

    /**
     * Sets the managedLocalUserShortName property value. Indicates whether or not this is the short name of the local account to manage
     *  @param bool|null $value Value to set for the managedLocalUserShortName property.
    */
    public function setManagedLocalUserShortName(?bool $value ): void {
        $this->managedLocalUserShortName = $value;
    }

    /**
     * Sets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     *  @param bool|null $value Value to set for the passCodeDisabled property.
    */
    public function setPassCodeDisabled(?bool $value ): void {
        $this->passCodeDisabled = $value;
    }

    /**
     * Sets the prefillAccountInfo property value. Indicates whether the user will prefill their account info
     *  @param bool|null $value Value to set for the prefillAccountInfo property.
    */
    public function setPrefillAccountInfo(?bool $value ): void {
        $this->prefillAccountInfo = $value;
    }

    /**
     * Sets the primaryAccountFullName property value. Indicates what the full name for the primary account is
     *  @param string|null $value Value to set for the primaryAccountFullName property.
    */
    public function setPrimaryAccountFullName(?string $value ): void {
        $this->primaryAccountFullName = $value;
    }

    /**
     * Sets the primaryAccountUserName property value. Indicates what the account name for the primary account is
     *  @param string|null $value Value to set for the primaryAccountUserName property.
    */
    public function setPrimaryAccountUserName(?string $value ): void {
        $this->primaryAccountUserName = $value;
    }

    /**
     * Sets the primaryUser property value. Indicates who the primary user of the profile is
     *  @param string|null $value Value to set for the primaryUser property.
    */
    public function setPrimaryUser(?string $value ): void {
        $this->primaryUser = $value;
    }

    /**
     * Sets the primaryUserFullName property value. Indicates who the primary user of the profile is
     *  @param string|null $value Value to set for the primaryUserFullName property.
    */
    public function setPrimaryUserFullName(?string $value ): void {
        $this->primaryUserFullName = $value;
    }

    /**
     * Sets the registrationDisabled property value. Indicates if registration is disabled
     *  @param bool|null $value Value to set for the registrationDisabled property.
    */
    public function setRegistrationDisabled(?bool $value ): void {
        $this->registrationDisabled = $value;
    }

    /**
     * Sets the requestRequiresNetworkTether property value. Indicates if the device is network-tethered to run the command
     *  @param bool|null $value Value to set for the requestRequiresNetworkTether property.
    */
    public function setRequestRequiresNetworkTether(?bool $value ): void {
        $this->requestRequiresNetworkTether = $value;
    }

    /**
     * Sets the setPrimarySetupAccountAsRegularUser property value. Indicates whether Setup Assistant will set the account as a regular user
     *  @param bool|null $value Value to set for the setPrimarySetupAccountAsRegularUser property.
    */
    public function setSetPrimarySetupAccountAsRegularUser(?bool $value ): void {
        $this->setPrimarySetupAccountAsRegularUser = $value;
    }

    /**
     * Sets the skipPrimarySetupAccountCreation property value. Indicates whether Setup Assistant will skip the user interface for primary account setup
     *  @param bool|null $value Value to set for the skipPrimarySetupAccountCreation property.
    */
    public function setSkipPrimarySetupAccountCreation(?bool $value ): void {
        $this->skipPrimarySetupAccountCreation = $value;
    }

    /**
     * Sets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     *  @param bool|null $value Value to set for the zoomDisabled property.
    */
    public function setZoomDisabled(?bool $value ): void {
        $this->zoomDisabled = $value;
    }

}
