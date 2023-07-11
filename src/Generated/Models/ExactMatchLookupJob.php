<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ExactMatchLookupJob extends ExactMatchJobBase implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new exactMatchLookupJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.exactMatchLookupJob');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExactMatchLookupJob
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExactMatchLookupJob {
        return new ExactMatchLookupJob();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'matchingRows' => fn(ParseNode $n) => $o->setMatchingRows($n->getCollectionOfObjectValues([LookupResultRow::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
        ]);
    }

    /**
     * Gets the matchingRows property value. The matchingRows property
     * @return array<LookupResultRow>|null
    */
    public function getMatchingRows(): ?array {
        $val = $this->getBackingStore()->get('matchingRows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LookupResultRow::class);
            /** @var array<LookupResultRow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchingRows'");
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('matchingRows', $this->getMatchingRows());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('state', $this->getState());
    }

    /**
     * Sets the matchingRows property value. The matchingRows property
     * @param array<LookupResultRow>|null $value Value to set for the matchingRows property.
    */
    public function setMatchingRows(?array $value): void {
        $this->getBackingStore()->set('matchingRows', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
