<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSynchronizationCustomizations extends EducationSynchronizationCustomizationsBase implements Parsable 
{
    /**
     * Instantiates a new educationSynchronizationCustomizations and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationSynchronizationCustomizations');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSynchronizationCustomizations
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSynchronizationCustomizations {
        return new EducationSynchronizationCustomizations();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'school' => fn(ParseNode $n) => $o->setSchool($n->getObjectValue([EducationSynchronizationCustomization::class, 'createFromDiscriminatorValue'])),
            'section' => fn(ParseNode $n) => $o->setSection($n->getObjectValue([EducationSynchronizationCustomization::class, 'createFromDiscriminatorValue'])),
            'student' => fn(ParseNode $n) => $o->setStudent($n->getObjectValue([EducationSynchronizationCustomization::class, 'createFromDiscriminatorValue'])),
            'studentEnrollment' => fn(ParseNode $n) => $o->setStudentEnrollment($n->getObjectValue([EducationSynchronizationCustomization::class, 'createFromDiscriminatorValue'])),
            'teacher' => fn(ParseNode $n) => $o->setTeacher($n->getObjectValue([EducationSynchronizationCustomization::class, 'createFromDiscriminatorValue'])),
            'teacherRoster' => fn(ParseNode $n) => $o->setTeacherRoster($n->getObjectValue([EducationSynchronizationCustomization::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the school property value. Customizations for School entities.
     * @return EducationSynchronizationCustomization|null
    */
    public function getSchool(): ?EducationSynchronizationCustomization {
        $val = $this->getBackingStore()->get('school');
        if (is_null($val) || $val instanceof EducationSynchronizationCustomization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'school'");
    }

    /**
     * Gets the section property value. Customizations for Section entities.
     * @return EducationSynchronizationCustomization|null
    */
    public function getSection(): ?EducationSynchronizationCustomization {
        $val = $this->getBackingStore()->get('section');
        if (is_null($val) || $val instanceof EducationSynchronizationCustomization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'section'");
    }

    /**
     * Gets the student property value. Customizations for Student entities.
     * @return EducationSynchronizationCustomization|null
    */
    public function getStudent(): ?EducationSynchronizationCustomization {
        $val = $this->getBackingStore()->get('student');
        if (is_null($val) || $val instanceof EducationSynchronizationCustomization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'student'");
    }

    /**
     * Gets the studentEnrollment property value. Customizations for Student Enrollments.
     * @return EducationSynchronizationCustomization|null
    */
    public function getStudentEnrollment(): ?EducationSynchronizationCustomization {
        $val = $this->getBackingStore()->get('studentEnrollment');
        if (is_null($val) || $val instanceof EducationSynchronizationCustomization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'studentEnrollment'");
    }

    /**
     * Gets the teacher property value. Customizations for Teacher entities.
     * @return EducationSynchronizationCustomization|null
    */
    public function getTeacher(): ?EducationSynchronizationCustomization {
        $val = $this->getBackingStore()->get('teacher');
        if (is_null($val) || $val instanceof EducationSynchronizationCustomization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teacher'");
    }

    /**
     * Gets the teacherRoster property value. Customizations for Teacher Rosters.
     * @return EducationSynchronizationCustomization|null
    */
    public function getTeacherRoster(): ?EducationSynchronizationCustomization {
        $val = $this->getBackingStore()->get('teacherRoster');
        if (is_null($val) || $val instanceof EducationSynchronizationCustomization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teacherRoster'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('school', $this->getSchool());
        $writer->writeObjectValue('section', $this->getSection());
        $writer->writeObjectValue('student', $this->getStudent());
        $writer->writeObjectValue('studentEnrollment', $this->getStudentEnrollment());
        $writer->writeObjectValue('teacher', $this->getTeacher());
        $writer->writeObjectValue('teacherRoster', $this->getTeacherRoster());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the school property value. Customizations for School entities.
     * @param EducationSynchronizationCustomization|null $value Value to set for the school property.
    */
    public function setSchool(?EducationSynchronizationCustomization $value): void {
        $this->getBackingStore()->set('school', $value);
    }

    /**
     * Sets the section property value. Customizations for Section entities.
     * @param EducationSynchronizationCustomization|null $value Value to set for the section property.
    */
    public function setSection(?EducationSynchronizationCustomization $value): void {
        $this->getBackingStore()->set('section', $value);
    }

    /**
     * Sets the student property value. Customizations for Student entities.
     * @param EducationSynchronizationCustomization|null $value Value to set for the student property.
    */
    public function setStudent(?EducationSynchronizationCustomization $value): void {
        $this->getBackingStore()->set('student', $value);
    }

    /**
     * Sets the studentEnrollment property value. Customizations for Student Enrollments.
     * @param EducationSynchronizationCustomization|null $value Value to set for the studentEnrollment property.
    */
    public function setStudentEnrollment(?EducationSynchronizationCustomization $value): void {
        $this->getBackingStore()->set('studentEnrollment', $value);
    }

    /**
     * Sets the teacher property value. Customizations for Teacher entities.
     * @param EducationSynchronizationCustomization|null $value Value to set for the teacher property.
    */
    public function setTeacher(?EducationSynchronizationCustomization $value): void {
        $this->getBackingStore()->set('teacher', $value);
    }

    /**
     * Sets the teacherRoster property value. Customizations for Teacher Rosters.
     * @param EducationSynchronizationCustomization|null $value Value to set for the teacherRoster property.
    */
    public function setTeacherRoster(?EducationSynchronizationCustomization $value): void {
        $this->getBackingStore()->set('teacherRoster', $value);
    }

}
