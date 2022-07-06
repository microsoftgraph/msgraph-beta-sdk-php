<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WarrantyOffer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description Warranty offer description
    */
    private ?string $description = null;
    
    /**
     * @var DateTime|null $endDateTime Warranty offer end date
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var DateTime|null $startDateTime Warranty offer start date
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var WarrantyType|null $type Warranty offer type. Possible values are: unknown, manufacturer, contractual, unknownFutureValue.
    */
    private ?WarrantyType $type = null;
    
    /**
     * Instantiates a new warrantyOffer and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WarrantyOffer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WarrantyOffer {
        return new WarrantyOffer();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Warranty offer description
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the endDateTime property value. Warranty offer end date
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getEnumValue(WarrantyType::class)); },
        ];
    }

    /**
     * Gets the startDateTime property value. Warranty offer start date
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the type property value. Warranty offer type. Possible values are: unknown, manufacturer, contractual, unknownFutureValue.
     * @return WarrantyType|null
    */
    public function getType(): ?WarrantyType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeEnumValue('type', $this->type);
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
     * Sets the description property value. Warranty offer description
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the endDateTime property value. Warranty offer end date
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the startDateTime property value. Warranty offer start date
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the type property value. Warranty offer type. Possible values are: unknown, manufacturer, contractual, unknownFutureValue.
     *  @param WarrantyType|null $value Value to set for the type property.
    */
    public function setType(?WarrantyType $value ): void {
        $this->type = $value;
    }

}
