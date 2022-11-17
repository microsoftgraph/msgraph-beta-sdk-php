<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IntuneBrand implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new intuneBrand and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.intuneBrand');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IntuneBrand
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IntuneBrand {
        return new IntuneBrand();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the companyPortalBlockedActions property value. Collection of blocked actions on the company portal as per platform and device ownership types.
     * @return array<CompanyPortalBlockedAction>|null
    */
    public function getCompanyPortalBlockedActions(): ?array {
        return $this->getBackingStore()->get('companyPortalBlockedActions');
    }

    /**
     * Gets the contactITEmailAddress property value. Email address of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITEmailAddress(): ?string {
        return $this->getBackingStore()->get('contactITEmailAddress');
    }

    /**
     * Gets the contactITName property value. Name of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITName(): ?string {
        return $this->getBackingStore()->get('contactITName');
    }

    /**
     * Gets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITNotes(): ?string {
        return $this->getBackingStore()->get('contactITNotes');
    }

    /**
     * Gets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITPhoneNumber(): ?string {
        return $this->getBackingStore()->get('contactITPhoneNumber');
    }

    /**
     * Gets the customCanSeePrivacyMessage property value. The custom privacy message used to explain what the organization can see and do on managed devices.
     * @return string|null
    */
    public function getCustomCanSeePrivacyMessage(): ?string {
        return $this->getBackingStore()->get('customCanSeePrivacyMessage');
    }

    /**
     * Gets the customCantSeePrivacyMessage property value. The custom privacy message used to explain what the organization can’t see or do on managed devices.
     * @return string|null
    */
    public function getCustomCantSeePrivacyMessage(): ?string {
        return $this->getBackingStore()->get('customCantSeePrivacyMessage');
    }

    /**
     * Gets the customPrivacyMessage property value. The custom privacy message used to explain what the organization can’t see or do on managed devices.
     * @return string|null
    */
    public function getCustomPrivacyMessage(): ?string {
        return $this->getBackingStore()->get('customPrivacyMessage');
    }

    /**
     * Gets the darkBackgroundLogo property value. Logo image displayed in Company Portal apps which have a dark background behind the logo.
     * @return MimeContent|null
    */
    public function getDarkBackgroundLogo(): ?MimeContent {
        return $this->getBackingStore()->get('darkBackgroundLogo');
    }

    /**
     * Gets the disableClientTelemetry property value. Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user.
     * @return bool|null
    */
    public function getDisableClientTelemetry(): ?bool {
        return $this->getBackingStore()->get('disableClientTelemetry');
    }

    /**
     * Gets the displayName property value. Company/organization name that is displayed to end users.
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
        return  [
            'companyPortalBlockedActions' => fn(ParseNode $n) => $o->setCompanyPortalBlockedActions($n->getCollectionOfObjectValues([CompanyPortalBlockedAction::class, 'createFromDiscriminatorValue'])),
            'contactITEmailAddress' => fn(ParseNode $n) => $o->setContactITEmailAddress($n->getStringValue()),
            'contactITName' => fn(ParseNode $n) => $o->setContactITName($n->getStringValue()),
            'contactITNotes' => fn(ParseNode $n) => $o->setContactITNotes($n->getStringValue()),
            'contactITPhoneNumber' => fn(ParseNode $n) => $o->setContactITPhoneNumber($n->getStringValue()),
            'customCanSeePrivacyMessage' => fn(ParseNode $n) => $o->setCustomCanSeePrivacyMessage($n->getStringValue()),
            'customCantSeePrivacyMessage' => fn(ParseNode $n) => $o->setCustomCantSeePrivacyMessage($n->getStringValue()),
            'customPrivacyMessage' => fn(ParseNode $n) => $o->setCustomPrivacyMessage($n->getStringValue()),
            'darkBackgroundLogo' => fn(ParseNode $n) => $o->setDarkBackgroundLogo($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
            'disableClientTelemetry' => fn(ParseNode $n) => $o->setDisableClientTelemetry($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'enrollmentAvailability' => fn(ParseNode $n) => $o->setEnrollmentAvailability($n->getEnumValue(EnrollmentAvailabilityOptions::class)),
            'isFactoryResetDisabled' => fn(ParseNode $n) => $o->setIsFactoryResetDisabled($n->getBooleanValue()),
            'isRemoveDeviceDisabled' => fn(ParseNode $n) => $o->setIsRemoveDeviceDisabled($n->getBooleanValue()),
            'landingPageCustomizedImage' => fn(ParseNode $n) => $o->setLandingPageCustomizedImage($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
            'lightBackgroundLogo' => fn(ParseNode $n) => $o->setLightBackgroundLogo($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'onlineSupportSiteName' => fn(ParseNode $n) => $o->setOnlineSupportSiteName($n->getStringValue()),
            'onlineSupportSiteUrl' => fn(ParseNode $n) => $o->setOnlineSupportSiteUrl($n->getStringValue()),
            'privacyUrl' => fn(ParseNode $n) => $o->setPrivacyUrl($n->getStringValue()),
            'roleScopeTagIds' => fn(ParseNode $n) => $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()),
            'sendDeviceOwnershipChangePushNotification' => fn(ParseNode $n) => $o->setSendDeviceOwnershipChangePushNotification($n->getBooleanValue()),
            'showAzureADEnterpriseApps' => fn(ParseNode $n) => $o->setShowAzureADEnterpriseApps($n->getBooleanValue()),
            'showConfigurationManagerApps' => fn(ParseNode $n) => $o->setShowConfigurationManagerApps($n->getBooleanValue()),
            'showDisplayNameNextToLogo' => fn(ParseNode $n) => $o->setShowDisplayNameNextToLogo($n->getBooleanValue()),
            'showLogo' => fn(ParseNode $n) => $o->setShowLogo($n->getBooleanValue()),
            'showNameNextToLogo' => fn(ParseNode $n) => $o->setShowNameNextToLogo($n->getBooleanValue()),
            'showOfficeWebApps' => fn(ParseNode $n) => $o->setShowOfficeWebApps($n->getBooleanValue()),
            'themeColor' => fn(ParseNode $n) => $o->setThemeColor($n->getObjectValue([RgbColor::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the landingPageCustomizedImage property value. Customized image displayed in Company Portal app landing page
     * @return MimeContent|null
    */
    public function getLandingPageCustomizedImage(): ?MimeContent {
        return $this->getBackingStore()->get('landingPageCustomizedImage');
    }

    /**
     * Gets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo.
     * @return MimeContent|null
    */
    public function getLightBackgroundLogo(): ?MimeContent {
        return $this->getBackingStore()->get('lightBackgroundLogo');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site.
     * @return string|null
    */
    public function getOnlineSupportSiteName(): ?string {
        return $this->getBackingStore()->get('onlineSupportSiteName');
    }

    /**
     * Gets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site.
     * @return string|null
    */
    public function getOnlineSupportSiteUrl(): ?string {
        return $this->getBackingStore()->get('onlineSupportSiteUrl');
    }

    /**
     * Gets the privacyUrl property value. URL to the company/organization’s privacy policy.
     * @return string|null
    */
    public function getPrivacyUrl(): ?string {
        return $this->getBackingStore()->get('privacyUrl');
    }

    /**
     * Gets the roleScopeTagIds property value. List of scope tags assigned to the default branding profile
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
     * Gets the showConfigurationManagerApps property value. Boolean that indicates if ConfigurationManagerApps will be shown in Company Portal
     * @return bool|null
    */
    public function getShowConfigurationManagerApps(): ?bool {
        return $this->getBackingStore()->get('showConfigurationManagerApps');
    }

    /**
     * Gets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @return bool|null
    */
    public function getShowDisplayNameNextToLogo(): ?bool {
        return $this->getBackingStore()->get('showDisplayNameNextToLogo');
    }

    /**
     * Gets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not shown.
     * @return bool|null
    */
    public function getShowLogo(): ?bool {
        return $this->getBackingStore()->get('showLogo');
    }

    /**
     * Gets the showNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @return bool|null
    */
    public function getShowNameNextToLogo(): ?bool {
        return $this->getBackingStore()->get('showNameNextToLogo');
    }

    /**
     * Gets the showOfficeWebApps property value. Boolean that indicates if Office WebApps will be shown in Company Portal
     * @return bool|null
    */
    public function getShowOfficeWebApps(): ?bool {
        return $this->getBackingStore()->get('showOfficeWebApps');
    }

    /**
     * Gets the themeColor property value. Primary theme color used in the Company Portal applications and web portal.
     * @return RgbColor|null
    */
    public function getThemeColor(): ?RgbColor {
        return $this->getBackingStore()->get('themeColor');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('companyPortalBlockedActions', $this->getCompanyPortalBlockedActions());
        $writer->writeStringValue('contactITEmailAddress', $this->getContactITEmailAddress());
        $writer->writeStringValue('contactITName', $this->getContactITName());
        $writer->writeStringValue('contactITNotes', $this->getContactITNotes());
        $writer->writeStringValue('contactITPhoneNumber', $this->getContactITPhoneNumber());
        $writer->writeStringValue('customCanSeePrivacyMessage', $this->getCustomCanSeePrivacyMessage());
        $writer->writeStringValue('customCantSeePrivacyMessage', $this->getCustomCantSeePrivacyMessage());
        $writer->writeStringValue('customPrivacyMessage', $this->getCustomPrivacyMessage());
        $writer->writeObjectValue('darkBackgroundLogo', $this->getDarkBackgroundLogo());
        $writer->writeBooleanValue('disableClientTelemetry', $this->getDisableClientTelemetry());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('enrollmentAvailability', $this->getEnrollmentAvailability());
        $writer->writeBooleanValue('isFactoryResetDisabled', $this->getIsFactoryResetDisabled());
        $writer->writeBooleanValue('isRemoveDeviceDisabled', $this->getIsRemoveDeviceDisabled());
        $writer->writeObjectValue('landingPageCustomizedImage', $this->getLandingPageCustomizedImage());
        $writer->writeObjectValue('lightBackgroundLogo', $this->getLightBackgroundLogo());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('onlineSupportSiteName', $this->getOnlineSupportSiteName());
        $writer->writeStringValue('onlineSupportSiteUrl', $this->getOnlineSupportSiteUrl());
        $writer->writeStringValue('privacyUrl', $this->getPrivacyUrl());
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->getRoleScopeTagIds());
        $writer->writeBooleanValue('sendDeviceOwnershipChangePushNotification', $this->getSendDeviceOwnershipChangePushNotification());
        $writer->writeBooleanValue('showAzureADEnterpriseApps', $this->getShowAzureADEnterpriseApps());
        $writer->writeBooleanValue('showConfigurationManagerApps', $this->getShowConfigurationManagerApps());
        $writer->writeBooleanValue('showDisplayNameNextToLogo', $this->getShowDisplayNameNextToLogo());
        $writer->writeBooleanValue('showLogo', $this->getShowLogo());
        $writer->writeBooleanValue('showNameNextToLogo', $this->getShowNameNextToLogo());
        $writer->writeBooleanValue('showOfficeWebApps', $this->getShowOfficeWebApps());
        $writer->writeObjectValue('themeColor', $this->getThemeColor());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the companyPortalBlockedActions property value. Collection of blocked actions on the company portal as per platform and device ownership types.
     *  @param array<CompanyPortalBlockedAction>|null $value Value to set for the companyPortalBlockedActions property.
    */
    public function setCompanyPortalBlockedActions(?array $value): void {
        $this->getBackingStore()->set('companyPortalBlockedActions', $value);
    }

    /**
     * Sets the contactITEmailAddress property value. Email address of the person/organization responsible for IT support.
     *  @param string|null $value Value to set for the contactITEmailAddress property.
    */
    public function setContactITEmailAddress(?string $value): void {
        $this->getBackingStore()->set('contactITEmailAddress', $value);
    }

    /**
     * Sets the contactITName property value. Name of the person/organization responsible for IT support.
     *  @param string|null $value Value to set for the contactITName property.
    */
    public function setContactITName(?string $value): void {
        $this->getBackingStore()->set('contactITName', $value);
    }

    /**
     * Sets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support.
     *  @param string|null $value Value to set for the contactITNotes property.
    */
    public function setContactITNotes(?string $value): void {
        $this->getBackingStore()->set('contactITNotes', $value);
    }

    /**
     * Sets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support.
     *  @param string|null $value Value to set for the contactITPhoneNumber property.
    */
    public function setContactITPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('contactITPhoneNumber', $value);
    }

    /**
     * Sets the customCanSeePrivacyMessage property value. The custom privacy message used to explain what the organization can see and do on managed devices.
     *  @param string|null $value Value to set for the customCanSeePrivacyMessage property.
    */
    public function setCustomCanSeePrivacyMessage(?string $value): void {
        $this->getBackingStore()->set('customCanSeePrivacyMessage', $value);
    }

    /**
     * Sets the customCantSeePrivacyMessage property value. The custom privacy message used to explain what the organization can’t see or do on managed devices.
     *  @param string|null $value Value to set for the customCantSeePrivacyMessage property.
    */
    public function setCustomCantSeePrivacyMessage(?string $value): void {
        $this->getBackingStore()->set('customCantSeePrivacyMessage', $value);
    }

    /**
     * Sets the customPrivacyMessage property value. The custom privacy message used to explain what the organization can’t see or do on managed devices.
     *  @param string|null $value Value to set for the customPrivacyMessage property.
    */
    public function setCustomPrivacyMessage(?string $value): void {
        $this->getBackingStore()->set('customPrivacyMessage', $value);
    }

    /**
     * Sets the darkBackgroundLogo property value. Logo image displayed in Company Portal apps which have a dark background behind the logo.
     *  @param MimeContent|null $value Value to set for the darkBackgroundLogo property.
    */
    public function setDarkBackgroundLogo(?MimeContent $value): void {
        $this->getBackingStore()->set('darkBackgroundLogo', $value);
    }

    /**
     * Sets the disableClientTelemetry property value. Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user.
     *  @param bool|null $value Value to set for the disableClientTelemetry property.
    */
    public function setDisableClientTelemetry(?bool $value): void {
        $this->getBackingStore()->set('disableClientTelemetry', $value);
    }

    /**
     * Sets the displayName property value. Company/organization name that is displayed to end users.
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
     * Sets the landingPageCustomizedImage property value. Customized image displayed in Company Portal app landing page
     *  @param MimeContent|null $value Value to set for the landingPageCustomizedImage property.
    */
    public function setLandingPageCustomizedImage(?MimeContent $value): void {
        $this->getBackingStore()->set('landingPageCustomizedImage', $value);
    }

    /**
     * Sets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo.
     *  @param MimeContent|null $value Value to set for the lightBackgroundLogo property.
    */
    public function setLightBackgroundLogo(?MimeContent $value): void {
        $this->getBackingStore()->set('lightBackgroundLogo', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site.
     *  @param string|null $value Value to set for the onlineSupportSiteName property.
    */
    public function setOnlineSupportSiteName(?string $value): void {
        $this->getBackingStore()->set('onlineSupportSiteName', $value);
    }

    /**
     * Sets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site.
     *  @param string|null $value Value to set for the onlineSupportSiteUrl property.
    */
    public function setOnlineSupportSiteUrl(?string $value): void {
        $this->getBackingStore()->set('onlineSupportSiteUrl', $value);
    }

    /**
     * Sets the privacyUrl property value. URL to the company/organization’s privacy policy.
     *  @param string|null $value Value to set for the privacyUrl property.
    */
    public function setPrivacyUrl(?string $value): void {
        $this->getBackingStore()->set('privacyUrl', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of scope tags assigned to the default branding profile
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
     * Sets the showConfigurationManagerApps property value. Boolean that indicates if ConfigurationManagerApps will be shown in Company Portal
     *  @param bool|null $value Value to set for the showConfigurationManagerApps property.
    */
    public function setShowConfigurationManagerApps(?bool $value): void {
        $this->getBackingStore()->set('showConfigurationManagerApps', $value);
    }

    /**
     * Sets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     *  @param bool|null $value Value to set for the showDisplayNameNextToLogo property.
    */
    public function setShowDisplayNameNextToLogo(?bool $value): void {
        $this->getBackingStore()->set('showDisplayNameNextToLogo', $value);
    }

    /**
     * Sets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not shown.
     *  @param bool|null $value Value to set for the showLogo property.
    */
    public function setShowLogo(?bool $value): void {
        $this->getBackingStore()->set('showLogo', $value);
    }

    /**
     * Sets the showNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     *  @param bool|null $value Value to set for the showNameNextToLogo property.
    */
    public function setShowNameNextToLogo(?bool $value): void {
        $this->getBackingStore()->set('showNameNextToLogo', $value);
    }

    /**
     * Sets the showOfficeWebApps property value. Boolean that indicates if Office WebApps will be shown in Company Portal
     *  @param bool|null $value Value to set for the showOfficeWebApps property.
    */
    public function setShowOfficeWebApps(?bool $value): void {
        $this->getBackingStore()->set('showOfficeWebApps', $value);
    }

    /**
     * Sets the themeColor property value. Primary theme color used in the Company Portal applications and web portal.
     *  @param RgbColor|null $value Value to set for the themeColor property.
    */
    public function setThemeColor(?RgbColor $value): void {
        $this->getBackingStore()->set('themeColor', $value);
    }

}
