<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RotateBitLockerKeysDeviceActionResult extends DeviceActionResult implements Parsable 
{
    /**
     * @var int|null $errorCode RotateBitLockerKeys action error code
    */
    private ?int $errorCode = null;
    
    /**
     * Instantiates a new RotateBitLockerKeysDeviceActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.rotateBitLockerKeysDeviceActionResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RotateBitLockerKeysDeviceActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RotateBitLockerKeysDeviceActionResult {
        return new RotateBitLockerKeysDeviceActionResult();
    }

    /**
     * Gets the errorCode property value. RotateBitLockerKeys action error code
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getIntegerValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('errorCode', $this->errorCode);
    }

    /**
     * Sets the errorCode property value. RotateBitLockerKeys action error code
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value ): void {
        $this->errorCode = $value;
    }

}
