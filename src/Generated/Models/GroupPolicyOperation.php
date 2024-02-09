<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The entity represents an group policy operation.
*/
class GroupPolicyOperation extends Entity implements Parsable 
{
    /**
     * Instantiates a new GroupPolicyOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyOperation {
        return new GroupPolicyOperation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'operationStatus' => fn(ParseNode $n) => $o->setOperationStatus($n->getEnumValue(GroupPolicyOperationStatus::class)),
            'operationType' => fn(ParseNode $n) => $o->setOperationType($n->getEnumValue(GroupPolicyOperationType::class)),
            'statusDetails' => fn(ParseNode $n) => $o->setStatusDetails($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the operationStatus property value. Type of Group Policy operation status.
     * @return GroupPolicyOperationStatus|null
    */
    public function getOperationStatus(): ?GroupPolicyOperationStatus {
        $val = $this->getBackingStore()->get('operationStatus');
        if (is_null($val) || $val instanceof GroupPolicyOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationStatus'");
    }

    /**
     * Gets the operationType property value. Type of Group Policy operation.
     * @return GroupPolicyOperationType|null
    */
    public function getOperationType(): ?GroupPolicyOperationType {
        $val = $this->getBackingStore()->get('operationType');
        if (is_null($val) || $val instanceof GroupPolicyOperationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationType'");
    }

    /**
     * Gets the statusDetails property value. The group policy operation status detail.
     * @return string|null
    */
    public function getStatusDetails(): ?string {
        $val = $this->getBackingStore()->get('statusDetails');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusDetails'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('operationStatus', $this->getOperationStatus());
        $writer->writeEnumValue('operationType', $this->getOperationType());
        $writer->writeStringValue('statusDetails', $this->getStatusDetails());
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the operationStatus property value. Type of Group Policy operation status.
     * @param GroupPolicyOperationStatus|null $value Value to set for the operationStatus property.
    */
    public function setOperationStatus(?GroupPolicyOperationStatus $value): void {
        $this->getBackingStore()->set('operationStatus', $value);
    }

    /**
     * Sets the operationType property value. Type of Group Policy operation.
     * @param GroupPolicyOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?GroupPolicyOperationType $value): void {
        $this->getBackingStore()->set('operationType', $value);
    }

    /**
     * Sets the statusDetails property value. The group policy operation status detail.
     * @param string|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?string $value): void {
        $this->getBackingStore()->set('statusDetails', $value);
    }

}
