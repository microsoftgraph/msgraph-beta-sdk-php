<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationWindowsSettingApplicability extends DeviceManagementConfigurationSettingApplicability implements Parsable 
{
    /**
     * @var string|null $configurationServiceProviderVersion Version of CSP setting is a part of
    */
    private ?string $configurationServiceProviderVersion = null;
    
    /**
     * @var string|null $maximumSupportedVersion Maximum supported version of Windows
    */
    private ?string $maximumSupportedVersion = null;
    
    /**
     * @var string|null $minimumSupportedVersion Minimum supported version of Windows
    */
    private ?string $minimumSupportedVersion = null;
    
    /**
     * @var DeviceManagementConfigurationAzureAdTrustType|null $requiredAzureAdTrustType Required AzureAD trust type. Possible values are: none, azureAdJoined, addWorkAccount, mdmOnly.
    */
    private ?DeviceManagementConfigurationAzureAdTrustType $requiredAzureAdTrustType = null;
    
    /**
     * @var bool|null $requiresAzureAd AzureAD setting requirement
    */
    private ?bool $requiresAzureAd = null;
    
    /**
     * @var array<string>|null $windowsSkus List of Windows SKUs that the setting is applicable for
    */
    private ?array $windowsSkus = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationWindowsSettingApplicability and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->configurationServiceProviderVersion;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationServiceProviderVersion' => function (ParseNode $n) use ($o) { $o->setConfigurationServiceProviderVersion($n->getStringValue()); },
            'maximumSupportedVersion' => function (ParseNode $n) use ($o) { $o->setMaximumSupportedVersion($n->getStringValue()); },
            'minimumSupportedVersion' => function (ParseNode $n) use ($o) { $o->setMinimumSupportedVersion($n->getStringValue()); },
            'requiredAzureAdTrustType' => function (ParseNode $n) use ($o) { $o->setRequiredAzureAdTrustType($n->getEnumValue(DeviceManagementConfigurationAzureAdTrustType::class)); },
            'requiresAzureAd' => function (ParseNode $n) use ($o) { $o->setRequiresAzureAd($n->getBooleanValue()); },
            'windowsSkus' => function (ParseNode $n) use ($o) { $o->setWindowsSkus($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the maximumSupportedVersion property value. Maximum supported version of Windows
     * @return string|null
    */
    public function getMaximumSupportedVersion(): ?string {
        return $this->maximumSupportedVersion;
    }

    /**
     * Gets the minimumSupportedVersion property value. Minimum supported version of Windows
     * @return string|null
    */
    public function getMinimumSupportedVersion(): ?string {
        return $this->minimumSupportedVersion;
    }

    /**
     * Gets the requiredAzureAdTrustType property value. Required AzureAD trust type. Possible values are: none, azureAdJoined, addWorkAccount, mdmOnly.
     * @return DeviceManagementConfigurationAzureAdTrustType|null
    */
    public function getRequiredAzureAdTrustType(): ?DeviceManagementConfigurationAzureAdTrustType {
        return $this->requiredAzureAdTrustType;
    }

    /**
     * Gets the requiresAzureAd property value. AzureAD setting requirement
     * @return bool|null
    */
    public function getRequiresAzureAd(): ?bool {
        return $this->requiresAzureAd;
    }

    /**
     * Gets the windowsSkus property value. List of Windows SKUs that the setting is applicable for
     * @return array<string>|null
    */
    public function getWindowsSkus(): ?array {
        return $this->windowsSkus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('configurationServiceProviderVersion', $this->configurationServiceProviderVersion);
        $writer->writeStringValue('maximumSupportedVersion', $this->maximumSupportedVersion);
        $writer->writeStringValue('minimumSupportedVersion', $this->minimumSupportedVersion);
        $writer->writeEnumValue('requiredAzureAdTrustType', $this->requiredAzureAdTrustType);
        $writer->writeBooleanValue('requiresAzureAd', $this->requiresAzureAd);
        $writer->writeCollectionOfPrimitiveValues('windowsSkus', $this->windowsSkus);
    }

    /**
     * Sets the configurationServiceProviderVersion property value. Version of CSP setting is a part of
     *  @param string|null $value Value to set for the configurationServiceProviderVersion property.
    */
    public function setConfigurationServiceProviderVersion(?string $value ): void {
        $this->configurationServiceProviderVersion = $value;
    }

    /**
     * Sets the maximumSupportedVersion property value. Maximum supported version of Windows
     *  @param string|null $value Value to set for the maximumSupportedVersion property.
    */
    public function setMaximumSupportedVersion(?string $value ): void {
        $this->maximumSupportedVersion = $value;
    }

    /**
     * Sets the minimumSupportedVersion property value. Minimum supported version of Windows
     *  @param string|null $value Value to set for the minimumSupportedVersion property.
    */
    public function setMinimumSupportedVersion(?string $value ): void {
        $this->minimumSupportedVersion = $value;
    }

    /**
     * Sets the requiredAzureAdTrustType property value. Required AzureAD trust type. Possible values are: none, azureAdJoined, addWorkAccount, mdmOnly.
     *  @param DeviceManagementConfigurationAzureAdTrustType|null $value Value to set for the requiredAzureAdTrustType property.
    */
    public function setRequiredAzureAdTrustType(?DeviceManagementConfigurationAzureAdTrustType $value ): void {
        $this->requiredAzureAdTrustType = $value;
    }

    /**
     * Sets the requiresAzureAd property value. AzureAD setting requirement
     *  @param bool|null $value Value to set for the requiresAzureAd property.
    */
    public function setRequiresAzureAd(?bool $value ): void {
        $this->requiresAzureAd = $value;
    }

    /**
     * Sets the windowsSkus property value. List of Windows SKUs that the setting is applicable for
     *  @param array<string>|null $value Value to set for the windowsSkus property.
    */
    public function setWindowsSkus(?array $value ): void {
        $this->windowsSkus = $value;
    }

}
