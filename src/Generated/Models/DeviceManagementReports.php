<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementReports extends Entity implements Parsable 
{
    /**
     * @var array<DeviceManagementCachedReportConfiguration>|null $cachedReportConfigurations Entity representing the configuration of a cached report
    */
    private ?array $cachedReportConfigurations = null;
    
    /**
     * @var array<DeviceManagementExportJob>|null $exportJobs Entity representing a job to export a report
    */
    private ?array $exportJobs = null;
    
    /**
     * Instantiates a new deviceManagementReports and sets the default values.
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
     * Gets the cachedReportConfigurations property value. Entity representing the configuration of a cached report
     * @return array<DeviceManagementCachedReportConfiguration>|null
    */
    public function getCachedReportConfigurations(): ?array {
        return $this->cachedReportConfigurations;
    }

    /**
     * Gets the exportJobs property value. Entity representing a job to export a report
     * @return array<DeviceManagementExportJob>|null
    */
    public function getExportJobs(): ?array {
        return $this->exportJobs;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cachedReportConfigurations' => function (ParseNode $n) use ($o) { $o->setCachedReportConfigurations($n->getCollectionOfObjectValues(array(DeviceManagementCachedReportConfiguration::class, 'createFromDiscriminatorValue'))); },
            'exportJobs' => function (ParseNode $n) use ($o) { $o->setExportJobs($n->getCollectionOfObjectValues(array(DeviceManagementExportJob::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('cachedReportConfigurations', $this->cachedReportConfigurations);
        $writer->writeCollectionOfObjectValues('exportJobs', $this->exportJobs);
    }

    /**
     * Sets the cachedReportConfigurations property value. Entity representing the configuration of a cached report
     *  @param array<DeviceManagementCachedReportConfiguration>|null $value Value to set for the cachedReportConfigurations property.
    */
    public function setCachedReportConfigurations(?array $value ): void {
        $this->cachedReportConfigurations = $value;
    }

    /**
     * Sets the exportJobs property value. Entity representing a job to export a report
     *  @param array<DeviceManagementExportJob>|null $value Value to set for the exportJobs property.
    */
    public function setExportJobs(?array $value ): void {
        $this->exportJobs = $value;
    }

}
