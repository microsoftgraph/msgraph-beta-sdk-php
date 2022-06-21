<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Dimension extends Entity implements Parsable 
{
    /**
     * @var string|null $code The code property
    */
    private ?string $code = null;
    
    /**
     * @var array<DimensionValue>|null $dimensionValues The dimensionValues property
    */
    private ?array $dimensionValues = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The lastModifiedDateTime property
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * Instantiates a new dimension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Dimension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Dimension {
        return new Dimension();
    }

    /**
     * Gets the code property value. The code property
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Gets the dimensionValues property value. The dimensionValues property
     * @return array<DimensionValue>|null
    */
    public function getDimensionValues(): ?array {
        return $this->dimensionValues;
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
            'code' => function (ParseNode $n) use ($o) { $o->setCode($n->getStringValue()); },
            'dimensionValues' => function (ParseNode $n) use ($o) { $o->setDimensionValues($n->getCollectionOfObjectValues(array(DimensionValue::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('code', $this->code);
        $writer->writeCollectionOfObjectValues('dimensionValues', $this->dimensionValues);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
    }

    /**
     * Sets the code property value. The code property
     *  @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the dimensionValues property value. The dimensionValues property
     *  @param array<DimensionValue>|null $value Value to set for the dimensionValues property.
    */
    public function setDimensionValues(?array $value ): void {
        $this->dimensionValues = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

}
