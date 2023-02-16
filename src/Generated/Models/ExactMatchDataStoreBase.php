<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchDataStoreBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new exactMatchDataStoreBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExactMatchDataStoreBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExactMatchDataStoreBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.exactMatchDataStore': return new ExactMatchDataStore();
            }
        }
        return new ExactMatchDataStoreBase();
    }

    /**
     * Gets the columns property value. The columns property
     * @return array<ExactDataMatchStoreColumn>|null
    */
    public function getColumns(): ?array {
        return $this->getBackingStore()->get('columns');
    }

    /**
     * Gets the dataLastUpdatedDateTime property value. The dataLastUpdatedDateTime property
     * @return DateTime|null
    */
    public function getDataLastUpdatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('dataLastUpdatedDateTime');
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'columns' => fn(ParseNode $n) => $o->setColumns($n->getCollectionOfObjectValues([ExactDataMatchStoreColumn::class, 'createFromDiscriminatorValue'])),
            'dataLastUpdatedDateTime' => fn(ParseNode $n) => $o->setDataLastUpdatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('columns', $this->getColumns());
        $writer->writeDateTimeValue('dataLastUpdatedDateTime', $this->getDataLastUpdatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
    }

    /**
     * Sets the columns property value. The columns property
     * @param array<ExactDataMatchStoreColumn>|null $value Value to set for the columns property.
    */
    public function setColumns(?array $value): void {
        $this->getBackingStore()->set('columns', $value);
    }

    /**
     * Sets the dataLastUpdatedDateTime property value. The dataLastUpdatedDateTime property
     * @param DateTime|null $value Value to set for the dataLastUpdatedDateTime property.
    */
    public function setDataLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dataLastUpdatedDateTime', $value);
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

}
