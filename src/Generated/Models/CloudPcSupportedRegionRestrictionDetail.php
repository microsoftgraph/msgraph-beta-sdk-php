<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcSupportedRegionRestrictionDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcSupportedRegionRestrictionDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcSupportedRegionRestrictionDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcSupportedRegionRestrictionDetail {
        return new CloudPcSupportedRegionRestrictionDetail();
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
     * Gets the cPURestricted property value. Indicates that the region is restricted for Cloud PC CPU provisioning. True indicates that Cloud PC provisioning with CPU isn't available in this region. false indicates that it's available. The default value is false. Read-only.
     * @return bool|null
    */
    public function getCPURestricted(): ?bool {
        $val = $this->getBackingStore()->get('cPURestricted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cPURestricted'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cPURestricted' => fn(ParseNode $n) => $o->setCPURestricted($n->getBooleanValue()),
            'gPURestricted' => fn(ParseNode $n) => $o->setGPURestricted($n->getBooleanValue()),
            'nestedVirtualizationRestricted' => fn(ParseNode $n) => $o->setNestedVirtualizationRestricted($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the gPURestricted property value. Indicates that the region is restricted for Cloud PC GPU provisioning. True indicates that Cloud PC provisioning with GPU isn't available in this region. false indicates that it's available. The default value is false. Read-only.
     * @return bool|null
    */
    public function getGPURestricted(): ?bool {
        $val = $this->getBackingStore()->get('gPURestricted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'gPURestricted'");
    }

    /**
     * Gets the nestedVirtualizationRestricted property value. Indicates that the region is restricted for Cloud PC nested virtualization provisioning. True indicates that Cloud PC provisioning with nested virtualization isn't available in this region; false indicates that it's available. The default value is false. Read-only.
     * @return bool|null
    */
    public function getNestedVirtualizationRestricted(): ?bool {
        $val = $this->getBackingStore()->get('nestedVirtualizationRestricted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nestedVirtualizationRestricted'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('cPURestricted', $this->getCPURestricted());
        $writer->writeBooleanValue('gPURestricted', $this->getGPURestricted());
        $writer->writeBooleanValue('nestedVirtualizationRestricted', $this->getNestedVirtualizationRestricted());
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
     * Sets the cPURestricted property value. Indicates that the region is restricted for Cloud PC CPU provisioning. True indicates that Cloud PC provisioning with CPU isn't available in this region. false indicates that it's available. The default value is false. Read-only.
     * @param bool|null $value Value to set for the cPURestricted property.
    */
    public function setCPURestricted(?bool $value): void {
        $this->getBackingStore()->set('cPURestricted', $value);
    }

    /**
     * Sets the gPURestricted property value. Indicates that the region is restricted for Cloud PC GPU provisioning. True indicates that Cloud PC provisioning with GPU isn't available in this region. false indicates that it's available. The default value is false. Read-only.
     * @param bool|null $value Value to set for the gPURestricted property.
    */
    public function setGPURestricted(?bool $value): void {
        $this->getBackingStore()->set('gPURestricted', $value);
    }

    /**
     * Sets the nestedVirtualizationRestricted property value. Indicates that the region is restricted for Cloud PC nested virtualization provisioning. True indicates that Cloud PC provisioning with nested virtualization isn't available in this region; false indicates that it's available. The default value is false. Read-only.
     * @param bool|null $value Value to set for the nestedVirtualizationRestricted property.
    */
    public function setNestedVirtualizationRestricted(?bool $value): void {
        $this->getBackingStore()->set('nestedVirtualizationRestricted', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
