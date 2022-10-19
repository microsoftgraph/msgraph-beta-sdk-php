<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $androidDeviceAdministratorEnrollmentEnabled The property to determine if Android device administrator enrollment is enabled for this account.
    */
    private ?bool $androidDeviceAdministratorEnrollmentEnabled = null;
    
    /**
     * @var DerivedCredentialProviderType|null $derivedCredentialProvider Provider type for Derived Credentials.
    */
    private ?DerivedCredentialProviderType $derivedCredentialProvider = null;
    
    /**
     * @var string|null $derivedCredentialUrl The Derived Credential Provider self-service URI.
    */
    private ?string $derivedCredentialUrl = null;
    
    /**
     * @var int|null $deviceComplianceCheckinThresholdDays The number of days a device is allowed to go without checking in to remain compliant.
    */
    private ?int $deviceComplianceCheckinThresholdDays = null;
    
    /**
     * @var int|null $deviceInactivityBeforeRetirementInDay When the device does not check in for specified number of days, the company data might be removed and the device will not be under management. Valid values 30 to 270
    */
    private ?int $deviceInactivityBeforeRetirementInDay = null;
    
    /**
     * @var bool|null $enableAutopilotDiagnostics Determines whether the autopilot diagnostic feature is enabled or not.
    */
    private ?bool $enableAutopilotDiagnostics = null;
    
    /**
     * @var bool|null $enableDeviceGroupMembershipReport Determines whether the device group membership report feature is enabled or not.
    */
    private ?bool $enableDeviceGroupMembershipReport = null;
    
    /**
     * @var bool|null $enableEnhancedTroubleshootingExperience Determines whether the enhanced troubleshooting UX is enabled or not.
    */
    private ?bool $enableEnhancedTroubleshootingExperience = null;
    
    /**
     * @var bool|null $enableLogCollection Determines whether the log collection feature should be available for use.
    */
    private ?bool $enableLogCollection = null;
    
    /**
     * @var bool|null $enhancedJailBreak Is feature enabled or not for enhanced jailbreak detection.
    */
    private ?bool $enhancedJailBreak = null;
    
    /**
     * @var bool|null $ignoreDevicesForUnsupportedSettingsEnabled The property to determine whether to ignore unsupported compliance settings on certian models of devices.
    */
    private ?bool $ignoreDevicesForUnsupportedSettingsEnabled = null;
    
    /**
     * @var bool|null $isScheduledActionEnabled Is feature enabled or not for scheduled action for rule.
    */
    private ?bool $isScheduledActionEnabled = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $secureByDefault Device should be noncompliant when there is no compliance policy targeted when this is true
    */
    private ?bool $secureByDefault = null;
    
    /**
     * Instantiates a new deviceManagementSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceManagementSettings');
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the androidDeviceAdministratorEnrollmentEnabled property value. The property to determine if Android device administrator enrollment is enabled for this account.
     * @return bool|null
    */
    public function getAndroidDeviceAdministratorEnrollmentEnabled(): ?bool {
        return $this->androidDeviceAdministratorEnrollmentEnabled;
    }

    /**
     * Gets the derivedCredentialProvider property value. Provider type for Derived Credentials.
     * @return DerivedCredentialProviderType|null
    */
    public function getDerivedCredentialProvider(): ?DerivedCredentialProviderType {
        return $this->derivedCredentialProvider;
    }

    /**
     * Gets the derivedCredentialUrl property value. The Derived Credential Provider self-service URI.
     * @return string|null
    */
    public function getDerivedCredentialUrl(): ?string {
        return $this->derivedCredentialUrl;
    }

    /**
     * Gets the deviceComplianceCheckinThresholdDays property value. The number of days a device is allowed to go without checking in to remain compliant.
     * @return int|null
    */
    public function getDeviceComplianceCheckinThresholdDays(): ?int {
        return $this->deviceComplianceCheckinThresholdDays;
    }

    /**
     * Gets the deviceInactivityBeforeRetirementInDay property value. When the device does not check in for specified number of days, the company data might be removed and the device will not be under management. Valid values 30 to 270
     * @return int|null
    */
    public function getDeviceInactivityBeforeRetirementInDay(): ?int {
        return $this->deviceInactivityBeforeRetirementInDay;
    }

    /**
     * Gets the enableAutopilotDiagnostics property value. Determines whether the autopilot diagnostic feature is enabled or not.
     * @return bool|null
    */
    public function getEnableAutopilotDiagnostics(): ?bool {
        return $this->enableAutopilotDiagnostics;
    }

    /**
     * Gets the enableDeviceGroupMembershipReport property value. Determines whether the device group membership report feature is enabled or not.
     * @return bool|null
    */
    public function getEnableDeviceGroupMembershipReport(): ?bool {
        return $this->enableDeviceGroupMembershipReport;
    }

    /**
     * Gets the enableEnhancedTroubleshootingExperience property value. Determines whether the enhanced troubleshooting UX is enabled or not.
     * @return bool|null
    */
    public function getEnableEnhancedTroubleshootingExperience(): ?bool {
        return $this->enableEnhancedTroubleshootingExperience;
    }

    /**
     * Gets the enableLogCollection property value. Determines whether the log collection feature should be available for use.
     * @return bool|null
    */
    public function getEnableLogCollection(): ?bool {
        return $this->enableLogCollection;
    }

    /**
     * Gets the enhancedJailBreak property value. Is feature enabled or not for enhanced jailbreak detection.
     * @return bool|null
    */
    public function getEnhancedJailBreak(): ?bool {
        return $this->enhancedJailBreak;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->ignoreDevicesForUnsupportedSettingsEnabled;
    }

    /**
     * Gets the isScheduledActionEnabled property value. Is feature enabled or not for scheduled action for rule.
     * @return bool|null
    */
    public function getIsScheduledActionEnabled(): ?bool {
        return $this->isScheduledActionEnabled;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the secureByDefault property value. Device should be noncompliant when there is no compliance policy targeted when this is true
     * @return bool|null
    */
    public function getSecureByDefault(): ?bool {
        return $this->secureByDefault;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('androidDeviceAdministratorEnrollmentEnabled', $this->androidDeviceAdministratorEnrollmentEnabled);
        $writer->writeEnumValue('derivedCredentialProvider', $this->derivedCredentialProvider);
        $writer->writeStringValue('derivedCredentialUrl', $this->derivedCredentialUrl);
        $writer->writeIntegerValue('deviceComplianceCheckinThresholdDays', $this->deviceComplianceCheckinThresholdDays);
        $writer->writeIntegerValue('deviceInactivityBeforeRetirementInDay', $this->deviceInactivityBeforeRetirementInDay);
        $writer->writeBooleanValue('enableAutopilotDiagnostics', $this->enableAutopilotDiagnostics);
        $writer->writeBooleanValue('enableDeviceGroupMembershipReport', $this->enableDeviceGroupMembershipReport);
        $writer->writeBooleanValue('enableEnhancedTroubleshootingExperience', $this->enableEnhancedTroubleshootingExperience);
        $writer->writeBooleanValue('enableLogCollection', $this->enableLogCollection);
        $writer->writeBooleanValue('enhancedJailBreak', $this->enhancedJailBreak);
        $writer->writeBooleanValue('ignoreDevicesForUnsupportedSettingsEnabled', $this->ignoreDevicesForUnsupportedSettingsEnabled);
        $writer->writeBooleanValue('isScheduledActionEnabled', $this->isScheduledActionEnabled);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('secureByDefault', $this->secureByDefault);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the androidDeviceAdministratorEnrollmentEnabled property value. The property to determine if Android device administrator enrollment is enabled for this account.
     *  @param bool|null $value Value to set for the androidDeviceAdministratorEnrollmentEnabled property.
    */
    public function setAndroidDeviceAdministratorEnrollmentEnabled(?bool $value ): void {
        $this->androidDeviceAdministratorEnrollmentEnabled = $value;
    }

    /**
     * Sets the derivedCredentialProvider property value. Provider type for Derived Credentials.
     *  @param DerivedCredentialProviderType|null $value Value to set for the derivedCredentialProvider property.
    */
    public function setDerivedCredentialProvider(?DerivedCredentialProviderType $value ): void {
        $this->derivedCredentialProvider = $value;
    }

    /**
     * Sets the derivedCredentialUrl property value. The Derived Credential Provider self-service URI.
     *  @param string|null $value Value to set for the derivedCredentialUrl property.
    */
    public function setDerivedCredentialUrl(?string $value ): void {
        $this->derivedCredentialUrl = $value;
    }

    /**
     * Sets the deviceComplianceCheckinThresholdDays property value. The number of days a device is allowed to go without checking in to remain compliant.
     *  @param int|null $value Value to set for the deviceComplianceCheckinThresholdDays property.
    */
    public function setDeviceComplianceCheckinThresholdDays(?int $value ): void {
        $this->deviceComplianceCheckinThresholdDays = $value;
    }

    /**
     * Sets the deviceInactivityBeforeRetirementInDay property value. When the device does not check in for specified number of days, the company data might be removed and the device will not be under management. Valid values 30 to 270
     *  @param int|null $value Value to set for the deviceInactivityBeforeRetirementInDay property.
    */
    public function setDeviceInactivityBeforeRetirementInDay(?int $value ): void {
        $this->deviceInactivityBeforeRetirementInDay = $value;
    }

    /**
     * Sets the enableAutopilotDiagnostics property value. Determines whether the autopilot diagnostic feature is enabled or not.
     *  @param bool|null $value Value to set for the enableAutopilotDiagnostics property.
    */
    public function setEnableAutopilotDiagnostics(?bool $value ): void {
        $this->enableAutopilotDiagnostics = $value;
    }

    /**
     * Sets the enableDeviceGroupMembershipReport property value. Determines whether the device group membership report feature is enabled or not.
     *  @param bool|null $value Value to set for the enableDeviceGroupMembershipReport property.
    */
    public function setEnableDeviceGroupMembershipReport(?bool $value ): void {
        $this->enableDeviceGroupMembershipReport = $value;
    }

    /**
     * Sets the enableEnhancedTroubleshootingExperience property value. Determines whether the enhanced troubleshooting UX is enabled or not.
     *  @param bool|null $value Value to set for the enableEnhancedTroubleshootingExperience property.
    */
    public function setEnableEnhancedTroubleshootingExperience(?bool $value ): void {
        $this->enableEnhancedTroubleshootingExperience = $value;
    }

    /**
     * Sets the enableLogCollection property value. Determines whether the log collection feature should be available for use.
     *  @param bool|null $value Value to set for the enableLogCollection property.
    */
    public function setEnableLogCollection(?bool $value ): void {
        $this->enableLogCollection = $value;
    }

    /**
     * Sets the enhancedJailBreak property value. Is feature enabled or not for enhanced jailbreak detection.
     *  @param bool|null $value Value to set for the enhancedJailBreak property.
    */
    public function setEnhancedJailBreak(?bool $value ): void {
        $this->enhancedJailBreak = $value;
    }

    /**
     * Sets the ignoreDevicesForUnsupportedSettingsEnabled property value. The property to determine whether to ignore unsupported compliance settings on certian models of devices.
     *  @param bool|null $value Value to set for the ignoreDevicesForUnsupportedSettingsEnabled property.
    */
    public function setIgnoreDevicesForUnsupportedSettingsEnabled(?bool $value ): void {
        $this->ignoreDevicesForUnsupportedSettingsEnabled = $value;
    }

    /**
     * Sets the isScheduledActionEnabled property value. Is feature enabled or not for scheduled action for rule.
     *  @param bool|null $value Value to set for the isScheduledActionEnabled property.
    */
    public function setIsScheduledActionEnabled(?bool $value ): void {
        $this->isScheduledActionEnabled = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the secureByDefault property value. Device should be noncompliant when there is no compliance policy targeted when this is true
     *  @param bool|null $value Value to set for the secureByDefault property.
    */
    public function setSecureByDefault(?bool $value ): void {
        $this->secureByDefault = $value;
    }

}
