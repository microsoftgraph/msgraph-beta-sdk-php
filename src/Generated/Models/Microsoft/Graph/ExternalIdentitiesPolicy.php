<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalIdentitiesPolicy extends PolicyBase 
{
    /** @var bool|null $allowDeletedIdentitiesDataRemoval  */
    private ?bool $allowDeletedIdentitiesDataRemoval = null;
    
    /** @var bool|null $allowExternalIdentitiesToLeave  */
    private ?bool $allowExternalIdentitiesToLeave = null;
    
    /**
     * Instantiates a new externalIdentitiesPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalIdentitiesPolicy
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ExternalIdentitiesPolicy {
        return new ExternalIdentitiesPolicy();
    }

    /**
     * Gets the allowDeletedIdentitiesDataRemoval property value. 
     * @return bool|null
    */
    public function getAllowDeletedIdentitiesDataRemoval(): ?bool {
        return $this->allowDeletedIdentitiesDataRemoval;
    }

    /**
     * Gets the allowExternalIdentitiesToLeave property value. 
     * @return bool|null
    */
    public function getAllowExternalIdentitiesToLeave(): ?bool {
        return $this->allowExternalIdentitiesToLeave;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'allowDeletedIdentitiesDataRemoval' => function (self $o, ParseNode $n) { $o->setAllowDeletedIdentitiesDataRemoval($n->getBooleanValue()); },
            'allowExternalIdentitiesToLeave' => function (self $o, ParseNode $n) { $o->setAllowExternalIdentitiesToLeave($n->getBooleanValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowDeletedIdentitiesDataRemoval', $this->allowDeletedIdentitiesDataRemoval);
        $writer->writeBooleanValue('allowExternalIdentitiesToLeave', $this->allowExternalIdentitiesToLeave);
    }

    /**
     * Sets the allowDeletedIdentitiesDataRemoval property value. 
     *  @param bool|null $value Value to set for the allowDeletedIdentitiesDataRemoval property.
    */
    public function setAllowDeletedIdentitiesDataRemoval(?bool $value ): void {
        $this->allowDeletedIdentitiesDataRemoval = $value;
    }

    /**
     * Sets the allowExternalIdentitiesToLeave property value. 
     *  @param bool|null $value Value to set for the allowExternalIdentitiesToLeave property.
    */
    public function setAllowExternalIdentitiesToLeave(?bool $value ): void {
        $this->allowExternalIdentitiesToLeave = $value;
    }

}
