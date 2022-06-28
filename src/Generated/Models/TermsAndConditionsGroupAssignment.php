<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TermsAndConditionsGroupAssignment extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $targetGroupId Unique identifier of a group that the T&C policy is assigned to.
    */
    private ?string $targetGroupId = null;
    
    /**
     * @var TermsAndConditions|null $termsAndConditions Navigation link to the terms and conditions that are assigned.
    */
    private ?TermsAndConditions $termsAndConditions = null;
    
    /**
     * Instantiates a new termsAndConditionsGroupAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TermsAndConditionsGroupAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TermsAndConditionsGroupAssignment {
        return new TermsAndConditionsGroupAssignment();
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
            'targetGroupId' => function (ParseNode $n) use ($o) { $o->setTargetGroupId($n->getStringValue()); },
            'termsAndConditions' => function (ParseNode $n) use ($o) { $o->setTermsAndConditions($n->getObjectValue(array(TermsAndConditions::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the targetGroupId property value. Unique identifier of a group that the T&C policy is assigned to.
     * @return string|null
    */
    public function getTargetGroupId(): ?string {
        return $this->targetGroupId;
    }

    /**
     * Gets the termsAndConditions property value. Navigation link to the terms and conditions that are assigned.
     * @return TermsAndConditions|null
    */
    public function getTermsAndConditions(): ?TermsAndConditions {
        return $this->termsAndConditions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('targetGroupId', $this->targetGroupId);
        $writer->writeObjectValue('termsAndConditions', $this->termsAndConditions);
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
     * Sets the targetGroupId property value. Unique identifier of a group that the T&C policy is assigned to.
     *  @param string|null $value Value to set for the targetGroupId property.
    */
    public function setTargetGroupId(?string $value ): void {
        $this->targetGroupId = $value;
    }

    /**
     * Sets the termsAndConditions property value. Navigation link to the terms and conditions that are assigned.
     *  @param TermsAndConditions|null $value Value to set for the termsAndConditions property.
    */
    public function setTermsAndConditions(?TermsAndConditions $value ): void {
        $this->termsAndConditions = $value;
    }

}
