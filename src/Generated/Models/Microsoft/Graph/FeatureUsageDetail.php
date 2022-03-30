<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FeatureUsageDetail implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $featureName  */
    private ?string $featureName = null;
    
    /** @var DateTime|null $lastConfiguredDateTime  */
    private ?DateTime $lastConfiguredDateTime = null;
    
    /** @var DateTime|null $lastUsedDateTime  */
    private ?DateTime $lastUsedDateTime = null;
    
    /** @var AzureADLicenseType|null $licenseAssigned  */
    private ?AzureADLicenseType $licenseAssigned = null;
    
    /** @var AzureADLicenseType|null $licenseRequired  */
    private ?AzureADLicenseType $licenseRequired = null;
    
    /**
     * Instantiates a new featureUsageDetail and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FeatureUsageDetail
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): FeatureUsageDetail {
        return new FeatureUsageDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the featureName property value. 
     * @return string|null
    */
    public function getFeatureName(): ?string {
        return $this->featureName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'featureName' => function (self $o, ParseNode $n) { $o->setFeatureName($n->getStringValue()); },
            'lastConfiguredDateTime' => function (self $o, ParseNode $n) { $o->setLastConfiguredDateTime($n->getDateTimeValue()); },
            'lastUsedDateTime' => function (self $o, ParseNode $n) { $o->setLastUsedDateTime($n->getDateTimeValue()); },
            'licenseAssigned' => function (self $o, ParseNode $n) { $o->setLicenseAssigned($n->getEnumValue(AzureADLicenseType::class)); },
            'licenseRequired' => function (self $o, ParseNode $n) { $o->setLicenseRequired($n->getEnumValue(AzureADLicenseType::class)); },
        ];
    }

    /**
     * Gets the lastConfiguredDateTime property value. 
     * @return DateTime|null
    */
    public function getLastConfiguredDateTime(): ?DateTime {
        return $this->lastConfiguredDateTime;
    }

    /**
     * Gets the lastUsedDateTime property value. 
     * @return DateTime|null
    */
    public function getLastUsedDateTime(): ?DateTime {
        return $this->lastUsedDateTime;
    }

    /**
     * Gets the licenseAssigned property value. 
     * @return AzureADLicenseType|null
    */
    public function getLicenseAssigned(): ?AzureADLicenseType {
        return $this->licenseAssigned;
    }

    /**
     * Gets the licenseRequired property value. 
     * @return AzureADLicenseType|null
    */
    public function getLicenseRequired(): ?AzureADLicenseType {
        return $this->licenseRequired;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('featureName', $this->featureName);
        $writer->writeDateTimeValue('lastConfiguredDateTime', $this->lastConfiguredDateTime);
        $writer->writeDateTimeValue('lastUsedDateTime', $this->lastUsedDateTime);
        $writer->writeEnumValue('licenseAssigned', $this->licenseAssigned);
        $writer->writeEnumValue('licenseRequired', $this->licenseRequired);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the featureName property value. 
     *  @param string|null $value Value to set for the featureName property.
    */
    public function setFeatureName(?string $value ): void {
        $this->featureName = $value;
    }

    /**
     * Sets the lastConfiguredDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastConfiguredDateTime property.
    */
    public function setLastConfiguredDateTime(?DateTime $value ): void {
        $this->lastConfiguredDateTime = $value;
    }

    /**
     * Sets the lastUsedDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastUsedDateTime property.
    */
    public function setLastUsedDateTime(?DateTime $value ): void {
        $this->lastUsedDateTime = $value;
    }

    /**
     * Sets the licenseAssigned property value. 
     *  @param AzureADLicenseType|null $value Value to set for the licenseAssigned property.
    */
    public function setLicenseAssigned(?AzureADLicenseType $value ): void {
        $this->licenseAssigned = $value;
    }

    /**
     * Sets the licenseRequired property value. 
     *  @param AzureADLicenseType|null $value Value to set for the licenseRequired property.
    */
    public function setLicenseRequired(?AzureADLicenseType $value ): void {
        $this->licenseRequired = $value;
    }

}
