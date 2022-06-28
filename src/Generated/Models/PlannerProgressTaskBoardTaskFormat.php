<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerProgressTaskBoardTaskFormat extends PlannerDelta implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $orderHint Hint value used to order the task on the Progress view of the Task Board. The format is defined as outlined here.
    */
    private ?string $orderHint = null;
    
    /**
     * Instantiates a new plannerProgressTaskBoardTaskFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerProgressTaskBoardTaskFormat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerProgressTaskBoardTaskFormat {
        return new PlannerProgressTaskBoardTaskFormat();
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
            'orderHint' => function (ParseNode $n) use ($o) { $o->setOrderHint($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the orderHint property value. Hint value used to order the task on the Progress view of the Task Board. The format is defined as outlined here.
     * @return string|null
    */
    public function getOrderHint(): ?string {
        return $this->orderHint;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('orderHint', $this->orderHint);
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
     * Sets the orderHint property value. Hint value used to order the task on the Progress view of the Task Board. The format is defined as outlined here.
     *  @param string|null $value Value to set for the orderHint property.
    */
    public function setOrderHint(?string $value ): void {
        $this->orderHint = $value;
    }

}
