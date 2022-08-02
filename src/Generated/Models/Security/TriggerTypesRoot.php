<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TriggerTypesRoot extends Entity implements Parsable 
{
    /**
     * @var array<RetentionEventType>|null $retentionEventTypes The retentionEventTypes property
    */
    private ?array $retentionEventTypes = null;
    
    /**
     * Instantiates a new triggerTypesRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.triggerTypesRoot');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TriggerTypesRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TriggerTypesRoot {
        return new TriggerTypesRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'retentionEventTypes' => function (ParseNode $n) use ($o) { $o->setRetentionEventTypes($n->getCollectionOfObjectValues(array(RetentionEventType::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the retentionEventTypes property value. The retentionEventTypes property
     * @return array<RetentionEventType>|null
    */
    public function getRetentionEventTypes(): ?array {
        return $this->retentionEventTypes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('retentionEventTypes', $this->retentionEventTypes);
    }

    /**
     * Sets the retentionEventTypes property value. The retentionEventTypes property
     *  @param array<RetentionEventType>|null $value Value to set for the retentionEventTypes property.
    */
    public function setRetentionEventTypes(?array $value ): void {
        $this->retentionEventTypes = $value;
    }

}
