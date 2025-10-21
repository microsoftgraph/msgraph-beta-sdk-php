<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * ChangeAssignmentsActionResult represents the result of executing the changeAssignments action on tracking the live reporting data for applications or configuration regarding their removal or restoration process
*/
class ChangeAssignmentsActionResult extends DeviceActionResult implements Parsable 
{
    /**
     * Instantiates a new ChangeAssignmentsActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChangeAssignmentsActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChangeAssignmentsActionResult {
        return new ChangeAssignmentsActionResult();
    }

    /**
     * Gets the deviceAssignmentItems property value. Indicates the list of applications or configuration to report live results during their changeAssignments action execution process. The result for each individual application or configuration can contain whether it's being removed or restored, what's the current status with potential message or error code, and when any changes happen on it. Read-Only. This collection can contain a maximum of 30 elements.
     * @return array<DeviceAssignmentItem>|null
    */
    public function getDeviceAssignmentItems(): ?array {
        $val = $this->getBackingStore()->get('deviceAssignmentItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceAssignmentItem::class);
            /** @var array<DeviceAssignmentItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceAssignmentItems'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceAssignmentItems' => fn(ParseNode $n) => $o->setDeviceAssignmentItems($n->getCollectionOfObjectValues([DeviceAssignmentItem::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('deviceAssignmentItems', $this->getDeviceAssignmentItems());
    }

    /**
     * Sets the deviceAssignmentItems property value. Indicates the list of applications or configuration to report live results during their changeAssignments action execution process. The result for each individual application or configuration can contain whether it's being removed or restored, what's the current status with potential message or error code, and when any changes happen on it. Read-Only. This collection can contain a maximum of 30 elements.
     * @param array<DeviceAssignmentItem>|null $value Value to set for the deviceAssignmentItems property.
    */
    public function setDeviceAssignmentItems(?array $value): void {
        $this->getBackingStore()->set('deviceAssignmentItems', $value);
    }

}
