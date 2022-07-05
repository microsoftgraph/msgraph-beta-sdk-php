<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureADUserFeatureUsage extends Entity implements Parsable 
{
    /**
     * @var array<FeatureUsageDetail>|null $featureUsageDetails The featureUsageDetails property
    */
    private ?array $featureUsageDetails = null;
    
    /**
     * @var DateTime|null $lastUpdatedDateTime The lastUpdatedDateTime property
    */
    private ?DateTime $lastUpdatedDateTime = null;
    
    /**
     * @var AzureADLicenseType|null $licenseAssigned The licenseAssigned property
    */
    private ?AzureADLicenseType $licenseAssigned = null;
    
    /**
     * @var AzureADLicenseType|null $licenseRecommended The licenseRecommended property
    */
    private ?AzureADLicenseType $licenseRecommended = null;
    
    /**
     * @var string|null $userDisplayName The userDisplayName property
    */
    private ?string $userDisplayName = null;
    
    /**
     * @var string|null $userId The userId property
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $userPrincipalName The userPrincipalName property
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new AzureADUserFeatureUsage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureADUserFeatureUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureADUserFeatureUsage {
        return new AzureADUserFeatureUsage();
    }

    /**
     * Gets the featureUsageDetails property value. The featureUsageDetails property
     * @return array<FeatureUsageDetail>|null
    */
    public function getFeatureUsageDetails(): ?array {
        return $this->featureUsageDetails;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'featureUsageDetails' => function (ParseNode $n) use ($o) { $o->setFeatureUsageDetails($n->getCollectionOfObjectValues(array(FeatureUsageDetail::class, 'createFromDiscriminatorValue'))); },
            'lastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setLastUpdatedDateTime($n->getDateTimeValue()); },
            'licenseAssigned' => function (ParseNode $n) use ($o) { $o->setLicenseAssigned($n->getEnumValue(AzureADLicenseType::class)); },
            'licenseRecommended' => function (ParseNode $n) use ($o) { $o->setLicenseRecommended($n->getEnumValue(AzureADLicenseType::class)); },
            'userDisplayName' => function (ParseNode $n) use ($o) { $o->setUserDisplayName($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->lastUpdatedDateTime;
    }

    /**
     * Gets the licenseAssigned property value. The licenseAssigned property
     * @return AzureADLicenseType|null
    */
    public function getLicenseAssigned(): ?AzureADLicenseType {
        return $this->licenseAssigned;
    }

    /**
     * Gets the licenseRecommended property value. The licenseRecommended property
     * @return AzureADLicenseType|null
    */
    public function getLicenseRecommended(): ?AzureADLicenseType {
        return $this->licenseRecommended;
    }

    /**
     * Gets the userDisplayName property value. The userDisplayName property
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userId property value. The userId property
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName property
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
        $writer->writeCollectionOfObjectValues('featureUsageDetails', $this->featureUsageDetails);
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->lastUpdatedDateTime);
        $writer->writeEnumValue('licenseAssigned', $this->licenseAssigned);
        $writer->writeEnumValue('licenseRecommended', $this->licenseRecommended);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the featureUsageDetails property value. The featureUsageDetails property
     *  @param array<FeatureUsageDetail>|null $value Value to set for the featureUsageDetails property.
    */
    public function setFeatureUsageDetails(?array $value ): void {
        $this->featureUsageDetails = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     *  @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value ): void {
        $this->lastUpdatedDateTime = $value;
    }

    /**
     * Sets the licenseAssigned property value. The licenseAssigned property
     *  @param AzureADLicenseType|null $value Value to set for the licenseAssigned property.
    */
    public function setLicenseAssigned(?AzureADLicenseType $value ): void {
        $this->licenseAssigned = $value;
    }

    /**
     * Sets the licenseRecommended property value. The licenseRecommended property
     *  @param AzureADLicenseType|null $value Value to set for the licenseRecommended property.
    */
    public function setLicenseRecommended(?AzureADLicenseType $value ): void {
        $this->licenseRecommended = $value;
    }

    /**
     * Sets the userDisplayName property value. The userDisplayName property
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userId property value. The userId property
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName property
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
