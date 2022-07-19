<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationSynchronizationCustomizations extends EducationSynchronizationCustomizationsBase implements Parsable 
{
    /**
     * @var EducationSynchronizationCustomization|null $school Customizations for School entities.
    */
    private ?EducationSynchronizationCustomization $school = null;
    
    /**
     * @var EducationSynchronizationCustomization|null $section Customizations for Section entities.
    */
    private ?EducationSynchronizationCustomization $section = null;
    
    /**
     * @var EducationSynchronizationCustomization|null $student Customizations for Student entities.
    */
    private ?EducationSynchronizationCustomization $student = null;
    
    /**
     * @var EducationSynchronizationCustomization|null $studentEnrollment Customizations for Student Enrollments.
    */
    private ?EducationSynchronizationCustomization $studentEnrollment = null;
    
    /**
     * @var EducationSynchronizationCustomization|null $teacher Customizations for Teacher entities.
    */
    private ?EducationSynchronizationCustomization $teacher = null;
    
    /**
     * @var EducationSynchronizationCustomization|null $teacherRoster Customizations for Teacher Rosters.
    */
    private ?EducationSynchronizationCustomization $teacherRoster = null;
    
    /**
     * Instantiates a new EducationSynchronizationCustomizations and sets the default values.
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'school' => function (ParseNode $n) use ($o) { $o->setSchool($n->getObjectValue(array(EducationSynchronizationCustomization::class, 'createFromDiscriminatorValue'))); },
            'section' => function (ParseNode $n) use ($o) { $o->setSection($n->getObjectValue(array(EducationSynchronizationCustomization::class, 'createFromDiscriminatorValue'))); },
            'student' => function (ParseNode $n) use ($o) { $o->setStudent($n->getObjectValue(array(EducationSynchronizationCustomization::class, 'createFromDiscriminatorValue'))); },
            'studentEnrollment' => function (ParseNode $n) use ($o) { $o->setStudentEnrollment($n->getObjectValue(array(EducationSynchronizationCustomization::class, 'createFromDiscriminatorValue'))); },
            'teacher' => function (ParseNode $n) use ($o) { $o->setTeacher($n->getObjectValue(array(EducationSynchronizationCustomization::class, 'createFromDiscriminatorValue'))); },
            'teacherRoster' => function (ParseNode $n) use ($o) { $o->setTeacherRoster($n->getObjectValue(array(EducationSynchronizationCustomization::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the school property value. Customizations for School entities.
     * @return EducationSynchronizationCustomization|null
    */
    public function getSchool(): ?EducationSynchronizationCustomization {
        return $this->school;
    }

    /**
     * Gets the section property value. Customizations for Section entities.
     * @return EducationSynchronizationCustomization|null
    */
    public function getSection(): ?EducationSynchronizationCustomization {
        return $this->section;
    }

    /**
     * Gets the student property value. Customizations for Student entities.
     * @return EducationSynchronizationCustomization|null
    */
    public function getStudent(): ?EducationSynchronizationCustomization {
        return $this->student;
    }

    /**
     * Gets the studentEnrollment property value. Customizations for Student Enrollments.
     * @return EducationSynchronizationCustomization|null
    */
    public function getStudentEnrollment(): ?EducationSynchronizationCustomization {
        return $this->studentEnrollment;
    }

    /**
     * Gets the teacher property value. Customizations for Teacher entities.
     * @return EducationSynchronizationCustomization|null
    */
    public function getTeacher(): ?EducationSynchronizationCustomization {
        return $this->teacher;
    }

    /**
     * Gets the teacherRoster property value. Customizations for Teacher Rosters.
     * @return EducationSynchronizationCustomization|null
    */
    public function getTeacherRoster(): ?EducationSynchronizationCustomization {
        return $this->teacherRoster;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('school', $this->school);
        $writer->writeObjectValue('section', $this->section);
        $writer->writeObjectValue('student', $this->student);
        $writer->writeObjectValue('studentEnrollment', $this->studentEnrollment);
        $writer->writeObjectValue('teacher', $this->teacher);
        $writer->writeObjectValue('teacherRoster', $this->teacherRoster);
    }

    /**
     * Sets the school property value. Customizations for School entities.
     *  @param EducationSynchronizationCustomization|null $value Value to set for the school property.
    */
    public function setSchool(?EducationSynchronizationCustomization $value ): void {
        $this->school = $value;
    }

    /**
     * Sets the section property value. Customizations for Section entities.
     *  @param EducationSynchronizationCustomization|null $value Value to set for the section property.
    */
    public function setSection(?EducationSynchronizationCustomization $value ): void {
        $this->section = $value;
    }

    /**
     * Sets the student property value. Customizations for Student entities.
     *  @param EducationSynchronizationCustomization|null $value Value to set for the student property.
    */
    public function setStudent(?EducationSynchronizationCustomization $value ): void {
        $this->student = $value;
    }

    /**
     * Sets the studentEnrollment property value. Customizations for Student Enrollments.
     *  @param EducationSynchronizationCustomization|null $value Value to set for the studentEnrollment property.
    */
    public function setStudentEnrollment(?EducationSynchronizationCustomization $value ): void {
        $this->studentEnrollment = $value;
    }

    /**
     * Sets the teacher property value. Customizations for Teacher entities.
     *  @param EducationSynchronizationCustomization|null $value Value to set for the teacher property.
    */
    public function setTeacher(?EducationSynchronizationCustomization $value ): void {
        $this->teacher = $value;
    }

    /**
     * Sets the teacherRoster property value. Customizations for Teacher Rosters.
     *  @param EducationSynchronizationCustomization|null $value Value to set for the teacherRoster property.
    */
    public function setTeacherRoster(?EducationSynchronizationCustomization $value ): void {
        $this->teacherRoster = $value;
    }

}
