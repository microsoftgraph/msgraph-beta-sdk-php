<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationWindowsSettingApplicability extends DeviceManagementConfigurationSettingApplicability implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationWindowsSettingApplicability and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationWindowsSettingApplicability');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationWindowsSettingApplicability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationWindowsSettingApplicability {
        return new DeviceManagementConfigurationWindowsSettingApplicability();
    }

    /**
     * Gets the configurationServiceProviderVersion property value. Version of CSP setting is a part of
     * @return string|null
    */
    public function getConfigurationServiceProviderVersion(): ?string {
        return $this->getBackingStore()->get('configurationServiceProviderVersion');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationServiceProviderVersion' => fn(ParseNode $n) => $o->setConfigurationServiceProviderVersion($n->getStringValue()),
            'maximumSupportedVersion' => fn(ParseNode $n) => $o->setMaximumSupportedVersion($n->getStringValue()),
            'minimumSupportedVersion' => fn(ParseNode $n) => $o->setMinimumSupportedVersion($n->getStringValue()),
            'requiredAzureAdTrustType' => fn(ParseNode $n) => $o->setRequiredAzureAdTrustType($n->getEnumValue(DeviceManagementConfigurationAzureAdTrustType::class)),
            'requiresAzureAd' => fn(ParseNode $n) => $o->setRequiresAzureAd($n->getBooleanValue()),
            'windowsSkus' => fn(ParseNode $n) => $o->setWindowsSkus($n->getCollectionOfEnumValues(DeviceManagementConfigurationWindowsSkus::class)),
        ]);
    }

    /**
     * Gets the maximumSupportedVersion property value. Maximum supported version of Windows
     * @return string|null
    */
    public function getMaximumSupportedVersion(): ?string {
        return $this->getBackingStore()->get('maximumSupportedVersion');
    }

    /**
     * Gets the minimumSupportedVersion property value. Minimum supported version of Windows
     * @return string|null
    */
    public function getMinimumSupportedVersion(): ?string {
        return $this->getBackingStore()->get('minimumSupportedVersion');
    }

    /**
     * Gets the requiredAzureAdTrustType property value. Required AAD Trust Type
     * @return DeviceManagementConfigurationAzureAdTrustType|null
    */
    public function getRequiredAzureAdTrustType(): ?DeviceManagementConfigurationAzureAdTrustType {
        return $this->getBackingStore()->get('requiredAzureAdTrustType');
    }

    /**
     * Gets the requiresAzureAd property value. AzureAD setting requirement
     * @return bool|null
    */
    public function getRequiresAzureAd(): ?bool {
        return $this->getBackingStore()->get('requiresAzureAd');
    }

    /**
     * Gets the windowsSkus property value. List of Windows SKUs that the setting is applicable for
     * @return array<DeviceManagementConfigurationWindowsSkus>|null
    */
    public function getWindowsSkus(): ?array {
        return $this->getBackingStore()->get('windowsSkus');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('configurationServiceProviderVersion', $this->getConfigurationServiceProviderVersion());
        $writer->writeStringValue('maximumSupportedVersion', $this->getMaximumSupportedVersion());
        $writer->writeStringValue('minimumSupportedVersion', $this->getMinimumSupportedVersion());
        $writer->writeEnumValue('requiredAzureAdTrustType', $this->getRequiredAzureAdTrustType());
        $writer->writeBooleanValue('requiresAzureAd', $this->getRequiresAzureAd());
        $writer->writeCollectionOfEnumValues('windowsSkus', $this->getWindowsSkus());
    }

    /**
     * Sets the configurationServiceProviderVersion property value. Version of CSP setting is a part of
     * @param string|null $value Value to set for the configurationServiceProviderVersion property.
    */
    public function setConfigurationServiceProviderVersion(?string $value): void {
        $this->getBackingStore()->set('configurationServiceProviderVersion', $value);
    }

    /**
     * Sets the maximumSupportedVersion property value. Maximum supported version of Windows
     * @param string|null $value Value to set for the maximumSupportedVersion property.
    */
    public function setMaximumSupportedVersion(?string $value): void {
        $this->getBackingStore()->set('maximumSupportedVersion', $value);
    }

    /**
     * Sets the minimumSupportedVersion property value. Minimum supported version of Windows
     * @param string|null $value Value to set for the minimumSupportedVersion property.
    */
    public function setMinimumSupportedVersion(?string $value): void {
        $this->getBackingStore()->set('minimumSupportedVersion', $value);
    }

    /**
     * Sets the requiredAzureAdTrustType property value. Required AAD Trust Type
     * @param DeviceManagementConfigurationAzureAdTrustType|null $value Value to set for the requiredAzureAdTrustType property.
    */
    public function setRequiredAzureAdTrustType(?DeviceManagementConfigurationAzureAdTrustType $value): void {
        $this->getBackingStore()->set('requiredAzureAdTrustType', $value);
    }

    /**
     * Sets the requiresAzureAd property value. AzureAD setting requirement
     * @param bool|null $value Value to set for the requiresAzureAd property.
    */
    public function setRequiresAzureAd(?bool $value): void {
        $this->getBackingStore()->set('requiresAzureAd', $value);
    }

    /**
     * Sets the windowsSkus property value. List of Windows SKUs that the setting is applicable for
     * @param array<DeviceManagementConfigurationWindowsSkus>|null $value Value to set for the windowsSkus property.
    */
    public function setWindowsSkus(?array $value): void {
        $this->getBackingStore()->set('windowsSkus', $value);
    }

}
