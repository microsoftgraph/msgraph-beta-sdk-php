<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HostSecurityProfile extends Entity 
{
    /** @var string|null $azureSubscriptionId The azureSubscriptionId property */
    private ?string $azureSubscriptionId = null;
    
    /** @var string|null $azureTenantId The azureTenantId property */
    private ?string $azureTenantId = null;
    
    /** @var DateTime|null $firstSeenDateTime The firstSeenDateTime property */
    private ?DateTime $firstSeenDateTime = null;
    
    /** @var string|null $fqdn The fqdn property */
    private ?string $fqdn = null;
    
    /** @var bool|null $isAzureAdJoined The isAzureAdJoined property */
    private ?bool $isAzureAdJoined = null;
    
    /** @var bool|null $isAzureAdRegistered The isAzureAdRegistered property */
    private ?bool $isAzureAdRegistered = null;
    
    /** @var bool|null $isHybridAzureDomainJoined The isHybridAzureDomainJoined property */
    private ?bool $isHybridAzureDomainJoined = null;
    
    /** @var DateTime|null $lastSeenDateTime The lastSeenDateTime property */
    private ?DateTime $lastSeenDateTime = null;
    
    /** @var array<LogonUser>|null $logonUsers The logonUsers property */
    private ?array $logonUsers = null;
    
    /** @var string|null $netBiosName The netBiosName property */
    private ?string $netBiosName = null;
    
    /** @var array<NetworkInterface>|null $networkInterfaces The networkInterfaces property */
    private ?array $networkInterfaces = null;
    
    /** @var string|null $os The os property */
    private ?string $os = null;
    
    /** @var string|null $osVersion The osVersion property */
    private ?string $osVersion = null;
    
    /** @var string|null $parentHost The parentHost property */
    private ?string $parentHost = null;
    
    /** @var array<string>|null $relatedHostIds The relatedHostIds property */
    private ?array $relatedHostIds = null;
    
    /** @var string|null $riskScore The riskScore property */
    private ?string $riskScore = null;
    
    /** @var array<string>|null $tags The tags property */
    private ?array $tags = null;
    
    /** @var SecurityVendorInformation|null $vendorInformation The vendorInformation property */
    private ?SecurityVendorInformation $vendorInformation = null;
    
    /**
     * Instantiates a new hostSecurityProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HostSecurityProfile
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): HostSecurityProfile {
        return new HostSecurityProfile();
    }

    /**
     * Gets the azureSubscriptionId property value. The azureSubscriptionId property
     * @return string|null
    */
    public function getAzureSubscriptionId(): ?string {
        return $this->azureSubscriptionId;
    }

    /**
     * Gets the azureTenantId property value. The azureTenantId property
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->azureTenantId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'azureSubscriptionId' => function (self $o, ParseNode $n) { $o->setAzureSubscriptionId($n->getStringValue()); },
            'azureTenantId' => function (self $o, ParseNode $n) { $o->setAzureTenantId($n->getStringValue()); },
            'firstSeenDateTime' => function (self $o, ParseNode $n) { $o->setFirstSeenDateTime($n->getDateTimeValue()); },
            'fqdn' => function (self $o, ParseNode $n) { $o->setFqdn($n->getStringValue()); },
            'isAzureAdJoined' => function (self $o, ParseNode $n) { $o->setIsAzureAdJoined($n->getBooleanValue()); },
            'isAzureAdRegistered' => function (self $o, ParseNode $n) { $o->setIsAzureAdRegistered($n->getBooleanValue()); },
            'isHybridAzureDomainJoined' => function (self $o, ParseNode $n) { $o->setIsHybridAzureDomainJoined($n->getBooleanValue()); },
            'lastSeenDateTime' => function (self $o, ParseNode $n) { $o->setLastSeenDateTime($n->getDateTimeValue()); },
            'logonUsers' => function (self $o, ParseNode $n) { $o->setLogonUsers($n->getCollectionOfObjectValues(LogonUser::class)); },
            'netBiosName' => function (self $o, ParseNode $n) { $o->setNetBiosName($n->getStringValue()); },
            'networkInterfaces' => function (self $o, ParseNode $n) { $o->setNetworkInterfaces($n->getCollectionOfObjectValues(NetworkInterface::class)); },
            'os' => function (self $o, ParseNode $n) { $o->setOs($n->getStringValue()); },
            'osVersion' => function (self $o, ParseNode $n) { $o->setOsVersion($n->getStringValue()); },
            'parentHost' => function (self $o, ParseNode $n) { $o->setParentHost($n->getStringValue()); },
            'relatedHostIds' => function (self $o, ParseNode $n) { $o->setRelatedHostIds($n->getCollectionOfPrimitiveValues()); },
            'riskScore' => function (self $o, ParseNode $n) { $o->setRiskScore($n->getStringValue()); },
            'tags' => function (self $o, ParseNode $n) { $o->setTags($n->getCollectionOfPrimitiveValues()); },
            'vendorInformation' => function (self $o, ParseNode $n) { $o->setVendorInformation($n->getObjectValue(SecurityVendorInformation::class)); },
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
     * Gets the fqdn property value. The fqdn property
     * @return string|null
    */
    public function getFqdn(): ?string {
        return $this->fqdn;
    }

    /**
     * Gets the isAzureAdJoined property value. The isAzureAdJoined property
     * @return bool|null
    */
    public function getIsAzureAdJoined(): ?bool {
        return $this->isAzureAdJoined;
    }

    /**
     * Gets the isAzureAdRegistered property value. The isAzureAdRegistered property
     * @return bool|null
    */
    public function getIsAzureAdRegistered(): ?bool {
        return $this->isAzureAdRegistered;
    }

    /**
     * Gets the isHybridAzureDomainJoined property value. The isHybridAzureDomainJoined property
     * @return bool|null
    */
    public function getIsHybridAzureDomainJoined(): ?bool {
        return $this->isHybridAzureDomainJoined;
    }

    /**
     * Gets the lastSeenDateTime property value. The lastSeenDateTime property
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->lastSeenDateTime;
    }

    /**
     * Gets the logonUsers property value. The logonUsers property
     * @return array<LogonUser>|null
    */
    public function getLogonUsers(): ?array {
        return $this->logonUsers;
    }

    /**
     * Gets the netBiosName property value. The netBiosName property
     * @return string|null
    */
    public function getNetBiosName(): ?string {
        return $this->netBiosName;
    }

    /**
     * Gets the networkInterfaces property value. The networkInterfaces property
     * @return array<NetworkInterface>|null
    */
    public function getNetworkInterfaces(): ?array {
        return $this->networkInterfaces;
    }

    /**
     * Gets the os property value. The os property
     * @return string|null
    */
    public function getOs(): ?string {
        return $this->os;
    }

    /**
     * Gets the osVersion property value. The osVersion property
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->osVersion;
    }

    /**
     * Gets the parentHost property value. The parentHost property
     * @return string|null
    */
    public function getParentHost(): ?string {
        return $this->parentHost;
    }

    /**
     * Gets the relatedHostIds property value. The relatedHostIds property
     * @return array<string>|null
    */
    public function getRelatedHostIds(): ?array {
        return $this->relatedHostIds;
    }

    /**
     * Gets the riskScore property value. The riskScore property
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->riskScore;
    }

    /**
     * Gets the tags property value. The tags property
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Gets the vendorInformation property value. The vendorInformation property
     * @return SecurityVendorInformation|null
    */
    public function getVendorInformation(): ?SecurityVendorInformation {
        return $this->vendorInformation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureSubscriptionId', $this->azureSubscriptionId);
        $writer->writeStringValue('azureTenantId', $this->azureTenantId);
        $writer->writeDateTimeValue('firstSeenDateTime', $this->firstSeenDateTime);
        $writer->writeStringValue('fqdn', $this->fqdn);
        $writer->writeBooleanValue('isAzureAdJoined', $this->isAzureAdJoined);
        $writer->writeBooleanValue('isAzureAdRegistered', $this->isAzureAdRegistered);
        $writer->writeBooleanValue('isHybridAzureDomainJoined', $this->isHybridAzureDomainJoined);
        $writer->writeDateTimeValue('lastSeenDateTime', $this->lastSeenDateTime);
        $writer->writeCollectionOfObjectValues('logonUsers', $this->logonUsers);
        $writer->writeStringValue('netBiosName', $this->netBiosName);
        $writer->writeCollectionOfObjectValues('networkInterfaces', $this->networkInterfaces);
        $writer->writeStringValue('os', $this->os);
        $writer->writeStringValue('osVersion', $this->osVersion);
        $writer->writeStringValue('parentHost', $this->parentHost);
        $writer->writeCollectionOfPrimitiveValues('relatedHostIds', $this->relatedHostIds);
        $writer->writeStringValue('riskScore', $this->riskScore);
        $writer->writeCollectionOfPrimitiveValues('tags', $this->tags);
        $writer->writeObjectValue('vendorInformation', $this->vendorInformation);
    }

    /**
     * Sets the azureSubscriptionId property value. The azureSubscriptionId property
     *  @param string|null $value Value to set for the azureSubscriptionId property.
    */
    public function setAzureSubscriptionId(?string $value ): void {
        $this->azureSubscriptionId = $value;
    }

    /**
     * Sets the azureTenantId property value. The azureTenantId property
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value ): void {
        $this->azureTenantId = $value;
    }

    /**
     * Sets the firstSeenDateTime property value. The firstSeenDateTime property
     *  @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value ): void {
        $this->firstSeenDateTime = $value;
    }

    /**
     * Sets the fqdn property value. The fqdn property
     *  @param string|null $value Value to set for the fqdn property.
    */
    public function setFqdn(?string $value ): void {
        $this->fqdn = $value;
    }

    /**
     * Sets the isAzureAdJoined property value. The isAzureAdJoined property
     *  @param bool|null $value Value to set for the isAzureAdJoined property.
    */
    public function setIsAzureAdJoined(?bool $value ): void {
        $this->isAzureAdJoined = $value;
    }

    /**
     * Sets the isAzureAdRegistered property value. The isAzureAdRegistered property
     *  @param bool|null $value Value to set for the isAzureAdRegistered property.
    */
    public function setIsAzureAdRegistered(?bool $value ): void {
        $this->isAzureAdRegistered = $value;
    }

    /**
     * Sets the isHybridAzureDomainJoined property value. The isHybridAzureDomainJoined property
     *  @param bool|null $value Value to set for the isHybridAzureDomainJoined property.
    */
    public function setIsHybridAzureDomainJoined(?bool $value ): void {
        $this->isHybridAzureDomainJoined = $value;
    }

    /**
     * Sets the lastSeenDateTime property value. The lastSeenDateTime property
     *  @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value ): void {
        $this->lastSeenDateTime = $value;
    }

    /**
     * Sets the logonUsers property value. The logonUsers property
     *  @param array<LogonUser>|null $value Value to set for the logonUsers property.
    */
    public function setLogonUsers(?array $value ): void {
        $this->logonUsers = $value;
    }

    /**
     * Sets the netBiosName property value. The netBiosName property
     *  @param string|null $value Value to set for the netBiosName property.
    */
    public function setNetBiosName(?string $value ): void {
        $this->netBiosName = $value;
    }

    /**
     * Sets the networkInterfaces property value. The networkInterfaces property
     *  @param array<NetworkInterface>|null $value Value to set for the networkInterfaces property.
    */
    public function setNetworkInterfaces(?array $value ): void {
        $this->networkInterfaces = $value;
    }

    /**
     * Sets the os property value. The os property
     *  @param string|null $value Value to set for the os property.
    */
    public function setOs(?string $value ): void {
        $this->os = $value;
    }

    /**
     * Sets the osVersion property value. The osVersion property
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value ): void {
        $this->osVersion = $value;
    }

    /**
     * Sets the parentHost property value. The parentHost property
     *  @param string|null $value Value to set for the parentHost property.
    */
    public function setParentHost(?string $value ): void {
        $this->parentHost = $value;
    }

    /**
     * Sets the relatedHostIds property value. The relatedHostIds property
     *  @param array<string>|null $value Value to set for the relatedHostIds property.
    */
    public function setRelatedHostIds(?array $value ): void {
        $this->relatedHostIds = $value;
    }

    /**
     * Sets the riskScore property value. The riskScore property
     *  @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value ): void {
        $this->riskScore = $value;
    }

    /**
     * Sets the tags property value. The tags property
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

    /**
     * Sets the vendorInformation property value. The vendorInformation property
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value ): void {
        $this->vendorInformation = $value;
    }

}
