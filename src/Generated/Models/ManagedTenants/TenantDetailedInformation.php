<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantDetailedInformation extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantDetailedInformation {
        return new TenantDetailedInformation();
    }

    /**
     * Gets the city property value. The city where the managed tenant is located. Optional. Read-only.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->getBackingStore()->get('city');
    }

    /**
     * Gets the countryCode property value. The code for the country where the managed tenant is located. Optional. Read-only.
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->getBackingStore()->get('countryCode');
    }

    /**
     * Gets the countryName property value. The name for the country where the managed tenant is located. Optional. Read-only.
     * @return string|null
    */
    public function getCountryName(): ?string {
        return $this->getBackingStore()->get('countryName');
    }

    /**
     * Gets the defaultDomainName property value. The default domain name for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getDefaultDomainName(): ?string {
        return $this->getBackingStore()->get('defaultDomainName');
    }

    /**
     * Gets the displayName property value. The display name for the managed tenant.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'countryName' => fn(ParseNode $n) => $o->setCountryName($n->getStringValue()),
            'defaultDomainName' => fn(ParseNode $n) => $o->setDefaultDomainName($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'industryName' => fn(ParseNode $n) => $o->setIndustryName($n->getStringValue()),
            'region' => fn(ParseNode $n) => $o->setRegion($n->getStringValue()),
            'segmentName' => fn(ParseNode $n) => $o->setSegmentName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'verticalName' => fn(ParseNode $n) => $o->setVerticalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the industryName property value. The business industry associated with the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getIndustryName(): ?string {
        return $this->getBackingStore()->get('industryName');
    }

    /**
     * Gets the region property value. The region where the managed tenant is located. Optional. Read-only.
     * @return string|null
    */
    public function getRegion(): ?string {
        return $this->getBackingStore()->get('region');
    }

    /**
     * Gets the segmentName property value. The business segment associated with the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getSegmentName(): ?string {
        return $this->getBackingStore()->get('segmentName');
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Gets the verticalName property value. The vertical associated with the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getVerticalName(): ?string {
        return $this->getBackingStore()->get('verticalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('countryName', $this->getCountryName());
        $writer->writeStringValue('defaultDomainName', $this->getDefaultDomainName());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('industryName', $this->getIndustryName());
        $writer->writeStringValue('region', $this->getRegion());
        $writer->writeStringValue('segmentName', $this->getSegmentName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('verticalName', $this->getVerticalName());
    }

    /**
     * Sets the city property value. The city where the managed tenant is located. Optional. Read-only.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->getBackingStore()->set('city', $value);
    }

    /**
     * Sets the countryCode property value. The code for the country where the managed tenant is located. Optional. Read-only.
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->getBackingStore()->set('countryCode', $value);
    }

    /**
     * Sets the countryName property value. The name for the country where the managed tenant is located. Optional. Read-only.
     * @param string|null $value Value to set for the countryName property.
    */
    public function setCountryName(?string $value): void {
        $this->getBackingStore()->set('countryName', $value);
    }

    /**
     * Sets the defaultDomainName property value. The default domain name for the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the defaultDomainName property.
    */
    public function setDefaultDomainName(?string $value): void {
        $this->getBackingStore()->set('defaultDomainName', $value);
    }

    /**
     * Sets the displayName property value. The display name for the managed tenant.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the industryName property value. The business industry associated with the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the industryName property.
    */
    public function setIndustryName(?string $value): void {
        $this->getBackingStore()->set('industryName', $value);
    }

    /**
     * Sets the region property value. The region where the managed tenant is located. Optional. Read-only.
     * @param string|null $value Value to set for the region property.
    */
    public function setRegion(?string $value): void {
        $this->getBackingStore()->set('region', $value);
    }

    /**
     * Sets the segmentName property value. The business segment associated with the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the segmentName property.
    */
    public function setSegmentName(?string $value): void {
        $this->getBackingStore()->set('segmentName', $value);
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the verticalName property value. The vertical associated with the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the verticalName property.
    */
    public function setVerticalName(?string $value): void {
        $this->getBackingStore()->set('verticalName', $value);
    }

}
