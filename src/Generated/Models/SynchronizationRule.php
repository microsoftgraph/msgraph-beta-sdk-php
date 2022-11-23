<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SynchronizationRule implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new synchronizationRule and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationRule {
        return new SynchronizationRule();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the editable property value. true if the synchronization rule can be customized; false if this rule is read-only and should not be changed.
     * @return bool|null
    */
    public function getEditable(): ?bool {
        return $this->getBackingStore()->get('editable');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'editable' => fn(ParseNode $n) => $o->setEditable($n->getBooleanValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getCollectionOfObjectValues([StringKeyStringValuePair::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'objectMappings' => fn(ParseNode $n) => $o->setObjectMappings($n->getCollectionOfObjectValues([ObjectMapping::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'sourceDirectoryName' => fn(ParseNode $n) => $o->setSourceDirectoryName($n->getStringValue()),
            'targetDirectoryName' => fn(ParseNode $n) => $o->setTargetDirectoryName($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. Synchronization rule identifier. Must be one of the identifiers recognized by the synchronization engine. Supported rule identifiers can be found in the synchronization template returned by the API.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the metadata property value. Additional extension properties. Unless instructed explicitly by the support team, metadata values should not be changed.
     * @return array<StringKeyStringValuePair>|null
    */
    public function getMetadata(): ?array {
        return $this->getBackingStore()->get('metadata');
    }

    /**
     * Gets the name property value. Human-readable name of the synchronization rule. Not nullable.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the objectMappings property value. Collection of object mappings supported by the rule. Tells the synchronization engine which objects should be synchronized.
     * @return array<ObjectMapping>|null
    */
    public function getObjectMappings(): ?array {
        return $this->getBackingStore()->get('objectMappings');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the priority property value. Priority relative to other rules in the synchronizationSchema. Rules with the lowest priority number will be processed first.
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->getBackingStore()->get('priority');
    }

    /**
     * Gets the sourceDirectoryName property value. Name of the source directory. Must match one of the directory definitions in synchronizationSchema.
     * @return string|null
    */
    public function getSourceDirectoryName(): ?string {
        return $this->getBackingStore()->get('sourceDirectoryName');
    }

    /**
     * Gets the targetDirectoryName property value. Name of the target directory. Must match one of the directory definitions in synchronizationSchema.
     * @return string|null
    */
    public function getTargetDirectoryName(): ?string {
        return $this->getBackingStore()->get('targetDirectoryName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('editable', $this->getEditable());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeCollectionOfObjectValues('metadata', $this->getMetadata());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('objectMappings', $this->getObjectMappings());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeStringValue('sourceDirectoryName', $this->getSourceDirectoryName());
        $writer->writeStringValue('targetDirectoryName', $this->getTargetDirectoryName());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the editable property value. true if the synchronization rule can be customized; false if this rule is read-only and should not be changed.
     *  @param bool|null $value Value to set for the editable property.
    */
    public function setEditable(?bool $value): void {
        $this->getBackingStore()->set('editable', $value);
    }

    /**
     * Sets the id property value. Synchronization rule identifier. Must be one of the identifiers recognized by the synchronization engine. Supported rule identifiers can be found in the synchronization template returned by the API.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the metadata property value. Additional extension properties. Unless instructed explicitly by the support team, metadata values should not be changed.
     *  @param array<StringKeyStringValuePair>|null $value Value to set for the metadata property.
    */
    public function setMetadata(?array $value): void {
        $this->getBackingStore()->set('metadata', $value);
    }

    /**
     * Sets the name property value. Human-readable name of the synchronization rule. Not nullable.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the objectMappings property value. Collection of object mappings supported by the rule. Tells the synchronization engine which objects should be synchronized.
     *  @param array<ObjectMapping>|null $value Value to set for the objectMappings property.
    */
    public function setObjectMappings(?array $value): void {
        $this->getBackingStore()->set('objectMappings', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the priority property value. Priority relative to other rules in the synchronizationSchema. Rules with the lowest priority number will be processed first.
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the sourceDirectoryName property value. Name of the source directory. Must match one of the directory definitions in synchronizationSchema.
     *  @param string|null $value Value to set for the sourceDirectoryName property.
    */
    public function setSourceDirectoryName(?string $value): void {
        $this->getBackingStore()->set('sourceDirectoryName', $value);
    }

    /**
     * Sets the targetDirectoryName property value. Name of the target directory. Must match one of the directory definitions in synchronizationSchema.
     *  @param string|null $value Value to set for the targetDirectoryName property.
    */
    public function setTargetDirectoryName(?string $value): void {
        $this->getBackingStore()->set('targetDirectoryName', $value);
    }

}
