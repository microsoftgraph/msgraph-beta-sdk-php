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
 * Describes the status for a single FOTA deployment.
*/
class ZebraFotaDeploymentStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new zebraFotaDeploymentStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ZebraFotaDeploymentStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ZebraFotaDeploymentStatus {
        return new ZebraFotaDeploymentStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the cancelRequested property value. A boolean that indicates if a cancellation was requested on the deployment. NOTE: A cancellation request does not guarantee that the deployment was canceled.
     * @return bool|null
    */
    public function getCancelRequested(): ?bool {
        return $this->getBackingStore()->get('cancelRequested');
    }

    /**
     * Gets the completeOrCanceledDateTime property value. The date and time when this deployment was completed or canceled. The actual date time is determined by the value of state. If the state is canceled, this property holds the cancellation date/time. If the the state is completed, this property holds the completion date/time. If the deployment is not completed before the deployment end date, then completed date/time and end date/time are the same. This is always in the deployment timezone. Note: An installation that is in progress can continue past the deployment end date.
     * @return DateTime|null
    */
    public function getCompleteOrCanceledDateTime(): ?DateTime {
        return $this->getBackingStore()->get('completeOrCanceledDateTime');
    }

    /**
     * Gets the errorCode property value. An error code indicating the failure reason, when the deployment state is createFailed. Possible values: See zebraFotaErrorCode enum.
     * @return ZebraFotaErrorCode|null
    */
    public function getErrorCode(): ?ZebraFotaErrorCode {
        return $this->getBackingStore()->get('errorCode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancelRequested' => fn(ParseNode $n) => $o->setCancelRequested($n->getBooleanValue()),
            'completeOrCanceledDateTime' => fn(ParseNode $n) => $o->setCompleteOrCanceledDateTime($n->getDateTimeValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getEnumValue(ZebraFotaErrorCode::class)),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ZebraFotaDeploymentState::class)),
            'totalAwaitingInstall' => fn(ParseNode $n) => $o->setTotalAwaitingInstall($n->getIntegerValue()),
            'totalCanceled' => fn(ParseNode $n) => $o->setTotalCanceled($n->getIntegerValue()),
            'totalCreated' => fn(ParseNode $n) => $o->setTotalCreated($n->getIntegerValue()),
            'totalDevices' => fn(ParseNode $n) => $o->setTotalDevices($n->getIntegerValue()),
            'totalDownloading' => fn(ParseNode $n) => $o->setTotalDownloading($n->getIntegerValue()),
            'totalFailedDownload' => fn(ParseNode $n) => $o->setTotalFailedDownload($n->getIntegerValue()),
            'totalFailedInstall' => fn(ParseNode $n) => $o->setTotalFailedInstall($n->getIntegerValue()),
            'totalScheduled' => fn(ParseNode $n) => $o->setTotalScheduled($n->getIntegerValue()),
            'totalSucceededInstall' => fn(ParseNode $n) => $o->setTotalSucceededInstall($n->getIntegerValue()),
            'totalUnknown' => fn(ParseNode $n) => $o->setTotalUnknown($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the lastUpdatedDateTime property value. Date and time when the deployment status was updated from Zebra
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastUpdatedDateTime');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the state property value. Represents the state of Zebra FOTA deployment.
     * @return ZebraFotaDeploymentState|null
    */
    public function getState(): ?ZebraFotaDeploymentState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the totalAwaitingInstall property value. An integer that indicates the total number of devices where installation was successful.
     * @return int|null
    */
    public function getTotalAwaitingInstall(): ?int {
        return $this->getBackingStore()->get('totalAwaitingInstall');
    }

    /**
     * Gets the totalCanceled property value. An integer that indicates the total number of devices where installation was canceled.
     * @return int|null
    */
    public function getTotalCanceled(): ?int {
        return $this->getBackingStore()->get('totalCanceled');
    }

    /**
     * Gets the totalCreated property value. An integer that indicates the total number of devices that have a job in the CREATED state. Typically indicates jobs that did not reach the devices.
     * @return int|null
    */
    public function getTotalCreated(): ?int {
        return $this->getBackingStore()->get('totalCreated');
    }

    /**
     * Gets the totalDevices property value. An integer that indicates the total number of devices in the deployment.
     * @return int|null
    */
    public function getTotalDevices(): ?int {
        return $this->getBackingStore()->get('totalDevices');
    }

    /**
     * Gets the totalDownloading property value. An integer that indicates the total number of devices where installation was successful.
     * @return int|null
    */
    public function getTotalDownloading(): ?int {
        return $this->getBackingStore()->get('totalDownloading');
    }

    /**
     * Gets the totalFailedDownload property value. An integer that indicates the total number of devices that have failed to download the new OS file.
     * @return int|null
    */
    public function getTotalFailedDownload(): ?int {
        return $this->getBackingStore()->get('totalFailedDownload');
    }

    /**
     * Gets the totalFailedInstall property value. An integer that indicates the total number of devices that have failed to install the new OS file.
     * @return int|null
    */
    public function getTotalFailedInstall(): ?int {
        return $this->getBackingStore()->get('totalFailedInstall');
    }

    /**
     * Gets the totalScheduled property value. An integer that indicates the total number of devices that received the json and are scheduled.
     * @return int|null
    */
    public function getTotalScheduled(): ?int {
        return $this->getBackingStore()->get('totalScheduled');
    }

    /**
     * Gets the totalSucceededInstall property value. An integer that indicates the total number of devices where installation was successful.
     * @return int|null
    */
    public function getTotalSucceededInstall(): ?int {
        return $this->getBackingStore()->get('totalSucceededInstall');
    }

    /**
     * Gets the totalUnknown property value. An integer that indicates the total number of devices where no deployment status or end state has not received, even after the scheduled end date was reached.
     * @return int|null
    */
    public function getTotalUnknown(): ?int {
        return $this->getBackingStore()->get('totalUnknown');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('cancelRequested', $this->getCancelRequested());
        $writer->writeDateTimeValue('completeOrCanceledDateTime', $this->getCompleteOrCanceledDateTime());
        $writer->writeEnumValue('errorCode', $this->getErrorCode());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeIntegerValue('totalAwaitingInstall', $this->getTotalAwaitingInstall());
        $writer->writeIntegerValue('totalCanceled', $this->getTotalCanceled());
        $writer->writeIntegerValue('totalCreated', $this->getTotalCreated());
        $writer->writeIntegerValue('totalDevices', $this->getTotalDevices());
        $writer->writeIntegerValue('totalDownloading', $this->getTotalDownloading());
        $writer->writeIntegerValue('totalFailedDownload', $this->getTotalFailedDownload());
        $writer->writeIntegerValue('totalFailedInstall', $this->getTotalFailedInstall());
        $writer->writeIntegerValue('totalScheduled', $this->getTotalScheduled());
        $writer->writeIntegerValue('totalSucceededInstall', $this->getTotalSucceededInstall());
        $writer->writeIntegerValue('totalUnknown', $this->getTotalUnknown());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cancelRequested property value. A boolean that indicates if a cancellation was requested on the deployment. NOTE: A cancellation request does not guarantee that the deployment was canceled.
     * @param bool|null $value Value to set for the cancelRequested property.
    */
    public function setCancelRequested(?bool $value): void {
        $this->getBackingStore()->set('cancelRequested', $value);
    }

    /**
     * Sets the completeOrCanceledDateTime property value. The date and time when this deployment was completed or canceled. The actual date time is determined by the value of state. If the state is canceled, this property holds the cancellation date/time. If the the state is completed, this property holds the completion date/time. If the deployment is not completed before the deployment end date, then completed date/time and end date/time are the same. This is always in the deployment timezone. Note: An installation that is in progress can continue past the deployment end date.
     * @param DateTime|null $value Value to set for the completeOrCanceledDateTime property.
    */
    public function setCompleteOrCanceledDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completeOrCanceledDateTime', $value);
    }

    /**
     * Sets the errorCode property value. An error code indicating the failure reason, when the deployment state is createFailed. Possible values: See zebraFotaErrorCode enum.
     * @param ZebraFotaErrorCode|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?ZebraFotaErrorCode $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. Date and time when the deployment status was updated from Zebra
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the state property value. Represents the state of Zebra FOTA deployment.
     * @param ZebraFotaDeploymentState|null $value Value to set for the state property.
    */
    public function setState(?ZebraFotaDeploymentState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the totalAwaitingInstall property value. An integer that indicates the total number of devices where installation was successful.
     * @param int|null $value Value to set for the totalAwaitingInstall property.
    */
    public function setTotalAwaitingInstall(?int $value): void {
        $this->getBackingStore()->set('totalAwaitingInstall', $value);
    }

    /**
     * Sets the totalCanceled property value. An integer that indicates the total number of devices where installation was canceled.
     * @param int|null $value Value to set for the totalCanceled property.
    */
    public function setTotalCanceled(?int $value): void {
        $this->getBackingStore()->set('totalCanceled', $value);
    }

    /**
     * Sets the totalCreated property value. An integer that indicates the total number of devices that have a job in the CREATED state. Typically indicates jobs that did not reach the devices.
     * @param int|null $value Value to set for the totalCreated property.
    */
    public function setTotalCreated(?int $value): void {
        $this->getBackingStore()->set('totalCreated', $value);
    }

    /**
     * Sets the totalDevices property value. An integer that indicates the total number of devices in the deployment.
     * @param int|null $value Value to set for the totalDevices property.
    */
    public function setTotalDevices(?int $value): void {
        $this->getBackingStore()->set('totalDevices', $value);
    }

    /**
     * Sets the totalDownloading property value. An integer that indicates the total number of devices where installation was successful.
     * @param int|null $value Value to set for the totalDownloading property.
    */
    public function setTotalDownloading(?int $value): void {
        $this->getBackingStore()->set('totalDownloading', $value);
    }

    /**
     * Sets the totalFailedDownload property value. An integer that indicates the total number of devices that have failed to download the new OS file.
     * @param int|null $value Value to set for the totalFailedDownload property.
    */
    public function setTotalFailedDownload(?int $value): void {
        $this->getBackingStore()->set('totalFailedDownload', $value);
    }

    /**
     * Sets the totalFailedInstall property value. An integer that indicates the total number of devices that have failed to install the new OS file.
     * @param int|null $value Value to set for the totalFailedInstall property.
    */
    public function setTotalFailedInstall(?int $value): void {
        $this->getBackingStore()->set('totalFailedInstall', $value);
    }

    /**
     * Sets the totalScheduled property value. An integer that indicates the total number of devices that received the json and are scheduled.
     * @param int|null $value Value to set for the totalScheduled property.
    */
    public function setTotalScheduled(?int $value): void {
        $this->getBackingStore()->set('totalScheduled', $value);
    }

    /**
     * Sets the totalSucceededInstall property value. An integer that indicates the total number of devices where installation was successful.
     * @param int|null $value Value to set for the totalSucceededInstall property.
    */
    public function setTotalSucceededInstall(?int $value): void {
        $this->getBackingStore()->set('totalSucceededInstall', $value);
    }

    /**
     * Sets the totalUnknown property value. An integer that indicates the total number of devices where no deployment status or end state has not received, even after the scheduled end date was reached.
     * @param int|null $value Value to set for the totalUnknown property.
    */
    public function setTotalUnknown(?int $value): void {
        $this->getBackingStore()->set('totalUnknown', $value);
    }

}
