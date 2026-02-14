<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RecoveryUpdateCatalogEntry extends SoftwareUpdateCatalogEntry implements Parsable 
{
    /**
     * Instantiates a new RecoveryUpdateCatalogEntry and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.recoveryUpdateCatalogEntry');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecoveryUpdateCatalogEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecoveryUpdateCatalogEntry {
        return new RecoveryUpdateCatalogEntry();
    }

    /**
     * Gets the catalogName property value. The catalog name. Read-only.
     * @return string|null
    */
    public function getCatalogName(): ?string {
        $val = $this->getBackingStore()->get('catalogName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'catalogName' => fn(ParseNode $n) => $o->setCatalogName($n->getStringValue()),
            'productRevisions' => fn(ParseNode $n) => $o->setProductRevisions($n->getCollectionOfObjectValues([ProductRevision::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the productRevisions property value. A collection of product revisions associated with the update.
     * @return array<ProductRevision>|null
    */
    public function getProductRevisions(): ?array {
        $val = $this->getBackingStore()->get('productRevisions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProductRevision::class);
            /** @var array<ProductRevision>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productRevisions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('catalogName', $this->getCatalogName());
        $writer->writeCollectionOfObjectValues('productRevisions', $this->getProductRevisions());
    }

    /**
     * Sets the catalogName property value. The catalog name. Read-only.
     * @param string|null $value Value to set for the catalogName property.
    */
    public function setCatalogName(?string $value): void {
        $this->getBackingStore()->set('catalogName', $value);
    }

    /**
     * Sets the productRevisions property value. A collection of product revisions associated with the update.
     * @param array<ProductRevision>|null $value Value to set for the productRevisions property.
    */
    public function setProductRevisions(?array $value): void {
        $this->getBackingStore()->set('productRevisions', $value);
    }

}
