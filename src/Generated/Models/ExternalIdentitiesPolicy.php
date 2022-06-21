<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalIdentitiesPolicy extends PolicyBase implements Parsable 
{
    /**
     * @var bool|null $allowDeletedIdentitiesDataRemoval The allowDeletedIdentitiesDataRemoval property
    */
    private ?bool $allowDeletedIdentitiesDataRemoval = null;
    
    /**
     * @var bool|null $allowExternalIdentitiesToLeave The allowExternalIdentitiesToLeave property
    */
    private ?bool $allowExternalIdentitiesToLeave = null;
    
    /**
     * Instantiates a new ExternalIdentitiesPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalIdentitiesPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalIdentitiesPolicy {
        return new ExternalIdentitiesPolicy();
    }

    /**
     * Gets the allowDeletedIdentitiesDataRemoval property value. The allowDeletedIdentitiesDataRemoval property
     * @return bool|null
    */
    public function getAllowDeletedIdentitiesDataRemoval(): ?bool {
        return $this->allowDeletedIdentitiesDataRemoval;
    }

    /**
     * Gets the allowExternalIdentitiesToLeave property value. The allowExternalIdentitiesToLeave property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowDeletedIdentitiesDataRemoval' => function (ParseNode $n) use ($o) { $o->setAllowDeletedIdentitiesDataRemoval($n->getBooleanValue()); },
            'allowExternalIdentitiesToLeave' => function (ParseNode $n) use ($o) { $o->setAllowExternalIdentitiesToLeave($n->getBooleanValue()); },
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
     * Sets the allowDeletedIdentitiesDataRemoval property value. The allowDeletedIdentitiesDataRemoval property
     *  @param bool|null $value Value to set for the allowDeletedIdentitiesDataRemoval property.
    */
    public function setAllowDeletedIdentitiesDataRemoval(?bool $value ): void {
        $this->allowDeletedIdentitiesDataRemoval = $value;
    }

    /**
     * Sets the allowExternalIdentitiesToLeave property value. The allowExternalIdentitiesToLeave property
     *  @param bool|null $value Value to set for the allowExternalIdentitiesToLeave property.
    */
    public function setAllowExternalIdentitiesToLeave(?bool $value ): void {
        $this->allowExternalIdentitiesToLeave = $value;
    }

}
