<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkFeaturesConfiguration implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $emailToSendLogsAndFeedback Email address to send logs and feedback. */
    private ?string $emailToSendLogsAndFeedback = null;
    
    /** @var bool|null $isAutoScreenShareEnabled True if auto screen shared is enabled. */
    private ?bool $isAutoScreenShareEnabled = null;
    
    /** @var bool|null $isBluetoothBeaconingEnabled True if Bluetooth beaconing is enabled. */
    private ?bool $isBluetoothBeaconingEnabled = null;
    
    /** @var bool|null $isHideMeetingNamesEnabled True if hiding meeting names is enabled. */
    private ?bool $isHideMeetingNamesEnabled = null;
    
    /** @var bool|null $isSendLogsAndFeedbackEnabled True if sending logs and feedback is enabled. */
    private ?bool $isSendLogsAndFeedbackEnabled = null;
    
    /**
     * Instantiates a new teamworkFeaturesConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkFeaturesConfiguration
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkFeaturesConfiguration {
        return new TeamworkFeaturesConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the emailToSendLogsAndFeedback property value. Email address to send logs and feedback.
     * @return string|null
    */
    public function getEmailToSendLogsAndFeedback(): ?string {
        return $this->emailToSendLogsAndFeedback;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'emailToSendLogsAndFeedback' => function (self $o, ParseNode $n) { $o->setEmailToSendLogsAndFeedback($n->getStringValue()); },
            'isAutoScreenShareEnabled' => function (self $o, ParseNode $n) { $o->setIsAutoScreenShareEnabled($n->getBooleanValue()); },
            'isBluetoothBeaconingEnabled' => function (self $o, ParseNode $n) { $o->setIsBluetoothBeaconingEnabled($n->getBooleanValue()); },
            'isHideMeetingNamesEnabled' => function (self $o, ParseNode $n) { $o->setIsHideMeetingNamesEnabled($n->getBooleanValue()); },
            'isSendLogsAndFeedbackEnabled' => function (self $o, ParseNode $n) { $o->setIsSendLogsAndFeedbackEnabled($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the isAutoScreenShareEnabled property value. True if auto screen shared is enabled.
     * @return bool|null
    */
    public function getIsAutoScreenShareEnabled(): ?bool {
        return $this->isAutoScreenShareEnabled;
    }

    /**
     * Gets the isBluetoothBeaconingEnabled property value. True if Bluetooth beaconing is enabled.
     * @return bool|null
    */
    public function getIsBluetoothBeaconingEnabled(): ?bool {
        return $this->isBluetoothBeaconingEnabled;
    }

    /**
     * Gets the isHideMeetingNamesEnabled property value. True if hiding meeting names is enabled.
     * @return bool|null
    */
    public function getIsHideMeetingNamesEnabled(): ?bool {
        return $this->isHideMeetingNamesEnabled;
    }

    /**
     * Gets the isSendLogsAndFeedbackEnabled property value. True if sending logs and feedback is enabled.
     * @return bool|null
    */
    public function getIsSendLogsAndFeedbackEnabled(): ?bool {
        return $this->isSendLogsAndFeedbackEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('emailToSendLogsAndFeedback', $this->emailToSendLogsAndFeedback);
        $writer->writeBooleanValue('isAutoScreenShareEnabled', $this->isAutoScreenShareEnabled);
        $writer->writeBooleanValue('isBluetoothBeaconingEnabled', $this->isBluetoothBeaconingEnabled);
        $writer->writeBooleanValue('isHideMeetingNamesEnabled', $this->isHideMeetingNamesEnabled);
        $writer->writeBooleanValue('isSendLogsAndFeedbackEnabled', $this->isSendLogsAndFeedbackEnabled);
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
     * Sets the emailToSendLogsAndFeedback property value. Email address to send logs and feedback.
     *  @param string|null $value Value to set for the emailToSendLogsAndFeedback property.
    */
    public function setEmailToSendLogsAndFeedback(?string $value ): void {
        $this->emailToSendLogsAndFeedback = $value;
    }

    /**
     * Sets the isAutoScreenShareEnabled property value. True if auto screen shared is enabled.
     *  @param bool|null $value Value to set for the isAutoScreenShareEnabled property.
    */
    public function setIsAutoScreenShareEnabled(?bool $value ): void {
        $this->isAutoScreenShareEnabled = $value;
    }

    /**
     * Sets the isBluetoothBeaconingEnabled property value. True if Bluetooth beaconing is enabled.
     *  @param bool|null $value Value to set for the isBluetoothBeaconingEnabled property.
    */
    public function setIsBluetoothBeaconingEnabled(?bool $value ): void {
        $this->isBluetoothBeaconingEnabled = $value;
    }

    /**
     * Sets the isHideMeetingNamesEnabled property value. True if hiding meeting names is enabled.
     *  @param bool|null $value Value to set for the isHideMeetingNamesEnabled property.
    */
    public function setIsHideMeetingNamesEnabled(?bool $value ): void {
        $this->isHideMeetingNamesEnabled = $value;
    }

    /**
     * Sets the isSendLogsAndFeedbackEnabled property value. True if sending logs and feedback is enabled.
     *  @param bool|null $value Value to set for the isSendLogsAndFeedbackEnabled property.
    */
    public function setIsSendLogsAndFeedbackEnabled(?bool $value ): void {
        $this->isSendLogsAndFeedbackEnabled = $value;
    }

}
