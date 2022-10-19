<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CommunicationsApplicationIdentity extends Identity implements Parsable 
{
    /**
     * @var string|null $applicationType First party Microsoft application presenting this identity.
    */
    private ?string $applicationType = null;
    
    /**
     * @var bool|null $hidden True if the participant would not like to be shown in other participants' rosters.
    */
    private ?bool $hidden = null;
    
    /**
     * Instantiates a new CommunicationsApplicationIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.communicationsApplicationIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CommunicationsApplicationIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CommunicationsApplicationIdentity {
        return new CommunicationsApplicationIdentity();
    }

    /**
     * Gets the applicationType property value. First party Microsoft application presenting this identity.
     * @return string|null
    */
    public function getApplicationType(): ?string {
        return $this->applicationType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationType' => fn(ParseNode $n) => $o->setApplicationType($n->getStringValue()),
            'hidden' => fn(ParseNode $n) => $o->setHidden($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the hidden property value. True if the participant would not like to be shown in other participants' rosters.
     * @return bool|null
    */
    public function getHidden(): ?bool {
        return $this->hidden;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('applicationType', $this->applicationType);
        $writer->writeBooleanValue('hidden', $this->hidden);
    }

    /**
     * Sets the applicationType property value. First party Microsoft application presenting this identity.
     *  @param string|null $value Value to set for the applicationType property.
    */
    public function setApplicationType(?string $value ): void {
        $this->applicationType = $value;
    }

    /**
     * Sets the hidden property value. True if the participant would not like to be shown in other participants' rosters.
     *  @param bool|null $value Value to set for the hidden property.
    */
    public function setHidden(?bool $value ): void {
        $this->hidden = $value;
    }

}
