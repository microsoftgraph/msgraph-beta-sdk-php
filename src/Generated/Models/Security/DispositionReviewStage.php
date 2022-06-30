<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DispositionReviewStage extends Entity implements Parsable 
{
    /**
     * @var string|null $name Name representing each stage within a collection.
    */
    private ?string $name = null;
    
    /**
     * @var array<string>|null $reviewersEmailAddresses A collection of reviewers at each stage.
    */
    private ?array $reviewersEmailAddresses = null;
    
    /**
     * @var int|null $stageNumber The sequence number for each stage of the disposition review.
    */
    private ?int $stageNumber = null;
    
    /**
     * Instantiates a new dispositionReviewStage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DispositionReviewStage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DispositionReviewStage {
        return new DispositionReviewStage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'reviewersEmailAddresses' => function (ParseNode $n) use ($o) { $o->setReviewersEmailAddresses($n->getCollectionOfPrimitiveValues()); },
            'stageNumber' => function (ParseNode $n) use ($o) { $o->setStageNumber($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the name property value. Name representing each stage within a collection.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the reviewersEmailAddresses property value. A collection of reviewers at each stage.
     * @return array<string>|null
    */
    public function getReviewersEmailAddresses(): ?array {
        return $this->reviewersEmailAddresses;
    }

    /**
     * Gets the stageNumber property value. The sequence number for each stage of the disposition review.
     * @return int|null
    */
    public function getStageNumber(): ?int {
        return $this->stageNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfPrimitiveValues('reviewersEmailAddresses', $this->reviewersEmailAddresses);
        $writer->writeIntegerValue('stageNumber', $this->stageNumber);
    }

    /**
     * Sets the name property value. Name representing each stage within a collection.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the reviewersEmailAddresses property value. A collection of reviewers at each stage.
     *  @param array<string>|null $value Value to set for the reviewersEmailAddresses property.
    */
    public function setReviewersEmailAddresses(?array $value ): void {
        $this->reviewersEmailAddresses = $value;
    }

    /**
     * Sets the stageNumber property value. The sequence number for each stage of the disposition review.
     *  @param int|null $value Value to set for the stageNumber property.
    */
    public function setStageNumber(?int $value ): void {
        $this->stageNumber = $value;
    }

}
