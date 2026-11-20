<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ApplicationIdentifierUriConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ApplicationIdentifierUriConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplicationIdentifierUriConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApplicationIdentifierUriConfiguration {
        return new ApplicationIdentifierUriConfiguration();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'idJag' => fn(ParseNode $n) => $o->setIdJag($n->getObjectValue([IdJagIdentifierUriConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'saml' => fn(ParseNode $n) => $o->setSaml($n->getObjectValue([SamlIdentifierUriConfiguration::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the idJag property value. The idJag property
     * @return IdJagIdentifierUriConfiguration|null
    */
    public function getIdJag(): ?IdJagIdentifierUriConfiguration {
        $val = $this->getBackingStore()->get('idJag');
        if (is_null($val) || $val instanceof IdJagIdentifierUriConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'idJag'");
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
     * Gets the saml property value. The saml property
     * @return SamlIdentifierUriConfiguration|null
    */
    public function getSaml(): ?SamlIdentifierUriConfiguration {
        $val = $this->getBackingStore()->get('saml');
        if (is_null($val) || $val instanceof SamlIdentifierUriConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'saml'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('idJag', $this->getIdJag());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('saml', $this->getSaml());
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
     * Sets the idJag property value. The idJag property
     * @param IdJagIdentifierUriConfiguration|null $value Value to set for the idJag property.
    */
    public function setIdJag(?IdJagIdentifierUriConfiguration $value): void {
        $this->getBackingStore()->set('idJag', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the saml property value. The saml property
     * @param SamlIdentifierUriConfiguration|null $value Value to set for the saml property.
    */
    public function setSaml(?SamlIdentifierUriConfiguration $value): void {
        $this->getBackingStore()->set('saml', $value);
    }

}
