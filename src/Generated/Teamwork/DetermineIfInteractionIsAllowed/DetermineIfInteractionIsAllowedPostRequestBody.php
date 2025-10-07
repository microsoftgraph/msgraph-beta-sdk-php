<?php

namespace Microsoft\\Graph\\Beta\\Generated\Teamwork\DetermineIfInteractionIsAllowed;

use Microsoft\\Graph\\Beta\\Generated\Models\Identity;
use Microsoft\\Graph\\Beta\\Generated\Models\TeamworkInteractionType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DetermineIfInteractionIsAllowedPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DetermineIfInteractionIsAllowedPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DetermineIfInteractionIsAllowedPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DetermineIfInteractionIsAllowedPostRequestBody {
        return new DetermineIfInteractionIsAllowedPostRequestBody();
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
            'interactionType' => fn(ParseNode $n) => $o->setInteractionType($n->getEnumValue(TeamworkInteractionType::class)),
            'users' => fn(ParseNode $n) => $o->setUsers($n->getCollectionOfObjectValues([Identity::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the interactionType property value. The interactionType property
     * @return TeamworkInteractionType|null
    */
    public function getInteractionType(): ?TeamworkInteractionType {
        $val = $this->getBackingStore()->get('interactionType');
        if (is_null($val) || $val instanceof TeamworkInteractionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'interactionType'");
    }

    /**
     * Gets the users property value. The users property
     * @return array<Identity>|null
    */
    public function getUsers(): ?array {
        $val = $this->getBackingStore()->get('users');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Identity::class);
            /** @var array<Identity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'users'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('interactionType', $this->getInteractionType());
        $writer->writeCollectionOfObjectValues('users', $this->getUsers());
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
     * Sets the interactionType property value. The interactionType property
     * @param TeamworkInteractionType|null $value Value to set for the interactionType property.
    */
    public function setInteractionType(?TeamworkInteractionType $value): void {
        $this->getBackingStore()->set('interactionType', $value);
    }

    /**
     * Sets the users property value. The users property
     * @param array<Identity>|null $value Value to set for the users property.
    */
    public function setUsers(?array $value): void {
        $this->getBackingStore()->set('users', $value);
    }

}
