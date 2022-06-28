<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365GroupsActivityFileCounts extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var int|null $active The number of files that were viewed, edited, shared, or synced in the group's SharePoint document library.
    */
    private ?int $active = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Date|null $reportDate The date on which a number of files were active in the group's SharePoint site.
    */
    private ?Date $reportDate = null;
    
    /**
     * @var string|null $reportPeriod The number of days the report covers.
    */
    private ?string $reportPeriod = null;
    
    /**
     * @var Date|null $reportRefreshDate The latest date of the content.
    */
    private ?Date $reportRefreshDate = null;
    
    /**
     * @var int|null $total The total number of files in the group's SharePoint document library.
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new Office365GroupsActivityFileCounts and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Office365GroupsActivityFileCounts
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Office365GroupsActivityFileCounts {
        return new Office365GroupsActivityFileCounts();
    }

    /**
     * Gets the active property value. The number of files that were viewed, edited, shared, or synced in the group's SharePoint document library.
     * @return int|null
    */
    public function getActive(): ?int {
        return $this->active;
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
        return array_merge(parent::getFieldDeserializers(), [
            'active' => function (ParseNode $n) use ($o) { $o->setActive($n->getIntegerValue()); },
            'reportDate' => function (ParseNode $n) use ($o) { $o->setReportDate($n->getDateValue()); },
            'reportPeriod' => function (ParseNode $n) use ($o) { $o->setReportPeriod($n->getStringValue()); },
            'reportRefreshDate' => function (ParseNode $n) use ($o) { $o->setReportRefreshDate($n->getDateValue()); },
            'total' => function (ParseNode $n) use ($o) { $o->setTotal($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the reportDate property value. The date on which a number of files were active in the group's SharePoint site.
     * @return Date|null
    */
    public function getReportDate(): ?Date {
        return $this->reportDate;
    }

    /**
     * Gets the reportPeriod property value. The number of days the report covers.
     * @return string|null
    */
    public function getReportPeriod(): ?string {
        return $this->reportPeriod;
    }

    /**
     * Gets the reportRefreshDate property value. The latest date of the content.
     * @return Date|null
    */
    public function getReportRefreshDate(): ?Date {
        return $this->reportRefreshDate;
    }

    /**
     * Gets the total property value. The total number of files in the group's SharePoint document library.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('active', $this->active);
        $writer->writeDateValue('reportDate', $this->reportDate);
        $writer->writeStringValue('reportPeriod', $this->reportPeriod);
        $writer->writeDateValue('reportRefreshDate', $this->reportRefreshDate);
        $writer->writeIntegerValue('total', $this->total);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the active property value. The number of files that were viewed, edited, shared, or synced in the group's SharePoint document library.
     *  @param int|null $value Value to set for the active property.
    */
    public function setActive(?int $value ): void {
        $this->active = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the reportDate property value. The date on which a number of files were active in the group's SharePoint site.
     *  @param Date|null $value Value to set for the reportDate property.
    */
    public function setReportDate(?Date $value ): void {
        $this->reportDate = $value;
    }

    /**
     * Sets the reportPeriod property value. The number of days the report covers.
     *  @param string|null $value Value to set for the reportPeriod property.
    */
    public function setReportPeriod(?string $value ): void {
        $this->reportPeriod = $value;
    }

    /**
     * Sets the reportRefreshDate property value. The latest date of the content.
     *  @param Date|null $value Value to set for the reportRefreshDate property.
    */
    public function setReportRefreshDate(?Date $value ): void {
        $this->reportRefreshDate = $value;
    }

    /**
     * Sets the total property value. The total number of files in the group's SharePoint document library.
     *  @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value ): void {
        $this->total = $value;
    }

}
