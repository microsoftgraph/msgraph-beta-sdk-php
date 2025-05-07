<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSpeakerProgressResource extends EducationResource implements Parsable 
{
    /**
     * Instantiates a new EducationSpeakerProgressResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationSpeakerProgressResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSpeakerProgressResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSpeakerProgressResource {
        return new EducationSpeakerProgressResource();
    }

    /**
     * Gets the aiFeedbackCriteria property value. The aiFeedbackCriteria property
     * @return EducationAiFeedbackCriteria|null
    */
    public function getAiFeedbackCriteria(): ?EducationAiFeedbackCriteria {
        $val = $this->getBackingStore()->get('aiFeedbackCriteria');
        if (is_null($val) || $val instanceof EducationAiFeedbackCriteria) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aiFeedbackCriteria'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'aiFeedbackCriteria' => fn(ParseNode $n) => $o->setAiFeedbackCriteria($n->getObjectValue([EducationAiFeedbackCriteria::class, 'createFromDiscriminatorValue'])),
            'isAiFeedbackEnabled' => fn(ParseNode $n) => $o->setIsAiFeedbackEnabled($n->getBooleanValue()),
            'isVideoRequired' => fn(ParseNode $n) => $o->setIsVideoRequired($n->getBooleanValue()),
            'maxRecordingAttempts' => fn(ParseNode $n) => $o->setMaxRecordingAttempts($n->getIntegerValue()),
            'presentationTitle' => fn(ParseNode $n) => $o->setPresentationTitle($n->getStringValue()),
            'recordingTimeLimitInMinutes' => fn(ParseNode $n) => $o->setRecordingTimeLimitInMinutes($n->getIntegerValue()),
            'showRehearsalReportToStudentBeforeMediaUpload' => fn(ParseNode $n) => $o->setShowRehearsalReportToStudentBeforeMediaUpload($n->getBooleanValue()),
            'speakerCoachSettings' => fn(ParseNode $n) => $o->setSpeakerCoachSettings($n->getObjectValue([EducationSpeakerCoachSettings::class, 'createFromDiscriminatorValue'])),
            'spokenLanguageLocale' => fn(ParseNode $n) => $o->setSpokenLanguageLocale($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isAiFeedbackEnabled property value. The isAiFeedbackEnabled property
     * @return bool|null
    */
    public function getIsAiFeedbackEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isAiFeedbackEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAiFeedbackEnabled'");
    }

    /**
     * Gets the isVideoRequired property value. The isVideoRequired property
     * @return bool|null
    */
    public function getIsVideoRequired(): ?bool {
        $val = $this->getBackingStore()->get('isVideoRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isVideoRequired'");
    }

    /**
     * Gets the maxRecordingAttempts property value. The maxRecordingAttempts property
     * @return int|null
    */
    public function getMaxRecordingAttempts(): ?int {
        $val = $this->getBackingStore()->get('maxRecordingAttempts');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maxRecordingAttempts'");
    }

    /**
     * Gets the presentationTitle property value. The presentationTitle property
     * @return string|null
    */
    public function getPresentationTitle(): ?string {
        $val = $this->getBackingStore()->get('presentationTitle');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'presentationTitle'");
    }

    /**
     * Gets the recordingTimeLimitInMinutes property value. The recordingTimeLimitInMinutes property
     * @return int|null
    */
    public function getRecordingTimeLimitInMinutes(): ?int {
        $val = $this->getBackingStore()->get('recordingTimeLimitInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordingTimeLimitInMinutes'");
    }

    /**
     * Gets the showRehearsalReportToStudentBeforeMediaUpload property value. The showRehearsalReportToStudentBeforeMediaUpload property
     * @return bool|null
    */
    public function getShowRehearsalReportToStudentBeforeMediaUpload(): ?bool {
        $val = $this->getBackingStore()->get('showRehearsalReportToStudentBeforeMediaUpload');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showRehearsalReportToStudentBeforeMediaUpload'");
    }

    /**
     * Gets the speakerCoachSettings property value. The speakerCoachSettings property
     * @return EducationSpeakerCoachSettings|null
    */
    public function getSpeakerCoachSettings(): ?EducationSpeakerCoachSettings {
        $val = $this->getBackingStore()->get('speakerCoachSettings');
        if (is_null($val) || $val instanceof EducationSpeakerCoachSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'speakerCoachSettings'");
    }

    /**
     * Gets the spokenLanguageLocale property value. The spokenLanguageLocale property
     * @return string|null
    */
    public function getSpokenLanguageLocale(): ?string {
        $val = $this->getBackingStore()->get('spokenLanguageLocale');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'spokenLanguageLocale'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('aiFeedbackCriteria', $this->getAiFeedbackCriteria());
        $writer->writeBooleanValue('isAiFeedbackEnabled', $this->getIsAiFeedbackEnabled());
        $writer->writeBooleanValue('isVideoRequired', $this->getIsVideoRequired());
        $writer->writeIntegerValue('maxRecordingAttempts', $this->getMaxRecordingAttempts());
        $writer->writeStringValue('presentationTitle', $this->getPresentationTitle());
        $writer->writeIntegerValue('recordingTimeLimitInMinutes', $this->getRecordingTimeLimitInMinutes());
        $writer->writeBooleanValue('showRehearsalReportToStudentBeforeMediaUpload', $this->getShowRehearsalReportToStudentBeforeMediaUpload());
        $writer->writeObjectValue('speakerCoachSettings', $this->getSpeakerCoachSettings());
        $writer->writeStringValue('spokenLanguageLocale', $this->getSpokenLanguageLocale());
    }

    /**
     * Sets the aiFeedbackCriteria property value. The aiFeedbackCriteria property
     * @param EducationAiFeedbackCriteria|null $value Value to set for the aiFeedbackCriteria property.
    */
    public function setAiFeedbackCriteria(?EducationAiFeedbackCriteria $value): void {
        $this->getBackingStore()->set('aiFeedbackCriteria', $value);
    }

    /**
     * Sets the isAiFeedbackEnabled property value. The isAiFeedbackEnabled property
     * @param bool|null $value Value to set for the isAiFeedbackEnabled property.
    */
    public function setIsAiFeedbackEnabled(?bool $value): void {
        $this->getBackingStore()->set('isAiFeedbackEnabled', $value);
    }

    /**
     * Sets the isVideoRequired property value. The isVideoRequired property
     * @param bool|null $value Value to set for the isVideoRequired property.
    */
    public function setIsVideoRequired(?bool $value): void {
        $this->getBackingStore()->set('isVideoRequired', $value);
    }

    /**
     * Sets the maxRecordingAttempts property value. The maxRecordingAttempts property
     * @param int|null $value Value to set for the maxRecordingAttempts property.
    */
    public function setMaxRecordingAttempts(?int $value): void {
        $this->getBackingStore()->set('maxRecordingAttempts', $value);
    }

    /**
     * Sets the presentationTitle property value. The presentationTitle property
     * @param string|null $value Value to set for the presentationTitle property.
    */
    public function setPresentationTitle(?string $value): void {
        $this->getBackingStore()->set('presentationTitle', $value);
    }

    /**
     * Sets the recordingTimeLimitInMinutes property value. The recordingTimeLimitInMinutes property
     * @param int|null $value Value to set for the recordingTimeLimitInMinutes property.
    */
    public function setRecordingTimeLimitInMinutes(?int $value): void {
        $this->getBackingStore()->set('recordingTimeLimitInMinutes', $value);
    }

    /**
     * Sets the showRehearsalReportToStudentBeforeMediaUpload property value. The showRehearsalReportToStudentBeforeMediaUpload property
     * @param bool|null $value Value to set for the showRehearsalReportToStudentBeforeMediaUpload property.
    */
    public function setShowRehearsalReportToStudentBeforeMediaUpload(?bool $value): void {
        $this->getBackingStore()->set('showRehearsalReportToStudentBeforeMediaUpload', $value);
    }

    /**
     * Sets the speakerCoachSettings property value. The speakerCoachSettings property
     * @param EducationSpeakerCoachSettings|null $value Value to set for the speakerCoachSettings property.
    */
    public function setSpeakerCoachSettings(?EducationSpeakerCoachSettings $value): void {
        $this->getBackingStore()->set('speakerCoachSettings', $value);
    }

    /**
     * Sets the spokenLanguageLocale property value. The spokenLanguageLocale property
     * @param string|null $value Value to set for the spokenLanguageLocale property.
    */
    public function setSpokenLanguageLocale(?string $value): void {
        $this->getBackingStore()->set('spokenLanguageLocale', $value);
    }

}
