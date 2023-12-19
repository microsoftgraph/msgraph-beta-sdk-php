<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VirtualEventRegistrationPredefinedQuestion extends VirtualEventRegistrationQuestionBase implements Parsable 
{
    /**
     * Instantiates a new virtualEventRegistrationPredefinedQuestion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.virtualEventRegistrationPredefinedQuestion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventRegistrationPredefinedQuestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventRegistrationPredefinedQuestion {
        return new VirtualEventRegistrationPredefinedQuestion();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'label' => fn(ParseNode $n) => $o->setLabel($n->getEnumValue(VirtualEventRegistrationPredefinedQuestion_label::class)),
        ]);
    }

    /**
     * Gets the label property value. The label property
     * @return VirtualEventRegistrationPredefinedQuestion_label|null
    */
    public function getLabel(): ?VirtualEventRegistrationPredefinedQuestion_label {
        $val = $this->getBackingStore()->get('label');
        if (is_null($val) || $val instanceof VirtualEventRegistrationPredefinedQuestion_label) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'label'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('label', $this->getLabel());
    }

    /**
     * Sets the label property value. The label property
     * @param VirtualEventRegistrationPredefinedQuestion_label|null $value Value to set for the label property.
    */
    public function setLabel(?VirtualEventRegistrationPredefinedQuestion_label $value): void {
        $this->getBackingStore()->set('label', $value);
    }

}
