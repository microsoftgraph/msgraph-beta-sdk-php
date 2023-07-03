<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeviceManagementSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceManagementSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettings {
        return new DeviceManagementSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the androidDeviceAdministratorEnrollmentEnabled property value. The property to determine if Android device administrator enrollment is enabled for this account.
     * @return bool|null
    */
    public function getAndroidDeviceAdministratorEnrollmentEnabled(): ?bool {
        $val = $this->getBackingStore()->get('androidDeviceAdministratorEnrollmentEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidDeviceAdministratorEnrollmentEnabled'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the derivedCredentialProvider property value. Provider type for Derived Credentials.
     * @return DerivedCredentialProviderType|null
    */
    public function getDerivedCredentialProvider(): ?DerivedCredentialProviderType {
        $val = $this->getBackingStore()->get('derivedCredentialProvider');
        if (is_null($val) || $val instanceof DerivedCredentialProviderType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'derivedCredentialProvider'");
    }

    /**
     * Gets the derivedCredentialUrl property value. The Derived Credential Provider self-service URI.
     * @return string|null
    */
    public function getDerivedCredentialUrl(): ?string {
        $val = $this->getBackingStore()->get('derivedCredentialUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'derivedCredentialUrl'");
    }

    /**
     * Gets the deviceComplianceCheckinThresholdDays property value. The number of days a device is allowed to go without checking in to remain compliant.
     * @return int|null
    */
    public function getDeviceComplianceCheckinThresholdDays(): ?int {
        $val = $this->getBackingStore()->get('deviceComplianceCheckinThresholdDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceComplianceCheckinThresholdDays'");
    }

    /**
     * Gets the deviceInactivityBeforeRetirementInDay property value. When the device does not check in for specified number of days, the company data might be removed and the device will not be under management. Valid values 30 to 270
     * @return int|null
    */
    public function getDeviceInactivityBeforeRetirementInDay(): ?int {
        $val = $this->getBackingStore()->get('deviceInactivityBeforeRetirementInDay');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceInactivityBeforeRetirementInDay'");
    }

    /**
     * Gets the enableAutopilotDiagnostics property value. Determines whether the autopilot diagnostic feature is enabled or not.
     * @return bool|null
    */
    public function getEnableAutopilotDiagnostics(): ?bool {
        $val = $this->getBackingStore()->get('enableAutopilotDiagnostics');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableAutopilotDiagnostics'");
    }

    /**
     * Gets the enableDeviceGroupMembershipReport property value. Determines whether the device group membership report feature is enabled or not.
     * @return bool|null
    */
    public function getEnableDeviceGroupMembershipReport(): ?bool {
        $val = $this->getBackingStore()->get('enableDeviceGroupMembershipReport');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableDeviceGroupMembershipReport'");
    }

    /**
     * Gets the enableEnhancedTroubleshootingExperience property value. Determines whether the enhanced troubleshooting UX is enabled or not.
     * @return bool|null
    */
    public function getEnableEnhancedTroubleshootingExperience(): ?bool {
        $val = $this->getBackingStore()->get('enableEnhancedTroubleshootingExperience');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableEnhancedTroubleshootingExperience'");
    }

    /**
     * Gets the enableLogCollection property value. Determines whether the log collection feature should be available for use.
     * @return bool|null
    */
    public function getEnableLogCollection(): ?bool {
        $val = $this->getBackingStore()->get('enableLogCollection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableLogCollection'");
    }

    /**
     * Gets the enhancedJailBreak property value. Is feature enabled or not for enhanced jailbreak detection.
     * @return bool|null
    */
    public function getEnhancedJailBreak(): ?bool {
        $val = $this->getBackingStore()->get('enhancedJailBreak');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enhancedJailBreak'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'androidDeviceAdministratorEnrollmentEnabled' => fn(ParseNode $n) => $o->setAndroidDeviceAdministratorEnrollmentEnabled($n->getBooleanValue()),
            'derivedCredentialProvider' => fn(ParseNode $n) => $o->setDerivedCredentialProvider($n->getEnumValue(DerivedCredentialProviderType::class)),
            'derivedCredentialUrl' => fn(ParseNode $n) => $o->setDerivedCredentialUrl($n->getStringValue()),
            'deviceComplianceCheckinThresholdDays' => fn(ParseNode $n) => $o->setDeviceComplianceCheckinThresholdDays($n->getIntegerValue()),
            'deviceInactivityBeforeRetirementInDay' => fn(ParseNode $n) => $o->setDeviceInactivityBeforeRetirementInDay($n->getIntegerValue()),
            'enableAutopilotDiagnostics' => fn(ParseNode $n) => $o->setEnableAutopilotDiagnostics($n->getBooleanValue()),
            'enableDeviceGroupMembershipReport' => fn(ParseNode $n) => $o->setEnableDeviceGroupMembershipReport($n->getBooleanValue()),
            'enableEnhancedTroubleshootingExperience' => fn(ParseNode $n) => $o->setEnableEnhancedTroubleshootingExperience($n->getBooleanValue()),
            'enableLogCollection' => fn(ParseNode $n) => $o->setEnableLogCollection($n->getBooleanValue()),
            'enhancedJailBreak' => fn(ParseNode $n) => $o->setEnhancedJailBreak($n->getBooleanValue()),
            'ignoreDevicesForUnsupportedSettingsEnabled' => fn(ParseNode $n) => $o->setIgnoreDevicesForUnsupportedSettingsEnabled($n->getBooleanValue()),
            'isScheduledActionEnabled' => fn(ParseNode $n) => $o->setIsScheduledActionEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'secureByDefault' => fn(ParseNode $n) => $o->setSecureByDefault($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the ignoreDevicesForUnsupportedSettingsEnabled property value. The property to determine whether to ignore unsupported compliance settings on certian models of devices.
     * @return bool|null
    */
    public function getIgnoreDevicesForUnsupportedSettingsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('ignoreDevicesForUnsupportedSettingsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ignoreDevicesForUnsupportedSettingsEnabled'");
    }

    /**
     * Gets the isScheduledActionEnabled property value. Is feature enabled or not for scheduled action for rule.
     * @return bool|null
    */
    public function getIsScheduledActionEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isScheduledActionEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isScheduledActionEnabled'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the secureByDefault property value. Device should be noncompliant when there is no compliance policy targeted when this is true
     * @return bool|null
    */
    public function getSecureByDefault(): ?bool {
        $val = $this->getBackingStore()->get('secureByDefault');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secureByDefault'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('androidDeviceAdministratorEnrollmentEnabled', $this->getAndroidDeviceAdministratorEnrollmentEnabled());
        $writer->writeEnumValue('derivedCredentialProvider', $this->getDerivedCredentialProvider());
        $writer->writeStringValue('derivedCredentialUrl', $this->getDerivedCredentialUrl());
        $writer->writeIntegerValue('deviceComplianceCheckinThresholdDays', $this->getDeviceComplianceCheckinThresholdDays());
        $writer->writeIntegerValue('deviceInactivityBeforeRetirementInDay', $this->getDeviceInactivityBeforeRetirementInDay());
        $writer->writeBooleanValue('enableAutopilotDiagnostics', $this->getEnableAutopilotDiagnostics());
        $writer->writeBooleanValue('enableDeviceGroupMembershipReport', $this->getEnableDeviceGroupMembershipReport());
        $writer->writeBooleanValue('enableEnhancedTroubleshootingExperience', $this->getEnableEnhancedTroubleshootingExperience());
        $writer->writeBooleanValue('enableLogCollection', $this->getEnableLogCollection());
        $writer->writeBooleanValue('enhancedJailBreak', $this->getEnhancedJailBreak());
        $writer->writeBooleanValue('ignoreDevicesForUnsupportedSettingsEnabled', $this->getIgnoreDevicesForUnsupportedSettingsEnabled());
        $writer->writeBooleanValue('isScheduledActionEnabled', $this->getIsScheduledActionEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('secureByDefault', $this->getSecureByDefault());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the androidDeviceAdministratorEnrollmentEnabled property value. The property to determine if Android device administrator enrollment is enabled for this account.
     * @param bool|null $value Value to set for the androidDeviceAdministratorEnrollmentEnabled property.
    */
    public function setAndroidDeviceAdministratorEnrollmentEnabled(?bool $value): void {
        $this->getBackingStore()->set('androidDeviceAdministratorEnrollmentEnabled', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the derivedCredentialProvider property value. Provider type for Derived Credentials.
     * @param DerivedCredentialProviderType|null $value Value to set for the derivedCredentialProvider property.
    */
    public function setDerivedCredentialProvider(?DerivedCredentialProviderType $value): void {
        $this->getBackingStore()->set('derivedCredentialProvider', $value);
    }

    /**
     * Sets the derivedCredentialUrl property value. The Derived Credential Provider self-service URI.
     * @param string|null $value Value to set for the derivedCredentialUrl property.
    */
    public function setDerivedCredentialUrl(?string $value): void {
        $this->getBackingStore()->set('derivedCredentialUrl', $value);
    }

    /**
     * Sets the deviceComplianceCheckinThresholdDays property value. The number of days a device is allowed to go without checking in to remain compliant.
     * @param int|null $value Value to set for the deviceComplianceCheckinThresholdDays property.
    */
    public function setDeviceComplianceCheckinThresholdDays(?int $value): void {
        $this->getBackingStore()->set('deviceComplianceCheckinThresholdDays', $value);
    }

    /**
     * Sets the deviceInactivityBeforeRetirementInDay property value. When the device does not check in for specified number of days, the company data might be removed and the device will not be under management. Valid values 30 to 270
     * @param int|null $value Value to set for the deviceInactivityBeforeRetirementInDay property.
    */
    public function setDeviceInactivityBeforeRetirementInDay(?int $value): void {
        $this->getBackingStore()->set('deviceInactivityBeforeRetirementInDay', $value);
    }

    /**
     * Sets the enableAutopilotDiagnostics property value. Determines whether the autopilot diagnostic feature is enabled or not.
     * @param bool|null $value Value to set for the enableAutopilotDiagnostics property.
    */
    public function setEnableAutopilotDiagnostics(?bool $value): void {
        $this->getBackingStore()->set('enableAutopilotDiagnostics', $value);
    }

    /**
     * Sets the enableDeviceGroupMembershipReport property value. Determines whether the device group membership report feature is enabled or not.
     * @param bool|null $value Value to set for the enableDeviceGroupMembershipReport property.
    */
    public function setEnableDeviceGroupMembershipReport(?bool $value): void {
        $this->getBackingStore()->set('enableDeviceGroupMembershipReport', $value);
    }

    /**
     * Sets the enableEnhancedTroubleshootingExperience property value. Determines whether the enhanced troubleshooting UX is enabled or not.
     * @param bool|null $value Value to set for the enableEnhancedTroubleshootingExperience property.
    */
    public function setEnableEnhancedTroubleshootingExperience(?bool $value): void {
        $this->getBackingStore()->set('enableEnhancedTroubleshootingExperience', $value);
    }

    /**
     * Sets the enableLogCollection property value. Determines whether the log collection feature should be available for use.
     * @param bool|null $value Value to set for the enableLogCollection property.
    */
    public function setEnableLogCollection(?bool $value): void {
        $this->getBackingStore()->set('enableLogCollection', $value);
    }

    /**
     * Sets the enhancedJailBreak property value. Is feature enabled or not for enhanced jailbreak detection.
     * @param bool|null $value Value to set for the enhancedJailBreak property.
    */
    public function setEnhancedJailBreak(?bool $value): void {
        $this->getBackingStore()->set('enhancedJailBreak', $value);
    }

    /**
     * Sets the ignoreDevicesForUnsupportedSettingsEnabled property value. The property to determine whether to ignore unsupported compliance settings on certian models of devices.
     * @param bool|null $value Value to set for the ignoreDevicesForUnsupportedSettingsEnabled property.
    */
    public function setIgnoreDevicesForUnsupportedSettingsEnabled(?bool $value): void {
        $this->getBackingStore()->set('ignoreDevicesForUnsupportedSettingsEnabled', $value);
    }

    /**
     * Sets the isScheduledActionEnabled property value. Is feature enabled or not for scheduled action for rule.
     * @param bool|null $value Value to set for the isScheduledActionEnabled property.
    */
    public function setIsScheduledActionEnabled(?bool $value): void {
        $this->getBackingStore()->set('isScheduledActionEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the secureByDefault property value. Device should be noncompliant when there is no compliance policy targeted when this is true
     * @param bool|null $value Value to set for the secureByDefault property.
    */
    public function setSecureByDefault(?bool $value): void {
        $this->getBackingStore()->set('secureByDefault', $value);
    }

}
