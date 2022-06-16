<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewRecurrenceSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $durationInDays The duration in days for recurrence. */
    private ?int $durationInDays = null;
    
    /** @var int|null $recurrenceCount The count of recurrences, if the value of recurrenceEndType is occurrences, or 0 otherwise. */
    private ?int $recurrenceCount = null;
    
    /** @var string|null $recurrenceEndType How the recurrence ends. Possible values: never, endBy, occurrences, or recurrenceCount. If it is never, then there is no explicit end of the recurrence series. If it is endBy, then the recurrence ends at a certain date. If it is occurrences, then the series ends after recurrenceCount instances of the review have completed. */
    private ?string $recurrenceEndType = null;
    
    /** @var string|null $recurrenceType The recurrence interval. Possible vaules: onetime, weekly, monthly, quarterly, halfyearly or annual. */
    private ?string $recurrenceType = null;
    
    /**
     * Instantiates a new accessReviewRecurrenceSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewRecurrenceSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewRecurrenceSettings {
        return new AccessReviewRecurrenceSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the durationInDays property value. The duration in days for recurrence.
     * @return int|null
    */
    public function getDurationInDays(): ?int {
        return $this->durationInDays;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'durationInDays' => function (self $o, ParseNode $n) { $o->setDurationInDays($n->getIntegerValue()); },
            'recurrenceCount' => function (self $o, ParseNode $n) { $o->setRecurrenceCount($n->getIntegerValue()); },
            'recurrenceEndType' => function (self $o, ParseNode $n) { $o->setRecurrenceEndType($n->getStringValue()); },
            'recurrenceType' => function (self $o, ParseNode $n) { $o->setRecurrenceType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the recurrenceCount property value. The count of recurrences, if the value of recurrenceEndType is occurrences, or 0 otherwise.
     * @return int|null
    */
    public function getRecurrenceCount(): ?int {
        return $this->recurrenceCount;
    }

    /**
     * Gets the recurrenceEndType property value. How the recurrence ends. Possible values: never, endBy, occurrences, or recurrenceCount. If it is never, then there is no explicit end of the recurrence series. If it is endBy, then the recurrence ends at a certain date. If it is occurrences, then the series ends after recurrenceCount instances of the review have completed.
     * @return string|null
    */
    public function getRecurrenceEndType(): ?string {
        return $this->recurrenceEndType;
    }

    /**
     * Gets the recurrenceType property value. The recurrence interval. Possible vaules: onetime, weekly, monthly, quarterly, halfyearly or annual.
     * @return string|null
    */
    public function getRecurrenceType(): ?string {
        return $this->recurrenceType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('durationInDays', $this->durationInDays);
        $writer->writeIntegerValue('recurrenceCount', $this->recurrenceCount);
        $writer->writeStringValue('recurrenceEndType', $this->recurrenceEndType);
        $writer->writeStringValue('recurrenceType', $this->recurrenceType);
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
     * Sets the durationInDays property value. The duration in days for recurrence.
     *  @param int|null $value Value to set for the durationInDays property.
    */
    public function setDurationInDays(?int $value ): void {
        $this->durationInDays = $value;
    }

    /**
     * Sets the recurrenceCount property value. The count of recurrences, if the value of recurrenceEndType is occurrences, or 0 otherwise.
     *  @param int|null $value Value to set for the recurrenceCount property.
    */
    public function setRecurrenceCount(?int $value ): void {
        $this->recurrenceCount = $value;
    }

    /**
     * Sets the recurrenceEndType property value. How the recurrence ends. Possible values: never, endBy, occurrences, or recurrenceCount. If it is never, then there is no explicit end of the recurrence series. If it is endBy, then the recurrence ends at a certain date. If it is occurrences, then the series ends after recurrenceCount instances of the review have completed.
     *  @param string|null $value Value to set for the recurrenceEndType property.
    */
    public function setRecurrenceEndType(?string $value ): void {
        $this->recurrenceEndType = $value;
    }

    /**
     * Sets the recurrenceType property value. The recurrence interval. Possible vaules: onetime, weekly, monthly, quarterly, halfyearly or annual.
     *  @param string|null $value Value to set for the recurrenceType property.
    */
    public function setRecurrenceType(?string $value ): void {
        $this->recurrenceType = $value;
    }

}
