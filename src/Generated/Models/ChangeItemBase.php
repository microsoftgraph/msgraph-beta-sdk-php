<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ChangeItemBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new ChangeItemBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChangeItemBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChangeItemBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.announcement': return new Announcement();
                case '#microsoft.graph.roadmap': return new Roadmap();
            }
        }
        return new ChangeItemBase();
    }

    /**
     * Gets the changeItemService property value. Specifies the Microsoft Entra service name to which this item belongs. Supports $filter (eq, ne, in) and $orderby.
     * @return string|null
    */
    public function getChangeItemService(): ?string {
        $val = $this->getBackingStore()->get('changeItemService');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'changeItemService'");
    }

    /**
     * Gets the description property value. Description of the new feature or change announcement. Supports $filter (eq, ne, in, startswith) and $orderby.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the documentationUrls property value. Link to the feature or change documentation. Supports $filter (any with eq).
     * @return array<string>|null
    */
    public function getDocumentationUrls(): ?array {
        $val = $this->getBackingStore()->get('documentationUrls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentationUrls'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'changeItemService' => fn(ParseNode $n) => $o->setChangeItemService($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'documentationUrls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDocumentationUrls($val);
            },
            'shortDescription' => fn(ParseNode $n) => $o->setShortDescription($n->getStringValue()),
            'systemTags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSystemTags($val);
            },
            'tags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTags($val);
            },
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the shortDescription property value. A short description of the feature or change. Supports $filter (eq, ne, in, startswith) and $orderby.
     * @return string|null
    */
    public function getShortDescription(): ?string {
        $val = $this->getBackingStore()->get('shortDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shortDescription'");
    }

    /**
     * Gets the systemTags property value. Microsoft Entra-specific tags. Example values: Top announcement - entraroadmaphighlightproductnews, New release highlight - entraroadmaphighlightnewfeature. Supports $filter (any with eq).
     * @return array<string>|null
    */
    public function getSystemTags(): ?array {
        $val = $this->getBackingStore()->get('systemTags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemTags'");
    }

    /**
     * Gets the tags property value. Identity and Access Management (IAM) related tags. Example values: External Identities, Reliability and Resilience. Supports $filter (any with eq).
     * @return array<string>|null
    */
    public function getTags(): ?array {
        $val = $this->getBackingStore()->get('tags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Gets the title property value. Title of the feature or change. Supports $filter (eq, ne, in, startswith) and $orderby.
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('changeItemService', $this->getChangeItemService());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfPrimitiveValues('documentationUrls', $this->getDocumentationUrls());
        $writer->writeStringValue('shortDescription', $this->getShortDescription());
        $writer->writeCollectionOfPrimitiveValues('systemTags', $this->getSystemTags());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the changeItemService property value. Specifies the Microsoft Entra service name to which this item belongs. Supports $filter (eq, ne, in) and $orderby.
     * @param string|null $value Value to set for the changeItemService property.
    */
    public function setChangeItemService(?string $value): void {
        $this->getBackingStore()->set('changeItemService', $value);
    }

    /**
     * Sets the description property value. Description of the new feature or change announcement. Supports $filter (eq, ne, in, startswith) and $orderby.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the documentationUrls property value. Link to the feature or change documentation. Supports $filter (any with eq).
     * @param array<string>|null $value Value to set for the documentationUrls property.
    */
    public function setDocumentationUrls(?array $value): void {
        $this->getBackingStore()->set('documentationUrls', $value);
    }

    /**
     * Sets the shortDescription property value. A short description of the feature or change. Supports $filter (eq, ne, in, startswith) and $orderby.
     * @param string|null $value Value to set for the shortDescription property.
    */
    public function setShortDescription(?string $value): void {
        $this->getBackingStore()->set('shortDescription', $value);
    }

    /**
     * Sets the systemTags property value. Microsoft Entra-specific tags. Example values: Top announcement - entraroadmaphighlightproductnews, New release highlight - entraroadmaphighlightnewfeature. Supports $filter (any with eq).
     * @param array<string>|null $value Value to set for the systemTags property.
    */
    public function setSystemTags(?array $value): void {
        $this->getBackingStore()->set('systemTags', $value);
    }

    /**
     * Sets the tags property value. Identity and Access Management (IAM) related tags. Example values: External Identities, Reliability and Resilience. Supports $filter (any with eq).
     * @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the title property value. Title of the feature or change. Supports $filter (eq, ne, in, startswith) and $orderby.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
