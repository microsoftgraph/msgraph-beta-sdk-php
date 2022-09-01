<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WinGetAppRestartSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $countdownDisplayBeforeRestartInMinutes The number of minutes before the restart time to display the countdown dialog for pending restarts.
    */
    private ?int $countdownDisplayBeforeRestartInMinutes = null;
    
    /**
     * @var int|null $gracePeriodInMinutes The number of minutes to wait before restarting the device after an app installation.
    */
    private ?int $gracePeriodInMinutes = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $restartNotificationSnoozeDurationInMinutes The number of minutes to snooze the restart notification dialog when the snooze button is selected.
    */
    private ?int $restartNotificationSnoozeDurationInMinutes = null;
    
    /**
     * Instantiates a new winGetAppRestartSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.winGetAppRestartSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WinGetAppRestartSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WinGetAppRestartSettings {
        return new WinGetAppRestartSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the countdownDisplayBeforeRestartInMinutes property value. The number of minutes before the restart time to display the countdown dialog for pending restarts.
     * @return int|null
    */
    public function getCountdownDisplayBeforeRestartInMinutes(): ?int {
        return $this->countdownDisplayBeforeRestartInMinutes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'countdownDisplayBeforeRestartInMinutes' => function (ParseNode $n) use ($o) { $o->setCountdownDisplayBeforeRestartInMinutes($n->getIntegerValue()); },
            'gracePeriodInMinutes' => function (ParseNode $n) use ($o) { $o->setGracePeriodInMinutes($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'restartNotificationSnoozeDurationInMinutes' => function (ParseNode $n) use ($o) { $o->setRestartNotificationSnoozeDurationInMinutes($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the gracePeriodInMinutes property value. The number of minutes to wait before restarting the device after an app installation.
     * @return int|null
    */
    public function getGracePeriodInMinutes(): ?int {
        return $this->gracePeriodInMinutes;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the restartNotificationSnoozeDurationInMinutes property value. The number of minutes to snooze the restart notification dialog when the snooze button is selected.
     * @return int|null
    */
    public function getRestartNotificationSnoozeDurationInMinutes(): ?int {
        return $this->restartNotificationSnoozeDurationInMinutes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('countdownDisplayBeforeRestartInMinutes', $this->countdownDisplayBeforeRestartInMinutes);
        $writer->writeIntegerValue('gracePeriodInMinutes', $this->gracePeriodInMinutes);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('restartNotificationSnoozeDurationInMinutes', $this->restartNotificationSnoozeDurationInMinutes);
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
     * Sets the countdownDisplayBeforeRestartInMinutes property value. The number of minutes before the restart time to display the countdown dialog for pending restarts.
     *  @param int|null $value Value to set for the countdownDisplayBeforeRestartInMinutes property.
    */
    public function setCountdownDisplayBeforeRestartInMinutes(?int $value ): void {
        $this->countdownDisplayBeforeRestartInMinutes = $value;
    }

    /**
     * Sets the gracePeriodInMinutes property value. The number of minutes to wait before restarting the device after an app installation.
     *  @param int|null $value Value to set for the gracePeriodInMinutes property.
    */
    public function setGracePeriodInMinutes(?int $value ): void {
        $this->gracePeriodInMinutes = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the restartNotificationSnoozeDurationInMinutes property value. The number of minutes to snooze the restart notification dialog when the snooze button is selected.
     *  @param int|null $value Value to set for the restartNotificationSnoozeDurationInMinutes property.
    */
    public function setRestartNotificationSnoozeDurationInMinutes(?int $value ): void {
        $this->restartNotificationSnoozeDurationInMinutes = $value;
    }

}
