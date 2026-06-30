<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DistributionListMember extends Entity implements Parsable 
{
    /**
     * Instantiates a new DistributionListMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DistributionListMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DistributionListMember {
        return new DistributionListMember();
    }

    /**
     * Gets the contact property value. The contact property
     * @return Contact|null
    */
    public function getContact(): ?Contact {
        $val = $this->getBackingStore()->get('contact');
        if (is_null($val) || $val instanceof Contact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contact'");
    }

    /**
     * Gets the contactId property value. The ID of the referenced contact, if applicable. Read-only.
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
     * Gets the displayName property value. The display name of the member. Read-only.
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
        return array_merge(parent::getFieldDeserializers(), [
            'contact' => fn(ParseNode $n) => $o->setContact($n->getObjectValue([Contact::class, 'createFromDiscriminatorValue'])),
            'contactId' => fn(ParseNode $n) => $o->setContactId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'recipientType' => fn(ParseNode $n) => $o->setRecipientType($n->getEnumValue(RecipientType::class)),
        ]);
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contact', $this->getContact());
        $writer->writeStringValue('contactId', $this->getContactId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('recipientType', $this->getRecipientType());
    }

    /**
     * Sets the contact property value. The contact property
     * @param Contact|null $value Value to set for the contact property.
    */
    public function setContact(?Contact $value): void {
        $this->getBackingStore()->set('contact', $value);
    }

    /**
     * Sets the contactId property value. The ID of the referenced contact, if applicable. Read-only.
     * @param string|null $value Value to set for the contactId property.
    */
    public function setContactId(?string $value): void {
        $this->getBackingStore()->set('contactId', $value);
    }

    /**
     * Sets the displayName property value. The display name of the member. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the recipientType property value. The recipientType property
     * @param RecipientType|null $value Value to set for the recipientType property.
    */
    public function setRecipientType(?RecipientType $value): void {
        $this->getBackingStore()->set('recipientType', $value);
    }

}
