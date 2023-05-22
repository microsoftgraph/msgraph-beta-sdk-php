<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementAlertIncident extends Entity implements Parsable 
{
    /**
     * Instantiates a new unifiedRoleManagementAlertIncident and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementAlertIncident
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementAlertIncident {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.invalidLicenseAlertIncident': return new InvalidLicenseAlertIncident();
                case '#microsoft.graph.noMfaOnRoleActivationAlertIncident': return new NoMfaOnRoleActivationAlertIncident();
                case '#microsoft.graph.redundantAssignmentAlertIncident': return new RedundantAssignmentAlertIncident();
                case '#microsoft.graph.rolesAssignedOutsidePrivilegedIdentityManagementAlertIncident': return new RolesAssignedOutsidePrivilegedIdentityManagementAlertIncident();
                case '#microsoft.graph.sequentialActivationRenewalsAlertIncident': return new SequentialActivationRenewalsAlertIncident();
                case '#microsoft.graph.staleSignInAlertIncident': return new StaleSignInAlertIncident();
                case '#microsoft.graph.tooManyGlobalAdminsAssignedToTenantAlertIncident': return new TooManyGlobalAdminsAssignedToTenantAlertIncident();
            }
        }
        return new UnifiedRoleManagementAlertIncident();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
