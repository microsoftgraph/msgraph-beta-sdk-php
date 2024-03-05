<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Finding extends Entity implements Parsable 
{
    /**
     * Instantiates a new Finding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Finding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Finding {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.awsExternalSystemAccessFinding': return new AwsExternalSystemAccessFinding();
                case '#microsoft.graph.awsExternalSystemAccessRoleFinding': return new AwsExternalSystemAccessRoleFinding();
                case '#microsoft.graph.awsIdentityAccessManagementKeyAgeFinding': return new AwsIdentityAccessManagementKeyAgeFinding();
                case '#microsoft.graph.awsIdentityAccessManagementKeyUsageFinding': return new AwsIdentityAccessManagementKeyUsageFinding();
                case '#microsoft.graph.awsSecretInformationAccessFinding': return new AwsSecretInformationAccessFinding();
                case '#microsoft.graph.awsSecurityToolAdministrationFinding': return new AwsSecurityToolAdministrationFinding();
                case '#microsoft.graph.encryptedAwsStorageBucketFinding': return new EncryptedAwsStorageBucketFinding();
                case '#microsoft.graph.encryptedAzureStorageAccountFinding': return new EncryptedAzureStorageAccountFinding();
                case '#microsoft.graph.encryptedGcpStorageBucketFinding': return new EncryptedGcpStorageBucketFinding();
                case '#microsoft.graph.externallyAccessibleAwsStorageBucketFinding': return new ExternallyAccessibleAwsStorageBucketFinding();
                case '#microsoft.graph.externallyAccessibleAzureBlobContainerFinding': return new ExternallyAccessibleAzureBlobContainerFinding();
                case '#microsoft.graph.externallyAccessibleGcpStorageBucketFinding': return new ExternallyAccessibleGcpStorageBucketFinding();
                case '#microsoft.graph.identityFinding': return new IdentityFinding();
                case '#microsoft.graph.inactiveAwsResourceFinding': return new InactiveAwsResourceFinding();
                case '#microsoft.graph.inactiveAwsRoleFinding': return new InactiveAwsRoleFinding();
                case '#microsoft.graph.inactiveAzureServicePrincipalFinding': return new InactiveAzureServicePrincipalFinding();
                case '#microsoft.graph.inactiveGcpServiceAccountFinding': return new InactiveGcpServiceAccountFinding();
                case '#microsoft.graph.inactiveGroupFinding': return new InactiveGroupFinding();
                case '#microsoft.graph.inactiveServerlessFunctionFinding': return new InactiveServerlessFunctionFinding();
                case '#microsoft.graph.inactiveUserFinding': return new InactiveUserFinding();
                case '#microsoft.graph.openAwsSecurityGroupFinding': return new OpenAwsSecurityGroupFinding();
                case '#microsoft.graph.openNetworkAzureSecurityGroupFinding': return new OpenNetworkAzureSecurityGroupFinding();
                case '#microsoft.graph.overprovisionedAwsResourceFinding': return new OverprovisionedAwsResourceFinding();
                case '#microsoft.graph.overprovisionedAwsRoleFinding': return new OverprovisionedAwsRoleFinding();
                case '#microsoft.graph.overprovisionedAzureServicePrincipalFinding': return new OverprovisionedAzureServicePrincipalFinding();
                case '#microsoft.graph.overprovisionedGcpServiceAccountFinding': return new OverprovisionedGcpServiceAccountFinding();
                case '#microsoft.graph.overprovisionedServerlessFunctionFinding': return new OverprovisionedServerlessFunctionFinding();
                case '#microsoft.graph.overprovisionedUserFinding': return new OverprovisionedUserFinding();
                case '#microsoft.graph.privilegeEscalationAwsResourceFinding': return new PrivilegeEscalationAwsResourceFinding();
                case '#microsoft.graph.privilegeEscalationAwsRoleFinding': return new PrivilegeEscalationAwsRoleFinding();
                case '#microsoft.graph.privilegeEscalationFinding': return new PrivilegeEscalationFinding();
                case '#microsoft.graph.privilegeEscalationGcpServiceAccountFinding': return new PrivilegeEscalationGcpServiceAccountFinding();
                case '#microsoft.graph.privilegeEscalationUserFinding': return new PrivilegeEscalationUserFinding();
                case '#microsoft.graph.secretInformationAccessAwsResourceFinding': return new SecretInformationAccessAwsResourceFinding();
                case '#microsoft.graph.secretInformationAccessAwsRoleFinding': return new SecretInformationAccessAwsRoleFinding();
                case '#microsoft.graph.secretInformationAccessAwsServerlessFunctionFinding': return new SecretInformationAccessAwsServerlessFunctionFinding();
                case '#microsoft.graph.secretInformationAccessAwsUserFinding': return new SecretInformationAccessAwsUserFinding();
                case '#microsoft.graph.securityToolAwsResourceAdministratorFinding': return new SecurityToolAwsResourceAdministratorFinding();
                case '#microsoft.graph.securityToolAwsRoleAdministratorFinding': return new SecurityToolAwsRoleAdministratorFinding();
                case '#microsoft.graph.securityToolAwsServerlessFunctionAdministratorFinding': return new SecurityToolAwsServerlessFunctionAdministratorFinding();
                case '#microsoft.graph.securityToolAwsUserAdministratorFinding': return new SecurityToolAwsUserAdministratorFinding();
                case '#microsoft.graph.superAwsResourceFinding': return new SuperAwsResourceFinding();
                case '#microsoft.graph.superAwsRoleFinding': return new SuperAwsRoleFinding();
                case '#microsoft.graph.superAzureServicePrincipalFinding': return new SuperAzureServicePrincipalFinding();
                case '#microsoft.graph.superGcpServiceAccountFinding': return new SuperGcpServiceAccountFinding();
                case '#microsoft.graph.superServerlessFunctionFinding': return new SuperServerlessFunctionFinding();
                case '#microsoft.graph.superUserFinding': return new SuperUserFinding();
                case '#microsoft.graph.unenforcedMfaAwsUserFinding': return new UnenforcedMfaAwsUserFinding();
                case '#microsoft.graph.virtualMachineWithAwsStorageBucketAccessFinding': return new VirtualMachineWithAwsStorageBucketAccessFinding();
            }
        }
        return new Finding();
    }

    /**
     * Gets the createdDateTime property value. Defines when the finding was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
    }

    /**
     * Sets the createdDateTime property value. Defines when the finding was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

}
