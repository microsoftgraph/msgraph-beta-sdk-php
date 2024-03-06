<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A class containing the properties used for Windows10EnrollmentCompletionPageConfiguration PolicySetItem.
*/
class Windows10EnrollmentCompletionPageConfigurationPolicySetItem extends PolicySetItem implements Parsable 
{
    /**
     * Instantiates a new Windows10EnrollmentCompletionPageConfigurationPolicySetItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10EnrollmentCompletionPageConfigurationPolicySetItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10EnrollmentCompletionPageConfigurationPolicySetItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10EnrollmentCompletionPageConfigurationPolicySetItem {
        return new Windows10EnrollmentCompletionPageConfigurationPolicySetItem();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the priority property value. Priority of the Windows10EnrollmentCompletionPageConfigurationPolicySetItem.
     * @return int|null
    */
    public function getPriority(): ?int {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('priority', $this->getPriority());
    }

    /**
     * Sets the priority property value. Priority of the Windows10EnrollmentCompletionPageConfigurationPolicySetItem.
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

}
