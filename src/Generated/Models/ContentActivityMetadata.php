<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ContentActivityMetadata extends ProcessContentMetadataBase implements Parsable 
{
    /**
     * Instantiates a new ContentActivityMetadata and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.contentActivityMetadata');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContentActivityMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContentActivityMetadata {
        return new ContentActivityMetadata();
    }

    /**
     * Gets the enforcementResultStatus property value. The enforcementResultStatus property
     * @return EnforcementResultStatus|null
    */
    public function getEnforcementResultStatus(): ?EnforcementResultStatus {
        $val = $this->getBackingStore()->get('enforcementResultStatus');
        if (is_null($val) || $val instanceof EnforcementResultStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforcementResultStatus'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enforcementResultStatus' => fn(ParseNode $n) => $o->setEnforcementResultStatus($n->getEnumValue(EnforcementResultStatus::class)),
            'recordType' => fn(ParseNode $n) => $o->setRecordType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the recordType property value. The recordType property
     * @return string|null
    */
    public function getRecordType(): ?string {
        $val = $this->getBackingStore()->get('recordType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('enforcementResultStatus', $this->getEnforcementResultStatus());
        $writer->writeStringValue('recordType', $this->getRecordType());
    }

    /**
     * Sets the enforcementResultStatus property value. The enforcementResultStatus property
     * @param EnforcementResultStatus|null $value Value to set for the enforcementResultStatus property.
    */
    public function setEnforcementResultStatus(?EnforcementResultStatus $value): void {
        $this->getBackingStore()->set('enforcementResultStatus', $value);
    }

    /**
     * Sets the recordType property value. The recordType property
     * @param string|null $value Value to set for the recordType property.
    */
    public function setRecordType(?string $value): void {
        $this->getBackingStore()->set('recordType', $value);
    }

}
