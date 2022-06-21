<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosDeviceFeaturesConfiguration extends AppleDeviceFeaturesConfigurationBase implements Parsable 
{
    /**
     * @var string|null $assetTagTemplate Asset tag information for the device, displayed on the login window and lock screen.
    */
    private ?string $assetTagTemplate = null;
    
    /**
     * @var IosWebContentFilterBase|null $contentFilterSettings Gets or sets iOS Web Content Filter settings, supervised mode only
    */
    private ?IosWebContentFilterBase $contentFilterSettings = null;
    
    /**
     * @var array<IosHomeScreenItem>|null $homeScreenDockIcons A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
    */
    private ?array $homeScreenDockIcons = null;
    
    /**
     * @var int|null $homeScreenGridHeight Gets or sets the number of rows to render when configuring iOS home screen layout settings. If this value is configured, homeScreenGridWidth must be configured as well.
    */
    private ?int $homeScreenGridHeight = null;
    
    /**
     * @var int|null $homeScreenGridWidth Gets or sets the number of columns to render when configuring iOS home screen layout settings. If this value is configured, homeScreenGridHeight must be configured as well.
    */
    private ?int $homeScreenGridWidth = null;
    
    /**
     * @var array<IosHomeScreenPage>|null $homeScreenPages A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
    */
    private ?array $homeScreenPages = null;
    
    /**
     * @var IosCertificateProfileBase|null $identityCertificateForClientAuthentication Identity Certificate for the renewal of Kerberos ticket used in single sign-on settings.
    */
    private ?IosCertificateProfileBase $identityCertificateForClientAuthentication = null;
    
    /**
     * @var IosSingleSignOnExtension|null $iosSingleSignOnExtension Gets or sets a single sign-on extension profile.
    */
    private ?IosSingleSignOnExtension $iosSingleSignOnExtension = null;
    
    /**
     * @var string|null $lockScreenFootnote A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
    */
    private ?string $lockScreenFootnote = null;
    
    /**
     * @var array<IosNotificationSettings>|null $notificationSettings Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
    */
    private ?array $notificationSettings = null;
    
    /**
     * @var SingleSignOnExtension|null $singleSignOnExtension Gets or sets a single sign-on extension profile. Deprecated: use IOSSingleSignOnExtension instead.
    */
    private ?SingleSignOnExtension $singleSignOnExtension = null;
    
    /**
     * @var IosCertificateProfileBase|null $singleSignOnExtensionPkinitCertificate PKINIT Certificate for the authentication with single sign-on extension settings.
    */
    private ?IosCertificateProfileBase $singleSignOnExtensionPkinitCertificate = null;
    
    /**
     * @var IosSingleSignOnSettings|null $singleSignOnSettings The Kerberos login settings that enable apps on receiving devices to authenticate smoothly.
    */
    private ?IosSingleSignOnSettings $singleSignOnSettings = null;
    
    /**
     * @var IosWallpaperDisplayLocation|null $wallpaperDisplayLocation A wallpaper display location specifier. Possible values are: notConfigured, lockScreen, homeScreen, lockAndHomeScreens.
    */
    private ?IosWallpaperDisplayLocation $wallpaperDisplayLocation = null;
    
    /**
     * @var MimeContent|null $wallpaperImage A wallpaper image must be in either PNG or JPEG format. It requires a supervised device with iOS 8 or later version.
    */
    private ?MimeContent $wallpaperImage = null;
    
    /**
     * Instantiates a new IosDeviceFeaturesConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosDeviceFeaturesConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosDeviceFeaturesConfiguration {
        return new IosDeviceFeaturesConfiguration();
    }

    /**
     * Gets the assetTagTemplate property value. Asset tag information for the device, displayed on the login window and lock screen.
     * @return string|null
    */
    public function getAssetTagTemplate(): ?string {
        return $this->assetTagTemplate;
    }

    /**
     * Gets the contentFilterSettings property value. Gets or sets iOS Web Content Filter settings, supervised mode only
     * @return IosWebContentFilterBase|null
    */
    public function getContentFilterSettings(): ?IosWebContentFilterBase {
        return $this->contentFilterSettings;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assetTagTemplate' => function (ParseNode $n) use ($o) { $o->setAssetTagTemplate($n->getStringValue()); },
            'contentFilterSettings' => function (ParseNode $n) use ($o) { $o->setContentFilterSettings($n->getObjectValue(array(IosWebContentFilterBase::class, 'createFromDiscriminatorValue'))); },
            'homeScreenDockIcons' => function (ParseNode $n) use ($o) { $o->setHomeScreenDockIcons($n->getCollectionOfObjectValues(array(IosHomeScreenItem::class, 'createFromDiscriminatorValue'))); },
            'homeScreenGridHeight' => function (ParseNode $n) use ($o) { $o->setHomeScreenGridHeight($n->getIntegerValue()); },
            'homeScreenGridWidth' => function (ParseNode $n) use ($o) { $o->setHomeScreenGridWidth($n->getIntegerValue()); },
            'homeScreenPages' => function (ParseNode $n) use ($o) { $o->setHomeScreenPages($n->getCollectionOfObjectValues(array(IosHomeScreenPage::class, 'createFromDiscriminatorValue'))); },
            'identityCertificateForClientAuthentication' => function (ParseNode $n) use ($o) { $o->setIdentityCertificateForClientAuthentication($n->getObjectValue(array(IosCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'iosSingleSignOnExtension' => function (ParseNode $n) use ($o) { $o->setIosSingleSignOnExtension($n->getObjectValue(array(IosSingleSignOnExtension::class, 'createFromDiscriminatorValue'))); },
            'lockScreenFootnote' => function (ParseNode $n) use ($o) { $o->setLockScreenFootnote($n->getStringValue()); },
            'notificationSettings' => function (ParseNode $n) use ($o) { $o->setNotificationSettings($n->getCollectionOfObjectValues(array(IosNotificationSettings::class, 'createFromDiscriminatorValue'))); },
            'singleSignOnExtension' => function (ParseNode $n) use ($o) { $o->setSingleSignOnExtension($n->getObjectValue(array(SingleSignOnExtension::class, 'createFromDiscriminatorValue'))); },
            'singleSignOnExtensionPkinitCertificate' => function (ParseNode $n) use ($o) { $o->setSingleSignOnExtensionPkinitCertificate($n->getObjectValue(array(IosCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'singleSignOnSettings' => function (ParseNode $n) use ($o) { $o->setSingleSignOnSettings($n->getObjectValue(array(IosSingleSignOnSettings::class, 'createFromDiscriminatorValue'))); },
            'wallpaperDisplayLocation' => function (ParseNode $n) use ($o) { $o->setWallpaperDisplayLocation($n->getEnumValue(IosWallpaperDisplayLocation::class)); },
            'wallpaperImage' => function (ParseNode $n) use ($o) { $o->setWallpaperImage($n->getObjectValue(array(MimeContent::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the homeScreenDockIcons property value. A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
     * @return array<IosHomeScreenItem>|null
    */
    public function getHomeScreenDockIcons(): ?array {
        return $this->homeScreenDockIcons;
    }

    /**
     * Gets the homeScreenGridHeight property value. Gets or sets the number of rows to render when configuring iOS home screen layout settings. If this value is configured, homeScreenGridWidth must be configured as well.
     * @return int|null
    */
    public function getHomeScreenGridHeight(): ?int {
        return $this->homeScreenGridHeight;
    }

    /**
     * Gets the homeScreenGridWidth property value. Gets or sets the number of columns to render when configuring iOS home screen layout settings. If this value is configured, homeScreenGridHeight must be configured as well.
     * @return int|null
    */
    public function getHomeScreenGridWidth(): ?int {
        return $this->homeScreenGridWidth;
    }

    /**
     * Gets the homeScreenPages property value. A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
     * @return array<IosHomeScreenPage>|null
    */
    public function getHomeScreenPages(): ?array {
        return $this->homeScreenPages;
    }

    /**
     * Gets the identityCertificateForClientAuthentication property value. Identity Certificate for the renewal of Kerberos ticket used in single sign-on settings.
     * @return IosCertificateProfileBase|null
    */
    public function getIdentityCertificateForClientAuthentication(): ?IosCertificateProfileBase {
        return $this->identityCertificateForClientAuthentication;
    }

    /**
     * Gets the iosSingleSignOnExtension property value. Gets or sets a single sign-on extension profile.
     * @return IosSingleSignOnExtension|null
    */
    public function getIosSingleSignOnExtension(): ?IosSingleSignOnExtension {
        return $this->iosSingleSignOnExtension;
    }

    /**
     * Gets the lockScreenFootnote property value. A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
     * @return string|null
    */
    public function getLockScreenFootnote(): ?string {
        return $this->lockScreenFootnote;
    }

    /**
     * Gets the notificationSettings property value. Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
     * @return array<IosNotificationSettings>|null
    */
    public function getNotificationSettings(): ?array {
        return $this->notificationSettings;
    }

    /**
     * Gets the singleSignOnExtension property value. Gets or sets a single sign-on extension profile. Deprecated: use IOSSingleSignOnExtension instead.
     * @return SingleSignOnExtension|null
    */
    public function getSingleSignOnExtension(): ?SingleSignOnExtension {
        return $this->singleSignOnExtension;
    }

    /**
     * Gets the singleSignOnExtensionPkinitCertificate property value. PKINIT Certificate for the authentication with single sign-on extension settings.
     * @return IosCertificateProfileBase|null
    */
    public function getSingleSignOnExtensionPkinitCertificate(): ?IosCertificateProfileBase {
        return $this->singleSignOnExtensionPkinitCertificate;
    }

    /**
     * Gets the singleSignOnSettings property value. The Kerberos login settings that enable apps on receiving devices to authenticate smoothly.
     * @return IosSingleSignOnSettings|null
    */
    public function getSingleSignOnSettings(): ?IosSingleSignOnSettings {
        return $this->singleSignOnSettings;
    }

    /**
     * Gets the wallpaperDisplayLocation property value. A wallpaper display location specifier. Possible values are: notConfigured, lockScreen, homeScreen, lockAndHomeScreens.
     * @return IosWallpaperDisplayLocation|null
    */
    public function getWallpaperDisplayLocation(): ?IosWallpaperDisplayLocation {
        return $this->wallpaperDisplayLocation;
    }

    /**
     * Gets the wallpaperImage property value. A wallpaper image must be in either PNG or JPEG format. It requires a supervised device with iOS 8 or later version.
     * @return MimeContent|null
    */
    public function getWallpaperImage(): ?MimeContent {
        return $this->wallpaperImage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assetTagTemplate', $this->assetTagTemplate);
        $writer->writeObjectValue('contentFilterSettings', $this->contentFilterSettings);
        $writer->writeCollectionOfObjectValues('homeScreenDockIcons', $this->homeScreenDockIcons);
        $writer->writeIntegerValue('homeScreenGridHeight', $this->homeScreenGridHeight);
        $writer->writeIntegerValue('homeScreenGridWidth', $this->homeScreenGridWidth);
        $writer->writeCollectionOfObjectValues('homeScreenPages', $this->homeScreenPages);
        $writer->writeObjectValue('identityCertificateForClientAuthentication', $this->identityCertificateForClientAuthentication);
        $writer->writeObjectValue('iosSingleSignOnExtension', $this->iosSingleSignOnExtension);
        $writer->writeStringValue('lockScreenFootnote', $this->lockScreenFootnote);
        $writer->writeCollectionOfObjectValues('notificationSettings', $this->notificationSettings);
        $writer->writeObjectValue('singleSignOnExtension', $this->singleSignOnExtension);
        $writer->writeObjectValue('singleSignOnExtensionPkinitCertificate', $this->singleSignOnExtensionPkinitCertificate);
        $writer->writeObjectValue('singleSignOnSettings', $this->singleSignOnSettings);
        $writer->writeEnumValue('wallpaperDisplayLocation', $this->wallpaperDisplayLocation);
        $writer->writeObjectValue('wallpaperImage', $this->wallpaperImage);
    }

    /**
     * Sets the assetTagTemplate property value. Asset tag information for the device, displayed on the login window and lock screen.
     *  @param string|null $value Value to set for the assetTagTemplate property.
    */
    public function setAssetTagTemplate(?string $value ): void {
        $this->assetTagTemplate = $value;
    }

    /**
     * Sets the contentFilterSettings property value. Gets or sets iOS Web Content Filter settings, supervised mode only
     *  @param IosWebContentFilterBase|null $value Value to set for the contentFilterSettings property.
    */
    public function setContentFilterSettings(?IosWebContentFilterBase $value ): void {
        $this->contentFilterSettings = $value;
    }

    /**
     * Sets the homeScreenDockIcons property value. A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
     *  @param array<IosHomeScreenItem>|null $value Value to set for the homeScreenDockIcons property.
    */
    public function setHomeScreenDockIcons(?array $value ): void {
        $this->homeScreenDockIcons = $value;
    }

    /**
     * Sets the homeScreenGridHeight property value. Gets or sets the number of rows to render when configuring iOS home screen layout settings. If this value is configured, homeScreenGridWidth must be configured as well.
     *  @param int|null $value Value to set for the homeScreenGridHeight property.
    */
    public function setHomeScreenGridHeight(?int $value ): void {
        $this->homeScreenGridHeight = $value;
    }

    /**
     * Sets the homeScreenGridWidth property value. Gets or sets the number of columns to render when configuring iOS home screen layout settings. If this value is configured, homeScreenGridHeight must be configured as well.
     *  @param int|null $value Value to set for the homeScreenGridWidth property.
    */
    public function setHomeScreenGridWidth(?int $value ): void {
        $this->homeScreenGridWidth = $value;
    }

    /**
     * Sets the homeScreenPages property value. A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
     *  @param array<IosHomeScreenPage>|null $value Value to set for the homeScreenPages property.
    */
    public function setHomeScreenPages(?array $value ): void {
        $this->homeScreenPages = $value;
    }

    /**
     * Sets the identityCertificateForClientAuthentication property value. Identity Certificate for the renewal of Kerberos ticket used in single sign-on settings.
     *  @param IosCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?IosCertificateProfileBase $value ): void {
        $this->identityCertificateForClientAuthentication = $value;
    }

    /**
     * Sets the iosSingleSignOnExtension property value. Gets or sets a single sign-on extension profile.
     *  @param IosSingleSignOnExtension|null $value Value to set for the iosSingleSignOnExtension property.
    */
    public function setIosSingleSignOnExtension(?IosSingleSignOnExtension $value ): void {
        $this->iosSingleSignOnExtension = $value;
    }

    /**
     * Sets the lockScreenFootnote property value. A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
     *  @param string|null $value Value to set for the lockScreenFootnote property.
    */
    public function setLockScreenFootnote(?string $value ): void {
        $this->lockScreenFootnote = $value;
    }

    /**
     * Sets the notificationSettings property value. Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
     *  @param array<IosNotificationSettings>|null $value Value to set for the notificationSettings property.
    */
    public function setNotificationSettings(?array $value ): void {
        $this->notificationSettings = $value;
    }

    /**
     * Sets the singleSignOnExtension property value. Gets or sets a single sign-on extension profile. Deprecated: use IOSSingleSignOnExtension instead.
     *  @param SingleSignOnExtension|null $value Value to set for the singleSignOnExtension property.
    */
    public function setSingleSignOnExtension(?SingleSignOnExtension $value ): void {
        $this->singleSignOnExtension = $value;
    }

    /**
     * Sets the singleSignOnExtensionPkinitCertificate property value. PKINIT Certificate for the authentication with single sign-on extension settings.
     *  @param IosCertificateProfileBase|null $value Value to set for the singleSignOnExtensionPkinitCertificate property.
    */
    public function setSingleSignOnExtensionPkinitCertificate(?IosCertificateProfileBase $value ): void {
        $this->singleSignOnExtensionPkinitCertificate = $value;
    }

    /**
     * Sets the singleSignOnSettings property value. The Kerberos login settings that enable apps on receiving devices to authenticate smoothly.
     *  @param IosSingleSignOnSettings|null $value Value to set for the singleSignOnSettings property.
    */
    public function setSingleSignOnSettings(?IosSingleSignOnSettings $value ): void {
        $this->singleSignOnSettings = $value;
    }

    /**
     * Sets the wallpaperDisplayLocation property value. A wallpaper display location specifier. Possible values are: notConfigured, lockScreen, homeScreen, lockAndHomeScreens.
     *  @param IosWallpaperDisplayLocation|null $value Value to set for the wallpaperDisplayLocation property.
    */
    public function setWallpaperDisplayLocation(?IosWallpaperDisplayLocation $value ): void {
        $this->wallpaperDisplayLocation = $value;
    }

    /**
     * Sets the wallpaperImage property value. A wallpaper image must be in either PNG or JPEG format. It requires a supervised device with iOS 8 or later version.
     *  @param MimeContent|null $value Value to set for the wallpaperImage property.
    */
    public function setWallpaperImage(?MimeContent $value ): void {
        $this->wallpaperImage = $value;
    }

}
