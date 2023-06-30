<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SecurityProviderStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new securityProviderStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityProviderStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityProviderStatus {
        return new SecurityProviderStatus();
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the enabled property value. The enabled property
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
     * Gets the endpoint property value. The endpoint property
     * @return string|null
    */
    public function getEndpoint(): ?string {
        $val = $this->getBackingStore()->get('endpoint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endpoint'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'endpoint' => fn(ParseNode $n) => $o->setEndpoint($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getStringValue()),
            'region' => fn(ParseNode $n) => $o->setRegion($n->getStringValue()),
            'vendor' => fn(ParseNode $n) => $o->setVendor($n->getStringValue()),
        ];
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
     * Gets the provider property value. The provider property
     * @return string|null
    */
    public function getProvider(): ?string {
        $val = $this->getBackingStore()->get('provider');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provider'");
    }

    /**
     * Gets the region property value. The region property
     * @return string|null
    */
    public function getRegion(): ?string {
        $val = $this->getBackingStore()->get('region');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'region'");
    }

    /**
     * Gets the vendor property value. The vendor property
     * @return string|null
    */
    public function getVendor(): ?string {
        $val = $this->getBackingStore()->get('vendor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vendor'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeStringValue('endpoint', $this->getEndpoint());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('provider', $this->getProvider());
        $writer->writeStringValue('region', $this->getRegion());
        $writer->writeStringValue('vendor', $this->getVendor());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the enabled property value. The enabled property
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the endpoint property value. The endpoint property
     * @param string|null $value Value to set for the endpoint property.
    */
    public function setEndpoint(?string $value): void {
        $this->getBackingStore()->set('endpoint', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the provider property value. The provider property
     * @param string|null $value Value to set for the provider property.
    */
    public function setProvider(?string $value): void {
        $this->getBackingStore()->set('provider', $value);
    }

    /**
     * Sets the region property value. The region property
     * @param string|null $value Value to set for the region property.
    */
    public function setRegion(?string $value): void {
        $this->getBackingStore()->set('region', $value);
    }

    /**
     * Sets the vendor property value. The vendor property
     * @param string|null $value Value to set for the vendor property.
    */
    public function setVendor(?string $value): void {
        $this->getBackingStore()->set('vendor', $value);
    }

}
