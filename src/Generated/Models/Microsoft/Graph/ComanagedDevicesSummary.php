<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ComanagedDevicesSummary implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $compliancePolicyCount Number of devices with CompliancePolicy swung-over. This property is read-only. */
    private ?int $compliancePolicyCount = null;
    
    /** @var int|null $configurationSettingsCount Number of devices with ConfigurationSettings swung-over. This property is read-only. */
    private ?int $configurationSettingsCount = null;
    
    /** @var int|null $endpointProtectionCount Number of devices with EndpointProtection swung-over. This property is read-only. */
    private ?int $endpointProtectionCount = null;
    
    /** @var int|null $inventoryCount Number of devices with Inventory swung-over. This property is read-only. */
    private ?int $inventoryCount = null;
    
    /** @var int|null $modernAppsCount Number of devices with ModernApps swung-over. This property is read-only. */
    private ?int $modernAppsCount = null;
    
    /** @var int|null $officeAppsCount Number of devices with OfficeApps swung-over. This property is read-only. */
    private ?int $officeAppsCount = null;
    
    /** @var int|null $resourceAccessCount Number of devices with ResourceAccess swung-over. This property is read-only. */
    private ?int $resourceAccessCount = null;
    
    /** @var int|null $totalComanagedCount Number of Co-Managed Devices. This property is read-only. */
    private ?int $totalComanagedCount = null;
    
    /** @var int|null $windowsUpdateForBusinessCount Number of devices with WindowsUpdateForBusiness swung-over. This property is read-only. */
    private ?int $windowsUpdateForBusinessCount = null;
    
    /**
     * Instantiates a new comanagedDevicesSummary and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComanagedDevicesSummary
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ComanagedDevicesSummary {
        return new ComanagedDevicesSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the compliancePolicyCount property value. Number of devices with CompliancePolicy swung-over. This property is read-only.
     * @return int|null
    */
    public function getCompliancePolicyCount(): ?int {
        return $this->compliancePolicyCount;
    }

    /**
     * Gets the configurationSettingsCount property value. Number of devices with ConfigurationSettings swung-over. This property is read-only.
     * @return int|null
    */
    public function getConfigurationSettingsCount(): ?int {
        return $this->configurationSettingsCount;
    }

    /**
     * Gets the endpointProtectionCount property value. Number of devices with EndpointProtection swung-over. This property is read-only.
     * @return int|null
    */
    public function getEndpointProtectionCount(): ?int {
        return $this->endpointProtectionCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'compliancePolicyCount' => function (self $o, ParseNode $n) { $o->setCompliancePolicyCount($n->getIntegerValue()); },
            'configurationSettingsCount' => function (self $o, ParseNode $n) { $o->setConfigurationSettingsCount($n->getIntegerValue()); },
            'endpointProtectionCount' => function (self $o, ParseNode $n) { $o->setEndpointProtectionCount($n->getIntegerValue()); },
            'inventoryCount' => function (self $o, ParseNode $n) { $o->setInventoryCount($n->getIntegerValue()); },
            'modernAppsCount' => function (self $o, ParseNode $n) { $o->setModernAppsCount($n->getIntegerValue()); },
            'officeAppsCount' => function (self $o, ParseNode $n) { $o->setOfficeAppsCount($n->getIntegerValue()); },
            'resourceAccessCount' => function (self $o, ParseNode $n) { $o->setResourceAccessCount($n->getIntegerValue()); },
            'totalComanagedCount' => function (self $o, ParseNode $n) { $o->setTotalComanagedCount($n->getIntegerValue()); },
            'windowsUpdateForBusinessCount' => function (self $o, ParseNode $n) { $o->setWindowsUpdateForBusinessCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the inventoryCount property value. Number of devices with Inventory swung-over. This property is read-only.
     * @return int|null
    */
    public function getInventoryCount(): ?int {
        return $this->inventoryCount;
    }

    /**
     * Gets the modernAppsCount property value. Number of devices with ModernApps swung-over. This property is read-only.
     * @return int|null
    */
    public function getModernAppsCount(): ?int {
        return $this->modernAppsCount;
    }

    /**
     * Gets the officeAppsCount property value. Number of devices with OfficeApps swung-over. This property is read-only.
     * @return int|null
    */
    public function getOfficeAppsCount(): ?int {
        return $this->officeAppsCount;
    }

    /**
     * Gets the resourceAccessCount property value. Number of devices with ResourceAccess swung-over. This property is read-only.
     * @return int|null
    */
    public function getResourceAccessCount(): ?int {
        return $this->resourceAccessCount;
    }

    /**
     * Gets the totalComanagedCount property value. Number of Co-Managed Devices. This property is read-only.
     * @return int|null
    */
    public function getTotalComanagedCount(): ?int {
        return $this->totalComanagedCount;
    }

    /**
     * Gets the windowsUpdateForBusinessCount property value. Number of devices with WindowsUpdateForBusiness swung-over. This property is read-only.
     * @return int|null
    */
    public function getWindowsUpdateForBusinessCount(): ?int {
        return $this->windowsUpdateForBusinessCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('compliancePolicyCount', $this->compliancePolicyCount);
        $writer->writeIntegerValue('configurationSettingsCount', $this->configurationSettingsCount);
        $writer->writeIntegerValue('endpointProtectionCount', $this->endpointProtectionCount);
        $writer->writeIntegerValue('inventoryCount', $this->inventoryCount);
        $writer->writeIntegerValue('modernAppsCount', $this->modernAppsCount);
        $writer->writeIntegerValue('officeAppsCount', $this->officeAppsCount);
        $writer->writeIntegerValue('resourceAccessCount', $this->resourceAccessCount);
        $writer->writeIntegerValue('totalComanagedCount', $this->totalComanagedCount);
        $writer->writeIntegerValue('windowsUpdateForBusinessCount', $this->windowsUpdateForBusinessCount);
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
     * Sets the compliancePolicyCount property value. Number of devices with CompliancePolicy swung-over. This property is read-only.
     *  @param int|null $value Value to set for the compliancePolicyCount property.
    */
    public function setCompliancePolicyCount(?int $value ): void {
        $this->compliancePolicyCount = $value;
    }

    /**
     * Sets the configurationSettingsCount property value. Number of devices with ConfigurationSettings swung-over. This property is read-only.
     *  @param int|null $value Value to set for the configurationSettingsCount property.
    */
    public function setConfigurationSettingsCount(?int $value ): void {
        $this->configurationSettingsCount = $value;
    }

    /**
     * Sets the endpointProtectionCount property value. Number of devices with EndpointProtection swung-over. This property is read-only.
     *  @param int|null $value Value to set for the endpointProtectionCount property.
    */
    public function setEndpointProtectionCount(?int $value ): void {
        $this->endpointProtectionCount = $value;
    }

    /**
     * Sets the inventoryCount property value. Number of devices with Inventory swung-over. This property is read-only.
     *  @param int|null $value Value to set for the inventoryCount property.
    */
    public function setInventoryCount(?int $value ): void {
        $this->inventoryCount = $value;
    }

    /**
     * Sets the modernAppsCount property value. Number of devices with ModernApps swung-over. This property is read-only.
     *  @param int|null $value Value to set for the modernAppsCount property.
    */
    public function setModernAppsCount(?int $value ): void {
        $this->modernAppsCount = $value;
    }

    /**
     * Sets the officeAppsCount property value. Number of devices with OfficeApps swung-over. This property is read-only.
     *  @param int|null $value Value to set for the officeAppsCount property.
    */
    public function setOfficeAppsCount(?int $value ): void {
        $this->officeAppsCount = $value;
    }

    /**
     * Sets the resourceAccessCount property value. Number of devices with ResourceAccess swung-over. This property is read-only.
     *  @param int|null $value Value to set for the resourceAccessCount property.
    */
    public function setResourceAccessCount(?int $value ): void {
        $this->resourceAccessCount = $value;
    }

    /**
     * Sets the totalComanagedCount property value. Number of Co-Managed Devices. This property is read-only.
     *  @param int|null $value Value to set for the totalComanagedCount property.
    */
    public function setTotalComanagedCount(?int $value ): void {
        $this->totalComanagedCount = $value;
    }

    /**
     * Sets the windowsUpdateForBusinessCount property value. Number of devices with WindowsUpdateForBusiness swung-over. This property is read-only.
     *  @param int|null $value Value to set for the windowsUpdateForBusinessCount property.
    */
    public function setWindowsUpdateForBusinessCount(?int $value ): void {
        $this->windowsUpdateForBusinessCount = $value;
    }

}
