<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\Security\RetentionEventType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TriggerTypesRoot extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<RetentionEventType>|null $retentionEventTypes The retentionEventTypes property
    */
    private ?array $retentionEventTypes = null;
    
    /**
     * Instantiates a new TriggerTypesRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the retentionEventTypes property value. The retentionEventTypes property
     *  @param array<RetentionEventType>|null $value Value to set for the retentionEventTypes property.
    */
    public function setRetentionEventTypes(?array $value ): void {
        $this->retentionEventTypes = $value;
    }

}
