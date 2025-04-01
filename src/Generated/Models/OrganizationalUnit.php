<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OrganizationalUnit extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new OrganizationalUnit and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.organizationalUnit');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalUnit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalUnit {
        return new OrganizationalUnit();
    }

    /**
     * Gets the children property value. The children property
     * @return array<OrganizationalUnit>|null
    */
    public function getChildren(): ?array {
        $val = $this->getBackingStore()->get('children');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OrganizationalUnit::class);
            /** @var array<OrganizationalUnit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'children'");
    }

    /**
     * Gets the description property value. The description property
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
     * Gets the displayName property value. The displayName property
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
            'children' => fn(ParseNode $n) => $o->setChildren($n->getCollectionOfObjectValues([OrganizationalUnit::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'organizationalUnitParent' => fn(ParseNode $n) => $o->setOrganizationalUnitParent($n->getObjectValue([OrganizationalUnit::class, 'createFromDiscriminatorValue'])),
            'resources' => fn(ParseNode $n) => $o->setResources($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'transitiveChildren' => fn(ParseNode $n) => $o->setTransitiveChildren($n->getCollectionOfObjectValues([OrganizationalUnit::class, 'createFromDiscriminatorValue'])),
            'transitiveResources' => fn(ParseNode $n) => $o->setTransitiveResources($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the organizationalUnitParent property value. The organizationalUnitParent property
     * @return OrganizationalUnit|null
    */
    public function getOrganizationalUnitParent(): ?OrganizationalUnit {
        $val = $this->getBackingStore()->get('organizationalUnitParent');
        if (is_null($val) || $val instanceof OrganizationalUnit) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationalUnitParent'");
    }

    /**
     * Gets the resources property value. The resources property
     * @return array<DirectoryObject>|null
    */
    public function getResources(): ?array {
        $val = $this->getBackingStore()->get('resources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resources'");
    }

    /**
     * Gets the transitiveChildren property value. The transitiveChildren property
     * @return array<OrganizationalUnit>|null
    */
    public function getTransitiveChildren(): ?array {
        $val = $this->getBackingStore()->get('transitiveChildren');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OrganizationalUnit::class);
            /** @var array<OrganizationalUnit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transitiveChildren'");
    }

    /**
     * Gets the transitiveResources property value. The transitiveResources property
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveResources(): ?array {
        $val = $this->getBackingStore()->get('transitiveResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transitiveResources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('children', $this->getChildren());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('organizationalUnitParent', $this->getOrganizationalUnitParent());
        $writer->writeCollectionOfObjectValues('resources', $this->getResources());
        $writer->writeCollectionOfObjectValues('transitiveChildren', $this->getTransitiveChildren());
        $writer->writeCollectionOfObjectValues('transitiveResources', $this->getTransitiveResources());
    }

    /**
     * Sets the children property value. The children property
     * @param array<OrganizationalUnit>|null $value Value to set for the children property.
    */
    public function setChildren(?array $value): void {
        $this->getBackingStore()->set('children', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the organizationalUnitParent property value. The organizationalUnitParent property
     * @param OrganizationalUnit|null $value Value to set for the organizationalUnitParent property.
    */
    public function setOrganizationalUnitParent(?OrganizationalUnit $value): void {
        $this->getBackingStore()->set('organizationalUnitParent', $value);
    }

    /**
     * Sets the resources property value. The resources property
     * @param array<DirectoryObject>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

    /**
     * Sets the transitiveChildren property value. The transitiveChildren property
     * @param array<OrganizationalUnit>|null $value Value to set for the transitiveChildren property.
    */
    public function setTransitiveChildren(?array $value): void {
        $this->getBackingStore()->set('transitiveChildren', $value);
    }

    /**
     * Sets the transitiveResources property value. The transitiveResources property
     * @param array<DirectoryObject>|null $value Value to set for the transitiveResources property.
    */
    public function setTransitiveResources(?array $value): void {
        $this->getBackingStore()->set('transitiveResources', $value);
    }

}
