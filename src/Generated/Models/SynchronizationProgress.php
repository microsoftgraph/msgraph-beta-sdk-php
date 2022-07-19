<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationProgress implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $completedUnits The numerator of a progress ratio; the number of units of changes already processed.
    */
    private ?int $completedUnits = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTime|null $progressObservationDateTime The time of a progress observation as an offset in minutes from UTC.
    */
    private ?DateTime $progressObservationDateTime = null;
    
    /**
     * @var int|null $totalUnits The denominator of a progress ratio; a number of units of changes to be processed to accomplish synchronization.
    */
    private ?int $totalUnits = null;
    
    /**
     * @var string|null $units An optional description of the units.
    */
    private ?string $units = null;
    
    /**
     * Instantiates a new synchronizationProgress and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.synchronizationProgress');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationProgress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationProgress {
        return new SynchronizationProgress();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the completedUnits property value. The numerator of a progress ratio; the number of units of changes already processed.
     * @return int|null
    */
    public function getCompletedUnits(): ?int {
        return $this->completedUnits;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'completedUnits' => function (ParseNode $n) use ($o) { $o->setCompletedUnits($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'progressObservationDateTime' => function (ParseNode $n) use ($o) { $o->setProgressObservationDateTime($n->getDateTimeValue()); },
            'totalUnits' => function (ParseNode $n) use ($o) { $o->setTotalUnits($n->getIntegerValue()); },
            'units' => function (ParseNode $n) use ($o) { $o->setUnits($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the progressObservationDateTime property value. The time of a progress observation as an offset in minutes from UTC.
     * @return DateTime|null
    */
    public function getProgressObservationDateTime(): ?DateTime {
        return $this->progressObservationDateTime;
    }

    /**
     * Gets the totalUnits property value. The denominator of a progress ratio; a number of units of changes to be processed to accomplish synchronization.
     * @return int|null
    */
    public function getTotalUnits(): ?int {
        return $this->totalUnits;
    }

    /**
     * Gets the units property value. An optional description of the units.
     * @return string|null
    */
    public function getUnits(): ?string {
        return $this->units;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('completedUnits', $this->completedUnits);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeDateTimeValue('progressObservationDateTime', $this->progressObservationDateTime);
        $writer->writeIntegerValue('totalUnits', $this->totalUnits);
        $writer->writeStringValue('units', $this->units);
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
     * Sets the completedUnits property value. The numerator of a progress ratio; the number of units of changes already processed.
     *  @param int|null $value Value to set for the completedUnits property.
    */
    public function setCompletedUnits(?int $value ): void {
        $this->completedUnits = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the progressObservationDateTime property value. The time of a progress observation as an offset in minutes from UTC.
     *  @param DateTime|null $value Value to set for the progressObservationDateTime property.
    */
    public function setProgressObservationDateTime(?DateTime $value ): void {
        $this->progressObservationDateTime = $value;
    }

    /**
     * Sets the totalUnits property value. The denominator of a progress ratio; a number of units of changes to be processed to accomplish synchronization.
     *  @param int|null $value Value to set for the totalUnits property.
    */
    public function setTotalUnits(?int $value ): void {
        $this->totalUnits = $value;
    }

    /**
     * Sets the units property value. An optional description of the units.
     *  @param string|null $value Value to set for the units property.
    */
    public function setUnits(?string $value ): void {
        $this->units = $value;
    }

}
