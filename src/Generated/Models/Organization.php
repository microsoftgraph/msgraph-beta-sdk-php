<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Organization extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new Organization and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.organization');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Organization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Organization {
        return new Organization();
    }

    /**
     * Gets the assignedPlans property value. The collection of service plans associated with the tenant. Not nullable.
     * @return array<AssignedPlan>|null
    */
    public function getAssignedPlans(): ?array {
        return $this->getBackingStore()->get('assignedPlans');
    }

    /**
     * Gets the branding property value. Resource to manage the default branding for the organization. Nullable.
     * @return OrganizationalBranding|null
    */
    public function getBranding(): ?OrganizationalBranding {
        return $this->getBackingStore()->get('branding');
    }

    /**
     * Gets the businessPhones property value. Telephone number for the organization. Although this is a string collection, only one number can be set for this property.
     * @return array<string>|null
    */
    public function getBusinessPhones(): ?array {
        return $this->getBackingStore()->get('businessPhones');
    }

    /**
     * Gets the certificateBasedAuthConfiguration property value. Navigation property to manage certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
     * @return array<CertificateBasedAuthConfiguration>|null
    */
    public function getCertificateBasedAuthConfiguration(): ?array {
        return $this->getBackingStore()->get('certificateBasedAuthConfiguration');
    }

    /**
     * Gets the certificateConnectorSetting property value. Certificate connector setting.
     * @return CertificateConnectorSetting|null
    */
    public function getCertificateConnectorSetting(): ?CertificateConnectorSetting {
        return $this->getBackingStore()->get('certificateConnectorSetting');
    }

    /**
     * Gets the city property value. City name of the address for the organization.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->getBackingStore()->get('city');
    }

    /**
     * Gets the country property value. Country/region name of the address for the organization.
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->getBackingStore()->get('country');
    }

    /**
     * Gets the countryLetterCode property value. Country or region abbreviation for the organization in ISO 3166-2 format.
     * @return string|null
    */
    public function getCountryLetterCode(): ?string {
        return $this->getBackingStore()->get('countryLetterCode');
    }

    /**
     * Gets the createdDateTime property value. Timestamp of when the organization was created. The value cannot be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the defaultUsageLocation property value. Two-letter ISO 3166 country code indicating the default service usage location of an organization.
     * @return string|null
    */
    public function getDefaultUsageLocation(): ?string {
        return $this->getBackingStore()->get('defaultUsageLocation');
    }

    /**
     * Gets the directorySizeQuota property value. The directory size quota information of an organization.
     * @return DirectorySizeQuota|null
    */
    public function getDirectorySizeQuota(): ?DirectorySizeQuota {
        return $this->getBackingStore()->get('directorySizeQuota');
    }

    /**
     * Gets the displayName property value. The display name for the tenant.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the organization resource. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->getBackingStore()->get('extensions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedPlans' => fn(ParseNode $n) => $o->setAssignedPlans($n->getCollectionOfObjectValues([AssignedPlan::class, 'createFromDiscriminatorValue'])),
            'branding' => fn(ParseNode $n) => $o->setBranding($n->getObjectValue([OrganizationalBranding::class, 'createFromDiscriminatorValue'])),
            'businessPhones' => fn(ParseNode $n) => $o->setBusinessPhones($n->getCollectionOfPrimitiveValues()),
            'certificateBasedAuthConfiguration' => fn(ParseNode $n) => $o->setCertificateBasedAuthConfiguration($n->getCollectionOfObjectValues([CertificateBasedAuthConfiguration::class, 'createFromDiscriminatorValue'])),
            'certificateConnectorSetting' => fn(ParseNode $n) => $o->setCertificateConnectorSetting($n->getObjectValue([CertificateConnectorSetting::class, 'createFromDiscriminatorValue'])),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'countryLetterCode' => fn(ParseNode $n) => $o->setCountryLetterCode($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'defaultUsageLocation' => fn(ParseNode $n) => $o->setDefaultUsageLocation($n->getStringValue()),
            'directorySizeQuota' => fn(ParseNode $n) => $o->setDirectorySizeQuota($n->getObjectValue([DirectorySizeQuota::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'isMultipleDataLocationsForServicesEnabled' => fn(ParseNode $n) => $o->setIsMultipleDataLocationsForServicesEnabled($n->getBooleanValue()),
            'marketingNotificationEmails' => fn(ParseNode $n) => $o->setMarketingNotificationEmails($n->getCollectionOfPrimitiveValues()),
            'mobileDeviceManagementAuthority' => fn(ParseNode $n) => $o->setMobileDeviceManagementAuthority($n->getEnumValue(MdmAuthority::class)),
            'onPremisesLastSyncDateTime' => fn(ParseNode $n) => $o->setOnPremisesLastSyncDateTime($n->getDateTimeValue()),
            'onPremisesSyncEnabled' => fn(ParseNode $n) => $o->setOnPremisesSyncEnabled($n->getBooleanValue()),
            'partnerInformation' => fn(ParseNode $n) => $o->setPartnerInformation($n->getObjectValue([PartnerInformation::class, 'createFromDiscriminatorValue'])),
            'partnerTenantType' => fn(ParseNode $n) => $o->setPartnerTenantType($n->getEnumValue(PartnerTenantType::class)),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'preferredLanguage' => fn(ParseNode $n) => $o->setPreferredLanguage($n->getStringValue()),
            'privacyProfile' => fn(ParseNode $n) => $o->setPrivacyProfile($n->getObjectValue([PrivacyProfile::class, 'createFromDiscriminatorValue'])),
            'provisionedPlans' => fn(ParseNode $n) => $o->setProvisionedPlans($n->getCollectionOfObjectValues([ProvisionedPlan::class, 'createFromDiscriminatorValue'])),
            'securityComplianceNotificationMails' => fn(ParseNode $n) => $o->setSecurityComplianceNotificationMails($n->getCollectionOfPrimitiveValues()),
            'securityComplianceNotificationPhones' => fn(ParseNode $n) => $o->setSecurityComplianceNotificationPhones($n->getCollectionOfPrimitiveValues()),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([OrganizationSettings::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'street' => fn(ParseNode $n) => $o->setStreet($n->getStringValue()),
            'technicalNotificationMails' => fn(ParseNode $n) => $o->setTechnicalNotificationMails($n->getCollectionOfPrimitiveValues()),
            'verifiedDomains' => fn(ParseNode $n) => $o->setVerifiedDomains($n->getCollectionOfObjectValues([VerifiedDomain::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isMultipleDataLocationsForServicesEnabled property value. true if organization is Multi-Geo enabled; false if organization is not Multi-Geo enabled; null (default). Read-only. For more information, see OneDrive Online Multi-Geo.
     * @return bool|null
    */
    public function getIsMultipleDataLocationsForServicesEnabled(): ?bool {
        return $this->getBackingStore()->get('isMultipleDataLocationsForServicesEnabled');
    }

    /**
     * Gets the marketingNotificationEmails property value. Not nullable.
     * @return array<string>|null
    */
    public function getMarketingNotificationEmails(): ?array {
        return $this->getBackingStore()->get('marketingNotificationEmails');
    }

    /**
     * Gets the mobileDeviceManagementAuthority property value. Mobile device management authority.
     * @return MdmAuthority|null
    */
    public function getMobileDeviceManagementAuthority(): ?MdmAuthority {
        return $this->getBackingStore()->get('mobileDeviceManagementAuthority');
    }

    /**
     * Gets the onPremisesLastSyncDateTime property value. The time and date at which the tenant was last synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getOnPremisesLastSyncDateTime(): ?DateTime {
        return $this->getBackingStore()->get('onPremisesLastSyncDateTime');
    }

    /**
     * Gets the onPremisesSyncEnabled property value. true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; Nullable. null if this object has never been synced from an on-premises directory (default).
     * @return bool|null
    */
    public function getOnPremisesSyncEnabled(): ?bool {
        return $this->getBackingStore()->get('onPremisesSyncEnabled');
    }

    /**
     * Gets the partnerInformation property value. The partnerInformation property
     * @return PartnerInformation|null
    */
    public function getPartnerInformation(): ?PartnerInformation {
        return $this->getBackingStore()->get('partnerInformation');
    }

    /**
     * Gets the partnerTenantType property value. The type of partnership this tenant has with Microsoft. The possible values are: microsoftSupport, syndicatePartner, breadthPartner, breadthPartnerDelegatedAdmin, resellerPartnerDelegatedAdmin, valueAddedResellerPartnerDelegatedAdmin, unknownFutureValue. Nullable. For more information about the possible types, see partnerTenantType values.
     * @return PartnerTenantType|null
    */
    public function getPartnerTenantType(): ?PartnerTenantType {
        return $this->getBackingStore()->get('partnerTenantType');
    }

    /**
     * Gets the postalCode property value. Postal code of the address for the organization.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->getBackingStore()->get('postalCode');
    }

    /**
     * Gets the preferredLanguage property value. The preferred language for the organization. Should follow ISO 639-1 Code; for example en.
     * @return string|null
    */
    public function getPreferredLanguage(): ?string {
        return $this->getBackingStore()->get('preferredLanguage');
    }

    /**
     * Gets the privacyProfile property value. The privacy profile of an organization.
     * @return PrivacyProfile|null
    */
    public function getPrivacyProfile(): ?PrivacyProfile {
        return $this->getBackingStore()->get('privacyProfile');
    }

    /**
     * Gets the provisionedPlans property value. Not nullable.
     * @return array<ProvisionedPlan>|null
    */
    public function getProvisionedPlans(): ?array {
        return $this->getBackingStore()->get('provisionedPlans');
    }

    /**
     * Gets the securityComplianceNotificationMails property value. The securityComplianceNotificationMails property
     * @return array<string>|null
    */
    public function getSecurityComplianceNotificationMails(): ?array {
        return $this->getBackingStore()->get('securityComplianceNotificationMails');
    }

    /**
     * Gets the securityComplianceNotificationPhones property value. The securityComplianceNotificationPhones property
     * @return array<string>|null
    */
    public function getSecurityComplianceNotificationPhones(): ?array {
        return $this->getBackingStore()->get('securityComplianceNotificationPhones');
    }

    /**
     * Gets the settings property value. Retrieve the properties and relationships of organizationSettings object. Nullable.
     * @return OrganizationSettings|null
    */
    public function getSettings(): ?OrganizationSettings {
        return $this->getBackingStore()->get('settings');
    }

    /**
     * Gets the state property value. State name of the address for the organization.
     * @return string|null
    */
    public function getState(): ?string {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the street property value. Street name of the address for organization.
     * @return string|null
    */
    public function getStreet(): ?string {
        return $this->getBackingStore()->get('street');
    }

    /**
     * Gets the technicalNotificationMails property value. Not nullable.
     * @return array<string>|null
    */
    public function getTechnicalNotificationMails(): ?array {
        return $this->getBackingStore()->get('technicalNotificationMails');
    }

    /**
     * Gets the verifiedDomains property value. The collection of domains associated with this tenant. Not nullable.
     * @return array<VerifiedDomain>|null
    */
    public function getVerifiedDomains(): ?array {
        return $this->getBackingStore()->get('verifiedDomains');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignedPlans', $this->getAssignedPlans());
        $writer->writeObjectValue('branding', $this->getBranding());
        $writer->writeCollectionOfPrimitiveValues('businessPhones', $this->getBusinessPhones());
        $writer->writeCollectionOfObjectValues('certificateBasedAuthConfiguration', $this->getCertificateBasedAuthConfiguration());
        $writer->writeObjectValue('certificateConnectorSetting', $this->getCertificateConnectorSetting());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('countryLetterCode', $this->getCountryLetterCode());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('defaultUsageLocation', $this->getDefaultUsageLocation());
        $writer->writeObjectValue('directorySizeQuota', $this->getDirectorySizeQuota());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeBooleanValue('isMultipleDataLocationsForServicesEnabled', $this->getIsMultipleDataLocationsForServicesEnabled());
        $writer->writeCollectionOfPrimitiveValues('marketingNotificationEmails', $this->getMarketingNotificationEmails());
        $writer->writeEnumValue('mobileDeviceManagementAuthority', $this->getMobileDeviceManagementAuthority());
        $writer->writeDateTimeValue('onPremisesLastSyncDateTime', $this->getOnPremisesLastSyncDateTime());
        $writer->writeBooleanValue('onPremisesSyncEnabled', $this->getOnPremisesSyncEnabled());
        $writer->writeObjectValue('partnerInformation', $this->getPartnerInformation());
        $writer->writeEnumValue('partnerTenantType', $this->getPartnerTenantType());
        $writer->writeStringValue('postalCode', $this->getPostalCode());
        $writer->writeStringValue('preferredLanguage', $this->getPreferredLanguage());
        $writer->writeObjectValue('privacyProfile', $this->getPrivacyProfile());
        $writer->writeCollectionOfObjectValues('provisionedPlans', $this->getProvisionedPlans());
        $writer->writeCollectionOfPrimitiveValues('securityComplianceNotificationMails', $this->getSecurityComplianceNotificationMails());
        $writer->writeCollectionOfPrimitiveValues('securityComplianceNotificationPhones', $this->getSecurityComplianceNotificationPhones());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('street', $this->getStreet());
        $writer->writeCollectionOfPrimitiveValues('technicalNotificationMails', $this->getTechnicalNotificationMails());
        $writer->writeCollectionOfObjectValues('verifiedDomains', $this->getVerifiedDomains());
    }

    /**
     * Sets the assignedPlans property value. The collection of service plans associated with the tenant. Not nullable.
     * @param array<AssignedPlan>|null $value Value to set for the assignedPlans property.
    */
    public function setAssignedPlans(?array $value): void {
        $this->getBackingStore()->set('assignedPlans', $value);
    }

    /**
     * Sets the branding property value. Resource to manage the default branding for the organization. Nullable.
     * @param OrganizationalBranding|null $value Value to set for the branding property.
    */
    public function setBranding(?OrganizationalBranding $value): void {
        $this->getBackingStore()->set('branding', $value);
    }

    /**
     * Sets the businessPhones property value. Telephone number for the organization. Although this is a string collection, only one number can be set for this property.
     * @param array<string>|null $value Value to set for the businessPhones property.
    */
    public function setBusinessPhones(?array $value): void {
        $this->getBackingStore()->set('businessPhones', $value);
    }

    /**
     * Sets the certificateBasedAuthConfiguration property value. Navigation property to manage certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
     * @param array<CertificateBasedAuthConfiguration>|null $value Value to set for the certificateBasedAuthConfiguration property.
    */
    public function setCertificateBasedAuthConfiguration(?array $value): void {
        $this->getBackingStore()->set('certificateBasedAuthConfiguration', $value);
    }

    /**
     * Sets the certificateConnectorSetting property value. Certificate connector setting.
     * @param CertificateConnectorSetting|null $value Value to set for the certificateConnectorSetting property.
    */
    public function setCertificateConnectorSetting(?CertificateConnectorSetting $value): void {
        $this->getBackingStore()->set('certificateConnectorSetting', $value);
    }

    /**
     * Sets the city property value. City name of the address for the organization.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->getBackingStore()->set('city', $value);
    }

    /**
     * Sets the country property value. Country/region name of the address for the organization.
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->getBackingStore()->set('country', $value);
    }

    /**
     * Sets the countryLetterCode property value. Country or region abbreviation for the organization in ISO 3166-2 format.
     * @param string|null $value Value to set for the countryLetterCode property.
    */
    public function setCountryLetterCode(?string $value): void {
        $this->getBackingStore()->set('countryLetterCode', $value);
    }

    /**
     * Sets the createdDateTime property value. Timestamp of when the organization was created. The value cannot be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the defaultUsageLocation property value. Two-letter ISO 3166 country code indicating the default service usage location of an organization.
     * @param string|null $value Value to set for the defaultUsageLocation property.
    */
    public function setDefaultUsageLocation(?string $value): void {
        $this->getBackingStore()->set('defaultUsageLocation', $value);
    }

    /**
     * Sets the directorySizeQuota property value. The directory size quota information of an organization.
     * @param DirectorySizeQuota|null $value Value to set for the directorySizeQuota property.
    */
    public function setDirectorySizeQuota(?DirectorySizeQuota $value): void {
        $this->getBackingStore()->set('directorySizeQuota', $value);
    }

    /**
     * Sets the displayName property value. The display name for the tenant.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the organization resource. Nullable.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the isMultipleDataLocationsForServicesEnabled property value. true if organization is Multi-Geo enabled; false if organization is not Multi-Geo enabled; null (default). Read-only. For more information, see OneDrive Online Multi-Geo.
     * @param bool|null $value Value to set for the isMultipleDataLocationsForServicesEnabled property.
    */
    public function setIsMultipleDataLocationsForServicesEnabled(?bool $value): void {
        $this->getBackingStore()->set('isMultipleDataLocationsForServicesEnabled', $value);
    }

    /**
     * Sets the marketingNotificationEmails property value. Not nullable.
     * @param array<string>|null $value Value to set for the marketingNotificationEmails property.
    */
    public function setMarketingNotificationEmails(?array $value): void {
        $this->getBackingStore()->set('marketingNotificationEmails', $value);
    }

    /**
     * Sets the mobileDeviceManagementAuthority property value. Mobile device management authority.
     * @param MdmAuthority|null $value Value to set for the mobileDeviceManagementAuthority property.
    */
    public function setMobileDeviceManagementAuthority(?MdmAuthority $value): void {
        $this->getBackingStore()->set('mobileDeviceManagementAuthority', $value);
    }

    /**
     * Sets the onPremisesLastSyncDateTime property value. The time and date at which the tenant was last synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the onPremisesLastSyncDateTime property.
    */
    public function setOnPremisesLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('onPremisesLastSyncDateTime', $value);
    }

    /**
     * Sets the onPremisesSyncEnabled property value. true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; Nullable. null if this object has never been synced from an on-premises directory (default).
     * @param bool|null $value Value to set for the onPremisesSyncEnabled property.
    */
    public function setOnPremisesSyncEnabled(?bool $value): void {
        $this->getBackingStore()->set('onPremisesSyncEnabled', $value);
    }

    /**
     * Sets the partnerInformation property value. The partnerInformation property
     * @param PartnerInformation|null $value Value to set for the partnerInformation property.
    */
    public function setPartnerInformation(?PartnerInformation $value): void {
        $this->getBackingStore()->set('partnerInformation', $value);
    }

    /**
     * Sets the partnerTenantType property value. The type of partnership this tenant has with Microsoft. The possible values are: microsoftSupport, syndicatePartner, breadthPartner, breadthPartnerDelegatedAdmin, resellerPartnerDelegatedAdmin, valueAddedResellerPartnerDelegatedAdmin, unknownFutureValue. Nullable. For more information about the possible types, see partnerTenantType values.
     * @param PartnerTenantType|null $value Value to set for the partnerTenantType property.
    */
    public function setPartnerTenantType(?PartnerTenantType $value): void {
        $this->getBackingStore()->set('partnerTenantType', $value);
    }

    /**
     * Sets the postalCode property value. Postal code of the address for the organization.
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->getBackingStore()->set('postalCode', $value);
    }

    /**
     * Sets the preferredLanguage property value. The preferred language for the organization. Should follow ISO 639-1 Code; for example en.
     * @param string|null $value Value to set for the preferredLanguage property.
    */
    public function setPreferredLanguage(?string $value): void {
        $this->getBackingStore()->set('preferredLanguage', $value);
    }

    /**
     * Sets the privacyProfile property value. The privacy profile of an organization.
     * @param PrivacyProfile|null $value Value to set for the privacyProfile property.
    */
    public function setPrivacyProfile(?PrivacyProfile $value): void {
        $this->getBackingStore()->set('privacyProfile', $value);
    }

    /**
     * Sets the provisionedPlans property value. Not nullable.
     * @param array<ProvisionedPlan>|null $value Value to set for the provisionedPlans property.
    */
    public function setProvisionedPlans(?array $value): void {
        $this->getBackingStore()->set('provisionedPlans', $value);
    }

    /**
     * Sets the securityComplianceNotificationMails property value. The securityComplianceNotificationMails property
     * @param array<string>|null $value Value to set for the securityComplianceNotificationMails property.
    */
    public function setSecurityComplianceNotificationMails(?array $value): void {
        $this->getBackingStore()->set('securityComplianceNotificationMails', $value);
    }

    /**
     * Sets the securityComplianceNotificationPhones property value. The securityComplianceNotificationPhones property
     * @param array<string>|null $value Value to set for the securityComplianceNotificationPhones property.
    */
    public function setSecurityComplianceNotificationPhones(?array $value): void {
        $this->getBackingStore()->set('securityComplianceNotificationPhones', $value);
    }

    /**
     * Sets the settings property value. Retrieve the properties and relationships of organizationSettings object. Nullable.
     * @param OrganizationSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?OrganizationSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the state property value. State name of the address for the organization.
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the street property value. Street name of the address for organization.
     * @param string|null $value Value to set for the street property.
    */
    public function setStreet(?string $value): void {
        $this->getBackingStore()->set('street', $value);
    }

    /**
     * Sets the technicalNotificationMails property value. Not nullable.
     * @param array<string>|null $value Value to set for the technicalNotificationMails property.
    */
    public function setTechnicalNotificationMails(?array $value): void {
        $this->getBackingStore()->set('technicalNotificationMails', $value);
    }

    /**
     * Sets the verifiedDomains property value. The collection of domains associated with this tenant. Not nullable.
     * @param array<VerifiedDomain>|null $value Value to set for the verifiedDomains property.
    */
    public function setVerifiedDomains(?array $value): void {
        $this->getBackingStore()->set('verifiedDomains', $value);
    }

}
