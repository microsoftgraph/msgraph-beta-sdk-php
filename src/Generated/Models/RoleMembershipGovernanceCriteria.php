<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoleMembershipGovernanceCriteria extends GovernanceCriteria implements Parsable 
{
    /**
     * @var string|null $roleId The roleId property
    */
    private ?string $roleId = null;
    
    /**
     * @var string|null $roleTemplateId The roleTemplateId property
    */
    private ?string $roleTemplateId = null;
    
    /**
     * Instantiates a new RoleMembershipGovernanceCriteria and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.roleMembershipGovernanceCriteria');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoleMembershipGovernanceCriteria
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoleMembershipGovernanceCriteria {
        return new RoleMembershipGovernanceCriteria();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'roleId' => function (ParseNode $n) use ($o) { $o->setRoleId($n->getStringValue()); },
            'roleTemplateId' => function (ParseNode $n) use ($o) { $o->setRoleTemplateId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the roleId property value. The roleId property
     * @return string|null
    */
    public function getRoleId(): ?string {
        return $this->roleId;
    }

    /**
     * Gets the roleTemplateId property value. The roleTemplateId property
     * @return string|null
    */
    public function getRoleTemplateId(): ?string {
        return $this->roleTemplateId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('roleId', $this->roleId);
        $writer->writeStringValue('roleTemplateId', $this->roleTemplateId);
    }

    /**
     * Sets the roleId property value. The roleId property
     *  @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value ): void {
        $this->roleId = $value;
    }

    /**
     * Sets the roleTemplateId property value. The roleTemplateId property
     *  @param string|null $value Value to set for the roleTemplateId property.
    */
    public function setRoleTemplateId(?string $value ): void {
        $this->roleTemplateId = $value;
    }

}
