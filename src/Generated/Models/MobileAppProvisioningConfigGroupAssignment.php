<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppProvisioningConfigGroupAssignment extends Entity 
{
    /** @var string|null $targetGroupId The ID of the AAD group in which the app provisioning configuration is being targeted. */
    private ?string $targetGroupId = null;
    
    /**
     * Instantiates a new mobileAppProvisioningConfigGroupAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppProvisioningConfigGroupAssignment
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppProvisioningConfigGroupAssignment {
        return new MobileAppProvisioningConfigGroupAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'targetGroupId' => function (self $o, ParseNode $n) { $o->setTargetGroupId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the targetGroupId property value. The ID of the AAD group in which the app provisioning configuration is being targeted.
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
     * Sets the targetGroupId property value. The ID of the AAD group in which the app provisioning configuration is being targeted.
     *  @param string|null $value Value to set for the targetGroupId property.
    */
    public function setTargetGroupId(?string $value ): void {
        $this->targetGroupId = $value;
    }

}
