<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MailboxFolder extends Entity implements Parsable 
{
    /**
     * Instantiates a new MailboxFolder and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailboxFolder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailboxFolder {
        return new MailboxFolder();
    }

    /**
     * Gets the childFolderCount property value. The number of immediate child folders in the current folder.
     * @return int|null
    */
    public function getChildFolderCount(): ?int {
        $val = $this->getBackingStore()->get('childFolderCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'childFolderCount'");
    }

    /**
     * Gets the childFolders property value. The collection of child folders in this folder.
     * @return array<MailboxFolder>|null
    */
    public function getChildFolders(): ?array {
        $val = $this->getBackingStore()->get('childFolders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailboxFolder::class);
            /** @var array<MailboxFolder>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'childFolders'");
    }

    /**
     * Gets the displayName property value. The display name of the folder.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'childFolderCount' => fn(ParseNode $n) => $o->setChildFolderCount($n->getIntegerValue()),
            'childFolders' => fn(ParseNode $n) => $o->setChildFolders($n->getCollectionOfObjectValues([MailboxFolder::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([MailboxItem::class, 'createFromDiscriminatorValue'])),
            'multiValueExtendedProperties' => fn(ParseNode $n) => $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues([MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'parentFolderId' => fn(ParseNode $n) => $o->setParentFolderId($n->getStringValue()),
            'parentMailboxUrl' => fn(ParseNode $n) => $o->setParentMailboxUrl($n->getStringValue()),
            'singleValueExtendedProperties' => fn(ParseNode $n) => $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues([SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'totalItemCount' => fn(ParseNode $n) => $o->setTotalItemCount($n->getIntegerValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the items property value. The collection of items in this folder.
     * @return array<MailboxItem>|null
    */
    public function getItems(): ?array {
        $val = $this->getBackingStore()->get('items');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailboxItem::class);
            /** @var array<MailboxItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'items'");
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the mailboxFolder.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('multiValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MultiValueLegacyExtendedProperty::class);
            /** @var array<MultiValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiValueExtendedProperties'");
    }

    /**
     * Gets the parentFolderId property value. The unique identifier for the parent folder of this folder.
     * @return string|null
    */
    public function getParentFolderId(): ?string {
        $val = $this->getBackingStore()->get('parentFolderId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentFolderId'");
    }

    /**
     * Gets the parentMailboxUrl property value. The routing link to the actual underlying mailbox where the folder physically resides. The folder can be accessed using GET {parentMailboxUrl}/folders/{id}, which treats the entire URL as an opaque string.  This method is especially important when auto-expanding archiving is enabled for a user's in-place archive mailbox. The user's archive content can span across multiple mailboxes in such scenarios.
     * @return string|null
    */
    public function getParentMailboxUrl(): ?string {
        $val = $this->getBackingStore()->get('parentMailboxUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentMailboxUrl'");
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the mailboxFolder.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('singleValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SingleValueLegacyExtendedProperty::class);
            /** @var array<SingleValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleValueExtendedProperties'");
    }

    /**
     * Gets the totalItemCount property value. The number of items in the folder.
     * @return int|null
    */
    public function getTotalItemCount(): ?int {
        $val = $this->getBackingStore()->get('totalItemCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalItemCount'");
    }

    /**
     * Gets the type property value. Describes the folder class type.
     * @return string|null
    */
    public function getType(): ?string {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('childFolderCount', $this->getChildFolderCount());
        $writer->writeCollectionOfObjectValues('childFolders', $this->getChildFolders());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->getMultiValueExtendedProperties());
        $writer->writeStringValue('parentFolderId', $this->getParentFolderId());
        $writer->writeStringValue('parentMailboxUrl', $this->getParentMailboxUrl());
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->getSingleValueExtendedProperties());
        $writer->writeIntegerValue('totalItemCount', $this->getTotalItemCount());
        $writer->writeStringValue('type', $this->getType());
    }

    /**
     * Sets the childFolderCount property value. The number of immediate child folders in the current folder.
     * @param int|null $value Value to set for the childFolderCount property.
    */
    public function setChildFolderCount(?int $value): void {
        $this->getBackingStore()->set('childFolderCount', $value);
    }

    /**
     * Sets the childFolders property value. The collection of child folders in this folder.
     * @param array<MailboxFolder>|null $value Value to set for the childFolders property.
    */
    public function setChildFolders(?array $value): void {
        $this->getBackingStore()->set('childFolders', $value);
    }

    /**
     * Sets the displayName property value. The display name of the folder.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the items property value. The collection of items in this folder.
     * @param array<MailboxItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the mailboxFolder.
     * @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('multiValueExtendedProperties', $value);
    }

    /**
     * Sets the parentFolderId property value. The unique identifier for the parent folder of this folder.
     * @param string|null $value Value to set for the parentFolderId property.
    */
    public function setParentFolderId(?string $value): void {
        $this->getBackingStore()->set('parentFolderId', $value);
    }

    /**
     * Sets the parentMailboxUrl property value. The routing link to the actual underlying mailbox where the folder physically resides. The folder can be accessed using GET {parentMailboxUrl}/folders/{id}, which treats the entire URL as an opaque string.  This method is especially important when auto-expanding archiving is enabled for a user's in-place archive mailbox. The user's archive content can span across multiple mailboxes in such scenarios.
     * @param string|null $value Value to set for the parentMailboxUrl property.
    */
    public function setParentMailboxUrl(?string $value): void {
        $this->getBackingStore()->set('parentMailboxUrl', $value);
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the mailboxFolder.
     * @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('singleValueExtendedProperties', $value);
    }

    /**
     * Sets the totalItemCount property value. The number of items in the folder.
     * @param int|null $value Value to set for the totalItemCount property.
    */
    public function setTotalItemCount(?int $value): void {
        $this->getBackingStore()->set('totalItemCount', $value);
    }

    /**
     * Sets the type property value. Describes the folder class type.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
