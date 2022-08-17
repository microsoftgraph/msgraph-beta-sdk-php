<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\Item\SetCloudPcReviewStatus;

use Microsoft\Graph\Beta\Generated\Models\CloudPcReviewStatus;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SetCloudPcReviewStatusPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var CloudPcReviewStatus|null $reviewStatus The reviewStatus property
    */
    private ?CloudPcReviewStatus $reviewStatus = null;
    
    /**
     * Instantiates a new setCloudPcReviewStatusPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetCloudPcReviewStatusPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetCloudPcReviewStatusPostRequestBody {
        return new SetCloudPcReviewStatusPostRequestBody();
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
            'reviewStatus' => function (ParseNode $n) use ($o) { $o->setReviewStatus($n->getObjectValue(array(CloudPcReviewStatus::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the reviewStatus property value. The reviewStatus property
     * @return CloudPcReviewStatus|null
    */
    public function getReviewStatus(): ?CloudPcReviewStatus {
        return $this->reviewStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('reviewStatus', $this->reviewStatus);
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
     * Sets the reviewStatus property value. The reviewStatus property
     *  @param CloudPcReviewStatus|null $value Value to set for the reviewStatus property.
    */
    public function setReviewStatus(?CloudPcReviewStatus $value ): void {
        $this->reviewStatus = $value;
    }

}
