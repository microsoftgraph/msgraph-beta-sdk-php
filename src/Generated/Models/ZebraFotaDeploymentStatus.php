<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ZebraFotaDeploymentStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $cancelRequested A boolean that indicates if a cancellation was requested on the deployment. NOTE: A cancellation request does not guarantee that the deployment was canceled.
    */
    private ?bool $cancelRequested = null;
    
    /**
     * @var DateTime|null $completeOrCanceledDateTime The date and time when this deployment was completed or canceled. The actual date time is determined by the value of state. If the state is canceled, this property holds the cancellation date/time. If the the state is completed, this property holds the completion date/time. If the deployment is not completed before the deployment end date, then completed date/time and end date/time are the same. This is always in the deployment timezone. Note: An installation that is in progress can continue past the deployment end date.
    */
    private ?DateTime $completeOrCanceledDateTime = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime Date and time when the deployment status was updated from Zebra
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var ZebraFotaDeploymentState|null $state See zebraFotaDeploymentState enum for possible values. Possible values are: pendingCreation, createFailed, created, inProgress, completed, pendingCancel, canceled, unknownFutureValue.
    */
    private ?ZebraFotaDeploymentState $state = null;
    
    /**
     * @var int|null $totalAwaitingInstall An integer that indicates the total number of devices where installation was successful.
    */
    private ?int $totalAwaitingInstall = null;
    
    /**
     * @var int|null $totalCanceled An integer that indicates the total number of devices where installation was canceled.
    */
    private ?int $totalCanceled = null;
    
    /**
     * @var int|null $totalCreated An integer that indicates the total number of devices that have a job in the CREATED state. Typically indicates jobs that did not reach the devices.
    */
    private ?int $totalCreated = null;
    
    /**
     * @var int|null $totalDevices An integer that indicates the total number of devices in the deployment.
    */
    private ?int $totalDevices = null;
    
    /**
     * @var int|null $totalDownloading An integer that indicates the total number of devices where installation was successful.
    */
    private ?int $totalDownloading = null;
    
    /**
     * @var int|null $totalFailedDownload An integer that indicates the total number of devices that have failed to download the new OS file.
    */
    private ?int $totalFailedDownload = null;
    
    /**
     * @var int|null $totalFailedInstall An integer that indicates the total number of devices that have failed to install the new OS file.
    */
    private ?int $totalFailedInstall = null;
    
    /**
     * @var int|null $totalScheduled An integer that indicates the total number of devices that received the json and are scheduled.
    */
    private ?int $totalScheduled = null;
    
    /**
     * @var int|null $totalSucceededInstall An integer that indicates the total number of devices where installation was successful.
    */
    private ?int $totalSucceededInstall = null;
    
    /**
     * @var int|null $totalUnknown An integer that indicates the total number of devices where no deployment status or end state has not received, even after the scheduled end date was reached.
    */
    private ?int $totalUnknown = null;
    
    /**
     * Instantiates a new zebraFotaDeploymentStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the cancelRequested property value. A boolean that indicates if a cancellation was requested on the deployment. NOTE: A cancellation request does not guarantee that the deployment was canceled.
     * @return bool|null
    */
    public function getCancelRequested(): ?bool {
        return $this->cancelRequested;
    }

    /**
     * Gets the completeOrCanceledDateTime property value. The date and time when this deployment was completed or canceled. The actual date time is determined by the value of state. If the state is canceled, this property holds the cancellation date/time. If the the state is completed, this property holds the completion date/time. If the deployment is not completed before the deployment end date, then completed date/time and end date/time are the same. This is always in the deployment timezone. Note: An installation that is in progress can continue past the deployment end date.
     * @return DateTime|null
    */
    public function getCompleteOrCanceledDateTime(): ?DateTime {
        return $this->completeOrCanceledDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancelRequested' => function (ParseNode $n) use ($o) { $o->setCancelRequested($n->getBooleanValue()); },
            'completeOrCanceledDateTime' => function (ParseNode $n) use ($o) { $o->setCompleteOrCanceledDateTime($n->getDateTimeValue()); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(ZebraFotaDeploymentState::class)); },
            'totalAwaitingInstall' => function (ParseNode $n) use ($o) { $o->setTotalAwaitingInstall($n->getIntegerValue()); },
            'totalCanceled' => function (ParseNode $n) use ($o) { $o->setTotalCanceled($n->getIntegerValue()); },
            'totalCreated' => function (ParseNode $n) use ($o) { $o->setTotalCreated($n->getIntegerValue()); },
            'totalDevices' => function (ParseNode $n) use ($o) { $o->setTotalDevices($n->getIntegerValue()); },
            'totalDownloading' => function (ParseNode $n) use ($o) { $o->setTotalDownloading($n->getIntegerValue()); },
            'totalFailedDownload' => function (ParseNode $n) use ($o) { $o->setTotalFailedDownload($n->getIntegerValue()); },
            'totalFailedInstall' => function (ParseNode $n) use ($o) { $o->setTotalFailedInstall($n->getIntegerValue()); },
            'totalScheduled' => function (ParseNode $n) use ($o) { $o->setTotalScheduled($n->getIntegerValue()); },
            'totalSucceededInstall' => function (ParseNode $n) use ($o) { $o->setTotalSucceededInstall($n->getIntegerValue()); },
            'totalUnknown' => function (ParseNode $n) use ($o) { $o->setTotalUnknown($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the lastUpdatedDateTime property value. Date and time when the deployment status was updated from Zebra
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the state property value. See zebraFotaDeploymentState enum for possible values. Possible values are: pendingCreation, createFailed, created, inProgress, completed, pendingCancel, canceled, unknownFutureValue.
     * @return ZebraFotaDeploymentState|null
    */
    public function getState(): ?ZebraFotaDeploymentState {
        return $this->state;
    }

    /**
     * Gets the totalAwaitingInstall property value. An integer that indicates the total number of devices where installation was successful.
     * @return int|null
    */
    public function getTotalAwaitingInstall(): ?int {
        return $this->totalAwaitingInstall;
    }

    /**
     * Gets the totalCanceled property value. An integer that indicates the total number of devices where installation was canceled.
     * @return int|null
    */
    public function getTotalCanceled(): ?int {
        return $this->totalCanceled;
    }

    /**
     * Gets the totalCreated property value. An integer that indicates the total number of devices that have a job in the CREATED state. Typically indicates jobs that did not reach the devices.
     * @return int|null
    */
    public function getTotalCreated(): ?int {
        return $this->totalCreated;
    }

    /**
     * Gets the totalDevices property value. An integer that indicates the total number of devices in the deployment.
     * @return int|null
    */
    public function getTotalDevices(): ?int {
        return $this->totalDevices;
    }

    /**
     * Gets the totalDownloading property value. An integer that indicates the total number of devices where installation was successful.
     * @return int|null
    */
    public function getTotalDownloading(): ?int {
        return $this->totalDownloading;
    }

    /**
     * Gets the totalFailedDownload property value. An integer that indicates the total number of devices that have failed to download the new OS file.
     * @return int|null
    */
    public function getTotalFailedDownload(): ?int {
        return $this->totalFailedDownload;
    }

    /**
     * Gets the totalFailedInstall property value. An integer that indicates the total number of devices that have failed to install the new OS file.
     * @return int|null
    */
    public function getTotalFailedInstall(): ?int {
        return $this->totalFailedInstall;
    }

    /**
     * Gets the totalScheduled property value. An integer that indicates the total number of devices that received the json and are scheduled.
     * @return int|null
    */
    public function getTotalScheduled(): ?int {
        return $this->totalScheduled;
    }

    /**
     * Gets the totalSucceededInstall property value. An integer that indicates the total number of devices where installation was successful.
     * @return int|null
    */
    public function getTotalSucceededInstall(): ?int {
        return $this->totalSucceededInstall;
    }

    /**
     * Gets the totalUnknown property value. An integer that indicates the total number of devices where no deployment status or end state has not received, even after the scheduled end date was reached.
     * @return int|null
    */
    public function getTotalUnknown(): ?int {
        return $this->totalUnknown;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('cancelRequested', $this->cancelRequested);
        $writer->writeDateTimeValue('completeOrCanceledDateTime', $this->completeOrCanceledDateTime);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeIntegerValue('totalAwaitingInstall', $this->totalAwaitingInstall);
        $writer->writeIntegerValue('totalCanceled', $this->totalCanceled);
        $writer->writeIntegerValue('totalCreated', $this->totalCreated);
        $writer->writeIntegerValue('totalDevices', $this->totalDevices);
        $writer->writeIntegerValue('totalDownloading', $this->totalDownloading);
        $writer->writeIntegerValue('totalFailedDownload', $this->totalFailedDownload);
        $writer->writeIntegerValue('totalFailedInstall', $this->totalFailedInstall);
        $writer->writeIntegerValue('totalScheduled', $this->totalScheduled);
        $writer->writeIntegerValue('totalSucceededInstall', $this->totalSucceededInstall);
        $writer->writeIntegerValue('totalUnknown', $this->totalUnknown);
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
     * Sets the cancelRequested property value. A boolean that indicates if a cancellation was requested on the deployment. NOTE: A cancellation request does not guarantee that the deployment was canceled.
     *  @param bool|null $value Value to set for the cancelRequested property.
    */
    public function setCancelRequested(?bool $value ): void {
        $this->cancelRequested = $value;
    }

    /**
     * Sets the completeOrCanceledDateTime property value. The date and time when this deployment was completed or canceled. The actual date time is determined by the value of state. If the state is canceled, this property holds the cancellation date/time. If the the state is completed, this property holds the completion date/time. If the deployment is not completed before the deployment end date, then completed date/time and end date/time are the same. This is always in the deployment timezone. Note: An installation that is in progress can continue past the deployment end date.
     *  @param DateTime|null $value Value to set for the completeOrCanceledDateTime property.
    */
    public function setCompleteOrCanceledDateTime(?DateTime $value ): void {
        $this->completeOrCanceledDateTime = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. Date and time when the deployment status was updated from Zebra
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the state property value. See zebraFotaDeploymentState enum for possible values. Possible values are: pendingCreation, createFailed, created, inProgress, completed, pendingCancel, canceled, unknownFutureValue.
     *  @param ZebraFotaDeploymentState|null $value Value to set for the state property.
    */
    public function setState(?ZebraFotaDeploymentState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the totalAwaitingInstall property value. An integer that indicates the total number of devices where installation was successful.
     *  @param int|null $value Value to set for the totalAwaitingInstall property.
    */
    public function setTotalAwaitingInstall(?int $value ): void {
        $this->totalAwaitingInstall = $value;
    }

    /**
     * Sets the totalCanceled property value. An integer that indicates the total number of devices where installation was canceled.
     *  @param int|null $value Value to set for the totalCanceled property.
    */
    public function setTotalCanceled(?int $value ): void {
        $this->totalCanceled = $value;
    }

    /**
     * Sets the totalCreated property value. An integer that indicates the total number of devices that have a job in the CREATED state. Typically indicates jobs that did not reach the devices.
     *  @param int|null $value Value to set for the totalCreated property.
    */
    public function setTotalCreated(?int $value ): void {
        $this->totalCreated = $value;
    }

    /**
     * Sets the totalDevices property value. An integer that indicates the total number of devices in the deployment.
     *  @param int|null $value Value to set for the totalDevices property.
    */
    public function setTotalDevices(?int $value ): void {
        $this->totalDevices = $value;
    }

    /**
     * Sets the totalDownloading property value. An integer that indicates the total number of devices where installation was successful.
     *  @param int|null $value Value to set for the totalDownloading property.
    */
    public function setTotalDownloading(?int $value ): void {
        $this->totalDownloading = $value;
    }

    /**
     * Sets the totalFailedDownload property value. An integer that indicates the total number of devices that have failed to download the new OS file.
     *  @param int|null $value Value to set for the totalFailedDownload property.
    */
    public function setTotalFailedDownload(?int $value ): void {
        $this->totalFailedDownload = $value;
    }

    /**
     * Sets the totalFailedInstall property value. An integer that indicates the total number of devices that have failed to install the new OS file.
     *  @param int|null $value Value to set for the totalFailedInstall property.
    */
    public function setTotalFailedInstall(?int $value ): void {
        $this->totalFailedInstall = $value;
    }

    /**
     * Sets the totalScheduled property value. An integer that indicates the total number of devices that received the json and are scheduled.
     *  @param int|null $value Value to set for the totalScheduled property.
    */
    public function setTotalScheduled(?int $value ): void {
        $this->totalScheduled = $value;
    }

    /**
     * Sets the totalSucceededInstall property value. An integer that indicates the total number of devices where installation was successful.
     *  @param int|null $value Value to set for the totalSucceededInstall property.
    */
    public function setTotalSucceededInstall(?int $value ): void {
        $this->totalSucceededInstall = $value;
    }

    /**
     * Sets the totalUnknown property value. An integer that indicates the total number of devices where no deployment status or end state has not received, even after the scheduled end date was reached.
     *  @param int|null $value Value to set for the totalUnknown property.
    */
    public function setTotalUnknown(?int $value ): void {
        $this->totalUnknown = $value;
    }

}
