<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcExportJob extends Entity implements Parsable 
{
    /**
     * Instantiates a new cloudPcExportJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcExportJob
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcExportJob {
        return new CloudPcExportJob();
    }

    /**
     * Gets the expirationDateTime property value. The date and time when the export job expires.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * Gets the exportJobStatus property value. The status of the export job. The possible values are: notStarted, inProgress, completed, unknownFutureValue. Read-only.
     * @return CloudPcExportJobStatus|null
    */
    public function getExportJobStatus(): ?CloudPcExportJobStatus {
        return $this->getBackingStore()->get('exportJobStatus');
    }

    /**
     * Gets the exportUrl property value. The storage account URL of the exported report. It can be used to download the file.
     * @return string|null
    */
    public function getExportUrl(): ?string {
        return $this->getBackingStore()->get('exportUrl');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'exportJobStatus' => fn(ParseNode $n) => $o->setExportJobStatus($n->getEnumValue(CloudPcExportJobStatus::class)),
            'exportUrl' => fn(ParseNode $n) => $o->setExportUrl($n->getStringValue()),
            'filter' => fn(ParseNode $n) => $o->setFilter($n->getStringValue()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'reportName' => fn(ParseNode $n) => $o->setReportName($n->getEnumValue(CloudPcReportName::class)),
            'requestDateTime' => fn(ParseNode $n) => $o->setRequestDateTime($n->getDateTimeValue()),
            'select' => fn(ParseNode $n) => $o->setSelect($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the filter property value. The filter applied on the report.
     * @return string|null
    */
    public function getFilter(): ?string {
        return $this->getBackingStore()->get('filter');
    }

    /**
     * Gets the format property value. The format of the exported report.
     * @return string|null
    */
    public function getFormat(): ?string {
        return $this->getBackingStore()->get('format');
    }

    /**
     * Gets the reportName property value. The report name. The possible values are: remoteConnectionHistoricalReports, dailyAggregatedRemoteConnectionReports, totalAggregatedRemoteConnectionReports, sharedUseLicenseUsageReport, sharedUseLicenseUsageRealTimeReport noLicenseAvailableConnectivityFailureReport, or unknownFutureValue.
     * @return CloudPcReportName|null
    */
    public function getReportName(): ?CloudPcReportName {
        return $this->getBackingStore()->get('reportName');
    }

    /**
     * Gets the requestDateTime property value. The date and time when the export job was requested.
     * @return DateTime|null
    */
    public function getRequestDateTime(): ?DateTime {
        return $this->getBackingStore()->get('requestDateTime');
    }

    /**
     * Gets the select property value. The selected columns of the report.
     * @return array<string>|null
    */
    public function getSelect(): ?array {
        return $this->getBackingStore()->get('select');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeEnumValue('exportJobStatus', $this->getExportJobStatus());
        $writer->writeStringValue('exportUrl', $this->getExportUrl());
        $writer->writeStringValue('filter', $this->getFilter());
        $writer->writeStringValue('format', $this->getFormat());
        $writer->writeEnumValue('reportName', $this->getReportName());
        $writer->writeDateTimeValue('requestDateTime', $this->getRequestDateTime());
        $writer->writeCollectionOfPrimitiveValues('select', $this->getSelect());
    }

    /**
     * Sets the expirationDateTime property value. The date and time when the export job expires.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the exportJobStatus property value. The status of the export job. The possible values are: notStarted, inProgress, completed, unknownFutureValue. Read-only.
     * @param CloudPcExportJobStatus|null $value Value to set for the exportJobStatus property.
    */
    public function setExportJobStatus(?CloudPcExportJobStatus $value): void {
        $this->getBackingStore()->set('exportJobStatus', $value);
    }

    /**
     * Sets the exportUrl property value. The storage account URL of the exported report. It can be used to download the file.
     * @param string|null $value Value to set for the exportUrl property.
    */
    public function setExportUrl(?string $value): void {
        $this->getBackingStore()->set('exportUrl', $value);
    }

    /**
     * Sets the filter property value. The filter applied on the report.
     * @param string|null $value Value to set for the filter property.
    */
    public function setFilter(?string $value): void {
        $this->getBackingStore()->set('filter', $value);
    }

    /**
     * Sets the format property value. The format of the exported report.
     * @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the reportName property value. The report name. The possible values are: remoteConnectionHistoricalReports, dailyAggregatedRemoteConnectionReports, totalAggregatedRemoteConnectionReports, sharedUseLicenseUsageReport, sharedUseLicenseUsageRealTimeReport noLicenseAvailableConnectivityFailureReport, or unknownFutureValue.
     * @param CloudPcReportName|null $value Value to set for the reportName property.
    */
    public function setReportName(?CloudPcReportName $value): void {
        $this->getBackingStore()->set('reportName', $value);
    }

    /**
     * Sets the requestDateTime property value. The date and time when the export job was requested.
     * @param DateTime|null $value Value to set for the requestDateTime property.
    */
    public function setRequestDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('requestDateTime', $value);
    }

    /**
     * Sets the select property value. The selected columns of the report.
     * @param array<string>|null $value Value to set for the select property.
    */
    public function setSelect(?array $value): void {
        $this->getBackingStore()->set('select', $value);
    }

}
