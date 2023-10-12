<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AccessPackageResourceAttribute implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new accessPackageResourceAttribute and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageResourceAttribute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageResourceAttribute {
        return new AccessPackageResourceAttribute();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the attributeDestination property value. Information about how to set the attribute, currently a accessPackageUserDirectoryAttributeStore object type.
     * @return AccessPackageResourceAttributeDestination|null
    */
    public function getAttributeDestination(): ?AccessPackageResourceAttributeDestination {
        $val = $this->getBackingStore()->get('attributeDestination');
        if (is_null($val) || $val instanceof AccessPackageResourceAttributeDestination) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributeDestination'");
    }

    /**
     * Gets the attributeName property value. The name of the attribute in the end system. If the destination is accessPackageUserDirectoryAttributeStore, then a user property such as jobTitle or a directory schema extension for the user object type, such as extension2b676109c7c74ae2b41549205f1947edpersonalTitle.
     * @return string|null
    */
    public function getAttributeName(): ?string {
        $val = $this->getBackingStore()->get('attributeName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributeName'");
    }

    /**
     * Gets the attributeSource property value. Information about how to populate the attribute value when an accessPackageAssignmentRequest is being fulfilled, currently a accessPackageResourceAttributeQuestion object type.
     * @return AccessPackageResourceAttributeSource|null
    */
    public function getAttributeSource(): ?AccessPackageResourceAttributeSource {
        $val = $this->getBackingStore()->get('attributeSource');
        if (is_null($val) || $val instanceof AccessPackageResourceAttributeSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributeSource'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attributeDestination' => fn(ParseNode $n) => $o->setAttributeDestination($n->getObjectValue([AccessPackageResourceAttributeDestination::class, 'createFromDiscriminatorValue'])),
            'attributeName' => fn(ParseNode $n) => $o->setAttributeName($n->getStringValue()),
            'attributeSource' => fn(ParseNode $n) => $o->setAttributeSource($n->getObjectValue([AccessPackageResourceAttributeSource::class, 'createFromDiscriminatorValue'])),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isEditable' => fn(ParseNode $n) => $o->setIsEditable($n->getBooleanValue()),
            'isPersistedOnAssignmentRemoval' => fn(ParseNode $n) => $o->setIsPersistedOnAssignmentRemoval($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Unique identifier for the attribute on the access package resource. Read-only.
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
    }

    /**
     * Gets the isEditable property value. Specifies whether or not an existing attribute value can be edited by the requester.
     * @return bool|null
    */
    public function getIsEditable(): ?bool {
        $val = $this->getBackingStore()->get('isEditable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEditable'");
    }

    /**
     * Gets the isPersistedOnAssignmentRemoval property value. Specifies whether the attribute will remain in the end system after an assignment ends.
     * @return bool|null
    */
    public function getIsPersistedOnAssignmentRemoval(): ?bool {
        $val = $this->getBackingStore()->get('isPersistedOnAssignmentRemoval');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPersistedOnAssignmentRemoval'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('attributeDestination', $this->getAttributeDestination());
        $writer->writeStringValue('attributeName', $this->getAttributeName());
        $writer->writeObjectValue('attributeSource', $this->getAttributeSource());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isEditable', $this->getIsEditable());
        $writer->writeBooleanValue('isPersistedOnAssignmentRemoval', $this->getIsPersistedOnAssignmentRemoval());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the attributeDestination property value. Information about how to set the attribute, currently a accessPackageUserDirectoryAttributeStore object type.
     * @param AccessPackageResourceAttributeDestination|null $value Value to set for the attributeDestination property.
    */
    public function setAttributeDestination(?AccessPackageResourceAttributeDestination $value): void {
        $this->getBackingStore()->set('attributeDestination', $value);
    }

    /**
     * Sets the attributeName property value. The name of the attribute in the end system. If the destination is accessPackageUserDirectoryAttributeStore, then a user property such as jobTitle or a directory schema extension for the user object type, such as extension2b676109c7c74ae2b41549205f1947edpersonalTitle.
     * @param string|null $value Value to set for the attributeName property.
    */
    public function setAttributeName(?string $value): void {
        $this->getBackingStore()->set('attributeName', $value);
    }

    /**
     * Sets the attributeSource property value. Information about how to populate the attribute value when an accessPackageAssignmentRequest is being fulfilled, currently a accessPackageResourceAttributeQuestion object type.
     * @param AccessPackageResourceAttributeSource|null $value Value to set for the attributeSource property.
    */
    public function setAttributeSource(?AccessPackageResourceAttributeSource $value): void {
        $this->getBackingStore()->set('attributeSource', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the id property value. Unique identifier for the attribute on the access package resource. Read-only.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the isEditable property value. Specifies whether or not an existing attribute value can be edited by the requester.
     * @param bool|null $value Value to set for the isEditable property.
    */
    public function setIsEditable(?bool $value): void {
        $this->getBackingStore()->set('isEditable', $value);
    }

    /**
     * Sets the isPersistedOnAssignmentRemoval property value. Specifies whether the attribute will remain in the end system after an assignment ends.
     * @param bool|null $value Value to set for the isPersistedOnAssignmentRemoval property.
    */
    public function setIsPersistedOnAssignmentRemoval(?bool $value): void {
        $this->getBackingStore()->set('isPersistedOnAssignmentRemoval', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
