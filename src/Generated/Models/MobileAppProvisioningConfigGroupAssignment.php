<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains the properties used to assign an App provisioning configuration to a group.
*/
class MobileAppProvisioningConfigGroupAssignment extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppProvisioningConfigGroupAssignment {
        return new MobileAppProvisioningConfigGroupAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'targetGroupId' => fn(ParseNode $n) => $o->setTargetGroupId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the targetGroupId property value. The ID of the AAD group in which the app provisioning configuration is being targeted.
     * @return string|null
    */
    public function getTargetGroupId(): ?string {
        $val = $this->getBackingStore()->get('targetGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetGroupId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('targetGroupId', $this->getTargetGroupId());
    }

    /**
     * Sets the targetGroupId property value. The ID of the AAD group in which the app provisioning configuration is being targeted.
     * @param string|null $value Value to set for the targetGroupId property.
    */
    public function setTargetGroupId(?string $value): void {
        $this->getBackingStore()->set('targetGroupId', $value);
    }

}
