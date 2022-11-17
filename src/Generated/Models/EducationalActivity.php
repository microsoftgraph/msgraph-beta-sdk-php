<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class EducationalActivity extends ItemFacet implements Parsable 
{
    /**
     * Instantiates a new EducationalActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.educationalActivity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationalActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationalActivity {
        return new EducationalActivity();
    }

    /**
     * Gets the completionMonthYear property value. The month and year the user graduated or completed the activity.
     * @return Date|null
    */
    public function getCompletionMonthYear(): ?Date {
        return $this->getBackingStore()->get('completionMonthYear');
    }

    /**
     * Gets the endMonthYear property value. The month and year the user completed the educational activity referenced.
     * @return Date|null
    */
    public function getEndMonthYear(): ?Date {
        return $this->getBackingStore()->get('endMonthYear');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completionMonthYear' => fn(ParseNode $n) => $o->setCompletionMonthYear($n->getDateValue()),
            'endMonthYear' => fn(ParseNode $n) => $o->setEndMonthYear($n->getDateValue()),
            'institution' => fn(ParseNode $n) => $o->setInstitution($n->getObjectValue([InstitutionData::class, 'createFromDiscriminatorValue'])),
            'program' => fn(ParseNode $n) => $o->setProgram($n->getObjectValue([EducationalActivityDetail::class, 'createFromDiscriminatorValue'])),
            'startMonthYear' => fn(ParseNode $n) => $o->setStartMonthYear($n->getDateValue()),
        ]);
    }

    /**
     * Gets the institution property value. The institution property
     * @return InstitutionData|null
    */
    public function getInstitution(): ?InstitutionData {
        return $this->getBackingStore()->get('institution');
    }

    /**
     * Gets the program property value. The program property
     * @return EducationalActivityDetail|null
    */
    public function getProgram(): ?EducationalActivityDetail {
        return $this->getBackingStore()->get('program');
    }

    /**
     * Gets the startMonthYear property value. The month and year the user commenced the activity referenced.
     * @return Date|null
    */
    public function getStartMonthYear(): ?Date {
        return $this->getBackingStore()->get('startMonthYear');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateValue('completionMonthYear', $this->getCompletionMonthYear());
        $writer->writeDateValue('endMonthYear', $this->getEndMonthYear());
        $writer->writeObjectValue('institution', $this->getInstitution());
        $writer->writeObjectValue('program', $this->getProgram());
        $writer->writeDateValue('startMonthYear', $this->getStartMonthYear());
    }

    /**
     * Sets the completionMonthYear property value. The month and year the user graduated or completed the activity.
     *  @param Date|null $value Value to set for the completionMonthYear property.
    */
    public function setCompletionMonthYear(?Date $value): void {
        $this->getBackingStore()->set('completionMonthYear', $value);
    }

    /**
     * Sets the endMonthYear property value. The month and year the user completed the educational activity referenced.
     *  @param Date|null $value Value to set for the endMonthYear property.
    */
    public function setEndMonthYear(?Date $value): void {
        $this->getBackingStore()->set('endMonthYear', $value);
    }

    /**
     * Sets the institution property value. The institution property
     *  @param InstitutionData|null $value Value to set for the institution property.
    */
    public function setInstitution(?InstitutionData $value): void {
        $this->getBackingStore()->set('institution', $value);
    }

    /**
     * Sets the program property value. The program property
     *  @param EducationalActivityDetail|null $value Value to set for the program property.
    */
    public function setProgram(?EducationalActivityDetail $value): void {
        $this->getBackingStore()->set('program', $value);
    }

    /**
     * Sets the startMonthYear property value. The month and year the user commenced the activity referenced.
     *  @param Date|null $value Value to set for the startMonthYear property.
    */
    public function setStartMonthYear(?Date $value): void {
        $this->getBackingStore()->set('startMonthYear', $value);
    }

}
