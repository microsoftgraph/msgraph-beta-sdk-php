<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuditResource implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName Display name.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<AuditProperty>|null $modifiedProperties List of modified properties.
    */
    private ?array $modifiedProperties = null;
    
    /**
     * @var string|null $resourceId Audit resource's Id.
    */
    private ?string $resourceId = null;
    
    /**
     * @var string|null $type Audit resource's type.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new auditResource and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditResource {
        return new AuditResource();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. Display name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'modifiedProperties' => function (ParseNode $n) use ($o) { $o->setModifiedProperties($n->getCollectionOfObjectValues(array(AuditProperty::class, 'createFromDiscriminatorValue'))); },
            'resourceId' => function (ParseNode $n) use ($o) { $o->setResourceId($n->getStringValue()); },
            'type' => function (ParseNode $n) use ($o) { $o->setType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the modifiedProperties property value. List of modified properties.
     * @return array<AuditProperty>|null
    */
    public function getModifiedProperties(): ?array {
        return $this->modifiedProperties;
    }

    /**
     * Gets the resourceId property value. Audit resource's Id.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Gets the type property value. Audit resource's type.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('modifiedProperties', $this->modifiedProperties);
        $writer->writeStringValue('resourceId', $this->resourceId);
        $writer->writeStringValue('type', $this->type);
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
     * Sets the displayName property value. Display name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the modifiedProperties property value. List of modified properties.
     *  @param array<AuditProperty>|null $value Value to set for the modifiedProperties property.
    */
    public function setModifiedProperties(?array $value ): void {
        $this->modifiedProperties = $value;
    }

    /**
     * Sets the resourceId property value. Audit resource's Id.
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

    /**
     * Sets the type property value. Audit resource's type.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
