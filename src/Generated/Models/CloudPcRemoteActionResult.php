<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcRemoteActionResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionName The specified action. Supported values in the Microsoft Endpoint Manager portal are: Reprovision, Resize, Restore. Supported values in enterprise Cloud PC devices are: Reboot, Rename, Reprovision, Troubleshoot.
    */
    private ?string $actionName = null;
    
    /**
     * @var ActionState|null $actionState State of the action. Possible values are: None, pending, canceled, active, done, failed, notSupported. Read-only.
    */
    private ?ActionState $actionState = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $cloudPcId The ID of the Cloud PC device on which the remote action is performed. Read-only.
    */
    private ?string $cloudPcId = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime Last update time for action. The Timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var string|null $managedDeviceId The ID of the Intune managed device on which the remote action is performed. Read-only.
    */
    private ?string $managedDeviceId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTime|null $startDateTime Time the action was initiated. The Timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var CloudPcStatusDetails|null $statusDetails The details of the Cloud PC status.
    */
    private ?CloudPcStatusDetails $statusDetails = null;
    
    /**
     * Instantiates a new cloudPcRemoteActionResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.cloudPcRemoteActionResult');
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
        return $this->actionName;
    }

    /**
     * Gets the actionState property value. State of the action. Possible values are: None, pending, canceled, active, done, failed, notSupported. Read-only.
     * @return ActionState|null
    */
    public function getActionState(): ?ActionState {
        return $this->actionState;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the cloudPcId property value. The ID of the Cloud PC device on which the remote action is performed. Read-only.
     * @return string|null
    */
    public function getCloudPcId(): ?string {
        return $this->cloudPcId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionName' => function (ParseNode $n) use ($o) { $o->setActionName($n->getStringValue()); },
            'actionState' => function (ParseNode $n) use ($o) { $o->setActionState($n->getEnumValue(ActionState::class)); },
            'cloudPcId' => function (ParseNode $n) use ($o) { $o->setCloudPcId($n->getStringValue()); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            'managedDeviceId' => function (ParseNode $n) use ($o) { $o->setManagedDeviceId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'statusDetails' => function (ParseNode $n) use ($o) { $o->setStatusDetails($n->getObjectValue(array(CloudPcStatusDetails::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the lastUpdatedDateTime property value. Last update time for action. The Timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the managedDeviceId property value. The ID of the Intune managed device on which the remote action is performed. Read-only.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the startDateTime property value. Time the action was initiated. The Timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the statusDetails property value. The details of the Cloud PC status.
     * @return CloudPcStatusDetails|null
    */
    public function getStatusDetails(): ?CloudPcStatusDetails {
        return $this->statusDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionName', $this->actionName);
        $writer->writeEnumValue('actionState', $this->actionState);
        $writer->writeStringValue('cloudPcId', $this->cloudPcId);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeObjectValue('statusDetails', $this->statusDetails);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionName property value. The specified action. Supported values in the Microsoft Endpoint Manager portal are: Reprovision, Resize, Restore. Supported values in enterprise Cloud PC devices are: Reboot, Rename, Reprovision, Troubleshoot.
     *  @param string|null $value Value to set for the actionName property.
    */
    public function setActionName(?string $value ): void {
        $this->actionName = $value;
    }

    /**
     * Sets the actionState property value. State of the action. Possible values are: None, pending, canceled, active, done, failed, notSupported. Read-only.
     *  @param ActionState|null $value Value to set for the actionState property.
    */
    public function setActionState(?ActionState $value ): void {
        $this->actionState = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the cloudPcId property value. The ID of the Cloud PC device on which the remote action is performed. Read-only.
     *  @param string|null $value Value to set for the cloudPcId property.
    */
    public function setCloudPcId(?string $value ): void {
        $this->cloudPcId = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. Last update time for action. The Timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the managedDeviceId property value. The ID of the Intune managed device on which the remote action is performed. Read-only.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the startDateTime property value. Time the action was initiated. The Timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as '2014-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the statusDetails property value. The details of the Cloud PC status.
     *  @param CloudPcStatusDetails|null $value Value to set for the statusDetails property.
    */
    public function setStatusDetails(?CloudPcStatusDetails $value ): void {
        $this->statusDetails = $value;
    }

}
