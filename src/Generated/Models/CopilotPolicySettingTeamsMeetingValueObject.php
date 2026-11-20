<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The value of the microsoft.copilot.teamsmeeting policy setting.
*/
class CopilotPolicySettingTeamsMeetingValueObject extends CopilotPolicySettingValueObject implements Parsable 
{
    /**
     * Instantiates a new CopilotPolicySettingTeamsMeetingValueObject and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.copilotPolicySettingTeamsMeetingValueObject');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotPolicySettingTeamsMeetingValueObject
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotPolicySettingTeamsMeetingValueObject {
        return new CopilotPolicySettingTeamsMeetingValueObject();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isTranscriptionAllowed' => fn(ParseNode $n) => $o->setIsTranscriptionAllowed($n->getBooleanValue()),
            'meetingCopilotMode' => fn(ParseNode $n) => $o->setMeetingCopilotMode($n->getEnumValue(MeetingCopilotMode::class)),
        ]);
    }

    /**
     * Gets the isTranscriptionAllowed property value. Indicates whether transcription is allowed in Teams meetings.
     * @return bool|null
    */
    public function getIsTranscriptionAllowed(): ?bool {
        $val = $this->getBackingStore()->get('isTranscriptionAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTranscriptionAllowed'");
    }

    /**
     * Gets the meetingCopilotMode property value. The Copilot mode for Teams meetings.
     * @return MeetingCopilotMode|null
    */
    public function getMeetingCopilotMode(): ?MeetingCopilotMode {
        $val = $this->getBackingStore()->get('meetingCopilotMode');
        if (is_null($val) || $val instanceof MeetingCopilotMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingCopilotMode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isTranscriptionAllowed', $this->getIsTranscriptionAllowed());
        $writer->writeEnumValue('meetingCopilotMode', $this->getMeetingCopilotMode());
    }

    /**
     * Sets the isTranscriptionAllowed property value. Indicates whether transcription is allowed in Teams meetings.
     * @param bool|null $value Value to set for the isTranscriptionAllowed property.
    */
    public function setIsTranscriptionAllowed(?bool $value): void {
        $this->getBackingStore()->set('isTranscriptionAllowed', $value);
    }

    /**
     * Sets the meetingCopilotMode property value. The Copilot mode for Teams meetings.
     * @param MeetingCopilotMode|null $value Value to set for the meetingCopilotMode property.
    */
    public function setMeetingCopilotMode(?MeetingCopilotMode $value): void {
        $this->getBackingStore()->set('meetingCopilotMode', $value);
    }

}
