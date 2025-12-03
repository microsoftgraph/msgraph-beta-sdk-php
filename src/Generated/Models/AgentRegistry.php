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

class AgentRegistry implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AgentRegistry and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentRegistry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentRegistry {
        return new AgentRegistry();
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
     * Gets the agentCardManifests property value. The agentCardManifests property
     * @return array<AgentCardManifest>|null
    */
    public function getAgentCardManifests(): ?array {
        $val = $this->getBackingStore()->get('agentCardManifests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgentCardManifest::class);
            /** @var array<AgentCardManifest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentCardManifests'");
    }

    /**
     * Gets the agentCollections property value. The agentCollections property
     * @return array<AgentCollection>|null
    */
    public function getAgentCollections(): ?array {
        $val = $this->getBackingStore()->get('agentCollections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgentCollection::class);
            /** @var array<AgentCollection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentCollections'");
    }

    /**
     * Gets the agentInstances property value. The agentInstances property
     * @return array<AgentInstance>|null
    */
    public function getAgentInstances(): ?array {
        $val = $this->getBackingStore()->get('agentInstances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AgentInstance::class);
            /** @var array<AgentInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'agentInstances'");
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
            'agentCardManifests' => fn(ParseNode $n) => $o->setAgentCardManifests($n->getCollectionOfObjectValues([AgentCardManifest::class, 'createFromDiscriminatorValue'])),
            'agentCollections' => fn(ParseNode $n) => $o->setAgentCollections($n->getCollectionOfObjectValues([AgentCollection::class, 'createFromDiscriminatorValue'])),
            'agentInstances' => fn(ParseNode $n) => $o->setAgentInstances($n->getCollectionOfObjectValues([AgentInstance::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('agentCardManifests', $this->getAgentCardManifests());
        $writer->writeCollectionOfObjectValues('agentCollections', $this->getAgentCollections());
        $writer->writeCollectionOfObjectValues('agentInstances', $this->getAgentInstances());
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
     * Sets the agentCardManifests property value. The agentCardManifests property
     * @param array<AgentCardManifest>|null $value Value to set for the agentCardManifests property.
    */
    public function setAgentCardManifests(?array $value): void {
        $this->getBackingStore()->set('agentCardManifests', $value);
    }

    /**
     * Sets the agentCollections property value. The agentCollections property
     * @param array<AgentCollection>|null $value Value to set for the agentCollections property.
    */
    public function setAgentCollections(?array $value): void {
        $this->getBackingStore()->set('agentCollections', $value);
    }

    /**
     * Sets the agentInstances property value. The agentInstances property
     * @param array<AgentInstance>|null $value Value to set for the agentInstances property.
    */
    public function setAgentInstances(?array $value): void {
        $this->getBackingStore()->set('agentInstances', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
