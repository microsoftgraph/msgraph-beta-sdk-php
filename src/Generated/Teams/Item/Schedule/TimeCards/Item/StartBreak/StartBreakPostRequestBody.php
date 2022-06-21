<?php

namespace Microsoft\Graph\Beta\Generated\Teams\Item\Schedule\TimeCards\Item\StartBreak;

use Microsoft\Graph\Beta\Generated\Models\ItemBody;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StartBreakPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $atApprovedLocation The atApprovedLocation property
    */
    private ?bool $atApprovedLocation = null;
    
    /**
     * @var ItemBody|null $notes The notes property
    */
    private ?ItemBody $notes = null;
    
    /**
     * Instantiates a new startBreakPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StartBreakPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StartBreakPostRequestBody {
        return new StartBreakPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the atApprovedLocation property value. The atApprovedLocation property
     * @return bool|null
    */
    public function getAtApprovedLocation(): ?bool {
        return $this->atApprovedLocation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'atApprovedLocation' => function (ParseNode $n) use ($o) { $o->setAtApprovedLocation($n->getBooleanValue()); },
            'notes' => function (ParseNode $n) use ($o) { $o->setNotes($n->getObjectValue(array(ItemBody::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the notes property value. The notes property
     * @return ItemBody|null
    */
    public function getNotes(): ?ItemBody {
        return $this->notes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('atApprovedLocation', $this->atApprovedLocation);
        $writer->writeObjectValue('notes', $this->notes);
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
     * Sets the atApprovedLocation property value. The atApprovedLocation property
     *  @param bool|null $value Value to set for the atApprovedLocation property.
    */
    public function setAtApprovedLocation(?bool $value ): void {
        $this->atApprovedLocation = $value;
    }

    /**
     * Sets the notes property value. The notes property
     *  @param ItemBody|null $value Value to set for the notes property.
    */
    public function setNotes(?ItemBody $value ): void {
        $this->notes = $value;
    }

}
