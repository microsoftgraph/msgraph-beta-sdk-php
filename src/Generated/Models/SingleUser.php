<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SingleUser extends UserSet implements Parsable 
{
    /**
     * @var string|null $description The name of the user in Azure AD. Read only.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $id The ID of the user in Azure AD.
    */
    private ?string $id = null;
    
    /**
     * Instantiates a new SingleUser and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SingleUser
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SingleUser {
        return new SingleUser();
    }

    /**
     * Gets the description property value. The name of the user in Azure AD. Read only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the id property value. The ID of the user in Azure AD.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('id', $this->id);
    }

    /**
     * Sets the description property value. The name of the user in Azure AD. Read only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the id property value. The ID of the user in Azure AD.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

}
