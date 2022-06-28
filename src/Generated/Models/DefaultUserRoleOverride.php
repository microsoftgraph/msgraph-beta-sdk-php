<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DefaultUserRoleOverride extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isDefault The isDefault property
    */
    private ?bool $isDefault = null;
    
    /**
     * @var array<UnifiedRolePermission>|null $rolePermissions The rolePermissions property
    */
    private ?array $rolePermissions = null;
    
    /**
     * Instantiates a new defaultUserRoleOverride and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DefaultUserRoleOverride
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DefaultUserRoleOverride {
        return new DefaultUserRoleOverride();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isDefault' => function (ParseNode $n) use ($o) { $o->setIsDefault($n->getBooleanValue()); },
            'rolePermissions' => function (ParseNode $n) use ($o) { $o->setRolePermissions($n->getCollectionOfObjectValues(array(UnifiedRolePermission::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isDefault property value. The isDefault property
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the rolePermissions property value. The rolePermissions property
     * @return array<UnifiedRolePermission>|null
    */
    public function getRolePermissions(): ?array {
        return $this->rolePermissions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeCollectionOfObjectValues('rolePermissions', $this->rolePermissions);
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
     * Sets the isDefault property value. The isDefault property
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the rolePermissions property value. The rolePermissions property
     *  @param array<UnifiedRolePermission>|null $value Value to set for the rolePermissions property.
    */
    public function setRolePermissions(?array $value ): void {
        $this->rolePermissions = $value;
    }

}
