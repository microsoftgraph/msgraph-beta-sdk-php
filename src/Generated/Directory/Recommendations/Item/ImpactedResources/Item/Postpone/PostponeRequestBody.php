<?php

namespace Microsoft\Graph\Beta\Generated\Directory\Recommendations\Item\ImpactedResources\Item\Postpone;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PostponeRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateTime|null $postponeUntilDateTime  */
    private ?DateTime $postponeUntilDateTime = null;
    
    /**
     * Instantiates a new postponeRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostponeRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PostponeRequestBody {
        return new PostponeRequestBody();
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
            'postponeUntilDateTime' => function (self $o, ParseNode $n) { $o->setPostponeUntilDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the postponeUntilDateTime property value. 
     * @return DateTime|null
    */
    public function getPostponeUntilDateTime(): ?DateTime {
        return $this->postponeUntilDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('postponeUntilDateTime', $this->postponeUntilDateTime);
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
     * Sets the postponeUntilDateTime property value. 
     *  @param DateTime|null $value Value to set for the postponeUntilDateTime property.
    */
    public function setPostponeUntilDateTime(?DateTime $value ): void {
        $this->postponeUntilDateTime = $value;
    }

}
