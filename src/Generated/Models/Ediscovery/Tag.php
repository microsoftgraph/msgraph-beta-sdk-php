<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Tag extends Entity implements Parsable 
{
    /**
     * Instantiates a new tag and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.ediscovery.tag');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Tag
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Tag {
        return new Tag();
    }

    /**
     * Gets the childSelectability property value. Indicates whether a single or multiple child tags can be associated with a document. Possible values are: One, Many.  This value controls whether the UX presents the tags as checkboxes or a radio button group.
     * @return ChildSelectability|null
    */
    public function getChildSelectability(): ?ChildSelectability {
        return $this->getBackingStore()->get('childSelectability');
    }

    /**
     * Gets the childTags property value. Returns the tags that are a child of a tag.
     * @return array<Tag>|null
    */
    public function getChildTags(): ?array {
        return $this->getBackingStore()->get('childTags');
    }

    /**
     * Gets the createdBy property value. The user who created the tag.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the description property value. The description for the tag.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Display name of the tag.
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
            'childSelectability' => fn(ParseNode $n) => $o->setChildSelectability($n->getEnumValue(ChildSelectability::class)),
            'childTags' => fn(ParseNode $n) => $o->setChildTags($n->getCollectionOfObjectValues([Tag::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'parent' => fn(ParseNode $n) => $o->setParent($n->getObjectValue([Tag::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the tag was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the parent property value. Returns the parent tag of the specified tag.
     * @return Tag|null
    */
    public function getParent(): ?Tag {
        return $this->getBackingStore()->get('parent');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('childSelectability', $this->getChildSelectability());
        $writer->writeCollectionOfObjectValues('childTags', $this->getChildTags());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeObjectValue('parent', $this->getParent());
    }

    /**
     * Sets the childSelectability property value. Indicates whether a single or multiple child tags can be associated with a document. Possible values are: One, Many.  This value controls whether the UX presents the tags as checkboxes or a radio button group.
     *  @param ChildSelectability|null $value Value to set for the childSelectability property.
    */
    public function setChildSelectability(?ChildSelectability $value): void {
        $this->getBackingStore()->set('childSelectability', $value);
    }

    /**
     * Sets the childTags property value. Returns the tags that are a child of a tag.
     *  @param array<Tag>|null $value Value to set for the childTags property.
    */
    public function setChildTags(?array $value): void {
        $this->getBackingStore()->set('childTags', $value);
    }

    /**
     * Sets the createdBy property value. The user who created the tag.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the description property value. The description for the tag.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name of the tag.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the tag was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the parent property value. Returns the parent tag of the specified tag.
     *  @param Tag|null $value Value to set for the parent property.
    */
    public function setParent(?Tag $value): void {
        $this->getBackingStore()->set('parent', $value);
    }

}
