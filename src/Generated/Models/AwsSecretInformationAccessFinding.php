<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AwsSecretInformationAccessFinding extends Finding implements Parsable 
{
    /**
     * Instantiates a new AwsSecretInformationAccessFinding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsSecretInformationAccessFinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsSecretInformationAccessFinding {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.secretInformationAccessAwsResourceFinding': return new SecretInformationAccessAwsResourceFinding();
                case '#microsoft.graph.secretInformationAccessAwsRoleFinding': return new SecretInformationAccessAwsRoleFinding();
                case '#microsoft.graph.secretInformationAccessAwsServerlessFunctionFinding': return new SecretInformationAccessAwsServerlessFunctionFinding();
                case '#microsoft.graph.secretInformationAccessAwsUserFinding': return new SecretInformationAccessAwsUserFinding();
            }
        }
        return new AwsSecretInformationAccessFinding();
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
            'secretInformationWebServices' => fn(ParseNode $n) => $o->setSecretInformationWebServices($n->getEnumValue(AwsSecretInformationWebServices::class)),
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
     * Gets the secretInformationWebServices property value. The secretInformationWebServices property
     * @return AwsSecretInformationWebServices|null
    */
    public function getSecretInformationWebServices(): ?AwsSecretInformationWebServices {
        $val = $this->getBackingStore()->get('secretInformationWebServices');
        if (is_null($val) || $val instanceof AwsSecretInformationWebServices) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secretInformationWebServices'");
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
        $writer->writeEnumValue('secretInformationWebServices', $this->getSecretInformationWebServices());
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
     * Sets the secretInformationWebServices property value. The secretInformationWebServices property
     * @param AwsSecretInformationWebServices|null $value Value to set for the secretInformationWebServices property.
    */
    public function setSecretInformationWebServices(?AwsSecretInformationWebServices $value): void {
        $this->getBackingStore()->set('secretInformationWebServices', $value);
    }

}
