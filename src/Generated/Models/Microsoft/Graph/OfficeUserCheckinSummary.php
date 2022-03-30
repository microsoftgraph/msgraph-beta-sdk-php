<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OfficeUserCheckinSummary implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $failedUserCount Total failed user check ins for the last 3 months. */
    private ?int $failedUserCount = null;
    
    /** @var int|null $succeededUserCount Total successful user check ins for the last 3 months. */
    private ?int $succeededUserCount = null;
    
    /**
     * Instantiates a new officeUserCheckinSummary and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfficeUserCheckinSummary
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OfficeUserCheckinSummary {
        return new OfficeUserCheckinSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the failedUserCount property value. Total failed user check ins for the last 3 months.
     * @return int|null
    */
    public function getFailedUserCount(): ?int {
        return $this->failedUserCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'failedUserCount' => function (self $o, ParseNode $n) { $o->setFailedUserCount($n->getIntegerValue()); },
            'succeededUserCount' => function (self $o, ParseNode $n) { $o->setSucceededUserCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the succeededUserCount property value. Total successful user check ins for the last 3 months.
     * @return int|null
    */
    public function getSucceededUserCount(): ?int {
        return $this->succeededUserCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('failedUserCount', $this->failedUserCount);
        $writer->writeIntegerValue('succeededUserCount', $this->succeededUserCount);
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
     * Sets the failedUserCount property value. Total failed user check ins for the last 3 months.
     *  @param int|null $value Value to set for the failedUserCount property.
    */
    public function setFailedUserCount(?int $value ): void {
        $this->failedUserCount = $value;
    }

    /**
     * Sets the succeededUserCount property value. Total successful user check ins for the last 3 months.
     *  @param int|null $value Value to set for the succeededUserCount property.
    */
    public function setSucceededUserCount(?int $value ): void {
        $this->succeededUserCount = $value;
    }

}
