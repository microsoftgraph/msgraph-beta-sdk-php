<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Catalog extends Entity 
{
    /** @var array<CatalogEntry>|null $entries Lists the content that you can approve for deployment. Read-only. */
    private ?array $entries = null;
    
    /**
     * Instantiates a new catalog and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Catalog
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Catalog {
        return new Catalog();
    }

    /**
     * Gets the entries property value. Lists the content that you can approve for deployment. Read-only.
     * @return array<CatalogEntry>|null
    */
    public function getEntries(): ?array {
        return $this->entries;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'entries' => function (self $o, ParseNode $n) { $o->setEntries($n->getCollectionOfObjectValues(CatalogEntry::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('entries', $this->entries);
    }

    /**
     * Sets the entries property value. Lists the content that you can approve for deployment. Read-only.
     *  @param array<CatalogEntry>|null $value Value to set for the entries property.
    */
    public function setEntries(?array $value ): void {
        $this->entries = $value;
    }

}
