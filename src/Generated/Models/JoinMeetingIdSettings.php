<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class JoinMeetingIdSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isPasscodeRequired The isPasscodeRequired property
    */
    private ?bool $isPasscodeRequired = null;
    
    /**
     * @var string|null $joinMeetingId The joinMeetingId property
    */
    private ?string $joinMeetingId = null;
    
    /**
     * @var string|null $passcode The passcode property
    */
    private ?string $passcode = null;
    
    /**
     * Instantiates a new joinMeetingIdSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return JoinMeetingIdSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): JoinMeetingIdSettings {
        return new JoinMeetingIdSettings();
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
            'isPasscodeRequired' => function (ParseNode $n) use ($o) { $o->setIsPasscodeRequired($n->getBooleanValue()); },
            'joinMeetingId' => function (ParseNode $n) use ($o) { $o->setJoinMeetingId($n->getStringValue()); },
            'passcode' => function (ParseNode $n) use ($o) { $o->setPasscode($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isPasscodeRequired property value. The isPasscodeRequired property
     * @return bool|null
    */
    public function getIsPasscodeRequired(): ?bool {
        return $this->isPasscodeRequired;
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
        $writer->writeBooleanValue('isPasscodeRequired', $this->isPasscodeRequired);
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
     * Sets the isPasscodeRequired property value. The isPasscodeRequired property
     *  @param bool|null $value Value to set for the isPasscodeRequired property.
    */
    public function setIsPasscodeRequired(?bool $value ): void {
        $this->isPasscodeRequired = $value;
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
