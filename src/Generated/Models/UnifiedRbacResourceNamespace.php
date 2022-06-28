<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRbacResourceNamespace extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $name Name of the resource namespace. Typically, the same name as the id property, such as microsoft.aad.b2c. Required. Supports $filter (eq, startsWith).
    */
    private ?string $name = null;
    
    /**
     * @var array<UnifiedRbacResourceAction>|null $resourceActions Operations that an authorized principal are allowed to perform.
    */
    private ?array $resourceActions = null;
    
    /**
     * Instantiates a new unifiedRbacResourceNamespace and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRbacResourceNamespace
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRbacResourceNamespace {
        return new UnifiedRbacResourceNamespace();
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
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'resourceActions' => function (ParseNode $n) use ($o) { $o->setResourceActions($n->getCollectionOfObjectValues(array(UnifiedRbacResourceAction::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the name property value. Name of the resource namespace. Typically, the same name as the id property, such as microsoft.aad.b2c. Required. Supports $filter (eq, startsWith).
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the resourceActions property value. Operations that an authorized principal are allowed to perform.
     * @return array<UnifiedRbacResourceAction>|null
    */
    public function getResourceActions(): ?array {
        return $this->resourceActions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('resourceActions', $this->resourceActions);
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
     * Sets the name property value. Name of the resource namespace. Typically, the same name as the id property, such as microsoft.aad.b2c. Required. Supports $filter (eq, startsWith).
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the resourceActions property value. Operations that an authorized principal are allowed to perform.
     *  @param array<UnifiedRbacResourceAction>|null $value Value to set for the resourceActions property.
    */
    public function setResourceActions(?array $value ): void {
        $this->resourceActions = $value;
    }

}
