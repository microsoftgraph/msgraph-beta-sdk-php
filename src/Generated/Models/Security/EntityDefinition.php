<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EntityDefinition implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EntityDefinition and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EntityDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EntityDefinition {
        return new EntityDefinition();
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
     * Gets the entityIdentifier property value. The identifier kind for the selected entity type, such as userPrincipalName, deviceId, or address.
     * @return string|null
    */
    public function getEntityIdentifier(): ?string {
        $val = $this->getBackingStore()->get('entityIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entityIdentifier'");
    }

    /**
     * Gets the entityType property value. The entityType property
     * @return ManualAlertEntityType|null
    */
    public function getEntityType(): ?ManualAlertEntityType {
        $val = $this->getBackingStore()->get('entityType');
        if (is_null($val) || $val instanceof ManualAlertEntityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entityType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'entityIdentifier' => fn(ParseNode $n) => $o->setEntityIdentifier($n->getStringValue()),
            'entityType' => fn(ParseNode $n) => $o->setEntityType($n->getEnumValue(ManualAlertEntityType::class)),
            'identifierValue' => fn(ParseNode $n) => $o->setIdentifierValue($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(EntityDefinitionInputRole::class)),
        ];
    }

    /**
     * Gets the identifierValue property value. The value for the selected entity identifier.
     * @return string|null
    */
    public function getIdentifierValue(): ?string {
        $val = $this->getBackingStore()->get('identifierValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identifierValue'");
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
     * Gets the role property value. The role property
     * @return EntityDefinitionInputRole|null
    */
    public function getRole(): ?EntityDefinitionInputRole {
        $val = $this->getBackingStore()->get('role');
        if (is_null($val) || $val instanceof EntityDefinitionInputRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'role'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('entityIdentifier', $this->getEntityIdentifier());
        $writer->writeEnumValue('entityType', $this->getEntityType());
        $writer->writeStringValue('identifierValue', $this->getIdentifierValue());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('role', $this->getRole());
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
     * Sets the entityIdentifier property value. The identifier kind for the selected entity type, such as userPrincipalName, deviceId, or address.
     * @param string|null $value Value to set for the entityIdentifier property.
    */
    public function setEntityIdentifier(?string $value): void {
        $this->getBackingStore()->set('entityIdentifier', $value);
    }

    /**
     * Sets the entityType property value. The entityType property
     * @param ManualAlertEntityType|null $value Value to set for the entityType property.
    */
    public function setEntityType(?ManualAlertEntityType $value): void {
        $this->getBackingStore()->set('entityType', $value);
    }

    /**
     * Sets the identifierValue property value. The value for the selected entity identifier.
     * @param string|null $value Value to set for the identifierValue property.
    */
    public function setIdentifierValue(?string $value): void {
        $this->getBackingStore()->set('identifierValue', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the role property value. The role property
     * @param EntityDefinitionInputRole|null $value Value to set for the role property.
    */
    public function setRole(?EntityDefinitionInputRole $value): void {
        $this->getBackingStore()->set('role', $value);
    }

}
