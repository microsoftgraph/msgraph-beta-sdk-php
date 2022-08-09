<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosKerberosSingleSignOnExtension extends IosSingleSignOnExtension implements Parsable 
{
    /**
     * @var string|null $activeDirectorySiteCode Gets or sets the Active Directory site.
    */
    private ?string $activeDirectorySiteCode = null;
    
    /**
     * @var bool|null $blockActiveDirectorySiteAutoDiscovery Enables or disables whether the Kerberos extension can automatically determine its site name.
    */
    private ?bool $blockActiveDirectorySiteAutoDiscovery = null;
    
    /**
     * @var bool|null $blockAutomaticLogin Enables or disables Keychain usage.
    */
    private ?bool $blockAutomaticLogin = null;
    
    /**
     * @var string|null $cacheName Gets or sets the Generic Security Services name of the Kerberos cache to use for this profile.
    */
    private ?string $cacheName = null;
    
    /**
     * @var array<string>|null $credentialBundleIdAccessControlList Gets or sets a list of app Bundle IDs allowed to access the Kerberos Ticket Granting Ticket.
    */
    private ?array $credentialBundleIdAccessControlList = null;
    
    /**
     * @var array<string>|null $domainRealms Gets or sets a list of realms for custom domain-realm mapping. Realms are case sensitive.
    */
    private ?array $domainRealms = null;
    
    /**
     * @var array<string>|null $domains Gets or sets a list of hosts or domain names for which the app extension performs SSO.
    */
    private ?array $domains = null;
    
    /**
     * @var bool|null $isDefaultRealm When true, this profile's realm will be selected as the default. Necessary if multiple Kerberos-type profiles are configured.
    */
    private ?bool $isDefaultRealm = null;
    
    /**
     * @var bool|null $managedAppsInBundleIdACLIncluded When set to True, the Kerberos extension allows managed apps, and any apps entered with the app bundle ID to access the credential. When set to False, the Kerberos extension allows all apps to access the credential. Available for devices running iOS and iPadOS versions 14 and later.
    */
    private ?bool $managedAppsInBundleIdACLIncluded = null;
    
    /**
     * @var bool|null $passwordBlockModification Enables or disables password changes.
    */
    private ?bool $passwordBlockModification = null;
    
    /**
     * @var string|null $passwordChangeUrl Gets or sets the URL that the user will be sent to when they initiate a password change.
    */
    private ?string $passwordChangeUrl = null;
    
    /**
     * @var bool|null $passwordEnableLocalSync Enables or disables password syncing. This won't affect users logged in with a mobile account on macOS.
    */
    private ?bool $passwordEnableLocalSync = null;
    
    /**
     * @var int|null $passwordExpirationDays Overrides the default password expiration in days. For most domains, this value is calculated automatically.
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordExpirationNotificationDays Gets or sets the number of days until the user is notified that their password will expire (default is 15).
    */
    private ?int $passwordExpirationNotificationDays = null;
    
    /**
     * @var int|null $passwordMinimumAgeDays Gets or sets the minimum number of days until a user can change their password again.
    */
    private ?int $passwordMinimumAgeDays = null;
    
    /**
     * @var int|null $passwordMinimumLength Gets or sets the minimum length of a password.
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordPreviousPasswordBlockCount Gets or sets the number of previous passwords to block.
    */
    private ?int $passwordPreviousPasswordBlockCount = null;
    
    /**
     * @var bool|null $passwordRequireActiveDirectoryComplexity Enables or disables whether passwords must meet Active Directory's complexity requirements.
    */
    private ?bool $passwordRequireActiveDirectoryComplexity = null;
    
    /**
     * @var string|null $passwordRequirementsDescription Gets or sets a description of the password complexity requirements.
    */
    private ?string $passwordRequirementsDescription = null;
    
    /**
     * @var string|null $realm Gets or sets the case-sensitive realm name for this profile.
    */
    private ?string $realm = null;
    
    /**
     * @var bool|null $requireUserPresence Gets or sets whether to require authentication via Touch ID, Face ID, or a passcode to access the keychain entry.
    */
    private ?bool $requireUserPresence = null;
    
    /**
     * @var string|null $signInHelpText Text displayed to the user at the Kerberos sign in window. Available for devices running iOS and iPadOS versions 14 and later.
    */
    private ?string $signInHelpText = null;
    
    /**
     * @var string|null $userPrincipalName Gets or sets the principle user name to use for this profile. The realm name does not need to be included.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new IosKerberosSingleSignOnExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosKerberosSingleSignOnExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosKerberosSingleSignOnExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosKerberosSingleSignOnExtension {
        return new IosKerberosSingleSignOnExtension();
    }

    /**
     * Gets the activeDirectorySiteCode property value. Gets or sets the Active Directory site.
     * @return string|null
    */
    public function getActiveDirectorySiteCode(): ?string {
        return $this->activeDirectorySiteCode;
    }

    /**
     * Gets the blockActiveDirectorySiteAutoDiscovery property value. Enables or disables whether the Kerberos extension can automatically determine its site name.
     * @return bool|null
    */
    public function getBlockActiveDirectorySiteAutoDiscovery(): ?bool {
        return $this->blockActiveDirectorySiteAutoDiscovery;
    }

    /**
     * Gets the blockAutomaticLogin property value. Enables or disables Keychain usage.
     * @return bool|null
    */
    public function getBlockAutomaticLogin(): ?bool {
        return $this->blockAutomaticLogin;
    }

    /**
     * Gets the cacheName property value. Gets or sets the Generic Security Services name of the Kerberos cache to use for this profile.
     * @return string|null
    */
    public function getCacheName(): ?string {
        return $this->cacheName;
    }

    /**
     * Gets the credentialBundleIdAccessControlList property value. Gets or sets a list of app Bundle IDs allowed to access the Kerberos Ticket Granting Ticket.
     * @return array<string>|null
    */
    public function getCredentialBundleIdAccessControlList(): ?array {
        return $this->credentialBundleIdAccessControlList;
    }

    /**
     * Gets the domainRealms property value. Gets or sets a list of realms for custom domain-realm mapping. Realms are case sensitive.
     * @return array<string>|null
    */
    public function getDomainRealms(): ?array {
        return $this->domainRealms;
    }

    /**
     * Gets the domains property value. Gets or sets a list of hosts or domain names for which the app extension performs SSO.
     * @return array<string>|null
    */
    public function getDomains(): ?array {
        return $this->domains;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDirectorySiteCode' => function (ParseNode $n) use ($o) { $o->setActiveDirectorySiteCode($n->getStringValue()); },
            'blockActiveDirectorySiteAutoDiscovery' => function (ParseNode $n) use ($o) { $o->setBlockActiveDirectorySiteAutoDiscovery($n->getBooleanValue()); },
            'blockAutomaticLogin' => function (ParseNode $n) use ($o) { $o->setBlockAutomaticLogin($n->getBooleanValue()); },
            'cacheName' => function (ParseNode $n) use ($o) { $o->setCacheName($n->getStringValue()); },
            'credentialBundleIdAccessControlList' => function (ParseNode $n) use ($o) { $o->setCredentialBundleIdAccessControlList($n->getCollectionOfPrimitiveValues()); },
            'domainRealms' => function (ParseNode $n) use ($o) { $o->setDomainRealms($n->getCollectionOfPrimitiveValues()); },
            'domains' => function (ParseNode $n) use ($o) { $o->setDomains($n->getCollectionOfPrimitiveValues()); },
            'isDefaultRealm' => function (ParseNode $n) use ($o) { $o->setIsDefaultRealm($n->getBooleanValue()); },
            'managedAppsInBundleIdACLIncluded' => function (ParseNode $n) use ($o) { $o->setManagedAppsInBundleIdACLIncluded($n->getBooleanValue()); },
            'passwordBlockModification' => function (ParseNode $n) use ($o) { $o->setPasswordBlockModification($n->getBooleanValue()); },
            'passwordChangeUrl' => function (ParseNode $n) use ($o) { $o->setPasswordChangeUrl($n->getStringValue()); },
            'passwordEnableLocalSync' => function (ParseNode $n) use ($o) { $o->setPasswordEnableLocalSync($n->getBooleanValue()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordExpirationNotificationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationNotificationDays($n->getIntegerValue()); },
            'passwordMinimumAgeDays' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumAgeDays($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'passwordRequireActiveDirectoryComplexity' => function (ParseNode $n) use ($o) { $o->setPasswordRequireActiveDirectoryComplexity($n->getBooleanValue()); },
            'passwordRequirementsDescription' => function (ParseNode $n) use ($o) { $o->setPasswordRequirementsDescription($n->getStringValue()); },
            'realm' => function (ParseNode $n) use ($o) { $o->setRealm($n->getStringValue()); },
            'requireUserPresence' => function (ParseNode $n) use ($o) { $o->setRequireUserPresence($n->getBooleanValue()); },
            'signInHelpText' => function (ParseNode $n) use ($o) { $o->setSignInHelpText($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isDefaultRealm property value. When true, this profile's realm will be selected as the default. Necessary if multiple Kerberos-type profiles are configured.
     * @return bool|null
    */
    public function getIsDefaultRealm(): ?bool {
        return $this->isDefaultRealm;
    }

    /**
     * Gets the managedAppsInBundleIdACLIncluded property value. When set to True, the Kerberos extension allows managed apps, and any apps entered with the app bundle ID to access the credential. When set to False, the Kerberos extension allows all apps to access the credential. Available for devices running iOS and iPadOS versions 14 and later.
     * @return bool|null
    */
    public function getManagedAppsInBundleIdACLIncluded(): ?bool {
        return $this->managedAppsInBundleIdACLIncluded;
    }

    /**
     * Gets the passwordBlockModification property value. Enables or disables password changes.
     * @return bool|null
    */
    public function getPasswordBlockModification(): ?bool {
        return $this->passwordBlockModification;
    }

    /**
     * Gets the passwordChangeUrl property value. Gets or sets the URL that the user will be sent to when they initiate a password change.
     * @return string|null
    */
    public function getPasswordChangeUrl(): ?string {
        return $this->passwordChangeUrl;
    }

    /**
     * Gets the passwordEnableLocalSync property value. Enables or disables password syncing. This won't affect users logged in with a mobile account on macOS.
     * @return bool|null
    */
    public function getPasswordEnableLocalSync(): ?bool {
        return $this->passwordEnableLocalSync;
    }

    /**
     * Gets the passwordExpirationDays property value. Overrides the default password expiration in days. For most domains, this value is calculated automatically.
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordExpirationNotificationDays property value. Gets or sets the number of days until the user is notified that their password will expire (default is 15).
     * @return int|null
    */
    public function getPasswordExpirationNotificationDays(): ?int {
        return $this->passwordExpirationNotificationDays;
    }

    /**
     * Gets the passwordMinimumAgeDays property value. Gets or sets the minimum number of days until a user can change their password again.
     * @return int|null
    */
    public function getPasswordMinimumAgeDays(): ?int {
        return $this->passwordMinimumAgeDays;
    }

    /**
     * Gets the passwordMinimumLength property value. Gets or sets the minimum length of a password.
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->passwordMinimumLength;
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. Gets or sets the number of previous passwords to block.
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->passwordPreviousPasswordBlockCount;
    }

    /**
     * Gets the passwordRequireActiveDirectoryComplexity property value. Enables or disables whether passwords must meet Active Directory's complexity requirements.
     * @return bool|null
    */
    public function getPasswordRequireActiveDirectoryComplexity(): ?bool {
        return $this->passwordRequireActiveDirectoryComplexity;
    }

    /**
     * Gets the passwordRequirementsDescription property value. Gets or sets a description of the password complexity requirements.
     * @return string|null
    */
    public function getPasswordRequirementsDescription(): ?string {
        return $this->passwordRequirementsDescription;
    }

    /**
     * Gets the realm property value. Gets or sets the case-sensitive realm name for this profile.
     * @return string|null
    */
    public function getRealm(): ?string {
        return $this->realm;
    }

    /**
     * Gets the requireUserPresence property value. Gets or sets whether to require authentication via Touch ID, Face ID, or a passcode to access the keychain entry.
     * @return bool|null
    */
    public function getRequireUserPresence(): ?bool {
        return $this->requireUserPresence;
    }

    /**
     * Gets the signInHelpText property value. Text displayed to the user at the Kerberos sign in window. Available for devices running iOS and iPadOS versions 14 and later.
     * @return string|null
    */
    public function getSignInHelpText(): ?string {
        return $this->signInHelpText;
    }

    /**
     * Gets the userPrincipalName property value. Gets or sets the principle user name to use for this profile. The realm name does not need to be included.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activeDirectorySiteCode', $this->activeDirectorySiteCode);
        $writer->writeBooleanValue('blockActiveDirectorySiteAutoDiscovery', $this->blockActiveDirectorySiteAutoDiscovery);
        $writer->writeBooleanValue('blockAutomaticLogin', $this->blockAutomaticLogin);
        $writer->writeStringValue('cacheName', $this->cacheName);
        $writer->writeCollectionOfPrimitiveValues('credentialBundleIdAccessControlList', $this->credentialBundleIdAccessControlList);
        $writer->writeCollectionOfPrimitiveValues('domainRealms', $this->domainRealms);
        $writer->writeCollectionOfPrimitiveValues('domains', $this->domains);
        $writer->writeBooleanValue('isDefaultRealm', $this->isDefaultRealm);
        $writer->writeBooleanValue('managedAppsInBundleIdACLIncluded', $this->managedAppsInBundleIdACLIncluded);
        $writer->writeBooleanValue('passwordBlockModification', $this->passwordBlockModification);
        $writer->writeStringValue('passwordChangeUrl', $this->passwordChangeUrl);
        $writer->writeBooleanValue('passwordEnableLocalSync', $this->passwordEnableLocalSync);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordExpirationNotificationDays', $this->passwordExpirationNotificationDays);
        $writer->writeIntegerValue('passwordMinimumAgeDays', $this->passwordMinimumAgeDays);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->passwordPreviousPasswordBlockCount);
        $writer->writeBooleanValue('passwordRequireActiveDirectoryComplexity', $this->passwordRequireActiveDirectoryComplexity);
        $writer->writeStringValue('passwordRequirementsDescription', $this->passwordRequirementsDescription);
        $writer->writeStringValue('realm', $this->realm);
        $writer->writeBooleanValue('requireUserPresence', $this->requireUserPresence);
        $writer->writeStringValue('signInHelpText', $this->signInHelpText);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the activeDirectorySiteCode property value. Gets or sets the Active Directory site.
     *  @param string|null $value Value to set for the activeDirectorySiteCode property.
    */
    public function setActiveDirectorySiteCode(?string $value ): void {
        $this->activeDirectorySiteCode = $value;
    }

    /**
     * Sets the blockActiveDirectorySiteAutoDiscovery property value. Enables or disables whether the Kerberos extension can automatically determine its site name.
     *  @param bool|null $value Value to set for the blockActiveDirectorySiteAutoDiscovery property.
    */
    public function setBlockActiveDirectorySiteAutoDiscovery(?bool $value ): void {
        $this->blockActiveDirectorySiteAutoDiscovery = $value;
    }

    /**
     * Sets the blockAutomaticLogin property value. Enables or disables Keychain usage.
     *  @param bool|null $value Value to set for the blockAutomaticLogin property.
    */
    public function setBlockAutomaticLogin(?bool $value ): void {
        $this->blockAutomaticLogin = $value;
    }

    /**
     * Sets the cacheName property value. Gets or sets the Generic Security Services name of the Kerberos cache to use for this profile.
     *  @param string|null $value Value to set for the cacheName property.
    */
    public function setCacheName(?string $value ): void {
        $this->cacheName = $value;
    }

    /**
     * Sets the credentialBundleIdAccessControlList property value. Gets or sets a list of app Bundle IDs allowed to access the Kerberos Ticket Granting Ticket.
     *  @param array<string>|null $value Value to set for the credentialBundleIdAccessControlList property.
    */
    public function setCredentialBundleIdAccessControlList(?array $value ): void {
        $this->credentialBundleIdAccessControlList = $value;
    }

    /**
     * Sets the domainRealms property value. Gets or sets a list of realms for custom domain-realm mapping. Realms are case sensitive.
     *  @param array<string>|null $value Value to set for the domainRealms property.
    */
    public function setDomainRealms(?array $value ): void {
        $this->domainRealms = $value;
    }

    /**
     * Sets the domains property value. Gets or sets a list of hosts or domain names for which the app extension performs SSO.
     *  @param array<string>|null $value Value to set for the domains property.
    */
    public function setDomains(?array $value ): void {
        $this->domains = $value;
    }

    /**
     * Sets the isDefaultRealm property value. When true, this profile's realm will be selected as the default. Necessary if multiple Kerberos-type profiles are configured.
     *  @param bool|null $value Value to set for the isDefaultRealm property.
    */
    public function setIsDefaultRealm(?bool $value ): void {
        $this->isDefaultRealm = $value;
    }

    /**
     * Sets the managedAppsInBundleIdACLIncluded property value. When set to True, the Kerberos extension allows managed apps, and any apps entered with the app bundle ID to access the credential. When set to False, the Kerberos extension allows all apps to access the credential. Available for devices running iOS and iPadOS versions 14 and later.
     *  @param bool|null $value Value to set for the managedAppsInBundleIdACLIncluded property.
    */
    public function setManagedAppsInBundleIdACLIncluded(?bool $value ): void {
        $this->managedAppsInBundleIdACLIncluded = $value;
    }

    /**
     * Sets the passwordBlockModification property value. Enables or disables password changes.
     *  @param bool|null $value Value to set for the passwordBlockModification property.
    */
    public function setPasswordBlockModification(?bool $value ): void {
        $this->passwordBlockModification = $value;
    }

    /**
     * Sets the passwordChangeUrl property value. Gets or sets the URL that the user will be sent to when they initiate a password change.
     *  @param string|null $value Value to set for the passwordChangeUrl property.
    */
    public function setPasswordChangeUrl(?string $value ): void {
        $this->passwordChangeUrl = $value;
    }

    /**
     * Sets the passwordEnableLocalSync property value. Enables or disables password syncing. This won't affect users logged in with a mobile account on macOS.
     *  @param bool|null $value Value to set for the passwordEnableLocalSync property.
    */
    public function setPasswordEnableLocalSync(?bool $value ): void {
        $this->passwordEnableLocalSync = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. Overrides the default password expiration in days. For most domains, this value is calculated automatically.
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordExpirationNotificationDays property value. Gets or sets the number of days until the user is notified that their password will expire (default is 15).
     *  @param int|null $value Value to set for the passwordExpirationNotificationDays property.
    */
    public function setPasswordExpirationNotificationDays(?int $value ): void {
        $this->passwordExpirationNotificationDays = $value;
    }

    /**
     * Sets the passwordMinimumAgeDays property value. Gets or sets the minimum number of days until a user can change their password again.
     *  @param int|null $value Value to set for the passwordMinimumAgeDays property.
    */
    public function setPasswordMinimumAgeDays(?int $value ): void {
        $this->passwordMinimumAgeDays = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. Gets or sets the minimum length of a password.
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value ): void {
        $this->passwordMinimumLength = $value;
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. Gets or sets the number of previous passwords to block.
     *  @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value ): void {
        $this->passwordPreviousPasswordBlockCount = $value;
    }

    /**
     * Sets the passwordRequireActiveDirectoryComplexity property value. Enables or disables whether passwords must meet Active Directory's complexity requirements.
     *  @param bool|null $value Value to set for the passwordRequireActiveDirectoryComplexity property.
    */
    public function setPasswordRequireActiveDirectoryComplexity(?bool $value ): void {
        $this->passwordRequireActiveDirectoryComplexity = $value;
    }

    /**
     * Sets the passwordRequirementsDescription property value. Gets or sets a description of the password complexity requirements.
     *  @param string|null $value Value to set for the passwordRequirementsDescription property.
    */
    public function setPasswordRequirementsDescription(?string $value ): void {
        $this->passwordRequirementsDescription = $value;
    }

    /**
     * Sets the realm property value. Gets or sets the case-sensitive realm name for this profile.
     *  @param string|null $value Value to set for the realm property.
    */
    public function setRealm(?string $value ): void {
        $this->realm = $value;
    }

    /**
     * Sets the requireUserPresence property value. Gets or sets whether to require authentication via Touch ID, Face ID, or a passcode to access the keychain entry.
     *  @param bool|null $value Value to set for the requireUserPresence property.
    */
    public function setRequireUserPresence(?bool $value ): void {
        $this->requireUserPresence = $value;
    }

    /**
     * Sets the signInHelpText property value. Text displayed to the user at the Kerberos sign in window. Available for devices running iOS and iPadOS versions 14 and later.
     *  @param string|null $value Value to set for the signInHelpText property.
    */
    public function setSignInHelpText(?string $value ): void {
        $this->signInHelpText = $value;
    }

    /**
     * Sets the userPrincipalName property value. Gets or sets the principle user name to use for this profile. The realm name does not need to be included.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
