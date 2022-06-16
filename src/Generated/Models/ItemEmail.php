<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemEmail extends ItemFacet 
{
    /** @var string|null $address The email address itself. */
    private ?string $address = null;
    
    /** @var string|null $displayName The name or label a user has associated with a particular email address. */
    private ?string $displayName = null;
    
    /** @var EmailType|null $type The type of email address. Possible values are: unknown, work, personal, main, other. */
    private ?EmailType $type = null;
    
    /**
     * Instantiates a new itemEmail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemEmail
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ItemEmail {
        return new ItemEmail();
    }

    /**
     * Gets the address property value. The email address itself.
     * @return string|null
    */
    public function getAddress(): ?string {
        return $this->address;
    }

    /**
     * Gets the displayName property value. The name or label a user has associated with a particular email address.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'address' => function (self $o, ParseNode $n) { $o->setAddress($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getEnumValue(EmailType::class)); },
        ]);
    }

    /**
     * Gets the type property value. The type of email address. Possible values are: unknown, work, personal, main, other.
     * @return EmailType|null
    */
    public function getType(): ?EmailType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('address', $this->address);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('type', $this->type);
    }

    /**
     * Sets the address property value. The email address itself.
     *  @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the displayName property value. The name or label a user has associated with a particular email address.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the type property value. The type of email address. Possible values are: unknown, work, personal, main, other.
     *  @param EmailType|null $value Value to set for the type property.
    */
    public function setType(?EmailType $value ): void {
        $this->type = $value;
    }

}
