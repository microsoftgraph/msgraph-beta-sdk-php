<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DepMacOSEnrollmentProfile extends DepEnrollmentBaseProfile implements Parsable 
{
    /**
     * Instantiates a new depMacOSEnrollmentProfile and sets the default values.
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
        return $this->getBackingStore()->get('accessibilityScreenDisabled');
    }

    /**
     * Gets the autoUnlockWithWatchDisabled property value. Indicates if UnlockWithWatch screen is disabled
     * @return bool|null
    */
    public function getAutoUnlockWithWatchDisabled(): ?bool {
        return $this->getBackingStore()->get('autoUnlockWithWatchDisabled');
    }

    /**
     * Gets the chooseYourLockScreenDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     * @return bool|null
    */
    public function getChooseYourLockScreenDisabled(): ?bool {
        return $this->getBackingStore()->get('chooseYourLockScreenDisabled');
    }

    /**
     * Gets the dontAutoPopulatePrimaryAccountInfo property value. Indicates whether Setup Assistant will auto populate the primary account information
     * @return bool|null
    */
    public function getDontAutoPopulatePrimaryAccountInfo(): ?bool {
        return $this->getBackingStore()->get('dontAutoPopulatePrimaryAccountInfo');
    }

    /**
     * Gets the enableRestrictEditing property value. Indicates whether the user will enable blockediting
     * @return bool|null
    */
    public function getEnableRestrictEditing(): ?bool {
        return $this->getBackingStore()->get('enableRestrictEditing');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessibilityScreenDisabled' => fn(ParseNode $n) => $o->setAccessibilityScreenDisabled($n->getBooleanValue()),
            'autoUnlockWithWatchDisabled' => fn(ParseNode $n) => $o->setAutoUnlockWithWatchDisabled($n->getBooleanValue()),
            'chooseYourLockScreenDisabled' => fn(ParseNode $n) => $o->setChooseYourLockScreenDisabled($n->getBooleanValue()),
            'dontAutoPopulatePrimaryAccountInfo' => fn(ParseNode $n) => $o->setDontAutoPopulatePrimaryAccountInfo($n->getBooleanValue()),
            'enableRestrictEditing' => fn(ParseNode $n) => $o->setEnableRestrictEditing($n->getBooleanValue()),
            'fileVaultDisabled' => fn(ParseNode $n) => $o->setFileVaultDisabled($n->getBooleanValue()),
            'iCloudDiagnosticsDisabled' => fn(ParseNode $n) => $o->setICloudDiagnosticsDisabled($n->getBooleanValue()),
            'iCloudStorageDisabled' => fn(ParseNode $n) => $o->setICloudStorageDisabled($n->getBooleanValue()),
            'isLocalPrimaryAccount' => fn(ParseNode $n) => $o->setIsLocalPrimaryAccount($n->getBooleanValue()),
            'isPrimaryUser' => fn(ParseNode $n) => $o->setIsPrimaryUser($n->getBooleanValue()),
            'lockPrimaryAccountInfo' => fn(ParseNode $n) => $o->setLockPrimaryAccountInfo($n->getBooleanValue()),
            'managedLocalUserShortName' => fn(ParseNode $n) => $o->setManagedLocalUserShortName($n->getBooleanValue()),
            'passCodeDisabled' => fn(ParseNode $n) => $o->setPassCodeDisabled($n->getBooleanValue()),
            'prefillAccountInfo' => fn(ParseNode $n) => $o->setPrefillAccountInfo($n->getBooleanValue()),
            'primaryAccountFullName' => fn(ParseNode $n) => $o->setPrimaryAccountFullName($n->getStringValue()),
            'primaryAccountUserName' => fn(ParseNode $n) => $o->setPrimaryAccountUserName($n->getStringValue()),
            'primaryUser' => fn(ParseNode $n) => $o->setPrimaryUser($n->getStringValue()),
            'primaryUserFullName' => fn(ParseNode $n) => $o->setPrimaryUserFullName($n->getStringValue()),
            'registrationDisabled' => fn(ParseNode $n) => $o->setRegistrationDisabled($n->getBooleanValue()),
            'requestRequiresNetworkTether' => fn(ParseNode $n) => $o->setRequestRequiresNetworkTether($n->getBooleanValue()),
            'setPrimarySetupAccountAsRegularUser' => fn(ParseNode $n) => $o->setSetPrimarySetupAccountAsRegularUser($n->getBooleanValue()),
            'skipPrimarySetupAccountCreation' => fn(ParseNode $n) => $o->setSkipPrimarySetupAccountCreation($n->getBooleanValue()),
            'zoomDisabled' => fn(ParseNode $n) => $o->setZoomDisabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the fileVaultDisabled property value. Indicates if file vault is disabled
     * @return bool|null
    */
    public function getFileVaultDisabled(): ?bool {
        return $this->getBackingStore()->get('fileVaultDisabled');
    }

    /**
     * Gets the iCloudDiagnosticsDisabled property value. Indicates if iCloud Analytics screen is disabled
     * @return bool|null
    */
    public function getICloudDiagnosticsDisabled(): ?bool {
        return $this->getBackingStore()->get('iCloudDiagnosticsDisabled');
    }

    /**
     * Gets the iCloudStorageDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     * @return bool|null
    */
    public function getICloudStorageDisabled(): ?bool {
        return $this->getBackingStore()->get('iCloudStorageDisabled');
    }

    /**
     * Gets the isLocalPrimaryAccount property value. Indicates whether the profile is a local account
     * @return bool|null
    */
    public function getIsLocalPrimaryAccount(): ?bool {
        return $this->getBackingStore()->get('isLocalPrimaryAccount');
    }

    /**
     * Gets the isPrimaryUser property value. Indicates whether the profile is a primary user
     * @return bool|null
    */
    public function getIsPrimaryUser(): ?bool {
        return $this->getBackingStore()->get('isPrimaryUser');
    }

    /**
     * Gets the lockPrimaryAccountInfo property value. Indicates whether the primary account information will be locked
     * @return bool|null
    */
    public function getLockPrimaryAccountInfo(): ?bool {
        return $this->getBackingStore()->get('lockPrimaryAccountInfo');
    }

    /**
     * Gets the managedLocalUserShortName property value. Indicates whether or not this is the short name of the local account to manage
     * @return bool|null
    */
    public function getManagedLocalUserShortName(): ?bool {
        return $this->getBackingStore()->get('managedLocalUserShortName');
    }

    /**
     * Gets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     * @return bool|null
    */
    public function getPassCodeDisabled(): ?bool {
        return $this->getBackingStore()->get('passCodeDisabled');
    }

    /**
     * Gets the prefillAccountInfo property value. Indicates whether the user will prefill their account info
     * @return bool|null
    */
    public function getPrefillAccountInfo(): ?bool {
        return $this->getBackingStore()->get('prefillAccountInfo');
    }

    /**
     * Gets the primaryAccountFullName property value. Indicates what the full name for the primary account is
     * @return string|null
    */
    public function getPrimaryAccountFullName(): ?string {
        return $this->getBackingStore()->get('primaryAccountFullName');
    }

    /**
     * Gets the primaryAccountUserName property value. Indicates what the account name for the primary account is
     * @return string|null
    */
    public function getPrimaryAccountUserName(): ?string {
        return $this->getBackingStore()->get('primaryAccountUserName');
    }

    /**
     * Gets the primaryUser property value. Indicates who the primary user of the profile is
     * @return string|null
    */
    public function getPrimaryUser(): ?string {
        return $this->getBackingStore()->get('primaryUser');
    }

    /**
     * Gets the primaryUserFullName property value. Indicates who the primary user of the profile is
     * @return string|null
    */
    public function getPrimaryUserFullName(): ?string {
        return $this->getBackingStore()->get('primaryUserFullName');
    }

    /**
     * Gets the registrationDisabled property value. Indicates if registration is disabled
     * @return bool|null
    */
    public function getRegistrationDisabled(): ?bool {
        return $this->getBackingStore()->get('registrationDisabled');
    }

    /**
     * Gets the requestRequiresNetworkTether property value. Indicates if the device is network-tethered to run the command
     * @return bool|null
    */
    public function getRequestRequiresNetworkTether(): ?bool {
        return $this->getBackingStore()->get('requestRequiresNetworkTether');
    }

    /**
     * Gets the setPrimarySetupAccountAsRegularUser property value. Indicates whether Setup Assistant will set the account as a regular user
     * @return bool|null
    */
    public function getSetPrimarySetupAccountAsRegularUser(): ?bool {
        return $this->getBackingStore()->get('setPrimarySetupAccountAsRegularUser');
    }

    /**
     * Gets the skipPrimarySetupAccountCreation property value. Indicates whether Setup Assistant will skip the user interface for primary account setup
     * @return bool|null
    */
    public function getSkipPrimarySetupAccountCreation(): ?bool {
        return $this->getBackingStore()->get('skipPrimarySetupAccountCreation');
    }

    /**
     * Gets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     * @return bool|null
    */
    public function getZoomDisabled(): ?bool {
        return $this->getBackingStore()->get('zoomDisabled');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accessibilityScreenDisabled', $this->getAccessibilityScreenDisabled());
        $writer->writeBooleanValue('autoUnlockWithWatchDisabled', $this->getAutoUnlockWithWatchDisabled());
        $writer->writeBooleanValue('chooseYourLockScreenDisabled', $this->getChooseYourLockScreenDisabled());
        $writer->writeBooleanValue('dontAutoPopulatePrimaryAccountInfo', $this->getDontAutoPopulatePrimaryAccountInfo());
        $writer->writeBooleanValue('enableRestrictEditing', $this->getEnableRestrictEditing());
        $writer->writeBooleanValue('fileVaultDisabled', $this->getFileVaultDisabled());
        $writer->writeBooleanValue('iCloudDiagnosticsDisabled', $this->getICloudDiagnosticsDisabled());
        $writer->writeBooleanValue('iCloudStorageDisabled', $this->getICloudStorageDisabled());
        $writer->writeBooleanValue('isLocalPrimaryAccount', $this->getIsLocalPrimaryAccount());
        $writer->writeBooleanValue('isPrimaryUser', $this->getIsPrimaryUser());
        $writer->writeBooleanValue('lockPrimaryAccountInfo', $this->getLockPrimaryAccountInfo());
        $writer->writeBooleanValue('managedLocalUserShortName', $this->getManagedLocalUserShortName());
        $writer->writeBooleanValue('passCodeDisabled', $this->getPassCodeDisabled());
        $writer->writeBooleanValue('prefillAccountInfo', $this->getPrefillAccountInfo());
        $writer->writeStringValue('primaryAccountFullName', $this->getPrimaryAccountFullName());
        $writer->writeStringValue('primaryAccountUserName', $this->getPrimaryAccountUserName());
        $writer->writeStringValue('primaryUser', $this->getPrimaryUser());
        $writer->writeStringValue('primaryUserFullName', $this->getPrimaryUserFullName());
        $writer->writeBooleanValue('registrationDisabled', $this->getRegistrationDisabled());
        $writer->writeBooleanValue('requestRequiresNetworkTether', $this->getRequestRequiresNetworkTether());
        $writer->writeBooleanValue('setPrimarySetupAccountAsRegularUser', $this->getSetPrimarySetupAccountAsRegularUser());
        $writer->writeBooleanValue('skipPrimarySetupAccountCreation', $this->getSkipPrimarySetupAccountCreation());
        $writer->writeBooleanValue('zoomDisabled', $this->getZoomDisabled());
    }

    /**
     * Sets the accessibilityScreenDisabled property value. Indicates if Accessibility screen is disabled
     *  @param bool|null $value Value to set for the accessibilityScreenDisabled property.
    */
    public function setAccessibilityScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('accessibilityScreenDisabled', $value);
    }

    /**
     * Sets the autoUnlockWithWatchDisabled property value. Indicates if UnlockWithWatch screen is disabled
     *  @param bool|null $value Value to set for the autoUnlockWithWatchDisabled property.
    */
    public function setAutoUnlockWithWatchDisabled(?bool $value): void {
        $this->getBackingStore()->set('autoUnlockWithWatchDisabled', $value);
    }

    /**
     * Sets the chooseYourLockScreenDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     *  @param bool|null $value Value to set for the chooseYourLockScreenDisabled property.
    */
    public function setChooseYourLockScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('chooseYourLockScreenDisabled', $value);
    }

    /**
     * Sets the dontAutoPopulatePrimaryAccountInfo property value. Indicates whether Setup Assistant will auto populate the primary account information
     *  @param bool|null $value Value to set for the dontAutoPopulatePrimaryAccountInfo property.
    */
    public function setDontAutoPopulatePrimaryAccountInfo(?bool $value): void {
        $this->getBackingStore()->set('dontAutoPopulatePrimaryAccountInfo', $value);
    }

    /**
     * Sets the enableRestrictEditing property value. Indicates whether the user will enable blockediting
     *  @param bool|null $value Value to set for the enableRestrictEditing property.
    */
    public function setEnableRestrictEditing(?bool $value): void {
        $this->getBackingStore()->set('enableRestrictEditing', $value);
    }

    /**
     * Sets the fileVaultDisabled property value. Indicates if file vault is disabled
     *  @param bool|null $value Value to set for the fileVaultDisabled property.
    */
    public function setFileVaultDisabled(?bool $value): void {
        $this->getBackingStore()->set('fileVaultDisabled', $value);
    }

    /**
     * Sets the iCloudDiagnosticsDisabled property value. Indicates if iCloud Analytics screen is disabled
     *  @param bool|null $value Value to set for the iCloudDiagnosticsDisabled property.
    */
    public function setICloudDiagnosticsDisabled(?bool $value): void {
        $this->getBackingStore()->set('iCloudDiagnosticsDisabled', $value);
    }

    /**
     * Sets the iCloudStorageDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     *  @param bool|null $value Value to set for the iCloudStorageDisabled property.
    */
    public function setICloudStorageDisabled(?bool $value): void {
        $this->getBackingStore()->set('iCloudStorageDisabled', $value);
    }

    /**
     * Sets the isLocalPrimaryAccount property value. Indicates whether the profile is a local account
     *  @param bool|null $value Value to set for the isLocalPrimaryAccount property.
    */
    public function setIsLocalPrimaryAccount(?bool $value): void {
        $this->getBackingStore()->set('isLocalPrimaryAccount', $value);
    }

    /**
     * Sets the isPrimaryUser property value. Indicates whether the profile is a primary user
     *  @param bool|null $value Value to set for the isPrimaryUser property.
    */
    public function setIsPrimaryUser(?bool $value): void {
        $this->getBackingStore()->set('isPrimaryUser', $value);
    }

    /**
     * Sets the lockPrimaryAccountInfo property value. Indicates whether the primary account information will be locked
     *  @param bool|null $value Value to set for the lockPrimaryAccountInfo property.
    */
    public function setLockPrimaryAccountInfo(?bool $value): void {
        $this->getBackingStore()->set('lockPrimaryAccountInfo', $value);
    }

    /**
     * Sets the managedLocalUserShortName property value. Indicates whether or not this is the short name of the local account to manage
     *  @param bool|null $value Value to set for the managedLocalUserShortName property.
    */
    public function setManagedLocalUserShortName(?bool $value): void {
        $this->getBackingStore()->set('managedLocalUserShortName', $value);
    }

    /**
     * Sets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     *  @param bool|null $value Value to set for the passCodeDisabled property.
    */
    public function setPassCodeDisabled(?bool $value): void {
        $this->getBackingStore()->set('passCodeDisabled', $value);
    }

    /**
     * Sets the prefillAccountInfo property value. Indicates whether the user will prefill their account info
     *  @param bool|null $value Value to set for the prefillAccountInfo property.
    */
    public function setPrefillAccountInfo(?bool $value): void {
        $this->getBackingStore()->set('prefillAccountInfo', $value);
    }

    /**
     * Sets the primaryAccountFullName property value. Indicates what the full name for the primary account is
     *  @param string|null $value Value to set for the primaryAccountFullName property.
    */
    public function setPrimaryAccountFullName(?string $value): void {
        $this->getBackingStore()->set('primaryAccountFullName', $value);
    }

    /**
     * Sets the primaryAccountUserName property value. Indicates what the account name for the primary account is
     *  @param string|null $value Value to set for the primaryAccountUserName property.
    */
    public function setPrimaryAccountUserName(?string $value): void {
        $this->getBackingStore()->set('primaryAccountUserName', $value);
    }

    /**
     * Sets the primaryUser property value. Indicates who the primary user of the profile is
     *  @param string|null $value Value to set for the primaryUser property.
    */
    public function setPrimaryUser(?string $value): void {
        $this->getBackingStore()->set('primaryUser', $value);
    }

    /**
     * Sets the primaryUserFullName property value. Indicates who the primary user of the profile is
     *  @param string|null $value Value to set for the primaryUserFullName property.
    */
    public function setPrimaryUserFullName(?string $value): void {
        $this->getBackingStore()->set('primaryUserFullName', $value);
    }

    /**
     * Sets the registrationDisabled property value. Indicates if registration is disabled
     *  @param bool|null $value Value to set for the registrationDisabled property.
    */
    public function setRegistrationDisabled(?bool $value): void {
        $this->getBackingStore()->set('registrationDisabled', $value);
    }

    /**
     * Sets the requestRequiresNetworkTether property value. Indicates if the device is network-tethered to run the command
     *  @param bool|null $value Value to set for the requestRequiresNetworkTether property.
    */
    public function setRequestRequiresNetworkTether(?bool $value): void {
        $this->getBackingStore()->set('requestRequiresNetworkTether', $value);
    }

    /**
     * Sets the setPrimarySetupAccountAsRegularUser property value. Indicates whether Setup Assistant will set the account as a regular user
     *  @param bool|null $value Value to set for the setPrimarySetupAccountAsRegularUser property.
    */
    public function setSetPrimarySetupAccountAsRegularUser(?bool $value): void {
        $this->getBackingStore()->set('setPrimarySetupAccountAsRegularUser', $value);
    }

    /**
     * Sets the skipPrimarySetupAccountCreation property value. Indicates whether Setup Assistant will skip the user interface for primary account setup
     *  @param bool|null $value Value to set for the skipPrimarySetupAccountCreation property.
    */
    public function setSkipPrimarySetupAccountCreation(?bool $value): void {
        $this->getBackingStore()->set('skipPrimarySetupAccountCreation', $value);
    }

    /**
     * Sets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     *  @param bool|null $value Value to set for the zoomDisabled property.
    */
    public function setZoomDisabled(?bool $value): void {
        $this->getBackingStore()->set('zoomDisabled', $value);
    }

}
