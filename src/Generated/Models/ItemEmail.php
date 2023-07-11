<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemEmail extends ItemFacet implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new itemEmail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.itemEmail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemEmail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemEmail {
        return new ItemEmail();
    }

    /**
     * Gets the address property value. The email address itself.
     * @return string|null
    */
    public function getAddress(): ?string {
        $val = $this->getBackingStore()->get('address');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'address'");
    }

    /**
     * Gets the displayName property value. The name or label a user has associated with a particular email address.
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
            'address' => fn(ParseNode $n) => $o->setAddress($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(EmailType::class)),
        ]);
    }

    /**
     * Gets the type property value. The type property
     * @return EmailType|null
    */
    public function getType(): ?EmailType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof EmailType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('address', $this->getAddress());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('type', $this->getType());
    }

    /**
     * Sets the address property value. The email address itself.
     * @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the displayName property value. The name or label a user has associated with a particular email address.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param EmailType|null $value Value to set for the type property.
    */
    public function setType(?EmailType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
