<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics remote connection entity. The report will be retired on December 31, 2024. You can start using the Cloud PC connection quality report now via https://learn.microsoft.com/windows-365/enterprise/report-cloud-pc-connection-quality.
*/
class UserExperienceAnalyticsRemoteConnection extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsRemoteConnection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsRemoteConnection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsRemoteConnection {
        return new UserExperienceAnalyticsRemoteConnection();
    }

    /**
     * Gets the cloudPcFailurePercentage property value. The sign in failure percentage of Cloud PC Device. Valid values 0 to 100
     * @return float|null
    */
    public function getCloudPcFailurePercentage(): ?float {
        $val = $this->getBackingStore()->get('cloudPcFailurePercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcFailurePercentage'");
    }

    /**
     * Gets the cloudPcRoundTripTime property value. The round tip time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudPcRoundTripTime(): ?float {
        $val = $this->getBackingStore()->get('cloudPcRoundTripTime');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcRoundTripTime'");
    }

    /**
     * Gets the cloudPcSignInTime property value. The sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudPcSignInTime(): ?float {
        $val = $this->getBackingStore()->get('cloudPcSignInTime');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcSignInTime'");
    }

    /**
     * Gets the coreBootTime property value. The core boot time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCoreBootTime(): ?float {
        $val = $this->getBackingStore()->get('coreBootTime');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'coreBootTime'");
    }

    /**
     * Gets the coreSignInTime property value. The core sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCoreSignInTime(): ?float {
        $val = $this->getBackingStore()->get('coreSignInTime');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'coreSignInTime'");
    }

    /**
     * Gets the deviceCount property value. The count of remote connection. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('deviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCount'");
    }

    /**
     * Gets the deviceId property value. The id of the device.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * Gets the deviceName property value. The name of the device.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudPcFailurePercentage' => fn(ParseNode $n) => $o->setCloudPcFailurePercentage($n->getFloatValue()),
            'cloudPcRoundTripTime' => fn(ParseNode $n) => $o->setCloudPcRoundTripTime($n->getFloatValue()),
            'cloudPcSignInTime' => fn(ParseNode $n) => $o->setCloudPcSignInTime($n->getFloatValue()),
            'coreBootTime' => fn(ParseNode $n) => $o->setCoreBootTime($n->getFloatValue()),
            'coreSignInTime' => fn(ParseNode $n) => $o->setCoreSignInTime($n->getFloatValue()),
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'remoteSignInTime' => fn(ParseNode $n) => $o->setRemoteSignInTime($n->getFloatValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'virtualNetwork' => fn(ParseNode $n) => $o->setVirtualNetwork($n->getStringValue()),
        ]);
    }

    /**
     * Gets the manufacturer property value. The user experience analytics manufacturer.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        $val = $this->getBackingStore()->get('manufacturer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manufacturer'");
    }

    /**
     * Gets the model property value. The user experience analytics device model.
     * @return string|null
    */
    public function getModel(): ?string {
        $val = $this->getBackingStore()->get('model');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'model'");
    }

    /**
     * Gets the remoteSignInTime property value. The remote sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return float|null
    */
    public function getRemoteSignInTime(): ?float {
        $val = $this->getBackingStore()->get('remoteSignInTime');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remoteSignInTime'");
    }

    /**
     * Gets the userPrincipalName property value. The user experience analytics userPrincipalName.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Gets the virtualNetwork property value. The user experience analytics virtual network.
     * @return string|null
    */
    public function getVirtualNetwork(): ?string {
        $val = $this->getBackingStore()->get('virtualNetwork');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'virtualNetwork'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('cloudPcFailurePercentage', $this->getCloudPcFailurePercentage());
        $writer->writeFloatValue('cloudPcRoundTripTime', $this->getCloudPcRoundTripTime());
        $writer->writeFloatValue('cloudPcSignInTime', $this->getCloudPcSignInTime());
        $writer->writeFloatValue('coreBootTime', $this->getCoreBootTime());
        $writer->writeFloatValue('coreSignInTime', $this->getCoreSignInTime());
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeFloatValue('remoteSignInTime', $this->getRemoteSignInTime());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeStringValue('virtualNetwork', $this->getVirtualNetwork());
    }

    /**
     * Sets the cloudPcFailurePercentage property value. The sign in failure percentage of Cloud PC Device. Valid values 0 to 100
     * @param float|null $value Value to set for the cloudPcFailurePercentage property.
    */
    public function setCloudPcFailurePercentage(?float $value): void {
        $this->getBackingStore()->set('cloudPcFailurePercentage', $value);
    }

    /**
     * Sets the cloudPcRoundTripTime property value. The round tip time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @param float|null $value Value to set for the cloudPcRoundTripTime property.
    */
    public function setCloudPcRoundTripTime(?float $value): void {
        $this->getBackingStore()->set('cloudPcRoundTripTime', $value);
    }

    /**
     * Sets the cloudPcSignInTime property value. The sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @param float|null $value Value to set for the cloudPcSignInTime property.
    */
    public function setCloudPcSignInTime(?float $value): void {
        $this->getBackingStore()->set('cloudPcSignInTime', $value);
    }

    /**
     * Sets the coreBootTime property value. The core boot time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @param float|null $value Value to set for the coreBootTime property.
    */
    public function setCoreBootTime(?float $value): void {
        $this->getBackingStore()->set('coreBootTime', $value);
    }

    /**
     * Sets the coreSignInTime property value. The core sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @param float|null $value Value to set for the coreSignInTime property.
    */
    public function setCoreSignInTime(?float $value): void {
        $this->getBackingStore()->set('coreSignInTime', $value);
    }

    /**
     * Sets the deviceCount property value. The count of remote connection. Valid values 0 to 2147483647
     * @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

    /**
     * Sets the deviceId property value. The id of the device.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. The name of the device.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the manufacturer property value. The user experience analytics manufacturer.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. The user experience analytics device model.
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the remoteSignInTime property value. The remote sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @param float|null $value Value to set for the remoteSignInTime property.
    */
    public function setRemoteSignInTime(?float $value): void {
        $this->getBackingStore()->set('remoteSignInTime', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user experience analytics userPrincipalName.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the virtualNetwork property value. The user experience analytics virtual network.
     * @param string|null $value Value to set for the virtualNetwork property.
    */
    public function setVirtualNetwork(?string $value): void {
        $this->getBackingStore()->set('virtualNetwork', $value);
    }

}
