<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IndustryDataActivity extends Entity implements Parsable 
{
    /**
     * Instantiates a new industryDataActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IndustryDataActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IndustryDataActivity {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.industryData.inboundFileFlow': return new InboundFileFlow();
                case '#microsoft.graph.industryData.inboundFlow': return new InboundFlow();
            }
        }
        return new IndustryDataActivity();
    }

    /**
     * Gets the displayName property value. The name of the activity. Maximum supported length is 100 characters.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'readinessStatus' => fn(ParseNode $n) => $o->setReadinessStatus($n->getEnumValue(ReadinessStatus::class)),
        ]);
    }

    /**
     * Gets the readinessStatus property value. The readinessStatus property
     * @return ReadinessStatus|null
    */
    public function getReadinessStatus(): ?ReadinessStatus {
        $val = $this->getBackingStore()->get('readinessStatus');
        if (is_null($val) || $val instanceof ReadinessStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'readinessStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('readinessStatus', $this->getReadinessStatus());
    }

    /**
     * Sets the displayName property value. The name of the activity. Maximum supported length is 100 characters.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the readinessStatus property value. The readinessStatus property
     * @param ReadinessStatus|null $value Value to set for the readinessStatus property.
    */
    public function setReadinessStatus(?ReadinessStatus $value): void {
        $this->getBackingStore()->set('readinessStatus', $value);
    }

}
