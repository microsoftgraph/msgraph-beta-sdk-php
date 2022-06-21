<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BusinessFlowSettings extends AccessReviewSettings 
{
    /** @var int|null $durationInDays The durationInDays property */
    private ?int $durationInDays = null;
    
    /**
     * Instantiates a new businessFlowSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessFlowSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): BusinessFlowSettings {
        return new BusinessFlowSettings();
    }

    /**
     * Gets the durationInDays property value. The durationInDays property
     * @return int|null
    */
    public function getDurationInDays(): ?int {
        return $this->durationInDays;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'durationInDays' => function (self $o, ParseNode $n) { $o->setDurationInDays($n->getIntegerValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('durationInDays', $this->durationInDays);
    }

    /**
     * Sets the durationInDays property value. The durationInDays property
     *  @param int|null $value Value to set for the durationInDays property.
    */
    public function setDurationInDays(?int $value ): void {
        $this->durationInDays = $value;
    }

}
