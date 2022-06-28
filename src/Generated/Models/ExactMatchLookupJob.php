<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchLookupJob extends ExactMatchJobBase implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<LookupResultRow>|null $matchingRows The matchingRows property
    */
    private ?array $matchingRows = null;
    
    /**
     * @var string|null $state The state property
    */
    private ?string $state = null;
    
    /**
     * Instantiates a new ExactMatchLookupJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'matchingRows' => function (ParseNode $n) use ($o) { $o->setMatchingRows($n->getCollectionOfObjectValues(array(LookupResultRow::class, 'createFromDiscriminatorValue'))); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the matchingRows property value. The matchingRows property
     * @return array<LookupResultRow>|null
    */
    public function getMatchingRows(): ?array {
        return $this->matchingRows;
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('matchingRows', $this->matchingRows);
        $writer->writeStringValue('state', $this->state);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the matchingRows property value. The matchingRows property
     *  @param array<LookupResultRow>|null $value Value to set for the matchingRows property.
    */
    public function setMatchingRows(?array $value ): void {
        $this->matchingRows = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

}
