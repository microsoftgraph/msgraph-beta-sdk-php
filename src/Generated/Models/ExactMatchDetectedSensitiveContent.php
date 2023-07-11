<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ExactMatchDetectedSensitiveContent extends DetectedSensitiveContentBase implements Parsable 
{
    /**
     * Instantiates a new exactMatchDetectedSensitiveContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExactMatchDetectedSensitiveContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExactMatchDetectedSensitiveContent {
        return new ExactMatchDetectedSensitiveContent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'matches' => fn(ParseNode $n) => $o->setMatches($n->getCollectionOfObjectValues([SensitiveContentLocation::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the matches property value. The matches property
     * @return array<SensitiveContentLocation>|null
    */
    public function getMatches(): ?array {
        $val = $this->getBackingStore()->get('matches');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SensitiveContentLocation::class);
            /** @var array<SensitiveContentLocation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matches'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('matches', $this->getMatches());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the matches property value. The matches property
     * @param array<SensitiveContentLocation>|null $value Value to set for the matches property.
    */
    public function setMatches(?array $value): void {
        $this->getBackingStore()->set('matches', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
