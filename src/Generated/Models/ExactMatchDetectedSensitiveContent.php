<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchDetectedSensitiveContent extends DetectedSensitiveContentBase implements Parsable 
{
    /**
     * @var array<SensitiveContentLocation>|null $matches The matches property
    */
    private ?array $matches = null;
    
    /**
     * Instantiates a new ExactMatchDetectedSensitiveContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.exactMatchDetectedSensitiveContent');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'matches' => function (ParseNode $n) use ($o) { $o->setMatches($n->getCollectionOfObjectValues(array(SensitiveContentLocation::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the matches property value. The matches property
     * @return array<SensitiveContentLocation>|null
    */
    public function getMatches(): ?array {
        return $this->matches;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('matches', $this->matches);
    }

    /**
     * Sets the matches property value. The matches property
     *  @param array<SensitiveContentLocation>|null $value Value to set for the matches property.
    */
    public function setMatches(?array $value ): void {
        $this->matches = $value;
    }

}
