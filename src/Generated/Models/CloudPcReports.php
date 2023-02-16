<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcReports extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcReports and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcReports
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcReports {
        return new CloudPcReports();
    }

    /**
     * Gets the exportJobs property value. The export jobs created for downloading reports.
     * @return array<CloudPcExportJob>|null
    */
    public function getExportJobs(): ?array {
        return $this->getBackingStore()->get('exportJobs');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exportJobs' => fn(ParseNode $n) => $o->setExportJobs($n->getCollectionOfObjectValues([CloudPcExportJob::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('exportJobs', $this->getExportJobs());
    }

    /**
     * Sets the exportJobs property value. The export jobs created for downloading reports.
     * @param array<CloudPcExportJob>|null $value Value to set for the exportJobs property.
    */
    public function setExportJobs(?array $value): void {
        $this->getBackingStore()->set('exportJobs', $value);
    }

}
