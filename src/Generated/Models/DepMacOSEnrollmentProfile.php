<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DepMacOSEnrollmentProfile extends DepEnrollmentBaseProfile implements Parsable 
{
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
        $val = $this->getBackingStore()->get('accessibilityScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessibilityScreenDisabled'");
    }

    /**
     * Gets the adminAccountFullName property value. Indicates what the full name for the admin account is
     * @return string|null
    */
    public function getAdminAccountFullName(): ?string {
        $val = $this->getBackingStore()->get('adminAccountFullName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adminAccountFullName'");
    }

    /**
     * Gets the adminAccountPassword property value. Indicates what the password for the admin account is
     * @return string|null
    */
    public function getAdminAccountPassword(): ?string {
        $val = $this->getBackingStore()->get('adminAccountPassword');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adminAccountPassword'");
    }

    /**
     * Gets the adminAccountUserName property value. Indicates what the user name for the admin account is
     * @return string|null
    */
    public function getAdminAccountUserName(): ?string {
        $val = $this->getBackingStore()->get('adminAccountUserName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adminAccountUserName'");
    }

    /**
     * Gets the autoAdvanceSetupEnabled property value. Indicates if Setup Assistant will automatically advance through its screen
     * @return bool|null
    */
    public function getAutoAdvanceSetupEnabled(): ?bool {
        $val = $this->getBackingStore()->get('autoAdvanceSetupEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoAdvanceSetupEnabled'");
    }

    /**
     * Gets the autoUnlockWithWatchDisabled property value. Indicates if UnlockWithWatch screen is disabled
     * @return bool|null
    */
    public function getAutoUnlockWithWatchDisabled(): ?bool {
        $val = $this->getBackingStore()->get('autoUnlockWithWatchDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoUnlockWithWatchDisabled'");
    }

    /**
     * Gets the chooseYourLockScreenDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     * @return bool|null
    */
    public function getChooseYourLockScreenDisabled(): ?bool {
        $val = $this->getBackingStore()->get('chooseYourLockScreenDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chooseYourLockScreenDisabled'");
    }

    /**
     * Gets the dontAutoPopulatePrimaryAccountInfo property value. Indicates whether Setup Assistant will auto populate the primary account information
     * @return bool|null
    */
    public function getDontAutoPopulatePrimaryAccountInfo(): ?bool {
        $val = $this->getBackingStore()->get('dontAutoPopulatePrimaryAccountInfo');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dontAutoPopulatePrimaryAccountInfo'");
    }

    /**
     * Gets the enableRestrictEditing property value. Indicates whether the user will enable blockediting
     * @return bool|null
    */
    public function getEnableRestrictEditing(): ?bool {
        $val = $this->getBackingStore()->get('enableRestrictEditing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableRestrictEditing'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessibilityScreenDisabled' => fn(ParseNode $n) => $o->setAccessibilityScreenDisabled($n->getBooleanValue()),
            'adminAccountFullName' => fn(ParseNode $n) => $o->setAdminAccountFullName($n->getStringValue()),
            'adminAccountPassword' => fn(ParseNode $n) => $o->setAdminAccountPassword($n->getStringValue()),
            'adminAccountUserName' => fn(ParseNode $n) => $o->setAdminAccountUserName($n->getStringValue()),
            'autoAdvanceSetupEnabled' => fn(ParseNode $n) => $o->setAutoAdvanceSetupEnabled($n->getBooleanValue()),
            'autoUnlockWithWatchDisabled' => fn(ParseNode $n) => $o->setAutoUnlockWithWatchDisabled($n->getBooleanValue()),
            'chooseYourLockScreenDisabled' => fn(ParseNode $n) => $o->setChooseYourLockScreenDisabled($n->getBooleanValue()),
            'dontAutoPopulatePrimaryAccountInfo' => fn(ParseNode $n) => $o->setDontAutoPopulatePrimaryAccountInfo($n->getBooleanValue()),
            'enableRestrictEditing' => fn(ParseNode $n) => $o->setEnableRestrictEditing($n->getBooleanValue()),
            'fileVaultDisabled' => fn(ParseNode $n) => $o->setFileVaultDisabled($n->getBooleanValue()),
            'hideAdminAccount' => fn(ParseNode $n) => $o->setHideAdminAccount($n->getBooleanValue()),
            'iCloudDiagnosticsDisabled' => fn(ParseNode $n) => $o->setICloudDiagnosticsDisabled($n->getBooleanValue()),
            'iCloudStorageDisabled' => fn(ParseNode $n) => $o->setICloudStorageDisabled($n->getBooleanValue()),
            'passCodeDisabled' => fn(ParseNode $n) => $o->setPassCodeDisabled($n->getBooleanValue()),
            'primaryAccountFullName' => fn(ParseNode $n) => $o->setPrimaryAccountFullName($n->getStringValue()),
            'primaryAccountUserName' => fn(ParseNode $n) => $o->setPrimaryAccountUserName($n->getStringValue()),
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
        $val = $this->getBackingStore()->get('fileVaultDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileVaultDisabled'");
    }

    /**
     * Gets the hideAdminAccount property value. Indicates whether the admin account should be hidded or not
     * @return bool|null
    */
    public function getHideAdminAccount(): ?bool {
        $val = $this->getBackingStore()->get('hideAdminAccount');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hideAdminAccount'");
    }

    /**
     * Gets the iCloudDiagnosticsDisabled property value. Indicates if iCloud Analytics screen is disabled
     * @return bool|null
    */
    public function getICloudDiagnosticsDisabled(): ?bool {
        $val = $this->getBackingStore()->get('iCloudDiagnosticsDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudDiagnosticsDisabled'");
    }

    /**
     * Gets the iCloudStorageDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     * @return bool|null
    */
    public function getICloudStorageDisabled(): ?bool {
        $val = $this->getBackingStore()->get('iCloudStorageDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iCloudStorageDisabled'");
    }

    /**
     * Gets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     * @return bool|null
    */
    public function getPassCodeDisabled(): ?bool {
        $val = $this->getBackingStore()->get('passCodeDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passCodeDisabled'");
    }

    /**
     * Gets the primaryAccountFullName property value. Indicates what the full name for the primary account is
     * @return string|null
    */
    public function getPrimaryAccountFullName(): ?string {
        $val = $this->getBackingStore()->get('primaryAccountFullName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryAccountFullName'");
    }

    /**
     * Gets the primaryAccountUserName property value. Indicates what the account name for the primary account is
     * @return string|null
    */
    public function getPrimaryAccountUserName(): ?string {
        $val = $this->getBackingStore()->get('primaryAccountUserName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryAccountUserName'");
    }

    /**
     * Gets the registrationDisabled property value. Indicates if registration is disabled
     * @return bool|null
    */
    public function getRegistrationDisabled(): ?bool {
        $val = $this->getBackingStore()->get('registrationDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrationDisabled'");
    }

    /**
     * Gets the requestRequiresNetworkTether property value. Indicates if the device is network-tethered to run the command
     * @return bool|null
    */
    public function getRequestRequiresNetworkTether(): ?bool {
        $val = $this->getBackingStore()->get('requestRequiresNetworkTether');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestRequiresNetworkTether'");
    }

    /**
     * Gets the setPrimarySetupAccountAsRegularUser property value. Indicates whether Setup Assistant will set the account as a regular user
     * @return bool|null
    */
    public function getSetPrimarySetupAccountAsRegularUser(): ?bool {
        $val = $this->getBackingStore()->get('setPrimarySetupAccountAsRegularUser');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'setPrimarySetupAccountAsRegularUser'");
    }

    /**
     * Gets the skipPrimarySetupAccountCreation property value. Indicates whether Setup Assistant will skip the user interface for primary account setup
     * @return bool|null
    */
    public function getSkipPrimarySetupAccountCreation(): ?bool {
        $val = $this->getBackingStore()->get('skipPrimarySetupAccountCreation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'skipPrimarySetupAccountCreation'");
    }

    /**
     * Gets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     * @return bool|null
    */
    public function getZoomDisabled(): ?bool {
        $val = $this->getBackingStore()->get('zoomDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'zoomDisabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accessibilityScreenDisabled', $this->getAccessibilityScreenDisabled());
        $writer->writeStringValue('adminAccountFullName', $this->getAdminAccountFullName());
        $writer->writeStringValue('adminAccountPassword', $this->getAdminAccountPassword());
        $writer->writeStringValue('adminAccountUserName', $this->getAdminAccountUserName());
        $writer->writeBooleanValue('autoAdvanceSetupEnabled', $this->getAutoAdvanceSetupEnabled());
        $writer->writeBooleanValue('autoUnlockWithWatchDisabled', $this->getAutoUnlockWithWatchDisabled());
        $writer->writeBooleanValue('chooseYourLockScreenDisabled', $this->getChooseYourLockScreenDisabled());
        $writer->writeBooleanValue('dontAutoPopulatePrimaryAccountInfo', $this->getDontAutoPopulatePrimaryAccountInfo());
        $writer->writeBooleanValue('enableRestrictEditing', $this->getEnableRestrictEditing());
        $writer->writeBooleanValue('fileVaultDisabled', $this->getFileVaultDisabled());
        $writer->writeBooleanValue('hideAdminAccount', $this->getHideAdminAccount());
        $writer->writeBooleanValue('iCloudDiagnosticsDisabled', $this->getICloudDiagnosticsDisabled());
        $writer->writeBooleanValue('iCloudStorageDisabled', $this->getICloudStorageDisabled());
        $writer->writeBooleanValue('passCodeDisabled', $this->getPassCodeDisabled());
        $writer->writeStringValue('primaryAccountFullName', $this->getPrimaryAccountFullName());
        $writer->writeStringValue('primaryAccountUserName', $this->getPrimaryAccountUserName());
        $writer->writeBooleanValue('registrationDisabled', $this->getRegistrationDisabled());
        $writer->writeBooleanValue('requestRequiresNetworkTether', $this->getRequestRequiresNetworkTether());
        $writer->writeBooleanValue('setPrimarySetupAccountAsRegularUser', $this->getSetPrimarySetupAccountAsRegularUser());
        $writer->writeBooleanValue('skipPrimarySetupAccountCreation', $this->getSkipPrimarySetupAccountCreation());
        $writer->writeBooleanValue('zoomDisabled', $this->getZoomDisabled());
    }

    /**
     * Sets the accessibilityScreenDisabled property value. Indicates if Accessibility screen is disabled
     * @param bool|null $value Value to set for the accessibilityScreenDisabled property.
    */
    public function setAccessibilityScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('accessibilityScreenDisabled', $value);
    }

    /**
     * Sets the adminAccountFullName property value. Indicates what the full name for the admin account is
     * @param string|null $value Value to set for the adminAccountFullName property.
    */
    public function setAdminAccountFullName(?string $value): void {
        $this->getBackingStore()->set('adminAccountFullName', $value);
    }

    /**
     * Sets the adminAccountPassword property value. Indicates what the password for the admin account is
     * @param string|null $value Value to set for the adminAccountPassword property.
    */
    public function setAdminAccountPassword(?string $value): void {
        $this->getBackingStore()->set('adminAccountPassword', $value);
    }

    /**
     * Sets the adminAccountUserName property value. Indicates what the user name for the admin account is
     * @param string|null $value Value to set for the adminAccountUserName property.
    */
    public function setAdminAccountUserName(?string $value): void {
        $this->getBackingStore()->set('adminAccountUserName', $value);
    }

    /**
     * Sets the autoAdvanceSetupEnabled property value. Indicates if Setup Assistant will automatically advance through its screen
     * @param bool|null $value Value to set for the autoAdvanceSetupEnabled property.
    */
    public function setAutoAdvanceSetupEnabled(?bool $value): void {
        $this->getBackingStore()->set('autoAdvanceSetupEnabled', $value);
    }

    /**
     * Sets the autoUnlockWithWatchDisabled property value. Indicates if UnlockWithWatch screen is disabled
     * @param bool|null $value Value to set for the autoUnlockWithWatchDisabled property.
    */
    public function setAutoUnlockWithWatchDisabled(?bool $value): void {
        $this->getBackingStore()->set('autoUnlockWithWatchDisabled', $value);
    }

    /**
     * Sets the chooseYourLockScreenDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     * @param bool|null $value Value to set for the chooseYourLockScreenDisabled property.
    */
    public function setChooseYourLockScreenDisabled(?bool $value): void {
        $this->getBackingStore()->set('chooseYourLockScreenDisabled', $value);
    }

    /**
     * Sets the dontAutoPopulatePrimaryAccountInfo property value. Indicates whether Setup Assistant will auto populate the primary account information
     * @param bool|null $value Value to set for the dontAutoPopulatePrimaryAccountInfo property.
    */
    public function setDontAutoPopulatePrimaryAccountInfo(?bool $value): void {
        $this->getBackingStore()->set('dontAutoPopulatePrimaryAccountInfo', $value);
    }

    /**
     * Sets the enableRestrictEditing property value. Indicates whether the user will enable blockediting
     * @param bool|null $value Value to set for the enableRestrictEditing property.
    */
    public function setEnableRestrictEditing(?bool $value): void {
        $this->getBackingStore()->set('enableRestrictEditing', $value);
    }

    /**
     * Sets the fileVaultDisabled property value. Indicates if file vault is disabled
     * @param bool|null $value Value to set for the fileVaultDisabled property.
    */
    public function setFileVaultDisabled(?bool $value): void {
        $this->getBackingStore()->set('fileVaultDisabled', $value);
    }

    /**
     * Sets the hideAdminAccount property value. Indicates whether the admin account should be hidded or not
     * @param bool|null $value Value to set for the hideAdminAccount property.
    */
    public function setHideAdminAccount(?bool $value): void {
        $this->getBackingStore()->set('hideAdminAccount', $value);
    }

    /**
     * Sets the iCloudDiagnosticsDisabled property value. Indicates if iCloud Analytics screen is disabled
     * @param bool|null $value Value to set for the iCloudDiagnosticsDisabled property.
    */
    public function setICloudDiagnosticsDisabled(?bool $value): void {
        $this->getBackingStore()->set('iCloudDiagnosticsDisabled', $value);
    }

    /**
     * Sets the iCloudStorageDisabled property value. Indicates if iCloud Documents and Desktop screen is disabled
     * @param bool|null $value Value to set for the iCloudStorageDisabled property.
    */
    public function setICloudStorageDisabled(?bool $value): void {
        $this->getBackingStore()->set('iCloudStorageDisabled', $value);
    }

    /**
     * Sets the passCodeDisabled property value. Indicates if Passcode setup pane is disabled
     * @param bool|null $value Value to set for the passCodeDisabled property.
    */
    public function setPassCodeDisabled(?bool $value): void {
        $this->getBackingStore()->set('passCodeDisabled', $value);
    }

    /**
     * Sets the primaryAccountFullName property value. Indicates what the full name for the primary account is
     * @param string|null $value Value to set for the primaryAccountFullName property.
    */
    public function setPrimaryAccountFullName(?string $value): void {
        $this->getBackingStore()->set('primaryAccountFullName', $value);
    }

    /**
     * Sets the primaryAccountUserName property value. Indicates what the account name for the primary account is
     * @param string|null $value Value to set for the primaryAccountUserName property.
    */
    public function setPrimaryAccountUserName(?string $value): void {
        $this->getBackingStore()->set('primaryAccountUserName', $value);
    }

    /**
     * Sets the registrationDisabled property value. Indicates if registration is disabled
     * @param bool|null $value Value to set for the registrationDisabled property.
    */
    public function setRegistrationDisabled(?bool $value): void {
        $this->getBackingStore()->set('registrationDisabled', $value);
    }

    /**
     * Sets the requestRequiresNetworkTether property value. Indicates if the device is network-tethered to run the command
     * @param bool|null $value Value to set for the requestRequiresNetworkTether property.
    */
    public function setRequestRequiresNetworkTether(?bool $value): void {
        $this->getBackingStore()->set('requestRequiresNetworkTether', $value);
    }

    /**
     * Sets the setPrimarySetupAccountAsRegularUser property value. Indicates whether Setup Assistant will set the account as a regular user
     * @param bool|null $value Value to set for the setPrimarySetupAccountAsRegularUser property.
    */
    public function setSetPrimarySetupAccountAsRegularUser(?bool $value): void {
        $this->getBackingStore()->set('setPrimarySetupAccountAsRegularUser', $value);
    }

    /**
     * Sets the skipPrimarySetupAccountCreation property value. Indicates whether Setup Assistant will skip the user interface for primary account setup
     * @param bool|null $value Value to set for the skipPrimarySetupAccountCreation property.
    */
    public function setSkipPrimarySetupAccountCreation(?bool $value): void {
        $this->getBackingStore()->set('skipPrimarySetupAccountCreation', $value);
    }

    /**
     * Sets the zoomDisabled property value. Indicates if zoom setup pane is disabled
     * @param bool|null $value Value to set for the zoomDisabled property.
    */
    public function setZoomDisabled(?bool $value): void {
        $this->getBackingStore()->set('zoomDisabled', $value);
    }

}
