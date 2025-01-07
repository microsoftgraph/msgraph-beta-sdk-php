<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Directory extends Entity implements Parsable 
{
    /**
     * Instantiates a new Directory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Directory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Directory {
        return new Directory();
    }

    /**
     * Gets the administrativeUnits property value. Conceptual container for user and group directory objects.
     * @return array<AdministrativeUnit>|null
    */
    public function getAdministrativeUnits(): ?array {
        $val = $this->getBackingStore()->get('administrativeUnits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AdministrativeUnit::class);
            /** @var array<AdministrativeUnit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'administrativeUnits'");
    }

    /**
     * Gets the attributeSets property value. Group of related custom security attribute definitions.
     * @return array<AttributeSet>|null
    */
    public function getAttributeSets(): ?array {
        $val = $this->getBackingStore()->get('attributeSets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttributeSet::class);
            /** @var array<AttributeSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributeSets'");
    }

    /**
     * Gets the authenticationMethodDevices property value. Exposes the hardware OATH method in the directory.
     * @return AuthenticationMethodDevice|null
    */
    public function getAuthenticationMethodDevices(): ?AuthenticationMethodDevice {
        $val = $this->getBackingStore()->get('authenticationMethodDevices');
        if (is_null($val) || $val instanceof AuthenticationMethodDevice) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMethodDevices'");
    }

    /**
     * Gets the certificateAuthorities property value. Container for certificate authorities-related configurations for applications in the tenant.
     * @return CertificateAuthorityPath|null
    */
    public function getCertificateAuthorities(): ?CertificateAuthorityPath {
        $val = $this->getBackingStore()->get('certificateAuthorities');
        if (is_null($val) || $val instanceof CertificateAuthorityPath) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateAuthorities'");
    }

    /**
     * Gets the customSecurityAttributeDefinitions property value. Schema of a custom security attributes (key-value pairs).
     * @return array<CustomSecurityAttributeDefinition>|null
    */
    public function getCustomSecurityAttributeDefinitions(): ?array {
        $val = $this->getBackingStore()->get('customSecurityAttributeDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomSecurityAttributeDefinition::class);
            /** @var array<CustomSecurityAttributeDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customSecurityAttributeDefinitions'");
    }

    /**
     * Gets the deletedItems property value. Recently deleted items. Read-only. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getDeletedItems(): ?array {
        $val = $this->getBackingStore()->get('deletedItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedItems'");
    }

    /**
     * Gets the deviceLocalCredentials property value. The credentials of the device's local administrator account backed up to Microsoft Entra ID.
     * @return array<DeviceLocalCredentialInfo>|null
    */
    public function getDeviceLocalCredentials(): ?array {
        $val = $this->getBackingStore()->get('deviceLocalCredentials');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceLocalCredentialInfo::class);
            /** @var array<DeviceLocalCredentialInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceLocalCredentials'");
    }

    /**
     * Gets the externalUserProfiles property value. Collection of external user profiles that represent collaborators in the directory.
     * @return array<ExternalUserProfile>|null
    */
    public function getExternalUserProfiles(): ?array {
        $val = $this->getBackingStore()->get('externalUserProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExternalUserProfile::class);
            /** @var array<ExternalUserProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalUserProfiles'");
    }

    /**
     * Gets the featureRolloutPolicies property value. The featureRolloutPolicies property
     * @return array<FeatureRolloutPolicy>|null
    */
    public function getFeatureRolloutPolicies(): ?array {
        $val = $this->getBackingStore()->get('featureRolloutPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FeatureRolloutPolicy::class);
            /** @var array<FeatureRolloutPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'featureRolloutPolicies'");
    }

    /**
     * Gets the federationConfigurations property value. Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     * @return array<IdentityProviderBase>|null
    */
    public function getFederationConfigurations(): ?array {
        $val = $this->getBackingStore()->get('federationConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IdentityProviderBase::class);
            /** @var array<IdentityProviderBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'federationConfigurations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'administrativeUnits' => fn(ParseNode $n) => $o->setAdministrativeUnits($n->getCollectionOfObjectValues([AdministrativeUnit::class, 'createFromDiscriminatorValue'])),
            'attributeSets' => fn(ParseNode $n) => $o->setAttributeSets($n->getCollectionOfObjectValues([AttributeSet::class, 'createFromDiscriminatorValue'])),
            'authenticationMethodDevices' => fn(ParseNode $n) => $o->setAuthenticationMethodDevices($n->getObjectValue([AuthenticationMethodDevice::class, 'createFromDiscriminatorValue'])),
            'certificateAuthorities' => fn(ParseNode $n) => $o->setCertificateAuthorities($n->getObjectValue([CertificateAuthorityPath::class, 'createFromDiscriminatorValue'])),
            'customSecurityAttributeDefinitions' => fn(ParseNode $n) => $o->setCustomSecurityAttributeDefinitions($n->getCollectionOfObjectValues([CustomSecurityAttributeDefinition::class, 'createFromDiscriminatorValue'])),
            'deletedItems' => fn(ParseNode $n) => $o->setDeletedItems($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'deviceLocalCredentials' => fn(ParseNode $n) => $o->setDeviceLocalCredentials($n->getCollectionOfObjectValues([DeviceLocalCredentialInfo::class, 'createFromDiscriminatorValue'])),
            'externalUserProfiles' => fn(ParseNode $n) => $o->setExternalUserProfiles($n->getCollectionOfObjectValues([ExternalUserProfile::class, 'createFromDiscriminatorValue'])),
            'featureRolloutPolicies' => fn(ParseNode $n) => $o->setFeatureRolloutPolicies($n->getCollectionOfObjectValues([FeatureRolloutPolicy::class, 'createFromDiscriminatorValue'])),
            'federationConfigurations' => fn(ParseNode $n) => $o->setFederationConfigurations($n->getCollectionOfObjectValues([IdentityProviderBase::class, 'createFromDiscriminatorValue'])),
            'impactedResources' => fn(ParseNode $n) => $o->setImpactedResources($n->getCollectionOfObjectValues([ImpactedResource::class, 'createFromDiscriminatorValue'])),
            'inboundSharedUserProfiles' => fn(ParseNode $n) => $o->setInboundSharedUserProfiles($n->getCollectionOfObjectValues([InboundSharedUserProfile::class, 'createFromDiscriminatorValue'])),
            'onPremisesSynchronization' => fn(ParseNode $n) => $o->setOnPremisesSynchronization($n->getCollectionOfObjectValues([OnPremisesDirectorySynchronization::class, 'createFromDiscriminatorValue'])),
            'outboundSharedUserProfiles' => fn(ParseNode $n) => $o->setOutboundSharedUserProfiles($n->getCollectionOfObjectValues([OutboundSharedUserProfile::class, 'createFromDiscriminatorValue'])),
            'pendingExternalUserProfiles' => fn(ParseNode $n) => $o->setPendingExternalUserProfiles($n->getCollectionOfObjectValues([PendingExternalUserProfile::class, 'createFromDiscriminatorValue'])),
            'publicKeyInfrastructure' => fn(ParseNode $n) => $o->setPublicKeyInfrastructure($n->getObjectValue([PublicKeyInfrastructureRoot::class, 'createFromDiscriminatorValue'])),
            'recommendations' => fn(ParseNode $n) => $o->setRecommendations($n->getCollectionOfObjectValues([Recommendation::class, 'createFromDiscriminatorValue'])),
            'sharedEmailDomains' => fn(ParseNode $n) => $o->setSharedEmailDomains($n->getCollectionOfObjectValues([SharedEmailDomain::class, 'createFromDiscriminatorValue'])),
            'subscriptions' => fn(ParseNode $n) => $o->setSubscriptions($n->getCollectionOfObjectValues([CompanySubscription::class, 'createFromDiscriminatorValue'])),
            'templates' => fn(ParseNode $n) => $o->setTemplates($n->getObjectValue([Template::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the impactedResources property value. The impactedResources property
     * @return array<ImpactedResource>|null
    */
    public function getImpactedResources(): ?array {
        $val = $this->getBackingStore()->get('impactedResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ImpactedResource::class);
            /** @var array<ImpactedResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'impactedResources'");
    }

    /**
     * Gets the inboundSharedUserProfiles property value. A collection of external users whose profile data is shared with the Microsoft Entra tenant. Nullable.
     * @return array<InboundSharedUserProfile>|null
    */
    public function getInboundSharedUserProfiles(): ?array {
        $val = $this->getBackingStore()->get('inboundSharedUserProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, InboundSharedUserProfile::class);
            /** @var array<InboundSharedUserProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inboundSharedUserProfiles'");
    }

    /**
     * Gets the onPremisesSynchronization property value. A container for on-premises directory synchronization functionalities that are available for the organization.
     * @return array<OnPremisesDirectorySynchronization>|null
    */
    public function getOnPremisesSynchronization(): ?array {
        $val = $this->getBackingStore()->get('onPremisesSynchronization');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnPremisesDirectorySynchronization::class);
            /** @var array<OnPremisesDirectorySynchronization>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesSynchronization'");
    }

    /**
     * Gets the outboundSharedUserProfiles property value. The outboundSharedUserProfiles property
     * @return array<OutboundSharedUserProfile>|null
    */
    public function getOutboundSharedUserProfiles(): ?array {
        $val = $this->getBackingStore()->get('outboundSharedUserProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OutboundSharedUserProfile::class);
            /** @var array<OutboundSharedUserProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outboundSharedUserProfiles'");
    }

    /**
     * Gets the pendingExternalUserProfiles property value. Collection of pending external user profiles representing collaborators in the directory that are unredeemed.
     * @return array<PendingExternalUserProfile>|null
    */
    public function getPendingExternalUserProfiles(): ?array {
        $val = $this->getBackingStore()->get('pendingExternalUserProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PendingExternalUserProfile::class);
            /** @var array<PendingExternalUserProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pendingExternalUserProfiles'");
    }

    /**
     * Gets the publicKeyInfrastructure property value. The collection of public key infrastructure instances for the certificate-based authentication feature for users in a Microsoft Entra tenant.
     * @return PublicKeyInfrastructureRoot|null
    */
    public function getPublicKeyInfrastructure(): ?PublicKeyInfrastructureRoot {
        $val = $this->getBackingStore()->get('publicKeyInfrastructure');
        if (is_null($val) || $val instanceof PublicKeyInfrastructureRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publicKeyInfrastructure'");
    }

    /**
     * Gets the recommendations property value. List of recommended improvements to improve tenant posture.
     * @return array<Recommendation>|null
    */
    public function getRecommendations(): ?array {
        $val = $this->getBackingStore()->get('recommendations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Recommendation::class);
            /** @var array<Recommendation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommendations'");
    }

    /**
     * Gets the sharedEmailDomains property value. The sharedEmailDomains property
     * @return array<SharedEmailDomain>|null
    */
    public function getSharedEmailDomains(): ?array {
        $val = $this->getBackingStore()->get('sharedEmailDomains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SharedEmailDomain::class);
            /** @var array<SharedEmailDomain>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedEmailDomains'");
    }

    /**
     * Gets the subscriptions property value. List of commercial subscriptions that an organization has.
     * @return array<CompanySubscription>|null
    */
    public function getSubscriptions(): ?array {
        $val = $this->getBackingStore()->get('subscriptions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CompanySubscription::class);
            /** @var array<CompanySubscription>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptions'");
    }

    /**
     * Gets the templates property value. A container for templates, such as device templates used for onboarding devices in Microsoft Entra ID.
     * @return Template|null
    */
    public function getTemplates(): ?Template {
        $val = $this->getBackingStore()->get('templates');
        if (is_null($val) || $val instanceof Template) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templates'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('administrativeUnits', $this->getAdministrativeUnits());
        $writer->writeCollectionOfObjectValues('attributeSets', $this->getAttributeSets());
        $writer->writeObjectValue('authenticationMethodDevices', $this->getAuthenticationMethodDevices());
        $writer->writeObjectValue('certificateAuthorities', $this->getCertificateAuthorities());
        $writer->writeCollectionOfObjectValues('customSecurityAttributeDefinitions', $this->getCustomSecurityAttributeDefinitions());
        $writer->writeCollectionOfObjectValues('deletedItems', $this->getDeletedItems());
        $writer->writeCollectionOfObjectValues('deviceLocalCredentials', $this->getDeviceLocalCredentials());
        $writer->writeCollectionOfObjectValues('externalUserProfiles', $this->getExternalUserProfiles());
        $writer->writeCollectionOfObjectValues('featureRolloutPolicies', $this->getFeatureRolloutPolicies());
        $writer->writeCollectionOfObjectValues('federationConfigurations', $this->getFederationConfigurations());
        $writer->writeCollectionOfObjectValues('impactedResources', $this->getImpactedResources());
        $writer->writeCollectionOfObjectValues('inboundSharedUserProfiles', $this->getInboundSharedUserProfiles());
        $writer->writeCollectionOfObjectValues('onPremisesSynchronization', $this->getOnPremisesSynchronization());
        $writer->writeCollectionOfObjectValues('outboundSharedUserProfiles', $this->getOutboundSharedUserProfiles());
        $writer->writeCollectionOfObjectValues('pendingExternalUserProfiles', $this->getPendingExternalUserProfiles());
        $writer->writeObjectValue('publicKeyInfrastructure', $this->getPublicKeyInfrastructure());
        $writer->writeCollectionOfObjectValues('recommendations', $this->getRecommendations());
        $writer->writeCollectionOfObjectValues('sharedEmailDomains', $this->getSharedEmailDomains());
        $writer->writeCollectionOfObjectValues('subscriptions', $this->getSubscriptions());
        $writer->writeObjectValue('templates', $this->getTemplates());
    }

    /**
     * Sets the administrativeUnits property value. Conceptual container for user and group directory objects.
     * @param array<AdministrativeUnit>|null $value Value to set for the administrativeUnits property.
    */
    public function setAdministrativeUnits(?array $value): void {
        $this->getBackingStore()->set('administrativeUnits', $value);
    }

    /**
     * Sets the attributeSets property value. Group of related custom security attribute definitions.
     * @param array<AttributeSet>|null $value Value to set for the attributeSets property.
    */
    public function setAttributeSets(?array $value): void {
        $this->getBackingStore()->set('attributeSets', $value);
    }

    /**
     * Sets the authenticationMethodDevices property value. Exposes the hardware OATH method in the directory.
     * @param AuthenticationMethodDevice|null $value Value to set for the authenticationMethodDevices property.
    */
    public function setAuthenticationMethodDevices(?AuthenticationMethodDevice $value): void {
        $this->getBackingStore()->set('authenticationMethodDevices', $value);
    }

    /**
     * Sets the certificateAuthorities property value. Container for certificate authorities-related configurations for applications in the tenant.
     * @param CertificateAuthorityPath|null $value Value to set for the certificateAuthorities property.
    */
    public function setCertificateAuthorities(?CertificateAuthorityPath $value): void {
        $this->getBackingStore()->set('certificateAuthorities', $value);
    }

    /**
     * Sets the customSecurityAttributeDefinitions property value. Schema of a custom security attributes (key-value pairs).
     * @param array<CustomSecurityAttributeDefinition>|null $value Value to set for the customSecurityAttributeDefinitions property.
    */
    public function setCustomSecurityAttributeDefinitions(?array $value): void {
        $this->getBackingStore()->set('customSecurityAttributeDefinitions', $value);
    }

    /**
     * Sets the deletedItems property value. Recently deleted items. Read-only. Nullable.
     * @param array<DirectoryObject>|null $value Value to set for the deletedItems property.
    */
    public function setDeletedItems(?array $value): void {
        $this->getBackingStore()->set('deletedItems', $value);
    }

    /**
     * Sets the deviceLocalCredentials property value. The credentials of the device's local administrator account backed up to Microsoft Entra ID.
     * @param array<DeviceLocalCredentialInfo>|null $value Value to set for the deviceLocalCredentials property.
    */
    public function setDeviceLocalCredentials(?array $value): void {
        $this->getBackingStore()->set('deviceLocalCredentials', $value);
    }

    /**
     * Sets the externalUserProfiles property value. Collection of external user profiles that represent collaborators in the directory.
     * @param array<ExternalUserProfile>|null $value Value to set for the externalUserProfiles property.
    */
    public function setExternalUserProfiles(?array $value): void {
        $this->getBackingStore()->set('externalUserProfiles', $value);
    }

    /**
     * Sets the featureRolloutPolicies property value. The featureRolloutPolicies property
     * @param array<FeatureRolloutPolicy>|null $value Value to set for the featureRolloutPolicies property.
    */
    public function setFeatureRolloutPolicies(?array $value): void {
        $this->getBackingStore()->set('featureRolloutPolicies', $value);
    }

    /**
     * Sets the federationConfigurations property value. Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     * @param array<IdentityProviderBase>|null $value Value to set for the federationConfigurations property.
    */
    public function setFederationConfigurations(?array $value): void {
        $this->getBackingStore()->set('federationConfigurations', $value);
    }

    /**
     * Sets the impactedResources property value. The impactedResources property
     * @param array<ImpactedResource>|null $value Value to set for the impactedResources property.
    */
    public function setImpactedResources(?array $value): void {
        $this->getBackingStore()->set('impactedResources', $value);
    }

    /**
     * Sets the inboundSharedUserProfiles property value. A collection of external users whose profile data is shared with the Microsoft Entra tenant. Nullable.
     * @param array<InboundSharedUserProfile>|null $value Value to set for the inboundSharedUserProfiles property.
    */
    public function setInboundSharedUserProfiles(?array $value): void {
        $this->getBackingStore()->set('inboundSharedUserProfiles', $value);
    }

    /**
     * Sets the onPremisesSynchronization property value. A container for on-premises directory synchronization functionalities that are available for the organization.
     * @param array<OnPremisesDirectorySynchronization>|null $value Value to set for the onPremisesSynchronization property.
    */
    public function setOnPremisesSynchronization(?array $value): void {
        $this->getBackingStore()->set('onPremisesSynchronization', $value);
    }

    /**
     * Sets the outboundSharedUserProfiles property value. The outboundSharedUserProfiles property
     * @param array<OutboundSharedUserProfile>|null $value Value to set for the outboundSharedUserProfiles property.
    */
    public function setOutboundSharedUserProfiles(?array $value): void {
        $this->getBackingStore()->set('outboundSharedUserProfiles', $value);
    }

    /**
     * Sets the pendingExternalUserProfiles property value. Collection of pending external user profiles representing collaborators in the directory that are unredeemed.
     * @param array<PendingExternalUserProfile>|null $value Value to set for the pendingExternalUserProfiles property.
    */
    public function setPendingExternalUserProfiles(?array $value): void {
        $this->getBackingStore()->set('pendingExternalUserProfiles', $value);
    }

    /**
     * Sets the publicKeyInfrastructure property value. The collection of public key infrastructure instances for the certificate-based authentication feature for users in a Microsoft Entra tenant.
     * @param PublicKeyInfrastructureRoot|null $value Value to set for the publicKeyInfrastructure property.
    */
    public function setPublicKeyInfrastructure(?PublicKeyInfrastructureRoot $value): void {
        $this->getBackingStore()->set('publicKeyInfrastructure', $value);
    }

    /**
     * Sets the recommendations property value. List of recommended improvements to improve tenant posture.
     * @param array<Recommendation>|null $value Value to set for the recommendations property.
    */
    public function setRecommendations(?array $value): void {
        $this->getBackingStore()->set('recommendations', $value);
    }

    /**
     * Sets the sharedEmailDomains property value. The sharedEmailDomains property
     * @param array<SharedEmailDomain>|null $value Value to set for the sharedEmailDomains property.
    */
    public function setSharedEmailDomains(?array $value): void {
        $this->getBackingStore()->set('sharedEmailDomains', $value);
    }

    /**
     * Sets the subscriptions property value. List of commercial subscriptions that an organization has.
     * @param array<CompanySubscription>|null $value Value to set for the subscriptions property.
    */
    public function setSubscriptions(?array $value): void {
        $this->getBackingStore()->set('subscriptions', $value);
    }

    /**
     * Sets the templates property value. A container for templates, such as device templates used for onboarding devices in Microsoft Entra ID.
     * @param Template|null $value Value to set for the templates property.
    */
    public function setTemplates(?Template $value): void {
        $this->getBackingStore()->set('templates', $value);
    }

}
