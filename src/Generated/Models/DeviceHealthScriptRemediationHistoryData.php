<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Date;

/**
 * The number of devices remediated by a device health script on a given date.
*/
class DeviceHealthScriptRemediationHistoryData implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DeviceHealthScriptRemediationHistoryData and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthScriptRemediationHistoryData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthScriptRemediationHistoryData {
        return new DeviceHealthScriptRemediationHistoryData();
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
     * Gets the date property value. The date on which devices were remediated by the device health script.
     * @return Date|null
    */
    public function getDate(): ?Date {
        $val = $this->getBackingStore()->get('date');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'date'");
    }

    /**
     * Gets the detectFailedDeviceCount property value. The number of devices for which the detection script found an issue.
     * @return int|null
    */
    public function getDetectFailedDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('detectFailedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detectFailedDeviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'date' => fn(ParseNode $n) => $o->setDate($n->getDateValue()),
            'detectFailedDeviceCount' => fn(ParseNode $n) => $o->setDetectFailedDeviceCount($n->getIntegerValue()),
            'noIssueDeviceCount' => fn(ParseNode $n) => $o->setNoIssueDeviceCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remediatedDeviceCount' => fn(ParseNode $n) => $o->setRemediatedDeviceCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the noIssueDeviceCount property value. The number of devices that were found to have no issue by the device health script.
     * @return int|null
    */
    public function getNoIssueDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('noIssueDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'noIssueDeviceCount'");
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
     * Gets the remediatedDeviceCount property value. The number of devices remediated by the device health script.
     * @return int|null
    */
    public function getRemediatedDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('remediatedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediatedDeviceCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateValue('date', $this->getDate());
        $writer->writeIntegerValue('detectFailedDeviceCount', $this->getDetectFailedDeviceCount());
        $writer->writeIntegerValue('noIssueDeviceCount', $this->getNoIssueDeviceCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('remediatedDeviceCount', $this->getRemediatedDeviceCount());
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
     * Sets the date property value. The date on which devices were remediated by the device health script.
     * @param Date|null $value Value to set for the date property.
    */
    public function setDate(?Date $value): void {
        $this->getBackingStore()->set('date', $value);
    }

    /**
     * Sets the detectFailedDeviceCount property value. The number of devices for which the detection script found an issue.
     * @param int|null $value Value to set for the detectFailedDeviceCount property.
    */
    public function setDetectFailedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('detectFailedDeviceCount', $value);
    }

    /**
     * Sets the noIssueDeviceCount property value. The number of devices that were found to have no issue by the device health script.
     * @param int|null $value Value to set for the noIssueDeviceCount property.
    */
    public function setNoIssueDeviceCount(?int $value): void {
        $this->getBackingStore()->set('noIssueDeviceCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the remediatedDeviceCount property value. The number of devices remediated by the device health script.
     * @param int|null $value Value to set for the remediatedDeviceCount property.
    */
    public function setRemediatedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('remediatedDeviceCount', $value);
    }

}
