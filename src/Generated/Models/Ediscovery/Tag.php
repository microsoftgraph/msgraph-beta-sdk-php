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
     * @var ChildSelectability|null $childSelectability Indicates whether a single or multiple child tags can be associated with a document. Possible values are: One, Many.  This value controls whether the UX presents the tags as checkboxes or a radio button group.
    */
    private ?ChildSelectability $childSelectability = null;
    
    /**
     * @var array<Tag>|null $childTags Returns the tags that are a child of a tag.
    */
    private ?array $childTags = null;
    
    /**
     * @var IdentitySet|null $createdBy The user who created the tag.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var string|null $description The description for the tag.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Display name of the tag.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time the tag was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var Tag|null $parent Returns the parent tag of the specified tag.
    */
    private ?Tag $parent = null;
    
    /**
     * Instantiates a new tag and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->childSelectability;
    }

    /**
     * Gets the childTags property value. Returns the tags that are a child of a tag.
     * @return array<Tag>|null
    */
    public function getChildTags(): ?array {
        return $this->childTags;
    }

    /**
     * Gets the createdBy property value. The user who created the tag.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the description property value. The description for the tag.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Display name of the tag.
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
        return array_merge(parent::getFieldDeserializers(), [
            'childSelectability' => function (ParseNode $n) use ($o) { $o->setChildSelectability($n->getEnumValue(ChildSelectability::class)); },
            'childTags' => function (ParseNode $n) use ($o) { $o->setChildTags($n->getCollectionOfObjectValues(array(Tag::class, 'createFromDiscriminatorValue'))); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'parent' => function (ParseNode $n) use ($o) { $o->setParent($n->getObjectValue(array(Tag::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the tag was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the parent property value. Returns the parent tag of the specified tag.
     * @return Tag|null
    */
    public function getParent(): ?Tag {
        return $this->parent;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('childSelectability', $this->childSelectability);
        $writer->writeCollectionOfObjectValues('childTags', $this->childTags);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('parent', $this->parent);
    }

    /**
     * Sets the childSelectability property value. Indicates whether a single or multiple child tags can be associated with a document. Possible values are: One, Many.  This value controls whether the UX presents the tags as checkboxes or a radio button group.
     *  @param ChildSelectability|null $value Value to set for the childSelectability property.
    */
    public function setChildSelectability(?ChildSelectability $value ): void {
        $this->childSelectability = $value;
    }

    /**
     * Sets the childTags property value. Returns the tags that are a child of a tag.
     *  @param array<Tag>|null $value Value to set for the childTags property.
    */
    public function setChildTags(?array $value ): void {
        $this->childTags = $value;
    }

    /**
     * Sets the createdBy property value. The user who created the tag.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the description property value. The description for the tag.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Display name of the tag.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the tag was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the parent property value. Returns the parent tag of the specified tag.
     *  @param Tag|null $value Value to set for the parent property.
    */
    public function setParent(?Tag $value ): void {
        $this->parent = $value;
    }

}
