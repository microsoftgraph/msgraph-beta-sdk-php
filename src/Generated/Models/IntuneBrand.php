<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
*/
class IntuneBrand implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IntuneBrand and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
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
        $val = $this->getBackingStore()->get('companyPortalBlockedActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CompanyPortalBlockedAction::class);
            /** @var array<CompanyPortalBlockedAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'companyPortalBlockedActions'");
    }

    /**
     * Gets the contactITEmailAddress property value. Email address of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITEmailAddress(): ?string {
        $val = $this->getBackingStore()->get('contactITEmailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contactITEmailAddress'");
    }

    /**
     * Gets the contactITName property value. Name of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITName(): ?string {
        $val = $this->getBackingStore()->get('contactITName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contactITName'");
    }

    /**
     * Gets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITNotes(): ?string {
        $val = $this->getBackingStore()->get('contactITNotes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contactITNotes'");
    }

    /**
     * Gets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support.
     * @return string|null
    */
    public function getContactITPhoneNumber(): ?string {
        $val = $this->getBackingStore()->get('contactITPhoneNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contactITPhoneNumber'");
    }

    /**
     * Gets the customCanSeePrivacyMessage property value. The custom privacy message used to explain what the organization can see and do on managed devices.
     * @return string|null
    */
    public function getCustomCanSeePrivacyMessage(): ?string {
        $val = $this->getBackingStore()->get('customCanSeePrivacyMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customCanSeePrivacyMessage'");
    }

    /**
     * Gets the customCantSeePrivacyMessage property value. The custom privacy message used to explain what the organization can’t see or do on managed devices.
     * @return string|null
    */
    public function getCustomCantSeePrivacyMessage(): ?string {
        $val = $this->getBackingStore()->get('customCantSeePrivacyMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customCantSeePrivacyMessage'");
    }

    /**
     * Gets the customPrivacyMessage property value. The custom privacy message used to explain what the organization can’t see or do on managed devices.
     * @return string|null
    */
    public function getCustomPrivacyMessage(): ?string {
        $val = $this->getBackingStore()->get('customPrivacyMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customPrivacyMessage'");
    }

    /**
     * Gets the darkBackgroundLogo property value. Logo image displayed in Company Portal apps which have a dark background behind the logo.
     * @return MimeContent|null
    */
    public function getDarkBackgroundLogo(): ?MimeContent {
        $val = $this->getBackingStore()->get('darkBackgroundLogo');
        if (is_null($val) || $val instanceof MimeContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'darkBackgroundLogo'");
    }

    /**
     * Gets the disableClientTelemetry property value. Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user.
     * @return bool|null
    */
    public function getDisableClientTelemetry(): ?bool {
        $val = $this->getBackingStore()->get('disableClientTelemetry');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableClientTelemetry'");
    }

    /**
     * Gets the disableDeviceCategorySelection property value. Boolean that indicates if Device Category Selection will be shown in Company Portal
     * @return bool|null
    */
    public function getDisableDeviceCategorySelection(): ?bool {
        $val = $this->getBackingStore()->get('disableDeviceCategorySelection');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableDeviceCategorySelection'");
    }

    /**
     * Gets the displayName property value. Company/organization name that is displayed to end users.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the enrollmentAvailability property value. Options available for enrollment flow customization
     * @return EnrollmentAvailabilityOptions|null
    */
    public function getEnrollmentAvailability(): ?EnrollmentAvailabilityOptions {
        $val = $this->getBackingStore()->get('enrollmentAvailability');
        if (is_null($val) || $val instanceof EnrollmentAvailabilityOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentAvailability'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'disableDeviceCategorySelection' => fn(ParseNode $n) => $o->setDisableDeviceCategorySelection($n->getBooleanValue()),
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
            'roleScopeTagIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRoleScopeTagIds($val);
            },
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
        $val = $this->getBackingStore()->get('isFactoryResetDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFactoryResetDisabled'");
    }

    /**
     * Gets the isRemoveDeviceDisabled property value. Boolean that represents whether the adminsistrator has disabled the 'Remove Device' action on corporate owned devices.
     * @return bool|null
    */
    public function getIsRemoveDeviceDisabled(): ?bool {
        $val = $this->getBackingStore()->get('isRemoveDeviceDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRemoveDeviceDisabled'");
    }

    /**
     * Gets the landingPageCustomizedImage property value. Customized image displayed in Company Portal app landing page
     * @return MimeContent|null
    */
    public function getLandingPageCustomizedImage(): ?MimeContent {
        $val = $this->getBackingStore()->get('landingPageCustomizedImage');
        if (is_null($val) || $val instanceof MimeContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'landingPageCustomizedImage'");
    }

    /**
     * Gets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo.
     * @return MimeContent|null
    */
    public function getLightBackgroundLogo(): ?MimeContent {
        $val = $this->getBackingStore()->get('lightBackgroundLogo');
        if (is_null($val) || $val instanceof MimeContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lightBackgroundLogo'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site.
     * @return string|null
    */
    public function getOnlineSupportSiteName(): ?string {
        $val = $this->getBackingStore()->get('onlineSupportSiteName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onlineSupportSiteName'");
    }

    /**
     * Gets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site.
     * @return string|null
    */
    public function getOnlineSupportSiteUrl(): ?string {
        $val = $this->getBackingStore()->get('onlineSupportSiteUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onlineSupportSiteUrl'");
    }

    /**
     * Gets the privacyUrl property value. URL to the company/organization’s privacy policy.
     * @return string|null
    */
    public function getPrivacyUrl(): ?string {
        $val = $this->getBackingStore()->get('privacyUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privacyUrl'");
    }

    /**
     * Gets the roleScopeTagIds property value. List of scope tags assigned to the default branding profile
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        $val = $this->getBackingStore()->get('roleScopeTagIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleScopeTagIds'");
    }

    /**
     * Gets the sendDeviceOwnershipChangePushNotification property value. Boolean that indicates if a push notification is sent to users when their device ownership type changes from personal to corporate
     * @return bool|null
    */
    public function getSendDeviceOwnershipChangePushNotification(): ?bool {
        $val = $this->getBackingStore()->get('sendDeviceOwnershipChangePushNotification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sendDeviceOwnershipChangePushNotification'");
    }

    /**
     * Gets the showAzureADEnterpriseApps property value. Boolean that indicates if AzureAD Enterprise Apps will be shown in Company Portal
     * @return bool|null
    */
    public function getShowAzureADEnterpriseApps(): ?bool {
        $val = $this->getBackingStore()->get('showAzureADEnterpriseApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showAzureADEnterpriseApps'");
    }

    /**
     * Gets the showConfigurationManagerApps property value. Boolean that indicates if ConfigurationManagerApps will be shown in Company Portal
     * @return bool|null
    */
    public function getShowConfigurationManagerApps(): ?bool {
        $val = $this->getBackingStore()->get('showConfigurationManagerApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showConfigurationManagerApps'");
    }

    /**
     * Gets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @return bool|null
    */
    public function getShowDisplayNameNextToLogo(): ?bool {
        $val = $this->getBackingStore()->get('showDisplayNameNextToLogo');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showDisplayNameNextToLogo'");
    }

    /**
     * Gets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not shown.
     * @return bool|null
    */
    public function getShowLogo(): ?bool {
        $val = $this->getBackingStore()->get('showLogo');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showLogo'");
    }

    /**
     * Gets the showNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @return bool|null
    */
    public function getShowNameNextToLogo(): ?bool {
        $val = $this->getBackingStore()->get('showNameNextToLogo');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showNameNextToLogo'");
    }

    /**
     * Gets the showOfficeWebApps property value. Boolean that indicates if Office WebApps will be shown in Company Portal
     * @return bool|null
    */
    public function getShowOfficeWebApps(): ?bool {
        $val = $this->getBackingStore()->get('showOfficeWebApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showOfficeWebApps'");
    }

    /**
     * Gets the themeColor property value. Primary theme color used in the Company Portal applications and web portal.
     * @return RgbColor|null
    */
    public function getThemeColor(): ?RgbColor {
        $val = $this->getBackingStore()->get('themeColor');
        if (is_null($val) || $val instanceof RgbColor) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'themeColor'");
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
        $writer->writeBooleanValue('disableDeviceCategorySelection', $this->getDisableDeviceCategorySelection());
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
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the companyPortalBlockedActions property value. Collection of blocked actions on the company portal as per platform and device ownership types.
     * @param array<CompanyPortalBlockedAction>|null $value Value to set for the companyPortalBlockedActions property.
    */
    public function setCompanyPortalBlockedActions(?array $value): void {
        $this->getBackingStore()->set('companyPortalBlockedActions', $value);
    }

    /**
     * Sets the contactITEmailAddress property value. Email address of the person/organization responsible for IT support.
     * @param string|null $value Value to set for the contactITEmailAddress property.
    */
    public function setContactITEmailAddress(?string $value): void {
        $this->getBackingStore()->set('contactITEmailAddress', $value);
    }

    /**
     * Sets the contactITName property value. Name of the person/organization responsible for IT support.
     * @param string|null $value Value to set for the contactITName property.
    */
    public function setContactITName(?string $value): void {
        $this->getBackingStore()->set('contactITName', $value);
    }

    /**
     * Sets the contactITNotes property value. Text comments regarding the person/organization responsible for IT support.
     * @param string|null $value Value to set for the contactITNotes property.
    */
    public function setContactITNotes(?string $value): void {
        $this->getBackingStore()->set('contactITNotes', $value);
    }

    /**
     * Sets the contactITPhoneNumber property value. Phone number of the person/organization responsible for IT support.
     * @param string|null $value Value to set for the contactITPhoneNumber property.
    */
    public function setContactITPhoneNumber(?string $value): void {
        $this->getBackingStore()->set('contactITPhoneNumber', $value);
    }

    /**
     * Sets the customCanSeePrivacyMessage property value. The custom privacy message used to explain what the organization can see and do on managed devices.
     * @param string|null $value Value to set for the customCanSeePrivacyMessage property.
    */
    public function setCustomCanSeePrivacyMessage(?string $value): void {
        $this->getBackingStore()->set('customCanSeePrivacyMessage', $value);
    }

    /**
     * Sets the customCantSeePrivacyMessage property value. The custom privacy message used to explain what the organization can’t see or do on managed devices.
     * @param string|null $value Value to set for the customCantSeePrivacyMessage property.
    */
    public function setCustomCantSeePrivacyMessage(?string $value): void {
        $this->getBackingStore()->set('customCantSeePrivacyMessage', $value);
    }

    /**
     * Sets the customPrivacyMessage property value. The custom privacy message used to explain what the organization can’t see or do on managed devices.
     * @param string|null $value Value to set for the customPrivacyMessage property.
    */
    public function setCustomPrivacyMessage(?string $value): void {
        $this->getBackingStore()->set('customPrivacyMessage', $value);
    }

    /**
     * Sets the darkBackgroundLogo property value. Logo image displayed in Company Portal apps which have a dark background behind the logo.
     * @param MimeContent|null $value Value to set for the darkBackgroundLogo property.
    */
    public function setDarkBackgroundLogo(?MimeContent $value): void {
        $this->getBackingStore()->set('darkBackgroundLogo', $value);
    }

    /**
     * Sets the disableClientTelemetry property value. Applies to telemetry sent from all clients to the Intune service. When disabled, all proactive troubleshooting and issue warnings within the client are turned off, and telemetry settings appear inactive or hidden to the device user.
     * @param bool|null $value Value to set for the disableClientTelemetry property.
    */
    public function setDisableClientTelemetry(?bool $value): void {
        $this->getBackingStore()->set('disableClientTelemetry', $value);
    }

    /**
     * Sets the disableDeviceCategorySelection property value. Boolean that indicates if Device Category Selection will be shown in Company Portal
     * @param bool|null $value Value to set for the disableDeviceCategorySelection property.
    */
    public function setDisableDeviceCategorySelection(?bool $value): void {
        $this->getBackingStore()->set('disableDeviceCategorySelection', $value);
    }

    /**
     * Sets the displayName property value. Company/organization name that is displayed to end users.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the enrollmentAvailability property value. Options available for enrollment flow customization
     * @param EnrollmentAvailabilityOptions|null $value Value to set for the enrollmentAvailability property.
    */
    public function setEnrollmentAvailability(?EnrollmentAvailabilityOptions $value): void {
        $this->getBackingStore()->set('enrollmentAvailability', $value);
    }

    /**
     * Sets the isFactoryResetDisabled property value. Boolean that represents whether the adminsistrator has disabled the 'Factory Reset' action on corporate owned devices.
     * @param bool|null $value Value to set for the isFactoryResetDisabled property.
    */
    public function setIsFactoryResetDisabled(?bool $value): void {
        $this->getBackingStore()->set('isFactoryResetDisabled', $value);
    }

    /**
     * Sets the isRemoveDeviceDisabled property value. Boolean that represents whether the adminsistrator has disabled the 'Remove Device' action on corporate owned devices.
     * @param bool|null $value Value to set for the isRemoveDeviceDisabled property.
    */
    public function setIsRemoveDeviceDisabled(?bool $value): void {
        $this->getBackingStore()->set('isRemoveDeviceDisabled', $value);
    }

    /**
     * Sets the landingPageCustomizedImage property value. Customized image displayed in Company Portal app landing page
     * @param MimeContent|null $value Value to set for the landingPageCustomizedImage property.
    */
    public function setLandingPageCustomizedImage(?MimeContent $value): void {
        $this->getBackingStore()->set('landingPageCustomizedImage', $value);
    }

    /**
     * Sets the lightBackgroundLogo property value. Logo image displayed in Company Portal apps which have a light background behind the logo.
     * @param MimeContent|null $value Value to set for the lightBackgroundLogo property.
    */
    public function setLightBackgroundLogo(?MimeContent $value): void {
        $this->getBackingStore()->set('lightBackgroundLogo', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the onlineSupportSiteName property value. Display name of the company/organization’s IT helpdesk site.
     * @param string|null $value Value to set for the onlineSupportSiteName property.
    */
    public function setOnlineSupportSiteName(?string $value): void {
        $this->getBackingStore()->set('onlineSupportSiteName', $value);
    }

    /**
     * Sets the onlineSupportSiteUrl property value. URL to the company/organization’s IT helpdesk site.
     * @param string|null $value Value to set for the onlineSupportSiteUrl property.
    */
    public function setOnlineSupportSiteUrl(?string $value): void {
        $this->getBackingStore()->set('onlineSupportSiteUrl', $value);
    }

    /**
     * Sets the privacyUrl property value. URL to the company/organization’s privacy policy.
     * @param string|null $value Value to set for the privacyUrl property.
    */
    public function setPrivacyUrl(?string $value): void {
        $this->getBackingStore()->set('privacyUrl', $value);
    }

    /**
     * Sets the roleScopeTagIds property value. List of scope tags assigned to the default branding profile
     * @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value): void {
        $this->getBackingStore()->set('roleScopeTagIds', $value);
    }

    /**
     * Sets the sendDeviceOwnershipChangePushNotification property value. Boolean that indicates if a push notification is sent to users when their device ownership type changes from personal to corporate
     * @param bool|null $value Value to set for the sendDeviceOwnershipChangePushNotification property.
    */
    public function setSendDeviceOwnershipChangePushNotification(?bool $value): void {
        $this->getBackingStore()->set('sendDeviceOwnershipChangePushNotification', $value);
    }

    /**
     * Sets the showAzureADEnterpriseApps property value. Boolean that indicates if AzureAD Enterprise Apps will be shown in Company Portal
     * @param bool|null $value Value to set for the showAzureADEnterpriseApps property.
    */
    public function setShowAzureADEnterpriseApps(?bool $value): void {
        $this->getBackingStore()->set('showAzureADEnterpriseApps', $value);
    }

    /**
     * Sets the showConfigurationManagerApps property value. Boolean that indicates if ConfigurationManagerApps will be shown in Company Portal
     * @param bool|null $value Value to set for the showConfigurationManagerApps property.
    */
    public function setShowConfigurationManagerApps(?bool $value): void {
        $this->getBackingStore()->set('showConfigurationManagerApps', $value);
    }

    /**
     * Sets the showDisplayNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @param bool|null $value Value to set for the showDisplayNameNextToLogo property.
    */
    public function setShowDisplayNameNextToLogo(?bool $value): void {
        $this->getBackingStore()->set('showDisplayNameNextToLogo', $value);
    }

    /**
     * Sets the showLogo property value. Boolean that represents whether the administrator-supplied logo images are shown or not shown.
     * @param bool|null $value Value to set for the showLogo property.
    */
    public function setShowLogo(?bool $value): void {
        $this->getBackingStore()->set('showLogo', $value);
    }

    /**
     * Sets the showNameNextToLogo property value. Boolean that represents whether the administrator-supplied display name will be shown next to the logo image.
     * @param bool|null $value Value to set for the showNameNextToLogo property.
    */
    public function setShowNameNextToLogo(?bool $value): void {
        $this->getBackingStore()->set('showNameNextToLogo', $value);
    }

    /**
     * Sets the showOfficeWebApps property value. Boolean that indicates if Office WebApps will be shown in Company Portal
     * @param bool|null $value Value to set for the showOfficeWebApps property.
    */
    public function setShowOfficeWebApps(?bool $value): void {
        $this->getBackingStore()->set('showOfficeWebApps', $value);
    }

    /**
     * Sets the themeColor property value. Primary theme color used in the Company Portal applications and web portal.
     * @param RgbColor|null $value Value to set for the themeColor property.
    */
    public function setThemeColor(?RgbColor $value): void {
        $this->getBackingStore()->set('themeColor', $value);
    }

}
