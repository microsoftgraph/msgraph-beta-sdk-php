<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class EducationalActivity extends ItemFacet 
{
    /** @var Date|null $completionMonthYear The month and year the user graduated or completed the activity. */
    private ?Date $completionMonthYear = null;
    
    /** @var Date|null $endMonthYear The month and year the user completed the educational activity referenced. */
    private ?Date $endMonthYear = null;
    
    /** @var InstitutionData|null $institution The institution property */
    private ?InstitutionData $institution = null;
    
    /** @var EducationalActivityDetail|null $program The program property */
    private ?EducationalActivityDetail $program = null;
    
    /** @var Date|null $startMonthYear The month and year the user commenced the activity referenced. */
    private ?Date $startMonthYear = null;
    
    /**
     * Instantiates a new educationalActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationalActivity
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EducationalActivity {
        return new EducationalActivity();
    }

    /**
     * Gets the completionMonthYear property value. The month and year the user graduated or completed the activity.
     * @return Date|null
    */
    public function getCompletionMonthYear(): ?Date {
        return $this->completionMonthYear;
    }

    /**
     * Gets the endMonthYear property value. The month and year the user completed the educational activity referenced.
     * @return Date|null
    */
    public function getEndMonthYear(): ?Date {
        return $this->endMonthYear;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'completionMonthYear' => function (self $o, ParseNode $n) { $o->setCompletionMonthYear($n->getDateValue()); },
            'endMonthYear' => function (self $o, ParseNode $n) { $o->setEndMonthYear($n->getDateValue()); },
            'institution' => function (self $o, ParseNode $n) { $o->setInstitution($n->getObjectValue(InstitutionData::class)); },
            'program' => function (self $o, ParseNode $n) { $o->setProgram($n->getObjectValue(EducationalActivityDetail::class)); },
            'startMonthYear' => function (self $o, ParseNode $n) { $o->setStartMonthYear($n->getDateValue()); },
        ]);
    }

    /**
     * Gets the institution property value. The institution property
     * @return InstitutionData|null
    */
    public function getInstitution(): ?InstitutionData {
        return $this->institution;
    }

    /**
     * Gets the program property value. The program property
     * @return EducationalActivityDetail|null
    */
    public function getProgram(): ?EducationalActivityDetail {
        return $this->program;
    }

    /**
     * Gets the startMonthYear property value. The month and year the user commenced the activity referenced.
     * @return Date|null
    */
    public function getStartMonthYear(): ?Date {
        return $this->startMonthYear;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateValue('completionMonthYear', $this->completionMonthYear);
        $writer->writeDateValue('endMonthYear', $this->endMonthYear);
        $writer->writeObjectValue('institution', $this->institution);
        $writer->writeObjectValue('program', $this->program);
        $writer->writeDateValue('startMonthYear', $this->startMonthYear);
    }

    /**
     * Sets the completionMonthYear property value. The month and year the user graduated or completed the activity.
     *  @param Date|null $value Value to set for the completionMonthYear property.
    */
    public function setCompletionMonthYear(?Date $value ): void {
        $this->completionMonthYear = $value;
    }

    /**
     * Sets the endMonthYear property value. The month and year the user completed the educational activity referenced.
     *  @param Date|null $value Value to set for the endMonthYear property.
    */
    public function setEndMonthYear(?Date $value ): void {
        $this->endMonthYear = $value;
    }

    /**
     * Sets the institution property value. The institution property
     *  @param InstitutionData|null $value Value to set for the institution property.
    */
    public function setInstitution(?InstitutionData $value ): void {
        $this->institution = $value;
    }

    /**
     * Sets the program property value. The program property
     *  @param EducationalActivityDetail|null $value Value to set for the program property.
    */
    public function setProgram(?EducationalActivityDetail $value ): void {
        $this->program = $value;
    }

    /**
     * Sets the startMonthYear property value. The month and year the user commenced the activity referenced.
     *  @param Date|null $value Value to set for the startMonthYear property.
    */
    public function setStartMonthYear(?Date $value ): void {
        $this->startMonthYear = $value;
    }

}
