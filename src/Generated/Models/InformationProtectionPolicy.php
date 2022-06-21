<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationProtectionPolicy extends Entity implements Parsable 
{
    /**
     * @var array<InformationProtectionLabel>|null $labels The labels property
    */
    private ?array $labels = null;
    
    /**
     * Instantiates a new informationProtectionPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InformationProtectionPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InformationProtectionPolicy {
        return new InformationProtectionPolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'labels' => function (ParseNode $n) use ($o) { $o->setLabels($n->getCollectionOfObjectValues(array(InformationProtectionLabel::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the labels property value. The labels property
     * @return array<InformationProtectionLabel>|null
    */
    public function getLabels(): ?array {
        return $this->labels;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('labels', $this->labels);
    }

    /**
     * Sets the labels property value. The labels property
     *  @param array<InformationProtectionLabel>|null $value Value to set for the labels property.
    */
    public function setLabels(?array $value ): void {
        $this->labels = $value;
    }

}
