<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InferenceData implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var float|null $confidenceScore Confidence score reflecting the accuracy of the data inferred about the user. */
    private ?float $confidenceScore = null;
    
    /** @var bool|null $userHasVerifiedAccuracy Records if the user has confirmed this inference as being True or False. */
    private ?bool $userHasVerifiedAccuracy = null;
    
    /**
     * Instantiates a new inferenceData and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InferenceData
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): InferenceData {
        return new InferenceData();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the confidenceScore property value. Confidence score reflecting the accuracy of the data inferred about the user.
     * @return float|null
    */
    public function getConfidenceScore(): ?float {
        return $this->confidenceScore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'confidenceScore' => function (self $o, ParseNode $n) { $o->setConfidenceScore($n->getFloatValue()); },
            'userHasVerifiedAccuracy' => function (self $o, ParseNode $n) { $o->setUserHasVerifiedAccuracy($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the userHasVerifiedAccuracy property value. Records if the user has confirmed this inference as being True or False.
     * @return bool|null
    */
    public function getUserHasVerifiedAccuracy(): ?bool {
        return $this->userHasVerifiedAccuracy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('confidenceScore', $this->confidenceScore);
        $writer->writeBooleanValue('userHasVerifiedAccuracy', $this->userHasVerifiedAccuracy);
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
     * Sets the confidenceScore property value. Confidence score reflecting the accuracy of the data inferred about the user.
     *  @param float|null $value Value to set for the confidenceScore property.
    */
    public function setConfidenceScore(?float $value ): void {
        $this->confidenceScore = $value;
    }

    /**
     * Sets the userHasVerifiedAccuracy property value. Records if the user has confirmed this inference as being True or False.
     *  @param bool|null $value Value to set for the userHasVerifiedAccuracy property.
    */
    public function setUserHasVerifiedAccuracy(?bool $value ): void {
        $this->userHasVerifiedAccuracy = $value;
    }

}
