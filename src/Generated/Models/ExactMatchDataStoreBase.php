<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('columns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExactDataMatchStoreColumn::class);
            /** @var array<ExactDataMatchStoreColumn>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'columns'");
    }

    /**
     * Gets the dataLastUpdatedDateTime property value. The dataLastUpdatedDateTime property
     * @return DateTime|null
    */
    public function getDataLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('dataLastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataLastUpdatedDateTime'");
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
