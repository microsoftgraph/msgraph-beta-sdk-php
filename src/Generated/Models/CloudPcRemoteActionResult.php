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

class CloudPcRemoteActionResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcRemoteActionResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcRemoteActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcRemoteActionResult {
        return new CloudPcRemoteActionResult();
    }

    /**
     * Gets the actionName property value. The specified action. Supported values in the Microsoft Endpoint Manager portal are: Reprovision, Resize, Restore. Supported values in enterprise Cloud PC devices are: Reboot, Rename, Reprovision, Troubleshoot.
     * @return string|null
    */
    public function getActionName(): ?string {
        $val = $this->getBackingStore()->get('actionName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionName'");
    }

    /**
     * Gets the actionState property value. State of the action. Possible values are: None, pending, canceled, active, done, failed, notSupported. Read-only.
     * @return ActionState|null
    */
    public function getActionState(): ?ActionState {
        $val = $this->getBackingStore()->get('actionState');
        if (is_null($val) || $val instanceof ActionState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionState'");
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
     * Gets the cloudPcId property value. The ID of the Cloud PC device on which the remote action is performed. Read-only.
     * @return string|null
    */
    public function getCloudPcId(): ?string {
        $val = $this->getBackingStore()->get('cloudPcId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionName' => fn(ParseNode $n) => $o->setActionName($n->getStringValue()),
            'actionState' => fn(ParseNode $n) => $o->setActionState($n->getEnumValue(ActionState::class)),
            'cloudPcId' => fn(ParseNode $n) => $o->setCloudPcId($n->getStringValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'statusDetail' => fn(ParseNode $n) => $o->setStatusDetail($n->getObjectValue([CloudPcStatusDetail::class, 'createFromDiscriminatorValue'])),
            'statusDetails' => fn(ParseNode $n) => $o->setStatusDetails($n->getObjectValue([CloudPcStatusDetails::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the lastUpdatedDateTime property value. Last update time for action. The Timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the managedDeviceId property value. The ID of the Intune managed device on which the remote action is performed. Read-only.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        $val = $this->getBackingStore()->get('managedDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceId'");
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
     * Gets the startDateTime property value. Time the action was initiated. The Timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the statusDetail property value. The extended details of the action status, including error code, error message, and additional information. For example, 'statusDetail': {'code': 'internalServerError','message': 'There was an internal server error. Please contact support xxx.','additionalInformation': [ { '@odata.type':'microsoft.graph.keyValuePair','name': 'correlationId','value': '52367774-cfb7-4e9c-ab51-1b864c31f2d1'} ]}
     * @return CloudPcStatusDetail|null
    */
    public function getStatusDetail(): ?CloudPcStatusDetail {
        $val = $this->getBackingStore()->get('statusDetail');
        if (is_null($val) || $val instanceof CloudPcStatusDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusDetail'");
    }

    /**
     * Gets the statusDetails property value. The details of the Cloud PC status. This property is deprecated and will no longer be supported effective August 31, 2024. Use statusDetail instead.
     * @return CloudPcStatusDetails|null
    */
    public function getStatusDetails(): ?CloudPcStatusDetails {
        $val = $this->getBackingStore()->get('statusDetails');
        if (is_null($val) || $val instanceof CloudPcStatusDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusDetails'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionName', $this->getActionName());
        $writer->writeEnumValue('actionState', $this->getActionState());
        $writer->writeStringValue('cloudPcId', $this->getCloudPcId());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeObjectValue('statusDetail', $this->getStatusDetail());
        $writer->writeObjectValue('statusDetails', $this->getStatusDetails());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionName property value. The specified action. Supported values in the Microsoft Endpoint Manager portal are: Reprovision, Resize, Restore. Supported values in enterprise Cloud PC devices are: Reboot, Rename, Reprovision, Troubleshoot.
     * @param string|null $value Value to set for the actionName property.
    */
    public function setActionName(?string $value): void {
        $this->getBackingStore()->set('actionName', $value);
    }

    /**
     * Sets the actionState property value. State of the action. Possible values are: None, pending, canceled, active, done, failed, notSupported. Read-only.
     * @param ActionState|null $value Value to set for the actionState property.
    */
    public function setActionState(?ActionState $value): void {
        $this->getBackingStore()->set('actionState', $value);
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
     * Sets the cloudPcId property value. The ID of the Cloud PC device on which the remote action is performed. Read-only.
     * @param string|null $value Value to set for the cloudPcId property.
    */
    public function setCloudPcId(?string $value): void {
        $this->getBackingStore()->set('cloudPcId', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. Last update time for action. The Timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the managedDeviceId property value. The ID of the Intune managed device on which the remote action is performed. Read-only.
     * @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the startDateTime property value. Time the action was initiated. The Timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the statusDetail property value. The extended details of the action status, including error code, error message, and additional information. For example, 'statusDetail': {'code': 'internalServerError','message': 'There was an internal server error. Please contact support xxx.','additionalInformation': [ { '@odata.type':'microsoft.graph.keyValuePair','name': 'correlationId','value': '52367774-cfb7-4e9c-ab51-1b864c31f2d1'} ]}
     * @param CloudPcStatusDetail|null $value Value to set for the statusDetail property.
    */
    public function setStatusDetail(?CloudPcStatusDetail $value): void {
        $this->getBackingStore()->set('statusDetail', $value);
    }

    /**
     * Sets the statusDetails property value. The details of the Cloud PC status. This property is deprecated and will no longer be supported effective August 31, 2024. Use statusDetail instead.
     * @param CloudPcStatusDetails|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?CloudPcStatusDetails $value): void {
        $this->getBackingStore()->set('statusDetails', $value);
    }

}
