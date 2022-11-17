<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HostSecurityProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new hostSecurityProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.hostSecurityProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HostSecurityProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HostSecurityProfile {
        return new HostSecurityProfile();
    }

    /**
     * Gets the azureSubscriptionId property value. The azureSubscriptionId property
     * @return string|null
    */
    public function getAzureSubscriptionId(): ?string {
        return $this->getBackingStore()->get('azureSubscriptionId');
    }

    /**
     * Gets the azureTenantId property value. The azureTenantId property
     * @return string|null
    */
    public function getAzureTenantId(): ?string {
        return $this->getBackingStore()->get('azureTenantId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureSubscriptionId' => fn(ParseNode $n) => $o->setAzureSubscriptionId($n->getStringValue()),
            'azureTenantId' => fn(ParseNode $n) => $o->setAzureTenantId($n->getStringValue()),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'fqdn' => fn(ParseNode $n) => $o->setFqdn($n->getStringValue()),
            'isAzureAdJoined' => fn(ParseNode $n) => $o->setIsAzureAdJoined($n->getBooleanValue()),
            'isAzureAdRegistered' => fn(ParseNode $n) => $o->setIsAzureAdRegistered($n->getBooleanValue()),
            'isHybridAzureDomainJoined' => fn(ParseNode $n) => $o->setIsHybridAzureDomainJoined($n->getBooleanValue()),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'logonUsers' => fn(ParseNode $n) => $o->setLogonUsers($n->getCollectionOfObjectValues([LogonUser::class, 'createFromDiscriminatorValue'])),
            'netBiosName' => fn(ParseNode $n) => $o->setNetBiosName($n->getStringValue()),
            'networkInterfaces' => fn(ParseNode $n) => $o->setNetworkInterfaces($n->getCollectionOfObjectValues([NetworkInterface::class, 'createFromDiscriminatorValue'])),
            'os' => fn(ParseNode $n) => $o->setOs($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'parentHost' => fn(ParseNode $n) => $o->setParentHost($n->getStringValue()),
            'relatedHostIds' => fn(ParseNode $n) => $o->setRelatedHostIds($n->getCollectionOfPrimitiveValues()),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getStringValue()),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfPrimitiveValues()),
            'vendorInformation' => fn(ParseNode $n) => $o->setVendorInformation($n->getObjectValue([SecurityVendorInformation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The firstSeenDateTime property
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        return $this->getBackingStore()->get('firstSeenDateTime');
    }

    /**
     * Gets the fqdn property value. The fqdn property
     * @return string|null
    */
    public function getFqdn(): ?string {
        return $this->getBackingStore()->get('fqdn');
    }

    /**
     * Gets the isAzureAdJoined property value. The isAzureAdJoined property
     * @return bool|null
    */
    public function getIsAzureAdJoined(): ?bool {
        return $this->getBackingStore()->get('isAzureAdJoined');
    }

    /**
     * Gets the isAzureAdRegistered property value. The isAzureAdRegistered property
     * @return bool|null
    */
    public function getIsAzureAdRegistered(): ?bool {
        return $this->getBackingStore()->get('isAzureAdRegistered');
    }

    /**
     * Gets the isHybridAzureDomainJoined property value. The isHybridAzureDomainJoined property
     * @return bool|null
    */
    public function getIsHybridAzureDomainJoined(): ?bool {
        return $this->getBackingStore()->get('isHybridAzureDomainJoined');
    }

    /**
     * Gets the lastSeenDateTime property value. The lastSeenDateTime property
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastSeenDateTime');
    }

    /**
     * Gets the logonUsers property value. The logonUsers property
     * @return array<LogonUser>|null
    */
    public function getLogonUsers(): ?array {
        return $this->getBackingStore()->get('logonUsers');
    }

    /**
     * Gets the netBiosName property value. The netBiosName property
     * @return string|null
    */
    public function getNetBiosName(): ?string {
        return $this->getBackingStore()->get('netBiosName');
    }

    /**
     * Gets the networkInterfaces property value. The networkInterfaces property
     * @return array<NetworkInterface>|null
    */
    public function getNetworkInterfaces(): ?array {
        return $this->getBackingStore()->get('networkInterfaces');
    }

    /**
     * Gets the os property value. The os property
     * @return string|null
    */
    public function getOs(): ?string {
        return $this->getBackingStore()->get('os');
    }

    /**
     * Gets the osVersion property value. The osVersion property
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->getBackingStore()->get('osVersion');
    }

    /**
     * Gets the parentHost property value. The parentHost property
     * @return string|null
    */
    public function getParentHost(): ?string {
        return $this->getBackingStore()->get('parentHost');
    }

    /**
     * Gets the relatedHostIds property value. The relatedHostIds property
     * @return array<string>|null
    */
    public function getRelatedHostIds(): ?array {
        return $this->getBackingStore()->get('relatedHostIds');
    }

    /**
     * Gets the riskScore property value. The riskScore property
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->getBackingStore()->get('riskScore');
    }

    /**
     * Gets the tags property value. The tags property
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->getBackingStore()->get('tags');
    }

    /**
     * Gets the vendorInformation property value. The vendorInformation property
     * @return SecurityVendorInformation|null
    */
    public function getVendorInformation(): ?SecurityVendorInformation {
        return $this->getBackingStore()->get('vendorInformation');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureSubscriptionId', $this->getAzureSubscriptionId());
        $writer->writeStringValue('azureTenantId', $this->getAzureTenantId());
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeStringValue('fqdn', $this->getFqdn());
        $writer->writeBooleanValue('isAzureAdJoined', $this->getIsAzureAdJoined());
        $writer->writeBooleanValue('isAzureAdRegistered', $this->getIsAzureAdRegistered());
        $writer->writeBooleanValue('isHybridAzureDomainJoined', $this->getIsHybridAzureDomainJoined());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeCollectionOfObjectValues('logonUsers', $this->getLogonUsers());
        $writer->writeStringValue('netBiosName', $this->getNetBiosName());
        $writer->writeCollectionOfObjectValues('networkInterfaces', $this->getNetworkInterfaces());
        $writer->writeStringValue('os', $this->getOs());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeStringValue('parentHost', $this->getParentHost());
        $writer->writeCollectionOfPrimitiveValues('relatedHostIds', $this->getRelatedHostIds());
        $writer->writeStringValue('riskScore', $this->getRiskScore());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeObjectValue('vendorInformation', $this->getVendorInformation());
    }

    /**
     * Sets the azureSubscriptionId property value. The azureSubscriptionId property
     *  @param string|null $value Value to set for the azureSubscriptionId property.
    */
    public function setAzureSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('azureSubscriptionId', $value);
    }

    /**
     * Sets the azureTenantId property value. The azureTenantId property
     *  @param string|null $value Value to set for the azureTenantId property.
    */
    public function setAzureTenantId(?string $value): void {
        $this->getBackingStore()->set('azureTenantId', $value);
    }

    /**
     * Sets the firstSeenDateTime property value. The firstSeenDateTime property
     *  @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the fqdn property value. The fqdn property
     *  @param string|null $value Value to set for the fqdn property.
    */
    public function setFqdn(?string $value): void {
        $this->getBackingStore()->set('fqdn', $value);
    }

    /**
     * Sets the isAzureAdJoined property value. The isAzureAdJoined property
     *  @param bool|null $value Value to set for the isAzureAdJoined property.
    */
    public function setIsAzureAdJoined(?bool $value): void {
        $this->getBackingStore()->set('isAzureAdJoined', $value);
    }

    /**
     * Sets the isAzureAdRegistered property value. The isAzureAdRegistered property
     *  @param bool|null $value Value to set for the isAzureAdRegistered property.
    */
    public function setIsAzureAdRegistered(?bool $value): void {
        $this->getBackingStore()->set('isAzureAdRegistered', $value);
    }

    /**
     * Sets the isHybridAzureDomainJoined property value. The isHybridAzureDomainJoined property
     *  @param bool|null $value Value to set for the isHybridAzureDomainJoined property.
    */
    public function setIsHybridAzureDomainJoined(?bool $value): void {
        $this->getBackingStore()->set('isHybridAzureDomainJoined', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The lastSeenDateTime property
     *  @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the logonUsers property value. The logonUsers property
     *  @param array<LogonUser>|null $value Value to set for the logonUsers property.
    */
    public function setLogonUsers(?array $value): void {
        $this->getBackingStore()->set('logonUsers', $value);
    }

    /**
     * Sets the netBiosName property value. The netBiosName property
     *  @param string|null $value Value to set for the netBiosName property.
    */
    public function setNetBiosName(?string $value): void {
        $this->getBackingStore()->set('netBiosName', $value);
    }

    /**
     * Sets the networkInterfaces property value. The networkInterfaces property
     *  @param array<NetworkInterface>|null $value Value to set for the networkInterfaces property.
    */
    public function setNetworkInterfaces(?array $value): void {
        $this->getBackingStore()->set('networkInterfaces', $value);
    }

    /**
     * Sets the os property value. The os property
     *  @param string|null $value Value to set for the os property.
    */
    public function setOs(?string $value): void {
        $this->getBackingStore()->set('os', $value);
    }

    /**
     * Sets the osVersion property value. The osVersion property
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the parentHost property value. The parentHost property
     *  @param string|null $value Value to set for the parentHost property.
    */
    public function setParentHost(?string $value): void {
        $this->getBackingStore()->set('parentHost', $value);
    }

    /**
     * Sets the relatedHostIds property value. The relatedHostIds property
     *  @param array<string>|null $value Value to set for the relatedHostIds property.
    */
    public function setRelatedHostIds(?array $value): void {
        $this->getBackingStore()->set('relatedHostIds', $value);
    }

    /**
     * Sets the riskScore property value. The riskScore property
     *  @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value): void {
        $this->getBackingStore()->set('riskScore', $value);
    }

    /**
     * Sets the tags property value. The tags property
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the vendorInformation property value. The vendorInformation property
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value): void {
        $this->getBackingStore()->set('vendorInformation', $value);
    }

}
