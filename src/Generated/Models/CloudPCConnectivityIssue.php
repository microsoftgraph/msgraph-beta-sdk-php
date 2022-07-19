<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPCConnectivityIssue extends Entity implements Parsable 
{
    /**
     * @var string|null $deviceId The Intune DeviceId of the device the connection is associated with.
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $errorCode The error code of the connectivity issue.
    */
    private ?string $errorCode = null;
    
    /**
     * @var DateTime|null $errorDateTime The time that the connection initiated. The time is shown in ISO 8601 format and Coordinated Universal Time (UTC) time.
    */
    private ?DateTime $errorDateTime = null;
    
    /**
     * @var string|null $errorDescription The detailed description of what went wrong.
    */
    private ?string $errorDescription = null;
    
    /**
     * @var string|null $recommendedAction The recommended action to fix the corresponding error.
    */
    private ?string $recommendedAction = null;
    
    /**
     * @var string|null $userId The unique id of user who initialize the connection.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new cloudPCConnectivityIssue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPCConnectivityIssue');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPCConnectivityIssue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPCConnectivityIssue {
        return new CloudPCConnectivityIssue();
    }

    /**
     * Gets the deviceId property value. The Intune DeviceId of the device the connection is associated with.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the errorCode property value. The error code of the connectivity issue.
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->errorCode;
    }

    /**
     * Gets the errorDateTime property value. The time that the connection initiated. The time is shown in ISO 8601 format and Coordinated Universal Time (UTC) time.
     * @return DateTime|null
    */
    public function getErrorDateTime(): ?DateTime {
        return $this->errorDateTime;
    }

    /**
     * Gets the errorDescription property value. The detailed description of what went wrong.
     * @return string|null
    */
    public function getErrorDescription(): ?string {
        return $this->errorDescription;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getStringValue()); },
            'errorDateTime' => function (ParseNode $n) use ($o) { $o->setErrorDateTime($n->getDateTimeValue()); },
            'errorDescription' => function (ParseNode $n) use ($o) { $o->setErrorDescription($n->getStringValue()); },
            'recommendedAction' => function (ParseNode $n) use ($o) { $o->setRecommendedAction($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the recommendedAction property value. The recommended action to fix the corresponding error.
     * @return string|null
    */
    public function getRecommendedAction(): ?string {
        return $this->recommendedAction;
    }

    /**
     * Gets the userId property value. The unique id of user who initialize the connection.
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
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('errorCode', $this->errorCode);
        $writer->writeDateTimeValue('errorDateTime', $this->errorDateTime);
        $writer->writeStringValue('errorDescription', $this->errorDescription);
        $writer->writeStringValue('recommendedAction', $this->recommendedAction);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the deviceId property value. The Intune DeviceId of the device the connection is associated with.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the errorCode property value. The error code of the connectivity issue.
     *  @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the errorDateTime property value. The time that the connection initiated. The time is shown in ISO 8601 format and Coordinated Universal Time (UTC) time.
     *  @param DateTime|null $value Value to set for the errorDateTime property.
    */
    public function setErrorDateTime(?DateTime $value ): void {
        $this->errorDateTime = $value;
    }

    /**
     * Sets the errorDescription property value. The detailed description of what went wrong.
     *  @param string|null $value Value to set for the errorDescription property.
    */
    public function setErrorDescription(?string $value ): void {
        $this->errorDescription = $value;
    }

    /**
     * Sets the recommendedAction property value. The recommended action to fix the corresponding error.
     *  @param string|null $value Value to set for the recommendedAction property.
    */
    public function setRecommendedAction(?string $value ): void {
        $this->recommendedAction = $value;
    }

    /**
     * Sets the userId property value. The unique id of user who initialize the connection.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
