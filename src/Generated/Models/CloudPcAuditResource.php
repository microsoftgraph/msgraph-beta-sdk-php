<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcAuditResource implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $displayName The resource entity display name. */
    private ?string $displayName = null;
    
    /** @var array<CloudPcAuditProperty>|null $modifiedProperties A list of modified properties. */
    private ?array $modifiedProperties = null;
    
    /** @var string|null $resourceId The ID of the audit resource. */
    private ?string $resourceId = null;
    
    /** @var string|null $type The type of the audit resource. */
    private ?string $type = null;
    
    /**
     * Instantiates a new cloudPcAuditResource and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcAuditResource
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcAuditResource {
        return new CloudPcAuditResource();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. The resource entity display name.
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
        return  [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'modifiedProperties' => function (self $o, ParseNode $n) { $o->setModifiedProperties($n->getCollectionOfObjectValues(CloudPcAuditProperty::class)); },
            'resourceId' => function (self $o, ParseNode $n) { $o->setResourceId($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the modifiedProperties property value. A list of modified properties.
     * @return array<CloudPcAuditProperty>|null
    */
    public function getModifiedProperties(): ?array {
        return $this->modifiedProperties;
    }

    /**
     * Gets the resourceId property value. The ID of the audit resource.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Gets the type property value. The type of the audit resource.
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
     * Sets the displayName property value. The resource entity display name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the modifiedProperties property value. A list of modified properties.
     *  @param array<CloudPcAuditProperty>|null $value Value to set for the modifiedProperties property.
    */
    public function setModifiedProperties(?array $value ): void {
        $this->modifiedProperties = $value;
    }

    /**
     * Sets the resourceId property value. The ID of the audit resource.
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

    /**
     * Sets the type property value. The type of the audit resource.
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
