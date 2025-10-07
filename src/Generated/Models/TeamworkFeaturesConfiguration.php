<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkFeaturesConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TeamworkFeaturesConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkFeaturesConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkFeaturesConfiguration {
        return new TeamworkFeaturesConfiguration();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the emailToSendLogsAndFeedback property value. Email address to send logs and feedback.
     * @return string|null
    */
    public function getEmailToSendLogsAndFeedback(): ?string {
        $val = $this->getBackingStore()->get('emailToSendLogsAndFeedback');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailToSendLogsAndFeedback'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'emailToSendLogsAndFeedback' => fn(ParseNode $n) => $o->setEmailToSendLogsAndFeedback($n->getStringValue()),
            'isAutoScreenShareEnabled' => fn(ParseNode $n) => $o->setIsAutoScreenShareEnabled($n->getBooleanValue()),
            'isBluetoothBeaconingEnabled' => fn(ParseNode $n) => $o->setIsBluetoothBeaconingEnabled($n->getBooleanValue()),
            'isHideMeetingNamesEnabled' => fn(ParseNode $n) => $o->setIsHideMeetingNamesEnabled($n->getBooleanValue()),
            'isSendLogsAndFeedbackEnabled' => fn(ParseNode $n) => $o->setIsSendLogsAndFeedbackEnabled($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isAutoScreenShareEnabled property value. True if auto screen shared is enabled.
     * @return bool|null
    */
    public function getIsAutoScreenShareEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isAutoScreenShareEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAutoScreenShareEnabled'");
    }

    /**
     * Gets the isBluetoothBeaconingEnabled property value. True if Bluetooth beaconing is enabled.
     * @return bool|null
    */
    public function getIsBluetoothBeaconingEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isBluetoothBeaconingEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isBluetoothBeaconingEnabled'");
    }

    /**
     * Gets the isHideMeetingNamesEnabled property value. True if hiding meeting names is enabled.
     * @return bool|null
    */
    public function getIsHideMeetingNamesEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isHideMeetingNamesEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHideMeetingNamesEnabled'");
    }

    /**
     * Gets the isSendLogsAndFeedbackEnabled property value. True if sending logs and feedback is enabled.
     * @return bool|null
    */
    public function getIsSendLogsAndFeedbackEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isSendLogsAndFeedbackEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSendLogsAndFeedbackEnabled'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('emailToSendLogsAndFeedback', $this->getEmailToSendLogsAndFeedback());
        $writer->writeBooleanValue('isAutoScreenShareEnabled', $this->getIsAutoScreenShareEnabled());
        $writer->writeBooleanValue('isBluetoothBeaconingEnabled', $this->getIsBluetoothBeaconingEnabled());
        $writer->writeBooleanValue('isHideMeetingNamesEnabled', $this->getIsHideMeetingNamesEnabled());
        $writer->writeBooleanValue('isSendLogsAndFeedbackEnabled', $this->getIsSendLogsAndFeedbackEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the emailToSendLogsAndFeedback property value. Email address to send logs and feedback.
     * @param string|null $value Value to set for the emailToSendLogsAndFeedback property.
    */
    public function setEmailToSendLogsAndFeedback(?string $value): void {
        $this->getBackingStore()->set('emailToSendLogsAndFeedback', $value);
    }

    /**
     * Sets the isAutoScreenShareEnabled property value. True if auto screen shared is enabled.
     * @param bool|null $value Value to set for the isAutoScreenShareEnabled property.
    */
    public function setIsAutoScreenShareEnabled(?bool $value): void {
        $this->getBackingStore()->set('isAutoScreenShareEnabled', $value);
    }

    /**
     * Sets the isBluetoothBeaconingEnabled property value. True if Bluetooth beaconing is enabled.
     * @param bool|null $value Value to set for the isBluetoothBeaconingEnabled property.
    */
    public function setIsBluetoothBeaconingEnabled(?bool $value): void {
        $this->getBackingStore()->set('isBluetoothBeaconingEnabled', $value);
    }

    /**
     * Sets the isHideMeetingNamesEnabled property value. True if hiding meeting names is enabled.
     * @param bool|null $value Value to set for the isHideMeetingNamesEnabled property.
    */
    public function setIsHideMeetingNamesEnabled(?bool $value): void {
        $this->getBackingStore()->set('isHideMeetingNamesEnabled', $value);
    }

    /**
     * Sets the isSendLogsAndFeedbackEnabled property value. True if sending logs and feedback is enabled.
     * @param bool|null $value Value to set for the isSendLogsAndFeedbackEnabled property.
    */
    public function setIsSendLogsAndFeedbackEnabled(?bool $value): void {
        $this->getBackingStore()->set('isSendLogsAndFeedbackEnabled', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
