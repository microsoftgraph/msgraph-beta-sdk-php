<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OfficeClientConfigurationAssignment extends Entity 
{
    /** @var OfficeConfigurationAssignmentTarget|null $target The target assignment defined by the admin. */
    private ?OfficeConfigurationAssignmentTarget $target = null;
    
    /**
     * Instantiates a new officeClientConfigurationAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfficeClientConfigurationAssignment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OfficeClientConfigurationAssignment {
        return new OfficeClientConfigurationAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'target' => function (self $o, ParseNode $n) { $o->setTarget($n->getObjectValue(OfficeConfigurationAssignmentTarget::class)); },
        ]);
    }

    /**
     * Gets the target property value. The target assignment defined by the admin.
     * @return OfficeConfigurationAssignmentTarget|null
    */
    public function getTarget(): ?OfficeConfigurationAssignmentTarget {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the target property value. The target assignment defined by the admin.
     *  @param OfficeConfigurationAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?OfficeConfigurationAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
