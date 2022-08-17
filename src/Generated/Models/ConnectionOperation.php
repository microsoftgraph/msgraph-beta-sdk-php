<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConnectionOperation extends Entity implements Parsable 
{
    /**
     * @var PublicError|null $error The error property
    */
    private ?PublicError $error = null;
    
    /**
     * @var ConnectionOperationStatus|null $status The status property
    */
    private ?ConnectionOperationStatus $status = null;
    
    /**
     * Instantiates a new ConnectionOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.connectionOperation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConnectionOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConnectionOperation {
        return new ConnectionOperation();
    }

    /**
     * Gets the error property value. The error property
     * @return PublicError|null
    */
    public function getError(): ?PublicError {
        return $this->error;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'error' => function (ParseNode $n) use ($o) { $o->setError($n->getObjectValue(array(PublicError::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(ConnectionOperationStatus::class)); },
        ]);
    }

    /**
     * Gets the status property value. The status property
     * @return ConnectionOperationStatus|null
    */
    public function getStatus(): ?ConnectionOperationStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the error property value. The error property
     *  @param PublicError|null $value Value to set for the error property.
    */
    public function setError(?PublicError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param ConnectionOperationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ConnectionOperationStatus $value ): void {
        $this->status = $value;
    }

}
