<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\DeviceAppManagementTasks\Item\UpdateStatus;

use Microsoft\Graph\Beta\Generated\Models\DeviceAppManagementTaskStatus;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateStatusPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $note The note property
    */
    private ?string $note = null;
    
    /**
     * @var DeviceAppManagementTaskStatus|null $status The status property
    */
    private ?DeviceAppManagementTaskStatus $status = null;
    
    /**
     * Instantiates a new updateStatusPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateStatusPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateStatusPostRequestBody {
        return new UpdateStatusPostRequestBody();
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
        return  [
            'note' => function (ParseNode $n) use ($o) { $o->setNote($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(DeviceAppManagementTaskStatus::class)); },
        ];
    }

    /**
     * Gets the note property value. The note property
     * @return string|null
    */
    public function getNote(): ?string {
        return $this->note;
    }

    /**
     * Gets the status property value. The status property
     * @return DeviceAppManagementTaskStatus|null
    */
    public function getStatus(): ?DeviceAppManagementTaskStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('note', $this->note);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the note property value. The note property
     *  @param string|null $value Value to set for the note property.
    */
    public function setNote(?string $value ): void {
        $this->note = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param DeviceAppManagementTaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceAppManagementTaskStatus $value ): void {
        $this->status = $value;
    }

}
