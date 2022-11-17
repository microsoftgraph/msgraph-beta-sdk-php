<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPCConnectivityIssue extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the errorCode property value. The error code of the connectivity issue.
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->getBackingStore()->get('errorCode');
    }

    /**
     * Gets the errorDateTime property value. The time that the connection initiated. The time is shown in ISO 8601 format and Coordinated Universal Time (UTC) time.
     * @return DateTime|null
    */
    public function getErrorDateTime(): ?DateTime {
        return $this->getBackingStore()->get('errorDateTime');
    }

    /**
     * Gets the errorDescription property value. The detailed description of what went wrong.
     * @return string|null
    */
    public function getErrorDescription(): ?string {
        return $this->getBackingStore()->get('errorDescription');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'errorDateTime' => fn(ParseNode $n) => $o->setErrorDateTime($n->getDateTimeValue()),
            'errorDescription' => fn(ParseNode $n) => $o->setErrorDescription($n->getStringValue()),
            'recommendedAction' => fn(ParseNode $n) => $o->setRecommendedAction($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the recommendedAction property value. The recommended action to fix the corresponding error.
     * @return string|null
    */
    public function getRecommendedAction(): ?string {
        return $this->getBackingStore()->get('recommendedAction');
    }

    /**
     * Gets the userId property value. The unique id of user who initialize the connection.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeDateTimeValue('errorDateTime', $this->getErrorDateTime());
        $writer->writeStringValue('errorDescription', $this->getErrorDescription());
        $writer->writeStringValue('recommendedAction', $this->getRecommendedAction());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the deviceId property value. The Intune DeviceId of the device the connection is associated with.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the errorCode property value. The error code of the connectivity issue.
     *  @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the errorDateTime property value. The time that the connection initiated. The time is shown in ISO 8601 format and Coordinated Universal Time (UTC) time.
     *  @param DateTime|null $value Value to set for the errorDateTime property.
    */
    public function setErrorDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('errorDateTime', $value);
    }

    /**
     * Sets the errorDescription property value. The detailed description of what went wrong.
     *  @param string|null $value Value to set for the errorDescription property.
    */
    public function setErrorDescription(?string $value): void {
        $this->getBackingStore()->set('errorDescription', $value);
    }

    /**
     * Sets the recommendedAction property value. The recommended action to fix the corresponding error.
     *  @param string|null $value Value to set for the recommendedAction property.
    */
    public function setRecommendedAction(?string $value): void {
        $this->getBackingStore()->set('recommendedAction', $value);
    }

    /**
     * Sets the userId property value. The unique id of user who initialize the connection.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
