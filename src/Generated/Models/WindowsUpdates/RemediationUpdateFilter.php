<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemediationUpdateFilter extends WindowsUpdateFilter implements Parsable 
{
    /**
     * Instantiates a new RemediationUpdateFilter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.remediationUpdateFilter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemediationUpdateFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemediationUpdateFilter {
        return new RemediationUpdateFilter();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'remediationType' => fn(ParseNode $n) => $o->setRemediationType($n->getEnumValue(RemediationType::class)),
        ]);
    }

    /**
     * Gets the remediationType property value. The remediationType property
     * @return RemediationType|null
    */
    public function getRemediationType(): ?RemediationType {
        $val = $this->getBackingStore()->get('remediationType');
        if (is_null($val) || $val instanceof RemediationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediationType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('remediationType', $this->getRemediationType());
    }

    /**
     * Sets the remediationType property value. The remediationType property
     * @param RemediationType|null $value Value to set for the remediationType property.
    */
    public function setRemediationType(?RemediationType $value): void {
        $this->getBackingStore()->set('remediationType', $value);
    }

}
