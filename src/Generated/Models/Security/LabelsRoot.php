<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LabelsRoot extends Entity implements Parsable 
{
    /**
     * @var array<RetentionLabel>|null $retentionLabels The retentionLabels property
    */
    private ?array $retentionLabels = null;
    
    /**
     * Instantiates a new labelsRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.labelsRoot');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LabelsRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LabelsRoot {
        return new LabelsRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'retentionLabels' => function (ParseNode $n) use ($o) { $o->setRetentionLabels($n->getCollectionOfObjectValues(array(RetentionLabel::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the retentionLabels property value. The retentionLabels property
     * @return array<RetentionLabel>|null
    */
    public function getRetentionLabels(): ?array {
        return $this->retentionLabels;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('retentionLabels', $this->retentionLabels);
    }

    /**
     * Sets the retentionLabels property value. The retentionLabels property
     *  @param array<RetentionLabel>|null $value Value to set for the retentionLabels property.
    */
    public function setRetentionLabels(?array $value ): void {
        $this->retentionLabels = $value;
    }

}
