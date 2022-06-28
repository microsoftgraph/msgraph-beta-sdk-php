<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InviteParticipantsOperation extends CommsOperation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<InvitationParticipantInfo>|null $participants The participants to invite.
    */
    private ?array $participants = null;
    
    /**
     * Instantiates a new InviteParticipantsOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InviteParticipantsOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InviteParticipantsOperation {
        return new InviteParticipantsOperation();
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
            'participants' => function (ParseNode $n) use ($o) { $o->setParticipants($n->getCollectionOfObjectValues(array(InvitationParticipantInfo::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the participants property value. The participants to invite.
     * @return array<InvitationParticipantInfo>|null
    */
    public function getParticipants(): ?array {
        return $this->participants;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('participants', $this->participants);
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
     * Sets the participants property value. The participants to invite.
     *  @param array<InvitationParticipantInfo>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value ): void {
        $this->participants = $value;
    }

}
