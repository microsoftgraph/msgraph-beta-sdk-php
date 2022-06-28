<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IntuneBrandingProfile extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<IntuneBrandingProfileAssignment>|null $assignments The list of group assignments for the branding profile
    */
    private ?array $assignments = null;
    
    /**
     * @var array<CompanyPortalBlockedAction>|null $companyPortalBlockedActions Collection of blocked actions on the company portal as per platform and device ownership types.
    */
    private ?array $companyPortalBlockedActions = null;
    
    /**
     * @var string|null $contactITEmailAddress E-mail address of the person/organization responsible for IT support
    */
    private ?string $contactITEmailAddress = null;
    
    /**
     * @var string|null $contactITName Name of the person/organization responsible for IT support
    */
    private ?string $contactITName = null;
    
    /**
     * @var string|null $contactITNotes Text comments regarding the person/organization responsible for IT support
    */
    private ?string $contactITNotes = null;
    
    /**
     * @var string|null $contactITPhoneNumber Phone number of the person/organization responsible for IT support
    */
    private ?string $contactITPhoneNumber = null;
    
    /**
     * @var DateTime|null $createdDateTime Time when the BrandingProfile was created
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $customCanSeePrivacyMessage Text comments regarding what the admin has access to on the device
    */
    private ?string $customCanSeePrivacyMessage = null;
    
    /**
     * @var string|null $customCantSeePrivacyMessage Text comments regarding what the admin doesn't have access to on the device
    */
    private ?string $customCantSeePrivacyMessage = null;
    
    /**
     * @var string|null $customPrivacyMessage Text comments regarding what the admin doesn't have access to on the device
    */
    private ?string $customPrivacyMessage = null;
    
    /**
     * @var bool|null $disableClientTelemetry Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user.
    */
    private ?bool $disableClientTelemetry = null;
    
    /**
     * @var string|null $displayName Company/organization name that is displayed to end users
    */
    private ?string $displayName = null;
    
    /**
     * @var EnrollmentAvailabilityOptions|null $enrollmentAvailability Customized device enrollment flow displayed to the end user . Possible values are: availableWithPrompts, availableWithoutPrompts, unavailable.
    */
    private ?EnrollmentAvailabilityOptions $enrollmentAvailability = null;
    
    /**
     * @var bool|null $isDefaultProfile Boolean that represents whether the profile is used as default or not
    */
    private ?bool $isDefaultProfile = null;
    
    /**
     * @var bool|null $isFactoryResetDisabled Boolean that represents whether the adminsistrator has disabled the 'Factory Reset' action on corporate owned devices.
    */
    private ?bool $isFactoryResetDisabled = null;
    
    /**
     * @var bool|null $isRemoveDeviceDisabled Boolean that represents whether the adminsistrator has disabled the 'Remove Device' action on corporate owned devices.
    */
    private ?bool $isRemoveDeviceDisabled = null;
    
    /**
     * @var MimeContent|null $landingPageCustomizedImage Customized image displayed in Company Portal apps landing page
    */
    private ?MimeContent $landingPageCustomizedImage = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Time when the BrandingProfile was last modified
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var MimeContent|null $lightBackgroundLogo Logo image displayed in Company Portal apps which have a light background behind the logo
    */
    private ?MimeContent $lightBackgroundLogo = null;
    
    /**
     * @var string|null $onlineSupportSiteName Display name of the company/organization’s IT helpdesk site
    */
    private ?string $onlineSupportSiteName = null;
    
    /**
     * @var string|null $onlineSupportSiteUrl URL to the company/organization’s IT helpdesk site
    */
    private ?string $onlineSupportSiteUrl = null;
    
    /**
     * @var string|null $privacyUrl URL to the company/organization’s privacy policy
    */
    private ?string $privacyUrl = null;
    
    /**
     * @var string|null $profileDescription Description of the profile
    */
    private ?string $profileDescription = null;
    
    /**
     * @var string|null $profileName Name of the profile
    */
    private ?string $profileName = null;
    
    /**
     * @var array<string>|null $roleScopeTagIds List of scope tags assigned to the branding profile
    */
    private ?array $roleScopeTagIds = null;
    
    /**
     * @var bool|null $sendDeviceOwnershipChangePushNotification Boolean that indicates if a push notification is sent to users when their device ownership type changes from personal to corporate
    */
    private ?bool $sendDeviceOwnershipChangePushNotification = null;
    
    /**
     * @var bool|null $showAzureADEnterpriseApps Boolean that indicates if AzureAD Enterprise Apps will be shown in Company Portal
    */
    private ?bool $showAzureADEnterpriseApps = null;
    
    /**
     * @var bool|null $showDisplayNameNextToLogo Boolean that represents whether the administrator-supplied display name will be shown next to the logo image or not
    */
    private ?bool $showDisplayNameNextToLogo = null;
    
    /**
     * @var bool|null $showLogo Boolean that represents whether the administrator-supplied logo images are shown or not
    */
    private ?bool $showLogo = null;
    
    /**
     * @var bool|null $showOfficeWebApps Boolean that indicates if Office WebApps will be shown in Company Portal
    */
    private ?bool $showOfficeWebApps = null;
    
    /**
     * @var RgbColor|null $themeColor Primary theme color used in the Company Portal applications and web portal
    */
    private ?RgbColor $themeColor = null;
    
    /**
     * @var MimeContent|null $themeColorLogo Logo image displayed in Company Portal apps which have a theme color background behind the logo
    */
    private ?MimeContent $themeColorLogo = null;
    
    /**
     * Instantiates a new IntuneBrandingProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignments property value. The list of group assignments for the branding profile
     * @return array<IntuneBrandingProfileAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the companyPortalBlockedActions property value. Collection of blocked actions on the company portal as per platform and device ownership types.
     * @return array<CompanyPortalBlockedAction>|null
    */
    public function getCompanyPortalBlockedActions(): ?array {
        return $this->companyPortalBlockedActions;
    }

    /**
     * Gets the contactITEmailAddress property value. E-mail address of the person/organization responsible for IT support
     * @return string|null
    */
    public function getContactITEmailAddress(): ?string {
        return $this->contactITEmailAddress;
    }

    /**
     * Gets the contactITName property value. Name of the person/organization responsible for IT support
     * @return string|null
    */
    public function getContactITName(): ?string {
        return $this->contactITName;
    }

    /**
     * Gets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support
     * @return string|null
    */
    public function getContactITNotes(): ?string {
        return $this->contactITNotes;
    }

    /**
     * Gets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support
     * @return string|null
    */
    public function getContactITPhoneNumber(): ?string {
        return $this->contactITPhoneNumber;
    }

    /**
     * Gets the createdDateTime property value. Time when the BrandingProfile was created
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the customCanSeePrivacyMessage property value. Text comments regarding what the admin has access to on the device
     * @return string|null
    */
    public function getCustomCanSeePrivacyMessage(): ?string {
        return $this->customCanSeePrivacyMessage;
    }

    /**
     * Gets the customCantSeePrivacyMessage property value. Text comments regarding what the admin doesn't have access to on the device
     * @return string|null
    */
    public function getCustomCantSeePrivacyMessage(): ?string {
        return $this->customCantSeePrivacyMessage;
    }

    /**
     * Gets the customPrivacyMessage property value. Text comments regarding what the admin doesn't have access to on the device
     * @return string|null
    */
    public function getCustomPrivacyMessage(): ?string {
        return $this->customPrivacyMessage;
    }

    /**
     * Gets the disableClientTelemetry property value. Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user.
     * @return bool|null
    */
    public function getDisableClientTelemetry(): ?bool {
        return $this->disableClientTelemetry;
    }

    /**
     * Gets the displayName property value. Company/organization name that is displayed to end users
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the enrollmentAvailability property value. Customized device enrollment flow displayed to the end user . Possible values are: availableWithPrompts, availableWithoutPrompts, unavailable.
     * @return EnrollmentAvailabilityOptions|null
    */
    public function getEnrollmentAvailability(): ?EnrollmentAvailabilityOptions {
        return $this->enrollmentAvailability;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(IntuneBrandingProfileAssignment::class, 'createFromDiscriminatorValue'))); },
            'companyPortalBlockedActions' => function (ParseNode $n) use ($o) { $o->setCompanyPortalBlockedActions($n->getCollectionOfObjectValues(array(CompanyPortalBlockedAction::class, 'createFromDiscriminatorValue'))); },
            'contactITEmailAddress' => function (ParseNode $n) use ($o) { $o->setContactITEmailAddress($n->getStringValue()); },
            'contactITName' => function (ParseNode $n) use ($o) { $o->setContactITName($n->getStringValue()); },
            'contactITNotes' => function (ParseNode $n) use ($o) { $o->setContactITNotes($n->getStringValue()); },
            'contactITPhoneNumber' => function (ParseNode $n) use ($o) { $o->setContactITPhoneNumber($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'customCanSeePrivacyMessage' => function (ParseNode $n) use ($o) { $o->setCustomCanSeePrivacyMessage($n->getStringValue()); },
            'customCantSeePrivacyMessage' => function (ParseNode $n) use ($o) { $o->setCustomCantSeePrivacyMessage($n->getStringValue()); },
            'customPrivacyMessage' => function (ParseNode $n) use ($o) { $o->setCustomPrivacyMessage($n->getStringValue()); },
            'disableClientTelemetry' => function (ParseNode $n) use ($o) { $o->setDisableClientTelemetry($n->getBooleanValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'enrollmentAvailability' => function (ParseNode $n) use ($o) { $o->setEnrollmentAvailability($n->getEnumValue(EnrollmentAvailabilityOptions::class)); },
            'isDefaultProfile' => function (ParseNode $n) use ($o) { $o->setIsDefaultProfile($n->getBooleanValue()); },
            'isFactoryResetDisabled' => function (ParseNode $n) use ($o) { $o->setIsFactoryResetDisabled($n->getBooleanValue()); },
            'isRemoveDeviceDisabled' => function (ParseNode $n) use ($o) { $o->setIsRemoveDeviceDisabled($n->getBooleanValue()); },
            'landingPageCustomizedImage' => function (ParseNode $n) use ($o) { $o->setLandingPageCustomizedImage($n->getObjectValue(array(MimeContent::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'lightBackgroundLogo' => function (ParseNode $n) use ($o) { $o->setLightBackgroundLogo($n->getObjectValue(array(MimeContent::class, 'createFromDiscriminatorValue'))); },
            'onlineSupportSiteName' => function (ParseNode $n) use ($o) { $o->setOnlineSupportSiteName($n->getStringValue()); },
            'onlineSupportSiteUrl' => function (ParseNode $n) use ($o) { $o->setOnlineSupportSiteUrl($n->getStringValue()); },
            'privacyUrl' => function (ParseNode $n) use ($o) { $o->setPrivacyUrl($n->getStringValue()); },
            'profileDescription' => function (ParseNode $n) use ($o) { $o->setProfileDescription($n->getStringValue()); },
            'profileName' => function (ParseNode $n) use ($o) { $o->setProfileName($n->getStringValue()); },
            'roleScopeTagIds' => function (ParseNode $n) use ($o) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'sendDeviceOwnershipChangePushNotification' => function (ParseNode $n) use ($o) { $o->setSendDeviceOwnershipChangePushNotification($n->getBooleanValue()); },
            'showAzureADEnterpriseApps' => function (ParseNode $n) use ($o) { $o->setShowAzureADEnterpriseApps($n->getBooleanValue()); },
            'showDisplayNameNextToLogo' => function (ParseNode $n) use ($o) { $o->setShowDisplayNameNextToLogo($n->getBooleanValue()); },
            'showLogo' => function (ParseNode $n) use ($o) { $o->setShowLogo($n->getBooleanValue()); },
            'showOfficeWebApps' => function (ParseNode $n) use ($o) { $o->setShowOfficeWebApps($n->getBooleanValue()); },
            'themeColor' => function (ParseNode $n) use ($o) { $o->setThemeColor($n->getObjectValue(array(RgbColor::class, 'createFromDiscriminatorValue'))); },
            'themeColorLogo' => function (ParseNode $n) use ($o) { $o->setThemeColorLogo($n->getObjectValue(array(MimeContent::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isDefaultProfile property value. Boolean that represents whether the profile is used as default or not
     * @return bool|null
    */
    public function getIsDefaultProfile(): ?bool {
        return $this->isDefaultProfile;
    }

    /**
     * Gets the isFactoryResetDisabled property value. Boolean that represents whether the adminsistrator has disabled the 'Factory Reset' action on corporate owned devices.
     * @return bool|null
    */
    public function getIsFactoryResetDisabled(): ?bool {
        return $this->isFactoryResetDisabled;
    }

    /**
     * Gets the isRemoveDeviceDisabled property value. Boolean that represents whether the adminsistrator has disabled the 'Remove Device' action on corporate owned devices.
     * @return bool|null
    */
    public function getIsRemoveDeviceDisabled(): ?bool {
        return $this->isRemoveDeviceDisabled;
    }

    /**
     * Gets the landingPageCustomizedImage property value. Customized image displayed in Company Portal apps landing page
     * @return MimeContent|null
    */
    public function getLandingPageCustomizedImage(): ?MimeContent {
        return $this->landingPageCustomizedImage;
    }

    /**
     * Gets the lastModifiedDateTime property value. Time when the BrandingProfile was last modified
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo
     * @return MimeContent|null
    */
    public function getLightBackgroundLogo(): ?MimeContent {
        return $this->lightBackgroundLogo;
    }

    /**
     * Gets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site
     * @return string|null
    */
    public function getOnlineSupportSiteName(): ?string {
        return $this->onlineSupportSiteName;
    }

    /**
     * Gets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site
     * @return string|null
    */
    public function getOnlineSupportSiteUrl(): ?string {
        return $this->onlineSupportSiteUrl;
    }

    /**
     * Gets the privacyUrl property value. URL to the company/organization’s privacy policy
     * @return string|null
    */
    public function getPrivacyUrl(): ?string {
        return $this->privacyUrl;
    }

    /**
     * Gets the profileDescription property value. Description of the profile
     * @return string|null
    */
    public function getProfileDescription(): ?string {
        return $this->profileDescription;
    }

    /**
     * Gets the profileName property value. Name of the profile
     * @return string|null
    */
    public function getProfileName(): ?string {
        return $this->profileName;
    }

    /**
     * Gets the roleScopeTagIds property value. List of scope tags assigned to the branding profile
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the sendDeviceOwnershipChangePushNotification property value. Boolean that indicates if a push notification is sent to users when their device ownership type changes from personal to corporate
     * @return bool|null
    */
    public function getSendDeviceOwnershipChangePushNotification(): ?bool {
        return $this->sendDeviceOwnershipChangePushNotification;
    }

    /**
     * Gets the showAzureADEnterpriseApps property value. Boolean that indicates if AzureAD Enterprise Apps will be shown in Company Portal
     * @return bool|null
    */
    public function getShowAzureADEnterpriseApps(): ?bool {
        return $this->showAzureADEnterpriseApps;
    }

    /**
     * Gets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image or not
     * @return bool|null
    */
    public function getShowDisplayNameNextToLogo(): ?bool {
        return $this->showDisplayNameNextToLogo;
    }

    /**
     * Gets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not
     * @return bool|null
    */
    public function getShowLogo(): ?bool {
        return $this->showLogo;
    }

    /**
     * Gets the showOfficeWebApps property value. Boolean that indicates if Office WebApps will be shown in Company Portal
     * @return bool|null
    */
    public function getShowOfficeWebApps(): ?bool {
        return $this->showOfficeWebApps;
    }

    /**
     * Gets the themeColor property value. Primary theme color used in the Company Portal applications and web portal
     * @return RgbColor|null
    */
    public function getThemeColor(): ?RgbColor {
        return $this->themeColor;
    }

    /**
     * Gets the themeColorLogo property value. Logo image displayed in Company Portal apps which have a theme color background behind the logo
     * @return MimeContent|null
    */
    public function getThemeColorLogo(): ?MimeContent {
        return $this->themeColorLogo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeCollectionOfObjectValues('companyPortalBlockedActions', $this->companyPortalBlockedActions);
        $writer->writeStringValue('contactITEmailAddress', $this->contactITEmailAddress);
        $writer->writeStringValue('contactITName', $this->contactITName);
        $writer->writeStringValue('contactITNotes', $this->contactITNotes);
        $writer->writeStringValue('contactITPhoneNumber', $this->contactITPhoneNumber);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('customCanSeePrivacyMessage', $this->customCanSeePrivacyMessage);
        $writer->writeStringValue('customCantSeePrivacyMessage', $this->customCantSeePrivacyMessage);
        $writer->writeStringValue('customPrivacyMessage', $this->customPrivacyMessage);
        $writer->writeBooleanValue('disableClientTelemetry', $this->disableClientTelemetry);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('enrollmentAvailability', $this->enrollmentAvailability);
        $writer->writeBooleanValue('isDefaultProfile', $this->isDefaultProfile);
        $writer->writeBooleanValue('isFactoryResetDisabled', $this->isFactoryResetDisabled);
        $writer->writeBooleanValue('isRemoveDeviceDisabled', $this->isRemoveDeviceDisabled);
        $writer->writeObjectValue('landingPageCustomizedImage', $this->landingPageCustomizedImage);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('lightBackgroundLogo', $this->lightBackgroundLogo);
        $writer->writeStringValue('onlineSupportSiteName', $this->onlineSupportSiteName);
        $writer->writeStringValue('onlineSupportSiteUrl', $this->onlineSupportSiteUrl);
        $writer->writeStringValue('privacyUrl', $this->privacyUrl);
        $writer->writeStringValue('profileDescription', $this->profileDescription);
        $writer->writeStringValue('profileName', $this->profileName);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeBooleanValue('sendDeviceOwnershipChangePushNotification', $this->sendDeviceOwnershipChangePushNotification);
        $writer->writeBooleanValue('showAzureADEnterpriseApps', $this->showAzureADEnterpriseApps);
        $writer->writeBooleanValue('showDisplayNameNextToLogo', $this->showDisplayNameNextToLogo);
        $writer->writeBooleanValue('showLogo', $this->showLogo);
        $writer->writeBooleanValue('showOfficeWebApps', $this->showOfficeWebApps);
        $writer->writeObjectValue('themeColor', $this->themeColor);
        $writer->writeObjectValue('themeColorLogo', $this->themeColorLogo);
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
     * Sets the assignments property value. The list of group assignments for the branding profile
     *  @param array<IntuneBrandingProfileAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the companyPortalBlockedActions property value. Collection of blocked actions on the company portal as per platform and device ownership types.
     *  @param array<CompanyPortalBlockedAction>|null $value Value to set for the companyPortalBlockedActions property.
    */
    public function setCompanyPortalBlockedActions(?array $value ): void {
        $this->companyPortalBlockedActions = $value;
    }

    /**
     * Sets the contactITEmailAddress property value. E-mail address of the person/organization responsible for IT support
     *  @param string|null $value Value to set for the contactITEmailAddress property.
    */
    public function setContactITEmailAddress(?string $value ): void {
        $this->contactITEmailAddress = $value;
    }

    /**
     * Sets the contactITName property value. Name of the person/organization responsible for IT support
     *  @param string|null $value Value to set for the contactITName property.
    */
    public function setContactITName(?string $value ): void {
        $this->contactITName = $value;
    }

    /**
     * Sets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support
     *  @param string|null $value Value to set for the contactITNotes property.
    */
    public function setContactITNotes(?string $value ): void {
        $this->contactITNotes = $value;
    }

    /**
     * Sets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support
     *  @param string|null $value Value to set for the contactITPhoneNumber property.
    */
    public function setContactITPhoneNumber(?string $value ): void {
        $this->contactITPhoneNumber = $value;
    }

    /**
     * Sets the createdDateTime property value. Time when the BrandingProfile was created
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the customCanSeePrivacyMessage property value. Text comments regarding what the admin has access to on the device
     *  @param string|null $value Value to set for the customCanSeePrivacyMessage property.
    */
    public function setCustomCanSeePrivacyMessage(?string $value ): void {
        $this->customCanSeePrivacyMessage = $value;
    }

    /**
     * Sets the customCantSeePrivacyMessage property value. Text comments regarding what the admin doesn't have access to on the device
     *  @param string|null $value Value to set for the customCantSeePrivacyMessage property.
    */
    public function setCustomCantSeePrivacyMessage(?string $value ): void {
        $this->customCantSeePrivacyMessage = $value;
    }

    /**
     * Sets the customPrivacyMessage property value. Text comments regarding what the admin doesn't have access to on the device
     *  @param string|null $value Value to set for the customPrivacyMessage property.
    */
    public function setCustomPrivacyMessage(?string $value ): void {
        $this->customPrivacyMessage = $value;
    }

    /**
     * Sets the disableClientTelemetry property value. Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user.
     *  @param bool|null $value Value to set for the disableClientTelemetry property.
    */
    public function setDisableClientTelemetry(?bool $value ): void {
        $this->disableClientTelemetry = $value;
    }

    /**
     * Sets the displayName property value. Company/organization name that is displayed to end users
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the enrollmentAvailability property value. Customized device enrollment flow displayed to the end user . Possible values are: availableWithPrompts, availableWithoutPrompts, unavailable.
     *  @param EnrollmentAvailabilityOptions|null $value Value to set for the enrollmentAvailability property.
    */
    public function setEnrollmentAvailability(?EnrollmentAvailabilityOptions $value ): void {
        $this->enrollmentAvailability = $value;
    }

    /**
     * Sets the isDefaultProfile property value. Boolean that represents whether the profile is used as default or not
     *  @param bool|null $value Value to set for the isDefaultProfile property.
    */
    public function setIsDefaultProfile(?bool $value ): void {
        $this->isDefaultProfile = $value;
    }

    /**
     * Sets the isFactoryResetDisabled property value. Boolean that represents whether the adminsistrator has disabled the 'Factory Reset' action on corporate owned devices.
     *  @param bool|null $value Value to set for the isFactoryResetDisabled property.
    */
    public function setIsFactoryResetDisabled(?bool $value ): void {
        $this->isFactoryResetDisabled = $value;
    }

    /**
     * Sets the isRemoveDeviceDisabled property value. Boolean that represents whether the adminsistrator has disabled the 'Remove Device' action on corporate owned devices.
     *  @param bool|null $value Value to set for the isRemoveDeviceDisabled property.
    */
    public function setIsRemoveDeviceDisabled(?bool $value ): void {
        $this->isRemoveDeviceDisabled = $value;
    }

    /**
     * Sets the landingPageCustomizedImage property value. Customized image displayed in Company Portal apps landing page
     *  @param MimeContent|null $value Value to set for the landingPageCustomizedImage property.
    */
    public function setLandingPageCustomizedImage(?MimeContent $value ): void {
        $this->landingPageCustomizedImage = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Time when the BrandingProfile was last modified
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo
     *  @param MimeContent|null $value Value to set for the lightBackgroundLogo property.
    */
    public function setLightBackgroundLogo(?MimeContent $value ): void {
        $this->lightBackgroundLogo = $value;
    }

    /**
     * Sets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site
     *  @param string|null $value Value to set for the onlineSupportSiteName property.
    */
    public function setOnlineSupportSiteName(?string $value ): void {
        $this->onlineSupportSiteName = $value;
    }

    /**
     * Sets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site
     *  @param string|null $value Value to set for the onlineSupportSiteUrl property.
    */
    public function setOnlineSupportSiteUrl(?string $value ): void {
        $this->onlineSupportSiteUrl = $value;
    }

    /**
     * Sets the privacyUrl property value. URL to the company/organization’s privacy policy
     *  @param string|null $value Value to set for the privacyUrl property.
    */
    public function setPrivacyUrl(?string $value ): void {
        $this->privacyUrl = $value;
    }

    /**
     * Sets the profileDescription property value. Description of the profile
     *  @param string|null $value Value to set for the profileDescription property.
    */
    public function setProfileDescription(?string $value ): void {
        $this->profileDescription = $value;
    }

    /**
     * Sets the profileName property value. Name of the profile
     *  @param string|null $value Value to set for the profileName property.
    */
    public function setProfileName(?string $value ): void {
        $this->profileName = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of scope tags assigned to the branding profile
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the sendDeviceOwnershipChangePushNotification property value. Boolean that indicates if a push notification is sent to users when their device ownership type changes from personal to corporate
     *  @param bool|null $value Value to set for the sendDeviceOwnershipChangePushNotification property.
    */
    public function setSendDeviceOwnershipChangePushNotification(?bool $value ): void {
        $this->sendDeviceOwnershipChangePushNotification = $value;
    }

    /**
     * Sets the showAzureADEnterpriseApps property value. Boolean that indicates if AzureAD Enterprise Apps will be shown in Company Portal
     *  @param bool|null $value Value to set for the showAzureADEnterpriseApps property.
    */
    public function setShowAzureADEnterpriseApps(?bool $value ): void {
        $this->showAzureADEnterpriseApps = $value;
    }

    /**
     * Sets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image or not
     *  @param bool|null $value Value to set for the showDisplayNameNextToLogo property.
    */
    public function setShowDisplayNameNextToLogo(?bool $value ): void {
        $this->showDisplayNameNextToLogo = $value;
    }

    /**
     * Sets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not
     *  @param bool|null $value Value to set for the showLogo property.
    */
    public function setShowLogo(?bool $value ): void {
        $this->showLogo = $value;
    }

    /**
     * Sets the showOfficeWebApps property value. Boolean that indicates if Office WebApps will be shown in Company Portal
     *  @param bool|null $value Value to set for the showOfficeWebApps property.
    */
    public function setShowOfficeWebApps(?bool $value ): void {
        $this->showOfficeWebApps = $value;
    }

    /**
     * Sets the themeColor property value. Primary theme color used in the Company Portal applications and web portal
     *  @param RgbColor|null $value Value to set for the themeColor property.
    */
    public function setThemeColor(?RgbColor $value ): void {
        $this->themeColor = $value;
    }

    /**
     * Sets the themeColorLogo property value. Logo image displayed in Company Portal apps which have a theme color background behind the logo
     *  @param MimeContent|null $value Value to set for the themeColorLogo property.
    */
    public function setThemeColorLogo(?MimeContent $value ): void {
        $this->themeColorLogo = $value;
    }

}
