<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AwsSecurityToolAdministrationFinding extends Finding implements Parsable 
{
    /**
     * Instantiates a new awsSecurityToolAdministrationFinding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsSecurityToolAdministrationFinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsSecurityToolAdministrationFinding {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.securityToolAwsResourceAdministratorFinding': return new SecurityToolAwsResourceAdministratorFinding();
                case '#microsoft.graph.securityToolAwsRoleAdministratorFinding': return new SecurityToolAwsRoleAdministratorFinding();
                case '#microsoft.graph.securityToolAwsServerlessFunctionAdministratorFinding': return new SecurityToolAwsServerlessFunctionAdministratorFinding();
                case '#microsoft.graph.securityToolAwsUserAdministratorFinding': return new SecurityToolAwsUserAdministratorFinding();
            }
        }
        return new AwsSecurityToolAdministrationFinding();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'identity' => fn(ParseNode $n) => $o->setIdentity($n->getObjectValue([AuthorizationSystemIdentity::class, 'createFromDiscriminatorValue'])),
            'identityDetails' => fn(ParseNode $n) => $o->setIdentityDetails($n->getObjectValue([IdentityDetails::class, 'createFromDiscriminatorValue'])),
            'permissionsCreepIndex' => fn(ParseNode $n) => $o->setPermissionsCreepIndex($n->getObjectValue([PermissionsCreepIndex::class, 'createFromDiscriminatorValue'])),
            'securityTools' => fn(ParseNode $n) => $o->setSecurityTools($n->getEnumValue(AwsSecurityToolWebServices::class)),
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
     * Gets the securityTools property value. The securityTools property
     * @return AwsSecurityToolWebServices|null
    */
    public function getSecurityTools(): ?AwsSecurityToolWebServices {
        $val = $this->getBackingStore()->get('securityTools');
        if (is_null($val) || $val instanceof AwsSecurityToolWebServices) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityTools'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('identity', $this->getIdentity());
        $writer->writeObjectValue('identityDetails', $this->getIdentityDetails());
        $writer->writeObjectValue('permissionsCreepIndex', $this->getPermissionsCreepIndex());
        $writer->writeEnumValue('securityTools', $this->getSecurityTools());
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

    /**
     * Sets the securityTools property value. The securityTools property
     * @param AwsSecurityToolWebServices|null $value Value to set for the securityTools property.
    */
    public function setSecurityTools(?AwsSecurityToolWebServices $value): void {
        $this->getBackingStore()->set('securityTools', $value);
    }

}
