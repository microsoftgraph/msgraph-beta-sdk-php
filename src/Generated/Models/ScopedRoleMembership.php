<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ScopedRoleMembership extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $administrativeUnitId Unique identifier for the administrative unit that the directory role is scoped to
    */
    private ?string $administrativeUnitId = null;
    
    /**
     * @var string|null $roleId Unique identifier for the directory role that the member is in.
    */
    private ?string $roleId = null;
    
    /**
     * @var Identity|null $roleMemberInfo The roleMemberInfo property
    */
    private ?Identity $roleMemberInfo = null;
    
    /**
     * Instantiates a new ScopedRoleMembership and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScopedRoleMembership
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ScopedRoleMembership {
        return new ScopedRoleMembership();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the administrativeUnitId property value. Unique identifier for the administrative unit that the directory role is scoped to
     * @return string|null
    */
    public function getAdministrativeUnitId(): ?string {
        return $this->administrativeUnitId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'administrativeUnitId' => function (ParseNode $n) use ($o) { $o->setAdministrativeUnitId($n->getStringValue()); },
            'roleId' => function (ParseNode $n) use ($o) { $o->setRoleId($n->getStringValue()); },
            'roleMemberInfo' => function (ParseNode $n) use ($o) { $o->setRoleMemberInfo($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the roleId property value. Unique identifier for the directory role that the member is in.
     * @return string|null
    */
    public function getRoleId(): ?string {
        return $this->roleId;
    }

    /**
     * Gets the roleMemberInfo property value. The roleMemberInfo property
     * @return Identity|null
    */
    public function getRoleMemberInfo(): ?Identity {
        return $this->roleMemberInfo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('administrativeUnitId', $this->administrativeUnitId);
        $writer->writeStringValue('roleId', $this->roleId);
        $writer->writeObjectValue('roleMemberInfo', $this->roleMemberInfo);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the administrativeUnitId property value. Unique identifier for the administrative unit that the directory role is scoped to
     *  @param string|null $value Value to set for the administrativeUnitId property.
    */
    public function setAdministrativeUnitId(?string $value ): void {
        $this->administrativeUnitId = $value;
    }

    /**
     * Sets the roleId property value. Unique identifier for the directory role that the member is in.
     *  @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value ): void {
        $this->roleId = $value;
    }

    /**
     * Sets the roleMemberInfo property value. The roleMemberInfo property
     *  @param Identity|null $value Value to set for the roleMemberInfo property.
    */
    public function setRoleMemberInfo(?Identity $value ): void {
        $this->roleMemberInfo = $value;
    }

}
