<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var string|null $azureAdDeviceId A unique identifier assigned to a device by Azure Active Directory (Azure AD) when device is Azure AD-joined.
    */
    private ?string $azureAdDeviceId = null;
    
    /**
     * @var DefenderAvStatus|null $defenderAvStatus State of the Defender AntiMalware engine. The possible values are: notReporting, disabled, notUpdated, updated, unknown, notSupported, unknownFutureValue.
    */
    private ?DefenderAvStatus $defenderAvStatus = null;
    
    /**
     * @var string|null $deviceDnsName The fully qualified domain name (FQDN) for the device.
    */
    private ?string $deviceDnsName = null;
    
    /**
     * @var DateTime|null $firstSeenDateTime The date and time when the device was first seen.
    */
    private ?DateTime $firstSeenDateTime = null;
    
    /**
     * @var DeviceHealthStatus|null $healthStatus The health state of the device.The possible values are: active, inactive, impairedCommunication, noSensorData, noSensorDataImpairedCommunication, unknown, unknownFutureValue.
    */
    private ?DeviceHealthStatus $healthStatus = null;
    
    /**
     * @var array<LoggedOnUser>|null $loggedOnUsers Users that were logged on the machine during the time of the alert.
    */
    private ?array $loggedOnUsers = null;
    
    /**
     * @var string|null $mdeDeviceId A unique identifier assigned to a device by Microsoft Defender for Endpoint.
    */
    private ?string $mdeDeviceId = null;
    
    /**
     * @var OnboardingStatus|null $onboardingStatus The status of the machine onboarding to Microsoft Defender for Endpoint.The possible values are: insufficientInfo, onboarded, canBeOnboarded, unsupported, unknownFutureValue.
    */
    private ?OnboardingStatus $onboardingStatus = null;
    
    /**
     * @var int|null $osBuild The build version for the operating system the device is running.
    */
    private ?int $osBuild = null;
    
    /**
     * @var string|null $osPlatform The operating system platform the device is running.
    */
    private ?string $osPlatform = null;
    
    /**
     * @var int|null $rbacGroupId The ID of the role-based access control (RBAC) device group.
    */
    private ?int $rbacGroupId = null;
    
    /**
     * @var string|null $rbacGroupName The name of the RBAC device group.
    */
    private ?string $rbacGroupName = null;
    
    /**
     * @var DeviceRiskScore|null $riskScore Risk score as evaluated by Microsoft Defender for Endpoint. The possible values are: none, informational, low, medium, high, unknownFutureValue.
    */
    private ?DeviceRiskScore $riskScore = null;
    
    /**
     * @var string|null $version The version of the operating system platform.
    */
    private ?string $version = null;
    
    /**
     * @var VmMetadata|null $vmMetadata Metadata of the virtual machine (VM) on which Microsoft Defender for Endpoint is running.
    */
    private ?VmMetadata $vmMetadata = null;
    
    /**
     * Instantiates a new DeviceEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.deviceEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceEvidence {
        return new DeviceEvidence();
    }

    /**
     * Gets the azureAdDeviceId property value. A unique identifier assigned to a device by Azure Active Directory (Azure AD) when device is Azure AD-joined.
     * @return string|null
    */
    public function getAzureAdDeviceId(): ?string {
        return $this->azureAdDeviceId;
    }

    /**
     * Gets the defenderAvStatus property value. State of the Defender AntiMalware engine. The possible values are: notReporting, disabled, notUpdated, updated, unknown, notSupported, unknownFutureValue.
     * @return DefenderAvStatus|null
    */
    public function getDefenderAvStatus(): ?DefenderAvStatus {
        return $this->defenderAvStatus;
    }

    /**
     * Gets the deviceDnsName property value. The fully qualified domain name (FQDN) for the device.
     * @return string|null
    */
    public function getDeviceDnsName(): ?string {
        return $this->deviceDnsName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureAdDeviceId' => fn(ParseNode $n) => $o->setAzureAdDeviceId($n->getStringValue()),
            'defenderAvStatus' => fn(ParseNode $n) => $o->setDefenderAvStatus($n->getEnumValue(DefenderAvStatus::class)),
            'deviceDnsName' => fn(ParseNode $n) => $o->setDeviceDnsName($n->getStringValue()),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(DeviceHealthStatus::class)),
            'loggedOnUsers' => fn(ParseNode $n) => $o->setLoggedOnUsers($n->getCollectionOfObjectValues([LoggedOnUser::class, 'createFromDiscriminatorValue'])),
            'mdeDeviceId' => fn(ParseNode $n) => $o->setMdeDeviceId($n->getStringValue()),
            'onboardingStatus' => fn(ParseNode $n) => $o->setOnboardingStatus($n->getEnumValue(OnboardingStatus::class)),
            'osBuild' => fn(ParseNode $n) => $o->setOsBuild($n->getIntegerValue()),
            'osPlatform' => fn(ParseNode $n) => $o->setOsPlatform($n->getStringValue()),
            'rbacGroupId' => fn(ParseNode $n) => $o->setRbacGroupId($n->getIntegerValue()),
            'rbacGroupName' => fn(ParseNode $n) => $o->setRbacGroupName($n->getStringValue()),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getEnumValue(DeviceRiskScore::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
            'vmMetadata' => fn(ParseNode $n) => $o->setVmMetadata($n->getObjectValue([VmMetadata::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The date and time when the device was first seen.
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        return $this->firstSeenDateTime;
    }

    /**
     * Gets the healthStatus property value. The health state of the device.The possible values are: active, inactive, impairedCommunication, noSensorData, noSensorDataImpairedCommunication, unknown, unknownFutureValue.
     * @return DeviceHealthStatus|null
    */
    public function getHealthStatus(): ?DeviceHealthStatus {
        return $this->healthStatus;
    }

    /**
     * Gets the loggedOnUsers property value. Users that were logged on the machine during the time of the alert.
     * @return array<LoggedOnUser>|null
    */
    public function getLoggedOnUsers(): ?array {
        return $this->loggedOnUsers;
    }

    /**
     * Gets the mdeDeviceId property value. A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     * @return string|null
    */
    public function getMdeDeviceId(): ?string {
        return $this->mdeDeviceId;
    }

    /**
     * Gets the onboardingStatus property value. The status of the machine onboarding to Microsoft Defender for Endpoint.The possible values are: insufficientInfo, onboarded, canBeOnboarded, unsupported, unknownFutureValue.
     * @return OnboardingStatus|null
    */
    public function getOnboardingStatus(): ?OnboardingStatus {
        return $this->onboardingStatus;
    }

    /**
     * Gets the osBuild property value. The build version for the operating system the device is running.
     * @return int|null
    */
    public function getOsBuild(): ?int {
        return $this->osBuild;
    }

    /**
     * Gets the osPlatform property value. The operating system platform the device is running.
     * @return string|null
    */
    public function getOsPlatform(): ?string {
        return $this->osPlatform;
    }

    /**
     * Gets the rbacGroupId property value. The ID of the role-based access control (RBAC) device group.
     * @return int|null
    */
    public function getRbacGroupId(): ?int {
        return $this->rbacGroupId;
    }

    /**
     * Gets the rbacGroupName property value. The name of the RBAC device group.
     * @return string|null
    */
    public function getRbacGroupName(): ?string {
        return $this->rbacGroupName;
    }

    /**
     * Gets the riskScore property value. Risk score as evaluated by Microsoft Defender for Endpoint. The possible values are: none, informational, low, medium, high, unknownFutureValue.
     * @return DeviceRiskScore|null
    */
    public function getRiskScore(): ?DeviceRiskScore {
        return $this->riskScore;
    }

    /**
     * Gets the version property value. The version of the operating system platform.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Gets the vmMetadata property value. Metadata of the virtual machine (VM) on which Microsoft Defender for Endpoint is running.
     * @return VmMetadata|null
    */
    public function getVmMetadata(): ?VmMetadata {
        return $this->vmMetadata;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureAdDeviceId', $this->azureAdDeviceId);
        $writer->writeEnumValue('defenderAvStatus', $this->defenderAvStatus);
        $writer->writeStringValue('deviceDnsName', $this->deviceDnsName);
        $writer->writeDateTimeValue('firstSeenDateTime', $this->firstSeenDateTime);
        $writer->writeEnumValue('healthStatus', $this->healthStatus);
        $writer->writeCollectionOfObjectValues('loggedOnUsers', $this->loggedOnUsers);
        $writer->writeStringValue('mdeDeviceId', $this->mdeDeviceId);
        $writer->writeEnumValue('onboardingStatus', $this->onboardingStatus);
        $writer->writeIntegerValue('osBuild', $this->osBuild);
        $writer->writeStringValue('osPlatform', $this->osPlatform);
        $writer->writeIntegerValue('rbacGroupId', $this->rbacGroupId);
        $writer->writeStringValue('rbacGroupName', $this->rbacGroupName);
        $writer->writeEnumValue('riskScore', $this->riskScore);
        $writer->writeStringValue('version', $this->version);
        $writer->writeObjectValue('vmMetadata', $this->vmMetadata);
    }

    /**
     * Sets the azureAdDeviceId property value. A unique identifier assigned to a device by Azure Active Directory (Azure AD) when device is Azure AD-joined.
     *  @param string|null $value Value to set for the azureAdDeviceId property.
    */
    public function setAzureAdDeviceId(?string $value ): void {
        $this->azureAdDeviceId = $value;
    }

    /**
     * Sets the defenderAvStatus property value. State of the Defender AntiMalware engine. The possible values are: notReporting, disabled, notUpdated, updated, unknown, notSupported, unknownFutureValue.
     *  @param DefenderAvStatus|null $value Value to set for the defenderAvStatus property.
    */
    public function setDefenderAvStatus(?DefenderAvStatus $value ): void {
        $this->defenderAvStatus = $value;
    }

    /**
     * Sets the deviceDnsName property value. The fully qualified domain name (FQDN) for the device.
     *  @param string|null $value Value to set for the deviceDnsName property.
    */
    public function setDeviceDnsName(?string $value ): void {
        $this->deviceDnsName = $value;
    }

    /**
     * Sets the firstSeenDateTime property value. The date and time when the device was first seen.
     *  @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value ): void {
        $this->firstSeenDateTime = $value;
    }

    /**
     * Sets the healthStatus property value. The health state of the device.The possible values are: active, inactive, impairedCommunication, noSensorData, noSensorDataImpairedCommunication, unknown, unknownFutureValue.
     *  @param DeviceHealthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?DeviceHealthStatus $value ): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the loggedOnUsers property value. Users that were logged on the machine during the time of the alert.
     *  @param array<LoggedOnUser>|null $value Value to set for the loggedOnUsers property.
    */
    public function setLoggedOnUsers(?array $value ): void {
        $this->loggedOnUsers = $value;
    }

    /**
     * Sets the mdeDeviceId property value. A unique identifier assigned to a device by Microsoft Defender for Endpoint.
     *  @param string|null $value Value to set for the mdeDeviceId property.
    */
    public function setMdeDeviceId(?string $value ): void {
        $this->mdeDeviceId = $value;
    }

    /**
     * Sets the onboardingStatus property value. The status of the machine onboarding to Microsoft Defender for Endpoint.The possible values are: insufficientInfo, onboarded, canBeOnboarded, unsupported, unknownFutureValue.
     *  @param OnboardingStatus|null $value Value to set for the onboardingStatus property.
    */
    public function setOnboardingStatus(?OnboardingStatus $value ): void {
        $this->onboardingStatus = $value;
    }

    /**
     * Sets the osBuild property value. The build version for the operating system the device is running.
     *  @param int|null $value Value to set for the osBuild property.
    */
    public function setOsBuild(?int $value ): void {
        $this->osBuild = $value;
    }

    /**
     * Sets the osPlatform property value. The operating system platform the device is running.
     *  @param string|null $value Value to set for the osPlatform property.
    */
    public function setOsPlatform(?string $value ): void {
        $this->osPlatform = $value;
    }

    /**
     * Sets the rbacGroupId property value. The ID of the role-based access control (RBAC) device group.
     *  @param int|null $value Value to set for the rbacGroupId property.
    */
    public function setRbacGroupId(?int $value ): void {
        $this->rbacGroupId = $value;
    }

    /**
     * Sets the rbacGroupName property value. The name of the RBAC device group.
     *  @param string|null $value Value to set for the rbacGroupName property.
    */
    public function setRbacGroupName(?string $value ): void {
        $this->rbacGroupName = $value;
    }

    /**
     * Sets the riskScore property value. Risk score as evaluated by Microsoft Defender for Endpoint. The possible values are: none, informational, low, medium, high, unknownFutureValue.
     *  @param DeviceRiskScore|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?DeviceRiskScore $value ): void {
        $this->riskScore = $value;
    }

    /**
     * Sets the version property value. The version of the operating system platform.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

    /**
     * Sets the vmMetadata property value. Metadata of the virtual machine (VM) on which Microsoft Defender for Endpoint is running.
     *  @param VmMetadata|null $value Value to set for the vmMetadata property.
    */
    public function setVmMetadata(?VmMetadata $value ): void {
        $this->vmMetadata = $value;
    }

}
