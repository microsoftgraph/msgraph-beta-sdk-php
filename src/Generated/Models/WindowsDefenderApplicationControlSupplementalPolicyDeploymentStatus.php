<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDefenderApplicationControlSupplementalPolicyDeploymentStatus extends Entity implements Parsable 
{
    /**
     * @var WindowsDefenderApplicationControlSupplementalPolicyStatuses|null $deploymentStatus The deployment state of the policy. Possible values are: unknown, success, tokenError, notAuthorizedByToken, policyNotFound.
    */
    private ?WindowsDefenderApplicationControlSupplementalPolicyStatuses $deploymentStatus = null;
    
    /**
     * @var string|null $deviceId Device ID.
    */
    private ?string $deviceId = null;
    
    /**
     * @var string|null $deviceName Device name.
    */
    private ?string $deviceName = null;
    
    /**
     * @var DateTime|null $lastSyncDateTime Last sync date time.
    */
    private ?DateTime $lastSyncDateTime = null;
    
    /**
     * @var string|null $osDescription Windows OS Version Description.
    */
    private ?string $osDescription = null;
    
    /**
     * @var string|null $osVersion Windows OS Version.
    */
    private ?string $osVersion = null;
    
    /**
     * @var WindowsDefenderApplicationControlSupplementalPolicy|null $policy The navigation link to the WindowsDefenderApplicationControl supplemental policy.
    */
    private ?WindowsDefenderApplicationControlSupplementalPolicy $policy = null;
    
    /**
     * @var string|null $policyVersion Human readable version of the WindowsDefenderApplicationControl supplemental policy.
    */
    private ?string $policyVersion = null;
    
    /**
     * @var string|null $userName The name of the user of this device.
    */
    private ?string $userName = null;
    
    /**
     * @var string|null $userPrincipalName User Principal Name.
    */
    private ?string $userPrincipalName = null;
    
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
     * Gets the deploymentStatus property value. The deployment state of the policy. Possible values are: unknown, success, tokenError, notAuthorizedByToken, policyNotFound.
     * @return WindowsDefenderApplicationControlSupplementalPolicyStatuses|null
    */
    public function getDeploymentStatus(): ?WindowsDefenderApplicationControlSupplementalPolicyStatuses {
        return $this->deploymentStatus;
    }

    /**
     * Gets the deviceId property value. Device ID.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the deviceName property value. Device name.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deploymentStatus' => function (ParseNode $n) use ($o) { $o->setDeploymentStatus($n->getEnumValue(WindowsDefenderApplicationControlSupplementalPolicyStatuses::class)); },
            'deviceId' => function (ParseNode $n) use ($o) { $o->setDeviceId($n->getStringValue()); },
            'deviceName' => function (ParseNode $n) use ($o) { $o->setDeviceName($n->getStringValue()); },
            'lastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastSyncDateTime($n->getDateTimeValue()); },
            'osDescription' => function (ParseNode $n) use ($o) { $o->setOsDescription($n->getStringValue()); },
            'osVersion' => function (ParseNode $n) use ($o) { $o->setOsVersion($n->getStringValue()); },
            'policy' => function (ParseNode $n) use ($o) { $o->setPolicy($n->getObjectValue(array(WindowsDefenderApplicationControlSupplementalPolicy::class, 'createFromDiscriminatorValue'))); },
            'policyVersion' => function (ParseNode $n) use ($o) { $o->setPolicyVersion($n->getStringValue()); },
            'userName' => function (ParseNode $n) use ($o) { $o->setUserName($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastSyncDateTime property value. Last sync date time.
     * @return DateTime|null
    */
    public function getLastSyncDateTime(): ?DateTime {
        return $this->lastSyncDateTime;
    }

    /**
     * Gets the osDescription property value. Windows OS Version Description.
     * @return string|null
    */
    public function getOsDescription(): ?string {
        return $this->osDescription;
    }

    /**
     * Gets the osVersion property value. Windows OS Version.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the policy property value. The navigation link to the WindowsDefenderApplicationControl supplemental policy.
     * @return WindowsDefenderApplicationControlSupplementalPolicy|null
    */
    public function getPolicy(): ?WindowsDefenderApplicationControlSupplementalPolicy {
        return $this->policy;
    }

    /**
     * Gets the policyVersion property value. Human readable version of the WindowsDefenderApplicationControl supplemental policy.
     * @return string|null
    */
    public function getPolicyVersion(): ?string {
        return $this->policyVersion;
    }

    /**
     * Gets the userName property value. The name of the user of this device.
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Gets the userPrincipalName property value. User Principal Name.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('deploymentStatus', $this->deploymentStatus);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeDateTimeValue('lastSyncDateTime', $this->lastSyncDateTime);
        $writer->writeStringValue('osDescription', $this->osDescription);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeObjectValue('policy', $this->policy);
        $writer->writeStringValue('policyVersion', $this->policyVersion);
        $writer->writeStringValue('userName', $this->userName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the deploymentStatus property value. The deployment state of the policy. Possible values are: unknown, success, tokenError, notAuthorizedByToken, policyNotFound.
     *  @param WindowsDefenderApplicationControlSupplementalPolicyStatuses|null $value Value to set for the deploymentStatus property.
    */
    public function setDeploymentStatus(?WindowsDefenderApplicationControlSupplementalPolicyStatuses $value ): void {
        $this->deploymentStatus = $value;
    }

    /**
     * Sets the deviceId property value. Device ID.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the deviceName property value. Device name.
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the lastSyncDateTime property value. Last sync date time.
     *  @param DateTime|null $value Value to set for the lastSyncDateTime property.
    */
    public function setLastSyncDateTime(?DateTime $value ): void {
        $this->lastSyncDateTime = $value;
    }

    /**
     * Sets the osDescription property value. Windows OS Version Description.
     *  @param string|null $value Value to set for the osDescription property.
    */
    public function setOsDescription(?string $value ): void {
        $this->osDescription = $value;
    }

    /**
     * Sets the osVersion property value. Windows OS Version.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the policy property value. The navigation link to the WindowsDefenderApplicationControl supplemental policy.
     *  @param WindowsDefenderApplicationControlSupplementalPolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?WindowsDefenderApplicationControlSupplementalPolicy $value ): void {
        $this->policy = $value;
    }

    /**
     * Sets the policyVersion property value. Human readable version of the WindowsDefenderApplicationControl supplemental policy.
     *  @param string|null $value Value to set for the policyVersion property.
    */
    public function setPolicyVersion(?string $value ): void {
        $this->policyVersion = $value;
    }

    /**
     * Sets the userName property value. The name of the user of this device.
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

    /**
     * Sets the userPrincipalName property value. User Principal Name.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
