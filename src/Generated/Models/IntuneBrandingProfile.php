<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IntuneBrandingProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new intuneBrandingProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IntuneBrandingProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IntuneBrandingProfile {
        return new IntuneBrandingProfile();
    }

    /**
     * Gets the assignments property value. The list of group assignments for the branding profile
     * @return array<IntuneBrandingProfileAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the companyPortalBlockedActions property value. Collection of blocked actions on the company portal as per platform and device ownership types.
     * @return array<CompanyPortalBlockedAction>|null
    */
    public function getCompanyPortalBlockedActions(): ?array {
        return $this->getBackingStore()->get('companyPortalBlockedActions');
    }

    /**
     * Gets the contactITEmailAddress property value. E-mail address of the person/organization responsible for IT support
     * @return string|null
    */
    public function getContactITEmailAddress(): ?string {
        return $this->getBackingStore()->get('contactITEmailAddress');
    }

    /**
     * Gets the contactITName property value. Name of the person/organization responsible for IT support
     * @return string|null
    */
    public function getContactITName(): ?string {
        return $this->getBackingStore()->get('contactITName');
    }

    /**
     * Gets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support
     * @return string|null
    */
    public function getContactITNotes(): ?string {
        return $this->getBackingStore()->get('contactITNotes');
    }

    /**
     * Gets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support
     * @return string|null
    */
    public function getContactITPhoneNumber(): ?string {
        return $this->getBackingStore()->get('contactITPhoneNumber');
    }

    /**
     * Gets the createdDateTime property value. Time when the BrandingProfile was created
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the customCanSeePrivacyMessage property value. Text comments regarding what the admin has access to on the device
     * @return string|null
    */
    public function getCustomCanSeePrivacyMessage(): ?string {
        return $this->getBackingStore()->get('customCanSeePrivacyMessage');
    }

    /**
     * Gets the customCantSeePrivacyMessage property value. Text comments regarding what the admin doesn't have access to on the device
     * @return string|null
    */
    public function getCustomCantSeePrivacyMessage(): ?string {
        return $this->getBackingStore()->get('customCantSeePrivacyMessage');
    }

    /**
     * Gets the customPrivacyMessage property value. Text comments regarding what the admin doesn't have access to on the device
     * @return string|null
    */
    public function getCustomPrivacyMessage(): ?string {
        return $this->getBackingStore()->get('customPrivacyMessage');
    }

    /**
     * Gets the disableClientTelemetry property value. Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user.
     * @return bool|null
    */
    public function getDisableClientTelemetry(): ?bool {
        return $this->getBackingStore()->get('disableClientTelemetry');
    }

    /**
     * Gets the displayName property value. Company/organization name that is displayed to end users
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the enrollmentAvailability property value. Options available for enrollment flow customization
     * @return EnrollmentAvailabilityOptions|null
    */
    public function getEnrollmentAvailability(): ?EnrollmentAvailabilityOptions {
        return $this->getBackingStore()->get('enrollmentAvailability');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([IntuneBrandingProfileAssignment::class, 'createFromDiscriminatorValue'])),
            'companyPortalBlockedActions' => fn(ParseNode $n) => $o->setCompanyPortalBlockedActions($n->getCollectionOfObjectValues([CompanyPortalBlockedAction::class, 'createFromDiscriminatorValue'])),
            'contactITEmailAddress' => fn(ParseNode $n) => $o->setContactITEmailAddress($n->getStringValue()),
            'contactITName' => fn(ParseNode $n) => $o->setContactITName($n->getStringValue()),
            'contactITNotes' => fn(ParseNode $n) => $o->setContactITNotes($n->getStringValue()),
            'contactITPhoneNumber' => fn(ParseNode $n) => $o->setContactITPhoneNumber($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customCanSeePrivacyMessage' => fn(ParseNode $n) => $o->setCustomCanSeePrivacyMessage($n->getStringValue()),
            'customCantSeePrivacyMessage' => fn(ParseNode $n) => $o->setCustomCantSeePrivacyMessage($n->getStringValue()),
            'customPrivacyMessage' => fn(ParseNode $n) => $o->setCustomPrivacyMessage($n->getStringValue()),
            'disableClientTelemetry' => fn(ParseNode $n) => $o->setDisableClientTelemetry($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enrollmentAvailability' => fn(ParseNode $n) => $o->setEnrollmentAvailability($n->getEnumValue(EnrollmentAvailabilityOptions::class)),
            'isDefaultProfile' => fn(ParseNode $n) => $o->setIsDefaultProfile($n->getBooleanValue()),
            'isFactoryResetDisabled' => fn(ParseNode $n) => $o->setIsFactoryResetDisabled($n->getBooleanValue()),
            'isRemoveDeviceDisabled' => fn(ParseNode $n) => $o->setIsRemoveDeviceDisabled($n->getBooleanValue()),
            'landingPageCustomizedImage' => fn(ParseNode $n) => $o->setLandingPageCustomizedImage($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'lightBackgroundLogo' => fn(ParseNode $n) => $o->setLightBackgroundLogo($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
            'onlineSupportSiteName' => fn(ParseNode $n) => $o->setOnlineSupportSiteName($n->getStringValue()),
            'onlineSupportSiteUrl' => fn(ParseNode $n) => $o->setOnlineSupportSiteUrl($n->getStringValue()),
            'privacyUrl' => fn(ParseNode $n) => $o->setPrivacyUrl($n->getStringValue()),
            'profileDescription' => fn(ParseNode $n) => $o->setProfileDescription($n->getStringValue()),
            'profileName' => fn(ParseNode $n) => $o->setProfileName($n->getStringValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
            'sendDeviceOwnershipChangePushNotification' => fn(ParseNode $n) => $o->setSendDeviceOwnershipChangePushNotification($n->getBooleanValue()),
            'showAzureADEnterpriseApps' => fn(ParseNode $n) => $o->setShowAzureADEnterpriseApps($n->getBooleanValue()),
            'showConfigurationManagerApps' => fn(ParseNode $n) => $o->setShowConfigurationManagerApps($n->getBooleanValue()),
            'showDisplayNameNextToLogo' => fn(ParseNode $n) => $o->setShowDisplayNameNextToLogo($n->getBooleanValue()),
            'showLogo' => fn(ParseNode $n) => $o->setShowLogo($n->getBooleanValue()),
            'showOfficeWebApps' => fn(ParseNode $n) => $o->setShowOfficeWebApps($n->getBooleanValue()),
            'themeColor' => fn(ParseNode $n) => $o->setThemeColor($n->getObjectValue([RgbColor::class, 'createFromDiscriminatorValue'])),
            'themeColorLogo' => fn(ParseNode $n) => $o->setThemeColorLogo($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isDefaultProfile property value. Boolean that represents whether the profile is used as default or not
     * @return bool|null
    */
    public function getIsDefaultProfile(): ?bool {
        return $this->getBackingStore()->get('isDefaultProfile');
    }

    /**
     * Gets the isFactoryResetDisabled property value. Boolean that represents whether the adminsistrator has disabled the 'Factory Reset' action on corporate owned devices.
     * @return bool|null
    */
    public function getIsFactoryResetDisabled(): ?bool {
        return $this->getBackingStore()->get('isFactoryResetDisabled');
    }

    /**
     * Gets the isRemoveDeviceDisabled property value. Boolean that represents whether the adminsistrator has disabled the 'Remove Device' action on corporate owned devices.
     * @return bool|null
    */
    public function getIsRemoveDeviceDisabled(): ?bool {
        return $this->getBackingStore()->get('isRemoveDeviceDisabled');
    }

    /**
     * Gets the landingPageCustomizedImage property value. Customized image displayed in Company Portal apps landing page
     * @return MimeContent|null
    */
    public function getLandingPageCustomizedImage(): ?MimeContent {
        return $this->getBackingStore()->get('landingPageCustomizedImage');
    }

    /**
     * Gets the lastModifiedDateTime property value. Time when the BrandingProfile was last modified
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo
     * @return MimeContent|null
    */
    public function getLightBackgroundLogo(): ?MimeContent {
        return $this->getBackingStore()->get('lightBackgroundLogo');
    }

    /**
     * Gets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site
     * @return string|null
    */
    public function getOnlineSupportSiteName(): ?string {
        return $this->getBackingStore()->get('onlineSupportSiteName');
    }

    /**
     * Gets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site
     * @return string|null
    */
    public function getOnlineSupportSiteUrl(): ?string {
        return $this->getBackingStore()->get('onlineSupportSiteUrl');
    }

    /**
     * Gets the privacyUrl property value. URL to the company/organization’s privacy policy
     * @return string|null
    */
    public function getPrivacyUrl(): ?string {
        return $this->getBackingStore()->get('privacyUrl');
    }

    /**
     * Gets the profileDescription property value. Description of the profile
     * @return string|null
    */
    public function getProfileDescription(): ?string {
        return $this->getBackingStore()->get('profileDescription');
    }

    /**
     * Gets the profileName property value. Name of the profile
     * @return string|null
    */
    public function getProfileName(): ?string {
        return $this->getBackingStore()->get('profileName');
    }

    /**
     * Gets the roleScopeTagIds property value. List of scope tags assigned to the branding profile
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->getBackingStore()->get('roleScopeTagIds');
    }

    /**
     * Gets the sendDeviceOwnershipChangePushNotification property value. Boolean that indicates if a push notification is sent to users when their device ownership type changes from personal to corporate
     * @return bool|null
    */
    public function getSendDeviceOwnershipChangePushNotification(): ?bool {
        return $this->getBackingStore()->get('sendDeviceOwnershipChangePushNotification');
    }

    /**
     * Gets the showAzureADEnterpriseApps property value. Boolean that indicates if AzureAD Enterprise Apps will be shown in Company Portal
     * @return bool|null
    */
    public function getShowAzureADEnterpriseApps(): ?bool {
        return $this->getBackingStore()->get('showAzureADEnterpriseApps');
    }

    /**
     * Gets the showConfigurationManagerApps property value. Boolean that indicates if Configuration Manager Apps will be shown in Company Portal
     * @return bool|null
    */
    public function getShowConfigurationManagerApps(): ?bool {
        return $this->getBackingStore()->get('showConfigurationManagerApps');
    }

    /**
     * Gets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image or not
     * @return bool|null
    */
    public function getShowDisplayNameNextToLogo(): ?bool {
        return $this->getBackingStore()->get('showDisplayNameNextToLogo');
    }

    /**
     * Gets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not
     * @return bool|null
    */
    public function getShowLogo(): ?bool {
        return $this->getBackingStore()->get('showLogo');
    }

    /**
     * Gets the showOfficeWebApps property value. Boolean that indicates if Office WebApps will be shown in Company Portal
     * @return bool|null
    */
    public function getShowOfficeWebApps(): ?bool {
        return $this->getBackingStore()->get('showOfficeWebApps');
    }

    /**
     * Gets the themeColor property value. Primary theme color used in the Company Portal applications and web portal
     * @return RgbColor|null
    */
    public function getThemeColor(): ?RgbColor {
        return $this->getBackingStore()->get('themeColor');
    }

    /**
     * Gets the themeColorLogo property value. Logo image displayed in Company Portal apps which have a theme color background behind the logo
     * @return MimeContent|null
    */
    public function getThemeColorLogo(): ?MimeContent {
        return $this->getBackingStore()->get('themeColorLogo');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeCollectionOfObjectValues('companyPortalBlockedActions', $this->getCompanyPortalBlockedActions());
        $writer->writeStringValue('contactITEmailAddress', $this->getContactITEmailAddress());
        $writer->writeStringValue('contactITName', $this->getContactITName());
        $writer->writeStringValue('contactITNotes', $this->getContactITNotes());
        $writer->writeStringValue('contactITPhoneNumber', $this->getContactITPhoneNumber());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('customCanSeePrivacyMessage', $this->getCustomCanSeePrivacyMessage());
        $writer->writeStringValue('customCantSeePrivacyMessage', $this->getCustomCantSeePrivacyMessage());
        $writer->writeStringValue('customPrivacyMessage', $this->getCustomPrivacyMessage());
        $writer->writeBooleanValue('disableClientTelemetry', $this->getDisableClientTelemetry());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('enrollmentAvailability', $this->getEnrollmentAvailability());
        $writer->writeBooleanValue('isDefaultProfile', $this->getIsDefaultProfile());
        $writer->writeBooleanValue('isFactoryResetDisabled', $this->getIsFactoryResetDisabled());
        $writer->writeBooleanValue('isRemoveDeviceDisabled', $this->getIsRemoveDeviceDisabled());
        $writer->writeObjectValue('landingPageCustomizedImage', $this->getLandingPageCustomizedImage());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('lightBackgroundLogo', $this->getLightBackgroundLogo());
        $writer->writeStringValue('onlineSupportSiteName', $this->getOnlineSupportSiteName());
        $writer->writeStringValue('onlineSupportSiteUrl', $this->getOnlineSupportSiteUrl());
        $writer->writeStringValue('privacyUrl', $this->getPrivacyUrl());
        $writer->writeStringValue('profileDescription', $this->getProfileDescription());
        $writer->writeStringValue('profileName', $this->getProfileName());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeBooleanValue('sendDeviceOwnershipChangePushNotification', $this->getSendDeviceOwnershipChangePushNotification());
        $writer->writeBooleanValue('showAzureADEnterpriseApps', $this->getShowAzureADEnterpriseApps());
        $writer->writeBooleanValue('showConfigurationManagerApps', $this->getShowConfigurationManagerApps());
        $writer->writeBooleanValue('showDisplayNameNextToLogo', $this->getShowDisplayNameNextToLogo());
        $writer->writeBooleanValue('showLogo', $this->getShowLogo());
        $writer->writeBooleanValue('showOfficeWebApps', $this->getShowOfficeWebApps());
        $writer->writeObjectValue('themeColor', $this->getThemeColor());
        $writer->writeObjectValue('themeColorLogo', $this->getThemeColorLogo());
    }

    /**
     * Sets the assignments property value. The list of group assignments for the branding profile
     *  @param array<IntuneBrandingProfileAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the companyPortalBlockedActions property value. Collection of blocked actions on the company portal as per platform and device ownership types.
     *  @param array<CompanyPortalBlockedAction>|null $value Value to set for the companyPortalBlockedActions property.
    */
    public function setCompanyPortalBlockedActions(?array $value): void {
        $this->getBackingStore()->set('companyPortalBlockedActions', $value);
    }

    /**
     * Sets the contactITEmailAddress property value. E-mail address of the person/organization responsible for IT support
     *  @param string|null $value Value to set for the contactITEmailAddress property.
    */
    public function setContactITEmailAddress(?string $value): void {
        $this->getBackingStore()->set('contactITEmailAddress', $value);
    }

    /**
     * Sets the contactITName property value. Name of the person/organization responsible for IT support
     *  @param string|null $value Value to set for the contactITName property.
    */
    public function setContactITName(?string $value): void {
        $this->getBackingStore()->set('contactITName', $value);
    }

    /**
     * Sets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support
     *  @param string|null $value Value to set for the contactITNotes property.
    */
    public function setContactITNotes(?string $value): void {
        $this->getBackingStore()->set('contactITNotes', $value);
    }

    /**
     * Sets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support
     *  @param string|null $value Value to set for the contactITPhoneNumber property.
    */
    public function setContactITPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('contactITPhoneNumber', $value);
    }

    /**
     * Sets the createdDateTime property value. Time when the BrandingProfile was created
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the customCanSeePrivacyMessage property value. Text comments regarding what the admin has access to on the device
     *  @param string|null $value Value to set for the customCanSeePrivacyMessage property.
    */
    public function setCustomCanSeePrivacyMessage(?string $value): void {
        $this->getBackingStore()->set('customCanSeePrivacyMessage', $value);
    }

    /**
     * Sets the customCantSeePrivacyMessage property value. Text comments regarding what the admin doesn't have access to on the device
     *  @param string|null $value Value to set for the customCantSeePrivacyMessage property.
    */
    public function setCustomCantSeePrivacyMessage(?string $value): void {
        $this->getBackingStore()->set('customCantSeePrivacyMessage', $value);
    }

    /**
     * Sets the customPrivacyMessage property value. Text comments regarding what the admin doesn't have access to on the device
     *  @param string|null $value Value to set for the customPrivacyMessage property.
    */
    public function setCustomPrivacyMessage(?string $value): void {
        $this->getBackingStore()->set('customPrivacyMessage', $value);
    }

    /**
     * Sets the disableClientTelemetry property value. Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user.
     *  @param bool|null $value Value to set for the disableClientTelemetry property.
    */
    public function setDisableClientTelemetry(?bool $value): void {
        $this->getBackingStore()->set('disableClientTelemetry', $value);
    }

    /**
     * Sets the displayName property value. Company/organization name that is displayed to end users
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enrollmentAvailability property value. Options available for enrollment flow customization
     *  @param EnrollmentAvailabilityOptions|null $value Value to set for the enrollmentAvailability property.
    */
    public function setEnrollmentAvailability(?EnrollmentAvailabilityOptions $value): void {
        $this->getBackingStore()->set('enrollmentAvailability', $value);
    }

    /**
     * Sets the isDefaultProfile property value. Boolean that represents whether the profile is used as default or not
     *  @param bool|null $value Value to set for the isDefaultProfile property.
    */
    public function setIsDefaultProfile(?bool $value): void {
        $this->getBackingStore()->set('isDefaultProfile', $value);
    }

    /**
     * Sets the isFactoryResetDisabled property value. Boolean that represents whether the adminsistrator has disabled the 'Factory Reset' action on corporate owned devices.
     *  @param bool|null $value Value to set for the isFactoryResetDisabled property.
    */
    public function setIsFactoryResetDisabled(?bool $value): void {
        $this->getBackingStore()->set('isFactoryResetDisabled', $value);
    }

    /**
     * Sets the isRemoveDeviceDisabled property value. Boolean that represents whether the adminsistrator has disabled the 'Remove Device' action on corporate owned devices.
     *  @param bool|null $value Value to set for the isRemoveDeviceDisabled property.
    */
    public function setIsRemoveDeviceDisabled(?bool $value): void {
        $this->getBackingStore()->set('isRemoveDeviceDisabled', $value);
    }

    /**
     * Sets the landingPageCustomizedImage property value. Customized image displayed in Company Portal apps landing page
     *  @param MimeContent|null $value Value to set for the landingPageCustomizedImage property.
    */
    public function setLandingPageCustomizedImage(?MimeContent $value): void {
        $this->getBackingStore()->set('landingPageCustomizedImage', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Time when the BrandingProfile was last modified
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo
     *  @param MimeContent|null $value Value to set for the lightBackgroundLogo property.
    */
    public function setLightBackgroundLogo(?MimeContent $value): void {
        $this->getBackingStore()->set('lightBackgroundLogo', $value);
    }

    /**
     * Sets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site
     *  @param string|null $value Value to set for the onlineSupportSiteName property.
    */
    public function setOnlineSupportSiteName(?string $value): void {
        $this->getBackingStore()->set('onlineSupportSiteName', $value);
    }

    /**
     * Sets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site
     *  @param string|null $value Value to set for the onlineSupportSiteUrl property.
    */
    public function setOnlineSupportSiteUrl(?string $value): void {
        $this->getBackingStore()->set('onlineSupportSiteUrl', $value);
    }

    /**
     * Sets the privacyUrl property value. URL to the company/organization’s privacy policy
     *  @param string|null $value Value to set for the privacyUrl property.
    */
    public function setPrivacyUrl(?string $value): void {
        $this->getBackingStore()->set('privacyUrl', $value);
    }

    /**
     * Sets the profileDescription property value. Description of the profile
     *  @param string|null $value Value to set for the profileDescription property.
    */
    public function setProfileDescription(?string $value): void {
        $this->getBackingStore()->set('profileDescription', $value);
    }

    /**
     * Sets the profileName property value. Name of the profile
     *  @param string|null $value Value to set for the profileName property.
    */
    public function setProfileName(?string $value): void {
        $this->getBackingStore()->set('profileName', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of scope tags assigned to the branding profile
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the sendDeviceOwnershipChangePushNotification property value. Boolean that indicates if a push notification is sent to users when their device ownership type changes from personal to corporate
     *  @param bool|null $value Value to set for the sendDeviceOwnershipChangePushNotification property.
    */
    public function setSendDeviceOwnershipChangePushNotification(?bool $value): void {
        $this->getBackingStore()->set('sendDeviceOwnershipChangePushNotification', $value);
    }

    /**
     * Sets the showAzureADEnterpriseApps property value. Boolean that indicates if AzureAD Enterprise Apps will be shown in Company Portal
     *  @param bool|null $value Value to set for the showAzureADEnterpriseApps property.
    */
    public function setShowAzureADEnterpriseApps(?bool $value): void {
        $this->getBackingStore()->set('showAzureADEnterpriseApps', $value);
    }

    /**
     * Sets the showConfigurationManagerApps property value. Boolean that indicates if Configuration Manager Apps will be shown in Company Portal
     *  @param bool|null $value Value to set for the showConfigurationManagerApps property.
    */
    public function setShowConfigurationManagerApps(?bool $value): void {
        $this->getBackingStore()->set('showConfigurationManagerApps', $value);
    }

    /**
     * Sets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image or not
     *  @param bool|null $value Value to set for the showDisplayNameNextToLogo property.
    */
    public function setShowDisplayNameNextToLogo(?bool $value): void {
        $this->getBackingStore()->set('showDisplayNameNextToLogo', $value);
    }

    /**
     * Sets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not
     *  @param bool|null $value Value to set for the showLogo property.
    */
    public function setShowLogo(?bool $value): void {
        $this->getBackingStore()->set('showLogo', $value);
    }

    /**
     * Sets the showOfficeWebApps property value. Boolean that indicates if Office WebApps will be shown in Company Portal
     *  @param bool|null $value Value to set for the showOfficeWebApps property.
    */
    public function setShowOfficeWebApps(?bool $value): void {
        $this->getBackingStore()->set('showOfficeWebApps', $value);
    }

    /**
     * Sets the themeColor property value. Primary theme color used in the Company Portal applications and web portal
     *  @param RgbColor|null $value Value to set for the themeColor property.
    */
    public function setThemeColor(?RgbColor $value): void {
        $this->getBackingStore()->set('themeColor', $value);
    }

    /**
     * Sets the themeColorLogo property value. Logo image displayed in Company Portal apps which have a theme color background behind the logo
     *  @param MimeContent|null $value Value to set for the themeColorLogo property.
    */
    public function setThemeColorLogo(?MimeContent $value): void {
        $this->getBackingStore()->set('themeColorLogo', $value);
    }

}
