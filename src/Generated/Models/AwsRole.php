<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AwsRole extends AwsIdentity implements Parsable 
{
    /**
     * Instantiates a new awsRole and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.awsRole');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsRole
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsRole {
        return new AwsRole();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'roleType' => fn(ParseNode $n) => $o->setRoleType($n->getEnumValue(AwsRoleType::class)),
            'trustEntityType' => fn(ParseNode $n) => $o->setTrustEntityType($n->getEnumValue(AwsRoleTrustEntityType::class)),
        ]);
    }

    /**
     * Gets the roleType property value. The roleType property
     * @return AwsRoleType|null
    */
    public function getRoleType(): ?AwsRoleType {
        $val = $this->getBackingStore()->get('roleType');
        if (is_null($val) || $val instanceof AwsRoleType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleType'");
    }

    /**
     * Gets the trustEntityType property value. The trustEntityType property
     * @return AwsRoleTrustEntityType|null
    */
    public function getTrustEntityType(): ?AwsRoleTrustEntityType {
        $val = $this->getBackingStore()->get('trustEntityType');
        if (is_null($val) || $val instanceof AwsRoleTrustEntityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trustEntityType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('roleType', $this->getRoleType());
        $writer->writeEnumValue('trustEntityType', $this->getTrustEntityType());
    }

    /**
     * Sets the roleType property value. The roleType property
     * @param AwsRoleType|null $value Value to set for the roleType property.
    */
    public function setRoleType(?AwsRoleType $value): void {
        $this->getBackingStore()->set('roleType', $value);
    }

    /**
     * Sets the trustEntityType property value. The trustEntityType property
     * @param AwsRoleTrustEntityType|null $value Value to set for the trustEntityType property.
    */
    public function setTrustEntityType(?AwsRoleTrustEntityType $value): void {
        $this->getBackingStore()->set('trustEntityType', $value);
    }

}
