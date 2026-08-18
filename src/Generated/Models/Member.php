<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Member implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Member and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Member
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Member {
        return new Member();
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
     * Gets the contactId property value. The contactId property
     * @return string|null
    */
    public function getContactId(): ?string {
        $val = $this->getBackingStore()->get('contactId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contactId'");
    }

    /**
     * Gets the displayName property value. The display name of the member. Optional.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contactId' => fn(ParseNode $n) => $o->setContactId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'key' => fn(ParseNode $n) => $o->setKey($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recipientType' => fn(ParseNode $n) => $o->setRecipientType($n->getEnumValue(RecipientType::class)),
            'routingType' => fn(ParseNode $n) => $o->setRoutingType($n->getStringValue()),
        ];
    }

    /**
     * Gets the key property value. The email address or routing key of the member. Optional.
     * @return string|null
    */
    public function getKey(): ?string {
        $val = $this->getBackingStore()->get('key');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'key'");
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
     * Gets the recipientType property value. The recipientType property
     * @return RecipientType|null
    */
    public function getRecipientType(): ?RecipientType {
        $val = $this->getBackingStore()->get('recipientType');
        if (is_null($val) || $val instanceof RecipientType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientType'");
    }

    /**
     * Gets the routingType property value. The routingType property
     * @return string|null
    */
    public function getRoutingType(): ?string {
        $val = $this->getBackingStore()->get('routingType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'routingType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('contactId', $this->getContactId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('key', $this->getKey());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('recipientType', $this->getRecipientType());
        $writer->writeStringValue('routingType', $this->getRoutingType());
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
     * Sets the contactId property value. The contactId property
     * @param string|null $value Value to set for the contactId property.
    */
    public function setContactId(?string $value): void {
        $this->getBackingStore()->set('contactId', $value);
    }

    /**
     * Sets the displayName property value. The display name of the member. Optional.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the key property value. The email address or routing key of the member. Optional.
     * @param string|null $value Value to set for the key property.
    */
    public function setKey(?string $value): void {
        $this->getBackingStore()->set('key', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recipientType property value. The recipientType property
     * @param RecipientType|null $value Value to set for the recipientType property.
    */
    public function setRecipientType(?RecipientType $value): void {
        $this->getBackingStore()->set('recipientType', $value);
    }

    /**
     * Sets the routingType property value. The routingType property
     * @param string|null $value Value to set for the routingType property.
    */
    public function setRoutingType(?string $value): void {
        $this->getBackingStore()->set('routingType', $value);
    }

}
