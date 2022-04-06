<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterShareViewpoint implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateTime|null $lastUsedDateTime The lastUsedDateTime property */
    private ?DateTime $lastUsedDateTime = null;
    
    /**
     * Instantiates a new printerShareViewpoint and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterShareViewpoint
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrinterShareViewpoint {
        return new PrinterShareViewpoint();
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
            'lastUsedDateTime' => function (self $o, ParseNode $n) { $o->setLastUsedDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the lastUsedDateTime property value. The lastUsedDateTime property
     * @return DateTime|null
    */
    public function getLastUsedDateTime(): ?DateTime {
        return $this->lastUsedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('lastUsedDateTime', $this->lastUsedDateTime);
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
     * Sets the lastUsedDateTime property value. The lastUsedDateTime property
     *  @param DateTime|null $value Value to set for the lastUsedDateTime property.
    */
    public function setLastUsedDateTime(?DateTime $value ): void {
        $this->lastUsedDateTime = $value;
    }

}
