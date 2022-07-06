<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RolloutSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $devicesPerOffer Specifies the number of devices that are offered at the same time. Has no effect when endDateTime is set. When endDateTime and devicesPerOffer are both not set, all devices in the deployment are offered content at the same time.
    */
    private ?int $devicesPerOffer = null;
    
    /**
     * @var string|null $durationBetweenOffers Specifies duration between each set of devices being offered the update. Has an effect when endDateTime or devicesPerOffer are defined. Default value is P1D (1 day).
    */
    private ?string $durationBetweenOffers = null;
    
    /**
     * @var DateTime|null $endDateTime Specifies the date before which all devices currently in the deployment are offered the update. Devices added after this date are offered immediately. When endDateTime and devicesPerOffer are both not set, all devices in the deployment are offered content at the same time.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var DateTime|null $startDateTime Date on which devices in the deployment start receiving the update. When not set, the deployment starts as soon as devices are assigned.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new rolloutSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RolloutSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RolloutSettings {
        return new RolloutSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the devicesPerOffer property value. Specifies the number of devices that are offered at the same time. Has no effect when endDateTime is set. When endDateTime and devicesPerOffer are both not set, all devices in the deployment are offered content at the same time.
     * @return int|null
    */
    public function getDevicesPerOffer(): ?int {
        return $this->devicesPerOffer;
    }

    /**
     * Gets the durationBetweenOffers property value. Specifies duration between each set of devices being offered the update. Has an effect when endDateTime or devicesPerOffer are defined. Default value is P1D (1 day).
     * @return string|null
    */
    public function getDurationBetweenOffers(): ?string {
        return $this->durationBetweenOffers;
    }

    /**
     * Gets the endDateTime property value. Specifies the date before which all devices currently in the deployment are offered the update. Devices added after this date are offered immediately. When endDateTime and devicesPerOffer are both not set, all devices in the deployment are offered content at the same time.
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
            'devicesPerOffer' => function (ParseNode $n) use ($o) { $o->setDevicesPerOffer($n->getIntegerValue()); },
            'durationBetweenOffers' => function (ParseNode $n) use ($o) { $o->setDurationBetweenOffers($n->getStringValue()); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the startDateTime property value. Date on which devices in the deployment start receiving the update. When not set, the deployment starts as soon as devices are assigned.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('devicesPerOffer', $this->devicesPerOffer);
        $writer->writeStringValue('durationBetweenOffers', $this->durationBetweenOffers);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
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
     * Sets the devicesPerOffer property value. Specifies the number of devices that are offered at the same time. Has no effect when endDateTime is set. When endDateTime and devicesPerOffer are both not set, all devices in the deployment are offered content at the same time.
     *  @param int|null $value Value to set for the devicesPerOffer property.
    */
    public function setDevicesPerOffer(?int $value ): void {
        $this->devicesPerOffer = $value;
    }

    /**
     * Sets the durationBetweenOffers property value. Specifies duration between each set of devices being offered the update. Has an effect when endDateTime or devicesPerOffer are defined. Default value is P1D (1 day).
     *  @param string|null $value Value to set for the durationBetweenOffers property.
    */
    public function setDurationBetweenOffers(?string $value ): void {
        $this->durationBetweenOffers = $value;
    }

    /**
     * Sets the endDateTime property value. Specifies the date before which all devices currently in the deployment are offered the update. Devices added after this date are offered immediately. When endDateTime and devicesPerOffer are both not set, all devices in the deployment are offered content at the same time.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the startDateTime property value. Date on which devices in the deployment start receiving the update. When not set, the deployment starts as soon as devices are assigned.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
