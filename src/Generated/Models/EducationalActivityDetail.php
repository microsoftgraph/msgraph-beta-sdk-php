<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationalActivityDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $abbreviation Shortened name of the degree or program (example: PhD, MBA)
    */
    private ?string $abbreviation = null;
    
    /**
     * @var array<string>|null $activities Extracurricular activities undertaken alongside the program.
    */
    private ?array $activities = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $awards Any awards or honors associated with the program.
    */
    private ?array $awards = null;
    
    /**
     * @var string|null $description Short description of the program provided by the user.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Long-form name of the program that the user has provided.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<string>|null $fieldsOfStudy Majors and minors associated with the program. (if applicable)
    */
    private ?array $fieldsOfStudy = null;
    
    /**
     * @var string|null $grade The final grade, class, GPA or score.
    */
    private ?string $grade = null;
    
    /**
     * @var string|null $notes Additional notes the user has provided.
    */
    private ?string $notes = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $webUrl Link to the degree or program page.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new educationalActivityDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.educationalActivityDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationalActivityDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationalActivityDetail {
        return new EducationalActivityDetail();
    }

    /**
     * Gets the abbreviation property value. Shortened name of the degree or program (example: PhD, MBA)
     * @return string|null
    */
    public function getAbbreviation(): ?string {
        return $this->abbreviation;
    }

    /**
     * Gets the activities property value. Extracurricular activities undertaken alongside the program.
     * @return array<string>|null
    */
    public function getActivities(): ?array {
        return $this->activities;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the awards property value. Any awards or honors associated with the program.
     * @return array<string>|null
    */
    public function getAwards(): ?array {
        return $this->awards;
    }

    /**
     * Gets the description property value. Short description of the program provided by the user.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Long-form name of the program that the user has provided.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'abbreviation' => function (ParseNode $n) use ($o) { $o->setAbbreviation($n->getStringValue()); },
            'activities' => function (ParseNode $n) use ($o) { $o->setActivities($n->getCollectionOfPrimitiveValues()); },
            'awards' => function (ParseNode $n) use ($o) { $o->setAwards($n->getCollectionOfPrimitiveValues()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'fieldsOfStudy' => function (ParseNode $n) use ($o) { $o->setFieldsOfStudy($n->getCollectionOfPrimitiveValues()); },
            'grade' => function (ParseNode $n) use ($o) { $o->setGrade($n->getStringValue()); },
            'notes' => function (ParseNode $n) use ($o) { $o->setNotes($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the fieldsOfStudy property value. Majors and minors associated with the program. (if applicable)
     * @return array<string>|null
    */
    public function getFieldsOfStudy(): ?array {
        return $this->fieldsOfStudy;
    }

    /**
     * Gets the grade property value. The final grade, class, GPA or score.
     * @return string|null
    */
    public function getGrade(): ?string {
        return $this->grade;
    }

    /**
     * Gets the notes property value. Additional notes the user has provided.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the webUrl property value. Link to the degree or program page.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('abbreviation', $this->abbreviation);
        $writer->writeCollectionOfPrimitiveValues('activities', $this->activities);
        $writer->writeCollectionOfPrimitiveValues('awards', $this->awards);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfPrimitiveValues('fieldsOfStudy', $this->fieldsOfStudy);
        $writer->writeStringValue('grade', $this->grade);
        $writer->writeStringValue('notes', $this->notes);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('webUrl', $this->webUrl);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the abbreviation property value. Shortened name of the degree or program (example: PhD, MBA)
     *  @param string|null $value Value to set for the abbreviation property.
    */
    public function setAbbreviation(?string $value ): void {
        $this->abbreviation = $value;
    }

    /**
     * Sets the activities property value. Extracurricular activities undertaken alongside the program.
     *  @param array<string>|null $value Value to set for the activities property.
    */
    public function setActivities(?array $value ): void {
        $this->activities = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the awards property value. Any awards or honors associated with the program.
     *  @param array<string>|null $value Value to set for the awards property.
    */
    public function setAwards(?array $value ): void {
        $this->awards = $value;
    }

    /**
     * Sets the description property value. Short description of the program provided by the user.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Long-form name of the program that the user has provided.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the fieldsOfStudy property value. Majors and minors associated with the program. (if applicable)
     *  @param array<string>|null $value Value to set for the fieldsOfStudy property.
    */
    public function setFieldsOfStudy(?array $value ): void {
        $this->fieldsOfStudy = $value;
    }

    /**
     * Sets the grade property value. The final grade, class, GPA or score.
     *  @param string|null $value Value to set for the grade property.
    */
    public function setGrade(?string $value ): void {
        $this->grade = $value;
    }

    /**
     * Sets the notes property value. Additional notes the user has provided.
     *  @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the webUrl property value. Link to the degree or program page.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
