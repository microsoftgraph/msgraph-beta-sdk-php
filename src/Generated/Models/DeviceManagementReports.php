<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeviceManagementReports extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementReports and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementReports
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementReports {
        return new DeviceManagementReports();
    }

    /**
     * Gets the cachedReportConfigurations property value. Entity representing the configuration of a cached report.
     * @return array<DeviceManagementCachedReportConfiguration>|null
    */
    public function getCachedReportConfigurations(): ?array {
        $val = $this->getBackingStore()->get('cachedReportConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementCachedReportConfiguration::class);
            /** @var array<DeviceManagementCachedReportConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cachedReportConfigurations'");
    }

    /**
     * Gets the exportJobs property value. Entity representing a job to export a report.
     * @return array<DeviceManagementExportJob>|null
    */
    public function getExportJobs(): ?array {
        $val = $this->getBackingStore()->get('exportJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementExportJob::class);
            /** @var array<DeviceManagementExportJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exportJobs'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cachedReportConfigurations' => fn(ParseNode $n) => $o->setCachedReportConfigurations($n->getCollectionOfObjectValues([DeviceManagementCachedReportConfiguration::class, 'createFromDiscriminatorValue'])),
            'exportJobs' => fn(ParseNode $n) => $o->setExportJobs($n->getCollectionOfObjectValues([DeviceManagementExportJob::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('cachedReportConfigurations', $this->getCachedReportConfigurations());
        $writer->writeCollectionOfObjectValues('exportJobs', $this->getExportJobs());
    }

    /**
     * Sets the cachedReportConfigurations property value. Entity representing the configuration of a cached report.
     * @param array<DeviceManagementCachedReportConfiguration>|null $value Value to set for the cachedReportConfigurations property.
    */
    public function setCachedReportConfigurations(?array $value): void {
        $this->getBackingStore()->set('cachedReportConfigurations', $value);
    }

    /**
     * Sets the exportJobs property value. Entity representing a job to export a report.
     * @param array<DeviceManagementExportJob>|null $value Value to set for the exportJobs property.
    */
    public function setExportJobs(?array $value): void {
        $this->getBackingStore()->set('exportJobs', $value);
    }

}
