<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EvaluateLabelJobResult implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ResponsiblePolicy|null $responsiblePolicy The responsiblePolicy property */
    private ?ResponsiblePolicy $responsiblePolicy = null;
    
    /** @var array<ResponsibleSensitiveType>|null $responsibleSensitiveTypes The responsibleSensitiveTypes property */
    private ?array $responsibleSensitiveTypes = null;
    
    /** @var MatchingLabel|null $sensitivityLabel The sensitivityLabel property */
    private ?MatchingLabel $sensitivityLabel = null;
    
    /**
     * Instantiates a new evaluateLabelJobResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateLabelJobResult
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateLabelJobResult {
        return new EvaluateLabelJobResult();
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
        return  [
            'responsiblePolicy' => function (self $o, ParseNode $n) { $o->setResponsiblePolicy($n->getObjectValue(ResponsiblePolicy::class)); },
            'responsibleSensitiveTypes' => function (self $o, ParseNode $n) { $o->setResponsibleSensitiveTypes($n->getCollectionOfObjectValues(ResponsibleSensitiveType::class)); },
            'sensitivityLabel' => function (self $o, ParseNode $n) { $o->setSensitivityLabel($n->getObjectValue(MatchingLabel::class)); },
        ];
    }

    /**
     * Gets the responsiblePolicy property value. The responsiblePolicy property
     * @return ResponsiblePolicy|null
    */
    public function getResponsiblePolicy(): ?ResponsiblePolicy {
        return $this->responsiblePolicy;
    }

    /**
     * Gets the responsibleSensitiveTypes property value. The responsibleSensitiveTypes property
     * @return array<ResponsibleSensitiveType>|null
    */
    public function getResponsibleSensitiveTypes(): ?array {
        return $this->responsibleSensitiveTypes;
    }

    /**
     * Gets the sensitivityLabel property value. The sensitivityLabel property
     * @return MatchingLabel|null
    */
    public function getSensitivityLabel(): ?MatchingLabel {
        return $this->sensitivityLabel;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('responsiblePolicy', $this->responsiblePolicy);
        $writer->writeCollectionOfObjectValues('responsibleSensitiveTypes', $this->responsibleSensitiveTypes);
        $writer->writeObjectValue('sensitivityLabel', $this->sensitivityLabel);
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
     * Sets the responsiblePolicy property value. The responsiblePolicy property
     *  @param ResponsiblePolicy|null $value Value to set for the responsiblePolicy property.
    */
    public function setResponsiblePolicy(?ResponsiblePolicy $value ): void {
        $this->responsiblePolicy = $value;
    }

    /**
     * Sets the responsibleSensitiveTypes property value. The responsibleSensitiveTypes property
     *  @param array<ResponsibleSensitiveType>|null $value Value to set for the responsibleSensitiveTypes property.
    */
    public function setResponsibleSensitiveTypes(?array $value ): void {
        $this->responsibleSensitiveTypes = $value;
    }

    /**
     * Sets the sensitivityLabel property value. The sensitivityLabel property
     *  @param MatchingLabel|null $value Value to set for the sensitivityLabel property.
    */
    public function setSensitivityLabel(?MatchingLabel $value ): void {
        $this->sensitivityLabel = $value;
    }

}
