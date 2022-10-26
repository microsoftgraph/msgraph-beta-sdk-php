<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365GroupsActivityFileCounts extends Entity implements Parsable 
{
    /**
     * @var int|null $active The number of files that were viewed, edited, shared, or synced in the group's SharePoint document library.
    */
    private ?int $active = null;
    
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
        $this->setOdataType('#microsoft.graph.office365GroupsActivityFileCounts');
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'active' => fn(ParseNode $n) => $o->setActive($n->getIntegerValue()),
            'reportDate' => fn(ParseNode $n) => $o->setReportDate($n->getDateValue()),
            'reportPeriod' => fn(ParseNode $n) => $o->setReportPeriod($n->getStringValue()),
            'reportRefreshDate' => fn(ParseNode $n) => $o->setReportRefreshDate($n->getDateValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
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
    }

    /**
     * Sets the active property value. The number of files that were viewed, edited, shared, or synced in the group's SharePoint document library.
     *  @param int|null $value Value to set for the active property.
    */
    public function setActive(?int $value ): void {
        $this->active = $value;
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
