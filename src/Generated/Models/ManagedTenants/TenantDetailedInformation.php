<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantDetailedInformation extends Entity 
{
    /** @var string|null $city The city where the managed tenant is located. Optional. Read-only. */
    private ?string $city = null;
    
    /** @var string|null $countryCode The code for the country where the managed tenant is located. Optional. Read-only. */
    private ?string $countryCode = null;
    
    /** @var string|null $countryName The name for the country where the managed tenant is located. Optional. Read-only. */
    private ?string $countryName = null;
    
    /** @var string|null $defaultDomainName The default domain name for the managed tenant. Optional. Read-only. */
    private ?string $defaultDomainName = null;
    
    /** @var string|null $displayName The display name for the managed tenant. */
    private ?string $displayName = null;
    
    /** @var string|null $industryName The business industry associated with the managed tenant. Optional. Read-only. */
    private ?string $industryName = null;
    
    /** @var string|null $region The region where the managed tenant is located. Optional. Read-only. */
    private ?string $region = null;
    
    /** @var string|null $segmentName The business segment associated with the managed tenant. Optional. Read-only. */
    private ?string $segmentName = null;
    
    /** @var string|null $tenantId The Azure Active Directory tenant identifier for the managed tenant. */
    private ?string $tenantId = null;
    
    /** @var string|null $verticalName The vertical associated with the managed tenant. Optional. Read-only. */
    private ?string $verticalName = null;
    
    /**
     * Instantiates a new tenantDetailedInformation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantDetailedInformation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TenantDetailedInformation {
        return new TenantDetailedInformation();
    }

    /**
     * Gets the city property value. The city where the managed tenant is located. Optional. Read-only.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the countryCode property value. The code for the country where the managed tenant is located. Optional. Read-only.
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    /**
     * Gets the countryName property value. The name for the country where the managed tenant is located. Optional. Read-only.
     * @return string|null
    */
    public function getCountryName(): ?string {
        return $this->countryName;
    }

    /**
     * Gets the defaultDomainName property value. The default domain name for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getDefaultDomainName(): ?string {
        return $this->defaultDomainName;
    }

    /**
     * Gets the displayName property value. The display name for the managed tenant.
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
        return array_merge(parent::getFieldDeserializers(), [
            'city' => function (self $o, ParseNode $n) { $o->setCity($n->getStringValue()); },
            'countryCode' => function (self $o, ParseNode $n) { $o->setCountryCode($n->getStringValue()); },
            'countryName' => function (self $o, ParseNode $n) { $o->setCountryName($n->getStringValue()); },
            'defaultDomainName' => function (self $o, ParseNode $n) { $o->setDefaultDomainName($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'industryName' => function (self $o, ParseNode $n) { $o->setIndustryName($n->getStringValue()); },
            'region' => function (self $o, ParseNode $n) { $o->setRegion($n->getStringValue()); },
            'segmentName' => function (self $o, ParseNode $n) { $o->setSegmentName($n->getStringValue()); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
            'verticalName' => function (self $o, ParseNode $n) { $o->setVerticalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the industryName property value. The business industry associated with the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getIndustryName(): ?string {
        return $this->industryName;
    }

    /**
     * Gets the region property value. The region where the managed tenant is located. Optional. Read-only.
     * @return string|null
    */
    public function getRegion(): ?string {
        return $this->region;
    }

    /**
     * Gets the segmentName property value. The business segment associated with the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getSegmentName(): ?string {
        return $this->segmentName;
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the verticalName property value. The vertical associated with the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getVerticalName(): ?string {
        return $this->verticalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('city', $this->city);
        $writer->writeStringValue('countryCode', $this->countryCode);
        $writer->writeStringValue('countryName', $this->countryName);
        $writer->writeStringValue('defaultDomainName', $this->defaultDomainName);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('industryName', $this->industryName);
        $writer->writeStringValue('region', $this->region);
        $writer->writeStringValue('segmentName', $this->segmentName);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeStringValue('verticalName', $this->verticalName);
    }

    /**
     * Sets the city property value. The city where the managed tenant is located. Optional. Read-only.
     *  @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value ): void {
        $this->city = $value;
    }

    /**
     * Sets the countryCode property value. The code for the country where the managed tenant is located. Optional. Read-only.
     *  @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value ): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the countryName property value. The name for the country where the managed tenant is located. Optional. Read-only.
     *  @param string|null $value Value to set for the countryName property.
    */
    public function setCountryName(?string $value ): void {
        $this->countryName = $value;
    }

    /**
     * Sets the defaultDomainName property value. The default domain name for the managed tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the defaultDomainName property.
    */
    public function setDefaultDomainName(?string $value ): void {
        $this->defaultDomainName = $value;
    }

    /**
     * Sets the displayName property value. The display name for the managed tenant.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the industryName property value. The business industry associated with the managed tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the industryName property.
    */
    public function setIndustryName(?string $value ): void {
        $this->industryName = $value;
    }

    /**
     * Sets the region property value. The region where the managed tenant is located. Optional. Read-only.
     *  @param string|null $value Value to set for the region property.
    */
    public function setRegion(?string $value ): void {
        $this->region = $value;
    }

    /**
     * Sets the segmentName property value. The business segment associated with the managed tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the segmentName property.
    */
    public function setSegmentName(?string $value ): void {
        $this->segmentName = $value;
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the verticalName property value. The vertical associated with the managed tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the verticalName property.
    */
    public function setVerticalName(?string $value ): void {
        $this->verticalName = $value;
    }

}
