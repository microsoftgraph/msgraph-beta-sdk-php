<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsUpdateRolloutSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateTime|null $offerEndDateTimeInUTC The feature update's ending  of release date and time to be set, update, and displayed for a feature Update profile for example: 2020-06-09T10:00:00Z. */
    private ?DateTime $offerEndDateTimeInUTC = null;
    
    /** @var int|null $offerIntervalInDays The number of day(s) between each set of offers to be set, updated, and displayed for a feature update profile, for example: if OfferStartDateTimeInUTC is 2020-06-09T10:00:00Z, and OfferIntervalInDays is 1, then the next two sets of offers will be made consecutively on 2020-06-10T10:00:00Z (next day at the same specified time) and 2020-06-11T10:00:00Z (next next day at the same specified time) with 1 day in between each set of offers. */
    private ?int $offerIntervalInDays = null;
    
    /** @var DateTime|null $offerStartDateTimeInUTC The feature update's starting date and time to be set, update, and displayed for a feature Update profile for example: 2020-06-09T10:00:00Z. */
    private ?DateTime $offerStartDateTimeInUTC = null;
    
    /**
     * Instantiates a new windowsUpdateRolloutSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsUpdateRolloutSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WindowsUpdateRolloutSettings {
        return new WindowsUpdateRolloutSettings();
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
            'offerEndDateTimeInUTC' => function (self $o, ParseNode $n) { $o->setOfferEndDateTimeInUTC($n->getDateTimeValue()); },
            'offerIntervalInDays' => function (self $o, ParseNode $n) { $o->setOfferIntervalInDays($n->getIntegerValue()); },
            'offerStartDateTimeInUTC' => function (self $o, ParseNode $n) { $o->setOfferStartDateTimeInUTC($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the offerEndDateTimeInUTC property value. The feature update's ending  of release date and time to be set, update, and displayed for a feature Update profile for example: 2020-06-09T10:00:00Z.
     * @return DateTime|null
    */
    public function getOfferEndDateTimeInUTC(): ?DateTime {
        return $this->offerEndDateTimeInUTC;
    }

    /**
     * Gets the offerIntervalInDays property value. The number of day(s) between each set of offers to be set, updated, and displayed for a feature update profile, for example: if OfferStartDateTimeInUTC is 2020-06-09T10:00:00Z, and OfferIntervalInDays is 1, then the next two sets of offers will be made consecutively on 2020-06-10T10:00:00Z (next day at the same specified time) and 2020-06-11T10:00:00Z (next next day at the same specified time) with 1 day in between each set of offers.
     * @return int|null
    */
    public function getOfferIntervalInDays(): ?int {
        return $this->offerIntervalInDays;
    }

    /**
     * Gets the offerStartDateTimeInUTC property value. The feature update's starting date and time to be set, update, and displayed for a feature Update profile for example: 2020-06-09T10:00:00Z.
     * @return DateTime|null
    */
    public function getOfferStartDateTimeInUTC(): ?DateTime {
        return $this->offerStartDateTimeInUTC;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('offerEndDateTimeInUTC', $this->offerEndDateTimeInUTC);
        $writer->writeIntegerValue('offerIntervalInDays', $this->offerIntervalInDays);
        $writer->writeDateTimeValue('offerStartDateTimeInUTC', $this->offerStartDateTimeInUTC);
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
     * Sets the offerEndDateTimeInUTC property value. The feature update's ending  of release date and time to be set, update, and displayed for a feature Update profile for example: 2020-06-09T10:00:00Z.
     *  @param DateTime|null $value Value to set for the offerEndDateTimeInUTC property.
    */
    public function setOfferEndDateTimeInUTC(?DateTime $value ): void {
        $this->offerEndDateTimeInUTC = $value;
    }

    /**
     * Sets the offerIntervalInDays property value. The number of day(s) between each set of offers to be set, updated, and displayed for a feature update profile, for example: if OfferStartDateTimeInUTC is 2020-06-09T10:00:00Z, and OfferIntervalInDays is 1, then the next two sets of offers will be made consecutively on 2020-06-10T10:00:00Z (next day at the same specified time) and 2020-06-11T10:00:00Z (next next day at the same specified time) with 1 day in between each set of offers.
     *  @param int|null $value Value to set for the offerIntervalInDays property.
    */
    public function setOfferIntervalInDays(?int $value ): void {
        $this->offerIntervalInDays = $value;
    }

    /**
     * Sets the offerStartDateTimeInUTC property value. The feature update's starting date and time to be set, update, and displayed for a feature Update profile for example: 2020-06-09T10:00:00Z.
     *  @param DateTime|null $value Value to set for the offerStartDateTimeInUTC property.
    */
    public function setOfferStartDateTimeInUTC(?DateTime $value ): void {
        $this->offerStartDateTimeInUTC = $value;
    }

}
