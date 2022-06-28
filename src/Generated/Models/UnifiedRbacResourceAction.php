<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRbacResourceAction extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionVerb HTTP method for the action, such as DELETE, GET, PATCH, POST, PUT, or null. Supports $filter (eq) but not for null values.
    */
    private ?string $actionVerb = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description Description for the action. Supports $filter (eq).
    */
    private ?string $description = null;
    
    /**
     * @var string|null $name Name for the action within the resource namespace, such as microsoft.insights/programs/update. Can include slash character (/). Case insensitive. Required. Supports $filter (eq).
    */
    private ?string $name = null;
    
    /**
     * @var UnifiedRbacResourceScope|null $resourceScope The resourceScope property
    */
    private ?UnifiedRbacResourceScope $resourceScope = null;
    
    /**
     * @var string|null $resourceScopeId Not implemented.
    */
    private ?string $resourceScopeId = null;
    
    /**
     * Instantiates a new unifiedRbacResourceAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRbacResourceAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRbacResourceAction {
        return new UnifiedRbacResourceAction();
    }

    /**
     * Gets the actionVerb property value. HTTP method for the action, such as DELETE, GET, PATCH, POST, PUT, or null. Supports $filter (eq) but not for null values.
     * @return string|null
    */
    public function getActionVerb(): ?string {
        return $this->actionVerb;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Description for the action. Supports $filter (eq).
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actionVerb' => function (ParseNode $n) use ($o) { $o->setActionVerb($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'resourceScope' => function (ParseNode $n) use ($o) { $o->setResourceScope($n->getObjectValue(array(UnifiedRbacResourceScope::class, 'createFromDiscriminatorValue'))); },
            'resourceScopeId' => function (ParseNode $n) use ($o) { $o->setResourceScopeId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the name property value. Name for the action within the resource namespace, such as microsoft.insights/programs/update. Can include slash character (/). Case insensitive. Required. Supports $filter (eq).
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the resourceScope property value. The resourceScope property
     * @return UnifiedRbacResourceScope|null
    */
    public function getResourceScope(): ?UnifiedRbacResourceScope {
        return $this->resourceScope;
    }

    /**
     * Gets the resourceScopeId property value. Not implemented.
     * @return string|null
    */
    public function getResourceScopeId(): ?string {
        return $this->resourceScopeId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('actionVerb', $this->actionVerb);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('resourceScope', $this->resourceScope);
        $writer->writeStringValue('resourceScopeId', $this->resourceScopeId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionVerb property value. HTTP method for the action, such as DELETE, GET, PATCH, POST, PUT, or null. Supports $filter (eq) but not for null values.
     *  @param string|null $value Value to set for the actionVerb property.
    */
    public function setActionVerb(?string $value ): void {
        $this->actionVerb = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the description property value. Description for the action. Supports $filter (eq).
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the name property value. Name for the action within the resource namespace, such as microsoft.insights/programs/update. Can include slash character (/). Case insensitive. Required. Supports $filter (eq).
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the resourceScope property value. The resourceScope property
     *  @param UnifiedRbacResourceScope|null $value Value to set for the resourceScope property.
    */
    public function setResourceScope(?UnifiedRbacResourceScope $value ): void {
        $this->resourceScope = $value;
    }

    /**
     * Sets the resourceScopeId property value. Not implemented.
     *  @param string|null $value Value to set for the resourceScopeId property.
    */
    public function setResourceScopeId(?string $value ): void {
        $this->resourceScopeId = $value;
    }

}
