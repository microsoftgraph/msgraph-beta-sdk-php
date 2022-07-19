<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOsVppAppRevokeLicensesActionResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var VppTokenActionFailureReason|null $actionFailureReason Possible types of reasons for an Apple Volume Purchase Program token action failure.
    */
    private ?VppTokenActionFailureReason $actionFailureReason = null;
    
    /**
     * @var string|null $actionName Action name
    */
    private ?string $actionName = null;
    
    /**
     * @var ActionState|null $actionState The actionState property
    */
    private ?ActionState $actionState = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $failedLicensesCount A count of the number of licenses for which revoke failed.
    */
    private ?int $failedLicensesCount = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime Time the action state was last updated
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var string|null $managedDeviceId DeviceId associated with the action.
    */
    private ?string $managedDeviceId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTime|null $startDateTime Time the action was initiated
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var int|null $totalLicensesCount A count of the number of licenses for which revoke was attempted.
    */
    private ?int $totalLicensesCount = null;
    
    /**
     * @var string|null $userId UserId associated with the action.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new macOsVppAppRevokeLicensesActionResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.macOsVppAppRevokeLicensesActionResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOsVppAppRevokeLicensesActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOsVppAppRevokeLicensesActionResult {
        return new MacOsVppAppRevokeLicensesActionResult();
    }

    /**
     * Gets the actionFailureReason property value. Possible types of reasons for an Apple Volume Purchase Program token action failure.
     * @return VppTokenActionFailureReason|null
    */
    public function getActionFailureReason(): ?VppTokenActionFailureReason {
        return $this->actionFailureReason;
    }

    /**
     * Gets the actionName property value. Action name
     * @return string|null
    */
    public function getActionName(): ?string {
        return $this->actionName;
    }

    /**
     * Gets the actionState property value. The actionState property
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
     * Gets the failedLicensesCount property value. A count of the number of licenses for which revoke failed.
     * @return int|null
    */
    public function getFailedLicensesCount(): ?int {
        return $this->failedLicensesCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionFailureReason' => function (ParseNode $n) use ($o) { $o->setActionFailureReason($n->getEnumValue(VppTokenActionFailureReason::class)); },
            'actionName' => function (ParseNode $n) use ($o) { $o->setActionName($n->getStringValue()); },
            'actionState' => function (ParseNode $n) use ($o) { $o->setActionState($n->getEnumValue(ActionState::class)); },
            'failedLicensesCount' => function (ParseNode $n) use ($o) { $o->setFailedLicensesCount($n->getIntegerValue()); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            'managedDeviceId' => function (ParseNode $n) use ($o) { $o->setManagedDeviceId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'totalLicensesCount' => function (ParseNode $n) use ($o) { $o->setTotalLicensesCount($n->getIntegerValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the lastUpdatedDateTime property value. Time the action state was last updated
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the managedDeviceId property value. DeviceId associated with the action.
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
     * Gets the startDateTime property value. Time the action was initiated
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the totalLicensesCount property value. A count of the number of licenses for which revoke was attempted.
     * @return int|null
    */
    public function getTotalLicensesCount(): ?int {
        return $this->totalLicensesCount;
    }

    /**
     * Gets the userId property value. UserId associated with the action.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('actionFailureReason', $this->actionFailureReason);
        $writer->writeStringValue('actionName', $this->actionName);
        $writer->writeEnumValue('actionState', $this->actionState);
        $writer->writeIntegerValue('failedLicensesCount', $this->failedLicensesCount);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeIntegerValue('totalLicensesCount', $this->totalLicensesCount);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionFailureReason property value. Possible types of reasons for an Apple Volume Purchase Program token action failure.
     *  @param VppTokenActionFailureReason|null $value Value to set for the actionFailureReason property.
    */
    public function setActionFailureReason(?VppTokenActionFailureReason $value ): void {
        $this->actionFailureReason = $value;
    }

    /**
     * Sets the actionName property value. Action name
     *  @param string|null $value Value to set for the actionName property.
    */
    public function setActionName(?string $value ): void {
        $this->actionName = $value;
    }

    /**
     * Sets the actionState property value. The actionState property
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
     * Sets the failedLicensesCount property value. A count of the number of licenses for which revoke failed.
     *  @param int|null $value Value to set for the failedLicensesCount property.
    */
    public function setFailedLicensesCount(?int $value ): void {
        $this->failedLicensesCount = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. Time the action state was last updated
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the managedDeviceId property value. DeviceId associated with the action.
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
     * Sets the startDateTime property value. Time the action was initiated
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the totalLicensesCount property value. A count of the number of licenses for which revoke was attempted.
     *  @param int|null $value Value to set for the totalLicensesCount property.
    */
    public function setTotalLicensesCount(?int $value ): void {
        $this->totalLicensesCount = $value;
    }

    /**
     * Sets the userId property value. UserId associated with the action.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
