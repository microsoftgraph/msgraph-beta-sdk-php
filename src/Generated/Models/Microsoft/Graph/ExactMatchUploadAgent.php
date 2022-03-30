<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExactMatchUploadAgent extends Entity 
{
    /** @var DateTime|null $creationDateTime  */
    private ?DateTime $creationDateTime = null;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /**
     * Instantiates a new exactMatchUploadAgent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExactMatchUploadAgent
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ExactMatchUploadAgent {
        return new ExactMatchUploadAgent();
    }

    /**
     * Gets the creationDateTime property value. 
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->creationDateTime;
    }

    /**
     * Gets the description property value. 
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'creationDateTime' => function (self $o, ParseNode $n) { $o->setCreationDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('creationDateTime', $this->creationDateTime);
        $writer->writeStringValue('description', $this->description);
    }

    /**
     * Sets the creationDateTime property value. 
     *  @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value ): void {
        $this->creationDateTime = $value;
    }

    /**
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

}
