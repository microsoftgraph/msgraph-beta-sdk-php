<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AgentMetadata implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AgentMetadata and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentMetadata {
        return new AgentMetadata();
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
     * Gets the agentAdministrativeUnitId property value. The agentAdministrativeUnitId property
     * @return string|null
    */
    public function getAgentAdministrativeUnitId(): ?string {
        $val = $this->getBackingStore()->get('agentAdministrativeUnitId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentAdministrativeUnitId'");
    }

    /**
     * Gets the agentBlueprintId property value. The agentBlueprintId property
     * @return string|null
    */
    public function getAgentBlueprintId(): ?string {
        $val = $this->getBackingStore()->get('agentBlueprintId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentBlueprintId'");
    }

    /**
     * Gets the agentCategory property value. The agentCategory property
     * @return string|null
    */
    public function getAgentCategory(): ?string {
        $val = $this->getBackingStore()->get('agentCategory');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentCategory'");
    }

    /**
     * Gets the agentOwner property value. The agentOwner property
     * @return string|null
    */
    public function getAgentOwner(): ?string {
        $val = $this->getBackingStore()->get('agentOwner');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentOwner'");
    }

    /**
     * Gets the agentPublisher property value. The agentPublisher property
     * @return string|null
    */
    public function getAgentPublisher(): ?string {
        $val = $this->getBackingStore()->get('agentPublisher');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentPublisher'");
    }

    /**
     * Gets the altAgentIds property value. The altAgentIds property
     * @return array<string>|null
    */
    public function getAltAgentIds(): ?array {
        $val = $this->getBackingStore()->get('altAgentIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'altAgentIds'");
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
            'agentAdministrativeUnitId' => fn(ParseNode $n) => $o->setAgentAdministrativeUnitId($n->getStringValue()),
            'agentBlueprintId' => fn(ParseNode $n) => $o->setAgentBlueprintId($n->getStringValue()),
            'agentCategory' => fn(ParseNode $n) => $o->setAgentCategory($n->getStringValue()),
            'agentOwner' => fn(ParseNode $n) => $o->setAgentOwner($n->getStringValue()),
            'agentPublisher' => fn(ParseNode $n) => $o->setAgentPublisher($n->getStringValue()),
            'altAgentIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAltAgentIds($val);
            },
            'isEntraAgentId' => fn(ParseNode $n) => $o->setIsEntraAgentId($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isEntraAgentId property value. The isEntraAgentId property
     * @return bool|null
    */
    public function getIsEntraAgentId(): ?bool {
        $val = $this->getBackingStore()->get('isEntraAgentId');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEntraAgentId'");
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
        $writer->writeStringValue('agentAdministrativeUnitId', $this->getAgentAdministrativeUnitId());
        $writer->writeStringValue('agentBlueprintId', $this->getAgentBlueprintId());
        $writer->writeStringValue('agentCategory', $this->getAgentCategory());
        $writer->writeStringValue('agentOwner', $this->getAgentOwner());
        $writer->writeStringValue('agentPublisher', $this->getAgentPublisher());
        $writer->writeCollectionOfPrimitiveValues('altAgentIds', $this->getAltAgentIds());
        $writer->writeBooleanValue('isEntraAgentId', $this->getIsEntraAgentId());
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
     * Sets the agentAdministrativeUnitId property value. The agentAdministrativeUnitId property
     * @param string|null $value Value to set for the agentAdministrativeUnitId property.
    */
    public function setAgentAdministrativeUnitId(?string $value): void {
        $this->getBackingStore()->set('agentAdministrativeUnitId', $value);
    }

    /**
     * Sets the agentBlueprintId property value. The agentBlueprintId property
     * @param string|null $value Value to set for the agentBlueprintId property.
    */
    public function setAgentBlueprintId(?string $value): void {
        $this->getBackingStore()->set('agentBlueprintId', $value);
    }

    /**
     * Sets the agentCategory property value. The agentCategory property
     * @param string|null $value Value to set for the agentCategory property.
    */
    public function setAgentCategory(?string $value): void {
        $this->getBackingStore()->set('agentCategory', $value);
    }

    /**
     * Sets the agentOwner property value. The agentOwner property
     * @param string|null $value Value to set for the agentOwner property.
    */
    public function setAgentOwner(?string $value): void {
        $this->getBackingStore()->set('agentOwner', $value);
    }

    /**
     * Sets the agentPublisher property value. The agentPublisher property
     * @param string|null $value Value to set for the agentPublisher property.
    */
    public function setAgentPublisher(?string $value): void {
        $this->getBackingStore()->set('agentPublisher', $value);
    }

    /**
     * Sets the altAgentIds property value. The altAgentIds property
     * @param array<string>|null $value Value to set for the altAgentIds property.
    */
    public function setAltAgentIds(?array $value): void {
        $this->getBackingStore()->set('altAgentIds', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isEntraAgentId property value. The isEntraAgentId property
     * @param bool|null $value Value to set for the isEntraAgentId property.
    */
    public function setIsEntraAgentId(?bool $value): void {
        $this->getBackingStore()->set('isEntraAgentId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
