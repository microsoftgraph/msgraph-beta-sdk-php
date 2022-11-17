<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosDeviceFeaturesConfiguration extends AppleDeviceFeaturesConfigurationBase implements Parsable 
{
    /**
     * Instantiates a new IosDeviceFeaturesConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosDeviceFeaturesConfiguration');
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
        return $this->getBackingStore()->get('assetTagTemplate');
    }

    /**
     * Gets the contentFilterSettings property value. Gets or sets iOS Web Content Filter settings, supervised mode only
     * @return IosWebContentFilterBase|null
    */
    public function getContentFilterSettings(): ?IosWebContentFilterBase {
        return $this->getBackingStore()->get('contentFilterSettings');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assetTagTemplate' => fn(ParseNode $n) => $o->setAssetTagTemplate($n->getStringValue()),
            'contentFilterSettings' => fn(ParseNode $n) => $o->setContentFilterSettings($n->getObjectValue([IosWebContentFilterBase::class, 'createFromDiscriminatorValue'])),
            'homeScreenDockIcons' => fn(ParseNode $n) => $o->setHomeScreenDockIcons($n->getCollectionOfObjectValues([IosHomeScreenItem::class, 'createFromDiscriminatorValue'])),
            'homeScreenGridHeight' => fn(ParseNode $n) => $o->setHomeScreenGridHeight($n->getIntegerValue()),
            'homeScreenGridWidth' => fn(ParseNode $n) => $o->setHomeScreenGridWidth($n->getIntegerValue()),
            'homeScreenPages' => fn(ParseNode $n) => $o->setHomeScreenPages($n->getCollectionOfObjectValues([IosHomeScreenPage::class, 'createFromDiscriminatorValue'])),
            'identityCertificateForClientAuthentication' => fn(ParseNode $n) => $o->setIdentityCertificateForClientAuthentication($n->getObjectValue([IosCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'iosSingleSignOnExtension' => fn(ParseNode $n) => $o->setIosSingleSignOnExtension($n->getObjectValue([IosSingleSignOnExtension::class, 'createFromDiscriminatorValue'])),
            'lockScreenFootnote' => fn(ParseNode $n) => $o->setLockScreenFootnote($n->getStringValue()),
            'notificationSettings' => fn(ParseNode $n) => $o->setNotificationSettings($n->getCollectionOfObjectValues([IosNotificationSettings::class, 'createFromDiscriminatorValue'])),
            'singleSignOnExtension' => fn(ParseNode $n) => $o->setSingleSignOnExtension($n->getObjectValue([SingleSignOnExtension::class, 'createFromDiscriminatorValue'])),
            'singleSignOnExtensionPkinitCertificate' => fn(ParseNode $n) => $o->setSingleSignOnExtensionPkinitCertificate($n->getObjectValue([IosCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'singleSignOnSettings' => fn(ParseNode $n) => $o->setSingleSignOnSettings($n->getObjectValue([IosSingleSignOnSettings::class, 'createFromDiscriminatorValue'])),
            'wallpaperDisplayLocation' => fn(ParseNode $n) => $o->setWallpaperDisplayLocation($n->getEnumValue(IosWallpaperDisplayLocation::class)),
            'wallpaperImage' => fn(ParseNode $n) => $o->setWallpaperImage($n->getObjectValue([MimeContent::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the homeScreenDockIcons property value. A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
     * @return array<IosHomeScreenItem>|null
    */
    public function getHomeScreenDockIcons(): ?array {
        return $this->getBackingStore()->get('homeScreenDockIcons');
    }

    /**
     * Gets the homeScreenGridHeight property value. Gets or sets the number of rows to render when configuring iOS home screen layout settings. If this value is configured, homeScreenGridWidth must be configured as well.
     * @return int|null
    */
    public function getHomeScreenGridHeight(): ?int {
        return $this->getBackingStore()->get('homeScreenGridHeight');
    }

    /**
     * Gets the homeScreenGridWidth property value. Gets or sets the number of columns to render when configuring iOS home screen layout settings. If this value is configured, homeScreenGridHeight must be configured as well.
     * @return int|null
    */
    public function getHomeScreenGridWidth(): ?int {
        return $this->getBackingStore()->get('homeScreenGridWidth');
    }

    /**
     * Gets the homeScreenPages property value. A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
     * @return array<IosHomeScreenPage>|null
    */
    public function getHomeScreenPages(): ?array {
        return $this->getBackingStore()->get('homeScreenPages');
    }

    /**
     * Gets the identityCertificateForClientAuthentication property value. Identity Certificate for the renewal of Kerberos ticket used in single sign-on settings.
     * @return IosCertificateProfileBase|null
    */
    public function getIdentityCertificateForClientAuthentication(): ?IosCertificateProfileBase {
        return $this->getBackingStore()->get('identityCertificateForClientAuthentication');
    }

    /**
     * Gets the iosSingleSignOnExtension property value. Gets or sets a single sign-on extension profile.
     * @return IosSingleSignOnExtension|null
    */
    public function getIosSingleSignOnExtension(): ?IosSingleSignOnExtension {
        return $this->getBackingStore()->get('iosSingleSignOnExtension');
    }

    /**
     * Gets the lockScreenFootnote property value. A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
     * @return string|null
    */
    public function getLockScreenFootnote(): ?string {
        return $this->getBackingStore()->get('lockScreenFootnote');
    }

    /**
     * Gets the notificationSettings property value. Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
     * @return array<IosNotificationSettings>|null
    */
    public function getNotificationSettings(): ?array {
        return $this->getBackingStore()->get('notificationSettings');
    }

    /**
     * Gets the singleSignOnExtension property value. Gets or sets a single sign-on extension profile. Deprecated: use IOSSingleSignOnExtension instead.
     * @return SingleSignOnExtension|null
    */
    public function getSingleSignOnExtension(): ?SingleSignOnExtension {
        return $this->getBackingStore()->get('singleSignOnExtension');
    }

    /**
     * Gets the singleSignOnExtensionPkinitCertificate property value. PKINIT Certificate for the authentication with single sign-on extension settings.
     * @return IosCertificateProfileBase|null
    */
    public function getSingleSignOnExtensionPkinitCertificate(): ?IosCertificateProfileBase {
        return $this->getBackingStore()->get('singleSignOnExtensionPkinitCertificate');
    }

    /**
     * Gets the singleSignOnSettings property value. The Kerberos login settings that enable apps on receiving devices to authenticate smoothly.
     * @return IosSingleSignOnSettings|null
    */
    public function getSingleSignOnSettings(): ?IosSingleSignOnSettings {
        return $this->getBackingStore()->get('singleSignOnSettings');
    }

    /**
     * Gets the wallpaperDisplayLocation property value. An enum type for wallpaper display location specifier.
     * @return IosWallpaperDisplayLocation|null
    */
    public function getWallpaperDisplayLocation(): ?IosWallpaperDisplayLocation {
        return $this->getBackingStore()->get('wallpaperDisplayLocation');
    }

    /**
     * Gets the wallpaperImage property value. A wallpaper image must be in either PNG or JPEG format. It requires a supervised device with iOS 8 or later version.
     * @return MimeContent|null
    */
    public function getWallpaperImage(): ?MimeContent {
        return $this->getBackingStore()->get('wallpaperImage');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('assetTagTemplate', $this->getAssetTagTemplate());
        $writer->writeObjectValue('contentFilterSettings', $this->getContentFilterSettings());
        $writer->writeCollectionOfObjectValues('homeScreenDockIcons', $this->getHomeScreenDockIcons());
        $writer->writeIntegerValue('homeScreenGridHeight', $this->getHomeScreenGridHeight());
        $writer->writeIntegerValue('homeScreenGridWidth', $this->getHomeScreenGridWidth());
        $writer->writeCollectionOfObjectValues('homeScreenPages', $this->getHomeScreenPages());
        $writer->writeObjectValue('identityCertificateForClientAuthentication', $this->getIdentityCertificateForClientAuthentication());
        $writer->writeObjectValue('iosSingleSignOnExtension', $this->getIosSingleSignOnExtension());
        $writer->writeStringValue('lockScreenFootnote', $this->getLockScreenFootnote());
        $writer->writeCollectionOfObjectValues('notificationSettings', $this->getNotificationSettings());
        $writer->writeObjectValue('singleSignOnExtension', $this->getSingleSignOnExtension());
        $writer->writeObjectValue('singleSignOnExtensionPkinitCertificate', $this->getSingleSignOnExtensionPkinitCertificate());
        $writer->writeObjectValue('singleSignOnSettings', $this->getSingleSignOnSettings());
        $writer->writeEnumValue('wallpaperDisplayLocation', $this->getWallpaperDisplayLocation());
        $writer->writeObjectValue('wallpaperImage', $this->getWallpaperImage());
    }

    /**
     * Sets the assetTagTemplate property value. Asset tag information for the device, displayed on the login window and lock screen.
     *  @param string|null $value Value to set for the assetTagTemplate property.
    */
    public function setAssetTagTemplate(?string $value): void {
        $this->getBackingStore()->set('assetTagTemplate', $value);
    }

    /**
     * Sets the contentFilterSettings property value. Gets or sets iOS Web Content Filter settings, supervised mode only
     *  @param IosWebContentFilterBase|null $value Value to set for the contentFilterSettings property.
    */
    public function setContentFilterSettings(?IosWebContentFilterBase $value): void {
        $this->getBackingStore()->set('contentFilterSettings', $value);
    }

    /**
     * Sets the homeScreenDockIcons property value. A list of app and folders to appear on the Home Screen Dock. This collection can contain a maximum of 500 elements.
     *  @param array<IosHomeScreenItem>|null $value Value to set for the homeScreenDockIcons property.
    */
    public function setHomeScreenDockIcons(?array $value): void {
        $this->getBackingStore()->set('homeScreenDockIcons', $value);
    }

    /**
     * Sets the homeScreenGridHeight property value. Gets or sets the number of rows to render when configuring iOS home screen layout settings. If this value is configured, homeScreenGridWidth must be configured as well.
     *  @param int|null $value Value to set for the homeScreenGridHeight property.
    */
    public function setHomeScreenGridHeight(?int $value): void {
        $this->getBackingStore()->set('homeScreenGridHeight', $value);
    }

    /**
     * Sets the homeScreenGridWidth property value. Gets or sets the number of columns to render when configuring iOS home screen layout settings. If this value is configured, homeScreenGridHeight must be configured as well.
     *  @param int|null $value Value to set for the homeScreenGridWidth property.
    */
    public function setHomeScreenGridWidth(?int $value): void {
        $this->getBackingStore()->set('homeScreenGridWidth', $value);
    }

    /**
     * Sets the homeScreenPages property value. A list of pages on the Home Screen. This collection can contain a maximum of 500 elements.
     *  @param array<IosHomeScreenPage>|null $value Value to set for the homeScreenPages property.
    */
    public function setHomeScreenPages(?array $value): void {
        $this->getBackingStore()->set('homeScreenPages', $value);
    }

    /**
     * Sets the identityCertificateForClientAuthentication property value. Identity Certificate for the renewal of Kerberos ticket used in single sign-on settings.
     *  @param IosCertificateProfileBase|null $value Value to set for the identityCertificateForClientAuthentication property.
    */
    public function setIdentityCertificateForClientAuthentication(?IosCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificateForClientAuthentication', $value);
    }

    /**
     * Sets the iosSingleSignOnExtension property value. Gets or sets a single sign-on extension profile.
     *  @param IosSingleSignOnExtension|null $value Value to set for the iosSingleSignOnExtension property.
    */
    public function setIosSingleSignOnExtension(?IosSingleSignOnExtension $value): void {
        $this->getBackingStore()->set('iosSingleSignOnExtension', $value);
    }

    /**
     * Sets the lockScreenFootnote property value. A footnote displayed on the login window and lock screen. Available in iOS 9.3.1 and later.
     *  @param string|null $value Value to set for the lockScreenFootnote property.
    */
    public function setLockScreenFootnote(?string $value): void {
        $this->getBackingStore()->set('lockScreenFootnote', $value);
    }

    /**
     * Sets the notificationSettings property value. Notification settings for each bundle id. Applicable to devices in supervised mode only (iOS 9.3 and later). This collection can contain a maximum of 500 elements.
     *  @param array<IosNotificationSettings>|null $value Value to set for the notificationSettings property.
    */
    public function setNotificationSettings(?array $value): void {
        $this->getBackingStore()->set('notificationSettings', $value);
    }

    /**
     * Sets the singleSignOnExtension property value. Gets or sets a single sign-on extension profile. Deprecated: use IOSSingleSignOnExtension instead.
     *  @param SingleSignOnExtension|null $value Value to set for the singleSignOnExtension property.
    */
    public function setSingleSignOnExtension(?SingleSignOnExtension $value): void {
        $this->getBackingStore()->set('singleSignOnExtension', $value);
    }

    /**
     * Sets the singleSignOnExtensionPkinitCertificate property value. PKINIT Certificate for the authentication with single sign-on extension settings.
     *  @param IosCertificateProfileBase|null $value Value to set for the singleSignOnExtensionPkinitCertificate property.
    */
    public function setSingleSignOnExtensionPkinitCertificate(?IosCertificateProfileBase $value): void {
        $this->getBackingStore()->set('singleSignOnExtensionPkinitCertificate', $value);
    }

    /**
     * Sets the singleSignOnSettings property value. The Kerberos login settings that enable apps on receiving devices to authenticate smoothly.
     *  @param IosSingleSignOnSettings|null $value Value to set for the singleSignOnSettings property.
    */
    public function setSingleSignOnSettings(?IosSingleSignOnSettings $value): void {
        $this->getBackingStore()->set('singleSignOnSettings', $value);
    }

    /**
     * Sets the wallpaperDisplayLocation property value. An enum type for wallpaper display location specifier.
     *  @param IosWallpaperDisplayLocation|null $value Value to set for the wallpaperDisplayLocation property.
    */
    public function setWallpaperDisplayLocation(?IosWallpaperDisplayLocation $value): void {
        $this->getBackingStore()->set('wallpaperDisplayLocation', $value);
    }

    /**
     * Sets the wallpaperImage property value. A wallpaper image must be in either PNG or JPEG format. It requires a supervised device with iOS 8 or later version.
     *  @param MimeContent|null $value Value to set for the wallpaperImage property.
    */
    public function setWallpaperImage(?MimeContent $value): void {
        $this->getBackingStore()->set('wallpaperImage', $value);
    }

}
