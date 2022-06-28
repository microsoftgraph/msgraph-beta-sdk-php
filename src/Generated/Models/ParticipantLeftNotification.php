<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ParticipantLeftNotification extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Call|null $call The call property
    */
    private ?Call $call = null;
    
    /**
     * @var string|null $participantId ID of the participant under the policy who has left the meeting.
    */
    private ?string $participantId = null;
    
    /**
     * Instantiates a new ParticipantLeftNotification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParticipantLeftNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ParticipantLeftNotification {
        return new ParticipantLeftNotification();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the call property value. The call property
     * @return Call|null
    */
    public function getCall(): ?Call {
        return $this->call;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'call' => function (ParseNode $n) use ($o) { $o->setCall($n->getObjectValue(array(Call::class, 'createFromDiscriminatorValue'))); },
            'participantId' => function (ParseNode $n) use ($o) { $o->setParticipantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the participantId property value. ID of the participant under the policy who has left the meeting.
     * @return string|null
    */
    public function getParticipantId(): ?string {
        return $this->participantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('call', $this->call);
        $writer->writeStringValue('participantId', $this->participantId);
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
     * Sets the call property value. The call property
     *  @param Call|null $value Value to set for the call property.
    */
    public function setCall(?Call $value ): void {
        $this->call = $value;
    }

    /**
     * Sets the participantId property value. ID of the participant under the policy who has left the meeting.
     *  @param string|null $value Value to set for the participantId property.
    */
    public function setParticipantId(?string $value ): void {
        $this->participantId = $value;
    }

}
