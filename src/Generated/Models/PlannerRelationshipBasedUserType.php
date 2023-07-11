<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerRelationshipBasedUserType extends PlannerTaskConfigurationRoleBase implements Parsable 
{
    /**
     * Instantiates a new plannerRelationshipBasedUserType and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.plannerRelationshipBasedUserType');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerRelationshipBasedUserType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerRelationshipBasedUserType {
        return new PlannerRelationshipBasedUserType();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(PlannerRelationshipUserRoles::class)),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the role property value. The role property
     * @return PlannerRelationshipUserRoles|null
    */
    public function getRole(): ?PlannerRelationshipUserRoles {
        $val = $this->getBackingStore()->get('role');
        if (is_null($val) || $val instanceof PlannerRelationshipUserRoles) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'role'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('role', $this->getRole());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the role property value. The role property
     * @param PlannerRelationshipUserRoles|null $value Value to set for the role property.
    */
    public function setRole(?PlannerRelationshipUserRoles $value): void {
        $this->getBackingStore()->set('role', $value);
    }

}
