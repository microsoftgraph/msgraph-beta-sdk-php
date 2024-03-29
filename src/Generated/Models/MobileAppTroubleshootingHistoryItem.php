<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * History Item contained in the Mobile App Troubleshooting Event.
*/
class MobileAppTroubleshootingHistoryItem implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MobileAppTroubleshootingHistoryItem and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppTroubleshootingHistoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppTroubleshootingHistoryItem {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.mobileAppTroubleshootingAppPolicyCreationHistory': return new MobileAppTroubleshootingAppPolicyCreationHistory();
                case '#microsoft.graph.mobileAppTroubleshootingAppStateHistory': return new MobileAppTroubleshootingAppStateHistory();
                case '#microsoft.graph.mobileAppTroubleshootingAppTargetHistory': return new MobileAppTroubleshootingAppTargetHistory();
                case '#microsoft.graph.mobileAppTroubleshootingAppUpdateHistory': return new MobileAppTroubleshootingAppUpdateHistory();
                case '#microsoft.graph.mobileAppTroubleshootingDeviceCheckinHistory': return new MobileAppTroubleshootingDeviceCheckinHistory();
            }
        }
        return new MobileAppTroubleshootingHistoryItem();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'occurrenceDateTime' => fn(ParseNode $n) => $o->setOccurrenceDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'troubleshootingErrorDetails' => fn(ParseNode $n) => $o->setTroubleshootingErrorDetails($n->getObjectValue([DeviceManagementTroubleshootingErrorDetails::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the occurrenceDateTime property value. Time when the history item occurred.
     * @return DateTime|null
    */
    public function getOccurrenceDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('occurrenceDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'occurrenceDateTime'");
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
     * Gets the troubleshootingErrorDetails property value. Object containing detailed information about the error and its remediation.
     * @return DeviceManagementTroubleshootingErrorDetails|null
    */
    public function getTroubleshootingErrorDetails(): ?DeviceManagementTroubleshootingErrorDetails {
        $val = $this->getBackingStore()->get('troubleshootingErrorDetails');
        if (is_null($val) || $val instanceof DeviceManagementTroubleshootingErrorDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'troubleshootingErrorDetails'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('occurrenceDateTime', $this->getOccurrenceDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('troubleshootingErrorDetails', $this->getTroubleshootingErrorDetails());
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
     * Sets the occurrenceDateTime property value. Time when the history item occurred.
     * @param DateTime|null $value Value to set for the occurrenceDateTime property.
    */
    public function setOccurrenceDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('occurrenceDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the troubleshootingErrorDetails property value. Object containing detailed information about the error and its remediation.
     * @param DeviceManagementTroubleshootingErrorDetails|null $value Value to set for the troubleshootingErrorDetails property.
    */
    public function setTroubleshootingErrorDetails(?DeviceManagementTroubleshootingErrorDetails $value): void {
        $this->getBackingStore()->set('troubleshootingErrorDetails', $value);
    }

}
