<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class EducationStudent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Date|null $birthDate Birth date of the student.
    */
    private ?Date $birthDate = null;
    
    /**
     * @var string|null $externalId ID of the student in the source system.
    */
    private ?string $externalId = null;
    
    /**
     * @var EducationGender|null $gender Possible values are: female, male, other.
    */
    private ?EducationGender $gender = null;
    
    /**
     * @var string|null $grade Current grade level of the student.
    */
    private ?string $grade = null;
    
    /**
     * @var string|null $graduationYear Year the student is graduating from the school.
    */
    private ?string $graduationYear = null;
    
    /**
     * @var string|null $studentNumber Student Number.
    */
    private ?string $studentNumber = null;
    
    /**
     * Instantiates a new educationStudent and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationStudent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationStudent {
        return new EducationStudent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the birthDate property value. Birth date of the student.
     * @return Date|null
    */
    public function getBirthDate(): ?Date {
        return $this->birthDate;
    }

    /**
     * Gets the externalId property value. ID of the student in the source system.
     * @return string|null
    */
    public function getExternalId(): ?string {
        return $this->externalId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'birthDate' => function (ParseNode $n) use ($o) { $o->setBirthDate($n->getDateValue()); },
            'externalId' => function (ParseNode $n) use ($o) { $o->setExternalId($n->getStringValue()); },
            'gender' => function (ParseNode $n) use ($o) { $o->setGender($n->getEnumValue(EducationGender::class)); },
            'grade' => function (ParseNode $n) use ($o) { $o->setGrade($n->getStringValue()); },
            'graduationYear' => function (ParseNode $n) use ($o) { $o->setGraduationYear($n->getStringValue()); },
            'studentNumber' => function (ParseNode $n) use ($o) { $o->setStudentNumber($n->getStringValue()); },
        ];
    }

    /**
     * Gets the gender property value. Possible values are: female, male, other.
     * @return EducationGender|null
    */
    public function getGender(): ?EducationGender {
        return $this->gender;
    }

    /**
     * Gets the grade property value. Current grade level of the student.
     * @return string|null
    */
    public function getGrade(): ?string {
        return $this->grade;
    }

    /**
     * Gets the graduationYear property value. Year the student is graduating from the school.
     * @return string|null
    */
    public function getGraduationYear(): ?string {
        return $this->graduationYear;
    }

    /**
     * Gets the studentNumber property value. Student Number.
     * @return string|null
    */
    public function getStudentNumber(): ?string {
        return $this->studentNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateValue('birthDate', $this->birthDate);
        $writer->writeStringValue('externalId', $this->externalId);
        $writer->writeEnumValue('gender', $this->gender);
        $writer->writeStringValue('grade', $this->grade);
        $writer->writeStringValue('graduationYear', $this->graduationYear);
        $writer->writeStringValue('studentNumber', $this->studentNumber);
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
     * Sets the birthDate property value. Birth date of the student.
     *  @param Date|null $value Value to set for the birthDate property.
    */
    public function setBirthDate(?Date $value ): void {
        $this->birthDate = $value;
    }

    /**
     * Sets the externalId property value. ID of the student in the source system.
     *  @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value ): void {
        $this->externalId = $value;
    }

    /**
     * Sets the gender property value. Possible values are: female, male, other.
     *  @param EducationGender|null $value Value to set for the gender property.
    */
    public function setGender(?EducationGender $value ): void {
        $this->gender = $value;
    }

    /**
     * Sets the grade property value. Current grade level of the student.
     *  @param string|null $value Value to set for the grade property.
    */
    public function setGrade(?string $value ): void {
        $this->grade = $value;
    }

    /**
     * Sets the graduationYear property value. Year the student is graduating from the school.
     *  @param string|null $value Value to set for the graduationYear property.
    */
    public function setGraduationYear(?string $value ): void {
        $this->graduationYear = $value;
    }

    /**
     * Sets the studentNumber property value. Student Number.
     *  @param string|null $value Value to set for the studentNumber property.
    */
    public function setStudentNumber(?string $value ): void {
        $this->studentNumber = $value;
    }

}
