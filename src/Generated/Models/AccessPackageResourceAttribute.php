<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageResourceAttribute implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AccessPackageResourceAttributeDestination|null $attributeDestination Information about how to set the attribute, currently a accessPackageUserDirectoryAttributeStore object type. */
    private ?AccessPackageResourceAttributeDestination $attributeDestination = null;
    
    /** @var string|null $attributeName The name of the attribute in the end system. If the destination is accessPackageUserDirectoryAttributeStore, then a user property such as jobTitle or a directory schema extension for the user object type, such as extension_2b676109c7c74ae2b41549205f1947ed_personalTitle. */
    private ?string $attributeName = null;
    
    /** @var AccessPackageResourceAttributeSource|null $attributeSource Information about how to populate the attribute value when an accessPackageAssignmentRequest is being fulfilled, currently a accessPackageResourceAttributeQuestion object type. */
    private ?AccessPackageResourceAttributeSource $attributeSource = null;
    
    /** @var string|null $id Unique identifier for the attribute on the access package resource. Read-only. */
    private ?string $id = null;
    
    /** @var bool|null $isEditable Specifies whether or not an existing attribute value can be edited by the requester. */
    private ?bool $isEditable = null;
    
    /** @var bool|null $isPersistedOnAssignmentRemoval Specifies whether the attribute will remain in the end system after an assignment ends. */
    private ?bool $isPersistedOnAssignmentRemoval = null;
    
    /**
     * Instantiates a new accessPackageResourceAttribute and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResourceAttribute
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceAttribute {
        return new AccessPackageResourceAttribute();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attributeDestination property value. Information about how to set the attribute, currently a accessPackageUserDirectoryAttributeStore object type.
     * @return AccessPackageResourceAttributeDestination|null
    */
    public function getAttributeDestination(): ?AccessPackageResourceAttributeDestination {
        return $this->attributeDestination;
    }

    /**
     * Gets the attributeName property value. The name of the attribute in the end system. If the destination is accessPackageUserDirectoryAttributeStore, then a user property such as jobTitle or a directory schema extension for the user object type, such as extension_2b676109c7c74ae2b41549205f1947ed_personalTitle.
     * @return string|null
    */
    public function getAttributeName(): ?string {
        return $this->attributeName;
    }

    /**
     * Gets the attributeSource property value. Information about how to populate the attribute value when an accessPackageAssignmentRequest is being fulfilled, currently a accessPackageResourceAttributeQuestion object type.
     * @return AccessPackageResourceAttributeSource|null
    */
    public function getAttributeSource(): ?AccessPackageResourceAttributeSource {
        return $this->attributeSource;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'attributeDestination' => function (self $o, ParseNode $n) { $o->setAttributeDestination($n->getObjectValue(AccessPackageResourceAttributeDestination::class)); },
            'attributeName' => function (self $o, ParseNode $n) { $o->setAttributeName($n->getStringValue()); },
            'attributeSource' => function (self $o, ParseNode $n) { $o->setAttributeSource($n->getObjectValue(AccessPackageResourceAttributeSource::class)); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'isEditable' => function (self $o, ParseNode $n) { $o->setIsEditable($n->getBooleanValue()); },
            'isPersistedOnAssignmentRemoval' => function (self $o, ParseNode $n) { $o->setIsPersistedOnAssignmentRemoval($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the id property value. Unique identifier for the attribute on the access package resource. Read-only.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isEditable property value. Specifies whether or not an existing attribute value can be edited by the requester.
     * @return bool|null
    */
    public function getIsEditable(): ?bool {
        return $this->isEditable;
    }

    /**
     * Gets the isPersistedOnAssignmentRemoval property value. Specifies whether the attribute will remain in the end system after an assignment ends.
     * @return bool|null
    */
    public function getIsPersistedOnAssignmentRemoval(): ?bool {
        return $this->isPersistedOnAssignmentRemoval;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('attributeDestination', $this->attributeDestination);
        $writer->writeStringValue('attributeName', $this->attributeName);
        $writer->writeObjectValue('attributeSource', $this->attributeSource);
        $writer->writeStringValue('id', $this->id);
        $writer->writeBooleanValue('isEditable', $this->isEditable);
        $writer->writeBooleanValue('isPersistedOnAssignmentRemoval', $this->isPersistedOnAssignmentRemoval);
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
     * Sets the attributeDestination property value. Information about how to set the attribute, currently a accessPackageUserDirectoryAttributeStore object type.
     *  @param AccessPackageResourceAttributeDestination|null $value Value to set for the attributeDestination property.
    */
    public function setAttributeDestination(?AccessPackageResourceAttributeDestination $value ): void {
        $this->attributeDestination = $value;
    }

    /**
     * Sets the attributeName property value. The name of the attribute in the end system. If the destination is accessPackageUserDirectoryAttributeStore, then a user property such as jobTitle or a directory schema extension for the user object type, such as extension_2b676109c7c74ae2b41549205f1947ed_personalTitle.
     *  @param string|null $value Value to set for the attributeName property.
    */
    public function setAttributeName(?string $value ): void {
        $this->attributeName = $value;
    }

    /**
     * Sets the attributeSource property value. Information about how to populate the attribute value when an accessPackageAssignmentRequest is being fulfilled, currently a accessPackageResourceAttributeQuestion object type.
     *  @param AccessPackageResourceAttributeSource|null $value Value to set for the attributeSource property.
    */
    public function setAttributeSource(?AccessPackageResourceAttributeSource $value ): void {
        $this->attributeSource = $value;
    }

    /**
     * Sets the id property value. Unique identifier for the attribute on the access package resource. Read-only.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the isEditable property value. Specifies whether or not an existing attribute value can be edited by the requester.
     *  @param bool|null $value Value to set for the isEditable property.
    */
    public function setIsEditable(?bool $value ): void {
        $this->isEditable = $value;
    }

    /**
     * Sets the isPersistedOnAssignmentRemoval property value. Specifies whether the attribute will remain in the end system after an assignment ends.
     *  @param bool|null $value Value to set for the isPersistedOnAssignmentRemoval property.
    */
    public function setIsPersistedOnAssignmentRemoval(?bool $value ): void {
        $this->isPersistedOnAssignmentRemoval = $value;
    }

}
