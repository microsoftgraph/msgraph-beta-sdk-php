<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TriggersRoot extends Entity implements Parsable 
{
    /**
     * @var array<RetentionEvent>|null $retentionEvents The retentionEvents property
    */
    private ?array $retentionEvents = null;
    
    /**
     * Instantiates a new triggersRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.triggersRoot');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TriggersRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TriggersRoot {
        return new TriggersRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'retentionEvents' => function (ParseNode $n) use ($o) { $o->setRetentionEvents($n->getCollectionOfObjectValues(array(RetentionEvent::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the retentionEvents property value. The retentionEvents property
     * @return array<RetentionEvent>|null
    */
    public function getRetentionEvents(): ?array {
        return $this->retentionEvents;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('retentionEvents', $this->retentionEvents);
    }

    /**
     * Sets the retentionEvents property value. The retentionEvents property
     *  @param array<RetentionEvent>|null $value Value to set for the retentionEvents property.
    */
    public function setRetentionEvents(?array $value ): void {
        $this->retentionEvents = $value;
    }

}
