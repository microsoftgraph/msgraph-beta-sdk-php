<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcExportJob extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcExportJob and sets the default values.
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
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * Gets the exportJobStatus property value. The status of the export job. The possible values are: notStarted, inProgress, completed, unknownFutureValue. Read-only.
     * @return CloudPcExportJobStatus|null
    */
    public function getExportJobStatus(): ?CloudPcExportJobStatus {
        $val = $this->getBackingStore()->get('exportJobStatus');
        if (is_null($val) || $val instanceof CloudPcExportJobStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportJobStatus'");
    }

    /**
     * Gets the exportUrl property value. The storage account URL of the exported report. It can be used to download the file.
     * @return string|null
    */
    public function getExportUrl(): ?string {
        $val = $this->getBackingStore()->get('exportUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'select' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSelect($val);
            },
        ]);
    }

    /**
     * Gets the filter property value. The filter applied on the report.
     * @return string|null
    */
    public function getFilter(): ?string {
        $val = $this->getBackingStore()->get('filter');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filter'");
    }

    /**
     * Gets the format property value. The format of the exported report.
     * @return string|null
    */
    public function getFormat(): ?string {
        $val = $this->getBackingStore()->get('format');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'format'");
    }

    /**
     * Gets the reportName property value. The report name. The possible values are: remoteConnectionHistoricalReports, dailyAggregatedRemoteConnectionReports, totalAggregatedRemoteConnectionReports, sharedUseLicenseUsageReport, sharedUseLicenseUsageRealTimeReport, unknownFutureValue,  noLicenseAvailableConnectivityFailureReport, frontlineLicenseUsageReport, frontlineLicenseUsageRealTimeReport,  remoteConnectionQualityReports, inaccessibleCloudPcReports, actionStatusReport, rawRemoteConnectionReports, cloudPcUsageCategoryReports, crossRegionDisasterRecoveryReport, regionalConnectionQualityTrendReport, regionalConnectionQualityInsightsReport, remoteConnectionQualityReport, bulkActionStatusReport. You must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: noLicenseAvailableConnectivityFailureReport, frontlineLicenseUsageReport, frontlineLicenseUsageRealTimeReport, remoteConnectionQualityReports, inaccessibleCloudPcReports, rawRemoteConnectionReports, cloudPcUsageCategoryReports, crossRegionDisasterRecoveryReport.
     * @return CloudPcReportName|null
    */
    public function getReportName(): ?CloudPcReportName {
        $val = $this->getBackingStore()->get('reportName');
        if (is_null($val) || $val instanceof CloudPcReportName) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reportName'");
    }

    /**
     * Gets the requestDateTime property value. The date and time when the export job was requested.
     * @return DateTime|null
    */
    public function getRequestDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('requestDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestDateTime'");
    }

    /**
     * Gets the select property value. The selected columns of the report.
     * @return array<string>|null
    */
    public function getSelect(): ?array {
        $val = $this->getBackingStore()->get('select');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'select'");
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
     * Sets the reportName property value. The report name. The possible values are: remoteConnectionHistoricalReports, dailyAggregatedRemoteConnectionReports, totalAggregatedRemoteConnectionReports, sharedUseLicenseUsageReport, sharedUseLicenseUsageRealTimeReport, unknownFutureValue,  noLicenseAvailableConnectivityFailureReport, frontlineLicenseUsageReport, frontlineLicenseUsageRealTimeReport,  remoteConnectionQualityReports, inaccessibleCloudPcReports, actionStatusReport, rawRemoteConnectionReports, cloudPcUsageCategoryReports, crossRegionDisasterRecoveryReport, regionalConnectionQualityTrendReport, regionalConnectionQualityInsightsReport, remoteConnectionQualityReport, bulkActionStatusReport. You must use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: noLicenseAvailableConnectivityFailureReport, frontlineLicenseUsageReport, frontlineLicenseUsageRealTimeReport, remoteConnectionQualityReports, inaccessibleCloudPcReports, rawRemoteConnectionReports, cloudPcUsageCategoryReports, crossRegionDisasterRecoveryReport.
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
