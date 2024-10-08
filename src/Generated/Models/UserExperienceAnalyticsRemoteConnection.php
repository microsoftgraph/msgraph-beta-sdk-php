<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics remote connection entity. The report will be retired on December 31, 2024. You can start using the Cloud PC connection quality report now via https://go.microsoft.com/fwlink/?linkid=2283835.
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
     * @return UserExperienceAnalyticsRemoteConnection_cloudPcFailurePercentage|null
    */
    public function getCloudPcFailurePercentage(): ?UserExperienceAnalyticsRemoteConnection_cloudPcFailurePercentage {
        $val = $this->getBackingStore()->get('cloudPcFailurePercentage');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsRemoteConnection_cloudPcFailurePercentage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcFailurePercentage'");
    }

    /**
     * Gets the cloudPcRoundTripTime property value. The round tip time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsRemoteConnection_cloudPcRoundTripTime|null
    */
    public function getCloudPcRoundTripTime(): ?UserExperienceAnalyticsRemoteConnection_cloudPcRoundTripTime {
        $val = $this->getBackingStore()->get('cloudPcRoundTripTime');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsRemoteConnection_cloudPcRoundTripTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcRoundTripTime'");
    }

    /**
     * Gets the cloudPcSignInTime property value. The sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsRemoteConnection_cloudPcSignInTime|null
    */
    public function getCloudPcSignInTime(): ?UserExperienceAnalyticsRemoteConnection_cloudPcSignInTime {
        $val = $this->getBackingStore()->get('cloudPcSignInTime');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsRemoteConnection_cloudPcSignInTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudPcSignInTime'");
    }

    /**
     * Gets the coreBootTime property value. The core boot time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsRemoteConnection_coreBootTime|null
    */
    public function getCoreBootTime(): ?UserExperienceAnalyticsRemoteConnection_coreBootTime {
        $val = $this->getBackingStore()->get('coreBootTime');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsRemoteConnection_coreBootTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'coreBootTime'");
    }

    /**
     * Gets the coreSignInTime property value. The core sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsRemoteConnection_coreSignInTime|null
    */
    public function getCoreSignInTime(): ?UserExperienceAnalyticsRemoteConnection_coreSignInTime {
        $val = $this->getBackingStore()->get('coreSignInTime');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsRemoteConnection_coreSignInTime) {
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
            'cloudPcFailurePercentage' => fn(ParseNode $n) => $o->setCloudPcFailurePercentage($n->getObjectValue([UserExperienceAnalyticsRemoteConnection_cloudPcFailurePercentage::class, 'createFromDiscriminatorValue'])),
            'cloudPcRoundTripTime' => fn(ParseNode $n) => $o->setCloudPcRoundTripTime($n->getObjectValue([UserExperienceAnalyticsRemoteConnection_cloudPcRoundTripTime::class, 'createFromDiscriminatorValue'])),
            'cloudPcSignInTime' => fn(ParseNode $n) => $o->setCloudPcSignInTime($n->getObjectValue([UserExperienceAnalyticsRemoteConnection_cloudPcSignInTime::class, 'createFromDiscriminatorValue'])),
            'coreBootTime' => fn(ParseNode $n) => $o->setCoreBootTime($n->getObjectValue([UserExperienceAnalyticsRemoteConnection_coreBootTime::class, 'createFromDiscriminatorValue'])),
            'coreSignInTime' => fn(ParseNode $n) => $o->setCoreSignInTime($n->getObjectValue([UserExperienceAnalyticsRemoteConnection_coreSignInTime::class, 'createFromDiscriminatorValue'])),
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'remoteSignInTime' => fn(ParseNode $n) => $o->setRemoteSignInTime($n->getObjectValue([UserExperienceAnalyticsRemoteConnection_remoteSignInTime::class, 'createFromDiscriminatorValue'])),
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
     * @return UserExperienceAnalyticsRemoteConnection_remoteSignInTime|null
    */
    public function getRemoteSignInTime(): ?UserExperienceAnalyticsRemoteConnection_remoteSignInTime {
        $val = $this->getBackingStore()->get('remoteSignInTime');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsRemoteConnection_remoteSignInTime) {
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
        $writer->writeObjectValue('cloudPcFailurePercentage', $this->getCloudPcFailurePercentage());
        $writer->writeObjectValue('cloudPcRoundTripTime', $this->getCloudPcRoundTripTime());
        $writer->writeObjectValue('cloudPcSignInTime', $this->getCloudPcSignInTime());
        $writer->writeObjectValue('coreBootTime', $this->getCoreBootTime());
        $writer->writeObjectValue('coreSignInTime', $this->getCoreSignInTime());
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeObjectValue('remoteSignInTime', $this->getRemoteSignInTime());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeStringValue('virtualNetwork', $this->getVirtualNetwork());
    }

    /**
     * Sets the cloudPcFailurePercentage property value. The sign in failure percentage of Cloud PC Device. Valid values 0 to 100
     * @param UserExperienceAnalyticsRemoteConnection_cloudPcFailurePercentage|null $value Value to set for the cloudPcFailurePercentage property.
    */
    public function setCloudPcFailurePercentage(?UserExperienceAnalyticsRemoteConnection_cloudPcFailurePercentage $value): void {
        $this->getBackingStore()->set('cloudPcFailurePercentage', $value);
    }

    /**
     * Sets the cloudPcRoundTripTime property value. The round tip time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsRemoteConnection_cloudPcRoundTripTime|null $value Value to set for the cloudPcRoundTripTime property.
    */
    public function setCloudPcRoundTripTime(?UserExperienceAnalyticsRemoteConnection_cloudPcRoundTripTime $value): void {
        $this->getBackingStore()->set('cloudPcRoundTripTime', $value);
    }

    /**
     * Sets the cloudPcSignInTime property value. The sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsRemoteConnection_cloudPcSignInTime|null $value Value to set for the cloudPcSignInTime property.
    */
    public function setCloudPcSignInTime(?UserExperienceAnalyticsRemoteConnection_cloudPcSignInTime $value): void {
        $this->getBackingStore()->set('cloudPcSignInTime', $value);
    }

    /**
     * Sets the coreBootTime property value. The core boot time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsRemoteConnection_coreBootTime|null $value Value to set for the coreBootTime property.
    */
    public function setCoreBootTime(?UserExperienceAnalyticsRemoteConnection_coreBootTime $value): void {
        $this->getBackingStore()->set('coreBootTime', $value);
    }

    /**
     * Sets the coreSignInTime property value. The core sign in time of Cloud PC Device. Valid values 0 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsRemoteConnection_coreSignInTime|null $value Value to set for the coreSignInTime property.
    */
    public function setCoreSignInTime(?UserExperienceAnalyticsRemoteConnection_coreSignInTime $value): void {
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
     * @param UserExperienceAnalyticsRemoteConnection_remoteSignInTime|null $value Value to set for the remoteSignInTime property.
    */
    public function setRemoteSignInTime(?UserExperienceAnalyticsRemoteConnection_remoteSignInTime $value): void {
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
