<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationQuarantine implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $currentBegan Date and time when the quarantine was last evaluated and imposed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $currentBegan = null;
    
    /**
     * @var SynchronizationError|null $error Describes the error(s) that occurred when putting the synchronization job into quarantine.
    */
    private ?SynchronizationError $error = null;
    
    /**
     * @var DateTime|null $nextAttempt Date and time when the next attempt to re-evaluate the quarantine will be made. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $nextAttempt = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var QuarantineReason|null $reason The reason property
    */
    private ?QuarantineReason $reason = null;
    
    /**
     * @var DateTime|null $seriesBegan Date and time when the quarantine was first imposed in this series (a series starts when a quarantine is first imposed, and is reset as soon as the quarantine is lifted). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $seriesBegan = null;
    
    /**
     * @var int|null $seriesCount Number of times in this series the quarantine was re-evaluated and left in effect (a series starts when quarantine is first imposed, and is reset as soon as quarantine is lifted).
    */
    private ?int $seriesCount = null;
    
    /**
     * Instantiates a new synchronizationQuarantine and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.synchronizationQuarantine');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationQuarantine
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationQuarantine {
        return new SynchronizationQuarantine();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the currentBegan property value. Date and time when the quarantine was last evaluated and imposed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCurrentBegan(): ?DateTime {
        return $this->currentBegan;
    }

    /**
     * Gets the error property value. Describes the error(s) that occurred when putting the synchronization job into quarantine.
     * @return SynchronizationError|null
    */
    public function getError(): ?SynchronizationError {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currentBegan' => function (ParseNode $n) use ($o) { $o->setCurrentBegan($n->getDateTimeValue()); },
            'error' => function (ParseNode $n) use ($o) { $o->setError($n->getObjectValue(array(SynchronizationError::class, 'createFromDiscriminatorValue'))); },
            'nextAttempt' => function (ParseNode $n) use ($o) { $o->setNextAttempt($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'reason' => function (ParseNode $n) use ($o) { $o->setReason($n->getEnumValue(QuarantineReason::class)); },
            'seriesBegan' => function (ParseNode $n) use ($o) { $o->setSeriesBegan($n->getDateTimeValue()); },
            'seriesCount' => function (ParseNode $n) use ($o) { $o->setSeriesCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the nextAttempt property value. Date and time when the next attempt to re-evaluate the quarantine will be made. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getNextAttempt(): ?DateTime {
        return $this->nextAttempt;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the reason property value. The reason property
     * @return QuarantineReason|null
    */
    public function getReason(): ?QuarantineReason {
        return $this->reason;
    }

    /**
     * Gets the seriesBegan property value. Date and time when the quarantine was first imposed in this series (a series starts when a quarantine is first imposed, and is reset as soon as the quarantine is lifted). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getSeriesBegan(): ?DateTime {
        return $this->seriesBegan;
    }

    /**
     * Gets the seriesCount property value. Number of times in this series the quarantine was re-evaluated and left in effect (a series starts when quarantine is first imposed, and is reset as soon as quarantine is lifted).
     * @return int|null
    */
    public function getSeriesCount(): ?int {
        return $this->seriesCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('currentBegan', $this->currentBegan);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeDateTimeValue('nextAttempt', $this->nextAttempt);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('reason', $this->reason);
        $writer->writeDateTimeValue('seriesBegan', $this->seriesBegan);
        $writer->writeIntegerValue('seriesCount', $this->seriesCount);
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
     * Sets the currentBegan property value. Date and time when the quarantine was last evaluated and imposed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the currentBegan property.
    */
    public function setCurrentBegan(?DateTime $value ): void {
        $this->currentBegan = $value;
    }

    /**
     * Sets the error property value. Describes the error(s) that occurred when putting the synchronization job into quarantine.
     *  @param SynchronizationError|null $value Value to set for the error property.
    */
    public function setError(?SynchronizationError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the nextAttempt property value. Date and time when the next attempt to re-evaluate the quarantine will be made. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the nextAttempt property.
    */
    public function setNextAttempt(?DateTime $value ): void {
        $this->nextAttempt = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the reason property value. The reason property
     *  @param QuarantineReason|null $value Value to set for the reason property.
    */
    public function setReason(?QuarantineReason $value ): void {
        $this->reason = $value;
    }

    /**
     * Sets the seriesBegan property value. Date and time when the quarantine was first imposed in this series (a series starts when a quarantine is first imposed, and is reset as soon as the quarantine is lifted). The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the seriesBegan property.
    */
    public function setSeriesBegan(?DateTime $value ): void {
        $this->seriesBegan = $value;
    }

    /**
     * Sets the seriesCount property value. Number of times in this series the quarantine was re-evaluated and left in effect (a series starts when quarantine is first imposed, and is reset as soon as quarantine is lifted).
     *  @param int|null $value Value to set for the seriesCount property.
    */
    public function setSeriesCount(?int $value ): void {
        $this->seriesCount = $value;
    }

}
