<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ListItem extends BaseItem implements Parsable 
{
    /**
     * @var array<ItemActivityOLD>|null $activities The list of recent activities that took place on this item.
    */
    private ?array $activities = null;
    
    /**
     * @var ItemAnalytics|null $analytics Analytics about the view activities that took place on this item.
    */
    private ?ItemAnalytics $analytics = null;
    
    /**
     * @var ContentTypeInfo|null $contentType The content type of this list item
    */
    private ?ContentTypeInfo $contentType = null;
    
    /**
     * @var Deleted|null $deleted The deleted property
    */
    private ?Deleted $deleted = null;
    
    /**
     * @var array<DocumentSetVersion>|null $documentSetVersions Version information for a document set version created by a user.
    */
    private ?array $documentSetVersions = null;
    
    /**
     * @var DriveItem|null $driveItem For document libraries, the driveItem relationship exposes the listItem as a [driveItem][]
    */
    private ?DriveItem $driveItem = null;
    
    /**
     * @var FieldValueSet|null $fields The values of the columns set on this list item.
    */
    private ?FieldValueSet $fields = null;
    
    /**
     * @var SharepointIds|null $sharepointIds Returns identifiers useful for SharePoint REST compatibility. Read-only.
    */
    private ?SharepointIds $sharepointIds = null;
    
    /**
     * @var array<ListItemVersion>|null $versions The list of previous versions of the list item.
    */
    private ?array $versions = null;
    
    /**
     * Instantiates a new listItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.listItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListItem {
        return new ListItem();
    }

    /**
     * Gets the activities property value. The list of recent activities that took place on this item.
     * @return array<ItemActivityOLD>|null
    */
    public function getActivities(): ?array {
        return $this->activities;
    }

    /**
     * Gets the analytics property value. Analytics about the view activities that took place on this item.
     * @return ItemAnalytics|null
    */
    public function getAnalytics(): ?ItemAnalytics {
        return $this->analytics;
    }

    /**
     * Gets the contentType property value. The content type of this list item
     * @return ContentTypeInfo|null
    */
    public function getContentType(): ?ContentTypeInfo {
        return $this->contentType;
    }

    /**
     * Gets the deleted property value. The deleted property
     * @return Deleted|null
    */
    public function getDeleted(): ?Deleted {
        return $this->deleted;
    }

    /**
     * Gets the documentSetVersions property value. Version information for a document set version created by a user.
     * @return array<DocumentSetVersion>|null
    */
    public function getDocumentSetVersions(): ?array {
        return $this->documentSetVersions;
    }

    /**
     * Gets the driveItem property value. For document libraries, the driveItem relationship exposes the listItem as a [driveItem][]
     * @return DriveItem|null
    */
    public function getDriveItem(): ?DriveItem {
        return $this->driveItem;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activities' => function (ParseNode $n) use ($o) { $o->setActivities($n->getCollectionOfObjectValues(array(ItemActivityOLD::class, 'createFromDiscriminatorValue'))); },
            'analytics' => function (ParseNode $n) use ($o) { $o->setAnalytics($n->getObjectValue(array(ItemAnalytics::class, 'createFromDiscriminatorValue'))); },
            'contentType' => function (ParseNode $n) use ($o) { $o->setContentType($n->getObjectValue(array(ContentTypeInfo::class, 'createFromDiscriminatorValue'))); },
            'deleted' => function (ParseNode $n) use ($o) { $o->setDeleted($n->getObjectValue(array(Deleted::class, 'createFromDiscriminatorValue'))); },
            'documentSetVersions' => function (ParseNode $n) use ($o) { $o->setDocumentSetVersions($n->getCollectionOfObjectValues(array(DocumentSetVersion::class, 'createFromDiscriminatorValue'))); },
            'driveItem' => function (ParseNode $n) use ($o) { $o->setDriveItem($n->getObjectValue(array(DriveItem::class, 'createFromDiscriminatorValue'))); },
            'fields' => function (ParseNode $n) use ($o) { $o->setFields($n->getObjectValue(array(FieldValueSet::class, 'createFromDiscriminatorValue'))); },
            'sharepointIds' => function (ParseNode $n) use ($o) { $o->setSharepointIds($n->getObjectValue(array(SharepointIds::class, 'createFromDiscriminatorValue'))); },
            'versions' => function (ParseNode $n) use ($o) { $o->setVersions($n->getCollectionOfObjectValues(array(ListItemVersion::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the fields property value. The values of the columns set on this list item.
     * @return FieldValueSet|null
    */
    public function getFields(): ?FieldValueSet {
        return $this->fields;
    }

    /**
     * Gets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @return SharepointIds|null
    */
    public function getSharepointIds(): ?SharepointIds {
        return $this->sharepointIds;
    }

    /**
     * Gets the versions property value. The list of previous versions of the list item.
     * @return array<ListItemVersion>|null
    */
    public function getVersions(): ?array {
        return $this->versions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('activities', $this->activities);
        $writer->writeObjectValue('analytics', $this->analytics);
        $writer->writeObjectValue('contentType', $this->contentType);
        $writer->writeObjectValue('deleted', $this->deleted);
        $writer->writeCollectionOfObjectValues('documentSetVersions', $this->documentSetVersions);
        $writer->writeObjectValue('driveItem', $this->driveItem);
        $writer->writeObjectValue('fields', $this->fields);
        $writer->writeObjectValue('sharepointIds', $this->sharepointIds);
        $writer->writeCollectionOfObjectValues('versions', $this->versions);
    }

    /**
     * Sets the activities property value. The list of recent activities that took place on this item.
     *  @param array<ItemActivityOLD>|null $value Value to set for the activities property.
    */
    public function setActivities(?array $value ): void {
        $this->activities = $value;
    }

    /**
     * Sets the analytics property value. Analytics about the view activities that took place on this item.
     *  @param ItemAnalytics|null $value Value to set for the analytics property.
    */
    public function setAnalytics(?ItemAnalytics $value ): void {
        $this->analytics = $value;
    }

    /**
     * Sets the contentType property value. The content type of this list item
     *  @param ContentTypeInfo|null $value Value to set for the contentType property.
    */
    public function setContentType(?ContentTypeInfo $value ): void {
        $this->contentType = $value;
    }

    /**
     * Sets the deleted property value. The deleted property
     *  @param Deleted|null $value Value to set for the deleted property.
    */
    public function setDeleted(?Deleted $value ): void {
        $this->deleted = $value;
    }

    /**
     * Sets the documentSetVersions property value. Version information for a document set version created by a user.
     *  @param array<DocumentSetVersion>|null $value Value to set for the documentSetVersions property.
    */
    public function setDocumentSetVersions(?array $value ): void {
        $this->documentSetVersions = $value;
    }

    /**
     * Sets the driveItem property value. For document libraries, the driveItem relationship exposes the listItem as a [driveItem][]
     *  @param DriveItem|null $value Value to set for the driveItem property.
    */
    public function setDriveItem(?DriveItem $value ): void {
        $this->driveItem = $value;
    }

    /**
     * Sets the fields property value. The values of the columns set on this list item.
     *  @param FieldValueSet|null $value Value to set for the fields property.
    */
    public function setFields(?FieldValueSet $value ): void {
        $this->fields = $value;
    }

    /**
     * Sets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     *  @param SharepointIds|null $value Value to set for the sharepointIds property.
    */
    public function setSharepointIds(?SharepointIds $value ): void {
        $this->sharepointIds = $value;
    }

    /**
     * Sets the versions property value. The list of previous versions of the list item.
     *  @param array<ListItemVersion>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value ): void {
        $this->versions = $value;
    }

}
