<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties for the deployment state of a WindowsDefenderApplicationControl supplemental policy for a device.
*/
class WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new windowsDefenderApplicationControlSupplementalPolicyDeploymentStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus {
        return new WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus();
    }

    /**
     * Gets the deploymentStatus property value. Enum values for the various WindowsDefenderApplicationControl supplemental policy deployment statuses.
     * @return WindowsDefenderApplicationControlSupplementalPolicyStatuses|null
    */
    public function getDeploymentStatus(): ?WindowsDefenderApplicationControlSupplementalPolicyStatuses {
        $val = $this->getBackingStore()->get('deploymentStatus');
        if (is_null($val) || $val instanceof WindowsDefenderApplicationControlSupplementalPolicyStatuses) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentStatus'");
    }

    /**
     * Gets the deviceId property value. Device ID.
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
     * Gets the deviceName property value. Device name.
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
            'deploymentStatus' => fn(ParseNode $n) => $o->setDeploymentStatus($n->getEnumValue(WindowsDefenderApplicationControlSupplementalPolicyStatuses::class)),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'lastSyncDateTime' => fn(ParseNode $n) => $o->setLastSyncDateTime($n->getDateTimeValue()),
            'osDescription' => fn(ParseNode $n) => $o->setOsDescription($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getObjectValue([WindowsDefenderApplicationControlSupplementalPolicy::class, 'createFromDiscriminatorValue'])),
            'policyVersion' => fn(ParseNode $n) => $o->setPolicyVersion($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastSyncDateTime property value. Last sync date time.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSyncDateTime'");
    }

    /**
     * Gets the osDescription property value. Windows OS Version Description.
     * @return string|null
    */
    public function getOsDescription(): ?string {
        $val = $this->getBackingStore()->get('osDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osDescription'");
    }

    /**
     * Gets the osVersion property value. Windows OS Version.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        $val = $this->getBackingStore()->get('osVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersion'");
    }

    /**
     * Gets the policy property value. The navigation link to the WindowsDefenderApplicationControl supplemental policy.
     * @return WindowsDefenderApplicationControlSupplementalPolicy|null
    */
    public function getPolicy(): ?WindowsDefenderApplicationControlSupplementalPolicy {
        $val = $this->getBackingStore()->get('policy');
        if (is_null($val) || $val instanceof WindowsDefenderApplicationControlSupplementalPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policy'");
    }

    /**
     * Gets the policyVersion property value. Human readable version of the WindowsDefenderApplicationControl supplemental policy.
     * @return string|null
    */
    public function getPolicyVersion(): ?string {
        $val = $this->getBackingStore()->get('policyVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyVersion'");
    }

    /**
     * Gets the userName property value. The name of the user of this device.
     * @return string|null
    */
    public function getUserName(): ?string {
        $val = $this->getBackingStore()->get('userName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userName'");
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('deploymentStatus', $this->getDeploymentStatus());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeDateTimeValue('lastSyncDateTime', $this->getLastSyncDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('osDescription', $this->getOsDescription());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeObjectValue('policy', $this->getPolicy());
        $writer->writeStringValue('policyVersion', $this->getPolicyVersion());
        $writer->writeStringValue('userName', $this->getUserName());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the deploymentStatus property value. Enum values for the various WindowsDefenderApplicationControl supplemental policy deployment statuses.
     * @param WindowsDefenderApplicationControlSupplementalPolicyStatuses|null $value Value to set for the deploymentStatus property.
    */
    public function setDeploymentStatus(?WindowsDefenderApplicationControlSupplementalPolicyStatuses $value): void {
        $this->getBackingStore()->set('deploymentStatus', $value);
    }

    /**
     * Sets the deviceId property value. Device ID.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. Device name.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the lastSyncDateTime property value. Last sync date time.
     * @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSyncDateTime', $value);
    }

    /**
     * Sets the osDescription property value. Windows OS Version Description.
     * @param string|null $value Value to set for the osDescription property.
    */
    public function setOsDescription(?string $value): void {
        $this->getBackingStore()->set('osDescription', $value);
    }

    /**
     * Sets the osVersion property value. Windows OS Version.
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the policy property value. The navigation link to the WindowsDefenderApplicationControl supplemental policy.
     * @param WindowsDefenderApplicationControlSupplementalPolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?WindowsDefenderApplicationControlSupplementalPolicy $value): void {
        $this->getBackingStore()->set('policy', $value);
    }

    /**
     * Sets the policyVersion property value. Human readable version of the WindowsDefenderApplicationControl supplemental policy.
     * @param string|null $value Value to set for the policyVersion property.
    */
    public function setPolicyVersion(?string $value): void {
        $this->getBackingStore()->set('policyVersion', $value);
    }

    /**
     * Sets the userName property value. The name of the user of this device.
     * @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
