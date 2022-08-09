<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PositionDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var CompanyDetail|null $company Detail about the company or employer.
    */
    private ?CompanyDetail $company = null;
    
    /**
     * @var string|null $description Description of the position in question.
    */
    private ?string $description = null;
    
    /**
     * @var Date|null $endMonthYear When the position ended.
    */
    private ?Date $endMonthYear = null;
    
    /**
     * @var string|null $jobTitle The title held when in that position.
    */
    private ?string $jobTitle = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $role The role the position entailed.
    */
    private ?string $role = null;
    
    /**
     * @var Date|null $startMonthYear The start month and year of the position.
    */
    private ?Date $startMonthYear = null;
    
    /**
     * @var string|null $summary Short summary of the position.
    */
    private ?string $summary = null;
    
    /**
     * Instantiates a new positionDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.positionDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PositionDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PositionDetail {
        return new PositionDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the company property value. Detail about the company or employer.
     * @return CompanyDetail|null
    */
    public function getCompany(): ?CompanyDetail {
        return $this->company;
    }

    /**
     * Gets the description property value. Description of the position in question.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the endMonthYear property value. When the position ended.
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
        $o = $this;
        return  [
            'company' => function (ParseNode $n) use ($o) { $o->setCompany($n->getObjectValue(array(CompanyDetail::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'endMonthYear' => function (ParseNode $n) use ($o) { $o->setEndMonthYear($n->getDateValue()); },
            'jobTitle' => function (ParseNode $n) use ($o) { $o->setJobTitle($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'role' => function (ParseNode $n) use ($o) { $o->setRole($n->getStringValue()); },
            'startMonthYear' => function (ParseNode $n) use ($o) { $o->setStartMonthYear($n->getDateValue()); },
            'summary' => function (ParseNode $n) use ($o) { $o->setSummary($n->getStringValue()); },
        ];
    }

    /**
     * Gets the jobTitle property value. The title held when in that position.
     * @return string|null
    */
    public function getJobTitle(): ?string {
        return $this->jobTitle;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the role property value. The role the position entailed.
     * @return string|null
    */
    public function getRole(): ?string {
        return $this->role;
    }

    /**
     * Gets the startMonthYear property value. The start month and year of the position.
     * @return Date|null
    */
    public function getStartMonthYear(): ?Date {
        return $this->startMonthYear;
    }

    /**
     * Gets the summary property value. Short summary of the position.
     * @return string|null
    */
    public function getSummary(): ?string {
        return $this->summary;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('company', $this->company);
        $writer->writeStringValue('description', $this->description);
        $writer->writeDateValue('endMonthYear', $this->endMonthYear);
        $writer->writeStringValue('jobTitle', $this->jobTitle);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('role', $this->role);
        $writer->writeDateValue('startMonthYear', $this->startMonthYear);
        $writer->writeStringValue('summary', $this->summary);
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
     * Sets the company property value. Detail about the company or employer.
     *  @param CompanyDetail|null $value Value to set for the company property.
    */
    public function setCompany(?CompanyDetail $value ): void {
        $this->company = $value;
    }

    /**
     * Sets the description property value. Description of the position in question.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the endMonthYear property value. When the position ended.
     *  @param Date|null $value Value to set for the endMonthYear property.
    */
    public function setEndMonthYear(?Date $value ): void {
        $this->endMonthYear = $value;
    }

    /**
     * Sets the jobTitle property value. The title held when in that position.
     *  @param string|null $value Value to set for the jobTitle property.
    */
    public function setJobTitle(?string $value ): void {
        $this->jobTitle = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the role property value. The role the position entailed.
     *  @param string|null $value Value to set for the role property.
    */
    public function setRole(?string $value ): void {
        $this->role = $value;
    }

    /**
     * Sets the startMonthYear property value. The start month and year of the position.
     *  @param Date|null $value Value to set for the startMonthYear property.
    */
    public function setStartMonthYear(?Date $value ): void {
        $this->startMonthYear = $value;
    }

    /**
     * Sets the summary property value. Short summary of the position.
     *  @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value ): void {
        $this->summary = $value;
    }

}
