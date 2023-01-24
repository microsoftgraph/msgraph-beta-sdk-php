<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedAccessSchedule extends Entity implements Parsable 
{
    /**
     * Instantiates a new privilegedAccessSchedule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedAccessSchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedAccessSchedule {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.privilegedAccessGroupAssignmentSchedule': return new PrivilegedAccessGroupAssignmentSchedule();
                case '#microsoft.graph.privilegedAccessGroupEligibilitySchedule': return new PrivilegedAccessGroupEligibilitySchedule();
            }
        }
        return new PrivilegedAccessSchedule();
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the createdUsing property value. The createdUsing property
     * @return string|null
    */
    public function getCreatedUsing(): ?string {
        return $this->getBackingStore()->get('createdUsing');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'createdUsing' => fn(ParseNode $n) => $o->setCreatedUsing($n->getStringValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            'scheduleInfo' => fn(ParseNode $n) => $o->setScheduleInfo($n->getObjectValue([RequestSchedule::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ]);
    }

    /**
     * Gets the modifiedDateTime property value. The modifiedDateTime property
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('modifiedDateTime');
    }

    /**
     * Gets the scheduleInfo property value. The scheduleInfo property
     * @return RequestSchedule|null
    */
    public function getScheduleInfo(): ?RequestSchedule {
        return $this->getBackingStore()->get('scheduleInfo');
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('createdUsing', $this->getCreatedUsing());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeObjectValue('scheduleInfo', $this->getScheduleInfo());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the createdUsing property value. The createdUsing property
     * @param string|null $value Value to set for the createdUsing property.
    */
    public function setCreatedUsing(?string $value): void {
        $this->getBackingStore()->set('createdUsing', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The modifiedDateTime property
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the scheduleInfo property value. The scheduleInfo property
     * @param RequestSchedule|null $value Value to set for the scheduleInfo property.
    */
    public function setScheduleInfo(?RequestSchedule $value): void {
        $this->getBackingStore()->set('scheduleInfo', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
