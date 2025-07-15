<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class FileStorageContainerTypeSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new FileStorageContainerTypeSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileStorageContainerTypeSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileStorageContainerTypeSettings {
        return new FileStorageContainerTypeSettings();
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
     * Gets the consumingTenantOverridables property value. The consumingTenantOverridables property
     * @return FileStorageContainerTypeSettingsOverride|null
    */
    public function getConsumingTenantOverridables(): ?FileStorageContainerTypeSettingsOverride {
        $val = $this->getBackingStore()->get('consumingTenantOverridables');
        if (is_null($val) || $val instanceof FileStorageContainerTypeSettingsOverride) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'consumingTenantOverridables'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'consumingTenantOverridables' => fn(ParseNode $n) => $o->setConsumingTenantOverridables($n->getEnumValue(FileStorageContainerTypeSettingsOverride::class)),
            'isDiscoverabilityEnabled' => fn(ParseNode $n) => $o->setIsDiscoverabilityEnabled($n->getBooleanValue()),
            'isItemVersioningEnabled' => fn(ParseNode $n) => $o->setIsItemVersioningEnabled($n->getBooleanValue()),
            'isSearchEnabled' => fn(ParseNode $n) => $o->setIsSearchEnabled($n->getBooleanValue()),
            'isSharingRestricted' => fn(ParseNode $n) => $o->setIsSharingRestricted($n->getBooleanValue()),
            'itemMajorVersionLimit' => fn(ParseNode $n) => $o->setItemMajorVersionLimit($n->getIntegerValue()),
            'maxStoragePerContainerInBytes' => fn(ParseNode $n) => $o->setMaxStoragePerContainerInBytes($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sharingCapability' => fn(ParseNode $n) => $o->setSharingCapability($n->getEnumValue(SharingCapabilities::class)),
            'urlTemplate' => fn(ParseNode $n) => $o->setUrlTemplate($n->getStringValue()),
        ];
    }

    /**
     * Gets the isDiscoverabilityEnabled property value. The isDiscoverabilityEnabled property
     * @return bool|null
    */
    public function getIsDiscoverabilityEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isDiscoverabilityEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDiscoverabilityEnabled'");
    }

    /**
     * Gets the isItemVersioningEnabled property value. The isItemVersioningEnabled property
     * @return bool|null
    */
    public function getIsItemVersioningEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isItemVersioningEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isItemVersioningEnabled'");
    }

    /**
     * Gets the isSearchEnabled property value. The isSearchEnabled property
     * @return bool|null
    */
    public function getIsSearchEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSearchEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSearchEnabled'");
    }

    /**
     * Gets the isSharingRestricted property value. The isSharingRestricted property
     * @return bool|null
    */
    public function getIsSharingRestricted(): ?bool {
        $val = $this->getBackingStore()->get('isSharingRestricted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSharingRestricted'");
    }

    /**
     * Gets the itemMajorVersionLimit property value. The itemMajorVersionLimit property
     * @return int|null
    */
    public function getItemMajorVersionLimit(): ?int {
        $val = $this->getBackingStore()->get('itemMajorVersionLimit');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemMajorVersionLimit'");
    }

    /**
     * Gets the maxStoragePerContainerInBytes property value. The maxStoragePerContainerInBytes property
     * @return int|null
    */
    public function getMaxStoragePerContainerInBytes(): ?int {
        $val = $this->getBackingStore()->get('maxStoragePerContainerInBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxStoragePerContainerInBytes'");
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
     * Gets the sharingCapability property value. The sharingCapability property
     * @return SharingCapabilities|null
    */
    public function getSharingCapability(): ?SharingCapabilities {
        $val = $this->getBackingStore()->get('sharingCapability');
        if (is_null($val) || $val instanceof SharingCapabilities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharingCapability'");
    }

    /**
     * Gets the urlTemplate property value. The urlTemplate property
     * @return string|null
    */
    public function getUrlTemplate(): ?string {
        $val = $this->getBackingStore()->get('urlTemplate');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'urlTemplate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('consumingTenantOverridables', $this->getConsumingTenantOverridables());
        $writer->writeBooleanValue('isDiscoverabilityEnabled', $this->getIsDiscoverabilityEnabled());
        $writer->writeBooleanValue('isItemVersioningEnabled', $this->getIsItemVersioningEnabled());
        $writer->writeBooleanValue('isSearchEnabled', $this->getIsSearchEnabled());
        $writer->writeBooleanValue('isSharingRestricted', $this->getIsSharingRestricted());
        $writer->writeIntegerValue('itemMajorVersionLimit', $this->getItemMajorVersionLimit());
        $writer->writeIntegerValue('maxStoragePerContainerInBytes', $this->getMaxStoragePerContainerInBytes());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('sharingCapability', $this->getSharingCapability());
        $writer->writeStringValue('urlTemplate', $this->getUrlTemplate());
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
     * Sets the consumingTenantOverridables property value. The consumingTenantOverridables property
     * @param FileStorageContainerTypeSettingsOverride|null $value Value to set for the consumingTenantOverridables property.
    */
    public function setConsumingTenantOverridables(?FileStorageContainerTypeSettingsOverride $value): void {
        $this->getBackingStore()->set('consumingTenantOverridables', $value);
    }

    /**
     * Sets the isDiscoverabilityEnabled property value. The isDiscoverabilityEnabled property
     * @param bool|null $value Value to set for the isDiscoverabilityEnabled property.
    */
    public function setIsDiscoverabilityEnabled(?bool $value): void {
        $this->getBackingStore()->set('isDiscoverabilityEnabled', $value);
    }

    /**
     * Sets the isItemVersioningEnabled property value. The isItemVersioningEnabled property
     * @param bool|null $value Value to set for the isItemVersioningEnabled property.
    */
    public function setIsItemVersioningEnabled(?bool $value): void {
        $this->getBackingStore()->set('isItemVersioningEnabled', $value);
    }

    /**
     * Sets the isSearchEnabled property value. The isSearchEnabled property
     * @param bool|null $value Value to set for the isSearchEnabled property.
    */
    public function setIsSearchEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSearchEnabled', $value);
    }

    /**
     * Sets the isSharingRestricted property value. The isSharingRestricted property
     * @param bool|null $value Value to set for the isSharingRestricted property.
    */
    public function setIsSharingRestricted(?bool $value): void {
        $this->getBackingStore()->set('isSharingRestricted', $value);
    }

    /**
     * Sets the itemMajorVersionLimit property value. The itemMajorVersionLimit property
     * @param int|null $value Value to set for the itemMajorVersionLimit property.
    */
    public function setItemMajorVersionLimit(?int $value): void {
        $this->getBackingStore()->set('itemMajorVersionLimit', $value);
    }

    /**
     * Sets the maxStoragePerContainerInBytes property value. The maxStoragePerContainerInBytes property
     * @param int|null $value Value to set for the maxStoragePerContainerInBytes property.
    */
    public function setMaxStoragePerContainerInBytes(?int $value): void {
        $this->getBackingStore()->set('maxStoragePerContainerInBytes', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sharingCapability property value. The sharingCapability property
     * @param SharingCapabilities|null $value Value to set for the sharingCapability property.
    */
    public function setSharingCapability(?SharingCapabilities $value): void {
        $this->getBackingStore()->set('sharingCapability', $value);
    }

    /**
     * Sets the urlTemplate property value. The urlTemplate property
     * @param string|null $value Value to set for the urlTemplate property.
    */
    public function setUrlTemplate(?string $value): void {
        $this->getBackingStore()->set('urlTemplate', $value);
    }

}
