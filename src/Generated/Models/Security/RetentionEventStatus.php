<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\PublicError;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RetentionEventStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var PublicError|null $error The error if the status is not successful.
    */
    private ?PublicError $error = null;
    
    /**
     * @var EventStatusType|null $status The status of the distribution. The possible values are: pending, error, success, notAvaliable.
    */
    private ?EventStatusType $status = null;
    
    /**
     * Instantiates a new retentionEventStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RetentionEventStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RetentionEventStatus {
        return new RetentionEventStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the error property value. The error if the status is not successful.
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'error' => function (ParseNode $n) use ($o) { $o->setError($n->getObjectValue(array(PublicError::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(EventStatusType::class)); },
        ];
    }

    /**
     * Gets the status property value. The status of the distribution. The possible values are: pending, error, success, notAvaliable.
     * @return EventStatusType|null
    */
    public function getStatus(): ?EventStatusType {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('error', $this->error);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the error property value. The error if the status is not successful.
     *  @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the status property value. The status of the distribution. The possible values are: pending, error, success, notAvaliable.
     *  @param EventStatusType|null $value Value to set for the status property.
    */
    public function setStatus(?EventStatusType $value ): void {
        $this->status = $value;
    }

}
