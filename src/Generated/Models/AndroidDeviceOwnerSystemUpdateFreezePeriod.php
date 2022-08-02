<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidDeviceOwnerSystemUpdateFreezePeriod implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $endDay The day of the end date of the freeze period. Valid values 1 to 31
    */
    private ?int $endDay = null;
    
    /**
     * @var int|null $endMonth The month of the end date of the freeze period. Valid values 1 to 12
    */
    private ?int $endMonth = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $startDay The day of the start date of the freeze period. Valid values 1 to 31
    */
    private ?int $startDay = null;
    
    /**
     * @var int|null $startMonth The month of the start date of the freeze period. Valid values 1 to 12
    */
    private ?int $startMonth = null;
    
    /**
     * Instantiates a new androidDeviceOwnerSystemUpdateFreezePeriod and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.androidDeviceOwnerSystemUpdateFreezePeriod');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidDeviceOwnerSystemUpdateFreezePeriod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidDeviceOwnerSystemUpdateFreezePeriod {
        return new AndroidDeviceOwnerSystemUpdateFreezePeriod();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the endDay property value. The day of the end date of the freeze period. Valid values 1 to 31
     * @return int|null
    */
    public function getEndDay(): ?int {
        return $this->endDay;
    }

    /**
     * Gets the endMonth property value. The month of the end date of the freeze period. Valid values 1 to 12
     * @return int|null
    */
    public function getEndMonth(): ?int {
        return $this->endMonth;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endDay' => function (ParseNode $n) use ($o) { $o->setEndDay($n->getIntegerValue()); },
            'endMonth' => function (ParseNode $n) use ($o) { $o->setEndMonth($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'startDay' => function (ParseNode $n) use ($o) { $o->setStartDay($n->getIntegerValue()); },
            'startMonth' => function (ParseNode $n) use ($o) { $o->setStartMonth($n->getIntegerValue()); },
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
     * Gets the startDay property value. The day of the start date of the freeze period. Valid values 1 to 31
     * @return int|null
    */
    public function getStartDay(): ?int {
        return $this->startDay;
    }

    /**
     * Gets the startMonth property value. The month of the start date of the freeze period. Valid values 1 to 12
     * @return int|null
    */
    public function getStartMonth(): ?int {
        return $this->startMonth;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('endDay', $this->endDay);
        $writer->writeIntegerValue('endMonth', $this->endMonth);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('startDay', $this->startDay);
        $writer->writeIntegerValue('startMonth', $this->startMonth);
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
     * Sets the endDay property value. The day of the end date of the freeze period. Valid values 1 to 31
     *  @param int|null $value Value to set for the endDay property.
    */
    public function setEndDay(?int $value ): void {
        $this->endDay = $value;
    }

    /**
     * Sets the endMonth property value. The month of the end date of the freeze period. Valid values 1 to 12
     *  @param int|null $value Value to set for the endMonth property.
    */
    public function setEndMonth(?int $value ): void {
        $this->endMonth = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the startDay property value. The day of the start date of the freeze period. Valid values 1 to 31
     *  @param int|null $value Value to set for the startDay property.
    */
    public function setStartDay(?int $value ): void {
        $this->startDay = $value;
    }

    /**
     * Sets the startMonth property value. The month of the start date of the freeze period. Valid values 1 to 12
     *  @param int|null $value Value to set for the startMonth property.
    */
    public function setStartMonth(?int $value ): void {
        $this->startMonth = $value;
    }

}
