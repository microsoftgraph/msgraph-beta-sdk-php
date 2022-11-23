<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSDeviceFeaturesConfiguration extends AppleDeviceFeaturesConfigurationBase implements Parsable 
{
    /**
     * Instantiates a new MacOSDeviceFeaturesConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSDeviceFeaturesConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSDeviceFeaturesConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSDeviceFeaturesConfiguration {
        return new MacOSDeviceFeaturesConfiguration();
    }

    /**
     * Gets the adminShowHostInfo property value. Whether to show admin host information on the login window.
     * @return bool|null
    */
    public function getAdminShowHostInfo(): ?bool {
        return $this->getBackingStore()->get('adminShowHostInfo');
    }

    /**
     * Gets the appAssociatedDomains property value. Gets or sets a list that maps apps to their associated domains. Application identifiers must be unique. This collection can contain a maximum of 500 elements.
     * @return array<MacOSAssociatedDomainsItem>|null
    */
    public function getAppAssociatedDomains(): ?array {
        return $this->getBackingStore()->get('appAssociatedDomains');
    }

    /**
     * Gets the associatedDomains property value. DEPRECATED: use appAssociatedDomains instead. Gets or sets a list that maps apps to their associated domains. The key should match the app's ID, and the value should be a string in the form of 'service:domain' where domain is a fully qualified hostname (e.g. webcredentials:example.com). This collection can contain a maximum of 500 elements.
     * @return array<KeyValuePair>|null
    */
    public function getAssociatedDomains(): ?array {
        return $this->getBackingStore()->get('associatedDomains');
    }

    /**
     * Gets the authorizedUsersListHidden property value. Whether to show the name and password dialog or a list of users on the login window.
     * @return bool|null
    */
    public function getAuthorizedUsersListHidden(): ?bool {
        return $this->getBackingStore()->get('authorizedUsersListHidden');
    }

    /**
     * Gets the authorizedUsersListHideAdminUsers property value. Whether to hide admin users in the authorized users list on the login window.
     * @return bool|null
    */
    public function getAuthorizedUsersListHideAdminUsers(): ?bool {
        return $this->getBackingStore()->get('authorizedUsersListHideAdminUsers');
    }

    /**
     * Gets the authorizedUsersListHideLocalUsers property value. Whether to show only network and system users in the authorized users list on the login window.
     * @return bool|null
    */
    public function getAuthorizedUsersListHideLocalUsers(): ?bool {
        return $this->getBackingStore()->get('authorizedUsersListHideLocalUsers');
    }

    /**
     * Gets the authorizedUsersListHideMobileAccounts property value. Whether to hide mobile users in the authorized users list on the login window.
     * @return bool|null
    */
    public function getAuthorizedUsersListHideMobileAccounts(): ?bool {
        return $this->getBackingStore()->get('authorizedUsersListHideMobileAccounts');
    }

    /**
     * Gets the authorizedUsersListIncludeNetworkUsers property value. Whether to show network users in the authorized users list on the login window.
     * @return bool|null
    */
    public function getAuthorizedUsersListIncludeNetworkUsers(): ?bool {
        return $this->getBackingStore()->get('authorizedUsersListIncludeNetworkUsers');
    }

    /**
     * Gets the authorizedUsersListShowOtherManagedUsers property value. Whether to show other users in the authorized users list on the login window.
     * @return bool|null
    */
    public function getAuthorizedUsersListShowOtherManagedUsers(): ?bool {
        return $this->getBackingStore()->get('authorizedUsersListShowOtherManagedUsers');
    }

    /**
     * Gets the autoLaunchItems property value. List of applications, files, folders, and other items to launch when the user logs in. This collection can contain a maximum of 500 elements.
     * @return array<MacOSLaunchItem>|null
    */
    public function getAutoLaunchItems(): ?array {
        return $this->getBackingStore()->get('autoLaunchItems');
    }

    /**
     * Gets the consoleAccessDisabled property value. Whether the Other user will disregard use of the console special user name.
     * @return bool|null
    */
    public function getConsoleAccessDisabled(): ?bool {
        return $this->getBackingStore()->get('consoleAccessDisabled');
    }

    /**
     * Gets the contentCachingBlockDeletion property value. Prevents content caches from purging content to free up disk space for other apps.
     * @return bool|null
    */
    public function getContentCachingBlockDeletion(): ?bool {
        return $this->getBackingStore()->get('contentCachingBlockDeletion');
    }

    /**
     * Gets the contentCachingClientListenRanges property value. A list of custom IP ranges content caches will use to listen for clients. This collection can contain a maximum of 500 elements.
     * @return array<IpRange>|null
    */
    public function getContentCachingClientListenRanges(): ?array {
        return $this->getBackingStore()->get('contentCachingClientListenRanges');
    }

    /**
     * Gets the contentCachingClientPolicy property value. Determines which clients a content cache will serve.
     * @return MacOSContentCachingClientPolicy|null
    */
    public function getContentCachingClientPolicy(): ?MacOSContentCachingClientPolicy {
        return $this->getBackingStore()->get('contentCachingClientPolicy');
    }

    /**
     * Gets the contentCachingDataPath property value. The path to the directory used to store cached content. The value must be (or end with) /Library/Application Support/Apple/AssetCache/Data
     * @return string|null
    */
    public function getContentCachingDataPath(): ?string {
        return $this->getBackingStore()->get('contentCachingDataPath');
    }

    /**
     * Gets the contentCachingDisableConnectionSharing property value. Disables internet connection sharing.
     * @return bool|null
    */
    public function getContentCachingDisableConnectionSharing(): ?bool {
        return $this->getBackingStore()->get('contentCachingDisableConnectionSharing');
    }

    /**
     * Gets the contentCachingEnabled property value. Enables content caching and prevents it from being disabled by the user.
     * @return bool|null
    */
    public function getContentCachingEnabled(): ?bool {
        return $this->getBackingStore()->get('contentCachingEnabled');
    }

    /**
     * Gets the contentCachingForceConnectionSharing property value. Forces internet connection sharing. contentCachingDisableConnectionSharing overrides this setting.
     * @return bool|null
    */
    public function getContentCachingForceConnectionSharing(): ?bool {
        return $this->getBackingStore()->get('contentCachingForceConnectionSharing');
    }

    /**
     * Gets the contentCachingKeepAwake property value. Prevent the device from sleeping if content caching is enabled.
     * @return bool|null
    */
    public function getContentCachingKeepAwake(): ?bool {
        return $this->getBackingStore()->get('contentCachingKeepAwake');
    }

    /**
     * Gets the contentCachingLogClientIdentities property value. Enables logging of IP addresses and ports of clients that request cached content.
     * @return bool|null
    */
    public function getContentCachingLogClientIdentities(): ?bool {
        return $this->getBackingStore()->get('contentCachingLogClientIdentities');
    }

    /**
     * Gets the contentCachingMaxSizeBytes property value. The maximum number of bytes of disk space that will be used for the content cache. A value of 0 (default) indicates unlimited disk space.
     * @return int|null
    */
    public function getContentCachingMaxSizeBytes(): ?int {
        return $this->getBackingStore()->get('contentCachingMaxSizeBytes');
    }

    /**
     * Gets the contentCachingParents property value. A list of IP addresses representing parent content caches.
     * @return array<string>|null
    */
    public function getContentCachingParents(): ?array {
        return $this->getBackingStore()->get('contentCachingParents');
    }

    /**
     * Gets the contentCachingParentSelectionPolicy property value. Determines how content caches select a parent cache.
     * @return MacOSContentCachingParentSelectionPolicy|null
    */
    public function getContentCachingParentSelectionPolicy(): ?MacOSContentCachingParentSelectionPolicy {
        return $this->getBackingStore()->get('contentCachingParentSelectionPolicy');
    }

    /**
     * Gets the contentCachingPeerFilterRanges property value. A list of custom IP ranges content caches will use to query for content from peers caches. This collection can contain a maximum of 500 elements.
     * @return array<IpRange>|null
    */
    public function getContentCachingPeerFilterRanges(): ?array {
        return $this->getBackingStore()->get('contentCachingPeerFilterRanges');
    }

    /**
     * Gets the contentCachingPeerListenRanges property value. A list of custom IP ranges content caches will use to listen for peer caches. This collection can contain a maximum of 500 elements.
     * @return array<IpRange>|null
    */
    public function getContentCachingPeerListenRanges(): ?array {
        return $this->getBackingStore()->get('contentCachingPeerListenRanges');
    }

    /**
     * Gets the contentCachingPeerPolicy property value. Determines which content caches other content caches will peer with.
     * @return MacOSContentCachingPeerPolicy|null
    */
    public function getContentCachingPeerPolicy(): ?MacOSContentCachingPeerPolicy {
        return $this->getBackingStore()->get('contentCachingPeerPolicy');
    }

    /**
     * Gets the contentCachingPort property value. Sets the port used for content caching. If the value is 0, a random available port will be selected. Valid values 0 to 65535
     * @return int|null
    */
    public function getContentCachingPort(): ?int {
        return $this->getBackingStore()->get('contentCachingPort');
    }

    /**
     * Gets the contentCachingPublicRanges property value. A list of custom IP ranges that Apple's content caching service should use to match clients to content caches. This collection can contain a maximum of 500 elements.
     * @return array<IpRange>|null
    */
    public function getContentCachingPublicRanges(): ?array {
        return $this->getBackingStore()->get('contentCachingPublicRanges');
    }

    /**
     * Gets the contentCachingShowAlerts property value. Display content caching alerts as system notifications.
     * @return bool|null
    */
    public function getContentCachingShowAlerts(): ?bool {
        return $this->getBackingStore()->get('contentCachingShowAlerts');
    }

    /**
     * Gets the contentCachingType property value. Indicates the type of content allowed to be cached by Apple's content caching service.
     * @return MacOSContentCachingType|null
    */
    public function getContentCachingType(): ?MacOSContentCachingType {
        return $this->getBackingStore()->get('contentCachingType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'adminShowHostInfo' => fn(ParseNode $n) => $o->setAdminShowHostInfo($n->getBooleanValue()),
            'appAssociatedDomains' => fn(ParseNode $n) => $o->setAppAssociatedDomains($n->getCollectionOfObjectValues([MacOSAssociatedDomainsItem::class, 'createFromDiscriminatorValue'])),
            'associatedDomains' => fn(ParseNode $n) => $o->setAssociatedDomains($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'authorizedUsersListHidden' => fn(ParseNode $n) => $o->setAuthorizedUsersListHidden($n->getBooleanValue()),
            'authorizedUsersListHideAdminUsers' => fn(ParseNode $n) => $o->setAuthorizedUsersListHideAdminUsers($n->getBooleanValue()),
            'authorizedUsersListHideLocalUsers' => fn(ParseNode $n) => $o->setAuthorizedUsersListHideLocalUsers($n->getBooleanValue()),
            'authorizedUsersListHideMobileAccounts' => fn(ParseNode $n) => $o->setAuthorizedUsersListHideMobileAccounts($n->getBooleanValue()),
            'authorizedUsersListIncludeNetworkUsers' => fn(ParseNode $n) => $o->setAuthorizedUsersListIncludeNetworkUsers($n->getBooleanValue()),
            'authorizedUsersListShowOtherManagedUsers' => fn(ParseNode $n) => $o->setAuthorizedUsersListShowOtherManagedUsers($n->getBooleanValue()),
            'autoLaunchItems' => fn(ParseNode $n) => $o->setAutoLaunchItems($n->getCollectionOfObjectValues([MacOSLaunchItem::class, 'createFromDiscriminatorValue'])),
            'consoleAccessDisabled' => fn(ParseNode $n) => $o->setConsoleAccessDisabled($n->getBooleanValue()),
            'contentCachingBlockDeletion' => fn(ParseNode $n) => $o->setContentCachingBlockDeletion($n->getBooleanValue()),
            'contentCachingClientListenRanges' => fn(ParseNode $n) => $o->setContentCachingClientListenRanges($n->getCollectionOfObjectValues([IpRange::class, 'createFromDiscriminatorValue'])),
            'contentCachingClientPolicy' => fn(ParseNode $n) => $o->setContentCachingClientPolicy($n->getEnumValue(MacOSContentCachingClientPolicy::class)),
            'contentCachingDataPath' => fn(ParseNode $n) => $o->setContentCachingDataPath($n->getStringValue()),
            'contentCachingDisableConnectionSharing' => fn(ParseNode $n) => $o->setContentCachingDisableConnectionSharing($n->getBooleanValue()),
            'contentCachingEnabled' => fn(ParseNode $n) => $o->setContentCachingEnabled($n->getBooleanValue()),
            'contentCachingForceConnectionSharing' => fn(ParseNode $n) => $o->setContentCachingForceConnectionSharing($n->getBooleanValue()),
            'contentCachingKeepAwake' => fn(ParseNode $n) => $o->setContentCachingKeepAwake($n->getBooleanValue()),
            'contentCachingLogClientIdentities' => fn(ParseNode $n) => $o->setContentCachingLogClientIdentities($n->getBooleanValue()),
            'contentCachingMaxSizeBytes' => fn(ParseNode $n) => $o->setContentCachingMaxSizeBytes($n->getIntegerValue()),
            'contentCachingParents' => fn(ParseNode $n) => $o->setContentCachingParents($n->getCollectionOfPrimitiveValues()),
            'contentCachingParentSelectionPolicy' => fn(ParseNode $n) => $o->setContentCachingParentSelectionPolicy($n->getEnumValue(MacOSContentCachingParentSelectionPolicy::class)),
            'contentCachingPeerFilterRanges' => fn(ParseNode $n) => $o->setContentCachingPeerFilterRanges($n->getCollectionOfObjectValues([IpRange::class, 'createFromDiscriminatorValue'])),
            'contentCachingPeerListenRanges' => fn(ParseNode $n) => $o->setContentCachingPeerListenRanges($n->getCollectionOfObjectValues([IpRange::class, 'createFromDiscriminatorValue'])),
            'contentCachingPeerPolicy' => fn(ParseNode $n) => $o->setContentCachingPeerPolicy($n->getEnumValue(MacOSContentCachingPeerPolicy::class)),
            'contentCachingPort' => fn(ParseNode $n) => $o->setContentCachingPort($n->getIntegerValue()),
            'contentCachingPublicRanges' => fn(ParseNode $n) => $o->setContentCachingPublicRanges($n->getCollectionOfObjectValues([IpRange::class, 'createFromDiscriminatorValue'])),
            'contentCachingShowAlerts' => fn(ParseNode $n) => $o->setContentCachingShowAlerts($n->getBooleanValue()),
            'contentCachingType' => fn(ParseNode $n) => $o->setContentCachingType($n->getEnumValue(MacOSContentCachingType::class)),
            'loginWindowText' => fn(ParseNode $n) => $o->setLoginWindowText($n->getStringValue()),
            'logOutDisabledWhileLoggedIn' => fn(ParseNode $n) => $o->setLogOutDisabledWhileLoggedIn($n->getBooleanValue()),
            'macOSSingleSignOnExtension' => fn(ParseNode $n) => $o->setMacOSSingleSignOnExtension($n->getObjectValue([MacOSSingleSignOnExtension::class, 'createFromDiscriminatorValue'])),
            'powerOffDisabledWhileLoggedIn' => fn(ParseNode $n) => $o->setPowerOffDisabledWhileLoggedIn($n->getBooleanValue()),
            'restartDisabled' => fn(ParseNode $n) => $o->setRestartDisabled($n->getBooleanValue()),
            'restartDisabledWhileLoggedIn' => fn(ParseNode $n) => $o->setRestartDisabledWhileLoggedIn($n->getBooleanValue()),
            'screenLockDisableImmediate' => fn(ParseNode $n) => $o->setScreenLockDisableImmediate($n->getBooleanValue()),
            'shutDownDisabled' => fn(ParseNode $n) => $o->setShutDownDisabled($n->getBooleanValue()),
            'shutDownDisabledWhileLoggedIn' => fn(ParseNode $n) => $o->setShutDownDisabledWhileLoggedIn($n->getBooleanValue()),
            'singleSignOnExtension' => fn(ParseNode $n) => $o->setSingleSignOnExtension($n->getObjectValue([SingleSignOnExtension::class, 'createFromDiscriminatorValue'])),
            'singleSignOnExtensionPkinitCertificate' => fn(ParseNode $n) => $o->setSingleSignOnExtensionPkinitCertificate($n->getObjectValue([MacOSCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'sleepDisabled' => fn(ParseNode $n) => $o->setSleepDisabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the loginWindowText property value. Custom text to be displayed on the login window.
     * @return string|null
    */
    public function getLoginWindowText(): ?string {
        return $this->getBackingStore()->get('loginWindowText');
    }

    /**
     * Gets the logOutDisabledWhileLoggedIn property value. Whether the Log Out menu item on the login window will be disabled while the user is logged in.
     * @return bool|null
    */
    public function getLogOutDisabledWhileLoggedIn(): ?bool {
        return $this->getBackingStore()->get('logOutDisabledWhileLoggedIn');
    }

    /**
     * Gets the macOSSingleSignOnExtension property value. Gets or sets a single sign-on extension profile.
     * @return MacOSSingleSignOnExtension|null
    */
    public function getMacOSSingleSignOnExtension(): ?MacOSSingleSignOnExtension {
        return $this->getBackingStore()->get('macOSSingleSignOnExtension');
    }

    /**
     * Gets the powerOffDisabledWhileLoggedIn property value. Whether the Power Off menu item on the login window will be disabled while the user is logged in.
     * @return bool|null
    */
    public function getPowerOffDisabledWhileLoggedIn(): ?bool {
        return $this->getBackingStore()->get('powerOffDisabledWhileLoggedIn');
    }

    /**
     * Gets the restartDisabled property value. Whether to hide the Restart button item on the login window.
     * @return bool|null
    */
    public function getRestartDisabled(): ?bool {
        return $this->getBackingStore()->get('restartDisabled');
    }

    /**
     * Gets the restartDisabledWhileLoggedIn property value. Whether the Restart menu item on the login window will be disabled while the user is logged in.
     * @return bool|null
    */
    public function getRestartDisabledWhileLoggedIn(): ?bool {
        return $this->getBackingStore()->get('restartDisabledWhileLoggedIn');
    }

    /**
     * Gets the screenLockDisableImmediate property value. Whether to disable the immediate screen lock functions.
     * @return bool|null
    */
    public function getScreenLockDisableImmediate(): ?bool {
        return $this->getBackingStore()->get('screenLockDisableImmediate');
    }

    /**
     * Gets the shutDownDisabled property value. Whether to hide the Shut Down button item on the login window.
     * @return bool|null
    */
    public function getShutDownDisabled(): ?bool {
        return $this->getBackingStore()->get('shutDownDisabled');
    }

    /**
     * Gets the shutDownDisabledWhileLoggedIn property value. Whether the Shut Down menu item on the login window will be disabled while the user is logged in.
     * @return bool|null
    */
    public function getShutDownDisabledWhileLoggedIn(): ?bool {
        return $this->getBackingStore()->get('shutDownDisabledWhileLoggedIn');
    }

    /**
     * Gets the singleSignOnExtension property value. Gets or sets a single sign-on extension profile. Deprecated: use MacOSSingleSignOnExtension instead.
     * @return SingleSignOnExtension|null
    */
    public function getSingleSignOnExtension(): ?SingleSignOnExtension {
        return $this->getBackingStore()->get('singleSignOnExtension');
    }

    /**
     * Gets the singleSignOnExtensionPkinitCertificate property value. PKINIT Certificate for the authentication with single sign-on extensions.
     * @return MacOSCertificateProfileBase|null
    */
    public function getSingleSignOnExtensionPkinitCertificate(): ?MacOSCertificateProfileBase {
        return $this->getBackingStore()->get('singleSignOnExtensionPkinitCertificate');
    }

    /**
     * Gets the sleepDisabled property value. Whether to hide the Sleep menu item on the login window.
     * @return bool|null
    */
    public function getSleepDisabled(): ?bool {
        return $this->getBackingStore()->get('sleepDisabled');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('adminShowHostInfo', $this->getAdminShowHostInfo());
        $writer->writeCollectionOfObjectValues('appAssociatedDomains', $this->getAppAssociatedDomains());
        $writer->writeCollectionOfObjectValues('associatedDomains', $this->getAssociatedDomains());
        $writer->writeBooleanValue('authorizedUsersListHidden', $this->getAuthorizedUsersListHidden());
        $writer->writeBooleanValue('authorizedUsersListHideAdminUsers', $this->getAuthorizedUsersListHideAdminUsers());
        $writer->writeBooleanValue('authorizedUsersListHideLocalUsers', $this->getAuthorizedUsersListHideLocalUsers());
        $writer->writeBooleanValue('authorizedUsersListHideMobileAccounts', $this->getAuthorizedUsersListHideMobileAccounts());
        $writer->writeBooleanValue('authorizedUsersListIncludeNetworkUsers', $this->getAuthorizedUsersListIncludeNetworkUsers());
        $writer->writeBooleanValue('authorizedUsersListShowOtherManagedUsers', $this->getAuthorizedUsersListShowOtherManagedUsers());
        $writer->writeCollectionOfObjectValues('autoLaunchItems', $this->getAutoLaunchItems());
        $writer->writeBooleanValue('consoleAccessDisabled', $this->getConsoleAccessDisabled());
        $writer->writeBooleanValue('contentCachingBlockDeletion', $this->getContentCachingBlockDeletion());
        $writer->writeCollectionOfObjectValues('contentCachingClientListenRanges', $this->getContentCachingClientListenRanges());
        $writer->writeEnumValue('contentCachingClientPolicy', $this->getContentCachingClientPolicy());
        $writer->writeStringValue('contentCachingDataPath', $this->getContentCachingDataPath());
        $writer->writeBooleanValue('contentCachingDisableConnectionSharing', $this->getContentCachingDisableConnectionSharing());
        $writer->writeBooleanValue('contentCachingEnabled', $this->getContentCachingEnabled());
        $writer->writeBooleanValue('contentCachingForceConnectionSharing', $this->getContentCachingForceConnectionSharing());
        $writer->writeBooleanValue('contentCachingKeepAwake', $this->getContentCachingKeepAwake());
        $writer->writeBooleanValue('contentCachingLogClientIdentities', $this->getContentCachingLogClientIdentities());
        $writer->writeIntegerValue('contentCachingMaxSizeBytes', $this->getContentCachingMaxSizeBytes());
        $writer->writeCollectionOfPrimitiveValues('contentCachingParents', $this->getContentCachingParents());
        $writer->writeEnumValue('contentCachingParentSelectionPolicy', $this->getContentCachingParentSelectionPolicy());
        $writer->writeCollectionOfObjectValues('contentCachingPeerFilterRanges', $this->getContentCachingPeerFilterRanges());
        $writer->writeCollectionOfObjectValues('contentCachingPeerListenRanges', $this->getContentCachingPeerListenRanges());
        $writer->writeEnumValue('contentCachingPeerPolicy', $this->getContentCachingPeerPolicy());
        $writer->writeIntegerValue('contentCachingPort', $this->getContentCachingPort());
        $writer->writeCollectionOfObjectValues('contentCachingPublicRanges', $this->getContentCachingPublicRanges());
        $writer->writeBooleanValue('contentCachingShowAlerts', $this->getContentCachingShowAlerts());
        $writer->writeEnumValue('contentCachingType', $this->getContentCachingType());
        $writer->writeStringValue('loginWindowText', $this->getLoginWindowText());
        $writer->writeBooleanValue('logOutDisabledWhileLoggedIn', $this->getLogOutDisabledWhileLoggedIn());
        $writer->writeObjectValue('macOSSingleSignOnExtension', $this->getMacOSSingleSignOnExtension());
        $writer->writeBooleanValue('powerOffDisabledWhileLoggedIn', $this->getPowerOffDisabledWhileLoggedIn());
        $writer->writeBooleanValue('restartDisabled', $this->getRestartDisabled());
        $writer->writeBooleanValue('restartDisabledWhileLoggedIn', $this->getRestartDisabledWhileLoggedIn());
        $writer->writeBooleanValue('screenLockDisableImmediate', $this->getScreenLockDisableImmediate());
        $writer->writeBooleanValue('shutDownDisabled', $this->getShutDownDisabled());
        $writer->writeBooleanValue('shutDownDisabledWhileLoggedIn', $this->getShutDownDisabledWhileLoggedIn());
        $writer->writeObjectValue('singleSignOnExtension', $this->getSingleSignOnExtension());
        $writer->writeObjectValue('singleSignOnExtensionPkinitCertificate', $this->getSingleSignOnExtensionPkinitCertificate());
        $writer->writeBooleanValue('sleepDisabled', $this->getSleepDisabled());
    }

    /**
     * Sets the adminShowHostInfo property value. Whether to show admin host information on the login window.
     *  @param bool|null $value Value to set for the adminShowHostInfo property.
    */
    public function setAdminShowHostInfo(?bool $value): void {
        $this->getBackingStore()->set('adminShowHostInfo', $value);
    }

    /**
     * Sets the appAssociatedDomains property value. Gets or sets a list that maps apps to their associated domains. Application identifiers must be unique. This collection can contain a maximum of 500 elements.
     *  @param array<MacOSAssociatedDomainsItem>|null $value Value to set for the appAssociatedDomains property.
    */
    public function setAppAssociatedDomains(?array $value): void {
        $this->getBackingStore()->set('appAssociatedDomains', $value);
    }

    /**
     * Sets the associatedDomains property value. DEPRECATED: use appAssociatedDomains instead. Gets or sets a list that maps apps to their associated domains. The key should match the app's ID, and the value should be a string in the form of 'service:domain' where domain is a fully qualified hostname (e.g. webcredentials:example.com). This collection can contain a maximum of 500 elements.
     *  @param array<KeyValuePair>|null $value Value to set for the associatedDomains property.
    */
    public function setAssociatedDomains(?array $value): void {
        $this->getBackingStore()->set('associatedDomains', $value);
    }

    /**
     * Sets the authorizedUsersListHidden property value. Whether to show the name and password dialog or a list of users on the login window.
     *  @param bool|null $value Value to set for the authorizedUsersListHidden property.
    */
    public function setAuthorizedUsersListHidden(?bool $value): void {
        $this->getBackingStore()->set('authorizedUsersListHidden', $value);
    }

    /**
     * Sets the authorizedUsersListHideAdminUsers property value. Whether to hide admin users in the authorized users list on the login window.
     *  @param bool|null $value Value to set for the authorizedUsersListHideAdminUsers property.
    */
    public function setAuthorizedUsersListHideAdminUsers(?bool $value): void {
        $this->getBackingStore()->set('authorizedUsersListHideAdminUsers', $value);
    }

    /**
     * Sets the authorizedUsersListHideLocalUsers property value. Whether to show only network and system users in the authorized users list on the login window.
     *  @param bool|null $value Value to set for the authorizedUsersListHideLocalUsers property.
    */
    public function setAuthorizedUsersListHideLocalUsers(?bool $value): void {
        $this->getBackingStore()->set('authorizedUsersListHideLocalUsers', $value);
    }

    /**
     * Sets the authorizedUsersListHideMobileAccounts property value. Whether to hide mobile users in the authorized users list on the login window.
     *  @param bool|null $value Value to set for the authorizedUsersListHideMobileAccounts property.
    */
    public function setAuthorizedUsersListHideMobileAccounts(?bool $value): void {
        $this->getBackingStore()->set('authorizedUsersListHideMobileAccounts', $value);
    }

    /**
     * Sets the authorizedUsersListIncludeNetworkUsers property value. Whether to show network users in the authorized users list on the login window.
     *  @param bool|null $value Value to set for the authorizedUsersListIncludeNetworkUsers property.
    */
    public function setAuthorizedUsersListIncludeNetworkUsers(?bool $value): void {
        $this->getBackingStore()->set('authorizedUsersListIncludeNetworkUsers', $value);
    }

    /**
     * Sets the authorizedUsersListShowOtherManagedUsers property value. Whether to show other users in the authorized users list on the login window.
     *  @param bool|null $value Value to set for the authorizedUsersListShowOtherManagedUsers property.
    */
    public function setAuthorizedUsersListShowOtherManagedUsers(?bool $value): void {
        $this->getBackingStore()->set('authorizedUsersListShowOtherManagedUsers', $value);
    }

    /**
     * Sets the autoLaunchItems property value. List of applications, files, folders, and other items to launch when the user logs in. This collection can contain a maximum of 500 elements.
     *  @param array<MacOSLaunchItem>|null $value Value to set for the autoLaunchItems property.
    */
    public function setAutoLaunchItems(?array $value): void {
        $this->getBackingStore()->set('autoLaunchItems', $value);
    }

    /**
     * Sets the consoleAccessDisabled property value. Whether the Other user will disregard use of the console special user name.
     *  @param bool|null $value Value to set for the consoleAccessDisabled property.
    */
    public function setConsoleAccessDisabled(?bool $value): void {
        $this->getBackingStore()->set('consoleAccessDisabled', $value);
    }

    /**
     * Sets the contentCachingBlockDeletion property value. Prevents content caches from purging content to free up disk space for other apps.
     *  @param bool|null $value Value to set for the contentCachingBlockDeletion property.
    */
    public function setContentCachingBlockDeletion(?bool $value): void {
        $this->getBackingStore()->set('contentCachingBlockDeletion', $value);
    }

    /**
     * Sets the contentCachingClientListenRanges property value. A list of custom IP ranges content caches will use to listen for clients. This collection can contain a maximum of 500 elements.
     *  @param array<IpRange>|null $value Value to set for the contentCachingClientListenRanges property.
    */
    public function setContentCachingClientListenRanges(?array $value): void {
        $this->getBackingStore()->set('contentCachingClientListenRanges', $value);
    }

    /**
     * Sets the contentCachingClientPolicy property value. Determines which clients a content cache will serve.
     *  @param MacOSContentCachingClientPolicy|null $value Value to set for the contentCachingClientPolicy property.
    */
    public function setContentCachingClientPolicy(?MacOSContentCachingClientPolicy $value): void {
        $this->getBackingStore()->set('contentCachingClientPolicy', $value);
    }

    /**
     * Sets the contentCachingDataPath property value. The path to the directory used to store cached content. The value must be (or end with) /Library/Application Support/Apple/AssetCache/Data
     *  @param string|null $value Value to set for the contentCachingDataPath property.
    */
    public function setContentCachingDataPath(?string $value): void {
        $this->getBackingStore()->set('contentCachingDataPath', $value);
    }

    /**
     * Sets the contentCachingDisableConnectionSharing property value. Disables internet connection sharing.
     *  @param bool|null $value Value to set for the contentCachingDisableConnectionSharing property.
    */
    public function setContentCachingDisableConnectionSharing(?bool $value): void {
        $this->getBackingStore()->set('contentCachingDisableConnectionSharing', $value);
    }

    /**
     * Sets the contentCachingEnabled property value. Enables content caching and prevents it from being disabled by the user.
     *  @param bool|null $value Value to set for the contentCachingEnabled property.
    */
    public function setContentCachingEnabled(?bool $value): void {
        $this->getBackingStore()->set('contentCachingEnabled', $value);
    }

    /**
     * Sets the contentCachingForceConnectionSharing property value. Forces internet connection sharing. contentCachingDisableConnectionSharing overrides this setting.
     *  @param bool|null $value Value to set for the contentCachingForceConnectionSharing property.
    */
    public function setContentCachingForceConnectionSharing(?bool $value): void {
        $this->getBackingStore()->set('contentCachingForceConnectionSharing', $value);
    }

    /**
     * Sets the contentCachingKeepAwake property value. Prevent the device from sleeping if content caching is enabled.
     *  @param bool|null $value Value to set for the contentCachingKeepAwake property.
    */
    public function setContentCachingKeepAwake(?bool $value): void {
        $this->getBackingStore()->set('contentCachingKeepAwake', $value);
    }

    /**
     * Sets the contentCachingLogClientIdentities property value. Enables logging of IP addresses and ports of clients that request cached content.
     *  @param bool|null $value Value to set for the contentCachingLogClientIdentities property.
    */
    public function setContentCachingLogClientIdentities(?bool $value): void {
        $this->getBackingStore()->set('contentCachingLogClientIdentities', $value);
    }

    /**
     * Sets the contentCachingMaxSizeBytes property value. The maximum number of bytes of disk space that will be used for the content cache. A value of 0 (default) indicates unlimited disk space.
     *  @param int|null $value Value to set for the contentCachingMaxSizeBytes property.
    */
    public function setContentCachingMaxSizeBytes(?int $value): void {
        $this->getBackingStore()->set('contentCachingMaxSizeBytes', $value);
    }

    /**
     * Sets the contentCachingParents property value. A list of IP addresses representing parent content caches.
     *  @param array<string>|null $value Value to set for the contentCachingParents property.
    */
    public function setContentCachingParents(?array $value): void {
        $this->getBackingStore()->set('contentCachingParents', $value);
    }

    /**
     * Sets the contentCachingParentSelectionPolicy property value. Determines how content caches select a parent cache.
     *  @param MacOSContentCachingParentSelectionPolicy|null $value Value to set for the contentCachingParentSelectionPolicy property.
    */
    public function setContentCachingParentSelectionPolicy(?MacOSContentCachingParentSelectionPolicy $value): void {
        $this->getBackingStore()->set('contentCachingParentSelectionPolicy', $value);
    }

    /**
     * Sets the contentCachingPeerFilterRanges property value. A list of custom IP ranges content caches will use to query for content from peers caches. This collection can contain a maximum of 500 elements.
     *  @param array<IpRange>|null $value Value to set for the contentCachingPeerFilterRanges property.
    */
    public function setContentCachingPeerFilterRanges(?array $value): void {
        $this->getBackingStore()->set('contentCachingPeerFilterRanges', $value);
    }

    /**
     * Sets the contentCachingPeerListenRanges property value. A list of custom IP ranges content caches will use to listen for peer caches. This collection can contain a maximum of 500 elements.
     *  @param array<IpRange>|null $value Value to set for the contentCachingPeerListenRanges property.
    */
    public function setContentCachingPeerListenRanges(?array $value): void {
        $this->getBackingStore()->set('contentCachingPeerListenRanges', $value);
    }

    /**
     * Sets the contentCachingPeerPolicy property value. Determines which content caches other content caches will peer with.
     *  @param MacOSContentCachingPeerPolicy|null $value Value to set for the contentCachingPeerPolicy property.
    */
    public function setContentCachingPeerPolicy(?MacOSContentCachingPeerPolicy $value): void {
        $this->getBackingStore()->set('contentCachingPeerPolicy', $value);
    }

    /**
     * Sets the contentCachingPort property value. Sets the port used for content caching. If the value is 0, a random available port will be selected. Valid values 0 to 65535
     *  @param int|null $value Value to set for the contentCachingPort property.
    */
    public function setContentCachingPort(?int $value): void {
        $this->getBackingStore()->set('contentCachingPort', $value);
    }

    /**
     * Sets the contentCachingPublicRanges property value. A list of custom IP ranges that Apple's content caching service should use to match clients to content caches. This collection can contain a maximum of 500 elements.
     *  @param array<IpRange>|null $value Value to set for the contentCachingPublicRanges property.
    */
    public function setContentCachingPublicRanges(?array $value): void {
        $this->getBackingStore()->set('contentCachingPublicRanges', $value);
    }

    /**
     * Sets the contentCachingShowAlerts property value. Display content caching alerts as system notifications.
     *  @param bool|null $value Value to set for the contentCachingShowAlerts property.
    */
    public function setContentCachingShowAlerts(?bool $value): void {
        $this->getBackingStore()->set('contentCachingShowAlerts', $value);
    }

    /**
     * Sets the contentCachingType property value. Indicates the type of content allowed to be cached by Apple's content caching service.
     *  @param MacOSContentCachingType|null $value Value to set for the contentCachingType property.
    */
    public function setContentCachingType(?MacOSContentCachingType $value): void {
        $this->getBackingStore()->set('contentCachingType', $value);
    }

    /**
     * Sets the loginWindowText property value. Custom text to be displayed on the login window.
     *  @param string|null $value Value to set for the loginWindowText property.
    */
    public function setLoginWindowText(?string $value): void {
        $this->getBackingStore()->set('loginWindowText', $value);
    }

    /**
     * Sets the logOutDisabledWhileLoggedIn property value. Whether the Log Out menu item on the login window will be disabled while the user is logged in.
     *  @param bool|null $value Value to set for the logOutDisabledWhileLoggedIn property.
    */
    public function setLogOutDisabledWhileLoggedIn(?bool $value): void {
        $this->getBackingStore()->set('logOutDisabledWhileLoggedIn', $value);
    }

    /**
     * Sets the macOSSingleSignOnExtension property value. Gets or sets a single sign-on extension profile.
     *  @param MacOSSingleSignOnExtension|null $value Value to set for the macOSSingleSignOnExtension property.
    */
    public function setMacOSSingleSignOnExtension(?MacOSSingleSignOnExtension $value): void {
        $this->getBackingStore()->set('macOSSingleSignOnExtension', $value);
    }

    /**
     * Sets the powerOffDisabledWhileLoggedIn property value. Whether the Power Off menu item on the login window will be disabled while the user is logged in.
     *  @param bool|null $value Value to set for the powerOffDisabledWhileLoggedIn property.
    */
    public function setPowerOffDisabledWhileLoggedIn(?bool $value): void {
        $this->getBackingStore()->set('powerOffDisabledWhileLoggedIn', $value);
    }

    /**
     * Sets the restartDisabled property value. Whether to hide the Restart button item on the login window.
     *  @param bool|null $value Value to set for the restartDisabled property.
    */
    public function setRestartDisabled(?bool $value): void {
        $this->getBackingStore()->set('restartDisabled', $value);
    }

    /**
     * Sets the restartDisabledWhileLoggedIn property value. Whether the Restart menu item on the login window will be disabled while the user is logged in.
     *  @param bool|null $value Value to set for the restartDisabledWhileLoggedIn property.
    */
    public function setRestartDisabledWhileLoggedIn(?bool $value): void {
        $this->getBackingStore()->set('restartDisabledWhileLoggedIn', $value);
    }

    /**
     * Sets the screenLockDisableImmediate property value. Whether to disable the immediate screen lock functions.
     *  @param bool|null $value Value to set for the screenLockDisableImmediate property.
    */
    public function setScreenLockDisableImmediate(?bool $value): void {
        $this->getBackingStore()->set('screenLockDisableImmediate', $value);
    }

    /**
     * Sets the shutDownDisabled property value. Whether to hide the Shut Down button item on the login window.
     *  @param bool|null $value Value to set for the shutDownDisabled property.
    */
    public function setShutDownDisabled(?bool $value): void {
        $this->getBackingStore()->set('shutDownDisabled', $value);
    }

    /**
     * Sets the shutDownDisabledWhileLoggedIn property value. Whether the Shut Down menu item on the login window will be disabled while the user is logged in.
     *  @param bool|null $value Value to set for the shutDownDisabledWhileLoggedIn property.
    */
    public function setShutDownDisabledWhileLoggedIn(?bool $value): void {
        $this->getBackingStore()->set('shutDownDisabledWhileLoggedIn', $value);
    }

    /**
     * Sets the singleSignOnExtension property value. Gets or sets a single sign-on extension profile. Deprecated: use MacOSSingleSignOnExtension instead.
     *  @param SingleSignOnExtension|null $value Value to set for the singleSignOnExtension property.
    */
    public function setSingleSignOnExtension(?SingleSignOnExtension $value): void {
        $this->getBackingStore()->set('singleSignOnExtension', $value);
    }

    /**
     * Sets the singleSignOnExtensionPkinitCertificate property value. PKINIT Certificate for the authentication with single sign-on extensions.
     *  @param MacOSCertificateProfileBase|null $value Value to set for the singleSignOnExtensionPkinitCertificate property.
    */
    public function setSingleSignOnExtensionPkinitCertificate(?MacOSCertificateProfileBase $value): void {
        $this->getBackingStore()->set('singleSignOnExtensionPkinitCertificate', $value);
    }

    /**
     * Sets the sleepDisabled property value. Whether to hide the Sleep menu item on the login window.
     *  @param bool|null $value Value to set for the sleepDisabled property.
    */
    public function setSleepDisabled(?bool $value): void {
        $this->getBackingStore()->set('sleepDisabled', $value);
    }

}
