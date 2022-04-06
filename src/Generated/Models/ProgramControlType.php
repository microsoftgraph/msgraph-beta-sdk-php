<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProgramControlType extends Entity 
{
    /** @var string|null $controlTypeGroupId The controlTypeGroupId property */
    private ?string $controlTypeGroupId = null;
    
    /** @var string|null $displayName The name of the program control type */
    private ?string $displayName = null;
    
    /**
     * Instantiates a new programControlType and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProgramControlType
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ProgramControlType {
        return new ProgramControlType();
    }

    /**
     * Gets the controlTypeGroupId property value. The controlTypeGroupId property
     * @return string|null
    */
    public function getControlTypeGroupId(): ?string {
        return $this->controlTypeGroupId;
    }

    /**
     * Gets the displayName property value. The name of the program control type
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
            'controlTypeGroupId' => function (self $o, ParseNode $n) { $o->setControlTypeGroupId($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('controlTypeGroupId', $this->controlTypeGroupId);
        $writer->writeStringValue('displayName', $this->displayName);
    }

    /**
     * Sets the controlTypeGroupId property value. The controlTypeGroupId property
     *  @param string|null $value Value to set for the controlTypeGroupId property.
    */
    public function setControlTypeGroupId(?string $value ): void {
        $this->controlTypeGroupId = $value;
    }

    /**
     * Sets the displayName property value. The name of the program control type
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

}
