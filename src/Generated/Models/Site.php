<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\TermStore\Store;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Site extends BaseItem implements Parsable 
{
    /**
     * Instantiates a new site and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.site');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Site
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Site {
        return new Site();
    }

    /**
     * Gets the analytics property value. Analytics about the view activities that took place in this site.
     * @return ItemAnalytics|null
    */
    public function getAnalytics(): ?ItemAnalytics {
        $val = $this->getBackingStore()->get('analytics');
        if (is_null($val) || $val instanceof ItemAnalytics) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'analytics'");
    }

    /**
     * Gets the columns property value. The collection of column definitions reusable across lists under this site.
     * @return array<ColumnDefinition>|null
    */
    public function getColumns(): ?array {
        $val = $this->getBackingStore()->get('columns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ColumnDefinition::class);
            /** @var array<ColumnDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'columns'");
    }

    /**
     * Gets the contentTypes property value. The collection of content types defined for this site.
     * @return array<ContentType>|null
    */
    public function getContentTypes(): ?array {
        $val = $this->getBackingStore()->get('contentTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ContentType::class);
            /** @var array<ContentType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentTypes'");
    }

    /**
     * Gets the deleted property value. The deleted property
     * @return Deleted|null
    */
    public function getDeleted(): ?Deleted {
        $val = $this->getBackingStore()->get('deleted');
        if (is_null($val) || $val instanceof Deleted) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deleted'");
    }

    /**
     * Gets the displayName property value. The full title for the site. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the drive property value. The default drive (document library) for this site.
     * @return Drive|null
    */
    public function getDrive(): ?Drive {
        $val = $this->getBackingStore()->get('drive');
        if (is_null($val) || $val instanceof Drive) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'drive'");
    }

    /**
     * Gets the drives property value. The collection of drives (document libraries) under this site.
     * @return array<Drive>|null
    */
    public function getDrives(): ?array {
        $val = $this->getBackingStore()->get('drives');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Drive::class);
            /** @var array<Drive>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'drives'");
    }

    /**
     * Gets the externalColumns property value. The collection of column definitions available in the site that are referenced from the sites in the parent hierarchy of the current site.
     * @return array<ColumnDefinition>|null
    */
    public function getExternalColumns(): ?array {
        $val = $this->getBackingStore()->get('externalColumns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ColumnDefinition::class);
            /** @var array<ColumnDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalColumns'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'analytics' => fn(ParseNode $n) => $o->setAnalytics($n->getObjectValue([ItemAnalytics::class, 'createFromDiscriminatorValue'])),
            'columns' => fn(ParseNode $n) => $o->setColumns($n->getCollectionOfObjectValues([ColumnDefinition::class, 'createFromDiscriminatorValue'])),
            'contentTypes' => fn(ParseNode $n) => $o->setContentTypes($n->getCollectionOfObjectValues([ContentType::class, 'createFromDiscriminatorValue'])),
            'deleted' => fn(ParseNode $n) => $o->setDeleted($n->getObjectValue([Deleted::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'drive' => fn(ParseNode $n) => $o->setDrive($n->getObjectValue([Drive::class, 'createFromDiscriminatorValue'])),
            'drives' => fn(ParseNode $n) => $o->setDrives($n->getCollectionOfObjectValues([Drive::class, 'createFromDiscriminatorValue'])),
            'externalColumns' => fn(ParseNode $n) => $o->setExternalColumns($n->getCollectionOfObjectValues([ColumnDefinition::class, 'createFromDiscriminatorValue'])),
            'informationProtection' => fn(ParseNode $n) => $o->setInformationProtection($n->getObjectValue([InformationProtection::class, 'createFromDiscriminatorValue'])),
            'isPersonalSite' => fn(ParseNode $n) => $o->setIsPersonalSite($n->getBooleanValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([BaseItem::class, 'createFromDiscriminatorValue'])),
            'lists' => fn(ParseNode $n) => $o->setLists($n->getCollectionOfObjectValues([EscapedList::class, 'createFromDiscriminatorValue'])),
            'onenote' => fn(ParseNode $n) => $o->setOnenote($n->getObjectValue([Onenote::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([RichLongRunningOperation::class, 'createFromDiscriminatorValue'])),
            'pages' => fn(ParseNode $n) => $o->setPages($n->getCollectionOfObjectValues([BaseSitePage::class, 'createFromDiscriminatorValue'])),
            'permissions' => fn(ParseNode $n) => $o->setPermissions($n->getCollectionOfObjectValues([Permission::class, 'createFromDiscriminatorValue'])),
            'recycleBin' => fn(ParseNode $n) => $o->setRecycleBin($n->getObjectValue([RecycleBin::class, 'createFromDiscriminatorValue'])),
            'root' => fn(ParseNode $n) => $o->setRoot($n->getObjectValue([Root::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([SiteSettings::class, 'createFromDiscriminatorValue'])),
            'sharepointIds' => fn(ParseNode $n) => $o->setSharepointIds($n->getObjectValue([SharepointIds::class, 'createFromDiscriminatorValue'])),
            'siteCollection' => fn(ParseNode $n) => $o->setSiteCollection($n->getObjectValue([SiteCollection::class, 'createFromDiscriminatorValue'])),
            'sites' => fn(ParseNode $n) => $o->setSites($n->getCollectionOfObjectValues([Site::class, 'createFromDiscriminatorValue'])),
            'termStore' => fn(ParseNode $n) => $o->setTermStore($n->getObjectValue([Store::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the informationProtection property value. The informationProtection property
     * @return InformationProtection|null
    */
    public function getInformationProtection(): ?InformationProtection {
        $val = $this->getBackingStore()->get('informationProtection');
        if (is_null($val) || $val instanceof InformationProtection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'informationProtection'");
    }

    /**
     * Gets the isPersonalSite property value. The isPersonalSite property
     * @return bool|null
    */
    public function getIsPersonalSite(): ?bool {
        $val = $this->getBackingStore()->get('isPersonalSite');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPersonalSite'");
    }

    /**
     * Gets the items property value. Used to address any item contained in this site. This collection cannot be enumerated.
     * @return array<BaseItem>|null
    */
    public function getItems(): ?array {
        $val = $this->getBackingStore()->get('items');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BaseItem::class);
            /** @var array<BaseItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'items'");
    }

    /**
     * Gets the lists property value. The collection of lists under this site.
     * @return array<EscapedList>|null
    */
    public function getLists(): ?array {
        $val = $this->getBackingStore()->get('lists');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EscapedList::class);
            /** @var array<EscapedList>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lists'");
    }

    /**
     * Gets the onenote property value. The onenote property
     * @return Onenote|null
    */
    public function getOnenote(): ?Onenote {
        $val = $this->getBackingStore()->get('onenote');
        if (is_null($val) || $val instanceof Onenote) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onenote'");
    }

    /**
     * Gets the operations property value. The collection of long running operations for the site.
     * @return array<RichLongRunningOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RichLongRunningOperation::class);
            /** @var array<RichLongRunningOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Gets the pages property value. The collection of pages in the baseSitePages list in this site.
     * @return array<BaseSitePage>|null
    */
    public function getPages(): ?array {
        $val = $this->getBackingStore()->get('pages');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BaseSitePage::class);
            /** @var array<BaseSitePage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pages'");
    }

    /**
     * Gets the permissions property value. The permissions associated with the site. Nullable.
     * @return array<Permission>|null
    */
    public function getPermissions(): ?array {
        $val = $this->getBackingStore()->get('permissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Permission::class);
            /** @var array<Permission>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissions'");
    }

    /**
     * Gets the recycleBin property value. The collection of recycleBinItems under this site.
     * @return RecycleBin|null
    */
    public function getRecycleBin(): ?RecycleBin {
        $val = $this->getBackingStore()->get('recycleBin');
        if (is_null($val) || $val instanceof RecycleBin) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recycleBin'");
    }

    /**
     * Gets the root property value. If present, indicates that this is the root site in the site collection. Read-only.
     * @return Root|null
    */
    public function getRoot(): ?Root {
        $val = $this->getBackingStore()->get('root');
        if (is_null($val) || $val instanceof Root) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'root'");
    }

    /**
     * Gets the settings property value. The settings on this site. Read-only.
     * @return SiteSettings|null
    */
    public function getSettings(): ?SiteSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof SiteSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @return SharepointIds|null
    */
    public function getSharepointIds(): ?SharepointIds {
        $val = $this->getBackingStore()->get('sharepointIds');
        if (is_null($val) || $val instanceof SharepointIds) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharepointIds'");
    }

    /**
     * Gets the siteCollection property value. Provides details about the site's site collection. Available only on the root site. Read-only.
     * @return SiteCollection|null
    */
    public function getSiteCollection(): ?SiteCollection {
        $val = $this->getBackingStore()->get('siteCollection');
        if (is_null($val) || $val instanceof SiteCollection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteCollection'");
    }

    /**
     * Gets the sites property value. The collection of the sub-sites under this site.
     * @return array<Site>|null
    */
    public function getSites(): ?array {
        $val = $this->getBackingStore()->get('sites');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Site::class);
            /** @var array<Site>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sites'");
    }

    /**
     * Gets the termStore property value. The termStore under this site.
     * @return Store|null
    */
    public function getTermStore(): ?Store {
        $val = $this->getBackingStore()->get('termStore');
        if (is_null($val) || $val instanceof Store) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'termStore'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('analytics', $this->getAnalytics());
        $writer->writeCollectionOfObjectValues('columns', $this->getColumns());
        $writer->writeCollectionOfObjectValues('contentTypes', $this->getContentTypes());
        $writer->writeObjectValue('deleted', $this->getDeleted());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('drive', $this->getDrive());
        $writer->writeCollectionOfObjectValues('drives', $this->getDrives());
        $writer->writeCollectionOfObjectValues('externalColumns', $this->getExternalColumns());
        $writer->writeObjectValue('informationProtection', $this->getInformationProtection());
        $writer->writeBooleanValue('isPersonalSite', $this->getIsPersonalSite());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeCollectionOfObjectValues('lists', $this->getLists());
        $writer->writeObjectValue('onenote', $this->getOnenote());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('pages', $this->getPages());
        $writer->writeCollectionOfObjectValues('permissions', $this->getPermissions());
        $writer->writeObjectValue('recycleBin', $this->getRecycleBin());
        $writer->writeObjectValue('root', $this->getRoot());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeObjectValue('sharepointIds', $this->getSharepointIds());
        $writer->writeObjectValue('siteCollection', $this->getSiteCollection());
        $writer->writeCollectionOfObjectValues('sites', $this->getSites());
        $writer->writeObjectValue('termStore', $this->getTermStore());
    }

    /**
     * Sets the analytics property value. Analytics about the view activities that took place in this site.
     * @param ItemAnalytics|null $value Value to set for the analytics property.
    */
    public function setAnalytics(?ItemAnalytics $value): void {
        $this->getBackingStore()->set('analytics', $value);
    }

    /**
     * Sets the columns property value. The collection of column definitions reusable across lists under this site.
     * @param array<ColumnDefinition>|null $value Value to set for the columns property.
    */
    public function setColumns(?array $value): void {
        $this->getBackingStore()->set('columns', $value);
    }

    /**
     * Sets the contentTypes property value. The collection of content types defined for this site.
     * @param array<ContentType>|null $value Value to set for the contentTypes property.
    */
    public function setContentTypes(?array $value): void {
        $this->getBackingStore()->set('contentTypes', $value);
    }

    /**
     * Sets the deleted property value. The deleted property
     * @param Deleted|null $value Value to set for the deleted property.
    */
    public function setDeleted(?Deleted $value): void {
        $this->getBackingStore()->set('deleted', $value);
    }

    /**
     * Sets the displayName property value. The full title for the site. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the drive property value. The default drive (document library) for this site.
     * @param Drive|null $value Value to set for the drive property.
    */
    public function setDrive(?Drive $value): void {
        $this->getBackingStore()->set('drive', $value);
    }

    /**
     * Sets the drives property value. The collection of drives (document libraries) under this site.
     * @param array<Drive>|null $value Value to set for the drives property.
    */
    public function setDrives(?array $value): void {
        $this->getBackingStore()->set('drives', $value);
    }

    /**
     * Sets the externalColumns property value. The collection of column definitions available in the site that are referenced from the sites in the parent hierarchy of the current site.
     * @param array<ColumnDefinition>|null $value Value to set for the externalColumns property.
    */
    public function setExternalColumns(?array $value): void {
        $this->getBackingStore()->set('externalColumns', $value);
    }

    /**
     * Sets the informationProtection property value. The informationProtection property
     * @param InformationProtection|null $value Value to set for the informationProtection property.
    */
    public function setInformationProtection(?InformationProtection $value): void {
        $this->getBackingStore()->set('informationProtection', $value);
    }

    /**
     * Sets the isPersonalSite property value. The isPersonalSite property
     * @param bool|null $value Value to set for the isPersonalSite property.
    */
    public function setIsPersonalSite(?bool $value): void {
        $this->getBackingStore()->set('isPersonalSite', $value);
    }

    /**
     * Sets the items property value. Used to address any item contained in this site. This collection cannot be enumerated.
     * @param array<BaseItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the lists property value. The collection of lists under this site.
     * @param array<EscapedList>|null $value Value to set for the lists property.
    */
    public function setLists(?array $value): void {
        $this->getBackingStore()->set('lists', $value);
    }

    /**
     * Sets the onenote property value. The onenote property
     * @param Onenote|null $value Value to set for the onenote property.
    */
    public function setOnenote(?Onenote $value): void {
        $this->getBackingStore()->set('onenote', $value);
    }

    /**
     * Sets the operations property value. The collection of long running operations for the site.
     * @param array<RichLongRunningOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the pages property value. The collection of pages in the baseSitePages list in this site.
     * @param array<BaseSitePage>|null $value Value to set for the pages property.
    */
    public function setPages(?array $value): void {
        $this->getBackingStore()->set('pages', $value);
    }

    /**
     * Sets the permissions property value. The permissions associated with the site. Nullable.
     * @param array<Permission>|null $value Value to set for the permissions property.
    */
    public function setPermissions(?array $value): void {
        $this->getBackingStore()->set('permissions', $value);
    }

    /**
     * Sets the recycleBin property value. The collection of recycleBinItems under this site.
     * @param RecycleBin|null $value Value to set for the recycleBin property.
    */
    public function setRecycleBin(?RecycleBin $value): void {
        $this->getBackingStore()->set('recycleBin', $value);
    }

    /**
     * Sets the root property value. If present, indicates that this is the root site in the site collection. Read-only.
     * @param Root|null $value Value to set for the root property.
    */
    public function setRoot(?Root $value): void {
        $this->getBackingStore()->set('root', $value);
    }

    /**
     * Sets the settings property value. The settings on this site. Read-only.
     * @param SiteSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?SiteSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the sharepointIds property value. Returns identifiers useful for SharePoint REST compatibility. Read-only.
     * @param SharepointIds|null $value Value to set for the sharepointIds property.
    */
    public function setSharepointIds(?SharepointIds $value): void {
        $this->getBackingStore()->set('sharepointIds', $value);
    }

    /**
     * Sets the siteCollection property value. Provides details about the site's site collection. Available only on the root site. Read-only.
     * @param SiteCollection|null $value Value to set for the siteCollection property.
    */
    public function setSiteCollection(?SiteCollection $value): void {
        $this->getBackingStore()->set('siteCollection', $value);
    }

    /**
     * Sets the sites property value. The collection of the sub-sites under this site.
     * @param array<Site>|null $value Value to set for the sites property.
    */
    public function setSites(?array $value): void {
        $this->getBackingStore()->set('sites', $value);
    }

    /**
     * Sets the termStore property value. The termStore under this site.
     * @param Store|null $value Value to set for the termStore property.
    */
    public function setTermStore(?Store $value): void {
        $this->getBackingStore()->set('termStore', $value);
    }

}
