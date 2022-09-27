<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedSignupStatus extends Entity implements Parsable 
{
    /**
     * @var bool|null $isRegistered The isRegistered property
    */
    private ?bool $isRegistered = null;
    
    /**
     * @var SetupStatus|null $status The status property
    */
    private ?SetupStatus $status = null;
    
    /**
     * Instantiates a new privilegedSignupStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.privilegedSignupStatus');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedSignupStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedSignupStatus {
        return new PrivilegedSignupStatus();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isRegistered' => function (ParseNode $n) use ($o) { $o->setIsRegistered($n->getBooleanValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(SetupStatus::class)); },
        ]);
    }

    /**
     * Gets the isRegistered property value. The isRegistered property
     * @return bool|null
    */
    public function getIsRegistered(): ?bool {
        return $this->isRegistered;
    }

    /**
     * Gets the status property value. The status property
     * @return SetupStatus|null
    */
    public function getStatus(): ?SetupStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isRegistered', $this->isRegistered);
        $writer->writeEnumValue('status', $this->status);
    }

    /**
     * Sets the isRegistered property value. The isRegistered property
     *  @param bool|null $value Value to set for the isRegistered property.
    */
    public function setIsRegistered(?bool $value ): void {
        $this->isRegistered = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param SetupStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SetupStatus $value ): void {
        $this->status = $value;
    }

}
