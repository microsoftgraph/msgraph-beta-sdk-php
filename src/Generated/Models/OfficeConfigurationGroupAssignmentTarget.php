<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OfficeConfigurationGroupAssignmentTarget extends OfficeConfigurationAssignmentTarget implements Parsable 
{
    /**
     * @var string|null $groupId The Id of the AAD group we are targeting the device configuration to.
    */
    private ?string $groupId = null;
    
    /**
     * Instantiates a new OfficeConfigurationGroupAssignmentTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfficeConfigurationGroupAssignmentTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfficeConfigurationGroupAssignmentTarget {
        return new OfficeConfigurationGroupAssignmentTarget();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupId' => function (ParseNode $n) use ($o) { $o->setGroupId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the groupId property value. The Id of the AAD group we are targeting the device configuration to.
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->groupId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('groupId', $this->groupId);
    }

    /**
     * Sets the groupId property value. The Id of the AAD group we are targeting the device configuration to.
     *  @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value ): void {
        $this->groupId = $value;
    }

}
