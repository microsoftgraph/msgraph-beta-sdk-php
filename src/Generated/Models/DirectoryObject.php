<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DirectoryObject extends Entity implements Parsable 
{
    /**
     * Instantiates a new DirectoryObject and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectoryObject
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectoryObject {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.activityBasedTimeoutPolicy': return new ActivityBasedTimeoutPolicy();
                case '#microsoft.graph.administrativeUnit': return new AdministrativeUnit();
                case '#microsoft.graph.application': return new Application();
                case '#microsoft.graph.appManagementPolicy': return new AppManagementPolicy();
                case '#microsoft.graph.appRoleAssignment': return new AppRoleAssignment();
                case '#microsoft.graph.authorizationPolicy': return new AuthorizationPolicy();
                case '#microsoft.graph.certificateAuthorityDetail': return new CertificateAuthorityDetail();
                case '#microsoft.graph.certificateBasedApplicationConfiguration': return new CertificateBasedApplicationConfiguration();
                case '#microsoft.graph.certificateBasedAuthPki': return new CertificateBasedAuthPki();
                case '#microsoft.graph.claimsMappingPolicy': return new ClaimsMappingPolicy();
                case '#microsoft.graph.contract': return new Contract();
                case '#microsoft.graph.crossTenantAccessPolicy': return new CrossTenantAccessPolicy();
                case '#microsoft.graph.device': return new Device();
                case '#microsoft.graph.deviceTemplate': return new DeviceTemplate();
                case '#microsoft.graph.directoryObjectPartnerReference': return new DirectoryObjectPartnerReference();
                case '#microsoft.graph.directoryRole': return new DirectoryRole();
                case '#microsoft.graph.directoryRoleTemplate': return new DirectoryRoleTemplate();
                case '#microsoft.graph.directorySettingTemplate': return new DirectorySettingTemplate();
                case '#microsoft.graph.endpoint': return new Endpoint();
                case '#microsoft.graph.extensionProperty': return new ExtensionProperty();
                case '#microsoft.graph.externalIdentitiesPolicy': return new ExternalIdentitiesPolicy();
                case '#microsoft.graph.externalProfile': return new ExternalProfile();
                case '#microsoft.graph.externalUserProfile': return new ExternalUserProfile();
                case '#microsoft.graph.federatedTokenValidationPolicy': return new FederatedTokenValidationPolicy();
                case '#microsoft.graph.group': return new Group();
                case '#microsoft.graph.homeRealmDiscoveryPolicy': return new HomeRealmDiscoveryPolicy();
                case '#microsoft.graph.identitySecurityDefaultsEnforcementPolicy': return new IdentitySecurityDefaultsEnforcementPolicy();
                case '#microsoft.graph.mailbox': return new Mailbox();
                case '#microsoft.graph.multiTenantOrganizationMember': return new MultiTenantOrganizationMember();
                case '#microsoft.graph.mutualTlsOauthConfiguration': return new MutualTlsOauthConfiguration();
                case '#microsoft.graph.organization': return new Organization();
                case '#microsoft.graph.organizationalUnit': return new OrganizationalUnit();
                case '#microsoft.graph.orgContact': return new OrgContact();
                case '#microsoft.graph.pendingExternalUserProfile': return new PendingExternalUserProfile();
                case '#microsoft.graph.permissionGrantPolicy': return new PermissionGrantPolicy();
                case '#microsoft.graph.permissionGrantPreApprovalPolicy': return new PermissionGrantPreApprovalPolicy();
                case '#microsoft.graph.policyBase': return new PolicyBase();
                case '#microsoft.graph.resourceSpecificPermissionGrant': return new ResourceSpecificPermissionGrant();
                case '#microsoft.graph.servicePrincipal': return new ServicePrincipal();
                case '#microsoft.graph.servicePrincipalCreationPolicy': return new ServicePrincipalCreationPolicy();
                case '#microsoft.graph.stsPolicy': return new StsPolicy();
                case '#microsoft.graph.tenantAppManagementPolicy': return new TenantAppManagementPolicy();
                case '#microsoft.graph.tenantRelationshipAccessPolicyBase': return new TenantRelationshipAccessPolicyBase();
                case '#microsoft.graph.tokenIssuancePolicy': return new TokenIssuancePolicy();
                case '#microsoft.graph.tokenLifetimePolicy': return new TokenLifetimePolicy();
                case '#microsoft.graph.trustedCertificateAuthorityAsEntityBase': return new TrustedCertificateAuthorityAsEntityBase();
                case '#microsoft.graph.trustedCertificateAuthorityBase': return new TrustedCertificateAuthorityBase();
                case '#microsoft.graph.user': return new User();
            }
        }
        return new DirectoryObject();
    }

    /**
     * Gets the deletedDateTime property value. Date and time when this object was deleted. Always null when the object hasn't been deleted.
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deletedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deletedDateTime' => fn(ParseNode $n) => $o->setDeletedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('deletedDateTime', $this->getDeletedDateTime());
    }

    /**
     * Sets the deletedDateTime property value. Date and time when this object was deleted. Always null when the object hasn't been deleted.
     * @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deletedDateTime', $value);
    }

}
