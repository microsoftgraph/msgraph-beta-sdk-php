<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GovernanceRoleDefinition extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName The display name of the role definition.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $externalId The external id of the role definition.
    */
    private ?string $externalId = null;
    
    /**
     * @var GovernanceResource|null $resource Read-only. The associated resource for the role definition.
    */
    private ?GovernanceResource $resource = null;
    
    /**
     * @var string|null $resourceId Required. The id of the resource associated with the role definition.
    */
    private ?string $resourceId = null;
    
    /**
     * @var GovernanceRoleSetting|null $roleSetting The associated role setting for the role definition.
    */
    private ?GovernanceRoleSetting $roleSetting = null;
    
    /**
     * @var string|null $templateId The templateId property
    */
    private ?string $templateId = null;
    
    /**
     * Instantiates a new governanceRoleDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GovernanceRoleDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GovernanceRoleDefinition {
        return new GovernanceRoleDefinition();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. The display name of the role definition.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the externalId property value. The external id of the role definition.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'externalId' => function (ParseNode $n) use ($o) { $o->setExternalId($n->getStringValue()); },
            'resource' => function (ParseNode $n) use ($o) { $o->setResource($n->getObjectValue(array(GovernanceResource::class, 'createFromDiscriminatorValue'))); },
            'resourceId' => function (ParseNode $n) use ($o) { $o->setResourceId($n->getStringValue()); },
            'roleSetting' => function (ParseNode $n) use ($o) { $o->setRoleSetting($n->getObjectValue(array(GovernanceRoleSetting::class, 'createFromDiscriminatorValue'))); },
            'templateId' => function (ParseNode $n) use ($o) { $o->setTemplateId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the resource property value. Read-only. The associated resource for the role definition.
     * @return GovernanceResource|null
    */
    public function getResource(): ?GovernanceResource {
        return $this->resource;
    }

    /**
     * Gets the resourceId property value. Required. The id of the resource associated with the role definition.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->resourceId;
    }

    /**
     * Gets the roleSetting property value. The associated role setting for the role definition.
     * @return GovernanceRoleSetting|null
    */
    public function getRoleSetting(): ?GovernanceRoleSetting {
        return $this->roleSetting;
    }

    /**
     * Gets the templateId property value. The templateId property
     * @return string|null
    */
    public function getTemplateId(): ?string {
        return $this->templateId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeObjectValue('resource', $this->resource);
        $writer->writeStringValue('resourceId', $this->resourceId);
        $writer->writeObjectValue('roleSetting', $this->roleSetting);
        $writer->writeStringValue('templateId', $this->templateId);
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
     * Sets the displayName property value. The display name of the role definition.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the externalId property value. The external id of the role definition.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the resource property value. Read-only. The associated resource for the role definition.
     *  @param GovernanceResource|null $value Value to set for the resource property.
    */
    public function setResource(?GovernanceResource $value ): void {
        $this->resource = $value;
    }

    /**
     * Sets the resourceId property value. Required. The id of the resource associated with the role definition.
     *  @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value ): void {
        $this->resourceId = $value;
    }

    /**
     * Sets the roleSetting property value. The associated role setting for the role definition.
     *  @param GovernanceRoleSetting|null $value Value to set for the roleSetting property.
    */
    public function setRoleSetting(?GovernanceRoleSetting $value ): void {
        $this->roleSetting = $value;
    }

    /**
     * Sets the templateId property value. The templateId property
     *  @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value ): void {
        $this->templateId = $value;
    }

}
