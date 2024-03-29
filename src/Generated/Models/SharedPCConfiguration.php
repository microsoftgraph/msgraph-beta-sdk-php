<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

/**
 * This topic provides descriptions of the declared methods, properties and relationships exposed by the sharedPCConfiguration resource.
*/
class SharedPCConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new SharedPCConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sharedPCConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedPCConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharedPCConfiguration {
        return new SharedPCConfiguration();
    }

    /**
     * Gets the accountManagerPolicy property value. Specifies how accounts are managed on a shared PC. Only applies when disableAccountManager is false.
     * @return SharedPCAccountManagerPolicy|null
    */
    public function getAccountManagerPolicy(): ?SharedPCAccountManagerPolicy {
        $val = $this->getBackingStore()->get('accountManagerPolicy');
        if (is_null($val) || $val instanceof SharedPCAccountManagerPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accountManagerPolicy'");
    }

    /**
     * Gets the allowedAccounts property value. Type of accounts that are allowed to share the PC.
     * @return SharedPCAllowedAccountType|null
    */
    public function getAllowedAccounts(): ?SharedPCAllowedAccountType {
        $val = $this->getBackingStore()->get('allowedAccounts');
        if (is_null($val) || $val instanceof SharedPCAllowedAccountType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedAccounts'");
    }

    /**
     * Gets the allowLocalStorage property value. Specifies whether local storage is allowed on a shared PC.
     * @return bool|null
    */
    public function getAllowLocalStorage(): ?bool {
        $val = $this->getBackingStore()->get('allowLocalStorage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowLocalStorage'");
    }

    /**
     * Gets the disableAccountManager property value. Disables the account manager for shared PC mode.
     * @return bool|null
    */
    public function getDisableAccountManager(): ?bool {
        $val = $this->getBackingStore()->get('disableAccountManager');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableAccountManager'");
    }

    /**
     * Gets the disableEduPolicies property value. Specifies whether the default shared PC education environment policies should be disabled. For Windows 10 RS2 and later, this policy will be applied without setting Enabled to true.
     * @return bool|null
    */
    public function getDisableEduPolicies(): ?bool {
        $val = $this->getBackingStore()->get('disableEduPolicies');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableEduPolicies'");
    }

    /**
     * Gets the disablePowerPolicies property value. Specifies whether the default shared PC power policies should be disabled.
     * @return bool|null
    */
    public function getDisablePowerPolicies(): ?bool {
        $val = $this->getBackingStore()->get('disablePowerPolicies');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disablePowerPolicies'");
    }

    /**
     * Gets the disableSignInOnResume property value. Disables the requirement to sign in whenever the device wakes up from sleep mode.
     * @return bool|null
    */
    public function getDisableSignInOnResume(): ?bool {
        $val = $this->getBackingStore()->get('disableSignInOnResume');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableSignInOnResume'");
    }

    /**
     * Gets the enabled property value. Enables shared PC mode and applies the shared pc policies.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        $val = $this->getBackingStore()->get('enabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enabled'");
    }

    /**
     * Gets the fastFirstSignIn property value. Possible values of a property
     * @return Enablement|null
    */
    public function getFastFirstSignIn(): ?Enablement {
        $val = $this->getBackingStore()->get('fastFirstSignIn');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fastFirstSignIn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountManagerPolicy' => fn(ParseNode $n) => $o->setAccountManagerPolicy($n->getObjectValue([SharedPCAccountManagerPolicy::class, 'createFromDiscriminatorValue'])),
            'allowedAccounts' => fn(ParseNode $n) => $o->setAllowedAccounts($n->getEnumValue(SharedPCAllowedAccountType::class)),
            'allowLocalStorage' => fn(ParseNode $n) => $o->setAllowLocalStorage($n->getBooleanValue()),
            'disableAccountManager' => fn(ParseNode $n) => $o->setDisableAccountManager($n->getBooleanValue()),
            'disableEduPolicies' => fn(ParseNode $n) => $o->setDisableEduPolicies($n->getBooleanValue()),
            'disablePowerPolicies' => fn(ParseNode $n) => $o->setDisablePowerPolicies($n->getBooleanValue()),
            'disableSignInOnResume' => fn(ParseNode $n) => $o->setDisableSignInOnResume($n->getBooleanValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'fastFirstSignIn' => fn(ParseNode $n) => $o->setFastFirstSignIn($n->getEnumValue(Enablement::class)),
            'idleTimeBeforeSleepInSeconds' => fn(ParseNode $n) => $o->setIdleTimeBeforeSleepInSeconds($n->getIntegerValue()),
            'kioskAppDisplayName' => fn(ParseNode $n) => $o->setKioskAppDisplayName($n->getStringValue()),
            'kioskAppUserModelId' => fn(ParseNode $n) => $o->setKioskAppUserModelId($n->getStringValue()),
            'localStorage' => fn(ParseNode $n) => $o->setLocalStorage($n->getEnumValue(Enablement::class)),
            'maintenanceStartTime' => fn(ParseNode $n) => $o->setMaintenanceStartTime($n->getTimeValue()),
            'setAccountManager' => fn(ParseNode $n) => $o->setSetAccountManager($n->getEnumValue(Enablement::class)),
            'setEduPolicies' => fn(ParseNode $n) => $o->setSetEduPolicies($n->getEnumValue(Enablement::class)),
            'setPowerPolicies' => fn(ParseNode $n) => $o->setSetPowerPolicies($n->getEnumValue(Enablement::class)),
            'signInOnResume' => fn(ParseNode $n) => $o->setSignInOnResume($n->getEnumValue(Enablement::class)),
        ]);
    }

    /**
     * Gets the idleTimeBeforeSleepInSeconds property value. Specifies the time in seconds that a device must sit idle before the PC goes to sleep. Setting this value to 0 prevents the sleep timeout from occurring.
     * @return int|null
    */
    public function getIdleTimeBeforeSleepInSeconds(): ?int {
        $val = $this->getBackingStore()->get('idleTimeBeforeSleepInSeconds');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'idleTimeBeforeSleepInSeconds'");
    }

    /**
     * Gets the kioskAppDisplayName property value. Specifies the display text for the account shown on the sign-in screen which launches the app specified by SetKioskAppUserModelId. Only applies when KioskAppUserModelId is set.
     * @return string|null
    */
    public function getKioskAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('kioskAppDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskAppDisplayName'");
    }

    /**
     * Gets the kioskAppUserModelId property value. Specifies the application user model ID of the app to use with assigned access.
     * @return string|null
    */
    public function getKioskAppUserModelId(): ?string {
        $val = $this->getBackingStore()->get('kioskAppUserModelId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskAppUserModelId'");
    }

    /**
     * Gets the localStorage property value. Possible values of a property
     * @return Enablement|null
    */
    public function getLocalStorage(): ?Enablement {
        $val = $this->getBackingStore()->get('localStorage');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localStorage'");
    }

    /**
     * Gets the maintenanceStartTime property value. Specifies the daily start time of maintenance hour.
     * @return Time|null
    */
    public function getMaintenanceStartTime(): ?Time {
        $val = $this->getBackingStore()->get('maintenanceStartTime');
        if (is_null($val) || $val instanceof Time) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maintenanceStartTime'");
    }

    /**
     * Gets the setAccountManager property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSetAccountManager(): ?Enablement {
        $val = $this->getBackingStore()->get('setAccountManager');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'setAccountManager'");
    }

    /**
     * Gets the setEduPolicies property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSetEduPolicies(): ?Enablement {
        $val = $this->getBackingStore()->get('setEduPolicies');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'setEduPolicies'");
    }

    /**
     * Gets the setPowerPolicies property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSetPowerPolicies(): ?Enablement {
        $val = $this->getBackingStore()->get('setPowerPolicies');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'setPowerPolicies'");
    }

    /**
     * Gets the signInOnResume property value. Possible values of a property
     * @return Enablement|null
    */
    public function getSignInOnResume(): ?Enablement {
        $val = $this->getBackingStore()->get('signInOnResume');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInOnResume'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accountManagerPolicy', $this->getAccountManagerPolicy());
        $writer->writeEnumValue('allowedAccounts', $this->getAllowedAccounts());
        $writer->writeBooleanValue('allowLocalStorage', $this->getAllowLocalStorage());
        $writer->writeBooleanValue('disableAccountManager', $this->getDisableAccountManager());
        $writer->writeBooleanValue('disableEduPolicies', $this->getDisableEduPolicies());
        $writer->writeBooleanValue('disablePowerPolicies', $this->getDisablePowerPolicies());
        $writer->writeBooleanValue('disableSignInOnResume', $this->getDisableSignInOnResume());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeEnumValue('fastFirstSignIn', $this->getFastFirstSignIn());
        $writer->writeIntegerValue('idleTimeBeforeSleepInSeconds', $this->getIdleTimeBeforeSleepInSeconds());
        $writer->writeStringValue('kioskAppDisplayName', $this->getKioskAppDisplayName());
        $writer->writeStringValue('kioskAppUserModelId', $this->getKioskAppUserModelId());
        $writer->writeEnumValue('localStorage', $this->getLocalStorage());
        $writer->writeTimeValue('maintenanceStartTime', $this->getMaintenanceStartTime());
        $writer->writeEnumValue('setAccountManager', $this->getSetAccountManager());
        $writer->writeEnumValue('setEduPolicies', $this->getSetEduPolicies());
        $writer->writeEnumValue('setPowerPolicies', $this->getSetPowerPolicies());
        $writer->writeEnumValue('signInOnResume', $this->getSignInOnResume());
    }

    /**
     * Sets the accountManagerPolicy property value. Specifies how accounts are managed on a shared PC. Only applies when disableAccountManager is false.
     * @param SharedPCAccountManagerPolicy|null $value Value to set for the accountManagerPolicy property.
    */
    public function setAccountManagerPolicy(?SharedPCAccountManagerPolicy $value): void {
        $this->getBackingStore()->set('accountManagerPolicy', $value);
    }

    /**
     * Sets the allowedAccounts property value. Type of accounts that are allowed to share the PC.
     * @param SharedPCAllowedAccountType|null $value Value to set for the allowedAccounts property.
    */
    public function setAllowedAccounts(?SharedPCAllowedAccountType $value): void {
        $this->getBackingStore()->set('allowedAccounts', $value);
    }

    /**
     * Sets the allowLocalStorage property value. Specifies whether local storage is allowed on a shared PC.
     * @param bool|null $value Value to set for the allowLocalStorage property.
    */
    public function setAllowLocalStorage(?bool $value): void {
        $this->getBackingStore()->set('allowLocalStorage', $value);
    }

    /**
     * Sets the disableAccountManager property value. Disables the account manager for shared PC mode.
     * @param bool|null $value Value to set for the disableAccountManager property.
    */
    public function setDisableAccountManager(?bool $value): void {
        $this->getBackingStore()->set('disableAccountManager', $value);
    }

    /**
     * Sets the disableEduPolicies property value. Specifies whether the default shared PC education environment policies should be disabled. For Windows 10 RS2 and later, this policy will be applied without setting Enabled to true.
     * @param bool|null $value Value to set for the disableEduPolicies property.
    */
    public function setDisableEduPolicies(?bool $value): void {
        $this->getBackingStore()->set('disableEduPolicies', $value);
    }

    /**
     * Sets the disablePowerPolicies property value. Specifies whether the default shared PC power policies should be disabled.
     * @param bool|null $value Value to set for the disablePowerPolicies property.
    */
    public function setDisablePowerPolicies(?bool $value): void {
        $this->getBackingStore()->set('disablePowerPolicies', $value);
    }

    /**
     * Sets the disableSignInOnResume property value. Disables the requirement to sign in whenever the device wakes up from sleep mode.
     * @param bool|null $value Value to set for the disableSignInOnResume property.
    */
    public function setDisableSignInOnResume(?bool $value): void {
        $this->getBackingStore()->set('disableSignInOnResume', $value);
    }

    /**
     * Sets the enabled property value. Enables shared PC mode and applies the shared pc policies.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the fastFirstSignIn property value. Possible values of a property
     * @param Enablement|null $value Value to set for the fastFirstSignIn property.
    */
    public function setFastFirstSignIn(?Enablement $value): void {
        $this->getBackingStore()->set('fastFirstSignIn', $value);
    }

    /**
     * Sets the idleTimeBeforeSleepInSeconds property value. Specifies the time in seconds that a device must sit idle before the PC goes to sleep. Setting this value to 0 prevents the sleep timeout from occurring.
     * @param int|null $value Value to set for the idleTimeBeforeSleepInSeconds property.
    */
    public function setIdleTimeBeforeSleepInSeconds(?int $value): void {
        $this->getBackingStore()->set('idleTimeBeforeSleepInSeconds', $value);
    }

    /**
     * Sets the kioskAppDisplayName property value. Specifies the display text for the account shown on the sign-in screen which launches the app specified by SetKioskAppUserModelId. Only applies when KioskAppUserModelId is set.
     * @param string|null $value Value to set for the kioskAppDisplayName property.
    */
    public function setKioskAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('kioskAppDisplayName', $value);
    }

    /**
     * Sets the kioskAppUserModelId property value. Specifies the application user model ID of the app to use with assigned access.
     * @param string|null $value Value to set for the kioskAppUserModelId property.
    */
    public function setKioskAppUserModelId(?string $value): void {
        $this->getBackingStore()->set('kioskAppUserModelId', $value);
    }

    /**
     * Sets the localStorage property value. Possible values of a property
     * @param Enablement|null $value Value to set for the localStorage property.
    */
    public function setLocalStorage(?Enablement $value): void {
        $this->getBackingStore()->set('localStorage', $value);
    }

    /**
     * Sets the maintenanceStartTime property value. Specifies the daily start time of maintenance hour.
     * @param Time|null $value Value to set for the maintenanceStartTime property.
    */
    public function setMaintenanceStartTime(?Time $value): void {
        $this->getBackingStore()->set('maintenanceStartTime', $value);
    }

    /**
     * Sets the setAccountManager property value. Possible values of a property
     * @param Enablement|null $value Value to set for the setAccountManager property.
    */
    public function setSetAccountManager(?Enablement $value): void {
        $this->getBackingStore()->set('setAccountManager', $value);
    }

    /**
     * Sets the setEduPolicies property value. Possible values of a property
     * @param Enablement|null $value Value to set for the setEduPolicies property.
    */
    public function setSetEduPolicies(?Enablement $value): void {
        $this->getBackingStore()->set('setEduPolicies', $value);
    }

    /**
     * Sets the setPowerPolicies property value. Possible values of a property
     * @param Enablement|null $value Value to set for the setPowerPolicies property.
    */
    public function setSetPowerPolicies(?Enablement $value): void {
        $this->getBackingStore()->set('setPowerPolicies', $value);
    }

    /**
     * Sets the signInOnResume property value. Possible values of a property
     * @param Enablement|null $value Value to set for the signInOnResume property.
    */
    public function setSignInOnResume(?Enablement $value): void {
        $this->getBackingStore()->set('signInOnResume', $value);
    }

}
