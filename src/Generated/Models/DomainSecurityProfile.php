<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DomainSecurityProfile extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $activityGroupNames The activityGroupNames property
    */
    private ?array $activityGroupNames = null;
    
    /**
     * @var string|null $azureSubscriptionId The azureSubscriptionId property
    */
    private ?string $azureSubscriptionId = null;
    
    /**
     * @var string|null $azureTenantId The azureTenantId property
    */
    private ?string $azureTenantId = null;
    
    /**
     * @var int|null $countHits The countHits property
    */
    private ?int $countHits = null;
    
    /**
     * @var int|null $countInOrg The countInOrg property
    */
    private ?int $countInOrg = null;
    
    /**
     * @var array<ReputationCategory>|null $domainCategories The domainCategories property
    */
    private ?array $domainCategories = null;
    
    /**
     * @var DateTime|null $domainRegisteredDateTime The domainRegisteredDateTime property
    */
    private ?DateTime $domainRegisteredDateTime = null;
    
    /**
     * @var DateTime|null $firstSeenDateTime The firstSeenDateTime property
    */
    private ?DateTime $firstSeenDateTime = null;
    
    /**
     * @var DateTime|null $lastSeenDateTime The lastSeenDateTime property
    */
    private ?DateTime $lastSeenDateTime = null;
    
    /**
     * @var string|null $name The name property
    */
    private ?string $name = null;
    
    /**
     * @var DomainRegistrant|null $registrant The registrant property
    */
    private ?DomainRegistrant $registrant = null;
    
    /**
     * @var string|null $riskScore The riskScore property
    */
    private ?string $riskScore = null;
    
    /**
     * @var array<string>|null $tags The tags property
    */
    private ?array $tags = null;
    
    /**
     * @var SecurityVendorInformation|null $vendorInformation The vendorInformation property
    */
    private ?SecurityVendorInformation $vendorInformation = null;
    
    /**
     * Instantiates a new domainSecurityProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.domainSecurityProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DomainSecurityProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DomainSecurityProfile {
        return new DomainSecurityProfile();
    }

    /**
     * Gets the activityGroupNames property value. The activityGroupNames property
     * @return array<string>|null
    */
    public function getActivityGroupNames(): ?array {
        return $this->activityGroupNames;
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
     * Gets the countHits property value. The countHits property
     * @return int|null
    */
    public function getCountHits(): ?int {
        return $this->countHits;
    }

    /**
     * Gets the countInOrg property value. The countInOrg property
     * @return int|null
    */
    public function getCountInOrg(): ?int {
        return $this->countInOrg;
    }

    /**
     * Gets the domainCategories property value. The domainCategories property
     * @return array<ReputationCategory>|null
    */
    public function getDomainCategories(): ?array {
        return $this->domainCategories;
    }

    /**
     * Gets the domainRegisteredDateTime property value. The domainRegisteredDateTime property
     * @return DateTime|null
    */
    public function getDomainRegisteredDateTime(): ?DateTime {
        return $this->domainRegisteredDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityGroupNames' => fn(ParseNode $n) => $o->setActivityGroupNames($n->getCollectionOfPrimitiveValues()),
            'azureSubscriptionId' => fn(ParseNode $n) => $o->setAzureSubscriptionId($n->getStringValue()),
            'azureTenantId' => fn(ParseNode $n) => $o->setAzureTenantId($n->getStringValue()),
            'countHits' => fn(ParseNode $n) => $o->setCountHits($n->getIntegerValue()),
            'countInOrg' => fn(ParseNode $n) => $o->setCountInOrg($n->getIntegerValue()),
            'domainCategories' => fn(ParseNode $n) => $o->setDomainCategories($n->getCollectionOfObjectValues([ReputationCategory::class, 'createFromDiscriminatorValue'])),
            'domainRegisteredDateTime' => fn(ParseNode $n) => $o->setDomainRegisteredDateTime($n->getDateTimeValue()),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'registrant' => fn(ParseNode $n) => $o->setRegistrant($n->getObjectValue([DomainRegistrant::class, 'createFromDiscriminatorValue'])),
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
        return $this->firstSeenDateTime;
    }

    /**
     * Gets the lastSeenDateTime property value. The lastSeenDateTime property
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        return $this->lastSeenDateTime;
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the registrant property value. The registrant property
     * @return DomainRegistrant|null
    */
    public function getRegistrant(): ?DomainRegistrant {
        return $this->registrant;
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
        $writer->writeCollectionOfPrimitiveValues('activityGroupNames', $this->activityGroupNames);
        $writer->writeStringValue('azureSubscriptionId', $this->azureSubscriptionId);
        $writer->writeStringValue('azureTenantId', $this->azureTenantId);
        $writer->writeIntegerValue('countHits', $this->countHits);
        $writer->writeIntegerValue('countInOrg', $this->countInOrg);
        $writer->writeCollectionOfObjectValues('domainCategories', $this->domainCategories);
        $writer->writeDateTimeValue('domainRegisteredDateTime', $this->domainRegisteredDateTime);
        $writer->writeDateTimeValue('firstSeenDateTime', $this->firstSeenDateTime);
        $writer->writeDateTimeValue('lastSeenDateTime', $this->lastSeenDateTime);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('registrant', $this->registrant);
        $writer->writeStringValue('riskScore', $this->riskScore);
        $writer->writeCollectionOfPrimitiveValues('tags', $this->tags);
        $writer->writeObjectValue('vendorInformation', $this->vendorInformation);
    }

    /**
     * Sets the activityGroupNames property value. The activityGroupNames property
     *  @param array<string>|null $value Value to set for the activityGroupNames property.
    */
    public function setActivityGroupNames(?array $value ): void {
        $this->activityGroupNames = $value;
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
     * Sets the countHits property value. The countHits property
     *  @param int|null $value Value to set for the countHits property.
    */
    public function setCountHits(?int $value ): void {
        $this->countHits = $value;
    }

    /**
     * Sets the countInOrg property value. The countInOrg property
     *  @param int|null $value Value to set for the countInOrg property.
    */
    public function setCountInOrg(?int $value ): void {
        $this->countInOrg = $value;
    }

    /**
     * Sets the domainCategories property value. The domainCategories property
     *  @param array<ReputationCategory>|null $value Value to set for the domainCategories property.
    */
    public function setDomainCategories(?array $value ): void {
        $this->domainCategories = $value;
    }

    /**
     * Sets the domainRegisteredDateTime property value. The domainRegisteredDateTime property
     *  @param DateTime|null $value Value to set for the domainRegisteredDateTime property.
    */
    public function setDomainRegisteredDateTime(?DateTime $value ): void {
        $this->domainRegisteredDateTime = $value;
    }

    /**
     * Sets the firstSeenDateTime property value. The firstSeenDateTime property
     *  @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value ): void {
        $this->firstSeenDateTime = $value;
    }

    /**
     * Sets the lastSeenDateTime property value. The lastSeenDateTime property
     *  @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value ): void {
        $this->lastSeenDateTime = $value;
    }

    /**
     * Sets the name property value. The name property
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the registrant property value. The registrant property
     *  @param DomainRegistrant|null $value Value to set for the registrant property.
    */
    public function setRegistrant(?DomainRegistrant $value ): void {
        $this->registrant = $value;
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
