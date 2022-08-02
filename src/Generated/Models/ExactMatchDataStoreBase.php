<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchDataStoreBase extends Entity implements Parsable 
{
    /**
     * @var array<ExactDataMatchStoreColumn>|null $columns The columns property
    */
    private ?array $columns = null;
    
    /**
     * @var DateTime|null $dataLastUpdatedDateTime The dataLastUpdatedDateTime property
    */
    private ?DateTime $dataLastUpdatedDateTime = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * Instantiates a new exactMatchDataStoreBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.exactMatchDataStoreBase');
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
        return $this->columns;
    }

    /**
     * Gets the dataLastUpdatedDateTime property value. The dataLastUpdatedDateTime property
     * @return DateTime|null
    */
    public function getDataLastUpdatedDateTime(): ?DateTime {
        return $this->dataLastUpdatedDateTime;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'columns' => function (ParseNode $n) use ($o) { $o->setColumns($n->getCollectionOfObjectValues(array(ExactDataMatchStoreColumn::class, 'createFromDiscriminatorValue'))); },
            'dataLastUpdatedDateTime' => function (ParseNode $n) use ($o) { $o->setDataLastUpdatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('columns', $this->columns);
        $writer->writeDateTimeValue('dataLastUpdatedDateTime', $this->dataLastUpdatedDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
    }

    /**
     * Sets the columns property value. The columns property
     *  @param array<ExactDataMatchStoreColumn>|null $value Value to set for the columns property.
    */
    public function setColumns(?array $value ): void {
        $this->columns = $value;
    }

    /**
     * Sets the dataLastUpdatedDateTime property value. The dataLastUpdatedDateTime property
     *  @param DateTime|null $value Value to set for the dataLastUpdatedDateTime property.
    */
    public function setDataLastUpdatedDateTime(?DateTime $value ): void {
        $this->dataLastUpdatedDateTime = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

}
