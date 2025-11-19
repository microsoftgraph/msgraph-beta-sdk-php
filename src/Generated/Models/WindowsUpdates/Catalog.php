<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates;

use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Catalog extends Entity implements Parsable 
{
    /**
     * Instantiates a new Catalog and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Catalog
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Catalog {
        return new Catalog();
    }

    /**
     * Gets the entries property value. Lists the content that you can approve for deployment. Read-only.
     * @return array<CatalogEntry>|null
    */
    public function getEntries(): ?array {
        $val = $this->getBackingStore()->get('entries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CatalogEntry::class);
            /** @var array<CatalogEntry>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entries'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'entries' => fn(ParseNode $n) => $o->setEntries($n->getCollectionOfObjectValues([CatalogEntry::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('entries', $this->getEntries());
    }

    /**
     * Sets the entries property value. Lists the content that you can approve for deployment. Read-only.
     * @param array<CatalogEntry>|null $value Value to set for the entries property.
    */
    public function setEntries(?array $value): void {
        $this->getBackingStore()->set('entries', $value);
    }

}
