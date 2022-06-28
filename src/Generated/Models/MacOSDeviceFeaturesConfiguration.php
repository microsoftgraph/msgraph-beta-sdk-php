<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSDeviceFeaturesConfiguration extends AppleDeviceFeaturesConfigurationBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $adminShowHostInfo Whether to show admin host information on the login window.
    */
    private ?bool $adminShowHostInfo = null;
    
    /**
     * @var array<MacOSAssociatedDomainsItem>|null $appAssociatedDomains Gets or sets a list that maps apps to their associated domains. Application identifiers must be unique. This collection can contain a maximum of 500 elements.
    */
    private ?array $appAssociatedDomains = null;
    
    /**
     * @var array<KeyValuePair>|null $associatedDomains DEPRECATED: use appAssociatedDomains instead. Gets or sets a list that maps apps to their associated domains. The key should match the app's ID, and the value should be a string in the form of 'service:domain' where domain is a fully qualified hostname (e.g. webcredentials:example.com). This collection can contain a maximum of 500 elements.
    */
    private ?array $associatedDomains = null;
    
    /**
     * @var bool|null $authorizedUsersListHidden Whether to show the name and password dialog or a list of users on the login window.
    */
    private ?bool $authorizedUsersListHidden = null;
    
    /**
     * @var bool|null $authorizedUsersListHideAdminUsers Whether to hide admin users in the authorized users list on the login window.
    */
    private ?bool $authorizedUsersListHideAdminUsers = null;
    
    /**
     * @var bool|null $authorizedUsersListHideLocalUsers Whether to show only network and system users in the authorized users list on the login window.
    */
    private ?bool $authorizedUsersListHideLocalUsers = null;
    
    /**
     * @var bool|null $authorizedUsersListHideMobileAccounts Whether to hide mobile users in the authorized users list on the login window.
    */
    private ?bool $authorizedUsersListHideMobileAccounts = null;
    
    /**
     * @var bool|null $authorizedUsersListIncludeNetworkUsers Whether to show network users in the authorized users list on the login window.
    */
    private ?bool $authorizedUsersListIncludeNetworkUsers = null;
    
    /**
     * @var bool|null $authorizedUsersListShowOtherManagedUsers Whether to show other users in the authorized users list on the login window.
    */
    private ?bool $authorizedUsersListShowOtherManagedUsers = null;
    
    /**
     * @var array<MacOSLaunchItem>|null $autoLaunchItems List of applications, files, folders, and other items to launch when the user logs in. This collection can contain a maximum of 500 elements.
    */
    private ?array $autoLaunchItems = null;
    
    /**
     * @var bool|null $consoleAccessDisabled Whether the Other user will disregard use of the console special user name.
    */
    private ?bool $consoleAccessDisabled = null;
    
    /**
     * @var bool|null $contentCachingBlockDeletion Prevents content caches from purging content to free up disk space for other apps.
    */
    private ?bool $contentCachingBlockDeletion = null;
    
    /**
     * @var array<IpRange>|null $contentCachingClientListenRanges A list of custom IP ranges content caches will use to listen for clients. This collection can contain a maximum of 500 elements.
    */
    private ?array $contentCachingClientListenRanges = null;
    
    /**
     * @var MacOSContentCachingClientPolicy|null $contentCachingClientPolicy Determines the method in which content caching servers will listen for clients. Possible values are: notConfigured, clientsInLocalNetwork, clientsWithSamePublicIpAddress, clientsInCustomLocalNetworks, clientsInCustomLocalNetworksWithFallback.
    */
    private ?MacOSContentCachingClientPolicy $contentCachingClientPolicy = null;
    
    /**
     * @var string|null $contentCachingDataPath The path to the directory used to store cached content. The value must be (or end with) /Library/Application Support/Apple/AssetCache/Data
    */
    private ?string $contentCachingDataPath = null;
    
    /**
     * @var bool|null $contentCachingDisableConnectionSharing Disables internet connection sharing.
    */
    private ?bool $contentCachingDisableConnectionSharing = null;
    
    /**
     * @var bool|null $contentCachingEnabled Enables content caching and prevents it from being disabled by the user.
    */
    private ?bool $contentCachingEnabled = null;
    
    /**
     * @var bool|null $contentCachingForceConnectionSharing Forces internet connection sharing. contentCachingDisableConnectionSharing overrides this setting.
    */
    private ?bool $contentCachingForceConnectionSharing = null;
    
    /**
     * @var bool|null $contentCachingKeepAwake Prevent the device from sleeping if content caching is enabled.
    */
    private ?bool $contentCachingKeepAwake = null;
    
    /**
     * @var bool|null $contentCachingLogClientIdentities Enables logging of IP addresses and ports of clients that request cached content.
    */
    private ?bool $contentCachingLogClientIdentities = null;
    
    /**
     * @var int|null $contentCachingMaxSizeBytes The maximum number of bytes of disk space that will be used for the content cache. A value of 0 (default) indicates unlimited disk space.
    */
    private ?int $contentCachingMaxSizeBytes = null;
    
    /**
     * @var array<string>|null $contentCachingParents A list of IP addresses representing parent content caches.
    */
    private ?array $contentCachingParents = null;
    
    /**
     * @var MacOSContentCachingParentSelectionPolicy|null $contentCachingParentSelectionPolicy Determines the method in which content caching servers will select parents if multiple are present. Possible values are: notConfigured, roundRobin, firstAvailable, urlPathHash, random, stickyAvailable.
    */
    private ?MacOSContentCachingParentSelectionPolicy $contentCachingParentSelectionPolicy = null;
    
    /**
     * @var array<IpRange>|null $contentCachingPeerFilterRanges A list of custom IP ranges content caches will use to query for content from peers caches. This collection can contain a maximum of 500 elements.
    */
    private ?array $contentCachingPeerFilterRanges = null;
    
    /**
     * @var array<IpRange>|null $contentCachingPeerListenRanges A list of custom IP ranges content caches will use to listen for peer caches. This collection can contain a maximum of 500 elements.
    */
    private ?array $contentCachingPeerListenRanges = null;
    
    /**
     * @var MacOSContentCachingPeerPolicy|null $contentCachingPeerPolicy Determines the method in which content caches peer with other caches. Possible values are: notConfigured, peersInLocalNetwork, peersWithSamePublicIpAddress, peersInCustomLocalNetworks.
    */
    private ?MacOSContentCachingPeerPolicy $contentCachingPeerPolicy = null;
    
    /**
     * @var int|null $contentCachingPort Sets the port used for content caching. If the value is 0, a random available port will be selected. Valid values 0 to 65535
    */
    private ?int $contentCachingPort = null;
    
    /**
     * @var array<IpRange>|null $contentCachingPublicRanges A list of custom IP ranges that Apple's content caching service should use to match clients to content caches. This collection can contain a maximum of 500 elements.
    */
    private ?array $contentCachingPublicRanges = null;
    
    /**
     * @var bool|null $contentCachingShowAlerts Display content caching alerts as system notifications.
    */
    private ?bool $contentCachingShowAlerts = null;
    
    /**
     * @var MacOSContentCachingType|null $contentCachingType Determines what type of content is allowed to be cached by Apple's content caching service. Possible values are: notConfigured, userContentOnly, sharedContentOnly.
    */
    private ?MacOSContentCachingType $contentCachingType = null;
    
    /**
     * @var string|null $loginWindowText Custom text to be displayed on the login window.
    */
    private ?string $loginWindowText = null;
    
    /**
     * @var bool|null $logOutDisabledWhileLoggedIn Whether the Log Out menu item on the login window will be disabled while the user is logged in.
    */
    private ?bool $logOutDisabledWhileLoggedIn = null;
    
    /**
     * @var MacOSSingleSignOnExtension|null $macOSSingleSignOnExtension Gets or sets a single sign-on extension profile.
    */
    private ?MacOSSingleSignOnExtension $macOSSingleSignOnExtension = null;
    
    /**
     * @var bool|null $powerOffDisabledWhileLoggedIn Whether the Power Off menu item on the login window will be disabled while the user is logged in.
    */
    private ?bool $powerOffDisabledWhileLoggedIn = null;
    
    /**
     * @var bool|null $restartDisabled Whether to hide the Restart button item on the login window.
    */
    private ?bool $restartDisabled = null;
    
    /**
     * @var bool|null $restartDisabledWhileLoggedIn Whether the Restart menu item on the login window will be disabled while the user is logged in.
    */
    private ?bool $restartDisabledWhileLoggedIn = null;
    
    /**
     * @var bool|null $screenLockDisableImmediate Whether to disable the immediate screen lock functions.
    */
    private ?bool $screenLockDisableImmediate = null;
    
    /**
     * @var bool|null $shutDownDisabled Whether to hide the Shut Down button item on the login window.
    */
    private ?bool $shutDownDisabled = null;
    
    /**
     * @var bool|null $shutDownDisabledWhileLoggedIn Whether the Shut Down menu item on the login window will be disabled while the user is logged in.
    */
    private ?bool $shutDownDisabledWhileLoggedIn = null;
    
    /**
     * @var SingleSignOnExtension|null $singleSignOnExtension Gets or sets a single sign-on extension profile. Deprecated: use MacOSSingleSignOnExtension instead.
    */
    private ?SingleSignOnExtension $singleSignOnExtension = null;
    
    /**
     * @var MacOSCertificateProfileBase|null $singleSignOnExtensionPkinitCertificate PKINIT Certificate for the authentication with single sign-on extensions.
    */
    private ?MacOSCertificateProfileBase $singleSignOnExtensionPkinitCertificate = null;
    
    /**
     * @var bool|null $sleepDisabled Whether to hide the Sleep menu item on the login window.
    */
    private ?bool $sleepDisabled = null;
    
    /**
     * Instantiates a new MacOSDeviceFeaturesConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the adminShowHostInfo property value. Whether to show admin host information on the login window.
     * @return bool|null
    */
    public function getAdminShowHostInfo(): ?bool {
        return $this->adminShowHostInfo;
    }

    /**
     * Gets the appAssociatedDomains property value. Gets or sets a list that maps apps to their associated domains. Application identifiers must be unique. This collection can contain a maximum of 500 elements.
     * @return array<MacOSAssociatedDomainsItem>|null
    */
    public function getAppAssociatedDomains(): ?array {
        return $this->appAssociatedDomains;
    }

    /**
     * Gets the associatedDomains property value. DEPRECATED: use appAssociatedDomains instead. Gets or sets a list that maps apps to their associated domains. The key should match the app's ID, and the value should be a string in the form of 'service:domain' where domain is a fully qualified hostname (e.g. webcredentials:example.com). This collection can contain a maximum of 500 elements.
     * @return array<KeyValuePair>|null
    */
    public function getAssociatedDomains(): ?array {
        return $this->associatedDomains;
    }

    /**
     * Gets the authorizedUsersListHidden property value. Whether to show the name and password dialog or a list of users on the login window.
     * @return bool|null
    */
    public function getAuthorizedUsersListHidden(): ?bool {
        return $this->authorizedUsersListHidden;
    }

    /**
     * Gets the authorizedUsersListHideAdminUsers property value. Whether to hide admin users in the authorized users list on the login window.
     * @return bool|null
    */
    public function getAuthorizedUsersListHideAdminUsers(): ?bool {
        return $this->authorizedUsersListHideAdminUsers;
    }

    /**
     * Gets the authorizedUsersListHideLocalUsers property value. Whether to show only network and system users in the authorized users list on the login window.
     * @return bool|null
    */
    public function getAuthorizedUsersListHideLocalUsers(): ?bool {
        return $this->authorizedUsersListHideLocalUsers;
    }

    /**
     * Gets the authorizedUsersListHideMobileAccounts property value. Whether to hide mobile users in the authorized users list on the login window.
     * @return bool|null
    */
    public function getAuthorizedUsersListHideMobileAccounts(): ?bool {
        return $this->authorizedUsersListHideMobileAccounts;
    }

    /**
     * Gets the authorizedUsersListIncludeNetworkUsers property value. Whether to show network users in the authorized users list on the login window.
     * @return bool|null
    */
    public function getAuthorizedUsersListIncludeNetworkUsers(): ?bool {
        return $this->authorizedUsersListIncludeNetworkUsers;
    }

    /**
     * Gets the authorizedUsersListShowOtherManagedUsers property value. Whether to show other users in the authorized users list on the login window.
     * @return bool|null
    */
    public function getAuthorizedUsersListShowOtherManagedUsers(): ?bool {
        return $this->authorizedUsersListShowOtherManagedUsers;
    }

    /**
     * Gets the autoLaunchItems property value. List of applications, files, folders, and other items to launch when the user logs in. This collection can contain a maximum of 500 elements.
     * @return array<MacOSLaunchItem>|null
    */
    public function getAutoLaunchItems(): ?array {
        return $this->autoLaunchItems;
    }

    /**
     * Gets the consoleAccessDisabled property value. Whether the Other user will disregard use of the console special user name.
     * @return bool|null
    */
    public function getConsoleAccessDisabled(): ?bool {
        return $this->consoleAccessDisabled;
    }

    /**
     * Gets the contentCachingBlockDeletion property value. Prevents content caches from purging content to free up disk space for other apps.
     * @return bool|null
    */
    public function getContentCachingBlockDeletion(): ?bool {
        return $this->contentCachingBlockDeletion;
    }

    /**
     * Gets the contentCachingClientListenRanges property value. A list of custom IP ranges content caches will use to listen for clients. This collection can contain a maximum of 500 elements.
     * @return array<IpRange>|null
    */
    public function getContentCachingClientListenRanges(): ?array {
        return $this->contentCachingClientListenRanges;
    }

    /**
     * Gets the contentCachingClientPolicy property value. Determines the method in which content caching servers will listen for clients. Possible values are: notConfigured, clientsInLocalNetwork, clientsWithSamePublicIpAddress, clientsInCustomLocalNetworks, clientsInCustomLocalNetworksWithFallback.
     * @return MacOSContentCachingClientPolicy|null
    */
    public function getContentCachingClientPolicy(): ?MacOSContentCachingClientPolicy {
        return $this->contentCachingClientPolicy;
    }

    /**
     * Gets the contentCachingDataPath property value. The path to the directory used to store cached content. The value must be (or end with) /Library/Application Support/Apple/AssetCache/Data
     * @return string|null
    */
    public function getContentCachingDataPath(): ?string {
        return $this->contentCachingDataPath;
    }

    /**
     * Gets the contentCachingDisableConnectionSharing property value. Disables internet connection sharing.
     * @return bool|null
    */
    public function getContentCachingDisableConnectionSharing(): ?bool {
        return $this->contentCachingDisableConnectionSharing;
    }

    /**
     * Gets the contentCachingEnabled property value. Enables content caching and prevents it from being disabled by the user.
     * @return bool|null
    */
    public function getContentCachingEnabled(): ?bool {
        return $this->contentCachingEnabled;
    }

    /**
     * Gets the contentCachingForceConnectionSharing property value. Forces internet connection sharing. contentCachingDisableConnectionSharing overrides this setting.
     * @return bool|null
    */
    public function getContentCachingForceConnectionSharing(): ?bool {
        return $this->contentCachingForceConnectionSharing;
    }

    /**
     * Gets the contentCachingKeepAwake property value. Prevent the device from sleeping if content caching is enabled.
     * @return bool|null
    */
    public function getContentCachingKeepAwake(): ?bool {
        return $this->contentCachingKeepAwake;
    }

    /**
     * Gets the contentCachingLogClientIdentities property value. Enables logging of IP addresses and ports of clients that request cached content.
     * @return bool|null
    */
    public function getContentCachingLogClientIdentities(): ?bool {
        return $this->contentCachingLogClientIdentities;
    }

    /**
     * Gets the contentCachingMaxSizeBytes property value. The maximum number of bytes of disk space that will be used for the content cache. A value of 0 (default) indicates unlimited disk space.
     * @return int|null
    */
    public function getContentCachingMaxSizeBytes(): ?int {
        return $this->contentCachingMaxSizeBytes;
    }

    /**
     * Gets the contentCachingParents property value. A list of IP addresses representing parent content caches.
     * @return array<string>|null
    */
    public function getContentCachingParents(): ?array {
        return $this->contentCachingParents;
    }

    /**
     * Gets the contentCachingParentSelectionPolicy property value. Determines the method in which content caching servers will select parents if multiple are present. Possible values are: notConfigured, roundRobin, firstAvailable, urlPathHash, random, stickyAvailable.
     * @return MacOSContentCachingParentSelectionPolicy|null
    */
    public function getContentCachingParentSelectionPolicy(): ?MacOSContentCachingParentSelectionPolicy {
        return $this->contentCachingParentSelectionPolicy;
    }

    /**
     * Gets the contentCachingPeerFilterRanges property value. A list of custom IP ranges content caches will use to query for content from peers caches. This collection can contain a maximum of 500 elements.
     * @return array<IpRange>|null
    */
    public function getContentCachingPeerFilterRanges(): ?array {
        return $this->contentCachingPeerFilterRanges;
    }

    /**
     * Gets the contentCachingPeerListenRanges property value. A list of custom IP ranges content caches will use to listen for peer caches. This collection can contain a maximum of 500 elements.
     * @return array<IpRange>|null
    */
    public function getContentCachingPeerListenRanges(): ?array {
        return $this->contentCachingPeerListenRanges;
    }

    /**
     * Gets the contentCachingPeerPolicy property value. Determines the method in which content caches peer with other caches. Possible values are: notConfigured, peersInLocalNetwork, peersWithSamePublicIpAddress, peersInCustomLocalNetworks.
     * @return MacOSContentCachingPeerPolicy|null
    */
    public function getContentCachingPeerPolicy(): ?MacOSContentCachingPeerPolicy {
        return $this->contentCachingPeerPolicy;
    }

    /**
     * Gets the contentCachingPort property value. Sets the port used for content caching. If the value is 0, a random available port will be selected. Valid values 0 to 65535
     * @return int|null
    */
    public function getContentCachingPort(): ?int {
        return $this->contentCachingPort;
    }

    /**
     * Gets the contentCachingPublicRanges property value. A list of custom IP ranges that Apple's content caching service should use to match clients to content caches. This collection can contain a maximum of 500 elements.
     * @return array<IpRange>|null
    */
    public function getContentCachingPublicRanges(): ?array {
        return $this->contentCachingPublicRanges;
    }

    /**
     * Gets the contentCachingShowAlerts property value. Display content caching alerts as system notifications.
     * @return bool|null
    */
    public function getContentCachingShowAlerts(): ?bool {
        return $this->contentCachingShowAlerts;
    }

    /**
     * Gets the contentCachingType property value. Determines what type of content is allowed to be cached by Apple's content caching service. Possible values are: notConfigured, userContentOnly, sharedContentOnly.
     * @return MacOSContentCachingType|null
    */
    public function getContentCachingType(): ?MacOSContentCachingType {
        return $this->contentCachingType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'adminShowHostInfo' => function (ParseNode $n) use ($o) { $o->setAdminShowHostInfo($n->getBooleanValue()); },
            'appAssociatedDomains' => function (ParseNode $n) use ($o) { $o->setAppAssociatedDomains($n->getCollectionOfObjectValues(array(MacOSAssociatedDomainsItem::class, 'createFromDiscriminatorValue'))); },
            'associatedDomains' => function (ParseNode $n) use ($o) { $o->setAssociatedDomains($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'authorizedUsersListHidden' => function (ParseNode $n) use ($o) { $o->setAuthorizedUsersListHidden($n->getBooleanValue()); },
            'authorizedUsersListHideAdminUsers' => function (ParseNode $n) use ($o) { $o->setAuthorizedUsersListHideAdminUsers($n->getBooleanValue()); },
            'authorizedUsersListHideLocalUsers' => function (ParseNode $n) use ($o) { $o->setAuthorizedUsersListHideLocalUsers($n->getBooleanValue()); },
            'authorizedUsersListHideMobileAccounts' => function (ParseNode $n) use ($o) { $o->setAuthorizedUsersListHideMobileAccounts($n->getBooleanValue()); },
            'authorizedUsersListIncludeNetworkUsers' => function (ParseNode $n) use ($o) { $o->setAuthorizedUsersListIncludeNetworkUsers($n->getBooleanValue()); },
            'authorizedUsersListShowOtherManagedUsers' => function (ParseNode $n) use ($o) { $o->setAuthorizedUsersListShowOtherManagedUsers($n->getBooleanValue()); },
            'autoLaunchItems' => function (ParseNode $n) use ($o) { $o->setAutoLaunchItems($n->getCollectionOfObjectValues(array(MacOSLaunchItem::class, 'createFromDiscriminatorValue'))); },
            'consoleAccessDisabled' => function (ParseNode $n) use ($o) { $o->setConsoleAccessDisabled($n->getBooleanValue()); },
            'contentCachingBlockDeletion' => function (ParseNode $n) use ($o) { $o->setContentCachingBlockDeletion($n->getBooleanValue()); },
            'contentCachingClientListenRanges' => function (ParseNode $n) use ($o) { $o->setContentCachingClientListenRanges($n->getCollectionOfObjectValues(array(IpRange::class, 'createFromDiscriminatorValue'))); },
            'contentCachingClientPolicy' => function (ParseNode $n) use ($o) { $o->setContentCachingClientPolicy($n->getEnumValue(MacOSContentCachingClientPolicy::class)); },
            'contentCachingDataPath' => function (ParseNode $n) use ($o) { $o->setContentCachingDataPath($n->getStringValue()); },
            'contentCachingDisableConnectionSharing' => function (ParseNode $n) use ($o) { $o->setContentCachingDisableConnectionSharing($n->getBooleanValue()); },
            'contentCachingEnabled' => function (ParseNode $n) use ($o) { $o->setContentCachingEnabled($n->getBooleanValue()); },
            'contentCachingForceConnectionSharing' => function (ParseNode $n) use ($o) { $o->setContentCachingForceConnectionSharing($n->getBooleanValue()); },
            'contentCachingKeepAwake' => function (ParseNode $n) use ($o) { $o->setContentCachingKeepAwake($n->getBooleanValue()); },
            'contentCachingLogClientIdentities' => function (ParseNode $n) use ($o) { $o->setContentCachingLogClientIdentities($n->getBooleanValue()); },
            'contentCachingMaxSizeBytes' => function (ParseNode $n) use ($o) { $o->setContentCachingMaxSizeBytes($n->getIntegerValue()); },
            'contentCachingParents' => function (ParseNode $n) use ($o) { $o->setContentCachingParents($n->getCollectionOfPrimitiveValues()); },
            'contentCachingParentSelectionPolicy' => function (ParseNode $n) use ($o) { $o->setContentCachingParentSelectionPolicy($n->getEnumValue(MacOSContentCachingParentSelectionPolicy::class)); },
            'contentCachingPeerFilterRanges' => function (ParseNode $n) use ($o) { $o->setContentCachingPeerFilterRanges($n->getCollectionOfObjectValues(array(IpRange::class, 'createFromDiscriminatorValue'))); },
            'contentCachingPeerListenRanges' => function (ParseNode $n) use ($o) { $o->setContentCachingPeerListenRanges($n->getCollectionOfObjectValues(array(IpRange::class, 'createFromDiscriminatorValue'))); },
            'contentCachingPeerPolicy' => function (ParseNode $n) use ($o) { $o->setContentCachingPeerPolicy($n->getEnumValue(MacOSContentCachingPeerPolicy::class)); },
            'contentCachingPort' => function (ParseNode $n) use ($o) { $o->setContentCachingPort($n->getIntegerValue()); },
            'contentCachingPublicRanges' => function (ParseNode $n) use ($o) { $o->setContentCachingPublicRanges($n->getCollectionOfObjectValues(array(IpRange::class, 'createFromDiscriminatorValue'))); },
            'contentCachingShowAlerts' => function (ParseNode $n) use ($o) { $o->setContentCachingShowAlerts($n->getBooleanValue()); },
            'contentCachingType' => function (ParseNode $n) use ($o) { $o->setContentCachingType($n->getEnumValue(MacOSContentCachingType::class)); },
            'loginWindowText' => function (ParseNode $n) use ($o) { $o->setLoginWindowText($n->getStringValue()); },
            'logOutDisabledWhileLoggedIn' => function (ParseNode $n) use ($o) { $o->setLogOutDisabledWhileLoggedIn($n->getBooleanValue()); },
            'macOSSingleSignOnExtension' => function (ParseNode $n) use ($o) { $o->setMacOSSingleSignOnExtension($n->getObjectValue(array(MacOSSingleSignOnExtension::class, 'createFromDiscriminatorValue'))); },
            'powerOffDisabledWhileLoggedIn' => function (ParseNode $n) use ($o) { $o->setPowerOffDisabledWhileLoggedIn($n->getBooleanValue()); },
            'restartDisabled' => function (ParseNode $n) use ($o) { $o->setRestartDisabled($n->getBooleanValue()); },
            'restartDisabledWhileLoggedIn' => function (ParseNode $n) use ($o) { $o->setRestartDisabledWhileLoggedIn($n->getBooleanValue()); },
            'screenLockDisableImmediate' => function (ParseNode $n) use ($o) { $o->setScreenLockDisableImmediate($n->getBooleanValue()); },
            'shutDownDisabled' => function (ParseNode $n) use ($o) { $o->setShutDownDisabled($n->getBooleanValue()); },
            'shutDownDisabledWhileLoggedIn' => function (ParseNode $n) use ($o) { $o->setShutDownDisabledWhileLoggedIn($n->getBooleanValue()); },
            'singleSignOnExtension' => function (ParseNode $n) use ($o) { $o->setSingleSignOnExtension($n->getObjectValue(array(SingleSignOnExtension::class, 'createFromDiscriminatorValue'))); },
            'singleSignOnExtensionPkinitCertificate' => function (ParseNode $n) use ($o) { $o->setSingleSignOnExtensionPkinitCertificate($n->getObjectValue(array(MacOSCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'sleepDisabled' => function (ParseNode $n) use ($o) { $o->setSleepDisabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the loginWindowText property value. Custom text to be displayed on the login window.
     * @return string|null
    */
    public function getLoginWindowText(): ?string {
        return $this->loginWindowText;
    }

    /**
     * Gets the logOutDisabledWhileLoggedIn property value. Whether the Log Out menu item on the login window will be disabled while the user is logged in.
     * @return bool|null
    */
    public function getLogOutDisabledWhileLoggedIn(): ?bool {
        return $this->logOutDisabledWhileLoggedIn;
    }

    /**
     * Gets the macOSSingleSignOnExtension property value. Gets or sets a single sign-on extension profile.
     * @return MacOSSingleSignOnExtension|null
    */
    public function getMacOSSingleSignOnExtension(): ?MacOSSingleSignOnExtension {
        return $this->macOSSingleSignOnExtension;
    }

    /**
     * Gets the powerOffDisabledWhileLoggedIn property value. Whether the Power Off menu item on the login window will be disabled while the user is logged in.
     * @return bool|null
    */
    public function getPowerOffDisabledWhileLoggedIn(): ?bool {
        return $this->powerOffDisabledWhileLoggedIn;
    }

    /**
     * Gets the restartDisabled property value. Whether to hide the Restart button item on the login window.
     * @return bool|null
    */
    public function getRestartDisabled(): ?bool {
        return $this->restartDisabled;
    }

    /**
     * Gets the restartDisabledWhileLoggedIn property value. Whether the Restart menu item on the login window will be disabled while the user is logged in.
     * @return bool|null
    */
    public function getRestartDisabledWhileLoggedIn(): ?bool {
        return $this->restartDisabledWhileLoggedIn;
    }

    /**
     * Gets the screenLockDisableImmediate property value. Whether to disable the immediate screen lock functions.
     * @return bool|null
    */
    public function getScreenLockDisableImmediate(): ?bool {
        return $this->screenLockDisableImmediate;
    }

    /**
     * Gets the shutDownDisabled property value. Whether to hide the Shut Down button item on the login window.
     * @return bool|null
    */
    public function getShutDownDisabled(): ?bool {
        return $this->shutDownDisabled;
    }

    /**
     * Gets the shutDownDisabledWhileLoggedIn property value. Whether the Shut Down menu item on the login window will be disabled while the user is logged in.
     * @return bool|null
    */
    public function getShutDownDisabledWhileLoggedIn(): ?bool {
        return $this->shutDownDisabledWhileLoggedIn;
    }

    /**
     * Gets the singleSignOnExtension property value. Gets or sets a single sign-on extension profile. Deprecated: use MacOSSingleSignOnExtension instead.
     * @return SingleSignOnExtension|null
    */
    public function getSingleSignOnExtension(): ?SingleSignOnExtension {
        return $this->singleSignOnExtension;
    }

    /**
     * Gets the singleSignOnExtensionPkinitCertificate property value. PKINIT Certificate for the authentication with single sign-on extensions.
     * @return MacOSCertificateProfileBase|null
    */
    public function getSingleSignOnExtensionPkinitCertificate(): ?MacOSCertificateProfileBase {
        return $this->singleSignOnExtensionPkinitCertificate;
    }

    /**
     * Gets the sleepDisabled property value. Whether to hide the Sleep menu item on the login window.
     * @return bool|null
    */
    public function getSleepDisabled(): ?bool {
        return $this->sleepDisabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('adminShowHostInfo', $this->adminShowHostInfo);
        $writer->writeCollectionOfObjectValues('appAssociatedDomains', $this->appAssociatedDomains);
        $writer->writeCollectionOfObjectValues('associatedDomains', $this->associatedDomains);
        $writer->writeBooleanValue('authorizedUsersListHidden', $this->authorizedUsersListHidden);
        $writer->writeBooleanValue('authorizedUsersListHideAdminUsers', $this->authorizedUsersListHideAdminUsers);
        $writer->writeBooleanValue('authorizedUsersListHideLocalUsers', $this->authorizedUsersListHideLocalUsers);
        $writer->writeBooleanValue('authorizedUsersListHideMobileAccounts', $this->authorizedUsersListHideMobileAccounts);
        $writer->writeBooleanValue('authorizedUsersListIncludeNetworkUsers', $this->authorizedUsersListIncludeNetworkUsers);
        $writer->writeBooleanValue('authorizedUsersListShowOtherManagedUsers', $this->authorizedUsersListShowOtherManagedUsers);
        $writer->writeCollectionOfObjectValues('autoLaunchItems', $this->autoLaunchItems);
        $writer->writeBooleanValue('consoleAccessDisabled', $this->consoleAccessDisabled);
        $writer->writeBooleanValue('contentCachingBlockDeletion', $this->contentCachingBlockDeletion);
        $writer->writeCollectionOfObjectValues('contentCachingClientListenRanges', $this->contentCachingClientListenRanges);
        $writer->writeEnumValue('contentCachingClientPolicy', $this->contentCachingClientPolicy);
        $writer->writeStringValue('contentCachingDataPath', $this->contentCachingDataPath);
        $writer->writeBooleanValue('contentCachingDisableConnectionSharing', $this->contentCachingDisableConnectionSharing);
        $writer->writeBooleanValue('contentCachingEnabled', $this->contentCachingEnabled);
        $writer->writeBooleanValue('contentCachingForceConnectionSharing', $this->contentCachingForceConnectionSharing);
        $writer->writeBooleanValue('contentCachingKeepAwake', $this->contentCachingKeepAwake);
        $writer->writeBooleanValue('contentCachingLogClientIdentities', $this->contentCachingLogClientIdentities);
        $writer->writeIntegerValue('contentCachingMaxSizeBytes', $this->contentCachingMaxSizeBytes);
        $writer->writeCollectionOfPrimitiveValues('contentCachingParents', $this->contentCachingParents);
        $writer->writeEnumValue('contentCachingParentSelectionPolicy', $this->contentCachingParentSelectionPolicy);
        $writer->writeCollectionOfObjectValues('contentCachingPeerFilterRanges', $this->contentCachingPeerFilterRanges);
        $writer->writeCollectionOfObjectValues('contentCachingPeerListenRanges', $this->contentCachingPeerListenRanges);
        $writer->writeEnumValue('contentCachingPeerPolicy', $this->contentCachingPeerPolicy);
        $writer->writeIntegerValue('contentCachingPort', $this->contentCachingPort);
        $writer->writeCollectionOfObjectValues('contentCachingPublicRanges', $this->contentCachingPublicRanges);
        $writer->writeBooleanValue('contentCachingShowAlerts', $this->contentCachingShowAlerts);
        $writer->writeEnumValue('contentCachingType', $this->contentCachingType);
        $writer->writeStringValue('loginWindowText', $this->loginWindowText);
        $writer->writeBooleanValue('logOutDisabledWhileLoggedIn', $this->logOutDisabledWhileLoggedIn);
        $writer->writeObjectValue('macOSSingleSignOnExtension', $this->macOSSingleSignOnExtension);
        $writer->writeBooleanValue('powerOffDisabledWhileLoggedIn', $this->powerOffDisabledWhileLoggedIn);
        $writer->writeBooleanValue('restartDisabled', $this->restartDisabled);
        $writer->writeBooleanValue('restartDisabledWhileLoggedIn', $this->restartDisabledWhileLoggedIn);
        $writer->writeBooleanValue('screenLockDisableImmediate', $this->screenLockDisableImmediate);
        $writer->writeBooleanValue('shutDownDisabled', $this->shutDownDisabled);
        $writer->writeBooleanValue('shutDownDisabledWhileLoggedIn', $this->shutDownDisabledWhileLoggedIn);
        $writer->writeObjectValue('singleSignOnExtension', $this->singleSignOnExtension);
        $writer->writeObjectValue('singleSignOnExtensionPkinitCertificate', $this->singleSignOnExtensionPkinitCertificate);
        $writer->writeBooleanValue('sleepDisabled', $this->sleepDisabled);
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
     * Sets the adminShowHostInfo property value. Whether to show admin host information on the login window.
     *  @param bool|null $value Value to set for the adminShowHostInfo property.
    */
    public function setAdminShowHostInfo(?bool $value ): void {
        $this->adminShowHostInfo = $value;
    }

    /**
     * Sets the appAssociatedDomains property value. Gets or sets a list that maps apps to their associated domains. Application identifiers must be unique. This collection can contain a maximum of 500 elements.
     *  @param array<MacOSAssociatedDomainsItem>|null $value Value to set for the appAssociatedDomains property.
    */
    public function setAppAssociatedDomains(?array $value ): void {
        $this->appAssociatedDomains = $value;
    }

    /**
     * Sets the associatedDomains property value. DEPRECATED: use appAssociatedDomains instead. Gets or sets a list that maps apps to their associated domains. The key should match the app's ID, and the value should be a string in the form of 'service:domain' where domain is a fully qualified hostname (e.g. webcredentials:example.com). This collection can contain a maximum of 500 elements.
     *  @param array<KeyValuePair>|null $value Value to set for the associatedDomains property.
    */
    public function setAssociatedDomains(?array $value ): void {
        $this->associatedDomains = $value;
    }

    /**
     * Sets the authorizedUsersListHidden property value. Whether to show the name and password dialog or a list of users on the login window.
     *  @param bool|null $value Value to set for the authorizedUsersListHidden property.
    */
    public function setAuthorizedUsersListHidden(?bool $value ): void {
        $this->authorizedUsersListHidden = $value;
    }

    /**
     * Sets the authorizedUsersListHideAdminUsers property value. Whether to hide admin users in the authorized users list on the login window.
     *  @param bool|null $value Value to set for the authorizedUsersListHideAdminUsers property.
    */
    public function setAuthorizedUsersListHideAdminUsers(?bool $value ): void {
        $this->authorizedUsersListHideAdminUsers = $value;
    }

    /**
     * Sets the authorizedUsersListHideLocalUsers property value. Whether to show only network and system users in the authorized users list on the login window.
     *  @param bool|null $value Value to set for the authorizedUsersListHideLocalUsers property.
    */
    public function setAuthorizedUsersListHideLocalUsers(?bool $value ): void {
        $this->authorizedUsersListHideLocalUsers = $value;
    }

    /**
     * Sets the authorizedUsersListHideMobileAccounts property value. Whether to hide mobile users in the authorized users list on the login window.
     *  @param bool|null $value Value to set for the authorizedUsersListHideMobileAccounts property.
    */
    public function setAuthorizedUsersListHideMobileAccounts(?bool $value ): void {
        $this->authorizedUsersListHideMobileAccounts = $value;
    }

    /**
     * Sets the authorizedUsersListIncludeNetworkUsers property value. Whether to show network users in the authorized users list on the login window.
     *  @param bool|null $value Value to set for the authorizedUsersListIncludeNetworkUsers property.
    */
    public function setAuthorizedUsersListIncludeNetworkUsers(?bool $value ): void {
        $this->authorizedUsersListIncludeNetworkUsers = $value;
    }

    /**
     * Sets the authorizedUsersListShowOtherManagedUsers property value. Whether to show other users in the authorized users list on the login window.
     *  @param bool|null $value Value to set for the authorizedUsersListShowOtherManagedUsers property.
    */
    public function setAuthorizedUsersListShowOtherManagedUsers(?bool $value ): void {
        $this->authorizedUsersListShowOtherManagedUsers = $value;
    }

    /**
     * Sets the autoLaunchItems property value. List of applications, files, folders, and other items to launch when the user logs in. This collection can contain a maximum of 500 elements.
     *  @param array<MacOSLaunchItem>|null $value Value to set for the autoLaunchItems property.
    */
    public function setAutoLaunchItems(?array $value ): void {
        $this->autoLaunchItems = $value;
    }

    /**
     * Sets the consoleAccessDisabled property value. Whether the Other user will disregard use of the console special user name.
     *  @param bool|null $value Value to set for the consoleAccessDisabled property.
    */
    public function setConsoleAccessDisabled(?bool $value ): void {
        $this->consoleAccessDisabled = $value;
    }

    /**
     * Sets the contentCachingBlockDeletion property value. Prevents content caches from purging content to free up disk space for other apps.
     *  @param bool|null $value Value to set for the contentCachingBlockDeletion property.
    */
    public function setContentCachingBlockDeletion(?bool $value ): void {
        $this->contentCachingBlockDeletion = $value;
    }

    /**
     * Sets the contentCachingClientListenRanges property value. A list of custom IP ranges content caches will use to listen for clients. This collection can contain a maximum of 500 elements.
     *  @param array<IpRange>|null $value Value to set for the contentCachingClientListenRanges property.
    */
    public function setContentCachingClientListenRanges(?array $value ): void {
        $this->contentCachingClientListenRanges = $value;
    }

    /**
     * Sets the contentCachingClientPolicy property value. Determines the method in which content caching servers will listen for clients. Possible values are: notConfigured, clientsInLocalNetwork, clientsWithSamePublicIpAddress, clientsInCustomLocalNetworks, clientsInCustomLocalNetworksWithFallback.
     *  @param MacOSContentCachingClientPolicy|null $value Value to set for the contentCachingClientPolicy property.
    */
    public function setContentCachingClientPolicy(?MacOSContentCachingClientPolicy $value ): void {
        $this->contentCachingClientPolicy = $value;
    }

    /**
     * Sets the contentCachingDataPath property value. The path to the directory used to store cached content. The value must be (or end with) /Library/Application Support/Apple/AssetCache/Data
     *  @param string|null $value Value to set for the contentCachingDataPath property.
    */
    public function setContentCachingDataPath(?string $value ): void {
        $this->contentCachingDataPath = $value;
    }

    /**
     * Sets the contentCachingDisableConnectionSharing property value. Disables internet connection sharing.
     *  @param bool|null $value Value to set for the contentCachingDisableConnectionSharing property.
    */
    public function setContentCachingDisableConnectionSharing(?bool $value ): void {
        $this->contentCachingDisableConnectionSharing = $value;
    }

    /**
     * Sets the contentCachingEnabled property value. Enables content caching and prevents it from being disabled by the user.
     *  @param bool|null $value Value to set for the contentCachingEnabled property.
    */
    public function setContentCachingEnabled(?bool $value ): void {
        $this->contentCachingEnabled = $value;
    }

    /**
     * Sets the contentCachingForceConnectionSharing property value. Forces internet connection sharing. contentCachingDisableConnectionSharing overrides this setting.
     *  @param bool|null $value Value to set for the contentCachingForceConnectionSharing property.
    */
    public function setContentCachingForceConnectionSharing(?bool $value ): void {
        $this->contentCachingForceConnectionSharing = $value;
    }

    /**
     * Sets the contentCachingKeepAwake property value. Prevent the device from sleeping if content caching is enabled.
     *  @param bool|null $value Value to set for the contentCachingKeepAwake property.
    */
    public function setContentCachingKeepAwake(?bool $value ): void {
        $this->contentCachingKeepAwake = $value;
    }

    /**
     * Sets the contentCachingLogClientIdentities property value. Enables logging of IP addresses and ports of clients that request cached content.
     *  @param bool|null $value Value to set for the contentCachingLogClientIdentities property.
    */
    public function setContentCachingLogClientIdentities(?bool $value ): void {
        $this->contentCachingLogClientIdentities = $value;
    }

    /**
     * Sets the contentCachingMaxSizeBytes property value. The maximum number of bytes of disk space that will be used for the content cache. A value of 0 (default) indicates unlimited disk space.
     *  @param int|null $value Value to set for the contentCachingMaxSizeBytes property.
    */
    public function setContentCachingMaxSizeBytes(?int $value ): void {
        $this->contentCachingMaxSizeBytes = $value;
    }

    /**
     * Sets the contentCachingParents property value. A list of IP addresses representing parent content caches.
     *  @param array<string>|null $value Value to set for the contentCachingParents property.
    */
    public function setContentCachingParents(?array $value ): void {
        $this->contentCachingParents = $value;
    }

    /**
     * Sets the contentCachingParentSelectionPolicy property value. Determines the method in which content caching servers will select parents if multiple are present. Possible values are: notConfigured, roundRobin, firstAvailable, urlPathHash, random, stickyAvailable.
     *  @param MacOSContentCachingParentSelectionPolicy|null $value Value to set for the contentCachingParentSelectionPolicy property.
    */
    public function setContentCachingParentSelectionPolicy(?MacOSContentCachingParentSelectionPolicy $value ): void {
        $this->contentCachingParentSelectionPolicy = $value;
    }

    /**
     * Sets the contentCachingPeerFilterRanges property value. A list of custom IP ranges content caches will use to query for content from peers caches. This collection can contain a maximum of 500 elements.
     *  @param array<IpRange>|null $value Value to set for the contentCachingPeerFilterRanges property.
    */
    public function setContentCachingPeerFilterRanges(?array $value ): void {
        $this->contentCachingPeerFilterRanges = $value;
    }

    /**
     * Sets the contentCachingPeerListenRanges property value. A list of custom IP ranges content caches will use to listen for peer caches. This collection can contain a maximum of 500 elements.
     *  @param array<IpRange>|null $value Value to set for the contentCachingPeerListenRanges property.
    */
    public function setContentCachingPeerListenRanges(?array $value ): void {
        $this->contentCachingPeerListenRanges = $value;
    }

    /**
     * Sets the contentCachingPeerPolicy property value. Determines the method in which content caches peer with other caches. Possible values are: notConfigured, peersInLocalNetwork, peersWithSamePublicIpAddress, peersInCustomLocalNetworks.
     *  @param MacOSContentCachingPeerPolicy|null $value Value to set for the contentCachingPeerPolicy property.
    */
    public function setContentCachingPeerPolicy(?MacOSContentCachingPeerPolicy $value ): void {
        $this->contentCachingPeerPolicy = $value;
    }

    /**
     * Sets the contentCachingPort property value. Sets the port used for content caching. If the value is 0, a random available port will be selected. Valid values 0 to 65535
     *  @param int|null $value Value to set for the contentCachingPort property.
    */
    public function setContentCachingPort(?int $value ): void {
        $this->contentCachingPort = $value;
    }

    /**
     * Sets the contentCachingPublicRanges property value. A list of custom IP ranges that Apple's content caching service should use to match clients to content caches. This collection can contain a maximum of 500 elements.
     *  @param array<IpRange>|null $value Value to set for the contentCachingPublicRanges property.
    */
    public function setContentCachingPublicRanges(?array $value ): void {
        $this->contentCachingPublicRanges = $value;
    }

    /**
     * Sets the contentCachingShowAlerts property value. Display content caching alerts as system notifications.
     *  @param bool|null $value Value to set for the contentCachingShowAlerts property.
    */
    public function setContentCachingShowAlerts(?bool $value ): void {
        $this->contentCachingShowAlerts = $value;
    }

    /**
     * Sets the contentCachingType property value. Determines what type of content is allowed to be cached by Apple's content caching service. Possible values are: notConfigured, userContentOnly, sharedContentOnly.
     *  @param MacOSContentCachingType|null $value Value to set for the contentCachingType property.
    */
    public function setContentCachingType(?MacOSContentCachingType $value ): void {
        $this->contentCachingType = $value;
    }

    /**
     * Sets the loginWindowText property value. Custom text to be displayed on the login window.
     *  @param string|null $value Value to set for the loginWindowText property.
    */
    public function setLoginWindowText(?string $value ): void {
        $this->loginWindowText = $value;
    }

    /**
     * Sets the logOutDisabledWhileLoggedIn property value. Whether the Log Out menu item on the login window will be disabled while the user is logged in.
     *  @param bool|null $value Value to set for the logOutDisabledWhileLoggedIn property.
    */
    public function setLogOutDisabledWhileLoggedIn(?bool $value ): void {
        $this->logOutDisabledWhileLoggedIn = $value;
    }

    /**
     * Sets the macOSSingleSignOnExtension property value. Gets or sets a single sign-on extension profile.
     *  @param MacOSSingleSignOnExtension|null $value Value to set for the macOSSingleSignOnExtension property.
    */
    public function setMacOSSingleSignOnExtension(?MacOSSingleSignOnExtension $value ): void {
        $this->macOSSingleSignOnExtension = $value;
    }

    /**
     * Sets the powerOffDisabledWhileLoggedIn property value. Whether the Power Off menu item on the login window will be disabled while the user is logged in.
     *  @param bool|null $value Value to set for the powerOffDisabledWhileLoggedIn property.
    */
    public function setPowerOffDisabledWhileLoggedIn(?bool $value ): void {
        $this->powerOffDisabledWhileLoggedIn = $value;
    }

    /**
     * Sets the restartDisabled property value. Whether to hide the Restart button item on the login window.
     *  @param bool|null $value Value to set for the restartDisabled property.
    */
    public function setRestartDisabled(?bool $value ): void {
        $this->restartDisabled = $value;
    }

    /**
     * Sets the restartDisabledWhileLoggedIn property value. Whether the Restart menu item on the login window will be disabled while the user is logged in.
     *  @param bool|null $value Value to set for the restartDisabledWhileLoggedIn property.
    */
    public function setRestartDisabledWhileLoggedIn(?bool $value ): void {
        $this->restartDisabledWhileLoggedIn = $value;
    }

    /**
     * Sets the screenLockDisableImmediate property value. Whether to disable the immediate screen lock functions.
     *  @param bool|null $value Value to set for the screenLockDisableImmediate property.
    */
    public function setScreenLockDisableImmediate(?bool $value ): void {
        $this->screenLockDisableImmediate = $value;
    }

    /**
     * Sets the shutDownDisabled property value. Whether to hide the Shut Down button item on the login window.
     *  @param bool|null $value Value to set for the shutDownDisabled property.
    */
    public function setShutDownDisabled(?bool $value ): void {
        $this->shutDownDisabled = $value;
    }

    /**
     * Sets the shutDownDisabledWhileLoggedIn property value. Whether the Shut Down menu item on the login window will be disabled while the user is logged in.
     *  @param bool|null $value Value to set for the shutDownDisabledWhileLoggedIn property.
    */
    public function setShutDownDisabledWhileLoggedIn(?bool $value ): void {
        $this->shutDownDisabledWhileLoggedIn = $value;
    }

    /**
     * Sets the singleSignOnExtension property value. Gets or sets a single sign-on extension profile. Deprecated: use MacOSSingleSignOnExtension instead.
     *  @param SingleSignOnExtension|null $value Value to set for the singleSignOnExtension property.
    */
    public function setSingleSignOnExtension(?SingleSignOnExtension $value ): void {
        $this->singleSignOnExtension = $value;
    }

    /**
     * Sets the singleSignOnExtensionPkinitCertificate property value. PKINIT Certificate for the authentication with single sign-on extensions.
     *  @param MacOSCertificateProfileBase|null $value Value to set for the singleSignOnExtensionPkinitCertificate property.
    */
    public function setSingleSignOnExtensionPkinitCertificate(?MacOSCertificateProfileBase $value ): void {
        $this->singleSignOnExtensionPkinitCertificate = $value;
    }

    /**
     * Sets the sleepDisabled property value. Whether to hide the Sleep menu item on the login window.
     *  @param bool|null $value Value to set for the sleepDisabled property.
    */
    public function setSleepDisabled(?bool $value ): void {
        $this->sleepDisabled = $value;
    }

}
