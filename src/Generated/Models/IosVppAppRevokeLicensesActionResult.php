<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Defines results for actions on iOS Vpp Apps, contains inherited properties for ActionResult.
*/
class IosVppAppRevokeLicensesActionResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IosVppAppRevokeLicensesActionResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosVppAppRevokeLicensesActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosVppAppRevokeLicensesActionResult {
        return new IosVppAppRevokeLicensesActionResult();
    }

    /**
     * Gets the actionFailureReason property value. Possible types of reasons for an Apple Volume Purchase Program token action failure.
     * @return VppTokenActionFailureReason|null
    */
    public function getActionFailureReason(): ?VppTokenActionFailureReason {
        $val = $this->getBackingStore()->get('actionFailureReason');
        if (is_null($val) || $val instanceof VppTokenActionFailureReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionFailureReason'");
    }

    /**
     * Gets the actionName property value. Action name
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
     * Gets the actionState property value. The actionState property
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
     * Gets the failedLicensesCount property value. A count of the number of licenses for which revoke failed.
     * @return int|null
    */
    public function getFailedLicensesCount(): ?int {
        $val = $this->getBackingStore()->get('failedLicensesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedLicensesCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionFailureReason' => fn(ParseNode $n) => $o->setActionFailureReason($n->getEnumValue(VppTokenActionFailureReason::class)),
            'actionName' => fn(ParseNode $n) => $o->setActionName($n->getStringValue()),
            'actionState' => fn(ParseNode $n) => $o->setActionState($n->getEnumValue(ActionState::class)),
            'failedLicensesCount' => fn(ParseNode $n) => $o->setFailedLicensesCount($n->getIntegerValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'totalLicensesCount' => fn(ParseNode $n) => $o->setTotalLicensesCount($n->getIntegerValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the lastUpdatedDateTime property value. Time the action state was last updated
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
     * Gets the managedDeviceId property value. DeviceId associated with the action.
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
     * Gets the startDateTime property value. Time the action was initiated
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
     * Gets the totalLicensesCount property value. A count of the number of licenses for which revoke was attempted.
     * @return int|null
    */
    public function getTotalLicensesCount(): ?int {
        $val = $this->getBackingStore()->get('totalLicensesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalLicensesCount'");
    }

    /**
     * Gets the userId property value. UserId associated with the action.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('actionFailureReason', $this->getActionFailureReason());
        $writer->writeStringValue('actionName', $this->getActionName());
        $writer->writeEnumValue('actionState', $this->getActionState());
        $writer->writeIntegerValue('failedLicensesCount', $this->getFailedLicensesCount());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeIntegerValue('totalLicensesCount', $this->getTotalLicensesCount());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionFailureReason property value. Possible types of reasons for an Apple Volume Purchase Program token action failure.
     * @param VppTokenActionFailureReason|null $value Value to set for the actionFailureReason property.
    */
    public function setActionFailureReason(?VppTokenActionFailureReason $value): void {
        $this->getBackingStore()->set('actionFailureReason', $value);
    }

    /**
     * Sets the actionName property value. Action name
     * @param string|null $value Value to set for the actionName property.
    */
    public function setActionName(?string $value): void {
        $this->getBackingStore()->set('actionName', $value);
    }

    /**
     * Sets the actionState property value. The actionState property
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
     * Sets the failedLicensesCount property value. A count of the number of licenses for which revoke failed.
     * @param int|null $value Value to set for the failedLicensesCount property.
    */
    public function setFailedLicensesCount(?int $value): void {
        $this->getBackingStore()->set('failedLicensesCount', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. Time the action state was last updated
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the managedDeviceId property value. DeviceId associated with the action.
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
     * Sets the startDateTime property value. Time the action was initiated
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the totalLicensesCount property value. A count of the number of licenses for which revoke was attempted.
     * @param int|null $value Value to set for the totalLicensesCount property.
    */
    public function setTotalLicensesCount(?int $value): void {
        $this->getBackingStore()->set('totalLicensesCount', $value);
    }

    /**
     * Sets the userId property value. UserId associated with the action.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
