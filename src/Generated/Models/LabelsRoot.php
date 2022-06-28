<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\Security\RetentionLabel;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LabelsRoot extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<RetentionLabel>|null $retentionLabels The retentionLabels property
    */
    private ?array $retentionLabels = null;
    
    /**
     * Instantiates a new LabelsRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Sets the retentionLabels property value. The retentionLabels property
     *  @param array<RetentionLabel>|null $value Value to set for the retentionLabels property.
    */
    public function setRetentionLabels(?array $value ): void {
        $this->retentionLabels = $value;
    }

}
