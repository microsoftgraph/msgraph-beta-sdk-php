<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserSecurityProfile extends Entity implements Parsable 
{
    /**
     * @var array<UserAccount>|null $accounts The accounts property
    */
    private ?array $accounts = null;
    
    /**
     * @var string|null $azureSubscriptionId The azureSubscriptionId property
    */
    private ?string $azureSubscriptionId = null;
    
    /**
     * @var string|null $azureTenantId The azureTenantId property
    */
    private ?string $azureTenantId = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $riskScore The riskScore property
    */
    private ?string $riskScore = null;
    
    /**
     * @var array<string>|null $tags The tags property
    */
    private ?array $tags = null;
    
    /**
     * @var string|null $userPrincipalName The userPrincipalName property
    */
    private ?string $userPrincipalName = null;
    
    /**
     * @var SecurityVendorInformation|null $vendorInformation The vendorInformation property
    */
    private ?SecurityVendorInformation $vendorInformation = null;
    
    /**
     * Instantiates a new userSecurityProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userSecurityProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserSecurityProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserSecurityProfile {
        return new UserSecurityProfile();
    }

    /**
     * Gets the accounts property value. The accounts property
     * @return array<UserAccount>|null
    */
    public function getAccounts(): ?array {
        return $this->accounts;
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
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accounts' => function (ParseNode $n) use ($o) { $o->setAccounts($n->getCollectionOfObjectValues(array(UserAccount::class, 'createFromDiscriminatorValue'))); },
            'azureSubscriptionId' => function (ParseNode $n) use ($o) { $o->setAzureSubscriptionId($n->getStringValue()); },
            'azureTenantId' => function (ParseNode $n) use ($o) { $o->setAzureTenantId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'riskScore' => function (ParseNode $n) use ($o) { $o->setRiskScore($n->getStringValue()); },
            'tags' => function (ParseNode $n) use ($o) { $o->setTags($n->getCollectionOfPrimitiveValues()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
            'vendorInformation' => function (ParseNode $n) use ($o) { $o->setVendorInformation($n->getObjectValue(array(SecurityVendorInformation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
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
     * Gets the userPrincipalName property value. The userPrincipalName property
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
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
        $writer->writeCollectionOfObjectValues('accounts', $this->accounts);
        $writer->writeStringValue('azureSubscriptionId', $this->azureSubscriptionId);
        $writer->writeStringValue('azureTenantId', $this->azureTenantId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('riskScore', $this->riskScore);
        $writer->writeCollectionOfPrimitiveValues('tags', $this->tags);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeObjectValue('vendorInformation', $this->vendorInformation);
    }

    /**
     * Sets the accounts property value. The accounts property
     *  @param array<UserAccount>|null $value Value to set for the accounts property.
    */
    public function setAccounts(?array $value ): void {
        $this->accounts = $value;
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
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
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
     * Sets the userPrincipalName property value. The userPrincipalName property
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

    /**
     * Sets the vendorInformation property value. The vendorInformation property
     *  @param SecurityVendorInformation|null $value Value to set for the vendorInformation property.
    */
    public function setVendorInformation(?SecurityVendorInformation $value ): void {
        $this->vendorInformation = $value;
    }

}
