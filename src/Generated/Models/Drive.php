<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Drive extends BaseItem implements Parsable 
{
    /**
     * @var array<ItemActivityOLD>|null $activities The list of recent activities that took place under this drive.
    */
    private ?array $activities = null;
    
    /**
     * @var array<DriveItem>|null $bundles Collection of [bundles][bundle] (albums and multi-select-shared sets of items). Only in personal OneDrive.
    */
    private ?array $bundles = null;
    
    /**
     * @var string|null $driveType Describes the type of drive represented by this resource. OneDrive personal drives will return personal. OneDrive for Business will return business. SharePoint document libraries will return documentLibrary. Read-only.
    */
    private ?string $driveType = null;
    
    /**
     * @var EscapedList|null $EscapedList For drives in SharePoint, the underlying document library list. Read-only. Nullable.
    */
    private ?EscapedList $escapedList = null;
    
    /**
     * @var array<DriveItem>|null $following The list of items the user is following. Only in OneDrive for Business.
    */
    private ?array $following = null;
    
    /**
     * @var array<DriveItem>|null $items All items contained in the drive. Read-only. Nullable.
    */
    private ?array $items = null;
    
    /**
     * @var IdentitySet|null $owner Optional. The user account that owns the drive. Read-only.
    */
    private ?IdentitySet $owner = null;
    
    /**
     * @var Quota|null $quota Optional. Information about the drive's storage space quota. Read-only.
    */
    private ?Quota $quota = null;
    
    /**
     * @var DriveItem|null $root The root folder of the drive. Read-only.
    */
    private ?DriveItem $root = null;
    
    /**
     * @var SharepointIds|null $sharePointIds The sharePointIds property
    */
    private ?SharepointIds $sharePointIds = null;
    
    /**
     * @var array<DriveItem>|null $special Collection of common folders available in OneDrive. Read-only. Nullable.
    */
    private ?array $special = null;
    
    /**
     * @var SystemFacet|null $system If present, indicates that this is a system-managed drive. Read-only.
    */
    private ?SystemFacet $system = null;
    
    /**
     * Instantiates a new Drive and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Drive
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Drive {
        return new Drive();
    }

    /**
     * Gets the activities property value. The list of recent activities that took place under this drive.
     * @return array<ItemActivityOLD>|null
    */
    public function getActivities(): ?array {
        return $this->activities;
    }

    /**
     * Gets the bundles property value. Collection of [bundles][bundle] (albums and multi-select-shared sets of items). Only in personal OneDrive.
     * @return array<DriveItem>|null
    */
    public function getBundles(): ?array {
        return $this->bundles;
    }

    /**
     * Gets the driveType property value. Describes the type of drive represented by this resource. OneDrive personal drives will return personal. OneDrive for Business will return business. SharePoint document libraries will return documentLibrary. Read-only.
     * @return string|null
    */
    public function getDriveType(): ?string {
        return $this->driveType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activities' => function (ParseNode $n) use ($o) { $o->setActivities($n->getCollectionOfObjectValues(array(ItemActivityOLD::class, 'createFromDiscriminatorValue'))); },
            'bundles' => function (ParseNode $n) use ($o) { $o->setBundles($n->getCollectionOfObjectValues(array(DriveItem::class, 'createFromDiscriminatorValue'))); },
            'driveType' => function (ParseNode $n) use ($o) { $o->setDriveType($n->getStringValue()); },
            'list' => function (ParseNode $n) use ($o) { $o->setList($n->getObjectValue(array(EscapedList::class, 'createFromDiscriminatorValue'))); },
            'following' => function (ParseNode $n) use ($o) { $o->setFollowing($n->getCollectionOfObjectValues(array(DriveItem::class, 'createFromDiscriminatorValue'))); },
            'items' => function (ParseNode $n) use ($o) { $o->setItems($n->getCollectionOfObjectValues(array(DriveItem::class, 'createFromDiscriminatorValue'))); },
            'owner' => function (ParseNode $n) use ($o) { $o->setOwner($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'quota' => function (ParseNode $n) use ($o) { $o->setQuota($n->getObjectValue(array(Quota::class, 'createFromDiscriminatorValue'))); },
            'root' => function (ParseNode $n) use ($o) { $o->setRoot($n->getObjectValue(array(DriveItem::class, 'createFromDiscriminatorValue'))); },
            'sharePointIds' => function (ParseNode $n) use ($o) { $o->setSharePointIds($n->getObjectValue(array(SharepointIds::class, 'createFromDiscriminatorValue'))); },
            'special' => function (ParseNode $n) use ($o) { $o->setSpecial($n->getCollectionOfObjectValues(array(DriveItem::class, 'createFromDiscriminatorValue'))); },
            'system' => function (ParseNode $n) use ($o) { $o->setSystem($n->getObjectValue(array(SystemFacet::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the following property value. The list of items the user is following. Only in OneDrive for Business.
     * @return array<DriveItem>|null
    */
    public function getFollowing(): ?array {
        return $this->following;
    }

    /**
     * Gets the items property value. All items contained in the drive. Read-only. Nullable.
     * @return array<DriveItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the list property value. For drives in SharePoint, the underlying document library list. Read-only. Nullable.
     * @return EscapedList|null
    */
    public function getList(): ?EscapedList {
        return $this->escapedList;
    }

    /**
     * Gets the owner property value. Optional. The user account that owns the drive. Read-only.
     * @return IdentitySet|null
    */
    public function getOwner(): ?IdentitySet {
        return $this->owner;
    }

    /**
     * Gets the quota property value. Optional. Information about the drive's storage space quota. Read-only.
     * @return Quota|null
    */
    public function getQuota(): ?Quota {
        return $this->quota;
    }

    /**
     * Gets the root property value. The root folder of the drive. Read-only.
     * @return DriveItem|null
    */
    public function getRoot(): ?DriveItem {
        return $this->root;
    }

    /**
     * Gets the sharePointIds property value. The sharePointIds property
     * @return SharepointIds|null
    */
    public function getSharePointIds(): ?SharepointIds {
        return $this->sharePointIds;
    }

    /**
     * Gets the special property value. Collection of common folders available in OneDrive. Read-only. Nullable.
     * @return array<DriveItem>|null
    */
    public function getSpecial(): ?array {
        return $this->special;
    }

    /**
     * Gets the system property value. If present, indicates that this is a system-managed drive. Read-only.
     * @return SystemFacet|null
    */
    public function getSystem(): ?SystemFacet {
        return $this->system;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('activities', $this->activities);
        $writer->writeCollectionOfObjectValues('bundles', $this->bundles);
        $writer->writeStringValue('driveType', $this->driveType);
        $writer->writeObjectValue('list', $this->escapedList);
        $writer->writeCollectionOfObjectValues('following', $this->following);
        $writer->writeCollectionOfObjectValues('items', $this->items);
        $writer->writeObjectValue('owner', $this->owner);
        $writer->writeObjectValue('quota', $this->quota);
        $writer->writeObjectValue('root', $this->root);
        $writer->writeObjectValue('sharePointIds', $this->sharePointIds);
        $writer->writeCollectionOfObjectValues('special', $this->special);
        $writer->writeObjectValue('system', $this->system);
    }

    /**
     * Sets the activities property value. The list of recent activities that took place under this drive.
     *  @param array<ItemActivityOLD>|null $value Value to set for the activities property.
    */
    public function setActivities(?array $value ): void {
        $this->activities = $value;
    }

    /**
     * Sets the bundles property value. Collection of [bundles][bundle] (albums and multi-select-shared sets of items). Only in personal OneDrive.
     *  @param array<DriveItem>|null $value Value to set for the bundles property.
    */
    public function setBundles(?array $value ): void {
        $this->bundles = $value;
    }

    /**
     * Sets the driveType property value. Describes the type of drive represented by this resource. OneDrive personal drives will return personal. OneDrive for Business will return business. SharePoint document libraries will return documentLibrary. Read-only.
     *  @param string|null $value Value to set for the driveType property.
    */
    public function setDriveType(?string $value ): void {
        $this->driveType = $value;
    }

    /**
     * Sets the following property value. The list of items the user is following. Only in OneDrive for Business.
     *  @param array<DriveItem>|null $value Value to set for the following property.
    */
    public function setFollowing(?array $value ): void {
        $this->following = $value;
    }

    /**
     * Sets the items property value. All items contained in the drive. Read-only. Nullable.
     *  @param array<DriveItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value ): void {
        $this->items = $value;
    }

    /**
     * Sets the list property value. For drives in SharePoint, the underlying document library list. Read-only. Nullable.
     *  @param EscapedList|null $value Value to set for the EscapedList property.
    */
    public function setList(?EscapedList $value ): void {
        $this->escapedList = $value;
    }

    /**
     * Sets the owner property value. Optional. The user account that owns the drive. Read-only.
     *  @param IdentitySet|null $value Value to set for the owner property.
    */
    public function setOwner(?IdentitySet $value ): void {
        $this->owner = $value;
    }

    /**
     * Sets the quota property value. Optional. Information about the drive's storage space quota. Read-only.
     *  @param Quota|null $value Value to set for the quota property.
    */
    public function setQuota(?Quota $value ): void {
        $this->quota = $value;
    }

    /**
     * Sets the root property value. The root folder of the drive. Read-only.
     *  @param DriveItem|null $value Value to set for the root property.
    */
    public function setRoot(?DriveItem $value ): void {
        $this->root = $value;
    }

    /**
     * Sets the sharePointIds property value. The sharePointIds property
     *  @param SharepointIds|null $value Value to set for the sharePointIds property.
    */
    public function setSharePointIds(?SharepointIds $value ): void {
        $this->sharePointIds = $value;
    }

    /**
     * Sets the special property value. Collection of common folders available in OneDrive. Read-only. Nullable.
     *  @param array<DriveItem>|null $value Value to set for the special property.
    */
    public function setSpecial(?array $value ): void {
        $this->special = $value;
    }

    /**
     * Sets the system property value. If present, indicates that this is a system-managed drive. Read-only.
     *  @param SystemFacet|null $value Value to set for the system property.
    */
    public function setSystem(?SystemFacet $value ): void {
        $this->system = $value;
    }

}
