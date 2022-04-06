<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IntuneBrand implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<CompanyPortalBlockedAction>|null $companyPortalBlockedActions Collection of blocked actions on the company portal as per platform and device ownership types. */
    private ?array $companyPortalBlockedActions = null;
    
    /** @var string|null $contactITEmailAddress Email address of the person/organization responsible for IT support. */
    private ?string $contactITEmailAddress = null;
    
    /** @var string|null $contactITName Name of the person/organization responsible for IT support. */
    private ?string $contactITName = null;
    
    /** @var string|null $contactITNotes Text comments regarding the person/organization responsible for IT support. */
    private ?string $contactITNotes = null;
    
    /** @var string|null $contactITPhoneNumber Phone number of the person/organization responsible for IT support. */
    private ?string $contactITPhoneNumber = null;
    
    /** @var string|null $customCanSeePrivacyMessage The custom privacy message used to explain what the organization can see and do on managed devices. */
    private ?string $customCanSeePrivacyMessage = null;
    
    /** @var string|null $customCantSeePrivacyMessage The custom privacy message used to explain what the organization can’t see or do on managed devices. */
    private ?string $customCantSeePrivacyMessage = null;
    
    /** @var string|null $customPrivacyMessage The custom privacy message used to explain what the organization can’t see or do on managed devices. */
    private ?string $customPrivacyMessage = null;
    
    /** @var MimeContent|null $darkBackgroundLogo Logo image displayed in Company Portal apps which have a dark background behind the logo. */
    private ?MimeContent $darkBackgroundLogo = null;
    
    /** @var bool|null $disableClientTelemetry Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user. */
    private ?bool $disableClientTelemetry = null;
    
    /** @var string|null $displayName Company/organization name that is displayed to end users. */
    private ?string $displayName = null;
    
    /** @var EnrollmentAvailabilityOptions|null $enrollmentAvailability Customized device enrollment flow displayed to the end user . Possible values are: availableWithPrompts, availableWithoutPrompts, unavailable. */
    private ?EnrollmentAvailabilityOptions $enrollmentAvailability = null;
    
    /** @var bool|null $isFactoryResetDisabled Boolean that represents whether the adminsistrator has disabled the 'Factory Reset' action on corporate owned devices. */
    private ?bool $isFactoryResetDisabled = null;
    
    /** @var bool|null $isRemoveDeviceDisabled Boolean that represents whether the adminsistrator has disabled the 'Remove Device' action on corporate owned devices. */
    private ?bool $isRemoveDeviceDisabled = null;
    
    /** @var MimeContent|null $landingPageCustomizedImage Customized image displayed in Company Portal app landing page */
    private ?MimeContent $landingPageCustomizedImage = null;
    
    /** @var MimeContent|null $lightBackgroundLogo Logo image displayed in Company Portal apps which have a light background behind the logo. */
    private ?MimeContent $lightBackgroundLogo = null;
    
    /** @var string|null $onlineSupportSiteName Display name of the company/organization’s IT helpdesk site. */
    private ?string $onlineSupportSiteName = null;
    
    /** @var string|null $onlineSupportSiteUrl URL to the company/organization’s IT helpdesk site. */
    private ?string $onlineSupportSiteUrl = null;
    
    /** @var string|null $privacyUrl URL to the company/organization’s privacy policy. */
    private ?string $privacyUrl = null;
    
    /** @var array<string>|null $roleScopeTagIds List of scope tags assigned to the default branding profile */
    private ?array $roleScopeTagIds = null;
    
    /** @var bool|null $sendDeviceOwnershipChangePushNotification SendDeviceOwnershipChangePushNotification will be deprecated in 06/2022 and will stop returning a value in 07/2022. A boolean that indicates if a push notification is sent to users when their device ownership type changes from personal to corporate */
    private ?bool $sendDeviceOwnershipChangePushNotification = null;
    
    /** @var bool|null $showAzureADEnterpriseApps Boolean that indicates if AzureAD Enterprise Apps will be shown in Company Portal */
    private ?bool $showAzureADEnterpriseApps = null;
    
    /** @var bool|null $showDisplayNameNextToLogo Boolean that represents whether the administrator-supplied display name will be shown next to the logo image. */
    private ?bool $showDisplayNameNextToLogo = null;
    
    /** @var bool|null $showLogo Boolean that represents whether the administrator-supplied logo images are shown or not shown. */
    private ?bool $showLogo = null;
    
    /** @var bool|null $showNameNextToLogo Boolean that represents whether the administrator-supplied display name will be shown next to the logo image. */
    private ?bool $showNameNextToLogo = null;
    
    /** @var bool|null $showOfficeWebApps Boolean that indicates if Office WebApps will be shown in Company Portal */
    private ?bool $showOfficeWebApps = null;
    
    /** @var RgbColor|null $themeColor Primary theme color used in the Company Portal applications and web portal. */
    private ?RgbColor $themeColor = null;
    
    /**
     * Instantiates a new intuneBrand and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IntuneBrand
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): IntuneBrand {
        return new IntuneBrand();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the companyPortalBlockedActions property value. Collection of blocked actions on the company portal as per platform and device ownership types.
     * @return array<CompanyPortalBlockedAction>|null
    */
    public function getCompanyPortalBlockedActions(): ?array {
        return $this->companyPortalBlockedActions;
    }

    /**
     * Gets the contactITEmailAddress property value. Email address of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITEmailAddress(): ?string {
        return $this->contactITEmailAddress;
    }

    /**
     * Gets the contactITName property value. Name of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITName(): ?string {
        return $this->contactITName;
    }

    /**
     * Gets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITNotes(): ?string {
        return $this->contactITNotes;
    }

    /**
     * Gets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITPhoneNumber(): ?string {
        return $this->contactITPhoneNumber;
    }

    /**
     * Gets the customCanSeePrivacyMessage property value. The custom privacy message used to explain what the organization can see and do on managed devices.
     * @return string|null
    */
    public function getCustomCanSeePrivacyMessage(): ?string {
        return $this->customCanSeePrivacyMessage;
    }

    /**
     * Gets the customCantSeePrivacyMessage property value. The custom privacy message used to explain what the organization can’t see or do on managed devices.
     * @return string|null
    */
    public function getCustomCantSeePrivacyMessage(): ?string {
        return $this->customCantSeePrivacyMessage;
    }

    /**
     * Gets the customPrivacyMessage property value. The custom privacy message used to explain what the organization can’t see or do on managed devices.
     * @return string|null
    */
    public function getCustomPrivacyMessage(): ?string {
        return $this->customPrivacyMessage;
    }

    /**
     * Gets the darkBackgroundLogo property value. Logo image displayed in Company Portal apps which have a dark background behind the logo.
     * @return MimeContent|null
    */
    public function getDarkBackgroundLogo(): ?MimeContent {
        return $this->darkBackgroundLogo;
    }

    /**
     * Gets the disableClientTelemetry property value. Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user.
     * @return bool|null
    */
    public function getDisableClientTelemetry(): ?bool {
        return $this->disableClientTelemetry;
    }

    /**
     * Gets the displayName property value. Company/organization name that is displayed to end users.
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
        return  [
            'companyPortalBlockedActions' => function (self $o, ParseNode $n) { $o->setCompanyPortalBlockedActions($n->getCollectionOfObjectValues(CompanyPortalBlockedAction::class)); },
            'contactITEmailAddress' => function (self $o, ParseNode $n) { $o->setContactITEmailAddress($n->getStringValue()); },
            'contactITName' => function (self $o, ParseNode $n) { $o->setContactITName($n->getStringValue()); },
            'contactITNotes' => function (self $o, ParseNode $n) { $o->setContactITNotes($n->getStringValue()); },
            'contactITPhoneNumber' => function (self $o, ParseNode $n) { $o->setContactITPhoneNumber($n->getStringValue()); },
            'customCanSeePrivacyMessage' => function (self $o, ParseNode $n) { $o->setCustomCanSeePrivacyMessage($n->getStringValue()); },
            'customCantSeePrivacyMessage' => function (self $o, ParseNode $n) { $o->setCustomCantSeePrivacyMessage($n->getStringValue()); },
            'customPrivacyMessage' => function (self $o, ParseNode $n) { $o->setCustomPrivacyMessage($n->getStringValue()); },
            'darkBackgroundLogo' => function (self $o, ParseNode $n) { $o->setDarkBackgroundLogo($n->getObjectValue(MimeContent::class)); },
            'disableClientTelemetry' => function (self $o, ParseNode $n) { $o->setDisableClientTelemetry($n->getBooleanValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'enrollmentAvailability' => function (self $o, ParseNode $n) { $o->setEnrollmentAvailability($n->getEnumValue(EnrollmentAvailabilityOptions::class)); },
            'isFactoryResetDisabled' => function (self $o, ParseNode $n) { $o->setIsFactoryResetDisabled($n->getBooleanValue()); },
            'isRemoveDeviceDisabled' => function (self $o, ParseNode $n) { $o->setIsRemoveDeviceDisabled($n->getBooleanValue()); },
            'landingPageCustomizedImage' => function (self $o, ParseNode $n) { $o->setLandingPageCustomizedImage($n->getObjectValue(MimeContent::class)); },
            'lightBackgroundLogo' => function (self $o, ParseNode $n) { $o->setLightBackgroundLogo($n->getObjectValue(MimeContent::class)); },
            'onlineSupportSiteName' => function (self $o, ParseNode $n) { $o->setOnlineSupportSiteName($n->getStringValue()); },
            'onlineSupportSiteUrl' => function (self $o, ParseNode $n) { $o->setOnlineSupportSiteUrl($n->getStringValue()); },
            'privacyUrl' => function (self $o, ParseNode $n) { $o->setPrivacyUrl($n->getStringValue()); },
            'roleScopeTagIds' => function (self $o, ParseNode $n) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'sendDeviceOwnershipChangePushNotification' => function (self $o, ParseNode $n) { $o->setSendDeviceOwnershipChangePushNotification($n->getBooleanValue()); },
            'showAzureADEnterpriseApps' => function (self $o, ParseNode $n) { $o->setShowAzureADEnterpriseApps($n->getBooleanValue()); },
            'showDisplayNameNextToLogo' => function (self $o, ParseNode $n) { $o->setShowDisplayNameNextToLogo($n->getBooleanValue()); },
            'showLogo' => function (self $o, ParseNode $n) { $o->setShowLogo($n->getBooleanValue()); },
            'showNameNextToLogo' => function (self $o, ParseNode $n) { $o->setShowNameNextToLogo($n->getBooleanValue()); },
            'showOfficeWebApps' => function (self $o, ParseNode $n) { $o->setShowOfficeWebApps($n->getBooleanValue()); },
            'themeColor' => function (self $o, ParseNode $n) { $o->setThemeColor($n->getObjectValue(RgbColor::class)); },
        ];
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
     * Gets the landingPageCustomizedImage property value. Customized image displayed in Company Portal app landing page
     * @return MimeContent|null
    */
    public function getLandingPageCustomizedImage(): ?MimeContent {
        return $this->landingPageCustomizedImage;
    }

    /**
     * Gets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo.
     * @return MimeContent|null
    */
    public function getLightBackgroundLogo(): ?MimeContent {
        return $this->lightBackgroundLogo;
    }

    /**
     * Gets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site.
     * @return string|null
    */
    public function getOnlineSupportSiteName(): ?string {
        return $this->onlineSupportSiteName;
    }

    /**
     * Gets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site.
     * @return string|null
    */
    public function getOnlineSupportSiteUrl(): ?string {
        return $this->onlineSupportSiteUrl;
    }

    /**
     * Gets the privacyUrl property value. URL to the company/organization’s privacy policy.
     * @return string|null
    */
    public function getPrivacyUrl(): ?string {
        return $this->privacyUrl;
    }

    /**
     * Gets the roleScopeTagIds property value. List of scope tags assigned to the default branding profile
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the sendDeviceOwnershipChangePushNotification property value. SendDeviceOwnershipChangePushNotification will be deprecated in 06/2022 and will stop returning a value in 07/2022. A boolean that indicates if a push notification is sent to users when their device ownership type changes from personal to corporate
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
     * Gets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @return bool|null
    */
    public function getShowDisplayNameNextToLogo(): ?bool {
        return $this->showDisplayNameNextToLogo;
    }

    /**
     * Gets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not shown.
     * @return bool|null
    */
    public function getShowLogo(): ?bool {
        return $this->showLogo;
    }

    /**
     * Gets the showNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @return bool|null
    */
    public function getShowNameNextToLogo(): ?bool {
        return $this->showNameNextToLogo;
    }

    /**
     * Gets the showOfficeWebApps property value. Boolean that indicates if Office WebApps will be shown in Company Portal
     * @return bool|null
    */
    public function getShowOfficeWebApps(): ?bool {
        return $this->showOfficeWebApps;
    }

    /**
     * Gets the themeColor property value. Primary theme color used in the Company Portal applications and web portal.
     * @return RgbColor|null
    */
    public function getThemeColor(): ?RgbColor {
        return $this->themeColor;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('companyPortalBlockedActions', $this->companyPortalBlockedActions);
        $writer->writeStringValue('contactITEmailAddress', $this->contactITEmailAddress);
        $writer->writeStringValue('contactITName', $this->contactITName);
        $writer->writeStringValue('contactITNotes', $this->contactITNotes);
        $writer->writeStringValue('contactITPhoneNumber', $this->contactITPhoneNumber);
        $writer->writeStringValue('customCanSeePrivacyMessage', $this->customCanSeePrivacyMessage);
        $writer->writeStringValue('customCantSeePrivacyMessage', $this->customCantSeePrivacyMessage);
        $writer->writeStringValue('customPrivacyMessage', $this->customPrivacyMessage);
        $writer->writeObjectValue('darkBackgroundLogo', $this->darkBackgroundLogo);
        $writer->writeBooleanValue('disableClientTelemetry', $this->disableClientTelemetry);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('enrollmentAvailability', $this->enrollmentAvailability);
        $writer->writeBooleanValue('isFactoryResetDisabled', $this->isFactoryResetDisabled);
        $writer->writeBooleanValue('isRemoveDeviceDisabled', $this->isRemoveDeviceDisabled);
        $writer->writeObjectValue('landingPageCustomizedImage', $this->landingPageCustomizedImage);
        $writer->writeObjectValue('lightBackgroundLogo', $this->lightBackgroundLogo);
        $writer->writeStringValue('onlineSupportSiteName', $this->onlineSupportSiteName);
        $writer->writeStringValue('onlineSupportSiteUrl', $this->onlineSupportSiteUrl);
        $writer->writeStringValue('privacyUrl', $this->privacyUrl);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeBooleanValue('sendDeviceOwnershipChangePushNotification', $this->sendDeviceOwnershipChangePushNotification);
        $writer->writeBooleanValue('showAzureADEnterpriseApps', $this->showAzureADEnterpriseApps);
        $writer->writeBooleanValue('showDisplayNameNextToLogo', $this->showDisplayNameNextToLogo);
        $writer->writeBooleanValue('showLogo', $this->showLogo);
        $writer->writeBooleanValue('showNameNextToLogo', $this->showNameNextToLogo);
        $writer->writeBooleanValue('showOfficeWebApps', $this->showOfficeWebApps);
        $writer->writeObjectValue('themeColor', $this->themeColor);
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
     * Sets the companyPortalBlockedActions property value. Collection of blocked actions on the company portal as per platform and device ownership types.
     *  @param array<CompanyPortalBlockedAction>|null $value Value to set for the companyPortalBlockedActions property.
    */
    public function setCompanyPortalBlockedActions(?array $value ): void {
        $this->companyPortalBlockedActions = $value;
    }

    /**
     * Sets the contactITEmailAddress property value. Email address of the person/organization responsible for IT support.
     *  @param string|null $value Value to set for the contactITEmailAddress property.
    */
    public function setContactITEmailAddress(?string $value ): void {
        $this->contactITEmailAddress = $value;
    }

    /**
     * Sets the contactITName property value. Name of the person/organization responsible for IT support.
     *  @param string|null $value Value to set for the contactITName property.
    */
    public function setContactITName(?string $value ): void {
        $this->contactITName = $value;
    }

    /**
     * Sets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support.
     *  @param string|null $value Value to set for the contactITNotes property.
    */
    public function setContactITNotes(?string $value ): void {
        $this->contactITNotes = $value;
    }

    /**
     * Sets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support.
     *  @param string|null $value Value to set for the contactITPhoneNumber property.
    */
    public function setContactITPhoneNumber(?string $value ): void {
        $this->contactITPhoneNumber = $value;
    }

    /**
     * Sets the customCanSeePrivacyMessage property value. The custom privacy message used to explain what the organization can see and do on managed devices.
     *  @param string|null $value Value to set for the customCanSeePrivacyMessage property.
    */
    public function setCustomCanSeePrivacyMessage(?string $value ): void {
        $this->customCanSeePrivacyMessage = $value;
    }

    /**
     * Sets the customCantSeePrivacyMessage property value. The custom privacy message used to explain what the organization can’t see or do on managed devices.
     *  @param string|null $value Value to set for the customCantSeePrivacyMessage property.
    */
    public function setCustomCantSeePrivacyMessage(?string $value ): void {
        $this->customCantSeePrivacyMessage = $value;
    }

    /**
     * Sets the customPrivacyMessage property value. The custom privacy message used to explain what the organization can’t see or do on managed devices.
     *  @param string|null $value Value to set for the customPrivacyMessage property.
    */
    public function setCustomPrivacyMessage(?string $value ): void {
        $this->customPrivacyMessage = $value;
    }

    /**
     * Sets the darkBackgroundLogo property value. Logo image displayed in Company Portal apps which have a dark background behind the logo.
     *  @param MimeContent|null $value Value to set for the darkBackgroundLogo property.
    */
    public function setDarkBackgroundLogo(?MimeContent $value ): void {
        $this->darkBackgroundLogo = $value;
    }

    /**
     * Sets the disableClientTelemetry property value. Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user.
     *  @param bool|null $value Value to set for the disableClientTelemetry property.
    */
    public function setDisableClientTelemetry(?bool $value ): void {
        $this->disableClientTelemetry = $value;
    }

    /**
     * Sets the displayName property value. Company/organization name that is displayed to end users.
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
     * Sets the landingPageCustomizedImage property value. Customized image displayed in Company Portal app landing page
     *  @param MimeContent|null $value Value to set for the landingPageCustomizedImage property.
    */
    public function setLandingPageCustomizedImage(?MimeContent $value ): void {
        $this->landingPageCustomizedImage = $value;
    }

    /**
     * Sets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo.
     *  @param MimeContent|null $value Value to set for the lightBackgroundLogo property.
    */
    public function setLightBackgroundLogo(?MimeContent $value ): void {
        $this->lightBackgroundLogo = $value;
    }

    /**
     * Sets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site.
     *  @param string|null $value Value to set for the onlineSupportSiteName property.
    */
    public function setOnlineSupportSiteName(?string $value ): void {
        $this->onlineSupportSiteName = $value;
    }

    /**
     * Sets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site.
     *  @param string|null $value Value to set for the onlineSupportSiteUrl property.
    */
    public function setOnlineSupportSiteUrl(?string $value ): void {
        $this->onlineSupportSiteUrl = $value;
    }

    /**
     * Sets the privacyUrl property value. URL to the company/organization’s privacy policy.
     *  @param string|null $value Value to set for the privacyUrl property.
    */
    public function setPrivacyUrl(?string $value ): void {
        $this->privacyUrl = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of scope tags assigned to the default branding profile
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the sendDeviceOwnershipChangePushNotification property value. SendDeviceOwnershipChangePushNotification will be deprecated in 06/2022 and will stop returning a value in 07/2022. A boolean that indicates if a push notification is sent to users when their device ownership type changes from personal to corporate
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
     * Sets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     *  @param bool|null $value Value to set for the showDisplayNameNextToLogo property.
    */
    public function setShowDisplayNameNextToLogo(?bool $value ): void {
        $this->showDisplayNameNextToLogo = $value;
    }

    /**
     * Sets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not shown.
     *  @param bool|null $value Value to set for the showLogo property.
    */
    public function setShowLogo(?bool $value ): void {
        $this->showLogo = $value;
    }

    /**
     * Sets the showNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     *  @param bool|null $value Value to set for the showNameNextToLogo property.
    */
    public function setShowNameNextToLogo(?bool $value ): void {
        $this->showNameNextToLogo = $value;
    }

    /**
     * Sets the showOfficeWebApps property value. Boolean that indicates if Office WebApps will be shown in Company Portal
     *  @param bool|null $value Value to set for the showOfficeWebApps property.
    */
    public function setShowOfficeWebApps(?bool $value ): void {
        $this->showOfficeWebApps = $value;
    }

    /**
     * Sets the themeColor property value. Primary theme color used in the Company Portal applications and web portal.
     *  @param RgbColor|null $value Value to set for the themeColor property.
    */
    public function setThemeColor(?RgbColor $value ): void {
        $this->themeColor = $value;
    }

}
