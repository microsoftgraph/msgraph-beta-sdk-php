<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PermissionsDefinitionAuthorizationSystemIdentity implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PermissionsDefinitionAuthorizationSystemIdentity and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionsDefinitionAuthorizationSystemIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionsDefinitionAuthorizationSystemIdentity {
        return new PermissionsDefinitionAuthorizationSystemIdentity();
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
     * Gets the externalId property value. Unique ID of the identity within the external system. Prefixed with rsn: if this is a SAML or ED user in AWS. Alternate key.
     * @return string|null
    */
    public function getExternalId(): ?string {
        $val = $this->getBackingStore()->get('externalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'identityType' => fn(ParseNode $n) => $o->setIdentityType($n->getEnumValue(PermissionsDefinitionIdentityType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getObjectValue([PermissionsDefinitionIdentitySource::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the identityType property value. The identityType property
     * @return PermissionsDefinitionIdentityType|null
    */
    public function getIdentityType(): ?PermissionsDefinitionIdentityType {
        $val = $this->getBackingStore()->get('identityType');
        if (is_null($val) || $val instanceof PermissionsDefinitionIdentityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityType'");
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
     * Gets the source property value. The source property
     * @return PermissionsDefinitionIdentitySource|null
    */
    public function getSource(): ?PermissionsDefinitionIdentitySource {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || $val instanceof PermissionsDefinitionIdentitySource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeEnumValue('identityType', $this->getIdentityType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('source', $this->getSource());
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
     * Sets the externalId property value. Unique ID of the identity within the external system. Prefixed with rsn: if this is a SAML or ED user in AWS. Alternate key.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the identityType property value. The identityType property
     * @param PermissionsDefinitionIdentityType|null $value Value to set for the identityType property.
    */
    public function setIdentityType(?PermissionsDefinitionIdentityType $value): void {
        $this->getBackingStore()->set('identityType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the source property value. The source property
     * @param PermissionsDefinitionIdentitySource|null $value Value to set for the source property.
    */
    public function setSource(?PermissionsDefinitionIdentitySource $value): void {
        $this->getBackingStore()->set('source', $value);
    }

}
