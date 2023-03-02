<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Entity representing the configuration of a cached report
*/
class DeviceManagementCachedReportConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceManagementCachedReportConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementCachedReportConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementCachedReportConfiguration {
        return new DeviceManagementCachedReportConfiguration();
    }

    /**
     * Gets the expirationDateTime property value. Time that the cached report expires
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'filter' => fn(ParseNode $n) => $o->setFilter($n->getStringValue()),
            'lastRefreshDateTime' => fn(ParseNode $n) => $o->setLastRefreshDateTime($n->getDateTimeValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getStringValue()),
            'orderBy' => fn(ParseNode $n) => $o->setOrderBy($n->getCollectionOfPrimitiveValues()),
            'reportName' => fn(ParseNode $n) => $o->setReportName($n->getStringValue()),
            'select' => fn(ParseNode $n) => $o->setSelect($n->getCollectionOfPrimitiveValues()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DeviceManagementReportStatus::class)),
        ]);
    }

    /**
     * Gets the filter property value. Filters applied on report creation.
     * @return string|null
    */
    public function getFilter(): ?string {
        return $this->getBackingStore()->get('filter');
    }

    /**
     * Gets the lastRefreshDateTime property value. Time that the cached report was last refreshed
     * @return DateTime|null
    */
    public function getLastRefreshDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastRefreshDateTime');
    }

    /**
     * Gets the metadata property value. Caller-managed metadata associated with the report
     * @return string|null
    */
    public function getMetadata(): ?string {
        return $this->getBackingStore()->get('metadata');
    }

    /**
     * Gets the orderBy property value. Ordering of columns in the report
     * @return array<string>|null
    */
    public function getOrderBy(): ?array {
        return $this->getBackingStore()->get('orderBy');
    }

    /**
     * Gets the reportName property value. Name of the report
     * @return string|null
    */
    public function getReportName(): ?string {
        return $this->getBackingStore()->get('reportName');
    }

    /**
     * Gets the select property value. Columns selected from the report
     * @return array<string>|null
    */
    public function getSelect(): ?array {
        return $this->getBackingStore()->get('select');
    }

    /**
     * Gets the status property value. Possible statuses associated with a generated report
     * @return DeviceManagementReportStatus|null
    */
    public function getStatus(): ?DeviceManagementReportStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('filter', $this->getFilter());
        $writer->writeDateTimeValue('lastRefreshDateTime', $this->getLastRefreshDateTime());
        $writer->writeStringValue('metadata', $this->getMetadata());
        $writer->writeCollectionOfPrimitiveValues('orderBy', $this->getOrderBy());
        $writer->writeStringValue('reportName', $this->getReportName());
        $writer->writeCollectionOfPrimitiveValues('select', $this->getSelect());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the expirationDateTime property value. Time that the cached report expires
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the filter property value. Filters applied on report creation.
     * @param string|null $value Value to set for the filter property.
    */
    public function setFilter(?string $value): void {
        $this->getBackingStore()->set('filter', $value);
    }

    /**
     * Sets the lastRefreshDateTime property value. Time that the cached report was last refreshed
     * @param DateTime|null $value Value to set for the lastRefreshDateTime property.
    */
    public function setLastRefreshDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRefreshDateTime', $value);
    }

    /**
     * Sets the metadata property value. Caller-managed metadata associated with the report
     * @param string|null $value Value to set for the metadata property.
    */
    public function setMetadata(?string $value): void {
        $this->getBackingStore()->set('metadata', $value);
    }

    /**
     * Sets the orderBy property value. Ordering of columns in the report
     * @param array<string>|null $value Value to set for the orderBy property.
    */
    public function setOrderBy(?array $value): void {
        $this->getBackingStore()->set('orderBy', $value);
    }

    /**
     * Sets the reportName property value. Name of the report
     * @param string|null $value Value to set for the reportName property.
    */
    public function setReportName(?string $value): void {
        $this->getBackingStore()->set('reportName', $value);
    }

    /**
     * Sets the select property value. Columns selected from the report
     * @param array<string>|null $value Value to set for the select property.
    */
    public function setSelect(?array $value): void {
        $this->getBackingStore()->set('select', $value);
    }

    /**
     * Sets the status property value. Possible statuses associated with a generated report
     * @param DeviceManagementReportStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceManagementReportStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
