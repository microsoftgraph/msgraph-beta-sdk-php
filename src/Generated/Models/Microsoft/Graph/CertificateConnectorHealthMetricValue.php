<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CertificateConnectorHealthMetricValue implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateTime|null $dateTime Timestamp for this metric data-point. */
    private ?DateTime $dateTime = null;
    
    /** @var int|null $failureCount Count of failed requests/operations. */
    private ?int $failureCount = null;
    
    /** @var int|null $successCount Count of successful requests/operations. */
    private ?int $successCount = null;
    
    /**
     * Instantiates a new certificateConnectorHealthMetricValue and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CertificateConnectorHealthMetricValue
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CertificateConnectorHealthMetricValue {
        return new CertificateConnectorHealthMetricValue();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dateTime property value. Timestamp for this metric data-point.
     * @return DateTime|null
    */
    public function getDateTime(): ?DateTime {
        return $this->dateTime;
    }

    /**
     * Gets the failureCount property value. Count of failed requests/operations.
     * @return int|null
    */
    public function getFailureCount(): ?int {
        return $this->failureCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'dateTime' => function (self $o, ParseNode $n) { $o->setDateTime($n->getDateTimeValue()); },
            'failureCount' => function (self $o, ParseNode $n) { $o->setFailureCount($n->getIntegerValue()); },
            'successCount' => function (self $o, ParseNode $n) { $o->setSuccessCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the successCount property value. Count of successful requests/operations.
     * @return int|null
    */
    public function getSuccessCount(): ?int {
        return $this->successCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('dateTime', $this->dateTime);
        $writer->writeIntegerValue('failureCount', $this->failureCount);
        $writer->writeIntegerValue('successCount', $this->successCount);
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
     * Sets the dateTime property value. Timestamp for this metric data-point.
     *  @param DateTime|null $value Value to set for the dateTime property.
    */
    public function setDateTime(?DateTime $value ): void {
        $this->dateTime = $value;
    }

    /**
     * Sets the failureCount property value. Count of failed requests/operations.
     *  @param int|null $value Value to set for the failureCount property.
    */
    public function setFailureCount(?int $value ): void {
        $this->failureCount = $value;
    }

    /**
     * Sets the successCount property value. Count of successful requests/operations.
     *  @param int|null $value Value to set for the successCount property.
    */
    public function setSuccessCount(?int $value ): void {
        $this->successCount = $value;
    }

}
