<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemPhone extends ItemFacet implements Parsable 
{
    /**
     * @var string|null $displayName Friendly name the user has assigned this phone number.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $number Phone number provided by the user.
    */
    private ?string $number = null;
    
    /**
     * @var PhoneType|null $type The type of phone number within the object. Possible values are: home, business, mobile, other, assistant, homeFax, businessFax, otherFax, pager, radio.
    */
    private ?PhoneType $type = null;
    
    /**
     * Instantiates a new ItemPhone and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemPhone
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemPhone {
        return new ItemPhone();
    }

    /**
     * Gets the displayName property value. Friendly name the user has assigned this phone number.
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'number' => function (ParseNode $n) use ($o) { $o->setNumber($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(PhoneType::class)); },
        ]);
    }

    /**
     * Gets the number property value. Phone number provided by the user.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Gets the type property value. The type of phone number within the object. Possible values are: home, business, mobile, other, assistant, homeFax, businessFax, otherFax, pager, radio.
     * @return PhoneType|null
    */
    public function getType(): ?PhoneType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('number', $this->number);
        $writer->writeEnumValue('type', $this->type);
    }

    /**
     * Sets the displayName property value. Friendly name the user has assigned this phone number.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the number property value. Phone number provided by the user.
     *  @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value ): void {
        $this->number = $value;
    }

    /**
     * Sets the type property value. The type of phone number within the object. Possible values are: home, business, mobile, other, assistant, homeFax, businessFax, otherFax, pager, radio.
     *  @param PhoneType|null $value Value to set for the type property.
    */
    public function setType(?PhoneType $value ): void {
        $this->type = $value;
    }

}
