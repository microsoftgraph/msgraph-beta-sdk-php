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

class PlannerTaskChatReaction implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PlannerTaskChatReaction and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTaskChatReaction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTaskChatReaction {
        return new PlannerTaskChatReaction();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'reactionEvents' => fn(ParseNode $n) => $o->setReactionEvents($n->getCollectionOfObjectValues([PlannerTaskChatReactionEvent::class, 'createFromDiscriminatorValue'])),
            'reactionType' => fn(ParseNode $n) => $o->setReactionType($n->getStringValue()),
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
     * Gets the reactionEvents property value. The reactionEvents property
     * @return array<PlannerTaskChatReactionEvent>|null
    */
    public function getReactionEvents(): ?array {
        $val = $this->getBackingStore()->get('reactionEvents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlannerTaskChatReactionEvent::class);
            /** @var array<PlannerTaskChatReactionEvent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reactionEvents'");
    }

    /**
     * Gets the reactionType property value. The type of reaction, such as like, heart, or emoji characters.
     * @return string|null
    */
    public function getReactionType(): ?string {
        $val = $this->getBackingStore()->get('reactionType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reactionType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('reactionEvents', $this->getReactionEvents());
        $writer->writeStringValue('reactionType', $this->getReactionType());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the reactionEvents property value. The reactionEvents property
     * @param array<PlannerTaskChatReactionEvent>|null $value Value to set for the reactionEvents property.
    */
    public function setReactionEvents(?array $value): void {
        $this->getBackingStore()->set('reactionEvents', $value);
    }

    /**
     * Sets the reactionType property value. The type of reaction, such as like, heart, or emoji characters.
     * @param string|null $value Value to set for the reactionType property.
    */
    public function setReactionType(?string $value): void {
        $this->getBackingStore()->set('reactionType', $value);
    }

}
