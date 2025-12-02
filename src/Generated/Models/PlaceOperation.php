<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PlaceOperation extends Entity implements Parsable 
{
    /**
     * Instantiates a new PlaceOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlaceOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlaceOperation {
        return new PlaceOperation();
    }

    /**
     * Gets the details property value. The details property
     * @return array<PlaceExecutionResult>|null
    */
    public function getDetails(): ?array {
        $val = $this->getBackingStore()->get('details');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlaceExecutionResult::class);
            /** @var array<PlaceExecutionResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'details'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'details' => fn(ParseNode $n) => $o->setDetails($n->getCollectionOfObjectValues([PlaceExecutionResult::class, 'createFromDiscriminatorValue'])),
            'progress' => fn(ParseNode $n) => $o->setProgress($n->getObjectValue([PlaceOperationProgress::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PlaceOperationStatus::class)),
        ]);
    }

    /**
     * Gets the progress property value. The progress property
     * @return PlaceOperationProgress|null
    */
    public function getProgress(): ?PlaceOperationProgress {
        $val = $this->getBackingStore()->get('progress');
        if (is_null($val) || $val instanceof PlaceOperationProgress) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'progress'");
    }

    /**
     * Gets the status property value. The status property
     * @return PlaceOperationStatus|null
    */
    public function getStatus(): ?PlaceOperationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof PlaceOperationStatus) {
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
        $writer->writeCollectionOfObjectValues('details', $this->getDetails());
        $writer->writeObjectValue('progress', $this->getProgress());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the details property value. The details property
     * @param array<PlaceExecutionResult>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the progress property value. The progress property
     * @param PlaceOperationProgress|null $value Value to set for the progress property.
    */
    public function setProgress(?PlaceOperationProgress $value): void {
        $this->getBackingStore()->set('progress', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param PlaceOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?PlaceOperationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
