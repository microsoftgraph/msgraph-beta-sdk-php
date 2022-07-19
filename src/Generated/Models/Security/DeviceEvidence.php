<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var string|null $azureAdDeviceId The azureAdDeviceId property
    */
    private ?string $azureAdDeviceId = null;
    
    /**
     * @var DefenderAvStatus|null $defenderAvStatus The defenderAvStatus property
    */
    private ?DefenderAvStatus $defenderAvStatus = null;
    
    /**
     * @var string|null $deviceDnsName The deviceDnsName property
    */
    private ?string $deviceDnsName = null;
    
    /**
     * @var DateTime|null $firstSeenDateTime The firstSeenDateTime property
    */
    private ?DateTime $firstSeenDateTime = null;
    
    /**
     * @var DeviceHealthStatus|null $healthStatus The healthStatus property
    */
    private ?DeviceHealthStatus $healthStatus = null;
    
    /**
     * @var array<LoggedOnUser>|null $loggedOnUsers The loggedOnUsers property
    */
    private ?array $loggedOnUsers = null;
    
    /**
     * @var string|null $mdeDeviceId The mdeDeviceId property
    */
    private ?string $mdeDeviceId = null;
    
    /**
     * @var OnboardingStatus|null $onboardingStatus The onboardingStatus property
    */
    private ?OnboardingStatus $onboardingStatus = null;
    
    /**
     * @var int|null $osBuild The osBuild property
    */
    private ?int $osBuild = null;
    
    /**
     * @var string|null $osPlatform The osPlatform property
    */
    private ?string $osPlatform = null;
    
    /**
     * @var int|null $rbacGroupId The rbacGroupId property
    */
    private ?int $rbacGroupId = null;
    
    /**
     * @var string|null $rbacGroupName The rbacGroupName property
    */
    private ?string $rbacGroupName = null;
    
    /**
     * @var DeviceRiskScore|null $riskScore The riskScore property
    */
    private ?DeviceRiskScore $riskScore = null;
    
    /**
     * @var string|null $version The version property
    */
    private ?string $version = null;
    
    /**
     * @var VmMetadata|null $vmMetadata The vmMetadata property
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
     * Gets the azureAdDeviceId property value. The azureAdDeviceId property
     * @return string|null
    */
    public function getAzureAdDeviceId(): ?string {
        return $this->azureAdDeviceId;
    }

    /**
     * Gets the defenderAvStatus property value. The defenderAvStatus property
     * @return DefenderAvStatus|null
    */
    public function getDefenderAvStatus(): ?DefenderAvStatus {
        return $this->defenderAvStatus;
    }

    /**
     * Gets the deviceDnsName property value. The deviceDnsName property
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
            'azureAdDeviceId' => function (ParseNode $n) use ($o) { $o->setAzureAdDeviceId($n->getStringValue()); },
            'defenderAvStatus' => function (ParseNode $n) use ($o) { $o->setDefenderAvStatus($n->getEnumValue(DefenderAvStatus::class)); },
            'deviceDnsName' => function (ParseNode $n) use ($o) { $o->setDeviceDnsName($n->getStringValue()); },
            'firstSeenDateTime' => function (ParseNode $n) use ($o) { $o->setFirstSeenDateTime($n->getDateTimeValue()); },
            'healthStatus' => function (ParseNode $n) use ($o) { $o->setHealthStatus($n->getEnumValue(DeviceHealthStatus::class)); },
            'loggedOnUsers' => function (ParseNode $n) use ($o) { $o->setLoggedOnUsers($n->getCollectionOfObjectValues(array(LoggedOnUser::class, 'createFromDiscriminatorValue'))); },
            'mdeDeviceId' => function (ParseNode $n) use ($o) { $o->setMdeDeviceId($n->getStringValue()); },
            'onboardingStatus' => function (ParseNode $n) use ($o) { $o->setOnboardingStatus($n->getEnumValue(OnboardingStatus::class)); },
            'osBuild' => function (ParseNode $n) use ($o) { $o->setOsBuild($n->getIntegerValue()); },
            'osPlatform' => function (ParseNode $n) use ($o) { $o->setOsPlatform($n->getStringValue()); },
            'rbacGroupId' => function (ParseNode $n) use ($o) { $o->setRbacGroupId($n->getIntegerValue()); },
            'rbacGroupName' => function (ParseNode $n) use ($o) { $o->setRbacGroupName($n->getStringValue()); },
            'riskScore' => function (ParseNode $n) use ($o) { $o->setRiskScore($n->getEnumValue(DeviceRiskScore::class)); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
            'vmMetadata' => function (ParseNode $n) use ($o) { $o->setVmMetadata($n->getObjectValue(array(VmMetadata::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The firstSeenDateTime property
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        return $this->firstSeenDateTime;
    }

    /**
     * Gets the healthStatus property value. The healthStatus property
     * @return DeviceHealthStatus|null
    */
    public function getHealthStatus(): ?DeviceHealthStatus {
        return $this->healthStatus;
    }

    /**
     * Gets the loggedOnUsers property value. The loggedOnUsers property
     * @return array<LoggedOnUser>|null
    */
    public function getLoggedOnUsers(): ?array {
        return $this->loggedOnUsers;
    }

    /**
     * Gets the mdeDeviceId property value. The mdeDeviceId property
     * @return string|null
    */
    public function getMdeDeviceId(): ?string {
        return $this->mdeDeviceId;
    }

    /**
     * Gets the onboardingStatus property value. The onboardingStatus property
     * @return OnboardingStatus|null
    */
    public function getOnboardingStatus(): ?OnboardingStatus {
        return $this->onboardingStatus;
    }

    /**
     * Gets the osBuild property value. The osBuild property
     * @return int|null
    */
    public function getOsBuild(): ?int {
        return $this->osBuild;
    }

    /**
     * Gets the osPlatform property value. The osPlatform property
     * @return string|null
    */
    public function getOsPlatform(): ?string {
        return $this->osPlatform;
    }

    /**
     * Gets the rbacGroupId property value. The rbacGroupId property
     * @return int|null
    */
    public function getRbacGroupId(): ?int {
        return $this->rbacGroupId;
    }

    /**
     * Gets the rbacGroupName property value. The rbacGroupName property
     * @return string|null
    */
    public function getRbacGroupName(): ?string {
        return $this->rbacGroupName;
    }

    /**
     * Gets the riskScore property value. The riskScore property
     * @return DeviceRiskScore|null
    */
    public function getRiskScore(): ?DeviceRiskScore {
        return $this->riskScore;
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Gets the vmMetadata property value. The vmMetadata property
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
     * Sets the azureAdDeviceId property value. The azureAdDeviceId property
     *  @param string|null $value Value to set for the azureAdDeviceId property.
    */
    public function setAzureAdDeviceId(?string $value ): void {
        $this->azureAdDeviceId = $value;
    }

    /**
     * Sets the defenderAvStatus property value. The defenderAvStatus property
     *  @param DefenderAvStatus|null $value Value to set for the defenderAvStatus property.
    */
    public function setDefenderAvStatus(?DefenderAvStatus $value ): void {
        $this->defenderAvStatus = $value;
    }

    /**
     * Sets the deviceDnsName property value. The deviceDnsName property
     *  @param string|null $value Value to set for the deviceDnsName property.
    */
    public function setDeviceDnsName(?string $value ): void {
        $this->deviceDnsName = $value;
    }

    /**
     * Sets the firstSeenDateTime property value. The firstSeenDateTime property
     *  @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value ): void {
        $this->firstSeenDateTime = $value;
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     *  @param DeviceHealthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?DeviceHealthStatus $value ): void {
        $this->healthStatus = $value;
    }

    /**
     * Sets the loggedOnUsers property value. The loggedOnUsers property
     *  @param array<LoggedOnUser>|null $value Value to set for the loggedOnUsers property.
    */
    public function setLoggedOnUsers(?array $value ): void {
        $this->loggedOnUsers = $value;
    }

    /**
     * Sets the mdeDeviceId property value. The mdeDeviceId property
     *  @param string|null $value Value to set for the mdeDeviceId property.
    */
    public function setMdeDeviceId(?string $value ): void {
        $this->mdeDeviceId = $value;
    }

    /**
     * Sets the onboardingStatus property value. The onboardingStatus property
     *  @param OnboardingStatus|null $value Value to set for the onboardingStatus property.
    */
    public function setOnboardingStatus(?OnboardingStatus $value ): void {
        $this->onboardingStatus = $value;
    }

    /**
     * Sets the osBuild property value. The osBuild property
     *  @param int|null $value Value to set for the osBuild property.
    */
    public function setOsBuild(?int $value ): void {
        $this->osBuild = $value;
    }

    /**
     * Sets the osPlatform property value. The osPlatform property
     *  @param string|null $value Value to set for the osPlatform property.
    */
    public function setOsPlatform(?string $value ): void {
        $this->osPlatform = $value;
    }

    /**
     * Sets the rbacGroupId property value. The rbacGroupId property
     *  @param int|null $value Value to set for the rbacGroupId property.
    */
    public function setRbacGroupId(?int $value ): void {
        $this->rbacGroupId = $value;
    }

    /**
     * Sets the rbacGroupName property value. The rbacGroupName property
     *  @param string|null $value Value to set for the rbacGroupName property.
    */
    public function setRbacGroupName(?string $value ): void {
        $this->rbacGroupName = $value;
    }

    /**
     * Sets the riskScore property value. The riskScore property
     *  @param DeviceRiskScore|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?DeviceRiskScore $value ): void {
        $this->riskScore = $value;
    }

    /**
     * Sets the version property value. The version property
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

    /**
     * Sets the vmMetadata property value. The vmMetadata property
     *  @param VmMetadata|null $value Value to set for the vmMetadata property.
    */
    public function setVmMetadata(?VmMetadata $value ): void {
        $this->vmMetadata = $value;
    }

}
