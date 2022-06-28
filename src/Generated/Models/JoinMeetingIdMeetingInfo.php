<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class JoinMeetingIdMeetingInfo extends MeetingInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $joinMeetingId The joinMeetingId property
    */
    private ?string $joinMeetingId = null;
    
    /**
     * @var string|null $passcode The passcode property
    */
    private ?string $passcode = null;
    
    /**
     * Instantiates a new JoinMeetingIdMeetingInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return JoinMeetingIdMeetingInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): JoinMeetingIdMeetingInfo {
        return new JoinMeetingIdMeetingInfo();
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
            'joinMeetingId' => function (ParseNode $n) use ($o) { $o->setJoinMeetingId($n->getStringValue()); },
            'passcode' => function (ParseNode $n) use ($o) { $o->setPasscode($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the joinMeetingId property value. The joinMeetingId property
     * @return string|null
    */
    public function getJoinMeetingId(): ?string {
        return $this->joinMeetingId;
    }

    /**
     * Gets the passcode property value. The passcode property
     * @return string|null
    */
    public function getPasscode(): ?string {
        return $this->passcode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('joinMeetingId', $this->joinMeetingId);
        $writer->writeStringValue('passcode', $this->passcode);
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
     * Sets the joinMeetingId property value. The joinMeetingId property
     *  @param string|null $value Value to set for the joinMeetingId property.
    */
    public function setJoinMeetingId(?string $value ): void {
        $this->joinMeetingId = $value;
    }

    /**
     * Sets the passcode property value. The passcode property
     *  @param string|null $value Value to set for the passcode property.
    */
    public function setPasscode(?string $value ): void {
        $this->passcode = $value;
    }

}
