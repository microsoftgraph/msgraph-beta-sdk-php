<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementCachedReportConfiguration extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $expirationDateTime Time that the cached report expires
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var string|null $filter Filters applied on report creation.
    */
    private ?string $filter = null;
    
    /**
     * @var DateTime|null $lastRefreshDateTime Time that the cached report was last refreshed
    */
    private ?DateTime $lastRefreshDateTime = null;
    
    /**
     * @var string|null $metadata Caller-managed metadata associated with the report
    */
    private ?string $metadata = null;
    
    /**
     * @var array<string>|null $orderBy Ordering of columns in the report
    */
    private ?array $orderBy = null;
    
    /**
     * @var string|null $reportName Name of the report
    */
    private ?string $reportName = null;
    
    /**
     * @var array<string>|null $select Columns selected from the report
    */
    private ?array $select = null;
    
    /**
     * @var DeviceManagementReportStatus|null $status Status of the cached report. Possible values are: unknown, notStarted, inProgress, completed, failed.
    */
    private ?DeviceManagementReportStatus $status = null;
    
    /**
     * Instantiates a new deviceManagementCachedReportConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the expirationDateTime property value. Time that the cached report expires
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'filter' => function (ParseNode $n) use ($o) { $o->setFilter($n->getStringValue()); },
            'lastRefreshDateTime' => function (ParseNode $n) use ($o) { $o->setLastRefreshDateTime($n->getDateTimeValue()); },
            'metadata' => function (ParseNode $n) use ($o) { $o->setMetadata($n->getStringValue()); },
            'orderBy' => function (ParseNode $n) use ($o) { $o->setOrderBy($n->getCollectionOfPrimitiveValues()); },
            'reportName' => function (ParseNode $n) use ($o) { $o->setReportName($n->getStringValue()); },
            'select' => function (ParseNode $n) use ($o) { $o->setSelect($n->getCollectionOfPrimitiveValues()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(DeviceManagementReportStatus::class)); },
        ]);
    }

    /**
     * Gets the filter property value. Filters applied on report creation.
     * @return string|null
    */
    public function getFilter(): ?string {
        return $this->filter;
    }

    /**
     * Gets the lastRefreshDateTime property value. Time that the cached report was last refreshed
     * @return DateTime|null
    */
    public function getLastRefreshDateTime(): ?DateTime {
        return $this->lastRefreshDateTime;
    }

    /**
     * Gets the metadata property value. Caller-managed metadata associated with the report
     * @return string|null
    */
    public function getMetadata(): ?string {
        return $this->metadata;
    }

    /**
     * Gets the orderBy property value. Ordering of columns in the report
     * @return array<string>|null
    */
    public function getOrderBy(): ?array {
        return $this->orderBy;
    }

    /**
     * Gets the reportName property value. Name of the report
     * @return string|null
    */
    public function getReportName(): ?string {
        return $this->reportName;
    }

    /**
     * Gets the select property value. Columns selected from the report
     * @return array<string>|null
    */
    public function getSelect(): ?array {
        return $this->select;
    }

    /**
     * Gets the status property value. Status of the cached report. Possible values are: unknown, notStarted, inProgress, completed, failed.
     * @return DeviceManagementReportStatus|null
    */
    public function getStatus(): ?DeviceManagementReportStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('filter', $this->filter);
        $writer->writeDateTimeValue('lastRefreshDateTime', $this->lastRefreshDateTime);
        $writer->writeStringValue('metadata', $this->metadata);
        $writer->writeCollectionOfPrimitiveValues('orderBy', $this->orderBy);
        $writer->writeStringValue('reportName', $this->reportName);
        $writer->writeCollectionOfPrimitiveValues('select', $this->select);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the expirationDateTime property value. Time that the cached report expires
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the filter property value. Filters applied on report creation.
     *  @param string|null $value Value to set for the filter property.
    */
    public function setFilter(?string $value ): void {
        $this->filter = $value;
    }

    /**
     * Sets the lastRefreshDateTime property value. Time that the cached report was last refreshed
     *  @param DateTime|null $value Value to set for the lastRefreshDateTime property.
    */
    public function setLastRefreshDateTime(?DateTime $value ): void {
        $this->lastRefreshDateTime = $value;
    }

    /**
     * Sets the metadata property value. Caller-managed metadata associated with the report
     *  @param string|null $value Value to set for the metadata property.
    */
    public function setMetadata(?string $value ): void {
        $this->metadata = $value;
    }

    /**
     * Sets the orderBy property value. Ordering of columns in the report
     *  @param array<string>|null $value Value to set for the orderBy property.
    */
    public function setOrderBy(?array $value ): void {
        $this->orderBy = $value;
    }

    /**
     * Sets the reportName property value. Name of the report
     *  @param string|null $value Value to set for the reportName property.
    */
    public function setReportName(?string $value ): void {
        $this->reportName = $value;
    }

    /**
     * Sets the select property value. Columns selected from the report
     *  @param array<string>|null $value Value to set for the select property.
    */
    public function setSelect(?array $value ): void {
        $this->select = $value;
    }

    /**
     * Sets the status property value. Status of the cached report. Possible values are: unknown, notStarted, inProgress, completed, failed.
     *  @param DeviceManagementReportStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceManagementReportStatus $value ): void {
        $this->status = $value;
    }

}
