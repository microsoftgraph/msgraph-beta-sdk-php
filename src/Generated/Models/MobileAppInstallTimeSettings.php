<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileAppInstallTimeSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $deadlineDateTime The time at which the app should be installed.
    */
    private ?DateTime $deadlineDateTime = null;
    
    /**
     * @var DateTime|null $startDateTime The time at which the app should be available for installation.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var bool|null $useLocalTime Whether the local device time or UTC time should be used when determining the available and deadline times.
    */
    private ?bool $useLocalTime = null;
    
    /**
     * Instantiates a new mobileAppInstallTimeSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppInstallTimeSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppInstallTimeSettings {
        return new MobileAppInstallTimeSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deadlineDateTime property value. The time at which the app should be installed.
     * @return DateTime|null
    */
    public function getDeadlineDateTime(): ?DateTime {
        return $this->deadlineDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deadlineDateTime' => function (ParseNode $n) use ($o) { $o->setDeadlineDateTime($n->getDateTimeValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'useLocalTime' => function (ParseNode $n) use ($o) { $o->setUseLocalTime($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the startDateTime property value. The time at which the app should be available for installation.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the useLocalTime property value. Whether the local device time or UTC time should be used when determining the available and deadline times.
     * @return bool|null
    */
    public function getUseLocalTime(): ?bool {
        return $this->useLocalTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('deadlineDateTime', $this->deadlineDateTime);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeBooleanValue('useLocalTime', $this->useLocalTime);
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
     * Sets the deadlineDateTime property value. The time at which the app should be installed.
     *  @param DateTime|null $value Value to set for the deadlineDateTime property.
    */
    public function setDeadlineDateTime(?DateTime $value ): void {
        $this->deadlineDateTime = $value;
    }

    /**
     * Sets the startDateTime property value. The time at which the app should be available for installation.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the useLocalTime property value. Whether the local device time or UTC time should be used when determining the available and deadline times.
     *  @param bool|null $value Value to set for the useLocalTime property.
    */
    public function setUseLocalTime(?bool $value ): void {
        $this->useLocalTime = $value;
    }

}
