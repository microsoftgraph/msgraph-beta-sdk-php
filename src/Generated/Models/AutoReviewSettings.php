<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AutoReviewSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $notReviewedResult Possible values: Approve, Deny, or Recommendation.  If Recommendation, then accessRecommendationsEnabled in the accessReviewSettings resource should also be set to true. If you want to have the system provide a decision even if the reviewer does not make a choice, set the autoReviewEnabled property in the accessReviewSettings resource to true and include an autoReviewSettings object with the notReviewedResult property. Then, when a review completes, based on the notReviewedResult property, the decision is recorded as either Approve or Deny.
    */
    private ?string $notReviewedResult = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new autoReviewSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.autoReviewSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AutoReviewSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AutoReviewSettings {
        return new AutoReviewSettings();
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
        return  [
            'notReviewedResult' => function (ParseNode $n) use ($o) { $o->setNotReviewedResult($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the notReviewedResult property value. Possible values: Approve, Deny, or Recommendation.  If Recommendation, then accessRecommendationsEnabled in the accessReviewSettings resource should also be set to true. If you want to have the system provide a decision even if the reviewer does not make a choice, set the autoReviewEnabled property in the accessReviewSettings resource to true and include an autoReviewSettings object with the notReviewedResult property. Then, when a review completes, based on the notReviewedResult property, the decision is recorded as either Approve or Deny.
     * @return string|null
    */
    public function getNotReviewedResult(): ?string {
        return $this->notReviewedResult;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('notReviewedResult', $this->notReviewedResult);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the notReviewedResult property value. Possible values: Approve, Deny, or Recommendation.  If Recommendation, then accessRecommendationsEnabled in the accessReviewSettings resource should also be set to true. If you want to have the system provide a decision even if the reviewer does not make a choice, set the autoReviewEnabled property in the accessReviewSettings resource to true and include an autoReviewSettings object with the notReviewedResult property. Then, when a review completes, based on the notReviewedResult property, the decision is recorded as either Approve or Deny.
     *  @param string|null $value Value to set for the notReviewedResult property.
    */
    public function setNotReviewedResult(?string $value ): void {
        $this->notReviewedResult = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
