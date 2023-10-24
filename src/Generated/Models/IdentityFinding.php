<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentityFinding extends Finding implements Parsable 
{
    /**
     * Instantiates a new identityFinding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityFinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityFinding {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.inactiveAwsResourceFinding': return new InactiveAwsResourceFinding();
                case '#microsoft.graph.inactiveAwsRoleFinding': return new InactiveAwsRoleFinding();
                case '#microsoft.graph.inactiveAzureServicePrincipalFinding': return new InactiveAzureServicePrincipalFinding();
                case '#microsoft.graph.inactiveGcpServiceAccountFinding': return new InactiveGcpServiceAccountFinding();
                case '#microsoft.graph.inactiveServerlessFunctionFinding': return new InactiveServerlessFunctionFinding();
                case '#microsoft.graph.inactiveUserFinding': return new InactiveUserFinding();
                case '#microsoft.graph.overprovisionedAwsResourceFinding': return new OverprovisionedAwsResourceFinding();
                case '#microsoft.graph.overprovisionedAwsRoleFinding': return new OverprovisionedAwsRoleFinding();
                case '#microsoft.graph.overprovisionedAzureServicePrincipalFinding': return new OverprovisionedAzureServicePrincipalFinding();
                case '#microsoft.graph.overprovisionedGcpServiceAccountFinding': return new OverprovisionedGcpServiceAccountFinding();
                case '#microsoft.graph.overprovisionedServerlessFunctionFinding': return new OverprovisionedServerlessFunctionFinding();
                case '#microsoft.graph.overprovisionedUserFinding': return new OverprovisionedUserFinding();
                case '#microsoft.graph.superAwsResourceFinding': return new SuperAwsResourceFinding();
                case '#microsoft.graph.superAwsRoleFinding': return new SuperAwsRoleFinding();
                case '#microsoft.graph.superAzureServicePrincipalFinding': return new SuperAzureServicePrincipalFinding();
                case '#microsoft.graph.superGcpServiceAccountFinding': return new SuperGcpServiceAccountFinding();
                case '#microsoft.graph.superServerlessFunctionFinding': return new SuperServerlessFunctionFinding();
                case '#microsoft.graph.superUserFinding': return new SuperUserFinding();
                case '#microsoft.graph.unenforcedMfaAwsUserFinding': return new UnenforcedMfaAwsUserFinding();
            }
        }
        return new IdentityFinding();
    }

    /**
     * Gets the actionSummary property value. The actionSummary property
     * @return ActionSummary|null
    */
    public function getActionSummary(): ?ActionSummary {
        $val = $this->getBackingStore()->get('actionSummary');
        if (is_null($val) || $val instanceof ActionSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionSummary'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionSummary' => fn(ParseNode $n) => $o->setActionSummary($n->getObjectValue([ActionSummary::class, 'createFromDiscriminatorValue'])),
            'identity' => fn(ParseNode $n) => $o->setIdentity($n->getObjectValue([AuthorizationSystemIdentity::class, 'createFromDiscriminatorValue'])),
            'identityDetails' => fn(ParseNode $n) => $o->setIdentityDetails($n->getObjectValue([IdentityDetails::class, 'createFromDiscriminatorValue'])),
            'permissionsCreepIndex' => fn(ParseNode $n) => $o->setPermissionsCreepIndex($n->getObjectValue([PermissionsCreepIndex::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the identity property value. The identity property
     * @return AuthorizationSystemIdentity|null
    */
    public function getIdentity(): ?AuthorizationSystemIdentity {
        $val = $this->getBackingStore()->get('identity');
        if (is_null($val) || $val instanceof AuthorizationSystemIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identity'");
    }

    /**
     * Gets the identityDetails property value. The identityDetails property
     * @return IdentityDetails|null
    */
    public function getIdentityDetails(): ?IdentityDetails {
        $val = $this->getBackingStore()->get('identityDetails');
        if (is_null($val) || $val instanceof IdentityDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityDetails'");
    }

    /**
     * Gets the permissionsCreepIndex property value. The permissionsCreepIndex property
     * @return PermissionsCreepIndex|null
    */
    public function getPermissionsCreepIndex(): ?PermissionsCreepIndex {
        $val = $this->getBackingStore()->get('permissionsCreepIndex');
        if (is_null($val) || $val instanceof PermissionsCreepIndex) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionsCreepIndex'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('actionSummary', $this->getActionSummary());
        $writer->writeObjectValue('identity', $this->getIdentity());
        $writer->writeObjectValue('identityDetails', $this->getIdentityDetails());
        $writer->writeObjectValue('permissionsCreepIndex', $this->getPermissionsCreepIndex());
    }

    /**
     * Sets the actionSummary property value. The actionSummary property
     * @param ActionSummary|null $value Value to set for the actionSummary property.
    */
    public function setActionSummary(?ActionSummary $value): void {
        $this->getBackingStore()->set('actionSummary', $value);
    }

    /**
     * Sets the identity property value. The identity property
     * @param AuthorizationSystemIdentity|null $value Value to set for the identity property.
    */
    public function setIdentity(?AuthorizationSystemIdentity $value): void {
        $this->getBackingStore()->set('identity', $value);
    }

    /**
     * Sets the identityDetails property value. The identityDetails property
     * @param IdentityDetails|null $value Value to set for the identityDetails property.
    */
    public function setIdentityDetails(?IdentityDetails $value): void {
        $this->getBackingStore()->set('identityDetails', $value);
    }

    /**
     * Sets the permissionsCreepIndex property value. The permissionsCreepIndex property
     * @param PermissionsCreepIndex|null $value Value to set for the permissionsCreepIndex property.
    */
    public function setPermissionsCreepIndex(?PermissionsCreepIndex $value): void {
        $this->getBackingStore()->set('permissionsCreepIndex', $value);
    }

}
