<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents a Kerberos-type Single Sign-On extension profile for macOS devices.
*/
class MacOSKerberosSingleSignOnExtension extends MacOSSingleSignOnExtension implements Parsable 
{
    /**
     * Instantiates a new MacOSKerberosSingleSignOnExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSKerberosSingleSignOnExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSKerberosSingleSignOnExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSKerberosSingleSignOnExtension {
        return new MacOSKerberosSingleSignOnExtension();
    }

    /**
     * Gets the activeDirectorySiteCode property value. Gets or sets the Active Directory site.
     * @return string|null
    */
    public function getActiveDirectorySiteCode(): ?string {
        $val = $this->getBackingStore()->get('activeDirectorySiteCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeDirectorySiteCode'");
    }

    /**
     * Gets the blockActiveDirectorySiteAutoDiscovery property value. Enables or disables whether the Kerberos extension can automatically determine its site name.
     * @return bool|null
    */
    public function getBlockActiveDirectorySiteAutoDiscovery(): ?bool {
        $val = $this->getBackingStore()->get('blockActiveDirectorySiteAutoDiscovery');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockActiveDirectorySiteAutoDiscovery'");
    }

    /**
     * Gets the blockAutomaticLogin property value. Enables or disables Keychain usage.
     * @return bool|null
    */
    public function getBlockAutomaticLogin(): ?bool {
        $val = $this->getBackingStore()->get('blockAutomaticLogin');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockAutomaticLogin'");
    }

    /**
     * Gets the cacheName property value. Gets or sets the Generic Security Services name of the Kerberos cache to use for this profile.
     * @return string|null
    */
    public function getCacheName(): ?string {
        $val = $this->getBackingStore()->get('cacheName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cacheName'");
    }

    /**
     * Gets the credentialBundleIdAccessControlList property value. Gets or sets a list of app Bundle IDs allowed to access the Kerberos Ticket Granting Ticket.
     * @return array<string>|null
    */
    public function getCredentialBundleIdAccessControlList(): ?array {
        $val = $this->getBackingStore()->get('credentialBundleIdAccessControlList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'credentialBundleIdAccessControlList'");
    }

    /**
     * Gets the credentialsCacheMonitored property value. When set to True, the credential is requested on the next matching Kerberos challenge or network state change. When the credential is expired or missing, a new credential is created. Available for devices running macOS versions 12 and later.
     * @return bool|null
    */
    public function getCredentialsCacheMonitored(): ?bool {
        $val = $this->getBackingStore()->get('credentialsCacheMonitored');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'credentialsCacheMonitored'");
    }

    /**
     * Gets the domainRealms property value. Gets or sets a list of realms for custom domain-realm mapping. Realms are case sensitive.
     * @return array<string>|null
    */
    public function getDomainRealms(): ?array {
        $val = $this->getBackingStore()->get('domainRealms');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainRealms'");
    }

    /**
     * Gets the domains property value. Gets or sets a list of hosts or domain names for which the app extension performs SSO.
     * @return array<string>|null
    */
    public function getDomains(): ?array {
        $val = $this->getBackingStore()->get('domains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domains'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDirectorySiteCode' => fn(ParseNode $n) => $o->setActiveDirectorySiteCode($n->getStringValue()),
            'blockActiveDirectorySiteAutoDiscovery' => fn(ParseNode $n) => $o->setBlockActiveDirectorySiteAutoDiscovery($n->getBooleanValue()),
            'blockAutomaticLogin' => fn(ParseNode $n) => $o->setBlockAutomaticLogin($n->getBooleanValue()),
            'cacheName' => fn(ParseNode $n) => $o->setCacheName($n->getStringValue()),
            'credentialBundleIdAccessControlList' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCredentialBundleIdAccessControlList($val);
            },
            'credentialsCacheMonitored' => fn(ParseNode $n) => $o->setCredentialsCacheMonitored($n->getBooleanValue()),
            'domainRealms' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDomainRealms($val);
            },
            'domains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDomains($val);
            },
            'isDefaultRealm' => fn(ParseNode $n) => $o->setIsDefaultRealm($n->getBooleanValue()),
            'kerberosAppsInBundleIdACLIncluded' => fn(ParseNode $n) => $o->setKerberosAppsInBundleIdACLIncluded($n->getBooleanValue()),
            'managedAppsInBundleIdACLIncluded' => fn(ParseNode $n) => $o->setManagedAppsInBundleIdACLIncluded($n->getBooleanValue()),
            'modeCredentialUsed' => fn(ParseNode $n) => $o->setModeCredentialUsed($n->getStringValue()),
            'passwordBlockModification' => fn(ParseNode $n) => $o->setPasswordBlockModification($n->getBooleanValue()),
            'passwordChangeUrl' => fn(ParseNode $n) => $o->setPasswordChangeUrl($n->getStringValue()),
            'passwordEnableLocalSync' => fn(ParseNode $n) => $o->setPasswordEnableLocalSync($n->getBooleanValue()),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordExpirationNotificationDays' => fn(ParseNode $n) => $o->setPasswordExpirationNotificationDays($n->getIntegerValue()),
            'passwordMinimumAgeDays' => fn(ParseNode $n) => $o->setPasswordMinimumAgeDays($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'passwordRequireActiveDirectoryComplexity' => fn(ParseNode $n) => $o->setPasswordRequireActiveDirectoryComplexity($n->getBooleanValue()),
            'passwordRequirementsDescription' => fn(ParseNode $n) => $o->setPasswordRequirementsDescription($n->getStringValue()),
            'preferredKDCs' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPreferredKDCs($val);
            },
            'realm' => fn(ParseNode $n) => $o->setRealm($n->getStringValue()),
            'requireUserPresence' => fn(ParseNode $n) => $o->setRequireUserPresence($n->getBooleanValue()),
            'signInHelpText' => fn(ParseNode $n) => $o->setSignInHelpText($n->getStringValue()),
            'tlsForLDAPRequired' => fn(ParseNode $n) => $o->setTlsForLDAPRequired($n->getBooleanValue()),
            'usernameLabelCustom' => fn(ParseNode $n) => $o->setUsernameLabelCustom($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'userSetupDelayed' => fn(ParseNode $n) => $o->setUserSetupDelayed($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isDefaultRealm property value. When true, this profile's realm will be selected as the default. Necessary if multiple Kerberos-type profiles are configured.
     * @return bool|null
    */
    public function getIsDefaultRealm(): ?bool {
        $val = $this->getBackingStore()->get('isDefaultRealm');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefaultRealm'");
    }

    /**
     * Gets the kerberosAppsInBundleIdACLIncluded property value. When set to True, the Kerberos extension allows any apps entered with the app bundle ID, managed apps, and standard Kerberos utilities, such as TicketViewer and klist, to access and use the credential. Available for devices running macOS versions 12 and later.
     * @return bool|null
    */
    public function getKerberosAppsInBundleIdACLIncluded(): ?bool {
        $val = $this->getBackingStore()->get('kerberosAppsInBundleIdACLIncluded');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kerberosAppsInBundleIdACLIncluded'");
    }

    /**
     * Gets the managedAppsInBundleIdACLIncluded property value. When set to True, the Kerberos extension allows managed apps, and any apps entered with the app bundle ID to access the credential. When set to False, the Kerberos extension allows all apps to access the credential. Available for devices running iOS and iPadOS versions 14 and later.
     * @return bool|null
    */
    public function getManagedAppsInBundleIdACLIncluded(): ?bool {
        $val = $this->getBackingStore()->get('managedAppsInBundleIdACLIncluded');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedAppsInBundleIdACLIncluded'");
    }

    /**
     * Gets the modeCredentialUsed property value. Select how other processes use the Kerberos Extension credential.
     * @return string|null
    */
    public function getModeCredentialUsed(): ?string {
        $val = $this->getBackingStore()->get('modeCredentialUsed');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modeCredentialUsed'");
    }

    /**
     * Gets the passwordBlockModification property value. Enables or disables password changes.
     * @return bool|null
    */
    public function getPasswordBlockModification(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockModification');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockModification'");
    }

    /**
     * Gets the passwordChangeUrl property value. Gets or sets the URL that the user will be sent to when they initiate a password change.
     * @return string|null
    */
    public function getPasswordChangeUrl(): ?string {
        $val = $this->getBackingStore()->get('passwordChangeUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordChangeUrl'");
    }

    /**
     * Gets the passwordEnableLocalSync property value. Enables or disables password syncing. This won't affect users logged in with a mobile account on macOS.
     * @return bool|null
    */
    public function getPasswordEnableLocalSync(): ?bool {
        $val = $this->getBackingStore()->get('passwordEnableLocalSync');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordEnableLocalSync'");
    }

    /**
     * Gets the passwordExpirationDays property value. Overrides the default password expiration in days. For most domains, this value is calculated automatically.
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        $val = $this->getBackingStore()->get('passwordExpirationDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordExpirationDays'");
    }

    /**
     * Gets the passwordExpirationNotificationDays property value. Gets or sets the number of days until the user is notified that their password will expire (default is 15).
     * @return int|null
    */
    public function getPasswordExpirationNotificationDays(): ?int {
        $val = $this->getBackingStore()->get('passwordExpirationNotificationDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordExpirationNotificationDays'");
    }

    /**
     * Gets the passwordMinimumAgeDays property value. Gets or sets the minimum number of days until a user can change their password again.
     * @return int|null
    */
    public function getPasswordMinimumAgeDays(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumAgeDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumAgeDays'");
    }

    /**
     * Gets the passwordMinimumLength property value. Gets or sets the minimum length of a password.
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumLength'");
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. Gets or sets the number of previous passwords to block.
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        $val = $this->getBackingStore()->get('passwordPreviousPasswordBlockCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordPreviousPasswordBlockCount'");
    }

    /**
     * Gets the passwordRequireActiveDirectoryComplexity property value. Enables or disables whether passwords must meet Active Directory's complexity requirements.
     * @return bool|null
    */
    public function getPasswordRequireActiveDirectoryComplexity(): ?bool {
        $val = $this->getBackingStore()->get('passwordRequireActiveDirectoryComplexity');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequireActiveDirectoryComplexity'");
    }

    /**
     * Gets the passwordRequirementsDescription property value. Gets or sets a description of the password complexity requirements.
     * @return string|null
    */
    public function getPasswordRequirementsDescription(): ?string {
        $val = $this->getBackingStore()->get('passwordRequirementsDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequirementsDescription'");
    }

    /**
     * Gets the preferredKDCs property value. Add creates an ordered list of preferred Key Distribution Centers (KDCs) to use for Kerberos traffic. This list is used when the servers are not discoverable using DNS. When the servers are discoverable, the list is used for both connectivity checks, and used first for Kerberos traffic. If the servers don’t respond, then the device uses DNS discovery. Delete removes an existing list, and devices use DNS discovery. Available for devices running macOS versions 12 and later.
     * @return array<string>|null
    */
    public function getPreferredKDCs(): ?array {
        $val = $this->getBackingStore()->get('preferredKDCs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preferredKDCs'");
    }

    /**
     * Gets the realm property value. Gets or sets the case-sensitive realm name for this profile.
     * @return string|null
    */
    public function getRealm(): ?string {
        $val = $this->getBackingStore()->get('realm');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'realm'");
    }

    /**
     * Gets the requireUserPresence property value. Gets or sets whether to require authentication via Touch ID, Face ID, or a passcode to access the keychain entry.
     * @return bool|null
    */
    public function getRequireUserPresence(): ?bool {
        $val = $this->getBackingStore()->get('requireUserPresence');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requireUserPresence'");
    }

    /**
     * Gets the signInHelpText property value. Text displayed to the user at the Kerberos sign in window. Available for devices running iOS and iPadOS versions 14 and later.
     * @return string|null
    */
    public function getSignInHelpText(): ?string {
        $val = $this->getBackingStore()->get('signInHelpText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInHelpText'");
    }

    /**
     * Gets the tlsForLDAPRequired property value. When set to True, LDAP connections are required to use Transport Layer Security (TLS). Available for devices running macOS versions 11 and later.
     * @return bool|null
    */
    public function getTlsForLDAPRequired(): ?bool {
        $val = $this->getBackingStore()->get('tlsForLDAPRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tlsForLDAPRequired'");
    }

    /**
     * Gets the usernameLabelCustom property value. This label replaces the user name shown in the Kerberos extension. You can enter a name to match the name of your company or organization. Available for devices running macOS versions 11 and later.
     * @return string|null
    */
    public function getUsernameLabelCustom(): ?string {
        $val = $this->getBackingStore()->get('usernameLabelCustom');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usernameLabelCustom'");
    }

    /**
     * Gets the userPrincipalName property value. Gets or sets the principle user name to use for this profile. The realm name does not need to be included.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Gets the userSetupDelayed property value. When set to True, the user isn’t prompted to set up the Kerberos extension until the extension is enabled by the admin, or a Kerberos challenge is received. Available for devices running macOS versions 11 and later.
     * @return bool|null
    */
    public function getUserSetupDelayed(): ?bool {
        $val = $this->getBackingStore()->get('userSetupDelayed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userSetupDelayed'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activeDirectorySiteCode', $this->getActiveDirectorySiteCode());
        $writer->writeBooleanValue('blockActiveDirectorySiteAutoDiscovery', $this->getBlockActiveDirectorySiteAutoDiscovery());
        $writer->writeBooleanValue('blockAutomaticLogin', $this->getBlockAutomaticLogin());
        $writer->writeStringValue('cacheName', $this->getCacheName());
        $writer->writeCollectionOfPrimitiveValues('credentialBundleIdAccessControlList', $this->getCredentialBundleIdAccessControlList());
        $writer->writeBooleanValue('credentialsCacheMonitored', $this->getCredentialsCacheMonitored());
        $writer->writeCollectionOfPrimitiveValues('domainRealms', $this->getDomainRealms());
        $writer->writeCollectionOfPrimitiveValues('domains', $this->getDomains());
        $writer->writeBooleanValue('isDefaultRealm', $this->getIsDefaultRealm());
        $writer->writeBooleanValue('kerberosAppsInBundleIdACLIncluded', $this->getKerberosAppsInBundleIdACLIncluded());
        $writer->writeBooleanValue('managedAppsInBundleIdACLIncluded', $this->getManagedAppsInBundleIdACLIncluded());
        $writer->writeStringValue('modeCredentialUsed', $this->getModeCredentialUsed());
        $writer->writeBooleanValue('passwordBlockModification', $this->getPasswordBlockModification());
        $writer->writeStringValue('passwordChangeUrl', $this->getPasswordChangeUrl());
        $writer->writeBooleanValue('passwordEnableLocalSync', $this->getPasswordEnableLocalSync());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordExpirationNotificationDays', $this->getPasswordExpirationNotificationDays());
        $writer->writeIntegerValue('passwordMinimumAgeDays', $this->getPasswordMinimumAgeDays());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->getPasswordPreviousPasswordBlockCount());
        $writer->writeBooleanValue('passwordRequireActiveDirectoryComplexity', $this->getPasswordRequireActiveDirectoryComplexity());
        $writer->writeStringValue('passwordRequirementsDescription', $this->getPasswordRequirementsDescription());
        $writer->writeCollectionOfPrimitiveValues('preferredKDCs', $this->getPreferredKDCs());
        $writer->writeStringValue('realm', $this->getRealm());
        $writer->writeBooleanValue('requireUserPresence', $this->getRequireUserPresence());
        $writer->writeStringValue('signInHelpText', $this->getSignInHelpText());
        $writer->writeBooleanValue('tlsForLDAPRequired', $this->getTlsForLDAPRequired());
        $writer->writeStringValue('usernameLabelCustom', $this->getUsernameLabelCustom());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeBooleanValue('userSetupDelayed', $this->getUserSetupDelayed());
    }

    /**
     * Sets the activeDirectorySiteCode property value. Gets or sets the Active Directory site.
     * @param string|null $value Value to set for the activeDirectorySiteCode property.
    */
    public function setActiveDirectorySiteCode(?string $value): void {
        $this->getBackingStore()->set('activeDirectorySiteCode', $value);
    }

    /**
     * Sets the blockActiveDirectorySiteAutoDiscovery property value. Enables or disables whether the Kerberos extension can automatically determine its site name.
     * @param bool|null $value Value to set for the blockActiveDirectorySiteAutoDiscovery property.
    */
    public function setBlockActiveDirectorySiteAutoDiscovery(?bool $value): void {
        $this->getBackingStore()->set('blockActiveDirectorySiteAutoDiscovery', $value);
    }

    /**
     * Sets the blockAutomaticLogin property value. Enables or disables Keychain usage.
     * @param bool|null $value Value to set for the blockAutomaticLogin property.
    */
    public function setBlockAutomaticLogin(?bool $value): void {
        $this->getBackingStore()->set('blockAutomaticLogin', $value);
    }

    /**
     * Sets the cacheName property value. Gets or sets the Generic Security Services name of the Kerberos cache to use for this profile.
     * @param string|null $value Value to set for the cacheName property.
    */
    public function setCacheName(?string $value): void {
        $this->getBackingStore()->set('cacheName', $value);
    }

    /**
     * Sets the credentialBundleIdAccessControlList property value. Gets or sets a list of app Bundle IDs allowed to access the Kerberos Ticket Granting Ticket.
     * @param array<string>|null $value Value to set for the credentialBundleIdAccessControlList property.
    */
    public function setCredentialBundleIdAccessControlList(?array $value): void {
        $this->getBackingStore()->set('credentialBundleIdAccessControlList', $value);
    }

    /**
     * Sets the credentialsCacheMonitored property value. When set to True, the credential is requested on the next matching Kerberos challenge or network state change. When the credential is expired or missing, a new credential is created. Available for devices running macOS versions 12 and later.
     * @param bool|null $value Value to set for the credentialsCacheMonitored property.
    */
    public function setCredentialsCacheMonitored(?bool $value): void {
        $this->getBackingStore()->set('credentialsCacheMonitored', $value);
    }

    /**
     * Sets the domainRealms property value. Gets or sets a list of realms for custom domain-realm mapping. Realms are case sensitive.
     * @param array<string>|null $value Value to set for the domainRealms property.
    */
    public function setDomainRealms(?array $value): void {
        $this->getBackingStore()->set('domainRealms', $value);
    }

    /**
     * Sets the domains property value. Gets or sets a list of hosts or domain names for which the app extension performs SSO.
     * @param array<string>|null $value Value to set for the domains property.
    */
    public function setDomains(?array $value): void {
        $this->getBackingStore()->set('domains', $value);
    }

    /**
     * Sets the isDefaultRealm property value. When true, this profile's realm will be selected as the default. Necessary if multiple Kerberos-type profiles are configured.
     * @param bool|null $value Value to set for the isDefaultRealm property.
    */
    public function setIsDefaultRealm(?bool $value): void {
        $this->getBackingStore()->set('isDefaultRealm', $value);
    }

    /**
     * Sets the kerberosAppsInBundleIdACLIncluded property value. When set to True, the Kerberos extension allows any apps entered with the app bundle ID, managed apps, and standard Kerberos utilities, such as TicketViewer and klist, to access and use the credential. Available for devices running macOS versions 12 and later.
     * @param bool|null $value Value to set for the kerberosAppsInBundleIdACLIncluded property.
    */
    public function setKerberosAppsInBundleIdACLIncluded(?bool $value): void {
        $this->getBackingStore()->set('kerberosAppsInBundleIdACLIncluded', $value);
    }

    /**
     * Sets the managedAppsInBundleIdACLIncluded property value. When set to True, the Kerberos extension allows managed apps, and any apps entered with the app bundle ID to access the credential. When set to False, the Kerberos extension allows all apps to access the credential. Available for devices running iOS and iPadOS versions 14 and later.
     * @param bool|null $value Value to set for the managedAppsInBundleIdACLIncluded property.
    */
    public function setManagedAppsInBundleIdACLIncluded(?bool $value): void {
        $this->getBackingStore()->set('managedAppsInBundleIdACLIncluded', $value);
    }

    /**
     * Sets the modeCredentialUsed property value. Select how other processes use the Kerberos Extension credential.
     * @param string|null $value Value to set for the modeCredentialUsed property.
    */
    public function setModeCredentialUsed(?string $value): void {
        $this->getBackingStore()->set('modeCredentialUsed', $value);
    }

    /**
     * Sets the passwordBlockModification property value. Enables or disables password changes.
     * @param bool|null $value Value to set for the passwordBlockModification property.
    */
    public function setPasswordBlockModification(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockModification', $value);
    }

    /**
     * Sets the passwordChangeUrl property value. Gets or sets the URL that the user will be sent to when they initiate a password change.
     * @param string|null $value Value to set for the passwordChangeUrl property.
    */
    public function setPasswordChangeUrl(?string $value): void {
        $this->getBackingStore()->set('passwordChangeUrl', $value);
    }

    /**
     * Sets the passwordEnableLocalSync property value. Enables or disables password syncing. This won't affect users logged in with a mobile account on macOS.
     * @param bool|null $value Value to set for the passwordEnableLocalSync property.
    */
    public function setPasswordEnableLocalSync(?bool $value): void {
        $this->getBackingStore()->set('passwordEnableLocalSync', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. Overrides the default password expiration in days. For most domains, this value is calculated automatically.
     * @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordExpirationNotificationDays property value. Gets or sets the number of days until the user is notified that their password will expire (default is 15).
     * @param int|null $value Value to set for the passwordExpirationNotificationDays property.
    */
    public function setPasswordExpirationNotificationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationNotificationDays', $value);
    }

    /**
     * Sets the passwordMinimumAgeDays property value. Gets or sets the minimum number of days until a user can change their password again.
     * @param int|null $value Value to set for the passwordMinimumAgeDays property.
    */
    public function setPasswordMinimumAgeDays(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumAgeDays', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. Gets or sets the minimum length of a password.
     * @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. Gets or sets the number of previous passwords to block.
     * @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the passwordRequireActiveDirectoryComplexity property value. Enables or disables whether passwords must meet Active Directory's complexity requirements.
     * @param bool|null $value Value to set for the passwordRequireActiveDirectoryComplexity property.
    */
    public function setPasswordRequireActiveDirectoryComplexity(?bool $value): void {
        $this->getBackingStore()->set('passwordRequireActiveDirectoryComplexity', $value);
    }

    /**
     * Sets the passwordRequirementsDescription property value. Gets or sets a description of the password complexity requirements.
     * @param string|null $value Value to set for the passwordRequirementsDescription property.
    */
    public function setPasswordRequirementsDescription(?string $value): void {
        $this->getBackingStore()->set('passwordRequirementsDescription', $value);
    }

    /**
     * Sets the preferredKDCs property value. Add creates an ordered list of preferred Key Distribution Centers (KDCs) to use for Kerberos traffic. This list is used when the servers are not discoverable using DNS. When the servers are discoverable, the list is used for both connectivity checks, and used first for Kerberos traffic. If the servers don’t respond, then the device uses DNS discovery. Delete removes an existing list, and devices use DNS discovery. Available for devices running macOS versions 12 and later.
     * @param array<string>|null $value Value to set for the preferredKDCs property.
    */
    public function setPreferredKDCs(?array $value): void {
        $this->getBackingStore()->set('preferredKDCs', $value);
    }

    /**
     * Sets the realm property value. Gets or sets the case-sensitive realm name for this profile.
     * @param string|null $value Value to set for the realm property.
    */
    public function setRealm(?string $value): void {
        $this->getBackingStore()->set('realm', $value);
    }

    /**
     * Sets the requireUserPresence property value. Gets or sets whether to require authentication via Touch ID, Face ID, or a passcode to access the keychain entry.
     * @param bool|null $value Value to set for the requireUserPresence property.
    */
    public function setRequireUserPresence(?bool $value): void {
        $this->getBackingStore()->set('requireUserPresence', $value);
    }

    /**
     * Sets the signInHelpText property value. Text displayed to the user at the Kerberos sign in window. Available for devices running iOS and iPadOS versions 14 and later.
     * @param string|null $value Value to set for the signInHelpText property.
    */
    public function setSignInHelpText(?string $value): void {
        $this->getBackingStore()->set('signInHelpText', $value);
    }

    /**
     * Sets the tlsForLDAPRequired property value. When set to True, LDAP connections are required to use Transport Layer Security (TLS). Available for devices running macOS versions 11 and later.
     * @param bool|null $value Value to set for the tlsForLDAPRequired property.
    */
    public function setTlsForLDAPRequired(?bool $value): void {
        $this->getBackingStore()->set('tlsForLDAPRequired', $value);
    }

    /**
     * Sets the usernameLabelCustom property value. This label replaces the user name shown in the Kerberos extension. You can enter a name to match the name of your company or organization. Available for devices running macOS versions 11 and later.
     * @param string|null $value Value to set for the usernameLabelCustom property.
    */
    public function setUsernameLabelCustom(?string $value): void {
        $this->getBackingStore()->set('usernameLabelCustom', $value);
    }

    /**
     * Sets the userPrincipalName property value. Gets or sets the principle user name to use for this profile. The realm name does not need to be included.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the userSetupDelayed property value. When set to True, the user isn’t prompted to set up the Kerberos extension until the extension is enabled by the admin, or a Kerberos challenge is received. Available for devices running macOS versions 11 and later.
     * @param bool|null $value Value to set for the userSetupDelayed property.
    */
    public function setUserSetupDelayed(?bool $value): void {
        $this->getBackingStore()->set('userSetupDelayed', $value);
    }

}
