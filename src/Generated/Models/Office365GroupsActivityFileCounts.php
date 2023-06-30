<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class Office365GroupsActivityFileCounts extends Entity implements Parsable 
{
    /**
     * Instantiates a new Office365GroupsActivityFileCounts and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('active');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'active'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('reportDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportDate'");
    }

    /**
     * Gets the reportPeriod property value. The number of days the report covers.
     * @return string|null
    */
    public function getReportPeriod(): ?string {
        $val = $this->getBackingStore()->get('reportPeriod');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportPeriod'");
    }

    /**
     * Gets the reportRefreshDate property value. The latest date of the content.
     * @return Date|null
    */
    public function getReportRefreshDate(): ?Date {
        $val = $this->getBackingStore()->get('reportRefreshDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportRefreshDate'");
    }

    /**
     * Gets the total property value. The total number of files in the group's SharePoint document library.
     * @return int|null
    */
    public function getTotal(): ?int {
        $val = $this->getBackingStore()->get('total');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'total'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('active', $this->getActive());
        $writer->writeDateValue('reportDate', $this->getReportDate());
        $writer->writeStringValue('reportPeriod', $this->getReportPeriod());
        $writer->writeDateValue('reportRefreshDate', $this->getReportRefreshDate());
        $writer->writeIntegerValue('total', $this->getTotal());
    }

    /**
     * Sets the active property value. The number of files that were viewed, edited, shared, or synced in the group's SharePoint document library.
     * @param int|null $value Value to set for the active property.
    */
    public function setActive(?int $value): void {
        $this->getBackingStore()->set('active', $value);
    }

    /**
     * Sets the reportDate property value. The date on which a number of files were active in the group's SharePoint site.
     * @param Date|null $value Value to set for the reportDate property.
    */
    public function setReportDate(?Date $value): void {
        $this->getBackingStore()->set('reportDate', $value);
    }

    /**
     * Sets the reportPeriod property value. The number of days the report covers.
     * @param string|null $value Value to set for the reportPeriod property.
    */
    public function setReportPeriod(?string $value): void {
        $this->getBackingStore()->set('reportPeriod', $value);
    }

    /**
     * Sets the reportRefreshDate property value. The latest date of the content.
     * @param Date|null $value Value to set for the reportRefreshDate property.
    */
    public function setReportRefreshDate(?Date $value): void {
        $this->getBackingStore()->set('reportRefreshDate', $value);
    }

    /**
     * Sets the total property value. The total number of files in the group's SharePoint document library.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->getBackingStore()->set('total', $value);
    }

}
