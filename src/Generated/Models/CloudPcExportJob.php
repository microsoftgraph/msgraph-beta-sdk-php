<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcExportJob extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $expirationDateTime The date time when the export job expires.
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var CloudPcExportJobStatus|null $exportJobStatus The status of the export job.The possible values are: notStarted, inProgress, completed, unknownFutureValue. Read-only.
    */
    private ?CloudPcExportJobStatus $exportJobStatus = null;
    
    /**
     * @var string|null $exportUrl The storage account url of the exported report, it can be used to download the file.
    */
    private ?string $exportUrl = null;
    
    /**
     * @var string|null $filter The filter applied on the report.
    */
    private ?string $filter = null;
    
    /**
     * @var string|null $format The format of the exported report.
    */
    private ?string $format = null;
    
    /**
     * @var CloudPcReportName|null $reportName The report name.The possible values are: remoteConnectionHistoricalReports, dailyAggregatedRemoteConnectionReports, totalAggregatedRemoteConnectionReports, unknownFutureValue.
    */
    private ?CloudPcReportName $reportName = null;
    
    /**
     * @var DateTime|null $requestDateTime The date time when the export job was requested.
    */
    private ?DateTime $requestDateTime = null;
    
    /**
     * @var array<string>|null $select The selected columns of the report.
    */
    private ?array $select = null;
    
    /**
     * Instantiates a new CloudPcExportJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcExportJob');
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
     * Gets the expirationDateTime property value. The date time when the export job expires.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * Gets the exportJobStatus property value. The status of the export job.The possible values are: notStarted, inProgress, completed, unknownFutureValue. Read-only.
     * @return CloudPcExportJobStatus|null
    */
    public function getExportJobStatus(): ?CloudPcExportJobStatus {
        return $this->exportJobStatus;
    }

    /**
     * Gets the exportUrl property value. The storage account url of the exported report, it can be used to download the file.
     * @return string|null
    */
    public function getExportUrl(): ?string {
        return $this->exportUrl;
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
        return $this->filter;
    }

    /**
     * Gets the format property value. The format of the exported report.
     * @return string|null
    */
    public function getFormat(): ?string {
        return $this->format;
    }

    /**
     * Gets the reportName property value. The report name.The possible values are: remoteConnectionHistoricalReports, dailyAggregatedRemoteConnectionReports, totalAggregatedRemoteConnectionReports, unknownFutureValue.
     * @return CloudPcReportName|null
    */
    public function getReportName(): ?CloudPcReportName {
        return $this->reportName;
    }

    /**
     * Gets the requestDateTime property value. The date time when the export job was requested.
     * @return DateTime|null
    */
    public function getRequestDateTime(): ?DateTime {
        return $this->requestDateTime;
    }

    /**
     * Gets the select property value. The selected columns of the report.
     * @return array<string>|null
    */
    public function getSelect(): ?array {
        return $this->select;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeEnumValue('exportJobStatus', $this->exportJobStatus);
        $writer->writeStringValue('exportUrl', $this->exportUrl);
        $writer->writeStringValue('filter', $this->filter);
        $writer->writeStringValue('format', $this->format);
        $writer->writeEnumValue('reportName', $this->reportName);
        $writer->writeDateTimeValue('requestDateTime', $this->requestDateTime);
        $writer->writeCollectionOfPrimitiveValues('select', $this->select);
    }

    /**
     * Sets the expirationDateTime property value. The date time when the export job expires.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the exportJobStatus property value. The status of the export job.The possible values are: notStarted, inProgress, completed, unknownFutureValue. Read-only.
     *  @param CloudPcExportJobStatus|null $value Value to set for the exportJobStatus property.
    */
    public function setExportJobStatus(?CloudPcExportJobStatus $value ): void {
        $this->exportJobStatus = $value;
    }

    /**
     * Sets the exportUrl property value. The storage account url of the exported report, it can be used to download the file.
     *  @param string|null $value Value to set for the exportUrl property.
    */
    public function setExportUrl(?string $value ): void {
        $this->exportUrl = $value;
    }

    /**
     * Sets the filter property value. The filter applied on the report.
     *  @param string|null $value Value to set for the filter property.
    */
    public function setFilter(?string $value ): void {
        $this->filter = $value;
    }

    /**
     * Sets the format property value. The format of the exported report.
     *  @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the reportName property value. The report name.The possible values are: remoteConnectionHistoricalReports, dailyAggregatedRemoteConnectionReports, totalAggregatedRemoteConnectionReports, unknownFutureValue.
     *  @param CloudPcReportName|null $value Value to set for the reportName property.
    */
    public function setReportName(?CloudPcReportName $value ): void {
        $this->reportName = $value;
    }

    /**
     * Sets the requestDateTime property value. The date time when the export job was requested.
     *  @param DateTime|null $value Value to set for the requestDateTime property.
    */
    public function setRequestDateTime(?DateTime $value ): void {
        $this->requestDateTime = $value;
    }

    /**
     * Sets the select property value. The selected columns of the report.
     *  @param array<string>|null $value Value to set for the select property.
    */
    public function setSelect(?array $value ): void {
        $this->select = $value;
    }

}
