<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Product extends Entity implements Parsable 
{
    /**
     * Instantiates a new Product and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Product
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Product {
        return new Product();
    }

    /**
     * Gets the editions property value. Represents an edition of a particular Windows product.
     * @return array<Edition>|null
    */
    public function getEditions(): ?array {
        $val = $this->getBackingStore()->get('editions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Edition::class);
            /** @var array<Edition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'editions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'editions' => fn(ParseNode $n) => $o->setEditions($n->getCollectionOfObjectValues([Edition::class, 'createFromDiscriminatorValue'])),
            'friendlyNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setFriendlyNames($val);
            },
            'groupName' => fn(ParseNode $n) => $o->setGroupName($n->getStringValue()),
            'knownIssues' => fn(ParseNode $n) => $o->setKnownIssues($n->getCollectionOfObjectValues([KnownIssue::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'revisions' => fn(ParseNode $n) => $o->setRevisions($n->getCollectionOfObjectValues([ProductRevision::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the friendlyNames property value. The friendly names of the product. For example, Version 22H2 (OS build 22621). Read-only.
     * @return array<string>|null
    */
    public function getFriendlyNames(): ?array {
        $val = $this->getBackingStore()->get('friendlyNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'friendlyNames'");
    }

    /**
     * Gets the groupName property value. The name of the product group. For example, Windows 11. Read-only.
     * @return string|null
    */
    public function getGroupName(): ?string {
        $val = $this->getBackingStore()->get('groupName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupName'");
    }

    /**
     * Gets the knownIssues property value. Represents a known issue related to a Windows product.
     * @return array<KnownIssue>|null
    */
    public function getKnownIssues(): ?array {
        $val = $this->getBackingStore()->get('knownIssues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KnownIssue::class);
            /** @var array<KnownIssue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'knownIssues'");
    }

    /**
     * Gets the name property value. The name of the product. For example, Windows 11, version 22H2. Read-only.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the revisions property value. Represents a product revision.
     * @return array<ProductRevision>|null
    */
    public function getRevisions(): ?array {
        $val = $this->getBackingStore()->get('revisions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProductRevision::class);
            /** @var array<ProductRevision>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'revisions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('editions', $this->getEditions());
        $writer->writeCollectionOfPrimitiveValues('friendlyNames', $this->getFriendlyNames());
        $writer->writeStringValue('groupName', $this->getGroupName());
        $writer->writeCollectionOfObjectValues('knownIssues', $this->getKnownIssues());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeCollectionOfObjectValues('revisions', $this->getRevisions());
    }

    /**
     * Sets the editions property value. Represents an edition of a particular Windows product.
     * @param array<Edition>|null $value Value to set for the editions property.
    */
    public function setEditions(?array $value): void {
        $this->getBackingStore()->set('editions', $value);
    }

    /**
     * Sets the friendlyNames property value. The friendly names of the product. For example, Version 22H2 (OS build 22621). Read-only.
     * @param array<string>|null $value Value to set for the friendlyNames property.
    */
    public function setFriendlyNames(?array $value): void {
        $this->getBackingStore()->set('friendlyNames', $value);
    }

    /**
     * Sets the groupName property value. The name of the product group. For example, Windows 11. Read-only.
     * @param string|null $value Value to set for the groupName property.
    */
    public function setGroupName(?string $value): void {
        $this->getBackingStore()->set('groupName', $value);
    }

    /**
     * Sets the knownIssues property value. Represents a known issue related to a Windows product.
     * @param array<KnownIssue>|null $value Value to set for the knownIssues property.
    */
    public function setKnownIssues(?array $value): void {
        $this->getBackingStore()->set('knownIssues', $value);
    }

    /**
     * Sets the name property value. The name of the product. For example, Windows 11, version 22H2. Read-only.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the revisions property value. Represents a product revision.
     * @param array<ProductRevision>|null $value Value to set for the revisions property.
    */
    public function setRevisions(?array $value): void {
        $this->getBackingStore()->set('revisions', $value);
    }

}
