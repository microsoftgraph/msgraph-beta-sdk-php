<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IdJagApplicationConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IdJagApplicationConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdJagApplicationConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdJagApplicationConfiguration {
        return new IdJagApplicationConfiguration();
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
     * Gets the client property value. The client property
     * @return IdJagClientConfiguration|null
    */
    public function getClient(): ?IdJagClientConfiguration {
        $val = $this->getBackingStore()->get('client');
        if (is_null($val) || $val instanceof IdJagClientConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'client'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'client' => fn(ParseNode $n) => $o->setClient($n->getObjectValue([IdJagClientConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'resourceAuthorizationServer' => fn(ParseNode $n) => $o->setResourceAuthorizationServer($n->getObjectValue([IdJagResourceAuthorizationServerConfiguration::class, 'createFromDiscriminatorValue'])),
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
     * Gets the resourceAuthorizationServer property value. The resourceAuthorizationServer property
     * @return IdJagResourceAuthorizationServerConfiguration|null
    */
    public function getResourceAuthorizationServer(): ?IdJagResourceAuthorizationServerConfiguration {
        $val = $this->getBackingStore()->get('resourceAuthorizationServer');
        if (is_null($val) || $val instanceof IdJagResourceAuthorizationServerConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceAuthorizationServer'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('client', $this->getClient());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('resourceAuthorizationServer', $this->getResourceAuthorizationServer());
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
     * Sets the client property value. The client property
     * @param IdJagClientConfiguration|null $value Value to set for the client property.
    */
    public function setClient(?IdJagClientConfiguration $value): void {
        $this->getBackingStore()->set('client', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the resourceAuthorizationServer property value. The resourceAuthorizationServer property
     * @param IdJagResourceAuthorizationServerConfiguration|null $value Value to set for the resourceAuthorizationServer property.
    */
    public function setResourceAuthorizationServer(?IdJagResourceAuthorizationServerConfiguration $value): void {
        $this->getBackingStore()->set('resourceAuthorizationServer', $value);
    }

}
