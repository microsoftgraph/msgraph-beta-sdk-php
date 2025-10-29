<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailFolderOperation extends Entity implements Parsable 
{
    /**
     * Instantiates a new MailFolderOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailFolderOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailFolderOperation {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.updateAllMessagesReadStateOperation': return new UpdateAllMessagesReadStateOperation();
            }
        }
        return new MailFolderOperation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resourceLocation' => fn(ParseNode $n) => $o->setResourceLocation($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(MailFolderOperationStatus::class)),
        ]);
    }

    /**
     * Gets the resourceLocation property value. The location of the long-running operation.
     * @return string|null
    */
    public function getResourceLocation(): ?string {
        $val = $this->getBackingStore()->get('resourceLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceLocation'");
    }

    /**
     * Gets the status property value. The status of the long-running operation. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue.
     * @return MailFolderOperationStatus|null
    */
    public function getStatus(): ?MailFolderOperationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof MailFolderOperationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('resourceLocation', $this->getResourceLocation());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the resourceLocation property value. The location of the long-running operation.
     * @param string|null $value Value to set for the resourceLocation property.
    */
    public function setResourceLocation(?string $value): void {
        $this->getBackingStore()->set('resourceLocation', $value);
    }

    /**
     * Sets the status property value. The status of the long-running operation. The possible values are: notStarted, running, succeeded, failed, unknownFutureValue.
     * @param MailFolderOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?MailFolderOperationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
