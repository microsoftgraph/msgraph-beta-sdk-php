<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Summary data for co managed devices
*/
class ComanagedDevicesSummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ComanagedDevicesSummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComanagedDevicesSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComanagedDevicesSummary {
        return new ComanagedDevicesSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the compliancePolicyCount property value. Number of devices with CompliancePolicy swung-over. This property is read-only.
     * @return int|null
    */
    public function getCompliancePolicyCount(): ?int {
        $val = $this->getBackingStore()->get('compliancePolicyCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliancePolicyCount'");
    }

    /**
     * Gets the configurationSettingsCount property value. Number of devices with ConfigurationSettings swung-over. This property is read-only.
     * @return int|null
    */
    public function getConfigurationSettingsCount(): ?int {
        $val = $this->getBackingStore()->get('configurationSettingsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationSettingsCount'");
    }

    /**
     * Gets the endpointProtectionCount property value. Number of devices with EndpointProtection swung-over. This property is read-only.
     * @return int|null
    */
    public function getEndpointProtectionCount(): ?int {
        $val = $this->getBackingStore()->get('endpointProtectionCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endpointProtectionCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'compliancePolicyCount' => fn(ParseNode $n) => $o->setCompliancePolicyCount($n->getIntegerValue()),
            'configurationSettingsCount' => fn(ParseNode $n) => $o->setConfigurationSettingsCount($n->getIntegerValue()),
            'endpointProtectionCount' => fn(ParseNode $n) => $o->setEndpointProtectionCount($n->getIntegerValue()),
            'inventoryCount' => fn(ParseNode $n) => $o->setInventoryCount($n->getIntegerValue()),
            'modernAppsCount' => fn(ParseNode $n) => $o->setModernAppsCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'officeAppsCount' => fn(ParseNode $n) => $o->setOfficeAppsCount($n->getIntegerValue()),
            'resourceAccessCount' => fn(ParseNode $n) => $o->setResourceAccessCount($n->getIntegerValue()),
            'totalComanagedCount' => fn(ParseNode $n) => $o->setTotalComanagedCount($n->getIntegerValue()),
            'windowsUpdateForBusinessCount' => fn(ParseNode $n) => $o->setWindowsUpdateForBusinessCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the inventoryCount property value. Number of devices with Inventory swung-over. This property is read-only.
     * @return int|null
    */
    public function getInventoryCount(): ?int {
        $val = $this->getBackingStore()->get('inventoryCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inventoryCount'");
    }

    /**
     * Gets the modernAppsCount property value. Number of devices with ModernApps swung-over. This property is read-only.
     * @return int|null
    */
    public function getModernAppsCount(): ?int {
        $val = $this->getBackingStore()->get('modernAppsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modernAppsCount'");
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
     * Gets the officeAppsCount property value. Number of devices with OfficeApps swung-over. This property is read-only.
     * @return int|null
    */
    public function getOfficeAppsCount(): ?int {
        $val = $this->getBackingStore()->get('officeAppsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'officeAppsCount'");
    }

    /**
     * Gets the resourceAccessCount property value. Number of devices with ResourceAccess swung-over. This property is read-only.
     * @return int|null
    */
    public function getResourceAccessCount(): ?int {
        $val = $this->getBackingStore()->get('resourceAccessCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceAccessCount'");
    }

    /**
     * Gets the totalComanagedCount property value. Number of Co-Managed Devices. This property is read-only.
     * @return int|null
    */
    public function getTotalComanagedCount(): ?int {
        $val = $this->getBackingStore()->get('totalComanagedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalComanagedCount'");
    }

    /**
     * Gets the windowsUpdateForBusinessCount property value. Number of devices with WindowsUpdateForBusiness swung-over. This property is read-only.
     * @return int|null
    */
    public function getWindowsUpdateForBusinessCount(): ?int {
        $val = $this->getBackingStore()->get('windowsUpdateForBusinessCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsUpdateForBusinessCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the compliancePolicyCount property value. Number of devices with CompliancePolicy swung-over. This property is read-only.
     * @param int|null $value Value to set for the compliancePolicyCount property.
    */
    public function setCompliancePolicyCount(?int $value): void {
        $this->getBackingStore()->set('compliancePolicyCount', $value);
    }

    /**
     * Sets the configurationSettingsCount property value. Number of devices with ConfigurationSettings swung-over. This property is read-only.
     * @param int|null $value Value to set for the configurationSettingsCount property.
    */
    public function setConfigurationSettingsCount(?int $value): void {
        $this->getBackingStore()->set('configurationSettingsCount', $value);
    }

    /**
     * Sets the endpointProtectionCount property value. Number of devices with EndpointProtection swung-over. This property is read-only.
     * @param int|null $value Value to set for the endpointProtectionCount property.
    */
    public function setEndpointProtectionCount(?int $value): void {
        $this->getBackingStore()->set('endpointProtectionCount', $value);
    }

    /**
     * Sets the inventoryCount property value. Number of devices with Inventory swung-over. This property is read-only.
     * @param int|null $value Value to set for the inventoryCount property.
    */
    public function setInventoryCount(?int $value): void {
        $this->getBackingStore()->set('inventoryCount', $value);
    }

    /**
     * Sets the modernAppsCount property value. Number of devices with ModernApps swung-over. This property is read-only.
     * @param int|null $value Value to set for the modernAppsCount property.
    */
    public function setModernAppsCount(?int $value): void {
        $this->getBackingStore()->set('modernAppsCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the officeAppsCount property value. Number of devices with OfficeApps swung-over. This property is read-only.
     * @param int|null $value Value to set for the officeAppsCount property.
    */
    public function setOfficeAppsCount(?int $value): void {
        $this->getBackingStore()->set('officeAppsCount', $value);
    }

    /**
     * Sets the resourceAccessCount property value. Number of devices with ResourceAccess swung-over. This property is read-only.
     * @param int|null $value Value to set for the resourceAccessCount property.
    */
    public function setResourceAccessCount(?int $value): void {
        $this->getBackingStore()->set('resourceAccessCount', $value);
    }

    /**
     * Sets the totalComanagedCount property value. Number of Co-Managed Devices. This property is read-only.
     * @param int|null $value Value to set for the totalComanagedCount property.
    */
    public function setTotalComanagedCount(?int $value): void {
        $this->getBackingStore()->set('totalComanagedCount', $value);
    }

    /**
     * Sets the windowsUpdateForBusinessCount property value. Number of devices with WindowsUpdateForBusiness swung-over. This property is read-only.
     * @param int|null $value Value to set for the windowsUpdateForBusinessCount property.
    */
    public function setWindowsUpdateForBusinessCount(?int $value): void {
        $this->getBackingStore()->set('windowsUpdateForBusinessCount', $value);
    }

}
