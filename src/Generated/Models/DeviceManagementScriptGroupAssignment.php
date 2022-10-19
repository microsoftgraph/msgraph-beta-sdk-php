<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementScriptGroupAssignment extends Entity implements Parsable 
{
    /**
     * @var string|null $targetGroupId The Id of the Azure Active Directory group we are targeting the script to.
    */
    private ?string $targetGroupId = null;
    
    /**
     * Instantiates a new deviceManagementScriptGroupAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementScriptGroupAssignment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementScriptGroupAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementScriptGroupAssignment {
        return new DeviceManagementScriptGroupAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'targetGroupId' => fn(ParseNode $n) => $o->setTargetGroupId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the targetGroupId property value. The Id of the Azure Active Directory group we are targeting the script to.
     * @return string|null
    */
    public function getTargetGroupId(): ?string {
        return $this->targetGroupId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('targetGroupId', $this->targetGroupId);
    }

    /**
     * Sets the targetGroupId property value. The Id of the Azure Active Directory group we are targeting the script to.
     *  @param string|null $value Value to set for the targetGroupId property.
    */
    public function setTargetGroupId(?string $value ): void {
        $this->targetGroupId = $value;
    }

}
