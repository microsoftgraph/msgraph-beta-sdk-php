<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyCategory extends Entity implements Parsable 
{
    /**
     * Instantiates a new groupPolicyCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.groupPolicyCategory');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyCategory {
        return new GroupPolicyCategory();
    }

    /**
     * Gets the children property value. The children categories
     * @return array<GroupPolicyCategory>|null
    */
    public function getChildren(): ?array {
        return $this->getBackingStore()->get('children');
    }

    /**
     * Gets the definitionFile property value. The id of the definition file the category came from
     * @return GroupPolicyDefinitionFile|null
    */
    public function getDefinitionFile(): ?GroupPolicyDefinitionFile {
        return $this->getBackingStore()->get('definitionFile');
    }

    /**
     * Gets the definitions property value. The immediate GroupPolicyDefinition children of the category
     * @return array<GroupPolicyDefinition>|null
    */
    public function getDefinitions(): ?array {
        return $this->getBackingStore()->get('definitions');
    }

    /**
     * Gets the displayName property value. The string id of the category's display name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'children' => fn(ParseNode $n) => $o->setChildren($n->getCollectionOfObjectValues([GroupPolicyCategory::class, 'createFromDiscriminatorValue'])),
            'definitionFile' => fn(ParseNode $n) => $o->setDefinitionFile($n->getObjectValue([GroupPolicyDefinitionFile::class, 'createFromDiscriminatorValue'])),
            'definitions' => fn(ParseNode $n) => $o->setDefinitions($n->getCollectionOfObjectValues([GroupPolicyDefinition::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'ingestionSource' => fn(ParseNode $n) => $o->setIngestionSource($n->getEnumValue(IngestionSource::class)),
            'isRoot' => fn(ParseNode $n) => $o->setIsRoot($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'parent' => fn(ParseNode $n) => $o->setParent($n->getObjectValue([GroupPolicyCategory::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the ingestionSource property value. Category Ingestion source
     * @return IngestionSource|null
    */
    public function getIngestionSource(): ?IngestionSource {
        return $this->getBackingStore()->get('ingestionSource');
    }

    /**
     * Gets the isRoot property value. Defines if the category is a root category
     * @return bool|null
    */
    public function getIsRoot(): ?bool {
        return $this->getBackingStore()->get('isRoot');
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the parent property value. The parent category
     * @return GroupPolicyCategory|null
    */
    public function getParent(): ?GroupPolicyCategory {
        return $this->getBackingStore()->get('parent');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('children', $this->getChildren());
        $writer->writeObjectValue('definitionFile', $this->getDefinitionFile());
        $writer->writeCollectionOfObjectValues('definitions', $this->getDefinitions());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('ingestionSource', $this->getIngestionSource());
        $writer->writeBooleanValue('isRoot', $this->getIsRoot());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('parent', $this->getParent());
    }

    /**
     * Sets the children property value. The children categories
     *  @param array<GroupPolicyCategory>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value): void {
        $this->getBackingStore()->set('children', $value);
    }

    /**
     * Sets the definitionFile property value. The id of the definition file the category came from
     *  @param GroupPolicyDefinitionFile|null $value Value to set for the definitionFile property.
    */
    public function setDefinitionFile(?GroupPolicyDefinitionFile $value): void {
        $this->getBackingStore()->set('definitionFile', $value);
    }

    /**
     * Sets the definitions property value. The immediate GroupPolicyDefinition children of the category
     *  @param array<GroupPolicyDefinition>|null $value Value to set for the definitions property.
    */
    public function setDefinitions(?array $value): void {
        $this->getBackingStore()->set('definitions', $value);
    }

    /**
     * Sets the displayName property value. The string id of the category's display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the ingestionSource property value. Category Ingestion source
     *  @param IngestionSource|null $value Value to set for the ingestionSource property.
    */
    public function setIngestionSource(?IngestionSource $value): void {
        $this->getBackingStore()->set('ingestionSource', $value);
    }

    /**
     * Sets the isRoot property value. Defines if the category is a root category
     *  @param bool|null $value Value to set for the isRoot property.
    */
    public function setIsRoot(?bool $value): void {
        $this->getBackingStore()->set('isRoot', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the entity was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the parent property value. The parent category
     *  @param GroupPolicyCategory|null $value Value to set for the parent property.
    */
    public function setParent(?GroupPolicyCategory $value): void {
        $this->getBackingStore()->set('parent', $value);
    }

}
